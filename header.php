<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Smart Student Portal - <?php echo ucfirst($section); ?></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <header>
    <div class="header-container">
      <div class="logo">
        <i class="fas fa-graduation-cap"></i>
        <span>Smart Student Portal</span>
      </div>
      <button class="mobile-menu-btn" id="mobileMenuBtn">
        <i class="fas fa-bars"></i>
      </button>
      <nav id="mainNav">
        <ul>
          <li><a href="?section=dashboard"><i class="fas fa-home"></i> Home</a></li>
          <li><a href="?section=profile"><i class="fas fa-user"></i> Profile</a></li>
          <li><a href="?section=documents"><i class="fas fa-file-alt"></i> Documents</a></li>
          <li><a href="?section=courses"><i class="fas fa-book"></i> Courses</a></li>
          <li><a href="?section=messages"><i class="fas fa-envelope"></i> Messages</a></li>
        </ul>
      </nav>
    </div>
  </header>
</body>
</html> 