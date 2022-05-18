document.body.addEventListener("mousemove", (event) => {
    document.querySelector('.tooltip').style.transform = `translateY(calc(${event.y}px - 15px)) translateX(calc(${event.x}px + 25px))`;
    document.querySelector('.tooltip').style.left = `0`;
    if (document.querySelector('.tooltip').getBoundingClientRect().left + document.querySelector('.tooltip').offsetWidth > window.innerWidth - 36) {
        document.querySelector('.tooltip').style.transform = `translateY(calc(${event.y}px + 15px)) translateX(calc(${event.x}px - 15px - ${document.querySelector('.tooltip').offsetWidth}px))`;
    }
    if (document.querySelector('.tooltip').getBoundingClientRect().left < 20) {
        document.querySelector('.tooltip').style.left = `20px`;
        document.querySelector('.tooltip').style.transform = `translateY(calc(${event.y}px + 15px)) translateX(0px)`;
    }
});

function tooltipOn(authorInclusiveWord, author, title, feedback, availabilily, warn = false) {
    document.querySelector('.tooltip').style.display = 'block';
    document.querySelector('.tooltip').innerHTML = '<p>' + authorInclusiveWord + ' : ' + author + '<br>Titre : ' + title + '<br>Critique : ' + feedback + '<br>Disponibilité : ' + availabilily + '</p>';
}

function tooltipOff() {
    document.querySelector('.tooltip').style.display = 'none';
    document.querySelector('.tooltip').innerHTML = '';
}