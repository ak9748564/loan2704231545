<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500;800&family=Poppins:wght@400;500;600;700;800&family=Raleway:wght@600;900&display=swap" rel="stylesheet">
    <title>Digital Personal Loan</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        #dpl {
            background-position: center;
            background-size: cover;
        }

        #dpl #section1 {
            background: white;
            padding: 27px 30px;
            display: flex;
            justify-content: space-between;
        }

        #dpl #section1 img {
            width: 200px;
            height: 22px;
        }

        #dpl #section2 {
            z-index: -1;
            height: 300px;
            width: 100%;
            background-image: url("images/digital-registration-bg.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            top: -85px;
            text-align: center;
            padding-top: 150px;
        }

        #section3 {
            height: 100%;
            /* box-shadow: 1px 1px 15px #3a3a3a; */
            box-shadow: 0 6px 38px rgb(0 0 0 / 5%);
            border-radius: 5px;
            background: white;
            max-width: 1100px;
            margin: auto;
            position: relative;
            top: -150px;
        }

        #dpl #section2 .inner_section1:nth-child(1) {
            width: 55%;
        }

        #dpl #section2 .inner_section1:nth-child(2) {
            width: 45%;
        }

        #dpl #section2 .inner_section1:nth-child(1) {
            padding-top: 50px;
        }

        #dpl #section2 .inner_section1:nth-child(2) {
            padding: 40px;
            background: white;
            border-radius: 6px;
        }

        #dpl #section2 .inner_section1:nth-child(2) label {
            margin-bottom: 5px;
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
            line-height: 23px;
            font-weight: 500;
            color: #111111;
        }

        #dpl #section2 .inner_section1:nth-child(2) input {
            height: 35px;
            margin-bottom: 10px;
            border-radius: 6px;
            border: 1px solid #ced4da;
        }

        #dpl #section2 .inner_section1:nth-child(2) form>div {
            font-family: 'Poppins', sans-serif;
            font-size: 10px;
            line-height: 23px;
            font-weight: 400;
            color: #111111;
            letter-spacing: 1px;
        }

        #dpl #section2 .inner_section1:nth-child(2) form>input:nth-child(3) {
            font-family: 'Poppins', sans-serif;
            font-size: 12px;
            line-height: 12px;
            font-weight: 600;
            color: #ffffff;
        }

        #dpl #section2 .inner_section1:nth-child(2) form>div>div>a>div {
            display: inline-block;
            border: 2px solid black;
            border-radius: 6px;
            padding: 0px 10px;
            font-family: 'Poppins', sans-serif;
            font-size: 11px;
            line-height: 28px;
            font-weight: 600;
            color: #1f1f1f;
        }

        #dpl #section2 .inner_section1:nth-child(2) form>div>div>a>div:hover {
            color: white;
            background: black;
        }

        #dpl #section2 .inner_section1:nth-child(2) form>div>a>div {
            display: inline-block;
            min-width: 142px;
            height: 30px;
            font-family: 'Poppins', sans-serif;
            font-size: 11px;
            line-height: 28px;
            font-weight: 600;
            color: #4c5667;
            border: 1px solid #ebebeb;
            border-radius: 5px;
            padding: 0px 10px;
        }

        #dpl #section2 .inner_section1:nth-child(2) form>div>a>div:hover {
            color: white;
            background: #ed940d;
        }

        #dpl #section2 .inner_section1:nth-child(1) h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 40px;
            line-height: 44px;
            font-weight: 800;
            color: white;
        }

        #dpl #section2 .inner_section1:nth-child(1) ul li {
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            line-height: 23px;
            font-weight: 400;
            color: white;
            list-style: none;
            display: flex;
            align-items: end;
        }


        #section3 {
            padding: 20px 30px;
            max-width: 1100px;
            margin: auto;
        }

        #section3 h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 33px;
            line-height: 45px;
            font-weight: 500;
            color: #dc3545;
            text-align: center;
            margin-top: 25px;
        }

        #section3 p {
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            line-height: 24px;
            font-weight: 400;
            color: #3a3a3a;
            text-align: center;
            margin-bottom: 0px;
        }

        #section3 a {
            text-decoration: none;
        }

        #section3 a div {
            font-family: 'Poppins', sans-serif;
            font-size: 11px;
            line-height: 28px;
            font-weight: 600;
            color: #a0a6af;
            text-align: center;
            margin-bottom: 0px;
            border: 1px solid #ebebeb;
            border-radius: 4px;
            width: 129px;
            margin: auto;
            padding: 0px 14px;
        }

        #section3 a div:hover {
            background: #ef8a09;
            color: white;
        }



        #section3 h2,
        #section3 h2 input {
            font-family: 'Poppins', sans-serif;
            font-size: 19px;
            line-height: 32px;
            font-weight: 600;
            color: #28a745;
            text-align: center;
        }

        #section3 h3 {
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            line-height: 26px;
            font-weight: 500;
            color: #1f1f1f;
            text-align: center;
        }


        #section3>div:nth-child(1) {
            display: flex;
            width: 100%;
            justify-content: space-between;
            height: 16px;
            margin: 0px 10px;
        }

        #section3>div:nth-child(1) p {
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            line-height: 16px;
            font-weight: 600;
            color: #3a3a3a;
            width: 70px;
            margin-left: 20px;
            margin-right: 20px;
        }

        #section3>div:nth-child(1)>div {
            width: 100%;
            border-radius: 5px;
            border: 1px solid rgb(189, 113, 113);
        }

        #section3>div:nth-child(1)>div {
            display: flex;
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            line-height: 15px;
            font-weight: 700;
            color: #181818;
            display: flex;
        }


        #section3>div:nth-child(1)>div>div:nth-child(1) {
            width: 75%;
            background: #48be3a;
            text-align: center;
        }

        #section3>div:nth-child(1)>div>div:nth-child(2) {
            width: 25%;
        }

        #section3 form>div:nth-child(1) {
            display: flex;
            width: 100%;
        }

        #section3 form>div:nth-child(1)>div {
            width: 33.33%;
            display: flex;
        }

        #section3 form>div:nth-child(1)>div label {
            display: flex;
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            line-height: 26px;
            font-weight: 600;
            color: #111111;
        }

        #section3 form>div:nth-child(1)>div p {
            display: flex;
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            line-height: 26px;
            font-weight: 500;
            color: #111111;
        }

        #section3 form>div:nth-child(3) {
            display: flex;
        }

        #section3 form>div:nth-child(3)>div {
            width: 33%;
            display: block;
        }

        #section3 form>div:nth-child(3)>div>div {
            width: 100%;
            display: block;
            padding: 5px 15px;
        }

        #section3 form>div:nth-child(3)>div>div>label {
            width: 100%;
            display: block;
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
            line-height: 23px;
            font-weight: 500;
            color: #111111;
        }

        #section3 form>div:nth-child(3)>div>div>input,
        #section3 form>div:nth-child(3)>div>div>select {
            width: 100%;
            display: block;
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            line-height: 21px;
            font-weight: 400;
            color: #495057;
            height: 40px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        #section3 form>input {
            width: 110px;
            display: block;
            font-family: 'Poppins', sans-serif;
            font-size: 12px;
            line-height: 12px;
            font-weight: 600;
            color: #ffffff;
            background: #ef8a09;
            padding: 13px 18px;
            border-radius: 5px;
            border: 1px solid #ef8a09;
            margin: auto;
            margin-top: 5px;
        }

        #section3>div:nth-child(5),
        #section3>div:nth-child(6),
        #section3>div:nth-child(8) {
            display: block;
            font-family: 'Poppins', sans-serif;
            font-size: 11px;
            line-height: 19px;
            font-weight: 400;
            color: #3a3a3a;
            text-align: center;
            margin-top: 15px;
        }

        #section3>div:nth-child(8) a:hover {
            color: #030f4d;
        }

        #section3>div:nth-child(5) a {
            text-decoration: none;
            color: #484848;
        }

        #section3>div:nth-child(5) a:hover {
            color: #ed940d;
        }


        #contact {
            position: absolute;
            top: 60px;
            right: 20px;
            background: white;
            padding: 15px;
            border-radius: 6px;
            box-shadow: 1px 1px 15px #3a3a3a;
            display: none;
            cursor: pointer;
        }

        #contact a {
            display: block;
            color: #1f1f1f;
            text-decoration: none;
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
            line-height: 26px;
            font-weight: 400;
        }

        #contact a:hover {
            color: #ed940d;
        }

        #card_benefits {
            max-width: 1100px;
            margin: 20px auto;
        }

        #card_benefits h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 42px;
            line-height: 42px;
            font-weight: 600;
            text-align: center;
            color: #1f1f1f;
        }

        #card_benefits #container {
            width: 100%;
            font-family: 'Poppins', sans-serif;
            font-size: 20px;
            line-height: 30px;
            font-weight: 400;
            /* text-align: center; */
            color: #1f1f1f;
            box-shadow: 0 6px 38px rgb(0 0 0 / 5%);
        }

        #card_benefits #container .inner_container {
            display: flex;
        }

        #card_benefits #container .inner_container >div {
            display: flex;
            width: 33.33%;
            padding: 25px;
        }

        #card_benefits #container .inner_container div> .number p {
            font-family: 'Poppins', sans-serif;
            font-size: 27px;
            line-height: 36px;
            font-weight: 500;
            /* text-align: center; */
            color: #1f1f1f;
        }

        #card_benefits #container .inner_container div>div:nth-child(2)>p:nth-child(1) {
            font-family: 'Poppins', sans-serif;
            font-size: 18px;
            line-height: 25px;
            font-weight: 700;
            /* text-align: center; */
            color: #1f1f1f;
        }

        #card_benefits #container .inner_container div>div:nth-child(2)>p:nth-child(2) {
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            line-height: 22px;
            font-weight: 400;
            /* text-align: center; */
            color: #111111;
        }

        @media(max-width:1200px) {

            #section3,
            #card_benefits,
            #card_benefits #container {
                max-width: 930px;
            }
        }

        @media(max-width:1000px) {

            #section3,
            #card_benefits,
            #card_benefits #container {
                max-width: 700px;
            }

        }

        @media(max-width:770px) {

            #section3,
            #card_benefits,
            #card_benefits #container,
            #card_benefits #container .inner_container {
                max-width: 500px;
                display: block;
            }

            #card_benefits #container,
            #card_benefits #container .inner_container div {
                width: 100%;
                /* border: 1px solid #ececec; */
                margin: auto;
               
            }
            #card_benefits #container .inner_container div div:nth-child(1){
                width: 20%;
                /* border: 1px solid #ececec; */
                margin: auto;
            }
            
                }

        @media(max-width:575px) {


            #section3,
            #card_benefits {
                display: block;
                padding: 40px 15px;

                margin: 20px;
            }
        }
    </style>
