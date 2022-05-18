document.querySelector('.discover').style.display = 'block';

document.querySelector('.discover').onclick = function () {
    document.querySelector('.discover').style.display = 'none';
    document.querySelector('.lds-default').style.display = 'block';
    setTimeout('goto()', 2000);
}

function goto() {
    location.href = "./stage3/";
}