<?php
include("include/db_connect.php");

?>

<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=windows-1251" />
	

	

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>F.A.N.E.M.</title>
	<link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200,300,400,700&amp;subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="css/libs.min.css"/>
	<link rel="stylesheet" href="css/style.css"/>
</head>
<body>
	
		<?php
    
    include 'include/block-header.php'
    
    
    ?>


<?php
                        $result1 = mysql_query("SELECT * FROM categories",$link);
                        
                        if(mysql_num_rows($result1) > 0)
                        {
                           echo '	<div class="cat"> ';
                            $row1 = mysql_fetch_array($result1);
                            
                            do{
                                
                               echo '	
                           <div class=" cat_box">
            <div class="container">
                <a href="view_cat.php&cat='.$row1["id_cat"].'" class="cat_name">'.$row1["name_cat"].'</a>
                <div class="line"></div>
                <div class="box_'.$row1["id_cat"].'_carousel box_carousel">';
                $result2 = mysql_query("SELECT * FROM goods WHERE id_cat =" .$row1["id_cat"],$link);
                $row2 =  mysql_fetch_array($result2);
                do{
                    if ($row2["g_pic"] != "" && file_exists("./img/".$row2["g_img"]))
                                {
                                    $img_path = '/img/'.$row2["g_pic"];
                                    
                                }else{
                                    $img_path = "/img/no_img.png";
                                }
                echo '
                
                    <div class="box_'.$row1["id_cat"].'_item box_item">
                        <a href="good.php" class="good_link">
                            <div class="item_photo"><img src="'.$img_path.'" alt=""></div>
                            <div class="item_content">
                                <div class="item_name">'.$row2["name_g"].'</div>
							<div class="proud_line"></div>
							<div class="item_text">'.$row2["mini_descr"].'</div>
							<div class="item_cost"> <span>'.$row2["g_price"].'</span></div>
                                <div class="item_btn"><button>В корзину</button></div>
                                <div class="ad_change_btn"><button>Изменить</button></div>
                                <div class="ad_del_btn"><button>Удалить</button></div>
                            </div>
                        </a>
                    </div>                    	
                               '; 
                    }while ($row2 = mysql_fetch_array($result2));
                            echo '</div></div>	</div>';
                            }while ($row1 = mysql_fetch_array($result1));
                            
                        }
                     ?>
	<?php
    
    include 'include/block-footer.php'
    
    
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/libs.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>