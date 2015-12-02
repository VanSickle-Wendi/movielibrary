<!DOCTYPE HTML>
<html>
<head>
        <title>Library</title>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php'; ?>
        <link href="/css/style.css" property="stylesheet" type="text/css" rel="stylesheet">
</head>

<body>
        <h1 class="title">Movie Library</h1>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/nav.php'; ?>

      <p id="test1"></p>
      <p id="test2"></p>
      <p id="test3"></p>        
<!-- Brendon's Code  --------------------------------------------------- -->         
<h2>Browse your movies </h2>
<div class="browsefilter">
    
<form class="browseform">
    <p>Sort:</p>
    <div class="tg-button">
        <input type="radio" name="tg" id="button1" checked>
        <label for="button1" unselectable>Alpha</label>
    </div>
    <div class="tg-button">
        <input type="radio" name="tg" id="button2">
        <label for="button2" unselectable>Date</label>
    </div>

<script>
var cboRating = document.getElementById('userRating');
var userRating = cboRating.options[cboRating.selectedIndex].text;
var userGenre = document.getElementById('userGenre');
var moviearray = '{ "movies" : [' +
            '{ "name":"Star Wars" , "rating":"G" , "genre":"Comedy", "date":"April 19, 2006 18:44:20"},' +
            '{ "name":"Indiana Jones" , "rating":"PG" , "genre":"Romance", "date":"March 19, 2006 15:44:20"},' +
            '{ "name":"Indiana Jones 2" , "rating":"G" , "genre":"Romance", "date":"March 19, 2006 15:44:20"},' +
            '{ "name":"Indiana Jones 3" , "rating":"PG" , "genre":"Comdey", "date":"March 12, 2006 15:44:20"},' +
            '{ "name":"Dances with Wolves" , "rating":"PG-13" , "genre":"Horror", "date":"March 11, 2006 15:44:20"},' +
            '{ "name":"Jaws" , "rating":"PG" , "genre":"Horror", "date":"November 1, 2007 18:44:20"} ]}';
            var obj = JSON.parse(moviearray);
         
            var array = "";
            var sortedobj = {"movies":[]};
            for (var i = 0; i < obj.movies.length; i++) {
                array += obj.movies[i].name + " - ";
                array += obj.movies[i].rating + " - ";
                array += obj.movies[i].genre + " - ";
                array += obj.movies[i].date + "<br>";
                if (obj.movies[i].rating === "PG"){
                    sortedobj.movies[i]=obj.movies[i];
                    
               //Changing your line. this is a test of githubfunctionality     
                }
            }
            var sortedarray = "";
            for (var i = 0; i < sortedobj.movies.length; i++) {
                sortedarray += obj.movies[i].name + " - ";
                sortedarray += obj.movies[i].rating + " - ";
                sortedarray += obj.movies[i].genre + " - ";
                sortedarray += obj.movies[i].date + "<br>";
            }
           
  
  
                    document.getElementById("movielist").innerHTML = array;
                    
                    document.getElementById("movielistsorted").innerHTML = sortedarray;
</script>
<!-- End Brendon's Code -------------------------------------------------- -->
<!-- Amy's Code ---------------------------------------------------------- -->
      Test 1: <p id="test1"></p>
      Test 2: <p id="test2"></p>
      Test 3: <p id="test3"></p>
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
	return text;
  //document.getElementById("test1").innerHTML = text;
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
  //test += obj[i].display() + "<br/>";
}

document.getElementById("test3").innerHTML = test;

</script>
<!-- End Amy's Code ------------------------------------------------- -->

    <!-- Ensuring that Javascript runs ------------------------------->
        <script type="text/javascript" src="/javascript/javascript.js"></script>
</body>
</html>

