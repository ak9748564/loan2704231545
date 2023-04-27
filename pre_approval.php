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
            width: 50%;
            background: #48be3a;
            text-align: center;
        }

        #section3>div:nth-child(1)>div>div:nth-child(2) {
            width: 50%;
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
            color: #5a5a5a;
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

        @media(max-width:1200px) {
            #section3 {
                max-width: 930px;
            }
        }

        @media(max-width:1000px) {
            #section3 {
                max-width: 700px;
            }

        }

        @media(max-width:770px) {

            #section3 {
                max-width: 500px;
                display: block;
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


            #section3 {
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
            <p>Get offer to instant disbursement</p>
        </div>
    </div>
    <div id="section3">
        <div>
            <div>
                <div>50%</div>
                <div></div>
            </div>
            <p>Step: 3/6</p>
        </div>
        <h1>Get Pre-Approval Offer</h1>
        <hr>
        <form action="membership_offer.php">
            <div>
                <div><label for="">Name:&nbsp;</label>
                    <p>Arman Khan</p>
                </div>
                <div><label for="">Mobile no.:&nbsp;</label>
                    <p>9953952112</p>
                </div>
                <div><label for="">Loan Amount:&nbsp;</label>
                    <p>10000.00</p>
                </div>
            </div>
            <hr>
            <h2>Congratulations! Your pre-approval personal loan eligibility offer is Rs. <input type="text" value="2,46,913.00" style="display: inline;border:none;text-align:left;width:140px;" readonly></h2>
            <h3>As per your required loan amount - Rs. 10,000.00. Your monthly EMI are as below. Kindly select any option:</h3>
            <label for="" style="display: block;text-align:center;font-family:'Poppins',sans-serif;font-size:13px;line-height:23px;
            font-weight:600;color:#111111;">Tenure <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                </svg> EMI</label>

            <p style="text-align:center;"><input type="radio" name="" id="" style="width: 15px;display:inline;margin-right:10px;"><label for="" style="display: inline;font-family:'Poppins',sans-serif;font-size:13px;line-height:23px;
            font-weight:500;color:#111111;">36 Months <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                    </svg> Rs. 335.00</label></p>
            <p style="text-align:center;"><input type="radio" name="" id="" style="width: 15px;display:inline;margin-right:10px;"><label for="" style="display: inline;font-family:'Poppins',sans-serif;font-size:13px;line-height:23px;
            font-weight:500;color:#111111;">48 Months <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                    </svg> Rs. 266.00</label></p>
            <p style="text-align:center;"><input type="radio" name="" id="" style="width: 15px;display:inline;margin-right:10px;"><label for="" style="display: inline;font-family:'Poppins',sans-serif;font-size:13px;line-height:23px;
            font-weight:500;color:#111111;">60 Months <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                    </svg> Rs. 225.00</label></p>

            <input type="submit" value="GET OFFER">

        </form>
        <div>By proceeding, you agree to the&nbsp;<a href="">Privacy Policy</a>&nbsp;and&nbsp;<a href="">Terms of Use</a>&nbsp;of My24Loan</div>
        <div>Note - EMI starting at Rs. 1,982.00 is an indicative amount on 1 lakh loan 12.5 interest for a 6 years tenure. Loan disbursal at sole discretion of depend bank.</div>
        <hr>
        <div>Need to know about eligibility criteria, <a href="" style="text-decoration: none;">Click here.</a></div>
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