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
            height: 400px;
            width: 100%;
            background: #ed940d;
            position: relative;
            top: -85px;
            text-align: center;
            padding-top: 150px;
        }

        #dpl #section2 h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 33px;
            line-height: 45px;
            font-weight: 500;
            color: #111111;
        }

        #dpl #section2 p {
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            line-height: 24px;
            font-weight: 400;
            color: #111111;
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
            font-size: 25px;
            line-height: 38px;
            font-weight: 500;
            color: #ef8a09;
            text-align: center;
            margin-top: 25px;
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
            margin: auto;
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

        #card_benefits #container .inner_container div {
            display: flex;
            width:33.33%;
            padding: 25px;
        }
        #card_benefits #container .inner_container div svg{
            height: 60px;
            width: 60px;
            margin-right: 25px;
        }

        @media(max-width:1200px) {
            #section3,#card_benefits,#card_benefits #container {
                max-width: 930px;
            }
        }

        @media(max-width:1000px) {
            #section3,#card_benefits,#card_benefits #container  {
                max-width: 700px;
            }

        }

        @media(max-width:770px) {

            #section3 ,#card_benefits,#card_benefits #container,#card_benefits #container .inner_container {
                max-width: 500px;
                display: block;
            }
            #card_benefits #conatiner,#card_benefits #container .inner_container div{
                width: 100%;
                border: 1px solid #ececec;
                margin: auto;
            }

            #section3>form>div:nth-child(1) {
                display: block;
            }

            #section3>form>div:nth-child(1)>div {
                width: 100%;
            }

            #section3 form>div:nth-child(3) {
                display: block;
            }

            #section3 form>div:nth-child(3)>div {
                width: 100%;
                display: block;
            }


        }

        @media(max-width:575px) {


            #section3,#card_benefits {
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
            <h1>Digital Personal Loan Application Process</h1>
            <p>Buy Prime membership card get pre-approval loan offers life time</p>
        </div>
    </div>
    <div id="section3">
        <div>
            <div>
                <div>75%</div>
                <div></div>
            </div>
            <p>Step: 4/6</p>
        </div>
        <h1>Buy Membership Card</h1>
        <hr>

        <form action="">
            <div style="display:block;height:266px;max-width:420px;margin:auto;background-image:url(images/membership-prime-plain.jpg);border-radius:6px;padding-left:20px;padding-top:120px;">
                <p style="max-width:420px;margin:auto;font-family:'Poppins',sans-serif;font-size: 28px;line-height:48px;font-weight:400;        color:white;">**** **** **** 1843</p>
                <p style="max-width:420px;margin:auto;font-family:'Poppins',sans-serif;font-size: 13px;line-height:23px;font-weight:400;        color:white;margin-bottom:10px;">VALID FROM 25/06/2022 VALID TO 25/06/2026</p>
                <p style="max-width:420px;margin:auto;font-family:'Poppins',sans-serif;font-size: 24px;line-height:28px;font-weight:400;        color:white;">ARMAN KHAN</p>
            </div>

            <p style="font-family:'Poppins',sans-serif;font-size:19px;line-height:32px;font-weight:600;color:#1f1f1f;text-align:center;margin-top:40px;">Membership Card Fees</p>
            <p style="font-family:'Poppins',sans-serif;font-size: 25px;line-height:38px;font-weight:500;color:#1f1f1f;text-align:center;">Rs. <strike style="color:#dc3545;">3,999.00</strike> <b style="font-weight:400;color:#28a745;">1,100.00</b> only</p>
            <p style="font-family:'Poppins',sans-serif;font-size: 14px;line-height:14px;font-weight:400;color:#1f1f1f;text-align:center;"><b style="color:#28a745;font-weight:400;">> Offer Ending Soon</b> <b style="font-weight:400;color:#1f1f1f;">> GST Additional</b></p>
            <input type="submit" value="BUY NOW">
        </form>
        <div>By proceeding, you agree to the&nbsp;<a href="">Privacy Policy</a>&nbsp;and&nbsp;<a href="">Terms of Use</a>&nbsp;of My24Loan</div>
        <div>(1) Let you apply for personal loan in multiple banks (2) You get 4 years free loan consultancy (3) Get 40% referral payout bonus (4) Get loan offers from multiple banks anytime-anywhere (5) You stay at home; our team will go to multiple banks for you (6) On-call Assistance on all your doubts</div>

    </div>
    <?php include "our_bank.php"; ?>
    <div id="card_benefits">
        <h1>Card Benefits</h1>
        <div id="container">
            <div class="inner_container">
                <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid" viewBox="0 0 16 16">
  <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
</svg>
                    <p>Let you apply for business loan in multiple banks</p>
                </div>
                <div style="border-left: 1px solid #ececec;border-right: 1px solid #ececec;">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="60" fill="currentColor" class="bi bi-calendar4" viewBox="0 0 16 16" style="height: 60px;width:45px;">
  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z"/>
</svg>
                    <p>You get 4 years free loan consultancy</p>
                </div>
                <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-percent" viewBox="0 0 16 16" style="height: 60px;width:45px;">
  <path d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
</svg>
                    <p>Get 40% referral payout bonus</p>
                </div>
            </div>
            <div class="inner_container">
                <div style="border-top:1px solid #ececec;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16" >
  <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
</svg>
                    <p>Get loan offers from multiple banks anytime-anywhere
                    </p>
                </div>
                <div style="border-top:1px solid #ececec;border-left: 1px solid #ececec;border-right: 1px solid #ececec;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16" style="width:80px;">
  <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
</svg>
                    <p>You stay at home; our team will go to multiple banks for you</p>
                </div>
                <div style="border-top:1px solid #ececec;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16" style="width:45px;">
  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg>
                    <p>On-call Assistance on all your doubts</p>
                </div>
            </div>
        </div>
    </div>
    <?php include "our_customers_testimonials.php"; ?>

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