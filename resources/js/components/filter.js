$(function () {
  $("#btn-reset-filter").on('click', function (e) {
    e.preventDefault();
    $("#filter-search").val("");
    $(".inp-filter").val("");
    $("#newest").prop('checked',false);
    $("#oldest").prop('checked',false);
  });
});
