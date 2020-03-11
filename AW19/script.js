// question 1
var petArray = ["cat", "cow", "dog"];

// question 2
console.log(petArray[1]);

// question 3
petArray.push("sheep");

// question 4
console.log(petArray.length);

// question 5
var catObject = {
	name: "Chacha",
	colour: "white",
	age: 15
};

// question 6
console.log(catObject.age);

// question 7
var catArray = [{
	name: "Chacha",
	colour: "white",
	age: 15
}];

// question 8
catArray.forEach( (item) => {
	if (typeof item == "object")
		Object.keys(item).forEach((property) => {
			console.log(item[property]);
		})
})

// question 9
function logToConsole(logItem)
{
	console.log(logItem);
}

// question 10

logToConsole("donkey");
