
let changePwBtn = document.querySelector('.changePasswordButton');
let clsBtn = document.querySelector('.closeNewPassword');
let changePasswordDiv = document.querySelector('.changePassword');
let submitChangedPassword = document.querySelector('#submitChangedPassword');
let oldPassword = document.getElementById('oldPassword');
let newPassword = document.getElementById('newPassword');
let errorOldPassword = document.getElementById('errorOldPassword');
let errorNewPassword = document.getElementById('errorNewPassword');

if (window.location.href.includes('error=oldPasswordDidNotMatch')) {
    changePasswordDiv.classList.add('changePasswordClicked');
    errorOldPassword.innerText = 'You have entered wrong password';
}else if(window.location.href.includes('success=changedPassword')){
    changePasswordDiv.classList.add('changePasswordClicked');
    errorOldPassword.innerText = 'You have changed your password';
}

console.log(oldPassword.value);

submitChangedPassword.addEventListener('click',function(e){
     if (/^[A-Za-z0-9_-]*$/.test(oldPassword.value)&&oldPassword.value.length >6) {
        console.log(oldPassword.value);
        errorOldPassword.innerText = '';
    }else{
        errorOldPassword.innerText = 'Password must be longer than 6 characters and contain only letters, numbers, underscores and dashes';
        console.log('password cant contain spaces');
        e.preventDefault();
    }
    if (/^[A-Za-z0-9_-]*$/.test(newPassword.value)&&newPassword.value.length >6) {
        console.log(newPassword.value);
        errorNewPassword.innerText = '';
    }else{
        errorNewPassword.innerText = 'Password must be longer than 6 characters and contain only letters, numbers, underscores and dashes';
        console.log('password cant contain spaces');
        e.preventDefault();
    }
})

changePwBtn.addEventListener('click',()=>{
    changePasswordDiv.classList.add('changePasswordClicked');
    
})

clsBtn.addEventListener('click',()=>{
    changePasswordDiv.classList.remove('changePasswordClicked');
    errorOldPassword.innerText = '';
})