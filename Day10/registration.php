<?php
include("header.php");
?>

<div class="container mt-5" style="max-width:400px;">
    <form action="" method="post">
        <h3 class="mb-3">Register</h3>
        <input type="text" name="name" class="form-control mb-3" placeholder="Name">
        <input type="email" name="email" class="form-control mb-3" placeholder="Email">
        <input type="password" name="password" class="form-control mb-3" placeholder="Password">
        <input type="password" name="confirmPassword" class="form-control mb-3" placeholder="Confirm Password" >
        <button class="btn btn-primary w-100">Register</button>
</form>
</div>
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];

    // (You can insert into database here if needed)

    // Store success message
    $_SESSION['success'] = "Registration successful!";
    $_SESSION['name'] = $name;

    // Redirect to success page
    header("Location: success.php");
    exit();
}
?>
<?php
include("footer.php");
?>
