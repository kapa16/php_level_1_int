<?php
session_start();
spl_autoload_register();

require_once(__DIR__ . '/db_connect.php');

$errors = [];
$name = '';
$email = '';
$password = '';
$passwordSecond = '';
if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordSecond = $_POST['passwordSecond'];

    if (empty($name)){
        $errors[] = 'Введите имя';
    }
    if (empty($email)){
        $errors[] = 'Введите email';
    }
    if (empty($password)){
        $errors[] = 'Введите пароль';
    }
    if (empty($passwordSecond)){
        $errors[] = 'Введите повтор пароля';
    }
    if ($password !== $passwordSecond){
        $errors[] = 'Пароли не совпадают';
    }

    if (empty($errors)) {
        $query = "SELECT * FROM users WHERE email = ?";
        $result = $pdo->prepare($query);
        $result->execute([$email]);
        $user = $result->fetch();
        if ($user) {
            $errors[] = 'Адрес уже зарегестрирован';
        }

        if (empty($errors)) {
            $query = "INSERT INTO users(name, email, password) VALUES (?, ?, ?)";
            $result = $pdo->prepare($query);
            $result->execute([$name, $email, password_hash($password, PASSWORD_DEFAULT)]);
            header('location: /login.php');
            exit();
        }
    }
}

require_once(__DIR__ . '/header.php');

require(__DIR__ . '/menu.php');

if(!empty($errors)){
    echo "<div class='alert alert-danger col-6'>";
    foreach ($errors as $error) {
        echo "<div>$error</div>";
    }
    echo "</div>";
}
?>

<form action="registration.php" method="post" class="col-6">
    <div class="form-group">
        <label for="name">Имя</label>
        <input type="name" name="name" id="name"  class="form-control" value="<?= htmlspecialchars($name) ?? ''?>">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email"  class="form-control" value="<?= htmlspecialchars($email) ?? ''?>">
    </div>
    <div class="form-group">
        <label for="password">Пароль</label>
        <input type="password" name="password" id="password"  class="form-control" value="<?= htmlspecialchars($password) ?? ''?>">
    </div>
    <div class="form-group">
        <label for="passwordSecond">Повтор пароля</label>
        <input type="password" name="passwordSecond" id="passwordSecond"  class="form-control" value="<?= htmlspecialchars($passwordSecond) ?? ''?>">
    </div>
    <button type="submit" class="btn btn-primary">Enter</button>
</form>

<?php
require_once(__DIR__ . '/footer.php');