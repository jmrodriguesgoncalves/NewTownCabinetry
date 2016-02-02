<!doctype html>


<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>NEW TOWN CABINETRY </title>
		<!-- Mobile Meta -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Clarity is a Bootstrap-based, Responsive HTML5 Template">
		<meta name="author" content="bootstrapwizard.info">

		<!-- Font Awesome CSS -->
		<link href="{{ URL::asset('css/font-awesome/font-awesome.min.css') }}" rel="stylesheet">

		<!-- Simple Line Icons -->
		<link href="{{ URL::asset('css/simple-line-icons/simple-line-icons.css') }}" rel="stylesheet">

		<!-- Bootstrap main CSS -->
		<link href="{{ URL::asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">

		<!-- Web Fonts  -->
		<link href="{{ URL::asset('https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700') }}" rel='stylesheet' type='text/css'>

		<!-- yamm3 -->
		<link href="{{ URL::asset('css/yamm.css') }}" rel="stylesheet">

		<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('plugins/rs-plugin/css/settings.css') }}" media="screen" />

		<!-- Animate -->
		<link href="{{ URL::asset('css/animate/animate.min.css') }}" rel="stylesheet">

		<!-- owl-carousel -->
		<link href="{{ URL::asset('plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
		<link href="{{ URL::asset('plugins/owl-carousel/owl.theme.css') }}" rel="stylesheet">

		<!-- magnific-popup -->
		<link href="{{ URL::asset('plugins/magnific-popup/magnific-popup.css') }}" rel="stylesheet">

		<!-- flexslider -->
		<link href="{{ URL::asset('plugins/flexslider/flexslider.css') }}" rel="stylesheet">

		<!-- morris -->
		<link href="{{ URL::asset('plugins/morris/morris.css') }}" rel="stylesheet">

		<!-- Hover -->
		<link href="{{ URL::asset('css/hover/hover.min.css') }}" rel="stylesheet">

		<!-- prettify  -->
		<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
		<link href="{{ URL::asset('css/prettify/prettify.css') }}" rel="stylesheet">

		<!-- style -->
		<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">

		<!-- switcher -->
		<link href="{{ URL::asset('switcher/switcher.css') }}" rel="stylesheet">

		<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/colors/blue.css') }}" id="colors">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="wide">

		<!-- wrapper -->
		<div class="wrapper">

			<!-- Preloader -->
			<div id="preloader">
				<div id="status">&nbsp;</div>
			</div>
			<!-- //Preloader -->

			<!-- scrollToTop -->
			<a href="#" class="scrollToTop">
				<i class="fa fa-angle-up fa-2x"></i>
			</a>
			<!-- ./scrollToTop -->

			<!-- header -->
			<header id="header">

				<!-- top-header -->
				<div class="top-header bg-white hidden-xs">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<ul class="list-inline pull-left">
									<li><i class="fa fa-map-marker"></i> &nbsp; Newmarket, Ontario Canada</li>
									<li><i class="fa fa-phone"></i>&nbsp; Phone#:</li>
									<li><i class="fa fa-envelope-o"></i>&nbsp; Support@gmail.com</li>
								</ul>
							</div>
							<div class="col-md-6">
								<ul class="list-inline pull-right">
									<li><a href="#" class="icon-holder small circle"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" class="icon-holder small circle"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" class="icon-holder small circle"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#" class="icon-holder small circle"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#" class="icon-holder small circle"><i class="fa fa-youtube-play"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- //top-header -->


				<!-- navbar -->
				<div class="navbar navbar-v1 stay-top padd-tb-30 yamm" role="navigation">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="home-business.html">NEW TOWN CABINETRY</a>
							<!--<a class="navbar-brand" href="#"><span>c</span>larity</a>-->
						</div>
						<div class="navbar-collapse collapse">
							<ul class="nav navbar-nav navbar-right">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true">Home</a>
								</li>
								<!--menu li end here-->
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true">Manage <i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu" role="menu">
										<li class="dropdown-submenu">
											<a tabindex="-1" href="{{ URL::action('categories.index') }}">Categories </a>
											<ul class="dropdown-menu">
												<li><a href="{{ URL::action('categories.create') }}"> Add Category</a></li>
												<li><a href="{{ URL::action('categories.index') }}"> List Categories</a></li>
											</ul>
										</li>
										<li class="dropdown-submenu">
											<a tabindex="-1" href="{{ URL::action('suppliers.index') }}">Suppliers</a>
											<ul class="dropdown-menu">
												<li><a href="{{ URL::action('suppliers.create') }}">Add Supplier</a></li>
												<li><a href="{{ URL::action('suppliers.index') }}">List Suppliers</a></li>
											</ul>
										</li>
										<li class="dropdown-submenu">
											<a tabindex="-1" href="#">Products</a>
											<ul class="dropdown-menu">
												<li><a href="#">Add Product</a></li>
												<li><a href="#">List Products</a></li>
											</ul>
										</li>
									</ul>
									<li class="dropdown">
											<a tabindex="-1" href="#">Contact Us</a>
									</li>
								</li> <!--menu li end here-->
								
							</ul>
						</div><!--/.nav-collapse -->

					</div><!-- ./container -->
				</div>
				<!-- //navbar -->


			</header>
			<!-- /header -->



			<section class="padd-tb-60 bg-dark image-v2 bg-fixed">

				<div class="container">

					<div class="row">

						<div class="col-md-4 col-md-offset-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Create Category </h3>
								</div>
								<div class="panel-body">
									{{Form::open(array('url' => 'categories', 'name' => 'add'))}}
										<div class="form-group"><!-- Product Name field start-->
											{{ Form::label('name', 'Name', array('class' => 'col-xs-3 control-label')) }}
    										@if ($errors->has('name'))
											<div class="has-error">
											@endif
											{{ Form::text('name', '', array('class' => 'form-control', 'id' => 'name')) }}
										</div>
										<div class="form-group"><!-- Description field start -->
    										{{ Form::label('description', 'Details', array('class' => 'col-xs-3 control-label')) }}
											{{ Form::textarea('description', '', array('class' => 'form-control', 'id' => 'description')) }}
    									</div><!-- Description field end -->
										<div class="padd-t-20">
											{{ Form::submit('Add', array('class' => 'btn btn-theme btn-lg btn-block', 'onclick' => 'return confirm("Are you sure you want to add this category?")')) }}
											{{ Form::reset('Reset Form', array('class' => 'btn btn-red btn-lg btn-block'))}}
										</div>
									{{ Form::close() }}

								</div>
								@if ($errors->has('name'))
								<div class="alert alert-danger" role="alert">
									NAME FIELD IS REQUIRED!
								</div>
								@endif
							</div>
						</div>
					</div><!-- ./row -->

				</div><!-- ./container -->
			</section>
		</div>
		<!-- //wrapper -->

		<!-- jquery -->
		<script src="{{ URL::asset('js/jquery-1.11.3.min.js') }}"></script>
		<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

		<!-- morris -->
		<script src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.4/raphael-min.js') }}"></script>
		<script type="{{ URL::asset('text/javascript" src="plugins/morris/morris.min.js') }}"></script>

		<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
		<script type="text/javascript" src="{{ URL::asset('plugins/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('plugins/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>

		<!-- validator  -->
		<script type="text/javascript" src="{{ URL::asset('plugins/validator/validator.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('plugins/validator/form-scripts.js') }}"></script>

		<!-- magnific-popup -->
		<script type="text/javascript" src="{{ URL::asset('plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

		<!-- owl-carousel -->
		<script type="text/javascript" src="{{ URL::asset('plugins/owl-carousel/owl.carousel.min.js') }}"></script>

		<!-- wow -->
		<script type="text/javascript" src="{{ URL::asset('plugins/wow/wow.js') }}"></script>

		<!-- appear -->
		<script type="text/javascript" src="{{ URL::asset('plugins/appear/jquery.appear.js') }}"></script>

		<!-- waypoints -->
		<script type="text/javascript" src="{{ URL::asset('plugins/waypoints/jquery.waypoints.min.js') }}"></script>

		<!-- counter-up -->
		<script type="text/javascript" src="{{ URL::asset('plugins/counterup/jquery.counterup.min.js') }}"></script>

		<!-- countdown -->
		<script type="text/javascript" src="{{ URL::asset('plugins/countdown/jquery.countdown.min.js') }}"></script>

		<!-- gmaps  -->
		<script type="text/javascript" src="{{ URL::asset('https://maps.googleapis.com/maps/api/js?v=3.exp') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('plugins/gmaps/gmaps.js') }}"></script>

		<!-- smooth-scroll -->
		<script type="text/javascript" src="{{ URL::asset('plugins/smooth-scroll/smooth-scroll.js') }}"></script>

		<!-- flexslider -->
		<script type="text/javascript" src="{{ URL::asset('plugins/flexslider/jquery.flexslider-min.js') }}"></script>


		<!-- switcher -->
		<script type="text/javascript" src="{{ URL::asset('switcher/switcher.js') }}"></script>

		<!-- main -->
		<script src="{{ URL::asset('js/main.js') }}"></script>


	</body>
</html>

