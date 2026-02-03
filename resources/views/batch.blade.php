<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Batch Section • Online Coaching</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
<link rel="stylesheet" href="https://yt3.googleusercontent.com/z3TjI8EfRupC6PpE7DIpgdjIirSZO4DMKvTBLuDbR5jdOXLewwallOh8jctLfqaUOvxRx7k1v30=s160-c-k-c0x00ffffff-no-rj">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" 
integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="icon" href="{{ asset('images/logo.jpg') }}">
<link rel="stylesheet" href="{{ asset('css/style3.css') }}">
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
      <a href="#">Batches ▾</a>
      <ul class="dropdown-menu">
        <li><a href="#">Class 11th</a></li>
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

  <section class="bs-container">
    <div class="bs-header">
      <h1 class="bs-title">📅 Upcoming Batches</h1>
      <div class="bs-banner">Hurry!✨ LAST BATCH OF 2025 • Enrol now self-study Course & Test Series</div>
    </div>

    <div class="bs-controls">
      <!-- Tabs -->
      <nav class="bs-tabs" role="tablist" aria-label="Course groups">
        <button class="bs-tab" data-tab="all" aria-selected="true">All</button>
        <button class="bs-tab" data-tab="class11">Class 11</button>
        <button class="bs-tab" data-tab="class12">Class 12</button>
        <button class="bs-tab" data-tab="dropper">Dropper</button>
      </nav>

      <!-- Search -->
      <div class="bs-search" role="search">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21 21l-4.35-4.35" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><circle cx="10.5" cy="10.5" r="6.5" stroke="currentColor" stroke-width="2"/></svg>
        <input id="q" type="search" placeholder="Search course or batch…" />
      </div>

      <!-- Chips -->
      <div class="bs-chips">
        <button class="bs-chip" data-filter="mode" data-value="live">Live</button>
        <button class="bs-chip" data-filter="mode" data-value="recorded">Recorded</button>
        <button class="bs-chip" data-filter="mode" data-value="hybrid">Hybrid</button>
        <button class="bs-chip" data-filter="schedule" data-value="weekday">Weekday</button>
        <button class="bs-chip" data-filter="schedule" data-value="weekend">Weekend</button>
        <button class="bs-chip" data-filter="label" data-value="last">Last batch</button>
        <button class="bs-chip" id="clear">Clear</button>
      </div>

      <!-- Sort -->
      <div class="bs-sort">
        <label for="sort">Sort</label>
        <select id="sort">
          <option value="dateAsc">Upcoming first</option>
          <option value="dateDesc">Starting last</option>
          <option value="priceAsc">Price: Low to High</option>
          <option value="priceDesc">Price: High to Low</option>
          <option value="seatsDesc">Seats: High to Low</option>
        </select>
      </div>
    </div>

    <!-- Grid -->
    <div id="grid" class="bs-grid" aria-live="polite"></div>

    <div id="empty" class="bs-empty" style="display:none">No batches match your filters. Try clearing filters or searching a different term.</div>
  </section>

  <!-- Enroll modal -->
  <dialog class="modal" id="enrollModal">
    <form method="dialog" class="modal-card" id="enrollForm">
      <h3>Enroll Now</h3{{ url('Math') }}
      <p id="enrollCourse" style="margin:0 0 6px;color:#475569"></p>
      <label for="name">Full Name</label>
      <input id="name" required />
      <label for="phone">Phone</label>
      <input id="phone" type="tel" required />
      <div class="modal-actions">
        <button class="btn ghost" value="cancel">Cancel</button>
        <button class="btn primary" value="confirm">Submit</button>
      </div>
    </form>
  </dialog>

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
    // ------- Demo data (you can load from API) -------
    const BATCHES = [
      { id:1, group:'class11', title:'Nurture (Class 11) — Weekday', mode:'live', schedule:'weekday', start:'2025-09-01', time:'5 PM – 8 PM', duration:'2 years', price:85000, seats:18, labels:['last'] },
      { id:2, group:'class11', title:'Nurture (Class 11) — Weekend', mode:'live', schedule:'weekend', start:'2025-09-07', time:'9 AM – 1 PM', duration:'2 years', price:85000, seats:32, labels:[] },
      { id:3, group:'class12', title:'Enthusiast (Class 12) — Hybrid', mode:'hybrid', schedule:'weekday', start:'2025-09-10', time:'6 PM – 9 PM', duration:'1 year', price:78000, seats:24, labels:[] },
      { id:4, group:'class12', title:'Crash Course (Class 12)', mode:'recorded', schedule:'weekday', start:'2025-08-28', time:'Self-paced', duration:'3 months', price:35000, seats:999, labels:[] },
      { id:5, group:'dropper', title:'Achiever (Dropper) — Live', mode:'live', schedule:'weekday', start:'2025-09-05', time:'2 PM – 6 PM', duration:'1 year', price:92000, seats:15, labels:['last'] },
      { id:6, group:'dropper', title:'Achiever (Dropper) — Weekend', mode:'live', schedule:'weekend', start:'2025-09-14', time:'10 AM – 2 PM', duration:'1 year', price:92000, seats:22, labels:[] },
      { id:7, group:'class11', title:'Self-Study Plus (Class 11)', mode:'recorded', schedule:'weekday', start:'2025-08-22', time:'On-demand', duration:'1 year', price:12000, seats:999, labels:[] },
      { id:8, group:'class12', title:'Test Series (Class 12)', mode:'recorded', schedule:'weekend', start:'2025-09-03', time:'Online tests', duration:'6 months', price:6700, seats:999, labels:[] }
    ];

    // ------- State -------
    const state = {
      tab:'all',
      search:'',
      filters:{ mode:new Set(), schedule:new Set(), label:new Set() },
      sort:'dateAsc'
    };

    // ------- Helpers -------
    const byId = id => document.getElementById(id);
    const grid = byId('grid');
    const empty = byId('empty');

    const fmtINR = n => new Intl.NumberFormat('en-IN',{style:'currency',currency:'INR',maximumFractionDigits:0}).format(n);
    const dateObj = s => new Date(s + 'T00:00:00');
    const fmtDate = s => dateObj(s).toLocaleDateString('en-GB',{day:'2-digit',month:'short',year:'numeric'});

    function matches(b){
      // tab
      if(state.tab !== 'all' && b.group !== state.tab) return false;
      // search
      if(state.search && !b.title.toLowerCase().includes(state.search)) return false;
      // filters
      for(const [k,set] of Object.entries(state.filters)){
        if(set.size>0){
          if(k==='label'){
            // at least one label
            let ok=false; for(const v of set){ if(b.labels.includes(v)) { ok=true; break; } }
            if(!ok) return false;
          } else if(!set.has(b[k])) return false;
        }
      }
      return true;
    }

    function sorter(a,b){
      switch(state.sort){
        case 'dateAsc': return dateObj(a.start) - dateObj(b.start);
        case 'dateDesc': return dateObj(b.start) - dateObj(a.start);
        case 'priceAsc': return a.price - b.price;
        case 'priceDesc': return b.price - a.price;
        case 'seatsDesc': return b.seats - a.seats;
        default: return 0;
      }
    }

    function badgeDom(b){
      const badges = [];
      if(b.mode==='live') badges.push(`<span class="badge live">📺 Live</span>`);
      if(b.mode==='recorded') badges.push(`<span class="badge recorded">🎥 Recorded</span>`);
      if(b.mode==='hybrid') badges.push(`<span class="badge live">🔀 Hybrid</span>`);
      badges.push(`<span class="badge ${b.schedule}">🗓️ ${b.schedule[0].toUpperCase()+b.schedule.slice(1)}</span>`);
      if(b.labels.includes('last')) badges.push(`<span class="badge last">🔥 Last Batch</span>`);
      return badges.join('');
    }

    function renderCard(b){
      return `
      <article class="batch-box" data-id="${b.id}">
        <div class="batch-badges">${badgeDom(b)}</div>
        <div class="batch-head">
          <div>
            <h3 class="batch-title">${b.title}</h3>
            <p class="batch-sub">Starts ${fmtDate(b.start)} • ${b.time} • ${b.duration}</p>
          </div>
          <div class="price">${fmtINR(b.price)}</div>
        </div>
        <div class="batch-meta">
          <div class="meta"><strong>Start</strong>${fmtDate(b.start)}</div>
          <div class="meta"><strong>Timing</strong>${b.time}</div>
          <div class="meta"><strong>Duration</strong>${b.duration}</div>
        </div>
        <div class="batch-actions">
          <button class="btn primary" data-enroll="${b.id}">Enroll Now</button>
          <button class="btn ghost" data-know="${b.id}">Know More</button>
          <div class="seats">Seats left: ${b.seats}</div>
        </div>
      </article>`;
    }

    function render(){
      const list = BATCHES.filter(matches).sort(sorter);
      grid.innerHTML = list.map(renderCard).join('');
      empty.style.display = list.length ? 'none' : 'block';
    }

    // ------- Events -------
    // tabs
    document.querySelectorAll('.bs-tab').forEach(btn=>{
      btn.addEventListener('click',()=>{
        document.querySelectorAll('.bs-tab').forEach(b=>b.setAttribute('aria-selected','false'));
        btn.setAttribute('aria-selected','true');
        state.tab = btn.dataset.tab;
        render();
      });
    });

    // search
    document.getElementById('q').addEventListener('input', e=>{
      state.search = e.target.value.trim().toLowerCase();
      render();
    });

    // chips
    document.querySelectorAll('.bs-chip').forEach(chip=>{
      if(chip.id==='clear'){
        chip.addEventListener('click',()=>{
          for(const set of Object.values(state.filters)) set.clear();
          document.querySelectorAll('.bs-chip').forEach(c=>c.dataset.active=false);
          render();
        });
        return;
      }
      chip.addEventListener('click',()=>{
        const k = chip.dataset.filter; const v = chip.dataset.value;
        const set = state.filters[k];
        if(chip.dataset.active==='true'){ set.delete(v); chip.dataset.active=false; }
        else { set.add(v); chip.dataset.active=true; }
        render();
      })
    });

    // sort
    document.getElementById('sort').addEventListener('change', e=>{
      state.sort = e.target.value; render();
    });

    // delegate actions
    grid.addEventListener('click', e=>{
      const enrollBtn = e.target.closest('[data-enroll]');
      if(enrollBtn){
        const id = +enrollBtn.dataset.enroll; const b = BATCHES.find(x=>x.id===id);
        const dlg = document.getElementById('enrollModal');
        document.getElementById('enrollCourse').textContent = b.title + ' • ' + fmtDate(b.start);
        dlg.showModal();
        return;
      }
      const knowBtn = e.target.closest('[data-know]');
      if(knowBtn){
        const id = +knowBtn.dataset.know; const b = BATCHES.find(x=>x.id===id);
        alert(`${b.title}\n\nStart: ${fmtDate(b.start)}\nTiming: ${b.time}\nDuration: ${b.duration}\nMode: ${b.mode.toUpperCase()}`);
      }
    });

    // modal submit
    document.getElementById('enrollForm').addEventListener('close', (e)=>{
      // dialog returns values via returnValue if needed
    });

    // initial render
    render();

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
