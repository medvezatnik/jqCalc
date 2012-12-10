<?php


function calculate($calcStr)
{
      $calcStr = str_replace(' ', '', $calcStr);
      $result = 'IncorrectStatement';
      if (preg_match('/[a-zA-Z]+/',$calcStr) > 0)
      {
          return $result;
      }

      if (preg_match('/[\+\*\/-]{2,}/',$calcStr) > 0)
      {
          return $result;
      }


      if (preg_match('/\d+\/[0]/',$calcStr) > 0)
      {
          $result = 'OhShi~';
          return $result;
      }
      $result =  eval('return ' . $calcStr . ';');
    
    return $result;
}

 echo calculate($_POST['calcStr']);
