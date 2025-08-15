<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));

    // Here you can add code to handle the data, e.g., save to a database or send an email
    // For demonstration, we'll just display a success message
    echo "<h2>Thank you, $name! Your information has been submitted.</h2>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Welcome to My Landing Page</h1>
        <p>You can read my info</p>
    </header>
    <main>
        <section>
            <h2>About Me</h2>
            <p>Super Pogi, May takot sa diyos, Family oriented, But an,Last but not least kay Green Flag</p>
        </section>
        <section>
            <h2>Contact Me</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label for="name">Name: </label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Number: </label>
                <input type="email" id="number" name="number" required>
                
                <input type="submit" value="Submit">
            </form>
        </section>
    </main>
    <footer>
        <p>Thank you and Good Bless</p>
    </footer>
</body>
</html>
