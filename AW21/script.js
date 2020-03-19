// question 1

var cat = {
	complain: () => { console.log("Meow!")}
}


// question 2

var heading = document.querySelector("h3")


// question 3

heading.style.fontSize = "2em"


// question 4

heading.classList.add("subheading")


// question 5

var paragraphs = document.querySelectorAll("p")


// question 6

var resultsContainer = document.getElementsByClassName("results")

if (resultsContainer.length)
	resultsContainer[0].innerHTML = "<p>New paragraph</p>"


// question 7

function LogCatNames(catArray)
{
	catArray.forEach(element => {
		if (element.name)
			console.log(element.name)
	});
}

const cats = [
    {
        name: "Blob",
        age: 10
    },
    {
        name: "Harold",
    },
    {
        name: "Blurt",
        age: 21
    }
];

LogCatNames(cats)


// question 8

function LogCatNamesH5(catArray)
{
	let str = ""
	catArray.forEach(element => {
		if (element.name)
			str += "<h5>" + element.name + "</h5>\n"
	});
	return (str)
}


// question 9

if (resultsContainer.length)
	resultsContainer[0].innerHTML = LogCatNamesH5(cats)


// question 10

function LogCatNamesDiv(catArray)
{
	let str = ""
	catArray.forEach(element => {
		if (element.name)
			str += "<div>\n<h5>" + element.name + "</h5>\n<p>" + ((element.age) ? element.age : "Age unknown") + "</p>\n</div>\n"
	});
	return (str)
}

