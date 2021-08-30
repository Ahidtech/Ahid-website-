<style>
    .product-templ:first-child{
        padding-top: 0!important;
    }
    .product-templ:last-child{
        border-bottom: 0;
    }
    .product-templ{
        margin-top: 5%;
        padding-top: 5px;
        padding-bottom: 5px;
        border-bottom: 1px solid #f1f1f1;
    }
    .product-templ > section:first-child img{
        height: 35px;
        width: 35px;
        border-radius: 50px;
    }
    .brand-info-templ div{
        display: inline-block;
        vertical-align: middle;
        width: fit-content;
    }

    .product-templ > section:last-child img{
        height: 120px;
        width: 120px;
    }
    .product-templ .product-info-templ{
        width: 100%;
        display: inline-flex;
        justify-content: space-between;
        align-items: center;
    }
    .product-templ .product-info-templ > div:first-child{
        width: 31%;
    }
    .product-templ .product-info-templ > div:last-child{
        align-self: flex-end;
        width: 67%;
    }
    .product-desc-templ > div:nth-child(2){
        font-size: 14px;
        color: #5e5e5e;
    }
    .product-desc-templ > div:nth-child(3){
        margin-top: 3px;
        font-size: 18px;
        font-weight: 500;
    }
</style>
<?php $i = 0; while($i < 4): $i++; ?>
<div class="product-templ">
    <section>
        <div class="brand-info-templ">
            <div>
                <img src="src/image/LT_B3D43167-166A-457E-8133-2CE34B2B60DD147421_03_01.jpeg" alt="">
            </div>&ensp;
            <div>
                <span>Nike</span>
            </div>
        </div>
    </section>
    <section>
        <div class="product-info-templ">
            <div>
                <img src="src/image/LT_FB_IMG_16191379360993074955921_04_24.jpg" alt="" srcset="" class="product-image">
            </div>
            <div class="product-desc-templ">
                <div>
                    Nike air max
                </div>
                <div>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. A non
                </div>
                <div>
                    $39
                </div>
            </div>
        </div>
    </section>
</div>
<?php endwhile; ?>