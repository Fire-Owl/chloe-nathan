const carte = document.querySelector('.card')
const titre5 = document.querySelector('.card-title');
const btnPlay = document.querySelector('.btnPlay');


const TL1 = new TimelineMax({paused: true});

TL1
.from(carte,0.6,{opacity:0, x: -100})
.from(titre5, 0.6,{opacity:0, x:-100}, '-=0.3')


btnPlay.addEventListener('click', () => {
TL1.play();
})


