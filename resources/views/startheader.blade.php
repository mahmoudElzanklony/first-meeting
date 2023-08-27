<html>
   <head>
   	  <meta charset="utf-8">

	  <script data-ad-client="ca-pub-2576924732496258" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
          <meta name="csrf-token" content="{{ csrf_token() }}">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          @isset($meta_description)
          <meta name="description" content="{{$meta_description}}">
          <meta name="keywords" content="{{$keywords}}">
          <meta property="og:title" content="{{$title}}" />
          <meta property="og:url" content="{{$url}}" />
          <meta property="og:type" content="meetings" />
          <meta property="og:description" content="{{$meta_description}}" />
          <meta property="og:image" content="{{$og_image}}" />
          <meta property="og:locale" content="ar" />
          <meta property="og:site_name" content="first meeting" />
          <meta name="twitter:title" content="{{$title}}" />
          <meta name="twitter:card" content="summary">
          <meta name="twitter:description" content="{{$meta_description}}">
          <meta name="twitter:site" content="{{$url}}">
          <meta name="twitter:image" content="{{$og_image}}">
          @endisset
          <title><?php if(isset($title)) echo $title; else echo 'اللقاء الاول'; ?></title>