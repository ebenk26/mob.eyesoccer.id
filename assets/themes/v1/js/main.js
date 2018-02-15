$(document).ready(function () {

    // Click on Point
    $(document).on("click", ".form_point", function (e) {
        e.preventDefault();

        var IDForm = $(this).attr('id');
        if ($(this).attr('id') == undefined) {
            var IDForm = $(this).attr('form');
        }

        // Input Set
        if ($(this).attr('vf') != undefined) {
            vf = $(this).attr('vf');
            to = $(this).attr('to');
            val = $(this).attr('val');

            $('.' + vf + ' .' + to).val(val);
            $('.' + to).val(val);
        }

        // CSS Select
        vb = $(this).attr('vb'); // Back to Normal
        vp = $(this).attr('vp'); // Set to Active
        $('.' + vb).each(function () {
            if ($(this).attr('active') == 'on') {
                $(this).removeAttr('active');
                $(this).removeClass(vp)
            }
        })
        $('#' + IDForm).attr('active', 'on');
        $('#' + IDForm).addClass(vp);

        // Set Default & Clean Next Attribut
        if ($(this).attr('clean') != undefined) {
            df = $(this).attr('df');
            vdf = JSON.parse($(df).attr('val'));
            $.each(vdf, function (v, n) {
                if (Object.prototype.toString.call(n) == '[object Object]') {
                    $.each(n, function (v1, n1) {
                        $('.' + v + ' .' + v1).html(n1);
                    })
                } else {
                    $('.' + v).html(n);
                }
            })

            cls = $(this).attr('clean');
            splitID = cls.split(",");
            if (Object.prototype.toString.call(splitID) == '[object Array]') {
                splitID.map(function (v) {
                    $('.' + v).each(function () {
                        if ($(this).attr('active') == 'on') {
                            $(this).removeAttr('active');
                            $(this).removeClass(vp)
                        }
                    })
                })
            } else {
                $('.' + cls).each(function () {
                    if ($(this).attr('active') == 'on') {
                        $(this).removeAttr('active');
                        $(this).removeClass(vp)
                    }
                })
            }
        }
    });

    // Get on Click
    $(document).on("click", ".form_get", function (e) {
        e.preventDefault();

        $('#boxmessage').fadeOut(200);
        $('.loading').show();
        box_popup();

        var msgBox = $(this).attr('msg');
        var formURL = $(this).attr('action');
        var msgRequest = ($('#' + msgBox + '.msg').attr('value') == undefined) ? 'ajaxMessage' : $('#' + msgBox + '.msg').attr('value');

        ajaxReqGet(formURL, msgRequest);
    });

    // Post on Click
    $(document).on("click", ".form_post", function (e) {
        e.preventDefault();

        var IDForm = $(this).attr('id');
        if ($(this).attr('id') == undefined) {
            var IDForm = $(this).attr('form');
        }

        // Clean Next Attribut
        if ($(this).attr('clean') != undefined) {
            vp = $(this).attr('vp');
            cls = $(this).attr('clean');
            splitID = cls.split(",");
            if (Object.prototype.toString.call(splitID) == '[object Array]') {
                splitID.map(function (v) {
                    $('.' + v).each(function () {
                        if ($(this).attr('active') == 'on') {
                            $(this).removeAttr('active');
                            $(this).removeClass(vp)
                        }
                    })
                })
            } else {
                $('.' + cls).each(function () {
                    if ($(this).attr('active') == 'on') {
                        $(this).removeAttr('active');
                        $(this).removeClass(vp)
                    }
                })
            }

            $('#' + cls).remove();
        }

        // Input Set
        if ($(this).attr('vf') != undefined) {
            vf = $(this).attr('vf');
            to = $(this).attr('to');
            val = $(this).attr('val');

            $('.' + vf + ' .' + to).val(val);
            $('.' + to).val(val);
        }

        // CSS Select
        if ($(this).attr('point') == "true") {
            vb = $(this).attr('vb'); // Back to Normal
            vp = $(this).attr('vp'); // Set to Active
            $('.' + vb).each(function () {
                if ($(this).attr('active') == 'on') {
                    $(this).removeAttr('active');
                    $(this).removeClass(vp)
                }
            })
            $('#' + IDForm).attr('active', 'on');
            $('#' + IDForm).addClass(vp);
        }

        var msgBox = $(this).attr('msg');
        var actURL = $(this).attr('action');
        var baseURL = $('.baseurl').attr('val');

        $('#boxmessage').fadeOut(200);
        var loading = ($(this).attr('loading') == 'off') ? 0 : 1;
        if (loading > 0) {
            $('.loading').show();
            box_popup();
        }

        var val = [{name: 'val', value: true}];
        $('#' + IDForm + ' .cinput').each(function (i) {
            var nm = $(this).attr('name')
            var vl = ($(this).attr('val') !== undefined) ? $(this).attr('val') : $(this).val();
            val[i] = {name: nm, value: vl};
        });

        if($('#' + IDForm).attr('fn') !== undefined) {
            val[i+1] = {name: 'fn', value: $('#' + IDForm).attr('fn')};
        }

        var formURL = baseURL + actURL;
        var postData = val;
        var msgRequest = ($('#' + msgBox + '.msg').attr('value') == undefined) ? 'ajaxMessage' : $('#' + msgBox + '.msg').attr('value');

        if($('#' + IDForm).attr('wait') !== undefined)
        {
            var wait = $(this).data('wait');
            if (wait) clearTimeout(wait);

            wait = setTimeout(function () {
                ajaxReqBasic(formURL, postData, msgRequest);
            }, 500);

            $(this).data('wait', wait);
            return false;
        } else {
            ajaxReqBasic(formURL, postData, msgRequest);
        }
    });

    // Post on Keyup
    $(document).on("keyup", ".form_keyup", function (e) {
        e.preventDefault();

        var msgBox = $(this).attr('msg');
        var actURL = $(this).attr('action');
        var baseURL = $('.baseurl').attr('val');

        $('#boxmessage').fadeOut(200);
        var loading = ($(this).attr('loading') === 'off') ? 0 : 1;
        if (loading > 0) {
            $('.loading').show();
            box_popup();
        }

        var nm = $(this).attr('name')
        var val = [{name: 'fn', value: $(this).attr('fn')}, {name: nm, value: $(this).val()}];

        var formURL = baseURL + actURL;
        var postData = val;
        var msgRequest = ($('#' + msgBox + '.msg').attr('value') === undefined) ? 'ajaxMessage' : $('#' + msgBox + '.msg').attr('value');

        var wait = $(this).data('wait');
        if (wait) clearTimeout(wait);

        wait = setTimeout(function () {
            ajaxReqBasic(formURL, postData, msgRequest);
        }, 500);

        $(this).data('wait', wait);
        return false;
    });

    // Basic
    $(document).on("submit", ".form_basic", function (e) {
        e.preventDefault();

        $('#boxmessage').fadeOut(200);
        $('.loading').show();
        box_popup();

        $(this).append('<input type="hidden" name="val" value="true">');

        var formURL = $(this).attr('action');
        var postData = $(this).serializeArray();

        var msgBox = $(this).attr('msg');
        var msgRequest = ($('#' + msgBox + '.msg').attr('value') == undefined) ? 'ajaxMessage' : $('#' + msgBox + '.msg').attr('value');

        ajaxReqBasic(formURL, postData, msgRequest);
    });

    // Multipart
    $(document).on("submit", ".form_multi", function (e) {
        e.preventDefault();

        $('#boxmessage').fadeOut(200);
        $('.loading').show();
        box_popup();

        $(this).append('<input type="hidden" name="val" value="true">');

        var formURL = $(this).attr('action');
        var postData = new FormData(this);

        var msgBox = $(this).attr('msg');
        var msgRequest = ($('#' + msgBox + '.msg').attr('value') == undefined) ? 'ajaxMessage' : $('#' + msgBox + '.msg').attr('value');

        ajaxReqMulti(formURL, postData, msgRequest);
    });

});

