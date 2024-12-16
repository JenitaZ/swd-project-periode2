/*
*
* ?????
*
*/

const gameImages = [
    "https://i.ytimg.com/vi/4uP2MyUL49s/sddefault.jpg",
    "https://i.ytimg.com/vi/okRKEZdE1Cc/maxresdefault.jpg",
    "https://shared.cloudflare.steamstatic.com/store_item_assets/steam/apps/1332010/ss_2221af260c64362fdc835a9dca65f6f1d1192b25.1920x1080.jpg?t=1733260906",
    "https://assets-prd.ignimgs.com/2022/07/15/stray-blogroll-1657911894347.jpg"
]


// for(i = 0; i < gameImages.length; i++){
//     reviewImg.src = gameImages[i];
// }

function changeGameImg() {
    let i = 0;
    
    reviewImg.src = gameImages[i];

    if (i < gameImages.length - 1) {
        i++;
    } else {
        i = 0;
    }

}
