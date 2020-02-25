/*
var heightScreen = screen.height;
var styleHeightScreen = document.getElementById("header").style;
console.log(styleHeightScreen.height);
*/


/* 

    Настройка размера начального изображения

*/
var heightScreen = screen.height;
var heightTopMenu = document.getElementById('header').offsetHeight;
var startContainerStyle = document.getElementById('startContainer').style;
startContainerStyle.height = heightScreen - heightTopMenu - 133 + "px";