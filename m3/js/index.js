$(function(){
    $('body').on('keyup', function(event){
        var offsetY;
        var offsetX;
        switch(event.which){
            case 37:
                offsetX = -10;
                break;
            case 38:
                offsetY = -10
                break;
            case 39: 
                offsetX = 10;
                break;
            case 40:
                offsetY = 10;
                break;
        }
        var currentOffset = $('.blah').offset();

        $('.blah').css({
            top: currentOffset.top + offsetY,
            left: currentOffset.left + offsetX,
        })
    });
});