@extends('layouts.app')

@section('navbar')
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink" id="mainNav">
      <div class="container-fluid">
        <a class="navbar-brand js-scroll-trigger ml-5" href="#page-top">
			<img class="img-fluid" style="max-height: 75px;" src="images/logo.png" alt="" />
		</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#particle-slider">Эхлэл</a>
            </li>

			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#20year">Бидний тухай</a>
            </li>

			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#catalog">Бүтээгдэхүүний төрөл</a>
            </li>

			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#technology">Технологи</a>
            </li>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#news">Мэдээ мэдээлэл</a>
            </li>

			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Холбоо Барих</a>
            </li>
            <li class="nav-item border rounded">
              <a class="nav-link" href="/eng">ENG</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
@endsection

@section('content')

{{view('logo')}}
{{view('about')}}

<div id="services" class="section db" >
	<div class="container-fluid">
		<div class="section-title text-center">
			<h3 class="text-light">Захиалгын процесс</h3>
			<p></p>
		</div><!-- end title -->

		<div class="row widget-list justify-content-center">
			<div class="col-lg-2 col-md-6 widget" >
                <a data-fancybox="order process" href="/uploads/other/order/1.png">
                    <img class="rounded-img" src="/uploads/other/order/1.png" alt="1">
                </a>
            </div><!-- end col -->

            <div class="col-lg-2 col-md-6 widget" >
                <a data-fancybox="order process" href="/uploads/other/order/2.png">
                    <img class="rounded-img" src="/uploads/other/order/2.png" alt="1">
                </a>
            </div><!-- end col -->

            <div class="col-lg-2 col-md-6 widget" >
               <a data-fancybox="order process" href="/uploads/other/order/3.png">
                    <img class="rounded-img" src="/uploads/other/order/3.png" alt="1">
                </a>
            </div><!-- end col -->

            <div class="col-lg-2 col-md-6 widget" >
                <a data-fancybox="order process" href="/uploads/other/order/4.png">
                    <img class="rounded-img" src="/uploads/other/order/4.png" alt="1">
                </a>
            </div><!-- end col -->

            <div class="col-lg-2 col-md-6 widget">
                <a data-fancybox="order process" href="/uploads/other/order/5.png">
                    <img class="rounded-img" src="/uploads/other/order/5.png" alt="1">
                </a>
            </div><!-- end col -->
		</div>

	</div>
</div><!-- end section -->

