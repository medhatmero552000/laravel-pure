@php
  $lang=App::getlocale()=='ar'?'-rtl':'';
  $dir;
@endphp
<!DOCTYPE html>

<html  lang="{{ App::getLocale() }}" dir="{{ App::getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
  @include('Admin\partials\head')

<body >
	<div class="main-wrapper">
@include('Admin\partials\sidebar')
	
	
		<div class="page-wrapper">
					@include('Admin\partials\navbar')
		

			<div class="page-content">
@yield('content')


		@include('Admin\partials\footer')
		
      
    </body>
    
    </div>
  </div>
@include('Admin\partials\scripts')

</html>    