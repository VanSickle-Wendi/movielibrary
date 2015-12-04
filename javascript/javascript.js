// The text for the movie table
var text;

// The array used for sample movies
var arr = [];

// The array of movies
var movieArray;

//send to search through ajax
/***********************************************************************************
 * 
 **********************************************************************************/
function searchInput(str) {
    //Sending the input to search.php and retrieving the output...

    var request = new XMLHttpRequest();
    request.onreadystatechange = function ()
    {
        if (request.readyState == 4 && request.status == 200)
        {
            document.getElementById("results").innerHTML = request.responseText;
        }
    }
    request.open("GET", "search.php?str=" + str, true);//Sending input using get method...
    request.send();
}

/************************************************************************************
 * Movie
 * Author: Amy Williams
 * A Class used to contain the information for a specific movie. A movie contains
 * the title, year, rating (G, PG, etc.) and the genre. 
 * **********************************************************************************/
function Movie(title, year, rating, genre) {
    this.title = title;
    this.year = year;
    this.rating = rating;
    this.genre = genre;
}

/*************************************************************************************
 * Movie display method
 * Author: Amy Williams
 * For displaying the content of a movie
 * ***NOTE: May not be used... TBD
 * *********************************************************************************/
Movie.prototype.display = function () {
    text = this.title + " " + this.year;
    return text;
};

/***********************************************************************************
 * Setup
 * Author: Amy Williams
 * Called on document load. Sets up the page by calling loadSample, 
 * getDataFromLocalStorage, displayMovies and putInLocalStorage.
 **********************************************************************************/
function setup() {
    loadSample();
    getDataFromLocalStorage();
    displayMovies();
    putInLocalStorage();
}

/***********************************************************************************
 * Load Sample
 * Author: Amy Williams
 * Loads a series of movies into local storage
 * ***NOTE: This will eventually need to be eliminated so it doesn't overwrite
 * what we put into local storage...
 **********************************************************************************/
function loadSample() {

    // Instantiate some movies and call display()
    var movie1 = new Movie("Star Wars", "2015", "PG", "Sci-Fi");
    movie1.display();

    var movie2 = new Movie("Indiana Jones", "1995", "PG", "Action");
    movie2.display();

    var movie3 = new Movie("Pride and Prejudice", "2006", "PG", "Romance");
    movie2.display();

    // Push to the array
    arr.push(movie1);
    arr.push(movie2);
    arr.push(movie3);

    text = JSON.stringify(arr);
    localStorage.setItem("movieArray", text);
    // For testing purposes:
    // Stringify a created object
    //text = JSON.stringify(arr);
    //document.getElementById("test2").innerHTML = text;
}

/***********************************************************************************
 * Get Data From Local Storage
 * Author: Amy Williams
 * Retrieves the movie array from local storage
 **********************************************************************************/
function getDataFromLocalStorage() {

    // Test for local storage
    if (typeof (Storage) !== "undefined")
    {
        // Put the array in local storage
        localStorage.setItem("movieArray", text);

        // Get the array from local storage
        var object = localStorage.getItem("movieArray");
        // ***NOTE: movieArray is basically arr from above
        movieArray = JSON.parse(object);
    } else
    {
        // TODO: Come up with a more elegant solution here
        document.getElementById("results1").innerHTML = "Sorry, Local Storage is not supported by your browser";
    }
}

/***********************************************************************************
 * Display Movies
 * Author: Amy Williams
 * Displays all of the movies in the movie array in a formatted table
 **********************************************************************************/
function displayMovies() {
    var test = "<table><tr><th>Title</th><th>Year</th><th>Genre</th><th>Rating</th></tr>";
    for (var i = 0; i < movieArray.length; i++) {
        test += "<tr>"
        test += "<td>" + movieArray[i].title + "</td><td>" + movieArray[i].year + "</td><td>" + movieArray[i].rating + "</td><td>" + movieArray[i].genre + "</td></tr>";
    }
    document.getElementById("movieTable").innerHTML = test;
    document.getElementById("test35").innerHTML = test;
}

/***********************************************************************************
 * Add Movie
 * Author: Amy Williams
 * Adds a single movie object to the array of movies
 **********************************************************************************/
function addMovie() {

}

/***********************************************************************************
 * Sort Movies
 * Author: Amy Williams
 * Sorts the movies in the array by any one of a number of parameters
 **********************************************************************************/
function sortMovies() {

}

/***********************************************************************************
 * Put In Local Storage
 * Author: Amy Williams
 * Puts the array (with any modifications made) back into local storage for the 
 * next use
 **********************************************************************************/
function putInLocalStorage() {
    text = JSON.stringify(movieArray);
    localStorage.setItem("movieArray", text);
}
/* End Movie Library Page (Div) */

/* Test Functions for clearing other divs. This may be included in AJAX code*/

/***********************************************************************************
 * 
 **********************************************************************************/
function clearDivsSearchResults() {
    document.getElementById('addMovie').style.display = "none";
    document.getElementById('movieLibrary').style.display = "none";
    document.getElementById('browseMovies').style.display = "none";
}

/***********************************************************************************
 * 
 **********************************************************************************/
function clearDivsAddMovies() {
    document.getElementById('searchResults').style.display = "none";
    document.getElementById('movieLibrary').style.display = "none";
    document.getElementById('browseMovies').style.display = "none";
}

/***********************************************************************************
 * 
 **********************************************************************************/
function clearDivsMovieLibrary() {
    document.getElementById('searchResults').style.display = "none";
    document.getElementById('addMovie').style.display = "none";
    document.getElementById('browseMovies').style.display = "none";
}

/***********************************************************************************
 * 
 **********************************************************************************/
function clearDivsBrowseMovies() {
    document.getElementById('searchResults').style.display = "none";
    document.getElementById('addMovie').style.display = "none";
    document.getElementById('movieLibrary').style.display = "none";
}
/* End clearDivs functions */
