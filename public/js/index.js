$(document).ready(function () {
    $('#logout').on('click', function () {
        $('#logout-form').submit();
    });
});

$(document).on('keyup', '#searchMember', function(){
    var url = '/search/member';
    var name = $(this).val();
    var content = $('#content');

    $.get(url, { name: name }, function (data) {
        content.html(data);
    });
});

$('.multi-item-carousel').carousel({
    interval: false
});

$('.multi-item-carousel .item').each(function (){
    var next = $(this).next();

    if (!next.length) {
        next = $(this).siblings(':first');
    }

    next.children(':first-child').clone().appendTo($(this));

    if (next.next().length > 0) {
        next.next().children(':first-child').clone().appendTo($(this));
    } else {
        $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
    }
});

$(document).on('click', '.comment', function () {
    $(this).closest('p.action').siblings('.content').removeClass('hidden');
});

$(document).on('click', '#full-video', function () {
    var url = '/video/full';
    var content = $('#review_content');

    $.get(url, function (data) {
        content.html(data);
    });
});

$(document).on('click', '.review-category', function () {
    var url = '/category/review';
    var category_id = $(this).children('.categoryId').val();

    $.get(url, { category_id: category_id }, function (data) {
        $('#review_content').html(data);
    });
});

$(document).on('keyup', '#searchReview', function (){
    var url = '/search/review';
    var key = $(this).val();

    $.get(url, { caption: key }, function (data) {
        $('#review_content').html(data);
    });
});
