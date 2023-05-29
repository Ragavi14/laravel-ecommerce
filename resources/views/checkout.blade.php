@extends('layouts.design')

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

@section('content')

<div class="container">
    <div class="row justify-content-center">
                  
        <div class="col-md-8">
            
                <h3> Checkout Page </h3> <br>
                        <div>
                            <button onclick="myFunction()" style="bckground-color: blue;"> <a href="{{ route('create-customer') }}" class="btn btn-defauld"> Proceed To Payment </a> </button>
                                    <script>
                                    function myFunction() {
                                    alert("If you are not login, Login first!");
                                    }
                                    </script>
                        </div>
            <div class=""> <br> <br> 
               <div class="card">
                    <table id="cart"  style="width:100%">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th>Total</th>
                                <th>
                                    <a href="{{ URL::previous() }}" class="btn btn-default">Back</a>
                                </th>
                            </tr>
                            
                        </thead>
                    
                        <tbody id="cartBody">

                        </tbody>
                    </table>
                </div>
            </div>    
                
        </div>
                   
              
        
        
    </div>
</div>

@endsection
<script>
      $(document).ready(function(){
        var cart = localStorage.getItem('cart');
       var cartItem =  JSON.parse(cart);
    //    console.log('DD==',cartItem);
        // cart.forEach((element) => {
        //         console.log('ELE==',element );
              
        // });
        for (var i in cartItem) {
                var item = cartItem[i];
                var row = "<tr><td>" + item.Product + "</td><td>" +
                       item.Price + "</td><td>" + item.Qty + "</td><td>"
                       + item.Qty * item.Price + "</td><td>"
                       + "<button onclick='deleteItem(" +i+ ")'>Delete</button></td></tr>";
                $("#cartBody").append(row);
            }
            
      })

      function deleteItem(i){
        // alert(i);
        var txt;
        if (confirm("If you want to delete ")) {
        cart = JSON.parse(localStorage.getItem('cart'));
        products = cart.splice(i);
        localStorage.setItem('cart', JSON.stringify(products));}
        else {
            txt = "You pressed Cancel!";
        }

      }
      
        
    </script>
