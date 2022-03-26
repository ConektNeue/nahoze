let totalClickCounter;

document.body.onclick = function () {
	totalClickCounter++;
}

let classOfNewSms = 0;

function createSms(textbarValue, warn = false){
	classOfNewSms++;
	let sms = document.createElement('DIV');
	let smsContent = document.createElement('P');
	smsContent.innerText = textbarValue;
	document.querySelector('.messages').appendChild(sms);
	sms.classList.add('sms');
	sms.classList.add(`sms${classOfNewSms}`);
	document.querySelector(`.sms${classOfNewSms}`).appendChild(smsContent);
	document.querySelector('.messages').scrollTop = document.querySelector('.messages').scrollHeight;
	console.log(sms.offsetWidth);
	if (sms.offsetWidth < 325){
		sms.style.textAlign = "left";
		sms.style.whiteSpace = "nowrap";
	} else if (sms.offsetWidth >= 325){
		sms.style.width = "325px";
	}
  if(warn === true){
    sms.classList.add('warnsms');
    // let img = document.createElement('IMG');
    // img.setAttribute("src", "./assets/img/piano.jpg");
    // img.setAttribute("onclick", "displayImage('./assets/img/piano.jpg')");
    // document.querySelector(`.sms${classOfNewSms}>p`).appendChild(img);
  }
}

createSms("Traversez l'océan pacifique du warp de l'océanie jusqu'au sumatra et définissez votre home à sumathe !", true);

document.getElementById('smsSubmitBtn').onclick = function(){
  sendSms();
}

function sendSms(){
    let textbarValue = document.querySelector('.textbar').value;
    if (textbarValue === "<getScreenWidth") {
        createSms(screen.width);
    } else if ((textbarValue === "Aeh") || (textbarValue === "aeh")) {
        createSms("Reloading...");
        setTimeout("reload()", 500);
    }
    if ((document.querySelector('.textbar').value.length > 0) && (document.querySelector('.textbar').value.length < 200)) {
        createSms(textbarValue);
    }
}

document.addEventListener('keydown', function(event) {
    if(event.keyCode == 38) {
        sendSms();
    }
    else if(event.keyCode == 13) {
        sendSms();
    }
});

let smsNumberForGetOffsetheight = 0;
document.querySelector('.textbar').onmouseover = function(){
	document.querySelector('.textbar').focus();
	if (screen.width < 450){
		document.getElementById('smsSubmitBtn').style.borderRadius = '0';
		document.getElementById('smsSubmitBtn').style.margin = '0';
		document.getElementById('smsSubmitBtn').style.width = '100%';
	}
 	// document.querySelector('.messages').scrollTop = document.querySelector('.messages').scrollHeight;
}

document.querySelector('.textbar').onmouseout = function(){
	document.querySelector('.textbar').blur();
	if (screen.width < 450){
		document.getElementById('smsSubmitBtn').style.borderRadius = '0 60px 60px 0';
		document.getElementById('smsSubmitBtn').style.margin = '0 25px 25px 0';
		document.getElementById('smsSubmitBtn').style.width = '100px';
	}
  // document.querySelector('.messages').style.transform = 'translateY(0px)';
}

function displayImage(imgSrc){
	document.querySelector('.black-screen').style.display = 'flex';
	document.querySelector('.black-screen').innerHTML = `<img style="max-width: 75%; max-height: 75%; animation: blackScreenImage 1s;" src="${imgSrc}">`;
}

document.querySelector('.black-screen').onclick = function(){
	document.querySelector('.burger-menu').style.transition = '0s';
	document.querySelector('.burger-menu').style.transform = 'translateX(0px)';
	document.querySelector('.black-screen').style.display = 'none';
	burgerMenuEstate = false;
}

let burgerMenuEstate = false;
document.querySelector('.toggle-burger-menu').onclick = function(){
	if (burgerMenuEstate === false){
		document.querySelector('.burger-menu').style.transition = '.5s';
		document.querySelector('.burger-menu').style.transform = 'translateX(-310px)';
		document.querySelector('.black-screen').style.display = 'flex';
		document.querySelector('.black-screen').innerHTML = '';
	document.querySelector('.frame-one').style.opacity = '1';
		burgerMenuEstate = true;
	} else {
		document.querySelector('.burger-menu').style.transition = '0s';
		document.querySelector('.burger-menu').style.transform = 'translateX(0px)';
		document.querySelector('.black-screen').style.display = 'none';
    document.querySelector('.frame-one').style.opacity = '0';
		burgerMenuEstate = false;
	}
}

// Box.

document.getElementById('btnOpenAppareanceFrameTwo').onclick = function(){
	document.querySelector('.frame-one').style.transform = 'translateX(-100%)';
	document.querySelector('.frame-one').style.opacity = '0';
	document.querySelector('.appearenceBox').style.transform = 'translateX(0%)';
	document.querySelector('.appearenceBox').style.opacity = '1';
}

