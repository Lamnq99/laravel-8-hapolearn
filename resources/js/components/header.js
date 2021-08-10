$('.navbar-light .navbar-nav .nav-link').on('click', function () {
  $('.navbar-light .navbar-nav .nav-link').removeClass('active');
  $(this).addClass('active');
});

$(document).ready(function () {
  $('.btn-header').click(function () {
    if ($(".collapse").hasClass("show")) {
      $(".collapse").removeClass("show");
      $(".navbar-toggler-icon").css({ "display": "inline-block" })
      $(".img-close-header").css({ "display": "none" })
    }
  });

  $('.btn-menu-header').click(function () {
    if ($(".navbar-toggler-icon").css("display") == "inline-block") {
      $(".navbar-toggler-icon").css({ "display": "none" })
      $(".img-close-header").css({ "display": "inline-block" })
    } else {
      $(".navbar-toggler-icon").css({ "display": "inline-block" })
      $(".img-close-header").css({ "display": "none" })
    }
  });
});
