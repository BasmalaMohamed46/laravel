<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<style>
  .active{
    background-color: #97a4bc;
  }
</style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Laravel</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link {{Route::currentRouteName() == "home" ? 'active': "" ; }} " aria-current="page" href="{{route('home')}}">Home</a>
              </li>
          
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Users
                </a>
   
                <ul class="dropdown-menu">
                  <li  class="{{Route::currentRouteName() == "users.index" ? 'active': "" ; }}">  <a class="dropdown-item" href="{{route('users.index')}}">List</a></li>
                  <li class="{{Route::currentRouteName() == "users.create" ? 'active': "" ; }}"><a class="dropdown-item" href="{{route('users.create')}}">New User</a></li>
                 
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Posts
                </a>
   
                <ul class="dropdown-menu">
                  <li  class="{{Route::currentRouteName() == "posts.index" ? 'active': "" ; }}">  <a class="dropdown-item" href="{{route('posts.index')}}">List</a></li>
                  <li class="{{Route::currentRouteName() == "posts.create" ? 'active': "" ; }}"><a class="dropdown-item" href="{{route('posts.create')}}">New Post</a></li>
                  
                 
                </ul>
              </li>
             
          </div>
        </div>
      </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>