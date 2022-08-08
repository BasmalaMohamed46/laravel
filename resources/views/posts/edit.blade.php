@include('includes.navbar')
<div class="container">
<form method="POST" action="{{ route('posts.update',$posts['id']) }}" >
    @method('PUT')
    @csrf
    <div class="mb-3">


              <label  class="form-label">New Title</label>
              <input type="text" class="form-control" name="title" value="{{ $posts['title'] }}">
            </div>


    <div class="mb-3">
        <label class="form-label">Post</label>


        
        <input type="text" class="form-control" name="body" value="{{ $posts['body'] }}">
      </div>
   
     
 
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>