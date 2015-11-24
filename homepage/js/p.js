/**
 * Created by michael on 11/3/2015.
 */

var $testimonials = [];

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

function catalogTestimonials(){
    var $t = $(".testimonial div");
    var first = true;

    $t.each(function(index){
        console.log("found testimonial: " + $(this).attr("id"));
        $testimonials.push($(this).attr("id"));
        if (!first){
            $(this).hide();
        }
        else{
            first = false;
        }
    });

}

$(window).scroll(function(e){
    var st = $(window).scrollTop();
    phero(st);
    stickmasthead(st);
    new WOW().init();

    catalogTestimonials();
});