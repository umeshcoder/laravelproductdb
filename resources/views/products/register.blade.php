@extends('layout.layout')
@section('content')

<form action="{{route('product.register')}}" method="POST">
    @csrf
    @if(Session::has('sucess'))
    <div class="alert alert-sucess" role="alert">
        {{Session::get('sucess')}}
    </div>
    @endif
  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="exampleInputname" aria-describedby="nameHelp" placeholder="Enter your Full Name" name="name">
    
  </div>
    

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter your email id">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Enter your password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Agree and proceed</label>
  </div>
  <div>
  <button type="submit" class="btn btn-primary">Submit</button>
</div>


</form>
@endsection
