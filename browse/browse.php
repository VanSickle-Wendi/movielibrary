<link href="/css/style.css" type="text/css" rel="stylesheet" media="screen"/>
<!-- Brendon's Code  --------------------------------------------------- --> 
<h2>Browse Your Movies </h2>
<div class="browsefilter">
    
<form class="browseform">
    <p>Sort by:</p>
    <div class="tg-button">
        <input type="radio" name="tg" id="button1" onchange="sortMovies()" checked>
        <label for="button1" unselectable id="titleButton">Title</label>
    </div>
    <div class="tg-button">
        <input type="radio" name="tg" id="button2" onchange="sortMovies()">
        <label for="button2" unselectable id="yearButton">Year Released</label>
    </div>
</form><br>
</div>
<div class="browsefilter2">
    
<form class="browseform">
    <p>Filter by:</p>
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
          <option value="Action">Action</option>
          <option value="Drama">Drama</option>    
          <option value="Sci-Fi">Sci-Fi</option> 
        </select> 
</form>
<br>

</div>
<p id="movieTable">Movie Table:</p>

<!-- End Brendon's Code -------------------------------------------------- -->

