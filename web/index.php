<?php
//$id = $_GET["id"];

include __DIR__ . "/../src/boot.php";
//$stmt = $db->prepare("SELECT * FROM user WHERE id = :kiskacsa");
/*$stmt->execute(
    [
        'kiskacsa' => $_GET["id"]
    ]
);
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);*/
$users = [];
ob_start();
?>

<ul>
    <?php foreach ($users as $user): ?>
        <li><?php echo $user["email"] ?></li>
    <?php endforeach; ?>
</ul>


<?php
$content = ob_get_clean();
include __DIR__ . "/../src/layout/default.php";
?>