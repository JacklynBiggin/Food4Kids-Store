function addToCart(food,price,formattedprice,img_url) {

    // Generate random number
    margin = Math.floor(Math.random() * 9) + 1  


    // Create the image
    $( "#bag-items" ).append( '<img src="' + img_url + '" class="animated fadeInDown bag-item" style="margin-left:' + margin + 'em">')
    // Add to cart list

    // Modify cart price?
    cartPrice += price; 
    console.log(cartPrice);
}

$( document ).ready(function() {
    console.log( "ready!" );
    var cartPrice=0;
    });
    //var price;




    