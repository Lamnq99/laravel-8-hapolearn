$(function () {
  $('#form-review').submit(function () {
    $('.err-review').css({ "display": "none" });
  });

  $('#btn-send-review').on('click', function (e) {
    if ($('#btn-regis-login').length > 0) {
      e.preventDefault();
      $("#myModal").modal("show");
      $("#login").addClass("active");
      $("#nav-login").addClass("active");
    }

    if ($('#input-review-course').val().trim().length <= 0) {
      e.preventDefault();
      $('.err-review').css({ "display": "inline-block" });
    }
  });
})
