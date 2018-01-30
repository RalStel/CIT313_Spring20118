<?php
include("includes/config.php");
include(ABSOLUTE_PATH . "/includes/header.inc.php");
?>

<div class="content">
    <div class="main">
        <?php
        $array = array('myName' => 'Raleigh Stelle', 'favoriteColor' => 'Purple', 'favoriteMovie' => 'Boruto', 'favoriteBook' => 'Manga', 'favoriteWebSite' => 'https://www.youtube.com/');
        $myName = $array['myName'];

        echo '<h1>' . $myName . '</h1>';

        function excludename_function($array) {
            $count = 0;
            echo "<ul>";
            foreach ($array as $key => $value) {
                if ($key != "myName") {
                    echo "<li>" . $value . "</li>";
                }
            }
            echo "</ul>";
        }

        excludename_function($array);
        ?>
    </div>
</div>


<?php
include(ABSOLUTE_PATH . "/includes/footer.inc.php");
?>