document.getElementById('btnBackFrameTwoAppareance').onclick = function(){
	document.querySelector('.frame-one').style.transform = 'translateX(0%)';
	document.querySelector('.frame-one').style.opacity = '1';
	document.querySelector('.appearenceBox').style.transform = 'translateX(100%)';
	document.querySelector('.appearenceBox').style.opacity = '0';
}

document.getElementById('btnOpenAcercadeFrameTwo').onclick = function(){
	document.querySelector('.frame-one').style.transform = 'translateX(-100%)';
	document.querySelector('.frame-one').style.opacity = '0';
	document.querySelector('.acercadeBox').style.transform = 'translateX(0%)';
	document.querySelector('.acercadeBox').style.opacity = '1';
}

document.getElementById('btnBackFrameTwoAcercade').onclick = function(){
	document.querySelector('.frame-one').style.transform = 'translateX(0%)';
	document.querySelector('.frame-one').style.opacity = '1';
	document.querySelector('.acercadeBox').style.transform = 'translateX(100%)';
	document.querySelector('.acercadeBox').style.opacity = '0';
}

document.getElementById('btnOpenChangelogFrameThree').onclick = function(){
	document.querySelector('.acercadeBox').style.transform = 'translateX(-100%)';
	document.querySelector('.acercadeBox').style.opacity = '0';
	document.querySelector('.changelogBox').style.transform = 'translateX(0%)';
	document.querySelector('.changelogBox').style.opacity = '1';
}

document.getElementById('btnBackFrameTwoChangelogBox').onclick = function(){
	document.querySelector('.acercadeBox').style.transform = 'translateX(0%)';
	document.querySelector('.acercadeBox').style.opacity = '1';
	document.querySelector('.changelogBox').style.transform = 'translateX(100%)';
	document.querySelector('.changelogBox').style.opacity = '0';
}

// Box --

document.getElementById('toggleDarkTheme').onclick = function(){
	document.querySelector("meta[name=theme-color]").setAttribute("content", "#7f7f7fbf");
	toggleDarkTheme();
	// setTimeout("reload()", 1000);
}

function reload(){
	location.href = './index.php';
}

function titlebarColorWhite(){
	document.querySelector("meta[name=theme-color]").setAttribute("content", "#ffffff");
}

function titlebarColorBlack(){
	document.querySelector("meta[name=theme-color]").setAttribute("content", "#333333");
}

let styleCssSheet = document.getElementById('style');
let darkThemeCssSheet = document.getElementById('darkTheme');
let toggleDarkThemeBooleanIndicator = false;

if (localStorage.getItem('dark-theme') === 'true'){
	toggleDarkTheme();
} else {
	titlebarColorWhite();
}

function toggleDarkTheme(){
	if(toggleDarkThemeBooleanIndicator === true){
		styleCssSheet.disabled = undefined;
		darkThemeCssSheet.disabled = "disabled";
		titlebarColorWhite();
		document.getElementById('toggleDarkTheme').innerHTML = '<img  src="./img/toggle_off_96px.png">';
		localStorage.setItem('dark-theme', 'false');
		toggleDarkThemeBooleanIndicator = false;
	} else {
		styleCssSheet.disabled = "disabled";
		darkThemeCssSheet.disabled = undefined;
		titlebarColorBlack();
		document.getElementById('toggleDarkTheme').innerHTML = '<img  src="./img/toggle_on_96px.png">';
		localStorage.setItem('dark-theme', 'true');
		toggleDarkThemeBooleanIndicator = true;
	}
}

// document.querySelector('#dropdownChangeStyleTextbar>#squared').onclick = function(){
// 	document.querySelector('#btnChangeStyleTextbar>p').innerText = 'Squared';
// 	document.getElementById('dropdownChangeStyleTextbar').style.display = 'none';
// 	document.querySelector('.textbar').style.width = 'calc(100% - 96px)';
// 	document.querySelector('.textbar').style.borderRadius = '0px';
// 	btnChangeStyleTextbarIndicator = false;
// }

// document.querySelector('#dropdownChangeStyleTextbar>#rounded').onclick = function(){
// 	document.querySelector('#btnChangeStyleTextbar>p').innerText = 'Rounded';
// 	document.getElementById('dropdownChangeStyleTextbar').style.display = 'none';
// 	document.querySelector('.textbar').style.width = 'calc(100% - 220px)';
// 	document.querySelector('.textbar').style.borderRadius = '60px 0 0 60px';
// 	btnChangeStyleTextbarIndicator = false;
// }

setTimeout('dnoneDisclaimer()', 0);

document.querySelector('.messages').style.transition = '0s';
document.querySelector('.messages').style.transform = 'translateY(' + document.querySelector('.disclaimer').offsetHeight + 'px)';

function dnoneDisclaimer(){
  document.querySelector('.disclaimer').style.transform = 'translateY(-100%)';
  document.querySelector('.disclaimer>.content').style.transform = 'translateY(-100px)';
//   document.querySelector('.messages').style.transition = '1.5s';
  document.querySelector('.messages').style.transform = 'translateY(0px)';
}