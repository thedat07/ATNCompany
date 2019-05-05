<?php 
class DBconnector{
    var $servername = "ec2-54-243-241-62.compute-1.amazonaws.com";
    var $username = "psxeorlowpdyxv";
    var $password = "f301f259375c5ff644fa504907caaf691ebcff46a13099a2b01ca2fa5778954d";
    var $dbname = "d6n89bhb80cggc";
    var $port = "5432";
    var $conn;
           public function runQuery($sql)
           {
			$conn = pg_connect("host=".$this->servername." port=".$this->port." dbname=".$this->dbname." user=".$this->username." password=".$this->password."") or die("Connection failed: ".pg_last_error());
            //chay cau truy van
            $result = pg_query($conn, $sql);
            //doc het cau truy van, tra ve mot mang
            $rows = pg_fetch_all($result);
            //dong ket noi   
            $conn=pg_close($conn);
            return $rows;     
           }
           public function execStatement($sql)
           {
            $conn = pg_connect("host=".$this->servername." port=".$this->port." dbname=".$this->dbname." user=".$this->username." password=".$this->password."") or die("Connection failed: ".pg_last_error());
            //chay cau truy van
            $result = pg_query($conn, $sql);
            //dong ket noi   
            $conn=pg_close($conn);
            return $result;   
           }
} ?>