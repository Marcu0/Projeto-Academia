
function dScale(x) {
    x.style.zoom = '1';
}
function uScale(x) {
    x.style.zoom = '1.5';

}
function seeLg() {
    var x = document.getElementById("showLg");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
let box = document.getElementsByClassName(movingBox);