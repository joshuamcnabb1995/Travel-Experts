<?php $page = 0; ?>
<!DOCTYPE html>
<html>
    <head>
        <?php include('inc/meta.php'); ?>

        <title>Travel Experts - The Best Travel Site on the Web!</title>

        <?php include('inc/css.php'); ?>
        <script src="js/navigation.js" type="text/javascript"></script>
        <!-- Load jQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>

    <body>
        <?php include('inc/header.php'); ?>

        <article>
            <section id="mainSearch">
                <form id="mainSearchForm" action="" method="POST">
                    <input type="search" placeholder="Search for destinations, hotels, rentals, etc..." />
                    <span id="searchIcon" class="fa fa-search"></span>
                </form>
            </section>

            <div id="pageContainer">
                <div id="extraChallengeContainer"><img id="extraChallenge" src="img/extrachallenge.jpg" /></div>

                <center>
                    <table id="images">
                        <thead>
                            <th>Image Gallery</th>
                        </thead>

                        <tbody>
                            <script type="text/javascript" src="js/homepage.js"></script>
                        </tbody>
                    </table>
                </center><br /><br /><br /><br />
            </div>

            <!--<section id="content">
                <!--<img src="img/logo.png" class="logo" /><h1>Welcome to Travel Experts</h1>-->

                <!--<h3>Travel Destinations</h3>

                <div class="imageGallery">
                    <img src="img/mountain.jpeg" />

                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><br />
                    <center><button class="button primary"><i class="fa fa-info-circle"></i>&nbsp; More Info</button>
                </div>

                <div class="imageGallery">
                    <img src="img/mountain.jpeg" />

                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><br />
                    <center><button class="button primary"><i class="fa fa-info-circle"></i>&nbsp; More Info</button>
                </div>

                <div class="imageGallery">
                    <img src="img/mountain.jpeg" />

                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><br />
                    <center><button class="button primary"><i class="fa fa-info-circle"></i>&nbsp; More Info</button>
                </div>

                <div class="imageGallery">
                    <img src="img/mountain.jpeg" />

                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><br />
                    <center><button class="button primary"><i class="fa fa-info-circle"></i>&nbsp; More Info</button>
                </div>

                <div class="imageGallery">
                    <img src="img/mountain.jpeg" />

                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><br />
                    <center><button class="button primary"><i class="fa fa-info-circle"></i>&nbsp; More Info</button>
                </div>
            </section>-->
        </article>

        <?php include('inc/footer.php'); ?>
    </body>
</html>
