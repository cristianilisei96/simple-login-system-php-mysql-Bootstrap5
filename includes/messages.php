<?php
// Check if exist a message in the session
if (isset($_SESSION['message'])) {
    $alert_type = isset($_SESSION['alert-type']) ? $_SESSION['alert-type'] : 'alert-info';  // default 'alert-info' dacă nu există tipul
    echo '<div class="alert ' . $alert_type . ' alert-dismissible fade show" role="alert">';
    echo $_SESSION['message'];
    echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
    echo '</div>';
    unset($_SESSION['message']); // Delete message after show
    unset($_SESSION['alert-type']); // Delete type after show
}
