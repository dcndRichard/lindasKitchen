<?php include("include/frontPageContent.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Linda's Kitchen</title>

    <link rel="stylesheet" type="text/css" href="./style/stylez.css" />
</head>

<body>
    <?php //include("../../include/duanesMainPage.php") ?>
    <div id="wrapper">
        <?php include("include/header.php"); ?>

        <?php include("include/navigation.php"); ?>

        <section>        
            <div id="ltClmn"><img id="ltDish" src="images/displayDishes/tacos5.png" alt="dish1" /></div>
            <div id="midClmn"><img id="midDish" src="images/displayDishes/nachos5.png" alt="dish2" /></div>
            <div id="rtClmn"><img id="rtDish" src="images/displayDishes/softTacos5.png" alt="dish3" /></div>
        </section>

        <!-- Hidden untill item clicked -->
        <?php include("include/hiddenWindow.php")?>
        <!-- Hidden untill item clicked -->

        <main>
            <?php echo $content; ?>
        </main>



        <?php include("include/footer.php"); ?>
    </div>
    <script type="text/javascript" src="scripts/jQuery.js"></script>
    <script type="text/javascript" src="scripts/foodDisplaySlide.js"></script>
    <script type="text/javascript" src="scripts/itemOrder.js"></script>
   
    <script>
        // function myFunc(x){
    //     if(x.matches){

    //         document.getElementById("content_text").style.marginLeft = "380px";
    //         document.getElementById("img_dining").style.display ="none";
    //         document.getElementById("img_cooks").style.display ="none";
    //     }else{
    //         document.getElementById("content_text").style.marginLeft = "350px";
    //         document.getElementById("img_dining").style.display ="block";
    //         document.getElementById("img_cooks").style.display ="block";
    //     }
    // }  
    // var x = window.matchMedia("(max-width: 768px)");
    // myFunc(x);
    // x.addListener(myFunc); 
    // addListener  not addEventListener
    </script>
</body>

</html>