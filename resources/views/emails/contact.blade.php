<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #c8b53e;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .content {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 0 0 5px 5px;
        }
        .field {
            margin-bottom: 15px;
        }
        .label {
            font-weight: bold;
            color: #666;
        }
        .message-content {
            white-space: pre-line;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Nouveau Message de Contact</h2>
        </div>
        <div class="content">
            <div class="field">
                <p class="label">Nom:</p>
                <p>{{ $nom }}</p>
            </div>
            
            <div class="field">
                <p class="label">Email:</p>
                <p>{{ $email }}</p>
            </div>
            
            <div class="field">
                <p class="label">Message:</p>
                <div class="message-content">{{ $messageContent }}</div>
            </div>
        </div>
    </div>
</body>
</html>