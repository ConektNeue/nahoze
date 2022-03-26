setTimeout('dnoneDisclaimer()', 15000);
document.querySelector('.menu-bar').style.transform = 'translateY(' + document.querySelector(".disclaimer").offsetHeight + 'px)';
document.querySelector('.ui-standard').style.transform = 'translateY(' + document.querySelector(".disclaimer").offsetHeight + 'px)';
document.querySelector('.menu-bar').style.height = 'calc(100% - ' + document.querySelector(".disclaimer").offsetHeight + 'px)';
document.querySelector('.ui-standard').style.height = 'calc(100% - ' + document.querySelector(".disclaimer").offsetHeight + 'px)';

function dnoneDisclaimer(){
    document.querySelector('.disclaimer').style.transform = 'translateY(-100%)';
    document.querySelector('.disclaimer>.content').style.transform = 'translateY(-100px)';
    document.querySelector('.menu-bar').style.transition = '1.5s';
    document.querySelector('.menu-bar').style.transform = 'translateY(0px)';
    document.querySelector('.menu-bar').style.height = '100%';
    document.querySelector('.ui-standard').style.height = '100%';
    document.querySelector('.ui-standard').style.transition = '1.5s';
    document.querySelector('.ui-standard').style.transform = 'translateY(0px)';
}