function box_popup() {
    $('#mask').remove();

    //Fade in the Popup
    $('.box_popup').fadeIn(300);

    //Set the center alignment padding + border see css style
    var popMargTop = ($('.box_popup').height() + 24) / 2;
    var popMargLeft = ($('.box_popup').width() + 24) / 2;

    $('.box_popup').css({
        'margin-top': -popMargTop,
        'margin-left': -popMargLeft
    });

    // Add the mask to body
    $('body').append('<div id="mask"></div>');
    $('#mask').fadeIn(300);
}

function ajaxOnLoad(ax) {
    var IDForm = $('.' + ax).attr('id');
    if ($('.' + ax).attr('id') == undefined) {
        var IDForm = $('.' + ax).attr('form');
    }

    // Clean Next Attribut
    if ($('.' + ax).attr('clean') != undefined) {
        vp = $('.' + ax).attr('vp');
        cls = $('.' + ax).attr('clean');
        splitID = cls.split(",");
        if (Object.prototype.toString.call(splitID) == '[object Array]') {
            splitID.map(function (v) {
                $('.' + v).each(function () {
                    if ($(this).attr('active') == 'on') {
                        $(this).removeAttr('active');
                        $(this).removeClass(vp)
                    }
                })
            })
        } else {
            $('.' + cls).each(function () {
                if ($(this).attr('active') == 'on') {
                    $(this).removeAttr('active');
                    $(this).removeClass(vp)
                }
            })
        }

        $('#' + cls).remove();
    }

    // Input Set
    if ($('.' + ax).attr('vf') != undefined) {
        vf = $('.' + ax).attr('vf');
        to = $('.' + ax).attr('to');
        val = $('.' + ax).attr('val');

        $('.' + vf + ' .' + to).val(val);
        $('.' + to).val(val);
    }

    // CSS Select
    if ($('.' + ax).attr('point') == "true") {
        vb = $('.' + ax).attr('vb'); // Back to Normal
        vp = $('.' + ax).attr('vp'); // Set to Active
        $('.' + vb).each(function () {
            if ($(this).attr('active') == 'on') {
                $(this).removeAttr('active');
                $(this).removeClass(vp)
            }
        })
        $('#' + IDForm).attr('active', 'on');
        $('#' + IDForm).addClass(vp);
    }

    var msgBox = $('.' + ax).attr('msg');
    var actURL = $('.' + ax).attr('action');
    var baseURL = $('.baseurl').attr('val');

    $('#boxmessage').fadeOut(200);
    var loading = ($('.' + ax).attr('loading') == 'off') ? 0 : 1;
    if (loading > 0) {
        $('.loading').show();
        box_popup();
    }

    var val = [{name: 'val', value: true}];
    $('#' + IDForm + ' .cinput').each(function (i) {
        var nm = $(this).attr('name')
        var vl = ($(this).attr('val') !== undefined) ? $(this).attr('val') : $(this).val();
        val[i] = {name: nm, value: vl};
    });

    if($('#' + IDForm).attr('fn') !== undefined) {
        val[i+1] = {name: 'fn', value: $('#' + IDForm).attr('fn')};
    }

    var formURL = baseURL + actURL;
    var postData = val;
    var msgRequest = ($('#' + msgBox + '.msg').attr('value') == undefined) ? 'ajaxMessage' : $('#' + msgBox + '.msg').attr('value');

    if($('#' + IDForm).attr('wait') !== undefined)
    {
        var wait = $(this).data('wait');
        if (wait) clearTimeout(wait);

        wait = setTimeout(function () {
            ajaxReqBasic(formURL, postData, msgRequest);
        }, 500);

        $(this).data('wait', wait);
        return false;
    } else {
        ajaxReqBasic(formURL, postData, msgRequest);
    }
}

