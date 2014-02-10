<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- 最新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="/app/assets/css/bootstrap.min.css">

<!-- 可选的Bootstrap主题文件（一般不用引入） -->
<link rel="stylesheet" href="/app/assets/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="/app/assets/css/lusuy.css">
@yield('title')
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
@yield('content')
<script src="/app/assets/js/sea.js"></script>
<script>
	seajs.config({
		base: '/app/assets/js/sea-modules/',
		alias: {
			"jquery": "jquery-1.11.0.min.js",
			"bootstrap": "bootstrap.min.js"
		}
	});
</script>
<script>
@yield('script')
</script>
</body>
</html>