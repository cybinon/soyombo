<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@if (View::hasSection('head'))
  @yield('head')
@else
<!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

     <!-- Site Metas -->
    <title>Soyombo Printing LLC | 20 Year</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/shortcut.png" type="image/png" />
    <link rel="apple-touch-icon" href="images/shortcut.png">



    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">




    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/package/responsive.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/package/custom.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

    <script src="{{asset('js/app.js')}}"></script> <!-- app -->

    <style>
	html.sr .widget {
    visibility: hidden;
    }
	.dg {
		display: none;
	}

	.close-button {
		display: none;
	}
</style>
@endif
<body id="page-top" class="politics_version">
    <!-- LOADER -->
    <div id="preloader">
        <div id="main-ld">
			<div id="loader"></div>
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->

    @if (View::hasSection('navbar'))
    @yield('navbar')
@else

 <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink" id="mainNav">
      <div class="container-fluid">
      <a class="navbar-brand js-scroll-trigger ml-5" href="{{url('/')}}">
			<img class="img-fluid" style="max-height: 75px;" src="/images/logo.png" alt="" />
		</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">News</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    @endif


        <div unselectable="on"
 onselectstart="return false;"
 onmousedown="return false;">

        @yield('content')
        </div>

<div id="contact" class="section db">
        <div class="container">
            <div class="section-title text-center">
                <h3>Contact</h3>
                <p>
                    <a href="tel:+97699569646"><i class="fas fa-phone"></i> &nbsp;<span>99569646</span></a>
                    <a href="tel:+97695109646"><i class="fas fa-phone"></i> &nbsp;<span>95109646</span></a>
                    <a href="mailto:info@soyomboprinting.com"><i class="fas fa-envelope"></i> &nbsp;<span>info@soyomboprinting.com</span></a>
                </p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="contact_form">
                        <form action="/send" method="POST" enctype="multipart/form-data">
                            @csrf
							<div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
										<select name="infotype" id="infotype" class="form-control rounded" value="price">
                                            <option value="other">Send a collaboration request and other information</option>
                                            <option value="price">Request for a price list</option>
                                            <option value="source">Send information about origination</option>
                                            <option value="hr">Send information about human resource</option>
                                        </select>
										<p class="help-block text-danger"></p>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <select name="proprice" id="proprice" class="form-control rounded" value="1">
                                            <option value="Ном">Book</option>
                                            <option value="Тэмдэглэл">Notebook</option>
                                            <option value="Сэтгүүл">Magazine</option>
                                            <option value="Сонин">Newspaper</option>
                                            <option value="Танилцуулга">Report, Poster</option>
                                            <option value="Өргөмжлөл">Greetings</option>
                                            <option value="Календарь">Calendar</option>
                                            <option value="Нууцлал">Value & Securities</option>
                                            <option value="Бланк">Letterhead</option>
                                            <option value="Билл">Bill</option>
                                            <option value="Нэрийн">Bussiness card</option>
                                            <option value="Шошго">Tags</option>
                                            <option value="Тор">Paper рacking & bags</option>
                                            <option value="Хайрцаг">Box & packaging</option>
                                        </select>
                                        <input class="form-control" name="file[]" id="file" type="file" placeholder="file" multiple>
                                    </div>
                                </div>
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" name="username" id="username" type="text" placeholder="Name" required="required" data-validation-required-message="Name is empty">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input class="form-control" name="email" id="email" type="email" placeholder="Your e-mail" required="required" data-validation-required-message="Email is empty.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input class="form-control" name="phone" id="phone" type="tel" placeholder="Your Phone number" required="required" data-validation-required-message="Phone number is empty">
										<p class="help-block text-danger"></p>
                                    </div>

								</div>
								<div class="col-md-6">


                                    <div class="form-group">
										<textarea class="form-control" name="addition" id="message" required placeholder="Additional information"></textarea>
										<p class="help-block text-danger"></p>
                                    </div>
								</div>
								<div class="clearfix"></div>
								<div class="col-lg-12 text-center">
									<div id="success"></div>
									<button id="sendMessageButton" class="sim-btn hvr-bounce-to-top" type="submit">Send an e-mail</button>
								</div>
							</div>
						</form>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

     <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
				<a href="#"></a>
                <div class="footer-center">
                    <p class="footer-links">

                    </p>
                    <p class="footer-company-name">Soyombo Printing LLC. &copy; 2020 </p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->


    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
	<!-- Camera Slider -->
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/parallaxie.js"></script>


    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>


	<script>
     ScrollReveal({reset: true}).reveal('.widget', { scale: 0.9, interval: 100 });
    </script>

<ul class="ct-socials">
  <li>
    <a href="https://www.facebook.com/Soyomboprinting/" target="_blank"><i class="fab fa-facebook"></i></a>
  </li>
  <li class="previous">
    <a href="tel:+97699569646"><i class="fas fa-phone"></i> &nbsp;<span>+976 99569646</span></a>
  </li>
  <li>
    <a href="tel:+97695109646"><i class="fas fa-phone"></i> &nbsp;<span>+976 95109646</span></a>
  </li>
  <li>
    <a href="mailto:info@soyomboprinting.com"><i class="fas fa-envelope"></i> &nbsp;<span>info@soyomboprinting.com</span></a>
  </li>
</ul>

</body>
</html>
