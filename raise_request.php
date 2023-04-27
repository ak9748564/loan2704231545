<?php include "navbar.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500;800&family=Poppins:wght@400;500;600;700&family=Raleway:wght@600;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Raise Request</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        #navigation {
            background: #f8f9fa;
            padding: 40px 0px;
        }

        #navigation h1 {
            max-width: 1100px;
            margin: auto;
            font-family: 'Poppins', sans-serif;
            font-size: 12px;
            line-height: 23px;
            font-weight: 400;
            color: #6c757d;
        }

        #navigation h1 a {
            color: #6c757d;
            text-decoration: none;
        }

        #navigation h1 a:hover {
            color: #ed940d;
        }

        #calculator {
            max-width: 1100px;
            margin: auto;
            display: flex;
            padding: 70px 0px;

        }

        #calculator .section1 {
            width: 33.33%;
            border: 1px solid #ccc;
        }

        #calculator .section1:nth-child(2) {
            background: white;
        }

        #calculator .section1:nth-child(2) h1 {
            font-family: Arial, Helvetica, sans-serif;
            color: #888;
            font-size: 14px;
            line-height: 20px;
            font-weight: 500;
            background: white;
            text-align: center;
        }

        #calculator .section1:nth-child(2) p {
            font-family: Arial, Helvetica, sans-serif;
            color: #333;
            font-size: 18px;
            line-height: 27px;
            font-weight: 700;
            background: white;
            text-align: center;
        }

        #calculator h1 {
            background: #333;
            text-align: center;
            font-family: 'Poppins', sans-serif;
            font-size: 27px;
            line-height: 40px;
            font-weight: 400;
            color: #d0d0d0;
            margin-bottom: 0px;
        }

        #calculator>div>div {
            padding: 15px 20px;
            background: #eee;
        }

        #calculator>div>div label {
            font-family: 'Poppins', sans-serif;
            font-size: 15px;
            line-height: 25px;
            font-weight: 500;
            color: #1f1f1f;
        }

        #calculator>div>div>div {
            display: flex;
            height: 35px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 10px;
        }

        #calculator>div>div>div>div {
            width: 40px;
            padding: 3px 13px;
        }

        #calculator>div>div>div>input {
            width: 100%;

        }

        #p {
            padding: 70px 0px;
            background: #f7f9fb;
        }

        #p p {
            max-width: 1100px;
            margin: auto;
            font-family: 'Poppins', sans-serif;
            font-size: 18px;
            line-height: 30px;
            font-weight: 400;
            color: #3a3a3a;
            text-align: center;
            margin-bottom: 10px;
        }

        #p p a {
            color: #030f4d;
        }

        #p p a:hover {
            color: #ed940d;
        }

        #calculator_accordian {
            max-width: 1100px;
            padding: 60px 0px;
            margin: auto;
            display: flex;
            justify-content: space-between;
        }

        #calculator_accordian #left,
        #calculator_accordian #right {
            width: 50%;
            padding: 25px;
        }

        #calculator_accordian .accord_container {
            border: 1px solid #ececec;
            border-radius: 5px;
            overflow: hidden;
            margin: 10px 0px;
        }

        #calculator_accordian #left label {
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
            line-height: 23px;
            font-weight: 500;
            color: #111111;
            margin: 10px 0px;
            display: block;
            width: 100%;
        }

        #calculator_accordian #left input,#calculator_accordian #left select {
            line-height: 18px;
            padding: 10px 16px;
            min-height: 40px;
            font-size: .9rem;
            display: block;
            width: 100%;
            border-radius: 6px;
            border: 1px solid #ced4da;
        }

        #calculator_accordian #left input:nth-child(3) {
            background: #ed940d;
        }

        #calculator_accordian #right .accord_btn {
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            line-height: 26px;
            font-weight: 500;
            color: #1f1f1f;
            display: flex;
            justify-content: space-between;
            padding: 12px 20px;
            cursor: pointer;
        }

        #calculator_accordian #left .accord_area {
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            line-height: 24px;
            font-weight: 400;
            color: #3a3a3a;
            padding: 12px 20px;
            z-index: -1;
        }

        #calculator_accordian #right .accord_area {
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            line-height: 24px;
            font-weight: 400;
            color: #3a3a3a;
            padding: 12px 20px;
            z-index: -1;
        }

        #calculator_accordian #left .accord_btn p {
            margin-bottom: 0px;
        }

        #calculator_accordian #left .accord_btn svg {
            display: block;
            margin-top: 5px;
        }

        #calculator_accordian #right .accord_btn p {
            margin-bottom: 0px;
        }

        #calculator_accordian #right .accord_btn svg {
            margin-top: 5px;
        }

        .section1 .bg {
            background-color: #daeff9;
            height: 100%;
            width: 100%;
        }

        .stroke-1 {
            stroke: #FFBCA9;
        }

        .stroke-2 {
            stroke: #FF9B7E;
        }

        .stroke-3 {
            stroke: #E07050;
        }

        .stroke-4 {
            stroke: #CB4D29;
        }

        .stroke-5 {
            stroke: #9E3213;
        }



        @media(max-width:1200px) {

            #p p,
            #loan_calculator h1,
            #calculator_accordian,
            #calculator {
                max-width: 930px;
            }
        }

        @media(max-width:1000px) {

            #p p,
            #loan_calculator h1,
            #calculator_accordian,
            #calculator {
                max-width: 700px;
            }

            #calculator {
                display: block;
            }

            #calculator .section1 {
                width: 100%;
            }
        }

        @media(max-width:750px) {

            #p p,
            #loan_calculator h1,
            #calculator_accordian,
            #calculator {
                max-width: 520px;
            }

            #calculator_accordian {
                display: block;
            }

            #calculator_accordian #left,
            #calculator_accordian #right {
                width: 100%;
            }

            #loan_calculator h1 {
                font-size: 23px;
                line-height: 35px;
            }
        }

        @media(max-width:575px) {

            #p p,
            #loan_calculator h1 {
                padding: 0px 20px;
                width: 100%;
            }

            #calculator {
                margin: 25px;
                width: auto;
            }
        }
    </style>
</head>

<body>

    <div id="navigation">
        <h1><a href="index.php">Home</a>&nbsp;&nbsp;>&nbsp;&nbsp;Pages&nbsp;&nbsp;>&nbsp;&nbsp;Raise a Request</h1>
    </div>

    <div id="calculator_accordian">
        <div id="left">
            <form action="">
                <p>I am a,</p>
                <div style="display: flex;">
                    <input type="radio" name="" id="" style="width:30px;margin-right:5px;"><label for="" style="display: inline;">Customer</label>
                    <input type="radio" name="" id="" style="width:30px;margin-right:5px;"><label for="">Guest User</label>
                </div>
                <label for="">Full Name *</label>
                <input type="text" placeholder="John Doe">
                <label for="">Mobile no *</label>
                <input type="text" placeholder="98765 43210">
                <label for="">Email id *</label>
                <input type="text" placeholder="John@domain.com">
                <label for="">Card Number(Optional)</label>
                <input type="text" placeholder="9876 5432 1012 3456 ">
                <label for="">Query Related To</label>
                <select name="" id="">
                    <option value="">Select Issue</option>
                    <option value="">Service Problem</option>
                    <option value="">Payment Issue</option>
                    <option value="">Technical Problem</option>
                    <option value="">Eligibility or Pre-approved query</option>
                    <option value="">Select Issue</option>
                </select>
                <label for="">Request Message</label>
                <input type="text" placeholder="Request messgae in minimum 60 characters" style="height:50px;">
                <input type="submit" value="Submit Request" style="margin-top:15px;width:150px;color:white; background: #ed940d;">
            </form>
        </div>
        <div id="right">
            <div class="accord_container">
                <div class="accord_btn">
                    <p>I did the payment by mistake and I do not wish to take company services. Can I request a refund?</p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z" />
                    </svg>
                </div>
                <div class="accord_area" style="position:relative;top:-200px;">
                    In this case, we request you to call the company on +91-73594-68774 between 10 AM to 5 PM – Monday to Saturday (business days only) – and discuss the matter.
                </div>
            </div>
            <div class="accord_container">
                <div class="accord_btn">
                    <p>Who is eligible to get a GST Return?</p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z" />
                    </svg>
                </div>
                <div class="accord_area" style="position:relative;top:-200px;">
                    Some of the likely purposes for which a personal loan can be used are Shopping, Home Renovation, Higher Education, Debt Consolidation, Tour Travel, Wedding, Medical emergency, etc.
                </div>
            </div>
            <div class="accord_container">
                <div class="accord_btn">
                    <p>What should I do if I am not satisfied with company's services?</p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z" />
                    </svg>
                </div>
                <div class="accord_area" style="position:relative;top:-200px;">
                    In this case, we request you to call the company on +91-73594-68774 between 10 AM to 5 PM – Monday to Saturday (business days only) – and discuss the matter.
                </div>
            </div>
            <div class="accord_container">
                <div class="accord_btn">
                    <p>What should I do if my account is not created even after the payment is done?</p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z" />
                    </svg>
                </div>
                <div class="accord_area" style="position:relative;top:-200px;">
                    It might happen that your amount is on hold with the payment gateway and is still not credited to the company's account. Kindly do not worry, your account will be created once the amount is credited to the company's account – and you will be timely informed. Or, the payment gateway will refund the amount to your account according to their rules and regulations.
                </div>
            </div>
            <div class="accord_container">
                <div class="accord_btn">
                    <p>I'm not willing to take company's services. Can I request a refund?</p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z" />
                    </svg>
                </div>
                <div class="accord_area" style="position:relative;top:-200px;">
                    Following factors affect Business loan EMI:
                    In this case, we request you to call the company on +91-73594-68774 between 10 AM to 5 PM – Monday to Saturday (business days only) – and discuss the matter.
                </div>
            </div>
        </div>
    </div>
    <script>
        var accord_btn = document.getElementsByClassName("accord_btn");
        var accord_area = document.getElementsByClassName("accord_area");
        var bi_plus_lg = document.getElementsByClassName("bi-plus-lg");
        var bi_dash_lg = document.getElementsByClassName("bi-dash-lg");

        bi_dash_lg[0].style.display = "none";
        bi_dash_lg[1].style.display = "none";
        bi_dash_lg[2].style.display = "none";
        bi_dash_lg[3].style.display = "none";
        bi_dash_lg[4].style.display = "none";

        accord_area[0].style.display = "none";
        accord_area[1].style.display = "none";
        accord_area[2].style.display = "none";
        accord_area[3].style.display = "none";
        accord_area[4].style.display = "none";


        accord_btn[0].onclick = function() {
            if (bi_dash_lg[0].style.display == "none") {
                bi_dash_lg[0].style.display = "block";
                bi_plus_lg[0].style.display = "none";
                accord_area[0].style.top = "0px";
                accord_area[0].style.display = "block";

                accord_area[1].style.display = "none";
                bi_dash_lg[1].style.display = "none";
                bi_plus_lg[1].style.display = "block";

                accord_area[2].style.display = "none";
                bi_dash_lg[2].style.display = "none";
                bi_plus_lg[2].style.display = "block";

                accord_area[3].style.display = "none";
                bi_dash_lg[3].style.display = "none";
                bi_plus_lg[3].style.display = "block";

                accord_area[4].style.display = "none";
                bi_dash_lg[4].style.display = "none";
                bi_plus_lg[4].style.display = "block";
            } else {
                bi_dash_lg[0].style.display = "none";
                bi_plus_lg[0].style.display = "block";
                accord_area[0].style.top = "-200px";
                accord_area[0].style.display = "none";
            }
        };

        accord_btn[1].onclick = function() {
            if (bi_dash_lg[1].style.display == "none") {
                bi_dash_lg[1].style.display = "block";
                bi_plus_lg[1].style.display = "none";
                accord_area[1].style.top = "0px";
                accord_area[1].style.display = "block";

                accord_area[0].style.display = "none";
                bi_dash_lg[0].style.display = "none";
                bi_plus_lg[0].style.display = "block";

                accord_area[2].style.display = "none";
                bi_dash_lg[2].style.display = "none";
                bi_plus_lg[2].style.display = "block";

                accord_area[3].style.display = "none";
                bi_dash_lg[3].style.display = "none";
                bi_plus_lg[3].style.display = "block";

                accord_area[4].style.display = "none";
                bi_dash_lg[4].style.display = "none";
                bi_plus_lg[4].style.display = "block";
            } else {
                bi_dash_lg[1].style.display = "none";
                bi_plus_lg[1].style.display = "block";
                accord_area[1].style.top = "-200px";
                accord_area[1].style.display = "none";
            }
        };

        accord_btn[2].onclick = function() {
            if (bi_dash_lg[2].style.display == "none") {
                bi_dash_lg[2].style.display = "block";
                bi_plus_lg[2].style.display = "none";
                accord_area[2].style.top = "0px";
                accord_area[2].style.display = "block";

                accord_area[1].style.display = "none";
                bi_dash_lg[1].style.display = "none";
                bi_plus_lg[1].style.display = "block";

                accord_area[0].style.display = "none";
                bi_dash_lg[0].style.display = "none";
                bi_plus_lg[0].style.display = "block";

                accord_area[3].style.display = "none";
                bi_dash_lg[3].style.display = "none";
                bi_plus_lg[3].style.display = "block";

                accord_area[4].style.display = "none";
                bi_dash_lg[4].style.display = "none";
                bi_plus_lg[4].style.display = "block";
            } else {
                bi_dash_lg[2].style.display = "none";
                bi_plus_lg[2].style.display = "block";
                accord_area[2].style.top = "-200px";
                accord_area[2].style.display = "none";
            }
        };

        accord_btn[3].onclick = function() {
            if (bi_dash_lg[3].style.display == "none") {
                bi_dash_lg[3].style.display = "block";
                bi_plus_lg[3].style.display = "none";
                accord_area[3].style.top = "0px";
                accord_area[3].style.display = "block";

                accord_area[1].style.display = "none";
                bi_dash_lg[1].style.display = "none";
                bi_plus_lg[1].style.display = "block";

                accord_area[2].style.display = "none";
                bi_dash_lg[2].style.display = "none";
                bi_plus_lg[2].style.display = "block";

                accord_area[0].style.display = "none";
                bi_dash_lg[0].style.display = "none";
                bi_plus_lg[0].style.display = "block";

                accord_area[4].style.display = "none";
                bi_dash_lg[4].style.display = "none";
                bi_plus_lg[4].style.display = "block";
            } else {
                bi_dash_lg[3].style.display = "none";
                bi_plus_lg[3].style.display = "block";
                accord_area[3].style.top = "-200px";
                accord_area[3].style.display = "none";
            }
        };

        accord_btn[4].onclick = function() {
            if (bi_dash_lg[4].style.display == "none") {
                bi_dash_lg[4].style.display = "block";
                bi_plus_lg[4].style.display = "none";
                accord_area[4].style.top = "0px";
                accord_area[4].style.display = "block";

                accord_area[1].style.display = "none";
                bi_dash_lg[1].style.display = "none";
                bi_plus_lg[1].style.display = "block";

                accord_area[2].style.display = "none";
                bi_dash_lg[2].style.display = "none";
                bi_plus_lg[2].style.display = "block";

                accord_area[3].style.display = "none";
                bi_dash_lg[3].style.display = "none";
                bi_plus_lg[3].style.display = "block";

                accord_area[0].style.display = "none";
                bi_dash_lg[0].style.display = "none";
                bi_plus_lg[0].style.display = "block";


            } else {
                bi_dash_lg[4].style.display = "none";
                bi_plus_lg[4].style.display = "block";
                accord_area[4].style.top = "-200px";
                accord_area[4].style.display = "none";
            }
        };
    </script>

</body>

</html>
<?php include "footer.php"; ?>