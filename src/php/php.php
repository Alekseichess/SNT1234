if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Отправка письма
$to = 'example@example.com'; // Замените на ваш адрес
$subject = 'Новое сообщение';
$message = "От: $name\nE-mail: $email\n\n$message";
$headers = 'From: noreply@example.com' . "\r\n" .
'Reply-To: ' . $email . "\r\n" .
'Content-Type: text/plain; charset=UTF-8';

mail($to, $subject, $message, $headers);

echo 'Письмо успешно отправлено.';
} else {
echo 'Пожалуйста, заполните все поля.';
}Ъ