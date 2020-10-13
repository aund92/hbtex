! function(a) {
    "use strict";
    jQuery(document).on("ready", function() {
        a("a.smooth-scroll").on("click", function(e) {
            var t = a(this);
            a("html, body").stop().animate({
                scrollTop: a(t.attr("href")).offset().top - 60
            }, 1200, "easeInOutExpo"), e.preventDefault()
        }), a("body").scrollspy({
            target: ".navbar-collapse",
            offset: 195
        }), a(".testimonilas-active").owlCarousel({
            loop: !0,
            margin: 15,
            center: !0,
            mouseDrag: !0,
            autoplay: !0,
            responsive: {
                210: {
                    items: 1
                },
                320: {
                    items: 1
                },
                479: {
                    items: 2,
                    center: !1
                },
                768: {
                    items: 2,
                    center: !1
                },
                980: {
                    items: 2,
                    center: !1
                },
                1199: {
                    items: 3
                }
            }
        }), a(".brand-product-active").owlCarousel({
            loop: !0,
            margin: 10,
            mouseDrag: !0,
            autoplay: !0,
            responsive: {
                210: {
                    items: 1
                },
                320: {
                    items: 2
                },
                479: {
                    items: 2
                },
                768: {
                    items: 3
                },
                980: {
                    items: 4
                },
                1199: {
                    items: 5
                }
            }
        }), a(window).on("scroll", function() {
            a(window).scrollTop() < 70 ? a(".site-header").removeClass("sticky") : a(".site-header").addClass("sticky")
        }), a(function() {
            function e(e, t) {
                e.each(function() {
                    var e = a(this),
                        o = e.attr("data-animation"),
                        i = e.attr("data-animation-delay");
                    e.css({
                        "-webkit-animation-delay": i,
                        "-moz-animation-delay": i,
                        "animation-delay": i
                    }), (t || e).waypoint(function() {
                        e.addClass("animated").css("visibility", "visible"), e.addClass("animated").addClass(o)
                    }, {
                        triggerOnce: !0,
                        offset: "90%"
                    })
                })
            }
            e(a(".animation")), e(a(".staggered-animation"), a(".staggered-animation-wrap"))
        }), a.scrollUp({
            scrollText: '<i class="icofont icofont-swoosh-up"></i>'
        }), a(".counter").counterUp({
            delay: 10,
            time: 1e3
        }), a(".navbar-toggler").on("click", function() {
            a(".navbar-toggler").toggleClass("cg")
        }), a(".main-menu ul > li.nav-item > a.nav-link").on("click", function() {
            a(".navbar-collapse").removeClass("show"), a(".navbar-toggler").removeClass("cg")
        }), a('[data-toggle="tooltip"]').tooltip(), a(".player").mb_YTPlayer(), a(".video-pop").magnificPopup({
            type: "iframe",
            removalDelay: 300,
            mainClass: "mfp-fade"
        }), jQuery(window).load(function() {
            jQuery(".softbay-preloder").fadeOut(300)
        })
    })
}(jQuery);
//# sourceMappingURL=app.js.map
var TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 200 - Math.random() * 200;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
    }

    setTimeout(function() {
    that.tick();
    }, delta);
};

window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #ff8d12}";
    document.body.appendChild(css);
};