<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500;800&family=Poppins:wght@400;500;600;700&family=Raleway:wght@600;900&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />  -->

    <style>
        #our_customers_testimonials{
            background: #f7f9fb;
        }

        .owl-dots {
            text-align: center;
            margin-top: 20px;
        }

        .owl-dot {
            height: 15px;
            width: 15px;
            border-radius: 50%;
            cursor: pointer;
            outline: none;
            margin: 0 5px;
            border: 2px solid #fff !important;
            transition: all 0.3s ease;
        }

        .owl-dot:hover,
        .owl-dot:active {
            background-color: #fff !important;
        }

        .owl-prev,
        .owl-next {
            position: absolute;
            top: 40%;
            transform: translate(-50%, -50%);
        }

        .owl-prev {
            left: 25px;
        }

        .owl-next {
            right: 10px;
        }

        .fa-chevron-left,
        .fa-chevron-right {
            font-size: 30px;
            color: #fff;
            transition: all 0.2s;
        }

        .fa-chevron-left:hover,
        .fa-chevron-right:hover {
            color: #777;
        }

        #our_customers_testimonials .wrapper {
            max-width: 1500px;
            margin: auto;
            padding: 0px 25px;
        }

        .wrapper .carousel2 {
            position: relative;
            max-width: 1500px;
            margin: auto;
            /* padding: 0 50px; */
        }

        /* .carousel1 .card {
            width: 250px;
            height: 150px;
            border-radius: 5px;
            z-index: -1;
        } */

        #our_customers_testimonials {
            padding-top: 70px;
            padding-bottom: 100px;
        }

        #our_customers_testimonials h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 42px;
            line-height: 42px;
            font-weight: 600;
            color: #1f1f1f;
            text-align: center;
        }

        .wrapper .owl-carousel video {
            width: 100%;
        }
    </style>
</head>

<body>
    <div id="our_customers_testimonials">
        <h1 style="font-family: 'Poppins',sans-serif;font-size:42px;line-height:42px;color:#1f1f1f;font-weight:600;">Our Customers Testimonials</h1>
        <div class="wrapper" style="margin-top: 80px;">
            <div class="carousel2 owl-carousel">
                <div><video src="videos/jay_modi.mp4" controls poster="images/posters/jay_modi.png">
                        <div>Customer:<p>Jay Modi</p>
                        </div>
                </div>
                <div><video src="videos/mehul_patel.mp4" controls poster="images/posters/mehul_patel.png">
                        <div>Customer:<p>Mehul Patel</p>
                        </div>
                </div>
                <div><video src="videos/harilal_makawana.mp4" controls poster="images/posters/harilal_makawana.png">
                        <div>Customer:<p>Harilal Makawana</p>
                        </div>
                </div>
                <div><video src="videos/manoj_singh.mp4" controls poster="images/posters/manoj_singh.png">
                        <div>Customer:<p>Manoj Singh</p>
                        </div>
                </div>
                <div><video src="videos/rasik_parmar.mp4" controls poster="images/posters/rasik_parmar.png">
                        <div>Customer:<p>Rasik Parmar</p>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(".carousel2").owlCarousel({
            loop: true,
            margin: 15,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            nav: true,
            navText: ["<i class='fa-solid fa-chevron-left'></i>", "<i class='fa-solid fa-chevron-right'></i>"],
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                1100: {
                    items: 3,
                },
                1500: {
                    items: 4,
                }
                // 1500: {
                //     items: 5,
                // }

            }
        })
    </script>
</body>

</html>