<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/style/fonts.css">
    <link rel="stylesheet" href="src/style/home.css">
    <title>AHID</title>
</head>
<body>
    <?php include "template/header.html"; ?>
    <?php include "template/footer.html"; ?>

    <main class="home-main">
        <header>
            <div>
                <img src="src/icon/list.svg" alt="">
            </div>
            <div>
                <span>Welcome Perfect</span>
            </div>
        </header>

        <?php
            $i = 1;
            while($i < 4):
            $i++;
        ?>
            <article>
                <section>
                    <div class="brand-cover brand-cover-one">
                        <div class="brand-logo brand">
                            <img src="src/image/LT_2952621_02_27.jpg" alt="">
                        </div>
                        <div class="brand-name brand">
                            <div>
                                <span>NIKE</span>
                                <spann style="font-weight: 400;">xxxxx</span>
                            </div>
                        </div>
                    </div>
                    <div class="brand-cover brand-cover-two">
                        <div>
                            <img src="src/icon/message-4652.svg" alt="">
                        </div>
                    </div>
                </section>
                <section class="second-section">
                    <div>
                        <img src="src/image/LT_2952621_02_27.jpg" alt="">
                    </div>
                </section>
                <section class="action-section">
                    <div class="action-div">
                        <div>
                        <img src="src/icon/star.svg" alt=""> 
                        </div>
                        <div>
                            <img src="src/icon/message-4652.svg" alt="">
                        </div>
                        <div>
                            <img src="src/icon/message-4652.svg" alt="">
                        </div>
                    </div>
                    <div class="share-div">
                        <div>
                            <img src="src/icon/magnifying-glass.svg" alt="">
                        </div>
                    </div>
                </section>
            </article>
        <?php endwhile; ?>
    </main>
</body>
<script src="src/js/home.js"></script>
</html>