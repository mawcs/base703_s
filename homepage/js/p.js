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
    if (st < 0){
        st = 0;
    }

    if (st === 0){
        $masthead.removeClass("stick");
    }
    else{
        $masthead.addClass("stick");
    }
}