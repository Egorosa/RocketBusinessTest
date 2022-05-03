// function changeClass(div)
// {
//     var div = document.getElementById('modal');
//     if(div.style.display == 'block') {
//         div.style.display = 'none';
//     }
//     else {
//         div.style.display = 'block';
//     }
// }
//    div.className 
//    //не надо делать поиск по айди
// }


document.getElementById("modalbutton").onclick = function () {
  document.getElementById("modal").classList.toggle("modal-window");
  
};