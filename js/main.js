const navBtn = document.querySelector('#navbar-toggler');
const navDiv= document.querySelector('.navbar-collapse');

navBtn.addEventListener('click', () => {
     navDiv.classList.toggle('showNav');
});

// stopping animation and transition during windows
 let resizeIimer;
 window.addEventListener('resize', ()=>{
      document.body.classList.add('resize-animation-stopper');
      clearTimeout(resizeIimer);
      resizeIimer = setTimeout(()=>{
           document.body.classList.remove
           ('resize-animation-stopper');
      },400);
 });
