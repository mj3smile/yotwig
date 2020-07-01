<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dokumentasi | yotwigAPI</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="YOTWIG API documentation">
    <meta name="author" content="YOTWIG Team">

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,,500,600,700" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- FontAwesome JS-->
    <script defer src="{{url('assets/dokumentasi/fontawesome/js/all.min.js')}}"></script>

    <!-- Plugins CSS -->
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.2/styles/atom-one-dark.min.css">

	<link id="theme-style" rel="stylesheet" href="{{url('assets/dokumentasi/css/open-iconic-bootstrap.min.css')}}">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="{{url('assets/dokumentasi/css/theme.css')}}">

</head>

<body class="docs-page">

	<nav class="navbar navbar-expand-lg fixed-top ftco-navbar-light">
	    <div class="container pt-20p">
	      <a class="navbar-brand" href="{{url('/')}}"><img class="logo-icon" src="{{url('assets/dokumentasi/images/brand.png')}}" alt="Logo"></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
			  <li class="nav-item"><a href="https://github.com/mj3smile/yotwigapi" target="_blank" class="nav-link"><i class="fab fa-github fa-fw"></i></a></li>
	            @if(Session::has('email'))
                <li class="nav-item cta"><a href="{{url('user/profile')}}" class="nav-link"><span>{{Session::get('email')}}</span></a></li>
                @else
                <li class="nav-item cta"><a href="{{url('user/register')}}" class="nav-link"><span>Dapatkan API key</span></a></li>
                @endif
	        </ul>
	      </div>
	    </div>
	</nav><!-- END nav -->

    <div class="docs-wrapper">
	    <div id="docs-sidebar" class="docs-sidebar pt-20p-fixed">
		    <div class="top-search-box d-lg-none p-3">
                <form class="search-form">
		            <input type="text" placeholder="Search the docs..." name="search" class="form-control search-input">
		            <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
		        </form>
            </div>
		    <nav id="docs-nav" class="docs-nav navbar">
			    <ul class="section-items list-unstyled nav flex-column pb-3">
				    <li class="nav-item section-title"><a class="nav-link scrollto active" href="#section-1"><span class="theme-icon-holder mr-2"><i class="fas fa-map-signs"></i></span>Memulai</a></li>
				    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-2"><span class="theme-icon-holder mr-2"><i class="fas fa-arrow-down"></i></span>Mendapatkan API key</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-2-1">Membuat akun YOTWIG</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-2-2">Mendapatkan API key melalui dashboard user</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-2-3">Mendapatkan API key melalui HTTP Request</a></li>
				    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-3"><span class="theme-icon-holder mr-2"><i class="fas fa-box"></i></span>Endpoint utama</a></li>
				    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-4"><span class="theme-icon-holder mr-2"><i class="fas fa-lightbulb"></i></span>FAQs</a></li>
			    </ul>

		    </nav><!--//docs-nav-->
	    </div><!--//docs-sidebar-->
	    <div class="docs-content pt-20p-fixed">
		    <div class="container">
			    <article class="docs-article" id="section-1">
				    <header class="docs-header">
					    <h1 class="docs-heading">Memulai <span class="docs-time">Terakhir diperbaharui: 2020-06-15</span></h1>
					    <section class="docs-intro">
							<p>Untuk mulai menggunakan API YOTWIG, anda membutuhkan API key. API yang kami sediakan 100% gratis dan anda hanya perlu mendapatkan API key nya dengan mengikuti panduan ini.</p>

							<p>Kami juga berasumsi anda memiliki pengetahuan dalam melakukan web request sesuai dengan bahasa pemrograman yang anda pilih.</p>
						</section><!--//docs-intro-->
				    </header>
			    </article>

			    <article class="docs-article" id="section-2">
				    <header class="docs-header">
					    <h1 class="docs-heading">Mendapatkan API key</h1>
					    <section class="docs-intro">
						    <p>API key dibutuhkan sebagai autentikasi pada saat melakukan request terhadap endpoint utama. API key bisa didapatkan dengan mengikuti tahapan-tahapan berikut.</p>
						</section><!--//docs-intro-->
				    </header>
				     <section class="docs-section" id="item-2-1">
						<h2 class="section-heading">Membuat akun YOTWIG developer</h2>
						<p>Untuk mendapatkan API key, anda harus membuat akun terlebih dahulu. Registrasi dapat dilakukan melalui <a href="{{url('user/register')}}" target="_blank">halaman ini</a>. Setelah melakukan registrasi, silahkan login menggunakan kredensial yang anda daftarkan saat registrasi melalui <a href="{{url('user/login')}}" target="_blank">halaman ini</a>.</p>
					</section><!--//section-->

					<section class="docs-section" id="item-2-2">
						<h2 class="section-heading">Mendapatkan API key melalui dashboard user</h2>
						<p>Bila telah memiliki akun YOTWIG, anda bisa mendapatkan API key melalui dashboard user dengan menekan tombol <span style="padding: 0.3rem; font-size: 0.7rem;" class="btn btn-success">Buat API key baru</span> pada halaman utama dashboard user.</p>
						<h5>Panduan mendapatkan API key melalui dashboard user:</h5>
						<figure class="figure docs-figure py-3">
							<a href="{{url('assets/dokumentasi/images/features/buatapikeybaru.gif')}}"><img class="figure-img img-fluid shadow rounded" src="{{url('assets/dokumentasi/images/features/buatapikeybaru.gif')}}" alt="" style="width: 600px;"></a>
						</figure>
					</section><!--//section-->

					<section class="docs-section" id="item-2-3">
						<h2 class="section-heading">Mendapatkan API key melalui HTTP Request</h2>
						<p>Cara lain untuk mendapatkan API key adalah dengan melakukan HTTP request. Cara ini dilakukan dengan menggunakan metode <strong>post</strong> pada endpoint <code>api.yotwig.com/key</code>.</p>

						<h5>Parameter yang diperlukan:</h5>
						<div class="table-responsive my-4">
							<table class="table table-striped">
								<thead>
									<tr>
										<th scope="col">Metode</th>
										<th scope="col">Parameter</th>
										<th scope="col">Tipe</th>
										<th scope="col">Keterangan</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">POST</th>
										<td>email</td>
										<td>String</td>
										<td>Email akun yang didaftarkan saat melakukan registrasi akun</td>
									</tr>
									<tr>
										<th scope="row">POST</th>
										<td>password</td>
										<td>String</td>
										<td>Password yang didaftarkan saat melakukan registrasi akun</td>
									</tr>
								</tbody>
							</table>
						</div>
						<h5>Contoh response yang didapatkan:</h5>
						<div class="table-responsive mt-4">
							<table class="table table-striped">
								<tbody>
									<tr>
										<th style="width: 10%;"><button class="btn btn-success">POST</button></th>
										<td><code>https://api.yotwig.com/key</code></td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="docs-code-block">
							<pre class="shadow-lg rounded">
