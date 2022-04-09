<!doctype html>
<html lang="en">
	@include('partials.head')
	<body>
		<div class="container">
			<!-- NAVBAR -->
			@include('partials.navbar')
			<!-- Content --> @yield('content')
			<!-- FOOTER -->
			@include('partials.footer')
		</div>
	</body>
</html>