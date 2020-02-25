window.onload = function() {
    document.addEventListener('keydown', Keydown_Change);
    setInterval(Source, 1000 / 60);
}

var
	canvas = document.getElementById('game'),
	ctx = canvas.getContext("2d"),
	//	Размер блока игрока
	playerBlockWidth = playerBlockHeight = 20,
	//	Позиция игрока на координате Х
	playerX = 30,
	// Позиция игрока на координате y
	playerY = canvas.height - playerBlockHeight * 2,
	// Скорость игрока
	playerSpeed = 3,
	player = [],
	groundY = playerY - playerBlockWidth;

//
//	// Отрисовка заднего фона
//
function DrawBackGround(){
	// Отрисовка заднего фона
	ctx.fillStyle = '#74b9ff';
	ctx.fillRect(0,0, canvas.width, canvas.height);
}

//
//	Отрисовка пользователя
//
function DrawPlayer(){
	for(var index = 0; )
}

//
//	Движок
//
function Source(){
	DrawBackGround();
	DrawPlayer();
}

//
//	Обработка нажатий клавиатуры
//
function Keydown_Change(e){}