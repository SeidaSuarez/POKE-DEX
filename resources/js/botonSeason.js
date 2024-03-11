"use strict";

function getSeason() {
    const month = new Date().getMonth();
    if (month < 2 || month === 11) {
        return "winter";
    } else if (month < 5) {
        return "spring";
    } else if (month < 8) {
        return "summer";
    } else {
        return "autumn";
    }
}

function changeStylesBasedOnSeason() {
    const season = getSeason();
    const button = document.getElementById('myButton');

    switch (season) {
        case 'spring':
            button.style.backgroundColor = 'pink';
            break;
        case 'summer':
            button.style.backgroundColor = 'orange';
            break;
        case 'autumn':
            button.style.backgroundColor = 'green';
            break;
        case 'winter':
            button.style.backgroundColor = 'blue';
            break;
    }
}

document.addEventListener('DOMContentLoaded', function() {
    changeStylesBasedOnSeason();
});

