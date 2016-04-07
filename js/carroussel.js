$(function () {
    //carrocel foto
    var width = (parseInt($('.carrossel .item').outerWidth() + parseInt($('.carrossel .item').css('margin-right')))) * $('.carrossel .item').length;
    $('.carrossel').css('width', width);

    //carrocel foto
    //altera quantas imagens quer aparesa no carrossel
    var numImages = 1;
    var margPadding = 30;

    //carrocel foto
    var ident = 0;
    var count = ($('.carrossel .item').length / numImages) - 1;
    var slide = (numImages * margPadding) + ($('.carrossel img').outerWidth() * numImages);

    //carrocel foto
    $('.forth').click(function () {
        if (ident < count) {
            ident++;
            $('.carrossel').animate({'margin-left': '-=' + slide + 'px'}, '500');
        }
    });
    //carrocel foto
    $('.back').click(function () {
        if (ident >= 1) {
            ident--;
            $('.carrossel').animate({'margin-left': '+=' + slide + 'px'}, '500');
        }
    });

});

$(function () {
    //carrocel planta
    var width1 = (parseInt($('.carrossel1 .item1').outerWidth() + parseInt($('.carrossel1 .item1').css('margin-right')))) * $('.carrossel1 .item1').length;
    $('.carrossel1').css('width', width1);

    //carrocel planta
    var numImages1 = 1;
    var margPadding1 = 30;
  
    //carrocel planta
    var ident1 = 0;
    var count1 = ($('.carrossel1 .item1').length / numImages1) - 1;
    var slide1 = (numImages1 * margPadding1) + ($('.carrossel1 img').outerWidth() * numImages1);
    
    //carrocel planta
    $('.forth1').click(function () {
        if (ident1 < count1) {
            ident1++;
            $('.carrossel1').animate({'margin-left': '-=' + slide1 + 'px'}, '500');
        }
    });
    //carrocel planta
    $('.back1').click(function () {
        if (ident1 >= 1) {
            ident1--;
            $('.carrossel1').animate({'margin-left': '+=' + slide1 + 'px'}, '500');
        }
    });

});



