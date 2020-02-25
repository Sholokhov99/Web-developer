window.onload = function() {
    document.addEventListener('keydown', Keydown_Change);
    setInterval(Source, 1000 / 60);
}


var
// canvas
    canvas = document.getElementById('game'),
    // Форма отображения счета
    txtCanvas = document.getElementById('score'),
    // 2d контекст
    ctx = canvas.getContext("2d"),
    // 2d контекст формы отображения счета
    txtCtx = txtCanvas.getContext("2d"),
    // старт игры и первая нажатая клавиша (инициализованное состояние)
    gameStarted = firstKeyPress = false,
    // Скорость передвижения змеи
    speed = baseSpeed = 3,
    // Цвет змеи
    colorSnake = "lime",
    // Скорость [x,y]
    velocityX = velocityY = 0,
    // Позиция игрока на оси Х
    playerX = ~~(canvas.width) / 2,
    // Позиция игрока на оси y
    playerY = ~~(canvas.height) / 2,
    // Размер игрока
    playerW = playerH = 20,
    // Размер яблока
    appleW = appleH = 20,
    // Массив яблок
    apples = [],
    //
    trail = [],
    // Размер хвоста
    tail = 100,
    // Защита от самоедства
    tailSafeZone = 20,
    // Нахождение в зоне "перезарядки"
    coolDown = false,
    // Текущий счет
    score = 0;


function DrawScore() {
    txtCtx.fillStyle = 'black';
    txtCtx.fillRect(0, 0, txtCanvas.width, txtCanvas.height);
    txtCtx.fillStyle = '#dcdde1';
    txtCtx.strokeStyle = 'blue';
    txtCtx.font = "normal 32px Arial";
    txtCtx.fillText("Level: " + (tail / 10).toString(), 10, txtCanvas.height - 16 / 2);
}

//
//  Проверка на столкновения
//
function CheckCollision(objectX, objectY, collection) {
    var
    // Высота объекта (игрока или яблока)
        he,
        // Ширина объекта (игрока или яблока)
        we;

    // Прорека на исключение появления яблока в хвосте при сталкновении
    if (playerX !== null && typeof playerX === 'object') {
        he = appleH;
        we = appleW;
    } else {
        he = playerH;
        we = playerW;
    }

    if (
        objectX < (collection.x + playerW) &&
        objectX + we > collection.x &&
        objectY < (collection.y + playerH) &&
        objectY + he > collection.y
    ) {
        return true;
    }

    return false;
}

//
// Игровой движок
//
function Source() {
    ctx.fillStyle = 'black';
    ctx.fillRect(0, 0, canvas.width, canvas.height);

    playerX += velocityX;
    playerY += velocityY;

    // Перемещение игрока при выходе за границу
    if (playerX > canvas.width) playerX = 0;
    if (playerX + playerW < 0) playerX = canvas.width;
    if (playerY + playerH < 0) playerY = canvas.height;
    if (playerY > canvas.height) playerY = 0;

    //  Отрисовка змеи
    ctx.fillStyle = colorSnake;
    for (var index = 0; index < trail.length; index++) {
        ctx.fillStyle = colorSnake;
        ctx.fillRect(trail[index].x, trail[index].y, playerW, playerH);
    }
    trail.push({ x: playerX, y: playerY, color: colorSnake });

    // Проверка на съеденный хвос
    for (var index = 0; index < 2; index++) {
        if (trail.length > tail) {
            trail.shift();
        }
    }

    // Столкновение с самим собой
    if (trail.length >= tail && gameStarted) {
        for (var index = trail.length - tailSafeZone; index >= 0; index--) {
            if (CheckCollision(playerX, playerY, trail[index])) {
                // Получение коллекции
                tail = 10;
                speed = baseSpeed;

                for (var item = 0; item < trail.length; item++) {
                    trail[item].color = 'red';
                    if (item >= trail.length - tail) break;
                }
            }
        }
    }
    DrawScore();
    //  Отрисовка яблок
    for (var index = 0; index < apples.length; index++) {
        ctx.fillStyle = apples[index].color;
        ctx.fillRect(apples[index].x, apples[index].y, appleW, appleH)
    }

    //  Проверка головы на столкновение с яблоком
    for (var index = 0; index < apples.length; index++) {
        if (CheckCollision(playerX, playerY, apples[index])) {
            // Получение коллекции яблок
            apples.splice(index, 1); // Удаление яблока из списка яблок
            tail += 10; // Увеличение длины хвоста
            speed += .2; // Увеличение скорости змеи
            SpawnApple(); // Генерация нового яблока(ок)
            break;
        }
    }

}

//
//  Генерация яблок
//
function SpawnApple() {
    var
        newApple = {
            x: ~~(Math.random() * canvas.width),
            y: ~~(Math.random() * canvas.height),
            color: RandomColorGenerator(),
        };

    if (
        (newApple.x < appleW || newApple.x > canvas.width - appleW) ||
        (newApple.y < appleH || newApple.y > canvas.height - appleH)
    ) {
        SpawnApple();
        return;
    }
    // Проверьте на наличие столкновений с хвостовым элементом, чтобы в нем не появилось яблоко
    for (var index = 0; index < tail.length; index++) {
        if (CheckCollision(newApple.x, newApple.y, apples[index])) {
            // Получение коллекции
            SpawnApple();
            return;
        }
    }

    apples.push(newApple);

    if (apples.length < 3 && ~~(Math.random() * 1000) > 700) {
        SpawnApple();
    }
}
//
//  Генерация цвета
//
function RandomColorGenerator() {
    return '#' + ((~~(Math.random() * 255)).toString(16)) +
        ((~~(Math.random() * 255)).toString(16)) +
        ((~~(Math.random() * 255)).toString(16));
}

//
//  Изменение скорости змеи при изменении направления движения
//
function UpdateVelocity(vx, vy) {
    velocityX = vx;
    velocityY = vy;
}

//
//  Обновление вектора
//
function Keydown_Change(e) {
    //
    //  Начало игры
    //
    if (!firstKeyPress && [37, 38, 39, 40].indexOf(e.keyCode) > -1) {
        setTimeout(function() { gameStarted = true; }, 1000);
        firstKeyPress = true;
        SpawnApple();
    }

    if (coolDown) return false;

    if (e.keyCode == 37 && ~(velocityX > 0)) { // Left arrow
        UpdateVelocity(-speed, 0);
    } else if (e.keyCode == 38 && !(velocityY > 0)) { // Top arrow
        UpdateVelocity(0, -speed);
    } else if (e.keyCode == 39 && ~(velocityX < 0)) { // Right arrow
        UpdateVelocity(speed, 0);
    } else if (e.keyCode == 40 && !(velocityY < 0)) { // Down  arrow
        UpdateVelocity(0, speed);
    }

    coolDown = true;
    setTimeout(function() { coolDown = false; }, 100);
}