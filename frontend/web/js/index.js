$(function () {
  $(".none").on("input",function () {
    $('.txt-16,.txt-18,.txt-12,.txt-19,.txt-14 ,.txt-20,.txt-22,.txt-24').css("font-size", $(this).val() + "px");
  }); 

  $(window).on('load',function(){
    setTimeout(function(){ 
    $('#animationWindow').fadeOut();
    });
  });

  $('.menu .dropdown').on('show.bs.dropdown', function(e){
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown(400);
  });
  
  $('.menu .dropdown').on('hide.bs.dropdown', function(e){
    $(this).find('.dropdown-menu').first().stop(true, true).slideUp(400);
  });

  $('.dropdown-submenu a.dropdown-item').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });


  $('#gray').click(function () {
    $('body').toggleClass('gray')
    $('body').removeClass('darck')
    $('body').removeClass('mode')
  })

  $('#mode').click(function () {
    $('body').toggleClass('mode')
    $('body').removeClass('gray')
    $('body').removeClass('darck')
  })
  $('#image').click(function () {
    $('body').toggleClass('image')
  })
  $('#normal').click(function () {
    $('body').removeClass('mode')
    $('body').removeClass('darck')
    $('body').removeClass('gray')
  })

  $('#gray-t').click(function () {
    $('body').toggleClass('gray')
    $('body').removeClass('darck')
    $('body').removeClass('mode')
  })

  $('#mode-t').click(function () {
    $('body').toggleClass('mode')
    $('body').removeClass('gray')
    $('body').removeClass('darck')
  })
  $('#image-t').click(function () {
    $('body').toggleClass('image')
  })
  $('#normal-t').click(function () {
    $('body').removeClass('mode')
    $('body').removeClass('darck')
    $('body').removeClass('gray')
  })


});
// var dt = new Date();

// if (18 < dt.getHours()) {
//   document.querySelector('body').classList.add("mode");
// } else {
//   document.querySelector('body').classList.remove("mode");

// }



// Tabs
const tabBtns = document.querySelectorAll(".tabs__btn");
const tabPanes = document.getElementsByClassName("tabs__pane");

let fadeTime = 200;

function fadeOut(target) {
	target.style.opacity = 1;
	target.style.transition = `opacity ${fadeTime}ms`;
	target.style.opacity = 0;
	setTimeout(() => {
		target.style.display = "none";
	}, fadeTime);
}

function fadeIn(target) {
	target.style.opacity = 0;
	target.style.transition = `opacity ${fadeTime}ms`;
	target.style.opacity = 1;
	setTimeout(() => {
		target.style.display = "block";
	}, fadeTime);
}

function triggerTab(elt) {
	elt.preventDefault();

	tabBtns.forEach((btn) => {
		btn.classList.remove("is-active");
		btn.setAttribute("aria-selected", false);
	});

	[].forEach.call(tabPanes, (pane) => {
		fadeOut(pane);
	});

	elt.target.classList.add("is-active");
	elt.target.setAttribute("aria-selected", true);
	let clickedTab = elt.target.dataset.tabTarget;
	fadeIn(document.querySelector(`#${clickedTab}`));
}

tabBtns.forEach((tab) => {
	tab.addEventListener("click", triggerTab);
});








//menu
$(".menu-h").click(function () {
  $(".menu-l").addClass("active");
  $(".bg-p").toggleClass("active");
});
$(".mod").click(function () {
  $(".modal-search").toggleClass("active");
  $(".bg-m").toggleClass("active");
  $(".menu-l").removeClass("active");
});
$(".w-in").click(function () {
  $(".modal-sign").toggleClass("active");
  $(".bg-m").toggleClass("active");
});
$(".sign-w").click(function () {
  $(".modal-reg-one").toggleClass("active");
  $(".bg-m").addClass("active");
  $(".modal-sign").removeClass("active");
});

$(".bg-p").click(function () {
  $(this).removeClass("active");
  $(".menu-l").removeClass("active");
});
$(".back").click(function () {
  $(".bg-p").removeClass("active");
  $(".bg-m").removeClass("active");
  $(".menu-l").removeClass("active");
  $(".modal-sign").removeClass("active");
  $(".modal-search").removeClass("active");
  $(".modal-last").removeClass("active");
  $(".modal-reg-one").removeClass("active");

});



//acrdion

const accordionBtns = document.querySelectorAll(".item-header");

