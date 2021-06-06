<style>
    header{
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        padding-top: 1%;
        padding-bottom: 1%;
        background: linear-gradient(145deg, rgb(14, 106, 197) 50%, lightskyblue);
    }
    .logo-section{
        position: absolute;
        left: 0;
        right: 0;
        bottom: -50%;
        width: 10%;
        margin: auto;
    }
    .logo-cover img{
        box-shadow: 1px 1px 1px #f1f1f1;
        height: 50px;
        width: 50px;
        border-radius: 50px;
    }
    main{
        width: 100%;
        display: inline-flex;
        justify-content: space-evenly;
    }
    main .first-part{
        width: 40%;
        display: inline-flex;
        justify-content: space-around;
        align-items: center;
        font-family: 'Roboto', sans-serif;
        color: #fff;
        font-size: 14px;
        font-weight: bold;
    }
    main .second-part{
        width: 40%;
        justify-content: space-between;
        align-items: center;
        text-align: right;
    }
    main .third-part{
        width: 15%;
        display: inline-flex;
        justify-content: space-evenly;
        align-items: center;
        font-family: 'Roboto', sans-serif;
        color: rgb(255, 255, 255);
        font-size: 14px;
        font-weight: bold;
    }
    main .second-part section{
        width: 70%;
        float: right;
    }
    main .second-part input[type="text"] {
        width: 100%;
        border: 1px solid #f1f1f1;
        padding: 2%;
        padding-top: 1.5%;
        padding-bottom: 1.5%;
        border-radius: 0;
        font-family: 'Open Sans', sans-serif;
    }
</style>
<header>
    <section class="logo-section">
        <div class="logo-cover">
            <img src="logo/ahid (2).png" alt="">
        </div>
    </section>
    <main>
        <div class="first-part">
            <section>
                <span>Option</span>
            </section>
            <section>
                <span>Option</span>
            </section>
            <section>
                <span>Option</span>
            </section>
            <section>
                <span>Option</span>
            </section>
            <section>
                <span>Option</span>
            </section>
        </div>
        <div class="second-part">
            <section>
                <input type="text" placeholder="Search for brands">
            </section>
        </div>
        <div class="third-part">
            <section>
                <span>Option</span>
            </section>
            <section>
                <span>Option</span>
            </section>
        </div>
    </main>
</header>