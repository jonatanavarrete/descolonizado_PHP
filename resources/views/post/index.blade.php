@extends('layouts.master')

@section('viewport')
 		<meta name="viewport" content="width=device-width, initial-scale=1">
@endsection
@section('styles')
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{ URL::to('css/normalize.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ URL::to('css/base.css') }}" />
@endsection
@section('title')
	Descolonizado
@endsection

@section('content')
				<!-- sections -->
				<section class="section section--current">
					<div class="section__content">
						<h2 class="section__title">Espacio</h2>
						<p class="section__description"><span class="section__description-inner">Hace a&ntilde;os que me propongo montar mi espacio. Parece ser que ha llegado la hora. Aqu&iacute; podr&aacute;s encontrar mi <a href="https://github.com/jonatanavarrete" target="_BLANK">GitHub</a> (bastante pobre), opiniones de restaurantes, rutas de ciclismo, viajes y muchas m&aacute;s cosas sobre mi.</span></p>
					</div>
					<div class="section__img">
						<div class="section__img-inner" style="background-image: url({{ URL::to('images/home_first_background.jpg')}})"></div>
					</div>
					<div class="section__more">
						<div class="section__more-inner section__more-inner--bg1">
							<span class="section__more-text">Quieres saber qu&eacute; hago?</span>
							<a href="#" class="section__more-link">
								<span class="section__more-linktext">Preg&uacute;ntame:</span>
								<span class="section__more-linktext"><a href="mailto:jonatanorama@gmail.com">jonatanorama@gmail.com</a></span>
								<span class="section__more-linktext"><a href="https://twitter.com/jonatanavarrete" target="_BLANK">@jonatanavarete</a></span>
							</a>
						</div>
					</div>
					<div class="section__expander"></div>
					<ul class="section__facts">
						<li class="section__facts-item">
							<h3 class="section__facts-title">Mis pr&oacute;ximos objetivos...</h3>
							<span class="section__facts-detail">Lanzar bot Telegram y terminar el blog</span>
						</li>
						<li class="section__facts-item">
							<h3 class="section__facts-title">Esta &uacute;ltima semana...</h3>
							<iframe height='160' width='300' frameborder='0' allowtransparency='true' scrolling='no' src='https://www.strava.com/athletes/3516608/activity-summary/d0245c632de0a980e2b8dc76d868364f8379dbe2'></iframe>
						</li>
						
					</ul>
				</section><!--/ section -->
			
@endsection

@section('scripts')
    	<script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this page in a modern browser that supports CSS Variables.");</script>
		<script src="{{ URL::to('js/imagesloaded.pkgd.min.js') }}"></script>
		<script src="{{ URL::to('js/charming.min.js') }}"></script>
		<script src="{{ URL::to('js/anime.min.js') }}"></script>
		<script src="{{ URL::to('js/main.js') }}"></script>
@endsection('scripts')