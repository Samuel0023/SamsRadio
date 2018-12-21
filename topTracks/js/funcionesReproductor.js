
var holding = false;
var reproductor= document.getElementById('reproductor');
var notShowing=true;
var track = document.getElementById('track');
var progress = document.getElementById('progress');
var play = document.getElementById('play');
var next = document.getElementById('next');
var prev = document.getElementById('prev');
var title = document.getElementById('title');
var artist = document.getElementById('artist');
var art = document.getElementById('art');
var current_track = 0;
var song, audio, duration;
var playing = false;
var songs = [{
    title: 'Burn Out',
    artist: 'Martin Garrix feat Justin Mylo',
    url: 'canciones/MartinGarrix&JustinMylo-BurnOut(feat.DewainWhitmore)(OriginalMix).mp3',
    art: 'images/MartinGarrix&JustinMylo-BurnOut(feat.DewainWhitmore)(OriginalMix).jpg'
},
{
    title: 'Light It Up',
    artist: 'Hardwell & Suyano',
    url: 'canciones/Hardwell_&_Suyano_Light_It_Up_feat.mp3',
    art: 'images/Hardwell_&_Suyano_Light_It_Up_feat.mp3.jpg'
},

   
{
    title: 'Inferno',
    artist: 'Quintino',
    url: 'canciones/Quintino-Inferno(ExtendedMix).mp3',
    art: 'images/Quintino-Inferno(ExtendedMix).mp3.jpg'
},

   
{
    title: 'Survive',
    artist: 'Don Diablo feat Emeli Sande',
    url: 'canciones/Don_Diablo_Survive_feat_Emeli_Sande.mp3',
    art: 'images/Don_Diablo_Survive_feat_Emeli_Sande.jpg'
},
   
{
    title: 'Light Up',
    artist: 'Dastic',
    url: 'canciones/Dastic-Light_Up_(Extended_Mix).mp3',
    art: 'images/Dastic-Light_Up_(Extended_Mix).jpg'
},
   
{
    title: 'You Are Too',
    artist: 'Armin Van Buren & Sunnery James & Ryan Marciano',
    url: 'canciones/ArminvanBuuren&SunneryJames&RyanMarciano-YouAreToo(ExtendedMix).mp3',
    art: 'images/ArminvanBuuren&SunneryJames&RyanMarciano-YouAreToo(ExtendedMix).jpg'
},
   
{
    title: 'I Like It',
    artist: 'Cardi B & Bad Bunny & J Balvin',
    url: 'canciones/CardiB&BadBunny&JBalvin-ILikeIt(DillonFrancisVIPRemix).mp3',
    art: 'images/CardiB&BadBunny&JBalvin-ILikeIt(DillonFrancisVIPRemix).mp3.jpg'
},
   
{
    title: 'The feeling',
    artist: 'The Chainsmokers feat Kelsea Ballerini',
    url: 'canciones/TheChainsmokersfeat.Kelsea_Ballerini-This_Feeling.mp3',
    art: 'images/TheChainsmokersfeat.Kelsea_Ballerini-This_Feeling.jpg'
},
   
{
    title: 'Gladiator',
    artist: 'KHSMR',
    url: 'canciones/Gladiator-KSHMR.mp3',
    art: 'images/Gladiator-KSHMR.jpg'
},
   
{
    title: 'Be Somebody',
    artist: 'Steve Aoki & Nicky Romero feat Kiiara',
    url: 'canciones/SteveAoki&NickyRomero-BeSomebody(feat. Kiiara)(Tyron Hapi Remix).mp3',
    art: 'images/SteveAoki&NickyRomero-BeSomebody(feat. Kiiara)(Tyron Hapi Remix).jpg'
},
{   
    
    title:'Taki Taki',
    artist:'Dj Snake Feat Selena Gomez & Ozuna & Cardi B',
    url:'canciones/DJ_Snake_Taki_Taki_feat_Selena_Gomez.mp3',
    art:'images/DJ_Snake_Taki_Taki_feat_Selena_Gomez.jpg'
},
{
    title:'How You Love Me',
    artist:'Hardwell feat Conor & Snoop Dogg ',
    url:'canciones/Hardwell_How_You_Love_Me_feat_Conor.mp3',
    art:'images/Hardwell_How_You_Love_Me_feat_Conor.jpg'
},
{
    title:'Unravel',
    artist:'Tk From Ling Tosite Sigure',
    url:'canciones/Tokyo Ghoul Opening 1 Full.mp3',
    art:'images/Tokyo Ghoul Opening 1 Full.jpg'
}
];

