<!DOCTYPE html>
<html lang="en">

<head>
    <title>FastLearnBD - Calculator</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        .navbar {
            font-family: sans-serif;
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
            font-family: Arial, Helvetica, sans-serif;
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

        #d {
            background-color: aquamarine;
        }

        .button {
            background-color: white;
            color: black;
            text-decoration: none;
            padding-top: 2px;
            width: 50px;
            height: 45px;
            margin-left: 6px;
            margin-right: 6px;
            padding-bottom: 2px;
            border-radius: 10px;
            transition-duration: 0.4s;
        }

        .button:hover {
            background-color: gray;
            color: white;
        }

        .display input {
            position: relative;
            top: 5px;
            height: 50px;
            color: black;
            text-align: right;
            font-size: 22px;
            padding-bottom: 2px;
        }

        .keys {
            color: black;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 22px;
        }

        h2 {
            padding-top: 80px;
            text-align: center;
            font-family: cambria, sans-serif;
            font-weight: bold;
        }

        #setbgcolor {
            background-color: burlywood;
            padding: 10px;
        }

        #section1 {
            margin-left: auto;
        }

        /*
        @media (min-width: 320px) {
            .container {
                max-width: 315px;
            }
        }

        @media (min-width: 480px) {
            .container {
                max-width: 472px;
            }
        }

        @media (min-width: 768px) {
            .container {
                max-width: 758px;
            }
        }

        @media (min-width: 992px) {
            .container {
                max-width: 977px;
            }
        }

        @media (min-width: 1200px) {
            .container {
                max-width: 1180px;
            }
        }
        */

        #ip {
            font-family: monospace;
            font-size: 16px;
            text-align: left;
        }

        .addr {
            width: 35px;
        }

        /*.result {
            border-top: 1px solid #6a6ade;
            border-bottom: 1px solid #6a6ade;
            border-left: 1px solid #6a6ade;
            border-right: 1px solid #6a6ade;
        }
        */

        .result {
            border: 1px solid #6a6ade;
        }

        .label {
            color: black;
            text-align: right;
        }

        .result .label {
            padding-left: 5px;
            display: inline-block;
            width: 150px;
        }

        .btn {
            background-color: cornflowerblue;
            color: black;
            text-decoration: none;
            padding-top: 2px;
            width: auto;
            height: 40px;
            margin-left: auto;
            margin-right: auto;
            padding-bottom: 2px;
            border-radius: 10px;
            transition-duration: 0.4s;
            font-size: 15px;
        }

        .btn:hover {
            background-color: gray;
            color: white;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

    <!-- Start of Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" id="headerimg">
                    <img src="img/library.png" alt="Logo" style="width:60px; padding: 2px">
                </a>
                <a class="navbar-brand" href="index.php" id="header">
                    <b>FastLearnBD</b>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">CSE Zone
                            <span class="sr-only">(current)</span>
                        </a>
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


    <h2 id="header">IP Address Calculator</h2>
    <div id="section1" class="container" align="center">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="info-left">
                    <!--Start of Calculator -->
                    <div id="ip">
                        <strong>IP Address: </strong><br><br>
                        <input type='text' class='addr' id='q1'> .
                        <input type='text' class='addr' id='q2'> .
                        <input type='text' class='addr' id='q3'> .
                        <input type='text' class='addr' id='q4'> /
                        <input type='text' class='addr' id='cidr'>
                        <br>
                        <br>
                        <button class="btn" onclick='calculate();'>Calculate</button>
                        <br><br>
                        <div class='result'>
                            <span class=label>IP Address :</span>
                            <span class=value id=resIP></span>
                        </div>
                        <div class='result'>
                            <span class=label>IP address Binary :</span>
                            <span class=value id=resBinIP></span>
                        </div>
                        <div class='result'>
                            <span class=label>Subnet mask :</span>
                            <span class=value id=resMask></span>
                        </div>
                        <div class='result'>
                            <span class=label>Subnet mask Binary :</span>
                            <span class=value id=resBinMask></span>
                        </div>
                        <div class='result'>
                            <span class=label>Net Address :</span>
                            <span class=value id=resNet></span>
                        </div>
                        <div class='result'>
                            <span class=label>N.A. Binary :</span>
                            <span class=value id=resBinNet></span>
                        </div>
                        <div class='result'>
                            <span class=label>Broadcast Address :</span>
                            <span class=value id=resBC></span>
                        </div>
                        <div class='result'>
                            <span class=label>B.A. Binary :</span>
                            <span class=value id=resBinBC></span>
                        </div>
                        <div class='result'>
                            <span class=label>Standard Class :</span>
                            <span class=value id=resClass></span>
                        </div>
                        <div class='result'>
                            <span class=label>Range :</span>
                            <span class=value id=resRange></span>
                        </div>
                    </div>
                    <!--End of Calculator -->
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

    <br>
    <div class="container">
        <div class="col-md-12 col-xs-12">
            <p style="font-style: italic; font-family: Georgia, 'Times New Roman', Times, serif; font-size: 20px; font-weight: bold">
                return to our
                <a href="blog.php">blog</a>
            </p>
        </div>
    </div>

    <hr>
    <hr>

    <h2 id="header">Basic JavaScript Calculator</h2>
    <div id="section1" class="container" align="center">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="info-right">
                    <!--Start of Calculator -->
                    <div id="setbgcolor">
                        <div class="display">
                            <input type="text" size="18" id="d" readonly>
                            <br>
                            <br>
                            <br>
                        </div>
                        <div class="keys">
                            <p>
                                <input type="button" class="button" value="mrc" onclick='c("not defined")'>
                                <input type="button" class="button" value="(" onclick='math("(")'>
                                <input type="button" class="button" value=")" onclick='math(")")'>
                                <input type="button" class="button" value="/" onclick='math("/")'>
                            </p>
                            <p>
                                <input type="button" class="button" value="7" onclick='math("7")'>
                                <input type="button" class="button" value="8" onclick='math("8")'>
                                <input type="button" class="button" value="9" onclick='math("9")'>
                                <input type="button" class="button" value="*" onclick='math("*")'>
                            </p>
                            <p>
                                <input type="button" class="button" value="4" onclick='math("4")'>
                                <input type="button" class="button" value="5" onclick='math("5")'>
                                <input type="button" class="button" value="6" onclick='math("6")'>
                                <input type="button" class="button" value="-" onclick='math("-")'>
                            </p>
                            <p>
                                <input type="button" class="button" value="1" onclick='math("1")'>
                                <input type="button" class="button" value="2" onclick='math("2")'>
                                <input type="button" class="button" value="3" onclick='math("3")'>
                                <input type="button" class="button" value="+" onclick='math("+")'>
                            </p>
                            <p>
                                <input type="button" class="button" value="0" onclick='math("0")'>
                                <input type="button" class="button" value="." onclick='math(".")'>
                                <input type="button" class="button" value="C" onclick='c("")'>
                                <input type="button" class="button" value="=" onclick='e()'>
                            </p>
                        </div>

                    </div>
                    <!--End of Calculator -->
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

    <!--script of ip calc -->
    <script type='text/javascript'>
        function calculate() {
            //get values from input box
            var q1 = document.getElementById('q1').value;
            var q2 = document.getElementById('q2').value;
            var q3 = document.getElementById('q3').value;
            var q4 = document.getElementById('q4').value;
            var cidr = document.getElementById('cidr').value;

            //validate input value
            if ((q1 >= 0 && q1 <= 255) && (q2 >= 0 && q2 <= 255) &&
                (q3 >= 0 && q3 <= 255) && (q4 >= 0 && q4 <= 255) &&
                (cidr >= 0 && cidr <= 32)) {
                //display IP address
                document.getElementById('resIP').innerHTML = q1 + "." + q2 + "." + q3 + "." + q4;

                //get IP Address binaries
                var ipBin = {};
                ipBin[1] = String("00000000" + parseInt(q1, 10).toString(2)).slice(-8);
                ipBin[2] = String("00000000" + parseInt(q2, 10).toString(2)).slice(-8);
                ipBin[3] = String("00000000" + parseInt(q3, 10).toString(2)).slice(-8);
                ipBin[4] = String("00000000" + parseInt(q4, 10).toString(2)).slice(-8);

                //decide standard class
                var standardClass = "";
                if (q1 <= 126) {
                    standardClass = "A";
                } else if (q1 == 127) {
                    standardClass = "loopback IP"
                } else if (q1 >= 128 && q1 <= 191) {
                    standardClass = "B";
                } else if (q1 >= 192 && q1 <= 223) {
                    standardClass = "C";
                } else if (q1 >= 224 && q1 <= 239) {
                    standardClass = "D (Multicast Address)";
                } else if (q1 >= 240 && q1 <= 225) {
                    standardClass = "E (Experimental)";
                } else {
                    standardClass = "Out of range";
                }

                //netmask
                var mask = cidr;
                var importantBlock = Math.ceil(mask / 8);
                var importantBlockBinary = ipBin[importantBlock];
                var maskBinaryBlockCount = mask % 8;
                if (maskBinaryBlockCount == 0) importantBlock++;
                var maskBinaryBlock = "";
                var maskBlock = "";
                for (var i = 1; i <= 8; i++) {
                    if (maskBinaryBlockCount >= i) {
                        maskBinaryBlock += "1";
                    } else {
                        maskBinaryBlock += "0";
                    }
                }
                //convert binary mask block to decimal
                maskBlock = parseInt(maskBinaryBlock, 2);

                //net & broadcast addr
                var netBlockBinary = "";
                var bcBlockBinary = "";
                for (var i = 1; i <= 8; i++) {
                    if (maskBinaryBlock.substr(i - 1, 1) == "1") {
                        netBlockBinary += importantBlockBinary.substr(i - 1, 1);
                        bcBlockBinary += importantBlockBinary.substr(i - 1, 1);
                    } else {
                        netBlockBinary += "0";
                        bcBlockBinary += "1";
                    }
                }

                //put everything together, create a string container variables
                var mask = "";
                var maskBinary = "";
                var net = "";
                var bc = "";
                var netBinary = "";
                var bcBinary = "";
                var rangeA = "";
                var rangeB = "";
                //loop to put whole strings block together
                for (var i = 1; i <= 4; i++) {
                    if (importantBlock > i) {
                        //blocks before the important block.
                        mask += "255";
                        maskBinary += "11111111";
                        netBinary += ipBin[i];
                        bcBinary += ipBin[i];
                        net += parseInt(ipBin[i], 2);
                        bc += parseInt(ipBin[i], 2);
                        rangeA += parseInt(ipBin[i], 2);
                        rangeB += parseInt(ipBin[i], 2);
                    } else if (importantBlock == i) {
                        //the important block.
                        mask += maskBlock;
                        maskBinary += maskBinaryBlock;
                        netBinary += netBlockBinary;
                        bcBinary += bcBlockBinary;
                        net += parseInt(netBlockBinary, 2);
                        bc += parseInt(bcBlockBinary, 2);
                        rangeA += (parseInt(netBlockBinary, 2) + 1);
                        rangeB += (parseInt(bcBlockBinary, 2) - 1);
                    } else {
                        //block after the important block.
                        mask += 0;
                        maskBinary += "00000000";
                        netBinary += "00000000";
                        bcBinary += "11111111";
                        net += "0";
                        bc += "255";
                        rangeA += 0;
                        rangeB += 255;
                    }
                    //add . separator except the last block
                    if (i < 4) {
                        mask += ".";
                        maskBinary += ".";
                        netBinary += ".";
                        bcBinary += ".";
                        net += ".";
                        bc += ".";
                        rangeA += ".";
                        rangeB += ".";
                    }
                }
                //write the results to the page.
                document.getElementById('resMask').innerHTML = mask;
                document.getElementById('resNet').innerHTML = net;
                document.getElementById('resBC').innerHTML = bc;
                document.getElementById('resRange').innerHTML = rangeA + " - " + rangeB;
                document.getElementById('resBinIP').innerHTML = ipBin[1] + "." + ipBin[2] + "." + ipBin[3] + "." + ipBin[4];
                document.getElementById('resBinMask').innerHTML = maskBinary;
                document.getElementById('resBinNet').innerHTML = netBinary;
                document.getElementById('resBinBC').innerHTML = bcBinary;
                document.getElementById('resClass').innerHTML = standardClass;
            } else {
                alert("invalid value");
            }
        }
    </script>
    <!--script of ip calc -->


    <script>
        function c(val) {
            document.getElementById("d").value = val;
        }

        function math(val) {
            document.getElementById("d").value += val;
        }

        function e() {
            try {
                c(eval(document.getElementById("d").value));
            } catch (e) {
                c('Error')
            }
        }
    </script>


    <div class="container">
        <div class="col-md-12 col-xs-12">
            <p style="font-style: italic; font-family: Georgia, 'Times New Roman', Times, serif; font-size: 20px; font-weight: bold">
                return to our
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