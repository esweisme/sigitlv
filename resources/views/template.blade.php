<html>

<head>
    <title> @yield('judul') </title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}">
	<link rel="icon" href="{{ url('/images/logo.JPG') }}">

	<meta name="keywords" content="web, blog, sigit, wahyudi, ubt, tik, ngoding, php, html, css">
    <meta name="description" content="@yield('desc')">

    <!-- Google / Search Engine Tags -->
	<meta itemprop="name" content="@yield('judul')">
	<meta itemprop="description" content="@yield('desc')">	
	<meta itemprop="image" content="{{ url('/images/logo.JPG') }}">

	<!-- Facebook Meta Tags -->
	<meta property="og:url" content="{{ url()->current() }}"> 
	<meta property="og:title" content="@yield('judul')">
	<meta property="og:description" content="@yield('desc')">
	<meta property="og:image" content="{{ url('/images/logo.JPG') }}">

	<!-- Twitter Meta Tags -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="@yield('judul')">
	<meta name="twitter:description" content="@yield('desc')">
	<meta name="twitter:image" content="{{ url('/images/logo.JPG') }}">

	@yield('css')

</head>
<body>

	<header class="text-tengah">
		<h1 class="judul-web">Sigit Web</h1>
        <h2 class="deskripsi">Tulisan programmer</h2>
	</header>

	<button class="tombol"><span> Menu &equiv;</span></button>
	<nav>
		<ul>
			<li><a href="/">Beranda</a></li>
			<li><a href="/blog">Blog</a></li>
			<li><a href="/catatan">Catatan</a></li>
			<li><a href="/kontak">Kontak</a></li>
		</ul>
	</nav>

    @yield('konten')

   	@include('inc.footer')
	
	<script src="{{ url('/js/jquery-3.6.0.min.js') }}"></script>
	<script type="text/javascript">
		$(document).ready(function(){			
			$('.tombol').click(function(){
				$("nav").slideToggle("slow");
			});	
		});
	</script>
	
	@yield('script')

</body>
</html>