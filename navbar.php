<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500;800&family=Poppins:wght@400;500&family=Raleway:wght@600;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>My24Loan</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        nav #section1 {
            height: 40px;
            line-height: 40px;
            max-width: 1110px;
            margin: auto;
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid #eeeeee;
            padding: 0;
        }

        nav #section1.none {
            display: none;
        }

        nav #section1.block {
            display: flex;
        }

        nav #section1 #inner_section1 {
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            line-height: 40px;
            font-weight: 400;
            color: #484848;
        }

        nav #section1 #inner_section2 pre {
            font-family: 'Poppins', sans-serif;
            font-size: 12px;
            line-height: 40px;
            font-weight: 500;
            color: #484848;
            padding-right: 30px;
        }

        nav #secion2,
        nav #menu {
            width: 100%;
            background: white;
        }

        nav #section2>div {
            height: 80px;
            line-height: 80px;
            max-width: 1110px;
            margin: auto;
            display: flex;
            justify-content: space-between;
        }

        nav #section2.sticky {
            width: 100%;
            background: white;
            position: fixed;
            top: 0px;
            box-shadow: 0 12px 6px rgb(0 0 0 / 6%);
            z-index: 2;
        }

        nav #section2 div img {
            margin: 26px 0px;
            width: 250px;
            height: 28px;
        }

        nav #section2 div ul {
            display: flex;
            justify-content: space-between;
        }

        nav #section2 div ul li,
        nav #menu ul li {
            list-style: none;
            padding: 0px 18px;
        }

        nav #section2 div ul li a,
        nav #menu ul li a {
            text-decoration: none;
            font-family: 'Poppins', sans-serif;
            font-size: 12px;
            font-weight: 500;
            color: #090600;
        }

        nav #section2 div ul li a:hover,
        nav #menu ul li a:hover {
            color: #fd7e14;
            transition: 0.3s;
        }


        nav #section2 div ul #cl {
            background: black;
            padding: 10px 12px;
            color: white;
            letter-spacing: 0.6px;
        }

        nav #section2 div ul #cl:hover {
            background: #484848;
            transition: 0.3s;
        }


        nav #section2 div #menu_icon {
            display: none;
        }

        #sub_menu {
            width: 100%;
            height: 200px;
            position: absolute;
            top: 155px;
            background: #eeeeee;
        }

        @media(max-width:1200px) {
            nav #section1 {
                max-width: 930px;
                margin: auto;
            }

            nav #section2 div {
                max-width: 930px;
                margin: auto;
            }
        }

        @media(max-width:1000px) {
            nav #section2 div #menu_icon {
                display: block;
            }

            nav #section1 {
                display: none;
            }

            nav #section2 div {
                max-width: 650px;
            }

            nav #menu ul {
                max-width: 685px;
                margin: auto;
            }

            nav #section2 div ul {
                display: none;
            }
        }

        @media(max-width:770px) {
            
            nav #section2 div {
                max-width: 490px;
            }

            nav #menu ul {
                padding:0px 25px;
                max-width: 530px;
                margin: auto;
            }
        }

        @media(max-width:575px) {
            nav #section2 div {
                max-width: 575px;
                padding: 0px 20px;
            }

            nav #menu ul {
                max-width: 570px;
                margin: auto;
            }
        }
    </style>
</head>

