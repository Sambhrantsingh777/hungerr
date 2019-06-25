<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>File upload input</title>
  
  
  
      <link rel="stylesheet" href="scss/style.css">

  
</head>

<body>

  <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<div class="file-upload">

  <div class="image-upload-wrap">
    <input class="file-upload-input" type='file' onchange="readURL(this);getImage();" accept="image/*" />
    <div class="drag-text">
      <h3>Drag and drop a file or select add Image</h3>
    </div>
  </div>
  <br>
  <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>
  <div class="file-upload-content">
    <img id="myImg" class="file-upload-image" src="#" alt="your image" />
    <div class="image-title-wrap">
      <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
    </div>
  </div>
</div>
  
  

    <script  src="js/script.js"></script>

<?php
echo "<script>function getImage(){window.alert(document.getElementById('myImg'));}</script>";
?>

</body>

</html>
