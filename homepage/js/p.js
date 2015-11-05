/**
 * Created by michael on 11/3/2015.
 */
$(window).scroll(function(e){
    var st = $(window).scrollTop();
    phero(st);
    stickmasthead(st);
});

function phero(st){
    $('#hero').css('top',-(st*0.25)+'px').css('opacity', (100-(st*0.15))/100);
}

function stickmasthead(st){
    var $masthead = $("#masthead");
    if (st < 160){
        st = 160;
    }

    if (st === 160){
        $masthead.removeClass("stick");
    }
    else{
        $masthead.addClass("stick");
    }
}