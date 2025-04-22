<?php
function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

function redirect($url) {
    header("Location: $url");
    exit();
}

function sanitizeInput($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

function displayAlert($type, $message) {
    echo '<div class="alert alert-'.$type.'">
            <i class="fas fa-info-circle"></i> '.$message.'
          </div>';
}
?> 