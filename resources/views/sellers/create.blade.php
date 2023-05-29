@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">
                <div style="font-size: larger; text-align: center; padding: 30px;">{{ __('Enter Seller Details') }}
                </div> 
                <div style="text-align: center; padding: 30px;">
                <!-- <a class="justify-content-center" href="{{ route('list-customer') }}">
                                     <button>   {{('View Customers') }}  </button>
                                    </a> </div> -->
               

                

                <form method="post" action="{{ route('save-seller') }}">
                        @csrf
                        <div style="padding-top: 50px;" class="row">
                            <div class="control-group col-12">
                                <label for="title">Name :</label>
                                <input type="text" id="title" class="form-control" name="name"
                                       placeholder="Enter Seller Name" value="{{isset($seller->name)?$seller->name:''}}" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="body">Mobile :</label>
                                <input type="number" id="body" class="form-control" name="mobile"
                                       placeholder="Enter  Seller Mobile Number" value="{{isset($seller->mobile)?$seller->mobile:''}}" required>
                                
                            </div>
                            <div style="padding-top: 50px;" class="row">
                            <div class="control-group col-12">
                                <label for="title">Shop Name :</label>
                                <input type="text" id="title" class="form-control" name="shop_name"
                                       placeholder="Enter Shop Name" value="{{isset($seller->shop_name)?$seller->shop_name:''}}" required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="body">Shop Address :</label>
                                <input type="text" id="body" class="form-control" name="shop_address"
                                       placeholder="Enter Shop Address" value="{{isset($seller->shop_address)?$seller->shop_address:''}}" required>
                               
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
