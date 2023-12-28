@extends('layout.layout')
@section('content')

<nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1">PRODUCTS</span>
</nav>
<br> <br>
<form method="POST" action="/store" enctype="multipart/form-data">
  @csrf
  
  <div class="form-group">
    <label for="name">Name</label><br>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="Enter your product name">
  </div>
  <br><br>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Describe</label>
    <textarea class="form-control" rows="4" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div><br>
  
    
    
    <button type="submit" class="btn btn-dark ">Submit</button><br><br>
    <div class="text-right">
        <a href="{{route('product.index')}}">
          
            <button class="btn btn-primary" type="button" >Back</button>
        </a>
    </div>  

</form>
    

@endsection