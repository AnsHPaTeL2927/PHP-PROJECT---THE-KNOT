$(function(){
	$("#wizard").steps({
        headerTag: "h4",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        transitionEffectSpeed: 300,
        labels: {
            next: "Continue",
            previous: "Back",
            submit: "Submit",
            finish: 'Proceed to checkout'
        },
        onStepChanging: function (event, currentIndex, newIndex) { 
            if ( newIndex >= 1 ) {
                $('.steps ul li:first-child a img').attr('src','asset2/images/133028-200.png');
            } else {
                $('.steps ul li:first-child a img').attr('src','asset2/images/133028-200.png');
            }

            if ( newIndex === 1 ) {
                $('.steps ul li:nth-child(2) a img').attr('src','asset2/images/filter-line-icon-vector-removebg-preview.png');
            } else {
                $('.steps ul li:nth-child(2) a img').attr('src','asset2/images/filter-line-icon-vector-removebg-preview.png');
            }

            if ( newIndex === 2 ) {
                $('.steps ul li:nth-child(3) a img').attr('src','asset2/images/decoration5.png');
            } else {
                $('.steps ul li:nth-child(3) a img').attr('src','asset2/images/decoration5.png');
            }

            if ( newIndex === 3 ) {
                $('.steps ul li:nth-child(4) a img').attr('src','asset2/images/newinvoice.jpg');
                $('.actions ul').addClass('step-4');
            } else {
                $('.steps ul li:nth-child(4) a img').attr('src','asset2/images/newinvoice.jpg');
                $('.actions ul').removeClass('step-4');
            }
            return true; 
        }
    });
    // Custom Button Jquery Steps
    $('.forward').click(function(){
    	$("#wizard").steps('next');
    })
    $('.submit').click(function(){
    	$("#wizard").steps('submit');
    })
    $('.finish').click(function(){
    	$("#wizard").steps('finish');
    })
    $('.backward').click(function(){
        $("#wizard").steps('previous');
    })
    // Click to see password 
    $('.password i').click(function(){
        if ( $('.password input').attr('type') === 'password' ) {
            $(this).next().attr('type', 'text');
        } else {
            $('.password input').attr('type', 'password');
        }
    }) 
    // Create Steps Image
    $('.steps ul li:first-child').append('<img src="asset2/images/step-arrow.png" alt="" class="step-arrow">').find('a').append('<img src="asset2/images/133028-200.png" alt="" >').append('<span class="step-order">Duration</span>');
    $('.steps ul li:nth-child(2').append('<img src="asset2/images/step-arrow.png" alt=""  class="step-arrow"> ').find('a').append('<img src="asset2/images/filter-line-icon-vector-removebg-preview.png" alt=""> ').append('<span class="step-order">Service</span>');
    $('.steps ul li:nth-child(3)').append('<img src="asset2/images/step-arrow.png" alt="" class="step-arrow">').find('a').append('<img src="asset2/images/decoration5.png" alt="">').append('<span class="step-order">Decoration</span>');
    $('.steps ul li:last-child a').append('<img src="asset2/images/newinvoice.jpg" alt="">').append('<span class="step-order">Billing</span>');
    // Count input 
    $(".quantity span").on("click", function() {

        var $button = $(this);
        var oldValue = $button.parent().find("input").val();

        if ($button.hasClass('plus')) {
          var newVal = parseFloat(oldValue) + 1;
        } else {
           // Don't allow decrementing below zero
          if (oldValue > 0) {
            var newVal = parseFloat(oldValue) - 1;
            } else {
            newVal = 0;
          }
        }
        $button.parent().find("input").val(newVal);
    });
    // var buttonNext = document.querySelector('a[href="#next"]');
    // buttonNext.remove();
    // var buttonPrevious = document.querySelector('a[href="#previous"]');
    // buttonPrevious.remove();
    // var buttonFinish = document.querySelector('a[href="#finish"]');
    // buttonFinish.remove();
})