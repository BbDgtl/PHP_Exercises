<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>File Upload</title>
</head>

<body>

  <?php

  // * There is a global $_FILES array
  if (isset($_POST['mySubmit'])) {
    // var_dump($_FILES);

    // TODO Check if there are no errors.
    if ($_FILES['myFile']['error'] != UPLOAD_ERR_OK) {
      echo 'Error during upload';
    } else {

      // TODO Check if its an array.
      $extensionArray = array(
        'jpg' => 'image/jpg',
        'png' => 'image/png',
        'gif' => 'image/gif'
      );

      // TODO Check if the extensions match a value in the array.
      $extFile = array_search($_FILES['myFiles']['type'], $extensionArray);

      if ($extFile) {
        // TODO Hash the filename
        $shaFile = sha1_file($_FILES['myFiles']['tmp_name']);
        $destinationDir = './uploads/';
        $fileNumbers = 0;
        do {
          $fileName = $shaFile . $fileNumbers . '.' . $extFile;
          $fullPath = $destinationDir . $fileName;
          var_dump($fullPath);
          $fileNumbers++;
        } while (file_exists($fullPath));

        $moved = move_uploaded_file($_FILES['myFile']['tmp_name'], $fullPAth);

        if ($moved) {
          echo 'File saved.';
        } else {
          echo 'Error during save.';
        }
      } else {
        echo 'File not an image';
      }
    }
  }

  ?>

  <form enctype="multipart/form-data" metho="POST ">
    <input type="hidden" name="MAX_FILE_SIZE" value="30000 ">
    Select the file : <input type="file" name="myFile">
    <input type="submit" name="mySubmit" value="send">
  </form>

</body>

</html>