window.addEventListener('load', inicio(), false);

window.addEventListener("keypress",function(tecla){
   
    if(tecla.charCode==97){
        eventReproductor(notShowing);
    }
});


function eventReproductor(noEsVisible){
    if(noEsVisible){
        showReproductor();
    }else{
        notShowReproductor();
    }
};
function inicio() {
    song = songs[current_track];
    audio = new Audio();
    audio.src = song.url;
    title.textContent = song.title;
    artist.textContent = song.artist;
    art.src = song.art;
}

function showReproductor(){
    reproductor.style.display="flex";
    notShowing=false;
}
function notShowReproductor(){
    reproductor.style.display="";
    notShowing=true;
}
audio.addEventListener('timeupdate', updateTrack, false);
audio.addEventListener('loadedmetadata', function () {
    duration = this.duration;
}, false);
window.onmousemove = function (pos) {
    pos.preventDefault();
    if (holding) seekTrack(pos);
}
window.onmouseup = function (pos) {
    holding = false;
    console.log(holding);
}
track.onmousedown = function (pos) {
    holding = true;
    seekTrack(pos);
    console.log(holding);
}
play.onclick = function () {
    if (playing){
        audio.pause()    
    }else{
         audio.play();
    }
}
audio.addEventListener("pause", function () {
    play.innerHTML = '<img class="pad" src="pngImages/play.png" />';
    playing = false;
}, false);

audio.addEventListener("playing", function () {
    play.innerHTML = '<img src="pngImages/pause.png" />';
    playing = true;
}, false);
next.addEventListener("click", nextTrack, false);
prev.addEventListener("click", prevTrack, false);


function updateTrack() {
    curtime = audio.currentTime;
   
    percent = Math.round((curtime * 100) / duration);
   
    progress.style.width = percent + '%';
   
    handler.style.left = percent + '%';
   
    if(percent==100){
   
      nextTrack();  
   
    } 
}

function seekTrack(pos) {
    event = pos || window.event;
    var x = pos.pageX - player.offsetLeft - track.offsetLeft;
    percent = Math.round((x * 100) / track.offsetWidth);
    if (percent > 100) percent = 100;
    if (percent < 0) percent = 0;
    progress.style.width = percent + '%';
    handler.style.left = percent + '%';
    audio.play();
    audio.currentTime = (percent * duration) / 100
}
function nextTrack() {
    current_track++;
    current_track = current_track % (songs.length);
    song = songs[current_track];
    audio.src = song.url;
    audio.onloadeddata = function() {
      updateInfo();
    }
}

function prevTrack() {
    current_track--;
    current_track = (current_track == -1 ? (songs.length - 1) : current_track);
    song = songs[current_track];
    audio.src = song.url;
    audio.onloadeddata = function() {
      updateInfo();
    }
}

function updateInfo() {
    title.textContent = song.title;
    artist.textContent = song.artist;
    art.src = song.art;
    art.onload = function() {
        audio.play();
    }
}
function seleccionarCancion(indice){
    if(notShowing){
        showReproductor()
    }
    current_track=indice;
    song=songs[current_track];
    audio.src = song.url;
    audio.onloadeddata = function() {
      updateInfo();
    }

    audio.addEventListener("playing", function () {
        play.innerHTML = '<img src="pngImages/pause.png" />';
        playing = true;
    }, false);
}

function mostrarDesc(indice){
    var descripcion= document.getElementsByClassName("descrip")[indice];
    descripcion.style.display="flex";
}

function ocultarDesc(indice){
    var descripcion= document.getElementsByClassName("descrip")[indice];
    descripcion.style.display="none";
}