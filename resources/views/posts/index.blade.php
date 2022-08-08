@extends('layouts.app')

@section('content')


<a href="{{route('post.deleted')}}" ><button type="button" class="btn btn-primary" >Deleted Posts</button></a>



<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>


        <th scope="col">Title</th>


        <th scope="col">Body</th>


        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
      <tr>
        <th scope="row">{{$post['id']}}</th>
        
        <td><a href="{{ route('posts.show',$post['id']) }}">{{$post['title']}}</a></td>
        <td>{{$post['body']}}</td>
    
        <td>

        <a class="btn btn-primary" href="{{ route('posts.edit',$post['id']) }}">Edit</a>




            <form action="{{ route('posts.destroy',$post['id']) }}" method="Post">
            
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
            </form>
          
          
          </td>
      </tr>
     @endforeach
      </tr>
    </tbody>
  </table>
  {{$posts->links()}}
  @endsection