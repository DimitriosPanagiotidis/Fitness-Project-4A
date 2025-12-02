<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <?php include 'navbar.php'; ?>
        <div class="header-content">
            <h1>Register</h1>
            <p>Create an account to access personalized workout plans and track your progress!</p>
        </div>
    </header>
    <div class="register-form-wrapper">
        <form action="register_process.php" method="POST" class="register-form">
            <input type="text" name="firstname" placeholder="First Name" required>
            <input type="text" name="lastname" placeholder="Last Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <div class="form-group">
                <label for="role_form">Select your role</label>
                <select name="role_form" id="role_form" required>
                    <option value="Member">Member</option>
                    <option value="teacher">Employee</option>
                </select>
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>