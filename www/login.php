<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <?php include 'navbar.php'; ?>
        <div class="header-content">
            <h1>Login</h1>
            <p>Please enter your credentials to log in.</p>
        </div>
    </header>
    <main>
        <div class="login-form-wrapper">
            <form action="login_process.php" method="post" class="login-form">
                <input type="email" id="email" name="email" placeholder="Email" required>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    </main>

    <?php include 'footer.php'; ?>

</body>

</html>