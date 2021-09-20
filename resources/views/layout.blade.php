
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Aplikasi Data Kepegawaian</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/prism-okaidia.css') }}">
	<link rel="stylesheet" href="{{ asset('css/custom.min.css') }}">
</head>
<body>
	<div class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
		<div class="container">
			<a href="#" class="navbar-brand">Aplikasi Data Kepegawaian</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		</div> 
	</div>
    <div class="container">
        
        @yield('content')

        <footer id="footer">
            <div class="row">
                <div class="col-lg-12">
                    <p>Template by <a href="https://bootswatch.com/">Bootswatch</a>.</p>
                    <p>Code released under the <a href="https://github.com/thomaspark/bootswatch/blob/master/LICENSE">MIT License</a>.</p>
                    <p>Based on <a href="https://getbootstrap.com/" rel="nofollow">Bootstrap</a>. Icons from <a href="https://fontawesome.com/" rel="nofollow">Font Awesome</a>. Web fonts from <a href="https://fonts.google.com/" rel="nofollow">Google</a>.</p>
                </div>
            </div>
        </footer>
    </div>
</div>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/prism.js') }}" data-manual></script>
<script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>