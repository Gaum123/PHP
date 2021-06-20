<?php
if (empty($_POST['inlognaam']) && empty($_POST['wachtwoord'])) {
    echo "Niet alle velden zijn ingevult!";
} else {
    print_r($_POST);
}