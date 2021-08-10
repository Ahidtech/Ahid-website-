<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/style/shopping-cart2.css">
    <link rel="stylesheet" href="src/style/fonts.css">
    <title>shopping cart</title>
</head>
<body>
    <div class="container">
        <div class="cart-header">
            <div class="carrier">
                <div>
                    <div>
                        <img src="src/icon/message-4652.svg">
                    </div>
                    <div>
                        <h1>Cart</h1>
                    </div>
                </div>
                <div class="search-bar">
                    <div>
                        <input type="search" placeholder="Search for items">
                    </div>
                    <div>
                        <button type="submit">
                            <img src="src/icon/magnifying-glass.svg" alt="" srcset="">
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="cart">
            <div class="select-all">
                <div>
                    <input type="checkbox" value=" " id="selector" onclick= checker()> 
                    <label for="selector">Select all</label>
                </div>
                &emsp;
                <div>
                    <img src="src/icon/message-4652.svg" alt="" srcset="">
                </div>
            </div>

            <section class="cart-content">
                <div class="bought-product">
                    <input type="checkbox" name="" id="adidas" class="product-check">
                    <a href="http://">
                        <img src="src/image/LT_2952621_02_27.jpg" alt="nike" srcset="">
                        <div class="product-information">
                            <h3>Nike air max</h3>
                            <span class="price">
                                #500,000
                            </span>
                        </div>
                    </a>

                </div>

                <div class="bought-product">
                    <input type="checkbox" name="" id="nike" class="product-check">
                    <a href="http://">
                        <img src="src/image/LT_2952621_02_27.jpg" alt="nike" srcset="">
                        <div class="product-information">
                            <h3>Nike air max</h3>
                            <span class="price">
                                #500,000
                            </span>
                        </div>
                    </a>

                </div>

                <div class="bought-product">
                    <input type="checkbox" name="" id="zara" class="product-check">
                    <a href="http://">
                        <img src="src/image/LT_2952621_02_27.jpg" alt="nike" srcset="">
                        <div class="product-information">
                            <h3>Nike air max</h3>
                            <span class="price">
                                #500,000
                            </span>
                        </div>
                    </a>
                </div> 

                <div class="bought-product">
                    <input type="checkbox" name="" id="zara" class="product-check">
                    <a href="http://">
                        <img src="src/image/LT_2952621_02_27.jpg" alt="nike" srcset="">
                        <div class="product-information">
                            <h3>Nike air max</h3>
                            <span class="price">
                                #500,000
                            </span>
                        </div>
                    </a>
                </div> 

                <div class="bought-product">
                    <input type="checkbox" name="" id="zara" class="product-check">
                    <a href="http://">
                        <img src="src/image/LT_2952621_02_27.jpg" alt="nike" srcset="">
                        <div class="product-information">
                            <h3>Nike air max</h3>
                            <span class="price">
                                #500,000
                            </span>
                        </div>
                    </a>
                </div> 

                <div class="bought-product">
                    <input type="checkbox" name="" id="zara" class="product-check">
                    <a href="http://">
                        <img src="src/image/LT_2952621_02_27.jpg" alt="nike" srcset="">
                        <div class="product-information">
                            <h3>Nike air max</h3>
                            <span class="price">
                                #500,000
                            </span>
                        </div>
                    </a>
                </div> 

                <div class="bought-product">
                    <input type="checkbox" name="" id="zara" class="product-check">
                    <a href="http://">
                        <img src="src/image/LT_2952621_02_27.jpg" alt="nike" srcset="">
                        <div class="product-information">
                            <h3>Nike air max</h3>
                            <span class="price">
                                #500,000
                            </span>
                        </div>
                    </a>
                </div> 

            </section>
        </div>

        <footer>
            <div class="order">
                <button>
                    <div class="total-price">
                        <span></span>
                        <span>N1500000</span>
                    </div>
                </button>
            </div>
        </footer>

    </div>
    <script src="src/js/shopping-cart.js"></script>
</body>
</html>