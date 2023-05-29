

@extends('layouts.app')

@section('content')

<div style="text-align: center; padding: 10px;">
<a class="justify-content-center" href="{{ route('list-product') }}">
                                      <button>  {{('View Products') }}    </button>
                                    </a> <div>
 
<form method="post" action="{{ route('save-product') }}" enctype='multipart/form-data'>
                        @csrf
                        <div style="padding-top: 50px;" class="row">
                            <div class="control-group col-12">
                            <label for="title">Image :</label>
                                <input type="file" id="image" class="form-control" name="image" accept="image/*"
                                       placeholder="Enter Product image"  required>
                                       @error('image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                            </div>
                        <div style="padding-top: 50px;" class="row">
                            <div class="control-group col-12">
                                <label for="title">Name :</label>
                                <input type="text" id="name" class="form-control" name="name"
                                       placeholder="Enter Product Name" value="{{isset($product->name)?$product->name:''}}" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="body">Price :</label>
                                <input type="number" id="price" class="form-control" name="price"
                                       placeholder="Enter Product Price" value="{{isset($product->price)?$product->price:''}}" required>
                               
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="body">Stack :</label>
                                <input type="number" id="stack" class="form-control" name="stack"
                                       placeholder="Enter Product Stock stack" value="{{isset($product->stack)?$product->stack:''}}" required>
                                
                            </div>
                            <div style="padding-top: 50px;" class="row">
                            <div class="control-group col-12">
                                <label for="title">Description :</label>
                                <input type="text" id="description" class="form-control" name="description"
                                       placeholder="Tell About Your Product" value="{{isset($product->description)?$product->description:''}}" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Upload
                                </button>
                            </div>
                        </div>
                    </form>

@endsection