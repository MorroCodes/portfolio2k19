import Highway from '@dogstudio/highway';

import Tween from 'gsap';

// Fade
class Fade extends Highway.Transition {
  in({ from, to, done }) {
    Tween.fromTo(to, .4,
      { 
        y: "+=100em",
        opacity: 0, 
        
      },{ 
        opacity: 1, 
        y: "0",
        onComplete: () => {
          done();
        }
      });
      
  }
  out({ from, done }) {
    // Animation
    Tween.fromTo(from, 0.3,
      { 
        opacity: 1
      },{ 
        y: "-=100em",
        opacity: 0, 
        onComplete: () => {
          from.remove();
          done();
        }
      }
    );
  }
}

export default Fade;