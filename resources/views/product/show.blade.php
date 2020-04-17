@extends('layouts.app')

@section('content')
<div id="technology" class="section lb">
    <div class="section-title text-center">
        <h3>Ном</h3>
    </div><!-- end title -->

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6 mb-2 bg-light">
                <img class="w-100" src="{{url('/uploads/nom/theNom.png')}}" alt="">
            </div>
            <div class="col-md-6 mb-2 text-center p-5">
                <div class="anime">
                    {{view('data.product.book')}}
                </div>
            </div>
            <div class="col-md-6 mb-2 bg-light">
                <img class="w-100" src="{{url('/uploads/nom/n (4).png')}}" alt="">
            </div>
            <div class="col-md-6 mb-2 bg-light">
                <img class="w-100" src="{{url('/uploads/nom/4boti.png')}}" alt="">
            </div>
            <div class="col-md-6 mb-2 bg-light">
                <img class="w-100" src="{{url('/uploads/nom/n (5).png')}}" alt="">
            </div>
            <div class="col-md-6 mb-2 bg-light">
                <img class="w-100" src="{{url('/uploads/nom/n (6).png')}}" alt="">
            </div>
        </div>
    </div>




    <div id="contact" class="section db">
        <div class="container">
            <div class="section-title text-center">
                <h3>Шуудан үлдээх <span class="alert alert-warning">Засвартай</span></h3>
                <p>Бид ажлын 24 цагийн дотор хариу илгээх болно</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactForm" name="sentMessage" novalidate="novalidate">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" id="name" type="text" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input class="form-control" id="email" type="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email address.">
										<p class="help-block text-danger"></p>
									</div>
									<div class="form-group">
										<input class="form-control" id="phone" type="tel" placeholder="Your Phone" required="required" data-validation-required-message="Please enter your phone number.">
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<textarea class="form-control" id="message" placeholder="Your Message" required="required" data-validation-required-message="Please enter a message."></textarea>
										<p class="help-block text-danger"></p>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="col-lg-12 text-center">
									<div id="success"></div>
									<button id="sendMessageButton" class="sim-btn hvr-bounce-to-top" type="submit">Send Message</button>
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
    <script src="js/uikit.min.js"></script>
	<!-- Camera Slider -->
	<script src="js/jquery.mobile.customized.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/parallaxie.js"></script>
	<script src="js/headline.js"></script>
	<!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/jquery.vide.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

	 <script>

      ScrollReveal().reveal('.widget', { interval: 200 });
    </script>
@endsection
