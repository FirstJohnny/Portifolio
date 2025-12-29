<!DOCTYPE html>
<html>
<head>
    <title>Novo Contato - Portfólio</title>

 <!--Favicons-->
    <link rel="shortcut icon" href="{{asset('favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('favicon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('favicon.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('favicon.png')}}">
    
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
        .header { background: #0f172a; color: #fff; padding: 10px; text-align: center; border-radius: 5px 5px 0 0; }
        .content { padding: 20px; }
        .footer { font-size: 0.8em; text-align: center; color: #777; margin-top: 20px; }
        strong { color: #0f172a; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Novo Contato Recebido</h2>
        </div>
        <div class="content">
            <p><strong>Nome:</strong> {{ $data['name'] }}</p>
            <p><strong>E-mail:</strong> {{ $data['email'] }}</p>
            <p><strong>Assunto:</strong> {{ $data['subject'] }}</p>
            <hr>
            <p><strong>Mensagem:</strong></p>
            <p>{!! nl2br(e($data['message'])) !!}</p>
        </div>
        <div class="footer">
            <p>Este e-mail foi enviado através do formulário de contato do seu portfólio.</p>
        </div>
    </div>
</body>
</html>
