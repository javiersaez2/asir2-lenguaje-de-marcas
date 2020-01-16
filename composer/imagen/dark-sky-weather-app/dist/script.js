// =================================================
// Stagger Fade-In
// =================================================

function staggerFade() {
	setTimeout(function() {
		$('.fadein-stagger > *').each(function() {
			$(this).addClass('js-animated');
		})
	}, 30);
}


// =================================================
// Skycons
// =================================================

function skycons() {
	var i,
			icons = new Skycons({
				"color" : "#FFFFFF",
				"resizeClear": true
			}),
			list  = [
				"clear-day",
				"clear-night",
				"partly-cloudy-day",
				"partly-cloudy-night",
				"cloudy",
				"rain",
				"sleet",
				"snow",
				"wind",
				"fog"
			];

	for(i = list.length; i--;) {
		var weatherType = list[i],
				elements    = document.getElementsByClassName( weatherType );

		for (e = elements.length; e--;) {
			icons.set(elements[e], weatherType);
		}
	}

	icons.play();
}


// =================================================
// Temperature Converter
// =================================================

function fToC(fahrenheit) {
	var fTemp  = fahrenheit,
			fToCel = (fTemp - 32) * 5 / 9;  

	return fToCel;
}


// =================================================
// Weather Reporter
// =================================================

function weatherReport(latitude, longitude) {
	// Please don't be a dick and steal this API key since
	// I'm sharing example code in the spirit of education.
	var apiKey       = '90102bf0cdb247ff47fce774ef05fbe9',
			url          = 'https://api.darksky.net/forecast/',
			lati         = latitude,
			longi        = longitude,
			api_call     = url + apiKey + "/" + lati + "," + longi + "?extend=hourly&callback=?";

	var days = [
		'Sunday',
		'Monday',
		'Tuesday',
		'Wednesday',
		'Thursday',
		'Friday',
		'Saturday'
	];

	// hold hourly values for each day of the week
	var sunday    = [],
			monday    = [],
			tuesday   = [],
			wednesday = [],
			thursday  = [],
			friday    = [],
			saturday  = [];
	
	var isCelsiusChecked = $('#celsius:checked').length > 0;

	function hourlyReport(day, selector) {
		for(var i = 0, l = day.length; i < l; i++) {
			$("." + selector + " " + "ul").append('<li>' + Math.round(day[i]) + '</li>');
		}
	}

	$.getJSON(api_call, function(forecast) {

		for(var j = 0, k = forecast.hourly.data.length; j < k; j++) {
			var hourly_date    = new Date(forecast.hourly.data[j].time * 1000),
					hourly_day     = days[hourly_date.getDay()],
					hourly_skicons = forecast.hourly.data[j].icon,
					hourly_time    = forecast.hourly.data[j].time,
					hourly_temp    = forecast.hourly.data[j].temperature;

			if(isCelsiusChecked) {
				hourly_temp = fToC(hourly_temp);
				hourly_temp = Math.round((hourly_temp));
			}

			switch(hourly_day) {
				case 'Sunday':
					sunday.push(hourly_temp);
					break;
				case 'Monday':
					monday.push(hourly_temp);
					break;
				case 'Tuesday':
					tuesday.push(hourly_temp);
					break;
				case 'Wednesday':
					wednesday.push(hourly_temp);
					break;
				case 'Thursday':
					thursday.push(hourly_temp);
					break;
				case 'Friday':
					friday.push(hourly_temp);
					break;
				case 'Saturday':
					saturday.push(hourly_temp);
					break;
				default: console.log(hourly_date.toLocaleTimeString());
					break;
			}
		}


		for(var i = 0, l = forecast.daily.data.length; i < l - 1; i++) {

			var date     = new Date(forecast.daily.data[i].time * 1000),
					day      = days[date.getDay()],
					skicons  = forecast.daily.data[i].icon,
					time     = forecast.daily.data[i].time,
					humidity = forecast.daily.data[i].humidity,
					summary  = forecast.daily.data[i].summary,
					temp    = Math.round(forecast.hourly.data[i].temperature),
					tempMax = Math.round(forecast.daily.data[i].temperatureMax);

			if(isCelsiusChecked) {
				temp    = fToC(temp);
				tempMax = fToC(tempMax);
				temp = Math.round(temp);
				tempMax = Math.round(tempMax);
			}

			$("#forecast").append(
				'<li class="shade-'+ skicons +'"><div class="flip-container"><div class="flipper"><div class="front card"><div>' +
					"<div class='graphic'><canvas class=" + skicons + "></canvas></div>" +
					"<div><b>Day</b>: " + date.toLocaleDateString() + "</div>" +
					"<div><b>Temperature</b>: " + temp + "</div>" +
					"<div><b>Max Temp.</b>: " + tempMax + "</div>" +
					"<div><b>Humidity</b>: " + humidity + "</div>" +
					'<p class="summary">' + summary + '</p>' +
					'</div></div><div class="back card">' +
					'<div class="hourly' + ' ' + day + '"><b>24hr Forecast</b><ul class="list-reset"></ul></div></div></div></div></li>'
			);

			switch(day) {
				case 'Sunday':
					hourlyReport(sunday, days[0]);
					break;
				case 'Monday':
					hourlyReport(monday, days[1]);
					break;
				case 'Tuesday':
					hourlyReport(tuesday, days[2]);
					break;
				case 'Wednesday':
					hourlyReport(wednesday, days[3]);
					break;
				case 'Thursday':
					hourlyReport(thursday, days[4]);
					break;
				case 'Friday':
					hourlyReport(friday, days[5]);
					break;
				case 'Saturday':
					hourlyReport(saturday, days[6]);
					break;
			}
		}

		skycons();
		staggerFade();
	});
}


