<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>JS Games</title>
	<link rel="icon" href="css/img/Fevicon.png" type="image/png">
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link rel="stylesheet" href="css/style.css"> -->


  
    <link rel="stylesheet" href="{{asset('/css/style.css')}}"/>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,800,700,400italic|PT+Serif:400,400italic"/>
</head>
<body>
  
    
	<header class="header_area">
		<div id = "bastapqy">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand logo_h" href="index.html"><img src="css/img/logo.png" width="100" height="50" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
              <li class="nav-item active"><a class="nav-link" href="index.html">@lang('lang.home')</a></li>  
              <li class="nav-item submenu dropdown">
                <a href="https://narxoz.kz/" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">@lang('lang.sdu')</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="https://narxoz.kz/">@lang('lang.sdu_site')</a></li>
                </ul>
							</li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">@lang('lang.web')</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="https://ru.wikipedia.org/wiki/JavaScript">JavaScript</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://ru.wikipedia.org/wiki/CSS">CSS</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://ru.wikipedia.org/wiki/HTML">HTML</a></li>
                </ul>
							</li>
							<li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">@lang('lang.byz')</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="zwin/index.html">@lang('lang.name')</a></li>
                </ul>
              </li>
							<li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">@lang('lang.registr')</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/login">@lang('lang.log')</a></li>
                  <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/register">@lang('lang.registr')</a></li>
                  
                </ul>
      
              </li>
              </div>
        </div>
      </nav>
    </div>
  
  </header>

  <div class="langs" id="app" onmouseover="big(this)" onmouseout="small(this)">
        	<nav class="navbar navbar-expand-lg navbar-dark container">
            	<div class="collapse navbar-collapse" id="navbarToggler"  style="background-color: white; ">
                <ul class="navbar-nav ml-auto">
                    @php $locale = session()->get('locale'); @endphp
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: white;">
                            @switch($locale)
                                @case('en')
                                <img width="20" src="{{asset('https://pngicon.ru/file/uploads/flag-velikobritanii.png')}}"> English
                                @break
                                @case('kz')
                                <img width="20" src="{{asset('https://upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Flag_of_Kazakhstan.svg/250px-Flag_of_Kazakhstan.svg.png')}}"> Қазақ тілі
                                @break
                                @case('ru')
                                <img width="20" src="{{asset('https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Flag_of_Russia.svg/250px-Flag_of_Russia.svg.png')}}"> Русский
                                @break
                                @default
                                <img width="20" src="{{asset('https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Flag_of_Russia.svg/250px-Flag_of_Russia.svg.png')}}"> Русский
                            @endswitch
                            <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a style="color:black;" class="dropdown-item" href="/en"><img width="20" src="{{asset('https://pngicon.ru/file/uploads/flag-velikobritanii.png')}}"> English</a><br>
                            <a style="color:black;" class="dropdown-item" href="/kz"><img width="20" src="{{asset('https://upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Flag_of_Kazakhstan.svg/250px-Flag_of_Kazakhstan.svg.png')}}"> Қазақ тілі</a><br>
                            <a style="color:black;" class="dropdown-item" href="/ru"><img width="20" src="{{asset('https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Flag_of_Russia.svg/250px-Flag_of_Russia.svg.png')}}"> Русский язык</a>
                           
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>









  <main class="site-main">
    

    <section class="hero-banner">
    	<div id = "oiyndar">
      <div class="container">
        <div class="row no-gutters align-items-center pt-60px">
          <div class="col-5 d-none d-sm-block">
            <div class="hero-banner__img">
              <img class="img-fluid" src="css/img/home/hero-banner.png" alt="">
            </div>
          </div>
          <div class="col-sm-7 col-lg-6 offset-lg-1 pl-4 pl-md-5 pl-lg-0">
            <div class="hero-banner__content">
              <h4>@lang('lang.web_site')</h4>
              <h1>@lang('lang.jys')</h1>
              <p><b>@lang('lang.game_play')</p><br></b> 
              @lang('lang.js')<br>
              <p></p>
              <a class="button button-hero" href="https://proglib.io/p/razrabotka-igr-na-javascript-realno-i-bezboleznenno-2019-11-08">@lang('lang.tolyk')</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-margin mt-0">
    	<div id = "proga">
      <div class="owl-carousel owl-theme hero-carousel">
        <div class="hero-carousel__slide">
          <img src="css/img/home/hero-slide1.png" alt="" class="img-fluid">
          <a href="https://visualstudio.microsoft.com/ru/downloads/" class="hero-carousel__slideOverlay">
            <h3>VISUAL STUDIO: CODE</h3>
            <p>@lang('lang.zhazyp')</p>
          </a>
        </div>
          <div class="hero-carousel__slide">
          <img src="css/img/home/hero-slide2.png" alt="" class="img-fluid">
          <a href="http://brackets.io/" class="hero-carousel__slideOverlay">
            <h3>SUBLIME TEXT</h3>
            <p>@lang('lang.zhazyp')</p>
          </a>
        </div>
        <div class="hero-carousel__slide">
          <img src="css/img/home/hero-slide3.png" alt="" class="img-fluid">
          <a href="#" class="hero-carousel__slideOverlay">
            <h3>BRACKETS</h3>
            <p>@lang('lang.zhazyp')</p>
          </a>
        </div>
      </div>
    </section>

    <section class="section-margin calc-60px">
      <div class="container">
        <div class="section-intro pb-60px">
          <p>@lang('lang.kold')</p>
          <h2><span class="section-intro__style">@lang('lang.game_type')</span></h2>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="css/img/product/product1.png" alt="">
                <ul class="card-product__imgOverlay">
                  <li><button><a href = "https://ru.wikipedia.org/wiki/%D0%9A%D1%80%D0%B5%D1%81%D1%82%D0%B8%D0%BA%D0%B8-%D0%BD%D0%BE%D0%BB%D0%B8%D0%BA%D0%B8"><i class="ti-book"></a></i></button></li>
                </ul>
              </div>
              <div class="card-body">
                <p>@lang('lang.otu')</p>
                <h4 class="card-product__title"><a href="крестики нолики/game.html">@lang('lang.kres')</a></h4>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="css/img/product/product2.png" alt="">
                <ul class="card-product__imgOverlay">
                	<li><button><a href = "https://ru.wikipedia.org/wiki/Snake_(%D0%B8%D0%B3%D1%80%D0%B0)"><i class="ti-book"></a></i></button></li>
                </ul>
              </div>
              <div class="card-body">
                <p>@lang('lang.otu')</p>
                <h4 class="card-product__title"><a href="змейка/snake.html">@lang('lang.zme')</a></h4>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="css/img/product/product3.png" alt="">
                <ul class="card-product__imgOverlay">
                	<li><button><a href = "https://ru.wikipedia.org/wiki/%D0%A8%D0%B0%D1%88%D0%BA%D0%B8"><i class="ti-book"></a></i></button></li>
                </ul>
              </div>
              <div class="card-body">
                <p>@lang('lang.otu')</p>
                <h4 class="card-product__title"><a href="шашки/game.html">@lang('lang.waw')</a></h4>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="css/img/product/product4.png" alt="">
                <ul class="card-product__imgOverlay">
                	<li><button><a href = "https://ru.wikipedia.org/wiki/%D0%A1%D0%B0%D0%BF%D1%91%D1%80_(%D0%B8%D0%B3%D1%80%D0%B0)"><i class="ti-book"></a></i></button></li>
                </ul>
              </div>
              <div class="card-body">
                <p>@lang('lang.otu')</p>
                <h4 class="card-product__title"><a href="сапер/game.html">@lang('lang.sap')</a></h4>
             </div></div></div></div>
    </section>
    	<center>
