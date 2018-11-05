let link = document.querySelector('.bprofile a');
let business = document.querySelector('.business');

// let business = document.querySelectorAll('.business');

// let links = document.querySelectorAll('.bprofile a');

// for(let busi of business){
//     for(let link of links){
//         busi.onmouseover = () => {
//             link.classList.add('link');
//         }

//         busi.onmouseout = () => {

//         }
//     }
// }


business.onmouseover = function (){
    link.classList.add('link');
}

business.onmouseout = function (){
    link.classList.remove('link');
}
