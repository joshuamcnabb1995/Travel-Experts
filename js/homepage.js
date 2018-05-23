var images = ['mountain', 'lagoon', 'carribean', 'lake']; // the file names of the images
var descriptions = ['A wonderful mountain to climb, with a beautiful peak. Please don\'t fall off otherwise our insurance premiums will go up, and it will be very sad.', 'A lagoon.', 'A nice beach on the carribean.', 'A nice lake.'];
var websites = ['https://en.wikipedia.org/wiki/Mountain', 'https://en.wikipedia.org/wiki/Lagoon', 'https://en.wikipedia.org/wiki/Beach', 'https://en.wikipedia.org/wiki/Lake'];

// Display the images with the appropriate descriptions and external links
for(i = 0; i < images.length; i++) {
    document.write('<tr style="float:left;">');
    document.write('<td id="imageDescription' + i + '" class="imageDescription">' + descriptions[i] + '<div id="image' + i + '" class="image"><img src="img/' + images[i] + '.jpg" /></div></td>');
    document.write('</tr>');

    $('#imageDescription' + i).on('mouseover', function() { toggleImage($(this).attr('id'), true); });
    $('#imageDescription' + i).on('mouseout', function() { toggleImage($(this).attr('id'), false); });
    $('#imageDescription' + i).on('click', function() { openUrl($(this).attr('id')); });
}

function toggleImage(id, show)
{
    var id = id.replace('imageDescription', '');

    if(show) {
        $('#image' + id).show();
        $('#imageDescription' + id).css('color', '#fff');
        $('#imageDescription' + id).css('background-color', 'rgba(0, 0, 0, 0.3)');
    } else {
        $('#image' + id).hide();
        $('#imageDescription' + id).css('color', '#000');
        $('#imageDescription' + id).css('background-color', '#fff');
    }
}

function openUrl(id)
{
    var id = id.replace('imageDescription', ''),
    newWindow = $(window).open(websites[id]); // open the new window with the link

    setTimeout(function() {
        newWindow.close();
    }, 2000); // close the window after 2 seconds
}

// Extra challenge
var image = $('#extraChallenge'),
    imageMarginLeft = image.css('marginLeft').replace('px', ''),
    imageMarginTop = image.css('marginTop').replace('px', ''),
    marginLeft = 0,
    marginTop = 0,
    stopMovingUp = false,
    stopMovingUp = false,
    stopMovingRight = false,
    stopMovingLeft = false,
    pageWidth = $(window).width(),
    pageHeight = Number($('#pageContainer').height() - $('#footer').height());

// Make it so the image doesn't go off the screen when the user resizes the page
$(window).on('resize', function() {
    window.pageWidth = $(window).width();
    window.pageHeight = Number($('#pageContainer').height() - $('#footer').height());
});

// https://stackoverflow.com/questions/986937/how-can-i-get-the-browsers-scrollbar-sizes
function getScrollBarWidth () {
    var $outer = $('<div>').css({visibility: 'hidden', width: 100, overflow: 'scroll'}).appendTo('body'),
        widthWithScroll = $('<div>').css({width: '100%'}).appendTo($outer).outerWidth();
    $outer.remove();
    return 100 - widthWithScroll;
};

setInterval(function() {
    // Move the image to the far right side of the window
    if(marginLeft <= (pageWidth - 100) && !stopMovingRight)
        moveImageRight();

    // When the image reaches the right side of the window, start moving it down
    else if(stopMovingRight == 1) {
        moveImageDown();

        // When the image reaches the far left side of the window, start moving it right again
        //if(marginLeft == 0)
            //moveImageRight(true);
    }
}, 1); // run the code every millisecond*/

function moveImageUp()
{
    imageMarginTop = marginTop;
    image.css('marginTop', imageMarginTop + 'px');
    marginTop--;
}

function moveImageDown()
{
    alert('Margin Top: ' + marginTop + '\nPage Height: ' + Math.floor(pageHeight));
    imageMarginTop = marginTop;
    image.css('marginTop', imageMarginTop + 'px');
    marginTop++;

    // When the image reaches the bottom of the page, start moving it left
    if(marginTop >= pageHeight) {
        moveImageLeft();
        stopMovingDown = true;
    }
}

function moveImageRight(originalPosition)
{
    imageMarginLeft = marginLeft;
    image.css('marginLeft', imageMarginLeft + 'px');
    marginLeft++;

    // When the image reaches the right edge of the screen, stop moving it to the right so it can move to the left
    if(marginLeft >= (pageWidth - 100))
        stopMovingRight = true;

    if(marginTop >= pageHeight)
        stopMovingDown = true;

    // If the image is back in it's original position, stop moving it left and start moving it right again
    if(originalPosition) {
        stopMovingLeft = true;
        stopMovingRight = false;
    }
}

function moveImageLeft()
{
    imageMarginLeft = marginLeft;
    image.css('marginLeft', imageMarginLeft + 'px');
    marginLeft--;

    // When the image reaches the left edge of the screen, stop moving it to the left so it can move to the right
    if(marginLeft == 0)
        stopMovingLeft = true;
}
