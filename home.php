<?php
$frstname = ($_POST['frstname']);
$lastname = ($_POST['lastname']);
$email = ($_POST['email']);
$countrie = ($_POST['countrie']);
$largeText=($_POST['largeText']);
echo "<pre>";
print_r($_POST);

function isfrstname($frstname){
    if (ctype_alpha(($frstname))){

        return $frstname;
    }else {
        echo " Pleas  Write Your Frstname Correctly ";

    }
}
function islastname($lastname){
    if (ctype_alpha($lastname)){

        return $lastname;
    }else {
        echo " Pleas  Write Your Lastname Correctly ";

    }
}

function isemail($email){
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
    {
        echo "Pleas  Write Your Email Correctly";
    }
}

function all ($lastname , $frstname ,$email, $countrie,$largeText ){
    if (empty($frstname&&$lastname&&$email&&$countrie && $largeText)){
        echo "Pleas  Write all fields";
    }

}


echo '<pre>';

isfrstname($frstname);
echo '<pre>';
islastname($lastname);
echo '<pre>';
isemail($email);
echo '<pre>';
all($lastname , $frstname ,$email, $countrie,$largeText);
echo '<pre>';

?>
<a href="http://localhost/"> Back </a>



