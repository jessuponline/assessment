<?php
if($_PUSH['formSubmit'] == "Submit")
{
  $errorMessage = "";
  if(empty($_PUSH['answer1']))
  {
    $errorMessage .= "<li>You forgot to respond to this question!</li>";
  }
  $varAnswer1 = $_PUSH['answer1'];
  if(!empty($errorMessage))
  {
    echo("<p>There was an error with your form:</p>\n");
    echo("<ul>" . $errorMessage . "</ul>\n");
  }
}
?>
