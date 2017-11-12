<?php
    include __DIR__ . '/../src/boot.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        loginUser();
    }

    if (isLoggedIn()) {
        header("Location: index.php");
        exit(0);
    }

    ob_start();
?>
    <form method="post">
        username: <input type="text" name="username">
        password: <input type="password" name="password"><br>
        <input type="submit">
    </form>
<?php
    $content = ob_get_clean();
    include __DIR__ . "/../src/layout/default.php";
?>
