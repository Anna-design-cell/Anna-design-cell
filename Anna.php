<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $text = $_POST['text'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $year = isset($_POST['year']) ? $_POST['year'] : "None";
    $date = $_POST['date'];
    $message = $_POST['message'];
    $color = $_POST['color'];
    $volume = $_POST['volume'];
    $search = $_POST['search'];
    $tel = $_POST['tel'];
    $url = $_POST['url'];
        
    echo "<table border='1'>
    <h1>Your inputs are</h1>
            <tr><th>Text</th><td>{$text}</td></tr>
            <tr><th>Password</th><td>{$password}</td></tr>
            <tr><th>Email</th><td>{$email}</td></tr>
            <tr><th>Gender</th><td>{$gender}</td></tr>
            <tr><th>Hobbies</th><td>{$year}</td></tr>
            <tr><th>Date</th><td>{$date}</td></tr>
            <tr><th>Message</th><td>{$message}</td></tr>
            <tr><th>Favorite Color</th><td>{$color}</td></tr>
            <tr><th>Volume</th><td>{$volume}</td></tr>
            <tr><th>Search</th><td>{$search}</td></tr>
            <tr><th>Telephone</th><td>{$tel}</td></tr>
            <tr><th>Website</th><td>{$url}</td></tr>
          </table>";
          
}
?>
