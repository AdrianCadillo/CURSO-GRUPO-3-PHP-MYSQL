<?php

//setcookie("remember","recordar");

unset($_COOKIE['remember']);

setcookie("remember","recordar",time()+60);


echo $_COOKIE['remember'];