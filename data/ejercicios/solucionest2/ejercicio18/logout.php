<?php

setcookie("login","",time()-7200, '/');
header("Location: login.php");