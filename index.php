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
              
    <!-- Content for Search results ---------------------------------->        
     <div id="searchResults">               
        <?php include $_SERVER['DOCUMENT_ROOT'].'/search/search.php'; ?>
     </div>   
    
     <!-- Content for Adding New Movies ------------------------------>  
     <div id="addMovie">              
        <?php include $_SERVER['DOCUMENT_ROOT'].'/forms/add_movies.php'; ?> 
     </div>  
       
     <!-- Content for viewing Movie Library -------------------------->
     <div id="movieLibrary">     
        <?php include $_SERVER['DOCUMENT_ROOT'].'/library/library.php'; ?> 
     </div>
     
     <!-- Content for Browsing Movie Library -------------------------->
     <div id="browseMovies">     
         <?php include $_SERVER['DOCUMENT_ROOT'].'/browse/browse.php'; ?> 
     </div>     
       
    </div> <!-- End mainContent -->
   </div> <!-- End Container -->        
    <!-- Ensuring that Javascript runs ------------------------------->
    <script type="text/javascript" src="/javascript/javascript.js"></script>  
</body>
</html>

