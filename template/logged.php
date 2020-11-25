<?php

require_once __DIR__ . '/../config/config.php';

// Check if SESSION exists
if (isset($_SESSION['login']) === FALSE) {
    header('Location: ../index.php');
    die();
}

require_once __DIR__ . '/../includes/header.php';

?>

    <div class="container mt-5 border bg-light">

        <p class="m-5 p-5 text-center" style="color: red">
            You are logged in to the system, click here to <a href="../src/controller/make-logout.php">LOGOUT</a>
        </p>

    </div>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>