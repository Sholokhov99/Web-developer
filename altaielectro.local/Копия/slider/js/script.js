//
// Текущий отступ
//
var _marginLeft = 0;
//
// Номер сайда
//
var _slide = 0;
//
// Лента с картинками
//
var _slideID = document.getElementById('slide');
//
// Количество слайдов
//
var _countSlide = ~~(_slideID.childNodes.length / 2) - 1;
//
//  Массив в круглыми переключателями
//
var _arrCircleDriveSlide = document.getElementById('slide_circle').childNodes;
//
// Текущая ширина картинки
//
function GetWidthSlide() { return _slideID.childNodes[1].offsetWidth; }
//
//  Получение максимальной прокрутки сайта (всегда отрицательное значение)
//
function GetMaxMarginLeft() { return -1 * (GetWidthSlide() * _countSlide); }
//
// Максимальный отступ
//
var _maxMarginRight = GetWidthSlide() * _countSlide;

CircleDrive(_slide);


setInterval(NextSlide, 12000);

//
//  Переключение слайда при помощи круглого переключателя
//
function CircleDrive(id) {
    _slideID.style.left = -1 * (id * GetWidthSlide()) + "px";

    //
    //  Изменение цвета прошлого круглого идекатора
    //
    _arrCircleDriveSlide[CheckNumberCircle(_slide)].style.color = "rgba(255,255,255, .2)";

    //
    // Изменение цвета нажатого индекатора или автоматически измененный
    //
    _arrCircleDriveSlide[CheckNumberCircle(id)].style.color = "rgba(255,255,255, 1)";
    _slide = id;

}
//
//  Определение корректного значения в childNodes, 
//  для изменение цвета круглого индикатора
//
function CheckNumberCircle(value) { return ((value === 0 || value % 2 == 0) ? value + 1 : value + 2); }

//
//  Следующий слайд
//
function NextSlide() {
    var slide = _slide;
    if (_marginLeft != GetMaxMarginLeft()) {
        _slideID.style.left = (_marginLeft -= GetWidthSlide()) + "px";
        slide++;
    } else {
        _slideID.style.left = ((_marginLeft = 0) + "px");
        slide = 0;
    }
    CircleDrive(slide);
}
//
//  Предыдущий слайд
//
function ReturnSlide() {
    var slide = _slide;
    if (_marginLeft !== 0) {
        _slideID.style.left = (_marginLeft += GetWidthSlide()) + "px";
        slide--;
    } else {
        _slideID.style.left = (_marginLeft = GetMaxMarginLeft()) + "px";
        slide = _countSlide;
    }

    CircleDrive(slide);
}