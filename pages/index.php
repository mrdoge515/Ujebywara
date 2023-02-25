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

        <script>
            window.onload = function() {
                let webhostAd = document.getElementsByTagName("div");
                webhostAd[0].innerHTML = "";

                let weirdScript = document.getElementsByTagName("script");
                weirdScript[2].innerHTML = "";
            }
        </script>
    </head>
    <body>
        <h1>ujebywara.cf</h1>
        <form method="POST" action="/createLink">
            <input type="text" name="link" placeholder="Link..." id="input" required>
            <input type="submit" value="Ujeb" id="submit">
        </form>

        <a href="https://github.com/mrdoge515/Ujebywara" target="_blank" rel="noopener" class="fa-brands fa-github" id="foss"></a>
    </body>
</html>
