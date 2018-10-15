(function(){
    var drinks={
        flavors:['coke','diet coke','root beet','sprite'],
        sizes:{s:'small',m:'medium',l:'large'},
        prices:{small:1.99,medium:2.99,large:3.99},
    }
    
 /*   START DRINK ORDER FUNCTION  */ 

 var drinkSizeSelect = document.getElementsByClassName('drinkSizeSelect')
 var drinkFlavorSelect = document.getElementsByClassName("drinkFlavorSelect");
 var drinkPrice = document.getElementsByClassName("drinkPrice");
 var selectDrinkQty = document.getElementById("selectDrinkQty");
    let onDrinkOrder = function(){
        
        if(selectDrinkQty.value >= 0){
            for(let i = 0; i < drinkSizeSelect.length; i++){
                drinkSizeSelect[i].style.display = "none";
                drinkFlavorSelect[i].style.display = "none";
                drinkPrice[i].style.display = "none";
            }
        }
        if(selectDrinkQty.value > 0){
            for(let i = 0; i < selectDrinkQty.value; i++){
                if(drinkSizeSelect[i].style.display == "none"){

                    drinkSizeSelect[i].style.display = "block";
                    drinkPrice[i].style.display = "block";
                    drinkFlavorSelect[i].style.display = "block";

                    drinkSizeSelect[i].setAttribute("data-size-row-id", i);
                    drinkPrice[i].setAttribute("data-price-row-id", i);

                    if(drinkPrice[i].innerHTML == ""){
                        drinkPrice[i].innerHTML = 1.99;
                    }
                }
            }
        }            
    }
/*   END DRINK ORDER FUNCTION  */ 

let drinkSize = function(object){
    var price;
    if(object.value === 's'){
        price = drinks.prices.small;
    }else if(object.value === 'm'){
        price = drinks.prices.medium;
    }else{
        price = drinks.prices.large;
    }

    for(let i=0; i < selectDrinkQty.value; i++){
            if(object.getAttribute("data-size-row-id") == drinkPrice[i].getAttribute("data-price-row-id")){
                 drinkPrice[i].innerHTML = parseFloat(price);
            }
    }
    

}

/*   END drinkSizeSelect FUNCTION  */ 

let addUp = function(){
    let priceInit = 0;
    
    let prices = {
        sourCream:1.99,
        quac:2.99,
        salsa:0.50,
        chickenEnch:8.99,
        cheeseDillas:6.99,
        chickenToms:7.99,
        chipsNguac:3.99,
        beefTacos:6.99,
        beefToms:9.99,
        burrito:8.99,
        taquitos:5.99
    }
    let price

    return function(object,displayId){
        let itemId = object.getAttribute("data-itemId");
        let displayPrice = document.getElementById(displayId);
        let qty = parseInt(object.value);

        for(let key in prices){
        
            if(key === itemId){
                price = prices[key]; 
            }
        }
        priceInit = qty * price;
        displayPrice.innerHTML = priceInit;
    }   
}



    return calOrder = {
        onDrinkOrder : onDrinkOrder,
        drinkSize :drinkSize,
        addUp:addUp()
    }
 
})();

