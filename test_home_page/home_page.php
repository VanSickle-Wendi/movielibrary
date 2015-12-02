<!DOCTYPE html>
<html lang="en-us">
  <head>
    <title>Home | Movie App</title>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php'; ?>
    <link href="/css/styletest.css" type="text/css" rel="stylesheet" media="screen"/>
  </head>
  <body>
   <div class="container">
    <h1 class="title">Movie Library</h1>   
    <!-- Navigation ------------------------------------------------>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/nav.php'; ?>
    <!-- Temporary Navigation -------------------------------------->
    <h2>Temporary Navigation</h2>
      <ul id="nav">
        <li><a href="/test_home_page/home_page.php">Test Home</a></li>
        <li><a href="/forms/add_movies.php">Add Movies</a></li>
        <li><a href="/library/library.php">Movie Library</a></li>
        <li><input type="text" placeholder="Search" ></li> 
      </ul>
    <div class="mainContent">
     <!-- Content for viewing Movie Library -------------------------->
     <div id="movieLibrary">
       <h3>Movie Library</h3> 
       <?php include $_SERVER['DOCUMENT_ROOT'].'/library/library_test.php'; ?>        
       <script>
           function clearDivs() {
              document.getElementById('addMovie').style.display = "none";
              document.getElementById('searchResults').style.display = "none";
           }
       </script>    
     </div>
     <!-- Content for Adding New Movies ------------------------------>
     <div id="addMovie">
       <h3>Add Movies</h3>
       <?php include $_SERVER['DOCUMENT_ROOT'].'/forms/add_movies_test.php'; ?>
     </div>
    
     <!-- Content for Search results ---------------------------------->
     <div id="searchResults">
       <h3>Search Results</h3>
        
     </div>
         
         
    </div> <!-- End mainContent -->
   </div> <!-- End Container -->        
    <!-- Ensuring that Javascript runs ------------------------------->
    <script type="text/javascript" src="/javascript/javascript_test.js"></script>  
</body>
</html>

