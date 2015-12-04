<link href="/css/styletest.css" type="text/css" rel="stylesheet" media="screen"/>
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

            
<!--  Adding Amy's (table) style to addMovies form and making responsive-->
<style>
/* Form style for Phone --------------------------------------   */ 
@media only screen and (max-width: 600px) {   
form {
	border: 1px solid #069;
	background-color: #eeeeee;
	padding: 10px;  
	color: #069;   
	width: 300px;        
} 
}
/*............Styling for the tablet/desktop Navigation Here.........*/
@media only screen and (min-width: 601px) {
form {
	border: 1px solid #069;
	background-color: #eeeeee;
	padding: 20px;  
	color: #069;   
	width: 50%;        
}
label {
        font-size: 1.2em;
}
}
</style>