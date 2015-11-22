<!DOCTYPE html>
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
<script>

var text;
var arr;

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

// Stringify a created object
text = JSON.stringify(movie1);
document.getElementById("test2").innerHTML = text;



</script>

</body>
</html>

