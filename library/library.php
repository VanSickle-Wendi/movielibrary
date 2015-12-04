      Test 1: <p id="test1"></p>
      Test 2: <p id="test2"></p>
      Test 3: <p id="test3"></p>      
<!-- Brendon's Code  --------------------------------------------------- --> 
<h2>Browse your movies </h2>
<div class="browsefilter">
    
<form class="browseform">
    <p>Sort:</p>
    <div class="tg-button">
        <input type="radio" name="tg" id="button1" onchange="loadMovies()" checked>
        <label for="button1" unselectable>Alpha</label>
    </div>
    <div class="tg-button">
        <input type="radio" name="tg" id="button2" onchange="loadMovies()">
        <label for="button2" unselectable>Date</label>
    </div>
    <p>  | Filter by:</p>
<select id="userRating" onchange="loadMovies()">
    
          <option value="Rating">Rating</option>
          <option value="G">G</option>
          <option value="PG">PG</option>
          <option value="PG-13">PG-13</option>
          <option value="R">R</option>
          <option value="Not Rated">Not Rated</option>    
          
        </select> 

<select id="userGenre" onchange="loadMovies()">
          <option value="Genre" >Genre</option>
          <option value="Comedy">Comedy</option>
          <option value="Romance">Romance</option>
          <option value="Horror">Horror</option>
          <option value="Drama">Drama</option>    
          
        </select> 
</form>
<br>
</div>
<!--<h2>Original Array</h2>
 <p id="movielist"></p>
 <br>

 <h2>Sorted Array</h2>
--> 
 <p id="movielistsorted"></p>

<script>
   
    function loadMovies(){
            //remove sortedArray from local storage if it exists
            
          
            var cboRating = document.getElementById('userRating');
            var userRating = cboRating.options[cboRating.selectedIndex].value;
            //window.alert(userRating);
            var cboGenre = document.getElementById('userGenre');
            var userGenre = cboGenre.options[cboGenre.selectedIndex].value;
            var moviearray = '{ "movies" : [' +
                        '{ "name":"Star Wars" , "rating":"G" , "genre":"Comedy", "date":"April 19, 2006 18:44:20"},' +
                        '{ "name":"Indiana Jones" , "rating":"PG" , "genre":"Romance", "date":"January 19, 2006 15:44:20"},' +
                        '{ "name":"Indiana Jones 2" , "rating":"G" , "genre":"Romance", "date":"March 19, 2006 15:44:20"},' +
                        '{ "name":"Indiana Jones 3" , "rating":"PG" , "genre":"Comedy", "date":"May 12, 2006 15:44:20"},' +
                        '{ "name":"Pride and Prejudice" , "rating":"PG-13" , "genre":"Drama", "date":"March 12, 2006 15:44:20"},' +
                        '{ "name":"Jumanji" , "rating":"PG" , "genre":"Horror", "date":"March 13, 2006 15:44:20"},' +
                        '{ "name":"Back to the Future" , "rating":"R" , "genre":"Comedy", "date":"December 14, 2006 15:44:20"},' +
                        '{ "name":"Gone with the Wind" , "rating":"Not Rated" , "genre":"Comedy", "date":"April 15, 2006 15:44:20"},' +
                        '{ "name":"Terminator" , "rating":"R" , "genre":"Drama", "date":"February 16, 2006 15:44:20"},' +
                        '{ "name":"My Wedding" , "rating":"Not Rated" , "genre":"Romance", "date":"September 17, 2006 15:44:20"},' +
                        '{ "name":"Mission Impossible" , "rating":"PG-13" , "genre":"Drama", "date":"March 18, 2006 15:44:20"},' +
                        '{ "name":"Jaws" , "rating":"PG" , "genre":"Horror", "date":"November 1, 2007 18:44:20"} ]}';
                        var obj = JSON.parse(moviearray);
                
                
                
                       
                     //window.alert(moviearray);
                        var origarray = "";
                        var filteredobj = {"movies":[]};
                        for (var i = j = 0; i < obj.movies.length; i++) {
                            origarray += obj.movies[i].name + " - ";
                            origarray += obj.movies[i].rating + " - ";
                            origarray += obj.movies[i].genre + " - ";
                            origarray += obj.movies[i].date + "<br>";

                            
                                  
                            filteredobj.movies[j++]=obj.movies[i];
                            
                            
                     //sort by date if button2 is checked, otherwise sort Alphabetically     
                        if (document.getElementById('button2').checked){
                            
                            filteredobj.movies = obj.movies.sort(sortByDate);
                        }
                        else{
                            filteredobj.movies = obj.movies.sort(sortByName);
                            
                        }    
                            
                            
                             
                        }
                            //puts sorted array into local storage
                        localStorage.setItem("sortedArray", JSON.stringify(filteredobj));

                   //Filter by Rating
                        if (userRating !== "Rating"){
                            var moviearray = localStorage.getItem("sortedArray");
                           
                            var obj = JSON.parse(moviearray);

                            var array = "";
                            var filteredobj = {"movies":[]};
                            for (var i = j = 0; i < obj.movies.length; i++) {
                                array += obj.movies[i].name + " - ";
                                array += obj.movies[i].rating + " - ";
                                array += obj.movies[i].genre + " - ";
                                array += obj.movies[i].date + "<br>";

                                    if (obj.movies[i].rating === userRating){
                                    filteredobj.movies[j++]=obj.movies[i];

                                    }                         
                            }
                            document.getElementById('userRating').options[0].text = "None";
                            localStorage.setItem("sortedArray", JSON.stringify(filteredobj));
                        }
                        
                   //Filter by Genre
                        if (userGenre !== "Genre"){
                            var moviearray = localStorage.getItem("sortedArray");
                           
                            var obj = JSON.parse(moviearray);

                            var array = "";
                            var filteredobj = {"movies":[]};
                            for (var i = j = 0; i < obj.movies.length; i++) {
                                array += obj.movies[i].name + " - ";
                                array += obj.movies[i].rating + " - ";
                                array += obj.movies[i].genre + " - ";
                                array += obj.movies[i].date + "<br>";

                                    if (obj.movies[i].genre === userGenre){
                                    filteredobj.movies[j++]=obj.movies[i];

                                    }                         
                            }
                            document.getElementById('userGenre').options[0].text = "None";
                            localStorage.setItem("sortedArray", JSON.stringify(filteredobj));
                        }

                  // extracts sorted array for viewing
                       var sortedarray = "";
                        for (var i = 0; i < filteredobj.movies.length; i++) {
                            sortedarray += filteredobj.movies[i].name + " - ";
                            sortedarray += filteredobj.movies[i].rating + " - ";
                            sortedarray += filteredobj.movies[i].genre + " - ";
                            sortedarray += filteredobj.movies[i].date + "<br>";
                        }
                 function sortByName(a, b) {
                       var sortStatus = 0;

                        if (a.name < b.name) {
                            sortStatus = -1;
                        } else if (a.name > b.name) {
                                sortStatus = 1;
                        }
                        return sortStatus;
                        
                    }
                function sortByDate(a, b) {
                        
                        return new Date(b.date) - new Date(a.date);
                    }    

                        
                      
                                //document.getElementById("movielist").innerHTML = origarray;

                                document.getElementById("movielistsorted").innerHTML = sortedarray;
                  
                   
                }
                    
                     

                    
    window.onload=loadMovies; 
    
</script>
<!-- End Brendon's Code -------------------------------------------------- -->
<!-- Amy's Code ---------------------------------------------------------- -->

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

