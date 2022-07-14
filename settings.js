let settingsIcon = document.getElementById('settingsIcon');
let loginText = document.getElementById('loginOut').textContent;
let settingsMenu = document.querySelector('.settingsMenu');

if(!(loginText === 'Log out')){
    settingsIcon.style.display = "none";
}else{
    settingsIcon.style.display = "flex";
}
settingsIcon.addEventListener('mouseover',()=>{
    settingsMenu.classList.add('settingsMenuOpen');
})
settingsMenu.addEventListener("mouseleave",()=>{
    settingsMenu.classList.remove('settingsMenuOpen');
})
// console.log(settingsMenu.classList);

// console.log(settings);
// console.log(loginText);