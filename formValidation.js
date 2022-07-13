if (!window.location.href.includes('index')) {   
    document.getElementById('submit').addEventListener('click',function (e){
        let username = document.getElementById('username');
    let password = document.getElementById('password');
    let errorPassword = document.getElementById('errorPassword');
    let errorUsername = document.getElementById('errorUsername');
    let email = document.getElementById('email');
    let errorEmail = document.getElementById('errorEmail');
    
    //username check
    if (/^[A-Za-z0-9_-]*$/.test(username.value)&&username.value.length >6) {
        console.log(username.value);    
        errorUsername.innerText = '';
    }else{
        errorUsername.innerText = 'Username must be longer than 6 characters and contain only letters, numbers, underscores and dashes';
        console.log('username cant contain spaces');
        e.preventDefault();
        
    }
    //password check
    if (/^[A-Za-z0-9_-]*$/.test(password.value)&&password.value.length >6) {
        console.log(password.value);
        errorPassword.innerText = '';
    }else{
        errorPassword.innerText = 'Password must be longer than 6 characters and contain only letters, numbers, underscores and dashes';
        console.log('password cant contain spaces');
        e.preventDefault();
    }
    //email check
    if(email != null){

        if ( /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/g.test(email.value)) {
            console.log(email.value);
            errorEmail.innerText='';
        }else{
            errorEmail.innerText = 'E-mail must contain a dot and an @ symbol';
            e.preventDefault();
            
        }
    }
    
}
)
        }