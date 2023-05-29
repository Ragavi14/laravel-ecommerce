@extends('layouts.app')


@section('content')






<div  style="padding-top: 50px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Product List') }}</div>

                <div class="card-body">
                    <table style="width:100%">
                     
                     <tr>
                         <!-- <th style="">Image</th>  -->
                         <th style="">Name</th>
                         <th style="">Price</th>
                         <th style="">Stack</th>
                         <th style="">Description</th>
                         
                     </tr>
                     

                     


                     @if(isset($products))
                         @foreach($products as $key => $value)
                         @php 
                        
                            
                           
                         <tr>
                            
                             <td>{{$value->name}}</td>
                             <td>{{$value->price}}</td>
                             <td>{{$value->stack}}</td>
                             <td>{{$value->description}}</td>
                            
                             
                           
                            
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