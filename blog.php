<!DOCTYPE html>
<html>

<head>
    <title>FastLearnBD - Blog</title>
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

        @media (min-width: 768px) {
            .navbar-nav > li > a {
                /* (80px - line-height of 27px) / 2 = 26.5px */
                padding-top: 18px;
                padding-bottom: 17px;
                line-height: 25px;
            }
        }

        #section1,
        #section2,
        #section3,
        #section4,
        #section5,
        #section6,
        #section7,
        #section8,
        #section9 {
            padding-top: 50px;
            padding-bottom: 50px;
        }

        #sectionX {
            padding-bottom: 50px;
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

        @media (min-width: 768px) {
            #contents {
                display: none;
            }
        }

        @media (max-width: 600px) {
            h2 {
                font-size: 1.7em;
            }

            .navbar-brand {
                font-size: 1.2em;
                padding-left: 1px;
            }

            .fa {
                font-size: 20px;
                padding: 10px;
            }

            #header {
                font-size: 30px;
            }

            #content {
                display: none;
            }
        }

        #blog {
            text-align: justify;
        }

        #contentsheader {
            background-color: darkgrey;
            text-align: center;
            font-family: cambria, sans-serif;
            font-size: 40px;
            font-weight: bold;
        }

        #clist1,
        #clist2 {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
            list-style: none;
        }

        #header {
            padding-top: 30px;
            font-family: Georgia, 'Times New Roman', Times, serif;
            text-align: center;
            font-weight: bold;
            font-size: 50px;
        }

        .back-to-top {
            cursor: pointer;
            position: fixed;
            bottom: 45px;
            right: 25px;
            display: none;
        }

        #content {
            position: fixed;
            top: 60px;
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
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Blog
                            <span class="sr-only">(current)</span>
                        </a>
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


    <h1 id="header">BLOG</h1>
    <div id="contents">
        <!-- Contents List -->
        <div id="sectionX" class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h2 id="contentsheader">Contents:</h2>
                    <div class="col-md-4 col-sm-4">
                        <ul id="clist1">
                            <li>
                                <a href="#section1">Social Engineering</a>
                            </li>
                            <li>
                                <a href="#section2">PDF</a>
                            </li>
                            <li>
                                <a href="#section3">Bitcoin</a>
                            </li>
                            <li>
                                <a href="#section4">Diversity</a>
                            </li>
                            <li>
                                <a href="#section5">IP</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <ul id="clist2">
                            <li>
                                <a href="#section6">Domain</a>
                            </li>
                            <li>
                                <a href="#section7">URL</a>
                            </li>
                            <li>
                                <a href="#section8">A Plausible Recipe For Early Life On Earth</a>
                            </li>
                            <li>
                                <a href="#section9">RAM</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fixed dropdown content list -->
    <div id="content" class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Contents
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
            <li>
                <a href="#section1">Social Engineering</a>
            </li>
            <li>
                <a href="#section2">PDF</a>
            </li>
            <li>
                <a href="#section3">Bitcoin</a>
            </li>
            <li>
                <a href="#section4">Diversity</a>
            </li>
            <li>
                <a href="#section5">IP</a>
            </li>
            <li>
                <a href="#section6">Domain</a>
            </li>
            <li>
                <a href="#section7">URL</a>
            </li>
            <li>
                <a href="#section8">A Plausible Recipe For Early Life On Earth</a>
            </li>
            <li>
                <a href="#section9">RAM</a>
            </li>
        </ul>
    </div>

    <!-- Blog contents -->
    <section id="blog">
        <div id="section1" class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="info-left">
                        <h2>Social Engineering</h2>
                        <br>
                        <p>Social engineering is the art of manipulating people so they give up confidential
                            information. The types of information
                            these criminals are seeking can vary, but when individuals are targeted the criminals are
                            usually trying to trick
                            you into giving them your passwords or bank information, or access your computer to secretly
                            install malicious software–that
                            will give them access to your passwords and bank information as well as giving them control
                            over your computer.</p>
                        <p>Criminals use social engineering tactics because it is usually easier to exploit your natural
                            inclination to trust
                            than it is to discover ways to hack your software. For example, it is much easier to fool
                            someone into giving you
                            their password than it is for you to try hacking their password (unless the password is
                            really weak).</p>
                        <p>Security is all about knowing who and what to trust. Knowing when, and when not to, to take a
                            person at their word;
                            when to trust that the person you are communicating with is indeed the person you think you
                            are communicating with;
                            when to trust that a website is or isn’t legitimate; when to trust that the person on the
                            phone is or isn’t legitimate;
                            when providing your information is or isn’t a good idea.</p>
                        <p>Ask any security professional and they will tell you that the weakest link in the security
                            chain is the human who accepts
                            a person or scenario at face value. It doesn’t matter how many locks and deadbolts are on
                            your doors and windows,
                            or if have guard dogs, alarm systems, floodlights, fences with barbed wire, and armed
                            security personnel; if you trust
                            the person at the gate who says he is the pizza delivery guy and you let him in without
                            first
                            checking to see if he
                            is legitimate you are completely exposed to whatever risk he represents.
                        </p>
                        <br>
                        <br>
                        <img src="img/socialengineering2.jpg" class="img-responsive" id="seone">
                        <br>
                        <br>
                        <p>Response to a question you never had. Criminals may pretend to be responding to your ’request
                            for help’ from a company
                            while also offering more help. They pick companies that millions of people use like a
                            software company or bank. If
                            you don’t use the product or service, you will ignore the email, phone call, or message, but
                            if you do happen to use
                            the service, there is a good chance you will respond because you probably do want help with
                            a
                            problem.
                        </p>
                        <p>For example, even though you know you didn’t originally ask a question you probably a problem
                            with your computer’s
                            operating system and you seize on this opportunity to get it fixed. For free! The moment you
                            respond you have bought
                            the crook’s story, given them your trust and opened yourself up for exploitation.</p>
                        <p>The representative, who is actually a criminal, will need to ’authenticate you’, have you log
                            into ’their system’ or,
                            have you log into your computer and either give them remote access to your computer so they
                            can ’fix’ it for you,
                            or tell you the commands so you can fix it yourself with their help–where some of the
                            commands they tell you to enter
                            will open a way for the criminal to get back into your computer later.
                        </p>
                    </div>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="info-right">
                        <br>
                        <br>
                        <br>
                        <br>
                        <img src="img/email-hack_img.jpg" class="img-responsive" id="setwo">
                        <br>
                        <p>Email from a friend. If a criminal manages to hack or socially engineer one person’s email
                            password they have access
                            to that person’s contact list–and because most people use one password everywhere, they
                            probably have access to that
                            person’s social networking contacts as well.</p>
                        <p>Once the criminal has that email account under their control, they send emails to all the
                            person’s contacts or leave
                            messages on all their friend’s social pages, and possibly on the pages of the person’s
                            friend’s friends.
                        </p>
                        <br>
                        <p>
                        <h4>Don’t become a victim</h4>
                        <ul>
                            <li>
                                <b>Slow down..</b>Spammers want you to act first and think later. If the message conveys
                                a sense of urgency, or uses
                                high-pressure sales tactics be skeptical; never let their urgency
                                influence your careful review.
                            </li>
                            <li>
                                <b>Research the facts...</b>Be suspicious of any unsolicited messages. If the email
                                looks like it is from a company
                                you use, do your own research. Use a search engine to go to
                                the real company’s site, or a phone directory to find
                                their phone number.
                            </li>
                            <li>
                                <b>Delete any request for financial information or passwords...</b> If you get asked to
                                reply to a message
                                with personal
                                information, it’s a
                                scam.
                            </li>
                            <li>
                                <b>Reject requests for help or offers of help...</b>Legitimate companies and
                                organizations do not contact you to
                                provide
                                help. If you did not specifically
                                request assistance from the sender,
                                consider any offer to ’help’ restore
                                credit
                                scores, refinance a home, answer
                                your question, etc., a scam.
                                Similarly, if you receive a request
                                for help from
                                a charity or organization that you
                                do not have a relationship with,
                                delete it. To give, seek out
                                reputable charitable
                                organizations on your own to avoid
                                falling for a scam.
                            </li>
                            <li>
                                <b>Don’t let a link in control of where you land...</b>Stay in control by finding the
                                website yourself using a search
                                engine to be sure you land where
                                you intend to land. Hovering over
                                links in email will show the
                                actual URL at the
                                bottom, but a good fake can still
                                steer you wrong.
                            </li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="section2" class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="info-right">
                        <h2>PDF</h2>
                        <br>
                        <p>পোর্টেবল ডকুমেন্ট ফরম্যাট (PDF) একটি ফাইল ফরম্যাট যা স্বাধীনভাবে অ্যাপ্লিকেশন সফ্টওয়্যার,
                            হার্ডওয়্যার ও অপারেটিং
                            সিস্টেম এর ডকুমেন্ট উপস্থাপন করতে ব্যবহৃত হয় । প্রতিটি PDF ফাইল encapsulate করে একটি
                            নির্দিষ্ট বিন্যাসকৃত ডকুমেন্ট-এর
                            ভিতরে টেক্সট, ফন্ট, গ্রাফিক্স এবং অন্যান্য তথ্যসহ একটি সম্পূর্ণ বিবরণ প্রদর্শন করে । ১৯৯১
                            সালে, অ্যাডোবি সিস্টেম-এর
                            সহ-প্রতিষ্ঠাতা John Warnock "Camelot" নামক একটি সিস্টেম রূপরেখা প্রদান করেন যা PDF এর সাথে
                            সম্পর্কযুক্ত ছিলো ।</p>
                        <p>
                            <b>ইতিহাসঃ</b>
                            <br>PDF ১৯৯০ সালের শুরুর দিকে একটি নির্দিষ্ট উপায়ে আবিষ্কৃত হয় কোনো ডকুমেন্ট-এর টেক্সট
                            ফরম্যাটিং এবং ইনলাইন ছবিসহ অসম
                            কম্পিউটার ব্যবহারকারীদের মধ্যে আদান-প্রদান করা যায় যেখানে পারস্পরিক-সামঞ্জস্যপূর্ণ
                            অ্যাপ্লিকেইশন সফ্টওয়্যার অ্যাক্সেস
                            নাও থাকতে পারে । এটা যেমন DjVu (এখনও উন্নয়নশীল), দূত, প্রচলিত গ্রাউন্ড ডিজিটাল পেপার,
                            Farallon প্রতিরূপ এবং এমনকি
                            অ্যাডোবি নিজস্ব পোস্টস্ক্রিপ্ট ফরম্যাট (.ps) হিসেবে প্রতিযোগী ফরম্যাটের একটি সংখ্যার
                            মধ্যে ছিল । PDF-এর শুরুর বছরগুলোতে,
                            ওয়ার্ল্ড ওয়াইড ওয়েব এবং HTML ডকুমেন্ট এর উত্থান পূর্বে; PDF মূলত ডেস্কটপ পাবলিশিং
                            workflows-এর মধ্যে জনপ্রিয় ছিল
                            ।
                        </p>
                        <p>
                            <b>Suppoerted OS:
                                <br>
                            </b>সমস্ত অপারেটিং সিস্টেমেই PDF সমর্থনযোগ্য ।</p>
                        <h4>Technical foundations</h4>
                        <p>The PDF combines three technologies:
                            <br>
                        <ol>
                            <li>A subset of the PostScript page description programming language, for generating the
                                layout and graphics.
                            </li>
                            <li>A font-embedding/replacement system to allow fonts to travel with the documents.
                            </li>
                            <li>A structured storage system to bundle these elements and any associated content into a
                                single file, with data compression
                                where appropriate.
                            </li>
                        </ol>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="info-right">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="info-left">
                            <img src="img/forpdf.jpg" class="img-responsive">
                        </div>
                        <br>
                        <br>
                        <br>
                        <h4>Postscript:</h4>
                        <p>PostScript is a page description language run in an interpreter to generate an image, a
                            process requiring many resources.
                            It can handle graphics and standard features of programming languages such as if and loop
                            commands. PDF is largely
                            based on PostScript but simplified to remove flow control features like these, while
                            graphics
                            commands such as lineto
                            remain.
                        </p>
                        <p>Often, the PostScript-like PDF code is generated from a source PostScript file. The graphics
                            commands that are output
                            by the PostScript code are collected and tokenized. Any files, graphics, or fonts to which
                            the document refers also
                            are collected. Then, everything is compressed to a single file. Therefore, the entire
                            PostScript world (fonts, layout,
                            measurements) remains intact.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="info-right">
                        <br>
                        <br>
                        <br>
                        <br>
                        <h5>As a document format, PDF has several advantages over PostScript:</h5>
                        <p>
                        <ul>
                            <li>PDF contains tokenized and interpreted results of the PostScript source code, for direct
                                correspondence between changes
                                to items in the PDF page description and changes to the resulting page appearance.
                            </li>
                            <li>PDF (from version 1.4) supports graphic transparency; PostScript does not.</li>
                            <li>PostScript is an interpreted programming language with an implicit global state, so
                                instructions accompanying the
                                description of one page can affect the appearance of any following page. Therefore, all
                                preceding pages in a PostScript
                                document must be processed to determine the correct appearance of a given page, whereas
                                each page in a PDF document
                                is unaffected by the others. As a result, PDF viewers allow the user to quickly jump to
                                the final pages of a long
                                document, whereas a PostScript viewer needs to process all pages sequentially before
                                being able to display the destination
                                page (unless the optional PostScript Document Structuring Conventions have been
                                carefully complied with).
                            </li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="section3" class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="info-left">
                        <h2>Bitcoin</h2>
                        <br>
                        <p>বিটকয়েন হচ্ছে সারা বিশ্বব্যাপী একটি সার্বজনীন cryptocurrency এবং মজার বিষয় হচ্ছে এটি এক
                            প্রকারের ভার্চুয়াল কয়েন । সাধারণত
                            বিটকয়েনের লেনদেন সরাসরি হয়ে থাকে । এতে কোনো মধ্যবর্তী ব্যক্তি বা প্রতিষ্ঠানের প্রয়োজন পরে না
                            । আর এই লেনদেনগুলো blockchain-এর
                            মাধ্যমে হয়ে থাকে ।
                        </p>
                        <br>
                        <div class="info-left">
                            <img src="img/bitcoin.jpg" class="img-responsive">
                        </div>
                        <br>
                        <div class="info-left">
                            <p>Satoshi Nakamoto নামের এক ব্যক্তির অধীনে একদল লোক ২০০৯ সালে বিটকয়েন open source software
                                হিসেবে বাজারে ছাড়ে । Bitcoin
                                system-এর unit হচ্ছে bitcoin. ২০১৪ সাল থেকে, Ticker symbol দিয়ে বিটকয়েন represent করা হয়
                                ।
                            </p>
                            <p>According to research produced by Cambridge University, there were between 2.9 million
                                and 5.8 million unique users
                                using a cryptocurrency wallet, as of 2017, most of them using bitcoin. The number of
                                users has grown significantly
                                since 2013, when there were 300,000 to 1.3 million users.
                            </p>
                            <p>The price of bitcoins has gone through various cycles of appreciation and depreciation
                                referred to by some as bubbles
                                and busts. In 2011, the value of one bitcoin rapidly rose from about US$0.30 to US$32
                                before returning to US$2. In
                                the latter half of 2012 and during the 2012–13 Cypriot financial crisis, the bitcoin
                                price began to rise, reaching
                                a high of US$266 on 10 April 2013, before crashing to around US$50. On 29 November 2013,
                                the cost of one bitcoin
                                rose to a peak of US$1,242. In 2014, the price fell sharply, and as of April remained
                                depressed at little more than
                                half 2013 prices. As of August 2014 it was under US$600.
                            </p>
                            <p>According to Mark T. Williams, as of 2014, bitcoin has volatility seven times greater
                                than gold, eight times greater
                                than the S&P 500, and 18 times greater than the US dollar. According to Forbes, there
                                are
                                uses where volatility does
                                not matter, such as online gambling, tipping, and international remittances.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="info-left">
                        <br>
                        <br>
                        <br>
                        <br>
                        <p>
                            <b>Blockchain</b>
                            <br> The blockchain is a public ledger that records bitcoin transactions. A novel solution
                            accomplishes this without any
                            trusted central authority: the maintenance of the blockchain is performed by a network
                            of communicating nodes running
                            bitcoin software. Transactions of the form payer X sends Y bitcoins to payee Z are
                            broadcast to this network using
                            readily available software applications. Network nodes can validate transactions, add
                            them to their copy of the ledger,
                            and then broadcast these ledger additions to other nodes. The blockchain is a
                            distributed database – to achieve independent
                            verification of the chain of ownership of any and every bitcoin amount, each network
                            node stores its own copy of the
                            blockchain. Approximately six times per hour, a new group of accepted transactions, a
                            block, is created, added to
                            the blockchain, and quickly published to all nodes. This allows bitcoin software to
                            determine when a particular bitcoin
                            amount has been spent, which is necessary in order to prevent double-spending in an
                            environment without central oversight.
                            Whereas a conventional ledger records the transfers of actual bills or promissory notes
                            that exist apart from it,
                            the blockchain is the only place that bitcoins can be said to exist in the form of
                            unspent outputs of transactions.
                        </p>
                        <div class="info-left">
                            <img src="img/Bitcoin_Price_History.png" class="img-responsive">
                        </div>
                        <br>
                        <p>In January 2015, noting that the bitcoin price had dropped to its lowest level since spring
                            2013 – around US$224 –
                            The New York Times suggested that "with no signs of a rally in the offing, the industry is
                            bracing for the effects
                            of a prolonged decline in prices. In particular, bitcoin mining companies, which are
                            essential to the currency's underlying
                            technology, are flashing warning signs." Also in January 2015, Business Insider reported
                            that
                            deep web drug dealers
                            were "freaking out" as they lost profits through being unable to convert bitcoin revenue to
                            cash quickly enough as
                            the price declined – and that there was a danger that dealers selling reserves to stay in
                            business might force the
                            bitcoin price down further.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="info-right">
                        <br>
                        <br>
                        <br>
                        <br>
                        <p>Some Argentinians have bought bitcoins to protect their savings against high inflation or the
                            possibility that governments
                            could confiscate savings accounts. During the 2012–2013 Cypriot financial crisis, bitcoin
                            purchases in Cyprus rose
                            due to fears that savings accounts would be confiscated or taxed.

                            <br>The Winklevoss twins have invested into bitcoins. In 2013 The Washington Post claimed
                            that they owned 1% of all the
                            bitcoins in existence at the time

                            <br>Other methods of investment are bitcoin funds. The first regulated bitcoin fund was
                            established in Jersey in July
                            2014 and approved by the Jersey Financial Services Commission. Forbes started publishing
                            arguments in favor of investing
                            in December 2015.

                            <br>In 2013 and 2014, the European Banking Authority and the Financial Industry Regulatory
                            Authority (FINRA), a United
                            States self-regulatory organization, warned that investing in bitcoins carries significant
                            risks. Forbes named bitcoin
                            the best investment of 2013. In 2014, Bloomberg namedbitcoin one of its worst investments of
                            the year. In 2015, bitcoin
                            topped Bloomberg's currency tables.

                            <br>According to bitinfocharts.com, in 2017 there are 9,272 bitcoin wallets with more than
                            $1 million worth of bitcoins.
                            The exact number of bitcoin millionaires is uncertain as a single person can have more than
                            one bitcoin wallet.</p>
                        <p>
                            <em>To know more
                                <a href="https://www.bitcoin.com/">click here</a>
                            </em>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="section4" class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="info-left">
                        <h2>Diversity in the workplace</h2>
                        <br>
                        <br>
                        <img src="img/Diversity.jpg" class="img-responsive">
                        <br>
                        <br>
                        <p>Day by day the need of interaction among people from diverse cultures, beliefs and
                            backgrounds is increasing due to
                            globalization. People are coming out of their insular workplace to meet the world’s greatest
                            challenges with vast
                            innovation and creativity. They are now part of a worldwide economy with competition coming
                            from nearly every part
                            of the world. Thus, profit and nonprofit organizations need diversity to become more
                            creative
                            and open to change.</p>
                        <p>According to Greenberg (2004), workplace diversity refers to the variety of differences
                            between people in an organization.
                            That sounds simple, but diversity encompasses race, gender, ethnic group, age, personality,
                            cognitive style, tenure,
                            organizational function, education, background and more. In modern time, diversity means not
                            only black and white
                            but also includes other characteristics like age, religion, tenure, sexual orientation,
                            gender identity and so on.
                            Our workforce and entire economy are strongest when we embrace diversity to its fullest and
                            that means opening doors
                            of opportunity to everyone. Diversity means understanding that each individual is unique and
                            recognizing our individual
                            differences. These can be along the dimensions of race, ethnicity, gender, sexual
                            orientation, socio-economic status,
                            age, physical abilities, religious beliefs, political beliefs or other ideologies.</p>
                        <p>According to Roosevelt (2001), managing diversity is a comprehensive process for creating a
                            work environment that includes
                            everyone. Diversity in any dimensions used to differentiate people from another people.
                            Diverse workplaces are composed
                            of employees with varying characteristics mostly includes religious and political beliefs,
                            gender, ethnicity, socioeconomic
                            background, sexual orientation and geographic location.</p>
                        <p>There are two levels of diversity: deep level and surface level. Surface levels are those we
                            can easily identify or
                            easily can be seen. For example, skin complexion, gender, age, disability etc. Whereas deep
                            level diversity cannot
                            be easily identified. For example, extraversion or introversion of a person. Working in a
                            place with full of different
                            people can help to gather a vast knowledge as well it helps to enlarge the ability of mixing
                            and communicating with
                            other people. In a multicultural or diverse society, there are countless ways in which
                            people
                            negotiate the everyday
                            live experience and reality of diversity. Managing diversity is about more than equal
                            employment opportunity and affirmative
                            action (Losyk 1996). Companies that are more diverse, are more successful. In other words,
                            diversity means understanding.
                            No firms can achieve success or move forward to achieving its goal without understanding
                            each
                            other employees.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="info-right">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <p>Talking about diversity, as we have done our project on Concord group, it is one of the
                            leading conglomerates in Bangladesh.
                            Now they have expanded their business in various sectors like garment, real-estate,
                            chemical,
                            concrete etc. Their
                            main two businesses are real-estate and entertainment. Concord group is not only expanding
                            their business but also,
                            they have employed large number of population from different ethnicity, gender,
                            socioeconomic
                            background and so on.
                            It also helps their company to build up its reputation as diversity works as an influence in
                            business reputation.
                            Moreover, diversity in the workplace is important for employees because it manifests itself
                            in building a great reputation
                            for the company as well for the worker, leading to increased profitability and opportunities
                            for workers. We have
                            asked Mr. Noman (manager) that whether there are any diverse or disabled employees in
                            real-estate or not. He replied
                            that there are no such disable employees in real-estate as they need to work hard but they
                            cannot. He also said that
                            in other sectors like entertainment, there are a good number of physically disable or
                            diverse
                            employees who work on.
                            For example, they’ve disabled employees on Fantasy Kingdom and Foys’ Lake. They believe
                            workplace diversity is important
                            within the organization as well as outside. However, Concord group gives equal employment
                            opportunities to all but
                            they usually prefer male employees on engineering department because working on construction
                            project is not suitable
                            for women. But they do hire females on receptionist and sales department.
                        </p>
                        <p>Valuing diversity identifies the differences between people and acknowledges that these
                            differences are a valued asset.
                            Multicultural education is an important component of valuing diversity. It respects
                            diversity
                            while teaching all children
                            and youth to become effective and participating members of a democracy. Though diverse
                            company has a success of achieving
                            its goal, motivation also works as a great variable. Employees who gets promotion, good
                            amount of compensation or
                            motivated, they are highly influenced to involve in work. Those who are influenced or
                            motivated by the leader are
                            more committed and more likely to engage in work even if they are dissatisfied, because they
                            have a sense of organizational
                            loyalty.
                        </p>
                        <br>
                        <img src="img/diversity2.png" class="img-responsive">
                        <br>
                        <p>Diversity teaches how to work in a team. Teamwork influence to achieve success. Coming
                            together is a beginning but
                            working together is a success. There are lots of company which gives us message to work with
                            diversity. For example,
                            Nestle, IUCN, Unilever etc. Diversity is about all of us and about us to figure out how to
                            work through this world
                            together.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="section5" class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="info-left">
                        <h2>IP</h2>
                        <p>Internet Protocol-এর সংক্ষিপ্ত রূপ IP. IPv4 system অনুযায়ী প্রতিটি IP address-কে প্রকাশের
                            জন্য মোট 4টি অক্টেট (8 bit-এর
                            বাইনারি) সংখ্যা প্রয়োজন । কাজেই সম্পূর্ণ ঠিকানা প্রকাশের জন্য 32টি bit প্রয়োজন । প্রতিটি
                            অক্টেট ডট (.) দ্বারা পৃথক
                            করা হয় । IP address-এর প্রথম দুটি অক্টেট network ID এবং পরের দুটি অক্টেট host ID প্রকাশ করে
                            ।
                            <br> যেমনঃ
                            <br> 172.168.10.1
                            <br> 192.168.11.01
                            <br> 127.17.203.139
                            <br> 192.168.145.101
                            <br>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <br>
                    <br>
                    <br>
                    <img src="img/ipimage.png" class="img-responsive">
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="info-left">
                        <br>
                        <br>
                        <br>
                        <p>IP address হচ্ছে software address আর hardware address হচ্ছে MAC address. IP address গঠন করা
                            হয় একটি ৩২বিট বিশিষ্ট
                            নাম্বার দ্বারা যা কোনো host network-কে খুঁজে পেতে ব্যবহার করা হয় । Internet Protocol-এর
                            দুটি
                            version ব্যবহৃত হয়ঃ
                            IPv4 ও IPv6. তবে IPv4-এর ব্যপক ব্যবহারের কারণে সাধারণত IP address বলতে IPv4-কেই বোঝানো হয় ।
                            <br> IP address class: IP address-কে পাঁচ ভাগে ভাগ করা হয়ে থাকে ।
                            <br> যথাঃ Class A, Class B, Class C, Class D ও Class E.
                        </p>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="info-right">
                        <p>In the early stages of development of the Internet Protocol, network administrators
                            interpreted an IP address in two
                            parts: network number portion and host number portion. The highest order octet (most
                            significant eight bits) in an
                            address was designated as the network number and the remaining bits were called the rest
                            field or host identifier
                            and were used for host numbering within a network.
                        </p>
                        <p>This early method soon proved inadequate as additional networks developed that were
                            independent of the existing networks
                            already designated by a network number. In 1981, the Internet addressing specification was
                            revised with the introduction
                            of classful network architecture.
                        </p>
                        <p>Classful network design allowed for a larger number of individual network assignments and
                            fine-grained subnetwork design.
                            The first three bits of the most significant octet of an IP address were defined as the
                            class
                            of the address. Three
                            classes (A, B, and C) were defined for universal unicast addressing. Depending on the class
                            derived, the network identification
                            was based on octet boundary segments of the entire address. Each class used successively
                            additional octets in the
                            network identifier, thus reducing the possible number of hosts in the higher order classes
                            (B
                            and C). The following
                            table gives an overview of this now obsolete system.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="info-left">
                        <h4>IPv6 addresses</h4>
                        <p>In IPv6, the address size was increased from 32 bits in IPv4 to 128 bits or 16 octets, thus
                            providing up to 2128 (approximately
                            3.403×1038) addresses. This is deemed sufficient for the foreseeable future.
                        </p>
                        <p>The intent of the new design was not to provide just a sufficient quantity of addresses, but
                            also redesign routing
                            in the Internet by more efficient aggregation of subnetwork routing prefixes. This resulted
                            in slower growth of routing
                            tables in routers. The smallest possible individual allocation is a subnet for 264 hosts,
                            which is the square of the
                            size of the entire IPv4 Internet. At these levels, actual address utilization ratios will be
                            small on any IPv6 network
                            segment. The new design also provides the opportunity to separate the addressing
                            infrastructure of a network segment,
                            i.e. the local administration of the segment's available space, from the addressing prefix
                            used to route traffic to
                            and from external networks. IPv6 has facilities that automatically change the routing prefix
                            of entire networks, should
                            the global connectivity or the routing policy change, without requiring internal redesign or
                            manual renumbering.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <br>
                    <br>
                    <img src="img/ipv6.png" class="img-responsive">
                    <p>The large number of IPv6 addresses allows large blocks to be assigned for specific purposes and,
                        where appropriate,
                        to be aggregated for efficient routing. With a large address space, there is no need to have
                        complex address conservation
                        methods as used in CIDR.</p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="info-right">
                        <br>
                        <br>
                        <p>All modern desktop and enterprise server operating systems include native support for the
                            IPv6 protocol, but it is
                            not yet widely deployed in other devices, such as residential networking routers, voice over
                            IP (VoIP) and multimedia
                            equipment, and network peripherals.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="section6" class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="info-right">
                        <h2>Domain</h2>
                        <p>Internet-এ প্রতিটি info একটি unique link-এর অন্তর্গত । Domain Name হলো internet-এর unique
                            name যা কোনো একটি নির্দিষ্ট
                            server-কে নির্দেশ করে । IP address-এর সংখ্যাগুলো মনে রাখা কষ্টকর । এজন্য DNS বা Domain Name
                            Server স্বয়ংক্রিয়ভাবে
                            numeric IP address-কে আক্ষরিকভাবে অনুবাদ করে । দুই বা এর অধিক অংশ নিয়ে Domain Name গঠিত হয়
                            । প্রতিটি অংশ ডট (.)
                            দ্বারা বিভক্ত থাকে ।
                            <br> যেমনঃ www.facebook.com
                            <br> এখানে www হচ্ছে server type, আর facebook এর পর যে .com ব্যবহৃত হয়েছে তা কি ধরণের সাইট
                            সেটা নির্দেশ করে ।
                            <br> [দ্রষ্টব্যঃ উপরের website-টিতে protocol উল্লেখ করা হয় নি ।]
                        </p>
                        <h4>Sub-domain:</h4>
                        <p>মূল domain-এর under-এ নির্দিষ্ট data সম্বলিত যে domain কাজ করে সেটিই হলো sub-domain. Main
                            domain-এর ভিতরে sub-domain
                            অবস্থিত থাকে । এতে classified ও নির্দিষ্ট web elements পাওয়া যায় । সাধারণত main domain-এর
                            চেয়ে কম data ও ছোট আকারেই
                            sub-domain তৈরি করা হয়ে থাকে । Website থেকে customer-দের বিশেষ কোনো সুযোগ-সুবিধা দেয়ার
                            জন্য
                            sub-domain তৈরি করা
                            হয় ।
                            <br> উদাহরণ- mail.google.com
                            <br> এখানে সরাসরি Google Mail বা Gmail-এ access করা যাবে । এছাড়া www.google.com –এ যেয়ে
                            Gmail-এ click করেও access করা
                            যায় ।</p>
                        <p>নিচে কিছু গুরুত্বপূর্ণ generic top level domain দেখানো হলোঃ
                            <br> .com : commercial organization. Example- www.uniliever.com
                            <br> .org : non-profit organization. Example- en.wikipedia.org
                            <br> .net : networking service. Example- www.asp.net
                            <br> .info : informational site. Example- wikileaks.info
                            <br> .gov : government organization. Example- www.moe.gov.bd
                            <br> .edu : educational organization. Example- www.sjs.edu.bd
                            <br> .mil : military sites. Example- www.army.mil
                            <br> ইত্যাদি । </p>
                        <h4>Country domain:</h4>
                        <p>বিভিন্ন দেশের সরকারি website অথবা বহুজাতিক প্রতিষ্ঠানগুলোর website-এ country domain ব্যবহৃত
                            হয় । তাছাড়া কিছু সাধারণ
                            website-এও country domain ব্যবহৃত হয়ে থাকে ।
                            <br> সরাসরি top level domain-এর পর বা top level domain ব্যবহার না করেও country domain
                            ব্যবহৃত হয় ।
                            <br> উদাহরণ-www.btcl.gov.bd
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="section7" class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="info-left">
                        <h2>URL</h2>
                        <p>URL-এর পূর্ণরূপ Uniform Resource Locator. এটি সম্পূর্ণই unique. প্রত্যেকটি website-এর আলাদা ও
                            নির্দিষ্ট রকমের URL থাকে
                            ।
                            <br> যেকোনো website-এর সাথে সংগতি রেখেই URL তৈরি করা হয় ।
                            <br>
                            <br>
                            <br> URL মূলত তিনটি অংশ নিয়ে গঠিত-
                            <br> ১. Protocol,
                            <br> ২. Hostname এবং
                            <br> ৩. Directory.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="info-left">
                        <br>
                        <br>
                        <br>
                        <img src="img/url.jpg" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="info-left">
                        <h2>Protocol</h2>
                        <p>তথ্য-প্রযুক্তিতে Protocol হচ্ছে বিশেষ কোড; যা টেলিকমিউনিকেশ্যন কানেকশ্যনে ব্যবহৃত হয় যখন সেটি
                            কানেক্‌টেড থাকে । Protocol
                            হচ্ছে কোনো website-এ access করার পদ্ধতি । User-এর access-এর demand অনুযায়ী protocol ব্যবহৃত
                            হয় । সাধারণত Protocol;
                            user কোন্‌ ধরণের file বা data চাচ্ছে সেটা নির্দেশিত করে । Protocol-এর মাধ্যমে user ও
                            server-এ
                            থাকা তথ্যের যোগাযোগ
                            স্থাপিত হয় ।
                        </p>
                        <h4>Protocol list:</h4>
                        <p>http:// = hyper text transfer protocol
                            <br> ftp:// = file transfer protocol
                            <br> mailto:// = electronics address
                            <br> file:// = local file directory
                            <br> Gopher:// = gopher protocol
                            <br> news: = news group
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="section8" class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="info-left">
                        <h2>A Plausible Recipe For Early Life On Earth</h2>
                        <br>
                        <br>
                        <p>Chemists at The Scripps Research Institute (TSRI) have developed a fascinating new theory for
                            how life on Earth may
                            have begun.</p>
                        <p>Their experiments, described today in the journal Nature Communications, demonstrate that key
                            chemical reactions that
                            support life today could have been carried out with ingredients likely present on the planet
                            four billion years ago.</p>
                        <p>“This was a black box for us,” said Ramanarayanan Krishnamurthy, PhD, associate professor of
                            chemistry at TSRI and
                            senior author of the new study. “But if you focus on the chemistry, the questions of origins
                            of life become less daunting.”</p>
                        <p>For the new study, Krishnamurthy and his coauthors, who are all members of the National
                            Science Foundation/National
                            Aeronautics and Space Administration Center for Chemical Evolution, focused on a series of
                            chemical reactions that
                            make up what researchers refer to as the citric acid cycle.</p>
                        <p>Every aerobic organism, from flamingoes to fungi, relies on the citric acid cycle to release
                            stored energy in cells.
                            In previous studies, researchers imagined early life using the same molecules for the citric
                            acid cycle as life uses
                            today. The problem with that approach, Krishnamurthy explai20ns, is that these biological
                            molecules are fragile and
                            the chemical reactions used in the cycle would not have existed in the first billion years
                            of
                            Earth–the ingredients
                            simply didn’t exist yet.</p>
                        <p>Leaders of the new study started with the chemical reactions first. They wrote the recipe and
                            then determined which
                            molecules present on early Earth could have worked as ingredients.
                        </p>
                        <p>The new study outlines how two non-biological cycles–called the HKG cycle and the malonate
                            cycle–could have come together
                            to kick-start a crude version of the citric acid cycle. The two cycles use reactions that
                            perform the same fundamental
                            chemistry of a-ketoacids and b-ketoacids as in the citric acid cycle. These shared reactions
                            include aldol additions,
                            which bring new source molecules into the cycles, as well as beta and oxidative
                            decarboxylations, which release the
                            molecules as carbon dioxide (CO2).</p>
                        <p>As they ran these reactions, the researchers found they could produce amino acids in addition
                            to CO2, which are also
                            the end products of the citric acid cycle. The researchers think that as biological
                            molecules
                            like enzymes became
                            available, they could have led to the replacement of non-biological molecules in these
                            fundamental reactions to make
                            them more elaborate and efficient.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="info-right">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <img src="img/amazon-forrest-earth20140317-6401.jpg" alt="Amazon Forest" class="img-responsive">
                        <br>
                        <br>
                        <br>
                        <p>“The chemistry could have stayed the same over time, it was just the nature of the molecules
                            that changed,” says Krishnamurthy.
                            “The molecules evolved to be more complicated over time based on what biology needed.”</p>
                        <p>“Modern metabolism has a precursor, a template, that was non-biological,” adds Greg
                            Springsteen, PhD, first author
                            of the new study and associate professor of chemistry at Furman University.</p>
                        <p>Making these reactions even more plausible is the fact that at the center of these reactions
                            is a molecule called glyoxylate,
                            which studies show could have been available on early Earth and is part of the citric acid
                            cycle today (called the
                            “Glyoxylate shunt or cycle”).</p>
                        <p>Krishnamurthy says more research needs to be done to see how these chemical reactions could
                            have become as sustainable
                            as the citric acid cycle is today.</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="section9">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-18">
                        <div class="info-left">
                            <h2>RAM</h2>
                            <p>Random-access memory (RAM /ræm/) is a form of computer data storage that stores data and
                                machine code currently being
                                used. A random-access memory device allows data items to be read or written in almost
                                the
                                same amount of time irrespective
                                of the physical location of data inside the memory. In contrast, with other
                                direct-access
                                data storage media such
                                as hard disks, CD-RWs, DVD-RWs and the older magnetic tapes and drum memory, the time
                                required to read and write
                                data items varies significantly depending on their physical locations on the recording
                                medium, due to mechanical
                                limitations such as media rotation speeds and arm movement.</p>
                            <p>RAM contains multiplexing and demultiplexing circuitry, to connect the data lines to the
                                addressed storage for reading
                                or writing the entry. Usually more than one bit of storage is accessed by the same
                                address, and RAM devices often
                                have multiple data lines and are said to be "8-bit" or "16-bit", etc. devices.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-18">
                        <div class="info-right">
                            <br>
                            <br>
                            <br>
                            <br>
                            <img src="img/ram01.jpg" class="img-responsive">
                            <br>
                            <br>
                            <p id="fixp">In today's technology, random-access memory takes the form of integrated
                                circuits. RAM is normally associated with
                                volatile types of memory (such as DRAM modules), where stored information is
                                lost if power is removed, although non-volatile
                                RAM has also been developed. Other types of non-volatile memories exist that
                                allow random access for read operations,
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-18">
                        <div class="info-left">
                            <br>
                            <br>
                            <br>
                            <p id="fixp">but either do not allow write operations or have other kinds of limitations on
                                them. These include most types of ROM
                                and a type of flash memory called NOR-Flash.
                            </p>
                            <p>Integrated-circuit RAM chips came into the market in the early 1970s, with the first
                                commercially available DRAM chip,
                                the Intel 1103, introduced in October 1970.</p>
                            <p>The two widely used forms of modern RAM are static RAM (SRAM) and dynamic RAM (DRAM). In
                                SRAM, a bit of data is stored
                                using the state of a six transistor memory cell. This form of RAM is more expensive to
                                produce, but is generally
                                faster and requires less dynamic power than DRAM. In modern computers, SRAM is often
                                used
                                as cache memory for the
                                CPU. DRAM stores a bit of data using a transistor and capacitor pair, which together
                                comprise a DRAM cell. The capacitor
                                holds a high or low charge (1 or 0, respectively), and the transistor acts as a switch
                                that lets the control circuitry
                                on
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-18">
                        <div>
                            <div class="info-right">
                                <br>
                                <br>
                                <br>
                                <p> the chip read the capacitor's state of charge or change it. As this form of memory
                                    is less expensive to produce than
                                    static RAM, it is the predominant form of computer memory used in modern
                                    computers.</p>
                                <br>
                                <br>
                                <br>
                                <img src="img/ram02.png" alt="RAM on motherboard" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Back to top -->
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button"
       title="Click to return on the top page"
       data-toggle="tooltip" data-placement="left">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a>

    <script>
        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 50) {
                    $('#back-to-top').fadeIn();
                } else {
                    $('#back-to-top').fadeOut();
                }
            });
            // scroll body to 0px on click
            $('#back-to-top').click(function () {
                $('#back-to-top').tooltip('hide');
                $('body,html').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });
            $('#back-to-top').tooltip('show');
        });
    </script>

    <!-- Footer -->
    <footer class="container-fluid text-center">
        <div class="row">
            <div class="col-sm-18">
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
            <div class="col-sm-18">
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