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
        <p>Your can read my info</p>
    </header>
    <main>
        <section>
            <h2>About Me</h2>
            <p>Super Pogi, May takot sa diyos, ug Family oriented, But an, ug Ang pina ka last kay Green Flag</p>
        </section>
        <section>
            <h2>Contact Me</h2>
            <form action="submit.php" method="post">
                <label for="name">Name: </label>
                <input type="text" id="name" name="name" required>
                
                <label for="number">Number: </label>
                <input type="number" id="email" name="email" required>
                
                <input type="submit" value="Submit">
            </form>
        </section>
    </main>
    <footer>
        <p>Thank you and Good BLess</p>
    </footer>
</body>
</html>