<code class="json hljs">
{
	"status": "ok",
	"code": "200 - Valid",
	"result": {
		"email": "contohuser@mail.com",
		"api_key": {
			"api_key": "96b7ce9b6d89ae5f8544d19c5360cf5c",
			"dibuat_pada": "2020-06-14 09:44:35",
			"expire_pada": "2020-06-14 11:44:35"
		}
	}
}

</code></pre>
						</div>
						<div class="callout-block callout-block-info">

                            <div class="content">
                                <h4 class="callout-title">
	                                <span class="callout-icon-holder mr-1">
		                                <i class="fas fa-info-circle"></i>
		                            </span><!--//icon-holder-->
	                                Catatan
	                            </h4>
                                <p>Setiap API key hanya dapat digunakan selama 2 jam terhitung dari saat API key pertama kali dibuat. Setelah API key expired, harap melakukan pembuatan API key ulang untuk terus menggunakan API dari YOTWIG.</p>
                            </div><!--//content-->
                        </div><!--//callout-block-->
					</section><!--//section-->
			    </article><!--//docs-article-->


			    <article class="docs-article" id="section-3">
				    <header class="docs-header">
					    <h1 class="docs-heading">Menggunakan endpoint utama</h1>
					    <section class="docs-intro">
							<p>Endpoint utama dari YOTWIG API adalah <code>https://api.yotwig.com/get</code>. Endpoint ini akan mengembalikan respon berupa link unduhan dari konten video atau gambar yang bersumber dari <strong>Youtube</strong>, <strong>Twitter</strong>, atau <strong>Instagram</strong>.</p>

							<h5>Parameter yang diperlukan:</h5>
							<div class="table-responsive my-4">
								<table class="table table-striped">
									<thead>
										<tr>
											<th scope="col">Metode</th>
											<th scope="col">Parameter</th>
											<th scope="col">Tipe</th>
											<th scope="col">Keterangan</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">GET</th>
											<td>apikey</td>
											<td>String</td>
											<td>API key yang didapatkan dari hasil request pada endpoint <code>https://yotwig.com/key</code></td>
										</tr>
										<tr>
											<th scope="row">GET</th>
											<td>url</td>
											<td>String</td>
											<td>URL video atau post dari Youtube, Twitter, atau Instagram. <br>Contoh: <code>https://www.youtube.com/watch?v=jNQXAC9IVRw</code></td>
										</tr>
										<tr>
											<th scope="row">GET</th>
											<td>source</td>
											<td>String</td>
											<td>Sumber atau penyedia konten.<br>Contoh: <code>instagram</code></td>
										</tr>
									</tbody>
								</table>
							</div>
							<h5>Contoh url request dan response yang didapatkan:</h5>
							<div class="table-responsive mt-4">
								<table class="table table-striped">
									<tbody>
										<tr>
											<th scope="row"><button class="btn btn-success">GET</button></th>
											<td><code>https://api.yotwig.com/get?url=https://www.youtube.com/watch?v=jNQXAC9IVRw&source=youtube&apikey=4e9f64db8688bef5454711262966a3c9</code></td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="docs-code-block">
								<pre class="shadow-lg rounded">
