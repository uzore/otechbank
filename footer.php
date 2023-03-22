<footer class="footer-wrap bg-rock">
  <div class="container">
    <img src="assets/img/footer-shape-1.png" alt="Image" class="footer-shape-one">
    <img src="assets/img/footer-shape-2.png" alt="Image" class="footer-shape-two">
    <div class="row pt-100 pb-75">
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
        <div class="footer-widget">
          <a href="index.html" class="footer-logo">
            <img src="assets/img/logo-white.png" alt="Image">
          </a>
          <p class="comp-desc">
            Otech is licensed by the Central Bank of Nigeria (CBN) to operate as a Microfinance Bank. We are focused on provision of financial inclusiveness to Small and Medium Scale Enterprises.
          </p>
          <div class="social-link">
            <ul class="social-profile list-style style1">
              <li>
                <a target="_blank" href="https://facebook.com/otechmfb">
                  <i class="ri-facebook-fill"></i>
                </a>
              </li>
              <li>
                <a target="_blank" href="https://twitter.com/otechbank">
                  <i class="ri-twitter-fill"></i>
                </a>
              </li>
              <li>
                <a target="_blank" href="https://linkedin.com/in/otechbank">
                  <i class="ri-linkedin-fill"></i>
                </a>
              </li>
              <li>
                <a target="_blank" href="https://instagram.com/otechbank">
                  <i class="ri-instagram-fill"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
        <div class="footer-widget">
          <h3 class="footer-widget-title">Otech MFB</h3>
          <ul class="footer-menu list-style">
            <li>
              <a href="about.php">
                <i class="flaticon-next"></i>
                Who we are
              </a>
            </li>
            <li>
              <a href="index.php">
                <i class="flaticon-next"></i>
                Our Services
              </a>
            </li>
            <li>
              <a href="about.php">
                <i class="flaticon-next"></i>
                Our Values
              </a>
            </li>
            <li>
              <a href="about.php">
                <i class="flaticon-next"></i>
                Goals and Objectives
              </a>
            </li>
            <li>
              <a href="#">
                <i class="flaticon-next"></i>
                Contact Us
              </a>
            </li>
            <li>
              <a href="privacy.php">
                <i class="flaticon-next"></i>
                Privacy Policy
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
        <div class="footer-widget">
          <h3 class="footer-widget-title">Products</h3>
          <ul class="footer-menu list-style">
            <li>
              <a href="#">
                <i class="flaticon-next"></i>
                Savings Accounts

              </a>
            </li>
            <li>
              <a href="#">
                <i class="flaticon-next"></i>
                Current Accounts

              </a>
            </li>
            <li>
              <a href="#">
                <i class="flaticon-next"></i>
                Investments

              </a>
            </li>
            <li>
              <a href="header.php">
                <i class="flaticon-next"></i>
                Loan Products

              </a>
            </li>
            <li>
              <a href="#">
                <i class="flaticon-next"></i>
                Otech Insurance

              </a>
            </li>
            <li>
              <a href="index.php">
                <i class="flaticon-next"></i>
                ATM and POS
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
        <div class="footer-widget">
          <h3 class="footer-widget-title">Open an account</h3>
          <p class="newsletter-text">Choose from our several account options</p>
          <div class="hero-btn">
            <a href="index.php?action=new_account" class="btn style1">Open an Account</a>

            </a>
          </div>

        </div>
      </div>
    </div>
  </div>
  <div class="copyright-text">
    <p> <i class="ri-copyright-line"></i> <a href="index.php?action=home">2022 Otech Microfinance Bank</a> &nbsp;| &nbsp; All Rights Reserved &nbsp;| &nbsp; <a href="terms.php?action=Terms & Conditions">Terms & conditions</a></p>
  </div>

  <!-- Messenger Chat plugin Code -->
  <div id="fb-root"></div>

  <!-- Your Chat plugin code -->
  <div id="fb-customer-chat" class="fb-customerchat">
  </div>

  <script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "104807475717415");
    chatbox.setAttribute("attribution", "biz_inbox");
  </script>

  <!-- Your SDK code -->
  <script>
    window.fbAsyncInit = function() {
      FB.init({
        xfbml: true,
        version: 'v16.0'
      });
    };

    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
</footer>