console.log(window.location.href); 
let loggedin = window.localStorage.getItem('logStatus');
if (window.location.href === 'http://localhost/PROJEKAT/index.php?success=loggedin') {
     loggedin = true;
}else if(window.location.href === 'http://localhost/PROJEKAT/index.php?loggedout=true'){
    loggedin = false;
}
if (loggedin) {
    document.getElementById('loginOut').textContent = 'Log out';
    document.getElementById('loginOut').href = 'includes/logout.php';
}else {
    document.getElementById('loginOut').textContent = 'Log in';
    document.getElementById('loginOut').href = 'login.php';
}
window.localStorage.setItem('logStatus',loggedin);