@extends('master.layout')

@section('content')
   <p class="main-para">Homepage/Dried fruits</p>
   <p class="main-head">Dried Fruits</p>
 <p class="main-para1">taste of your strength</p>

  @if(session('success'))
    <div class="alert alert-success">
      {{session("success")}}
    </div>
  @endif
  <div class="row">
@foreach ($prod as $product )
<div class="col-lg-3 col-md-6 mb-4">
   <div class="card" style="width: 18rem;">
  <img src="{{ asset('images/' . $product->image) }}" 
     class="card-img-top" 
     alt="Product Image" 
     style="height:150px; width:100%; object-fit:cover;">
  <div class="card-body">
    <h4 class="card-title">{{$product->name}}</h5>
    <p class="card-text">{{$product->description}}</p>
    <h5 class="card-price">{{$product->price}}/-</h5>
    <div class="d-flex">
    <a href="{{route('product.edit', $product->id)}}" class="btn me-2">Edit</a>
    <form action="{{route('product.destroy',$product->id)}}" method="POST" style="display:inline;">
  @csrf
  @method('DELETE')
  <button type="submit" class="btn" onclick="return confirm('Are your sure you want to delete this product.')" style="background-color:#950606;">
  Delete
  </button>

    </form>



</div>
    
  </div>
</div>
</div>

@endforeach
   </div>

@endsection
