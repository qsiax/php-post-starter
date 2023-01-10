import { gsap, Power0, Power1, Power2, Power3, Power4, Linear, Quad, Cubic, Quart, Quint, Strong, Elastic, Back, SteppedEase, Bounce, Sine, Expo, Circ, TweenLite, TimelineLite, TimelineMax, TweenMax } from "/dev/lib/gsap/gsap-core.js";
import { CSSPlugin } from "/dev/lib/gsap/CSSPlugin.js";

const gsapWithCSS = gsap.registerPlugin(CSSPlugin) || gsap, // to protect from tree shaking
	TweenMaxWithCSS = gsapWithCSS.core.Tween;

export {
	gsapWithCSS as gsap,
	gsapWithCSS as default,
	CSSPlugin,
	TweenMaxWithCSS as TweenMax,
	TweenLite,
	TimelineMax,
	TimelineLite,
	Power0,
	Power1,
	Power2,
	Power3,
	Power4,
	Linear,
	Quad,
	Cubic,
	Quart,
	Quint,
	Strong,
	Elastic,
	Back,
	SteppedEase,
	Bounce,
	Sine,
	Expo,
	Circ
};

// GSAP -------------------------------------------------
TweenMax.to('.firts', 1.5, {
	delay: .7,
	height: "0%",
	ease: Expo.easeInOut
})

TweenMax.to('.second', 1.5, {
	delay: .9,
	height: "0%",
	ease: Expo.easeInOut
})

TweenMax.to('.third', 1.5, {
	delay: 1.1,
	height: "0%",
	ease: Expo.easeInOut
})


TweenMax.to('.four', 1.5, {
	delay: 1.3,
	height: "0%",
	ease: Expo.easeInOut
})

TweenMax.to('.five', 1.5, {
	delay: 1.5,
	height: "0%",
	ease: Expo.easeInOut
})


TweenMax.to('.six', 1.5, {
	delay: 1.7,
	height: "0%",
	ease: Expo.easeInOut
})
// --------------------------------------------------------



// SWIPER -------------------------------------------------
const aboutSlider = new Swiper('.about__item-wrapper ', {
    speed: 600,
    slidesPerView: 3,
    spaceBetween: 0,
    loop: true,
    autoplay: {
        delay: 5000,
    },
    navigation: {
        nextEl: '.about__slide-arrow-next',
        prevEl: '.about__slide-arrow-prev',
    },
    
    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        680: {
            slidesPerView: 3,
            spaceBetween: 60,
            autoplay: false
        }
    },
});
// --------------------------------------------------------