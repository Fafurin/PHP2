<?php
require_once 'db.php';
    $result = mysqli_query($link, "SELECT * FROM products LIMIT 5" );
    while($row = mysqli_fetch_assoc($result)) {
        echo '<div><a href="/index.php?id=' . $row['id'] . '">';
        echo '<img width="250" height="200" src="' . $row['img'] . '">';
        echo '</a>';
        echo '<h4>' . $row['title'] . '</h4>';
        echo '<p>' . $row['price'] . '</p></div>';
}
mysqli_close($link);



