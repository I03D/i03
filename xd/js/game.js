var cvs = document.getElementById("canvas");
var ctx = cvs.getContext("2d");
var bird = new Image();
var bg = new Image(); // Создание объекта
var fg = new Image(); // Создание объекта
var pipeUp = new Image(); // Создание объекта
var pipeBottom = new Image(); // Создание объекта
let pipe = [];

bird.src = "img/bird.png"; // Указание нужного изображения
bg.src = "img/bg.png"; // Аналогично
fg.src = "img/fg.png"; // Аналогично
pipeUp.src = "img/pipeUp.png"; // Аналогично
pipeBottom.src = "img/pipeBottom.png"; // Аналогично

// Звуковые файлы
var fly = new Audio(); // Создание аудио объекта
var score_audio = new Audio(); // Создание аудио объекта

fly.src = "audio/fly.mp3"; // Указание нужной записи
score_audio.src = "audio/score.mp3"; // Аналогично
function draw() {
 // Какой-либо код
 requestAnimationFrame(draw); // Вызов функции постоянно
}

draw(); // Вызов функции из вне
// При нажатии на какую-либо кнопку
document.addEventListener("keydown", someMethod);
// Вызывается метод someMethod
function someMethod() {
 // Изменяем что-то в коде
}
var cvs = document.getElementById("canvas");
var ctx = cvs.getContext("2d");

var bird = new Image();
var bg = new Image();
var fg = new Image();
var pipeUp = new Image();
var pipeBottom = new Image();

bird.src = "img/bird.png";
bg.src = "img/bg.png";
fg.src = "img/fg.png";
pipeUp.src = "img/pipeUp.png";
pipeBottom.src = "img/pipeBottom.png";

// Звуковые файлы
var fly = new Audio();
var score_audio = new Audio();

fly.src = "audio/fly.mp3";
score_audio.src = "audio/score.mp3";

var gap = 175; // -------------------------- Важно

// При нажатии на какую-либо кнопку
document.addEventListener("keydown", moveUp);

function moveUp() {
 yPos -= 65;   
 fly.play();
}

// Создание блоков


pipe[0] = {
 x : cvs.width,
 y : 0
}

var score = 0;
var scoreRec = 0
// Позиция птички
var xPos = 10;
var yPos = 150;
var grav = 1.5;

function draw() {
 ctx.drawImage(bg, 0, 0);

 for(var i = 0; i < pipe.length; i++) {
 ctx.drawImage(pipeUp, pipe[i].x, pipe[i].y);
 ctx.drawImage(pipeBottom, pipe[i].x, pipe[i].y + pipeUp.height + gap);

 pipe[i].x--;

 if(pipe[i].x == 125) {
 pipe.push({
 x : cvs.width,
 y : Math.floor(Math.random() * pipeUp.height) - pipeUp.height
 });
 }

 // Отслеживание прикосновений
 if(xPos + bird.width >= pipe[i].x
 && xPos <= pipe[i].x + pipeUp.width
 && (yPos <= pipe[i].y + pipeUp.height
 || yPos + bird.height >= pipe[i].y + pipeUp.height + gap) || yPos + bird.height >= cvs.height - fg.height) {
// location.reload(); // Перезагрузка страницы
 yPos = 200;
 score = 0;
 }

 if(pipe[i].x == 5) {
 score++;
 score_audio.play();
 }
 }

 ctx.drawImage(fg, 0, cvs.height - fg.height);
 ctx.drawImage(bird, xPos, yPos);

 yPos += grav;

 ctx.fillStyle = "#000";
 ctx.font = "24px Verdana";
 if (score > scoreRec) {
 	scoreRec = score
 }
 ctx.fillText("Счет: " + score + ", рекорд: " + scoreRec, 10, cvs.height - 20);

 requestAnimationFrame(draw);
}

pipeBottom.onload = draw;