<code class="json hljs">
{
	"status": "ok",
	"code": "200 - Valid",
	"results": {
		"source": "youtube",
		"url_content": "https://www.youtube.com/watch?v=jNQXAC9IVRw",
		"download_links": [
			{
				"url": "https://r2---sn-2uuxa3vh-hqje.googlevideo.com/videoplayback?expire=1592152024&ei=ePvlXuDFKuW_z7sPscyJ-A4&ip=118.98.121.194&id=o-AG6wbNKVVYN8UyOecnc7bNZrhdM73CuF0CLWRXXcgQMi&itag=18&source=youtube&requiressl=yes&mh=VD&mm=31%2C29&mn=sn-2uuxa3vh-hqje%2Csn-npoeen7d&ms=au%2Crdu&mv=m&mvi=1&pl=24&initcwndbps=136250&vprv=1&mime=video%2Fmp4&gir=yes&clen=790527&ratebypass=yes&dur=18.993&lmt=1524502661914999&mt=1592130334&fvip=2&c=WEB&sparams=expire%2Cei%2Cip%2Cid%2Citag%2Csource%2Crequiressl%2Cvprv%2Cmime%2Cgir%2Cclen%2Cratebypass%2Cdur%2Clmt&sig=AOq0QJ8wRQIhAJMM4Z8D6045ktDOWyXVKBHPn6k9zjqsnrHNCEYG-jPMAiBH_fK7Yp5uzQkoizKlVSGr7lfv7SKQ6omZtZRZSRPbtQ%3D%3D&lsparams=mh%2Cmm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpl%2Cinitcwndbps&lsig=AG3C_xAwRgIhAOZaB37jSSWWjT44pbp5yB6OaxM8AAlqrCSfQcnyQdh-AiEApMs03ugorhm-Osxbwofki1sWiLvlD9_UhTk77ZDo99E%3D",
				"itag": 18,
				"format": "mp4, video, 360p, audio"
			},
			{
				"url": "https://r2---sn-2uuxa3vh-hqje.googlevideo.com/videoplayback?expire=1592152024&ei=ePvlXuDFKuW_z7sPscyJ-A4&ip=118.98.121.194&id=o-AG6wbNKVVYN8UyOecnc7bNZrhdM73CuF0CLWRXXcgQMi&itag=133&aitags=133%2C160%2C242%2C278%2C394%2C395&source=youtube&requiressl=yes&mh=VD&mm=31%2C29&mn=sn-2uuxa3vh-hqje%2Csn-npoeen7d&ms=au%2Crdu&mv=m&mvi=1&pl=24&initcwndbps=136250&vprv=1&mime=video%2Fmp4&gir=yes&clen=272229&dur=18.933&lmt=1524502649984547&mt=1592130334&fvip=2&keepalive=yes&c=WEB&sparams=expire%2Cei%2Cip%2Cid%2Caitags%2Csource%2Crequiressl%2Cvprv%2Cmime%2Cgir%2Cclen%2Cdur%2Clmt&sig=AOq0QJ8wRgIhAIei4loLbXJBDcXvcYkUU6iYnLNN7UpdEdecpUrRIaiVAiEA7VJ8ef-PjyZVhP97j11sYjNkBC7deUGjX4nMrXP8GJQ%3D&lsparams=mh%2Cmm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpl%2Cinitcwndbps&lsig=AG3C_xAwRgIhAOZaB37jSSWWjT44pbp5yB6OaxM8AAlqrCSfQcnyQdh-AiEApMs03ugorhm-Osxbwofki1sWiLvlD9_UhTk77ZDo99E%3D",
				"itag": 133,
				"format": "mp4, video, 240p"
			}
		]
	}
}
</code></pre>
							</div>
						</section><!--//docs-intro-->
				    </header>

			    <article class="docs-article" id="section-4">
				    <header class="docs-header">
					    <h1 class="docs-heading">FAQs</h1>
					    <section class="docs-intro">
						    <p>Bantuan</p>
						</section><!--//docs-intro-->
				    </header>
				     <section class="docs-section" id="item-4-1">

					</section><!--//section-->

					<section class="docs-section" id="item-4-2">

					</section><!--//section-->

					<section class="docs-section" id="item-4-3">

					</section><!--//section-->
			    </article><!--//docs-article-->

			    <footer class="footer">
				    <div class="container text-center py-5">
					    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
						<small>Copyright &copy; <a href="https://yotwig.com">yotwig</a> <script>document.write(new Date().getFullYear());</script> | Halaman ini dibuat dengan memodifikasi desain template dari <a href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a></small>
				        <ul class="social-list list-unstyled pt-4 mb-0">
						    <li class="list-inline-item"><a href="https://github.com/mj3smile/yotwigapi" target="_blank"><i class="fab fa-github fa-fw"></i></a></li>
				        </ul><!--//social-list-->
				    </div>
			    </footer>
		    </div>
	    </div>
    </div><!--//docs-wrapper-->



    <!-- Javascript -->
    <script src="{{url('assets/dokumentasi/plugins/jquery-3.4.1.min.js')}}"></script>
    <script src="{{url('assets/dokumentasi/plugins/popper.min.js')}}"></script>
    <script src="{{url('assets/dokumentasi/plugins/bootstrap/js/bootstrap.min.js')}}"></script>


    <!-- Page Specific JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
    <script src="{{url('assets/dokumentasi/js/highlight-custom.js')}}"></script>
    <script src="{{url('assets/dokumentasi/plugins/jquery.scrollTo.min.js')}}"></script>
    <script src="{{url('assets/dokumentasi/plugins/lightbox/dist/ekko-lightbox.min.js')}}"></script>
    <script src="{{url('assets/dokumentasi/js/docs.js')}}"></script>

</body>
</html>
