// * SETUP * //

//Event Listeners
window.addEventListener("load", eventWindowLoaded, false);
window.addEventListener("resize", responsiveWidth, false);

//Global variables
var ctx, cvs; //Initiate context & canvas variables
var container;
var width, height;
var W, H; //Initiate canvas width & height variables
var startTime = Date.now(); //Time when game started
var frameCount = 0;
var level = 1;
var color = "hsl(0, 100%, 50%)";
var score = 0;

//Initiate Canvas
function eventWindowLoaded() {
	initCanvas();
}

function initCanvas() {
	cvs = document.getElementById("myCanvas");
	if (!isCanvasSupported || !cvs) {
		alert("canvas not working");
	}
	console.log("canvas working");
	ctx = cvs.getContext('2d');
	responsiveWidth();
	startTheApp();
}

function isCanvasSupported() {
	var elem = document.createElement('canvas');
	return !!(elem.getContext && elem.getContext('2d'));
}

function responsiveWidth() {
	var container = document.getElementById('container');
	var width = container.offsetWidth;
	var height = container.offsetHeight;
	cvs.width = width;
	cvs.height = height;
	ctx.font = '30px Arcade';
	W = cvs.width;
	H = cvs.height;
}


// * OBJECTS * //

//Player
var player = {
	name: 'P',
	x: 50,
	y: 40,
	distX: 30,
	distY: 5,
	lives: 1,
	w: 20,
	h: 20,
	color: 'white'
};

//Enemies
var enemyList = {};

enemy = function (id, x, y, distX, distY, w, h, color) {
	var enemy = {
		name: 'E',
		id: id,
		x: x,
		y: y,
		distX: distX,
		distY: distY,
		w: w,
		h: h,
		color: color
	};
	enemyList[id] = enemy;
}

randomEnemy = function (color) {
	var id = Math.random();
	var x = W;
	var y = H;
	var w = 10 + Math.random() * 30;
	var h = 10 + Math.random() * 30;
	var distX = 5 + Math.random() * 5;
	var distY = 5 + Math.random() * 5;
	enemy(id, x, y, distX, distY, w, h, color);
}

//Upgrades
var upgradeList = {};

upgrade = function (id, x, y, distX, distY, w, h, color) {
	var upgrade = {
		name: 'E',
		id: id,
		x: x,
		y: y,
		distX: distX,
		distY: distY,
		w: w,
		h: h,
		color: 'white'
	};
	upgradeList[id] = upgrade;
}

randomUpgrade = function () {
	var id = Math.random();
	var x = Math.random() * W;
	var y = Math.random() * H;
	var w = 10;
	var h = 10;
	var distX = 0;
	var distY = 0;
	upgrade(id, x, y, distX, distY, w, h, color);
}


// * FUNCTIONS * //

//Center middle point of rectangles
getCollision1 = function (object1, object2) {
	var rect1 = {
		x: object1.x - object1.w / 2,
		y: object1.y - object1.h / 2,
		w: object1.w,
		h: object1.h
	};
	var rect2 = {
		x: object2.x - object2.w / 2,
		y: object2.y - object2.h / 2,
		w: object2.w,
		h: object2.h
	};
	return getCollision2(rect1, rect2);
}

//Collision when 2 rectangles hit
getCollision2 = function (rect1, rect2) {
	return rect1.x <= rect2.x + rect2.w
		&& rect2.x <= rect1.x + rect1.w
		&& rect1.y <= rect2.y + rect2.h
		&& rect2.y <= rect1.y + rect1.h;
}

//Get position of mouse
getMousePos = function (cvs, mouse) {
	var rect = cvs.getBoundingClientRect();
	return {
		x: mouse.clientX - rect.left,
		y: mouse.clientY - rect.top
	};
}

