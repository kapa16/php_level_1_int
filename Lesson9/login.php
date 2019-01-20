<?php
spl_autoload_register();

require_once(__DIR__ . '/db_connect.php');

$errors = [];
if (!empty($_POST)) {
    if (empty($_POST['email'])){
        $errors = 'Введите email';
    }
    if (empty($_POST['password'])){
        $errors = 'Введите password';
    }
}

require_once(__DIR__ . '/header.php');

require(__DIR__ . '/menu.php');
?>

<form action="login.php" method="post" class="col-6">
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email"  class="form-control">
    </div>
    <div class="form-group">
        <label for="password">password</label>
        <input type="password" name="password" id="password"  class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Enter</button>
</form>

<?php
require_once(__DIR__ . '/footer.php');
