<div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-8 store-background">
                <div class="container">
                    <div class="row">
                        <?php
                        echo getAPIdata("action=get_foods");
                        ?>
                        <div class="col-12 col-lg-6 col-xl-4">
                            <div class="product-box produce">
                                <div class="product-header">
                                    <h3>An Apple</h3>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <img src="./assets/images/apple.svg" class="img-rounded" max-width="90%" alt="Apple">
                                    </div>
                                </div>
                                <div class="product-meta">
                                    <div class="row">        
                                        <div class="col-6 text-center">  
                                            <span class="price">$1.00</span>
                                        </div>
                                        <div class="col-6">
                                            <span class="add-to-cart"><i class="fas fa-cart-plus"></i> Add</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<div class="row">
                        <div class="col-6 col-md-3">...</div>
                        <div class="col-6 col-md-3">...</div>
                        <div class="col-6 col-md-3">...</div>
                        <div class="col-6 col-md-3">...</div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-md-3">...</div>
                        <div class="col-6 col-md-3">...</div>
                        <div class="col-6 col-md-3">...</div>
                        <div class="col-6 col-md-3">...</div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-md-3">...</div>
                        <div class="col-6 col-md-3">...</div>
                        <div class="col-6 col-md-3">...</div>
                        <div class="col-6 col-md-3">...</div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-md-3">...</div>
                        <div class="col-6 col-md-3">...</div>
                        <div class="col-6 col-md-3">...</div>
                        <div class="col-6 col-md-3">...</div>
                    </div>-->
                </div>
            </div>
            <aside class="col-12 col-md-4">
                <div class="container">
                    bag goes here<br>bag goes here<br>bag goes here<br>bag goes here<br>bag goes here<br>bag goes here<br>
                </div>
            </aside>
        </div>
</div>