<div id="catalog" class="section wb">
    <div class="container">
        <div class="section-title text-center">
            <h3>Бүтээгдэхүүний төрөл</h3>
            <p></p>
        </div><!-- end title -->

        <div class="row" id="accordion">
            <!--book-->
            <div class="col-md-3 widget-list">

                <button class="widget text-left w-100 mb-3 btn btn-primary" onclick="switcher(this.id)" id="book">
                    <i class="fa fa-book"></i> Ном
                </button>

                <button class="widget text-left w-100 mb-3 btn btn-primary" onclick="switcher(this.id)" id="diary">
                    <i class="fa fa-book"></i> Тэмдэглэлийн дэвтэр
                </button>

                <button class="widget text-left w-100 mb-3 btn btn-primary" onclick="switcher(this.id)" id="magazine">
                    <i  class="fab fa-affiliatetheme"></i> Сэтгүүл
                </button>

                <button  class="widget text-left w-100 mb-3 btn btn-primary" onclick="switcher(this.id)" id="newspaper">
                    <i  class="far fa-newspaper"></i>  Сонин
                </button>

                <button class="widget text-left w-100 mb-3 btn btn-primary" onclick="switcher(this.id)" id="poster">
                    <i  class="fa fa-sticky-note"></i> Танилцуулга, Плакат
                </button>

                <button class="widget text-left w-100 mb-3 btn btn-primary" onclick="switcher(this.id)" id="certificate">
                    <i  class="fa fa-certificate"></i> Өргөмжлөл, Батламж
                </button>

                <button class="widget text-left w-100 mb-3 btn btn-primary" onclick="switcher(this.id)" id="invitation">
                    <i  class="fas fa-paper-plane"></i> Урилга, Мэндчилгээ
                </button>

                <button class="widget text-left w-100 mb-3 btn btn-primary" onclick="switcher(this.id)" id="calendar">
                    <i  class="fa fa-calendar"></i> Календарь, Цаг тооны бичиг
                </button>

                <button class="widget text-left w-100 mb-3 btn btn-primary" onclick="switcher(this.id)" id="security">
                    <i  class="fas fa-money-check-alt"></i> Үнэт цаас, Нууцлал
                </button>

                <button class="widget text-left w-100 mb-3 btn btn-primary" onclick="switcher(this.id)" id="blank">
                    <i  class="fas fa-chalkboard"></i> Бланк
                </button>

                <button class="widget text-left w-100 mb-3 btn btn-primary" onclick="switcher(this.id)" id="bill">
                    <i  class="fas fa-file-invoice-dollar"></i> Билл
                </button>

                <button class="widget text-left w-100 mb-3 btn btn-primary" onclick="switcher(this.id)" id="envelope">
                    <i  class="fa fa-envelope"></i> Дугтуй, Карматай хавтас
                </button>

                <button class="widget text-left w-100 mb-3 btn btn-primary" onclick="switcher(this.id)" id="bussiness">
                    <i  class="fa fa-credit-card"></i> Нэрийн хуудас
                </button>

                <button class="widget text-left w-100 mb-3 btn btn-primary" onclick="switcher(this.id)" id="label">
                    <i  class="fa fa-mail-bulk"></i> Шошго
                </button>

                <button class="widget text-left w-100 mb-3 btn btn-primary" onclick="switcher(this.id)" id="paperbag">
                    <i  class="fas fa-shopping-bag"></i> Цаасан уут, Тор
                </button>

                <button class="widget text-left w-100 mb-3 btn btn-primary" onclick="switcher(this.id)" id="packaging">
                    <i  class="fa fa-gift"></i> Хайрцаг, Сав, Багалаа, Боодол
                </button>
            </div>

            <div class="col-md-9" style="">
                {{view('data.product.all')}}
                <div class="row mt-3 bg-dark rounded p-2">
                    <div class="col"><button type="button" class="w-100 btn btn-primary rounded" data-toggle="modal" data-target="#guide"><i class="fas fa-info-circle"></i> Зөвлөмж</button></div>
                    <div class="col"><button type="button" class="w-100 btn btn-primary rounded" data-toggle="modal" data-target="#papersize"><i class="fas fa-sticky-note"></i> Цаасны хэмжээ</button></div>
                    <div class="col"><button type="button" class="w-100 btn btn-warning rounded" data-toggle="modal" data-target="#warning"><i class="fas fa-exclamation-circle"></i> Анхаарах зүйлс</button></div>
                </div>
            </div>{{-- Col End --}}
        </div>{{-- Row end --}}
    </div>
