<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "reviews";

// Создаем подключение к базе данных
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверяем подключение
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Считываем данные из формы
$name = $_POST["name"];
$email = $_POST["email"];
$review = $_POST["review"];

// Проверяем, что все поля заполнены
if ($name == "" || $email == "" || $review == "") {
  echo "Please fill in all fields";
  exit;
}

// Проверяем, что email введен корректно
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "Invalid email format";
  exit;
}

// Сохраняем данные в базу данных
$sql = "INSERT INTO review (name, email, review)
VALUES ('$name', '$email', '$review')";

if ($conn->query($sql) === TRUE) {
  echo "Review submitted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
