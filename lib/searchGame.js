/* 
*
* zoekbalk in gamesoverzicht
*
* For loop checks if 'input' matches letters in '.game-title'
* Also set everything to lowercase so capitalisation doesn't cause issues
*/

function search_game() {
    let input = document.getElementById('search').value
    input = input.toLowerCase();
    let x = document.getElementsByClassName('game-title');

    for (i = 0; i < x.length; i++) {     
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            document.getElementsByClassName('show')[i].style.display = "none";
        }
        else {
            document.getElementsByClassName('show')[i].style.display = "inline";
        }
    }
}