<?php
  $num = 12;
  echo "변수 \$num의 데이터형(값 {$num})은 ".gettype($num)."입니다. <br />";
  //변수 $num의 데이터형(값 12)은 integer입니다.

  $greeting = "안녕";
  echo "변수 \$greeting의 데이터형(값 {$greeting})은 ".gettype($greeting)."입니다. <br />";
  //변수 $greeting의 데이터형(값 안녕)은 string입니다.

  $numStr = "121212";
  echo "변수 \$numStr의 데이터형(값 {$numStr})은 ".gettype($numStr)."입니다. <br />";
  //변수 $numStr의 데이터형(값 121212)은 string입니다.

  $fruit = array();
  echo "변수 \$fruit의 데이터형은 ".gettype($fruit)."입니다. <br />";
  //변수 $fruit의 데이터형은 array입니다.

  $nai = null;
  echo "변수 \$nai의 데이터형은 ".gettype($nai)."입니다. <br />";
  //변수 $nai의 데이터형은 NULL입니다.

  $boolean = true;
  echo "변수 \$boolean의 데이터형(값 {$boolean})은 ".gettype($boolean)."입니다. <br />";
  //변수 $boolean의 데이터형(값 1)은 boolean입니다.
  //true는 1을 출력
 ?>
