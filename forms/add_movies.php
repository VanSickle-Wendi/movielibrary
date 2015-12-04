        <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen"/>

<!-- Made form more responsive based on Tiffany's (table) form -->        
        <form method="post" action="json/json_test.json" id="addMoviesForm">
        <label for="title">Title:</label><br>
        <input type="text" name="title" id="title" size="35"><br>
                    
        <label for="star">Star:</label><br>
        <input type="text" name="star" id="star" size="35"><br>
                    
        <label for="genre">Genre:</label><br>
        <select name="genre">
        <option value="blank"></option> 
        <option value="action">Action</option>                
        <option value="comedy">Comedy</option>
        <option value="drama">Drama</option>
        <option value="horror">Horror</option>
        <option value="romance">Romance</option>
        </select><br>
                    
        <label for="rating">Rating:</label><br>
        <select name="genre">
        <option value="blank"></option> 
        <option value="g">G</option>                
        <option value="pg">PG</option>
        <option value="pg-13">PG-13</option>                
        <option value="r">R</option>
        <option value="notRated">Not Rated</option>
        </select><br><br>
 
        <button type="button" onclick="">Submit</button><br>
        </form><br>     
        
    </body>
</html>