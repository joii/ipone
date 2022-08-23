<!DOCTYPE html> 
<html lang="en"> <!-- class="nav-opened"-->

<head> 
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<meta name="apple-mobile-web-app-capable" content="yes"/> 

<link rel="icon" href="{{ asset('')}}frontend/img/favicon.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="{{ asset('')}}frontend/img/favicon.ico" type="image/x-icon" />
 
<title>I.P. ONE</title>  

<link href="{{ asset('frontend/css/bootstrap/bootstrap.min.css')}}" rel="stylesheet">  
<link href="{{ asset('frontend/css/animate.css')}}" rel="stylesheet">   
<link href="{{ asset('frontend/css/swiper.css')}}" rel="stylesheet"> 
<link href="{{ asset('frontend/css/jquery.fancybox.css')}}" rel="stylesheet">  
<link href="{{ asset('frontend/css/global.css')}}" rel="stylesheet">   
<style>
.spotlight_swivel {
	-webkit-animation: rotate_spotlight 5s linear ;
	animation: rotate_spotlight 5s linear;
	animation-iteration-count:1; 
	animation-play-state:inherit;
    animation-delay: 4s;
    -webkit-animation-fill-mode: forwards;
}

.spotlight {
  position: absolute;
  top: 1vh;
  left: calc(50% - 150vh);
  transform: scale(3,6);
}

.spotlight::before {
 opacity: 0;
 display: none;

}
.spotlight::after {
  content: '';
  position: absolute;
  top: -50vh;
  display: block;
  opacity: 0.8;
  background-image: linear-gradient(to right bottom, #051937, #FCE8A9, #FCDF81, #FED03F, #FED03F);
  border-radius: 100%;
  -webkit-border-radius: 100%;
  -moz-border-radius: 100%;
  -khtml-border-radius:100%;
  width: 100vh;
  height: 100vh;
  clip: rect(50vh, 100vh, 100vh, 50vh);
  transform: rotate(45deg);
   /* clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%); */

 
}


@-webkit-keyframes rotate_spotlight {
  0% {
    transform: rotate(0deg) scaleY(1) translateY(0);
	opacity: 1;
  }
  25% { 
    transform: rotate(-15deg) scaleY(1.1) translateY(-3vh);
	opacity: 0.7;
  }
  50% {
    transform: rotate(0deg) scaleY(1) translateY(0);
	opacity: 0.7;
  }
  75% {
    transform: rotate(15deg) scaleY(1.1) translateY(-3vh);
	opacity: 0.7;
	
  }
}

@keyframes rotate_spotlight {
  0% {
    transform: rotate(0deg) scaleY(1) translateY(0);
	opacity: 1;
  }
  25% {
    transform: rotate(-15deg) scaleY(1.1) translateY(-3vh);
	opacity: 0.7;
  }
  50% {
    transform: rotate(0deg) scaleY(1) translateY(0);
	opacity: 0.7;
  }
  75% {
    transform: rotate(15deg) scaleY(1.1) translateY(-3vh);
	opacity: 0.7;
	
  }
}


</style>
</head>

<body>

<div class="preload"></div>
<div class="page p-0">
	<div class="page-animate">
		<div class="logo">
			<img class="w-100" src="{{ asset('frontend/img/logo.svg')}}" alt="">
		</div>
		<div class="circle"></div>
	</div>
 

    @include('frontend.body.header')

	@include('frontend.body.nav_slide')

	@yield('content')
	
    @include('frontend.body.footer')
</div><!--page-->
 
  
<script src="{{asset('frontend/js/jquery-3.4.1.min.js')}}"></script>  
<script src="{{asset('frontend/js/bootstrap/popper.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/ie11CustomProperties.js')}}"></script>
<script src="{{asset('frontend/js/wow.js')}}"></script>   
<script src="{{asset('frontend/js/swiper.js')}}"></script> 
<script src="{{asset('frontend/js/jquery.fancybox.js')}}"></script>       
<script src="{{asset('frontend/js/custom.js')}}"></script> 
 
 
</body>
</html>
