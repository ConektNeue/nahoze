let accountsURL = 'https://entpp.conekt.repl.co/accounts.json';
let jsonData = null;
let badges;
let realPassword;
let accounts;
let posts;

let email = document.getElementById('email');
let password = document.getElementById('password');

function findProp(obj, prop, defval) {
    if (typeof defval == 'undefined')
        defval = null;
    prop = prop.split('.');
    for (var i = 0; i < prop.length; i++) {
        if (typeof obj[prop[i]] == 'undefined')
            return defval;
        obj = obj[prop[i]];
    }
    return obj;
}

function sendRequest(url, props, option, page='user-home') {
    console.log('props: ' + props);
    let request = new XMLHttpRequest();
    request.open('GET', url);
    request.responseType = 'json';
    request.send();

    request.onload = function() {
        jsonData = request.response;
        let localProps = 'accounts.' + props;
        let propName = 'accounts.' + props + '.name';
        let propAvatar = 'accounts.' + props + '.avatar';
        let propBanner = 'accounts.' + props + '.banner';
        let propBadge = 'accounts.' + props + '.badge';
        // findProp(jsonData, propName);
        if (option === 'password') {
            realPassword = findProp(jsonData, localProps);
        } else if (option === 'userpage') {
            console.log(page);
            document.querySelector('.' + page + '>.avatar').style.backgroundImage = 'url(' + findProp(jsonData, propAvatar) + ')';
            if (findProp(jsonData, propBanner) !== null) {
                document.querySelector('.' + page + '>.banner').style.backgroundImage = 'url(' + findProp(jsonData, propBanner) + ')';
                document.querySelector('.' + page + '>.banner').style.backgroundPosition = 'center';
                document.querySelector('.' + page + '>.banner').style.backgroundSize = 'cover';
                document.querySelector('.' + page + '>.banner').style.backgroundRepeat = 'no-repeat';
                document.querySelector('.' + page + '>.banner').style.height = '120px';
            } else {
                document.querySelector('.' + page + '>.banner').style.background = 'black';
                document.querySelector('.' + page + '>.banner').style.height = '60px';
            }
            document.querySelector('.' + page + '>.content>.username').innerText = findProp(jsonData, propName);
            console.log(findProp(jsonData, propBadge));
            if (page === 'user-home') {
                createBtnSeenews();
            }
            badges = findProp(jsonData, propBadge);
        }
    }
}

document.getElementById('btn-submit').addEventListener('click', function() {
    if ((localStorage.getItem('user') !== null && localStorage.getItem('password') !== null) && (email.value === '' || password.value === '')) {
        initializeSession(localStorage.getItem('user'));
    } else if (email.value === '' || password.value === '') {
        alert('Veuillez remplir tous les champs.');
    } else {
        login();
    }
});

function login() {
    let props = email.value + '.password';
    sendRequest(accountsURL, props, 'password');
    if (realPassword === password.value) {
        localStorage.setItem('user', email.value);
        localStorage.setItem('password', password.value);
        initializeSession(email.value);
        // }
    } else {
        alert('Email ou mot de passe incorrect.');
        // alert(email.value + ' ' + password.value);
        // alert(realPassword);
    }
}

function initializeSession(name) {
    document.querySelector('.login').style.display = 'none';
    document.querySelector('.user-home').style.display = 'block';
    sendRequest(accountsURL, name, 'userpage');
}