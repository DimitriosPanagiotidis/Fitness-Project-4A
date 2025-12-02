<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="contact-header">
        <?php include 'navbar.php'; ?>
        <div class="header-content">
            <h1>Get in Touch</h1>
            <p>We would love to hear from you! Please fill out the form below to contact us.</p>
        </div>
    </header>
    <div class="contact-form-wrapper">
        <form action="#" method="post" class="contact-form">
            <div>
                <h1>Contact Us</h1>
                <input type="text" id="name" name="name" placeholder="Name:" required>
                <input type="email" id="email" name="email" placeholder="Email:" required>
                <input type="tel" id="phone" name="phone" placeholder="Phone:" required>
                <textarea id="message" name="message" rows="5" placeholder="Message:" required></textarea>

                <button type="submit">Submit</button>
            </div>
    </div>
    </form>








    <?php include 'footer.php'; ?>
</body>

</html>