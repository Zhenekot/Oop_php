
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Таблица</title>
    
</head>
<body>
<button ><a href="adds.php">Создать</a></button>
    <h2>Книги</h2>
    <table>
        <thead>
            <tr>
            <th>Тип</th>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Название</th>
                <th>Стоимость</th>
                <th>Страницы</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($list_book as $book): ?>
            <tr>
            <td>Book</td>
            <td><?= $book['authorFirstName'] ?></td>
                <td><?= $book['authorMainName'] ?></td>
                <td><?= $book['title'] ?></td>
                <td><?= $book['price'] ?></td>
                <td><?= $book['strNum'] ?></td>
                <td>
                    <button><a href="edit.php?id=<?= $book['id'] ?>&type=Book">Изменить</a></button>
                    <button><a href="delete.php?id=<?= $book['id'] ?>&type=Book">Удалить</a></button>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h2>Песни</h2>
    <table>
        <thead>
            <tr>
                <th>Тип</th>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Название</th>
                <th>Стоимость</th>
                <th>Длительность</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($list_cd as $song): ?>
            <tr>
                <td>Cd</td>
                <td><?= $song['authorFirstName'] ?></td>
                <td><?= $song['authorMainName'] ?></td>
                <td><?= $song['title'] ?></td>
                <td><?= $song['price'] ?></td>
                <td><?= $song['playLength'] ?></td>
                <td>
                    <button><a href="edit.php?id=<?= $song['id'] ?>&type=Cd">Изменить</a></button>
                    <button><a href="delete.php?id=<?= $song['id'] ?>&type=Cd">Удалить</a></button>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>