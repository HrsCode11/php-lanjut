<?php
$filelist = glob("gambar/*.*");
echo '<div style="display: flex; flex-wrap: wrap;">';
foreach ($filelist as $filename) {
    if (is_file($filename)) {
        echo '<div style="margin: 10px;"><img src="'.$filename.'" style="width:200px; height:auto;"></div>';
    }
}
echo '</div>';
?>
