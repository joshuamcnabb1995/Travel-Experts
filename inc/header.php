<nav>
    <div id="myTopnav" class="topnav">
        <a id="logo" href="<?php if($page == 0) echo '#'; else echo '/'; ?>"<?php if($page == 0) echo ' class="active"'; ?>>Travel Experts</a>
        <a href="#"<?php if($page == 1) echo ' class="active"'; ?>><i class="fa fa-globe"></i>&nbsp; Destinations</a>
        <a href="#"<?php if($page == 2) echo ' class="active"'; ?>><i class="fa fa-home"></i>&nbsp; Hotels</a>
        <a href="#"<?php if($page == 3) echo ' class="active"'; ?>><i class="fa fa-car"></i>&nbsp; Car Rentals</a>
        <a href="#"<?php if($page == 4) echo ' class="active"'; ?>><i class="fa fa-plane"></i>&nbsp; Flights</a>
        <a href="#"<?php if($page == 5) echo ' class="active"'; ?>><i class="fa fa-suitcase"></i>&nbsp; Vacations</a>
        <a href="contact/index.html"<?php if($page == 15) echo ' class="active"'; ?>><i class="fa fa-pencil"></i>&nbsp; Contact Us</a>
        <div class="right">
            <a href="<?php if($page == 16) echo '#'; else echo '/register'; ?>"<?php if($page == 16) echo ' class="active"'; ?>><i class="fa fa-user-plus"></i>&nbsp; Register</a>
            <a href="#"<?php if($page == 17) echo ' class="active"'; ?>><i class="fa fa-lock"></i>&nbsp; Login</a>
        </div>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
    </div>
</nav>
