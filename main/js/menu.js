/* This menu code is a modified version of the code found here:
http://toddmotto.com/html5-and-jquery-super-simple-drop-down-nav/
*/


$(function () {

   $('nav li ul').hide();

   var onclick;
   $('nav ul li a').on('touchstart', function() {
       if (!($(this).parent().has('ul').length)) {
           return true;
       }
       if (!($(this).parent().children('ul').hasClass("open"))) {
           if ($(this).attr('onclick')) {
               onclick = $(this).attr('onclick');
               $(this).data('onclick', onclick);
           }
           $(this).attr('onclick', 'return false');
            $(this).parent().children('ul').stop(true, true).slideDown(100);
            $(this).parent().children('ul').addClass("open");
       }
       else {
            if (jQuery.hasData($(this)[0])) {
                onclick = $(this).data('onclick');
                $(this).attr('onclick', onclick);
            }
            else {
                $(this).removeAttr('onclick');
            }
            $(this).parent().children('ul').stop(true, true).slideUp(100);
            $(this).parent().children('ul').removeClass("open");
       }
    });

   var container = $('nav ul li a');

   $(document).on('touchstart', function() {
       if (!container.is(event.target) && container.has(event.target).length === 0)
        {
            container.each(function() {
                if (jQuery.hasData($(this)[0])) {
                    onclick = $(this).data('onclick');
                    $(this).attr('onclick', onclick);
                }
                else {
                    $(this).removeAttr('onclick');
                }
                $(this).parent().children('ul').stop(true, true).slideUp(100);
                $(this).parent().children('ul').removeClass("open");
            });
        }
   });

   $('nav li').hover(
       function () {
            $(this).children('ul').stop(true, true).slideDown(100);
        },
        function () {
            $(this).children('ul').stop(true, true).slideUp(100);
        }
   );
});