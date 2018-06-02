<?php
require "includes/db_connect.php";
?>
<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
	<title><?php echo $config['title']; ?></title>
</head>
<body>
    <h1><?php echo $config['title']; ?></h1>
    <ul>
        <?php
            $parts = mysqli_query($connection, "SELECT * FROM `parts`");
            while (($parts_title = mysqli_fetch_assoc($parts))) {
                echo "<li><a href=\"\">" . $parts_title['title'] . "</a></li>";
            }
        ?>
    </ul>
    <main>
        <?php
            $part_quote = mysqli_query($connection, "SELECT * FROM `part_quote`");
            while (($part_quote_block = mysqli_fetch_assoc($part_quote))) {
                echo "<figure class='figBlock'><img src='" . $part_quote_block['img_src'] . "' alt='" . $part_quote_block['alt_caption'] . "'><figcaption>" . $part_quote_block['fig_caption'] . "</figcaption><span class='slideCaption'>" . $part_quote_block['slide_caption'] . "</span></figure>";
            }
        ?>
    </main>
    <footer>
        <p>&copy; SVF 2018</p>
    </footer>
</body>
</html>

