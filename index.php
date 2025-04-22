<?php
session_start();
require_once 'includes/config.php';
require_once 'includes/functions.php';

// Check if user is logged in, otherwise redirect to login
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Determine which section to show
$section = isset($_GET['section']) ? $_GET['section'] : 'dashboard';

// Include header
require_once 'includes/header.php';
?>

<main>
    <aside class="sidebar">
        <?php include 'includes/sidebar.php'; ?>
    </aside>

    <div class="main-content">
        <?php
        // Load the appropriate section
        $section_file = "pages/$section.php";
        if (file_exists($section_file)) {
            include $section_file;
        } else {
            include 'pages/dashboard.php';
        }
        ?>
    </div>
</main>

<?php
// Include footer
require_once 'includes/footer.php';
?> 