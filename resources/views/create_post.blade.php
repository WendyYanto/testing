<html>
    <head>
        <title>
            Bebas
        </title>
    </head>
    <body>
        <form action="{{url('/insertPost')}}" method="POST">
          <div>
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <input type="text" name="name" placeholder="Input Post Name"/><br>
              <input type="text" name="title" placeholder="Input Post Title"><br>
              <input type="password" name="content" placeholder="Input Content"><br>
              <button type="submit">Create Post</button>
          </div>
        </form>
    </body>
</html>

