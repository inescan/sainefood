<?php
//on pageload

session_start();
session_destroy();

header("Location:contact.php");
exit();