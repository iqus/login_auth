 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title> {{$title}} </title>
 	{{HTML:style('css/bootstrap.css')}}
 	{{HTML:script('js/bootstrap.css')}}
 </head>
 <body>
 	<div class="navbar">
 		<div class="navbar-inner">
 			{{HTML:link('/','login',array('class'=>'brand')) }}
 			<ul class="nav pull-right">
 				@if(Auth:user())
 					<li> {{ HTML::link('logout','logout') }} </li>
 				@else
 					<li>  {{ HTML::link('login','login')}} </li>
 				@endif
 				
 			</ul>
 		</div> 		
 	</div>
 	<div class="container">
 		<!-- @include('plugins.status') -->
 		@yield('content')
 	</div>
 </body>
 </html>
 