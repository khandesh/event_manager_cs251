<head>
<meta http-equiv="cache-control" content="no-cache">  
<meta http-equiv="expires" content="-1"> 

<meta http-equiv="pragma" content="no-cache">
</head>
<?php

setcookie("user", "", time()-3600);
echo "Logged out";
header("Location:index2.php?flag=1"); 
?>