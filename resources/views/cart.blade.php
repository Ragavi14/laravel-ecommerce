@extends('layouts.design')


@section('content')                    
                    
                    
<h2 class="text-3xl text-bold">Cart List</h2>
 <hr>                     
<div class="container">
    <div class="row">
        <div class="col-md-12">  
            @php $total_price = 0; @endphp 
     
        @if($product)

             @php 
                           
                   $imageUrl =  URL::asset('/product-images/'.$product[0]->image);
             @endphp
             
        
               
                    
                        <div class="col-md-6 cart-img-sec">
                            <img class="cart-img" src="{{$imageUrl}}" alt="{{$product[0]->name}}" style="width: 130px;"> 
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <b > {{ $product[0]->name }} </b>  <br>
                                    
                                       
                                        <b > Rs.{{ $product[0]->price }} 
                                            <input type="hidden" value="{{  $product[0]->price  }}" id="productPrice"/>
                                            <input type="hidden" value="{{ $product[0]->id}}" name="product_id" id="product_id" />
                                            <input type="hidden" value="{{ $product[0]->price }}" name="price" id="totPrice"/>
                                        </b>  <br>
                                            <b> {{ $product[0]->description }} </b>  <br> <br>
                                            <lable> <b> Qty :</b> <input type="number" name="quantity" id="quantity" min="1" value="1"  
                                            style="height: 30px; width: 45px;" onChange="calculatePrice()"></input> </lable>

                                    </div>
                                    <br>
                                     <div>
                                    <button style=" color: white;" type="submit" class="btn btn-primary" onClick="addToCart()">  Add to Cart  </button> 
                                    <button style=" color: white;" type="submit" class="btn btn-primary" onClick="clearCart()">  Clear Cart  </button>
                                </div>
                                          
                                  


                                </div>
                                <div class="col-md-6">
                                <div class="btn" style="font-size: larger;">
                                <a href="{{ route('homePage') }}"> Home</a>
                            </div>
                                         @php
                                            $total_price = $product[0]->price  * 1;   
                                        @endphp 
                                        <h4> Total Price : <label id="totlaPrice"> {{$total_price}} </label></h4>
                                    </div>
                            </div>
                            
          </div> 
                </div>
            
             
                @endif
        </div>
    </div>
</div>  
<script>
$( document ).ready(function() {
    console.log( "ready!" );

    
});
function calculatePrice(){
       
      var price =  $('#productPrice').val();
      var qty = $('#quantity').val();
      var total = qty * price;
      
      $('#totlaPrice').text(total);
      $('#totPrice').val(total);
    
    }
function addToCart(){
     var products = [];
     var productId = $('#product_id').val();
     var quantity = $('#quantity').val();
     var totalPrice = $('#totPrice').val();
     if(localStorage.getItem('cart')){
        products = JSON.parse(localStorage.getItem('cart'));
    }
     var item ={ Product: productId,  Price: totalPrice, Qty: quantity }; 
     products.push(item);
     localStorage.setItem('cart', JSON.stringify(products));

     var url = "{{ route('save-cart') }}";
     location.href = url;
   
  

}
function showCart() {
   var cart = localStorage.getItem('cart');
   console.log('CART====',cart);    
}
function clearCart(){
    localStorage.clear();
}
</script>

@endsection