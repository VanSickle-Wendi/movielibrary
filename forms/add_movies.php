<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>Add Movies</title>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php'; ?>
    </head>
    <body>
        <h1 class="title">Add Movies</h1>	
        <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/nav.php'; ?>
        
        <form>
            <p>Title</p>
            <input type="text" name="title" size="30" maxlength="50"/><br>
            <p>Star</p>
            <input type="text" name="star" size="30" maxlength="50"/><br>
            <p>Genre</p>
            <select name="genre">
                <option value="blank"></option> 
                <option value="action">Action</option>                
                <option value="comedy">Comedy</option>
                <option value="drama">Drama</option>
                <option value="horror">Horror</option>
                <option value="romance">Romance</option>
            </select>
            <p>Rating</p>
            <select name="genre">
                <option value="blank"></option> 
                <option value="g">G</option>                
                <option value="pg">PG</option>
                <option value="r">R</option>
                <option value="notRated">Not Rated</option>
            </select>
        </form>
    </body>
</html>

