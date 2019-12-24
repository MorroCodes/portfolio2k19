// File: main.js
// Import Highway
import Highway from '@dogstudio/highway';

import Fade from '../js/fade';

// Call Highway.Core once.
// Store it in a variable to use events
const H = new Highway.Core({
    transitions: {
        default: Fade
      }
});
const links = document.querySelectorAll('.nav__main a');
H.on('NAVIGATE_IN', ({ to, location }) => {
    // Check Active Link
    for (let i = 0; i < links.length; i++) {
      const link = links[i];
  
      // Clean class
      link.classList.remove('selected');
      const main = document.querySelector("main");
      main.classList = "";
      const split = location.href.split("/");
      split = split.filter((el) =>{
        if(el != ""){
            return el;
        }
      });
      if(split[split.length-2] == "work"){
        main.classList.add("work__detail");
      } else if (split[split.length-2] == "skill" || split[split.length-2] == "blog") {
        main.classList.add("work__detail");
        main.classList.add("blogpost");
      }
      else {
        main.classList.add(split[split.length-1]);
      }
      // Active link
      if (link.href === location.href) {
        link.classList.add('selected');
      }
    }
  });