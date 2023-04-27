<?php include "navbar.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        #contact_us {
            background: #f8f9fa;
            padding: 40px 0px;
        }

        #contact_us h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 33px;
            line-height: 45px;
            font-weight: 500;
            color: #1f1f1f;
            max-width: 1100px;
            margin: auto;
        }

        #contact {
            max-width: 1100px;
            padding: 70px 0px;
            margin: auto;
            display: flex;
        }

        #contact .section1:nth-child(1) {
            width: 45%;
        }

        #contact .section1:nth-child(2) {
            width: 55%;
        }

        #contact .section1:nth-child(1) h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 42px;
            line-height: 42px;
            font-weight: 600;
            color: #1f1f1f;
            margin-bottom: 40px;
        }

        #contact .section1:nth-child(1) a {
            display: flex;
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            line-height: 24px;
            font-weight: 400;
            color: #030f4d;
            text-decoration: none;
        }

        #contact .section1:nth-child(1) a svg,
        #contact .section1:nth-child(1)>div svg {
            margin-top: 5px;
            margin-right: 10px;
        }

        #contact .section1:nth-child(1)>div {
            display: flex;
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            line-height: 24px;
            font-weight: 400;
            color: #3a3a3a;
        }

        #contact .section1:nth-child(1) p:nth-child(2) {
            font-family: 'Poppins', sans-serif;
            font-size: 12px;
            line-height: 26px;
            font-weight: 500;
            color: #1f1f1f;
        }

        #contact .section2 {
            width: 60%;
        }

        #contact .section2 form .row {
            display: flex;
            padding: 10px;
        }

        #contact .section2 form .row .col {
            display: block;
            width: 100%;
        }

        #contact .section2 form .row .col label {
            display: block;
            width: 100%;
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
            line-height: 23px;
            font-weight: 500;
            color: #111111;
        }

        #contact .section2 form .row .col input {
            display: block;
            width: 100%;
            height: 40px;
        }

        #contact .section2 form>div {
            display: block;
            padding: 10px;
        }

        #contact .section2 form>div label,
        #contact .section2 form>div input,
        #contact .section2 form>div textarea {
            display: block;
            width: 100%;
            border-radius: 5px;
            border: 1px solid #ced4da;
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
            line-height: 23px;
            font-weight: 500;
            color: #111111;
        }

        #contact .section2 form>div label {
            border: none;
        }

        #contact .section2 form>div p {
            font-family: 'Poppins', sans-serif;
            font-size: 10px;
            line-height: 23px;
            font-weight: 400;
            color: #111111;
        }

        #contact .section2 form>input {
            margin: 10px;
            padding: 10px 15px;
            border-radius: 8px;
            background: #ed940d;
            border: none;
            font-family: 'Poppins', sans-serif;
            font-size: 12px;
            line-height: 12px;
            font-weight: 500;
            color: #fff;
        }

        @media(max-width:1200px) {

            #company_profile h1,
            #my24loan_service h1,
            #my24loan_service p,
            #our_membership_cards #section1,
            #card_benefits h1,
            #card_benefits p,
            #contact,#contact_us h1 {
                max-width: 930px;
            }

        }

        @media(max-width:1000px) {

            #company_profile h1,
            #my24loan_service h1,
            #my24loan_service p,
            #our_membership_cards #section1,
            #card_benefits h1,
            #card_benefits p,
            #contact,#contact_us h1{
                max-width: 650px;
            }

            #contact {
                display: block;
            }

            #contact .section1 {
                display: block;
                width: 100%;
            }

            #contact .section1:nth-child(1) {
                width: 100%;
            }
            #contact .section2{
                width: 100%;
                max-width: 650px;
            }
            #contact .section2 form{
                max-width: 650px;
            }

        }

        @media(max-width:770px) {
            #company_profile h1 {
                max-width: 500px;
                font-size: 23px;
                line-height: 35px;
            }

            #my24loan_service h1,
            #my24loan_service p,
            #our_membership_cards #section1,
            #card_benefits h1,
            #card_benefits p ,#contact_us h1,#contact{
                max-width: 500px;
            }

        }

        @media(max-width:575px) {

            #company_profile,
            #my24loan_service,
            #our_membership_cards #section1,
            #card_benefits h1,
            #card_benefits p,#contact {
                display: block;
                padding: 40px 30px;
                width: 100%;
            }

            #our_membership_cards #section1 .inner_small_section1 {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div id="contact_us">
        <h1>Contact Us</h1>
    </div>
    <div id="contact">
        <div class="section1">
            <h1>Get in touch</h1>
            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                </svg>
                <p style="color:#030f4d;font-size:14px;line-height:24px;">+91-73594-68774</p>
            </a>
            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                </svg>
                <p style="color:#030f4d;font-size:14px;line-height:24px;"> info@my24loan.in</p>
            </a>
            <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                    <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z" />
                </svg>
                <p>GST No.: 24CHEPM6065J1Z5</p>
            </div>
            <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                </svg>
                <p> Registered Office:</p>
            </div>
            <p>20, 2nd floor, Vijayraj Society, Causeway Road, Katargam, Surat, Gujarat, India - 395004</p>
            <p style="font-family:'Poppins',sans-serif;font-size:12px;line-height:26px;font-weight:500;color:#1f1f1f;">Follow us:</p>
            <div></div>
        </div>
        <div class="section2">
            <form action="manage_contact.php">
                <div class="row">
                    <div class="col"><label for="">Full Name *</label><input type="text"></div>
                    <div class="col"><label for="">Mobile no *</label><input type="text"></div>
                </div>
                <div class="row">
                    <div class="col"><label for="">Subject</label><input type="text"></div>
                    <div class="col"><label for="">Email id *</label><input type="email"></div>
                </div>
                <div>
                    <label for="">Message *</label>
                    <textarea name="" id="" cols="30" rows="5"></textarea>
                </div>
                <div style="display: flex;">
                    <input type="checkbox" name="" id="" style="margin-top:5px;width:30px;">
                    <p>By proceeding, you agree to the
                        <a style="color: #ef8a09;text-decoration:none;">Terms of Use, Privacy Policy</a>
                        and this consent will override any registration by me for DNC / NDNC.
                    </p>
                </div>
                <input type="submit" value="Send Message">
            </form>
        </div>
    </div>
    <?php include "map.php";?>
</body>

</html>
<?php include "footer.php"; ?>