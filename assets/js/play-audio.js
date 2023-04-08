var isPlaying = false;
var audio = new Audio("assets/media/audio/miku.mp3");

function playAudio() {
    if (!isPlaying) {
        audio.load();
        audio.play();
        isPlaying = true;
    }
    else {
        audio.pause();
        isPlaying = false;
    }
}
audio.oncanplaythrough = function ( ) { }
audio.onended = function ( ) { }