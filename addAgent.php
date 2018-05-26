<?php $page = 2; ?>
<!DOCTYPE html>
<html>
    <head>
        <?php include('inc/meta.php'); ?>

        <title>Add New Agent</title>

        <?php include('inc/css.php'); ?>
    </head>

    <body>
        <?php include('inc/nav.php'); ?>

        <article>
            <?php include('inc/header.php'); ?>

            <section class="contentBox">
                <div id="register">
                    <form id="registerForm" action="test.php" method="POST" onSubmit="return submitRegistrationForm(this);"><!-- onSubmit="return submitRegistrationForm(this);"-->
                        <div id="formLeft" class="left">
                            <span class="formTitle">Add New Agent</span><br /><br />

                            <label id="firstnameLabel" for="firstname">First Name <span class="requiredFieldIndicator">*</span></label><br />
                            <input id="firstname" type="text" name="AgtFirstName" maxlength=20 /><br /><br />

                            <label id="middleInitialLabel" for="middleInitial">Middle Initial</label><br />
                            <select name="AgtMiddleInitial">
                                <?php
                                    // Display options for A-Z
                                    foreach(range('A','Z') as $v){
                                        echo "<option value=\"$v\">$v</option>\n";
                                    }
                                ?>
                            </select><br /><br />

                            <label id="lastnameLabel" for="lastname">Last Name <span class="requiredFieldIndicator">*</span></label><br />
                            <input id="lastname" type="text" name="AgtLastName" maxlength=20 /><br /><br />

                            <label id="phoneNumberLabel" for="lastname">Business Phone #: <span class="requiredFieldIndicator">*</span></label><br />
                            <input id="phonenumber" type="text" name="AgtBusPhone" maxlength=20 /><br /><br />

                            <label id="emailLabel" for="lastname">Email Address: <span class="requiredFieldIndicator">*</span></label><br />
                            <input id="email" type="email" name="AgtEmail" maxlength=100 /><br /><br />

                            <label id="positionLabel" for="position">Agent Position: <span class="requiredFieldIndicator">*</span></label><br />
                            <input id="position" type="text" name="AgtPosition" maxlength=20 /><br /><br />

                            <label id="agencyLabel" for="position">Agency ID: <span class="requiredFieldIndicator">*</span></label><br />
                            <input id="agency" type="text" name="AgencyId" maxlength=20 value=1 /><br />
                        </div>

                        <center>
                            <div id="submitForm">
                                <button id="test" class="button primary" style="margin-right:10px;"><i class="fa fa-user-plus"></i>&nbsp; Add New Agent</button>
                            </div>
                        </center>
                    </form>
                </div>
            </section>
        </article>

        <!--<?php include('inc/footer.php'); ?>-->
    </body>
</html>
