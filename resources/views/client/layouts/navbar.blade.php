 <!--**********************************
  Nav header start
 ***********************************-->
<style>
    /* Default (expanded sidebar) */
    .logo-img {
        content: url("assets/images/resources/logo-white.png");
        max-width: 200px;
        transition: all 0.3s ease;
    }

    /* Sidebar collapsed (on nav-control click) */
    #main-wrapper.menu-toggle .logo-img {
        content: url("assets/images/resources/logo-icon.png");
        max-width: 55px;
    }

    /* Small screens always show icon */
    @media (max-width: 1023px) {
        .logo-img {
            content: url("assets/images/resources/logo-icon.png");
            max-width: 55px;
        }
    }
</style>

 <div class="nav-header">
     <a href="{{ route('dashboard') }}" class="brand-logo">
         <img class="logo-img" src="assets/images/resources/logo-white.png" alt="logo">
     </a>
     <div class="nav-control">
         <div class="hamburger">
             <span class="line"></span><span class="line"></span><span class="line"></span>
         </div>
     </div>
 </div>
 <!--**********************************
  Nav header end
 ***********************************-->
