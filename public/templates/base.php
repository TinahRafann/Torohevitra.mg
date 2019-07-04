<?php 
//For animation
sleep(1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <title>Torohevitra.mg</title>
</head>
<body>
    <div class="black"> </div>
    <nav> 
        <div class="header"> 
            <div class="logo">
                TOROHEVITRA.MG 
            </div>
            <div class="showProfile"> 
                <img src="img/avatar.png">
                <a href="#" class="userName"> Tinah Rafann </a>
                <a href="connexion.php" class="logout"> Se déconnecter </a>
            </div>
         </div>
    </nav>
    <div class="container">
        <div class="categorie">
            <div class="title"> Catégories : </div> 
            <a href="#">
            <div class="item">
                <div class="categorieTitle"> Informatique </div>
                <div class="total">
                    <span class="label"> Nombre de sujets : </span>
                    <span class="value"> 15 </span>
                </div> 
                <div class="total">
                    <span class="label"> Nombre de sujets : </span>
                    <span class="value"> 15 </span>
                </div>
            </div> </a>
            <a href="#">
            <div class="item">
                <div class="categorieTitle"> Musculation </div>
                <div class="total">
                    <span class="label"> Nombre de sujets : </span>
                    <span class="value"> 15 </span>
                </div> 
                <div class="total">
                    <span class="label"> Nombre de sujets : </span>
                    <span class="value"> 15 </span>
                </div>
            </div></a>
            <a href="#">
            <div class="item">
                <div class="categorieTitle"> Economique </div>
                <div class="total">
                    <span class="label"> Nombre de sujets : </span>
                    <span class="value"> 15 </span>
                </div> 
                <div class="total">
                    <span class="label"> Nombre de sujets : </span>
                    <span class="value"> 15 </span>
                </div>
            </div> </a>
            
        </div>
        <div class="content">
            <?= $content ?>
        </div>

        <div class="aside"> 
            <div class="pub"> 
                <h2> Bacc en poche</h2>
                <img style="width:110%" src="img/bep.png">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus, ipsa vitae? Error velit sit amet officia placeat vel, odit perspiciatis praesentium delectus neque cumque repudiandae earum quo officiis, cupiditate ut!
            </div>
            <div class="pub"> 
                <h2> Loto 6/42 </h2>
                <img style="width:60%" src="img/loto.png">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus, ipsa vitae? Error velit sit amet officia placeat vel, odit perspiciatis praesentium delectus neque cumque repudiandae earum quo officiis, cupiditate ut!
            </div>
        </div>
        
    </div>    
    <footer class="Mainfooter"> 
           Tinah Rafann 2019
    </footer>
    <script src="../js/acceuil.js"> </script>
</body>
</html>