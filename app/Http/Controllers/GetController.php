<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\YouTube\YouTubeDownloader;
use App\Helpers\Instagram\InstagramDownload;
use App\Helpers\Twitter\TwitterDownloader;
use App\ApiKey;

class GetController extends Controller
{
    public function getDownloadLinks()
    {
        $data['url'] = '';
        $data['source'] = '';
        $error_code = array("Missing Parameter", "Invalid Parameter Value", "Invalid API Key");
        $error_message = array(
            "Parameter yang diperlukan tidak diatur. Silahkan atur parameter berikut dan coba lagi: source, url, apikey",
            "Nilai parameter tidak valid. Silahkan atur parameter source dengan nilai berikut dan coba lagi: instagram, twitter, youtube",
            "API key tidak valid atau telah expired. Silahkan coba lagi."
        );

        if (isset($_GET['url']) && isset($_GET['source']) && isset($_GET['apikey'])){
            if ($_GET['url'] == '' || $_GET['source'] == '' || $_GET['apikey'] == ''){
                $error['code'] = "400 - ".$error_code[0];
                $error['message'] = $error_message[0];
                return response(view('error_views.errors', $error), 400, ['Content-Type' => 'application/json']);
            } else {
                $data['url'] = $_GET['url'];
                $data['source'] = $_GET['source'];
                $api_key = $_GET['apikey'];
                $isApiKeyValid = $this->isApiKeyValid($api_key);

                if ($isApiKeyValid)
                {
                    switch($data['source']){
                        case 'youtube':
                            $youtube = new YouTubeDownloader();
                            $data['links'] = $youtube->getDownloadLinks($data['url']);
                            break;
                        case 'instagram':
                            $instagram = new InstagramDownload($data['url']);
                            $data['links'] = array(
                                array(
                                    "url" => $instagram->getDownloadUrl(),
                                    "type" => $instagram->getType()
                                )
                            );
                            break;
                        case 'twitter':
                            $twitter = new TwitterDownloader($data['url']);
                            $data['links'] = $twitter->getTweetVideo();
                            break;
                        default:
                            $error['code'] = "400 - ".$error_code[1];
                            $error['message'] = $error_message[1];
                            return response(view('error_views.errors', $error), 400, ['Content-Type' => 'application/json']);
                    }

                    return response(view('getresponse', $data), 200, ['Content-Type' => 'application/json']);
                } else {
                    $error['code'] = "400 - ".$error_code[2];
                    $error['message'] = $error_message[2];
                    return response(view('error_views.errors', $error), 400, ['Content-Type' => 'application/json']);
                }
            }
        } else {
            $error['code'] = "400 - ".$error_code[0];
            $error['message'] = $error_message[0];
            return response(view('error_views.errors', $error), 400, ['Content-Type' => 'application/json']);
        }
    }

    private function isApiKeyValid($api_key)
    {
        $this->updateKeyStatus();

        $results = ApiKey::where('api_key', $api_key)
        ->where('valid', 1)
        ->count();

        if ($results > 0) {
            return true;
        }

        return false;
    }

    private function updateKeyStatus()
    {
        $now = date("Y-m-d H:i:s");
        ApiKey::where('expire_pada', '<' , $now)
        ->update(['valid' => 0]);
    }
}
