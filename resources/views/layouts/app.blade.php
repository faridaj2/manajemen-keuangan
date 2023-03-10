<!DOCTYPE html>

<html lang="en" class="light">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link href="http://rubick.left4code.com/dist/images/logo.svg" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Midone Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">

    <title>Dashboard - Midone - Tailwind HTML Admin Template</title>

    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="//unpkg.com/alpinejs" defer></script>
    
    <!-- END: CSS Assets-->
    
    @livewireStyles
</head>
<!-- END: Head -->

<body class="py-5">
    
    
    <!-- BEGIN: Mobile Menu -->
        
        @include('layouts.nav.mobile')
    
    <!-- END: Mobile Menu -->
    
    <div class="flex mt-[4.7rem] md:mt-0">
        <!-- BEGIN: Side Menu -->
        @include('layouts.nav.side-nav')
        
        <!-- END: Side Menu -->
        <!-- BEGIN: Content -->
        <div class="content">
            @yield('content')
        </div>
        
        
        {{-- End Content --}}
    </div>
    







    {{-- <!-- BEGIN: Dark Mode Switcher-->
    <div data-url="http://rubick.left4code.com/page/side-menu/dark/dashboard-overview-1"
        class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
        <div class="mr-4 text-slate-600 dark:text-slate-200">Dark Mode</div>
        <div class="dark-mode-switcher__toggle  border"></div>
    </div>
    <!-- END: Dark Mode Switcher-->
    <!-- BEGIN: Main Color Switcher-->
    <div
        class="shadow-md fixed bottom-0 right-0 box border rounded-full h-12 px-5 flex items-center justify-center z-50 mb-10 mr-52">
        <div class="mr-4 hidden sm:block text-slate-600 dark:text-slate-200">Color Scheme</div>
        <a href="http://rubick.left4code.com?color_scheme=default"
            class="block w-8 h-8 cursor-pointer bg-blue-800 rounded-full border-4 mr-1 hover:border-slate-200 border-slate-300 dark:border-darkmode-800/80"></a>
        <a href="http://rubick.left4code.com?color_scheme=theme-1"
            class="block w-8 h-8 cursor-pointer bg-emerald-900 rounded-full border-4 mr-1 hover:border-slate-200 border-white dark:border-darkmode-600"></a>
        <a href="http://rubick.left4code.com?color_scheme=theme-2"
            class="block w-8 h-8 cursor-pointer bg-blue-900 rounded-full border-4 mr-1 hover:border-slate-200 border-white dark:border-darkmode-600"></a>
        <a href="http://rubick.left4code.com?color_scheme=theme-3"
            class="block w-8 h-8 cursor-pointer bg-cyan-900 rounded-full border-4 mr-1 hover:border-slate-200 border-white dark:border-darkmode-600"></a>
        <a href="http://rubick.left4code.com?color_scheme=theme-4"
            class="block w-8 h-8 cursor-pointer bg-indigo-900 rounded-full border-4 hover:border-slate-200 border-white dark:border-darkmode-600"></a>
    </div>
    <!-- END: Main Color Switcher--> --}}

    <!-- BEGIN: JS Assets-->
{{--     
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcUcow5QHjitBVOfkTdy44l7jnaoFzW1k&libraries=places">
    </script> --}}
    <script src="{{ asset('dist/js/app.js') }}"></script>
    {{-- <script src="{{ asset('dist/js/map.js') }}"></script> --}}
    <script src="{{ asset('dist/js/nav.js') }}"></script>
     
    <!-- END: JS Assets-->
    @livewireScripts
</body>

</html>