// =================================================
// Get Weather Button Event
// =================================================

$('button').on('click', function(e) {
	var lat       = $('#latitude').val(),
			long      = $('#longitude').val(),
			city_name = $('#city-search').val()

	if(lat && long !== '') {
		e.preventDefault();

		$('.app').fadeOut(100, function() {
			$('body').append('<button id="back">New Forecast</button><h3 class="city">' + city_name + '</h3><ul class="list-reset fadein-stagger" id="forecast"></ul>');
			weatherReport(lat, long);
		});
	}
});

$('body').on('click', '#back', function() {
	window.location.reload(true);
	$(this).fadeOut(100);
})


// =================================================
// Report City & AutoFill Coords
// =================================================

// Please don't be a dick and steal this API key since
// I'm sharing example code in the spirit of education.
function insertGoogleScript() {
	var google_api = document.createElement('script');
	google_api.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyDvTrJlRYQjtX5-sBdU-EcZak63XzCKkpw&callback=initGoogleAPI&libraries=places,geometry";
	document.body.appendChild(google_api);
}

function initGoogleAPI() {
	var autocomplete = new google.maps.places.SearchBox(document.querySelector("#city-search"));

	autocomplete.addListener('places_changed', function() {
		var place = autocomplete.getPlaces()[0];
		document.querySelector("#latitude").value = place.geometry.location.lat();
		document.querySelector("#longitude").value = place.geometry.location.lng();
	});
}

insertGoogleScript();









let canvas = document.getElementById("canvas"),
    ctx = canvas.getContext("2d"),
	w,
	midX,
	h,
	particles = [];

const Tau = Math.PI * 2,
	  ConnectionDist = 100, 
	  maxParticles = 100, 
	  radius = 3,
      Msqrt = Math.sqrt,
      Mrandom = Math.random;

function handleResize(){
	w = ctx.canvas.width = window.innerWidth;
	h = ctx.canvas.height = window.innerHeight;
	midX = w * .5;
}
window.onresize = () => handleResize();
handleResize();

function createParticles() {
	let vRange = 1.5,
		vMin = .5,
		vx, vy;
	for (let i = 0; i < maxParticles; i++) {
		vx = Mrandom() * vRange + vMin;
		vy = Mrandom() * vRange + vMin;
		if(Mrandom() > .5){ vx *= -1; }
		if(Mrandom() > .5){ vy *= -1; }
		particles.push({
			x: Mrandom() * w - radius,
			y: Mrandom() * h - radius,
			xv: Mrandom() * vx,
			yv: Mrandom() * vy,
			strokeColour: {h:0, s:1}
		});
	}
}

function update() {
	let p;
	for (let loop = particles.length, i = 0; i < loop; i++) {
		p = particles[i];
		// move
		p.x += p.xv;
		p.y += p.yv;
		// keep in bounds
		if (p.x < 0) {
			p.x = 0;
			p.xv *= -1;
		}
		else if (p.x > w) {
			p.x = w;
			p.xv *= -1;
		}
		if (p.y < 0) {
			p.y = 0;
			p.yv *= -1;
		}
		else if (p.y > h) {
			p.y = h;
			p.yv *= -1;
		}
	}
}

function connect(){
	let p1, p2;
	for (let i = 0; i < maxParticles-1; i++) {
		p1 = particles[i];
		for (let j = i + 1; j < maxParticles; j++) {
			p2 = particles[j];
			currentDist = getDistance(p2.x, p1.x, p2.y, p1.y);
			if (currentDist < ConnectionDist) {
				ctx.beginPath();
				ctx.moveTo(p1.x, p1.y);
				ctx.strokeStyle = 'hsla(' + p1.hue + ', 50%, 50%, ' + (1 - currentDist * 0.01) + ')';
				ctx.lineTo(p2.x, p2.y, p1.x, p1.y);
				ctx.stroke();
			}
		}
	}
}

function draw() {
	let p, d;
	for (let loop = particles.length, i = 0; i < loop; i++) {
		p = particles[i];
		d = getDistance(midX, p.x, h, p.y);
		p.hue = d;
		ctx.beginPath();
		ctx.fillStyle = 'hsla(' + d + ' , 50%, 30%, 1)';
		ctx.arc(p.x, p.y, radius, 0, Tau);
		ctx.fill();
	}
}

function getDistance(x1, x2, y1, y2) {
	let a = x1 - x2,
		b = y1 - y2;
	return Msqrt(a * a + b * b);
}

function animate() {
	canvas.width = w;
	update();
	connect();
	draw();
	requestAnimationFrame(animate);
}

createParticles();
animate();