<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f6f9;
        }

        .contact-box {
            max-width: 500px;
            margin: 60px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .form-control {
            border-radius: 8px;
        }

        .btn-custom {
            width: 100%;
            border-radius: 8px;
        }

        .small-text {
            font-size: 14px;
            color: #6c757d;
            text-align: center;
        }
    </style>
</head>

<body>



<!-- Contact Form -->
<div class="contact-box">

    <h3 class="text-center mb-3">Contact Us</h3>

    <p class="text-center text-muted mb-4">
        Have a question or feedback? We’d love to hear from you.
    </p>

    <form method="POST" action="">
        <input type="text" name="name" class="form-control mb-3" placeholder="Your Name" required>

        <input type="email" name="email" class="form-control mb-3" placeholder="Your Email" required>

        <textarea name="message" class="form-control mb-3" rows="4" placeholder="Your Message" required></textarea>

    <a href="tymessage.php" class="btn btn-primary" onclick="window.location.href='tymessage.php'">Send message.</a>
        
    </form>

    <p class="small-text mt-3">
        Or email us at: support@MyPortal.com
    </p>
</div>

</div>

</body>
</html>
