<?php
if($_GET['formSubmit'] == "Submit")
{
  $errorMessage = "";
  if(empty($_GET['answer1']))
  {
    $errorMessage .= "<li>You forgot to respond to this question!</li>";
  }
  $varAnswer1 = $_GET['answer1'];
  if(!empty($errorMessage))
  {
    echo("<p>There was an error with your form:</p>\n");
    echo("<ul>" . $errorMessage . "</ul>\n");
  }
}
?>
