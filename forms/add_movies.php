        <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen"/>
        <h2>Add Movies</h2>

<!-- Made form more responsive based on Tiffany's (table) form -->        
        <form method="post" id="addMoviesForm" name="addMoviesForm">
        <label for="title" class="addMoviesForm">Title:</label><br>
        <input type="text" name="title" id="title" size="35"><br>
                    
        <label for="year" class="addMoviesForm">Year:</label><br>
        <input type="text" name="year" id="year" size="4"><br>
                    
        <label for="genre" class="addMoviesForm">Genre:</label><br>
        <select name="genre">
        <option value="blank"></option> 
        <option value="Comedy">Comedy</option>
        <option value="Romance">Romance</option>
        <option value="Action">Action</option>
        <option value="Drama">Drama</option>    
        <option value="Sci-Fi">Sci-Fi</option>
        </select><br>
                    
        <label for="rating" class="addMoviesForm">Rating:</label><br>
        <select name="rating">
        <option value="blank"></option> 
        <option value="G">G</option>
        <option value="PG">PG</option>
        <option value="PG-13">PG-13</option>
        <option value="R">R</option>
        <option value="Not Rated">Not Rated</option> 
        </select><br><br>
 
        <button type="button" onclick="addMovies()">Submit</button><br>
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
}

</script>
