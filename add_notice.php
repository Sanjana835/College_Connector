<?php
include('db_connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $sql = "INSERT INTO notices (title, content) VALUES ('$title', '$content')";
    if ($conn->query($sql) === TRUE) {
        echo "New notice added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<form method="POST" action="add_notice.php">
    <input type="text" name="title" placeholder="Notice Title" required>
    <textarea name="content" placeholder="Notice Content" required></textarea>
    <button type="submit">Add Notice</button>
</form>
