<?php
session_start();
spl_autoload_register();

require_once(__DIR__ . '/../database/db_connect.php');

$errors = [];
$email = '';
$password = '';
if (!empty($_POST)) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (empty($_POST['email'])){
        $errors[] = 'Введите email';
    }
    if (empty($_POST['password'])){
        $errors[] = 'Введите password';
    }

    if (empty($errors)) {
        $query = "SELECT * FROM users WHERE email = ?";
        $result = $pdo->prepare($query);
        $result->execute([$email]);
        $user = $result->fetch();
        if (!$user) {
            $errors[] = 'Адрес не зарегестрирован';
        }
        if (!password_verify($_POST['password'], $user['password'] ?? '')) {
            $errors[] = 'Пароль не верный';
        }
        if (empty($errors)) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            header('location: /../');
            exit();
        }
    }
}

require_once(__DIR__ . '/../pagecontent/header.php');

require(__DIR__ . '/../menu.php');

if(!empty($errors)){
    echo "<div class='alert alert-danger col-6'>";
    foreach ($errors as $error) {
        echo "<div>$error</div>";
    }
    echo "</div>";
}
?>

<form action="login.php" method="post" class="col-6">
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email"  class="form-control" value="<?= htmlspecialchars($email) ?? ''?>">
    </div>
    <div class="form-group">
        <label for="password">password</label>
        <input type="password" name="password" id="password"  class="form-control" value="<?= htmlspecialchars($password) ?? ''?>">
    </div>
    <button type="submit" class="btn btn-primary">Enter</button>
</form>

<?php
require_once(__DIR__ . '/../pagecontent/footer.php');
