<?php
  
    $mysql_server_name='localhost:3306';      //改成自己的mysql数据库服务器
    $mysql_username='root';                  //改成自己的mysql数据库用户名
    $mysql_password='123456';        //改成自己的mysql数据库密码
    $conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password);
    if (!$conn)
      {
      die('Could not connect: ' . mysql_error());
      }

        mysql_select_db("hy", $conn);
        $sql = "CREATE TABLE Persons
        (
        username varchar(15),
        password varchar(15),
        sex varchar(15),
        shouji int(11),
        dizhi varchar(200),
        )";
        mysql_query($sql,$conn);
        mysql_query("INSERT INTO Persons (username, password,sex,shouji,dizhi)
        VALUES ('hy', '123456','女','13304643690','dizhi')");

        mysql_query("INSERT INTO Persons (username, password,sex,shouji,dizhi)
        VALUES ('hy1', '123456','女','13304643690','dizhi')");
//        $result = mysql_query("SELECT * FROM Persons");
//        while($row = mysql_fetch_array($result))
//          {
//          echo $row['username'];
//          echo "<br />";
//          }
        echo "1";
        mysql_close($conn);
?>