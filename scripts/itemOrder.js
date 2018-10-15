
/* hidden window variables */ 
var hiddenContainer = document.getElementById("itmeOrderContainer");
var entreeQty = document.getElementById('entreeQty');
var tdPrice = document.getElementById("entreePrice");
var largeImg = document.getElementById("lrgImg");
function itemOrder(object){
    /* data passed from each item img element for frontPageConent.php*/ 
    var picSrc = object.getAttribute("data-srclrg");
    var id = object.getAttribute("id");
    
    var price = object.getAttribute("data-price");
    
    largeImg.setAttribute('src',picSrc);
    entreeQty.setAttribute('data-itemId',id) //creates and sets a data-itemId attribute
                                            // for the entree selcect options with a value
                                            // of the img id to link the img with the select option
    tdPrice.innerHTML = price;
    // addUp(object,id);


    /* hidden window syle */
    hiddenContainer.style.display="grid";
    hiddenContainer.style.background='#fff';    
    hiddenContainer.style.zIndex='2';   
}   

function closeWindow(){
    itmeOrderContainer.style.display="none";
    
    
}