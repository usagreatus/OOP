<html>
<head>
</head>
<body>
<center>
    <table>
        <tr>
            <th>Date</th>
            <th>Title</th>
            <th>Text Of Article</th>
        </tr>
        <tr>
            <th><BR></th>
        </tr>
        <?php foreach ($items as $item): ?>
    <tr>
        <td><?php echo $item['date']; ?></td>
        <td><?php echo $item['title']; ?></td>
        <td><?php $home = $item['path'];
            if (is_readable(__DIR__ . "/../$home")) {
            $homepage = file_get_contents(__DIR__ . "/../$home", NULL, NULL, 0, 140);
            echo $homepage; ?><br><a href="/fullnews.php/?id=<?php echo $item['id']; ?>">Read Full Article >> </a></td>
        <?php } else {
            echo 'Файл не доступен для чтения.';
        } ?>
    </tr>
<?php endforeach; ?>
</tr>
</table>
</center>
<?php include __DIR__ . '/form.php'; ?>

</body>
</html>