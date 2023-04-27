<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500;800&family=Poppins:wght@400;500&family=Raleway:wght@600;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <style>
        * {
            padding: 0;
            margin: 0;
        }

        footer {
            background: #181818;
            padding-top: 50px;
        }

        footer #section1f {
            padding: 0px 65px;
            display: flex;
        }

        footer #section1f .inner_big_section1 {
            display: flex;
            width: 50%;
        }

        footer #section1f .inner_section1 {
            padding: 0px 25px;
            width: 50%;
        }

        footer #section1f .inner_big_section1 .inner_section1:nth-child(1) {
            padding: 0;
            display: flex;
            width: 50%;
        }

        footer #section1f .inner_big_section1 .inner_section1:nth-child(4) {
            width: 28%;
        }

        footer #section1f .inner_section1 img {
            width: 100%;
            margin-top: 25px;
        }

        footer #section1f .inner_section1 ul li{
            list-style: none;
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            line-height: 32px;
            font-weight: 400;
            color: #eff1f4;
            /* align-items: center; */
        }
        footer #section1f .inner_section1 ul li a{
            color: #eff1f4;
            text-decoration: none;
        }

        footer #section1f .inner_section1 ul li p {
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            line-height: 26px;
            font-weight: 500;
            color: #ffffff;
        }

        footer #section1f .inner_section1 ul li svg {
            margin-right: 10px;
            display: inline-block;
        }

        footer #section2f {
            padding: 50px 25px;
            display: flex;
            justify-content: space-between;
        }

        footer #section2f .inner_section1 {
            width: 33.33%;
            text-align: center;
            padding: 0px 25px;
        }

        footer #section2f .inner_section1 div {
            background: white;
            padding: 10px 20px;
            border-radius: 5px;
        }

        footer #section2f .inner_section1 a {
            font-family: 'Poppins', sans-serif;
            font-size: 12px;
            line-height: 12px;
            font-weight: 600;
            color: #4c5667;
            text-decoration: none;
            background: white;
        }

        footer #copyright {
            text-align: center;
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
            line-height: 21px;
            font-weight: 400;
            color: white;
            padding: 10px;
            border-top: 1px solid #a2a2a2;

        }

        @media(max-width:1000px) {
            footer #section1f .inner_section1 {
                padding: 0px 0px;
            }
        }

        @media(max-width:810px) {
            footer #section1f {
                display: block;
                width: 100%;
            }
            footer #section2f{
                display: block;
                max-width: 600px;
                margin: auto;
            }

            footer #section2f .inner_section1{
                display: block;
                width: 100%;
                margin: 8px 0px;
            }
            footer #section1f .inner_big_section1 {
                display: flex;
                width: 100%;
            }

            footer #section1f .inner_section1 {
                padding: 0px 0px;

            }

            footer #section1f .inner_big_section1 .inner_section1:nth-child(1) {
                width: 50%;
            }

            footer #section1f .inner_big_section1 .inner_section1:nth-child(4) {
                width: 50%;
            }
        }

        @media(max-width:600px) {
            footer #section1f .inner_big_section1 {
                display: block;
                width: 100%;
            }

            footer #section1f .inner_big_section1 .inner_section1:nth-child(1) {
                width: 100%;
            }

            footer #section1f .inner_big_section1 .inner_section1:nth-child(1) div img {
                width: 230px;
            }

            footer #section1f .inner_big_section1 .inner_section1:nth-child(2) {
                width: 100%;
            }

            footer #section1f .inner_big_section1 .inner_section1:nth-child(2) ul {
                width: 100%;
            }

            footer #section1f .inner_big_section1 .inner_section1:nth-child(3) {
                width: 100%;
            }

            footer #section1f .inner_big_section1 .inner_section1:nth-child(3) ul {
                width: 100%;
            }

            footer #section1f .inner_big_section1 .inner_section1:nth-child(4) {
                width: 100%;
            }

            footer #section1f .inner_big_section1 .inner_section1:nth-child(4) ul {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <footer>
        <div id="section1f">
            <div class="inner_big_section1">
                <div class="inner_section1">
                    <div><img src="images/logo-large-light.png" alt=""></div>
                </div>
                <div class="inner_section1">
                    <ul>
                        <li>
                            <p>USEFUL LINKS</p>
                        </li>
                        <li><a href="raise_request.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-ticket-detailed-fill" viewBox="0 0 16 16">
                                <path d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6V4.5Zm4 1a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7a.5.5 0 0 0-.5.5Zm0 5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7a.5.5 0 0 0-.5.5ZM4 8a1 1 0 0 0 1 1h6a1 1 0 1 0 0-2H5a1 1 0 0 0-1 1Z" />
                            </svg>Raise a Request</a></li>
                        <li><a href="company.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                            </svg>Company</a></li>
                        <li><a href="career.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z" />
                            </svg>Career</a></li>
                        <li><a href="important_update.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-square-fill" viewBox="0 0 16 16">
                                <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.93 4.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                            </svg>Important Update</a></li>
                        <li><a href="contact.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-map-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.598-.49L10.5.99 5.598.01a.5.5 0 0 0-.196 0l-5 1A.5.5 0 0 0 0 1.5v14a.5.5 0 0 0 .598.49l4.902-.98 4.902.98a.502.502 0 0 0 .196 0l5-1A.5.5 0 0 0 16 14.5V.5zM5 14.09V1.11l.5-.1.5.1v12.98l-.402-.08a.498.498 0 0 0-.196 0L5 14.09zm5 .8V1.91l.402.08a.5.5 0 0 0 .196 0L11 1.91v12.98l-.5.1-.5-.1z" />
                            </svg>Contact Us</a></li>

                    </ul>
                </div>
            </div>
            <div class="inner_big_section1">
                <div class="inner_section1">

                    <ul>
                        <li>
                            <p>INFO PAGES</p>
                        </li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z" />
                            </svg>FAQs</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                                <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z" />
                            </svg>Privacy Policy</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                                <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z" />
                            </svg>Refund And Return Policy</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                                <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z" />
                            </svg>Disclaimer</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                                <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z" />
                            </svg>Terms and Conditions</li>
                    </ul>
                </div>
                <div class="inner_section1">

                    <ul>
                        <li>
                            <p>CONTACT US</p>
                        </li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg>+91-73594-68774</li>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                            </svg>info@my24loan.in</li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                            </svg>Registered Office:
                            20, 2nd floor, Vijayraj Society, Causeway Road, Katargam, Surat, Gujarat, India - 395004</li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="section2f">
            <div class="inner_section1">
                <div>
                    <a>DIGITAL PERSONAL LOAN</a>
                </div>
            </div>
            <div class="inner_section1">
                <div>
                    <a>DIGITAL BUSINESS LOAN</a>
                </div>
            </div>
            <div class="inner_section1">
                <div>
                    <a>CUSTOMER LOGIN</a>
                </div>
            </div>
        </div>
        <div id="copyright">
            2022 © My24Loan Service All rights reserved.
        </div>
    </footer>
    <script>
        if((window.location.href=="http://localhost/loan/digital_business_loan.php")||(window.location.href=="http://localhost/loan/digital_personal_loan.php")||(window.location.href=="http://localhost/loan/check_eligibility.php")||(window.location.href=="http://localhost/loan/pre_approval.php")){
            document.getElementById("section1f").style.display ="none";
            document.getElementById("section2f").style.display ="none";
        }
    </script>
</body>

</html>