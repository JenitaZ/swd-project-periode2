/*
*
* zorgt voor de slideshow met buttons voor game review: 2, 3, 4 
* 
*
*/

const params = window.location.search;
const reviewImg = document.getElementById("reviewImg");   
let value = params.includes("0");
let reviewVid = document.getElementById('reviewVid');
let currentIndex = 0;

   
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
            "https://www.youtube.com/embed/25mkGli1e0A?si=ClbWrWA0jZYApHa8"

        ]
    }
}

if (params.includes("0")){
    value = true;
}else if (params.includes("TR")){           /* Als de website link ergens "#" heeft, value = "#" */
    value = "Terraria";
}else if (params.includes("HK")){
    value = "Hollow";
}else if (params.includes("BOK")){
    value = "BOKURA";
}else{
    value = false;
}

if (value === true) {
    currentGame = gameInfo.game0; 
    reviewImg.src = currentGame.image[0];
    changeGameImg();
    changeGameImgL();
    
        
} else if (value == "Terraria"){
    currentGame = gameInfo.game3;
    reviewImg.src = currentGame.image[0];
    changeGameImg();
    changeGameImgL();
 
        
} else if (value == "Hollow"){
    currentGame = gameInfo.game4; 
    reviewImg.src = currentGame.image[0];
    changeGameImg();
    changeGameImgL();

} else if (value == "BOKURA"){
    currentGame = gameInfo.game5; 
    reviewImg.src = currentGame.image[0];
    changeGameImg();
    changeGameImgL();

    let img = prompt("cat or penuin?");
    if (img == "cat"){
        currentGame.image.splice(4, 0, "https://t4.ftcdn.net/jpg/05/62/99/31/360_F_562993122_e7pGkeY8yMfXJcRmclsoIjtOoVDDgIlh.jpg");
    }else if(img == "penguin"){
        currentGame.image.splice(4, 0, "https://platform.vox.com/wp-content/uploads/sites/2/chorus/uploads/chorus_asset/file/15231691/453801468.0.0.1421786380.jpg?quality=90&strip=all&crop=0.095000000000006%2C0%2C99.81%2C100&w=2400");
    }
    
}else{
    currentGame = gameInfo.game1; 
    reviewImg.src = currentGame.image[0];
    changeGameImg();
    changeGameImgL();
}
/* -------------------- */


function changeGameImg() {
    currentIndex = (currentIndex + 1) % currentGame.image.length;
    reviewImg.src = currentGame.image[currentIndex];

    if (currentIndex == currentGame.image.length - 1){
        reviewVid.src = currentGame.image[currentIndex];
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
    currentIndex = (currentIndex - 1 + currentGame.image.length) % currentGame.image.length;
    reviewImg.src = currentGame.image[currentIndex];

    if (currentIndex == currentGame.image.length - 1){
        reviewVid.src = currentGame.image[currentIndex];
        reviewImg.src = ""
        reviewImg.style.display = "none";
        reviewVid.style.display = "inline";

    }else {
        reviewVid.src = "";
        reviewVid.style.display = "none";
        reviewImg.style.display = "inline";
    }
}
