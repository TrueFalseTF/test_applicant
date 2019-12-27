<?php
    define('MYSQL_SERVER','localhost');
    define('MYSQL_USER', 'root');
    define('MYSQL_PASSWORD', '');
    define('MYSQL_DB', 'test_applicant');

    function db_connect() {
        $link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD)
            or die("Error: ".mysqli_error($link));
        if(!mysqli_set_charset($link, "utf8")){
            print("Error: ".mysqli_error($link));
        }

        $mysql_db = MYSQL_DB;

        if (false === mysqli_query($link,
                        "USE ".$mysql_db)) {

            $result_create = mysqli_query($link,
                "CREATE DATABASE `test_Applicant` CHARACTER SET `utf8`;");
            if (!$result_create)
                die(mysqli_error($link));      
        

            $result_USE = mysqli_query($link,
                "USE test_Applicant;");
            if (!$result_USE)
                die(mysqli_error($link));                       

            $result_TABLE = mysqli_query($link,
                "CREATE TABLE varieties_shit( 
                    id INT NOT NULL AUTO_INCREMENT,
                    name varchar(30) COLLATE utf8_general_ci,
                    id_res INT NOT NULL,
                    ENTRY BOOLEAN NULL DEFAULT NULL,
                    PRIMARY KEY(id));");
            if (!$result_TABLE)
                die(mysqli_error($link));
                
            $result_TABLE = mysqli_query($link,
                "CREATE TABLE instances_shit( 
                    id INT NOT NULL AUTO_INCREMENT,
                    name varchar(30) COLLATE utf8_general_ci,
                    id_req INT NOT NULL,
                    ENTRY BOOLEAN NULL DEFAULT 1,
                    PRIMARY KEY(id));");
            if (!$result_TABLE)
                die(mysqli_error($link));
            };

        return $link;
    }

?>