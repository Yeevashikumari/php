<?php
if($_SERVER["REQUEST_METHOD"]==="POST")
{
    $_name=htmlspecialchars($_POST['fname']);
    if(empty($name))
    {
        echo "Name is empty";
    }
    else{
        echo $name;
    }
}
?>