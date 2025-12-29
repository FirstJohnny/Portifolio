<!DOCTYPE html>
<html>
<head>
    <title>Nova Inscrição - Portfólio</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
        .header { background: #0f172a; color: #fff; padding: 10px; text-align: center; border-radius: 5px 5px 0 0; }
        .content { padding: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Nova Inscrição na Newsletter</h2>
        </div>
        <div class="content">
            <p>Um novo usuário se inscreveu na newsletter.</p>
            <p><strong>E-mail:</strong> {{ $email }}</p>
        </div>
    </div>
</body>
</html>
