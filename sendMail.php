<?php
//ini_set("smtp_port", "587");
//ini_set("smtp_port","587");

//ini_set("SMTP", "ssl://smtp.gmail.com");
//ini_set('smtp_port','465');
//$SMTP = new SMTP();
//$SMTP->startTLS();


$subject = 'EMAIL';
echo '============' . "\n";
echo $subject . "\n";
echo '============' . "\n";
$firstName = 'Denis';
$text1 = "firstName : {$firstName}" . "\n";

// Додайте інші змінні з інформацією
$text2 = "123456" . "\n";
$text3 = "test-test" . "\n";


// З'єднайте всі тексти у змінну $message
$message = $text1 . $text2 . $text3;

$headers = 'From: d.i.borbotjko@student.khai.edu';

// Використання функції mail для відправлення листа
if (mail('borbotkodenis@gmail.com', $subject, $message, $headers)) {
    echo "Лист успішно надіслано";
} else {
    echo "Помилка при відправленні листа";
}
?>
