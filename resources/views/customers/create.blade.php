@extends('layouts.design')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">
                <div style="font-size: larger; text-align: center; padding: 30px;">{{ __('Enter Your Details') }}
                
               

                

                <form method="post" action="{{ route('save-customer') }}">
                        @csrf
                        <div style="padding-top: 50px;" class="row">
                            <div class="control-group col-12">
                                <label for="title">Name :</label>
                                <input type="text" id="title" class="form-control" name="name"
                                       placeholder="Enter Customer Name" value="{{isset($customer->name)?$customer->name:''}}" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="body">Address :</label>
                                <input type="text" id="body" class="form-control" name="address"
                                       placeholder="Enter Customer Address" value="{{isset($customer->address)?$customer->address:''}}" required>
                               
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="body">Mobile :</label>
                                <input type="number" id="body" class="form-control" name="mobile"
                                       placeholder="Enter Customer Mobile Number" value="{{isset($customer->mobile)?$customer->mobile:''}}" required>
                                
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
              


                
            </div>
        </div>
    </div>
</div>
@endsection
