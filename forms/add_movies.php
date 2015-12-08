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
        <option value="action">Action</option>                
        <option value="comedy">Comedy</option>
        <option value="drama">Drama</option>
        <option value="horror">Horror</option>
        <option value="romance">Romance</option>
        </select><br>
                    
        <label for="rating" class="addMoviesForm">Rating:</label><br>
        <select name="genre">
        <option value="blank"></option> 
        <option value="g">G</option>                
        <option value="pg">PG</option>
        <option value="pg-13">PG-13</option>                
        <option value="r">R</option>
        <option value="notRated">Not Rated</option>
        </select><br><br>
 
        <button type="button" onclick="addMovies()">Submit</button><br>
        </form><br>     
        
        <p id="test"></p>

<script>
    var formData = new FormData();

function addMovies() {
    var addMoviesForm = document.querySelector('form');
    formData = new FormData(addMoviesForm);
    document.getElementById("test").innerHTML = formData;    
}

</script>
