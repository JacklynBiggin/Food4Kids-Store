var cartPrice;

function addToCart(food,price,formattedprice,img_url) {

    // Generate random number
    margin = Math.floor(Math.random() * 9) + 1  


    // Create the image
    $( "#bag-items" ).append( '<img src="' + img_url + '" class="animated fadeInDown bag-item" style="margin-left:' + margin + 'em">')
    
    // Add to cart list
    $( "#cart-items" ).append( '<div class="cart-item"> <div class="row"> <div class="col-2"> <img src="' + img_url + '" class="animated bounceIn cart-item">  </div> <div class="col-7"> <span class="cart-item-name">' + food + '</span> </div> <div class="col-3"> <div class="cart-item-price">' + formattedprice + '</div> </div> </div> </div>')

    // Modify cart price?
    cartPrice += parseFloat(price); 
    console.log(cartPrice);
    $('#total').html("$ " + (cartPrice/100).toFixed(2));
}

$( document ).ready(function() {
    console.log( "ready!" );
    cartPrice=0;
    $('#total').html("$ " + (cartPrice/100).toFixed(2));
    });
    //var price;




    