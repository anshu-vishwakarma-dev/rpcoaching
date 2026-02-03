<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Result Slider</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
<link rel="stylesheet" href="https://yt3.googleusercontent.com/z3TjI8EfRupC6PpE7DIpgdjIirSZO4DMKvTBLuDbR5jdOXLewwallOh8jctLfqaUOvxRx7k1v30=s160-c-k-c0x00ffffff-no-rj">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" 
integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="icon" href="{{ asset('images/logo.jpg') }}">
<link rel="stylesheet" href="{{ asset('css/style4.css') }}">
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
    <li><a href="{{ url('about') }}">About Us</a></li>
    
    <li class="dropdown">
      <a href="#">Courses / Programs ▾</a>
      <ul class="dropdown-menu">
        <li><a href="{{ url('Math') }}">Math</a></li>
        <li><a href="#">Physics</a></li>
        <li><a href="#">Chemistry</a></li>
        <li><a href="#">English</a></li>
        <li><a href="#">Biology</a></li>
        <li><a href="#">NCERT Solve</a></li>
        <li><a href="#">Board Preparation (CBSE, State Boards)</a></li>
      </ul>
    </li>

    <!-- <li><a href="#">Batches</a></li> -->
    <li class="dropdown">
      <a href="#">Batches ▾</a>
      <ul class="dropdown-menu">
        <li><a href="{{ url('batch') }}">Class 11th</a></li>
        <li><a href="#">Class 12th</a></li>
        <li><a href="#">Class 6th</a></li>
        <li><a href="#">Class 7th</a></li>
        <li><a href="#">Class 8th</a></li>
        <li><a href="#">Class 9th</a></li>
        <li><a href="#">Class 10th</a></li>
      </ul>
    </li>
    <li><a href="#">Results</a></li>

      <li class="dropdown">
      <a href="{{ url('study') }}">Study Material ▾</a>
      <ul class="dropdown-menu">
        <li><a href="#">Previos Year Papers</a></li>
        <li><a href="#">Sample Papers</a></li>
        <li><a href="#">Syllabus</a></li>
        <li><a href="#">Exam Date</a></li>
        <li><a href="#">Question Papers</a></li>
        <li><a href="#">PDF Chapter Vise</a></li>
        <li><a href="#">Recorded Video</a></li>
      </ul>
    </li>
    <li><a href="#"></a></li>
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

  <!-- Slider Start -->
  <div class="slider">
    
    <!-- Slide 1 -->
    <div class="slide active" style="background-image: url('https://as1.ftcdn.net/jpg/06/11/41/64/1000_F_611416401_ajcijnyqN6W1FXxfVPYhDOrkyeFg0hv7.jpg');">
      <div class="caption">
        <h2>NEET (UG) Results 2025</h2>
        <p>Meet Our Champions</p>
      </div>
      <div class="overlay-card">
        <img src="https://www.livehindustan.com/lh-img/smart/img/2025/04/17/1000x563/up_board_live_updates_1744856312093_1744856321423.jpg" alt="Result Banner">
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="slide" style="background-image: url('https://as1.ftcdn.net/jpg/06/11/41/64/1000_F_611416401_ajcijnyqN6W1FXxfVPYhDOrkyeFg0hv7.jpg');">
      <div class="caption">
        <h2>JEE (Main) Results 2025</h2>
        <p>Congratulations to our Toppers</p>
      </div>
      <div class="overlay-card">
        <img src="https://www.livehindustan.com/lh-img/smart/img/2025/04/16/1600x900/upmsp_result_1744770077846_1744770084788.jpg" alt="Result Banner">
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="slide" style="background-image: url('https://cdn.pixabay.com/photo/2018/03/18/10/49/result-3236285_1280.jpg');">
      <div class="caption">
        <h2>AIIMS & Other Results</h2>
        <p>Proud Moments</p>
      </div>
      <div class="overlay-card">
        <img src="{{ asset('images/sortimage1.jpg') }}" alt="Result Banner">
      </div>
    </div>

    <!-- Navigation -->
    <div class="prev">&#10094;</div>
    <div class="next">&#10095;</div>

    <!-- Dots -->
    <div class="dots"></div>
  </div>

  <section class="result-section">
    <h2>Meet our national champions of 2025</h2>
    <p>Celebrating our top achievers in CLass 12th exams</p>
    <a href="#" class="btn-course">ONLINE CLASSROOM COURSE</a>

    <div class="result-grid">
      <!-- Student Card 1 -->
      <div class="student-card">
        <span class="rank-badge">AIR 74</span>
        <img src="{{ asset('images/topper.jpeg') }}" alt="Student">
        <div class="student-info">
          <h4>Tanmay Jagga</h4>
          <p>Uttar Pradesh</p>
        </div>
      </div>

      <!-- Student Card 2 -->
      <div class="student-card">
        <span class="rank-badge">AIR 247</span>
        <img src="{{ asset('images/topper.jpeg') }}" alt="Student">
        <div class="student-info">
          <h4>Debarghya Bag</h4>
          <p>West Bengal</p>
        </div>
      </div>

      <!-- Student Card 3 -->
      <div class="student-card">
        <span class="rank-badge">AIR 405</span>
        <img src="{{ asset('images/topper.jpeg') }}" alt="Student">
        <div class="student-info">
          <h4>Adyasha A. Jena</h4>
          <p>Karnataka</p>
        </div>
      </div>

      <!-- Student Card 4 -->
      <div class="student-card">
        <span class="rank-badge">AIR 563</span>
        <img src="{{ asset('images/topper.jpeg') }}" alt="Student">
        <div class="student-info">
          <h4>Lalit Shrikhas Ponduri</h4>
          <p>Andhra Pradesh</p>
        </div>
      </div>
      

      <!-- Add more students as needed -->
    </div>

    <div class="result-grid">
      <!-- Student Card 1 -->
      <div class="student-card">
        <span class="rank-badge">AIR 74</span>
        <img src="{{ asset('images/topper.jpeg') }}" alt="Student">
        <div class="student-info">
          <h4>Tanmay Jagga</h4>
          <p>Uttar Pradesh</p>
        </div>
      </div>

      <!-- Student Card 2 -->
      <div class="student-card">
        <span class="rank-badge">AIR 247</span>
        <img src="{{ asset('images/topper.jpeg') }}" alt="Student">
        <div class="student-info">
          <h4>Debarghya Bag</h4>
          <p>West Bengal</p>
        </div>
      </div>

      <!-- Student Card 3 -->
      <div class="student-card">
        <span class="rank-badge">AIR 405</span>
        <img src="{{ asset('images/topper.jpeg') }}" alt="Student">
        <div class="student-info">
          <h4>Adyasha A. Jena</h4>
          <p>Karnataka</p>
        </div>
      </div>

      <!-- Student Card 4 -->
      <div class="student-card">
        <span class="rank-badge">AIR 563</span>
        <img src="{{ asset('images/topper.jpeg') }}" alt="Student">
        <div class="student-info">
          <h4>Lalit Shrikhas Ponduri</h4>
          <p>Andhra Pradesh</p>
        </div>
      </div>
      

      <!-- Add more students as needed -->
    </div>
  </section>

