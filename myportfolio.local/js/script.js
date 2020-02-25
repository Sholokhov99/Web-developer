/*
 *
 *  Глобальные задачи и переменные
 *
 */
// Текущая прокрутка
var scrolled = window.pageYOffset;

//---------------------------------------------------------------------
StartUpScripts();

function StartUpScripts() {
    NewStyleMenu();
    // Проверка на включение анимации
    OnAnimationScale();
    // Изменение ширины изображения под разрешение экрана
    document.getElementById('home-fon').style.height = screen.height + "px";
}

/*
 *
 *  Изменение стиля меню
 *
 */
function NewStyleMenu() {
    var top_menu = document.getElementById('top_menu');
    var heightBlock = top_menu.offsetHeight / 3;
    scrolled = window.pageYOffset;
    if (scrolled >= heightBlock) {
        top_menu.style.backgroundColor = "rgba(0,0,0,.6)";
        top_menu.style.borderBottom = "2px solid rgba(192,0,205, 1)";
    } else if (scrolled < heightBlock) {
        top_menu.style.borderBottom = "0px solid rgba(192,0,205, 0)";
        top_menu.style.backgroundColor = "transparent";
    }
}
//---------------------------------------------------------------------
/*
 *
 *  Анимация навыков
 *
 */

var on_scale_animation = false;
// Анимация отображения нвыков
function AnimationScale(value, element) {
    var percent = 500 * ("0." + value);
    var pixel = 0;
    document.getElementById("percent" + element).innerHTML = value + "%";
    document.getElementById("scale" + element).style.width = percent + "px";
}

function OnAnimationScale() {
    var all_ability = document.getElementById('all_ability').offsetTop;
    var client_height = document.documentElement.clientHeight;
    var scrollToElem = all_ability - client_height + document.getElementById('all_ability').offsetHeight;

    if (scrolled > scrollToElem && !on_scale_animation) {
        on_scale_animation = true;
        AnimationScale(80, 1);
        AnimationScale(73, 2);
        AnimationScale(63, 3);
        AnimationScale(51, 4);
        AnimationScale(89, 5);
    }
}
//---------------------------------------------------------------------
/*
 *
 *   События
 *
 */
window.onscroll = function() {
    StartUpScripts();
}