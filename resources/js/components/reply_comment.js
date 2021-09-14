const { isNull } = require("lodash");

$(function () {
  $('.btn-reply').on('click', function () {
    if ($('#btn-regis-login').length > 0) {
      $("#myModal").modal("show");
      $("#login").addClass("active");
      $("#nav-login").addClass("active");
    }

    var form = $(this).data('id');

    $('.form-reply-comment').each(function () {
      if ($(this).hasClass(form) && $('#btn-regis-login').length == 0 || $(this).data('id') == form) {
        console.log('an');
        if ($(this).css("display") == "none") {
          $(this).css({ "display": "block" })
        } else {
          $(this).css({ "display": "none" })
        }
      } else {
        $(this).css({ "display": "none" })
      }
    });

    $('.review-id-reply').each(function () {
      if ($(this).val() != form) {
        $(this).removeClass("get-review-id");
      }

      if ($(this).val() == form) {
        $(this).addClass("get-review-id");
      }
    });

    $('.input-reply-comment').each(function () {
      if ($(this).data('id') != form) {
        $(this).val("");
      }
    });
  });

  $('.form-reply-comment').submit(function (e) {
    e.preventDefault();

    $.ajaxSetup({
      headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
      }
    });

    var reply;
    var reviewId;
    $('.input-reply-comment').each(function () {
      if ($(this).val()) {
        reply = $(this).val();
        reviewId = $(this).data('id');
      }
    });

    var userId = $('.user-id-reply').first().val();

    if (!isNull(reply) && !isNull(reviewId) && !isNull(userId)) {
      $.ajax({
        url: "/replyreview",
        method: "POST",
        data: {
          reply: reply,
          reviewId: reviewId,
          userId: userId
        },
        dataType: "json",
        success: function (result) {
          var html = '<div class="col-lg-11"><hr><div class="comment-header row reply-comment-main align-items-center"><div class="ava-user-cmt text-center"><img src="http://127.0.0.1:8000/storage/avatar_user/' + result.ava_user + '" alt="avatar user"></div> <div class="name-user-cmt text-center"><p>' + result.user + '</p></div><div class="time-user-cmt text-center"><p>' + result.reply.created_at + '</p></div></div><div class="row pl-0 comment-body reply-comment-body"><p>' + result.reply.content + '</p></div></div>'
          console.log(result);

          $('.reply-comment-container').each(function () {
            if ($(this).attr("data-id") == result.reply.feedback_id) {
              $(this).append(html);
            }
          });

          $('.input-reply-comment').each(function () {
            $(this).val('');
          });
        },
        error: function (jqXHR, textStatus, errorThrown) { // What to do if we fail
          console.log(JSON.stringify(jqXHR));
          console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
        }
      })
    }
  });
})
