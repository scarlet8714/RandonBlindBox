// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';

// import styles bundle
import 'swiper/css/bundle';

// -----------------------------------------------------------
// 抽獎機外盒_商品外盒滾動圖
var swiper = new Swiper('.swiper', {
	slidesPerView: 1,
	direction: 'horizontal',
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	breakpoints: {
		1200: {
			slidesPerView: 1,
		},
		1300: {
			slidesPerView: 1,
		}
	},
});

// -----------------------------------------------------------
// 彈跳視窗_C-2-1確認抽盒
let btn_checkopen_array = document.querySelectorAll(".popup_show_checkopen");

// 紀錄哪個中盒以及哪個盲盒
var selectedBox = '';
var selectedBlind = '';
btn_checkopen_array.forEach( function (box) {
	box.addEventListener("click", function () {
		checkopen.showModal();
		darkMask.classList.remove('d-none');
		selectedBlind = this.id;
		selectedBox = this.parentNode.parentNode.id;
		selectedBox = selectedBox.replace('box', '');
	})
} )

// let btn_checkopen = document.querySelector("#popup_show_checkopen");
let checkopen = document.querySelector("#checkopen");
let close_checkopen = document.querySelector("#popup_close_checkopen");
// *關閉C-2-2
let confirm_checkopen = document.querySelector("#popup_show_drawpage");

// btn_checkopen.addEventListener("click", function () {
// 	checkopen.showModal();
// 	darkMask.classList.remove('d-none');
// })
close_checkopen.addEventListener("click", function () {
	checkopen.close();
	darkMask.classList.add('d-none');
})
// *關閉C-2-2
confirm_checkopen.addEventListener("click", function () {
	checkopen.close();
})

// -----------------------------------------------------------
// 彈跳視窗_C-2-2抽獎畫面
const csrfToken = document.head.querySelector("[name~=csrf-token][content]").content;
const congratulations = document.getElementById('congratulations');
let btn_drawpage = document.querySelector("#popup_show_drawpage");
let drawpage = document.querySelector("#drawpage");

// let close_drawpage = document.querySelector("#popup_close_drawpage");
const slot_start = document.querySelector(".result");
btn_drawpage.addEventListener("click", function () {
	drawpage.showModal();
	document.getElementById(`result`).classList.add('is-play');
	alert(selectedBox);
	let product = document.getElementById('pid').value;
	// 傳遞抽獎請求
	fetch('/product/slot/go', {
		method: 'POST',
		body: JSON.stringify({
				pid: product,
				boxId: selectedBox
				// 預設存token
				// token: '',
			}),
		headers: {
			'Content-Type': 'application/json',
			"X-CSRF-Token": csrfToken
		}
	})
	.then(function (response) {
		return response.json();
	})
	.then(function (prize) {
		console.log(prize);
		// 取得紀錄的獎品名稱和圖片
		let result = document.getElementById('prize');
		let resultImg = document.querySelector('#prizeImg');
		result.innerHTML = prize['name'];
		resultImg.setAttribute('src', '/' + prize['photo']);

		// 將會使用到剩餘次數的部分都修改
		const times = document.querySelectorAll('.remainTimes');
		times.forEach( function (time) {
			if (prize['remainTimes'] < 9) {
				time.innerHTML = '0' + prize['remainTimes'];
			}
			else {
				time.innerHTML = prize['remainTimes'];
			}
		})

		// 加上灰階及不可點擊
		let off = document.getElementById(selectedBlind);
		off.setAttribute('style', 'pointer-events:none ; filter:grayscale(1)');
	})
	/******************開啟點擊暫停動畫 ****************/
	slot_start.addEventListener("click", stopAnimation);
	/************************************************ */
})
// close_drawpage.addEventListener("click", function () {
//     drawpage.close();
// })


const canvas_start = document.querySelector("#canvas");



// 拉霸機
// function startAnimation() {
//     if (document.getElementById(`result`)) {
//         document.getElementById(`result`).classList.add('is-play');
//         document.getElementById(`result`).style.transform = 'none';
//     }
// }

const darkMask = document.getElementById('darkmask');
function stopAnimation() {
	if (document.getElementById(`result`)) {
		const num = Math.floor(Math.random() * 10);
		document.getElementById(`result`).classList.remove('is-play');
		document.getElementById(`result`).style.transform = `translateY(${-num * 10}%)`;
		/**********************關閉點擊暫停動畫 ********************/
		slot_start.removeEventListener("click", stopAnimation);
		/**********************************************************/
		/**********************關閉拉霸，開啟C2-3 ******************/
		canvas.classList.remove('d-none');
		setTimeout(() => {
			// canvas_start.start()
			drawpage.close();
			console.log(congratulations);
			congratulations.showModal();
		}, 3000);

	}
}



// -----------------------------------------------------------
// 彈跳視窗_C-2-3抽獎畫面
let btn_congratulations = document.querySelector("#popup_show_congratulations");
// let congratulations = document.querySelector("#congratulations");
const close_congratulations = document.querySelectorAll(".popup_close_congratulations");
// btn_congratulations.addEventListener("click", function () {
//     congratulations.showModal();

