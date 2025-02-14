<?php
 
 $firstname = $_POST["f_name"];
 $lastname = $_POST["l_name"];
 $where = $_POST["where"];
 $To = $_POST["to"];
 $email = $_POST["email"];
 $phonenumber = $_POST["phone_number"];
 $price = $_POST["price"];
 $date = $_POST["date"];

 $firstname_convert = ucwords($firstname);
 $lastname_convert = ucwords($lastname);
 $price_currency = "$$price";
 
 if(!$firstname_convert || !$lastname_convert || !$where || !$To || !$email || !$phonenumber || !$price || !$date) {
    $msg = 'error';
    $comment = 'All information required!';
    include('book-a-trip.php');
    exit;
}

 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $msg = 'error';
    $comment = 'Please enter a valid email';
    include('book-a-trip.php');
    exit;
}

 if (strlen($phonenumber) != 11) {
    $msg = 'error';
    $comment = 'Please enter valid GSM number';
    include('book-a-trip.php');
    exit;
}

//write the code to send the details to email

// $content = 'FIRSTNAME: '.$firstname_convert."\n"
// .'LASTNAME: '.$lastname_convert."\n"
// .'WHERE: '.$where."\n"
// .'TO: '.$To."\n"
// .'EMAIL : '.$email."\n"
// .'PHONE_NUMBER : '.$phonenumber."\n"
// .'PRICE : '.$price_currency."\n"
// .'DATE : '.$date."\n"


// $to = 'Francisnwankwo37@gmail.com';
// $sub = 'Client Trip Booking Info';
// $from = "From: noreply@aledoy.com";

// mail($to,$sub,$content,$from); 




//show succesful message

$msg = 'success';
include('book-a-trip.php');


?>