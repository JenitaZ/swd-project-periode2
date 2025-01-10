/*
*
* game review 2
* JS || Persona 5, Aassassin's creed 2
*
*/

const params = window.location.search;
const value = params.includes("0");

const title = document.getElementById("title");
const rD = document.getElementById("releaseDate");
const platforms = document.getElementById("releasedPlatforms");
const desc = document.getElementById("description");
const reviewText = document.getElementById("wallOfText");

let reviewImg = document.getElementById('reviewImg'); 
let currentIndex = 0;
let pegi;


const gameInfo = {
    game0: {
        title: "Persona 5",
        release_date: "september 15th, 2016",
        platforms: "ps3/4, Android",
        description: "Persona 5 is a game about the internal and external conflicts of a group of troubled high school students",
        image: [
            "https://afterstorygaming.com/wp-content/uploads/2017/06/persona-5-royal-ps4-wallpaper-01.png?w=750",
            "https://i.pcmag.com/imagery/reviews/07ixBkx8aMYYMNiJEMvCNq4-1..v1666484268.jpg",
            "https://miro.medium.com/v2/resize:fit:1400/1*l1AMsvG2A6vJhgNVprYeFQ.jpeg",
            "https://i.ytimg.com/vi/mz0g9hxq7L8/maxresdefault.jpg"
        ],
        alt: "Persona5",
        gameDesc: "<span id='title'>Persona 5</span> <br> <span id='smallGrayText'>released on: september 15th, 2016, by: Atlus, P Studio </span> <br><br>Persona 5 is a game about the internal and external conflicts of a group of troubled high school students – the protagonist and a collection of compatriots he meets in the game’s story – who live dual lives as Phantom Thieves. <br> <br>They have the typically ordinary day-to-day of a Tokyo high schooler – attending class, after school activities and part-time jobs. But they also undertake fantastical adventures by using otherworldly powers to enter the hearts of people.  <br>Their power comes from the Persona, the Jungian concept of the “self;” the game’s heroes realize that society forces people to wear masks to protect their inner vulnerabilities, and by literally ripping off their protective mask and confronting their inner selves do the heroes awaken their inner power, and use it to strive to help those in need. <br> <br> Ultimately, the group of Phantom Thieves seeks to change their day-to-day world to match their perception and see through the masks modern-day society wears."
},

    game1: {
        title: "Assassin's Creed",
        release_date: "",
        platforms: "",
        description: " you are Basim, a cunning street thief with nightmarish visions seeking answers and justice.",
        image: [
            "https://shared.cloudflare.steamstatic.com/store_item_assets/steam/apps/3035570/15583e1c0a34e5858cffed256ef8d3b372374d9d/capsule_616x353.jpg?t=1729184423",
            "https://store-images.s-microsoft.com/image/apps.2573.14365677083355647.b1865964-f828-4b4e-882a-b2b76753c30f.fbf9cdd8-8fa5-4701-8423-b16268363eff?q=90&w=480&h=270",
            "https://store.ubisoft.com/dw/image/v2/ABBS_PRD/on/demandware.static/-/Sites-masterCatalog/default/dwe51edac0/images/large/62ea4f8e09372571f2736a71-9.jpg?sw=500&sh=270&sm=fit",
            "https://i.ytimg.com/vi/xJexCqgG3Js/maxresdefault.jpg"
        ],
        alt: "Assassin's Creed",

        gameDesc: "<span id='title'>Assassin's Creed Mirage</span> <br> <span id='smallGrayText'>released on: dsasfbnn, by: Ubisoft Bordeaux </span> <br><br>Assassin's Creed Mirage is a action-adventure game developed by Ubisoft Bordeaux and published by Ubisoft. The game is the thirteenth major installment in the Assassin's Creed series and the successor to 2020's Assassin's Creed Valhalla.<br><br> In the game, players take control of a younger version of Basim Ibn Ishaq, a central character from the 2020 video game Assassin's Creed: Valhalla, and explore his life during the 9th century in the Abbasid Caliphate's capital city of Baghdad" 
    }
}

if (value === true) {
    pegi = 16;
    age = prompt("CONTENT WARNING: VIOLENCE \n confirm your age:");

    if(age >= pegi){
        currentGame = gameInfo.game0;
        title.innerText = currentGame.title;
        rD.innerText = currentGame.release_date;
        platforms.innerText = currentGame.platforms;
        desc.innerText = currentGame.description;
        reviewImg.alt = currentGame.alt;
        pegi = 16;
        reviewText.innerHTML = currentGame.gameDesc;
        reviewImg.src = currentGame.image[0];

        changeGameImg();
        changeGameImgL();


            
    }else if (age === ""){
        alert(`No age entered`);
        window.location.href = "games.html";

    }else {
         alert(`This game isn't suitable for ${age}-year olds`);
        window.location.href = "games.html";

    }       

} else {
    pegi = 16;
    age = prompt("CONTENT WARNING: VIOLENCE \n confirm your age:");

    if(age >= pegi){
        currentGame = gameInfo.game1;
        title.innerText = currentGame.title;
        rD.innerText = currentGame.release_date;
        platforms.innerText = currentGame.platforms;
        desc.innerText = currentGame.description;
        reviewImg.alt = currentGame.alt;
        pegi = 16;
        reviewText.innerHTML = currentGame.gameDesc;
        reviewImg.src = currentGame.image[0];

        changeGameImg();
        changeGameImgL();

    }else if (age === ""){
        alert(`No age entered`);
        window.location.href = "games.html";

    }else {
        alert(`This game isn't suitable for ${age}-year olds`);
        window.location.href = "games.html";

    }         

}
console.log(currentGame.title);


function changeGameImg() {
    currentIndex = (currentIndex + 1) % currentGame.image.length;
    reviewImg.src = currentGame.image[currentIndex];
}

function changeGameImgL() {
    currentIndex = (currentIndex - 1 + currentGame.image.length) % currentGame.image.length;
    reviewImg.src = currentGame.image[currentIndex];
}