function addToCart(food,price,formattedprice,img_url) {

    // Generate random number
    margin = Math.floor(Math.random() * 9) + 1  


    // Create the image
    $( "#bag-items" ).append( '<img src="' + img_url + '" class="animated fadeInDown bag-item" style="margin-left:' + margin + 'em">')
    // Add to cart list

    // Modify cart price?
    price=0;
    newprice=0;
    newprice += price; 
    console.log(newprice);
}

$( document ).ready(function() {
    console.log( "ready!" );
    var price=0;
    });
    //var price;




    