<!-- Login -->
<div class="login-wrapper">
    <section id="#login" class="login">
      <div class="login-decorator">
        <!-- Dekorasi Utama -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="decor-svg">
          <circle cx="50" cy="50" r="50" fill="url(#grad1)" />
          <defs>
            <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="100%">
              <stop offset="0%" style="stop-color:#ff9a9e;stop-opacity:1" />
              <stop offset="100%" style="stop-color:#fad0c4;stop-opacity:1" />
            </linearGradient>
          </defs>
        </svg>
      </div>
      
      <div class="person-decorator">
        <!-- SVG Orang-orangan -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" class="person-svg">
          <circle cx="32" cy="16" r="12" fill="#B0BEC5" />
          <rect x="20" y="28" width="24" height="32" rx="12" fill="#B0BEC5" />
        </svg>
      </div>
  
      <!-- Dekorasi Tambahan -->
      <div class="extra-decorator extra-decorator-1">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="extra-svg">
          <polygon points="50,15 80,80 20,80" fill="#E0F7FA" />
        </svg>
      </div>
      <div class="extra-decorator extra-decorator-2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="extra-svg">
          <rect width="100" height="100" fill="#FFE0B2" rx="20" />
        </svg>
      </div>
      <div class="extra-decorator extra-decorator-3">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="extra-svg">
          <ellipse cx="50" cy="50" rx="50" ry="25" fill="#D1C4E9" />
        </svg>
      </div>
  
      <!-- Dekorasi Baru Tambahan -->
      <div class="extra-decorator extra-decorator-4">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="extra-svg">
          <circle cx="50" cy="50" r="40" fill="#FFCDD2" />
        </svg>
      </div>
      <div class="extra-decorator extra-decorator-5">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="extra-svg">
          <polygon points="50,10 90,90 10,90" fill="#FFECB3" />
        </svg>
      </div>
      <div class="extra-decorator extra-decorator-6">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="extra-svg">
          <rect x="10" y="10" width="80" height="80" fill="#C8E6C9" rx="15" />
        </svg>
      </div>
  
      <div class="extra-decorator extra-decorator-7">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="extra-svg">
          <line x1="0" y1="50" x2="100" y2="50" stroke="#81D4FA" stroke-width="5" />
        </svg>
      </div>
      
      <h1 class="login-title">Login</h1>
      <form action="index.html" class="login-form">
        <label for="username" class="login-label">Username</label>
        <input type="text" id="username" name="username" class="login-input" placeholder="Enter your username" required>
  
        <label for="password" class="login-label">Password</label>
        <input type="password" id="password" name="password" class="login-input" placeholder="Enter your password" required>
        <a href="register.html">register</a>
        <button type="submit" class="login-btn">Login</button>
      </form>
    </section>
  
    <style>
      /* Reset and Global Styles */
      body {
        font-family: 'Poppins', sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
      }
  
      .login-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%23f2f2f2" fill-opacity="1" d="M0,160L60,138.7C120,117,240,75,360,85.3C480,96,600,160,720,170.7C840,181,960,139,1080,133.3C1200,128,1320,160,1380,176L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>');
        background-size: cover;
        background-position: center;
      }
  
      .login {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        position: relative;
        width: 100%;
        max-width: 600px;
        background-color: #fff;
        padding: 60px;
        border-radius: 15px;
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
      }
  
      .login-decorator {
        position: absolute;
        top: -25%;
        left: -25%;
        width: 450px;
        height: 450px;
        z-index: -1;
      }
  
      .decor-svg {
        width: 100%;
        height: auto;
      }
  
      .person-decorator {
        position: absolute;
        top: 0;
        right: -10%;
        width: 150px;
        height: 150px;
        z-index: 1;
      }
  
      .person-svg {
        width: 100%;
        height: auto;
      }
  
      .extra-decorator {
        position: absolute;
        width: 120px;
        height: 120px;
        z-index: -1;
      }
  
      .extra-decorator-1 {
        top: -15%;
        right: 10%;
      }
  
      .extra-decorator-2 {
        bottom: 20%;
        left: -15%;
      }
  
      .extra-decorator-3 {
        top: 50%;
        left: 40%;
        transform: translate(-50%, -50%);
      }
  
      .extra-decorator-4 {
        bottom: -10%;
        right: 15%;
      }
  
      .extra-decorator-5 {
        top: -10%;
        left: 50%;
      }
  
      .extra-decorator-6 {
        bottom: 5%;
        left: 10%;
      }
  
      .extra-decorator-7 {
        top: 80%;
        right: -5%;
      }
  
      .extra-svg {
        width: 100%;
        height: auto;
      }
  
      .login-title {
        font-size: 3rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 40px;
      }
  
      .login-form {
        width: 100%;
        display: flex;
        flex-direction: column;
      }
  
      .login-label {
        font-size: 1.4rem;
        color: #777;
        margin-bottom: 15px;
      }
  
      .login-input {
        font-size: 1.4rem;
        padding: 20px;
        margin-bottom: 25px;
        border: 1px solid #ccc;
        border-radius: 8px;
        transition: border-color 0.3s ease-in-out;
      }
  
      .login-input:focus {
        outline: none;
        border-color: #009F7F;
      }
  
      .login-btn {
        font-size: 1.8rem;
        background-color: #009F7F;
        color: white;
        border: none;
        padding: 18px;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out;
      }
  
      .login-btn:hover {
        background-color: #00876f;
      }
    </style>
  </div>