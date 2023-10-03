<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foglalás eredmény</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .ticket {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }

        .header {
            background-color: #007BFF;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .content {
            padding: 20px;
        }

        h2 {
            text-align: center;
        }

        p {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .success {
            color: green;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="ticket">
        <div class="header">
            <h1>Foglalás eredmény</h1>
        </div>
        <div class="content">
            <?php
            if (isset($confirmationMessage)) {
                $messageClass = ($confirmationMessage == "Sikeres foglalás!") ? "success" : "error";
                echo "<h2 class=\"$messageClass\">$confirmationMessage</h2>";
            }

            if (isset($_POST["foglalo"])) {
                echo "<p>Foglaló neve: {$_POST['foglalo']}</p>";
            }

            if (isset($_POST["indulas"])) {
                echo "<p>Indulás dátuma: {$_POST['indulas']}</p>";
            }

            if (isset($_POST["visszateres"])) {
                echo "<p>Visszatérés dátuma: {$_POST['visszateres']}</p>";
            }

            if (isset($_POST["uticel"])) {
                echo "<p>Úticél: {$_POST['uticel']}</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>
