function addToCart(food,newprice,formattedprice,img_url) {

    // Generate random number
    margin = Math.floor(Math.random() * 9) + 1  


    // Create the image
    $( "#bag-items" ).append( '<img src="' + img_url + '" class="animated fadeInDown bag-item" style="margin-left:' + margin + 'em">')
    // Add to cart list

    // Modify cart price?
    price += newprice; 
    console.log(price);
}

$( document ).ready(function() {
    console.log( "ready!" );
    var price=0;
    });
    //var price;




    