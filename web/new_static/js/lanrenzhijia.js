(function(a) {
    a.fn.dwseeTopBottomMenu = function(b) {
        var c = a.extend({
            "menucontainer": ".TopBottomMenu",
            "boxsize": 40,
            "boxbackground": "#ffffff",
            "position": "right",
            "openmenusize": 500,
            "topicon": "/new_static/images/up_arrow.png",
            "menuicon": "/new_static/images/menu_icon.png",
            "bottomicon": "/new_static/images/down_arrow.png"
        },
        b);
        a("body").prepend('<div id="top-bottom-menu"><div id="dstbm-top"></div><div id="dstbm-menu"> <div id="dstbmmenu"></div></div><div id="dstbm-bottom"></div></div>');
        a(c.menucontainer).clone().appendTo("#dstbmmenu");
        a(c.menucontainer).hide();
        a("#dstbmmenu > " + c.menucontainer).css("display", "block");
        a("#top-bottom-menu").css("height", c.boxsize + "px").css("bottom", (c.boxsize * 2) + 60 + "px").css("line-height", c.boxsize + "px").css(c.position, "10px");
        a("#top-bottom-menu #dstbm-top").css("height", c.boxsize + "px").css("width", c.boxsize + "px").css(c.position, "0").css("background", "url('" + c.topicon + "') center center no-repeat").css("background-color", c.boxbackground);
        a("#top-bottom-menu #dstbm-bottom").css("height", c.boxsize + "px").css("width", c.boxsize + "px").css(c.position, "0").css("top", (c.boxsize * 2) + 2 + "px").css("background", "url('" + c.bottomicon + "') center center no-repeat").css("background-color", c.boxbackground);
        a("#top-bottom-menu #dstbm-menu").css("height", c.boxsize + "px").css("width", c.boxsize + "px").css(c.position, "0").css("top", (c.boxsize + 1) + "px").css("background", "url('" + c.menuicon + "') center center no-repeat").css("background-color", c.boxbackground);
        a(window).scroll(function() {
            var d = a(window).height() / 2;
            if (a(window).scrollTop() > 200) {
                a("#dstbm-top").fadeIn("slow")
            } else {
                a("#dstbm-top").fadeOut("slow")
            }
            if ((a(window).height() + a(window).scrollTop()) >= a(document).height()) {
                a("#dstbm-bottom").fadeOut("slow")
            } else {
                a("#dstbm-bottom").fadeIn("slow")
            }
        });
        a("#dstbm-top").click(function() {
            a("html, body").animate({
                scrollTop: "0"
            })
        });
        a("#dstbm-bottom").click(function() {
            a("html, body").animate({
                scrollTop: a("body").height()
            })
        });
        a("#dstbm-menu").click(function() {
            if (a(this).width() == c.boxsize) {
                a("#dstbm-menu #dstbmmenu").css("display", "block");
                a("#dstbm-menu").css("background", c.boxbackground + " url('') center center no-repeat").css("cursor", "default");
                a(this).animate({
                    width: c.openmenusize + "px"
                })
            }
        });
        a("#dstbm-menu").hover(function() {},
        function() {
            if (a(this).width() == c.openmenusize) {
                a("#dstbm-menu #dstbmmenu").css("display", "block");
                a("#dstbm-menu").css("background", c.boxbackground + " url('') center center no-repeat").css("cursor", "pointer");
                a(this).animate({
                    width: c.boxsize + "px"
                },
                function() {
                    a("#dstbm-menu #dstbmmenu").css("display", "none");
                    a("#dstbm-menu").css("background", c.boxbackground + " url('" + c.menuicon + "') center center no-repeat")
                })
            }
        })
    }
})(jQuery);