<body>
    <nav>
        <div id="section1">
            <div id="inner_section1">
                India's Most Trustable Loan Provider Company
            </div>
            <div id="inner_section2">
                <pre>Phone: +91-73594-68774    Email: info@my24loan.in</pre>
            </div>
        </div>

        <div id="section2">
            <div>
                <img src="images/logo.png" alt="LOGO-My24Loan">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="company.php">COMPANY</a></li>
                    <li style="width: 147px;" class="li"><a href="#">OUR PRODUCTS</a>
                        <ul style="padding:10px;background:white;display:none;width: 250px;border-radius: 2px;box-shadow:1px 1px 50px #eeeeee;position:relative;top:-20px;left:-20px;z-index:2;" class="ul">
                            <li style="line-height:40px;"><a href="prime_membership_card.php" style="display:flex;align-items:center;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-heading" viewBox="0 0 16 16" style="margin-right: 10px;">
                                        <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                        <path d="M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1z" />
                                    </svg>
                                    <p style="margin-bottom: 0;">Prime Membership Card</p>
                                </a></li>
                            <li style="line-height:40px;"><a href="elite_membership_card.php" style="display:flex;align-items:center;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-heading" viewBox="0 0 16 16" style="margin-right: 10px;">
                                        <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                        <path d="M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1z" />
                                    </svg>
                                    <p style="margin-bottom: 0;">Elite Membership Card</p>
                                </a></li>
                        </ul>
                    </li>

                    <li style="width: 131px;" class="li"><a href="">DIGITAL LOAN</a>
                        <ul style="padding:10px;background:white;width: 250px;border-radius: 2px;box-shadow:1px 1px 50px #eeeeee;position:relative;top:-20px;left:-20px;display:none;z-index:2;" class="ul">
                            <li style="line-height:40px;"><a href="digital_personal_loan.php" style="display:flex;align-items:center;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16" style="margin-right: 10px;">
                                        <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                                    </svg>
                                    <p style="margin-bottom: 0;">Digital Personal Loan</p>
                                </a></li>
                            <li style="line-height:40px;"><a href="digital_business_loan.php" style="display:flex;align-items:center;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone-fill" viewBox="0 0 16 16" style="margin-right: 10px;">
                                        <path d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z" />
                                    </svg>
                                    <p style="margin-bottom: 0;">Digital Business Loan</p>
                                </a></li>
                        </ul>
                    </li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li style="width:173px;"><a href="login.php" id="cl">CUSTOMER LOGIN</a></li>
                </ul>
                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16" style="color:#090600;margin-top :25px;" id="menu_icon">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16" style="color:#090600;display:none;margin-top:25px;" id="cross_icon">
                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                </svg>
            </div>
        </div>
        <div id="menu" style="background:none;position: fixed;top:-100vh;z-index:2;height:100vh;">
            <ul style="padding-bottom: 50px;">

                <li><a href="index.php" style="font-size:14px;line-height:50px;">HOME</a></li>
                <li><a href="company.php" style="font-size:14px;line-height:50px;">COMPANY</a></li>



                <div class="accordion"  style="display:none;border:0px solid white;">
                    <div class="accordion-item" style="border:0px solid white;">
                        <h2 class="accordion-header" id="headingOne" style="border:0px solid white;">
                            <button class="accordion-button shadow-none" type="" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="border:none;background:white;color:#090600;font-size:14px;line-height:16px;font-family: 'Poppins', sans-serif;font-weight:500;">
                                OUR PRODUCTS
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul>
                                    <li style="line-height:40px;"><a href="prime_membership_card.php" style="display:flex;align-items:center;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-heading" viewBox="0 0 16 16" style="margin-right: 10px;">
                                                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                                <path d="M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1z" />
                                            </svg>
                                            <p style="margin-bottom: 0;">Prime Membership Card</p>
                                        </a></li>
                                    <li style="line-height:40px;"><a href="elite_membership_card.php" style="display:flex;align-items:center;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-heading" viewBox="0 0 16 16" style="margin-right: 10px;">
                                                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                                <path d="M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1z" />
                                            </svg>
                                            <p style="margin-bottom: 0;">Elite Membership Card</p>
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item" style="border:0px solid white;">
                        <h2 class="accordion-header" id="headingTwo" style="border:0px solid white;">
                            <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="border:0px solid white;background:white;color:#090600;font-size:14px;line-height:16px;font-family: 'Poppins', sans-serif;font-weight:500;">
                                DIGITAL LOAN
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <ul>
                            <li style="line-height:40px;"><a href="digital_personal_loan.php" style="display:flex;align-items:center;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16" style="margin-right: 10px;">
                                        <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                                    </svg>
                                    <p style="margin-bottom: 0;">Digital Personal Loan</p>
                                </a></li>
                            <li style="line-height:40px;"><a href="digital_business_loan.php" style="display:flex;align-items:center;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone-fill" viewBox="0 0 16 16" style="margin-right: 10px;">
                                        <path d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z" />
                                    </svg>
                                    <p style="margin-bottom: 0;">Digital Business Loan</p>
                                </a></li>
                        </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <li><a href="contact.php" style="font-size:14px;line-height:50px;">CONTACT</a></li>
                <a href="login.php" id="cl" style="font-size:14px;text-decoration:none;font-family: 'Poppins', sans-serif;font-weight: 500;">
                    <div style="background:black;color: white;text-align:center;padding:15px;border-radius:2px;">CUSTOMER LOGIN</div>
                </a>

            </ul>
        </div>

    </nav>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
        window.addEventListener("scroll", function() {
            var section2 = document.querySelector("#section2");
            section2.classList.toggle("sticky", window.scrollY > 50)
        });
        document.getElementById("menu_icon").onclick = function() {
            document.getElementById("menu").style.top = "80px";
            document.getElementById("menu").style.transition = "0.5s";
            document.getElementsByClassName("accordion")[0].style.display = "block";
            document.getElementById("menu_icon").style.display = "none";
            document.getElementById("cross_icon").style.display = "block";
            document.getElementById("menu").style.background = "white";
        }
        document.getElementById("cross_icon").onclick = function() {
            document.getElementById("menu").style.top = "-100vh";
            // document.getElementById("menu").style.display = "";
            document.getElementById("menu_icon").style.display = "block";
            document.getElementById("cross_icon").style.display = "none";
            document.getElementById("menu").style.background = "none";
        }
        window.onresize = function() {
            if (window.innerWidth > 1000) {
                document.getElementById("menu").style.top = "-100vh";
                document.getElementById("cross_icon").style.display = "none";
                document.getElementById("menu_icon").style.display = "none";
                document.getElementsByClassName("accordion")[0].style.display = "none";
            }
            if (window.innerWidth < 1000) {
                document.getElementById("menu_icon").style.display = "block";
            }
        };


        var li = document.getElementsByClassName("li");
        var ul = document.getElementsByClassName("ul");
        li[0].addEventListener("mouseover", function() {
            document.getElementsByClassName("ul")[0].style.display = "block";
        });
        li[0].addEventListener("mouseout", function() {
            document.getElementsByClassName("ul")[0].style.display = "none";
        });
        ul[0].addEventListener("mouseout", function() {
            document.getElementsByClassName("ul")[0].style.display = "none";
        });

        li[1].addEventListener("mouseover", function() {
            document.getElementsByClassName("ul")[1].style.display = "block";
        });
        li[1].addEventListener("mouseout", function() {
            document.getElementsByClassName("ul")[1].style.display = "none";
        });
        ul[1].addEventListener("mouseout", function() {
            document.getElementsByClassName("ul")[1].style.display = "none";
        });
    </script>
</body>

</html>