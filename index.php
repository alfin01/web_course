<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tag
  -->
  <title>Course Coding</title>
  <meta name="title" content="EduWeb - The Best Program to Enroll for Exchange">
  <meta name="description" content="This is an education html template made by codewithsadee">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="image copy.svg" media="" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700;800&family=Poppins:wght@400;500&display=swap"
    rel="stylesheet">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-bg.svg">
  <link rel="preload" as="image" href="./assets/images/hero-banner-1.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-banner-2.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-shape-1.svg">
  <link rel="preload" as="image" href="./assets/images/hero-shape-2.png">

</head>

<body id="top">
  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">
        <a href="#" class="logo">
            <img src="image copy.png" width="92" height="70" alt="EduWeb logo">
        </a>

        <nav class="navbar" data-navbar>
            <div class="wrapper">
                <a href="#" class="logo">
                    <img src="image copy.png" width="92" height="70" alt="EduWeb logo">
                </a>
                <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
                    <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
                </button>
            </div>
            <ul class="navbar-list">
                <li class="navbar-item"><a href="#home" class="navbar-link" data-nav-link>Home</a></li>
                <li class="navbar-item"><a href="#about" class="navbar-link" data-nav-link>About</a></li>
                <li class="navbar-item"><a href="#courses" class="navbar-link" data-nav-link>Courses</a></li>
                <li class="navbar-item"><a href="#blog" class="navbar-link" data-nav-link>Blog</a></li>
                <li class="navbar-item"><a href="#contact" class="navbar-link" data-nav-link>Contact</a></li>
            </ul>
        </nav>

        <div class="header-actions">

         
            <a href="http://localhost:5173/" class="btn has-before">
                <span class="span">Try for free</span>
                <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </a>

            <a href="login.html" class="btn has-before">
                <span class="span">Login</span>
                <ion-icon name="log-in-outline" aria-hidden="true"></ion-icon>
            </a>
            <button class="header-action-btn toggle" id="toggleMenu">
              <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
          </button>
        <div class="overlay" data-nav-toggler data-overlay></div>
    </div>
</header>
<style>
  
  .header-actions {
  display: flex;
  align-items: center;
  gap: 10px; /* Mengatur jarak antara tombol */
}

.header-actions .btn {
  display: flex;
  align-items: center;
  text-decoration: none;
  color: #000; /* Warna teks */
  padding: 8px 16px; /* Jarak dalam tombol */
  border: 1px solid #ccc; /* Warna border */
  border-radius: 4px; /* Sudut border */
  background-color: #f5f5f5; /* Warna latar belakang */
}

.header-actions .header-action-btn {
  background: none;
  border: none;
  cursor: pointer;
}

.header-actions .header-action-btn ion-icon,
.header-actions .btn ion-icon {
  margin-left: 8px; /* Jarak antara teks dan ikon */
}