// })
close_congratulations.forEach(element => {
	element.addEventListener("click", function () {
		congratulations.close();
		darkMask.classList.add('d-none');
		canvas.classList.add('d-none');
	})
});
// -----------------------------------------------------------
// 彈跳視窗_C-2-4查看所有款式
let btn_lookall = document.querySelector("#popup_show_lookall");
let lookall = document.querySelector("#lookall");
let close_lookall = document.querySelector("#popup_close_lookall");
btn_lookall.addEventListener("click", function () {
	lookall.showModal();
})
close_lookall.addEventListener("click", function () {
	lookall.close();
})

// -----------------------------------------------------------



// 煙火
// when animating on canvas, it is best to use requestAnimationFrame instead of setTimeout or setInterval
// not supported in all browsers though and sometimes needs a prefix, so we need a shim
window.requestAnimFrame = (function () {
	return window.requestAnimationFrame ||
		window.webkitRequestAnimationFrame ||
		window.mozRequestAnimationFrame ||
		function (callback) {
			window.setTimeout(callback, 1000 / 60);
		};
})();

// now we will setup our basic variables for the demo
var canvas = document.getElementById('canvas'),
	ctx = canvas.getContext('2d'),
	// full screen dimensions
	cw = window.innerWidth,
	ch = window.innerHeight,
	// firework collection
	fireworks = [],
	// particle collection
	particles = [],
	// starting hue
	hue = 120,
	// when launching fireworks with a click, too many get launched at once without a limiter, one launch per 5 loop ticks
	limiterTotal = 5,
	limiterTick = 0,
	// this will time the auto launches of fireworks, one launch per 80 loop ticks
	timerTotal = 80,
	timerTick = 0,
	mousedown = false,
	// mouse x coordinate,
	mx,
	// mouse y coordinate
	my;

// set canvas dimensions
canvas.width = cw;
canvas.height = ch;

// now we are going to setup our function placeholders for the entire demo

// get a random number within a range
function random(min, max) {
	return Math.random() * (max - min) + min;
}

// calculate the distance between two points
function calculateDistance(p1x, p1y, p2x, p2y) {
	var xDistance = p1x - p2x,
		yDistance = p1y - p2y;
	return Math.sqrt(Math.pow(xDistance, 2) + Math.pow(yDistance, 2));
}

// create firework
function Firework(sx, sy, tx, ty) {
	// actual coordinates
	this.x = sx;
	this.y = sy;
	// starting coordinates
	this.sx = sx;
	this.sy = sy;
	// target coordinates
	this.tx = tx;
	this.ty = ty;
	// distance from starting point to target
	this.distanceToTarget = calculateDistance(sx, sy, tx, ty);
	this.distanceTraveled = 0;
	// track the past coordinates of each firework to create a trail effect, increase the coordinate count to create more prominent trails
	this.coordinates = [];
	this.coordinateCount = 3;
	// populate initial coordinate collection with the current coordinates
	while (this.coordinateCount--) {
		this.coordinates.push([this.x, this.y]);
	}
	this.angle = Math.atan2(ty - sy, tx - sx);
	this.speed = 2;
	this.acceleration = 1.05;
	this.brightness = random(50, 70);
	// circle target indicator radius
	this.targetRadius = 1;
}

// update firework
Firework.prototype.update = function (index) {
	// remove last item in coordinates array
	this.coordinates.pop();
	// add current coordinates to the start of the array
	this.coordinates.unshift([this.x, this.y]);

	// cycle the circle target indicator radius
	if (this.targetRadius < 8) {
		this.targetRadius += 0.3;
	} else {
		this.targetRadius = 1;
	}

	// speed up the firework
	this.speed *= this.acceleration;

	// get the current velocities based on angle and speed
	var vx = Math.cos(this.angle) * this.speed,
		vy = Math.sin(this.angle) * this.speed;
	// how far will the firework have traveled with velocities applied?
	this.distanceTraveled = calculateDistance(this.sx, this.sy, this.x + vx, this.y + vy);

	// if the distance traveled, including velocities, is greater than the initial distance to the target, then the target has been reached
	if (this.distanceTraveled >= this.distanceToTarget) {
		createParticles(this.tx, this.ty);
		// remove the firework, use the index passed into the update function to determine which to remove
		fireworks.splice(index, 1);
	} else {
		// target not reached, keep traveling
		this.x += vx;
		this.y += vy;
	}
}

// draw firework
Firework.prototype.draw = function () {
	ctx.beginPath();
	// move to the last tracked coordinate in the set, then draw a line to the current x and y
	ctx.moveTo(this.coordinates[this.coordinates.length - 1][0], this.coordinates[this.coordinates.length - 1][1]);
	ctx.lineTo(this.x, this.y);
	ctx.strokeStyle = 'hsl(' + hue + ', 100%, ' + this.brightness + '%)';
	ctx.stroke();

	ctx.beginPath();
	// draw the target for this firework with a pulsing circle
	ctx.arc(this.tx, this.ty, this.targetRadius, 0, Math.PI * 2);
	ctx.stroke();
}

