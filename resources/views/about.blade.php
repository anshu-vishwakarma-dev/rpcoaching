<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
<link rel="stylesheet" href="https://yt3.googleusercontent.com/z3TjI8EfRupC6PpE7DIpgdjIirSZO4DMKvTBLuDbR5jdOXLewwallOh8jctLfqaUOvxRx7k1v30=s160-c-k-c0x00ffffff-no-rj">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" 
integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="icon" href="{{ asset('images/logo.jpg') }}">
<link rel="stylesheet" href="{{ asset('css/style1.css') }}">
</head>
<body>

<!-- Navbar -->
<nav class="navbar">
  <div class="logo">
    <!-- RP<span>Coaching</span>  -->
    <img src="https://yt3.googleusercontent.com/z3TjI8EfRupC6PpE7DIpgdjIirSZO4DMKvTBLuDbR5jdOXLewwallOh8jctLfqaUOvxRx7k1v30=s160-c-k-c0x00ffffff-no-rj" alt=""></div>

  <!-- Menu -->
  <ul class="nav-links" id="menu">
    <li><a href="{{ url('/') }}"><i class="fa-solid fa-house"></i>Home</a></li>
    <li><a href="#">About Us</a></li>
    <li class="dropdown">
      <a href="{{ url('Math') }}">Courses / Programs ▾</a>
      <ul class="dropdown-menu">
      <li><a href="{{ url('Math') }}">Math</a></li>
        <li><a href="{{ url('Math') }}">Physics</a></li>
        <li><a href="{{ url('Math') }}">Chemistry</a></li>
        <li><a href="{{ url('Math') }}">English</a></li>
        <li><a href="{{ url('Math') }}">Biology</a></li>
        <li><a href="{{ url('Math') }}">NCERT Solve</a></li>
        <li><a href="{{ url('Math') }}">Board Preparation (CBSE, State Boards)</a></li>
      </ul>
    </li>
     <li class="dropdown">
      <a href="{{ url('batch') }}">Batches ▾</a>
      <ul class="dropdown-menu">
        <li><a href="{{ url('batch') }}">Class 11th</a></li>
        <li><a href="{{ url('batch') }}">Class 12th</a></li>
        <li><a href="{{ url('batch') }}">Class 6th</a></li>
        <li><a href="{{ url('batch') }}">Class 7th</a></li>
        <li><a href="{{ url('batch') }}">Class 8th</a></li>
        <li><a href="{{ url('batch') }}">Class 9th</a></li>
        <li><a href="{{ url('batch') }}">Class 10th</a></li>
      </ul>
    </li>
    <li><a href="{{ url('result') }}">Results</a></li>
    <li class="dropdown">
      <a href="{{ url('study') }}">Study Material ▾</a>
      <ul class="dropdown-menu">
        <li><a href="{{ url('study') }}">Previos Year Papers</a></li>
        <li><a href="{{ url('study') }}">Sample Papers</a></li>
        <li><a href="{{ url('study') }}">Syllabus</a></li>
        <li><a href="{{ url('study') }}">Exam Date</a></li>
        <li><a href="{{ url('study') }}">Question Papers</a></li>
        <li><a href="{{ url('study') }}">PDF Chapter Vise</a></li>
        <li><a href="{{ url('study') }}">Recorded Video</a></li>
      </ul>
    </li>
    <!-- <li><a href="#">Contact Us</a></li> -->
  </ul>

  <!-- CTA Button -->
      <a href="https://wa.me/918090910253" class="btn1"><i class="fa-solid fa-phone-volume"></i></a>
 <a href="javascript:void(0)" onclick="openDrawer()" class="btn">Registration / Login</a>

  <!-- Hamburger Menu -->
  <div class="menu-icon" onclick="toggleMenu()">&#9776;</div>
</nav>

<!-- 🔹 Registration Drawer + Overlay -->
<div class="drawer-overlay" id="overlay" onclick="closeDrawer()"></div>
<div class="drawer" id="drawer">
  <div class="drawer-header">
    <!-- <button >×</button> -->
    <span class="logo">RP LEARNING CLASSES  <img src="https://yt3.googleusercontent.com/z3TjI8EfRupC6PpE7DIpgdjIirSZO4DMKvTBLuDbR5jdOXLewwallOh8jctLfqaUOvxRx7k1v30=s160-c-k-c0x00ffffff-no-rj" alt="" onclick="closeDrawer()"></span>
  </div>
  <!-- <h3>Login with mobile number</h3> -->
  <input type="text" placeholder="Enter 10-digit mobile number">
  <button class="submit">Send OTP</button>
  <div class="divider">or</div>
  <button class="alt">Continue with Form ID</button>
  <button class="alt">Continue with Email ID</button>
  <p>By continuing you are accepting our <a href="#">privacy policy</a> and <a href="#">T&amp;C</a></p>
</div>

<div class="top-banner">
    Hurry!✨ LAST BATCH OF 2025 • Enrol now self-study Course & Test Series
  </div>

<!-- About Us -->
  <section class="about-section">
    <div class="container">
      <!-- <h2>About Us</h2> -->
      <p class="lead">
        RP Coaching is your gateway to success with expert online & Offline coaching and flexible learning!
      </p>

      <div class="about-grid">
        <div class="about-item">
          <h3>Mission</h3>
          <p>Empowering students with knowledge and confidence for exams and life.</p>
        </div>
        <div class="about-item">
          <h3>Vision</h3>
          <p>To build a smarter, skillful generation through quality online education.</p>
        </div>
        <div class="about-item">
          <h3>Why Us?</h3>
          <ul>
            <li>Certified Tutors</li>
            <li>Live + Recorded Classes</li>
            <li>Anytime Access</li>
            <li>Affordable Pricing</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Video Section -->
  <section class="video-section">
    <div class="container">
      <h2>Watch Our Intro....</h2>
      <div class="video-container">
        <iframe src="https://www.youtube.com/embed/TR1RPNywJhs?si=zjPChP8QB-SwuAok" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>
    </div>
  </section>

