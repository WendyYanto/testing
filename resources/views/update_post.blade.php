<html>
	<head>
		<title>UPDATE POST</title>
	</head>
	<body>
		<div class="updatepost">
			<form action="{{url('/post/update/'.$post->id)}}" method="POST">
			<input type="hidden" name="_method" value="PATCH">
			<!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
			{{csrf_field()}}
			Post Title:<br>
			<input type="text" name="post_title" value="{{$post->post_title}}"><br>
			Post Name:<br>
			<input type="text" name="post_name" value="{{$post->post_name}}"><br>
			Post Content:<br>
			<input type="text" name="post_content" value="{{$post->post_content}}">
			<br>
			<input type="submit" value="Submit">
			</form>
		</div>
	</body>
</html>