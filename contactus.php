<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="contactus.css"/>
</head>
<body>
    <form action="messages.php" method="POST">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="message" placeholder="Your Message" required></textarea>
        <button type="submit">Send Message</button>
    </form>
</body>
</html>
