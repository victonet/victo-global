<!-- Desktop NavBar -->
<div class="header-wrap__desktop">
    <header>
        <nav id="desktop">
            <div class="logo-container">
                <a href="/global/"><img src="/global/static/img/logo-and-icons/victo-global-logo.svg" width="220px" alt="Victo Logo" title="Victo Global Logo"></a>
            </div>

            <ul class="nav-items">
                <li><a href="/global/" class="nav-item">Home</a></li>
                <li><a href="/global/about" class="nav-item">About us</a></li>
                <li><a href="/global/victo-pay" class="nav-item">Victo Pay</a></li>
                <li><a href="/global/contact" class="nav-item">Contact us</a></li>
            </ul>
        </nav>
    </header>
</div>

<!-- Responsive NavBar -->
<div class="header-wrap__respo">
    <header>
        <nav id="respo">

            <div class="logo-container">
                <a href="/global/"><img src="/global/static/img/logo-and-icons/victo-global-logo.svg" width="220px" alt="Victo Logo" title="Victo Global Logo"></a>
            </div>

            <div class="ham-wrap">
                <span style="font-size:1.8rem;cursor:pointer;color:#33bff7" onclick="openNav()"<i class="fas fa-bars"></i></span>
                <div id="myNav" class="overlay">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <div class="overlay-content">
                      <a href="/global/" class="mob-nav-item">Home</a>
                      <a href="/global/about/" class="mob-nav-item">About us</a>
                      <a href="/global/victo-pay">Victo Pay</a>
                      <a href="/global/contact">Contact us</a>
                    </div>
                  </div>
            </div>

            <script>
                function openNav() {
                  document.getElementById("myNav").style.width = "100%";
                }
                
                function closeNav() {
                  document.getElementById("myNav").style.width = "0%";
                }
                </script>

            </nav>
            </header>
</div>