const online = document.getElementById("online");
const inRestaurant = document.getElementById("in");
const incoming = document.getElementById("incoming");

function onButtonHover(e) {
 // e.target.classList.toggle('');
    inRestaurant.style.fontSize = "30px";
    inRestaurant.style.height = "100px";
    inRestaurant.style.width = "210px";
    inRestaurant.style.color = "black";
    inRestaurant.style.fontWeight = "bolder";
    inRestaurant.style.backgroundColor = "yellow"
}

function onButtonLeave(){
    inRestaurant.style.fontSize = "18px";
    inRestaurant.style.height = "60px";
    inRestaurant.style.width = "200px";
}
function onlineButtonHover() {
    online.style.fontSize = "30px";
    online.style.height = "110px";
    online.style.width = "210px";
    online.style.color = "black";
    online.style.fontWeight = "bolder";
    online.style.backgroundColor = "yellow"

}
function onlineButtonLeave(){
    online.style.fontSize = "18px";
    online.style.height = "60px";
    online.style.width = "200px";
}
function incomingButtonHover() {
    incoming.style.fontSize = "30px";
    incoming.style.height = "110px";
    incoming.style.width = "210px";
    incoming.style.color = "black";
    incoming.style.fontWeight = "bolder";
    incoming.style.backgroundColor = "yellow"

}
function incomingButtonLeave(){
    incoming.style.fontSize = "18px";
    incoming.style.height = "60px";
    incoming.style.width = "200px";
}
inRestaurant.addEventListener("mouseenter",onButtonHover);
inRestaurant.addEventListener("mouseleave",onButtonLeave);

online.addEventListener("mouseenter",onlineButtonHover);
online.addEventListener("mouseleave",onlineButtonLeave);

incoming.addEventListener("mouseenter", incomingButtonHover);
incoming.addEventListener("mouseleave", incomingButtonLeave);

