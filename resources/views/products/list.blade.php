@extends('layouts.app')


@section('content')


<div style="text-align: center; padding: 10px;">
<a class="justify-content-center" href="{{ route('create-product') }}">
                                      <button>  {{('Create Product') }}    </button>
                                    </a> <div>

<div  style="padding-top: 50px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Product List') }}</div>

                <div class="card-body">
                    <table style="width:100%">
                     
                     <tr>
                         <th style="">Image</th> 
                         <th style="">Name</th>
                         <th style="">Price</th>
                         <th style="">Stack</th>
                         <th style="">Description</th>
                         <!-- <th style="">Seller Details</th> -->
                     </tr>
                     
                     @if(isset($products))
                         @foreach($products as $key => $value)
                         @php 
                           
                            $imageUrl =  URL::asset('/product-images/'.$value->image);
                         @endphp
                         <tr>
                             <td>
                             <img src="{{ $imageUrl }}" alt="profile Pic" height="100" width="100">

                             </td>
                             <td>{{$value->name}}</td>
                             <td>{{$value->price}}</td>
                             <td>{{$value->stack}}</td>
                             <td>{{$value->description}}</td>
                             <!-- <td>{{$value->seller_details}}</td> -->
                             
                            <td> <a href="{{ route('edit-product',$value->id) }}">
                             <button id="btn-submit" class="btn btn-primary"> 
                                 Edit
                             </button></a> </td>


                         
                            <td> <form action="{{ route('destroy-product',$value->id) }}" method="POST">
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