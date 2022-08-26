function collumnToArrayOfValues(htmlColl,arr){
    for (let index = 0; index < htmlColl.length; index++) {
         arr.push(htmlColl[index].innerHTML);   
    }
}

function gettingDataAndStoringItInAnObject(obj){
    for (const key in obj) {
        let idCollumn = document.getElementsByClassName(key);
        collumnToArrayOfValues(idCollumn,obj[key]);
    }
}

let Accounts = {
    id : [],
    username : [],
    password : [],
    email : [],
    admin : [],

}
//getting data from the acc table

gettingDataAndStoringItInAnObject(Accounts);

// console.log(Accounts);

let adminHtmlCollection = document.getElementsByClassName('admin');

for (let i = 0; i < Accounts.admin.length; i++) {
    if(Accounts.admin[i]=="Make Admin"){
        adminHtmlCollection[i].addEventListener('click',()=>{
            window.location.href = window.location.href.replace(/adminPage.php(.*)/,'includes/makeAdmin.php?id='+ Accounts.id[i] );
        })
    }
}