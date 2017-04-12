<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/7 0007
 * Time: 14:58
 */
/*header("Content-type: text/html; charset=utf-8");*/
try{
    $dsn = "uri:file://D:/phpStudy/WWW/mysqli/dse.txt";
    $username = "root";
    $password = "123456";
    $pdo = new PDO($dsn, $username, $password);
    /*$sql = "insert into u_user(username,password,email,nickname) VALUES ('147258','147258','147@qq.com','我去')";

    $res = $pdo->exec($sql);
    var_dump($res);*/
    $sql = "insert into u_user(username,password,email,nickname) VALUES (?,?,?,?)";
    $sth = $pdo->prepare($sql);
    $username = "258369";
    $password = md5("258369");
    $email = "258@qq.com";
    $nickname = "皇上";
    /*$sth->bindParam(1,$username);
    $sth->bindParam(2,$password);
    $sth->bindParam(3,$email);
    $sth->bindParam(4,$nickname);
    $res = $sth->execute();*/
    $res = $sth->execute(array($username,$password,$email,$nickname));
    print_r($res);
    //$pdo_stm = $pdo->query($sql);
    //print_r($pdo_stm->fetchAll(PDO::FETCH_ASSOC));
    /*foreach ($pdo_stm as $row){
        $rows[] = $row;
    }
    print_r($rows);*/
}catch (PDOException $e){
    echo $e->getMessage();
}