// Affichage du menu Tablette/Mobile
function displayMenu () {
    const btnMenu = document.getElementById("menuBtn")
    const navMenu = document.getElementById('menu-navigation')
    const menuItems = Array.from(document.getElementsByClassName('menu-item'))
    const openBtn = document.getElementsByClassName('open-btn')
    const closeBtn = document.getElementsByClassName('close-btn')

    btnMenu.addEventListener("click", function (event) {
        event.preventDefault()

        if ( navMenu.style.height ==  "90vh") {
            navMenu.style.height = "0"
            navMenu.style.opacity = "0"
            btnMenu.style.color = "black"
            closeBtn[0].style.display = "none"
            openBtn[0].style.display = "flex"

            menuItems.forEach(element => { 
                element.classList.remove('open-menu')
            })
            return
        }

        closeBtn[0].style.display = "flex"
        openBtn[0].style.display = "none"
        btnMenu.style.color = "var(--secondary-color)"
        navMenu.style.height = "90vh"
        navMenu.style.opacity = "1"
        menuItems.forEach(element => {
            element.classList.add('open-menu')
        })
    })
}
/*
displayMenu()*/
