<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>🍷 @yield('pageTitle') :: WineCellar</title>
<meta name="description" content="@yield('metaDescription')"/>
<meta name="keywords" content="@yield('metaKeywords')"/>
<meta name="author" content="Mariusz"/>
<meta name="csrf-token" content="{{ csrf_token() }}"/>

<meta property="og:title" content="@yield('ogTitle')">
<meta property="og:description" content="@yield('ogDescription')">
<meta property="og:image" content="@yield('ogImage')">
<meta property="og:url" content="@yield('ogUrl')">

<meta name="twitter:title" content="@yield('twitterTitle')">
<meta name="twitter:description" content="@yield('twitterDescription')">
<meta name="twitter:image" content="@yield('twitterImage')">
<meta name="twitter:card" content="@yield('twitterCard')">

<link rel="stylesheet" href="{{ asset('css/app.css') }}">