//Update position of player
document.onmousemove = function (mouse) {
	var mousePos = getMousePos(cvs, mouse);

	//Prevent out of bound
	if (mousePos.x < player.w / 2) {
		mousePos.x = player.w / 2;
	}
	if (mousePos.x > W - player.w / 2) {
		mousePos.x = W - player.w / 2;
	}
	if (mousePos.y < player.h / 2) {
		mousePos.y = player.h / 2;
	}
	if (mousePos.y > H - player.h / 2) {
		mousePos.y = H - player.h / 2;
	}

	//Update position of player
	player.x = mousePos.x;
	player.y = mousePos.y;
}

newGame = function(){
	player.lives = W;
	startTime = Date.now();
	frameCount = 0;
	enemyList = {};
	upgradeList = {};
	level = 1;
	color = "hsl(0, 100%, 50%)";
	score = 0;
	for (var e = 0; e < 3; e++) {
		randomEnemy(color);
		console.log(color);
	}
}


/// * GAME * ///

//Start Game
startTheApp = function () {
	newGame();
	//Update game every 20ms
	setInterval(update, 20);
}

//Draw & update
updateObject = function (object) {
	drawObject(object);
	updatePosition(object);
}

//Draw Object
drawObject = function (object) {
	ctx.save();
	ctx.fillStyle = object.color;
	ctx.fillRect(object.x - object.w / 2, object.y - object.h / 2, object.w, object.h);
	ctx.restore();
}

//Update position of object
updatePosition = function (object) {
	object.x += object.distX;
	object.y += object.distY;

	//Bounce object when it hits end of canvas
	if (object.x < -100 || object.x > W + 100) {
		object.distX = -object.distX;
	}
	if (object.y < -100 || object.y > H + 100) {
		object.distY = -object.distY;
	}
}


//Update Game
update = function () {
	
	//Increase frameCount & score
	frameCount++;
	score++;

	//Level up
	if (frameCount % 500 === 0) {
		//Change color of enemies every level
			color = "hsl(" + Number(frameCount / 500 + frameCount / 500 * 20) + ", 100%, 50%)";
		//Generate 3 enemies
		for (var e = 0; e < 3; e++) {
			
			//Draw enemies
			randomEnemy(color);
		}
		level = 1 + frameCount / 500;
	}
	
	//Generate upgrade
	if (frameCount % 300 === 0) {
		randomUpgrade();
	}

	//Clear canvas
	
	ctx.fillStyle = "rgba(0,0,0,0.2)";
	ctx.fillRect(0, 0, W, H);
	
	ctx.fillStyle = "#FFF";
	for (var i = 0; i < 10; i++) {
		ctx.fillRect(Math.random() * W, Math.random() * H, 1, 1);
	}

	//Update position of enemy
	for (var i in enemyList) {
		updateObject(enemyList[i]);
		//Lose health if player & enemy collides
		var collision = getCollision1(player, enemyList[i]);
		if (collision) {
			player.lives = player.lives - 100;
			ctx.fillStyle = "red";
			ctx.fillRect(0, 0, 10, H);
			ctx.fillRect(0, 0, W, 10);
			ctx.fillRect(W - 10, 0, 10, H);
			ctx.fillRect(0, H - 10, W, 10);
		}
	}
	
	//Update position of upgrade
	for (var i in upgradeList) {
		updateObject(upgradeList[i]);
		//Collect upgrade
		var collision = getCollision1(player, upgradeList[i]);
		if (collision) {
			score += 1000;
			delete upgradeList[i];
		}
	}

	//Game over
	if (player.lives <= 0) {
		var stopTime = Date.now() - startTime;
		alert("Game Over! You survived for " + Math.ceil(stopTime / 1000) + " seconds, and reached Level " + level + ". Score: " + Number(score - 1));
		newGame();
	}

	//Update position of player
	drawObject(player);

	//Lives indicator
	ctx.fillText("Level " + level, W - 130, 50);
	ctx.fillText("Health", 20, 50);
	ctx.fillText("Score: " + score, 20, H - 30);
	ctx.fillText("Collision", W / 2 - 80, 50);
	ctx.fillStyle = "white";
	ctx.fillRect(0, 0, player.lives, 10);
}