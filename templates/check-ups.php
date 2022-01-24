<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<?php
  
    $host = 'localhost:8889'; // имя хоста
	$user = 'root';      // имя пользователя
	$pass = 'root';          // пароль
	$name = 'test';      // имя базы данных
    $table = 'checkups';
    
	
	$link = mysqli_connect($host, $user, $pass, $name);
	mysqli_query($link, "SET NAMES 'utf8'");


    $sql = mysqli_query($link, "SELECT * FROM `checkups`");

    ?>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
       
            <?php
                $checkups = mysqli_fetch_array($sql);
                foreach ($checkups as $index => $checkup) {
            ?>
                <div class="check__body carousel-item <?php if($index === 0) { echo "active";} ?>">
                    <div class="check__info">
                        <h2 class="check__title"><?php echo $checkups['title']; ?> </h2>
                        <h3 class="check__subtitle"><?php echo $checkups['subtitle']; ?> </h3>
                        <ul>
                            <li class="check__item"><span><?php echo $checkups['item_1']; ?> </span></li>
                            <li class="check__item"><span><?php echo $checkups['item_2']; ?></span></li>
                            <li class="check__item"><span><?php echo $checkups['item_3']; ?></span></li>
                            <li class="check__item"><span><?php echo $checkups['item_4']; ?></span></li>
                        </ul>

                        <p class="check__price"><?php echo $checkups['price']; ?> <span><?php echo $checkups['old_price']; ?></span></p>
                        <button class="btn_custom btn_custom__long">Записаться</button>
                        <button class="btn_custom btn_custom__clear">Подробнее</button>
                    </div>
                    <div class="check__bg"><img src="img/check.jpg"/></div>
                </div>
            <?php } ?>
        </div>
        <div class="check__arrows">
            <img data-bs-target="#carouselExampleControls"  data-bs-slide="prev" src="img/slider_left.png">
            <span>1/4</span>
            <img data-bs-target="#carouselExampleControls"  data-bs-slide="next" src="img/slider_right.png">
        </div>
    </div>
</div>
