<?php
if($_SERVER['REQUEST_URI'] == '/duaneRichardsPortfolio/websites/lindasKitchen/index.php'){
        $content = 
        "<p>
            Welcome to Linda's Kitchen were we serve the best mexican dishes right from our kitchen.
            We only use the finest ingredients and our recipes have been passed down 
            for generations. We have maintained that authentic mexican flavor to give you only the best 
            of what our culture has to offer.
            Come in, sit down, and eat in our lovely resturant where the atmosphere is friendly
            and fun for the whole family. Lindas Kitchen, is where mexican flavor is not far from home.
        </p>
    <div>
        <div><img src=\"images/cooks.png\" alt=\"cooks\" /></div>
        <div><img src=\"images/restaurant7.png\" alt=\"dinning area\" /></div>
    </div>";
}else{
    $content =
    '<div id="menuPicContainer" class="menuPicContainer">
    <div>
        <img onclick="itemOrder(this)" id="chickenEnch" src="images/food/dish1Icon.png" alt="enchiladas" data-srclrg="images/food/dish1full.png"
            data-price="8.99" />
        <h4>#1 Chicken enchiladas</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt veritatis, laudantium animi in soluta officiis
            enim quam ut saepe cum vero commodi. Blanditiis quia velit eum sequi sed, rerum esse.</p>

    </div>
    <div>
        <img onclick="itemOrder(this)" id="cheeseDillas" src="images/food/dish2Icon.png" alt="quesedillas" data-srclrg="images/food/dish2full.png"
            data-price="6.99" />
        <h4>#2 Cheese quesedillas</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt veritatis, laudantium animi in soluta officiis
            enim quam ut saepe cum vero commodi. Blanditiis quia velit eum sequi sed, rerum esse.</p>
    </div>
    <div>
        <img onclick="itemOrder(this)" id="chickenToms" src="images/food/dish3Icon.png" alt="tomalleys" data-srclrg="images/food/dish3full.png"
        data-price="7.99" />
        <h4>#3 Chicken tomalleys</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt veritatis, laudantium animi in soluta officiis
            enim quam ut saepe cum vero commodi. Blanditiis quia velit eum sequi sed, rerum esse.</p>

    </div>
    <div>
        <img onclick="itemOrder(this)" id="chipsNguac" src="images/food/dish4Icon.png" alt="chips" data-srclrg="images/food/dish4full.png"
        data-price="10.99" />
        <h4>#4 Chips and guacamole</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt veritatis, laudantium animi in soluta officiis
            enim quam ut saepe cum vero commodi. Blanditiis quia velit eum sequi sed, rerum esse.</p>

    </div>
    <div>
        <img onclick="itemOrder(this)" id="beefTacos" src="images/food/dish5Icon.png" alt="tacos" data-srclrg="images/food/dish5full.png"
        data-price="5.99" />
        <h4>#5 Crunchy beef tacos</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt veritatis, laudantium animi in soluta officiis
            enim quam ut saepe cum vero commodi. Blanditiis quia velit eum sequi sed, rerum esse.</p>

    </div>
    <div>
        <img onclick="itemOrder(this)" id="beefToms" src="images/food/dish8Icon.png" alt="tomalleys" data-srclrg="images/food/dish8full.png"
        data-price="9.99" />
        <h4>#6 Beef tomalleys</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt veritatis, laudantium animi in soluta officiis
            enim quam ut saepe cum vero commodi. Blanditiis quia velit eum sequi sed, rerum esse.</p>

    </div>
    <div>
        <img onclick="itemOrder(this)" id="burrito" src="images/food/dish7Icon.png" alt="burrito" data-srclrg="images/food/dish7full.png"
        data-price="8.99" />
        <h4>#7 Combo burrito</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt veritatis, laudantium animi in soluta officiis
            enim quam ut saepe cum vero commodi. Blanditiis quia velit eum sequi sed, rerum esse.</p>

    </div>
    <div>
        <img onclick="itemOrder(this)" id="taquitos" src="images/food/dish6Icon.png" alt="taquitos" data-srclrg="images/food/dish6full.png"
        data-price="7.99" />
        <h4>#8 Beef taquitos</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt veritatis, laudantium animi in soluta officiis
            enim quam ut saepe cum vero commodi. Blanditiis quia velit eum sequi sed, rerum esse.</p>

    </div>
</div>';
}