<!--Noa Pereira Prada Schnor - Web Applications Project - May 2018. Logout function.

<?php
session_start() ;
// Destroy all the active sessions
session_destroy() ;
// Page after the redirection 
$redirect = "index.php?nocache=".time();
 
//Below the function header() with the attribute location: it points out the $redirect variable that 
// points out the address that the redirection will happen
header("location:$redirect");
?>