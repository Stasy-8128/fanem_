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
	<link rel="stylesheet" href="css/libs.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	
	<?php
    
    include 'include/block-header.php'
    
    
    ?>


	




	<div class="box_1">
		<div class="container">
			<div class="b1-carousel">
				<div class="our_sales">
					<div class="row">
						<div class="col-md-6">
							<div class="sale_photo"><img src="img/family_look.png" alt=""></div>
						</div>
						<div class="col-md-6">
							<div class="sale_text">Стильная вязаная одежда для всей семьи!</div>
						</div>
					</div>
				</div>
				<div class="our_sales">
					<div class="row">
						<div class="col-md-6">
							<div class="sale_photo"><img src="img/latest_i.png" alt=""></div>
						</div>
						<div class="col-md-6">
							<div class="sale_text">Обратите внимание на новинки 2019!</div>
						</div>
					</div>
				</div>
				<div class="our_sales">
					<div class="row">
						<div class="col-md-6">
							<div class="sale_photo"><img src="img/sales_p1.png" alt=""></div>
						</div>
						<div class="col-md-6">
							<div class="sale_text">Полная распродажа прошлых коллекций! Скидка до 70% !</div>
						</div>					
					</div>
				</div>
			</div>
		</div>
	</div>

	
			
                    <?php
                        $result = mysql_query("SELECT * FROM goods  WHERE goods.id_type=2",$link);
                        
                        if(mysql_num_rows($result) > 0)
                        {
                           echo '	
                           <div class="box_3">		
                           <div class="container">
                            <div class="b3_text">Женское</div>
			                 <div class="line"></div>
			                 <div class="b3_carousel">';
                            $row = mysql_fetch_array($result);
                            
                            do{
                                if ($row["g_img"] != "" && file_exists("./img/".$row["g_img"]))
                                {
                                    $img_path = '/img/'.$row["g_img"];
                                    
                                }else{
                                    $img_path = '/img/no_img.png';
                                }
                               echo '	
                            <div class="b3_item">
                            <a href="good.php" class="good_link">
                            <div class="item_photo"><img src="'.$img_path.'" alt=""></div>
                            <div class="item_content">
							<div class="item_name">'.$row["name_g"].'</div>
							<div class="proud_line"></div>
							<div class="item_text">'.$row["mini_descr"].'</div>
                            <div class="item_col"><span>Цвет: </span>'.$row["name_col"].'</div>
							<div class="item_cost"> <span>'.$row["g_price"].'</span></div>
                            <div class="item_btn"><button>В корзину</button></div>
                            <div class="ad_change_btn"><button>Изменить</button></div>
					<div class="ad_del_btn"><button>Удалить</button></div>
                            </div> </a> </div>                          	
                               '; 
                            }while ($row = mysql_fetch_array($result));
                            echo '</div></div>	</div>';
                        }
                     ?>
					
                    <?php
                        $result = mysql_query("SELECT * FROM goods  WHERE goods.id_type=1",$link);
                        
                        if(mysql_num_rows($result) > 0)
                        {
                           echo '	
                           <div class="box_4">
		<div class="container">
			<div class="b4_text">Мужское</div>
			<div class="line"></div>
			<div class="b4_carousel">';
                            $row = mysql_fetch_array($result);
                            
                            do{
                                if ($row["g_img"] != "" && file_exists("./img/".$row["g_img"]))
                                {
                                    $img_path = '/img/'.$row["g_img"];
                                    
                                }else{
                                    $img_path = "/img/no_img.png";
                                }
                               echo '	
                            <div class="b4_item">
                            <a href="good.php" class="good_link">
                            <div class="item_photo"><img src="'.$img_path.'" alt=""></div>
                            <div class="item_content">
							<div class="item_name">'.$row["name_g"].'</div>
							<div class="proud_line"></div>
							<div class="item_text">'.$row["mini_descr"].'</div>
                            <div class="item_col"><span>Цвет: </span>'.$row["name_col"].'</div>
							<div class="item_cost"> <span>'.$row["g_price"].'</span></div>
                            <div class="item_btn"><button>В корзину</button></div>
                            <div class="ad_change_btn"><button>Изменить</button></div>
					<div class="ad_del_btn"><button>Удалить</button></div>
                            </div> </a> </div>                          	
                               '; 
                            }while ($row = mysql_fetch_array($result));
                            echo '</div></div>	</div>';
                        }
                     ?>
					
			<?php
                        $result = mysql_query("SELECT * FROM goods  WHERE goods.id_type=3",$link);
                        
                        if(mysql_num_rows($result) > 0)
                        {
                           echo '	
                           <div class="box_5">
		<div class="container">
			<div class="b5_text">Детское</div>
			<div class="line"></div>
			<div class="b5_carousel">';
                            $row = mysql_fetch_array($result);
                            
                            do{
                                if ($row["g_img"] != "" && file_exists("./img/".$row["g_img"]))
                                {
                                    $img_path = '/img/'.$row["g_img"];
                                    
                                }else{
                                    $img_path = "/img/no_img.png";
                                }
                               echo '	
                            <div class="b5_item">
                            <a href="good.php" class="good_link">
                            <div class="item_photo"><img src="'.$img_path.'" alt=""></div>
                            <div class="item_content">
							<div class="item_name">'.$row["name_g"].'</div>
							<div class="proud_line"></div>
							<div class="item_text">'.$row["mini_descr"].'</div>
                            <div class="item_col"><span>Цвет: </span>'.$row["name_col"].'</div>
							<div class="item_cost"> <span>'.$row["g_price"].'</span></div>
                            <div class="item_btn"><button>В корзину</button></div>
                            <div class="ad_change_btn"><button>Изменить</button></div>
					<div class="ad_del_btn"><button>Удалить</button></div>
                            </div> </a> </div>                          	
                               '; 
                            }while ($row = mysql_fetch_array($result));
                            echo '</div></div>	</div>';
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