var actualCommunity;

function openDetailModal(element) {
    $('#detailModal').attr('class', 'bg-modal-show');
    $('#detailBox').attr('class', 'bg-modal-content-open');
    $('#detailBox div:first').attr('class', 'content-modal-show');

    if (data['cm_' + element]) {
        actualCommunity = data['cm_' + element].alias;
        $('.modal-header-title').html(data['cm_' + element].title);
        $('.dynamic-text').html(data['cm_' + element].body);
        $('.modal-image').css('background-image', 'url(' + data['cm_' + element].image + ')');
    } else {
        $('.modal-image').css('background-image', 'url(assets/img/placeholder.png)');
        $('.modal-header-title').html('');
        $('.dynamic-text').html('');
    }
}

function closeDetailModal() {
    $('#detailModal').attr('class', 'bg-modal-hide');
    $('#detailBox').attr('class', 'bg-modal-content-close');
    $('#detailBox div').first().attr('class', 'content-modal-hide');
}

function openLink(num) {
    if (actualCommunity) {
        switch (num) {
            case 0:
                window.location.href = location.protocol + '//' + location.hostname + "/comunidad/" + actualCommunity + "#videos";
                break;
            case 1:
                window.location.href = location.protocol + '//' + location.hostname + "/comunidad/" + actualCommunity + "#galeria";
                break;
            case 2:
                window.location.href = location.protocol + '//' + location.hostname + "/comunidad/" + actualCommunity + "#audio";
                break;
            case 3:
                window.location.href = location.protocol + '//' + location.hostname + "/comunidad/" + actualCommunity + "#festividades";
                break;
            case 4:
                window.location.href = location.protocol + '//' + location.hostname + "/comunidad/" + actualCommunity + "#artesanos";
                break;
            case 5:
                window.location.href = location.protocol + '//' + location.hostname + "/comunidad/" + actualCommunity + "#main";
                break;
        }
    }
}


$(document).ready(function () {
    if (window.location.href.indexOf('comunidad') > -1) {
        if (window.location.hash) {
            var strAncla = window.location.hash;
            $('body,html').stop(true, true).animate({
                scrollTop: $(strAncla).offset().top
            }, 1000);
        }
    } else {
        $('#detailBox').click(function (event) {
            event.stopPropagation();
        });
        $('.cm_1').css('background-image', 'url(' + data.cm_1.image + ')');
        $('.cm_1 span').html(data.cm_1.title);
        $('.cm_2').css('background-image', 'url(' + data.cm_2.image + ')');
        $('.cm_2 span').html(data.cm_2.title);
        $('.cm_3').css('background-image', 'url(' + data.cm_3.image + ')');
        $('.cm_3 span').html(data.cm_3.title);
        $('.cm_4').css('background-image', 'url(' + data.cm_4.image + ')');
        $('.cm_4 span').html(data.cm_4.title);
        $('.cm_5').css('background-image', 'url(' + data.cm_5.image + ')');
        $('.cm_5 span').html(data.cm_5.title);
        $('.cm_6').css('background-image', 'url(' + data.cm_6.image + ')');
        $('.cm_6 span').html(data.cm_6.title);
        $('.cm_7').css('background-image', 'url(' + data.cm_7.image + ')');
        $('.cm_7 span').html(data.cm_7.title);
        $('.cm_8').css('background-image', 'url(' + data.cm_8.image + ')');
        $('.cm_8 span').html(data.cm_8.title);
        $('.cm_9').css('background-image', 'url(' + data.cm_9.image + ')');
        $('.cm_9 span').html(data.cm_9.title);

    }

    $('.anchor').click(function (e) {
        e.preventDefault();
        var strAncla = $(this).attr('href');
        $('body,html').stop(true, true).animate({
            scrollTop: $(strAncla).offset().top
        }, 1000);
    });

    $('.open-menu').click(function (event) {
        event.stopPropagation();
        if ($('.middle-size .menu-content').css('height') === '200px') {
            $('.middle-size .menu-content').attr('style', '');
            $('.middle-size .menu-item').css('opacity', '0');
            $('.middle-size .menu-content').css('overflow', 'hidden');
        } else {
            $('.middle-size .menu-content').css('height', '200px');
            $('.middle-size .menu-item').css('opacity', '1');
            $('.middle-size .menu-content').css('overflow', 'unset');
        }
    });
    $(window).resize(function () {
        $('.middle-size .menu-content').attr('style', '');
        if ($('.open-menu').is(":visible")) {
            $('.middle-size .menu-item').css('opacity', '0');
            $('.middle-size .menu-content').css('overflow', 'hidden');
        } else {
            $('.middle-size .menu-item').css('opacity', '1');
            $('.middle-size .menu-content').css('overflow', 'unset');
        }
    });
});