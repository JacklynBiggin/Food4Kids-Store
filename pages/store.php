<div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-8 store-background">
                <div class="container">
                    <div class="row">
                        <?php
                        $produceList = getAPIdata("action=get_foods");
                        $products = "";
                        foreach($produceList as $product){
                            $img_url = $config['DOMAIN_ROOT'] . "/assets/images/products/" . str_replace(' ', "_", $product['food']) . ".svg";
                            $products .=
                            '<div class="col-12 col-lg-6 col-xl-4">
                                <div class="product-box produce">
                                    <div class="product-header">
                                        <h3>' . $product['food'] . '</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <img src="' . $img_url . '">
                                        </div>
                                    </div>
                                    <div class="product-meta">
                                        <div class="row">        
                                            <div class="col-6 text-center">  
                                                <span class="price">' . $product['formattedPrice'] . '</span>
                                            </div>
                                            <div class="col-6">
                                                <span class="add-to-cart" onclick="addToCart()"><i class="fas fa-cart-plus"></i> Add</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                        }

                        echo $products;
                        
                        ?>
                    </div>
                </div>
            </div>
            <aside class="col-12 col-md-4">
                <div class="container">
                    <div class="bag-container">
                        <img src="./assets/images/bag.svg" class="bag" />
                        <div class="bag-items">
                            <img src="http://e8ad3736.ngrok.io/Food4Kids-Store/assets/images/products/Bag_of_Oranges.svg" class="bag-item animated fadeInDown" />
                        </div>
                    </div>
                </div>
            </aside>
        </div>
</div>