</style>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero has-bg-image" id="home" aria-label="home"
        style="background-image: url('./assets/images/hero-bg.svg')">
        <div class="container">

          <div class="hero-content">

            <h1 class="h1 section-title">
              Jelajahi Dunia Baru <span class="span">dengan </span> Program Kursus Kami
            </h1>

            <p class="hero-text">
              Masuki dunia pembelajaran dengan kursus inovatif kami. Setiap kursus membuka cakrawala baru dan memperkaya pengetahuan Anda.


            </p>

            <a href="#" class="btn has-before">
              <span class="span">Temukan kursus</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </a>

          </div>

          <figure class="hero-banner">

            <div class="img-holder one" style="--width: 270; --height: 300;">
              <img src="./assets/images/hero-banner-1.jpg" width="270" height="300" alt="hero banner" class="img-cover">
            </div>

            <div class="img-holder two" style="--width: 240; --height: 370;">
              <img src="./assets/images/hero-banner-2.jpg" width="240" height="370" alt="hero banner" class="img-cover">
            </div>

            <img src="./assets/images/hero-shape-1.svg" width="380" height="190" alt="" class="shape hero-shape-1">

            <img src="./assets/images/hero-shape-2.png" width="622" height="551" alt="" class="shape hero-shape-2">

          </figure>

        </div>
      </section>





      <!-- 
        - #CATEGORY
      -->

      <section class="section category" aria-label="category">
        <div class="container">

          <p class="section-subtitle">Kategori</p>

          <h2 class="h2 section-title">
            Online <span class="span">Kelas</span> Untuk Pembelajaran Jarak Jauh.
          </h2>

          <p class="section-text">
           Pembelajaran dan pengetahuan yang tinggi, akan tetapi mengalami perubahan sementara.
          </p>

          <ul class="grid-list">

            <li>
              <div class="category-card" style="--color: 170, 75%, 41%">

                <div class="card-icon">
                  <img src="./assets/images/category-1.svg" width="40" height="40" loading="lazy"
                    alt="Online Degree Programs" class="img">
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Online Degree Programs</a>
                </h3>

                <p class="card-text">
                  Program gelar online fleksibel.
                </p>

                <span class="card-badge">7 Courses</span>

              </div>
            </li>

            <li>
              <div class="category-card" style="--color: 351, 83%, 61%">

                <div class="card-icon">
                  <img src="./assets/images/category-2.svg" width="40" height="40" loading="lazy"
                    alt="Non-Degree Programs" class="img">
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Non-Degree Programs</a>
                </h3>

                <p class="card-text">
                  Pengembangan keterampilan tanpa gelar.
                </p>

                <span class="card-badge">4 Courses</span>

              </div>
            </li>

            <li>
              <div class="category-card" style="--color: 229, 75%, 58%">

                <div class="card-icon">
                  <img src="./assets/images/category-3.svg" width="40" height="40" loading="lazy"
                    alt="Off-Campus Programs" class="img">
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Off-Campus Programs</a>
                </h3>

                <p class="card-text">
                  Pendidikan jarak jauh tanpa hadir di kampus.
                </p>

                <span class="card-badge">8 Courses</span>

              </div>
            </li>

            <li>
              <div class="category-card" style="--color: 42, 94%, 55%">

                <div class="card-icon">
                  <img src="./assets/images/category-4.svg" width="40" height="40" loading="lazy"
                    alt="Hybrid Distance Programs" class="img">
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Hybrid Distance Programs</a>
                </h3>

                <p class="card-text">
                  Kombinasi online dan tatap muka.
                </p>

                <span class="card-badge">8 Courses</span>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" id="about" aria-label="about">
        <div class="container">

          <figure class="about-banner">

            <div class="img-holder" style="--width: 520; --height: 370;">
              <img src="./assets/images/about-banner.jpg" width="520" height="370" loading="lazy" alt="about banner"
                class="img-cover">
            </div>

            <img src="./assets/images/about-shape-1.svg" width="360" height="420" loading="lazy" alt=""
              class="shape about-shape-1">

            <img src="./assets/images/about-shape-2.svg" width="371" height="220" loading="lazy" alt=""
              class="shape about-shape-2">

            <img src="./assets/images/about-shape-3.png" width="722" height="528" loading="lazy" alt=""
              class="shape about-shape-3">

          </figure>

          <div class="about-content">

            <p class="section-subtitle">About Us</p>

            <h2 class="h2 section-title">
              Over 10 Years in <span class="span">Distant learning</span> for Skill Development
            </h2>

            <p class="section-text">
              Lebih dari 10 Tahun dalam Pembelajaran Jarak Jauh untuk Pengembangan Keterampilan
              Kami telah berpengalaman lebih dari satu dekade dalam menyediakan program pembelajaran jarak jauh yang berfokus pada pengembangan keterampilan. 
            </p>

            <ul class="about-list">

              <li class="about-item">
                <ion-icon name="checkmark-done-outline" aria-hidden="true"></ion-icon>

                <span class="span">Expert Trainers</span>
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-done-outline" aria-hidden="true"></ion-icon>

                <span class="span">Online Remote Learning</span>
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-done-outline" aria-hidden="true"></ion-icon>

                <span class="span">Lifetime Access</span>
              </li>

            </ul>

            <img src="./assets/images/about-shape-4.svg" width="100" height="100" loading="lazy" alt=""
              class="shape about-shape-4">

          </div>

        </div>
      </section>





      <!-- 
        - #COURSE
      -->

      <section  class="section course" id="courses" aria-label="course">
        <div class="container">

          <p class="section-subtitle">Popular Courses</p>

          <h2 class="h2 section-title">Pick A Course To Get Started</h2>

          <ul class="grid-list">

            <li>
              <div class="course-card">

                <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                  <img src="./assets/images/course-1.jpg" width="370" height="220" loading="lazy"
                    alt="Build Responsive Real- World Websites with HTML and CSS" class="img-cover">
                </figure>

                <div class="abs-badge">
                  <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                  <span class="span">3 Weeks</span>
                </div>

                <div class="card-content">

                  <span class="badge">Beginner</span>

                  <h3 class="h3">
                    <a href="http://localhost:5173/" class="card-title">Build Responsive Real- World Websites with HTML and CSS</a>
                  </h3>

                  <div class="wrapper">

                    <div class="rating-wrapper">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <p class="rating-text">(5.0/7 Rating)</p>

                  </div>

                  <data class="price" value="29">Free</data>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="library-outline" aria-hidden="true"></ion-icon>

                      <span class="span">8 Lessons</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                      <span class="span">20 Students</span>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="course-card">

                <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                  <img src="./assets/images/course-2.jpg" width="370" height="220" loading="lazy"
                    alt="Java Programming Masterclass for Software Developers" class="img-cover">
                </figure>

                <div class="abs-badge">
                  <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                  <span class="span">8 Weeks</span>
                </div>

                <div class="card-content">

                  <span class="badge">Advanced</span>

                  <h3 class="h3">
                    <a href="http://localhost:5174/" class="card-title">Java Programming Masterclass for Software Developers</a>
                  </h3>

                  <div class="wrapper">

                    <div class="rating-wrapper">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <p class="rating-text">(4.5 /9 Rating)</p>

                  </div>

                  <data class="price" value="49">$49.00</data>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="library-outline" aria-hidden="true"></ion-icon>

                      <span class="span">15 Lessons</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                      <span class="span">35 Students</span>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
            
      </section>





      <!-- 
        - #VIDEO
      -->

      <section class="video has-bg-image" aria-label="video"
        style="background-image: url('./assets/images/video-bg.png')">
        <div class="container">

          <div class="video-card">

            <div class="video-banner img-holder has-after" style="--width: ; --height: ;">
              <img src="./assets/images/video-banner.jpg" width="970" height="550" loading="lazy" alt="video banner"
                class="img-cover">

              
            </div>

            <img src="./assets/images/video-shape-1.png" width="1089" height="605" loading="lazy" alt=""
              class="shape video-shape-1">

            <img src="./assets/images/video-shape-2.png" width="158" height="174" loading="lazy" alt=""
              class="shape video-shape-2">

          </div>

        </div>
      </section>





      <!-- 
        - #STATE
      -->

      <section class="section stats" aria-label="stats">
        <div class="container">

          <ul class="grid-list">

            <li>
              <div class="stats-card" style="--color: 170, 75%, 41%">
                <h3 class="card-title">29.3k</h3>

                <p class="card-text">Student Enrolled</p>
              </div>
            </li>

            <li>
              <div class="stats-card" style="--color: 351, 83%, 61%">
                <h3 class="card-title">32.4K</h3>

                <p class="card-text">Class Completed</p>
              </div>
            </li>

            <li>
              <div class="stats-card" style="--color: 260, 100%, 67%">
                <h3 class="card-title">100%</h3>

                <p class="card-text">Satisfaction Rate</p>
              </div>
            </li>

            <li>
              <div class="stats-card" style="--color: 42, 94%, 55%">
                <h3 class="card-title">354+</h3>

                <p class="card-text">Top Instructors</p>
              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #BLOG
      -->

      <section class="section blog has-bg-image" id="blog" aria-label="blog"
        style="background-image: url('./assets/images/blog-bg.svg')">
        <div class="container">

          <p class="section-subtitle">Latest Articles</p>

          <h2 class="h2 section-title">Get News With Eduweb</h2>

          <ul class="grid-list">

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder has-after" style="--width: 370; --height: 370;">
                  <img src="./assets/images/blog-1.jpg" width="370" height="370" loading="lazy"
                    alt="Become A Better Blogger: Content Planning" class="img-cover">
                </figure>

                <div class="card-content">

                  <a href="#" class="card-btn" aria-label="read more">
                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>

                  <a href="#" class="card-subtitle">Online</a>

                  <h3 class="h3">
                    <a href="#" class="card-title">Become A Better Blogger: Content Planning</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                      <span class="span">Oct 10, 2021</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="chatbubbles-outline" aria-hidden="true"></ion-icon>

                      <span class="span">Com 09</span>
                    </li>

                  </ul>

                  <p class="card-text">
                  garoh isi dewe
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder has-after" style="--width: 370; --height: 370;">
                  <img src="./assets/images/blog-2.jpg" width="370" height="370" loading="lazy"
                    alt="Become A Better Blogger: Content Planning" class="img-cover">
                </figure>

                <div class="card-content">

                  <a href="#" class="card-btn" aria-label="read more">
                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>

                  <a href="#" class="card-subtitle">Online</a>

                  <h3 class="h3">
                    <a href="#" class="card-title">Become A Better Blogger: Content Planning</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                      <span class="span">Oct 10, 2021</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="chatbubbles-outline" aria-hidden="true"></ion-icon>

                      <span class="span">Com 09</span>
                    </li>

                  </ul>

                  <p class="card-text">
                    garoh isi dewe
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder has-after" style="--width: 370; --height: 370;">
                  <img src="./assets/images/blog-3.jpg" width="370" height="370" loading="lazy"
                    alt="Become A Better Blogger: Content Planning" class="img-cover">
                </figure>

                <div class="card-content">

                  <a href="#" class="card-btn" aria-label="read more">
                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>

                  <a href="#" class="card-subtitle">Online</a>

                  <h3 class="h3">
                    <a href="#" class="card-title">Become A Better Blogger: Content Planning</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                      <span class="span">Oct 10, 2021</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="chatbubbles-outline" aria-hidden="true"></ion-icon>

                      <span class="span">Com 09</span>
                    </li>

                  </ul>

                  <p class="card-text">
                    garoh isi dewe
                  </p>

                </div>

              </div>
            </li>

          </ul>

          <img src="./assets/images/blog-shape.png" width="186" height="186" loading="lazy" alt=""
            class="shape blog-shape">

        </div>
      </section>

    </article>
  </main>

  <!--
  contact-->

  <section class="section contact-section has-bg-image" id="contact" aria-label="contact"
  style="background-image: url('isi dewe')">
  <div class="container">

    <p class="section-subtitle">Get In Touch</p>

    <h2 class="h2 section-title">Contact Us</h2>

    <div class="contact-content">
      <div class="contact-info">
        <div class="contact-item">
          <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
          <p>Jl. Tenggilis Tengah III No.1,Kec.Tenggilis </p>
        </div>

        <div class="contact-item">
          <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
          <p>
            <a href="https://wa.me/6295413938230" target="_blank" rel="noopener noreferrer">
              +62 895413938230
            </a>
          </p>
        </div>
        
        <style>
          .contact-item a {
            color: black; /* Warna default hitam */
            text-decoration: none; /* Hilangkan garis bawah jika diinginkan */
          }
        
          .contact-item a:hover {
            color: #009F7F; /* Warna saat hover */
          }
        </style>
        

        <div class="contact-item">
          <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
          <p>kodingacademi@gmail.com</p>
        </div>

        <div class="contact-form">
          <form action="#" method="post">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" id="name" name="name" required>
            </div>
            
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
              <label for="message">Message</label>
              <textarea id="message" name="message" rows="4" required></textarea>
            </div>

            <button type="submit" class="btn">Send Message</button>
          </form>
        </div>
      </div>

      <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.3098350323357!2d112.7491195759488!3d-7.3190507719725275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb8fc109c9a3%3A0x49a1d5a2883e10b6!2sKoding%20Akademi%20Surabaya%20%7C%20Pusat%20Belajar%20Coding%20dan%20Robotika!5e0!3m2!1sid!2sid!4v1723730536178!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
