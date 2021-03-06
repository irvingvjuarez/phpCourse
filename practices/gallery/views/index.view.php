<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo gallery</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <a href="index.php">Photo Gallery</a>

        <a href="upload.php">Upload photo</a>
    </header>
    <main>
        <section class="main-content">
            <?php
                while($img = $result->fetch_assoc()){
                    $file = pathinfo($img["path"], PATHINFO_BASENAME);
                    echo "<a href='photo.php?img=$file'>";
                        echo "<img src='".$img["path"]."'/>";
                    echo "</a>";
                }
            ?>
        </section>
    </main>
    <footer>
        A digital product made by: Irving Juárez
    </footer>
</body>
</html>