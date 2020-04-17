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
    <div id="none preloader">
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


            @yield('content')

<ul class="ct-socials">
  <li>
    <a href="https://www.facebook.com/Soyomboprinting/" target="_blank"><i class="fab fa-facebook"></i></a>
  </li>
  <li>
    <a href="tel:+97699181421"><i class="fas fa-phone"></i></a>
  </li>
  <li>
    <a href="mailto:info@soyomboprinting.com"><i class="fas fa-envelope"></i></a>
  </li>
  <li>
    <a href="https://forms.gle/HsV2UudpRsrWCxJE8" target="_blank"><i class="fas fa-user-edit"></i></a>
  </li>
  <li>
    <a href="https://www.biznetwork.mn/company/Soyombo-printing" target="_blank"><i class="fas fa-briefcase"></i></a>
  </li>
</ul>
<script>
    $(document).ready(function(){
    $(".products").hide();
    $(".prointo").hide();
    $("#bookp").show();
    $("#testp   ").show();
    $(".content").hide();


    $(".texter").hide();
    $(".show_hide").on("click", function () {
        var txt = $(".texter").is(':visible') ? 'Read More' : 'Read Less';
        $(".show_hide").text(txt);
        $(this+".texter").fadeToggle(200);
    });

});

function switcher(content) {
        content = "#"+content+"p";
        $(".products").fadeOut("slow");
        $(content+" .content").fadeIn();
        $(content).delay(700).fadeIn("slow");
}д
function switcherc(content) {
        content = "#"+content+"p";
        $(".prointo").fadeOut("slow");
        $(content+" .content").fadeIn();
        $(content).delay(700).fadeIn("slow");
}


</script>

</body>
</html>
