<!DOCTYPE HTML>
<html>
<head>
        <title>Library</title>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php'; ?>
</head>
<body>
        <h1 class="title">Movie Library</h1>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/nav.php'; ?>

      <p id="test1"></p>
      <p id="test2"></p>
      <p id="test3"></p>
<script>

var text;
var arr = [];

// A movie object
function Movie(title, year) {
	this.title = title;
	this.year = year;
}

// The display method
Movie.prototype.display = function() {
	text = this.title + " " + this.year;
	document.getElementById("test1").innerHTML = text;
};

// Instantiate a movie and call display()
var movie1 = new Movie("Star Wars", "2015");
movie1.display();

var movie2 = new Movie("Indiana Jones", "1995");
movie2.display();

// Push to the array
arr.push(movie1);
arr.push(movie2);


// For testing purposes:
// Stringify a created object
text = JSON.stringify(arr);
document.getElementById("test2").innerHTML = text;


// Test for local storage
if (typeof(Storage) !== "undefined")
{
  // TODO: Put all local storage code here
}
else 
{
  document.getElementById("results1").innerHTML = "Sorry, Local Storage is not supported by your browser";
}

// Put the array in local storage
localStorage.setItem("movieArray", text);

// Get the array from local storage
var object = localStorage.getItem("movieArray");
// ***NOTE: obj is basically arr from above
var obj = JSON.parse(object);

var test = "";
for (var i = 0; i < obj.length; i++) {
  test += obj[i].title + "<br/>";
}

document.getElementById("test3").innerHTML = test;

</script>

</body>
</html>

