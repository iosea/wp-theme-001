$back-to-top.on('click', function(event) {
    event.preventDefault();
    $('body,html').animate({
            scrollTop: 0
        }, 300
    );
});