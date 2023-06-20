<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Sound</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- Styles -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{asset('sound')}}/bootstrap/css/bootstrap.min.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="{{asset('sound')}}/bootstrap/css/bootstrap-responsive.min.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="{{asset('sound')}}/style.css" id="dark" media="screen" />
		<link rel="stylesheet" type="text/css" href="{{asset('sound')}}/js/rs-plugin/css/settings.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="{{asset('sound')}}/styles/icons/icons.css" media="screen" />
		<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

	<!-- Favicon -->
		<link rel="shortcut icon" href="{{asset('sound')}}/images/favicon.png">
		<link rel="apple-touch-icon" href="{{asset('sound')}}/images/apple-touch-icon.png">
		<style>
			/* .video-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
  grid-gap: 20px;
} */

.vg .image-container {
  position: relative;
  overflow: hidden;
}

.vg img {
  display: block;
  width: 100%;
  height: auto;
  object-fit: cover;
}

.vg .play-button {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  display: flex;
  align-items: center;
  justify-content: center;
  width: 80px;
  height: 80px;
  border-radius: 50%;
  background-color: #ff4081; /* Pink color */
  transition: transform 0.3s ease-in-out;
  overflow: hidden;
  box-shadow: 0 0 0 0 rgba(255, 64, 129, 0.7);
}

.vg .play-button:before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background-color: rgba(255, 255, 255, 0.4); /* Transparent white */
  transform: scale(0);
  opacity: 0;
  border-radius: 50%;
  animation: ripple 1s ease-in-out infinite;
}

@keyframes ripple {
  0% {
    transform: scale(0);
    opacity: 0;
  }
  50% {
    transform: scale(1);
    opacity: 0.3;
  }
  100% {
    transform: scale(1.5);
    opacity: 0;
  }
}

.vg .play-button:hover {
  transform: translate(-50%, -50%) scale(1.2);
  box-shadow: 0 0 0 10px rgba(255, 64, 129, 0);
}

.vg .play-button i {
  color: #ffffff;
  font-size: 36px;
  animation: play-pulse 1s ease-in-out infinite;
}

@keyframes play-pulse {
  0%, 100% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.2);
  }
}

			#loader{
    position: fixed;
    width: 100%;
    height: 100%;
    background: #000 url({{asset('sound')}}/images/loader.gif) no-repeat center;
    /* background-size: cover; */
    background-position: center;
    z-index: 99999;
	

}
			/* CSS for the modal dialog */
.modal-dialog {
    width: 600px; /* Adjust the width as needed */
}

/* CSS for the modal content */
.modal-content {
    background-color: #000;
    color: #fff;
}

/* CSS for the modal header */
.modal-header {
    background-color: #333;
    color: #fff;
    border-bottom: none;
}

/* CSS for the modal title */
.modal-title {
    color: #fff;
}

/* CSS for the close button */
.close {
    color: #fff;
    opacity: 1;
}

/* CSS for the modal body */
.modal-body {
    padding: 20px;
}

/* CSS for the rating stars */
.rating {
    margin-bottom: 15px;
}

.rating label {
    color: #fff;
}

/* CSS for the textarea */
.textareamodal {
    width: 100%;
    height: 100px;
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 4px;
    border: 1px solid #ccc;
}

/* CSS for the submit button */
.send-message {
    background-color: #333;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
}

.send-message:hover {
    background-color: #000;
}

			.imi{
				height: 50px;
				width: 50px;
				background-position: center;
				background-size: cover;
				background-repeat: no-repeat;
			}
			.ivt{
				height: 150px;
				width: 350px;
				background-position: center;
				background-size: cover;
				background-repeat: no-repeat;
			}
			.icfi{
				height: 190px;
				width: 230px;
				background-position: center;
				background-size: cover;
				background-repeat: no-repeat;
			}
			.icci{
				height: 190px;
				width: 500px;
				background-position: center;
				background-size: cover;
				background-repeat: no-repeat;
			}
			.vci{
				height: 190px;
				width: 230px;
				background-position: center;
				background-size: cover;
				background-repeat: no-repeat;
			}
			.mti{
				height: 150px;
				width: 550px;
				background-position: center;
				background-size: cover;
				background-repeat: no-repeat;
			}
.team-card{
   
    background-color:rgba(19, 19, 19, 0.708);
    border: 25px solid var(--color-brand);
	border-radius: 7px;
    border: none;
}
.team-card:hover{
    box-shadow: 3px 3px 20px 3px #ff00907a;
}
.team-card-img{
    width: 80px;
    height: 80px;
    margin-bottom: 10px;
    border-radius: 180px;
}
.team-card-detail{
   padding: 2rem;
    font-family: "poppins", sans-serif;
    color: var(--color-base);
}
.tcsi{
	background-color: rgba(255, 0, 162, 0.463);
}
.tsi{
	padding-bottom: 1.2rem;
}
		</style>
