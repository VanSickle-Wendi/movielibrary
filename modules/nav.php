      
       <script type="text/javascript" src="javascript/javascript.js"></script>
      <ul id="nav">
          <li><img src="/images/movie_library.png" onclick="clearDivsMovieLibrary()"></li>
          <li><img src="/images/add_movie.png" onclick="clearDivsAddMovies()"></li>         
          <li><img src="/images/search.png" onclick="clearDivsBrowseMovies()"></li>
          <li><img src="/images/search.png" onclick="clearDivsSearchResults()"></li>          
      </ul>
            
       
       <ul id="nav2">
          <li><p onclick="clearDivsMovieLibrary()">My Library</p></li>
          <li><p onclick="clearDivsAddMovies()">Add Movies</p></li>          
          <li><p onclick="clearDivsBrowseMovies()">Browse Movies</p></li>          
          <li><p onclick="clearDivsSearchResults()">Search Movies</p></li>
          <li><input type="text" id="search" value="Search">
              <button onclick="myFunction()">Search</button><p id="demo"></p></li> 
      </ul>
