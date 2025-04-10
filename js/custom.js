
document.addEventListener('DOMContentLoaded', function(){

    const heinghtOneLi = document.querySelector('header nav li a').clientHeight;
    const HeightMobileMenuOpen = document.querySelector('header .fixing nav').scrollHeight;

    // prevent empty space in pages
    function PEPFU(){
        const bodyElement = document.querySelector('body');
        var adminHeiht = 0;
        bodyElement.classList.contains('admin-bar') ? adminHeiht = document.getElementById('wpadminbar').offsetHeight : adminHeiht = 0;
        var pepFU = window.innerHeight - document.querySelector('footer').offsetHeight - adminHeiht;
        document.querySelector('body > .content').style.minHeight = pepFU+'px';
        if(window.innerWidth < 1199){
            var formHei = window.innerHeight - document.querySelector('header .fixing').clientHeight - adminHeiht;
            //document.querySelector('header nav').style.maxHeight = formHei+'px';
            document.querySelector('header nav').style.maxHeight = '100vh';
        } else {
            document.querySelector('header nav').removeAttribute('style');
            document.querySelector('header .mobileMenu').classList.remove('mobileMenuOpen');
            document.querySelector('header nav').classList.remove('open')
        }
    }
    PEPFU();

    // Header JS
    function HH(){
        var heiHeader = document.querySelector('.fixing').clientHeight;
        if(window.innerWidth > 1199){
            document.querySelector('header').style.height = heiHeader+'px';
        } else{
            document.querySelector('header').removeAttribute('style');
        }
    }
    HH();
    // open mobile menu
    var navToggle = document.querySelector('header nav');
    var mobileMenu = document.querySelector('header .mobileMenu');
    mobileMenu.addEventListener("click", function(e) {
        var navToggleClose = document.querySelector('.mobileMenu');
        navToggleClose.classList.contains('mobileMenuOpen') ? navToggleClose.classList.remove('mobileMenuOpen') : navToggleClose.classList.add('mobileMenuOpen');
        var navToggle = document.querySelector('header nav');
        if(navToggle.classList.contains('open')) {
            navToggle.classList.remove('open');
            navToggle.style.height = document.querySelector('header nav').style.height = '0px';
        }  else {
            navToggle.classList.add('open');
            //navToggle.style.height = document.querySelector('header nav').scrollHeight+'px';
            navToggle.style.height = '100vh';
        }
    });

    // add caret to dropdown menu
    function addArrows() {
        var childrenLIDesktop = document.querySelectorAll('nav .menu-item-has-children > a');
        var childrenLIMobile = document.querySelectorAll('nav .menu-item-has-children');
        const svgArrow = `<svg width="10" height="9" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 4L5 8L1 4" stroke="#595959" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>`;

        childrenLIDesktop.forEach(function (e) {
            let p = document.createElement('span');
            p.className = "caret";
            e.appendChild(p);
        })
        childrenLIMobile.forEach(function (e) {
            let p = document.createElement('span');
            p.innerHTML = svgArrow;
            p.className = "thereCaret";
            e.appendChild(p);

        })
    }
    addArrows();

    // open on hover or click
    function headerMenu() {
        if (window.innerWidth > 1199) {
            //hover menu
            [].forEach.call(document.querySelectorAll('header nav ul li'), function (link) {
                link.addEventListener('mouseover', hoverInSubMenu);
                link.addEventListener('mouseout', hoverOutSubMenu);
            });

            //hover sub sub menu
            [].forEach.call(document.querySelectorAll('header nav ul .sub-menu li'), function (link) {
                link.addEventListener('mouseover', hoverInSubSubMenu);
                link.addEventListener('mouseout', hoverOutSubSubMenu);
            });
            // end hover menu

        }else{
            // Open Sub Menu MOBILE
            document.querySelectorAll('header nav .thereCaret').forEach(el=> {
                el.addEventListener('click', openSubMenus, false);
            })
        }
    }
    headerMenu();

    function hoverInSubMenu() {
        if (this.classList.contains('menu-item-has-children')) {
            var heigthOnHover = this.children[1].getAttribute('sub-menu-height');
            this.children[1].style.height = heigthOnHover+'px';
        }
    }
    function hoverOutSubMenu() {
        var subMenu = document.querySelectorAll('header li .sub-menu');
        subMenu.forEach(function(e) {
            e.style.height = 0+'px';
        })
    }
    function hoverInSubSubMenu() {
        if (this.classList.contains('menu-item-has-children')) {
            this.parentNode.classList.add('hidden-overflow');
        }

    }
    function hoverOutSubSubMenu() {
        if (this.classList.contains('menu-item-has-children')) {
            this.parentNode.classList.remove('hidden-overflow');
        }
    }

    function openSubMenus() {
        var addClassForSubSubMenu = document.querySelectorAll('header .sub-menu .thereCaret');
        addClassForSubSubMenu.forEach(function(e) {
            e.classList.add('thereCaretSecond');
        })
        var navbarHeight = document.querySelector('header nav').scrollHeight;
        if(this.classList.contains('active') )  {
            this.classList.remove('active')
            //document.querySelector('header nav').style.height = navbarHeight - this.parentNode.children[1].scrollHeight+'px';
            this.parentNode.children[1].style.height = '0'+'px';
            var subMenuLi = this.parentNode.children[1].children;
            for (var i = 0; i < subMenuLi.length; i++) {
                if (subMenuLi[i].classList.contains('menu-item-has-children')) {
                    subMenuLi[i].children[1].style.height = 0+'px';
                    subMenuLi[i].children[2].classList.remove('active');
                }
            }
            this.closest('.menu-item').classList.remove('mobile_active');

        } else{
            this.classList.add('active');
            this.closest('.menu-item').classList.add('mobile_active');
            document.querySelector('header nav').style.height = navbarHeight + this.parentNode.children[1].scrollHeight+'px';
            this.parentNode.children[1].style.height = this.parentNode.children[1].getAttribute('sub-menu-height')+'px';
        }

        //open sub sub menu
        if (this.parentNode.parentNode.hasAttribute('sub-menu-height')) {
            this.parentNode.parentNode.classList.add('open-sub-sub-menu');
            var heightSubMenuOpen = this.parentNode.parentNode.parentNode.clientHeight;
            var heightSubSubMenuOpen = this.parentNode.clientHeight;
            this.parentNode.parentNode.style.height = heightSubMenuOpen + +this.parentNode.children[1].getAttribute('sub-menu-height') - heinghtOneLi +'px';
        } else {
            this.parentNode.parentNode.classList.add('open-sub-sub-menu');
        }
        if(this.classList.contains('thereCaretSecond') && this.classList.contains('active') == false) {
            this.parentNode.parentNode.style.height = this.parentNode.parentNode.getAttribute('sub-menu-height') +'px';
        }
    }


    //Mobile Sub Menu
    function subMenusHeight() {
        var subMenus = document.querySelectorAll('header ul .sub-menu');
        subMenus.forEach(function (e) {
            var allLI = e.children;
            var subMenuHeight = 0;
            for (var i = 0; i < allLI.length; i++) {
                subMenuHeight += e.children[i].clientHeight;
            }
            e.setAttribute("sub-menu-height", subMenuHeight);
            e.removeAttribute('style');
        })
    }
    subMenusHeight();

    function checkAdminBar() {
        if(window.innerWidth > 600){
            var bodyName = document.getElementsByTagName('body')[0];
            if (bodyName.classList.contains('admin-bar')) {
                var topHP = 0 + document.getElementById('wpadminbar').clientHeight;
            } else {
                var topHP = 0;
            }
        }else{
            var topHP = 0;
        }

        // sticky header
        var headerFixing = document.querySelector('header .fixing');
        window.onscroll = function() {
            var distanceScrolled = document.documentElement.scrollTop;
            if(distanceScrolled > 150){
                headerFixing.classList.add('activated');
                headerFixing.style.top = topHP+'px';
                //FiH();
            }else{
                headerFixing.classList.remove('activated');
                headerFixing.removeAttribute('style');
                // FiH();
            }
        }
    }
    checkAdminBar();


    function removeEventListeners(){
        document.querySelectorAll('header nav ul li').forEach(function (link) {
            link.removeEventListener('mouseover', hoverInSubMenu);
            link.removeEventListener('mouseout', hoverOutSubMenu);
            link.classList.remove('mobile_active');
        });

        document.querySelectorAll('header nav ul .sub-menu li').forEach(function (link) {
            link.removeEventListener('mouseover', hoverInSubSubMenu);
            link.removeEventListener('mouseout', hoverOutSubSubMenu);
        });

        document.querySelectorAll('header nav .thereCaret').forEach(el=> {
            el.removeEventListener('click', openSubMenus, false);
            el.classList.remove('active');
        })
    }

    window.addEventListener('scroll', function() {
        checkAdminBar();
    }); // end scroll function

    window.addEventListener('resize', function(event) {
        removeEventListeners();
        // setTimeout(PEPFU, 1);
        PEPFU();
        setTimeout(HH, 200);
        headerMenu();
        subMenusHeight();
        checkAdminBar();

    }, true);
    //End Header Scripts-----------------------------


    //CUSTOM MODALS

    // document.querySelectorAll('.open-modal').forEach(el=> {
    //     el.addEventListener('click', openModal, false);
    // })
    // function openModal() {
    //     var modal = this.getAttribute('attr-modal-name');
    //     toggleModal(modal);
    //     document.getElementById(modal).classList.add('transition');
    // }
    function toggleModal(modalId) {
        const modal = document.getElementById(modalId);
        modal.classList.toggle('open');
    }

    //close modal
    document.querySelectorAll('.custom_modal .close').forEach(el=> {
        el.addEventListener('click', closeModal, false);
    })
    function closeModal() {
        const modalId = this.closest('.custom_modal').getAttribute('id');
        toggleModal(modalId);
    }

    window.addEventListener("click", windowOnClick);
    function windowOnClick(event) {
        const modal = document.querySelector('.custom_modal.open');
        if (event.target === modal) {
            const modalId = document.querySelector('.custom_modal.open').getAttribute('id');
            toggleModal(modalId);
        }
        // scroll to the top of the page
        if(event.target.closest('[data-scroll-top]')){
            window.scrollTo({
                top: 0,
                behavior: "smooth",
            });
        }
    }


    // show "Scroll to the top" button
    window.addEventListener("scroll", function (e) {
        showHideScrollButton();
    });
    showHideScrollButton();

    function showHideScrollButton(){
        const scrollTopButton = document.querySelector('#scroll_top_btn');
        if(window.scrollY > window.innerHeight && scrollTopButton){
            scrollTopButton.style.display = 'block';
        }
        if(window.scrollY < window.innerHeight){
            scrollTopButton.style.display = 'none';
        }
    }


    const wpcf7ContactForm = document.querySelector( '.contact_us .wpcf7' );
    wpcf7ContactForm?.addEventListener( 'wpcf7mailsent', function( event ) {
        toggleModal('success_modal');
    }, false );

}); // End Document Ready