const params = window.location.search;
const value = params.includes("0");

const title = document.getElementById("title");
const rD = document.getElementById("releaseDate");
const platforms = document.getElementById("releasedPlatforms");
const desc = document.getElementById("description");
const reviewImg = document.getElementById("reviewImg");
let pegi;

const gameInfo = {
    game0 :{
        title: "Persona 5",
        release_date : "",
        platforms: "",
        description: "Persona 5 is a game about the internal and external conflicts of a group of troubled high school students",
        image: {
            img1: "https://afterstorygaming.com/wp-content/uploads/2017/06/persona-5-royal-ps4-wallpaper-01.png?w=750",
            img2: ""
        },
        alt : "Persona5"
    },

    game1 :{
        title: "Assassin's Creed",
        release_date : "",
        platforms:"",
        description: " you are Basim, a cunning street thief with nightmarish visions seeking answers and justice.",
        image: {
            img1:"https://shared.cloudflare.steamstatic.com/store_item_assets/steam/apps/3035570/15583e1c0a34e5858cffed256ef8d3b372374d9d/capsule_616x353.jpg?t=1729184423",
            img2:""
        },
        alt : "Assassin's Creed"
    }
}

if (value === true){
    title.innerText = gameInfo.game0.title;
    rD.innerText = gameInfo.game0.rease_date;
    platforms.innerText = gameInfo.game0.platforms;
    desc.innerText = gameInfo.game0.description;
    reviewImg.src = gameInfo.game0.image.img1;
    reviewImg.alt = gameInfo.game0.alt;
    pegi = 16;
    console.log(gameInfo.game0.title);

}else {
    title.innerText = gameInfo.game1.title;
    rD.innerText = gameInfo.game1.rease_date;
    platforms.innerText = gameInfo.game1.platforms;
    desc.innerText = gameInfo.game1.description;
    reviewImg.src = gameInfo.game1.image.img1;
    reviewImg.alt = gameInfo.game1.alt;
    pegi = 16;
    console.log(gameInfo.game1.title);
    
}


// console.log()