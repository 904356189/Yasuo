<?php

$uploaddir_resize="./";//����·��
$name = "banner_01.jpg";//ѹ���󱣴������
$uploadfile_resize=$uploaddir_resize.$name;
 $uploadfile = "./banner.jpg";//ͼƬ·��
$pic_width_max=1024;
$pic_height_max=538;
//�����������ע�Ϳ�������ʹ�ã�����ʹͼƬ���ݼ�������ı���ѹ��
 
$file_type="image/jpg";   //ͼƬ��׺












 
function ResizeImage($uploadfile,$maxwidth,$maxheight,$name)
{
 //ȡ�õ�ǰͼƬ��С
 $width = imagesx($uploadfile);
 $height = imagesy($uploadfile);
 $i=0.5;
 //��������ͼ�Ĵ�С
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
 else//Ĭ��jpg
 {
  $im = imagecreatefromjpeg($uploadfile);
 }
 if($im)
 {
  ResizeImage($im,$pic_width_max,$pic_height_max,$uploadfile_resize);
  
  ImageDestroy ($im);
 }
} 