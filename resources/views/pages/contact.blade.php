<!DOCTYPE html>
<html lang="en-US" data-wf-page="6540a5ab7885f7652b857751" data-wf-site="652662f50f291866a5a9b8c6">

<!-- Mirrored from www.NayaPay.com/contact by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Jul 2024 06:58:52 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simba Money | Home</title>
    <link href="images/favicon.svg" rel="apple-touch-icon" sizes="180x180" type="image/png">
    <link href="images/favicon.svg" rel="icon" sizes="32x32" type="image/png">
    <link href="images/favicon.svg" rel="icon" sizes="16x16" type="image/png">

    <!-- Open Graph Meta Tags -->
    <meta property="og:image" content="images/contact-us-kv.png">
    <meta property="og:title" content="Contact Simba Money">
    <meta property="og:description" content="Get in touch with Simba Money's customer support team for assistance with your financial needs. We're here to help you manage your money, pay bills, send remittances, and shop globally.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.simbamoney.com/contact-us">

    <!-- Twitter Card Meta Tags -->
    <meta property="twitter:image" content="images/contact-us-kv.png">
    <meta property="twitter:title" content="Contact Simba Money">
    <meta property="twitter:description" content="Get in touch with Simba Money's customer support team for assistance with your financial needs. We're here to help you manage your money, pay bills, send remittances, and shop globally.">
    <meta property="twitter:card" content="summary_large_image">

    <!-- General Meta Tags -->
    <meta name="description" content="Get in touch with Simba Money's customer support team for assistance with your financial needs. We're here to help you manage your money, pay bills, send remittances, and shop globally.">
    <meta name="csrf-param" content="_csrf">
    <meta name="keywords" content="Simba Money, Contact Us, Customer Support, Financial Services, Remittances, Bill Payments, Global Shopping, Customer Service">


    <link href="css/contactus.css" rel="stylesheet">
    <link href="assets/d959465f/css/bootstrap.css" rel="stylesheet">
    <link href="css/siteee08.css?change=v1" rel="stylesheet">
    <link href="css/mainpagesee08.css?change=v1" rel="stylesheet">
    <link href="css/aos.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">

</head>


<style>
    .clear{
        font-size: 14px !important;
        border-color: #ffc125;
        background-color: transparent;
        color: #ffc125;
        padding: 6px;
        border-radius: 10px;
        transition: all 0.3s ease-out;
        width: 100px;
        font-family: "LatoBold";
    }
    .solid{
        font-size: 14px !important;
        background: #ffc125;
        color: #fff;
        padding: 6px;
        border-radius: 10px;
        transition: all 0.3s ease-out;
        text-decoration: none;
        width: 100px;
        font-family: "LatoBold";
    }
    .clear:hover, .clear:focus, .clear:active:focus,
    .clear:hover, .clear:focus, .clear:active:focus{
        border-color: rgb(239, 140, 48);
        background: #ffc125;
        color: #fff;
        outline: none;
    }
    .solid:hover, .solid:focus, .solid:active:focus,
    .solid:hover, .solid:focus, .solid:active:focus{
        border-color: #ffc125;
        background: transparent;
        color: #ffc125;
        outline: none;
    }
</style>


