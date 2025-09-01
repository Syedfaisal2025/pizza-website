<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>FOOD HUB</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

  <style>
    /* Reset & base */
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #111;
      color: #eee;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    /* Header/Nav */
    header {
      background-color: #222;
      padding: 10px 20px;
      box-shadow: 0 2px 5px rgba(255, 179, 71, 0.3);
    }

    nav.navbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .logo h1 {
      color: #ffb347;
      margin: 0;
      font-weight: 900;
      font-size: 1.8rem;
      user-select: none;
    }

    .nav-toggle {
      display: none;
      font-size: 1.5rem;
      color: #ffb347;
      cursor: pointer;
    }

    ul.nav-links {
      list-style: none;
      display: flex;
      gap: 1.8rem;
      margin: 0;
      padding: 0;
    }

    ul.nav-links li a {
      font-weight: 600;
      color: #eee;
      padding: 6px 10px;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    ul.nav-links li a:hover {
      background-color: #ffb347;
      color: #111;
    }

    .login button {
      background-color: #ffb347;
      border: none;
      padding: 8px 16px;
      border-radius: 6px;
      font-weight: 600;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .login button:hover {
      background-color: #e6952f;
    }

    /* Hero Section */
    #hero {
      text-align: center;
      padding: 6rem 1rem 4rem;
      background: url('https://images.unsplash.com/photo-1600891964599-f61ba0e24092?auto=format&fit=crop&w=1350&q=80') center/cover no-repeat;
      color: #fff;
      position: relative;
    }

    #hero::after {
      content: '';
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.5);
      z-index: 0;
    }

    #hero .content {
      position: relative;
      z-index: 1;
      max-width: 700px;
      margin: auto;
    }

    #hero h1 {
      font-size: 3rem;
      margin-bottom: 1rem;
      font-weight: 900;
      color: #ffb347;
    }

    #hero p {
      font-size: 1.25rem;
      margin-bottom: 2rem;
    }

    #hero .btn-group button {
      background-color: #ffb347;
      border: none;
      padding: 12px 25px;
      margin: 0 10px;
      border-radius: 6px;
      font-weight: 700;
      cursor: pointer;
      color: #111;
      transition: background-color 0.3s ease;
    }

    #hero .btn-group button:hover {
      background-color: #e6952f;
    }

    /* Services Section */
    #services {
      padding: 4rem 1rem;
      max-width: 1000px;
      margin: auto;
      text-align: center;
    }

    #services h2 {
      font-size: 2.5rem;
      margin-bottom: 2rem;
      color: #ffb347;
      font-weight: 900;
    }

    #services .service-cards {
      display: flex;
      justify-content: center;
      gap: 2rem;
      flex-wrap: wrap;
    }

    #services .card {
      background-color: #222;
      border-radius: 15px;
      padding: 2rem 1.5rem;
      flex: 1 1 220px;
      box-shadow: 0 0 15px #ffb347aa;
      transition: transform 0.3s ease;
    }

    #services .card:hover {
      transform: translateY(-8px);
      box-shadow: 0 8px 25px #ffb347cc;
    }

    #services .card i {
      font-size: 3rem;
      color: #ffb347;
      margin-bottom: 1rem;
    }

    #services .card h3 {
      margin-bottom: 1rem;
      font-weight: 700;
    }

    #services .card p {
      font-size: 1rem;
      line-height: 1.5;
      color: #ddd;
    }

    /* Responsive Nav */
    @media (max-width: 768px) {
      .nav-toggle {
        display: block;
      }

      ul.nav-links {
        flex-direction: column;
        width: 100%;
        display: none;
        margin-top: 10px;
        background-color: #222;
        border-radius: 8px;
      }

      ul.nav-links.active {
        display: flex;
      }

      ul.nav-links li {
        margin: 10px 0;
        text-align: center;
      }

      nav.navbar {
        justify-content: space-between;
      }
    }

    @media (max-width: 480px) {
      #hero h1 {
        font-size: 2rem;
      }

      #hero p {
        font-size: 1rem;
      }

      #services {
        padding: 3rem 1rem;
      }
    }
  </style>
</head>

<body>

  <header class="container">
    <nav class="navbar" aria-label="Main navigation">
      <div class="logo">
        <h1>FOOD HUB</h1>
      </div>

      <!-- Hamburger icon -->
      <div class="nav-toggle" id="nav-toggle">
        <i class="fas fa-bars"></i>
      </div>

      <!-- Navigation links -->
      <ul class="nav-links" id="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="menu.php">Menu</a></li>
        <li><a href="service.php">Service</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>

      <div class="login">
        <button>Login</button>
      </div>
    </nav>
  </header>

  <!-- Hero Section -->
  <section id="hero">
    <div class="content">
      <h1>We Cooked Your Desired Pizza Recipe</h1>
      <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
      <div class="btn-group">
        <button>Order Now</button>
        <button>View Menu</button>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section id="services">
    <h2>Our Services</h2>
    <div class="service-cards">
      <div class="card">
        <i class="fas fa-utensils"></i>
        <h3>Freshly Cooked</h3>
        <p>Delicious meals prepared daily with fresh ingredients.</p>
      </div>
      <div class="card">
        <i class="fas fa-truck"></i>
        <h3>Fast Delivery</h3>
        <p>Quick and reliable delivery right to your doorstep.</p>
      </div>
      <div class="card">
        <i class="fas fa-leaf"></i>
        <h3>Quality Ingredients</h3>
        <p>Only the freshest and highest quality ingredients used.</p>
      </div>
      <div class="card">
        <i class="fas fa-concierge-bell"></i>
        <h3>Customer Support</h3>
        <p>Friendly and helpful support for all your needs.</p>
      </div>
    </div>
  </section>



  

  <script>
    // Toggle mobile menu
    const navToggle = document.getElementById('nav-toggle');
    const navLinks = document.getElementById('nav-links');

    navToggle.addEventListener('click', () => {
      navLinks.classList.toggle('active');
    });
  </script>

</body>

</html>
