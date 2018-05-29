<?php
    session_start();

    $page = 17;
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include('../inc/meta.php'); ?>

        <title>Travel Experts - Login</title>

        <?php include('../inc/css.php'); ?>
    </head>

    <body>
        <?php include('../inc/nav.php'); ?>

        <article>
            <?php include('../inc/header.php'); ?>

            <section class="contentBox">
                <div id="login">
                    <form id="loginForm" action="processLogin.php" method="POST" onSubmit="return submitRegistrationForm(this);"><!-- onSubmit="return submitRegistrationForm(this);"-->
                        <center>
                            <span class="formTitle">Login to Your Account</span><br /><br />

                            <label id="usernameLabel" for="username">Username <span class="requiredFieldIndicator">*</span></label><br />
                            <input id="username" type="text" name="username" maxlength=20 /><br /><br />

                            <label id="passwordLabel" for="password">Password <span class="requiredFieldIndicator">*</span></label><br />
                            <input id="password" type="password" name="password" maxlength=32 />

                            <?php if(isset($_SESSION['error_message'])) echo '<br /><br />' . $_SESSION['error_message']; ?>

                            <div id="submitForm" style="margin-top:10px;">
                                <button id="test" class="button primary" style="margin-right:10px;"><i class="fa fa-user-plus"></i>&nbsp; Add New Agent</button>
                            </div>
                        </center>
                    </form>
                </div>
            </section>
        </article>

        <!--<?php include('../footer.php'); ?>-->
    </body>
</html>
<?php unset($_SESSION['error_message']); ?>
