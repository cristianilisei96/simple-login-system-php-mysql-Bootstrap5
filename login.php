<?php
session_start();

include('includes/header.php');

$page_title = "Login";

// redirect if the user is autenticated
if (isset($_SESSION['auth'])) {
    header('Location: index.php');
    exit();
}

if (isset($_POST['login_btn'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Simple validation
    if (empty($email) || empty($password)) {
        $_SESSION['alert-type'] = 'alert-danger';
        $_SESSION['message'] = 'Please fill in all fields!';
        header('Location: login.php');
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['alert-type'] = 'alert-danger';
        $_SESSION['message'] = 'Invalid email format!';
        header('Location: login.php');
        exit();
    }

    // Search the user
    $query = "SELECT * FROM users WHERE email = ? LIMIT 1";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email); // "s" from string
    $stmt->execute();
    $result = $stmt->get_result(); // get result
    $user = $result->fetch_assoc();

    if ($user) {
        if (password_verify($password, $user['password'])) {
            // login success
            $_SESSION['auth'] = true;
            $_SESSION['auth_user'] = [
                'user_id' => $user['id'],
                'role' => $user['role'],
                'name' => $user['name'],
                'email' => $user['email']
            ];
            $_SESSION['alert-type'] = 'alert-success';
            $_SESSION['message'] = 'Welcome back, ' . $user['name'] . ', you have the role of ' . $user['role'] . '!';
            header('Location: index.php');
            exit();
        } else {
            $_SESSION['alert-type'] = 'alert-danger';
            $_SESSION['message'] = 'Invalid password!';
            header('Location: login.php');
            exit();
        }
    } else {
        $_SESSION['alert-type'] = 'alert-danger';
        $_SESSION['message'] = 'No account found with this email!';
        header('Location: login.php');
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
                <form action="login.php" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <button type="submit" name="login_btn" class="btn btn-success">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>