import 'jarallax/dist/jarallax.min.css';
import "@fancyapps/ui/dist/fancybox/fancybox.css";
//import "aos/dist/aos.css";
import './scss/style.scss';
//!
import { Swiper } from "swiper/bundle";

//import { jarallax } from "jarallax";
import { Fancybox } from "@fancyapps/ui/dist/fancybox/";
//import AOS from "AOS";

import { AutoCalc } from "./js/AutoCalc.js";
import { Menu } from './js/Menu.js';
//import { RunningLine } from './js/RunningLine.js';
//import { BackdropList } from './js/BackdropList.js';
import { Modal } from './js/Modal.js';
import { cookies } from "./js/Cookies.js";
//import { imask } from "./js/imask.js";
//import { fileBtn } from "./js/FileBtn.js";
//import { CustomFieldSelect } from "./js/CustomFieldSelect.js";
import { Spoiler } from './js/Spoiler.js';
//import { ScrollToTop } from './js/ScrollToTop.js';
import { MXSwiper } from './js/MXSwiper.js';
//import { CustomSelect } from './js/CustomSelect.js';
//import { Tabs } from './js/Tabs.js';

// FOR CONTACTS FORM 7
//import "./js/redirect-to-thanks-page.js";


new AutoCalc();
//new CustomFieldSelect({
//	input: '.form-wrapper .cf-select',
//	lastEdit: false
//});
new Menu({
	btn: '.burger-btn-icon',
	menu: '.header-menu',
	activeClass: 'open-header-menu',
	closeBtns: ['.menu-close-btn']
})


//new BackdropList();

new Modal();

//jarallax(document.querySelectorAll('.jarallax'), {
//	speed: 0.2,
//});

cookies();
//imask();

Fancybox.bind("[data-fancybox]", {
	placeFocusBack: false
});

//new RunningLine();
//new ScrollToTop();

new Spoiler();

//new Spoiler('.single-team-experience-content', { media: 'max-width: 768px' });

new MXSwiper();
//new Tabs();
//new CustomSelect({
//	selector: 'select',
//	forceSend: true,
//});
/*
window.addEventListener('scroll', function () {
	const header = document.querySelector('.header');

	if (window.scrollY > 50) {
		header.classList.add('scrolled');
	} else {
		header.classList.remove('scrolled');
		const valueUnits = header.offsetHeight;
		document.querySelector(':root').style.setProperty(`--header-height`, valueUnits + 'px');
	}
});
*/

//fileBtn('');

//new Tabs();
//document.querySelectorAll('video.wp-video-shortcode').forEach(video => {
//	if (!video.src) {
//		const link = video.querySelector('a');
//		if (link) video.src = link.href;
//	}
//});

document?.querySelectorAll('.form-checkbox')?.forEach(el => {
	el.checked = true;
})

//AOS.init({
//	disable: 'mobile',
//	duration: 600,
//});

const formCustomRadioData = document.querySelector('[data-form-custom-radio]');

if (formCustomRadioData) {
	const json = formCustomRadioData.dataset.formCustomRadio;

	const data = JSON.parse(json);

	const customRadioElements = document.querySelectorAll('.form-custom-radio');

	if (customRadioElements.length) {
		customRadioElements.forEach(el => {
			//const el = document.querySelector('.form-custom-radio');

			const parentEL = el.parentElement;

			const list = document.createElement('ul');
			list.classList.add('custom-radio-btns');

			data.forEach(item => {
				const li = document.createElement('li');
				li.innerHTML = `<button class="custom-radio-btns__btn" type="button"><img src="${item['contacts_msg_list_image']['url']}"/><span>${item['contacts_msg_list_title']}</span></button>`;

				list.appendChild(li);
			})
			parentEL.appendChild(list);

			// события
			document.addEventListener('click', (e) => {
				if (e.target.closest('.custom-radio-btns__btn')) {
					document.querySelectorAll('.custom-radio-btns__btn').forEach(btn => btn.classList.remove('active-btn'));
					const btn = e.target.closest('.custom-radio-btns__btn');
					el.value = btn.textContent;
					btn.classList.add('active-btn');
				}
			})
		})
	}

}