<!DOCTYPE html>
<html lang="en">
<head>
    <title>yotwigAPI</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="YOTWIG API">
    <meta name="author" content="YOTIWG Team">

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,,500,600,700" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- FontAwesome JS-->
    <script defer src="{{url('assets/dokumentasi/fontawesome/js/all.min.js')}}"></script>

	<link id="theme-style" rel="stylesheet" href="{{url('assets/dokumentasi/css/open-iconic-bootstrap.min.css')}}">

    <!-- Theme CSS -->
	<link id="theme-style" rel="stylesheet" href="{{url('assets/dokumentasi/css/theme.css')}}">

</head>

<body>

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

	<div class="hero-wrap pt-5">
		<div class="overlay"></div>
		<div class="page-header theme-bg-dark py-5 pt-5 text-center position-relative">
			<div class="theme-bg-shapes-right"></div>
			<div class="theme-bg-shapes-left"></div>
			<div class="container pt-5 pb-5">
			  <h1 class="page-heading pt-5 single-col-max mx-auto">YOTWIG API</h1>
			  <div class="page-intro single-col-max mx-auto">Buat aplikasi downloadermu sendiri menggunakan API dari YOTWIG</div>
			  <div class="mt-5 pb-5"><a href="{{url('docs')}}" class="btn btn-info position-relative">Mulai</a></div>
			</div>
		</div>
	</div><!--//page-header-->

	<div class="page-content">
	    <div class="container">
		    <div class="docs-overview py-5">
			    <div class="row justify-content-center">
				    <div class="col-12 col-lg-3 py-3">
					    <div class="card shadow-sm">
						    <div class="card-body">
							    <h5 class="card-title mb-3">
								    <span class="theme-icon-holder card-icon-holder mr-2">
								        <i class="fas fa-map-signs"></i>
							        </span><!--//card-icon-holder-->
							        <span class="card-title-text">Memulai</span>
							    </h5>
							    <div class="card-text">
								    Tahap awal dalam mulai menggunakan YOTWIG API.
							    </div>
							    <a class="card-link-mask" href="{{url('docs#section-1')}}"></a>
						    </div><!--//card-body-->
					    </div><!--//card-->
				    </div><!--//col-->
				    <div class="col-12 col-lg-3 py-3">
					    <div class="card shadow-sm">
						    <div class="card-body">
							    <h5 class="card-title mb-3">
								    <span class="theme-icon-holder card-icon-holder mr-2">
								        <i class="fas fa-arrow-down"></i>
							        </span><!--//card-icon-holder-->
							        <span class="card-title-text">API key</span>
							    </h5>
							    <div class="card-text">
								    Tahapan-tahapan dan penjelasan dalam mendapatkan API key.
							    </div>
							    <a class="card-link-mask" href="{{url('docs#section-2')}}"></a>
						    </div><!--//card-body-->
					    </div><!--//card-->
				    </div><!--//col-->
				    <div class="col-12 col-lg-3 py-3">
					    <div class="card shadow-sm">
						    <div class="card-body">
							    <h5 class="card-title mb-3">
								    <span class="theme-icon-holder card-icon-holder mr-2">
								        <i class="fas fa-box fa-fw"></i>
							        </span><!--//card-icon-holder-->
							        <span class="card-title-text">API Endpoint</span>
							    </h5>
							    <div class="card-text">
								    Penjelasan dan cara penggunaan endpoint utama dari YOTWIG API.
								</div>
							    <a class="card-link-mask" href="{{url('docs#section-3')}}"></a>
						    </div><!--//card-body-->
					    </div><!--//card-->
				    </div><!--//col-->
				    <div class="col-12 col-lg-3 py-3">
					    <div class="card shadow-sm">
						    <div class="card-body">
							    <h5 class="card-title mb-3">
								    <span class="theme-icon-holder card-icon-holder mr-2">
								        <i class="fas fa-lightbulb"></i>
							        </span><!--//card-icon-holder-->
							        <span class="card-title-text">FAQs</span>
							    </h5>
							    <div class="card-text">
								    Bantuan dan informasi penjelas tentang YOTWIG API.
								</div>
							    <a class="card-link-mask" href="{{url('docs#section-4')}}"></a>
						    </div><!--//card-body-->
					    </div><!--//card-->
				    </div><!--//col-->
			    </div><!--//row-->
		    </div><!--//container-->
		</div><!--//container-->
    </div><!--//page-content-->

    <section class="cta-section text-center py-5 theme-bg-dark position-relative">
	    <div class="theme-bg-shapes-right"></div>
	    <div class="theme-bg-shapes-left"></div>
	    <div class="container">
		    <h3 class="mb-2 text-white mb-3">Tentang YOTWIG</h3>
		    <div class="section-intro text-white mb-3 single-col-max mx-auto">Proyek ini dibuat sebagai tugas akhir dalam mata kuliah Rekayasa Web Program Studi <a class="text-white" href="http://tkj.poliupg.ac.id" target="_blank">Teknik Komputer dan Jaringan Politeknik Negeri Ujung Pandang</a>.<br><br>Ditulis oleh Mujahid Abdillah (42517045) dan Chairul Umam (42516026)</div>
	    </div>
    </section><!--//cta-section-->

    <footer class="footer">

	    <div class="footer-bottom text-center py-5">

		    <ul class="social-list list-unstyled pb-4 mb-0">
			    <li class="list-inline-item"><a href="https://github.com/mj3smile/yotwigapi" target="_blank"><i class="fab fa-github fa-fw"></i></a></li>
	        </ul><!--//social-list-->

	        <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class="copyright">Copyright &copy; <a class="theme-link" href="https://yotwig.com">yotwig</a> <script>document.write(new Date().getFullYear());</script> | Halaman ini dibuat dengan memodifikasi desain template dari <a class="theme-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a></small>

	    </div>

    </footer>

    <!-- Javascript -->
    <script src="{{url('assets/dokumentasi/plugins/jquery-3.4.1.min.js')}}"></script>
    <script src="{{url('assets/dokumentasi/plugins/popper.min.js')}}"></script>
    <script src="{{url('assets/dokumentasi/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

</body>
</html>
