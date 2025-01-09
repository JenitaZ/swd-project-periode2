/* 
*
* toggle counter
*
*
*/

const toggle = document.getElementById("mode-toggle");
const counter = document.getElementById("counter");
let i = 0;

// let countDisplay = document.getElementById("count");
toggle.addEventListener("click", function() {
   i++;
   counter.innerHTML = i;
});