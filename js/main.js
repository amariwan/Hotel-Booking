(function ($) {
  // USE STRICT
  "use strict";

  $(".form-radio .radio-item").click(function () {
    //Spot switcher:
    $(this).parent().find(".radio-item").removeClass("active");
    $(this).addClass("active");
  });
  $("form").submit(function (event) {
    var form = document.bookingform;
    var bookingform = $(form).serialize();

    var value = $("#time option:selected").val();
    console.log(value);
    $.ajax({
      url: "../backend/savebook.php",
      type: "post",
      dataType: "html",
      data: bookingform,
      success: function (data) {
        var result = data;
        console.log(result);
      },
    });
    event.preventDefault(); //Prevent the default submit
  });
})(jQuery);
