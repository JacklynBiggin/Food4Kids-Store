var cartPrice;

function addToCart(food,price,formattedprice,img_url) {

    // Generate random number
    margin = Math.floor(Math.random() * 9) + 1  


    // Create the image
    $( "#bag-items" ).append( '<img src="' + img_url + '" class="animated fadeInDown bag-item" style="margin-left:' + margin + 'em">');
    
    // Add to cart list
    if (cartPrice == 0) {
        $( "#cart-items" ).append(  '<a class="checkout-button animate bounceIn" id="checkout" style="color: white;"><i class="fas fa-money-check-alt"></i> Checkout</a>');
    }
    $( "#cart-items" ).append( '<div class="cart-item animate bounceIn"> <div class="row"> <div class="col-2"> <img src="' + img_url + '">  </div> <div class="col-7"> <span class="cart-item-name">' + food + '</span> </div> <div class="col-3"> <div class="cart-item-price">' + formattedprice + '</div> </div> </div> </div>');
    
    // Modify cart price?
    cartPrice += parseFloat(price); 
    $('#total').html("$ " + (cartPrice/100).toFixed(2));

    // Modify Checkout HREF
    $( "#checkout" ).attr("href" , "./?page=checkout&total="+cartPrice);
}



$( document ).ready(function() {
    console.log( "ready!" );
    cartPrice=0;
    $('#total').html("$ " + (cartPrice/100).toFixed(2));
    });
    //var price;




    