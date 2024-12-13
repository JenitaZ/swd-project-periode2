const params = window.location.search;
const value = params.includes("0");

const reviewImg = document.getElementById("reviewImg");
const gameInfo = {
    game0: {
        image: [
            // "https://i.ytimg.com/vi/4uP2MyUL49s/sddefault.jpg",
            "https://i.ytimg.com/vi/okRKEZdE1Cc/maxresdefault.jpg",
            "https://shared.cloudflare.steamstatic.com/store_item_assets/steam/apps/1332010/ss_2221af260c64362fdc835a9dca65f6f1d1192b25.1920x1080.jpg?t=1733260906",
            "https://assets-prd.ignimgs.com/2022/07/15/stray-blogroll-1657911894347.jpg"
        ],
},

    game1: {
        image: [
            "https://bananaclicker.io/data/image/posts/banana-clicker-banner.jpg",
            "https://plays.org/screenshots/clicker-banana-game-progress.png",
            "https://plays.org/screenshots/clicker-banana-game-progress.png",
            "https://plays.org/screenshots/clicker-banana-game-progress.png",
        ]
    }
}

if (value === true) {
    let i = 1;
    
    reviewImg.src = gameInfo.game0.image[0];
    // slideshow with btns
    function changeGameImg() {
        reviewImg.src = gameInfo.game0.image[i];

        if (i < gameInfo.game0.image.length - 1 ) {
            i++;
        } else {
            i = 0;
        }
        console.log(gameInfo.game0.image[i]);
    }
    console.log(gameInfo.game0.title);

    function changeGameImgL(){
        reviewImg.src = gameInfo.game1.image[i];

        if (i > 0) {
            i--;
        } else {
            i = gameInfo.game0.image.length - 1;
        }
        console.log(gameInfo.game0.image[i]);                                                                                                                 
     }

} else {
    reviewImg.src = gameInfo.game1.image[0];
    let i = 1;
    function changeGameImg() {
        reviewImg.src = gameInfo.game1.image[i];

        if (i < gameInfo.game1.image.length - 1) {
            i++;
        } else {
            i = 0;
        }
    }
    console.log(gameInfo.game1.title);

    
    function changeGameImgL(){
        reviewImg.src = gameInfo.game1.image[i];

        if (i > 0) {
            i--;
        } else {
            i = gameInfo.game1.image.length - 1;
        }
        console.log(gameInfo.game1.image[i]);                                                                                                                 
     }

}
