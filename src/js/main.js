// File: main.js
// Import Highway
import Highway from '@dogstudio/highway';

import Fade from '../js/fade';

import CustomRenderer from '../js/custom-renderer';

// Call Highway.Core once.
// Store it in a variable to use events
const H = new Highway.Core({
    renderers: {
        name: CustomRenderer
      },
    transitions: {
        default: Fade
      }
});