var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
        depth: 100,
        slideShadows: true,
    },
    loop: false,
    autoplay: true,
    breakpoints: {
        0: {
            direction: "horizontal",
        },
        768: {
            direction: "vertical",
        },
    }
});

var swiper2 = new Swiper(".mySwiper2", {
    pagination: {
        el: ".swiper-pagination",
        clickable: false
    },
    noSwiping: true,
    allowTouchMove: false,
    loop: false,
    // autoplay: true,
});



var swiper3 = new Swiper(".swiper-bg-slider", {
    effect: "fade",
    // speed: 3000
});


// sliderOne.controller.control = [sliderTwo, sliderThree];
swiper.controller.control = [swiper2, swiper3];
// swiper2.controller.control = [swiper, swiper3];
var swiper4 = new Swiper(".mySwiper4", {
    pagination: {
        el: ".pagination-4",
    },
    navigation: {
        nextEl: ".next-4",
        prevEl: ".prev-4",
    },
    // loop:true
});


var swiper5 = new Swiper(".mySwiper5", {
    pagination: {
        el: ".pagination-5",
    },
    navigation: {
        nextEl: ".next-5",
        prevEl: ".prev-5",
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 4,
        }
    }
});


var choosecar = new Swiper(".choosecar", {
    pagination: {
        el: ".choosecar-1",
        clickable: true
    },
    navigation: {
        nextEl: ".next-8",
        prevEl: ".prev-8",
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        }
    }
});
var chooseprivate = new Swiper(".chooseprivate", {
    pagination: {
        el: ".chooseprivate-2",
        clickable: true
    },
    navigation: {
        nextEl: ".next-9",
        prevEl: ".prev-9",
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        }
    }
});
var testimonials = new Swiper(".testimonials", {
    pagination: {
        el: ".testimonials-1",
        clickable: true
    },
    navigation: {
        nextEl: ".next-11",
        prevEl: ".prev-11",
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        }
    }
}); 
var sightseeing = new Swiper(".other-sightseeing", {
    pagination: {
        el: ".exploredessert-1",
        clickable: true
    },
    navigation: {
        nextEl: ".next-10",
        prevEl: ".prev-10",
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 4,
        }
    },
    spaceBetween: 25,
});
var topattraction = new Swiper(".top-attraction", {
    pagination: {
        el: ".exploredessert-1",
        clickable: true
    },
    navigation: {
        nextEl: ".next-10",
        prevEl: ".prev-10",
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 2,
        }
    },
    spaceBetween: 5,
});
var exploredessert = new Swiper(".exploredessert", {
    pagination: {
        el: ".exploredessert-1",
        clickable: true
    },
    navigation: {
        nextEl: ".next-10",
        prevEl: ".prev-10",
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        }
    }
});


function swiper5_slide_fn() {
    setTimeout(() => {
        let swiper_slide_5 = document.querySelectorAll('.mySwiper5 .swiper5-slide');
        if (swiper_slide_5.length > 0) {
            swiper_slide_5.forEach((all) => { all.classList.remove('scale-y-105', 'last-slide-opactiy') })
            swiper_slide_5.forEach((slide, i) => {
                let first = slide.closest('.swiper-slide-active');
                if (first) {
                    slide.classList.add('scale-y-105')
                    let last = swiper_slide_5[i + 3];
                    last.classList.add('scale-y-105', 'last-slide-opactiy')
                }
            })
        }
    }, 50);
}
swiper5_slide_fn()
swiper5.on('slideChange', function () {
    swiper5_slide_fn()
});

var swiper6 = new Swiper(".mySwiper6", {
    pagination: {
        el: ".pagination-6",
    },
    navigation: {
        nextEl: ".next-6",
        prevEl: ".prev-6",
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
    }
});

var swiper7 = new Swiper(".mySwiper7", {
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 3,
        },
        1024: {
            slidesPerView: 5,
        },
    },
    loop: true,
    autoplay: {
        delay: 1000,
    },
});


let hamburger_menu = document.querySelector('.hamburger_menu');
let responsive_header = document.querySelector('.responsive_header');
hamburger_menu.addEventListener('click', () => {
    if (hamburger_menu.classList.contains('open')) {
        hamburger_menu.classList.remove('open')
        responsive_header.classList.remove('block')
        responsive_header.classList.add('hidden')
        responsive_header.classList.remove('slide-in-left')

    } else {
        hamburger_menu.classList.add('open')
        responsive_header.classList.remove('hidden')
        responsive_header.classList.add('block')
        responsive_header.classList.add('slide-in-left')
    }
})

let video = document.querySelectorAll('.video');
let video_play = document.querySelectorAll('.play');
let video_pause = document.querySelectorAll('.pause');

video_pause.forEach(btn => {
    btn.style.cssText = `display:none`;
});

console.log(video_play, video_pause);
video_play.forEach((btn, i) => {
    btn.addEventListener('click', () => {
        video[i].play();
        btn.style.cssText = `display:none`;
        video_pause[i].style.cssText = `display:block`;
    })
});

video_pause.forEach((btn, i) => {
    btn.addEventListener('click', () => {
        video[i].pause();
        btn.style.cssText = `display:none`
        video_play[i].style.cssText = `display:block`
    })
});


const counter = document.querySelectorAll(".counter");
counter.forEach((ele, i) => {
    const incrementcount = ele.querySelector(".increment-count");
    const decrementcount = ele.querySelector(".decrement-count");
    const totalCount = ele.querySelector(".total-count");
    let count = 0
    incrementcount.addEventListener('click', () => {
        count++
        totalCount.innerText = count;
    })
    decrementcount.addEventListener('click', () => {
        if (count > 0) {
            count--
            totalCount.innerText = count;
        }
    })
})
const inputStaticEl = document.querySelector('#calendar-input-static');
document.addEventListener('DOMContentLoaded', () => {
    const calendar = new VanillaCalendar('#calendar',{
        actions: {
                clickDay(e, dates) {
                  inputStaticEl.value = dates;;
                },
              },
    });
    calendar.init();
});

// tabs
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "flex";
    evt.currentTarget.className += " active";
  }
  
  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();