accordionBtns.forEach((accordion) => {
  accordion.onclick = function () {
    this.classList.toggle("active");

    let content = this.nextElementSibling;
    console.log(content);

    if (content.style.maxHeight) {
      //this is if the accordion is open
      content.style.maxHeight = null;
    } else {
      //if the accordion is currently closed
      content.style.maxHeight = content.scrollHeight + "px";
      console.log(content.style.maxHeight);
    }
  };
});

let i = document.querySelector('.cah'),
o = document.querySelector('output');

o.innerHTML = i.value;

// use 'change' instead to see the difference in response
i.addEventListener('input', function () {
o.innerHTML = i.value;
}, false);


// root.style.setProperty('--main-color', '#88d8b0');

//scrollreveal

window.sr = ScrollReveal({ reset: false });
sr.reveal('.img-bg-r', { origin: 'right', opacity: 0, distance: '200px', duration: 2000 });
sr.reveal('.m1', { origin: 'right', opacity: 0, delay: 3000, distance: '100px', duration: 1500 });
sr.reveal('.m2', { origin: 'right', opacity: 0, delay: 3200, distance: '100px', duration: 1500 });
sr.reveal('.m3', { origin: 'right', opacity: 0, delay: 3400, distance: '100px', duration: 1500 });
sr.reveal('.m4', { origin: 'right', opacity: 0, delay: 3600, distance: '100px', duration: 1500 });

sr.reveal('.m5', { origin: 'bottom', opacity: 0, delay: 2000, distance: '50px', duration: 1500 });
sr.reveal('.m6', { origin: 'bottom', opacity: 0, delay: 2200, distance: '50px', duration: 1500 });
sr.reveal('.m7', { origin: 'bottom', opacity: 0, delay: 2400, distance: '50px', duration: 1500 });
sr.reveal('.m8', { origin: 'bottom', opacity: 0, delay: 2600, distance: '50px', duration: 1500 });
sr.reveal('.m9', { origin: 'bottom', opacity: 0, delay: 2800, distance: '50px', duration: 1500 });
sr.reveal('.ab', { origin: 'bottom', opacity: 0, delay: 300, distance: '100px', duration: 1500 });
sr.reveal('.ab2', { origin: 'bottom', opacity: 0, delay: 600, distance: '100px', duration: 1500 });
sr.reveal('.abd', { origin: 'bottom', opacity: 0, delay: 600, distance: '500px', duration: 2500 });
sr.reveal('.at2', { origin: 'top', opacity: 0, delay: 500, duration: 1500 });
sr.reveal('.ab3', { origin: 'bottom', opacity: 0, delay: 900, distance: '100px', duration: 1500 });
sr.reveal('.ab4', { origin: 'bottom', opacity: 0, delay: 1200, distance: '100px', duration: 1500 });
sr.reveal('.ab5', { origin: 'bottom', opacity: 0, delay: 1500, distance: '50px', duration: 1500 });
sr.reveal('.ab6', { origin: 'bottom', opacity: 0, delay: 1200, distance: '50px', duration: 1500 });
sr.reveal('.ab7', { origin: 'bottom', opacity: 0, delay: 1300, distance: '50px', duration: 1500 });
sr.reveal('.ab8', { origin: 'bottom', opacity: 0, delay: 1400, distance: '50px', duration: 1500 });
sr.reveal('.at', { origin: 'top', opacity: 0, distance: '100px', duration: 2500 });
sr.reveal('.at2', { origin: 'top', opacity: 0, distance: '100px', duration: 2800 });
sr.reveal('.ar', { origin: 'right', opacity: 0, delay: 300, distance: '100px', duration: 1500 });
sr.reveal('.ar2', { origin: 'right', opacity: 0, delay: 600, distance: '0px', duration: 1500 });
sr.reveal('.ar3', { origin: 'right', opacity: 0, delay: 900, distance: '100px', duration: 1500 });
sr.reveal('.ar4', { origin: 'right', opacity: 0, delay: 1200, distance: '100px', duration: 1500 });
sr.reveal('.al', { origin: 'left', opacity: 0, distance: '80px', duration: 2000 });
sr.reveal('.al2', { origin: 'left', opacity: 0, distance: '80px', duration: 2400 });
sr.reveal('.al3', { origin: 'left', opacity: 0, distance: '80px', duration: 2800 });


