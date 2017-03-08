<!DOCTYPE html>
<html>
	<head>
		<title>Books</title>
		<link href="https://fonts.googleapis.com/css?family=Mallanna" rel="stylesheet">
		<style>
		body {
			font-family: 'Mallanna';
		}

		.container {
			width: 900px;
			padding: 20px;
			margin: auto;
		}

		.book {
			display: block;
			position: relative;
			width: 98%;
			padding: 16px;
			border: 1px solid #ddd;
			background: #fdfdfd;
			margin: 20px 0;
		}
		</style>
	</head>
	<body>
		<div class="container">
			<h1>Books</h1>
			<div style="width: 260px; float: left;">
				<h3>Title</h3>
				@foreach ($books as $book)
				{{$book->title}}<br>
				@endforeach
			</div>
			<div style="width: 200px; float: left;">
				<h3>Author</h3>
				@foreach ($author as $author)
				{{$author->first_name}} {{$author->last_name}}<br>
				@endforeach
			</div>
			<div style="width: 200px; float: left;">
				<h3>Publisher</h3>
				@foreach ($publisher as $publisher)
				{{$publisher->name}}<br>
				@endforeach
			</div>
		</div>
	</body>
</html>
