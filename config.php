<?php

define('base_url', 'https://abhijitpiludaria.com/');
define('admin_email', 'abhijitpiludariya@gmail.com;leafty22@gmail.com;');
define('facebook', 'https://www.facebook.com/abhijitsinh.piludaria');
define('twitter', 'https://twitter.com/_Abhijitsinh_');
define('youtube', '');
define('instagram', 'https://www.instagram.com/abhijit_piludaria_/');
define('linkedin', 'https://www.linkedin.com/in/abhijit-piludaria/');
define('abhijit_insta_user', 'abhijit_piludaria_');
define('db_name', 'abhiitpi_mywebsite');
define('db_user', 'abhiitpi_bothusers');
define('db_host', 'localhost');
define('db_password', 'plrW@?d_qUsZ');

// Create connection
$conn = mysqli_connect(constant('db_host'), constant('db_user'), constant('db_password'), constant('db_name'));
//Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>