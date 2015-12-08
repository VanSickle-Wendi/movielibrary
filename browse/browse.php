<link href="/css/style.css" type="text/css" rel="stylesheet" media="screen"/>
<!-- Brendon's Code  --------------------------------------------------- --> 
<h2>Browse Your Movies </h2>
<div class="browsefilter">
    
<form class="browseform">
    <p>Sort:</p>
    <div class="tg-button">
        <input type="radio" name="tg" id="button1" onchange="sortMovies()" checked>
        <label for="button1" unselectable>Alpha</label>
    </div>
    <div class="tg-button">
        <input type="radio" name="tg" id="button2" onchange="sortMovies()">
        <label for="button2" unselectable>Year</label>
    </div>
    <p>  | Filter by:</p>
<select id="userRating" onchange="sortMovies()">
    
          <option value="Rating">Rating</option>
          <option value="G">G</option>
          <option value="PG">PG</option>
          <option value="PG-13">PG-13</option>
          <option value="R">R</option>
          <option value="Not Rated">Not Rated</option>    
          
        </select> 

<select id="userGenre" onchange="sortMovies()">
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
 
    
</script>
<!-- End Brendon's Code -------------------------------------------------- -->

