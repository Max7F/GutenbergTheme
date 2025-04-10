
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
            document.querySelector('header nav').style.maxHeight = formHei+'px';
        } else {
            document.querySelector('header nav').removeAttribute('style');
            document.querySelector('header .mobileMenu').classList.remove('mobileMenuOpen');
            document.querySelector('header nav').classList.remove('open')
        }
    }
    PEPFU();

    // Header JS
    function HH(){
        var heiHeader = document.querySelector('.fixing').offsetHeight;
        if(window.innerWidth > 1199){
            document.querySelector('header').style.height = heiHeader+'px';
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
            navToggle.style.height = document.querySelector('header nav').scrollHeight+'px';
        }
    });

    // add caret to dropdown menu
    function addArrows() {
        var childrenLIDesktop = document.querySelectorAll('nav .menu-item-has-children > a');
        var childrenLIMobile = document.querySelectorAll('nav .menu-item-has-children');
        const svgArrow = `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg>`;

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

            //hover sub sub menu
            [].forEach.call(document.querySelectorAll('header nav ul .sub-menu li'), function (link) {
                link.addEventListener('mouseover', hoverInSubSubMenu);
                link.addEventListener('mouseout', hoverOutSubSubMenu);
            });
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
            // end hover menu
        }else{
            // Open Sub Menu MOBILE
            function openSubMenus() {
                var addClassForSubSubMenu = document.querySelectorAll('header .sub-menu .thereCaret');
                addClassForSubSubMenu.forEach(function(e) {
                    e.classList.add('thereCaretSecond');
                })
                var navbarHeight = document.querySelector('header nav').scrollHeight;
                if(this.classList.contains('active'))  {
                    this.classList.remove('active')
                    document.querySelector('header nav').style.height = navbarHeight - this.parentNode.children[1].scrollHeight+'px';
                    this.parentNode.children[1].style.height = '0'+'px';
                    var subMenuLi = this.parentNode.children[1].children;
                    for (var i = 0; i < subMenuLi.length; i++) {
                        if (subMenuLi[i].classList.contains('menu-item-has-children')) {
                            subMenuLi[i].children[1].style.height = 0+'px';
                            subMenuLi[i].children[2].classList.remove('active');
                        }
                    }
                } else{
                    this.classList.add('active');
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
            document.querySelectorAll('header nav .thereCaret').forEach(el=> {
                el.addEventListener('click', openSubMenus, false);
            })
        }
    }
    headerMenu();

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

    window.addEventListener('scroll', function() {
        checkAdminBar();
    }); // end scroll function

    window.addEventListener('resize', function(event) {
        setTimeout(HH, 1);
        setTimeout(PEPFU, 1);
        checkAdminBar();
    }, true);
    //End Header Scripts-----------------------------


    //CUSTOM MODALS

    document.querySelectorAll('.open-modal').forEach(el=> {
        el.addEventListener('click', openModal, false);
    })
    function openModal() {
        var modal = this.getAttribute('attr-modal-name');
        toggleModal(modal);
        document.getElementById(modal).classList.add('transition');

    }
    function toggleModal(modal) {
        var modal = document.getElementById(modal);
        modal.classList.toggle("show-modal");
    }


    //close modal
    document.querySelectorAll('.custom-modal .close-button').forEach(el=> {
        el.addEventListener('click', closeModal, false);
    })
    function closeModal() {
        var modal = this.closest('.custom-modal ').getAttribute('id');
        toggleModal(modal);
    }

    window.addEventListener("click", windowOnClick);
    function windowOnClick(event) {
        var modal = document.querySelector('.custom-modal.show-modal');
        if (event.target === modal) {
            var modal = document.querySelector('.custom-modal.show-modal').getAttribute('id');
            toggleModal(modal);
        }
    }



}); // End Document Ready