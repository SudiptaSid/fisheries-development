// Preloader
jQuery(window).on("load", function () {
  jQuery(".preloader").fadeOut(500);
});

// Sticky Navbar
$(window).scroll(function () {
  if ($(window).scrollTop() >= 100) {
    $(".mainHeader .navbar").addClass("sticky");
  } else {
    $(".mainHeader .navbar").removeClass("sticky");
  }
});

// Dropdown
$("li.dropdown").hover(
  function () {
    $(this).find(".dropdown-menu").first().stop(true, true).slideDown(150);
  },
  function () {
    $(this).find(".dropdown-menu").first().stop(true, true).slideUp(105);
  }
);

// Search Header - Magnific Popup
$(document).ready(function () {
  $(".searchToggle").magnificPopup({});
});

// Back to top
jQuery(function ($) {
  if ($("#backToTop").length) {
    var scrollTrigger = 100, // px
      backToTop = function () {
        var scrollTop = $(window).scrollTop();
        if (scrollTop > scrollTrigger) {
          $("#backToTop").addClass("show");
        } else {
          $("#backToTop").removeClass("show");
        }
      };
    backToTop();
    $(window).on("scroll", function () {
      backToTop();
    });
    $("#backToTop").on("click", function (e) {
      e.preventDefault();
      $("html,body").animate(
        {
          scrollTop: 0,
        },
        1000
      );
    });
  }
});

// Video Control
(function () {
  "use strict";

  // Does the browser actually support the video element?
  var supportsVideo = !!document.createElement("video").canPlayType;

  if (supportsVideo) {
    // Obtain handles to main elements
    var videoContainer = document.getElementById("heroBannerOne");
    var video = document.getElementById("heroVideo");
    var videoControls = document.getElementById("videoControls");

    // Hide the default controls
    video.controls = false;

    // Display the user defined video controls
    videoControls.setAttribute("data-state", "visible");

    // Obtain handles to buttons and other elements
    var playpause = document.getElementById("playpause");
    var mute = document.getElementById("mute");

    // Only add the events if addEventListener is supported (IE8 and less don't support it, but that will use Flash anyway)
    if (document.addEventListener) {
      // Changes the button state of certain button's so the correct visuals can be displayed with CSS
      var changeButtonState = function (type) {
        // Play/Pause button
        if (type == "playpause") {
          if (video.paused || video.ended) {
            playpause.setAttribute("data-state", "play");
          } else {
            playpause.setAttribute("data-state", "pause");
          }
        }
        // Mute button
        else if (type == "mute") {
          mute.setAttribute("data-state", video.muted ? "unmute" : "mute");
        }
      };

      // Add event listeners for video specific events
      video.addEventListener(
        "play",
        function () {
          changeButtonState("playpause");
        },
        false
      );
      video.addEventListener(
        "pause",
        function () {
          changeButtonState("playpause");
        },
        false
      );

      // Add events for all buttons
      playpause.addEventListener("click", function (e) {
        if (video.paused || video.ended) video.play();
        else video.pause();
      });
      mute.addEventListener("click", function (e) {
        video.muted = !video.muted;
        changeButtonState("mute");
      });
    }
  }
})();

// Nice Select
$("select.form-control").niceSelect();

// Datepicker
$(function () {
  $(".datepicker").datepicker({
    dateFormat: "dd-mm-yy",
    changeMonth: true,
  });

  $(".datepicker").datepicker("setDate", "today");
});

// Quantity
$(".add").click(function () {
  if ($(this).prev().val() < 10) {
    $(this)
      .prev()
      .val(+$(this).prev().val() + 1);
  }
});
$(".sub").click(function () {
  if ($(this).next().val() > 0) {
    if ($(this).next().val() > 0)
      $(this)
        .next()
        .val(+$(this).next().val() - 1);
  }
});

// Festival Slider Left
$(".festivalSliderLeft").slick({
  arrows: true,
  dots: false,

  infinite: true,
  autoplay: true,
  autoplaySpeed: 0,
  speed: 4000,
  pauseOnHover: true,

  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1080,
      settings: {
        slidesToShow: 4,
      },
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 3,
      },
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
      },
    },
    {
      breakpoint: 650,
      settings: {
        slidesToShow: 1,
      },
    },
  ],
});

// Festival Slider Right
$(".festivalSliderRight").slick({
  arrows: true,
  dots: false,
  rtl: true,

  infinite: true,
  autoplay: true,
  autoplaySpeed: 0,
  speed: 4000,
  pauseOnHover: true,

  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1080,
      settings: {
        slidesToShow: 4,
      },
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 3,
      },
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
      },
    },
    {
      breakpoint: 650,
      settings: {
        slidesToShow: 1,
      },
    },
  ],
});

// Explore Slider One
$(".exploreSlider").slick({
  arrows: true,
  dots: false,

  infinite: true,
  autoplay: true,
  autoplaySpeed: 0,
  speed: 4000,
  pauseOnHover: true,

  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
      },
    },
    {
      breakpoint: 650,
      settings: {
        slidesToShow: 1,
      },
    },
  ],
});

// Brand Slider
$(".homeSlider").slick({
  arrows: true,
  dots: false,

  slidesToShow: 1,
  slidesToScroll: 1,

  infinite: true,
  speed: 300,
  autoplay: true,
  autoplaySpeed: 1000,
});

// Press Slider
$(".pressSlider").slick({
  arrows: false,
  dots: false,

  infinite: true,
  speed: 300,
  autoplay: true,
  autoplaySpeed: 1000,

  slidesToShow: 6,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1050,
      settings: {
        slidesToShow: 5,
      },
    },
    {
      breakpoint: 850,
      settings: {
        slidesToShow: 4,
      },
    },
    {
      breakpoint: 650,
      settings: {
        slidesToShow: 3,
      },
    },
    {
      breakpoint: 450,
      settings: {
        slidesToShow: 3,
      },
    },
  ],
});

// Counter
$(".counter").each(function () {
  var $this = $(this),
    countTo = $this.attr("data-count");
  $({ countNum: $this.text() }).animate(
    {
      countNum: countTo,
    },
    {
      duration: 5000,
      easing: "linear",
      step: function () {
        $this.text(Math.floor(this.countNum));
      },
      complete: function () {
        $this.text(this.countNum);
        //alert('finished');
      },
    }
  );
});