</head>
<body id="fluidGridSystem">
	  <!-- Loader  -->
	<div id="loader"></div>
	<!-- Loader  -->
	<div id="layout" class="full">
		<!-- popup login -->
			<div id="popupLogin">
				<div class="def-block widget">
					<h4> Sign In </h4><span class="liner"></span>
					<div class="widget-content row-fluid">
						<form id="popup_login_form">
							<input type="text" name="login_username" id="login_username" onfocus="if (this.value=='username') this.value = '';" onblur="if (this.value=='') this.value = 'username';" value="username" placeholder="username">
							<input type="password" name="login_password" id="login_password" onfocus="if (this.value=='password') this.value = '';" onblur="if (this.value=='') this.value = 'password';" value="password" placeholder="password">
							<a href="#" class="tbutton small"><span>Sign In</span></a>
							<a href="#" class="tbutton color2 small"><span>Register</span></a>
						</form><!-- login form -->
					</div><!-- content -->
				</div><!-- widget -->
				<div id="popupLoginClose">x</div>
			</div><!-- popup login -->
			<div id="LoginBackgroundPopup"></div>
		<!-- popup login -->

		<header id="header" class="glue">
			<div class="row clearfix">
				<div class="little-head">
					{{-- <div class="sign-btn tbutton small"><span><a href="{{ route('login') }}">Sign In </a></span></div> --}}
					<div class="sign-btn tbutton small"><span>
						@if (Route::has('login'))
								@auth
								
									{{-- <a href="{{ route('logout') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a> --}}
									<a href="{{ route('dashboard') }}">Dashboard</a> &nbsp; | &nbsp;
									<a href="{{ route('profile.show') }}">Profile </a> &nbsp; | &nbsp;
									<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
										Logout
									</a>
									
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
									</form>
									
									@else
									<a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in </a> &nbsp; | &nbsp;

									@if (Route::has('register'))
										<a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"> Register</a>
									@endif
								@endauth
						@endif
					</span></div>
					
						
					
					<div class="social social-head">
						<a href="#" class="bottomtip" title="Follow us on Twitter" target="_blank"><i class="icon-twitter"></i></a>
						<a href="#" class="bottomtip" title="Like us on Facebook" target="_blank"><i class="icon-facebook"></i></a>
						<a href="#" class="bottomtip" title="Linkedin" target="_blank"><i class="icon-linkedin"></i></a>
					</div><!-- end social -->

					<div class="search">
						<form >
							<input id="search" type="text" placeholder="Start Searching ...">
							<button id="search-button" ><i class="icon-search"></i></button>
						</form><!-- end form -->
						
					</div><!-- search -->
				</div><!-- little head -->
			</div><!-- row -->

			<div class="headdown">
				<div class="row clearfix">
					<div class="logo bottomtip" title="Best and Most Popular Musics">
						<a href="{{url('index')}}"><img src="{{asset('sound')}}/images/logo.png" alt="Best and Most Popular Musics"></a>
					</div><!-- end logo -->

					<nav>
						<ul class="sf-menu">
							<li class="current selectedLava"><a href="{{ url('index') }}">Home<span class="sub">Start Here</span></a></li>
							<li><a href="{{ url('musics') }}">Musics<span class="sub">Latest Musics</span></a>
								
							</li>
							<li><a href="{{ url('videos') }}">Videos<span class="sub">Latest Videos</span></a></li>
							<li><a href="{{ url('categories') }}">Category<span class="sub">All Category</span></a>
								<ul>
									<li><a href="{{url('cateartist')}}">Music by Artists</a></li>
									<li><a href="{{url('catealbum')}}">Music by Albums</a></li>
									<li><a href="{{url('cateyears')}}">Music by Years</a></li>
									<li><a href="{{url('catevideoartist')}}">Video by Artists</a></li>
									<li><a href="{{url('catevideoalbum')}}">Video by Albums</a></li>
									<li><a href="{{url('catevideoyears')}}">Video by Years</a></li>
									
								</ul>
							</li>
							<li><a href="{{ url('contact') }}">Contact<span class="sub">Contact Us</span></a></li>
							<li><a href="{{ url('about') }}">About<span class="sub">About Us</span></a></li>
						</ul><!-- end menu -->
					</nav><!-- end nav -->
				</div><!-- row -->
			</div><!-- headdown -->
		</header><!-- end header -->
    @yield('content')
