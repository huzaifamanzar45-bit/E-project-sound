<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="DJoz Template">
    <meta name="keywords" content="DJoz, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DJoz | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="users/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="users/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="users/css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="users/css/nowfont.css" type="text/css">
    <link rel="stylesheet" href="users/css/rockville.css" type="text/css">
    <link rel="stylesheet" href="users/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="users/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="users/csss/licknav.min.css" type="text/css">
    <link rel="stylesheet" href="users/css/style.css" type="text/css">
     <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
   <header class="sound-header">

    <!-- LEFT SIDE -->
    <div class="sound-header-left">

       <button class="menu-btn" id="menuBtn">
    ☰
</button>


<!-- SIDEBAR -->
<aside class="sound-sidebar" id="soundSidebar">

    <div class="sidebar-logo">
        <img src="<?php echo e(asset('users/img/weblogo.png')); ?>" alt="SOUND">
    </div>

    <div class="sidebar-menu">

        <a href="/index">
<i class="fa-solid fa-house"></i>            
<span>Home</span>
        </a>

        <a href="/about">
            <span>ℹ️</span>
            <span>About</span>
        </a>

        <a href="/videos">
            <span>▶️</span>
            <span>Videos</span>
        </a>

        <a href="/blogs">
            <span>📝</span>
            <span>Blog</span>
        </a>

        <a href="/contact">
            <span>✉️</span>
            <span>Contact</span>
        </a>

    </div>

</aside>


<!-- Background Overlay -->
<div class="sidebar-overlay" id="sidebarOverlay"></div>

        <div class="sound-logo">
            <a href="/index">
                <img src="<?php echo e(asset('users/img/weblogo.png')); ?>" alt="SOUND">
            </a>
        </div>

    </div>


    <!-- CENTER SEARCH -->
    <div class="sound-search">

        <input
            type="text"
            id="searchInput"
            placeholder="Search songs, artists, albums..."
            autocomplete="off"
        >

        <button id="searchBtn">
           <i class="fa-solid fa-magnifying-glass"></i>
        </button>

    </div>


    <!-- RIGHT SIDE -->
    <div class="sound-header-right">

        <a href="/signup" class="signup-link">
            Sign up
        </a>

        <a href="/login" class="login-btn">
            Login
        </a>

       

    </div>

</header>


<!-- ================= SIDEBAR ================= -->

<aside class="sound-sidebar" id="soundSidebar">

    <!-- MAIN -->
    <div class="sidebar-section">

        <a href="/index" class="sidebar-link active">
            <span>⌂</span>
            <p>Home</p>
        </a>

        <a href="/videos" class="sidebar-link">
            <span>▶</span>
            <p>Videos</p>
        </a>

    </div>


    <!-- MUSIC -->
    <div class="sidebar-section">

        <h3>
            Music
            <span>›</span>
        </h3>

        <a href="/artists" class="sidebar-link">
            <span>🎤</span>
            <p>Popular Artists</p>
        </a>

        <a href="/albums" class="sidebar-link">
            <span>💿</span>
            <p>Albums</p>
        </a>

        <a href="/playlists" class="sidebar-link">
            <span>📋</span>
            <p>Playlists</p>
        </a>

    </div>


    <!-- YOUR MUSIC -->
    <div class="sidebar-section">

        <h3>
            Your Music
            <span>›</span>
        </h3>

        <a href="/liked-songs" class="sidebar-link">
            <span>♥</span>
            <p>Liked Songs</p>
        </a>

        <a href="/history" class="sidebar-link">
            <span>◷</span>
            <p>History</p>
        </a>

    </div>


    <!-- WEBSITE -->
    <div class="sidebar-section">

        <h3>
            Explore
        </h3>

        <a href="/about" class="sidebar-link">
            <span>ⓘ</span>
            <p>About</p>
        </a>

        <a href="/blogs" class="sidebar-link">
            <span>📝</span>
            <p>Blog</p>
        </a>

        <a href="/contact" class="sidebar-link">
            <span>✉</span>
            <p>Contact</p>
        </a>

    </div>


    <!-- OTHER -->
    <div class="sidebar-section">

        <a href="/settings" class="sidebar-link">
            <span>⚙</span>
            <p>Settings</p>
        </a>

    </div>

</aside>


<!-- SIDEBAR OVERLAY -->

<div class="sidebar-overlay" id="sidebarOverlay"></div>


<!-- SEARCH RESULTS -->

<div class="sound-search-results" id="searchResults"></div>
    <!-- Header Section End -->

<?php echo $__env->yieldContent('content'); ?>


     <!-- Footer Section Begin -->
    <footer class="footer footer--normal spad set-bg" data-setbg="users/img/footer-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer__address">
                        <ul>
                            <li>
                                <i class="fa fa-phone"></i>
                                <p>Phone</p>
                                <h6>1-677-124-44227</h6>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <p>Email</p>
                                <h6>soundsupport@gmail.com</h6>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 col-md-6">
                    <div class="footer__social">
                        <img src="users/img/weblogo.png" alt="" class="logoimg w-50 h-50">
                        <div class="footer__social__links">
                            <a href="https://www.facebook.com/?_rdr"><i class="fa-brands fa-facebook"></i></a>
                            <a href="https://x.com/"><i class="fa-brands fa-square-x-twitter"></i></a>
                            <a href="https://www.instagram.com/?flo=true"><i class="fa-brands fa-square-instagram"></i></a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6">
                    <div class="footer__newslatter">
                        <h4>Stay With me</h4>
                        <form action="#">
                            <input type="text" placeholder="Email">
                            <button type="submit"><i class="fa fa-send-o"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="users/js/jquery-3.3.1.min.js"></script>
    <script src="users/js/bootstrap.min.js"></script>
    <script src="users/js/jquery.magnific-popup.min.js"></script>
    <script src="users/js/jquery.nicescroll.min.js"></script>
    <script src="users/js/jquery.barfiller.js"></script>
    <script src="users/js/jquery.countdown.min.js"></script>
    <script src="users/js/jquery.slicknav.js"></script>
    <script src="users/js/owl.carousel.min.js"></script>
    <script src="users/js/main.js"></script>

    <!-- Music Plugin -->
    <script src="users/js/jquery.jplayer.min.js"></script>
    <script src="users/js/jplayerInit.js"></script>

    <script>

    function scrollArtists() {

        const container =
            document.getElementById('artistsContainer');

        container.scrollBy({
            left: 500,
            behavior: 'smooth'
        });

    }
</script>

<script>
    function scrollSongs(direction) {
        const container = document.getElementById('songCards');

        container.scrollBy({
            left: direction * 250,
            behavior: 'smooth'
        });
    }
</script>


<script>
    const menuBtn = document.getElementById("menuBtn");
const soundSidebar = document.getElementById("soundSidebar");
const sidebarOverlay = document.getElementById("sidebarOverlay");


menuBtn.addEventListener("click", function () {

    soundSidebar.classList.toggle("show");

    sidebarOverlay.classList.toggle("show");

});


sidebarOverlay.addEventListener("click", function () {

    soundSidebar.classList.remove("show");

    sidebarOverlay.classList.remove("show");

});
</script>


</body>

</html><?php /**PATH C:\Users\123\OneDrive\Desktop\E-project-sound\resources\views/user/layout.blade.php ENDPATH**/ ?>