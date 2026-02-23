<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Coaching Website Navbar</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
<link rel="stylesheet" href="https://yt3.googleusercontent.com/z3TjI8EfRupC6PpE7DIpgdjIirSZO4DMKvTBLuDbR5jdOXLewwallOh8jctLfqaUOvxRx7k1v30=s160-c-k-c0x00ffffff-no-rj">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" 
integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- fevicon icon -->
<link rel="icon" href="{{ asset('images/logo.jpg') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>

<!-- Navbar -->
<nav class="navbar">
  <div class="logo">
    <!-- RP<span>Coaching</span>  -->
    <img src="https://yt3.googleusercontent.com/z3TjI8EfRupC6PpE7DIpgdjIirSZO4DMKvTBLuDbR5jdOXLewwallOh8jctLfqaUOvxRx7k1v30=s160-c-k-c0x00ffffff-no-rj" alt=""></div>

  <!-- Menu -->
  <ul class="nav-links" id="menu">
    <li><a href="#"><i class="fa-solid fa-house"></i>Home</a></li>
    <li><a href="{{ url('about') }}">About Us</a></li>
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
<a href="https://wa.me/918090910253" class="btn2"><i class="fa-solid fa-phone-volume"></i></a>
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

<!-- Full Width Slider -->
<div class="slider">
  <div class="slides">
    
    <!-- Radio Buttons for Manual Navigation -->
    <input type="radio" name="radio-btn" id="radio1" checked>
    <input type="radio" name="radio-btn" id="radio2">
    <input type="radio" name="radio-btn" id="radio3">
    <input type="radio" name="radio-btn" id="radio4">

    <!-- Slide Images -->
    <div class="slide first">
      <img src="https://sanjoseacademy.in/img/slider/slide5.jpg" alt="">
    </div>
    <div class="slide">
      <img src="https://www.sicmclasses.com/images/slider1.png" alt="">
    </div>
    <div class="slide">
      <img src="https://sanjoseacademy.in/img/slider/slide3.jpg" alt="">
    </div>
    <div class="slide">
      <img src="https://sanjoseacademy.in/img/slider/slide4.jpg" alt="">
    </div>

    <div class="slide">
      <img src="https://yt3.googleusercontent.com/P7zNbFUoNZi0dOjYD6AYVyCqWbjwNsKKAbQj6QLw2M0mUm05cLNsexJ6sisSBGjqDQpjH7Q7=w1707-fcrop64=1,00005a57ffffa5a8-k-c0xffffffff-no-nd-rj" alt="">
    </div>

    <!-- Automatic Navigation -->
    <div class="navigation-auto">
      <div class="auto-btn1"></div>
      <div class="auto-btn2"></div>
      <div class="auto-btn3"></div>
      <div class="auto-btn4"></div>
    </div>

  </div>

  <!-- Manual Navigation -->
  <div class="navigation-manual">
    <label for="radio1" class="manual-btn"></label>
    <label for="radio2" class="manual-btn"></label>
    <label for="radio3" class="manual-btn"></label>
    <label for="radio4" class="manual-btn"></label>
  </div>
</div>

<!-- slider end -->

<!-- course section start-->

 <div class="container">
    <h2>Pick the right course for you</h2>
    <div class="cards">

      <div class="card">
        <h3>Mathematics Courses.</h3>
        <div class="card-footer">
           <a href="#" class="view-link">View Courses
        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
        </a>
        <img src="{{ asset('images/Mathematics-amico.png') }}" alt="">
      </div>
    </div>
       

      <div class="card">
        <h3>Physics Courses.</h3>
        <div class="card-footer">
          <a href="#" class="view-link">View Courses
          <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
        </a>
         <img src="{{ asset('images/question-70.png') }}" alt="">
      </div>
    </div>

      <div class="card">
        <h3>Courses for class 6–10.</h3>
        <div class="card-footer">
          <a href="#" class="view-link">View Courses
          <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
        </a>
        <img src="{{ asset('images/Reading glasses-bro.png') }}" alt="">
      </div>
      </div>
    </div>
  </div>

<!-- course section end-->

<div class="container">
  <h2>Trending Courses</h2>
  <button class ="btn1">Mathematics</button>
  <button class ="btn1">Physics</button>
  <button class ="btn1">Class 6-10</button>
</div>

<div class="container1">
<div class="cards1">
    <!-- Recorded Course -->
    <div class="card1">
        <span class="tag">RECORDED</span>
        <span class="corner-tag">SCHOLARSHIP ELIGIBLE</span>
        <h1>Mathematics Class 12 Board Exam Preparation</h1>
        <p class="target">Target 2026</p>
        <ul class="ul1">
            <li>Latest recordings covering full syllabus</li>
            <li>Digital study material incl. books, RACEs & more</li>
        </ul>
        <p class="price">₹900 <span class="tax">+ Taxes applicable</span></p>
        <a href="#" class="know-more">Know more ➜</a>
    </div>

    <!-- Live Course -->
    <div class="card1">
        <span class="tag">LIVE</span>
        <span class="corner-tag">UPTO 90% SCHOLARSHIP</span>
        <h1>Online Course</h1>
        <p class="target">Target 2026</p>
        <ul class="ul1">
            <li>Live classes from RP Coaching Center faculty</li>
            <li>24/7 doubt support, academic guidance & more</li>
        </ul>
        <p><span class="old-price">₹3,500</span> <span class="price">₹800</span> <span class="tax">+ Taxes applicable</span></p>
        <a href="#" class="know-more">Know more ➜</a>
    </div>
</div>

