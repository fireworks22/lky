<?php
session_start();
function checkUser(){
    if(empty($_SESSION["user_id"])){
        $location = <<<EOT

                <script>
                    alert("请登录！");
                    location.href = "login.php";
                </script>
EOT;
        echo  $location;

        //header("location: login.php");
    }
}