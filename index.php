<?php

$background = "background.jpg";
$logo = "aiesec.png";
$color = "#037ef3";

?>


<?php

$entity = "Other";
if (isset($_GET['entity'])){
    $entity = $_GET['entity'];
}

$base = "https://aiesec.lk/join/";
if ($_SERVER['SERVER_NAME'] == "localhost"){
    $base = "https://localhost/aiesec.lk/join/";
}


?>
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Required meta tags-->
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MFQGDFB');</script>
    <!-- End Google Tag Manager -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Become an AIESEC Member Today!">

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Title Page-->
    <title>Join AIESEC</title>
    <BASE href="<?= $base ?>">
    <link rel="shortcut icon" type="image/png" href="assets/favicon.png"/>
    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <style>

        body{
            background-image:url("assets/<?= $background ?>");
            background-size:auto 120%;
            background-color:white;
            background-repeat: no-repeat;
            background-position: center top;
        }

    </style>
    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MFQGDFB"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="overlay" style="background-color:rgba(255,255,255,0.95); position:fixed; top:0; bottom:0;
width:100%; height:100%; z-index:999; text-align: center; vertical-align: middle; display:none;">
    <div class="center">
        <div class="loadingio-spinner-dual-ring-lwapedn49g" style="width:200px;">
            <div class="ldio-18ldoi6nwr4">
                <div></div><div><div></div></div>
            </div></div>
        <div style="color:<?=$color?>; font-size:20px; font-weight:bold;">Please wait while we process your information.</div>
    </div>
    <style type="text/css">

        .center {
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        @keyframes ldio-18ldoi6nwr4 {
            0% { transform: rotate(0) }
            100% { transform: rotate(360deg) }
        }
        .ldio-18ldoi6nwr4 div { box-sizing: border-box!important }
        .ldio-18ldoi6nwr4 > div {
            position: absolute;
            width: 144px;
            height: 144px;
            top: 28px;
            left: 28px;
            border-radius: 50%;
            border: 16px solid #000;
            border-color: <?=$color?> transparent <?=$color?> transparent;
            animation: ldio-18ldoi6nwr4 1s linear infinite;
        }
        .ldio-18ldoi6nwr4 > div:nth-child(2) { border-color: transparent }
        .ldio-18ldoi6nwr4 > div:nth-child(2) div {
            position: absolute;
            width: 100%;
            height: 100%;
            transform: rotate(45deg);
        }
        .ldio-18ldoi6nwr4 > div:nth-child(2) div:before, .ldio-18ldoi6nwr4 > div:nth-child(2) div:after {
            content: "";
            display: block;
            position: absolute;
            width: 16px;
            height: 16px;
            top: -16px;
            left: 48px;
            background: <?=$color?>;
            border-radius: 50%;
            box-shadow: 0 128px 0 0 <?=$color?>;
        }
        .ldio-18ldoi6nwr4 > div:nth-child(2) div:after {
            left: -16px;
            top: 48px;
            box-shadow: 128px 0 0 0 <?=$color?>;
        }
        .loadingio-spinner-dual-ring-lwapedn49g {
            width: 200px;
            height: 200px;
            display: inline-block;
            overflow: hidden;
            background: none;
        }
        .ldio-18ldoi6nwr4 {
            width: 100%;
            height: 100%;
            position: relative;
            transform: translateZ(0) scale(1);
            backface-visibility: hidden;
            transform-origin: 0 0; /* see note above */
        }
        .ldio-18ldoi6nwr4 div { box-sizing: content-box; }
        /* generated by https://loading.io/ */
    </style>
</div>

<div class="page-wrapper font-poppins" style="padding-top:80px">
    <center><img src="assets/<?= $logo ?>" alt="Smiley face" class="responsive" style="width:300px;"> </center><br><br>
    <div class="wrapper wrapper--w680">
        <div class="card card-4">
            <div class="card-body" style="border-bottom-style: solid; border-color:<?=$color?>; border-width:20px; border-radius:5px; padding-top:40px;">
                <center><h1 class="title"  style="color:<?=$color?>; font-size:30px; font-weight:bold"  >JOIN AIESEC</h1></center>
                <form id='signup_form' enctype="multipart/form-data">

                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">First Name<span class="required_field"> *</span></label>
                                <input class="input--style-4" type="text" name="first_name" required >
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Last Name<span class="required_field"> *</span></label>
                                <input class="input--style-4" type="text" name="last_name" required >
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="input-group">
                            <label class="label">Date of Birth<span class="required_field"> *</span></label>
                            <input class="input--style-4 datepicker" type="date" name="dob" required>
                        </div>
                    </div>


                    <div>
                        <div class="input-group">
                            <label class="label">Email Address<span class="required_field"> *</span></label>
                            <input class="input--style-4" type="email" name="email" required >
                        </div>
                    </div>


                    <div>
                        <div class="input-group">
                            <label class="label">Phone Number<span class="required_field"> *</span></label>
                            <input class="input--style-4" type="tel" placeholder="07xxxxxxxx" name="phone" pattern="[0][0-9]{9}" required>
                        </div>
                    </div>

                    <div class="input-group">
                        <label class="label">University or Institute<span class="required_field"> *</span></label>
                        <div class="rs-select2 js-select-simple select--no-search">
                            <select name="university" required>
                                <option disabled="disabled" selected="selected" value="" hidden>Choose option</option>
                                <option value=7667>University of Colombo</option>
                                <option value=7668>University of Kelaniya</option>
                                <option value=7669>University of Moratuwa</option>
                                <option value=7671>University of Peradeniya</option>
                                <option value=7670>University of Sri Jayewardenepura</option>
                                <option value=7672>University of Ruhuna</option>
                                <option value=7673>Sri Lanka Institute of Information Technology</option>
                                <option value=29287>National School of Business Management</option>
                            </select>
                        <div class="select-dropdown"></div>
                    </div>
                </div>

                    <div class="row row-space">

                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Faculty<span class="required_field"> *</span></label>
                                <input class="input--style-4" name="faculty" required>
                            </div>
                        </div>

                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Batch<span class="required_field"> *</span></label>
                                <input class="input--style-4" name="batch" required>
                            </div>
                        </div>

                    </div>

                    <div>
                        <div class="input-group">
                            <label class="label">Why do you want to join AIESEC?<span class="required_field"> *</span></label>
                            <input class="input--style-4" name="why" required>
                        </div>
                    </div>


                    <div class="input-group">
                        <label class="label">What is the most effective way to contact you?<span class="required_field"> *</span></label>
                        <div class="rs-select2 js-select-simple select--no-search">
                            <select name="preferred_contact" value="" required>
                                <option disabled="disabled" selected="selected" value="" hidden>Choose option</option>
                                <option value="21794">Email</option>
                                <option value="21792">WhatsApp</option>
                            </select>
                            <div class="select-dropdown"></div>
                        </div>
                    </div>

                    <div class="input-group">
                        <label class="label">Which of the following best fits your current employment status?<span class="required_field"> *</span></label>
                        <div class="rs-select2 js-select-simple select--no-search">
                            <select name="employment_status" value="" required>
                                <option disabled="disabled" selected="selected" value="" hidden>Choose option</option>
                                <option value=21790>Unemployed</option>
                                <option value=21789>Employed</option>
                                <option value=21791>Self-Employed</option>
                            </select>
                            <div class="select-dropdown"></div>
                        </div>
                    </div>

                     <div class="input-group">
                        <label class="label">What is your motivation when joining AIESEC?<span class="required_field"> *</span></label>
                        <div class="rs-select2 js-select-simple select--no-search">
                            <select name="motivation" value="" required>
                                <option disabled="disabled" selected="selected" value="" hidden>Choose option</option>
                                <option value=21977>Connect with the impact of AIESEC</option>
                                <option value=21976>Global Networking</option>
                                <option value=21975>Leadership Experience</option>
                                <option value=21974>Personal Development</option>
                            </select>
                            <div class="select-dropdown"></div>
                        </div>
                     </div>

                     <div class="input-group">
                        <label class="label">From where did you hear about AIESEC?<span class="required_field"> *</span></label>
                        <div class="rs-select2 js-select-simple select--no-search">
                            <select name="referral" value="" required>
                                <option disabled="disabled" selected="selected" value="" hidden>Choose option</option>
                                <option value=21799>From a friend</option>
                                <option value=21809>Event</option>
                                <option value=21810>Email</option>
                                <option value=21802>Facebook</option>
                                <option value=21805>Instagram</option>
                                <option value=21806>LinkedIn</option>
                                <option value=21807>Other Social Media</option>
                                <option value=21813>Media (magazine, TV, newspaper or radio)</option>
                                <option value=21809>Uni Session or Presentation</option>
                                <option value=21808>Search Engine</option>
                                <option value=21800>Information Booth on Campus</option>
                                <option value=21814>Other</option>
                            </select>
                            <div class="select-dropdown"></div>
                        </div>
                    </div>

                    <div class="input-group">
                        <div class="row row-space" >
                            <div class="input-group ">
                                <input type="checkbox" name="privacy_agreed" class="checkmark input-icon"  required>
                                <label class="label" style="padding-left: 40px; padding-top: 5px; font-size:14px;">
                                    I have read and agree to AIESEC Sri Lanka's
                                    <a href="https://aiesec.lk/privacy-policy" target="_blank" style="color:<?=$color?>">Privacy Policy</a>
                                    and I may be contacted by AIESEC representatives for further processing.</label>
                            </div>
                        </div>
                    </div>

                    <div class="g-recaptcha" data-sitekey="6LfddL4UAAAAAH5VDHI75ZzDmn3M6hIAiVyOf7gz"></div>
                    <div class="p-t-15">
                        <button class="btn btn--radius-2 btn--gt" style="background: <?=$color?>; margin-top:20px" name="submit" type="submit">
                            SEND APPLICATION
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br><br><br><br>

</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<!-- Jquery JS-->
<script src="vendor/jquery/jquery.min.js"></script>
<!-- Vendor JS-->
<script src="vendor/select2/select2.min.js"></script>

<!-- Main JS-->
<script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

<script>

    $(function () {
        $('form').on('submit', function (e) {

            let success = false;

            $("#overlay").fadeIn(300);

            console.log(grecaptcha.getResponse());

            e.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                url: 'signup.php',
                type: 'POST',
                data: formData,
                success: function (data) {

                    $("#overlay").fadeOut(300);
                    let response = {};
                    try {
                        response = JSON.parse(data)
                    } catch (e) {
                        Swal.fire({
                            title: "Error",
                            text: "Oops! An error occurred. Pleas try again later.",
                            type: "error",
                            confirmButtonText: "OK"
                        });
                        grecaptcha.reset();
                        return;
                    }

                    if (response.hasOwnProperty('errors')) {
                        Swal.fire({
                            title: "An error occurred.",
                            text:  response.errors[0].message,
                            type: "error",
                            confirmButtonText: "OK"
                        });
                        grecaptcha.reset();
                        return;
                    } if (response.hasOwnProperty('data')) {
                        Swal.fire({
                            title: "Success!",
                            text: "Someone from our team will be in touch with you shortly.",
                            type: "success",
                            confirmButtonText: "OK"
                        }).then((result) => {
                            window.location.href = "https://aiesec.lk/";
                        })
                        return;
                    } else {
                        Swal.fire({
                            title: "Error",
                            text: data,
                            type: "error",
                            confirmButtonText: "OK"
                        });
                        grecaptcha.reset();
                    }
                },
                error: function(xhr, textStatus, errorThrown){
                    $("#overlay").fadeOut(300);

                    Swal.fire({
                        title: "Error",
                        text: "Oops! An error occurred: " + errorThrown.toString(),
                        type: "error",
                        confirmButtonText: "OK"
                    });
                    grecaptcha.reset();
                },
                cache: false,
                contentType: false,
                processData: false
            });

        });

    });


</script>


</html>
<!-- end document-->

