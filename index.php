<!DOCTYPE html>
<html>

<head>
    <title>Local Chat</title>
</head>


<style>
.container {
  padding: 16px;
}
</style>

<body>
        <iframe src="chat.txt" width="560" height="350">
        </iframe>

        <form action="index.php" method="POST">
                <div class="container">
                <label for="msg"><b>></b></label>
                <input type="msg" id="msg" placeholder="Text" name="msg" required>
        </form>

        <?php
                file_put_contents('chat.txt', "\n\nMessage: " . $_POST['msg'] . "\n", FILE_APPEND);
        ?>
</body>

</html>
