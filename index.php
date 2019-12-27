<?php	
    require_once("function.php");
    require_once("database.php");

    $link = db_connect();

    include("page/index.php");
    
    /*

    $position_catalogue = position_generator($link, "product_catalog"); 

    $position_basket = position_generator($link, "users_basket");    
 
    if(isset($_GET["clean_basket"])){
        header(200);
        clean_user_basket($link);
    }

    if(isset($_GET["sending_emeil"])){
        header(200);
        $string_position_basket = serialize($position_basket);

        include("mailer/smart.php"); 
        //mail("dimon_mcensk@mail.ru", "Форма заказа из магазина",  $string_position_basket, "From:dimon_mcensk@mail.ru");
        order_sorting($link);
    }
    

    if(isset($_GET["open_basket"])) {

        include("pages/shopping_basket.php");                
    } else {        
        if(isset($_GET["changing_user_basket"])){
            header(200);
            changing_position_basket($link, $_GET["id"], $_GET["sign"]);
        };
        include("pages/catalogue.php");
    }    */
?>