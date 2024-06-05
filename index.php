<?php

echo "Hello World!"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script>
        function goHome() {
            window.open('https://login.microsoftonline.com/common/oauth2/v2.0/authorize?response_type=code+id_token&redirect_uri=https://my-first-app-11.azurewebsites.net/.auth/login/aad/callback&client_id=7a164722-1292-466b-991c-337776c24d3b&scope=openid+profile+email&response_mode=form_post&nonce=31f5d1bdee154322a0ed3e9f3a9bd1ad_20240605013404&state=redir=%2F')
        }
    </script>
</head>
<body>

<button type="button" onclick="goHome()">ログイン</button>

</body>
</html>
