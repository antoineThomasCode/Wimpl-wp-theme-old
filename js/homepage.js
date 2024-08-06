// Récupère les infos des freelances
/*
async function getFreelancesInfos() {
    try {
        const response = await fetch('https://wimpl.tech/wp-json/wp/v2/freelances', {
            method: 'GET'
        })
        const data = await response.json()

        /!*console.log(data)*!/

        return data
    } catch (error) {
        console.log(error)
    }
}
const freelancesArray = await getFreelancesInfos()
*/


// Affiche le menu des catégories de métier
/*
async function displayFreelancesJobsMenu () {
    const freelancesArray = await getFreelancesInfos()
    const jobsArray = []

    freelancesArray.forEach(element => {
        jobsArray.push(element.acf.metier)
    })

    // Supprime les doublons
    const newJobList = jobsArray.filter((x, i) => jobsArray.indexOf(x) === i)

    newJobList.forEach(element => {
        document.getElementById('jobs-menu').innerHTML +=
            `<li class="job-name">${element}</li>`
    })
}
await displayFreelancesJobsMenu()
*/




/*// Affiche les infos des freelances
async function displayFreelancesInfos (array) {

    if (!document.getElementById('freelances-container')){
        return
    }

    const promises = await array.map(freelance => {
        document.getElementById('freelances-container').innerHTML +=
        `<a href="${freelance.link}" class="swiper-slide freelance-slide">
            <article>
                <figure>
                    <img src="${freelance.acf?.photo_du_freelance}">
                </figure>
                <div class="shadow-container">
                    <div class="freelance-infos">
                        <h3>${freelance.title?.rendered}</h3>
                        <p class="jobs">
                            <i class="fa-solid fa-briefcase"></i>
                            ${freelance.acf?.metier}
                        </p>
                        <p class="location"><i class="fa-solid fa-location-dot"></i> Localisé(e) à ${freelance.acf?.localisation}</p>
                        <p class="tjm">${freelance.acf?.taux_journalier_moyen} €/jour</p>
                    </div>
                </div>
            </article>
        </a>`
    })
    await Promise.all(promises)
}
await displayFreelancesInfos(freelancesArray)*/




// Filtre l'affichage des freelances
/*
async function filterFreelances () {
    const jobList = Array.from( await document.getElementsByClassName('job-name'))
    const freelancesArray = await getFreelancesInfos()

    jobList.forEach(element => {
        element.addEventListener('click', function (event) {
            console.log('lalalal', element.textContent)
            const test = freelancesArray.filter(freelance => freelance.acf.metier === element.textContent)

            console.log(test, 'oui')
            const swiperSlide = Array.from(document.getElementsByClassName('freelance-slide'))
            swiperSlide.forEach(element => {
                document.getElementById('freelances-container').removeChild(element)
            })


            displayFreelancesInfos(test)
        })
    })
}
await filterFreelances()*/

/*
async function getOffersInfos() {
    try {
        const response = await fetch('https://wimpl.tech/wp-json/wp/v2/offres', {
            method: 'GET'
        })
        const data = await response.json()

        return data
    } catch (error) {
        console.log(error)
    }
}
const offersArray = await getOffersInfos()

// console.log(offersArray)


async function displayOffersInfos (array) {
    if (!document.getElementById('offers-container')) {
        return
    }

    const promises = await array.map(offer => {
        document.getElementById('offers-container').innerHTML +=
            `<article>
                <h3>${offer.title.rendered}</h3>
                <div class="offer-price">
                    <span>À partir de</span>
                    <span class="price">${offer.acf?.tarifs}</span>
                </div>
                <ul>
                    <li class="grey-background"><i class="fa-solid fa-plus"></i><p>${offer.acf?.support}</p></li>
                    <li><i class="fa-solid fa-plus"></i><p>${offer.acf?.optimisation}</p></li>
                    <li class="grey-background"><i class="fa-solid fa-plus"></i><p>${offer.acf?.interface}</p></li>
                    <li><i class="fa-solid fa-plus"></i><p>${offer.acf?.developpement}</p></li>
                    <li class="grey-background"><i class="fa-solid fa-plus"></i><p>${offer.acf?.charte_graphique}</p></li>
                </ul>
            </article>`
    })
    await Promise.all(promises)
}
await displayOffersInfos(offersArray)


export {getFreelancesInfos}*/



/* new code */

/*function addSwiperHowCanHelp() {
    const swiper = new Swiper('.swiper-helper', {
        direction: 'horizontal',
        pagination: {
            el: '.swiper-pagination ',
            type: 'bullets',
            clickable: true,
        },
        breakpoints: {
            0: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 20,
            }
        }
    });
}
addSwiperHowCanHelp()*/


function animateCounters(element) {
    const counter = element.target

    const targetCount = parseInt(counter.getAttribute('data-count'));
    let currentCount = 0;
    const duration = 3000;
    const step = Math.ceil(targetCount / (duration / 100));
    const interval = setInterval(() => {
        currentCount += step;
        if (currentCount >= targetCount) {
            clearInterval(interval);
            currentCount = targetCount;
        }
        counter.textContent = currentCount ;
    }, 100);
}

function animateCountersIfVisible() {
    const countersContainer = document.querySelectorAll('.number [data-count]');

    const options = {
        root: null,
        rootMargin: '0px',
        threshold: 1
    };

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounters(entry);
                observer.unobserve(entry.target);
            }
        });
    }, options);

    countersContainer.forEach(counter => {
        observer.observe(counter);
    })
}
animateCountersIfVisible()

function addSplidesReviews () {
    new Splide( '.splide', {
        type: 'loop',
        arrows: false,
        pagination: false,
        autoWidth: true,
        drag: false,
        pauseOnHover: false,
        autoScroll: {
            speed: 1,
        },
        breakpoints: {
            2440: {
                gap: '30px',
            },
            991: {
                gap: '25px',
            },
            767: {
                gap: '20px',
            },
        },
    }).mount( window.splide.Extensions );

    new Splide( '.splide-reverse', {
        type: 'loop',
        arrows: false,
        pagination: false,
        autoWidth: true,
        drag: false,
        pauseOnHover: false,
        autoScroll: {
            speed: -1,
        },
        breakpoints: {
            2440: {
                gap: '30px',
            },
            991: {
                gap: '25px',
            },
            767: {
                gap: '20px',
            },
        },
    }).mount( window.splide.Extensions );
}
addSplidesReviews()


