// all the things that are globally visible

class Global {
	// 1. describe and create/initiate objects
	constructor() {
		// variables
		this.tick = 0;

		// dom elements grouped by their job
		this.gridContainer = document.querySelector('.grid-container'); // the grid container

		this.btnTop = document.querySelector('#topBtn');//scroll to top
		this.navbar = document.getElementById('navbar');//navbar
		this.header = document.querySelector('.header');//logo header


		// trending
		this.trending = document.querySelector('.trending');//trending
		this.hasTrendElement = false;
		this.btnNext = document.querySelector('#btnNext'); //next ticker btn
		this.btnPrev = document.querySelector('#btnPrev'); //next ticker btn
		this.trendTitle = document.getElementById('trendTitle');//trending title ul
		if(this.trending) { 
			this.hasTrendElement = true; 
			this.nodelist = this.trendTitle.getElementsByTagName('a');//trending title a tag
		}

		this.btnNav = document.querySelector('.ham-btn'); //mobile menu btn
		this.btnNavClose = document.querySelector('.mobile-menu_close'); //close menu btn
		this.mobileMenu = document.querySelector('.mob-menu');
		this.showMenu = false;

		this.btnDropDown; // menu dropdown 
		this.showDropMenu = false;
		this.subMenu = document.querySelector('.mobile-menu_items .menu-item-has-children .sub-menu');
		this.dropRotate;

		// methods
		this.autoNext();
		this.menu();

		//events
		this.eventHandler();
	}

	// events
	eventHandler(){

		// console.log("events are here");
		
		window.addEventListener('scroll', this.scrollFunction.bind(this));

		this.btnTop.addEventListener('click', this.scrollToTop);

		if (this.hasTrendElement == true) {
			this.btnNext.addEventListener('click', this.next.bind(this));
			this.btnPrev.addEventListener('click', this.prev.bind(this));
		}

		if (this.mobileMenu) { // for mobile nav
			this.btnNav.addEventListener('click', this.toggleNav.bind(this));
			this.btnNavClose.addEventListener('click', this.toggleNav.bind(this));

			this.btnDropDown = this.mobileMenu.querySelector('.menu-item-has-children span'); 
			this.btnDropDown.addEventListener('click', this.toggleDropDownMenu.bind(this));
		}
	}

	//methods
	scrollFunction() { 
		//show to the top button on scroll
  		if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
			this.btnTop.style.bottom = "20px";
		} else {
		    this.btnTop.style.bottom = "-50px";
		}

		// for fixed navbar
		const wpAminBar = document.getElementById('wpadminbar');
		const navLoc = this.navbar.offsetTop;
		const menuStyle = this.navbar.currentStyle || window.getComputedStyle(this.navbar); // get css properties
		const menuMarginBottom = parseInt(menuStyle.marginBottom);
		if (window.pageYOffset > navLoc) {
			var originalNavLoc = navLoc;
			this.navbar.classList.add('sticky');
			this.header.style.paddingBottom = `${this.navbar.offsetHeight + menuMarginBottom}px`;
			
			if (!wpAminBar) {
				this.navbar.style.top = '0';
			} else {
				this.navbar.style.top = '32px';
			}
		} 
		else {
			this.navbar.classList.remove('sticky');
			this.header.style.paddingBottom = '0';
			
		}
		
	}

	scrollToTop() { //scroll to top
  		document.body.scrollTop = 0; // For Safari
		document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
	}

	autoNext(){
		if (!this.hasTrendElement) return;
		this.nodelist[this.tick].className = "";
		setInterval(this.next.bind(this), 5000);
	}

	next(){
		this.tick++;
		// console.log(this.tick);
		if (this.tick > 4) {
			this.nodelist[this.tick-1].className = "hidden";//hide
			this.tick = 0;
		}
		if (this.tick > 0) {
			this.nodelist[this.tick-1].className = "hidden";
		}
		this.nodelist[this.tick].className = "";
	}

	prev(){
		this.tick--;
		// console.log(this.tick);
		if (this.tick < 0) {
			this.nodelist[this.tick+1].className = "hidden";//hide
			this.tick = 4;
		}
		if (this.tick < 4) {
			this.nodelist[this.tick+1].className = "hidden";
		}
		this.nodelist[this.tick].className = "";
	}

	menu(){
		const menuDrop = document.querySelectorAll('.menu .menu-item-has-children > a');//only first descendents
		const mobMenuDrop = document.querySelectorAll('.mobile-menu_items .menu-item-has-children');//for mobile
		// console.log(menuDrop);
		menuDrop.forEach(menu => {
			const dropIcon = document.createElement('span');
			dropIcon.innerHTML = '<i class="ri-arrow-down-s-fill"></i>';
			menu.appendChild(dropIcon);
		})

		//for mobile
		mobMenuDrop.forEach(menu => {
			const dropIcon = document.createElement('span');
			dropIcon.innerHTML = '<i class="ri-arrow-down-s-fill"></i>';
			menu.insertBefore(dropIcon, this.subMenu);
		})
	}

	toggleNav() {
		if(this.showMenu) {//if menu is visible
			this.mobileMenu.style.left = '-100%'
			this.gridContainer.style.transform = 'scale(1)';
			this.gridContainer.style.marginTop = '0';
			document.body.style.overflow = 'auto';
		}else{
			this.mobileMenu.style.left = '0';
			this.gridContainer.style.transform = 'scale(0.9)';
			this.gridContainer.style.marginTop = '6%';
			document.body.style.overflow = 'hidden';

			const wpAminBar = document.getElementById('wpadminbar'); 
			if (!wpAminBar) { // if there is admin bar offset the menu
				this.mobileMenu.style.top = '0';
			} else {
				this.mobileMenu.style.top = '46px';
			}
		}	
		this.showMenu = !this.showMenu;	 
	}

	toggleDropDownMenu(){
		this.dropRotate = this.mobileMenu.querySelector('.mobile-menu_items i');
		if(this.showDropMenu) {
			this.subMenu.style.display = 'none';
			this.showDropMenu = false;
			this.dropRotate.style.transform = 'rotate(360deg)';
		}else{
			this.subMenu.style.display = 'block';
			this.showDropMenu = true;
			this.dropRotate.style.transform = 'rotate(180deg)';
		}	
	}

}

export default Global
// foot notes: 
// 'this' can be used to refer to elements, without passing any parameters, directly in a method