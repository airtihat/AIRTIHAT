<?php
// مبدئياً: بيانات وهمية مؤقتة للتجربة فقط
$name = $_POST['name'] ?? 'أحمد الزهراني';
$email = $_POST['email'] ?? 'test@example.com';
$phone = $_POST['phone'] ?? '0501234567';
$date = date('Y-m-d H:i:s');
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <title>تأكيد التسجيل | منصة ارتحت</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: 'Tahoma', sans-serif;
      background-color: #f1f3f6;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 600px;
      margin: 60px auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      text-align: right;
    }

    h1 {
      color: #0077cc;
      margin-bottom: 20px;
    }

    .info {
      background-color: #f9f9f9;
      padding: 15px;
      border: 1px solid #ddd;
      border-radius: 8px;
      margin-bottom: 20px;
    }

    .info p {
      margin: 10px 0;
      font-size: 16px;
    }

    .success {
      background-color: #dff0d8;
      color: #3c763d;
      padding: 12px;
      border-radius: 8px;
      margin-bottom: 15px;
    }

    .btn {
      display: inline-block;
      background-color: #0077cc;
      color: white;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 6px;
      transition: background-color 0.3s;
    }

    .btn:hover {
      background-color: #005fa3;
    }
  </style>
</head>
<body>

  <div class="container">
    <h1>تم التسجيل بنجاح!</h1>
    <div class="success">تم حفظ بياناتك في النظام بنجاح. نشكرك على التسجيل معنا.</div>

    <div class="info">
      <p><strong>الاسم الكامل:</strong> <?= htmlspecialchars($name) ?></p>
      <p><strong>البريد الإلكتروني:</strong> <?= htmlspecialchars($email) ?></p>
      <p><strong>رقم الجوال:</strong> <?= htmlspecialchars($phone) ?></p>
      <p><strong>تاريخ التسجيل:</strong> <?= $date ?></p>
    </div>

    <a href="index.html" class="btn">العودة إلى الصفحة الرئيسية</a>
  </div>

</body>
</html>
