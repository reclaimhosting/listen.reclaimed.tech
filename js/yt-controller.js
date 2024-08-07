const playerFigure = document.querySelector("#player-figure");
// asynchronously loads the IFrame Player API
let tag = document.createElement("script");

tag.src = "https://www.youtube.com/iframe_api";
let firstScriptTag = document.getElementsByTagName("script")[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// update iframe
let player;
function onYouTubeIframeAPIReady() {
  player = new YT.Player("player", {
    events: {
      onReady: onPlayerReady,
      // onStateChange: onPlayerStateChange,
    },
  });
}

// 4. The API will call this function when the video player is ready.
function onPlayerReady(event) {
  playerFigure.classList.remove("is-invisible");
  //   event.target.cuePlaylist(playlistPublished);
  event.target.loadVideoById("-WLVkpA4ms0");
  event.target.stopVideo();
  // event.target.cueVideoById("Edr6_-L3bi4");
  // event.target.playVideo();
}

// 5. The API calls this function when the player's state changes.
//    The function indicates that when playing a video (state=1),
//    the player should play for six seconds and then stop.
var done = false;
function onPlayerStateChange(event) {
  if (event.data == YT.PlayerState.PLAYING && !done) {
    setTimeout(stopVideo, 6000);
    done = true;
  }
}
function stopVideo() {
  player.stopVideo();
}

let playlistPublished = [
  "aSmMYTuZA0Q",
  "5OUBL0aQYGQ",
  "wa5z1lKB77I",
  "t-gtho8yl-o",
  "nPuLIXMytjU",
  "7IHMeRGd8Vs",
  "qt68tb0hzYI",
  "cxE0pcDioM",
  "Y8sX4y4rCdc",
  "chLtbYFI_Tw",
  "-4NfoQzOzMQ",
  "WM4IAlrxfEw",
  "vYwMi8lV214",
  "8C-6K6w8X7c",
  "Iq8A_JMkdnE",
  "JFkbKSQFVDI",
  "f9tcHQgjnUs",
  "M0xE4InvEnc",
];

let playlistPremiere = [
  "3Mw1cGVVJeI",
  "1u-AF3XW4Dk",
  "BLJF1OT0u34",
  "H-QVZZYfi-0",
  "sdzlsIVpHSI",
];
