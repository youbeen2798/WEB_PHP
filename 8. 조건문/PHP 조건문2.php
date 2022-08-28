<?php
  //변수의 데이터형을 체크하는 코드
  $data = "데이터형";

  if(gettype($data) == 'string'){
    echo "데이터형은 문자열입니다.";
  }
  else if(gettype($data) == 'integer'){
    echo "데이터형은 정수형입니다.";
  }
  else{
    echo "데이터형은 문자열도 정수형도 아닙니다.";
  }
  /*코드설명
  gettype()함수로 데이터형을 체크한 후 데이터형은 string이므로 "데이터형은 문자열입니다"가 출력된다.
  */
 ?>
