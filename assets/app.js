/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.scss in this case)
import './styles/app.scss';

// start the Stimulus application
import './bootstrap';

let checkBoxDarkMode = document.getElementById('dn');
console.log("hello");
checkBoxDarkMode.addEventListener('change', function() {
    if (this.checked) {
        console.log("coucou");
        document.body.style.backgroundImage = "url('/build/images/darkback.e0d9adbe.jpg')";
        document.body.style.color = "#FFFFFF"
    } else {
        document.body.style.backgroundImage = "url('/build/images/Scene-7.e856f364.jpg')";
        document.body.style.color = "#000000"
    }
});

