// Playlist array
var files = [
"https://archive.org/download/patrickgoes/RAN%20[MIKU-LUKA]%20-%20%20Dekat%20di%20Hati%20(REDSHiFT%20Remix).mp3",
"https://archive.org/download/patrickgoes/EHDE%20-%20Shine.mp3",
"https://archive.org/download/patrickgoes/Moe%20Shop%20-%20Love%20Me.mp3",
"https://archive.org/download/patrickgoes/Virtual%20Riot%20-%20Lunar.mp3",
"https://archive.org/download/patrickgoes/The%20Legend%20Of%20Zelda%20-%20Great%20Fairy%20Fountain%20(Chime%20Remix).mp3",
"https://archive.org/download/patrickgoes/Kaivaan%20X%20Nahviss%20-%20Celeste.mp3"
];

// Current index of the files array
var current = 0;

// Get the audio element
var playlistPlayer = document.querySelector("#playlist audio");

// function that will be call at the end of the previous
function next() {
    // Check for last media in the playlist
    if (current === files.length - 1) {
        current = 0;
    } else {
        current++;
    }

    // Change the audio element source
    playlistPlayer.src = files[current];
}

// Check if the player is in the DOM
if (playlistPlayer === null) {
    throw "Playlist Player does not exists ...";
} else {
    // Start the player
    playlistPlayer.src = files[current];

    // Listen for the playback ended event, to play the next media
    playlistPlayer.addEventListener('ended', next, false)
}

(function(){

    // Example 1
    var audioElement = document.getElementById('audio');
    document.getElementById('play').addEventListener('click', function(){
        audioElement.play();
    }, false);
    document.getElementById('stop').addEventListener('click', function(){
        audioElement.pause();
    }, false);
	document.getElementById('next').addEventListener('click', function(){
       if (current === files.length - 1) {
        current = 0;
    } else {
        current++;
    }
    // Change the audio element source
    playlistPlayer.src = files[current];
	audioElement.play();
    }, false);
	document.getElementById('back').addEventListener('click', function(){
       if (current === files.length - 1) {
        current = 0;
    } else {
        current--;
    }
    // Change the audio element source
    playlistPlayer.src = files[current];
	audioElement.play();
    }, false);
})();
