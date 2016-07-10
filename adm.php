<?php
include "poster.php";
error_reporting(E_ALL);
to_bd();
to_img(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script type="text/javascript" src="ckeditor.js"></script>
    <title>Добавить запись в блог</title>
  </head>
  <body>
    <h2>Форма ввода текста в блог</h2>
          <form action="adm.php" name="post_to_blog" method="post">
          <input type="text" name="post_header" value=""> Шапка поста<br><br>
      <textarea name="editor1" id="editor1" cols="25" rows="5"></textarea><br>
<script type="text/javascript">
CKEDITOR.replace( 'editor1');
</script>
<br><br>
<input type="text" name="post_script" value=""> пост скриптум<br><br>
      <input type="submit" name="submit" value="сохранить">
        </form>
    <br>
    <br>
      <form action="adm.php" name="post_photo" method="post">
      <input type="text" name="title" value=""> - введи заголовок фото<br><br>
      <input type="text" name="add_img" value=""> - введи ссылку на фото<br><br>
      <input type="text" name="preview_img" value=""> - введи ссылку на превью фото<br><br>
      <input type="submit" name="subm" value="сохранить изображение"><br><br>
    </a>
  </form>
  </body>
</html>
