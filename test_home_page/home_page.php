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
    
    <div class="mainContent">
    <!-- Content for viewing Movie Library -------------------------->
       <div class="movieLibrary">
          <h3>Movie Library</h3> 
          <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/library_test/library.php'; ?>     
       </div>
    <!-- Content for adding new movies ------------------------------>
       <div class="addMovie">
          <h3>Add Movies</h3>
          <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/forms_test/add_movies.php'; ?>  
       </div>
         
    <!-- Content for Search results ---------------------------------->
    
         
         
         
     </div> <!-- End mainContent -->
    </div> <!-- End Container -->        
    <!-- Ensuring that Javascript runs ------------------------------->
        <script type="text/javascript" src="/javascript/javascript_test.js"></script>  
</body>
</html>

