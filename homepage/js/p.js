/**
 * Created by michael on 11/3/2015.
 */
$(window).scroll(function(e){
    var st = $(window).scrollTop();
    phero(st);
});

function phero(st){
    $('#hero').css('top',-(st*0.25)+'px').css('opacity', (100-(st*0.15))/100);
}