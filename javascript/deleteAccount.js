let deleteAccBtn = document.querySelector('.deleteAccountBtn');
let deleteAccDiv = document.querySelector('.deleteAccount');
let deleteAccOptionNo = document.querySelector('.no');
let deleteAccOptionYes = document.querySelector('.yes');

deleteAccBtn.addEventListener('click',()=>{
    deleteAccDiv.classList.add('deleteAccountClicked');
    changePasswordDiv.classList.remove('changePasswordClicked');
});

deleteAccOptionNo.addEventListener('click',()=>{
    deleteAccDiv.classList.remove('deleteAccountClicked');
    console.log("sdsd");
});

deleteAccOptionYes.addEventListener('click',()=>{
    console.log(window.location.href);
    window.location.href = window.location.href.replace(/index.php(.*)/,'includes/deleteAccount.php');
     console.log(window.location.href);
})