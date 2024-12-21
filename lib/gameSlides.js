/*
*
* zorgt voor de clickable slides voor game review 2, 3, 4 
* 
*/

const params = window.location.search;
let value = params.includes("0");
if (params.includes("0")){
    value = true;
}else if (params.includes("TR")){
    value = "Terraria";
}else if (params.includes("HK")){
    value = "Hollow";
}else if (params.includes("BOK")){
    value = "BOKURA";
}else{
    value = false;
}

const reviewImg = document.getElementById("reviewImg");
const gameInfo = {
    game0: {
        image: [
            "https://i.ytimg.com/vi/okRKEZdE1Cc/maxresdefault.jpg",
            "https://shared.cloudflare.steamstatic.com/store_item_assets/steam/apps/1332010/ss_2221af260c64362fdc835a9dca65f6f1d1192b25.1920x1080.jpg?t=1733260906",
            "https://assets-prd.ignimgs.com/2022/07/15/stray-blogroll-1657911894347.jpg",
            "https://www.youtube.com/embed/kJawWyRUOBM?si=_WMdEx8ANU1IgosU"

        ],
    },

    game1: {
        image: [
            "https://bananaclicker.io/data/image/posts/banana-clicker-banner.jpg",
            "https://plays.org/screenshots/clicker-banana-game-progress.png",
            "https://plays.org/screenshots/clicker-banana-game-progress.png",
            "https://plays.org/screenshots/clicker-banana-game-progress.png",
        ]
    },
    game3: {
        image: [
            "https://www.brashgames.co.uk/wp-content/uploads/2014/11/Terraria-Review-Screen-3.jpg",
            "https://hb.imgix.net/b7c65e77a5f126a1024a8459ec0fd08f879860f1.jpeg?auto=compress,format&fit=crop&h=353&w=616&s=993b7e1d9df1e22a531675612b644e59",
            "https://www.immortalwordsmith.co.uk/wp-content/uploads/2024/01/feature-image-terraria.webp",
            "https://preview.redd.it/pxlsp796i8j91.png?auto=webp&s=c20691ecfd9d27bec30a99b766ea2c307fca8c14",
            "https://www.youtube.com/embed/w7uOhFTrrq0?si=K9ud0bxzsfHG3W4M"
        ]
    },
    game4: {
        image: [
            "https://gaming-cdn.com/images/products/3412/orig/hollow-knight-switch-spel-nintendo-eshop-europe-cover.jpg?v=1730381957",
            "https://www.pockettactics.com/wp-content/sites/pockettactics/2023/10/hollow-knight-review-5.jpg",
            "https://i.ytimg.com/vi/U8Wz-VwX5dw/maxresdefault.jpg",
            "https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/367520/ss_d5b6edd94e77ba6db31c44d8a3c09d807ab27751.1920x1080.jpg?t=1695270428",
            "https://www.youtube.com/embed/UAO2urG23S4?si=h57Cb664WEaKcCiR"
        ]
    },
    game5: {
        image: [
            "https://i0.wp.com/news.qoo-app.com/en/wp-content/uploads/sites/3/2023/08/BOKURA-A-Two-Player-Cooperative-Puzzle-Game-Officially-Launches-on-Mobile-Switch-and-PC-via-Steam.jpeg",
            "https://i0.wp.com/news.qoo-app.com/en/wp-content/uploads/sites/3/2022/12/BOKURA_main.jpg",
            "https://i0.wp.com/news.qoo-app.com/en/wp-content/uploads/sites/3/2023/08/bokura-p1-p2-view-example-1280x1191.jpg?resize=900%2C837&ssl=1",
            "https://www.superjumpmagazine.com/content/images/2023/05/image-91.png",
            "https://shared.cloudflare.steamstatic.com/store_item_assets/steam/apps/1801110/extras/Screenshot_10.png?t=1730736486",
            "https://www.youtube.com/embed/25mkGli1e0A?si=ClbWrWA0jZYApHa8`"

        ]
    }
}

