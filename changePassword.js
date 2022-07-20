let changePwBtn = document.querySelector('.changePasswordButton');
console.log(changePwBtn);
changePwBtn.addEventListener('click',()=>{
    document.querySelector('.changePassword').classList.add('changePasswordClicked')
})