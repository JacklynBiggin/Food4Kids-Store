var cartPrice;

function addToCart(food,price,formattedprice,img_url) {

    // Generate random number
    margin = Math.floor(Math.random() * 9) + 1  


    // Create the image
    $( "#bag-items" ).append( '<img src="' + img_url + '" class="animated fadeInDown bag-item" style="margin-left:' + margin + 'em">');
    
    // Add to cart list
    if (cartPrice == 0) {
        $( "#cart-items" ).append(  '<a href="#" class="checkout-button animate bounceIn" id="checkout"><i class="fas fa-money-check-alt"></i> Checkout</a>');

        // Stripe
        var handler = StripeCheckout.configure({
            key: 'pk_test_BuGfa1HX2XMnCS5sui8f83oZ',
            image: 'https://stripe.com/img/documentation/checkout/marketplace.png',
            locale: 'auto',
            token: function(token, args) {
                $.post('https://e8ad3736.ngrok.io/Food4Kids-Store/api/?action=create_charge', {"token": token.id, "email": token.email, "amount": cartPrice, "arguments": args}, function (data) {
                    console.log("Called")
                    console.log(data)
                    window.location = "?page=complete"
                }).fail(function(data){
                    console.log("error - ");
                    console.log(data);
                });
                // Temp til we can work out whats causing this bug
                window.location = "https://e8ad3736.ngrok.io/Food4Kids-Store/?page=complete&total=" + cartPrice
            console.log(token.id)
            }
        });
        
        document.getElementById('checkout').addEventListener('click', function(e) {
            // Open Checkout with further options:
            handler.open({
                name: 'Food4Kids Donation',
                description: 'Thank you!',
                zipCode: true,
                amount: cartPrice,
                currency: "CAD",
                billingAddress: true,
                panelLabel: "Donate {{amount}}"
            });
            e.preventDefault();
        });
        
        // Close Checkout on page navigation:
        window.addEventListener('popstate', function() {
    handler.close();
  });
  
  
    }
    $( "#cart-items" ).append( '<div class="cart-item animate bounceIn"> <div class="row"> <div class="col-2"> <img src="' + img_url + '">  </div> <div class="col-7"> <span class="cart-item-name">' + food + '</span> </div> <div class="col-3"> <div class="cart-item-price">' + formattedprice + '</div> </div> </div> </div>');
    
    // Modify cart price?
    cartPrice += parseFloat(price); 
    $('#total').html("$ " + (cartPrice/100).toFixed(2));

    // Modify Checkout HREF
    //$( "#checkout" ).attr("href" , "./?page=checkout&total="+cartPrice);
}



$( document ).ready(function() {
    console.log( "ready!" );
    cartPrice=0;
    $('#total').html("$ " + (cartPrice/100).toFixed(2));
});
    //var price;