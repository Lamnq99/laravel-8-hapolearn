$(document).ready(function () {
    if ($(".input-register").hasClass("is-invalid")) {
        $("#myModal").modal("show");
        $("#login").removeClass("active");
        $("#nav-login").removeClass("active");
        $("#register").addClass("active");
        $("#nav-regis").addClass("active");
    }

    if ($(".input-login").hasClass("is-invalid-login")) {
        $("#myModal").modal("show");
        $("#register").removeClass("active");
        $("#nav-regis").removeClass("active");
        $("#login").addClass("active");
        $("#nav-login").addClass("active");
    }
});