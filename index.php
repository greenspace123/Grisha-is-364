<?php
include 'Book.php';
include 'Reader.php';
include 'Library.php';


$library = new Library();


$book1 = new Book("1984", "George Orwell", 1949);
$book2 = new Book("Преступление и наказание", "Федор Достоевский", 1866);

$library->addBook($book1);
$library->addBook($book2);


$reader = new Reader("Grigoriy", "grisashpedt@mail.ru");
$library->addReader($reader);


$reader->borrowBook($book1);
$reader->returnBook($book1);

$library->listBooks();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Библиотека</title>
</head>
<body>
    <div class="container">
        <h1>Управление библиотекой</h1>

        
        <div class="form-section">
            <h2>Добавить книгу</h2>
            <form id="addBookForm">
                <input type="text" id="bookTitle" placeholder="Название книги" required>
                <input type="text" id="bookAuthor" placeholder="Автор книги" required>
                <input type="number" id="bookYear" placeholder="Год издания" required>
                <button type="submit">Добавить книгу</button>
            </form>
        </div>

       
        <div class="form-section">
            <h2>Добавить читателя</h2>
            <form id="addReaderForm">
                <input type="text" id="readerName" placeholder="Имя читателя" required>
                <input type="email" id="readerEmail" placeholder="Email читателя" required>
                <button type="submit">Добавить читателя</button>
            </form>
        </div>

      
        <div class="list-section">
            <h2>Список книг</h2>
            <ul id="bookList"></ul>
        </div>

        <div class="list-section">
            <h2>Список читателей</h2>
            <ul id="readerList"></ul>
        </div>
    </div>

</body>
</html>