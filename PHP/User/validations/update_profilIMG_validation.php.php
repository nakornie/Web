<?php
if (isset($_FILES['profilIMG']) && $_FILES['profilIMG']['error'] == 0) {
    if ($_FILES['profilIMG']['size'] > 1000000) {
        echo "Upload failed, image size too important";
        return;
    }

    $fileInfo = pathinfo($_FILES['profilIMG']['name']);
    $extension = $fileInfo['extension'];
    $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
    if (!in_array($extension, $allowedExtensions)) {
        echo "Upload failes, extension {$extension} isn't autorized";
        return;
    }

    $path = __DIR__ . '/uploads/';
    if (!is_dir($path)) {
        echo "Directory /uploads/ missing";
        return;
    }
    move_uploaded_file($_FILES['profilIMG']['tmp_name'], $path . basename($_FILES['profilIMG']['name']));
}
?>
