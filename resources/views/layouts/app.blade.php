<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>@yield("title") Laravel Eager Loading</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="{{ mix('css/app.css')}}">

</head>
<body>
	<div class="bg-blue-100 min-h-screen" id="root">
        @include("layouts._navbar")
		@yield("content")
    </div>

    <script src="{{ mix("js/app.js") }}"></script>
</body>
</html>
