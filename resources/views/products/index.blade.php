@extends('layout.layout')
@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Product</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div>
  <a href="{{route('product.create')}}">

    <button type="button" class="btn btn-primary">Create</button>
  </a>
</div> <br>
<div>
  <a href="{{route('product.register')}}">

    <button type="button" class="btn btn-primary">Register</button>
  </a>
</div><br>

<div>
  <a href="{{route('product.login')}}">

    <button type="button" class="btn btn-primary">login</button>
  </a>
</div>

@foreach($products as $product)



  <tbody>
  <table class="table" border="1">
  <thead>
    <tr>
      <th scope="col">Products </th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      
    </tr>
  </thead>
    <tr>
      <td></td>
      <td>{{ $product->name}}</td>
      <td>{{ $product->description }}</td>
      
    </tr>
    
      
  </tbody>
</table> 

  
@endforeach
@endsection