<?php
// Connect to database
 include 'admin/db.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['msg'];

    // Insert into database
    $sql = "INSERT INTO fquery (name, email, subject, message) 
            VALUES ('$name', '$email', '$subject', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "Message sent successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>FOOD HUB - Contact Us</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />

  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #111;
      color: #eee;
    }

    header {
      background-color: #222;
      padding: 10px 20px;
      box-shadow: 0 2px 5px rgba(255, 179, 71, 0.3);
    }

    nav.navbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .logo h1 {
      color: #ffb347;
      font-weight: 900;
      font-size: 1.8rem;
    }

    ul.nav-links {
      list-style: none;
      display: flex;
      gap: 1.8rem;
    }

    ul.nav-links li a {
      font-weight: 600;
      color: #eee;
      padding: 6px 10px;
      border-radius: 5px;
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
    }

    #contact {
      padding: 4rem 1rem;
      max-width: 700px;
      margin: auto;
    }

    #contact h2 {
      font-size: 2.5rem;
      margin-bottom: 2rem;
      text-align: center;
      color: #ffb347;
      font-weight: 900;
    }

    .contact-form {
      background-color: #222;
      padding: 2rem;
      border-radius: 15px;
      box-shadow: 0 0 15px #ffb347aa;
    }

    .form-control {
      background-color: #111;
      border: 1px solid #555;
      color: #eee;
    }

    .form-control::placeholder {
      color: #aaa;
    }

    .btn-submit {
      background-color: #ffb347;
      border: none;
      padding: 10px 20px;
      font-weight: 600;
      border-radius: 6px;
      color: #111;
      margin-top: 1rem;
    }

    .btn-submit:hover {
      background-color: #e6952f;
    }

    footer {
      background-color: #222;
      padding: 1.5rem 1rem;
      text-align: center;
      color: #aaa;
      margin-top: 4rem;
    }
  </style>
</head>

<body>

  <!-- Header/Navbar -->
  <header class="container">
    <nav class="navbar">
      <div class="logo">
        <h1>FOOD HUB</h1>
      </div>
      <ul class="nav-links">
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

  <!-- Contact Form -->
  <section id="contact">
    <h2>Contact Us</h2>

 

    <form class="contact-form" method="post" action="">
      <div class="mb-3">
        <label for="name" class="form-label">Your Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Your Email</label>
        <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
      </div>
      <div class="mb-3">
        <label for="subject" class="form-label">Subject</label>
        <input type="text" class="form-control" name="subject" placeholder="Subject" required>
      </div>
      <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" name="msg" rows="5" placeholder="Write your message..." required></textarea>
      </div>
      <button type="submit" class="btn-submit">Send Message</button>
    </form>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 FOOD HUB. All rights reserved.</p>
  </footer>

</body>

</html>
