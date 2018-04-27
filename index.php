<!DOCTYPE html>
<?php
if(isset($_POST['go'])){
  $file_dir   = "uploads/";
  $file_name  = $_FILES['fileToUpload']['name'];
  $file_tmp   = $_FILES['fileToUpload']['tmp_name'];
  $file_rename= $_POST['NamOfFil'];
  if(empty($file_rename)){
    if( move_uploaded_file($file_tmp,$file_dir.$file_name) ){
      echo "<script> alert('تم بنجاح')</script>";
    }else{
      echo "<script> alert('يوجد خطأ ما')</script>";
    }
  }else{
    if( move_uploaded_file($file_tmp,$file_dir.$file_rename) ){
      echo "<script> alert('تم بنجاح')</script>";
    }else{
      echo "<script> alert('يوجد خطأ ما')</script>";
    }
  }

}


?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Uploads your frist files on php</title>
  </head>
  <body>
    <form method="post" enctype="multipart/form-data">
      <label>إسم الملف</label>
      <input type="text" name="NamOfFil" placeholder="type the file name if u want" /><br /><br /><br />
      <label>حدد الملف</label>
      <input type="file" name="fileToUpload" placeholder="" /><br /><br /><br />
      <input type="submit" name="go" value="Uploade your file" /><br /><br /><br />
    </form>
  </body>
</html>
