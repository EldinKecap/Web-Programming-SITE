console.log(window.location.href); 
let loggedin = window.localStorage.getItem('logStatus');
if (window.location.href === 'http://localhost/PROJEKAT/index.php?success=loggedin') {
     loggedin = true;
}
if (loggedin) {
    document.getElementById('loginOut').textContent = 'Log out';
    document.getElementById('loginOut').href = 'logout.php';

}
window.localStorage.setItem('logStatus',loggedin);