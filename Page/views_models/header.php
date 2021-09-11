<?php
echo '<link rel="stylesheet" href="../css/HomeCSS.css">';
include_once './../DataBase/Data.php';

echo '<header class="header">';
echo '<span><img class="homeImg" alt="..."  src="../photos/pngwing.com.png" onclick="window.location.href=`./Home.php`"></span>';
if (!isset($_COOKIE["i"])) {
    echo '<span class="spanHeader userInfo"><a href="Login.php" style="color:black;">Login</a></span>';
} else {
    echo '<span class="spanHeader userInfo"><a href="./../Controllers/LogOutController.php">Logout</a></span>';
}
echo '<span class="spanHeader"><a href="About.php">Про проект</a></span>';

if(isset($_COOKIE['i'])){
    echo '<span class="spanHeader userInfo">'.$data->data[$_COOKIE['i']]->username.'</span>';
}
echo '</header>';

