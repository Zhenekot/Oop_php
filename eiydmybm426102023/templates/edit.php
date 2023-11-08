<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Редактирование</title>
</head>
<body>
    <main class="container">
    <form action="adds.php" class="form-info" method="post">
        <div class="radbut">

            <input type="radio" id="book" name="type" value="Book" >
            <label for="book">Book</label>

            <input type="radio" id="cd" name="type" value="Cd" >
            <label for="cd">Cd</label>
        </div>
        <label for="name" id="nameLabel">Имя</label>
        <input type="text" name="name" id="name" class="input-info">
        <br>
        <label for="surname" id="surnameLabel">Фамилия</label>
        <input type="text" name="surname" id="surname" class="input-info">
        <br>
        <label for="title" id="titleLabel">Название</label>
        <input type="text" name="title" id="title" class="input-info">
        <br>
        <label for="price" id="priceLabel">Стоимость</label>
        <input type="text" name="price" id="price" class="input-info">
        <br>
        
        <label for="page" id = "pageLabel">Страниц</label>
        <input type="text" name="page" id="page" class="input-info" >
        <br>
       
       
        <label for="volume" id="volumeLabel">Длительность</label>
        <input type="text" name="volume" id="volume" class="input-info" >
        <br>
     
 
        <button type="submit">Создать</button>
        <button><a href="lists.php">Все записи</a></button>
    </form>
</main>
<script src="../js/script.js"></script>
</body>
</html>