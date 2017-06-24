<?php
    function getSession(){
        $right=0;
       
        $conn = new mysqli("127.0.0.1", "root", "", "UserCenter");
        mysqli_query($conn,"set character set 'utf8'");//读取数据时设置字符集编码utf-8
        mysqli_query($conn,'set names utf8');//写入数据时设置字符集编码为utf-8
        
        $rs = $conn->query("select * from register where user='".$_POST["user"]."' and serct='".$_POST["serct"]."';");
        while ($row = $rs->fetch_assoc()) {
            $_SESSION["user"] = $row["user"];
            $right=1;
        }
        $rs->close();
        $conn->close();
        if($right==1) {
            echo $_SESSION["user"];
        }else{
            echo "0";
        }
        
    }
    function doPOST(){
        session_start();
        if(isset($_SESSION["user"])){
        	if($_SESSION["user"]==null) {
                getSession();
            }else {
                echo $_SESSION["user"];
            }
        }else{
            getSession();
        }
    }
    doPOST();
?>