</div>
{{view('data.guide')}}
	<div id="technology" class="section lb">
        <div class="section-title text-center">
				<h3>Технологи</h3>
				<p></p>
            </div><!-- end title -->

        <div class="uk-container uk-container-large">
            <div class="row widget-list">
                <div class="col-md-6 mt-5 ">
                    <div class="message-box text-dark">
                        <h2>Inkzone CIP4 өнгөний удирдлагын онлайн системийн онцлог, танилцуулга</h2>
                        <p>
                            Соёмбо Принтинг ХХК 2019 оны 6-р сард Швейцарь улсын Zurikh хотод байрлалтай DIGITAL INFORMATION компанийн INKZONE CIP4 өнгөний удирдлагын цогц онлайн системийг амжилттай нэвтрүүллээ. Тус систем нь CTP RIP программаас өнгөний орцыг
                            <span class="">
                                CIP4 хэл дээр хөрвүүлэн авч хэвлэлийн машины будгийн түлхүүрт автоматаар шилжүүлснээр хэвлэгчийн ур чадвар, хариуцлагаас хамаарах өнгөний зөрөөг арилгаж, DI Plot, InkZone Loop, InkZone Move, InkZone Connect зэрэг цогц программ хангамж, тоног төхөөрөмжийн тусламжтайгаар дардас цааснаас өнгөний шкаллыг уншиж, дахин тохиргоо хийснээр хэвлэлтийн өнгөний хэлбэлзэл, будаг өгөлтөөс шалтгаалсан хувирлыг үгүй болгодог. Энэхүү системийг суурилуулж, амжилттай нэвтрүүлснээр хэвлэлтийн өнгөний тогтвортой байдлыг дээд зэргээр хангаж, нэгж ажил эхлэх хугацаа, бэлтгэл ажлыг 15 хүртэл хувиар бууруулснаар цахилгаан эрчим хүч, хүн цагийг хэмнэж, хэвлэлтийн явцад автоматаар дахин тохиргоо хийснээр гарч болох үл тохирол, бусад эрсдлийг мэдэгдэхүйц бууруулаад байна.
                            </span>
                        </p>

                        <a href="#technolog" class="sim-btn read"><span>Цааш үзэх</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6 mt-5 ">
                    <div class="right-box-pro wow fadeIn">
                        <img style="max-height:600px" src="uploads/undraw/inkzone.png" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
			</div><!-- end row -->

			<div class="row mt-5" >
				<div class="col-md-6 mt-5 ">
                    <div class="right-box-pro wow fadeIn">
                        <img style="max-height:600px" src="uploads/iso.png" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
                <div class="col-md-6 mt-5 ">
                    <div class="message-box text-dark">
                        <h2>ISO 9001-2015 олон улсын чанарын удирдлагын тогтолцоо</h2>
                        <p> Бид ISO 9001-2015 чанарын удирдлагын тогтолцоогоо амжилттай нэвтрүүлэн 2 удаагаа баталгаажууллаа. Соёмбо принтинг компани 2017 оноос эхлэн үйлдвэрлэл, бүтээгдэхүүн үйлчилгээнийхээ чанарыг дээшлүүлэх, ажилчдын ажиллах орчинд сайжруулах, харилцагчидын сэтгэл ханамжийг нэмэгдүүлэх зорилгоор ISO 9001-2015 Олон улсын чанарын удирдлагын тогтолцоог нэвтрүүлсэн билээ.
                            <span class="">
                                2018 онд бид олон улсын аудитын SES байгууллагатай хамтарч ажиллан ажлаа дүгнүүлэн чанарын удирдлагын тогтолцооны сертификатаа гардан авсан билээ. 2019 оны 12 сард 2 дахь шатны аудитын шалгалтаар "Олон улсын чанарын удирдлагын тогтолцоо" нэвтрүүлсэн гэдгээ батлан 2 дахь удаагаа баталгаажуулав.
                            </span>
                        </p>

                        <a  href="#technolog" class="sim-btn read"><span>Цааш үзэх</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
			</div><!-- end row -->
			<div class="row mt-5" >
                <div class="col-md-6 mt-5 ">
                    <div class="message-box text-dark">
                        <h2>Soyombo spelling алдаа шалгагч программ</h2>
                        <p> Бид нийгмийн хариуцлагын хүрээнд алдаагүй бүтээгдэхүүн үйлдвэрлэх зорилгоор Soyombo spelling программ зохион бүтээв.
                            2018 оны 9-р сараас эхлэн “Соёмбо Принтинг” ХХК-ийн санаачлагаар уг алдаа шалгагчийг Монгол Улсын Ерөнхийлөгчийн дэргэдэх Хэлний бодлогын үндэсний зөвлөлөөс эрхлэн гаргасан “Монгол хэлний зөв бичих дүрмийн журамласан толь”-д тулгуурлан үгийн санг бүрдүүлж, дүрмийн өөрчлөлтүүдийг тусган хөгжүүлж эхэлсэн билээ.
                        <span class="">
							Уг алдаа шалгагчийг 2019 оны 5-р сараас туршилтын журмаар компанийн дотоод үйл ажиллагаанд хэрэглэж эхэлсэн бөгөөд 2019 оны 7-р сарын 1-ний өдрийн 10834 тоот зохиогчийн эрхийн гэрчилгээгээр уг алдаа шалгагчийн зохиогчийн эрхийг баталгаажуулсан.
                            Уг алдаа шалгагч нь эх бэлтгэлийн мэргэжлийн программ буюу InDesign CC+ бүх хувилбар, InCopy CC+ бүх хувилбар дээр нэмэлт хэлбэрээр суурилуулдаг бөгөөд тус программын үндсэн үйлдэлд тулгуурлан ажилладаг тул ямар нэгэн нэмэлт ачаалал үүсгэдэггүй, эх бэлтгэгч, дизайнер, хэрэглэгчдийн анзаараагүй үг үсгийн алдааг тодотгон харуулж, цаг хугацаа, эд материалын хэмнэлт гаргаж, эх бэлтгэлийн явцад үг үсгийн алдаа гарахаас найдвартай хамгаалдгаараа давуу талтай билээ.
                            SOYOMBO SPELLING алдаа шалгагч нь Монгол Улсын Ерөнхийлөгчийн дэргэдэх Хэлний бодлогын үндэсний зөвлөлөөс эрхлэн гаргасан “Монгол хэлний зөв бичих дүрмийн журамласан толь”-д тулгуурласан, мөн "Монгол хүний нэрийн толь"-д багтсан 25700 гаруй хүн, газар усны оноосон нэр, түүний дүрмийн бүх хувилал, 35000 орчим үйл үгийн 10 сая орчим хувиллыг ялган таньдаг бөгөөд нийтдээ 92000 гаруй үндсэн үгийн сантай, түүний 80 сая гаруй дүрмийн хувиллыг таних чадвартай, эх бэлтгэлийн мэргэжлийн программууд дээр ажилладаг.
                            Бид улирал тутамд үгийн сангийн шинэчлэлт, дүрмийн хувиллын сайжруулалтыг гарган ажиллаж байна.
                            Энэхүү алдаа шалгагч нь манай компаниас нийгмийн хариуцлагын хүрээнд зохион байгуулсан томоохон төсөл бөгөөд уг алдаа шалгагчийн тусламжтайгаар хэвлэгдэн гарч буй ном товхимол, бусад бүтээгдэхүүнүүд бидний хойч ирээдүй болсон хүүхдүүд, тэдний эцэг эхчүүдийн гар дээр үг үсгийн алдаагүй, үлгэр жишээ бүтээгдэхүүн болон очсоноороо тэдний боловсролд оруулж буй томоохон хувь нэмэр хэмээн бид үзэж байна.
                            Эх орон, эргэх орчлонгийн түүх соёлыг барлан туурвигч мэргэжил нэгт эрхмүүддээ ажил хөдөлмөр, уран бүтээлийн өндөр амжилтыг хүсэн ерөөе.
                        </span>
                </p>

                        <a  href="#technolog" class="sim-btn read"><span>Цааш үзэх</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6 mt-5 ">
                    <div class="right-box-pro wow fadeIn">
                        <img style="max-height:600px" src="uploads/undraw/spelling.png" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
			</div><!-- end row -->
			<div class="row mt-5" >
				<div class="col-md-6 mt-5 ">
                    <div class="right-box-pro">
                        <img style="max-height:600px" src="uploads/undraw/pantone.png" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
                <div class="col-md-6 mt-5 ">
                    <div class="message-box text-dark">
                        <h2>Pantone solid coated Онцлог, танилцуулга</h2>
                        <p> 2019 оны 9-р сараас эхлэн “Соёмбо Принтинг” ХХК БНСУ-ын DAIHAN INK Co.,Ltd-ээс албан ёсны эрхтэйгээр олон улсын PANTONE өнгөний системийн үндсэн 2300 гаруй өнгийн будгийг импортолж, салбартаа анх удаа PANTONE будгийг стандартын дагуу найруулан өөрсдийн үйлдвэрлэлд болон бусад хэвлэлийн компаниудад борлуулж эхлээд байна.
                            <span class="">
                                Тус өнгөний систем нь олон улсын хэвлэл болон бүх төрлийн будаг, өнгөт хавтан, тавилга, интерьер болон экстерьер дизайн гэх мэт маш өргөн хүрээтэй хэрэглэгддэг бөгөөд өнгийг ямар ч алдаагүй найдвартай дамжуулах шилдэг систем билээ.
                                Манай компани 2019 оны 9-р сараас тус системийн дагуу үндсэн суурь өнгөнөөс 0,001 гр нарийвчлалтайгаар 2300 гаруй өнгийг найруулж өөрийн үндсэн хэрэглээнд туршиж эхэлсэн бөгөөд 10-р сарын 15-наас албан ёсоор худалдаанд гаргаад байна.
                            </span>
                        </p>

                        <a href="#technolog" class="sim-btn read"><span>Цааш үзэх</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
    <div class="section db">
        <div class="section-title text-center">
            <h3 class="text-light">Нэмэлт чимэглэл</h3>
            <p></p>
        </div><!-- end title -->

        <div class="container">
             <div class="row" id="accordion">
                <!--book-->
                <div class="col-md-3 widget-list">
                    <button class="text-left w-100 mb-3 btn btn-primary" onclick="switcherc(this.id)" id="klishe">
                        Клише /Халуун дардас/
                    </button>

                    <button  class="text-left w-100 mb-3 btn btn-primary" onclick="switcherc(this.id)" id="emboss">
                        Эмбосс /Товгор дардас/
                    </button>

                    <button class="text-left w-100 mb-3 btn btn-primary" onclick="switcherc(this.id)" id="deboss">
                        Дебосс /Хуурай дардас/
                    </button>

                    <button class="text-left w-100 mb-3 btn btn-primary" onclick="switcherc(this.id)" id="5c">
                        5С UV Лак
                    </button>

                    <button class="text-left w-100 mb-3 btn btn-primary" onclick="switcherc(this.id)" id="lazer">
                        Лазер зүсэлт
                    </button>

                    <button class="text-left w-100 mb-3 btn btn-primary" onclick="switcherc(this.id)" id="3d">
                        3D бүрэлт
                    </button>

                    <button class="text-left w-100 mb-3 btn btn-primary" onclick="switcherc(this.id)" id="panobook">
                        PANOBOOK
                    </button>

                </div>

                <div class="col-md-9" style="">
                    {{view('data.service.all')}}
                </div>{{-- Col End --}}
            </div>{{-- Row end --}}
        </div>{{-- Container end --}}
         <div id="news" class="section lb">
        <div class="section-title text-center">
				<h3 >Техник, Технологи</h3>
				<p></p>
            </div><!-- end title -->
            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="autoplay: true">
            <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-4@m uk-grid">
                    <li>
                        <a data-fancybox="videotech" href="uploads/video/tech/1.mp4">
                            <img class="w-100" src="uploads/tech/1.png">
                            <div class="uk-overlay uk-overlay-default uk-position-bottom text-right uk-panel w-100"><h1 class="text-dark">Ном хэрхэн хэвлэгддэг вэ?</h1></div>
                        </a>
                    </li>

                    <li>
                        <a data-fancybox="videotech" href="uploads/video/tech/naaltaa.mp4">
                            <img class="w-100" src="uploads/tech/2.png">
                            <div class="uk-overlay uk-overlay-default uk-position-bottom text-right uk-panel"><h1 class="text-dark">Ном наалтаар бэхлэх тухай</h1></div>
                        </a>
                    </li>

                    <li>
                        <a data-fancybox="videotech" href="uploads/video/tech/2.mp4">
                            <img class="w-100" src="uploads/tech/3.png">
                            <div class="uk-overlay uk-overlay-default uk-position-bottom text-right uk-panel"><h1 class="text-dark">Номыг үдээгээр хэрхэн бэхэлдэг вэ?</h1></div>
                        </a>
                    </li>

                    <li>
                        <a data-fancybox="videotech" href="uploads/video/tech/3.mp4">
                            <img class="w-100" src="uploads/tech/4.png">
                            <div class="uk-overlay uk-overlay-default uk-position-bottom text-right uk-panel"><h1 class="text-dark">Нугалааг хэрхэн хийдэг вэ?</h1></div>
                        </a>
                    </li>

                    <li>
                        <a data-fancybox="videotech" href="uploads/video/tech/oyo.mp4">
                            <img class="w-100" src="uploads/tech/5.png">
                            <div class="uk-overlay uk-overlay-default uk-position-bottom text-right uk-panel"><h1 class="text-dark">Номыг хэрхэн оёж бэхэлдэг вэ?</h1></div>
                        </a>
                    </li>

                    <li>
                        <a data-fancybox="videotech" href="uploads/video/tech/4.mp4">
                            <img class="w-100" src="uploads/tech/6.png">
                            <div class="uk-overlay uk-overlay-default uk-position-bottom text-right uk-panel"><h1 class="text-dark">Гурван тал огтлоо гэж юу вэ?</h1></div>
                        </a>
                    </li>

                    <li>
                        <a data-fancybox="videotech" href="uploads/video/tech/ctp.mp4">
                            <img class="w-100" src="uploads/tech/7.png">
                            <div class="uk-overlay uk-overlay-default uk-position-bottom text-right uk-panel"><h1 class="text-dark">Сomputer Тo Рlate технологи гэж юу вэ?</h1></div>
                        </a>
                    </li>


            </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

        </div>

    </div><!-- end section -->

    </div>

    <div id="news" class="section db">
        <div class="section-title text-center">
				<h3 class="text-light">Мэдээ, Мэдээлэл</h3>
				<p></p>
            </div><!-- end title -->
            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="autoplay: true">
            <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-4@m uk-grid">
                <li>
                    <div class="uk-panel">
                        <a data-fancybox="news" href="uploads/video/news/1.mp4"><img src="uploads/news/1.png"></a>
                    </div>
                </li>
                <li>
                    <div class="uk-panel">
                        <a data-fancybox="news" href="uploads/video/news/2.mp4"><img src="uploads/news/2.png"></a>

                    </div>
                </li>
                <li>
                    <div class="uk-panel">
                        <a data-fancybox="news" href="uploads/video/news/3.mp4"><img src="uploads/news/3.png"></a>

                    </div>
                </li>
                <li>
                    <div class="uk-panel">
                        <a data-fancybox="news" href="uploads/video/news/4.mp4"><img src="uploads/news/4.png"></a>
                    </div>
                </li>
                <li>
                    <div class="uk-panel">
                        <a data-fancybox="news" href="uploads/video/news/5.mp4"><img src="uploads/news/5.png"></a>
                    </div>
                </li>
                <li>
                    <div class="uk-panel">
                        <a data-fancybox="news" href="uploads/video/news/6.mp4"><img src="uploads/news/6.png"></a>
                    </div>
                </li>
                <li>
                    <div class="uk-panel">
                        <a data-fancybox="news" href="uploads/video/news/7.mp4"><img src="uploads/news/7.png"></a>
                    </div>
                </li>
                <li>
                    <div class="uk-panel">
                        <a data-fancybox="news" href="uploads/video/news/8.mp4"><img src="uploads/news/8.png"></a>
                    </div>
                </li>


            </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

        </div>

    </div><!-- end section -->




@endsection
