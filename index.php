
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Gửi email</title>
</head>
<body>

    <h2>FORM GỬI EMAIL</h2>

    <form action="mail.php"
          method="POST"
          enctype="multipart/form-data">

        <p>Email người nhận:</p>
        <input type="email" name="email" required>

        <p>Tiêu đề:</p>
        <input type="text" name="tieude" required>

        <p>Nội dung:</p>
        <textarea name="content" required></textarea>

        <p>File đính kèm:</p>
        <input type="file" name="file">

        <br><br>
        <button type="submit">Gửi email</button>

    </form>

</body>
</html>
