<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $experience = $_POST['experience'];
    $education = $_POST['education'];

    ob_start();
    include 'templates/cv_template.php';
    $content = ob_get_clean();

    echo $content;
}
?>