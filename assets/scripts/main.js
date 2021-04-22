const carte = document.querySelector('.card')
const txt = document.querySelector('.card-text');
const btnPlay = document.querySelector('.btnPlay');

const TL1 = new TimelineMax({paused: true});

TL1
.from(carte,1,{opacity:0, x: -100})
.from(txt, 0.6,{opacity:0, y: 100}, '-=0.4')

btnPlay.addEventListener('click', () => {
  TL1.play();
})