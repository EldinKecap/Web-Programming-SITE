function getUserInput(){
    let username = document.getElementById('username');
    let password = document.getElementById('password');
    let errorPassword = document.getElementById('errorPassword');
    let errorUsername = document.getElementById('errorUsername');
    if (/^[A-Za-z0-9_-]*$/.test(password.value)&&password.value.length >6) {
        console.log(username.value);
        console.log(password.value);
        errorPassword.innerText = '';
    }else{
        errorPassword.innerText = 'Password must be longer than 6 characters and contain only letters, numbers, underscores and dashes';

        console.log('password cant contain spaces');
    }
    if (/^[A-Za-z0-9_-]*$/.test(username.value)&&username.value.length >6) {
        console.log(username.value);
        console.log(username.value);
        errorUsername.innerText = '';
    }else{
        errorUsername.innerText = 'Username must be longer than 6 characters and contain only letters, numbers, underscores and dashes';
        console.log('username cant contain spaces');
    }

}