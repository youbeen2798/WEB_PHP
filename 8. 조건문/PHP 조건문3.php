<?php
 $data = 'hello';

 switch($data){
   case 'annyung':
      echo '한국어 인사입니다.';
      break;

   case 'konnichiha':
      echo '일본어 인사입니다.';
      break;

   case 'hello':
      echo '영어 인사입니다.';
      break;

   default:
      echo '한국어, 일본어, 영어 인사가 아닙니다.';
      break;
 }

 /*코드 설명
 switch문에서 break문이 없으면 다음 case문도 실행되므로, break문을 넣어야 한다.
 default문은 case문에 맞는 조건이 없는 경우 실행된다.
 */

 ?>
