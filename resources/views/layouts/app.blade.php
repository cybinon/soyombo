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
    <title>Соёмбо Принтинг ХХК | 20 жил</title>
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
              <a class="nav-link js-scroll-trigger" href="#">Мэдээ мэдээлэл</a>
            </li>
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Холбоо Барих</a>
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
                <h3>Шуудан үлдээх</h3>
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
                                            <option value="other">Хамтын ажиллагаа, бусад мэдээлэл илгээх</option>
                                            <option value="price">Үнийн мэдээлэл авах</option>
                                            <option value="source">Эх бэлтгэлийн мэдээлэл илгээх</option>
                                            <option value="hr">Хүний нөөцийн мэдээлэл илгээх</option>
                                        </select>
										<p class="help-block text-danger"></p>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <select name="proprice" id="proprice" class="form-control rounded" value="1">
                                            <option value="Ном">Ном, гарын авлага</option>
                                            <option value="Тэмдэглэл">Тэмдэглэлийн дэвтэр</option>
                                            <option value="Сэтгүүл">Сэтгүүл</option>
                                            <option value="Сонин">Сонин</option>
                                            <option value="Танилцуулга">Танилцуулга, Плакат</option>
                                            <option value="Өргөмжлөл">Урилга, Мэндчилгээ</option>
                                            <option value="Календарь">Календарь, цаг тооны бичиг</option>
                                            <option value="Нууцлал">Үнэт цаас, Нууцлал</option>
                                            <option value="Бланк">Бланк</option>
                                            <option value="Билл">Билл</option>
                                            <option value="Нэрийн">Нэрийн хуудас</option>
                                            <option value="Шошго">Шошго</option>
                                            <option value="Тор">Цаасан уут, тор</option>
                                            <option value="Хайрцаг">Хайрцаг</option>
                                        </select>
                                        <input class="form-control" name="file[]" id="file" type="file" placeholder="file" multiple>
                                    </div>
                                </div>
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" name="username" id="username" type="text" placeholder="Нэр" required="required" data-validation-required-message="Та нэр оруулна уу">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input class="form-control" name="email" id="email" type="email" placeholder="Таны цахим хаяг" required="required" data-validation-required-message="Цахим хаяг заавал оруулах хэрэгтэй.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input class="form-control" name="phone" id="phone" type="tel" placeholder="Таны утас" required="required" data-validation-required-message="Утасны дугаар ашиглан таньд эргүүлж хариу өгнө">
										<p class="help-block text-danger"></p>
                                    </div>

								</div>
								<div class="col-md-6">


                                    <div class="form-group">
										<textarea class="form-control" name="addition" id="message" required placeholder="Нэмэлт мэдээлэл"></textarea>
										<p class="help-block text-danger"></p>
                                    </div>
								</div>
								<div class="clearfix"></div>
								<div class="col-lg-12 text-center">
									<div id="success"></div>
									<button id="sendMessageButton" class="sim-btn hvr-bounce-to-top" type="submit">Илгээх</button>
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
                    <p class="footer-company-name">Соёмбо Принтинг ХХК. &copy; 2020 </p>
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
    <a href="tel:+97699569646"><i class="fas fa-phone"></i> &nbsp;<span>99569646</span></a>
  </li>
  <li>
    <a href="tel:+97695109646"><i class="fas fa-phone"></i> &nbsp;<span>95109646</span></a>
  </li>
  <li>
    <a href="mailto:info@soyomboprinting.com"><i class="fas fa-envelope"></i> &nbsp;<span>info@soyomboprinting.com</span></a>
  </li>
  <li>
    <a data-fancybox data-type="iframe" data-src="https://forms.gle/HsV2UudpRsrWCxJE8" href="javascript:;"><i class="fas fa-user-edit"></i> &nbsp;<span>Сэтгэл ханамжийн судалгаа</span></a>
  </li>
  <li>
    <a href="https://www.biznetwork.mn/company/Soyombo-printing" target="_blank"><i class="fas fa-briefcase"></i>  &nbsp;<span>Хүний нөөц</span></a>
  </li>
  <li>
    <a href="http://43.231.115.12:8286/" target="_blank"><i class="fas fa-edit"></i>  &nbsp;<span>Ажил горилогчийн анкет</span></a>
  </li>
</ul>

</body>
</html>
