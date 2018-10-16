var ltClmnPics=new Array("images/displayDishes/tacos5.png","images/displayDishes/bowl5.png","images/displayDishes/quesedilla5.png","images/displayDishes/chips5.png");
var midClmnPics=new Array("images/displayDishes/nachos5.png","images/displayDishes/tostada5.png","images/displayDishes/sample5.png","images/displayDishes/salad5.png");
var rtClmnPics=new Array("images/displayDishes/softTacos5.png","images/displayDishes/fajita5.png","images/displayDishes/taquitos5.png","images/displayDishes/bowl5.png");

var l=0;
var m=0;
var r=0;
function ltChange(){
    var ltClmn=document.getElementById("ltDish");
    $("#ltDish").fadeIn(1000);
    setTimeout(function(){$("#ltDish").fadeOut(1000)},9000);
    ltDish.getAttributeNode("src").value=ltClmnPics[l];
    if(l<ltClmnPics.length-1){
        l++;     
    }else{
        l=0;
    }
    $("#ltDish").fadeIn(1000);
    setTimeout(function(){ltChange()},10000);
}

function midChange(){
    var midDish=document.getElementById("midDish");
    $("#midDish").fadeIn(1000);
    setTimeout(function(){$("#midDish").fadeOut(1000)},9000);
    midDish.getAttributeNode("src").value=midClmnPics[m];
    if(m<midClmnPics.length-1){
        m++;     
    }else{
        m=0;
    }
    $("#midDish").fadeIn(1000);
    setTimeout(function(){midChange()},10000);
}

function rtChange(){
    var rtDish=document.getElementById("rtDish");
    $("#rtDish").fadeIn(1000);
    setTimeout(function(){$("#rtDish").fadeOut(1000)},9000);
    rtDish.getAttributeNode("src").value=rtClmnPics[r];
    if(r<rtClmnPics.length-1){
        r++;     
    }else{
        r=0;
    }
    $("#rtDish").fadeIn(1000);
    setTimeout(function(){rtChange()},10000);
}
ltChange();
midChange();
rtChange();