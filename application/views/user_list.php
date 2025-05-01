<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pengguna</title>
</head>
<body>
    <h1>Daftar Pengguna</h1>
    <ul>
        <?php foreach($users as $user): ?>
            <li><?php echo $user->name . ' (' . $user->email . ')'; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>


