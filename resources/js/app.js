document.addEventListener("DOMContentLoaded", function () {

    let translations = {
        "Women": {
            "es": "Mujeres",
            "fr": "Femmes",
            "de": "Frauen",
            "en": "Women",
        },
        "Men": {
            "es": "Hombres",
            "fr": "Hommes",
            "de": "Männer",
            "en": "Men",
        },
        "Clothing": {
            "es": "Ropa",
            "fr": "Vêtements",
            "de": "Kleidung",
            "en": "Clothing",
        },
        "Shoes": {
            "es": "Zapatos",
            "fr": "Chaussures",
            "de": "Schuhe",
            "en": "Shoes",
        },
        "Accessories": {
            "es": "Accesorios",
            "fr": "Accessoires",
            "de": "Zubehör",
            "en": "Accessories",
        },
        "Bags": {
            "es": "Bolsos",
            "fr": "Sacs",
            "de": "Taschen",
            "en": "Bags",
        },
        "Jewelry": {
            "es": "Joyas",
            "fr": "Bijoux",
            "de": "Schmuck",
            "en": "Jewelry",
        },
        "Watches": {
            "es": "Relojes",
            "fr": "Montres",
            "de": "Uhren",
            "en": "Watches",
        },
        "Home": {
            "es": "Inicio",
            "fr": "Accueil",
            "de": "Startseite",
            "en": "Home",
        },
        "Contact": {
            "es": "Contacto",
            "fr": "Contact",
            "de": "Kontakt",
            "en": "Contact",
        },
        "About": {
            "es": "Acerca de",
            "fr": "À propos de",
            "de": "Über",
            "en": "About",
        },
    };

    function __(text) {
        return translations[text] ? translations[text]["en"] : text;
    }

    const searchForm = document.querySelector(".search-form");
    const searchFilter = document.querySelector(".search-form__filter");
    const searchFiltered = document.querySelector(".search-form__filtered");
    const searchInput = document.querySelector(".search-form__input");
    const searchSubmit = document.querySelector(".search-form__button");
    const categories = [
        { slug: 'clothing', name: "Clothing" },
        { slug: 'shoes', name: "Shoes" },
        { slug: 'accessories', name: "Accessories" },
        { slug: 'bags', name: "Bags" },
        { slug: 'jewelry', name: "Jewelry" },
        { slug: 'watches', name: "Watches" },
    ]
    const genres = {
        women: 'Women',
        men: 'Men',
    }

    let searchFilterSelected = {
        genre: null,
        category: null,
    };

    // <div class="search-form__filter-dropdown">
    //     <ul class="search-form__filter-dropdown__main">
    //         <li data-value="1" data-action="select">{{ __('Women') }} <i class="icon icon-angle-bracket-right"></i></li>
    //         <li data-value="2" data-action="select">{{ __('Men') }} <i class="icon icon-angle-bracket-right"></i></li>
    //     </ul>
    //     <ul class="search-form__filter-dropdown__sub">
    //         <li data-value="3" data-action="select">{{ __('Clothing') }}</i></li>
    //         <li data-value="4" data-action="select">{{ __('Shoes') }}</i></li>
    //         <li data-value="5" data-action="select">{{ __('Accessories') }}</i></li>
    //         <li data-value="6" data-action="select">{{ __('Bags') }}</i></li>
    //         <li data-value="7" data-action="select">{{ __('Jewelry') }}</i></li>
    //         <li data-value="8" data-action="select">{{ __('Watches') }}</i></li>
    //         <li data-value="9" data-action="select">{{ __('Sunglasses') }}</i></li>
    //     </ul>
    // </div>
    if (window.scrollY > 0) {
        document.querySelector(".header").classList.add("active");
    }

    window.addEventListener("scroll", function () {
        if (window.scrollY > 0) {
            document.querySelector(".header").classList.add("active");
        } else {
            document.querySelector(".header").classList.remove("active");
        }
    });


    searchForm.addEventListener("click", function (e) {
        switch (e.target.dataset.action) {
            case "dropdown":
                // searchFilter.classList.toggle("active");
                let dropdown = document.createElement("div");
                dropdown.classList.add("search-form__filter-dropdown");
                dropdown.innerHTML = `
                <ul class="search-form__filter-dropdown__main">
                    <li data-value="women" data-action="select" data-section="genre">${__('Women')} <i class="icon icon-angle-bracket-right"></i></li>
                    <li data-value="men" data-action="select" data-section="genre">${__('Men')} <i class="icon icon-angle-bracket-right"></i></li>
                </ul>
            `;
                searchFilter.appendChild(dropdown);
                e.target.dataset.action = "close";
                break;
            case "close":
                searchFilter.classList.remove("active");
                searchFilter.removeChild(searchFilter.querySelector(".search-form__filter-dropdown"));
                e.target.dataset.action = "dropdown";
                break;
            case "select":
                let textContent;
                searchFilter.querySelector("[data-action='close']").dataset.action = "dropdown";
                searchFilter.querySelector(".search-form__filter-dropdown").remove();
                if (e.target.dataset.section === 'genre') {
                    searchFilterSelected.genre = e.target.dataset.value;
                    searchFilterSelected.category = null;
                    textContent = __(e.target.textContent);
                }
                if (e.target.dataset.section === 'category') {
                    searchFilterSelected.genre = searchFilter.dataset.genre;
                    searchFilterSelected.category = e.target.dataset.value;
                    textContent = __(genres[searchFilterSelected.genre]) + " - " + __(e.target.textContent);
                }
                console.log(searchFilterSelected);
                searchFiltered.querySelector("span").textContent = textContent;
                break;
        }
        // if (e.target.dataset.action === "select") {
        //     searchFilter.classList.remove("active");
        //     searchFiltered.querySelector("span").textContent = e.target.textContent;
        //     searchFiltered.dataset.value = e.target.dataset.value;
        //     e.target.classList.add("active");
        // }
    });
    searchForm.addEventListener("mouseover", function (e) {
        if (e.target.dataset.section === "genre") {
            searchFilter.dataset.genre = e.target.dataset.value;
            searchFilter.querySelectorAll(".search-form__filter-dropdown__main li").forEach(li => {
                li.classList.remove("active");
            });
            e.target.classList.add("active");
            if (!document.querySelector(".search-form__filter-dropdown__sub")) {
                let dropdown = e.target.closest(".search-form__filter-dropdown");
                dropdown.innerHTML += `
                    <ul class="search-form__filter-dropdown__sub">
                    ${categories.map(c => `
                        <li data-value="${c.slug}" data-section="category" data-action="select">${__(c.name)}</li>
                    `).join("")}
                    </ul>
                `;
                dropdown.addEventListener("mouseleave", function () {
                    if (dropdown && dropdown.querySelector(".search-form__filter-dropdown__sub")) {
                        dropdown.removeChild(dropdown.querySelector(".search-form__filter-dropdown__sub"));
                    }
                })

            }
        }
    });
    window.addEventListener("click", function (e) {
        if ((!e.target.closest(".search-form__filter-dropdown") && !e.target.closest(".search-form__filtered")) && document.querySelector(".search-form__filter-dropdown")) {
            document.querySelector(".search-form__filter-dropdown").remove();
            searchFilter.querySelector("[data-action='close']").dataset.action = "dropdown";
        }
    });

    const hamburger = document.querySelector("#hamburger");

    hamburger.addEventListener("click", function () {
        const menu = createMenu();
        document.querySelector(".header").appendChild(menu);
        document.body.classList.add("no-scroll");
        document.querySelector("#close-menu").addEventListener("click", function () {
            document.body.classList.remove("no-scroll");
            document.querySelector(".menu").remove();
        });
    });


    function createMenu() {
        const menu = document.createElement("div");
        menu.classList.add("menu");
        menu.innerHTML = `
            <div class="menu__header">
                <a href="/" class="menu__logo">
                    <img src="/img/logo.png" alt="Logo">
                </a>
                <button id="close-menu" class="menu__close">
                </button>
            </div>
            <div class="menu__buttons">
                <a href="/login" class="menu__button">Login</a>
                <a href="/register" class="menu__button">Register</a>
            </div>
            <div class="menu__body">
                <ul class="menu__list">
                    <li class="menu__item
                        ${window.location.pathname === '/' ? 'active' : ''}">
                        <a href="/" class="menu__link">${__("Home")}</a>
                    </li>
                    <li class="menu__item
                        ${window.location.pathname === '/women' ? 'active' : ''}">
                        <a href="#" class="menu__link">${__("Women")}</a>
                    </li>
                    <li class="menu__item
                        ${window.location.pathname === '/men' ? 'active' : ''}">
                        <a href="#" class="menu__link">${__("Men")}</a>
                    </li>
                    <li class="menu__item
                        ${window.location.pathname === '/categories' ? 'active' : ''}">
                        <a href="#" class="menu__link">${__("Categories")}</a>
                    </li>
                    <li class="menu__item
                        ${window.location.pathname === '/contact' ? 'active' : ''}">
                        <a href="#" class="menu__link">${__("Contact")}</a>
                    </li>
                    <li class="menu__item
                        ${window.location.pathname === '/about' ? 'active' : ''}">
                        <a href="#" class="menu__link">${__("About")}</a>
                    </li>
                </ul>
            </div>
            <div class="menu__footer">
                <div class="menu__social social-media">
                    <a href="#">
                        <i class="icon icon-facebook"></i>
                    </a>
                    <a href="#">
                        <i class="icon icon-linkedin"></i>
                    </a>
                    <a href="#">
                        <i class="icon icon-twitter"></i>
                    </a>
                </div>
            </div>
        `;
        return menu;
    }



    const wrapper = document.querySelector(".home__instagram-wrapper");
    const cards = document.querySelectorAll(".instagram-card");
    const prevBtn = document.querySelector(".prev");
    const nextBtn = document.querySelector(".next");
    const dotsContainer = document.querySelector(".home__instagram-dots");

    let index = 0;
    let totalSlides = cards.length;
    let visibleSlides = calculateVisibleSlides();
    let maxIndex = totalSlides - visibleSlides;

    function calculateVisibleSlides() {
        let width = window.innerWidth;
        if (width >= 1100) return 4;
        if (width >= 768) return 3;
        return 2; // Muestra 2 en pantallas pequeñas
    }

    function updateMaxIndex() {
        visibleSlides = calculateVisibleSlides();
        maxIndex = totalSlides - visibleSlides;
        generateDots();
        updateSliderPosition();
    }

    function generateDots() {
        dotsContainer.innerHTML = "";
        for (let i = 0; i <= maxIndex; i++) {
            const dot = document.createElement("span");
            if (i === 0) dot.classList.add("active");
            dotsContainer.appendChild(dot);
        }
        addDotListeners();
    }

    function addDotListeners() {
        const dots = document.querySelectorAll(".home__instagram-dots span");
        dots.forEach((dot, i) => {
            dot.addEventListener("click", function () {
                index = i;
                updateSliderPosition();
            });
        });
    }

    function updateSliderPosition() {
        cards.forEach((card, i) => {
            const offset = (-index * 100) + "%";
            card.style.transform = `translateX(${offset})`;
        });

        updateDots();
    }

    function updateDots() {
        const dots = document.querySelectorAll(".home__instagram-dots span");
        dots.forEach((dot, i) => {
            dot.classList.toggle("active", i === index);
        });
    }

    nextBtn.addEventListener("click", function () {
        if (index < maxIndex) {
            index++;
        } else {
            index = 0; // Reiniciar al inicio
        }
        updateSliderPosition();
    });

    prevBtn.addEventListener("click", function () {
        if (index > 0) {
            index--;
        } else {
            index = maxIndex; // Ir al final
        }
        updateSliderPosition();
    });

    // Escuchar el cambio de tamaño de pantalla
    window.addEventListener("resize", updateMaxIndex);

    // Inicialización
    updateMaxIndex();
});
