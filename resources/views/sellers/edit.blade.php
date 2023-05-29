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
                @if($sellers)
                            @foreach($sellers as $seller)
                   
                    <h4 style="text-align: center; padding: 10px;">Edit and Update</h4>
                        <form action="{{  route('update-seller',$seller->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" value="{{isset($seller->name)?$seller->name:''}}" required class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Mobile</label>
                            <input type="number" name="mobile" value="{{isset($seller->mobile)?$seller->mobile:''}}" required class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Shop Name</label>
                            <input type="text" name="shop_name" value="{{isset($seller->shop_name)?$seller->shop_name:''}}" required class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Shop Address</label>
                            <input type="text" name="shop_address" value="{{isset($seller->shop_address)?$seller->shop_address:''}}" required class="form-control">
                        </div>
                        
                        
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                        </form>
                            @endforeach
                @endif
                </div>
                  
            </div>
        </div>
    </div>
</div>

@endsection