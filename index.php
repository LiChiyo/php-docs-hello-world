<?php

function goHome() {
  header('Location: https://my-first-app-11.azurewebsites.net/home.php');
}

echo "Hello World!"; ?>
<input type="button" value="ログイン" onclick="goHome()"/>
