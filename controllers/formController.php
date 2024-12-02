
<?php

if (!isset($_POST['email']) || empty($_POST['email'])) {
header("Location: ../insert.php?msg=You have not entered a email address");
die();
}
//------------------------------------------------------------
if (!isset($_POST['subject']) || empty($_POST['subject'])) {
header("Location: ../insert.php?msg=You have not entered a subject");
die();
}



