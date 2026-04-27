<<<<<<< HEAD
<?php
session_start();

include('includes/header.php');

$page_title = "Register";

// redirect if the user is autenticated
if (isset($_SESSION['auth'])) {
    header('Location: index.php');
    exit();
}

if (isset($_POST['register_btn'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Validate
    if (empty($name) || empty($email) || empty($password)) {
        $_SESSION['alert-type'] = 'alert-danger';
        $_SESSION['message'] = 'All fields are required!';
        header('Location: register.php');
        exit();
    }

    if (strlen($name) < 5) {
        $_SESSION['alert-type'] = 'alert-danger';
        $_SESSION['message'] = 'The name must be at least 5 characters long!';
        header('Location: register.php');
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['alert-type'] = 'alert-danger';
        $_SESSION['message'] = 'The email address is not valid!';
        header('Location: register.php');
        exit();
    }

    if (strlen($password) < 8) {
        $_SESSION['alert-type'] = 'alert-danger';
        $_SESSION['message'] = 'The password must be at least 8 characters long!';
        header('Location: register.php');
        exit();
    }

    // If all validations pass
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->execute([$name, $email, $hashed_password]);

    if ($stmt->affected_rows > 0) {
        $_SESSION['alert-type'] = 'alert-success';
        $_SESSION['message'] = 'Registration successful! You can log in now.';
        header('Location: login.php');
        exit();
    } else {
        $_SESSION['alert-type'] = 'alert-danger';
        $_SESSION['message'] = 'Registration error! Please try again.';
        header('Location: register.php');
        exit();
    }
}
?>

<div class="container">
    <div class="col-md-6 offset-md-3 mt-4">
        <div class="card">
            <div class="card-body">
                <?php
                include('includes/messages.php');
                ?>
                <form action="register.php" method="POST">
                    <div class="mb-3">
                        <label for="name">Full Name</label>
                        <input type="text" name="name" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" require>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" require>
                    </div>
                    <button type="submit" name="register_btn" class="btn btn-success">Register</button>
                </form>
            </div>
        </div>
    </div>
=======
<?php
session_start();

include('includes/header.php');

$page_title = "Register";

// redirect if the user is autenticated
if (isset($_SESSION['auth'])) {
    header('Location: index.php');
    exit();
}

if (isset($_POST['register_btn'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Validate
    if (empty($name) || empty($email) || empty($password)) {
        $_SESSION['alert-type'] = 'alert-danger';
        $_SESSION['message'] = 'All fields are required!';
        header('Location: register.php');
        exit();
    }

    if (strlen($name) < 5) {
        $_SESSION['alert-type'] = 'alert-danger';
        $_SESSION['message'] = 'The name must be at least 5 characters long!';
        header('Location: register.php');
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['alert-type'] = 'alert-danger';
        $_SESSION['message'] = 'The email address is not valid!';
        header('Location: register.php');
        exit();
    }

    if (strlen($password) < 8) {
        $_SESSION['alert-type'] = 'alert-danger';
        $_SESSION['message'] = 'The password must be at least 8 characters long!';
        header('Location: register.php');
        exit();
    }

    // If all validations pass
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->execute([$name, $email, $hashed_password]);

    if ($stmt->affected_rows > 0) {
        $_SESSION['alert-type'] = 'alert-success';
        $_SESSION['message'] = 'Registration successful! You can log in now.';
        header('Location: login.php');
        exit();
    } else {
        $_SESSION['alert-type'] = 'alert-danger';
        $_SESSION['message'] = 'Registration error! Please try again.';
        header('Location: register.php');
        exit();
    }
}
?>

<div class="container">
    <div class="col-md-6 offset-md-3 mt-4">
        <div class="card">
            <div class="card-body">
                <?php
                include('includes/messages.php');
                ?>
                <form action="register.php" method="POST">
                    <div class="mb-3">
                        <label for="name">Full Name</label>
                        <input type="text" name="name" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" require>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" require>
                    </div>
                    <button type="submit" name="register_btn" class="btn btn-success">Register</button>
                </form>
            </div>
        </div>
    </div>
>>>>>>> 65d5abe992e31588d3cf4c82e0754d26752bb132
</div>