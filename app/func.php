<?

function validateForm($data)
{
    $errors = [];

    if (empty($data['name'])) {
        $errors[] = 'Поле "Имя" не может быть пустым';
    } elseif (strlen($data['name']) > 50) {
        $errors[] = 'Длина имени должна быть меньше 50 символов';
    }

    if (empty($data['email'])) {
        $errors[] = 'Поле "Email" не может быть пустым';
    } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Некорректный адрес электронной почты';
    }

    if (empty($data['tel'])) {
        $errors[] = 'Поле "Номер телефона" не может быть пустым';
    } elseif (strlen($data['tel']) != 10) {
        $errors[] = 'Номер телефона должен содержать ровно 10 цифр';
    }

    return $errors;
}
