<?php
require_once 'credit_functions.php';
if (!deductCredit(__FILE__)) {
    die("Insufficient credits to access this content. <a href='index.php'>Buy more credits</a>");
}
?>
