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

let Products = {
  id : [],
  productName : [],
  contact : [],
  description : [],
  delete : [],

}
//getting data from the acc table

gettingDataAndStoringItInAnObject(Products);

// console.log(Products);

let deleteHtmlCollection = document.getElementsByClassName('delete');

for (let i = 0; i < Products.delete.length; i++) {
  if(Products.delete[i]=="delete"){
      deleteHtmlCollection[i].addEventListener('click',()=>{
          window.location.href = window.location.href.replace(/shop.php(.*)/,'includes/deletePost.php?id='+ Products.id[i] );
      })
  }
}

//Sorting table
th = document.getElementsByTagName('th');

for(let c=0; c < th.length; c++){

    th[c].addEventListener('click',item(c));
    console.log(th[c]);
}


function item(c){

    return function(){
      console.log(c)
      sortTable(c)
    }
}


function sortTable(c) {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("productsTable");
  switching = true;
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[c];
      y = rows[i + 1].getElementsByTagName("TD")[c];
      //check if the two rows should switch place:
      if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
        //if so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}