function ajaxReqGet(formURL, msgRequest) {
    var request;
    if (request) {
        request.abort();
    }
    request = $.get(formURL);

    var fn = window[msgRequest];
    fn(request);

    return false;
}

function ajaxReqBasic(formURL, postData, msgRequest) {
    var scn = $('.sctoken').attr('name');
    var sch = $('.sctoken').attr('value');
    var sct = {name: scn, value: sch};

    cnPost = postData.concat(sct);

    var request;
    if (request) {
        request.abort();
    }
    request = $.post(formURL, cnPost);

    var fn = window[msgRequest];
    fn(request);

    return false;
}

function ajaxReqMulti(formURL, postData, msgRequest) {
    var request;
    if (request) {
        request.abort();
    }
    request = $.ajax({
        type: "post",
        url: formURL,
        data: postData,
        mimeType: "multipart/form-data",
        contentType: false,
        cache: false,
        processData: false
    });

    var fn = window[msgRequest];
    fn(request);

    return false;
}

function ajaxMessage(request) {
    request.done(function (msg) {
        if (Object.prototype.toString.call(msg) == '[object String]') {
            msg = JSON.parse(msg);
        }

        if (msg.xClear == undefined && msg.xCss == 'boxsuccess') {
            $('.cinput').val('');
        }

        $('#mask, .box_popup, .loading').fadeOut(300, function () {
            $('#mask').remove();
        });

        if (msg.xAlert == undefined && msg.xMsg != undefined) {
            $('#boxmessage').fadeIn(500).html("<div class='" + msg.xCss + "'>" + msg.xMsg + "</div>");
            $('body').animate({
                scrollTop: eval($('#boxmessage').offset().top - 999)
            }, 1000);
        }

        responseData(msg);
    });

    return false;
}

