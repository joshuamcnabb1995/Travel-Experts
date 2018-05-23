<?php
    date_default_timezone_set('America/Edmonton'); // Change the server default timezone to our timezone

    function displayWelcomeMessage()
    {
        $date = date('Gis'); // Get the 24 hour time in hours, minutes and seconds

        // Between 5:00:01 and noon say good morning
        if($date > 50000 && $date < 120000)
            return 'Good Morning';

        // Between 12:00:01 and 6:00pm say good afternoon
        else if($date > 120000 && $date <= 180000)
            return 'Good Afternoon';

        // Between 6:00:01pm and 10:00pm say good evening
        else if($date > 180000 && $date < 220000)
            return 'Good Evening';

        // Between 10:00:01pm and 4:59am
        else
            return 'You should be sleeping right now!';
    }

    function updateStyle($filename)
    {
        echo "<style type=\"text/css\">
                    body {
                        background: url('../img/$filename.jpg') !important;
                        background-repeat: no-repeat !important;
                        background-size: cover !important;
                    }
                </style>";
    }

    function changeStyle()
    {
        if(displayWelcomeMessage() == 'Good Morning')
            updateStyle('morning');

        else if(displayWelcomeMessage() == 'Good Afternoon')
            updateStyle('afternoon');

        else if(displayWelcomeMessage() == 'Good Evening')
            updateStyle('evening');

        else
            updateStyle('goodnight');
    }
