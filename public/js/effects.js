
document.addEventListener('DOMContentLoaded', function() {
    // Get references to the checkboxes
    const switchhCheckbox = document.querySelector('.switchh');
    const switch001Checkbox = document.querySelector('.switch001');

    // Add event listener to switchhCheckbox
    switchhCheckbox.addEventListener('change', function() {
        // Update switch001Checkbox based on the checked state of switchhCheckbox
        switch001Checkbox.checked = this.checked;
    });
});

/*-- Mouse Effect 1 -start--*/

let isActivated1 = false;
const coords = { x: 0, y: 0 };
const circles = document.querySelectorAll(".circle1");

const colorss = [
    "#ffb56b",
    "#fdaf69",
    "#f89d63",
    "#f59761",
    "#ef865e",
    "#ec805d",
    "#e36e5c",
    "#df685c",
    "#d5585c",
    "#d1525c",
    "#c5415d",
    "#c03b5d",
    "#b22c5e",
    "#ac265e",
    "#9c155f",
    "#950f5f",
    "#830060",
    "#7c0060",
    "#680060",
    "#60005f",
    "#48005f",
    "#3d005e"
];

circles.forEach(function (circle, index) {
    circle.x = 0;
    circle.y = 0;
    circle.style.backgroundColor = colorss[index % colorss.length];
});

window.addEventListener("mousemove", function(e){
    coords.x = e.clientX;
    coords.y = e.clientY;
});

function animateCircless() {
    if (isActivated1){
    let x = coords.x;
    let y = coords.y;

    circles.forEach(function (circle, index) {
        circle.style.left = x - 12 + "px";
        circle.style.top = y - 12 + "px";

        circle.style.scale = (circles.length - index) / circles.length;

        circle.x = x;
        circle.y = y;

        const nextCircle = circles[index + 1] || circles[0];
        x += (nextCircle.x - x) * 0.3;
        y += (nextCircle.y - y) * 0.3;
    });

    requestAnimationFrame(animateCircless);
    }
}



function checkActivation(isActivated) {
    if (isActivated === true) {
        isActivated1 = true;
        animateCircless();

    } else if (isActivated === false) {
        isActivated1 = false;

    }
}


if(isActivated1){
    animateCircless();
}
else if(!isActivated1){
    circles.style.width = '0px';
    circles.style.height = '0px';
}


/*-- Mouse Effect 1 -end- */

