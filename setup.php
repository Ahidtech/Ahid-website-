<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/style/fonts.css">
    <link rel="stylesheet" href="src/style/setup.css">
    <title>AHID</title>
</head>
<body>
    <div class="container">
        <header>
            <section>
                <div>
                    <img src="src/icon/message-4652.svg" alt="">
                </div>
                <div>
                    <span>AHID</span>
                </div>
                <div>
                    <img src="src/icon/message-4652.svg" alt="">
                </div>
            </section>
        </header>
        <main>
            <div>
                <label>Follow your favourite brand</label>
                <select name="" id="">
                    <option value="Nearby">Nearby</option>
                </select>
                <br>
                <br>
            </div>
            <section class="first-section">
                <article>
                    <div class="logo">
                        <img src="src/image/LT_2952621_02_27.jpg" alt="">
                    </div>
                    <div class="details">
                        <div class="first-info">
                            <span>Addidas</span>
                            <span onclick="follow_brand(this)">Follow</span>
                        </div>
                        <div class="second-info">
                            <img src="src/icon/star (2).svg" alt="">
                            <img src="src/icon/star (2).svg" alt="">
                            <img src="src/icon/star (2).svg" alt="">
                            <img src="src/icon/star (2).svg" alt="">
                            <img src="src/icon/star (2).svg" alt="">
                        </div>
                        <div class="third-info">
                            <span>We sell shoes and all</span>
                        </div><hr>
                        <div class="fourth-info">
                            <span>Distance</span><br>
                            <span>2 kilometers away from you</span>
                        </div>
                    </div>
                </article>
            </section>

            <!-- SECOND PART HERE -->

            <div class="describe-option">
                <label>Follow brands around you</label>
                <select name="" id="">
                    <option value="Nearby">Nearby</option>
                </select>
                <br>
                <br>
            </div>
            <section class="first-section">
                <article>
                    <div class="logo">
                        <img src="src/image/LT_2952621_02_27.jpg" alt="">
                    </div>
                    <div class="details">
                        <div class="first-info">
                            <span>Addidas</span>
                            <span>Follow</span>
                        </div>
                        <div class="second-info">
                            <img src="src/icon/star (2).svg" alt="">
                            <img src="src/icon/star (2).svg" alt="">
                            <img src="src/icon/star (2).svg" alt="">
                            <img src="src/icon/star (2).svg" alt="">
                            <img src="src/icon/star (2).svg" alt="">
                        </div>
                        <div class="third-info">
                            <span>We sell shoes and all</span>
                        </div><hr>
                        <div class="fourth-info">
                            <span>Distance</span><br>
                            <span>2 kilometers away from you</span>
                        </div>
                    </div>
                </article>
            </section>
        </main>
    </div>
</body>
<script src="js/classes/ajax.js"></script>
<script src="js/home.js"></script>
</html>