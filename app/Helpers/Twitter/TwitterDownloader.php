<?php
namespace App\Helpers\Twitter;

use App\Helpers\Twitter\TwitterOAuth\TwitterOAuth;

class TwitterDownloader {

	private $tweet_id;
	private $tweet;

	private $consumer_key = "dob4Ba0uV2ldU2BXK3x4VdqhT";
	private $consumer_secret_key = "yEJ9Z51GgaOqd5KN11iFJxrV27mnZy4GugbBHM7EETCG0hhNW6";

	private $access_token = "934412063614550017-nEqBWg0PQptmugRfoMwrH9FFhaEaHOj";
	private $access_token_secret = "5zfOZT87j8jEicfxV4DGl9XQAHgcDu4mj3IH0ZoAP3t1V";

	private $connection;
	private $content;

	public function __construct(string $url) {
		$this->setTweetId($url);
		$this->connection = new TwitterOAuth($this->consumer_key, $this->consumer_secret_key, $this->access_token, $this->access_token_secret);
		$this->content = $this->connection->get("account/verify_credentials");
		$this->tweet = $this->getTweetInfo($this->connection, $this->tweet_id);
	}

	private function setTweetId(string $url) {
		$regex  = '#https?://twitter\.com/(?:\#!/)?(\w+)/status(es)?/(\d+)#is';

		if (preg_match($regex, $url, $match)) {
			$this->tweet_id = $match[3];
		}
	}

	public function getTweetInfo($connection, $tweetid){
		$tweet = $connection->get('statuses/show', [
		  'id' => $tweetid,
		  'tweet_mode' => 'extended',
		  'include_entities' => 'true'
		]);
		return $tweet;
	}

	public function getTweetImage(){
		return $this->tweet->extended_entities->media[0]->media_url;
	}

	public function getTweetText(){
		return $this->tweet->full_text;
	}

	public function getTweetVideo(){
		$sizeOfArray = count($this->tweet->extended_entities->media[0]->video_info->variants);

		$videoUrls = Array();
		$videoUrlsIndexPoint = 0;
		for($i = 0; $i< $sizeOfArray; $i++){
			// can be video/mp4 , application/x-mpegURL
			$typeOfContent = $this->tweet->extended_entities->media[0]->video_info->variants[$i]->content_type;

			if($typeOfContent == "video/mp4"){
				$videoUrls[$videoUrlsIndexPoint]["bitrate"] = $this->tweet->extended_entities->media[0]->video_info->variants[$i]->bitrate;
				$videoUrls[$videoUrlsIndexPoint]["url"] = $this->cleanParametersFromUrl($this->tweet->extended_entities->media[0]->video_info->variants[$i]->url);
			//Have to make index point+1 on each object added.
			$videoUrlsIndexPoint++;
			}
		}

		return $videoUrls;
	}

	private function cleanParametersFromUrl($url){

		// If URL has ? paramters.
		if(strpos($url, '?') !== false){

			//Catch and select first part.
			$urlarray = explode("?",$url);
			$newurl = $urlarray[0];

		}else{

			$newurl = $url;

		}

		return $newurl;
	}
}

?>
