$(function () {
  $("#btn-reset-filter").on('click', function () {
    $("#filter-search").val("");
    $(".inp-filter").val("");
    $(".btn-latest").prop("checked", false);
    $(".btn-oldest").prop("checked", false);
  });
});
