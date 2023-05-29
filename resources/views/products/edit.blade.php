@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                
                <div class="card-body">
                @if(isset($products))
                            @foreach($products as $product)
                            @php 
                           
                             $imageUrl =  URL::asset('/product-images/'.$product->image);
                           @endphp
                   
                    <h4 style="text-align: center; padding: 10px;">Edit and Update</h4>
                        <form action="{{  route('update-product',$product->id) }}" method="POST" enctype='multipart/form-data'>
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Image</label>
                            <input type="file" name="image" value="" required class="form-control">
                            @if(isset($product->image))
                            <img src="{{ $imageUrl }}" alt="profile Pic" height="100" width="100">
                            <input type="text" name="oldimg" value="{{ $product->image }}"> 
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" value="{{isset($product->name)?$product->name:''}}" required class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Price</label>
                            <input type="number" name="price" value="{{isset($product->price)?$product->price:''}}" required class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Stack</label>
                            <input type="number" name="stack" value="{{isset($product->stack)?$product->stack:''}}" required class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Description</label>
                            <input type="text" name="description" value="{{isset($product->description)?$product->description:''}}" required class="form-control">
                        </div>
                            <p>Do you want to save the Changes ?</p>
                            <button type="submit" class="btn" style="background-color: green; color: white;">Yes</button> </form> <br>
                          <a href="{{ route('list-product') }}">  <button class="btn" style="background-color: red; color: white;">No</button> </a>
                        </div>

                        
                            @endforeach
                @endif
                </div>
                  
            </div>
        </div>
    </div>
</div>

@endsection