<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>Home | Movie App</title>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php'; ?>
    </head>
    <body onload="load()">
    <div class="container">        
     <h1 class="title">Movie Library</h1> 
    <!-- Navigation ------------------------------------------------>     
        <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/nav.php'; ?>
    
    <div class="mainContent">
       <h3>Search Movies</h3>       
		<!--creates input field(TG)-->
	<form>
        Search: <textarea id="search" rows="1" >Enter the barcode or name of the movie you'd like to search</textarea>
        <input type="button" value="Search" onclick="search()">
      </form>
                
       <h3>Add Movies</h3>                
        <?php include $_SERVER['DOCUMENT_ROOT'].'/forms/add_movies.php'; ?>                
<!--use AJAX to sort and filter the movies without a page refresh-->
<h2>Browse your movies </h2>
<div class="browsefilter">
    Sort:
<input type="button" value="Alpha" onclick="sortAlpha()">
<input type="button" value="Date" onclick="sortDate()">
<!--this could toggle between alphabetical and by date of submission-->
    Filter by:
<select onchange="filterRating()">
    
          <option value="" disabled selected hidden>Rating</option>
          <option value="g">G</option>
            <option value="pg">PG</option>
          <option value="R">R</option>
          <option value="notRated">Not Rated</option>    
          
        </select> 

<select onchange="filterGenre()">
          <option value="" disabled selected hidden>Genre</option>
          <option value="comedy">Comedy</option>
            <option value="romance">Romance</option>
          <option value="horror">Horror</option>
          <option value="drama">Drama</option>    
          
        </select> 
<br>
</div>

<!--creates images that are links to the users movie information. 
Some how we'll have to figure out how to get this to update when the user adds a move. (TG) -->
<a href="default.asp">
  <img src="smiley.gif" alt="HTML tutorial" style="width:42px;height:42px;border:0;">
</a>
<a href="default.asp">
  <img src="smiley.gif" alt="HTML tutorial" style="width:42px;height:42px;border:0;">
</a><br>
<a href="default.asp">
  <img src="smiley.gif" alt="HTML tutorial" style="width:42px;height:42px;border:0;">
</a>
<a href="default.asp">
  <img src="smiley.gif" alt="HTML tutorial" style="width:42px;height:42px;border:0;">
</a><br>

Test 1: <p id="test1"></p>
Test 2: <p id="test2"></p>
Test 3: <p id="test3"></p>

    </div> <!-- End mainContent -->
   </div> <!-- End Container -->        
    <!-- Ensuring that Javascript runs ------------------------------->
    <script type="text/javascript" src="/javascript/javascript.js"></script>  
</body>
</html>