function ajaxMsgForm(request) {
    request.done(function (msg) {
        if (Object.prototype.toString.call(msg) == '[object String]') {
            msg = JSON.parse(msg);
        }

        if (msg.xClear == undefined && msg.xCss == 'boxsuccess') {
            $('.cinput').val('');
        }

        $('#mask, .box_popup, .loading').fadeOut(300, function () {
            $('#mask').remove();
        });

        if (msg.xAlert == undefined && msg.xMsg != undefined) {
            $('#boxmsgform').fadeIn(500).html("<div class='" + msg.xCss + "'>" + msg.xMsg + "</div>");
        }

        responseData(msg);
    });

    return false;
}

function ajaxMsgAcc(request) {
    request.done(function (msg) {
        if (Object.prototype.toString.call(msg) == '[object String]') {
            msg = JSON.parse(msg);
        }

        if (msg.xClear == undefined && msg.xCss == 'boxsuccess') {
            $('.cinput').val('');
        }

        $('#mask, .box_popup, .loading').fadeOut(300, function () {
            $('#mask').remove();
        });

        if (msg.xAlert == undefined && msg.xMsg != undefined) {
            $('#boxmsgacc').fadeIn(500).html("<div class='" + msg.xCss + "'>" + msg.xMsg + "</div>");
            $('body').animate({
                scrollTop: eval($('#boxmsgacc').offset().top - 999)
            }, 1000);
        }

        responseData(msg);
    });

    return false;
}

function responseData(msg) {
    $('.err').fadeOut('fast').html('');

    if (msg.xMsg != undefined) {
        xurl = $('.baseurl').attr('val');
        $('.rcapthca').html('<img src="' + xurl + 'request/captcha">');
    }

    if (msg.xAlert == undefined && msg.xDirect != undefined) {
        window.location = msg.xDirect;
    }

    if (msg.xAlert != undefined) {
        var sTitle = (msg.xCss == 'boxsuccess') ? 'Success' : 'Error';
        var sType = (msg.xCss == 'boxsuccess') ? 'success' : 'error';
        swal({
                title: sTitle,
                text: msg.xMsg,
                type: sType,
                closeOnConfirm: true,
                html: true
            },
            function () {
                if (msg.xDirect != undefined) {
                    window.location = msg.xDirect;
                }
            });
    }

    if (msg.xHtml != undefined) {
        if (msg.xAppend != undefined) {
            $('#' + msg.xClass + ' .loadhide').remove();
            $('#' + msg.xClass).hide().fadeIn('medium').append(msg.xHtml);
        } else {
            $('#' + msg.xClass).hide().fadeIn('medium').html(msg.xHtml);
        }
    }

    if (msg.xSplit != undefined) {
        $.each(msg.xData, function (v, n) {
            if (Object.prototype.toString.call(n) == '[object Object]') {
                $.each(n, function (v1, n1) {
                    $('.' + v + ' .' + v1).fadeIn('medium').html(n1);
                })
            } else {
                $('.' + v).fadeIn('medium').html(n);
            }
        })
    }

    if (msg.xUrlhash != undefined) {
        urlUpdate(urlSplit(msg.xUrlhash));
    }
}

function ajaxMsgPopup(request) {
    request.done(function (msg) {
        $('.show_popup').attr("show", "active");
        $('.show_popup').html(msg.vHtml).show();
        box_popup();

        $('.loading').hide();
        box_popup();
    });
}

function urlSplit(urlx) {
    var split = urlx.split("/");
    var urlNew = '';
    var ux = 0;
    split.map(function (uri) {
        if (ux > 0) {
            urlNew = urlNew + '/' + uri;
        } else {
            urlNew = uri;
        }
        ux++;
    })

    return urlNew;
}

var urlHistory = '';
function urlUpdate(urlPath) {
    urlHistory = (history.state != null) ? history.state.url : '';
    history.pushState({url: "" + urlPath + ""}, "", urlPath);
}

