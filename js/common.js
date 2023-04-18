
$(document).ready(function () {

  $(".animate-slider").slick({
    dots: true,
  }); 

  $slider.slick({
    infinite: false,
    autoplay: false,
    centerMode: true,
    slidesToShow: 3,
    centerPadding: 0,
    customPaging: function (slider, i) {
      return (
        '<button class="tab">' +
        $(slider.$slides[i]).attr("title") +
        '<i class="fa fa-sort-asc"></i></button>'
      );
    },
    dots: true,
    prevArrow:
      '<button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" style=""><span class="line"></span><span class="line"></span><div class="arrow"></div></button>',
    nextArrow:
      '<button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Previous" role="button" style=""><span class="line"></span><span class="line"></span><div class="arrow"></div></button>',
    responsive: [
      {
        breakpoint: 425,
        settings: {
          slidesToShow: 1,
          centerMode: false,
        },
      },
    ],
  });
  /* end progress slider*/
});




$(document).ready(function () {
  AOS.init();
});

setRandomClass();
setInterval(function () {
  setRandomClass();
}, 4000); //number of milliseconds (2000 = 2 seconds)

function setRandomClass() {
  var ul = $(".flip-gallery");
  var items = ul.find(".flip-content");
  var number = items.length;
  var random = Math.floor(Math.random() * number);
  items.removeClass("flip-hover");
  items.eq(random).addClass("flip-hover");
}

$(".nav-tabs a").on("shown.bs.tab", function (e) {
  $(".nav-tabs li").removeClass("click-active");
  $(this).parent("li").addClass("click-active");
});
$(".nav-tabs a").on("hidden.bs.tab", function (event) {
  $(".tab-content .tab-pane").removeClass("active-animation");
  $(".tab-content .tab-pane").removeClass("active-animation-prev");

  var href_id = $(this).attr("href");
  var split_id = href_id.split("#");
  $(".tab-content .tab-pane").each(function () {
    if ($(this).attr("id") == split_id[1]) {
      $(this).addClass("active-animation");
      if (event.target.id > event.relatedTarget.id) {
        $(this).addClass("active-animation-prev");
      }
    }
  });
  setTimeout(function () {
    $(".tab-content .tab-pane").removeClass("active-animation");
    $(".tab-content .tab-pane").removeClass("active-animation-prev");
  }, 800);
});





