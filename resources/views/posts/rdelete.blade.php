@extends('layouts.app')

@section('content')


 

    @if ($posts->count()>0)
  <table class="table table-striped">
   <thead>
   <tr>
     <th scope="col"> id </th>


    <th scope="col"> Title </th>
                                    
  <th scope="col"> Body </th>

  
  <th scope="col"> User ID </th>
                                    
  <th scope="col">Restore</th>
                                 
                                    
  </tr>
</thead>
 <tbody>
                                 
 @foreach ($posts as $post)
 <tr>
    <th scope="row">{{$post->id}}</th>


       <th scope="row">{{$post->title}}</th>


       <th scope="row">{{$post->body}}</th>


       <th scope="row">{{$post->user_id}}</th>
                                       
<td>
<a class="" href="{{route('post.restore',['id' =>$post->id ])}}">
  <button type="button" class="btn btn-primary"> Restore Post</button></a>
  </td> 
   </tr>
   @endforeach
                                  
     @else
   <p >No Posts Here</p>
                                         
                                       
                                      
 @endif
                                 
                                  
    </tbody>
    </table>

@endsection