<section class="team-section">
    <div class="container">
      <h2>Meet Our Team....</h2>
  <div class="slider-wrapper">
  <button class="nav1 prev">&#10094;</button>

  <div class="slider-track">
    <!-- Profile Cards -->
    <div class="slide">
      <img src="{{ asset('images/rp.png') }}" alt="Rujul Garg">
      <h3>Ram Pravesh Yadav(RP sir)</h3>
      <p>Math & Physics Expert</p>
    </div>

    <div class="slide">
      <img src="{{ asset('images/rp.png') }}" alt="Rujul Garg">
      <h3>Dinesh Yadav (DK sir)</h3>
      <p>Chemistry Expert</p>
    </div>

    <div class="slide">
      <img src="{{ asset('images/rp.png') }}" alt="Shreyas Lohiya">
      <h3>Shreyas Lohiya</h3>
      <p>JEE (ADVANCED), 2025</p>
    </div>
    <div class="slide">
      <img src="{{ asset('images/rp.png') }}" alt="Utkarsh Awadhiya">
      <h3>Utkarsh Awadhiya</h3>
      <p>NEET-UG, 2025</p>
    </div>
    <div class="slide">
      <img src="{{ asset('images/rp.png') }}" alt="Other Student">
      <h3>Other Student</h3>
      <p>JEE/NEET, 2025</p>
    </div>
    <!-- Add more if needed -->
  </div>

  <button class="nav1 next">&#10095;</button>
</div>
        </div>
        </section>

  <!-- Testimonials -->
  <section class="testimonials-section">
    <div class="container">
      <h2>Testimonials....</h2>
      <div class="testimonial">
        <p>"EduMaster made online learning easy and fun! Highly recommend it."</p>
        <h4>– RP Sir</h4>
      </div>
      <div class="testimonial">
        <p>"Best platform for exam prep. Teachers are very supportive."</p>
        <h4>– DK Sir</h4>
      </div>
       </div>
  </section>

  <!-- Contact Form -->
  <section class="contact-section">
    <div class="container">
      <h2>Contact Us...</h2>
      <form id="contact-form">
        <input type="text" placeholder="Your Name" required />
        <input type="email" placeholder="Your Email" required />
        <textarea placeholder="Your Message" rows="5" required></textarea>
        <button type="submit">Send Message</button>
      </form>
    </div>
  </section>

 
<footer class="custom-footer">
  <div class="footer-top">
    <div class="footer-section">
      <h4 class="heading">OUR OFFERINGS</h4>
      <p class="paragraph">
        Class 6 | Class 7 | Class 8 | Class 10 |
        Class 11 | Class 12 | Mathematics Coaching | Physics Coaching |
        Chemistry<sup>®</sup> Coaching | GRE<sup>®</sup> Coaching | Solve Question Paper |
        Test Series | Chapter Wise Test | School Tuitions |
        English Coaching | Hindi Coaching | Polytechnic Entrance Test Coaching | UP Board NCERT Hole Syllbus
      </p>
    </div>

    <div class="footer-section">
      <h4 class="heading">OUR CENTERS</h4>
      <p class="paragraph">
        Shambhuganj Sultanpur | Madafarpur Pratapgarh | Online Coaching Provide | Offline Coaching Provide | 
         <a href="#">View More</a>
      </p>
    </div>
  </div>

  <hr class="footer-divider" />

  <div class="footer-links">
    <a href="#">T.I.M.E. in Media</a> |
    <a href="#">Terms & Conditions</a> |
    <a href="#">Privacy Statement</a> |
    <a href="#">Refund Policy</a> |
    <a href="#">Reports</a> |
    <a href="#">Disclaimer on banner Ads</a>
  </div>

  <div class="footer-legal">
    <p>
      GRE<sup>®</sup>, TOEFL<sup>®</sup> and TOEFL iBT<sup>®</sup> are registered trademarks of
      Educational Testing Service (ETS). This product is not endorsed or approved by ETS.<br />
      GMAT<sup>®</sup> is the registered trademark of the Graduate Management Admission Council<sup>®</sup> (GMAC<sup>®</sup>)<br />
      Copyright &copy; 2024 Advanced Educational Activities Pvt. Ltd. All rights reserved.
    </p>
  </div>

  <div class="footer-bottom">
    <p>&copy; 2024 Advanced Educational Activities Pvt. Ltd.</p>
    <div class="social-icons">
      <a href="#"><i class="fa-brands fa-instagram"></i></a>
      <a href="#"><i class="fa-brands fa-facebook"></i></a>
      <a href="#"><i class="fa-brands fa-youtube"></i></a>
      <a href="#"><i class="fa-solid fa-phone"></i></a>
    </div>
  </div>
</footer>

<script>

  const drawer=document.getElementById('drawer');
const overlay=document.getElementById('overlay');
function openDrawer(){
  drawer.classList.add('open');
  overlay.classList.add('active');
}
function closeDrawer(){
  drawer.classList.remove('open');
  overlay.classList.remove('active');
}

</script>

<script src="{{ asset('js/script.js') }}"></script>    
</body>
</html>