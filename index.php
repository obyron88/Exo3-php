<!DOCTYPEhtml>
<html>

<head>
  <meta charset="utf-8"/>
  <link type="text/css" rel="stylesheet" href="styles.css"/>
</head>

<body>

  <p><?php
$keb = 0;
while ($keb <= 10){
echo "$keb <br />";
$keb++;
}
?></p>

<p><?php
$mo = 0;
$ami = 42;
while ($mo <= 20){
  echo  $mo*$ami. "<br />";
  $mo++;
}
?></p>

 <p><?php
$first = 100;
$second = 20;
while ($first > 10){
  // <br /> à la ligne
  echo $first*$second. "<br />";
  $first--;
  // décrémenter $a--
}
?></p>

<p><?php
$third = 1;
while ($third < 10){
  // mettre un espace après $a et après le / pour division
echo "$third <br />";
$third = ($third + ($third / 2));
 }
 // incrémenter $a++ = $a+1
 ?></p>

 <p><?php
$presque = 1;
while ($presque <= 15){
  echo "On y arrive presque " . "$presque <br />";
  $presque++;
  }
  ?></p>

  <p><?php
  $bon = 20;
  while ($bon >= 0){
    echo "C'est presque bon" . "$bon <br />";
    $bon--;
  }
   ?></p>

   <p><?php
$bout = 1;
while ($bout <= 100){
echo "On tient le bon bout" . "$bout <br />";
$bout = ($bout + 15);
}
    ?></p>

    <p><?php
$enfin = 200;
while ($enfin >= 0) {
  echo "Enfin !!!!" . "$enfin <br />";
  $enfin = ($enfin - 12);
}
     ?></p>

</body>
</html>
