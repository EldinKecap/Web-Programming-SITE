if (window.location.href.includes('addProduct.php')) {   
    console.log('suususususs');
    document.getElementById('submit').addEventListener('click',function (e){
    let productName = document.getElementById('productName');
    let productDescription = document.getElementById('productDescription');
    let errorProductDescription = document.getElementById('errorProductDescription');
    let errorProductName = document.getElementById('errorProductName');
    let contactInfo = document.getElementById('contactInfo');
    let errorContactInfo = document.getElementById('errorContactInfo');

    //productName check
    if (/^[A-Za-z0-9_-]*$/.test(productName.value)&&productName.value.length < 150 && productName.value.length > 3 ) {
        console.log(productName.value);    
        errorProductName.innerText = '';
    }else{
        errorProductName.innerText = 'Product name must be longer than 3 character and shorter than 150 characters and contain only letters, numbers, underscores and dashes';
        console.log('Product name cant contain spaces');
        e.preventDefault();
        
    }
    //productDescription check
    if (/^[A-Za-z0-9_-]*$/.test(productDescription.value)&&productDescription.value.length > 3 && productDescription.value.length < 255 ) {
        console.log(productDescription.value);
        errorProductDescription.innerText = '';
    }else{
        errorProductDescription.innerText = 'Product Description must be longer than 3 characters, shorter than 255 characters and contain only letters, numbers, underscores and dashes';
        console.log('productDescription cant contain spaces');
        e.preventDefault();
    }
    //Contact info check
    if (/^[A-Za-z0-9_-]*$/.test(contactInfo.value)&&contactInfo.value.length > 3 && contactInfo.value.length < 50 ) {
        console.log(contactInfo.value);
        errorContactInfo.innerText = '';
    }else{
        errorContactInfo.innerText = 'Contact Info must be longer than 3 characters, shorter than 50 255characters and contain only letters, numbers, underscores and dashes';
        console.log('contactInfo cant contain spaces');
        e.preventDefault();
    }
    
}
)
        }