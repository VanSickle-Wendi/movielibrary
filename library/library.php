<!DOCTYPE html>
<html>
<head>
        <title>Library</title>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php'; ?>
        <link href="/css/style.css" property="stylesheet" type="text/css" rel="stylesheet">
</head>

<body>
        <h1 class="title">Movie Library</h1>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/nav.php'; ?>
<h2>Browse your movies </h2>
<div class="browsefilter">
    
<form class="browseform">
    <p>Sort:</p>
    <div class="tg-button">
        <input type="radio" name="tg" id="button1" checked>
        <label for="button1" unselectable>Alpha</label>
    </div>
    <div class="tg-button">
        <input type="radio" name="tg" id="button2">
        <label for="button2" unselectable>Date</label>
    </div>



    <p>  | Filter by:</p>
<select id="userRating" onchange="filterRating()">
    
          <option value="" disabled selected hidden>Rating</option>
          <option value="g">G</option>
          <option value="pg">PG</option>
          <option value="R">R</option>
          <option value="notRated">Not Rated</option>    
          
        </select> 

<select id="userGenre" onchange="filterGenre()">
          <option value="" disabled selected hidden>Genre</option>
          <option value="comedy">Comedy</option>
          <option value="romance">Romance</option>
          <option value="horror">Horror</option>
          <option value="drama">Drama</option>    
          
        </select> 
</form>
<br>
</div>
<h2>Original Array</h2>
 <p id="movielist"></p>
 <br>
 <h2>Sorted Array</h2>
 <p id="movielistsorted"></p>
 
<script>
var cboRating = document.getElementById('userRating');
var userRating = cboRating.options[cboRating.selectedIndex].text;
var userGenre = document.getElementById('userGenre');
var moviearray = '{ "movies" : [' +
            '{ "name":"Star Wars" , "rating":"G" , "genre":"Comedy", "date":"April 19, 2006 18:44:20"},' +
            '{ "name":"Indiana Jones" , "rating":"PG" , "genre":"Romance", "date":"March 19, 2006 15:44:20"},' +
            '{ "name":"Indiana Jones 2" , "rating":"G" , "genre":"Romance", "date":"March 19, 2006 15:44:20"},' +
            '{ "name":"Indiana Jones 3" , "rating":"PG" , "genre":"Comdey", "date":"March 12, 2006 15:44:20"},' +
            '{ "name":"Dances with Wolves" , "rating":"PG-13" , "genre":"Horror", "date":"March 11, 2006 15:44:20"},' +
            '{ "name":"Jaws" , "rating":"PG" , "genre":"Horror", "date":"November 1, 2007 18:44:20"} ]}';
            var obj = JSON.parse(moviearray);
         
            var array = "";
            var sortedobj = {"movies":[]};
            for (var i = 0; i < obj.movies.length; i++) {
                array += obj.movies[i].name + " - ";
                array += obj.movies[i].rating + " - ";
                array += obj.movies[i].genre + " - ";
                array += obj.movies[i].date + "<br>";
                if (obj.movies[i].rating === "PG"){
                    sortedobj.movies[i]=obj.movies[i];
                    
                    
                }
            }
            var sortedarray = "";
            for (var i = 0; i < sortedobj.movies.length; i++) {
                sortedarray += obj.movies[i].name + " - ";
                sortedarray += obj.movies[i].rating + " - ";
                sortedarray += obj.movies[i].genre + " - ";
                sortedarray += obj.movies[i].date + "<br>";
            }
           
  
  
                    document.getElementById("movielist").innerHTML = array;
                    
                    document.getElementById("movielistsorted").innerHTML = sortedarray;

function filterRating(){
    
    
}   

function filterGenre(){
    
    
}


</script>

</body>
</html>

