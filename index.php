<?

require 'app/func.php';

if (isset($_POST['newform'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $data = ['name' => "$name", 'email' => "$email", 'tel' => "$tel"];
    $errors = validateForm($data);

    if (empty($errors)) {
        echo '<script>document.location.href="/"; alert("Форма успешно отправлена")</script>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="MaslovLev425VEB">
    <title>Sm2</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <form method="post" name="newform">
        <div class="text-input">
            <label for="name">Имя</label>
            <input type="text" name="name" placeholder="Имя" value="<? if (isset($_POST['newform'])) echo $name ?>">
        </div>
        <div class="text-input">
            <label for="email">E-mail</label>
            <input type="text" name="email" placeholder="E-mail" value="<? if (isset($_POST['newform'])) echo $email ?>">
        </div>
        <div class="text-input">
            <label for="tel">Номер телефона</label>
            <input type="text" name="tel" placeholder="Номер телефона" value="<? if (isset($_POST['newform'])) echo $tel ?>">
        </div>
        <p class="errors"><? if (isset($_POST['newform'])) {
                                echo $errors[0];
                            } ?></p>
        <input type="submit" class="btn" value="Отправить" name="newform">
    </form>
</body>

</html>