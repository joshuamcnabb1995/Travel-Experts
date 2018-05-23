<!DOCTYPE html>
<html>
    <head>
        <!-- Meta data for Travel Experts -->
        <meta charset="UTF-8">
        <meta name="description" content="Travel Experts website for CPRG-210-A - Web Application Development">
        <meta name="author" content="Joshua Mcnabb">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Travel Experts - Register or Login</title>

        <!-- CSS Normalize "resets" default browser styles and makes the experience more uniform across multiple browsers -->
        <link href="http://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css" rel="stylesheet" type="text/css" />
        <!-- Main site styles -->
        <link href="../css/main.css" rel="stylesheet" type="text/css" />
        <!-- Font Awesome Fonts -->
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Make the responsive navigation open and close on click -->
        <script src="../js/navigation.js" type="text/javascript"></script>
    </head>

    <body>
        <nav>
            <div id="myTopnav" class="topnav">
                <a id="logo" href="../index.html">Travel Experts</a>
                <a href="#"><i class="fa fa-globe"></i>&nbsp; Destinations</a>
                <a href="#t"><i class="fa fa-home"></i>&nbsp; Hotels</a>
                <a href="#"><i class="fa fa-car"></i>&nbsp; Car Rentals</a>
                <a href="#"><i class="fa fa-plane"></i>&nbsp; Flights</a>
                <a href="#"><i class="fa fa-suitcase"></i>&nbsp; Vacations</a>
                <a href="#" class="active"><i class="fa fa-pencil"></i>&nbsp; Contact Us</a>
                <div class="right">
                    <a href="../register/index.html"><i class="fa fa-user-plus"></i>&nbsp; Register</a>
                    <a href="#"><i class="fa fa-lock"></i>&nbsp; Login</a>
                </div>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
            </div>
        </nav>

        <article>
            <section id="divider"></section>

            <section class="contentBox">
                <ul id="contactInformation">
                    <li>Company Information</li>

                    <ul>
                        <li>
                            12345 Somewhere ST SW<br />
                            Calgary, AB<br />
                            1 (234) 567-8901
                        </li>
                    </ul>
                </ul>
            </section>
        </article>

        <footer>Copyright &copy; 2018 Travel Experts Inc. All rights reserved.</footer>
    </body>
</html>