<section class="result-section">
    <h2>Meet our national champions of 2025</h2>
    <p>Celebrating our top achievers in CLass 10th exams</p>
    <a href="#" class="btn-course">ONLINE CLASSROOM COURSE</a>

    <div class="result-grid">
      <!-- Student Card 1 -->
      <div class="student-card">
        <span class="rank-badge">AIR 74</span>
        <img src="{{ asset('images/topper.jpeg') }}" alt="Student">
        <div class="student-info">
          <h4>Tanmay Jagga</h4>
          <p>Uttar Pradesh</p>
        </div>
      </div>

      <!-- Student Card 2 -->
      <div class="student-card">
        <span class="rank-badge">AIR 247</span>
        <img src="{{ asset('images/topper.jpeg') }}" alt="Student">
        <div class="student-info">
          <h4>Debarghya Bag</h4>
          <p>West Bengal</p>
        </div>
      </div>

      <!-- Student Card 3 -->
      <div class="student-card">
        <span class="rank-badge">AIR 405</span>
        <img src="{{ asset('images/topper.jpeg') }}" alt="Student">
        <div class="student-info">
          <h4>Adyasha A. Jena</h4>
          <p>Karnataka</p>
        </div>
      </div>

      <!-- Student Card 4 -->
      <div class="student-card">
        <span class="rank-badge">AIR 563</span>
        <img src="{{ asset('images/topper.jpeg') }}" alt="Student">
        <div class="student-info">
          <h4>Lalit Shrikhas Ponduri</h4>
          <p>Andhra Pradesh</p>
        </div>
      </div>
      

      <!-- Add more students as needed -->
    </div>
    <div class="result-grid">
      <!-- Student Card 1 -->
      <div class="student-card">
        <span class="rank-badge">AIR 74</span>
        <img src="{{ asset('images/topper.jpeg') }}" alt="Student">
        <div class="student-info">
          <h4>Tanmay Jagga</h4>
          <p>Uttar Pradesh</p>
        </div>
      </div>

      <!-- Student Card 2 -->
      <div class="student-card">
        <span class="rank-badge">AIR 247</span>
        <img src="{{ asset('images/topper.jpeg') }}" alt="Student">
        <div class="student-info">
          <h4>Debarghya Bag</h4>
          <p>West Bengal</p>
        </div>
      </div>

      <!-- Student Card 3 -->
      <div class="student-card">
        <span class="rank-badge">AIR 405</span>
        <img src="{{ asset('images/topper.jpeg') }}" alt="Student">
        <div class="student-info">
          <h4>Adyasha A. Jena</h4>
          <p>Karnataka</p>
        </div>
      </div>

      <!-- Student Card 4 -->
      <div class="student-card">
        <span class="rank-badge">AIR 563</span>
        <img src="{{ asset('images/topper.jpeg') }}" alt="Student">
        <div class="student-info">
          <h4>Lalit Shrikhas Ponduri</h4>
          <p>Andhra Pradesh</p>
        </div>
      </div>
      

      <!-- Add more students as needed -->
    </div>
