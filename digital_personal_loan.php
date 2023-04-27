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

        body {
            animation: blackbg 5s forwards;
        }

        @keyframes blackbg {
            0% {
                background: black;
            }

            99% {
                background: black;
            }

            100% {
                background: white;
            }
        }

        #dpl {
            height: 100vh;
            background-image: url('images/digital-personal-loan.jpg');
            background-position: center;
            background-size: cover;
            animation: blurr 5s forwards;
        }

        @keyframes blurr {
            0% {

                background-image: url('images/digital-personal-loan.jpg');
                background-position: center;
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
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
            padding: 50px 0px;
            display: flex;
            max-width: 1100px;
            margin: auto;
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
            padding: 25px 0px;
            display: flex;
            max-width: 1100px;
            margin: auto;
        }

        #section3 .inner_section1 {
            width: 33%;
            padding: 15px;
        }

        #section3 .inner_section1 div h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 12px;
            line-height: 26px;
            font-weight: 500;
            color: #ef8a09;
        }

        #section3 .inner_section1 div p {
            font-family: 'Poppins', sans-serif;
            font-size: 11px;
            line-height: 19px;
            font-weight: 400;
            color: #3a3a3a;
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

        @media(max-width:1200px) {

            #dpl #section2,
            #dpl #section3 {
                max-width: 930px;
            }
        }

        @media(max-width:1000px) {

            #dpl #section2,
            #dpl #section3 {
                display: block;
                max-width: 700px;
            }

            #dpl #section2 .inner_section1:nth-child(1),
            #dpl #section2 .inner_section1:nth-child(2) {
                width: 100%;
            }
        }

        @media(max-width:770px) {

            #dpl #section2,
            #section3 {
                max-width: 500px;
            }

            #dpl #section2 .inner_section1:nth-child(1) h1 {
                font-size: 30px;
                line-height: 33px;
            }

            #dpl #section2 .inner_section1:nth-child(2) ul li {
                font-size: 13px;
                line-height: 22px;
            }

            #section3 {
                display: block;
            }

            #section3 .inner_section1 {
                width: 100%;
            }

        }

        @media(max-width:575px) {

            #dpl #section2,
            #section3 {
                display: block;
                padding: 40px 15px;
                width: 100%;
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
        <div id="section2">
            <div class="inner_section1">
                <h1>Become a Prime member to get Instant Personal Loan Offer</h1>
                <ul style="margin-top:20px;">
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16" style="color: #ed940d;">
                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                        </svg>Loan offer from Multiple banks</li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16" style="color: #ed940d;">
                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                        </svg>Lowest interest rates ever (starting 12.5% pa.)</li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16" style="color: #ed940d;">
                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                        </svg>Disbursal up to Rs.15 Lakh</li>
                </ul>
            </div>
            <div class="inner_section1">
                <form action="check_eligibility.php">
                    <label for="">Full name</label>
                    <input type="text" style="display: block;width:100%;">
                    <label for="">Mobile no.</label>
                    <input type="text" style="display: block;width:100%;">
                    <div style="display: flex;margin-bottom:15px;">
                        <input type="chechbox" style="width:16px;height:16px;margin-right:10px;">
                        <div>By proceeding, you agree to the
                            <p style="display:inline-block;color:#ef8a09;">Terms of Use, Privacy Policy</p>and hereby authorize My24Loan representatives to Call / SMS for this application / My24Loan Membership Card and other products / services. This consent will override any registration by me for DNC / NDNC.
                        </div>
                    </div>
                    <input type="submit" value="APPLY NOW" style="display: block;width:100%;font-family: 'Poppins', sans-serif;font-size: 12px;line-height: 12px;font-weight: 600;color: #ffffff;background-color:#ef8a09;height:40px;">
                    <div style="display:flex;">
                        <div style="display: block;width:100%;font-family: 'Poppins', sans-serif;font-size: 14px;line-height: 24px;font-weight: 400;color: #3a3a3a;">
                            Already have an account?
                            <a href="">
                                <div style="">Login</div>
                            </a>
                        </div>
                        <a href="loan_calculator.php" style="text-decoration: none;">
                            <div>LOAN CALCULATOR</div>
                        </a>
                    </div>
                </form>
            </div>
        </div>
        <div id="contact">
            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16" style="margin-right: 8px;">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                </svg>+91-73594-68774</a>
            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16" style="margin-right: 8px;">
                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                </svg>info@my24loan.in</a>
        </div>
    </div>

    <div id="section3">
        <div class="inner_section1">
            <div class="inner_small_section1">
                <h1>Salaried Person Eligibility Criteria</h1>
                <p>(1) Minimum salary Rs. 15,000/- per month (2) 1 year job stability (3) Minimum age 21 years</p>
            </div>
            <div class="inner_small_section1">
                <h1>Self-Employed Person Eligibility Criteria</h1>
                <p>(1) Minimum 1 year IT return (2) 1 year business stability (3) Minimum age 21 years</p>
            </div>
        </div>
        <div class="inner_section1">
            <div class="inner_small_section1">
                <h1>How to works?</h1>
                <p>(1) Quick registration (2) Check eligibility (3) Buy membership card (4) Submit documents (5) Bank Verification (6) Bank Sanction</p>
            </div>
            <div class="inner_small_section1">
                <h1>Membership Card Benefits</h1>
                <p>(1) Let you apply for personal loan in multiple banks (2) You get 4 years free loan consultancy (3) Get 40% referral payout bonus (4) Get loan offers from multiple banks anytime-anywhere (5) You stay at home; our team will go to multiple banks for you (6) On-call Assistance on all your doubts</p>
            </div>
        </div>
        <div class="inner_section1">
            <div class="inner_small_section1">
                <h1>Why My24Loan?</h1>
                <p>(1) Per month 1000+ happy customers (2) Minimum documents - depend customer profile (3) Compare to multiple banks - loan up to Rs. 15,00,000/-* (4) Annual percentage rate - minimum 12.5% and maximum 24%* (5) Flexible repayment terms - 1 to 6 years (6) Processing fees - depand on customer profile & banks</p>
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