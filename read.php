<?php
require('./database.php');

$queryAccounts = "SELECT * FROM accounts";
$sqlAccounts = mysqli_query($connection , $queryAccounts);


?>