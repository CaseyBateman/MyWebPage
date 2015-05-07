$(document).ready(function() {
    function imageresize() {
        var bgimgwidth = $(window).width();
        if ((bgimgwidth) < '600'){
            $('.bgImg').each(function(){
                var thisImg = $(this);
                var newSrc= thisImg.attr('src').replace('css/purple.jpg', 'css/cellPurple.png');
                thisImg.attr('src', newSrc);
            });
        } else {
            $('.bgImg').each(function(){
                var thisImg = $(this);
                var newSrc= thisImg.attr('src').replace('css/cellPurple.png', 'css/purple.jpg');
                thisImg.attr('src', newSrc);
            });
        }
    }
    imageresize();
    
    $(window).resize(imageresize);
});