function actChain(urlx, valx, showx, cleanx) {
    var baseURL = $('.baseurl').attr('val');
    var postData;

    var dataID;
    var splitID = valx.split("/");
    if (Object.prototype.toString.call(splitID) == '[object Array]') {
        var valData = [];
        splitID.forEach(function (val, i) {
            valData[i] = {name: val, value: $('#' + val).val()};

            if (i == splitID.length - 1) {
                dataID = val;
            }
        });

        var show = {name: 'show', value: showx};
        postData = valData.concat(show);
    }

    if (cleanx != undefined) {
        var splitClean = cleanx.split("/");
        if (Object.prototype.toString.call(splitClean) == '[object Array]') {
            splitClean.forEach(function (val) {
                var cl = 0;
                switch ($('#' + val)[0].nodeName) {
                    case 'INPUT':
                    case 'SELECT':
                    case 'TEXTAREA':
                        cl = 1;
                        break;
                }

                if (cl > 0) {
                    if ($('#' + val).val() != "") {
                        $('#' + val).val("");
                        $('#' + val).change();
                    }
                } else {
                    $('#' + val).html("");
                }
            });
        }
    }

    $('#boxmessage').fadeOut(200);
    if (urlx == false) {
        return false;
    }

    var loading = ($('#' + dataID).attr('loading') == undefined) ? 0 : 1;
    if (loading > 0) {
        $('.loading').show();
        box_popup();
    }

    var request;
    if (request) {
        request.abort();
    }
    request = $.post(baseURL + urlx, postData);

    ajaxMessage(request);

    return false;
}

function rmdata(val) {
    var cl = 0;
    switch ($('#' + val)[0].nodeName) {
        case 'INPUT':
        case 'SELECT':
        case 'TEXTAREA':
            cl = 1;
            break;
    }

    if (cl > 0) {
        if ($('#' + val).val() != "") {
            $('#' + val).val("");
            if (val == 'namafile') {
                $('.' + val).removeAttr('style');
            }
        }
    } else {
        $('#' + val).html("");
    }
}

function tabmenu(id, beforeClick, afterClick) {
    $('#boxtab span, #boxtab a').each(function () {
        if ($(this).attr('active') == 'true') {
            var idx = $(this).attr('id');

            $('#' + idx).removeAttr('active');
            $('#' + idx).removeAttr('class');
            $('#' + idx).addClass(beforeClick);

            if ($('div#' + idx).html() != undefined) {
                $('div#' + idx).fadeOut(0);
            }


            if ($('table#' + idx).html() != undefined) {
                $('table#' + idx).fadeOut(0);
            }

            var fltab = idx;
        }
    });

    afterClick = (afterClick != undefined) ? afterClick : beforeClick;
    $('#' + id).attr('active', 'true');
    $('#' + id).addClass(afterClick);

    if ($('div#' + id).html() != undefined) {
        $('div#' + id).fadeIn('fast');
    }

    if ($('table#' + id).html() != undefined) {
        $('table#' + id).fadeIn('fast');
    }
}

function tabflag(id) {
    $('#boxbutton ul li a').each(function () {
        if ($(this).attr('class') == 'flag-active') {
            var idx = $(this).attr('id');

            $('#' + idx).removeAttr('style');
            $('#' + idx).removeAttr('class');
            $('div#' + idx).fadeOut(0);

            var fltab = idx;
        }
    });

    $('#' + id).css('background', '#40435e');
    $('#' + id).attr('class', 'flag-active');
    $('div#' + id).fadeIn('fast');
}

