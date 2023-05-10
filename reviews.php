<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>The</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<form action="submit_review.php" method="post">
  <label for="name">Ваше имя:</label>
  <input type="text" id="name" name="name" required>

  <label for="email">E-mail:</label>
  <input type="email" id="email" name="email" required>

  <label for="review">Отзыв:</label>
  <textarea id="review" name="review" required></textarea>

  <input type="submit" value="Отправить">
</form>
<!-- End Content -->
</body>
</html>