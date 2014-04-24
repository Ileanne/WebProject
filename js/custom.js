var canvas = document.getElementById("myCanvas");
var cc = canvas.getContext("2d");

var img_aside = new Image();
img_aside.src = "../images/300x400.jpg";

img_aside.onload = function(){
    cc.drawImage(img_aside,0,0);
    var l = cc.getImageData(0,0,300,400);
    
    for(var i=0; i<640000; i+=4){
        var gris = (l.data[i]+l.data[i+1]+l.data[i+2])/3;
        l.data[i] = gris;
        l.data[i+1] = gris;
        l.data[i+2] = gris;
        l.data[i+3] = 255;
    }
    
    cc.putImageData(l,0,0);
}

function color(event){
var img_aside = new Image();
img_aside.src = "../images/300x400.jpg";

img_aside.onload = function(){
    cc.drawImage(img_aside,0,0);
    var l = cc.getImageData(0,0,300,400);
    
    for(var i=0; i<640000; i+=4){
        var gris = (l.data[i]+l.data[i+1]+l.data[i+2])/3;
        l.data[i];
        l.data[i+1];
        l.data[i+2];
        l.data[i+3]= 255;
    }
    
    cc.putImageData(l,0,0);
}
}

function byn(event){
var img_aside = new Image();
img_aside.src = "../images/300x400.jpg";

img_aside.onload = function(){
    cc.drawImage(img_aside,0,0);
    var l = cc.getImageData(0,0,300,400);
    
    for(var i=0; i<640000; i+=4){
        var gris = (l.data[i]+l.data[i+1]+l.data[i+2])/3;
        l.data[i] = gris;
        l.data[i+1] = gris;
        l.data[i+2] = gris;
        l.data[i+3] = 255;
    }
    
    cc.putImageData(l,0,0);
}
}