function readPic(input, val, def) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            if (val == undefined) {
                if (input.files[0].type == 'image/png') {
                    $('.ffiles .zbox').append("<a href='javascript:void(0)' class='pos-abs delete' onclick='rmPic()'><i class='fa fa-trash fa-fw'></i></a>");
                    $('.ffiles .namafile').css({'display': 'block', 'background-image': 'url(' + e.target.result + ')'});
                } else {
                    swal({
                        title: "Error",
                        text: "File yang diupload harus bertipe *png",
                        type: "error",
                        timer: 5000
                    })
                }
            } else {
                var i = 0;
                $('.img-ds').each(function () {
                    i++;
                })

                if (i < 5) {
                    if (def == undefined) {
                        var imgready = $('.img-pic-' + val).attr('ready');
                        var imgval = val + 1;
                        var imgdef = $('.img-pic-' + val).attr('default');

                        if (imgready == undefined) {
                            $('.img-pic-' + val).attr('ready', true);
                            $('.img-pic-' + val + ' .zbox').append("<a href='javascript:void(0)' class='pos-abs delete' onclick='rmPic(" + val + ")'><i class='fa fa-trash fa-fw'></i></a>");
                            $('.img-pic-' + val + ' .zbox').append("<a href='javascript:void(0)' div class='zbox default' onclick='dfPic(" + val + ")'>Set as Default</a>");
                        }
                        $('.img-pic-' + val + ' .namafile').css({'display': 'block', 'background-image': 'url(' + e.target.result + ')'});

                        if (imgready == undefined) {
                            $('.img .design').append("<label class='col-lg-2 col-md-3 col-sm-3 col-xs-3 cl-pad-lr img-ds img-pic-" + imgval + "' default='" + imgdef + "' for='img-sh-" + imgval + "'>"
                                + "<div class='mg-lr-4'>"
                                + "<div class='zbox pos-rel mg-b-10'>"
                                + "<label class='pos-abs add' for='img-sh-" + imgval + "'><i class='fa fa-plus fa-fw'></i></label>"
                                + "<div class='pad-all-10'>"
                                + "<span class='lazy desain namafile' style='background-image: url(" + imgdef + ")'></span>"
                                + "</div>"
                                + "<input type='file' name='fupload[]' id='img-sh-" + imgval + "' onchange='readPic(this, " + imgval + ")' style='display: none'>"
                                + "</div>"
                                + "</div>"
                                + "</label>")
                        }
                    } else {
                        var imgready = $('.ff-pic-' + val).attr('ready');
                        var imgval = val + 1;
                        var imgdef = $('.ff-pic-' + val).attr('default');

                        if (imgready == undefined) {
                            $('.ff-pic-' + val).attr('ready', true);
                            $('.ff-pic-' + val + ' .zbox').append("<a href='javascript:void(0)' class='pos-abs delete' onclick='rmPic(" + val + ", true)'><i class='fa fa-trash fa-fw'></i></a>");
                        }
                        $('.ff-pic-' + val + ' .namafile').css({'display': 'block', 'background-image': 'url(' + e.target.result + ')'});

                        if (imgready == undefined) {
                            $('.img .original').append("<label class='col-lg-2 col-md-3 col-sm-3 col-xs-3 cl-pad-lr ff-ds ff-pic-" + imgval + "' default='" + imgdef + "' for='ff-sh-" + imgval + "'>"
                                + "<div class='mg-lr-4'>"
                                + "<div class='zbox pos-rel mg-b-10'>"
                                + "<label class='pos-abs add' for='ff-sh-" + imgval + "'><i class='fa fa-plus fa-fw'></i></label>"
                                + "<div class='pad-all-10'>"
                                + "<span class='lazy desain namafile' style='background-image: url(" + imgdef + ")'></span>"
                                + "</div>"
                                + "<input type='file' name='ffiles[]' id='ff-sh-" + imgval + "' onchange='readPic(this, " + imgval + ", true)' style='display: none'>"
                                + "</div>"
                                + "</div>"
                                + "</label>")
                        }
                    }
                } else {
                    swal({
                        title: "Error",
                        text: "Maximum file yang diupload hanya boleh 4 gambar",
                        type: "error",
                        timer: 5000
                    })
                }
            }
        };

        reader.readAsDataURL(input.files[0]);
    }
}

function dfPic(val) {
    $('.img-ds').each(function (i) {
        var ds = $(this).attr('for');
        ds = ds.split('-');

        if (ds[2] == val) {
            $('.img-pic-' + ds[2] + ' .default').attr('id', 'active');
            $('#is_default').val(i);
        } else {
            $('.img-pic-' + ds[2] + ' .default').removeAttr('id');
        }
    })
}

function rmPic(val, def) {
    if (val == undefined) {
        var imgdef = $('.ffiles').attr('default');
        $('.ffiles .delete').remove();
        $('.ffiles .namafile').css({'display': 'block', 'background-image': 'url(' + imgdef + ')'});
    } else {
        if (def == undefined) {
            $('.img-pic-' + val).remove();
        } else {
            $('.ff-pic-' + val).remove();
        }
    }
}