</head>

<body>
    <div id="dpl">
        <div id="section1">
            <img src="images/logo.png" alt="">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16" id="contact_svg">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
        </div>
        <div id="contact">
            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16" style="margin-right: 8px;">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                </svg>+91-73594-68774</a>
            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16" style="margin-right: 8px;">
                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                </svg>info@my24loan.in</a>
        </div>
        <div id="section2">

        </div>
    </div>
    <div id="section3">
        <div style="width: 40px;height:40px;margin:30px auto;">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16" style="color:#dc3545;">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
            </svg>
        </div>
        <h1>Payment Unsuccessful</h1>
        <p>Your loan application payment process has failed. Please try again.</p>
        <p>If you have any questions you can contact on our customer care number.</p>
        <a href="index.php">
            <div>GO TO HOMEPAGE</div>
        </a>
    </div>
    <div id="card_benefits">
        <h1>Membership Card Benefits</h1>
        <div id="container">
            <div class="inner_container">
                <div>
                    <div>
                        <p>1</p>
                        <img src="images/circle.png" alt="" style="width:50px;position:relative;top:-56px;left:-21px;">
                    </div>
                    <div>
                        <p>Get pre approval loan offer</p>
                        <p>in multiple banks from one platform</p>
                    </div>
                </div>
                <div>
                    <div>
                        <p>2</p>
                        <img src="images/circle.png" alt="" style="width:50px;position:relative;top:-56px;left:-19px;">
                    </div>
                    <div>
                        <p>Our Customer service</p>
                        <p>for 4 years</p>
                    </div>
                </div>
                <div>
                    <div>
                        <p>3</p>
                        <img src="images/circle.png" alt="" style="width:50px;position:relative;top:-56px;left:-19px;">
                    </div>
                    <div>
                        <p>Refer and Get earn upto 40%</p>
                        <p>payout per membership card</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <script>
            document.getElementById("contact_svg").addEventListener("mouseover", function() {
                document.getElementById("contact").style.display = "block";
            });
            document.getElementById("contact").addEventListener("mouseover", function() {
                document.getElementById("contact").style.display = "block";
            });
            document.getElementById("contact").addEventListener("mouseout", function() {
                document.getElementById("contact").style.display = "none";
            });
        </script>
</body>

</html>
<?php include "footer.php"; ?>