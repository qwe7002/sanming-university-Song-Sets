<?php
setcookie("login","",time()-3600,"/");
header("Location: ../go.php");