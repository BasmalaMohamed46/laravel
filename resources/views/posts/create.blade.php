@include('includes.navbar')
<div class="container">
<form method="POST" action="{{route('posts.store')}}">
            @csrf
            <div class="mb-3">
              <label  class="form-label">New Title</label>


              <input type="text" class="form-control" name="title">
            </div>
            <div class="mb-3">
              <label  class="form-label">New Post</label>



              <input type="text" class="form-control" name="body">
            </div>
            <div class="mb-3">
              <label class="form-label">enabled</label>



              <input type="text" class="form-control" name="enabled">
            </div>
           
            <div class="mb-3">
              <label class="form-label">User ID</label>


              
              <input type="text" class="form-control" name="user_id">
            </div>
         
         
           
           
           
         
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>