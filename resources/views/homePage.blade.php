@extends('layouts.front')
@extends('layouts.slider')


@section('content')

<div class="container">
    
                        <div class="row" style="text-align: right;">
                            <div  style="font-size: larger;">
                               <button class="btn" > <a href="{{ route('save-cart') }}">Cart</a> </button>
                            </div>
                            
                        </div>  
        <div class="col-md-12"> 
        
     
            @if($products)

                @foreach($products as $product)
                     @php 
                           
                    $imageUrl =  URL::asset('/product-images/'.$product->image);
                    @endphp
             
        
                <div class="col-md-4">
                    
                    <div class="card-product">
                    
                        <div>
                            <img src="{{$imageUrl}}" alt="{{$product->name}}" style="height: 130px; width: 130px;"> 
                        </div>
                        <div>
                           <b> {{ $product->name }} </b>  
                        </div>
                        <div>
                           <b> Rs.{{ $product->price }} </b>
                        </div>
                        <br>
                                               

                      
                        
                       
                        <a href="{{ route('cart', $product->id) }}" style="background-color: green; color: white;" class="btn" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->price}})\">View Product</a>
                    </div>
                </div>
            

                @endforeach


            @endif
        </div>
    </div>
</div>            
       

@endsection
