<!DOCTYPE html>
<html lang="en">

<head>
    <title>FastLearnBD - Home</title>
    <meta charset="utf-8">

    <meta name="thumbnail" content="http://fastlearn.bd.education/thumbnail.png">
    <meta property="og:url" content="http://fastlearn.bd.education/index.html"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="Fast Learn BD"/>
    <meta property="og:description" content="An Educational Website"/>
    <meta property="og:image" content="http://fastlearn.bd.education/thumbnail.png"/>

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@sonnet404">
    <meta name="twitter:creator" content="@sonnet404">
    <meta name="twitter:title" content="Fast Learn BD">
    <meta name="twitter:description" content="An Educational Website">
    <meta name="twitter:image" content="http://fastlearn.bd.education/thumbnail.png">


    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto%7CJosefin+Sans:100,300,400,500"
          rel="stylesheet" type="text/css">
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

        #fixp {
            text-align: justify;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" id="headerimg">
                    <img src="img/library.png" alt="Logo" style="width:60px; padding: 2px">
                </a>
                <a class="navbar-brand" href="#" id="header">
                    <b>FastLearnBD</b>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item active">
                        <a class="nav-link" href="#showcase">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="csezone.php">CSE Zone</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--End of Navigation -->

    <section id="showcase">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="showcase-left">
                        <img src="img/reading.png" width="250px" height="250px">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="showcase-right">
                        <h1>Welcome to our site</h1>
                        <p id="fixp" style="font-size: 20px">This is a blog-site and you'll be able to gather knowledge
                            from here. Most importantly it is a technology related blog. Time to time we post on our
                            <a href="blog.php">blog</a>section about various topics. So, if you have 4-5 minutes, you
                            can take a tour to our <a href="blog.php">blog.</a>Well, it may bore you at first but we
                            promise you won't be disappointed.
                        </p>
                    </div>
                    <br>
                    <a class="btn btn-default btn-lg showcase-btn" href="blog.php">Visit our blog</a>
                </div>
            </div>
        </div>
    </section>


    <section id="testimonial">
        <div class="container">
            <p>"A mistake should be your teacher, not your attacker. A mistake is a lesson, not a loss. It is a
                temporary, necessary detour, not a dead end. "</p>
            <p class="customer">- Anonymous</p>
        </div>
    </section>

    <!-- Container -->
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <div class="info-left">
                    <h2>What is Social Engineering?</h2>
                    <br>
                    <p id="fixp">Social engineering is the art of manipulating people so they give up confidential
                        information. The types of information these criminals are seeking can vary, but when
                        individuals are targeted the criminals are usually trying to trick you into giving them
                        your passwords....
                        <a href="blog.php">read more</a>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <br>
                <br>
                <br>
                <br>
                <div class="info-right">
                    <img src="img/home SE.png" class="img-responsive" width="350px" height="350px">
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-18">
                <div class="info-left">
                    <h2>Bitcoin</h2>
                    <br>
                    <p id="fixp">বিটকয়েন হচ্ছে সারা বিশ্বব্যাপী একটি সার্বজনীন cryptocurrency এবং মজার বিষয় হচ্ছে এটি এক
                        প্রকারের ভার্চুয়াল কয়েন । সাধারণত বিটকয়েনের লেনদেন সরাসরি হয়ে থাকে । এতে কোনো মধ্যবর্তী ব্যক্তি বা
                        প্রতিষ্ঠানের প্রয়োজন পরে না । আর এই...
                        <a href="blog.php">read more</a>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <br>
                <br>
                <br>
                <br>
                <div class="info-right">
                    <img src="img/bitcoinhome.png" class="img-responsive" width="150px" height="150px">
                </div>
            </div>
        </div>
    </div>

    <section id="testimonial">
        <div class="container">
            <p>"Success is not final, failure is not fatal: it is the courage to continue that counts."</p>
            <p class="customer">- Winston Churchill</p>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-18">
                <div class="info-left">
                    <h3>PDF</h3>
                    <p id="fixp">পোর্টেবল ডকুমেন্ট ফরম্যাট (PDF) একটি ফাইল ফরম্যাট যা স্বাধীনভাবে অ্যাপ্লিকেশন সফ্টওয়্যার,
                        হার্ডওয়্যার ও অপারেটিং সিস্টেম এর ডকুমেন্ট উপস্থাপন করতে ব্যবহৃত হয় । প্রতিটি PDF ফাইল encapsulate করে
                        একটি নির্দিষ্ট......
                        <a href="blog.php">read more</a>
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-18">
                <div class="info-right">
                    <img src="img/pdfhome.png" class="img-responsive">
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-left">
                    <h3>IP</h3>
                    <p id="fixp">Internet Protocol-এর সংক্ষিপ্ত রূপ IP. IPv4 system অনুযায়ী প্রতিটি IP address-কে প্রকাশের
                        জন্য মোট 4টি অক্টেট (8 bit-এর বাইনারি) সংখ্যা প্রয়োজন । কাজেই সম্পূর্ণ address প্রকাশের জন্য 32টি bit
                        প্রয়োজন । প্রতিটি অক্টেট ডট (.) দ্বারা পৃথক করা ......
                        <a href="blog.php">read more</a>
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div>
                    <div class="info-right">
                        <img src="img/iphome.png" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Container -->

    <div class="container">
        <div class="col-md-12 col-xs-12">
            <p style="font-style: italic">Go directly to our
                <a href="blog.php">blog</a>
            </p>
        </div>
    </div>

    <!-- Start of Footer -->
    <footer class="container-fluid text-center">
        <div class="row">
            <div class="col-sm- col-md-12 col-xs-18">
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
            <div class="col-lg-12">
                <p>&copy;Ashraf Kabir MMXVIII</p>
                <p>All trademarks and registered trademarks appearing on this site are the property of their respective
                    owners.
                </p>
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