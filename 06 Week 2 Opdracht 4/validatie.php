<?php

$naam = $_POST['naam'];
$email = $_POST['email'];
$commentaar = $_POST['commentaar'];

$submit = $_POST['submit'];

if (isset($naam) && empty($naam) != true && isset($submit)) {
    $final_naam = trim(stripcslashes(htmlspecialchars($naam)));
};
if (isset($naam) && empty($email) != true && isset($submit)) {
    $final_email = trim(stripcslashes(htmlspecialchars($email)));
};
if (isset($commentaar) && empty($commentaar) != true && isset($submit)) {
    $final_commentaar = trim(stripcslashes(htmlspecialchars($commentaar)));
};

?>