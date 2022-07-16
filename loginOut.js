// console.log(window.location.href); 
let loggedin = JSON.parse(window.localStorage.getItem('logStatus'));
if (window.location.href === 'http://localhost/PROJEKAT/index.php?success=loggedin') {
     loggedin = true;
}else if(window.location.href === 'http://localhost/PROJEKAT/index.php?loggedout=true'){
    loggedin = false;
}
console.log(loggedin);
if (loggedin) {
    document.getElementById('logout').innerText = 'Log out';
    document.getElementById('logout').style.color = 'white';
    document.getElementById('logout').style.fontSize = '20px';
    document.getElementById('logout').href = 'includes/logout.php';
    document.getElementById('login').textContent = '';
    document.getElementById('login').href = '';
}else {
    document.getElementById('login').textContent = 'Log in';
    document.getElementById('login').href = 'login.php';
}
window.localStorage.setItem('logStatus',loggedin);
window.onbeforeunload = function(){
    window.localStorage.setItem('logStatus', false )
}