</section>

  <!-- 
    - #FOOTER
  -->

  <footer class="footer" style="background-image: url('./assets/images/footer-bg.png')">

    <div class="footer-top section">
      <div class="container grid-list">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="image copy.png" width="162" height="50" alt="EduWeb logo">
          </a>

          <p class="footer-brand-text">
            © Kelompok 5 By Alfin
          </p>

          <div class="wrapper">
            <span class="span">Add:</span>

            <address class="address">Jl. Tenggilis Tengah III No.1
              </address>
          </div>

          <div class="wrapper">
            <span class="span">Call:</span>

            <a href=" https://wa.me/62895413938230" class="footer-link">+62 895413938230</a>
          </div>

          <div class="wrapper">
            <span class="span">Email:</span>

            <a href="mailto:kodingacademi@gmail.com" class="footer-link">kodingacademi@gmail.com</a>
          </div>

        </div>

        <ul class="footer-list">
          <li>
            <p class="footer-list-title">Online Platform</p>
          </li>
          <li>
            <a href="#home" class="footer-link">Home</a>
          </li>
          <li>
            <a href="#about" class="footer-link">About</a>
          </li>

          <li>
            <a href="#courses" class="footer-link">Courses</a>
          </li>
          <li>
            <a href="#blog" class="footer-link">Blog</a>
          </li>
          <li>
            <a href="#contact" class="footer-link">Contact</a>
          </li>
        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Links</p>
          </li>

          <li>
            <a href="#" class="footer-link">Contact Us</a>
          </li>

          <li>
            <a href="#" class="footer-link">Gallery</a>
          </li>

          <li>
            <a href="#" class="footer-link">News & Articles</a>
          </li>

          <li>
            <a href="#" class="footer-link">FAQ's</a>
          </li>

          <li>
            <a href="#" class="footer-link">Sign In/Registration</a>
          </li>

          <li>
            <a href="#" class="footer-link">Coming Soon</a>
          </li>

        </ul>

        <div class="footer-list">

          <p class="footer-list-title">Contacts</p>

          <p class="footer-list-text">
            Enter your email address to register to our newsletter subscription
          </p>

          <form action="" class="newsletter-form">
            <input type="email" name="email_address" placeholder="Your email" required class="input-field">

            <button type="submit" class="btn has-before">
              <span class="span">Subscribe</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </button>
          </form>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
      </div>
    </div>

  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back top top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>