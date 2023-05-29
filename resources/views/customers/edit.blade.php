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
                @if($customers)
                            @foreach($customers as $customer)
                   
                    <h4 style="text-align: center; padding: 10px;">Edit and Update</h4>
                        <form action="{{  route('update-customer',$customer->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" value="{{isset($customer->name)?$customer->name:''}}" required class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Address</label>
                            <input type="text" name="address" value="{{isset($customer->address)?$customer->address:''}}" required class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Mobile</label>
                            <input type="number" name="mobile" value="{{isset($customer->mobile)?$customer->mobile:''}}" required class="form-control">
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