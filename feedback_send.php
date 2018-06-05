<?php 

if((!isset($_POST['description'])) && $_POST['description'] == "")
{
    $msg = "plz enter your feedback";
}
else
{
include 'connect.php';
if(isset($_POST['name']))
{
    $name = $_POST['name'];
}
    else
        $name = "";
if(isset($_POST['year']))
{
    $year = $_POST['year'];
}
    else
        $year = "";
if(isset($_POST['branch']))
{
    $branch = $_POST['branch'];
}
    else
        $branch = "";
if(isset($_POST['email']))
{
    $email = $_POST['email'];
}
    else
        $email = "";

if(isset($_POST['special_comment']))
{
    $special_comment = $_POST['special_comment'];
}
    else
        $special_comment = "";
                   
    $description=$_POST['description'];
    echo $name."gt".$email."gt".$year."gt".$branch."gt".$description."gt".$special_comment;
                    $sql = "INSERT INTO `feedback` ( `name`, `email`, `year`, `branch`, `description`, `special_comment`) VALUES ( '$name', '$email', '$year', '$branch', '$description', '$special_comment');";
                

                    if (!$database_handler->query($sql) === TRUE)  {
                                                      $msg = "Query Error  ,Try again";
                                                 

                                                     }
                        else
                        $msg = "Thanks for your Valuable Feedback";
                
}

include 'feedback.php';
?>