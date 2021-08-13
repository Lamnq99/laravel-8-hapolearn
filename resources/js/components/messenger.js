$(document).ready(function () {
  $("#messenger").click(function () {
    if ($("#messenger-box").css("display") == "none") {
      $("#messenger-box").css({ "display": "flex" });
    } else if ($("#messenger-box").css("display") == "flex") {
      $("#messenger-box").css({ "display": "none" });
    }
  });

  $(".icon-close").click(function () {
    $("#messenger-box").css({ "display": "none" });
  });
});

$(document).on('click', '.pagination a', function () {
  //your code
});
