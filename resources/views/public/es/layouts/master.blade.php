<!DOCTYPE html>
<html lang="español">
<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Peru travel</title>
    
 
    	 @include('public.partials.header')
 

</head>

<body>
   
      @include('public.es.layouts.navbar')

      {{-- slider --}}

       
      {{-- fin slider --}}

    @yield('content')




    	<!--========= scrip footer ===========-->
    	@include('public.partials.footer')
    	<!--========= fin  ===========-->

    @yield('script')


   
</html>