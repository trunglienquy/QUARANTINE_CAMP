const showMenu = (toggleId, navbarId) =>{
    const toggle = document.getElementById(toggleId),
    navbar = document.getElementById(navbarId),
    text = document.querySelector('.text')

    if (toggle && navbar){
        toggle.addEventListener('click', ()=>{
            navbar.classList.toggle('show')
            text.classList.toggle('show')
        })
    }
    console.log(text)
}
showMenu('nav-toggle', 'navbar')


