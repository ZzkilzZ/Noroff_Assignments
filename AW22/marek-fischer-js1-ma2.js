
// question 1

const myFunctionExpression = () => {console.log("Marek Fischer")}


// question 2

var button = document.getElementsByClassName("btn")[0]
button.addEventListener("click", () => {button.value = "I was clicked"})


// question 3

document.getElementById("firstName").addEventListener("keydown", (key) => {console.log(key)})


// question 4

var dogButton = document.getElementsByTagName("button")[0]
dogButton.addEventListener("mouseover", () => {dogButton.classList.add("hover")})


// question 5

var theDogButton = document.querySelectorAll("[data-animal='dog']")[0]
theDogButton.addEventListener("mouseout", () => {theDogButton.classList.remove("hover")})


//question 6

var animals = Array.prototype.slice.call(document.getElementsByTagName("LI"), 0)
animals.forEach((item) => {item.addEventListener("mouseover", () => {console.log(item.getAttribute("data-animal"))})})


// question 7

const animal = "cow";

switch (animal) {
	case "cat":
		console.log("Meow");
		break;
	case "cow":
		console.log("Moo");
		break;
	case "bird":
		console.log("Tweet");
		break;
	default:
		console.log("Harrumph");
}


// question 8

const sheep = ["Malcolm", "Anders", "Marie"];

sheep.forEach((item) => {console.log(item)})


// question 9

var counter = 0

setInterval(() => {
	if (counter < 6)
	{
		counter++
		console.log("hello")
	}
}, 500);


//question 10

setTimeout(() => {
	document.getElementsByClassName("container")[0].innerHTML = "Text updated"
}, 2000);