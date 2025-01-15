/* 
*
* toggle counter...
* Counts amount of clicks
*
*/

const toggle = document.getElementById("mode-toggle");
const counter = document.getElementById("counter");
let i = 0;

toggle.addEventListener("click", function() {
   i++;
   counter.innerHTML = i;
});