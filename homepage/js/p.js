/**
 * Created by michael on 11/3/2015.
 */

var $testimonials = [];
var $testimonialCurrentIndex = 0;

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
        //console.log("found testimonial: " + $(this).attr("id"));
        $testimonials.push($(this).attr("id"));
        if (!first){
            $(this).hide();
        }
        else{
            first = false;
        }
    });

    if ($testimonials.length < 2){
        $(".testimonials-more .pn").addClass("nonext");
    }

}

function testimonialsGoNextPrev(np, $button){
    if (!$button.hasClass("nonext")){
        console.log("clicked " + np);
        var indexInc = 1;

        if(np === "left"){
            indexInc = -1;
        }

        var currentId = $testimonials[$testimonialCurrentIndex];
        var nextIndex = $testimonialCurrentIndex + indexInc;
        var nextId = $testimonials[nextIndex];
        var $ce = $("#"+currentId);
        var $ne = $("#"+nextId);

        $ce.fadeOut(300, function(){
            $ne.fadeIn(500);
        });

        $testimonialCurrentIndex = nextIndex;

        $(".testimonials-more .pn").removeClass("nonext");

        if ($testimonialCurrentIndex === 0){
            $(".testimonials-more .pn.left").addClass("nonext");
        }
        if ($testimonialCurrentIndex === ($testimonials.length - 1)){
            $(".testimonials-more .pn.right").addClass("nonext");
        }

    }

}

$(window).scroll(function(e){
    var st = $(window).scrollTop();
    phero(st);
    stickmasthead(st);
    new WOW().init();

    catalogTestimonials();

    $(".testimonials-more .pn.left").on("click", function(event){
        testimonialsGoNextPrev("left", $(this));
    });

    $(".testimonials-more .pn.right").on("click", function(event){
        testimonialsGoNextPrev("right", $(this));
    });
});