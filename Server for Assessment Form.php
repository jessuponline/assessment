<?php
if($_POST['formSubmit'] == "Submit")
{
  $errorMessage = "";
  if(empty($_POST['answer1']))
  {
    $errorMessage .= "<li>You forgot to respond to this question!</li>";
  }
  $varAnswer1 = $_POST['answer1'];
  if(!empty($errorMessage))
  {
    echo("<p>There was an error with your form:</p>\n");
    echo("<ul>" . $errorMessage . "</ul>\n");
  }
}
?>
