        <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen"/>
        <h2>Add Movies</h2>

<!-- Made form more responsive based on Tiffany's (table) form -->        
        <form method="post" id="addMoviesForm" name="addMoviesForm">
        <label for="title" class="addMoviesForm">Title:</label><br>
        <input type="text" name="title" id="addTitle" size="35"><br>
                    
        <label for="year" class="addMoviesForm">Year:</label><br>
        <input type="text" name="year" id="addYear" size="4"><br>
                    
        <label for="genre" class="addMoviesForm">Genre:</label><br>
        <select name="genre"  id="addGenre">
        <option value="blank"></option> 
        <option value="Comedy">Comedy</option>
        <option value="Romance">Romance</option>
        <option value="Action">Action</option>
        <option value="Drama">Drama</option>    
        <option value="Sci-Fi">Sci-Fi</option>
        </select><br>
                    
        <label for="rating" class="addMoviesForm">Rating:</label><br>
        <select name="rating"  id="addRating">
        <option value="blank"></option> 
        <option value="G">G</option>
        <option value="PG">PG</option>
        <option value="PG-13">PG-13</option>
        <option value="R">R</option>
        <option value="Not Rated">Not Rated</option> 
        </select><br><br>
 
        <button type="button" onclick="addMovies()">Submit</button><br>
        <br>
        <button type="button" onclick="loadSample()" id="btnLoad">Load Sample Movies</button><br>
        </form><br>     

        
<!-- From here to the end is test code I can't get to work. Feel free to delete it
if someone wants to figure out how to pull the form data to the array and local storage. Wendi -->
        
        <p id="test"></p>

<script>
    var formData = new FormData();

function addMovies() {
    var addMoviesForm = document.querySelector('form');
    formData = new FormData(addMoviesForm);
    document.getElementById("test").innerHTML = formData;   
    
    
/***********************************************************************************
 * Add Movies
 * Author:  Brendon Moore
 * Add a movie to the array of movies
 **********************************************************************************/    
    //Need to add 'if' statements to check for null values and return a message if true for any variable
        
 var cboRating = document.getElementById('addRating');
    var addRating = cboRating.options[cboRating.selectedIndex].value;
    var cboGenre = document.getElementById('addGenre');
    var addGenre = cboGenre.options[cboGenre.selectedIndex].value;
    var addTitle = document.getElementById("addTitle").value;
    var addYear = document.getElementById('addYear').value;

    //open exising array
   
        
    var savedArray = JSON.parse(localStorage.getItem("movieArray"));
        
   if (savedArray === null) {
            savedArray = [];
            savedArray.push({
            title: addTitle,
            year: addYear,
            genre: addGenre,
            rating: addRating
             });
            
        }
    else{
     //test for duplicates and then add new item
        if ( !(name in savedArray)){
        savedArray.push({
            title: addTitle,
            year: addYear,
            genre: addGenre,
            rating: addRating
             });
        }
    }
 localStorage.setItem("movieArray", JSON.stringify(savedArray));
 document.getElementById("addTitle").value = "";
 document.getElementById("addYear").value = "";
 document.getElementById('addGenre').value = "";
 document.getElementById('addRating').value = "";

 sortMovies();
 
 
 
 
}


</script>
