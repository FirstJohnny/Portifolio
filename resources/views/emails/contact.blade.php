<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Mensagem de Contacto</title>
    <style>
        body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
        table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
        img { -ms-interpolation-mode: bicubic; border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
        table { border-collapse: collapse !important; }
        body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; font-family: Arial, sans-serif; }

        .wrapper {
            background-color: #f2f2f2;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
        }
        .header {
            background-color: #222222;
            padding: 30px;
            text-align: center;
        }
        .header h1 {
            color: #ffffff;
            font-size: 24px;
            margin: 0;
        }
        .content {
            background-color: #ffffff;
            padding: 30px;
        }
        .content h2 {
            color: #333333;
            margin-top: 0;
        }
        .content p {
            color: #555555;
            line-height: 1.6;
        }
        .details-table {
            width: 100%;
            margin: 20px 0;
        }
        .details-table td {
            padding: 10px 0;
            border-bottom: 1px solid #eeeeee;
        }
        .details-table .label {
            font-weight: bold;
            color: #333333;
            width: 100px;
        }
        .message-block {
            background-color: #f9f9f9;
            border-left: 4px solid #FF0000;
            padding: 20px;
            margin-top: 20px;
            font-style: italic;
            white-space: pre-wrap;
            word-wrap: break-word;
        }
        .footer {
            background-color: #f2f2f2;
            padding: 20px;
            text-align: center;
            font-size: 12px;
            color: #888888;
        }
    </style>
</head>
<body style="margin: 0 !important; padding: 0 !important; background-color: #f2f2f2;">
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td align="center" class="wrapper">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" class="container">
                    <!-- HEADER -->
                    <tr>
                        <td align="center" class="header">
                            <h1 style="color: #ffffff; font-size: 24px; margin: 0;">Nova Proposta de Trabalho</h1>
                        </td>
                    </tr>
                    <!-- CONTENT -->
                    <tr>
                        <td align="left" class="content">
                            <h2 style="color: #333333; margin-top: 0;">Recebeu uma nova mensagem!</h2>
                            <p style="color: #555555; line-height: 1.6;">Detalhes do remetente:</p>

                            <table class="details-table" border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td class="label">Nome:</td>
                                    <td>{{ $data['name'] }}</td>
                                </tr>
                                <tr>
                                    <td class="label">E-mail:</td>
                                    <td><a href="mailto:{{ $data['email'] }}" style="color: #FF0000;">{{ $data['email'] }}</a></td>
                                </tr>
                                <tr>
                                    <td class="label">Assunto:</td>
                                    <td>{{ $data['subject'] }}</td>
                                </tr>
                            </table>

                            <p style="color: #555555; line-height: 1.6; margin-top: 30px;">Mensagem:</p>
                            <div class="message-block">
                                <p style="margin:0; color: #333;">{{ $data['message'] }}</p>
                            </div>
                        </td>
                    </tr>
                    <!-- FOOTER -->
                    <tr>
                        <td align="center" class="footer">
                            <p>Este e-mail foi enviado a partir do meu portifolio.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
