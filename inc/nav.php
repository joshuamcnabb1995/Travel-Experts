<?php if(!isset($page)) $page = 0; // If the page variable isn't set, make the home the active page rather than throwing an error ?>
<nav>
    <div id="myTopnav" class="topnav">
        <a id="logo" href="<?php if($page == 0) echo '#'; else echo '/travel-experts/'; ?>"<?php if($page == 0) echo ' class="active"'; ?>>Travel Experts</a>
        <a href="<?php if($page == 1) echo '#'; else echo '/travel-experts/links.php'; ?>"<?php if($page == 1) echo ' class="active"'; ?>><i class="fa fa-link"></i>&nbsp; Links</a>
        <a href="<?php if($page == 2) echo '#'; else echo '/travel-experts/addAgent.php'; ?>"<?php if($page == 2) echo ' class="active"'; ?>><i class="fa fa-user-plus"></i>&nbsp; Add Agent</a>
        <a href="/travel-experts/contact/index.php"<?php if($page == 15) echo ' class="active"'; ?>><i class="fa fa-pencil"></i>&nbsp; Contact Us</a>
        <div class="right">
            <a href="<?php if($page == 16) echo '#'; else echo '/travel-experts/register'; ?>"<?php if($page == 16) echo ' class="active"'; ?>><i class="fa fa-user-plus"></i>&nbsp; Register</a>
            <a href="<?php if($page == 17) echo '#'; else echo '/travel-experts/login'; ?>"<?php if($page == 17) echo ' class="active"'; ?>><i class="fa fa-lock"></i>&nbsp; Login</a>
        </div>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
    </div>
</nav>
