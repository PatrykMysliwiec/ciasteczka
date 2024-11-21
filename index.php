<?php
// Sprawdzenie, czy ciasteczko 'moje' jest ustawione
if (!isset($_COOKIE['moje'])) {
    // Jeśli ciasteczko nie jest ustawione, ustawiamy je z wartością 'ciacho1'
    setcookie('moje', 'ciacho1');
    // Ustawiamy zmienną $info z informacją, że ciasteczko nie jest ustawione
    $info = "Witamy na stronie";
} else {
    // Jeśli ciasteczko jest ustawione, ustawiamy zmienną $info z informacją o jego wartości
    $info = "Witamy ponownie, (" . $_COOKIE['moje'].")";
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciasteczka</title>
</head>
<body>
    <?php
    // Wyświetlenie informacji o stanie ciasteczka
    echo $info;
    ?>
</body>
</html>