/* 
    Стандартные размеры
    width: 405px;
    height: 273px;
    margin-right: 70px;

    894
    */
/* 
    При изменении размера изображения()
*/
const _defaultWidthSlider = 894;
const _defWidthSlide = 405;
const _defHeightSlide = 273;
const _defMarginRight = 70;

var _dorderImage = 2;
var _marginRight = _defMarginRight + (_dorderImage * 2);

var _marginleft = 1;
var _slideId = document.getElementById('slideId');

function Steep() { return _defWidthSlide + _marginRight; }

var _maxMarginLeft = -(~~(_slideId.childNodes.length / 2) - 2) * Steep();

function NextSlide() {
    console.log(_marginleft + "  " + _maxMarginLeft);
    if (_marginleft != _maxMarginLeft)
        _slideId.style.left = (_marginleft -= Steep()) + "px";
    else
        _slideId.style.left = (_marginleft = 0) + "px";
}

function ReturnSlide() {
    if (_marginleft != 0)
        _slideId.style.left = (_marginleft += Steep()) + "px";
    else {
        _slideId.style.left = (_marginleft += _maxMarginLeft) + "px";
        console.log((_slideId.childNodes.length / 2));
    }
}