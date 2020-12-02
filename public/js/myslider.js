// JavaScript Document
 $(document).ready(function() {
    $('#autoWidth').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#autoWidth').removeClass('cS-hidden');
        }
    });
  });


//
// $(document).ready(function() {
//     var autoplaySlider = $('#autoplay').lightSlider({
//         auto:true,
//         loop:true,
//         pauseOnHover: true,
//         onBeforeSlide: function (el) {
//             $('#current').text(el.getCurrentSlideCount());
//         }
//     });
//     $('#total').text(autoplaySlider.getTotalSlideCount());
// });

