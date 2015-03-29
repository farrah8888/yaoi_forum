<!DOCTYPE html>
<html>
<head lang="zh">
  <meta charset="UTF-8"/>
  <title>同人论坛</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no"/>
  <meta name="renderer" content="webkit"/>
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <link rel="alternate icon" type="image/x-icon" href="{{ URL::asset('i/favicon.ico') }}"/>
  <link rel="stylesheet" href="//cdn.amazeui.org/amazeui/2.1.0/css/amazeui.min.css"/>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" />
   



  {{ HTML::style('css/custom.css') }}
</head>
<body>
<header class="am-topbar am-topbar-fixed-top">
  <div class="am-container">
         <a href="/" class="navbar-brand">同人论坛</a> 
    @include('_layouts.nav')

  </div>

</header>


<div>
 
   @yield('header-right')

</div>


@yield('content')

@include('_layouts.footer')

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="//cdn.bootcss.com/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdn.amazeui.org/amazeui/2.1.0/js/amazeui.min.js"></script>
</body>
</html>
