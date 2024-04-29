<?php

// function home(){
// echo "working";
// }

// home();

// function working(){
//     echo "working";
// }

// // working();
// $name = 'ahmed';

// function name(){
// echo "ahmed";
// }
// name();
function login_form($action,$method){

?>
<center>
<h1>
    loginform
</h1>
<form action="<?php echo $action?>" method="<?php echo $method?>"> 
<label for="">name</label>
<input type="text" name="name" id="">
<br>
<label for="">email</label>
<input type="email" name="" id=""><br>
<label for="">password</label>
<input type="password" name="password"><br><input type="submit" name="submit" value="SUBMIT" id="">

</form>
</center>
<?php

}
login_form("#","GET");
login_form("process.php","POST");
login_form("insert.php","GET")
?>