// create particle
function Particle(x, y) {
	this.x = x;
	this.y = y;
	// track the past coordinates of each particle to create a trail effect, increase the coordinate count to create more prominent trails
	this.coordinates = [];
	this.coordinateCount = 5;
	while (this.coordinateCount--) {
		this.coordinates.push([this.x, this.y]);
	}
	// set a random angle in all possible directions, in radians
	this.angle = random(0, Math.PI * 2);
	this.speed = random(1, 10);
	// friction will slow the particle down
	this.friction = 0.95;
	// gravity will be applied and pull the particle down
	this.gravity = 1;
	// set the hue to a random number +-50 of the overall hue variable
	this.hue = random(hue - 50, hue + 50);
	this.brightness = random(50, 80);
	this.alpha = 1;
	// set how fast the particle fades out
	this.decay = random(0.015, 0.03);
}

// update particle
Particle.prototype.update = function (index) {
	// remove last item in coordinates array
	this.coordinates.pop();
	// add current coordinates to the start of the array
	this.coordinates.unshift([this.x, this.y]);
	// slow down the particle
	this.speed *= this.friction;
	// apply velocity
	this.x += Math.cos(this.angle) * this.speed;
	this.y += Math.sin(this.angle) * this.speed + this.gravity;
	// fade out the particle
	this.alpha -= this.decay;

	// remove the particle once the alpha is low enough, based on the passed in index
	if (this.alpha <= this.decay) {
		particles.splice(index, 1);
	}
}

// draw particle
Particle.prototype.draw = function () {
	ctx.beginPath();
	// move to the last tracked coordinates in the set, then draw a line to the current x and y
	ctx.moveTo(this.coordinates[this.coordinates.length - 1][0], this.coordinates[this.coordinates.length - 1][1]);
	ctx.lineTo(this.x, this.y);
	ctx.strokeStyle = 'hsla(' + this.hue + ', 100%, ' + this.brightness + '%, ' + this.alpha + ')';
	ctx.stroke();
}

// create particle group/explosion
function createParticles(x, y) {
	// increase the particle count for a bigger explosion, beware of the canvas performance hit with the increased particles though
	var particleCount = 30;
	while (particleCount--) {
		particles.push(new Particle(x, y));
	}
}

// main demo loop
function loop() {
	// this function will run endlessly with requestAnimationFrame
	requestAnimFrame(loop);

	// increase the hue to get different colored fireworks over time
	//hue += 0.5;

	// create random color
	hue = random(0, 360);

	// normally, clearRect() would be used to clear the canvas
	// we want to create a trailing effect though
	// setting the composite operation to destination-out will allow us to clear the canvas at a specific opacity, rather than wiping it entirely
	ctx.globalCompositeOperation = 'destination-out';
	// decrease the alpha property to create more prominent trails
	ctx.fillStyle = 'rgba(0, 0, 0, 0.5)';
	ctx.fillRect(0, 0, cw, ch);
	// change the composite operation back to our main mode
	// lighter creates bright highlight points as the fireworks and particles overlap each other
	ctx.globalCompositeOperation = 'lighter';

	// loop over each firework, draw it, update it
	var i = fireworks.length;
	while (i--) {
		fireworks[i].draw();
		fireworks[i].update(i);
	}

	// loop over each particle, draw it, update it
	var i = particles.length;
	while (i--) {
		particles[i].draw();
		particles[i].update(i);
	}

	// launch fireworks automatically to random coordinates, when the mouse isn't down
	if (timerTick >= timerTotal) {
		if (!mousedown) {
			// start the firework at the bottom middle of the screen, then set the random target coordinates, the random y coordinates will be set within the range of the top half of the screen
			fireworks.push(new Firework(cw / 2, ch, random(0, cw), random(0, ch / 2)));
			timerTick = 0;
		}
	} else {
		timerTick++;
	}

	// limit the rate at which fireworks get launched when mouse is down
	if (limiterTick >= limiterTotal) {
		if (mousedown) {
			// start the firework at the bottom middle of the screen, then set the current mouse coordinates as the target
			fireworks.push(new Firework(cw / 2, ch, mx, my));
			limiterTick = 0;
		}
	} else {
		limiterTick++;
	}
}

// mouse event bindings
// update the mouse coordinates on mousemove
canvas.addEventListener('mousemove', function (e) {
	mx = e.pageX - canvas.offsetLeft;
	my = e.pageY - canvas.offsetTop;
});

// toggle mousedown state and prevent canvas from being selected
canvas.addEventListener('mousedown', function (e) {
	e.preventDefault();
	mousedown = true;
});

canvas.addEventListener('mouseup', function (e) {
	e.preventDefault();
	mousedown = false;
});

// 彈幕
let bulletBtn = document.getElementById('switch');
bulletBtn.addEventListener('click', function() {
	// 點擊隱藏彈幕
	let bullet = document.getElementById('bullet');
	bullet.classList.toggle('hide');
})

// once the window loads, we are ready for some fireworks!
window.onload = loop;

