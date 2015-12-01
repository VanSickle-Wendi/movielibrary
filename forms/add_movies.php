<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>Add Movies</title>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php'; ?>
    </head>
    <body>
        <h1 class="title">Add Movies</h1>	
        <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/nav.php'; ?>
        
            <form method="post" action="json/json_test.json" id="addMovieForm">

                    <label for="title">Title:</label><br>
                    <input type="text" name="title" id="title" size="40"><br>
                    
                    <label for="star">Star:</label><br>
                    <input type="text" name="star" id="star" size="40"><br>
                    
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

