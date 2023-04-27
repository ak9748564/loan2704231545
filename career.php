<?php include "navbar.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500;800&family=Poppins:wght@400;500;600;700&family=Raleway:wght@600;900&display=swap" rel="stylesheet">
    <style>
        #company_profile {
            background: #f8f9fa;
            padding: 40px 0px;
        }

        #company_profile h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 33px;
            line-height: 45px;
            font-weight: 500;
            color: #1f1f1f;
            max-width: 1100px;
            margin: auto;
        }

        #my24loan_service {
            padding: 80px 0px;
        }

        #my24loan_service h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 42px;
            line-height: 42px;
            font-weight: 600;
            color: #1f1f1f;
            text-align: center;
            max-width: 1100px;
            margin: auto;
        }

        #my24loan_service p {
            font-family: 'Poppins', sans-serif;
            font-size: 18px;
            line-height: 30px;
            font-weight: 400;
            color: #3a3a3a;
            text-align: center;
            max-width: 1100px;
            margin: 50px auto;
        }

        #our_membership_cards {
            padding: 70px 0px;
            background: #f7f9fb;
        }

        #our_membership_cards h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 42px;
            line-height: 42px;
            font-weight: 600;
            color: #1f1f1f;
            text-align: center;
            margin-bottom: 50px;
        }

        #our_membership_cards #section1 {
            display: flex;
            max-width: 1100px;
            margin: auto;
        }

        #our_membership_cards #section1 .inner_small_section1 {
            width: 50%;
            padding: 20px;
        }

        #our_membership_cards #section1 .inner_small_section1 div {
            width: 100%;
            background: white;
        }

        #our_membership_cards #section1 .inner_small_section1 h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 18px;
            line-height: 26px;
            font-weight: 600;
            color: #444444;
            text-align: left;
            padding-left: 25px;
            padding-top: 30px;
        }

        #our_membership_cards #section1 .inner_small_section1 a {
            text-decoration: none;
            font-family: 'Poppins', sans-serif;
            font-size: 12px;
            line-height: 28px;
            font-weight: 400;
            color: #444444;
            text-align: left;
        }

        #our_membership_cards #section1 .inner_small_section1 a div {
            margin-top: -30px;
            padding-left: 25px;
            margin-bottom: 20px;
        }
#card_benefits{
    padding: 70px 0px;
}
        #card_benefits h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 42px;
            line-height: 42px;
            font-weight: 600;
            color: #1f1f1f;
            text-align: center;
            max-width: 1100px;
            margin:30px auto;
        }
        #card_benefits p {
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            line-height: 24px;
            font-weight: 400;
            color: #3a3a3a;
            text-align: center;
            max-width: 1100px;
            margin: auto;
        }

        @media(max-width:1200px) {

            #company_profile h1,
            #my24loan_service h1,
            #my24loan_service p,
            #our_membership_cards #section1 ,#card_benefits h1,#card_benefits p{
                max-width: 930px;
            }
        }

        @media(max-width:1000px) {

            #company_profile h1,
            #my24loan_service h1,
            #my24loan_service p,
            #our_membership_cards #section1,#card_benefits h1,#card_benefits p {
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
            #our_membership_cards #section1,#card_benefits h1,#card_benefits p {
                max-width: 500px;
            }

        }

        @media(max-width:575px) {

            #company_profile,
            #my24loan_service,
            #our_membership_cards #section1,#card_benefits h1,#card_benefits p {
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
    <div id="company_profile">
        <h1>Current Openings</h1>
    </div>
    <div id="my24loan_service">
        <p>Currently, there are no openings in the company.</p>
    </div>
    
</body>

</html>
<?php include "footer.php"; ?>