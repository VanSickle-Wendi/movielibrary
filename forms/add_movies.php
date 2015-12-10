        <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen"/>
         <script type="text/javascript" src="/javascript/javascript.js"></script>
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

        

        
        <p id="test"></p>