if (value === true) {
    let reviewVid = document.getElementById('reviewVid');
    let reviewImg = document.getElementById('reviewImg'); 
    let currentIndex = 0;
    reviewImg.src = gameInfo.game0.image[0];

    function changeGameImg() {
        currentIndex = (currentIndex + 1) % gameInfo.game0.image.length;
        reviewImg.src = gameInfo.game0.image[currentIndex];
        console.log(gameInfo.game0.image[currentIndex]);

        if (currentIndex == gameInfo.game0.image.length - 1){
            reviewVid.src = gameInfo.game0.image[currentIndex];
            reviewImg.src = ""
            reviewImg.style.display = "none";
            reviewVid.style.display = "inline";
    
        }else {
            reviewVid.src = "";
            reviewVid.style.display = "none";
            reviewImg.style.display = "inline";
        }

    }

    function changeGameImgL() {
        currentIndex = (currentIndex - 1 + gameInfo.game0.image.length) % gameInfo.game0.image.length;
        reviewImg.src = gameInfo.game0.image[currentIndex];
        console.log(gameInfo.game0.image[currentIndex]);

        if (currentIndex == gameInfo.game0.image.length - 1){
            reviewVid.src = gameInfo.game0.image[currentIndex];
            reviewImg.src = ""
            reviewImg.style.display = "none";
            reviewVid.style.display = "inline";
    
        }else {
            reviewVid.src = "";
            reviewVid.style.display = "none";
            reviewImg.style.display = "inline";
        }
    }
    
    


        
} else if (value == "Terraria"){
    let reviewVid = document.getElementById('reviewVid');
    let reviewImg = document.getElementById('reviewImg'); 
    let currentIndex = 0;
    reviewImg.src = gameInfo.game3.image[0];


    function changeGameImg() {
        currentIndex = (currentIndex + 1) % gameInfo.game3.image.length;
        reviewImg.src = gameInfo.game3.image[currentIndex];
        console.log(gameInfo.game3.image[currentIndex]);

        if (currentIndex == gameInfo.game3.image.length - 1){
            reviewVid.src = gameInfo.game3.image[currentIndex];
            reviewImg.src = ""
            reviewImg.style.display = "none";
            reviewVid.style.display = "inline";
    
        }else {
            reviewVid.src = "";
            reviewVid.style.display = "none";
            reviewImg.style.display = "inline";
        }
    }

    function changeGameImgL() {
        currentIndex = (currentIndex - 1 + gameInfo.game3.image.length) % gameInfo.game3.image.length;
        reviewImg.src = gameInfo.game3.image[currentIndex];
        console.log(gameInfo.game3.image[currentIndex]);

        if (currentIndex == gameInfo.game3.image.length - 1){
            reviewVid.src = gameInfo.game3.image[currentIndex];
            reviewImg.src = ""
            reviewImg.style.display = "none";
            reviewVid.style.display = "inline";
    
        }else {
            reviewVid.src = "";
            reviewVid.style.display = "none";
            reviewImg.style.display = "inline";
        }
    }
    
 
        
} else if (value == "Hollow"){
    let reviewImg = document.getElementById('reviewImg'); 
    let currentIndex = 0;
    let reviewVid = document.getElementById('reviewVid');
    reviewImg.src = gameInfo.game4.image[0];


    function changeGameImg() {
        currentIndex = (currentIndex + 1) % gameInfo.game4.image.length;
        reviewImg.src = gameInfo.game4.image[currentIndex];
        console.log(gameInfo.game4.image[currentIndex]);

        if (currentIndex == gameInfo.game4.image.length - 1){
            reviewVid.src = gameInfo.game4.image[currentIndex];
            reviewImg.src = ""
            reviewImg.style.display = "none";
            reviewVid.style.display = "inline";

        }else {
            reviewVid.src = "";
            reviewVid.style.display = "none";
            reviewImg.style.display = "inline";
        }

    }

    function changeGameImgL() {
        currentIndex = (currentIndex - 1 + gameInfo.game4.image.length) % gameInfo.game4.image.length;
        reviewImg.src = gameInfo.game4.image[currentIndex];
        console.log(gameInfo.game4.image[currentIndex]);

        if (currentIndex == gameInfo.game4.image.length - 1){
            reviewVid.src = gameInfo.game4.image[currentIndex];
            reviewImg.src = ""
            reviewImg.style.display = "none";
            reviewVid.style.display = "inline";
      
        }else {
            reviewVid.src = "";
            reviewVid.style.display = "none";
            reviewImg.style.display = "inline";

        }
        
    }
} else if (value == "BOKURA"){
    let reviewImg = document.getElementById('reviewImg'); 
    let currentIndex = 0;
    let reviewVid = document.getElementById('reviewVid');
    reviewImg.src = gameInfo.game5.image[0];


    function changeGameImg() {
        currentIndex = (currentIndex + 1) % gameInfo.game5.image.length;
        reviewImg.src = gameInfo.game5.image[currentIndex];
        console.log(gameInfo.game5.image[currentIndex]);

        if (currentIndex == gameInfo.game5.image.length - 1){
            reviewVid.src = gameInfo.game5.image[currentIndex];
            reviewImg.src = ""
            reviewImg.style.display = "none";
            reviewVid.style.display = "inline";

        }else {
            reviewVid.src = "";
            reviewVid.style.display = "none";
            reviewImg.style.display = "inline";
        }

    }

    function changeGameImgL() {
        currentIndex = (currentIndex - 1 + gameInfo.game5.image.length) % gameInfo.game5.image.length;
        reviewImg.src = gameInfo.game5.image[currentIndex];
        console.log(gameInfo.game5.image[currentIndex]);

        if (currentIndex == gameInfo.game5.image.length - 1){
            reviewVid.src = gameInfo.game5.image[currentIndex];
            reviewImg.src = ""
            reviewImg.style.display = "none";
            reviewVid.style.display = "inline";
      
        }else {
            reviewVid.src = "";
            reviewVid.style.display = "none";
            reviewImg.style.display = "inline";

        }
        
    }
}else{
    let reviewImg = document.getElementById('reviewImg'); 
    let currentIndex = 0;
    reviewImg.src = gameInfo.game1.image[0];


    function changeGameImg() {
        currentIndex = (currentIndex + 1) % gameInfo.game1.image.length;
        reviewImg.src = gameInfo.game1.image[currentIndex];
        console.log(gameInfo.game1.image[currentIndex]);
    }

    function changeGameImgL() {
        currentIndex = (currentIndex - 1 + gameInfo.game1.image.length) % gameInfo.game1.image.length;
        reviewImg.src = gameInfo.game1.image[currentIndex];
        console.log(gameInfo.game1.image[currentIndex]);
    }
}
