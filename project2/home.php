<?php
/* 
    Author: Bhairavi Patel
    Date: 06/02/2023
*/
define('TITLE', "Home");
include dirname(__DIR__) . "/project2/templates/header.php";
?>

<?php
session_start();

if (isset($_SESSION['email'])) {
    print '<div class="center">';
    print '<h2><p>Hello, ' . $_SESSION['email'] . '!</p></h2>';
    
    // print how long they've been logged 
    date_default_timezone_set('America/New_York');

    print '<p>You have been logged in since: ' . date('g:i a', $_SESSION['loggedin']) . '.</p>';

    // logout link
    print '<button><a href="logout.php">Logout</a></button><br><br>';
    print '</div>';
}
?>

<!-- GitHub and LinkedIn links -->
<a href="https://github.com/brvp1" target="_blank">
    <img src="images/github-mark.png" width="25" height="25" alt="github logo">
</a>
&nbsp;
<a href="https://www.linkedin.com/in/bhairavi-patel/" target="_blank">
    <img src="images/linkedin-logo.png" width="30" height="25" alt="linkedin logo">
</a>

<br><br>
<!-- Portrait Image -->
<div class="hero">
    <img src="images/self.jpeg" width="350" height="350" alt="Bhairavi Patel portrait image">


    <!-- About Me text -->
    <p>
        Hello! I am Bhairavi. I am a Web Developer from Miami, FL.
        I am currently pursuing my studies as a Mobile Application Developer.
        I am driven by a deep curiosity for all things digital. I find immense joy in creating captivating and functional websites that not only deliver a seamless user experience but also leave a lasting impression.
        <br><br>
        My journey into the world of programming began when I started my own business and had to build my own website. In the process of making my own website, I was captivated by the power and creativity of coding. Since then, I have dedicated myself to honing my skills and expanding my knowledge in various software development technologies.
        <br><br>
        Collaboration is at the heart of my work ethic. I thrive in team environments, valuing the diverse perspectives and insights that contribute to creating exceptional websites. I pride myself on my ability to communicate effectively, ensuring that projects are completed efficiently and with the utmost attention to detail.
        <br><br>
        In addition to my technical skills, I am a problem solver at heart. I enjoy tackling challenges head-on and finding innovative solutions that push the boundaries of what's possible. Whether it's troubleshooting a bug or optimizing performance, I am relentless in my pursuit of excellence.
        <br><br>
        Continuous learning is a fundamental aspect of my journey as a web developer. I am constantly seeking new opportunities to expand my skill set and stay ahead in this ever-evolving field. By staying curious and embracing new technologies, I am able to deliver cutting-edge solutions that meet the needs of modern users.
        <br><br>
        I am excited to showcase my work and share my passion for web development with you. Feel free to explore my portfolio and discover the projects that showcase my skills and creativity. If you have any inquiries or would like to collaborate on an exciting web development project, please don't hesitate to reach out.
        <br><br>
        Thank you for visiting, and I look forward to connecting with you soon!
    </p>
</div>

<?php
include dirname(__DIR__) . "/project2/templates/footer.php";
?>