<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />  -->

    <style>
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

        .wrapper .carousel1 {
            position: relative;
            max-width: 1000px;
            margin: auto;
            padding: 0 50px;
            z-index: 0;
        }

        .carousel1 .card {
            width: 250px;
            height: 150px;
            border-radius: 5px;
            z-index: -1;
        }

        #our_bank {
            padding-top: 70px;
            padding-bottom: 100px;
        }

        #our_bank h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 42px;
            line-height: 42px;
            font-weight: 600;
            color: #1f1f1f;
            text-align: center;
        }
    </style>
</head>

<body>
    <div id="our_bank">
        <h1>Our Bank & NBFC Partners</h1>
        <div class="wrapper" style="margin-top: 80px;">
            <div class="carousel1 owl-carousel">
                <div style="background: #fafafa;border-radius:15px;padding:25px;border:1px solid #ececec;"><img src="images/016.png" alt=""></div>
                <div style="background: #fafafa;border-radius:15px;padding:25px;border:1px solid #ececec;"><img src="images/019.png" alt=""></div>
                <div style="background: #fafafa;border-radius:15px;padding:25px;border:1px solid #ececec;"><img src="images/022.png" alt=""></div>
                <div style="background: #fafafa;border-radius:15px;padding:25px;border:1px solid #ececec;"> <img src="images/024.png" alt=""></div>
            </div>
        </div>
    </div>
    <script>
        $(".carousel1").owlCarousel({
            loop: true,
            margin: 50,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            nav: true,
            navText: ["<i class='fa-solid fa-chevron-left'></i>", "<i class='fa-solid fa-chevron-right'></i>"],
            responsive: {
                0: {
                    items: 1,
                },
                515: {
                    items: 2,
                },
                675: {
                    items: 3,
                }
                ,
                820: {
                    items: 4,
                }
                // 970: {
                //     items: 6,
                // },

            }
        })
    </script>
</body>

</html>