<img src="https://i.imgur.com/obojRZ5.gif?noredirect" alt="альтернативный текст" width="100%">
 

    <section class="subscribe-position">
    	<div id = "bailanys">
      <div class="container">
        <div class="subscribe text-center">
          <h3 class="subscribe__title">@lang('lang.call') </h3>
          <div id="mc_embed_signup">
            <form method="get" class="subscribe-form form-inline mt-5 pt-1">
              <div class="form-group ml-sm-auto">
                <input class="form-control mb-1" type="email" name="EMAIL" placeholder="@lang('lang.email')" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email поштаңызды жазыңыз'" >
                <div class="info"></div>
              </div>
              <button class="button button-subscribe mr-auto mb-1" type="submit">@lang('lang.send')</button>
              </div>

            </form>
          </div>
          
        </div>
      </div>
    </section>


    

  <footer class="footer">
    <div class="footer-area">
      <div class="container">
        <div class="row section_gap">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-footer-widget tp_widgets">
							<h4 class="footer_title large_title">@lang('lang.kajet')</h4>
							<!-- <p>
								<b>Орындаған:</b>
"Ақпараттық жүйелер" мамандығының 2 курс студенттері<br>
<b>Қабылдаған:<br></b> Батырхан Серік Кермақынұлы<br>
Астаубаева Гульнар Нурпабаевна
              </p> -->
              <p>
                <u><i>@lang('lang.project')  </i></u>
                </p>
            </div>
          </div>
          <div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
            <div class="single-footer-widget tp_widgets">
              <h4 class="footer_title">@lang('lang.nav')</h4>
              <ul class="list">
                <li><a href="#bastapqy">@lang('lang.bas')</a></li>
                <li><a href="#proga">@lang('lang.kajetti')</a></li>
                <li><a href="#oiyndar">@lang('lang.game_type')</a></li>
                <li><a href="#bailanys">@lang('lang.bail')</a></li>
                <li><a href="#seti">@lang('lang.aleu')</a></li>
                <li><a href="#">@lang('lang.bail')</a></li>
              </ul>
            </div>
          </div>
					<div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
            <div class="single-footer-widget tp_widgets">
							<h4 class="footer_title"></h4>
							<div class="ml-40">
								<p class="sm-head">
									<span class="fa fa-location-arrow">@lang('lang.bail')</span>
									@lang('lang.addres')
								</p>
								<p>@lang('lang.univer')<br>@lang('lang.address')
							</p>
	
								<p class="sm-head">
									<span class="fa fa-phone"></span>
									@lang('lang.tel')
								</p>
								<p>
									8(705)799 93 93</p>
	
								<p class="sm-head">
									<span class="fa fa-envelope"></span>
									@lang('lang.poch')
								</p>
								<p>
									190103440@stu.sdu.edu.kz
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div id = "seti">
			<div class="container">
				<div class="row d-flex">
					<p class="col-lg-12 footer-text text-center">
						

             <div class="social twitter">
    <center><a href="https://twitter.com/sdukz" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>&nbsp;&nbsp;&nbsp;
  </div>
  <div class="social instagram">
    <a href="hhttps://www.instagram.com/sdukz/?hl=ru" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>&nbsp;&nbsp;&nbsp;
</div>
<div class="social facebook">
    <a href="https://www.facebook.com/sdukz/" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>&nbsp;&nbsp;&nbsp;    
</div>
<div class="social vk">
    <a href="https://vk.com/sdukz" target="_blank"><i class="fa fa-vk fa-2x"></i></a>&nbsp;&nbsp;&nbsp;    
</div>
				</div>
			</div>
		</div>
	</footer>
        

  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/skrollr.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="vendors/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/mail-script.js"></script>
  <script src="js/main.js"></script>
 
</body>
</html>