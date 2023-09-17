let open_mobile_menu = document.querySelector('.open-menu');
let close_mobile_menu = document.querySelector('.close-menu');
let large_menu = document.querySelector('.large');

function first(){
    open_mobile_menu.style.display = "none";
    close_mobile_menu.style.display = "block";
    large_menu.style.display = "block";
}
function second(){
    open_mobile_menu.style.display = "block";
    close_mobile_menu.style.display = "none";
    large_menu.style.display = "none";
}

// let dropdown_toggle = document.querySelector('.dropdown-toggle');
// let dropdown_menu = document.querySelector('.dropdown-menu');
// if(dropdown_toggle){
//     dropdown_toggle.addEventListener('mouseover', function(){
//         dropdown_menu.style.display = "block";
//     })
// }