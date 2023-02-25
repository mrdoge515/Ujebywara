<?php
include("./pages/base.php");

if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $_POST["link"])) {
    $error = true;
} else {
    $error = false;

    // Connect to database
    $connection = new mysqli($servername, $username, $password, $database);

    // Generate token for link
    $token = generateRandomString(10);

    // Make query and execute
    $query = "INSERT INTO links (token, link) VALUES ('". $token . "', '" . $_POST["link"] . "')";$connection -> query($query);

    // Disconnect from db
    $connection->close();
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <!-- Set character encoding for the document -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Viewport for responsive web design -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Document Title -->
        <title>ujebywara</title>
        <!-- Meta Description -->
        <meta name="description" content="Ujebywara">
        <!-- Standard favicon -->
        <link rel="icon" type="image/png" href="../favicon.png" />

        <!-- Main stylesheet -->
        <link rel="stylesheet" href="../css/style.css">

        <!-- Font Awesome icons -->
        <script src="https://kit.fontawesome.com/12a42eda9d.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <h1>Shortened link:</h1>
        <?php
            if($error == false) {
                echo '<a href="http://ujebywara.cf/l/' . $token . '">ujebywara.cf/l/' . $token . "</a>";
            } else if ($error == true) {
                echo '<a href="/">Incorrect link. Try again!</a>';
            }
        ?>
        <a href="https://github.com/mrdoge515/Ujebywara" target="_blank" rel="noopener" class="fa-brands fa-github" id="foss"></a>
    </body>
</html>
