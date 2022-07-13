let settings = document.getElementById('settingsIcon');
let loginText = document.getElementById('loginOut').textContent;
if(!(loginText === 'Log out')){
    settings.style.display = "none";
}else{
    settings.style.display = "flex";
}
// console.log(loginText);