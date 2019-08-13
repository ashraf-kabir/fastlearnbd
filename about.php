<!DOCTYPE html>
<html lang="en">

<head>
    <title>About Us</title>
    <meta charset="utf-8">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto%7CJosefin+Sans:100,300,400,500"
          rel="stylesheet" type="text/css">
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        .navbar {
            font-family: Arial, Helvetica, sans-serif;
            border: 0;
            background-color: #445E93;
            max-height: 60px;
            font-size: 1.3em;
        }

        .navbar-brand {
            font-family: cambria, sans-serif;
            font-size: 1.4em;
            font-weight: bold;
            padding: 0 15px;
            padding-left: 2px;
            height: 60px;
            color: #fff !important;
            line-height: 60px;
        }

        .navbar-toggle {
            /* (80px - button height 34px) / 2 = 23px */
            margin-top: 12px;
            padding: 9px 10px !important;
            background-color: #445E93;
        }

        .navbar-inverse .navbar-nav .active a,
        .navbar-inverse .navbar-nav .active a:focus,
        .navbar-inverse .navbar-nav .active a:hover {
            color: #fff;
            background-color: #667BA6;
        }

        .navbar-collapse {
            background-color: #445E93;
        }

        .container {
            margin: 3% auto;
        }

        .btn {
            font-size: 18px;
            color: #fff;
            padding: 12px 22px;
            background: #445E93;
            border: 2px solid #fff;
        }

        .container {
            margin: 4% auto;
        }

        @media (min-width: 768px) {
            .navbar-nav > li > a {
                /* (80px - line-height of 27px) / 2 = 26.5px */
                padding-top: 18px;
                padding-bottom: 17px;
                line-height: 25px;
            }
        }

        body {
            position: relative;
            padding-top: 50px;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        #fheader {
            font-family: cambria, sans-serif;
        }

        p {
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        #icon {
            max-width: 200px;
            margin: 1% auto;
        }

        footer {
            width: 100%;
            font-family: Courier New, Courier, monospace;
            background-color: #445E93;
            padding: 2%;
            color: #fff;
        }

        .fa {
            padding: 15px;
            font-size: 25px;
            color: #fff;
        }

        .fa:hover {
            color: #D5D5D5;
            text-decoration: none;
        }

        @media (max-width: 600px) {
            .fa {
                font-size: 20px;
                padding: 10px;
            }
        }

        @media (max-width: 600px) {
            #icon {
                max-width: 150px;
            }

            h2 {
                font-size: 1.7em;
            }

            .navbar-brand {
                font-size: 1.2em;
                padding-left: 1px;
            }
        }

        #wel {
            margin-top: 50px;
            padding-top: 30px;
            text-align: center;
            text-decoration-style: solid;
            font-style: bold;
        }

        #showcase {
            margin-top: 100px;
        }

        #testimonial {
            background: #f1f1f1;
            padding: 25px 0 25px 0;
            text-align: center;
            margin-top: 40px;
        }

        #testimonial p {
            font-size: 32px;
            font-family: 'Josefin Sans';
            color: #000;
        }

        #testimonial p.customer {
            font-size: 20px;
            color: #666;
        }

        #aboutbody {
            padding-top: 91px;
            padding-bottom: 100px;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img src="img/library.png" alt="Logo" style="width:60px;">
                </a>
                <a class="navbar-brand" href="index.php">
                    <b>FastLearnBD</b>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="csezone.php">CSE Zone</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">About
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--End of Navigation -->

    <div class="container" id="aboutbody">
        <div class="row">
            <div class="col-md-6 col-xs-18">
                <div class="showcase-left">
                    <h1 id="about">About Us:</h1>
                    <h2>Basically we don't know who we are :3</h2>
                    <br>
                    <br>
                    <p>We are still exploring ourselves so that we can enlighten you. When we will finally be able to
                        define us, we will update
                        this section.</p>

                    <p>So, be patience and do come again.</p>
                    <br>
                    <br>
                    <p>Return to
                        <a href="blog.php">BLOG</a>
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-xs-18">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <div class="info-right">
                        <br>
                        <br>
                        <br>
                        <img src="img/about-us.png" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="container-fluid text-center">
        <div class="row">
            <div class="col-sm-18 col-xs-18">
                <h3 id="fheader">Connect</h3>
                <a href="http://www.facebook.com/sonnet404/" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-google"></a>
                <a href="#" class="fa fa-linkedin"></a>
                <a href="#" class="fa fa-youtube"></a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-18">
                <p>&copy;Ashraf Kabir MMXVIII</p>
                <p>All trademarks and registered trademarks appearing on this site are the property of their respective
                    owners.</p>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    <!-- Scroll effect -->
    <script src="https://code.jquery.com/jquery-3.2.1.js"
            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>

    <script>
        window.sr = ScrollReveal();
        sr.reveal('.navbar', {
            duration: 2000,
            origin: 'bottom'
        });
        sr.reveal('.showcase-left', {
            duration: 2000,
            origin: 'top',
            distance: '300px'
        });
        sr.reveal('.showcase-right', {
            duration: 2000,
            origin: 'right',
            distance: '300px'
        });
        sr.reveal('.showcase-btn', {
            duration: 2000,
            delay: 2000,
            origin: 'bottom'
        });
        sr.reveal('#testimonial div', {
            duration: 2000,
            origin: 'bottom'
        });
        sr.reveal('.info-left', {
            duration: 2000,
            origin: 'left',
            distance: '300px',
            viewFactor: 0.2
        });
        sr.reveal('.info-right', {
            duration: 2000,
            origin: 'right',
            distance: '300px',
            viewFactor: 0.2
        });
    </script>

    <script>
        $(function () {
            // Smooth Scrolling
            $('a[href*="#"]:not([href="#"])').click(function () {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });
    </script>

</body>

</html>