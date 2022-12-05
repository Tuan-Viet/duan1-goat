const form_address_add = document.querySelector('.form_address-add');
const form_address_edit = document.querySelector('.form_address-edit');
const address_add = document.querySelector('.address_add');
const cancel = document.querySelector('.cancel');
const icon_open = document.querySelector('.icon_open');
const nav_address = document.querySelector('.nav_address');
// console.log(address_add);

if(address_add){
    address_add.addEventListener('click',function(event){
        event.preventDefault();
        if(form_address_add.style.display == "none"){
            form_address_add.style.display = "block";
        }else {
            form_address_add.style.display = "none";
        }
    })
}

cancel.addEventListener('click',function(event){
    event.preventDefault();
    form_address_add.style.display = "none";
})