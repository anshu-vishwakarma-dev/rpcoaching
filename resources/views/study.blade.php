<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
<link rel="stylesheet" href="https://yt3.googleusercontent.com/z3TjI8EfRupC6PpE7DIpgdjIirSZO4DMKvTBLuDbR5jdOXLewwallOh8jctLfqaUOvxRx7k1v30=s160-c-k-c0x00ffffff-no-rj">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" 
integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="icon" href="{{ asset('images/logo.jpg') }}">
<link rel="stylesheet" href="{{ asset('css/style5.css') }}">

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

    <!-- <li><a href="#">Batches</a></li> -->
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

   <!-- ===== HEADER ===== -->
  <header>
    <button class="nav-btn">Overview</button>
    <button class="nav-btn">Preparation</button>
    <button class="nav-btn">Results</button>
    <button class="nav-btn">Tips</button>
    <button class="nav-btn">Counselling</button>
    <button class="nav-btn">JEE Main Coaching</button>
    <button class="nav-btn">Subjects</button>
  </header>

  <!-- ===== BREADCRUMB ===== -->
  <div class="breadcrumb">
    <a href="#">Home</a> <span>&gt;</span>
    <a href="#">JEE Main Exam</a> <span>&gt;</span>
    <span>JEE Main Previous Year Papers</span>
  </div>

  <!-- ===== RESULT SECTION ===== -->
  <section class="result-section">
    <h2>JEE Advanced 2025 Results Out!</h2>
    <p>Meet our champions!</p>
    <a href="#" class="btn">Check Results</a>

    <div class="cards">
      <!-- Card 1 -->
      <div class="card">
        <span class="rank-badge">AIR 395</span>
        <img src="https://via.placeholder.com/120" alt="Student">
        <h3>ARKA BANERJEE</h3>
        <p>Online Classroom Course</p>
      </div>

      <!-- Card 2 -->
      <div class="card">
        <span class="rank-badge">AIR 50</span>
        <img src="https://via.placeholder.com/120" alt="Student">
        <h3>ARITRO RAY</h3>
        <p>Online Classroom Course</p>
      </div>

      <!-- Card 3 -->
      <div class="card">
        <span class="rank-badge">AIR 516</span>
        <img src="https://via.placeholder.com/120" alt="Student">
        <h3>CHIRAG SINGH</h3>
        <p>Online Classroom Course</p>
      </div>
    </div>
  </section>

<div class="container">
    
    <!-- Left Content -->
    <div class="content">
      <h1>Class 10th & 12th Previous Year Papers: Download PDFs</h1>
      <p>
        Going through the past year’s question papers regularly helps a lot. 
        It makes you feel more sure about yourself and improves your problem-solving skills. 
        Download the solved Class 10th & 12th session papers to gain insights into current exam patterns and topics.
      </p>

      <h2 id="sec1">Class 12th Question Papers with Answers</h2>
      <table>
        <tr>
          <th>Date</th>
          <th>Shift</th>
          <th>Physics</th>
          <th>Chemistry</th>
          <th>Biology</th>
        </tr>
        <tr>
          <td>2 April 2025</td>
          <td>Shift 1 (9AM–12PM)</td>
          <td><a href="#">Download PDF</a></td>
          <td><a href="#">Download PDF</a></td>
          <td><a href="#">Download PDF</a></td>
        </tr>
        <tr>
          <td>2 April 2025</td>
          <td>Shift 2 (3PM–6PM)</td>
          <td><a href="#">Download PDF</a></td>
          <td><a href="#">Download PDF</a></td>
          <td><a href="#">Download PDF</a></td>
        </tr>
        <tr>
          <td>3 April 2025</td>
          <td>Shift 1 (9AM–12PM)</td>
          <td><a href="#">Download PDF</a></td>
          <td><a href="#">Download PDF</a></td>
          <td><a href="#">Download PDF</a></td>
        </tr>
      </table>

      <h2 id="sec2">Class 10th Question Papers with Answers</h2>
      <p>Download all previous year papers for Class 10th major subjects (Physics, Chemistry, Biology).</p>
      <table>
        <tr>
          <th>Date</th>
          <th>Shift</th>
          <th>Physics</th>
          <th>Chemistry</th>
          <th>Biology</th>
        </tr>
        <tr>
          <td>5 April 2025</td>
          <td>Shift 1 (9AM–12PM)</td>
          <td><a href="#">Download PDF</a></td>
          <td><a href="#">Download PDF</a></td>
          <td><a href="#">Download PDF</a></td>
        </tr>
        <tr>
          <td>5 April 2025</td>
          <td>Shift 2 (3PM–6PM)</td>
          <td><a href="#">Download PDF</a></td>
          <td><a href="#">Download PDF</a></td>
          <td><a href="#">Download PDF</a></td>
        </tr>
        <tr>
          <td>6 April 2025</td>
          <td>Shift 1 (9AM–12PM)</td>
          <td><a href="#">Download PDF</a></td>
          <td><a href="#">Download PDF</a></td>
          <td><a href="#">Download PDF</a></td>
        </tr>
      </table>

 <h2 id="sec2">Class 10th Question Papers with Answers</h2>
 <p>Download all previous year papers for Class 10th major subjects (Physics, Chemistry, Biology).</p>
<!-- Left Scrollable Content -->
  <!-- <div class="content"> -->
    <div class="video-card">
      <div class="video-title">Class 10th - Physics Paper Solution</div>
      <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="video-card">
      <div class="video-title">Class 10th - Chemistry Paper Solution</div>
      <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="video-card">
      <div class="video-title">Class 10th - Biology Paper Solution</div>
      <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="video-card">
      <div class="video-title">Class 10th - Maths Paper Solution</div>
      <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" frameborder="0" allowfullscreen></iframe>
    </div>
  <!-- </div> -->

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

    </div>
    
    <!-- Right Sidebar -->
    <div class="sidebar">
      <h3>Table Of Contents:</h3>
      <ul>
        <li><a href="#sec1" class="active">Class 12th Papers with Answers</a></li>
        <li><a href="#sec2">Class 10th Papers with Answers</a></li>
        <li><a href="#">Video Solutions</a></li>
        <li><a href="#">Syllabus & Exam Pattern</a></li>
        <li><a href="#">More Resources</a></li>
         <li><a href="#physics">Physics Solutions</a></li>
      <li><a href="#chemistry">Chemistry Solutions</a></li>
      <li><a href="#biology">Biology Solutions</a></li>
      <li><a href="#maths">Maths Solutions</a></li>
      </ul>
    </div>
</div>
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