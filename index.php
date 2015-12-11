<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>Home | Movie App</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php'; ?>
    </head>
    <body onload="setup();">
        <div class="container">        
            <h1 class="title"><a href="/index.php">Movie Library</a></h1> 
            <!-- Navigation ------------------------------------------------>     
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/nav.php'; ?>

            <div class="mainContent">
                
                <!-- Content for viewing Movie Library -------------------------->
                <div id="movieLibrary">     
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/library/library.php'; ?> 
                </div>                
   
                <!-- Content for Adding New Movies ------------------------------>  
                <div id="addMovie">              
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/forms/add_movies.php'; ?> 
                </div>  

                <!-- Content for Browsing Movie Library -------------------------->
                <div id="browseMovies">     
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/browse/browse.php'; ?> 
                </div>
                
                 <p id="movieTable">Movie Table:</p>
                <br>
                
                <!-- Content for Search results ---------------------------------->        
                <div id="searchResults">               
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/search/search.php'; ?>
                </div>
                
               <!-- <p id="movieTable">Movie Table:</p>-->
                <br>
                </div> <!-- End mainContent -->
        </div> <!-- End Container -->        
        <script></script>
    </body>
</html>
