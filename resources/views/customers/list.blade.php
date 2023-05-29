@extends('layouts.app')


@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">
                <div class="card-header">{{ __('') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- {{ __('Your Information Saved Successfully!') }} -->
                </div>
            </div>
        </div>
    </div>
</div>

<div style="text-align: center; padding: 10px;">
<a class="justify-content-center" href="{{ route('create-customer') }}">
                                      <button>  {{('Create Customer') }}    </button>
                                    </a> <div>

<div  style="padding-top: 50px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Customer List') }}</div>

                <div class="card-body">
                      <table style="width:100%">
                     
                        <tr>
                            <th  style="">Name</th> 
                            <th style="">Address</th>
                            <th style="">Mobile</th>
                            <!-- <th style="border: 2px solid black;">Edit</th>
                            <th style="border: 2px solid black;">Detele</th>  -->
                        </tr>
                        
                        @if($customers)
                            @foreach($customers as $key => $value)
                            <tr>
                                <td>{{$value->name}}</td>
                                <td>{{$value->address}}</td>
                                <td>{{$value->mobile}}</td>
                                
                               <td> <a href="{{ route('edit-customer',$value->id) }}">
                                <button id="btn-submit" class="btn btn-primary"> 
                                    Edit
                                </button></a> </td>


                            
                               <td> <form action="{{ route('destroy-customer',$value->id) }}" method="POST">
                                     @csrf
                                     @method('delete')
                                      <button type="submit" class="btn btn-danger">Delete</button>
                                     </form> </td>
                               
                            </tr>
                        
                            @endforeach
                        @endif    

                           
                       
                        </table> 
                      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection