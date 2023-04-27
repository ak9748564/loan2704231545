<?php include "navbar.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500;800&family=Poppins:wght@400;500;600;700&family=Raleway:wght@600;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Loan Calculator</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        #loan_calculator {
            background: #f8f9fa;
            padding: 40px 0px;
        }

        #loan_calculator h1 {
            max-width: 1100px;
            margin: auto;
            font-family: 'Poppins', sans-serif;
            font-size: 33px;
            line-height: 45px;
            font-weight: 500;
            color: #1f1f1f;
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

        #calculator_accordian #left .accord_btn {
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

    <div id="loan_calculator">
        <h1>Loan Calculator</h1>
    </div>
    <div id="calculator">
        <div class="section1">
            <h1>EMI Calculator</h1>
            <div>
                <label for="">Loan Amount</label>
                <div>
                    <div>&#8377;</div>
                    <input type="number" id="loan_amount" min="10000" value="10000">
                </div>
                <label for="">Interest Rate</label>
                <div>
                    <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-percent" viewBox="0 0 16 16">
                            <path d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                        </svg></div>
                    <input type="number" id="interest_rate" min="0" value="0">
                </div>
                <label for="">Loan Tenure</label>
                <div>
                    <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                        </svg></div>
                    <input type="number" id="loan_tenure" min="1" value="1">
                    <div style="width:80px;margin-left:10px;padding:0;display:flex;">
                        <div id="yr" style="width:40px;padding:3px 13px;background:#286090;border-color:#204d74;color:white;border-radius:4px;">Yr</div>
                        <div id="mo" style="width:40px;padding:3px 8px;background:#337ab7;border-color:#2e6da4;color:white;border-radius:4px;">Mo</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section1" style="background:white;">
            <div style="background:white;border-bottom:1px solid #ccc;">
                <h1>Loan EMI</h1>
                <p style="display:flex;justify-content:center;"><b>&#8377;&nbsp;</b><b id="loan_emi">0</b></p>
            </div>
            <div style="background:white;border-bottom:1px solid #ccc;">
                <h1>Total Interest Payable</h1>
                <p style="display:flex;justify-content:center;"><b>&#8377;&nbsp;</b><b id="total_interest">0</b></p>
            </div>
            <div style="background:white;">
                <h1>Total of Payments (Principal + Interest)</h1>
                <p style="display:flex;justify-content:center;"><b>&#8377;&nbsp;</b><b id="total_payment">0</b></p>
            </div>
        </div>
        <div class="section1">
            <div class="container bg">
                <h2>Option 1 (recharts)</h2>
                <div class="ct-chart ct-perfect-fourth"></div>
                <h2>Option 2 (highcharts)</h2>
                <div id="recharts-example"></div>
                <h2>Option 3 (something)</h2>
            </div>
        </div>
    </div>
    <div id="p">
        <p>Instant personal loan calculator makes it easy for you to get monthly instalments for your loans.</p>

        <p>If you are taking out a <a href="" style="text-decoration:none;">quick personal loan</a>, an average monthly instalment is an important factor in determining the loan amount and time. The personal loan calculator helps you quickly calculate your repayments, making it easier for you to plan loans and your payments.</p>

        <p>To calculate your EMI, simply enter the loan amount, interest rate and loan lease, and your EMI will be displayed immediately. You can apply for loans from Rs. 25,000/- to 40,00,000/- per hour from 1 to 5 years.</p>

        <p>The EMI loan calculator is designed to be easy to use and accurate. You can use the EMI loan calculator to calculate EMI for personal loans at any bank or financial institution. It's free to use.</p>
    </div>
    <div id="calculator_accordian">
        <div id="left">
            <div class="accord_container">
                <div class="accord_btn">
                    <p>What is personal loan EMI?</p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z" />
                    </svg>
                </div>
                <div class="accord_area" style="position:relative;top:-200px;">
                    EMI, or Equated Monthly Instalment, is the fixed amount paid by a borrower every month to clear off the loan taken from a bank. It is scheduled at a specific date of every calendar month and includes both principal and interest components. Your personal loan EMI depends on the loan principal, the rate of interest and the loan tenure.
                </div>
            </div>
            <div class="accord_container">
                <div class="accord_btn">
                    <p>How to calculate personal loan EMI?</p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z" />
                    </svg>
                </div>
                <div class="accord_area" style="position:relative;top:-200px;">
                    It is essential to calculate your EMI before applying for a personal loan. While you can do so manually, using a Personal loan calculator can help you determine the more accurate value. You can select the required loan amount, tenure and rate of interest to get the exact payable EMI amount with an interactive chart.
                </div>
            </div>
            <div class="accord_container">
                <div class="accord_btn">
                    <p>How to reduce your personal loan EMI?</p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z" />
                    </svg>
                </div>
                <div class="accord_area" style="position:relative;top:-200px;">
                    EMI may affect your monthly expenses until you repay it. Some simple steps that can help you reduce the personal loan EMI and manage outlays easily are:
                    <ul>
                        <li>Option for a longer repayment tenor - It will help you spread the loan cost over a longer duration and help you pay in small installment</li>
                        <li>Negotiate with the loan provider for a lower rate of interest</li>
                        <li>Negotiate with the loan provider for a lower rate of interest</li>
                        <li>Become a My24Loan Member for the best deals as per your needs and repaying capacity</li>
                    </ul>
                </div>
            </div>
            <div class="accord_container">
                <div class="accord_btn">
                    <p>What are the factors that affect personal loan EMI?</p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z" />
                    </svg>
                </div>
                <div class="accord_area" style="position:relative;top:-200px;">
                    Following factors affect personal loan EMI
                    <ul>
                        <li>Loan amount - Monthly instalments payable are directly proportional to the loan amount opted for. The higher the loan amount the higher will be your EMI.</li>
                        <li>Applicable cornet Interest -Interest rate is a percentage at which lenders charge interest on the Loan amount. A higher interest rate increases the EMIs and vice versa.</li>
                        <li>Tenor - it is the repayment period for the personal loan availed and is inversely related to EMIs. A longer tenor reduces monthly instalments while a shorter tenor increases them.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="right">
            <div class="accord_container">
                <div class="accord_btn">
                    <p>What is business loan EMI?</p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z" />
                    </svg>
                </div>
                <div class="accord_area" style="position:relative;top:-200px;">
                    EMI, or Equated Monthly Instalment, is the fixed amount paid by a borrower every month to clear off the loan taken from a bank. It is scheduled at a specific date of every calendar month and includes both principal and interest components. Your business loan EMI depends on the loan principal, the rate of interest and the loan tenure.
                </div>
            </div>
            <div class="accord_container">
                <div class="accord_btn">
                    <p>How to calculate business loan EMI?</p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z" />
                    </svg>
                </div>
                <div class="accord_area" style="position:relative;top:-200px;">
                    It is essential to calculate your EMI before applying for a Business loan. While you can do so manually, using a Business loan calculator can help you determine the more accurate value. You can select the required loan amount, tenure and rate of interest to get the exact payable EMI amount with an interactive chart.
                </div>
            </div>
            <div class="accord_container">
                <div class="accord_btn">
                    <p>How to reduce your business loan EMI?</p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z" />
                    </svg>
                </div>
                <div class="accord_area" style="position:relative;top:-200px;">
                    EMI may affect your monthly expenses until you repay it. Some simple steps that can help you reduce the Business loan EMI and manage outlays easily are:
                    <ul>
                        <li>Option for a longer repayment tenor - It will help you spread the loan cost over a longer duration and help you pay in small installment</li>
                        <li>Negotiate with the loan provider for a lower rate of interest</li>
                        <li>Maintain a strong CIBIL score to enjoy lower interest rates and reduced EMI</li>
                        <li>Become a My24Loan Member for the best deals as per your needs and repaying capacity</li>
                    </ul>
                </div>
            </div>
            <div class="accord_container">
                <div class="accord_btn">
                    <p>What are the factors that affect business loan EMI?</p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z" />
                    </svg>
                </div>
                <div class="accord_area" style="position:relative;top:-200px;">
                    Following factors affect Business loan EMI:
                    <ul>
                        <li>Loan amount - Monthly instalments payable are directly proportional to the loan amount opted for. The higher the loan amount the higher will be your EMI.</li>
                        <li>Applicable cornet Interest - Interest rate is a percentage at which lenders charge interest on the Loan amount. A higher interest rate increases the EMIs and vice versa.</li>
                        <li>Tenor - it is the repayment period for the Business loan availed and is inversely related to EMIs. A longer tenor reduces monthly instalments while a shorter tenor increases them.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="js/loan_calculator.js"></script>

</body>
<script>
    new Chartist.Pie('.ct-chart', {
        series: [{
                value: 2,
                name: 'UX Engineers',
                className: "stroke-1"
            },
            {
                value: 2,
                name: 'Administration',
                className: "stroke-4"
            },
            {
                value: 7,
                name: 'Data Scientists',
                className: "stroke-3"
            },
            {
                value: 5,
                name: 'Platform Architects',
                className: "stroke-2"
            }
        ]
    }, {
        donut: true,
        labelDirection: 'explode',
        width: 300,
        height: 200,
    });
</script>

</html>
<?php include "footer.php"; ?>