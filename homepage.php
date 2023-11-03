<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== REMIXICONS ===============-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.4.0/remixicon.css" crossorigin="">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="./css/test.css">

      <title>Responsive sidebar menu - Bedimcode</title>
   </head>
   <body>
      <!-- Sidebar bg -->
      <img src="assets/img/sidebar-bg.jpg" alt="sidebar img" class="bg-image">

      <!--=============== HEADER ===============-->
      <header class="header">
         <div class="header__container container">
            <div class="header__toggle" id="header-toggle">
               <i class="ri-menu-line"></i>
            </div>

            <a href="#" class="header__logo">
               <img src="assets/img/yt-logo-full.svg" alt="">
            </a>
         </div>
      </header>

      <!--=============== SIDEBAR ===============-->
      <div class="sidebar" id="sidebar">
         <nav class="sidebar__container">
            <div class="sidebar__logo">
               <img src="assets/img/yt-logo.svg" alt="" class="sidebar__logo-img">
               <img src="assets/img/yt-logo-text.svg" alt="" class="sidebar__logo-text">
            </div>

            <div class="sidebar__content">
               <div class="sidebar__list">
                  <a href="#" class="sidebar__link active-link">
                     <i class="ri-home-5-line"></i>
                     <span class="sidebar__link-name">Home</span>
                     <span class="sidebar__link-floating">Home</span>
                  </a>
                  
                  <a href="#" class="sidebar__link">
                     <i class="ri-compass-3-line"></i>
                     <span class="sidebar__link-name">Explore</span>
                     <span class="sidebar__link-floating">Explore</span>
                  </a>

                  <a href="#" class="sidebar__link">
                     <i class="ri-video-line"></i>
                     <span class="sidebar__link-name">Shorts</span>
                     <span class="sidebar__link-floating">Shorts</span>
                  </a>

                  <a href="#" class="sidebar__link">
                     <i class="ri-add-box-line"></i>
                     <span class="sidebar__link-name">Subscription</span>
                     <span class="sidebar__link-floating">Subscription</span>
                  </a>
               </div>

               <h3 class="sidebar__title">
                  <span>Library</span>
               </h3>

               <div class="sidebar__list">
                  <a href="#" class="sidebar__link">
                     <i class="ri-history-line"></i>
                     <span class="sidebar__link-name">History</span>
                     <span class="sidebar__link-floating">History</span>
                  </a>

                  <a href="#" class="sidebar__link">
                     <i class="ri-time-line"></i>
                     <span class="sidebar__link-name">Watch Later</span>
                     <span class="sidebar__link-floating">Watch Later</span>
                  </a>

                  <a href="#" class="sidebar__link">
                     <i class="ri-play-circle-line"></i>
                     <span class="sidebar__link-name">Playlists</span>
                     <span class="sidebar__link-floating">Playlists</span>
                  </a>

                  <a href="#" class="sidebar__link">
                     <i class="ri-heart-3-line"></i>
                     <span class="sidebar__link-name">Liked Videos</span>
                     <span class="sidebar__link-floating">Liked Videos</span>
                  </a>
               </div>

               <h3 class="sidebar__title">
                  <span>General</span>
               </h3>

               <div class="sidebar__list">
                  <a href="#" class="sidebar__link">
                     <i class="ri-notification-2-line"></i>
                     <span class="sidebar__link-name">Notifications</span>
                     <span class="sidebar__link-floating">Notifications</span>
                  </a>

                  <a href="#" class="sidebar__link">
                     <i class="ri-settings-3-line"></i>
                     <span class="sidebar__link-name">Settings</span>
                     <span class="sidebar__link-floating">Settings</span>
                  </a>

                  <a href="#" class="sidebar__link">
                     <i class="ri-logout-box-r-line"></i>
                     <span class="sidebar__link-name">Logout</span>
                     <span class="sidebar__link-floating">Logout</span>
                  </a>
               </div>
            </div>

            <div class="sidebar__account">
               <img src="assets/img/perfil.png" alt="sidebar image" class="sidebar__perfil">

               <div class="sidebar__names">
                  <h3 class="sidebar__name">Will Lens</h3>
                  <span class="sidebar__email">willens@email.com</span>
               </div>

               <i class="ri-arrow-right-s-line"></i>
            </div>
         </nav>
      </div>

      <!--=============== MAIN ===============-->
      <main class="main container" id="main">
         <h1>Sidebar Menu</h1>
      </main>
      
      <!--=============== MAIN JS ===============-->
      <script src="assets/js/main.js"></script>
      <script>
        const showSidebar = (toggleId, sidebarId, mainId) =>{
   const toggle = document.getElementById(toggleId),
   sidebar = document.getElementById(sidebarId),
   main = document.getElementById(mainId)

   if(toggle && sidebar && main){
       toggle.addEventListener('click', ()=>{
           /* Show sidebar */
           sidebar.classList.toggle('show-sidebar')
           /* Add padding main */
           main.classList.toggle('main-pd')
       })
   }
}
showSidebar('header-toggle','sidebar', 'main')

/*=============== LINK ACTIVE ===============*/
const sidebarLink = document.querySelectorAll('.sidebar__link')

function linkColor(){
    sidebarLink.forEach(l => l.classList.remove('active-link'))
    this.classList.add('active-link')
}

sidebarLink.forEach(l => l.addEventListener('click', linkColor))
      </script>
   </body>
</html>