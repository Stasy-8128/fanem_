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
	<link rel="stylesheet" href="Trackbar/fc-trackbar-master/trackbar.css">

</head>
<body>
	
	<?php
    
    include 'include/block-header.php'
    
    
    ?>
    
   


    <div class="goods">
	<div class="container">
		<div class="filt_b">
			<div class="col-md-3">
			<div class="filters">
            <p class="filt_title"><strong>Фильтры</strong></p>
					<div class="categ_filt">
						<p class="f_title">Категории</p>
						<ul class="checkbox-cat">
							<li> <input type="checkbox" id="checkcat1"> <label for="checkcat1">1</label> </li>
							<li><input type="checkbox" id="checkcat2"> <label for="checkcat2">2</label> </li>
							<li><input type="checkbox" id="checkcat3"> <label for="checkcat3">3</label> </li>
						</ul>
						<input type="submit" name="submit" id="button-cat-search" value="Найти">
					</div>
					<div class="price_filter">
						<p class="f_title">Стоимость</p>
						<form method="GET" action="search-filter.php">
							<div id="block-input-price">
								<ul>
									<li><p>От</p></li>
									<li> <input type="text" id="start-price" name="start_price" value="100" /> </li>
									<li><p>До</p></li>
									<li><input type="text" id="end-price" name="end_price" value="1000" /></li>
									<li><p>грн.</p></li>
								</ul>
							</div>
							<div id="blocktrackbar"></div>

						</form>
					</div>
					
                    <div class="seas_filt">
                    <p class="f_title">Сезоны</p>
						<ul class="checkbox-seas">
							<li> <input type="checkbox" id="checkseas1"> <label for="checkseas1">1</label> </li>
							<li><input type="checkbox" id="checkseas2"> <label for="checkseas2">2</label> </li>
							<li><input type="checkbox" id="checkseas3"> <label for="checkseas3">3</label> </li>
						</ul>
                        <input type="submit" name="submit" id="button-seas-search" value="Найти">
					</div>
                    <div class="type_filt">
                    <p class="f_title">Тип</p>
						<ul class="checkbox-type">
							<li> <input type="checkbox" id="checktype1"> <label for="checktype1">1</label> </li>
							<li><input type="checkbox" id="checktype2"> <label for="checktype2">2</label> </li>
							<li><input type="checkbox" id="checktype3"> <label for="checktype3">3</label> </li>
						</ul>
                        <input type="submit" name="submit" id="button-type-search" value="Найти">
					</div>
                    <div class="color_filt">
                    <p class="f_title">Цвета</p>
						<ul class="checkbox-col">
							<li> <input type="checkbox" id="checkcol1"> <label for="checkcol1">1</label> </li>
							<li><input type="checkbox" id="checkcol2"> <label for="checkcol2">2</label> </li>
							<li><input type="checkbox" id="checkcol3"> <label for="checkcol3">3</label> </li>
						</ul>
                        <input type="submit" name="submit" id="button-col-search" value="Найти">
					</div>
				</div>
			</div>
		</div>
		<div class="g_box">
		<div class="col-md-9">
        <div class="g_content">
        
<?php
                        $result = mysql_query("SELECT * FROM goods",$link);
                        
                        if(mysql_num_rows($result) > 0)
                        {
                          $row = mysql_fetch_array($result);
                            
                            do{
                                if ($row["g_img"] != "" && file_exists("./img/".$row["g_img"]))
                                {
                                    $img_path = '/img/'.$row["g_img"];
                                    
                                }else{
                                    $img_path = "/img/no_img.png";
                                }
                               echo '	
                               
                               <div class="item_box">
			<a href="good.php" class="good_link">
				<div class="item_photo"><img src="'.$img_path.'" alt=""></div>
				<div class="item_content">
					<div class="item_name">'.$row["name_g"].'</div>
					<div class="proud_line"></div>
					
					<div class="item_cost"> <span>'.$row["g_price"].'</span></div>
					<div class="item_btn"><button>В корзину</button></div>
					<div class="ad_change_btn"><button>Изменить</button></div>
					<div class="ad_del_btn"><button>Удалить</button></div>
				</div>
			</a>
	    </div>      	
                               '; 
                            }while ($row = mysql_fetch_array($result));
                         
                        }
                     ?>
	
			</div></div>


</div>
	</div>
</div>


    
        	<?php
    
    include 'include/block-footer.php'
    
    
    ?>
	<script src="js/main.js"></script>
    <script src="Trackbar/fc-trackbar-master/trackbar.js"></script>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="js/libs.min.js"></script>
	
	

</body>
</html> 