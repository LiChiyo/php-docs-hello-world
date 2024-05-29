<?php

echo "Hello World!"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script>
        function goHome() {
          header('Location: https://my-first-app-11.azurewebsites.net/home.php');
        }
    </script>
</head>
<body>

<button type="button" onclick="goHome()">ログイン</button>

</body>
</html>
