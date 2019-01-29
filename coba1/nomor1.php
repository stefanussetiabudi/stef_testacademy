<?php
  // Array
function getbiodata(){
  $name = "Stefanus";
  $address ="Jln Imam Bonjol Atas 22b" ;
  $hobbies = array("membaca","menulis");
  $is_married = false;
  $school = array("highSchool"=>"SMK PGRI 3 Malang","University"=>"Indonesia");
  $skills = array("mampu memahami pemrograman php","mampu bekerjasama dalam tim");
$somearray = array('nama' => $name,'address' => $address,'hobbies'=>$hobbies,'is_married'=>$is_married,$school,$skills);
  // Convert Array to JSON String
  $someJSON = json_encode($somearray);
  echo $someJSON;
}

getbiodata();
?>