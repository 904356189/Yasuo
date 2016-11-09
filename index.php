<?php

$uploaddir_resize="./";//保存路径
$name = "banner_01.jpg";//压缩后保存的名字
$uploadfile_resize=$uploaddir_resize.$name;
 $uploadfile = "./banner.jpg";//图片路径
$pic_width_max=1024;
$pic_height_max=538;
//以上与下面段注释可以联合使用，可以使图片根据计算出来的比例压缩
 
$file_type="image/jpg";   //图片后缀












 
function ResizeImage($uploadfile,$maxwidth,$maxheight,$name)
{
 //取得当前图片大小
 $width = imagesx($uploadfile);
 $height = imagesy($uploadfile);
 $i=0.5;
 //生成缩略图的大小
 if(($width > $maxwidth) || ($height > $maxheight))
 {
  /*
  $widthratio = $maxwidth/$width;
  $heightratio = $maxheight/$height;
   
  if($widthratio < $heightratio)
  {
   $ratio = $widthratio;
  }
  else
  {
    $ratio = $heightratio;
  }
   
  $newwidth = $width * $ratio;
  $newheight = $height * $ratio;
  */
  $newwidth = $width * $i;
  $newheight = $height * $i;
  if(function_exists("imagecopyresampled"))
  {
   $uploaddir_resize = imagecreatetruecolor($newwidth, $newheight);
   imagecopyresampled($uploaddir_resize, $uploadfile, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
  }
  else
  {
   $uploaddir_resize = imagecreate($newwidth, $newheight);
   imagecopyresized($uploaddir_resize, $uploadfile, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
  }
   
  ImageJpeg ($uploaddir_resize,$name);
  ImageDestroy ($uploaddir_resize);
 }
 else
 {
  ImageJpeg ($uploadfile,$name);
 }
}
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
if($file_type)
{
 if($file_type == "image/pjpeg"||$file_type == "image/jpg"|$file_type == "image/jpeg")
 {
  //$im = imagecreatefromjpeg($_FILES[$upload_input_name]['tmp_name']);
  $im = imagecreatefromjpeg($uploadfile);

 }
 elseif($file_type == "image/x-png")
 {
  //$im = imagecreatefrompng($_FILES[$upload_input_name]['tmp_name']);
  $im = imagecreatefromjpeg($uploadfile);
 }
 elseif($file_type == "image/gif")
 {
  //$im = imagecreatefromgif($_FILES[$upload_input_name]['tmp_name']);
  $im = imagecreatefromjpeg($uploadfile);
 }
 else//默认jpg
 {
  $im = imagecreatefromjpeg($uploadfile);
 }
 if($im)
 {
  ResizeImage($im,$pic_width_max,$pic_height_max,$uploadfile_resize);
  
  ImageDestroy ($im);
 }
} 