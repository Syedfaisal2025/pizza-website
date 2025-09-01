<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>FOOD HUB</title>

  <!-- Font Awesome for icons -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet" />

  <style>
    /* Reset & basics */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background-color: #111;
      color: #eee;
      line-height: 1.6;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    button {
      cursor: pointer;
      font-family: inherit;
      font-weight: 600;
      border-radius: 5px;
      border: none;
      padding: 10px 20px;
      transition: background-color 0.3s ease;
    }

    /* Container */
    .container {
      width: 90%;
      max-width: 1200px;
      margin: auto;
    }

    /* Navbar */
    nav.navbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 1rem 0;
    }

    .logo h1 {
      color: #ffb347;
      font-weight: 700;
      font-size: 1.8rem;
    }

    /* Nav links */
    ul.nav-links {
      display: flex;
      gap: 1.5rem;
      list-style: none;
    }

    ul.nav-links li a {
      color: #eee;
      font-weight: 600;
      padding: 0.3rem 0.5rem;
      transition: color 0.3s ease;
    }

    ul.nav-links li a:hover {
      color: #ffb347;
    }

    .login button {
      background-color: #ffb347;
      color: #111;
      font-weight: 700;
      border-radius: 5px;
      padding: 8px 18px;
      border: none;
      transition: background-color 0.3s ease;
    }

    .login button:hover {
      background-color: #e59430;
    }

    /* Hamburger */
    .nav-toggle {
      display: none;
      font-size: 1.8rem;
      color: #ffb347;
      cursor: pointer;
    }

    /* Hero section */
    .hero {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 3rem 0;
      gap: 2rem;
      flex-wrap: wrap;
    }

    .hero-text {
      flex: 1;
      min-width: 300px;
    }

    .hero-text h2 {
      font-size: 2.8rem;
      margin-bottom: 1rem;
      color: #ffb347;
    }

    .hero-text p {
      font-size: 1.1rem;
      color: #ddd;
      margin-bottom: 1.5rem;
    }

    .hero-buttons button {
      margin-right: 1rem;
      background-color: #ffb347;
      color: #111;
      font-weight: 700;
      border-radius: 5px;
      padding: 10px 25px;
      border: none;
      transition: background-color 0.3s ease;
    }

    .hero-buttons button:hover {
      background-color: #e59430;
    }

    .hero-image {
      flex: 1;
      min-width: 300px;
      text-align: center;
    }

    .hero-image img {
      max-width: 100%;
      border-radius: 15px;
      box-shadow: 0 0 20px #ffb347a0;
    }

    /* Menu section */
    .menu-section {
      padding: 3rem 0;
      text-align: center;
    }

    .menu-section h2 {
      font-size: 2.5rem;
      color: #ffb347;
      margin-bottom: 1rem;
    }

    /* Menu categories */
    .menu-categories {
      display: flex;
      justify-content: center;
      gap: 1rem;
      margin-bottom: 2rem;
      flex-wrap: wrap;
    }

    .menu-categories button {
      background-color: transparent;
      border: 2px solid #ffb347;
      color: #ffb347;
      padding: 8px 20px;
      font-weight: 600;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .menu-categories button.active,
    .menu-categories button:hover {
      background-color: #ffb347;
      color: #111;
    }

    /* Menu items */
    .menu-items {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 2rem;
      padding: 0 1rem;
    }

    .menu-item {
      background-color: #222;
      border-radius: 15px;
      padding: 1rem;
      box-shadow: 0 0 12px #ffb347a0;
      display: flex;
      flex-direction: column;
      align-items: center;
      transition: transform 0.3s ease;
    }

    .menu-item:hover {
      transform: translateY(-8px);
      box-shadow: 0 0 20px #ffb347;
    }

    .menu-item img {
      width: 180px;
      height: 180px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: 1rem;
      box-shadow: 0 0 15px #ffb347a0;
    }

    .menu-item h3 {
      color: #ffb347;
      margin-bottom: 0.5rem;
      font-weight: 700;
    }

    .menu-item p {
      font-size: 0.9rem;
      color: #ccc;
      margin-bottom: 0.8rem;
      text-align: center;
      padding: 0 0.5rem;
    }

    .menu-item .price {
      color: #ffb347;
      font-weight: 700;
      margin-bottom: 1rem;
    }

    .menu-item button {
      background-color: transparent;
      border: 2px solid #ffb347;
      color: #ffb347;
      padding: 8px 20px;
      font-weight: 600;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .menu-item button:hover {
      background-color: #ffb347;
      color: #111;
    }

    /* Footer */
    footer {
      background-color: #111;
      padding: 2rem 0;
      margin-top: auto;
      color: #888;
      font-size: 0.9rem;
      text-align: center;
    }

    /* Responsive */
    @media (max-width: 900px) {
      .hero {
        flex-direction: column;
        text-align: center;
      }

      .hero-buttons button {
        margin-bottom: 1rem;
      }

      nav.navbar {
        position: relative;
      }

      .nav-toggle {
        display: block;
      }

      ul.nav-links {
        position: absolute;
        top: 60px;
        right: 0;
        background-color: #111;
        flex-direction: column;
        width: 200px;
        border-radius: 8px;
        box-shadow: 0 0 15px #ffb347a0;
        display: none;
      }

      ul.nav-links.active {
        display: flex;
      }

      ul.nav-links li {
        margin: 1rem 0;
        text-align: right;
        padding: 0 1rem;
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
        <li><a href="#">Home</a></li>
        <li><a href="#menu">Menu</a></li>
        <li><a href="service.php">Service</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>

      <div class="login">
        <button>Login</button>
      </div>
    </nav>
  </header>

  <section class="container hero">
    <div class="hero-text">
      <h2>We Cooked Your Desired Pizza Recipe</h2>
      <p>
        A small river named Duden flows by their place and supplies it with the necessary regelialia.
      </p>
      <div class="hero-buttons">
        <button>Order Now</button>
        <button>View Menu</button>
      </div>
    </div>
    <div class="hero-image">
      <img src="https://images.unsplash.com/photo-1600891964599-f61ba0e24092?auto=format&fit=crop&w=600&q=80" alt="Delicious Pizza" />
    </div>
  </section>

  <section id="menu" class="container menu-section">
    <h2>Our Menu</h2>

    <div class="menu-categories">
      <button class="active" data-category="pizza">Pizza</button>
      <button data-category="drinks">Drinks</button>
      <button data-category="burgers">Burgers</button>
      <button data-category="pasta">Pasta</button>
    </div>

    <div class="menu-items" id="menu-items">
      <!-- Pizza Items -->
      <div class="menu-item" data-category="pizza">
        <img src="https://images.unsplash.com/photo-1548365328-6cf3f2c327dd?auto=format&fit=crop&w=200&q=80" alt="Italian Pizza" />
        <h3>Italian Pizza</h3>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
        <div class="price">$2.90</div>
        <button>Add to cart</button>
      </div>

      <div class="menu-item" data-category="pizza">
        <img src="https://images.unsplash.com/photo-1601924582977-9f0467b93c09?auto=format&fit=crop&w=200&q=80" alt="Cheese Pizza" />
        <h3>Cheese Pizza</h3>
        <p>Cheesy goodness with fresh tomatoes and herbs, perfect for any occasion.</p>
        <div class="price">$3.50</div>
        <button>Add to cart</button>
      </div>

      <div class="menu-item" data-category="pizza">
        <img src="https://images.unsplash.com/photo-1590080877777-06b0d0fa6953?auto=format&fit=crop&w=200&q=80" alt="Veggie Pizza" />
        <h3>Veggie Pizza</h3>
        <p>Loaded with fresh vegetables and a tangy tomato base for a healthy option.</p>
        <div class="price">$3.10</div>
        <button>Add to cart</button>
      </div>

      <!-- Drinks Items -->
      <div class="menu-item" data-category="drinks" style="display:none">
        <img src="https://images.unsplash.com/photo-1567306226416-28f0efdc88ce?auto=format&fit=crop&w=200&q=80" alt="Soft Drink" />
        <h3>Soft Drink</h3>
        <p>Refreshing and chilled soda to accompany your meal.</p>
        <div class="price">$1.20</div>
        <button>Add to cart</button>
      </div>

      <div class="menu-item" data-category="drinks" style="display:none">
        <img src="https://images.unsplash.com/photo-1510626176961-4bfb76e19ee0?auto=format&fit=crop&w=200&q=80" alt="Juice" />
        <h3>Fresh Juice</h3>
        <p>Freshly squeezed juice to refresh your senses.</p>
        <div class="price">$2.00</div>
        <button>Add to cart</button>
      </div>

      <!-- Burgers Items -->
      <div class="menu-item" data-category="burgers" style="display:none">
        <img src="https://images.unsplash.com/photo-1550317138-10000687a72b?auto=format&fit=crop&w=200&q=80" alt="Cheeseburger" />
        <h3>Cheeseburger</h3>
        <p>Juicy grilled burger topped with cheese and fresh lettuce.</p>
        <div class="price">$4.50</div>
        <button>Add to cart</button>
      </div>

      <div class="menu-item" data-category="burgers" style="display:none">
        <img src="https://images.unsplash.com/photo-1551782450-a2132b4ba21d?auto=format&fit=crop&w=200&q=80" alt="Chicken Burger" />
        <h3>Chicken Burger</h3>
        <p>Delicious crispy chicken burger with mayo and pickles.</p>
        <div class="price">$4.00</div>
        <button>Add to cart</button>
      </div>

      <!-- Pasta Items -->
      <div class="menu-item" data-category="pasta" style="display:none">
        <img src="https://images.unsplash.com/photo-1603077223449-b96050a48d61?auto=format&fit=crop&w=200&q=80" alt="Spaghetti" />
        <h3>Spaghetti</h3>
        <p>Classic spaghetti pasta with tomato sauce and basil.</p>
        <div class="price">$3.80</div>
        <button>Add to cart</button>
      </div>

      <div class="menu-item" data-category="pasta" style="display:none">
        <img src="https://images.unsplash.com/photo-1617191519212-63aa96d40819?auto=format&fit=crop&w=200&q=80" alt="Penne Alfredo" />
        <h3>Penne Alfredo</h3>
        <p>Creamy Alfredo sauce with penne pasta and parmesan.</p>
        <div class="price">$4.10</div>
        <button>Add to cart</button>
      </div>
    </div>
  </section>

  <section id="services" class="container" style="padding: 3rem 0; color:#eee;">
    <h2 style="color:#ffb347; text-align:center; margin-bottom:2rem;">Our Services</h2>
    <ul style="list-style:none; max-width:600px; margin:auto; padding:0; text-align:center; font-size:1.1rem;">
      <li>✔ Cooked fresh daily with love</li>
      <li>✔ Fast and reliable delivery</li>
      <li>✔ Quality ingredients & hygiene</li>
      <li>✔ Variety of menu options</li>
    </ul>
  </section>

  <section id="about" class="container" style="padding:3rem 0; text-align:center; color:#eee;">
    <h2 style="color:#ffb347; margin-bottom:1rem;">About Us</h2>
    <p style="max-width:700px; margin:auto; font-size:1.1rem;">
      Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. We
      at Food Hub strive to bring you the best quality food with the freshest ingredients and traditional recipes passed down
      through generations.
    </p>
  </section>

  <section id="contact" class="container" style="padding:3rem 0; text-align:center; color:#eee;">
    <h2 style="color:#ffb347; margin-bottom:1rem;">Contact Us</h2>
    <p>203 Fake St. Mountain View, San Francisco, California, USA</p>
    <p>Phone: +2 392 3929 210</p>
    <p>Email: info@yourdomain.com</p>
  </section>

  <footer>
    &copy; 2025 FOOD HUB. All rights reserved.
  </footer>

  <script>
    // Toggle mobile menu
    const navToggle = document.getElementById('nav-toggle');
    const navLinks = document.getElementById('nav-links');

    navToggle.addEventListener('click', () => {
      navLinks.classList.toggle('active');
    });

    // Menu category filtering
    const categoryButtons = document.querySelectorAll('.menu-categories button');
    const menuItems = document.querySelectorAll('.menu-item');

    categoryButtons.forEach(button => {
      button.addEventListener('click', () => {
        categoryButtons.forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');

        const category = button.getAttribute('data-category');

        menuItems.forEach(item => {
          if (category === 'all' || item.getAttribute('data-category') === category) {
            item.style.display = 'flex';
          } else {
            item.style.display = 'none';
          }
        });
      });
    });
  </script>
</body>

</html>
