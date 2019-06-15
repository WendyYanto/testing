<html>
    <head>
      <title>
      	Laravel Posts
      </title>
      <style>
        .table{
          margin: 10px auto 0;
          max-width: 650px;
        }
      </style>
    </head>
    <body>
			<div class="table">
        <table border="1"> 
          <thead>
            <tr>
              <th>No.</th>
              <th>Post Name</th>
              <th>Post Title</th>
              <th>Post Content</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($posts as $key => $post)
             <tr>
              <td>{{++$key}}</td>
               <td>{{$post->post_name}}</td>
               <td>{{$post->post_title}}</td>
               <td>{{$post->post_content}}</td>
               <td>
                 <form action="{{url("/deletePost/".$post->id)}}" method="POST">
                  <input type="hidden" name="_token" value="{{csrf_token()}}">
                   <input type="hidden" name="_method" value="DELETE">
                   <button type="submit">Delete</button>
                 </form>
               </td>
              </tr>
        		@endforeach
          </tbody>
        </table>
      </div>
    </body>
</html>