<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Тіркелу бөлімі</title>
	<link rel="icon" href="img/Fevicon.png" type="image/png">
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="vendors/nouislider/nouislider.min.css">
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
              <li class="nav-item active"><a class="nav-link" href="index.html">Басты бет</a></li>
              <li class="nav-item submenu dropdown">
                <a href="https://narxoz.kz/" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Narxoz</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="https://narxoz.kz/">Narxoz.kz</a></li>
                </ul>
							</li>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">WEB</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="https://ru.wikipedia.org/wiki/JavaScript">JavaScript</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://ru.wikipedia.org/wiki/CSS">CSS</a></li>
                  <li class="nav-item"><a class="nav-link" href="https://ru.wikipedia.org/wiki/HTML">HTML</a></li>
                </ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="contact.html">Біз жайлы</a></li>
           
							<li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Тіркелу</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="login.html">Кіру</a></li>
                  <li class="nav-item"><a class="nav-link" href="register.html">Тіркелу</a></li>
                </ul>
              </li>
              </div>
        </div>
      </nav>
    </div>
  </header>

	<section class="blog-banner-area" id="category">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Тіркелу үшін төменірек түсіңіз</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Бастапқы бет -> Кіру -> Тіркелу </a></li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>

	<section class="login_box_area section-margin">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<div class="hover">
							<h4>Сіз бұл сайтта бұрыннан барсыз ба?</h4>
							<p>Егер бұл сайтқа тіркелген болсаңыз, кіру бөліміне өтіңіз</p>
							<a class="button button-account" href="login.html">Кіру</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner register_form_inner" >
						<h3>Жаңа аккаунт енгізу үшін мәліметтеріңізді енгізіңіз</h3>
						<form class="row login_form"  id="register_form" method="POST"  enctype="multipart/form-data" action="{{ route('myform') }}" >
							@csrf
                            <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Аты-жөніңіз" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Аты-жөніңіз'">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="email" name="email" placeholder="Поштаңыз" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Поштаңыз'">
              </div>
              <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="password" name="password" placeholder="Құпиясөз" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Құпиясөз'">
              </div>
              <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="confirmPassword" name="confirm" placeholder="Құпиясөзді растаңыз" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Құпиясөзді растаңыз'">
                                <input type="file" name = "Image"  accept="image/png, image/jpeg">
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="selector">
									<label for="f-option2">Мәліметерімді сақтап қою</label>
								</div>
							</div>
							<div class="col-md-12 form-group">
								<a href="http://127.0.0.1:8000/register"> <button type="submit" value="submit" class="button button-register w-100" action="{{ route('mymail') }}"
 >Тіркелу</button></a>
							</div>
						</form>
					</div>
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
							<h4 class="footer_title large_title">Қажет ақпарат</h4>
							<p>
								<b>Орындаған:</b>
"Ақпараттық жүйелер" мамандығының 2 курс студенттері<br>
<b>Қабылдаған:<br></b> Батырхан Серік Кермақынұлы<br>
Астаубаева Гульнар Нурпабаевна
              </p>
              <p>
                <u><i>Бұл сайт қорытынды емтиханға арналып жасалған жоба  </i></u>
                </p>
            </div>
          </div>
          <div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
            <div class="single-footer-widget tp_widgets">
              <h4 class="footer_title">Навигация</h4>
              <ul class="list">
                <li><a href="#bastapqy">Бастапқы бет</a></li>
                <li><a href="#proga">Қажетті бағдарламалар</a></li>
                <li><a href="#oiyndar">Ойын түрлері</a></li>
                <li><a href="#bailanys">Бізбен байланысу</a></li>
                <li><a href="#seti">Әлеуметтік желілер</a></li>
                <li><a href="#">Біз жайлы</a></li>
              </ul>
            </div>
          </div>
					<div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
            <div class="single-footer-widget tp_widgets">
							<h4 class="footer_title">Бізбен байланысқа шығу ақпараттарымыз</h4>
							<div class="ml-40">
								<p class="sm-head">
									<span class="fa fa-location-arrow"></span>
									Мекен-жайымыз
								</p>
								<p>Нархоз Университеті<br>1-микрорайон, 81
							</p>
	
								<p class="sm-head">
									<span class="fa fa-phone"></span>
									Телефондарымыз:
								</p>
								<p>
									8(705)799 93 93<br>
									8(776)753 63 13
								</p>
	
								<p class="sm-head">
									<span class="fa fa-envelope"></span>
									Поштамыз
								</p>
								<p>
									nazym.muratkhanova@narxoz.kz<br>
									eldar.toleubay@narxoz.kz
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
						Muratkhanova Nazym <br>Toleubay Eldar<br></p>

             <div class="social twitter">
    <center><a href="https://twitter.com/narxoz_official" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>&nbsp;&nbsp;&nbsp;
  </div>
  <div class="social instagram">
    <a href="https://www.instagram.com/_.muratkhanova._/" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>&nbsp;&nbsp;&nbsp;
</div>
<div class="social facebook">
    <a href="https://ru-ru.facebook.com/narxoz.official/" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>&nbsp;&nbsp;&nbsp;    
</div>
<div class="social vk">
    <a href="https://vk.com/narxoz_official" target="_blank"><i class="fa fa-vk fa-2x"></i></a>&nbsp;&nbsp;&nbsp;    
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