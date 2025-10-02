<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body{
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #333;
            font-family: 'Poppins', sans-serif;
            cursor: none; /* hide default cursor */
            overflow-x: hidden;
        }

        /* Dark mode styles */
        [data-bs-theme="dark"] {
            background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
            color: #ecf0f1;
        }

        [data-bs-theme="dark"] footer {
            color: #bdc3c7;
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            position: relative;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.3);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero h1 {
            font-size: 4rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero p {
            font-size: 1.5rem;
            margin-bottom: 2rem;
        }

        /* Cursor custom */
        .cursor__ball {
          position: fixed;
          top: 0;
          left: 0;
          mix-blend-mode: difference;
          z-index: 1000;
          pointer-events: none;
        }
        .cursor__ball circle {
          fill: #fff;
        }

        .offcanvas .cursor__ball {
           position: fixed;
           top: 0;
           left: 0;
           mix-blend-mode: difference;
           z-index: 2000;
           pointer-events: none;
        }
        .offcanvas .cursor__ball circle {
          fill: #fff;
        }

        .loading {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: black;
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .loading video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Sections */
        .section {
            padding: 5rem 0;
        }

        .contact-section {
            background: rgba(255,255,255,0.9);
            color: #333;
        }

        [data-bs-theme="dark"] .contact-section {
            background: rgba(44,62,80,0.9);
            color: #ecf0f1;
        }

        .social-links {
            margin: 2rem 0;
        }

        .social-links a {
            margin: 0 1rem;
            color: #333;
            text-decoration: none;
            font-size: 1.2rem;
        }

        [data-bs-theme="dark"] .social-links a {
            color: #ecf0f1;
        }

        /* Floating buttons */
        .floating-btns {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1000;
        }

        .floating-btns .btn {
            margin-bottom: 10px;
        }

        /* Contact Form */
        .contact-form {
            max-width: 600px;
            margin: 0 auto;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 2rem 0;
            background: rgba(0,0,0,0.8);
            color: white;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            .hero p {
                font-size: 1.2rem;
            }
        }
    </style>

    <title>Blog</title>
  </head>
  <body>

<div class="content">

  <!-- cursor custom -->
  <div class="cursor">
    <div class="cursor__ball cursor__ball--big">
      <svg height="30" width="30">
        <circle cx="15" cy="15" r="12" stroke-width="0"></circle>
      </svg>
    </div>
    <div class="cursor__ball cursor__ball--small">
      <svg height="10" width="10">
        <circle cx="5" cy="5" r="4" stroke-width="0"></circle>
      </svg>
    </div>
  </div>
  <!-- end cursor -->

  <div class="loading">
    <video id="loading-video" muted autoplay>
        <source src="/storage/loading.mp4" type="video/mp4">
    </video>
  </div>

  <!-- Floating Buttons -->
  <div class="floating-btns">
    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">All nav</button>
    <button id="settingsBtn" class="btn btn-secondary" style="font-size:20px;">⚙️</button>
  </div>

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-content">
      <h1>Welcome to My World</h1>
      <p>Discover my collection and connect with me</p>
      <a href="#contact" class="btn btn-light btn-lg">Get In Touch</a>
    </div>
  </section>

  <!-- About Section -->
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2>About Me</h2>
          <p>I'm Ikhwan Rasyid, a passionate developer and creator. This is my personal space where I showcase my work and share my journey.</p>
        </div>
        <div class="col-md-6">
          <div class="social-links">
            <a href="https://www.instagram.com/rasyid_rlqr/" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
              </svg> Instagram
            </a>
            <a href="https://github.com/RasyidRlqr" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
              </svg> GitHub
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="section contact-section">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center mb-5">
          <h2>Contact Me</h2>
          <p>Let's get in touch. Send me a message and I'll respond as soon as possible.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif
          <form class="contact-form" action="{{ route('contact.store') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Message</label>
              <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Audio Player -->
  <audio id="player" src="/storage/Sunova.mp3" loop></audio>

  <!-- Settings Modal -->
  <div class="modal fade" id="settingsModal" tabindex="-1" aria-labelledby="settingsModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="settingsModalLabel">Settings</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h6>Theme</h6>
          <button id="lightModeBtn" class="btn btn-outline-warning me-2" style="font-size:20px;">☀️ Light</button>
          <button id="darkModeBtn" class="btn btn-outline-dark" style="font-size:20px;">🌙 Dark</button>
          <hr>
          <h6>Music</h6>
          <button id="musicBtn" class="btn btn-outline-primary" style="font-size:44px;">&#9835;</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Offcanvas -->
  <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">All Nav for this website</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <button type="button" class="btn btn-outline-info"><a href="/admin/login">Login</a></button>
      <p>Sebelum masuk silahkan login terlebih dahulu, Tidak punya akun? <a href="/admin/register">Register</a></p>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <p>&copy; 2024 Ikhwan Rasyid. Created using <a href="https://backpackforlaravel.com/" style="color: #fff;">Backpack for Laravel</a></p>
  </footer>

</div>

<script>
  document.getElementById('loading-video')?.addEventListener('ended', function() {
      document.querySelector('.loading').style.display = 'none';
      document.querySelector('.content').style.display = 'block';
  });
</script>

<script>
  const btn = document.getElementById("musicBtn");
  const player = document.getElementById("player");
  let isPlaying = false;

  btn?.addEventListener("click", () => {
    if (!isPlaying) {
      player.play();
      btn.innerHTML = "&#9836;";
    } else {
      player.pause();
      btn.innerHTML = "&#9835;";
    }
    isPlaying = !isPlaying;
  });
</script>

<script>
document.getElementById('settingsBtn').addEventListener('click', () => {
  const modal = new bootstrap.Modal(document.getElementById('settingsModal'));
  modal.show();
});

const lightModeBtn = document.getElementById('lightModeBtn');
const darkModeBtn = document.getElementById('darkModeBtn');

lightModeBtn.addEventListener('click', () => {
  document.documentElement.setAttribute('data-bs-theme', 'light');
  localStorage.setItem('theme', 'light');
});

darkModeBtn.addEventListener('click', () => {
  document.documentElement.setAttribute('data-bs-theme', 'dark');
  localStorage.setItem('theme', 'dark');
});

// On load
const savedTheme = localStorage.getItem('theme');
if (savedTheme) {
  document.documentElement.setAttribute('data-bs-theme', savedTheme);
} else {
  document.documentElement.setAttribute('data-bs-theme', 'light');
}
</script>

<!-- GSAP untuk animasi cursor -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script>
  const bigBall = document.querySelector('.cursor__ball--big');
const smallBall = document.querySelector('.cursor__ball--small');

window.addEventListener('mousemove', e => {
  gsap.to(bigBall, {duration:0.4, x: e.clientX - 15, y: e.clientY - 15});
  gsap.to(smallBall, {duration:0.1, x: e.clientX - 5, y: e.clientY - 7});
});

// hover effect untuk tombol/link
const hoverables = document.querySelectorAll('a, button, .btn, input, textarea');
hoverables.forEach(el => {
  el.addEventListener('mouseenter', () => {
    gsap.to(bigBall, {duration:0.3, scale:4});
  });
  el.addEventListener('mouseleave', () => {
    gsap.to(bigBall, {duration:0.3, scale:1});
  });
});
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>