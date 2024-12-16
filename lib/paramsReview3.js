/*
* game review 3
* JS pagina's ||  Nier: automata en stalker 2
*
*/


const params = window.location.search;
const value = params.includes("0");

const title = document.getElementById("title");
const rD = document.getElementById("releaseDate");
const platforms = document.getElementById("releasedPlatforms");
const desc = document.getElementById("description");
const reviewImg = document.getElementById("reviewImg");
const reviewText = document.getElementById("wallOfText");
let pegi;

const gameInfo = {
    game0: {
        title: "",
        release_date: "",
        platforms: "",
        description: "",
        image: [
            "",
            "",
            "",

        ],
        alt: "+",
        gameDesc: "+"
},

    game1: {
        title: "+",
        release_date: "",
        platforms: "",
        description: "+",
        image: [
            "",
            "",
            "",
        ],
        alt: "+",

        gameDesc: "+" 
    }
}

