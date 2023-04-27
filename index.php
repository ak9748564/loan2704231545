<?php include "navbar.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500;800&family=Poppins:wght@400;500;600;700&family=Raleway:wght@600;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>My24Loan</title>
    <style>
        section {
            width: 100%;
            height: 110vh;
            background: white;
        }

        #carouselExampleDark .carousel-inner .carousel-item:nth-child(1) {
            background-image: url("images/slider-home-12.jpg");
            height: 450px;
        }

        #carouselExampleDark .carousel-inner .carousel-item:nth-child(2) {
            background-image: url("images/slider-home-11.jpg");
            height: 450px;
        }

        #carouselExampleDark .carousel-inner .carousel-item .carousel-caption {
            position: absolute;
            top: 0;
            left: 0;
            text-align: left;
            padding: 115px 65px;
        }

        #carouselExampleDark .carousel-inner .carousel-item .carousel-caption div:nth-child(1) {
            font-family: 'Poppins', sans-serif;
            font-size: 12px;
            line-height: 26px;
            font-weight: 500;
            color: #111111;
            opacity: 0;
            animation: fade-up 0.6s forwards ease-out;
            animation-delay: 1s;
        }

        #carouselExampleDark .carousel-inner .carousel-item .carousel-caption div:nth-child(2) {
            font-family: 'Poppins', sans-serif;
            font-size: 40px;
            line-height: 68px;
            font-weight: 700;
            color: #111111;
            opacity: 0;
            animation: fade-up 0.4s forwards ease-out;
            animation-delay: 1.5s;
        }

        #carouselExampleDark .carousel-inner .carousel-item .carousel-caption div:nth-child(3) {
            font-family: 'Poppins', sans-serif;
            font-size: 20px;
            line-height: 34px;
            font-weight: 400;
            color: #111111;
            opacity: 0;
            animation: fade-up 0.4s forwards ease-out;
            animation-delay: 1.8s;
        }

        #carouselExampleDark .carousel-inner .carousel-item .carousel-caption a {
            text-decoration: none;
        }

        #carouselExampleDark .carousel-inner .carousel-item .carousel-caption a>div {
            background: #000000;
            margin: 17px 0px;
            padding: 7px 25px;
            width: 115px;
            font-family: 'Poppins', sans-serif;
            font-size: 12px;
            line-height: 12px;
            font-weight: 600;
            border-radius: 8px;
            opacity: 0;
        }

        #carouselExampleDark .carousel-inner .carousel-item .carousel-caption a {
            opacity: 0;
            animation: fade-up 0.4s forwards ease-out;
            animation-delay: 2.1s;
        }

        #carouselExampleDark .carousel-inner .carousel-item .carousel-caption a>div {
            opacity: 0;
            animation: fade-up 0.4s forwards ease-out;
            animation-delay: 2.1s;
        }

        @keyframes fade-up {
            0% {
                opacity: 0;
                position: relative;
                top: 50px;
            }

            25% {
                opacity: 0.9;
            }

            100% {
                opacity: 1;
                position: relative;
                top: 0px;
            }
        }

        #our_services {
            padding: 80px 60px;
        }

        #our_services h1 {
            text-align: center;
            font-family: 'Poppins', sans-serif;
            font-size: 42px;
            line-height: 42px;
            font-weight: 600;
            color: #1f1f1f;
        }

        #our_services #section1 {
            display: flex;
            text-align: center;
        }

        #our_services #section1 .inner_section1 {
            padding: 15px;
        }

        #our_services #section1 .inner_section1>div {
            padding: 25px;
            border: 1px solid #999999;
            border-radius: 5px;
        }

        #our_services #section1 .inner_section1>div h2 {
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            line-height: 25px;
            font-weight: 700;
            color: #1f1f1f;
        }

        #our_services #section1 .inner_section1>div p {
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            line-height: 28px;
            font-weight: 400;
            color: #3a3a3a;
        }

        #our_services #section1 .inner_section1>div a {
            text-decoration: none;
        }

        #our_services #section1 .inner_section1>div a div {
            font-family: 'Poppins', sans-serif;
            font-size: 12px;
            line-height: 12px;
            font-weight: 600;
            color: #4c5667;
            border: 1px solid #ebebeb;
            padding: 13px 18px;
            width: 110px;
            margin: auto;
            border-radius: 5px;
        }

        #about_company {
            width: 100%;
            /* height: 500px; */
            display: flex;
        }

        #about_company .section1 {
            width: 50%;
        }

        #about_company .section1:nth-child(1) {
            background-image: url("images/offer-page-bg.jpg");
            /* height: 500px;
            max-width: 620px; */
            background-position: center;
        }

        #about_company .section1:nth-child(2) {
            padding: 60px;
            background: #f4f4f4;
        }

        #about_company .section1:nth-child(2) h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 34px;
            line-height: 40px;
            font-weight: 600;
            color: #1f1f1f;
        }

        #about_company .section1:nth-child(2) p {
            font-family: 'Poppins', sans-serif;
            font-size: 18px;
            line-height: 31px;
            font-weight: 400;
            color: #3a3a3a;
            background: #f4f4f4;
        }

        

        @media(max-width:1200px) {
            #our_services {
                padding: 80px 0px;
            }

            #our_services #section1 {
                max-width: 960px;
                margin: auto;
            }
        }

        @media(max-width:1000px) {
            #carouselExampleDark .carousel-inner .carousel-item .carousel-caption {
                position: static;
                padding: 115px 40px;
                margin: auto;
                max-width: 700px;
                text-align: center;
            }

            #carouselExampleDark .carousel-inner .carousel-item .carousel-caption a>div {
                margin: 17px auto;
            }

            #our_services #section1 {
                max-width: 700px;
            }

            #about_company {
                display: block;
                height: 100%;
            }

            #about_company .section1 {
                width: 100%;
            }

            #about_company .section1:nth-child(1) {
                max-width: 1000px;
            }
        }

        @media(max-width:750px) {
            #our_services #section1 {
                max-width: 520px;
                display: block;
            }
        }

        @media(max-width:700px) {
            #carouselExampleDark .carousel-inner .carousel-item .carousel-caption div:nth-child(1) {
                line-height: 30px;
            }

            #carouselExampleDark .carousel-inner .carousel-item .carousel-caption div:nth-child(2) {
                font-size: 27px;
                line-height: 35px;
            }

            #carouselExampleDark .carousel-inner .carousel-item .carousel-caption div:nth-child(3) {
                font-size: 14px;
                line-height: 20px;

            }

            #carouselExampleDark .carousel-inner .carousel-item .carousel-caption a>div {
                font-size: 10px;
                line-height: 15px;
                padding: 0px 10px;
            }
        }

        @media(max-width:575px) {
            #our_services #section1 {
                padding: 0px 20px;
                width: 100%;
            }
        }

        
    </style>
