<!DOCTYPE html>
<html lang="en">
<head>
	<title>Guitar shop</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="guitar" />
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- css -->
	<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="all" />
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css" media="all" />
	<!--// css -->
	<!-- font -->
	<link href="{{ asset('//fonts.googleapis.com/css?family=Source+Sans+Pro') }}" rel="stylesheet">
	<link href="{{ asset('//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic') }}" rel='stylesheet' type='text/css'>
	<!-- //font -->
	<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.js') }}"></script>
</head>
<body>
	<div class="header-top-w3layouts">
		<div class="container">
			<div class="col-md-6 logo-w3">
				<a href='/'><img src="{{ asset('images/logo2.png') }}" alt=" " /><h1>GUITAR SHOP</h1></a>
			</div>
			<div class="col-md-6 phone-w3l">
				<!-- Right Side Of Navbar -->
				<a href="/admin"><button>Adminka</button></a>
				<ul class="nav navbar-nav navbar-right">
					<!-- Authentication Links -->
					@if (Auth::guest())
					<li><a href="{{ route('login') }}">Login</a></li>
					<li><a href="{{ route('register') }}">Register</a></li>
					@else
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							{{ Auth::user()->name }} <span class="caret"></span>
						</a>
						
						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="{{ route('logout') }}"
								onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
								Logout
							</a>
							
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								{{ csrf_field() }}
							</form>
						</li>
					</ul>
				</li>
				@endif
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Language<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#" class="language" rel="it-IT">Italian</a></li>
						<li><a href="#" class="language" rel="en-US">English</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="header-bottom-w3ls">
	<div class="container">
		<div class="col-md-7 navigation-agileits">
			<nav class="navbar navbar-default">
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav ">
						<li class=" active"><a href='/' class="hyper "><span>Home</span></a></li>	
						<li class="dropdown ">
							<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Guitars<b class="caret"></b></span></a>
							<ul class="dropdown-menu multi">
								<div class="row">
									<div class="col-sm-4">
										<ul class="multi-column-dropdown">
											@foreach ($categories as $category)
												@if ($category->parent_id == NULL)
												<li class="dropdown-submenu">
													<li><a href='{{url ("guitars/$category->alias")}}' tabindex="-1" ><i class="fa fa-angle-right" aria-hidden="true"></i>{{$category->name}}</a></li>
															</li>
 												@foreach ($categories as $sub_category)
												@if ($sub_category->parent_id == $category->id)
													<li class="dropdown-submenu">
														<a href='{{url ("guitars/$sub_category->alias")}}'  tabindex="-1" ></i>	{{$sub_category->name}}</a>
													</li>
												@endif
												@endforeach
												@endif
											@endforeach
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>	
							</ul>
						</li>
						<li><a href='{{url ("contact")}}' class="hyper"><span>Contact Us</span></a></li>
					</ul>
				</div>
			</nav>
		</div>
		<script>
			$(document).ready(function(){
				$(".dropdown").hover(            
					function() {
						$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
						$(this).toggleClass('open');        
					},
					function() {
						$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
						$(this).toggleClass('open');       
					}
					);
			});
		</script>
		<div class="col-md-4 search-agileinfo">
			<form action="{{url("search")}}" method="post">
				{{ csrf_field() }}
				<input type="search" name="search" placeholder="Search for a Product..." required="">
				<button type="submit" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
				</button>
			</form>
		</div>
		
		<div class="col-md-1 cart-wthree">
			<div class="cart"> 
				<button class="w3view-cart" type="submit" name="submit" value="" onclick="show_cart()"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- cart-modal-window -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Корзина</h4>
			</div>
			<div class="modal-body" id ="modal-body">
				<table id="Cart_table">
					<thead>
						<tr>
							<th>Наименование</th>
							<th>Кол-во</th>
							<th>Цена</th>
							<th>Тотал прайс</th>
						</tr>
					</thead>
					<tbody>
						<tr id='1'>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="modal-footer">
				<button class="checkout btn btn-success" onclick="checkout()">Оформить заказ</button></a>
				<p id = "total_price" style="text-align: left; display:inline-block;"></p>
				<button type="button" class="btn" onclick="clear_cart()">Очистить</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Закрыть</button>
			</div>
		</div>
	</div>
</div>

@yield('content')

<!-- newsletter -->
<div class="newsletter">
	<div class="container">
		<div class="col-md-6 w3agile_newsletter_left">
			<h2>Newsletter</h2>
			<p>Excepteur sint occaecat cupidatat non proident, sunt.</p>
		</div>
		
		<input type="email" id="email" name="email" value="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'email';}" required="">
		<button class="btn btn-primary" onclick="add_subscriber()">Сохранить</button>
		
	</div>
	<div class="clearfix"> </div>
</div>
</div>
<!-- //newsletter -->
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-grids fgd1">
			<a href='/'><img src="{{ asset('images/logo2.png') }}" alt=" " /><h3>GUITAR<span>SHOP</span></h3></a>
			<ul>
				<li>1234k Avenue, 4th block,</li>
				<li>New York City.</li>
				<li><a href="mailto:info@example.com">info@example.com</a></li>
				<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
			</ul>
		</div>
		<div class="col-md-3 footer-grids fgd2">
			<h4>Information</h4> 
			<ul>
				<li><a href='{{url ("contact")}}'>Contact Us</a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grids fgd3">
			<h4>Shop</h4> 
			<ul>
				<li><a href='{{asset ("guitars/solid_body")}}'>Solid Body</a></li>
				<li><a href='{{asset ("guitars/hollow_body")}}'>Hollow Body</a></li>
				<li><a href='{{asset ("guitars/bass")}}'>Bass</a></li>
				<li><a href='{{asset ("guitars/acoustic")}}'>Acoustic</a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grids fgd4">
			<h4>My Account</h4> 
			<ul>
				<li><a href='/login'>Login</a></li>
				<li><a href='/register'>Register</a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
		<p class="copy-right">© 2016 Guitar shop . All rights reserved</a></p>
	</div>
</div>

<script src="{{ asset('js/minicart.js') }}"></script>
</body>
</html>