<!-- View All Courses Button -->
<a href="#" class="view-btn">View All Courses</a>
</div>

 
    <!-- Header -->
  <header>
    My Learning Platform
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <h2>Select a subject and start learning</h2>
    <p>Learn from India’s Best Teachers from the comfort of your home.</p>
  </section>

  <!-- Class Selection -->
  <div class="class-container">
    <div class="class-box">Class 6</div>
    <div class="class-box">Class 7</div>
    <div class="class-box">Class 8</div>
    <div class="class-box">Class 9</div>
    <div class="class-box">Class 10</div>
    <div class="class-box active">Class 11</div>
    <div class="class-box">Class 12</div>
  </div>


  <div class="course-container">
    <!-- Card 1 -->
    <div class="course-card">
      <div class="course-image">
        <img src="{{ asset('images/physics.jpg') }}" alt="Physics Teacher">
        <div class="teacher-name">Ram Pravesh Sir</div>
      </div>
      <div class="course-title">Class 11 - Physics & Class 12 - Physics</div>
      <div class="course-details">
        <ul>
          <li><i class="fa-solid fa-video"></i> 225 Concept Video Lectures</li>
          <li><i class="fa-solid fa-chalkboard"></i> 497 Solved Video Examples</li>
          <li><i class="fa-solid fa-book"></i> 362 Practice Questions</li>
          <li><i class="fa-solid fa-user-graduate"></i> Chapter Based Doubt Clearing Sessions <span style="color:red;">New</span></li>
          <li><i class="fa-solid fa-tasks"></i> Chapter Based Skill Test <span style="color:red;">New</span></li>
          <li><i class="fa-solid fa-certificate"></i> Certificate of Completion</li>
        </ul>
        <div class="price">
          Rs.10000 <del>Rs.12000</del>
          <span class="view-topics">View Topics</span>
        </div>
      </div>
      <a href="#" class="btn5">Take this course</a>
    </div>

    <!-- Card 2 -->
    <div class="course-card">
      <div class="course-image">
        <img src="{{ asset('images/chemistry.jpg') }}" alt="Chemistry Teacher">
        <div class="teacher-name">Dinesh Sir</div>
      </div>
      <div class="course-title">Class 11 - Chemistry & Class 12 - Physics</div>
      <div class="course-details">
        <ul>
          <li><i class="fa-solid fa-video"></i> 291 Concept Video Lectures</li>
          <li><i class="fa-solid fa-chalkboard"></i> 218 Solved Video Examples</li>
          <li><i class="fa-solid fa-book"></i> 672 Practice Questions</li>
          <li><i class="fa-solid fa-user-graduate"></i> Chapter Based Doubt Clearing Sessions <span style="color:red;">New</span></li>
          <li><i class="fa-solid fa-tasks"></i> Chapter Based Skill Test <span style="color:red;">New</span></li>
          <li><i class="fa-solid fa-certificate"></i> Certificate of Completion</li>
        </ul>
        <div class="price">
          Rs.10000 <del>Rs.12000</del>
          <span class="view-topics">View Topics</span>
        </div>
      </div>
      <a href="#" class="btn5">Take this course</a>
    </div>
  </div>

    <div class="course-container">
    <!-- Card 1 -->
    <div class="course-card">
      <div class="course-image">
        <img src="{{ asset('images/biology.jpg') }}" alt="Physics Teacher">
        <div class="teacher-name">Ram Pravesh Sir</div>
      </div>
      <div class="course-title">Class 11 - Biology & Class 12 - Biology</div>
      <div class="course-details">
        <ul>
          <li><i class="fa-solid fa-video"></i> 225 Concept Video Lectures</li>
          <li><i class="fa-solid fa-chalkboard"></i> 497 Solved Video Examples</li>
          <li><i class="fa-solid fa-book"></i> 362 Practice Questions</li>
          <li><i class="fa-solid fa-user-graduate"></i> Chapter Based Doubt Clearing Sessions <span style="color:red;">New</span></li>
          <li><i class="fa-solid fa-tasks"></i> Chapter Based Skill Test <span style="color:red;">New</span></li>
          <li><i class="fa-solid fa-certificate"></i> Certificate of Completion</li>
        </ul>
        <div class="price">
          Rs.10000 <del>Rs.12000</del>
          <span class="view-topics">View Topics</span>
        </div>
      </div>
      <a href="#" class="btn5">Take this course</a>
    </div>

    <!-- Card 2 -->
    <div class="course-card">
      <div class="course-image">
        <img src="{{ asset('images/english.jpg') }}" alt="Chemistry Teacher">
        <div class="teacher-name">Dinesh Sir</div>
      </div>
      <div class="course-title">Class 11 - English & Class 12 - English</div>
      <div class="course-details">
        <ul>
          <li><i class="fa-solid fa-video"></i> 291 Concept Video Lectures</li>
          <li><i class="fa-solid fa-chalkboard"></i> 218 Solved Video Examples</li>
          <li><i class="fa-solid fa-book"></i> 672 Practice Questions</li>
          <li><i class="fa-solid fa-user-graduate"></i> Chapter Based Doubt Clearing Sessions <span style="color:red;">New</span></li>
          <li><i class="fa-solid fa-tasks"></i> Chapter Based Skill Test <span style="color:red;">New</span></li>
          <li><i class="fa-solid fa-certificate"></i> Certificate of Completion</li>
        </ul>
        <div class="price">
          Rs.10000 <del>Rs.12000</del>
          <span class="view-topics">View Topics</span>
        </div>
      </div>
      <a href="#" class="btn5">Take this course</a>
    </div>
  </div>

  <!-- View All Courses Button -->
<a href="#" class="view-btn">REGISTER FOR A SAMPLE LESSION</a>
</div>


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
function toggleMenu() {
  document.getElementById("menu").classList.toggle("active");
}

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</body>
</html>