</head>

<body>
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators" style="z-index:1;">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2500">
                <div class="carousel-caption d-md-block">
                    <div>Apply for a</div>
                    <div>PRIME MEMBERSHIP CARD</div>
                    <div>Get instant personal loan offers from 35+ banks</div>
                    <a href="">
                        <div style="color:white;">Apply Now</div>
                    </a>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2500">
                <div class="carousel-caption d-md-block">
                    <div>Apply for a</div>
                    <div>ELITE MEMBERSHIP CARD</div>
                    <div>Get instant business loan offers from 20+ banks</div>
                    <a href="">
                        <div style="color:white;">Apply Now</div>
                    </a>
                </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev" style="z-index: 0;">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next" style="z-index: 0;">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div id="our_services">
        <h1>Our Services</h1>
        <div id="section1">
            <div class="inner_section1">
                <div>
                    <h2>Personal Loan</h2>
                    <p>Hassel free application for Personal Loan up to 15 lakhs with lowest interest rates starting from 12.5%, minimum paperwork and get your offer in 30 minutes. </p>
                    <a href="">
                        <div>Apply Now</div>
                    </a>
                </div>
            </div>
            <div class="inner_section1">
                <div>
                    <h2>Business Loan</h2>
                    <p>Hassel free application for Business Loan up to 1 Crore with lowest interest rates starting from 11.5%, minimum paperwork and get your offer in 30 minutes.</p>
                    <a href="">
                        <div>Apply Now</div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="about_company">
        <div class="section1">
        </div>
        <div class="section1">
            <h1>About Company</h1>
            <p>We are India's Finest membership card based loan providing company. We have our head office based in Surat (Gujarat, India). Proudly affiliating with 65+ NBFC banks, we have been successfully providing Personal Loan, Business Loan, Home Loan, Mortgage Loan, Balance Transfer, etc. pan India. Having more than 2,500+ happy customers due to our transparent specialized lending policy. We not only help our customer by providing loan when needed, but we also help them in financial planning and easy loan assistance anytime anywhere.</p>
        </div>
    </div>

    <?php include "our_bank.php";?>
    <?php include "our_customers_testimonials.php";?>
    
</body>

</html>
<?php include "footer.php"; ?>