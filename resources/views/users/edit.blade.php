@include('includes.navbar')


<div class="container">
<form method="POST" action="{{ route('users.update',$users['id']) }}" >
    @method('PUT')
    @csrf
  
    <div class="mb-3">


        <label  class="form-label">name</label>
        <input type="text" class="form-control" name="name" value="{{ $users['name'] }}"></div>
    <div class="mb-3">



      <label  class="form-label"   >Email address</label>
      <input type="email" name="email" class="form-control" value="{{ $users['email'] }}">
    </div>
    
 
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>