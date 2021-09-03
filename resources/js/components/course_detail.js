$(function () {
  $('#btn-more').on('click', function (e) {
    if ($('#btn-regis-login').length > 0) {
      e.preventDefault();
      $("#myModal").modal("show");
      $("#login").addClass("active");
      $("#nav-login").addClass("active");
    }
  });
});
