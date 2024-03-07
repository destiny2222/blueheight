<!DOCTYPE html>
<html lang="zxx">
    
<head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta name="description" content="Blue height travel is a travel abroad consulting firm in Nigeria.We specialize in providing seamless travel experience as well as international study abroad services. We have an impressive track record of successfully helping students study abroad, as well as help family get a tourist visa.">
        <meta name="author" content="Blue Height Travel">
        <meta name="keywords" content="travel agency, agency, visa, visa application,tourism, blue height travel">
        
        <link rel="shortcut icon" type="image/x-icon" href="https://travellers-ebon.vercel.app/assets/img/black_logo.png">
        <meta property="og:image" content="https://travellers-ebon.vercel.app/assets/img/black_logo.png" />
        <!-- Favicon and touch Icons -->
        <link href="assets/img/favicon.png" rel="shortcut icon" type="image/png">
        <link href="assets/img/apple-touch-icon.html" rel="apple-touch-icon">
        <link href="assets/img/apple-touch-icon-72x72.html" rel="apple-touch-icon" sizes="72x72">
        <link href="assets/img/apple-touch-icon-114x114.html" rel="apple-touch-icon" sizes="114x114">
        <link href="assets/img/apple-touch-icon-144x144.html" rel="apple-touch-icon" sizes="144x144">

        <!-- Page Title -->
        <title>@yield('title' ) | {{ config('app.name') }}</title>    
        
        <!-- Styles Include -->
        <link rel="stylesheet" href="assets/css/main.css">
        
    </head>


    <body>

        <!-- Preloader -->
        <div id="preloader">
			<div class="preloader-inner">
				<div class="spinner"></div>
				<div class="loading-text">
					<span data-preloader-text="B" class="characters">B</span>
					
					<span data-preloader-text="L" class="characters">L</span>
					
					<span data-preloader-text="U" class="characters">U</span>
					
					<span data-preloader-text="E" class="characters">E</span>
					
					<span data-preloader-text="H" class="characters">H</span>

					<span data-preloader-text="E" class="characters">E</span>

					<span data-preloader-text="I" class="characters">I</span>

					<span data-preloader-text="G" class="characters">G</span>

					<span data-preloader-text="H" class="characters">H</span>

					<span data-preloader-text="T" class="characters">T</span>
				</div>
			</div>
		</div>

        
        <!-- Main Header -->
         @include('layout.header')
        <!-- End Main Header -->			
        
        <!-- Main Wrapper-->
        <main class="wrapper">
            @yield('content')
        </main>

        <!-- Footer 2 -->
       @include('layout.footer')


        <div class="totop">
            <a href="#"><i class="bi bi-chevron-up"></i></a>
        </div>
        

        <!-- scripts -->
        @include('layout.script')
        @include('sweetalert::alert')
    </body>
</html>    