let darkThemeBooleanIndicator = false;

if (localStorage.getItem('dark-theme') === 'true'){
	darkThemeBooleanIndicator = true;
}

// Functions.

function openModal(modalName){
	document.querySelector('.modal-mask').style.display = 'flex';
	document.querySelector(`.modal-${modalName}`).style.display = 'block';
	document.querySelector("meta[name=theme-color]").setAttribute("content", "#7f7f7fbf");
}

function closeModal(modalName){
	document.querySelector('.modal-mask').style.display = 'none';
	document.querySelector(`.modal-${modalName}`).style.display = 'none';
	if (localStorage.getItem('dark-theme') === 'true'){
		darkThemeBooleanIndicator = true;
	} else {
		darkThemeBooleanIndicator = false;
	}
	if (darkThemeBooleanIndicator === false){
		document.querySelector("meta[name=theme-color]").setAttribute("content", "#ffffff");
	} else {
		document.querySelector("meta[name=theme-color]").setAttribute("content", "#333333");
	}
}

// endsection Functions. Event onclick.

document.querySelector('#btnChangeStyleTextbar').onclick = function(){
	openModal("deletefeature");
}

document.querySelector('.btn-close-modal-deletefeature').onclick = function(){
	closeModal("deletefeature");
}

document.querySelector('.btn-close-modal-physiquechimie').onclick = function(){
	closeModal("physiquechimie");
}

// document.querySelector('.btn-gotogooglescholar-modal-physiquechimie').onclick = function(){
// 	window.open("https://scholar.google.com/schhp?hl=fr&as_sdt=0,5");
// }

// endsection Event onclick.