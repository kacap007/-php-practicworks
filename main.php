<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP My first site_vizitka </title>
    <link rel="stylesheet" href="style1.css" />
    <a href="#"></a>
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="/img/php_l.jpg">'; ?>                    
                </div>

                <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'город', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    лет </p>
                    <p> Я только только изучаю Python, html, js, php и много много интересного!!! </p>
                    <p> Рассмотрели, изучили, попытались применить на практике свои знания </p>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                       
                    <?php
                        $a = 100;
                        $b = 200;
                        $c = $a + $b;
                        echo $c;
                    ?>   <br>                
                     <?php
                        echo $d;
                    ?> 

            </div>

            <div class="article">
                <p class="text">
                    Человеку надо мало. Человеку надо мало: чтоб искал и находил. Чтоб имелись для начала Друг — один и враг — один.Человеку надо мало: чтоб тропинка вдаль вела. Чтоб жила на свете мама. Сколько нужно ей — жила. Человеку надо мало: после грома — тишину. Голубой клочок тумана. Жизнь — одну. И смерть — одну. Утром свежую газету — с Человечеством родство. И всего одну планету: Землю! Только и всего. 
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>