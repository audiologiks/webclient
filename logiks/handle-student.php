<?php
header('Content-type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8"?>';
    echo '<Response>';
    $user_pushed = (int) $_REQUEST['Digits'];
      # @start snippet
   if ($user_pushed == 1000) 
   {
    echo '<Gather action="http://xxxxxxx/tk_server/clicktocall/misawa/handle-student-question.php" numDigits="8">';
    echo '<Say voice="alice" language="ja-JP">ピン　コードを入力ください</Say>';
    echo '</Gather>';
    echo '<Redirect method="GET">http://xxxxxxx/tk_server/clicktocall/misawa/handle-student-question.php</Redirect>';
     } 
   # @end snippet
    # @start snippet
   elseif ($user_pushed == 1001) 
   { 
    echo '<Gather action="http://xxxxxxx/tk_server/clicktocall/misawa/handle-student-question.php" numDigits="8">';
    echo '<Say voice="alice" language="ja-JP">ピン　コードを入力ください</Say>';
    echo '</Gather>';
    echo '<Redirect method="GET">http://xxxxxxx/tk_server/clicktocall/misawa/handle-student-question.php</Redirect>';
     } 
   # @end snippet
    elseif ($user_pushed == 1002) 
   { 
    echo '<Gather action="http://xxxxxxx/tk_server/clicktocall/misawa/handle-student-question.php" numDigits="8">';
    echo '<Say voice="alice" language="ja-JP">ピン　コードを入力ください</Say>';
    echo '</Gather>';
    echo '<Redirect method="GET">http://xxxxxxx/tk_server/clicktocall/misawa/handle-student-question.php</Redirect>';
     }
   # @end snippet
        # @start snippet
   if ($user_pushed == 1003) 
   {
    echo '<Gather action="http://xxxxxxx/tk_server/clicktocall/misawa/handle-student-question.php" numDigits="8">';
    echo '<Say voice="alice" language="ja-JP">ピン　コードを入力ください</Say>';
    echo '</Gather>';
    echo '<Redirect method="GET">http://xxxxxxx/tk_server/clicktocall/misawa/handle-student-question.php</Redirect>';
     } 
   # @end snippet
    # @start snippet
   elseif ($user_pushed == 1004) 
   { 
    echo '<Gather action="http://xxxxxxx/tk_server/clicktocall/misawa/handle-student-question.php" numDigits="8">';
    echo '<Say voice="alice" language="ja-JP">ピン　コードを入力ください</Say>';
    echo '</Gather>';
    echo '<Redirect method="GET">http://xxxxxxx/tk_server/clicktocall/misawa/handle-student-question.php</Redirect>';
     } 
   # @end snippet
    elseif ($user_pushed == 1005) 
   { 
    echo '<Gather action="http://xxxxxxx/tk_server/clicktocall/misawa/handle-student-question.php" numDigits="8">';
    echo '<Say voice="alice" language="ja-JP">ピン　コードを入力ください</Say>';
    echo '</Gather>';
    echo '<Redirect method="GET">http://xxxxxxx/tk_server/clicktocall/misawa/handle-student-question.php</Redirect>';
     } 
    echo '<Say voice="alice" language="ja-JP">すみません、も一度押してください。</Say>';
         # @start snippet
   if ($user_pushed == 1006) 
   {
    echo '<Gather action="http://xxxxxxx/tk_server/clicktocall/misawa/handle-student-question.php" numDigits="8">';
    echo '<Say voice="alice" language="ja-JP">ピン　コードを入力ください</Say>';
    echo '</Gather>';
    echo '<Redirect method="GET">http://xxxxxxx/tk_server/clicktocall/misawa/handle-student-question.php</Redirect>';
     } 
   # @end snippet
    # @start snippet
   elseif ($user_pushed == 1007) 
   { 
    echo '<Gather action="http://xxxxxxx/tk_server/clicktocall/misawa/handle-student-question.php" numDigits="8">';
    echo '<Say voice="alice" language="ja-JP">ピン　コードを入力ください</Say>';
    echo '</Gather>';
    echo '<Redirect method="GET">http://xxxxxxx/tk_server/clicktocall/misawa/handle-student-question.php</Redirect>';
     } 
   # @end snippet
    elseif ($user_pushed == 1008) 
   { 
    echo '<Gather action="http://xxxxxxx/tk_server/clicktocall/misawa/handle-student-question.php" numDigits="8">';
    echo '<Say voice="alice" language="ja-JP">ピン　コードを入力ください</Say>';
    echo '</Gather>';
    echo '<Redirect method="GET">http://xxxxxxx/tk_server/clicktocall/misawa/handle-student-question.php</Redirect>';
     }
   # @end snippet
        # @start snippet
   if ($user_pushed == 1009) 
   {
    echo '<Gather action="http://xxxxxxx/tk_server/clicktocall/misawa/handle-student-question.php" numDigits="8">';
    echo '<Say voice="alice" language="ja-JP">ピン　コードを入力ください</Say>';
    echo '</Gather>';
    echo '<Redirect method="GET">http://xxxxxxx/tk_server/clicktocall/misawa/handle-student-question.php</Redirect>';
     } 
   # @end snippet
    # @start snippet
   elseif ($user_pushed == 1010) 
   { 
    echo '<Gather action="http://xxxxxxx/tk_server/clicktocall/misawa/handle-student-question.php" numDigits="8">';
    echo '<Say voice="alice" language="ja-JP">ピン　コードを入力ください</Say>';
    echo '</Gather>';
    echo '<Redirect method="GET">http://xxxxxxx/tk_server/clicktocall/misawa/handle-student-question.php</Redirect>';
     } 
   # @end snippet
    elseif ($user_pushed == 1011) 
   { 
    echo '<Gather action="http://xxxxxxx/tk_server/clicktocall/misawa/handle-student-question.php" numDigits="8">';
    echo '<Say voice="alice" language="ja-JP">ピン　コードを入力ください</Say>';
    echo '</Gather>';
    echo '<Redirect method="GET">http://xxxxxxx/tk_server/clicktocall/misawa/handle-student-question.php</Redirect>';
     } 
    echo '<Say voice="alice" language="ja-JP">すみません、も一度押してください。</Say>';
    echo '</Response>';
?>