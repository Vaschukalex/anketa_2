<?php
if (isset($_POST['name_lname']) && isset($_POST['bir_day']) && isset($_POST['tel_numb'])){

    $name_lname = $_POST['name_lname'];
    $bir_day = $_POST['bir_day'];
    $tel_numb = $_POST['tel_numb'];
    // email_e
    // // town
    // // zast
    // // jk
    // // pr_kv_1
    // // pr_kv_2
    
    $db_host = "localhost"; 
    $db_user = "cashbackdom"; 
    $db_password = "123"; 
    $db_base = 'cashbackdom'; 
    $db_table = "Anketa2_Data"; 
    $mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);
	if ($mysqli->connect_error) {
	    die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
    
    $result = $mysqli->query("INSERT INTO ".$db_table." (name_lname,bir_day,tel_numb) VALUES ('$name_lname','$bir_day', '$tel_numb')");
    
    if ($result == true){
    	echo "Информация занесена в базу данных";
    }else{
    	echo "Информация не занесена в базу данных";
    }
}
?>