<?php
/**
 * Created by PhpStorm.
 * User: Evil
 * Date: 2017/3/22
 * Time: 下午3:38
 */

    header("Content-type:text/html;charset=utf-8");
    
    function doPost(){
        $success=0;
        
       
        	
            $conn = new mysqli("127.0.0.1", "root", "", "UserCenter");
            mysqli_query($conn, "set character set 'utf8'");//读取数据时将字符集编码强制规范为utf-8
            mysqli_query($conn, 'set names utf8');//写入数据时将字符集编码强制规范为utf-8
            
           $value = "'" . $_POST["user"] . "','" . $_POST["serct"] . "','" . $_POST["que_serct"] . "'";
            	if ($conn->query("insert into register (user,serct,que_serct) values (" . $value . ");") == true) {
                	$success = 1;
            	}
          
        	echo $success;
        
       
    }
    doPost();
?>



