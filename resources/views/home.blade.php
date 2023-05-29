@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
                <div class="card-header" style="font-size: larger;">{{ __('Hi') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h2>{{auth()->user()->name}}</h2>
                    <h4>{{ __('You are logged in!') }}</h4>
                   
                </div>
        <ul>
            <div style="text-align: center; padding: 30px;">
                        <a class="justify-content-center" href="{{ route('create-customer') }}">
                                                <button class="btn" style="font-size: larger;"> <li> {{('Customers') }} </li> </button>
                                                </a> 

                                                
                    <div style="padding: 10px;">                            

                        <a class="justify-content-center" href="{{ route('create-product') }}">
                                                <button class="btn" style="font-size: larger;"> <li> {{('Products') }}  </li> </button>
                                                </a> 
                    </div>                            

                        <a class="justify-content-center" href="{{ route('create-seller') }}">
                                                    <button class="btn" style="font-size: larger;"> <li> {{('Sellers') }}  </li> </button>
                                                    </a>  
                    <div style="padding: 10px;">                                 
                   
                        <a class="justify-content-center" href="{{ route('homePage') }}">
                                                    <button class="btn" style="font-size: larger;"> <li> {{('Shop') }}  </li> </button>
                                                    </a>  
                    </div>
                                                   
           
            
            </div>
        </ul>
    </div>
</div>

@endsection