</section>   


<!-- course section start-->

 <div class="container">
    <h2>Discover our NEET 2026 courses...</h2>
    <div class="cards">

      <div class="card">
        <h3>Leader Online Course.</h3>
        <p>Focuses on basic + advanced concepts</p>
        <div class="card-footer">
           <a href="#" class="view-link">View Courses
        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
        </a>
        <img src="{{ asset('images/result.png') }}" alt="">
      </div>
    </div>
       

      <div class="card">
        <h3>Achiever Online Course.</h3>
        <p>Focuses on advanced concepts</p>
        <div class="card-footer">
          <a href="#" class="view-link">View Courses
          <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
        </a>
         <img src="{{ asset('images/result.png') }}" alt="">
      </div>
    </div>

      <div class="card">
        <h3>Alpha Achiever Online Course</h3>
        <p>Phy & Chem (LIVE) + Bio (recorded)</p>
        <div class="card-footer">
          <a href="#" class="view-link">View Courses
          <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
        </a>
        <img src="{{ asset('images/result.png') }}" alt="">
      </div>
      </div>
    </div>
  </div>

<!-- course section end-->


 <div class="faq-section">
    <h2>Class 10th & 12th Result – FAQs</h2>

    <div class="faq">
      <div class="faq-question">
        <span>Where can I check the Class 10th and 12th results?</span>
        <a href="#" class="view-link">
        <svg fill="none" stroke="currentColor" stroke-width="6" viewBox="0 0 24 24">
          <path d="M19.9201 8.95L13.4001 15.47C12.6301 16.24 11.3701 16.24 10.6001 15.47L4.08008 8.95" id="Vector" stroke="#494A4A" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="5"></path>
        </svg>
        </a>
      </div>
      <div class="faq-answer">
        You can check the Class 10th and 12th results on the official board website or through the respective school portal.
      </div>
    </div>

    <div class="faq">
      <div class="faq-question">
        <span>What details are required to check my result?</span>
        <a href="#" class="view-link">
        <svg fill="none" stroke="currentColor" stroke-width="6" viewBox="0 0 24 24">
          <path d="M19.9201 8.95L13.4001 15.47C12.6301 16.24 11.3701 16.24 10.6001 15.47L4.08008 8.95" id="Vector" stroke="#494A4A" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="5"></path>
        </svg>
        </a>
      </div>
      <div class="faq-answer">
        Students need their roll number, date of birth, and sometimes school code to access the result.
      </div>
    </div>

    <div class="faq">
      <div class="faq-question">
        <span>What if I forget my roll number?</span>
        <a href="#" class="view-link">
        <svg fill="none" stroke="currentColor" stroke-width="6" viewBox="0 0 24 24">
          <path d="M19.9201 8.95L13.4001 15.47C12.6301 16.24 11.3701 16.24 10.6001 15.47L4.08008 8.95" id="Vector" stroke="#494A4A" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="5"></path>
        </svg>
        </a>
      </div>
      <div class="faq-answer">
        In case you forget your roll number, you can contact your school or check your admit card for the details.
      </div>
    </div>

    <div class="faq">
      <div class="faq-question">
        <span>Will the online result be valid for admission?</span>
       <a href="#" class="view-link">
        <svg fill="none" stroke="currentColor" stroke-width="6" viewBox="0 0 24 24">
          <path d="M19.9201 8.95L13.4001 15.47C12.6301 16.24 11.3701 16.24 10.6001 15.47L4.08008 8.95" id="Vector" stroke="#494A4A" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="5"></path>
        </svg>
        </a>
      </div>
      <div class="faq-answer">
        Yes, the online marksheet is provisional but valid for admission. The original marksheet will be provided by your school later.
      </div>
    </div>

    <div class="faq">
      <div class="faq-question">
        <span>What is the next step after the Class 12th result?</span>
        <a href="#" class="view-link">
        <svg fill="none" stroke="currentColor" height="20" stroke-width="6" viewBox="0 0 24 24">
          <path d="M19.9201 8.95L13.4001 15.47C12.6301 16.24 11.3701 16.24 10.6001 15.47L4.08008 8.95" id="Vector" stroke="#494A4A" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="5"></path>
        </svg>
        </a>
      </div>
      <div class="faq-answer">
        After Class 12th, students can apply for higher studies such as Engineering, Medical, Commerce, or Arts depending on their stream and interest.
      </div>
    </div>
  </div>

   <hr class="footer-divider" />


   <footer class="custom-footer">
  <div class="footer-top">
    <div class="footer-section">
      <h4>OUR OFFERINGS</h4>
      <p>
        Class 6 | Class 7 | Class 8 | Class 10 |
        Class 11 | Class 12 | Mathematics Coaching | Physics Coaching |
        Chemistry<sup>®</sup> Coaching | GRE<sup>®</sup> Coaching | Solve Question Paper |
        Test Series | Chapter Wise Test | School Tuitions |
        English Coaching | Hindi Coaching | Polytechnic Entrance Test Coaching | UP Board NCERT Hole Syllbus
      </p>
    </div>

    <div class="footer-section">
      <h4>OUR CENTERS</h4>
      <p>
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
    const slides = document.querySelectorAll('.slide');
    const prev = document.querySelector('.prev');
    const next = document.querySelector('.next');
    const dotsContainer = document.querySelector('.dots');
    let currentIndex = 0;
    let slideInterval;

    // Create dots dynamically
    slides.forEach((_, i) => {
      const dot = document.createElement('span');
      dot.classList.add('dot');
      if(i === 0) dot.classList.add('active');
      dot.addEventListener('click', () => goToSlide(i));
      dotsContainer.appendChild(dot);
    });
    const dots = document.querySelectorAll('.dot');

    function showSlide(index) {
      slides.forEach((slide, i) => {
        slide.classList.remove('active');
        dots[i].classList.remove('active');
      });
      slides[index].classList.add('active');
      dots[index].classList.add('active');
    }

    function nextSlide() {
      currentIndex = (currentIndex + 1) % slides.length;
      showSlide(currentIndex);
    }

    function prevSlide() {
      currentIndex = (currentIndex - 1 + slides.length) % slides.length;
      showSlide(currentIndex);
    }

    function goToSlide(index) {
      currentIndex = index;
      showSlide(currentIndex);
    }

    prev.addEventListener('click', prevSlide);
    next.addEventListener('click', nextSlide);

    // Auto Slide
    function startAutoSlide() {
      slideInterval = setInterval(nextSlide, 4000);
    }

    function stopAutoSlide() {
      clearInterval(slideInterval);
    }

    // Start
    startAutoSlide();

    // Pause on hover
    document.querySelector('.slider').addEventListener('mouseenter', stopAutoSlide);
    document.querySelector('.slider').addEventListener('mouseleave', startAutoSlide);

    document.querySelectorAll(".faq").forEach(faq => {
      faq.addEventListener("click", () => {
        faq.classList.toggle("active");
      });
    });
    
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

</body>
</html>