<body>
<div id="webpage" class="page-wrapper main-body">
    @include('pages.inc.nav')
    <div class="site-contact">

        <div class="jumbotron">
        </div>
        <br>
        <br>
        <br>

        <div class="body-content">

            <div class="container">

                <div class="row">

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6 offset-md-3">
                                <h2>Contact Us</h2>
                                @if(session('message'))
                                    <div class="alert alert-success">
                                        {{ session('message') }}
                                    </div>
                                @endif

                                <form  id="contactForm" action="{{ route('contact.submit') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required>
                                        @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required>
                                        @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="organization">Organization</label>
                                        <input type="text" class="form-control @error('organization') is-invalid @enderror" id="organization" name="organization">
                                        @error('organization')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="body">Message</label>
                                        <textarea class="form-control @error('body') is-invalid @enderror" id="body" name="body" rows="4" required></textarea>
                                        @error('body')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn solid" name="contact-button"
                                                style="width:100%">SEND</button>
                                    </div>
                                </form>
                            </div>

                            <div class="col-md-6 col-lg-6">
                                <div class="contactdiv">
                                    <h3>Contact Us</h3>
                                    <p class="msg"><img class="contactIcon" src="images/phone_call_in.svg" alt="Phone Icon">
                                        &nbsp;&nbsp;&nbsp;<a class="no-hyperlinked">+(255)&nbsp;677-122-244</a></p>
                                    <p class="msg"><img class="contactIcon" src="images/mail.png" alt="Mail Icon">
                                        &nbsp;&nbsp;&nbsp; <a class="no-hyperlinked">info@simbamoney.co.tz</a></p>
                                    <p class="msg"><img class="contactIcon" src="images/mail.png" alt="Mail Icon">
                                        &nbsp;&nbsp;&nbsp; <a class="no-hyperlinked">support@simbamoney.co.tz</a></p>
                                    <p class="msg"><img class="contactIcon" src="images/whatsapp-svgrepo-com (1).svg""
                                        alt="Phone Icon"> &nbsp;&nbsp;&nbsp;
                                        <a href="https://wa.me/255677122244" target="_blank" class="no-hyperlinked">+(255)&nbsp;677-122-244</a></p>

                                    <img src="images/simbaQr.svg" height="200px" width="200px">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <footer class="footer">
        <div class="container-fluid">
            <div class="row footer-table">
                <div class="col-md-12"><br><br><br></div>
                <div class="clearfix"></div>
                <div class="col-md-2 text-left">
                    <div class="content impressum">
                        <div class="logo"><img alt="Simba Money Logo" src="images/smoney-logo-svg.svg" width="90%">
                        </div>
                        <div class="socials text-center">
                            <a href="http://www.facebook.com/SimbaMoneyPK" target="_blank">
                                <img src="images/social-facebook.png" alt="Simba Money Facebook Page">
                            </a>
                            <a href="https://www.linkedin.com/company/SimbaMoney" target="_blank">
                                <img src="images/social-linkedin.png" alt="Simba Money LinkedIn">
                            </a>
                            <a href="https://twitter.com/SimbaMoneyPK" target="_blank">
                                <img src="images/social-twitter.png" alt="Simba Money Twitter">
                            </a>
                            <a href="https://instagram.com/SimbaMoney?igshid=ye7v3naxwqnp" target="_blank">
                                <img src="images/social-instagram.png" alt="Simba Money Instagram">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-7 columnbox">
                    <div class="column1">
                        <div class="footerNav">
                            <ul style="text-decoration: none;padding: 0;">
                                <li class="footerNavTitle"><strong>General</strong></li>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="https://help.SimbaMoney.com/">Help
                                        Center</a></li>
{{--                                <li><a href="soc.html">Schedule of--}}
{{--                                        Charges</a></li>--}}
                                <li><a href="/contact">Help</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="column2">
                        <div class="footerNav">
                            <ul style="text-decoration: none;padding: 0;">
                                <li class="footerNavTitle"><strong>Connect</strong></li>
                                <li><a href="contact.html">Contact
                                        Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="column3">
                        <div class="footerNav">
                            <ul style="text-decoration: none;padding: 0;">
                                <li class="footerNavTitle"><strong>Legal</strong></li>
                                <li><a href="legal-info.html">Terms and
                                        Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="column4">
                        <div class="footerNav">
{{--                            <ul style="text-decoration: none;padding: 0;">--}}
{{--                                <li class="footerNavTitle"><strong>Partners</strong></li>--}}
{{--                                <li class="bigscreen">Tembo Pay</li>--}}
{{--                                <li class="bigscreen">Tigo Tanzania</li>--}}
{{--                                <li class="bigscreen">AirTel</li>--}}
{{--                            </ul>--}}
                        </div>
                    </div>
                </div>

                <div class="col-md-3 footer-text">
                    <p style="padding-top: 5px;">Simba Money (Private)
                        Limited is authorised and regulated by the Bank
                        of Tanzania as an Electronic Money
                        Institution.</p>
                    <p>Simba Money &copy; 2024. All rights reserved.</p>
                    <br>
                    <p style="color:#ffc125;">Download the app now!</p>
                    <p>
                        <a
                            href="https://play.google.com/store/apps/details?id=com.simbamoney.simba_money.simba_money&pcampaignid=web_share">
                            <img class src="images/googlestore.svg" alt="Available on Google Play Store"
                                 width="40%" />
                        </a>
                        <a href="https://www.apple.com/app-store/">
                            <img class src="images/applestore.svg" alt="Available on Apple App Store" width="40%" />
                        </a>
                    </p>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12"><br><br><br></div>
            </div>
        </div>
    </footer>
    <script src="assets/1b3c976b/jquery.js"></script>
    <script src="assets/3703783e/yii.js"></script>
    <script src="assets/3703783e/yii.validation.js"></script>
    <script src="assets/3703783e/yii.captcha.js"></script>
    <script src="assets/3703783e/yii.activeForm.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/sharer.js"></script>
    <script src="js/webflow.js"></script>
    <script src="assets/d959465f/js/bootstrap.js"></script>


    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    <div class="elfsight-app-9e7098a6-20a9-4035-a406-981594779cb7" data-elfsight-app-lazy></div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Show loading indicator
            Swal.fire({
                title: 'Sending...',
                text: 'Please wait while we send your message.',
                icon: 'info',
                allowOutsideClick: false,
                showConfirmButton: false,
                willOpen: () => {
                    Swal.showLoading();
                }
            });

            fetch('{{ route('contact.submit') }}', {
                method: 'POST',
                body: new FormData(this),
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
                .then(response => response.json())
                .then(data => {
                    Swal.close(); // Close the loading indicator

                    if (data.message) {
                        Swal.fire({
                            title: 'Success!',
                            text: data.message,
                            icon: 'success',
                            confirmButtonText: 'OK'
                        });
                        this.reset(); // Reset form fields
                    }
                })
                .catch(error => {
                    Swal.close(); // Close the loading indicator

                    Swal.fire({
                        title: 'Error!',
                        text: 'An error occurred. Please try again later.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                });
        });
    </script>
    <script>jQuery(function ($) {
            jQuery('#contactform-verifycode-image').yiiCaptcha({ "refreshUrl": "\/site\/captcha?refresh=1", "hashKey": "yiiCaptcha\/site\/captcha" });
            jQuery('#contact-form').yiiActiveForm([{ "id": "contactform-name", "name": "name", "container": ".field-contactform-name", "input": "#contactform-name", "error": ".help-block.help-block-error", "validate": function (attribute, value, messages, deferred, $form) { yii.validation.required(value, messages, { "message": "Name is required." }); yii.validation.regularExpression(value, messages, { "pattern": /^[a-zA-Z ]*$/, "not": false, "message": "Please use alphabets and spaces only", "skipOnEmpty": 1 }); } }, { "id": "contactform-organization", "name": "organization", "container": ".field-contactform-organization", "input": "#contactform-organization", "error": ".help-block.help-block-error", "validate": function (attribute, value, messages, deferred, $form) { yii.validation.regularExpression(value, messages, { "pattern": /^[a-zA-Z0-9 \.\-\,\(\)\_]*$/, "not": false, "message": "Please use alphabets, digits and spaces only", "skipOnEmpty": 1 }); } }, { "id": "contactform-email", "name": "email", "container": ".field-contactform-email", "input": "#contactform-email", "error": ".help-block.help-block-error", "validate": function (attribute, value, messages, deferred, $form) { yii.validation.email(value, messages, { "pattern": /^[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$/, "fullPattern": /^[^@]*<[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?>$/, "allowName": false, "message": "Email is not a valid email address.", "enableIDN": false, "skipOnEmpty": 1 }); yii.validation.required(value, messages, { "message": "Email address is required." }); } }, { "id": "contactform-body", "name": "body", "container": ".field-contactform-body", "input": "#contactform-body", "error": ".help-block.help-block-error", "validate": function (attribute, value, messages, deferred, $form) { yii.validation.required(value, messages, { "message": "Message text is required." }); } }, { "id": "contactform-verifycode", "name": "verifyCode", "container": ".field-contactform-verifycode", "input": "#contactform-verifycode", "error": ".help-block.help-block-error", "validate": function (attribute, value, messages, deferred, $form) { yii.validation.captcha(value, messages, { "hash": 6516, "hashKey": "yiiCaptcha\/site\/captcha", "caseSensitive": false, "message": "The verification code is incorrect." }); } }], []);
            jQuery('#downloadModal').modal({ "show": false });
            $(".navbar-toggle").click(function () {
                $(this).toggleClass("is-active");
            });
            $('.navbar-nav li').on('click', function () {
                $(this).find('a')[0].click();
            });
            $('.get-NayaPay-modal').on('click', function (e) {
                e.preventDefault();
                $('#downloadModal').modal('show');
            })



        });</script>
    <div id="downloadModal" class="fade modal" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <img src="images/smoney-logo-svg.svg" alt="Simba Money Logo" width="40%" />
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p style="color:#ffc125; font-size:1.2em; margin-bottom:0px">Download the app now!</p>
                        </div>
                        <div class="col-md-12 text-center" style="margin-top:10px">
                            <a href="https://play.google.com/store/apps/details?id=com.simbamoney.simba_money.simba_money&pcampaignid=web_share">
                                <img class="" src="images/googlestore.svg" alt="Available on Google Store"
                                     width="40%" />
                            </a>
                        </div>
                        <div class="col-md-12 text-center" style="margin-top:10px">
                            <a href="https://apps.apple.com/tz/app/simba-money/id6493219041">
                                <img class="" src="images/applestore.svg" alt="Available on Apple Store" width="40%" />
                            </a>
                            <br />
                            <br />
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

</div>


<script type="module">
    // Import the functions you need from the SDKs you need
    import { initializeApp } from "https://www.gstatic.com/firebasejs/10.12.5/firebase-app.js";
    import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.12.5/firebase-analytics.js";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries

    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    const firebaseConfig = {
        apiKey: "AIzaSyAgkPq5pWlhDYQJ-3rm9n77RohGDOt-Ks4",
        authDomain: "simba-money-9cc01.firebaseapp.com",
        projectId: "simba-money-9cc01",
        storageBucket: "simba-money-9cc01.appspot.com",
        messagingSenderId: "954632493576",
        appId: "1:954632493576:web:18d7dc10f41e1c46928fbd",
        measurementId: "G-4F6XGMN3HT"
    };

    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const analytics = getAnalytics(app);
</script>
</body>

<!-- Mirrored from www.NayaPay.com/contact by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Jul 2024 06:59:02 GMT -->

</html>
