/**
 * Template Name: Delicious - v4.7.0
 * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
 * Author: BootstrapMade.com
 * License: https://bootstrapmade.com/license/
 */
(function () {
    "use strict";

    /**
     * Easy selector helper function
     */
    const select = (el, all = false) => {
        el = el.trim()
        if (all) {
            return [...document.querySelectorAll(el)]
        } else {
            return document.querySelector(el)
        }
    }

    /**
     * Easy event listener function
     */
    const on = (type, el, listener, all = false) => {
        let selectEl = select(el, all)
        if (selectEl) {
            if (all) {
                selectEl.forEach(e => e.addEventListener(type, listener))
            } else {
                selectEl.addEventListener(type, listener)
            }
        }
    }

    /**
     * Easy on scroll event listener
     */
    const onscroll = (el, listener) => {
        el.addEventListener('scroll', listener)
    }

    /**
     * Navbar links active state on scroll
     */
    let navbarlinks = select('#navbar .scrollto', true)
    const navbarlinksActive = () => {
        let position = window.scrollY + 200
        navbarlinks.forEach(navbarlink => {
            if (!navbarlink.hash) return
            let section = select(navbarlink.hash)
            if (!section) return
            if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
                navbarlink.classList.add('active')
            } else {
                navbarlink.classList.remove('active')
            }
        })
    }
    window.addEventListener('load', navbarlinksActive)
    onscroll(document, navbarlinksActive)

    /**
     * Scrolls to an element with header offset
     */
    const scrollto = (el) => {
        let header = select('#header')
        let offset = header.offsetHeight

        let elementPos = select(el).offsetTop
        window.scrollTo({
            top: elementPos - offset,
            behavior: 'smooth'
        })
    }

    /**
     * Toggle .header-scrolled class to #header when page is scrolled
     */
    let selectHeader = select('#header')
    let selectTopbar = select('#topbar')
    if (selectHeader) {
        const headerScrolled = () => {
            if (window.scrollY > 100) {
                selectHeader.classList.add('header-scrolled')
                if (selectTopbar) {
                    selectTopbar.classList.add('topbar-scrolled')
                }
            } else {
                selectHeader.classList.remove('header-scrolled')
                if (selectTopbar) {
                    selectTopbar.classList.remove('topbar-scrolled')
                }
            }
        }
        window.addEventListener('load', headerScrolled)
        onscroll(document, headerScrolled)
    }

    /**
     * Back to top button
     */
    let backtotop = select('.back-to-top')
    if (backtotop) {
        const toggleBacktotop = () => {
            if (window.scrollY > 100) {
                backtotop.classList.add('active')
            } else {
                backtotop.classList.remove('active')
            }
        }
        window.addEventListener('load', toggleBacktotop)
        onscroll(document, toggleBacktotop)
    }

    /**
     * Mobile nav toggle
     */
    on('click', '.mobile-nav-toggle', function (e) {
        select('#navbar').classList.toggle('navbar-mobile')
        this.classList.toggle('bi-list')
        this.classList.toggle('bi-x')
    })

    /**
     * Mobile nav dropdowns activate
     */
    on('click', '.navbar .dropdown > a', function (e) {
        if (select('#navbar').classList.contains('navbar-mobile')) {
            e.preventDefault()
            this.nextElementSibling.classList.toggle('dropdown-active')
        }
    }, true)

    /**
     * Scrool with ofset on links with a class name .scrollto
     */
    on('click', '.scrollto', function (e) {
        if (select(this.hash)) {
            e.preventDefault()

            let navbar = select('#navbar')
            if (navbar.classList.contains('navbar-mobile')) {
                navbar.classList.remove('navbar-mobile')
                let navbarToggle = select('.mobile-nav-toggle')
                navbarToggle.classList.toggle('bi-list')
                navbarToggle.classList.toggle('bi-x')
            }
            scrollto(this.hash)
        }
    }, true)

    /**
     * Scroll with ofset on page load with hash links in the url
     */
    window.addEventListener('load', () => {
        if (window.location.hash) {
            if (select(window.location.hash)) {
                scrollto(window.location.hash)
            }
        }
    });

    /**
     * Hero carousel indicators
     */
    let heroCarouselIndicators = select("#hero-carousel-indicators")
    let heroCarouselItems = select('#heroCarousel .carousel-item', true)

    heroCarouselItems.forEach((item, index) => {
        (index === 0) ?
            heroCarouselIndicators.innerHTML += "<li data-bs-target='#heroCarousel' data-bs-slide-to='" + index + "' class='active'></li>" :
            heroCarouselIndicators.innerHTML += "<li data-bs-target='#heroCarousel' data-bs-slide-to='" + index + "'></li>"
    });

    /**
     * Menu isotope and filter
     */
    window.addEventListener('load', () => {
        let menuContainer = select('.menu-container');
        if (menuContainer) {
            let menuIsotope = new Isotope(menuContainer, {
                itemSelector: '.menu-item',
                layoutMode: 'fitRows'
            });

            let menuFilters = select('#menu-flters li', true);

            on('click', '#menu-flters li', function (e) {
                e.preventDefault();
                menuFilters.forEach(function (el) {
                    el.classList.remove('filter-active');
                });
                this.classList.add('filter-active');

                menuIsotope.arrange({
                    filter: this.getAttribute('data-filter')
                });

            }, true);
        }

    });

    /**
     * Testimonials slider
     */
    new Swiper('.events-slider', {
        speed: 600,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false
        },
        slidesPerView: 'auto',
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true
        }
    });

    /**
     * Initiate gallery lightbox
     */
    const galleryLightbox = GLightbox({
        selector: '.gallery-lightbox'
    });

    /**
     * Testimonials slider
     */
    new Swiper('.testimonials-slider', {
        speed: 600,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false
        },
        slidesPerView: 'auto',
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true
        }
    });

    let id = 0;

    fetch('/free-dates').then(r => r.json()).then().then(data => {
        const events = []

        let reservations = data['reservations']
        reservations.forEach(reservation => {
            console.log(reservation)
            const event = {
                id: `${reservation.id}/${reservation.created_at}`,
                name: `${reservation.time} - Termin`,
                date: reservation.date,
                type: "event",
            }

            events.push(event)
        })

        console.log(events)

        $("#calendar").evoCalendar({
            calendarEvents:
              events

        });

        $("#calendar").on('selectEvent', function(event, activeEvent) {
            const ev = activeEvent
            alert(`${activeEvent.name} bol vybrany`)
            id = ev.id.split('/')[0]
            console.log(`click on event ${JSON.stringify(activeEvent)}`)
        })
    })

    $('.php-email-form').on('submit', (e) => {
        e.preventDefault()
        console.log('submit')
        let formData = new FormData()
        formData.append('name', $('#name').val())
        formData.append('email', $('#email').val())
        formData.append('phone', $('#phone').val())
        formData.append('note', $('#note').val())
        console.log(id)
        for (const value of formData.values()) {
            console.log(value);
        }

        const token = document.querySelector('meta[name="csrf-token"]').content;

        fetch(`/reserve/${id}`, {
            method: 'POST',
            body: formData,
            headers: {
                "X-CSRF-TOKEN": token,
            }
        }).then((res) => {
            if (res.ok) {
                alert('Datum bol rezervovany')
                location.reload();
            } else {
                alert('Datum s tymto casom uz bol pouzity')
            }
        })
    })

})()

