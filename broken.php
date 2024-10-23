<?php
$title = "Welcome to Dr. Gilkes' Tutoring Program";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
</head>
<body>
    <header>
        <h1><?php echo $title; ?></h1>
        <nav>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#testimonials">Testimonials</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="about">
        <h2>About Dr. Gilkes</h2>
        <p>Welcome to my tutoring program! I'm Dr. Gilkes, a passionate educator dedicated to helping students achieve their academic goals. With years of experience in various subjects, I provide personalized tutoring tailored to each student's needs.</p>
    </section>

    <section id="services">
        <h2>Services Offered</h2>
        <ul>
            <li>Math Tutoring (All Levels)</li>
            <li>Science Tutoring (Biology, Chemistry, Physics)</li>
            <li>Language Arts and Writing Support</li>
            <li>Test Preparation (SAT, ACT, etc.)</li>
        </ul>
    </section>

    <section id="testimonials">
        <h2>Testimonials</h2>
        <blockquote>
            <p>"Dr. Gilkes made math easy to understand. I improved my grades significantly!" - Sarah K.</p>
        </blockquote>
        <blockquote>
            <p>"Thanks to Dr. Gilkes, I aced my science exams!" - James T.</p>
        </blockquote>
    </section>

    <section id="contact">
        <h2>Contact Me</h2>
        <form action="send_message.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Dr. Gilkes' Tutoring Program</p>
    </footer>
</body>
</html>
