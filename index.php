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
      
		<!--creates input field(TG)-->
	<form>
        Search: <textarea id="search" rows="1" >Enter the barcode or name of the movie you'd like to search</textarea>
        <input type="button" value="Search" onclick="search()">
      </form>
	
	<h2> Movie Quick Add </h2>
	<!--creates input field. This can be done with a php file. 
	I know how to send it to email but not to local storage. Shouldn't be to hard. (TG)-->
	<form name="htmlform" method="post" action="html_form_send.php">
<table width="450px">

<tr>
 <td valign="top">
  <label for="Title">Title *</label>
 </td>
 <td valign="top">
  <input  type="text" name="title" maxlength="50" size="30">
 </td>
</tr>
 <tr>
 <td valign="top">
  <label for="subTitle">subTitle:</label>
 </td>
 <td valign="top">
  <input  type="text" name="subTitle" maxlength="30" size="30">
 </td>
</tr>
<tr>
<tr>
 <td valign="top">
  <label for="Rating">Rating *</label>
 </td>
 <td valign="top">
  <select id="rating" onchange="getRating()">
          <option value=""></option>
          <option value="g">G</option>
            <option value="pg">PG</option>
          <option value="R">R</option>
          <option value="notRated">Not Rated</option>    
          
        </select> 
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="genre">Genre: *</label>
 </td>
 <td valign="top">
   <select id="genre" onchange="getGenre()">
          <option value=""></option>
          <option value="comedy">Comedy</option>
            <option value="romance">Romance</option>
          <option value="horror">Horror</option>
          <option value="drama">Drama</option>    
          
        </select> 
 </td> 
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit">   
 </td>
</tr>
</table>
</form>


        
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

