<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/style/brand-profile.css">
    <link rel="stylesheet" href="src/style/fonts.css">
    <title>Document</title>
</head>
<body>
    <?php include "template/header.html"; ?>
    <?php include "template/footer.html"; ?>

    <main class="main-brand-profile">
        <div class="about-brand">
            <section class="name-tag">
                <div class="first-section">
                    <div>
                        <img src="src/image/LT_2952621_02_27.jpg" alt="" srcset="" class="main-image">
                    </div>
                    <div class="main-info">
                        <div>Nike</div>
                        <div class="subscribers">
                            <span>19.7K subscribers</span>
                        </div>
                        <div class="subscribe">
                            <div>
                                <span>subscribe</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="main-details">  
                    <div>
                        <div>
                            <span>#Just do it</span>
                        </div>
                        <div>
                            <img src="src/icon/pin.svg" alt=""> <span>Bearenton, Oregon, Nike Inc.</span>
                        </div>
                        <div>
                            <span class="element-to-toggle summary">
                                ipsum dolor sit amet consectetur adipisicing elit. Fugiat, totam laborum non quos pariatur cumque quibusdam voluptatem libero voluptatum dolore fugit ad dolorem. Tempora et iste ex corrupti officia ad.
                            </span>
                            <span class="visible-summary decoy" onclick="toggle(this)">

                            </span>
                            <span  class="see-more">
                                see more
                            </span>
                        </div>
                    </div>
                    
                </div>
            </section>
        </div>

        <div class="activities">
            <nav>
                <div>
                    Products
                </div>
                <div>
                    Posts
                </div>
            </nav>
            <article>
                <?php include "template/product.php"; ?>
            </article>
        </div>
    </main>
</body>
<script src="src/js/func.js"></script>
<script src="src/js/brand-profile.js"></script>
<script src="src/js/toggle.js"></script>
</html>