var a = 0;
$(window).scroll(function () {
  var oTop = $("#counter-box").offset().top - window.innerHeight;
  if (a == 0 && $(window).scrollTop() > oTop) {
    $(".counter").each(function () {
      var $this = $(this),
        countTo = $this.attr("data-number");
      $({
        countNum: $this.text()
      }).animate(
        {
          countNum: countTo
        },

        {
          duration: 2000,
          easing: "swing",
          step: function () {
            //$this.text(Math.ceil(this.countNum));
            $this.text(
              Math.ceil(this.countNum).toLocaleString("en")
            );
          },
          complete: function () {
            $this.text(
              Math.ceil(this.countNum).toLocaleString("en")
            );
            //alert('finished');
          }
        }
      );
    });
    a = 1;
  }
});



// swiper

var swiper = new Swiper(".my-swww", {
  // Optional parameters
  slidesPerView: 3,
  spaceBetween: 20,
  speed: 500,
  direction: "horizontal",
  loop: true,
  autoHeight: true,
  autoplay: {
    delay: 3000,
  },
  navigation: {
    nextEl: ".btn-next11",
    prevEl: ".btn-prev11",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    670: {
      slidesPerView: 2,
    },
    1150: {
      slidesPerView: 3,
    },
  },
});

// swiper

var swiper = new Swiper(".my-swww2", {
  // Optional parameters
  slidesPerView: 3,
  spaceBetween: 20,
  speed: 500,
  direction: "horizontal",
  loop: true,
  autoHeight: true,
  autoplay: {
    delay: 3000,
  },
  navigation: {
    nextEl: ".btn-next22",
    prevEl: ".btn-prev22",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    670: {
      slidesPerView: 2,
    },
    1150: {
      slidesPerView: 3,
    },
  },
});
// swiper

var swiper = new Swiper(".my-swww3", {
  // Optional parameters
  slidesPerView: 3,
  spaceBetween: 20,
  speed: 500,
  direction: "horizontal",
  loop: true,
  autoHeight: true,
  autoplay: {
    delay: 3000,
  },
  navigation: {
    nextEl: ".btn-next33",
    prevEl: ".btn-prev33",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    670: {
      slidesPerView: 2,
    },
    1150: {
      slidesPerView: 3,
    },
  },
});


var swiper = new Swiper(".mySwiper", {
  cssMode: true,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    renderBullet: function (index, className) {
      return '<span class="' + className + '">' + (index + 1) + "</span>";
    },
  },
});

var swiper = new Swiper(".mySwiperQonun", {
  cssMode: true,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    renderBullet: function (index, className) {
      return '<span class="' + className + '">' + (index + 1) + "</span>";
    },
  },
});
// swiper

var swiper = new Swiper(".my-swwwww", {
  // Optional parameters
  slidesPerView: 2,
  spaceBetween: 20,
  speed: 600,
  direction: "horizontal",
  loop: true,
  navigation: {
    nextEl: ".btn-next3",
    prevEl: ".btn-prev3",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    700: {
      slidesPerView: 2,
    },
    1000: {
      slidesPerView: 4,
    },
  },
});
var swiper = new Swiper(".my-swwww", {
  // Optional parameters
  slidesPerView: 1,
  spaceBetween: 30,
  speed: 800,
  direction: "horizontal",
  loop: true,
  autoHeight: true,
  autoplay: {
    delay: 3000,
  },
  navigation: {
    nextEl: ".btn-next2",
    prevEl: ".btn-prev2",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    700: {
      slidesPerView: 1,
    },
    1000: {
      slidesPerView: 1,
    },
  },

});










//fansy
$('[data-fancybox]').fancybox({
  // Options will go here
  buttons : [
    'close'
  ],
  wheel : false,
  transitionEffect: "slide",
   // thumbs          : false,
  hash            : false,
  loop            : true,
  // keyboard        : true,
  toolbar         : false,
  // animationEffect : false,
  // arrows          : true,
  clickContent    : false
});




//tabs

var tabs = document.getElementById('icetab-container').children;
var tabcontents = document.getElementById('icetab-content').children;

var myFunction = function() {
	var tabchange = this.mynum;
	for(var int=0;int<tabcontents.length;int++){
		tabcontents[int].className = ' tabcontent';
		tabs[int].className = ' icetab';
	}
	tabcontents[tabchange].classList.add('tab-active');
	this.classList.add('current-tab');
}	


for(var index=0;index<tabs.length;index++){
	tabs[index].mynum=index;
	tabs[index].addEventListener('click', myFunction, false);
}




