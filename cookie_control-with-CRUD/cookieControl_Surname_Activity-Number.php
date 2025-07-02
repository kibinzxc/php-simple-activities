<?php
// Start session or use cookies directly
$message = "";
$name = "";
$email = "";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Check if Delete Cookie button was pressed
    if (isset($_POST['delete_cookie'])) {
        setcookie("user_name", "", time() - 3600); // delete cookie
        // Redirect to avoid resubmission
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        // Validate inputs
        if (empty($_POST['name']) || empty($_POST['email'])) {
            // Preserve entered values
            $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : "";
            $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : "";
            $message = "Both Name and Email are required.";
        } else {
            // Sanitize inputs
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);

            // Set cookie for 1 day
            setcookie("user_name", $name, time() + 86400);

            // Redirect to avoid resubmission
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        }
    }
}

// Check if cookie exists
if (isset($_COOKIE['user_name'])) {
    $cookie_name = htmlspecialchars($_COOKIE['user_name']);
    $message = "Welcome back, $cookie_name!";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Welcome Form</title>
</head>

<body>
    <h2>User Form</h2>
    <?php if ($message): ?>
    <p><strong><?php echo $message; ?></strong></p>
    <?php endif; ?>

    <form method="post" action="">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>"><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>"><br><br>

        <button type="submit" name="submit">Submit</button>
    </form>

    <br>

    <form method="post" action="">
        <button type="submit" name="delete_cookie">Delete Cookie</button>
    </form>
</body>

</html>