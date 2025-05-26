<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="mystyle.css">
    <meta charset="UTF-8">
    <title>Thank You</title>
</head>
<body class="bodyFB">
<div class="thankyou-container">
    <h1>Thank You for Your Feedback!</h1>
    <p><strong>Name:</strong> <?php echo $_POST['name']; ?></p>
    <p><strong>Email:</strong> <?php echo $_POST['email']; ?></p>
    <p><strong>Feedback:</strong></p>
    <p><?php echo $_POST['feedback']; ?></p>
</div>
</body>
</html>
