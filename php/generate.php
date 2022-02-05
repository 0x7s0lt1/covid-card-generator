<?php

$allowed = array('https://zsoltfehervari.xyz','http://localhost');

if( isset($_SERVER['HTTP_ORIGIN']) && in_array($_SERVER['HTTP_ORIGIN'],$allowed) ){

    $con = new mysqli('localhost','root','','covid-card');

    if( isset($_POST['uuid']) && isset($_POST['name']) && isset($_POST['f_v_date']) && isset($_POST['card_id']) ){


        $sql = "INSERT INTO covid_card 
            (uuid,name,title,fname,sname,f_v_date,s_v_date,t_v_date,date_of_birth,card_id,manufacturer,qr)
            VALUES 
            ('".$_POST['uuid']."','".$_POST['name']."','".$_POST['title']."','".$_POST['fname']."','".$_POST['sname']."','".$_POST['f_v_date']."','".$_POST['s_v_date']."','".$_POST['t_v_date']."','".$_POST['date_of_birth']."','".$_POST['card_id']."','".$_POST['manufacturer']."','".$_POST['qr']."')";
    
        $con->query($sql) or die($con->error);
    
        print(true);
            
    
    }
    elseif(isset($_POST['uuid']) && isset($_POST['v']) ){
    
        
        $sql = "SELECT * 
                FROM covid_card 
                INNER JOIN covid_vaccines ON covid_card.manufacturer = covid_vaccines.id
                WHERE uuid = '".$_POST['uuid']."'";
    
        $res = $con->query($sql) or die($con->error);
    

        print(json_encode(mysqli_fetch_assoc($res)));
    
    }

}else{

    print('Nice Try!');

}



?>


