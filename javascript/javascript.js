// The text for the movie table
var text;

// The array used for sample movies
var arr = [];

// The array of movies
var movieArray;

//send to search through local storage
/***********************************************************************************
 * 
 **********************************************************************************/
//client search function
function myFunction() {

    var search1 = document.getElementById("search").value;
    document.getElementById("demo").innerHTML = n;
    if (search1.length <= 2) {
        n = "Your search isn't specific enough. Try again.";
    } else {

        var str = localStorage.getItem("movieArray");//this works
        var n = str.search(search1);

        if (n <= -1) {
            n = "This movie is not in your database.";
        } else {
            n = "This movie is in your database.";
        }
    }
    document.getElementById("demo").innerHTML = n;

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
    // loadSample();
    getDataFromLocalStorage();
    
    // Display a welcome message
    if (movieArray.size === 0) {
        displayMessage();
    }
    
    //displayMovies();
    sortMovies();
    putInLocalStorage();
}

/***********************************************************************************
 * Display Message
 * Author: Amy Williams
 * Displays a welcome message if the library is empty
 **********************************************************************************/
function displayMessage() {
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState === 4 && request.status === 200) {
            document.getElementById('message').innerHTML = request.responseText;
        }
    };
    request.open('GET', '../text/welcome.json', true);
    request.send();
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
    sortMovies();
    document.getElementById("btnLoad").style.visibility = "hidden";
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
        var object = localStorage.getItem("movieArray");
        if (object === 'undefined') {
            movieArray = [];
        } else {
            // Get the array from local storage
            movieArray = JSON.parse(object);
        }
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
 * Author: Brendon Moore
 * Adds a single movie object to the array of movies
 **********************************************************************************/
function addMovies() {
    //var addMoviesForm = document.querySelector('form');
    //formData = new FormData(addMoviesForm);
    //document.getElementById("test").innerHTML = formData;   



    var cboRating = document.getElementById('addRating');
    var addRating = cboRating.options[cboRating.selectedIndex].value;
    var cboGenre = document.getElementById('addGenre');
    var addGenre = cboGenre.options[cboGenre.selectedIndex].value;
    var addTitle = document.getElementById("addTitle").value;
    var addYear = document.getElementById('addYear').value;

    //open exising array


    var savedArray = JSON.parse(localStorage.getItem("movieArray"));

    if (savedArray === null) {
        savedArray = [];
        savedArray.push({
            title: addTitle,
            year: addYear,
            genre: addGenre,
            rating: addRating
        });

    } else {
        //test for duplicates and then add new item
        if (!(name in savedArray)) {
            savedArray.push({
                title: addTitle,
                year: addYear,
                genre: addGenre,
                rating: addRating
            });
        }
    }
    localStorage.setItem("movieArray", JSON.stringify(savedArray));
    document.getElementById("addTitle").value = "";
    document.getElementById("addYear").value = "";
    document.getElementById('addGenre').value = "";
    document.getElementById('addRating').value = "";

    sortMovies();




}

/***********************************************************************************
 * Sort Movies
 * Author: Amy Williams, Brendon Moore
 * Sorts the movies in the array by any one of a number of parameters
 **********************************************************************************/
function sortMovies() {
    //window.alert("in sorting function");
    getDataFromLocalStorage();
    var origarray = "";
    var filteredobj = [];
    var cboRating = document.getElementById('userRating');
    var userRating = cboRating.options[cboRating.selectedIndex].value;
    var cboGenre = document.getElementById('userGenre');
    var userGenre = cboGenre.options[cboGenre.selectedIndex].value;

    //sort by year if button2(Alpha/Date Toggle) is checked, otherwise sort Alphabetically  
    if (movieArray !== null) {
        if (document.getElementById('button2').checked) {

            filteredobj = movieArray.sort(sortByYear);
        } else {
            filteredobj = movieArray.sort(sortByTitle);

        }
    }

    //puts sorted array into local storage
    localStorage.setItem("sortedArray", JSON.stringify(filteredobj));

    //Filter by Rating
    if (userRating !== "Rating") {

        var moviearray2 = localStorage.getItem("sortedArray");

        var obj = JSON.parse(moviearray2);


        var filteredobj = [];
        for (var i = j = 0; i < obj.length; i++) {
            if (obj[i].rating === userRating) {
                filteredobj[j++] = obj[i];

            }
        }
        document.getElementById('userRating').options[0].text = "None";
        localStorage.setItem("sortedArray", JSON.stringify(filteredobj));
    }
    //Filter by Genre
    if (userGenre !== "Genre") {

        var moviearray3 = localStorage.getItem("sortedArray");

        var obj = JSON.parse(moviearray3);


        var filteredobj = [];
        for (var i = j = 0; i < obj.length; i++) {
            if (obj[i].genre === userGenre) {
                filteredobj[j++] = obj[i];

            }
        }
        document.getElementById('userGenre').options[0].text = "None";
        localStorage.setItem("sortedArray", JSON.stringify(filteredobj));
    }


    function sortByTitle(a, b) {
        var sortStatus = 0;

        if (a.title.toLowerCase() < b.title.toLowerCase()) {
            sortStatus = -1;
        } else if (a.title.toLowerCase() > b.title.toLowerCase()) {
            sortStatus = 1;
        }
        return sortStatus;
    }
    function sortByYear(a, b) {

        return new Date(b.year) - new Date(a.year);
    }









    var test2 = "<table><tr><th>Title</th><th>Year</th><th>Rating</th><th>Genre</th></tr>";
    for (var i = 0; i < filteredobj.length; i++) {
        test2 += "<tr>";
        test2 += "<td>" + filteredobj[i].title + "</td><td>" + filteredobj[i].year + "</td><td>" + filteredobj[i].rating + "</td><td>" + filteredobj[i].genre + "</td></tr>";
    }
    document.getElementById("movieTable").innerHTML = test2;

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
 * Display Search Results alone
 * Author: Wendi Van Sickle
 * Clears all divs on index page except search results 
 *
 **********************************************************************************/

function clearDivsSearchResults() {
    document.getElementById('searchResults').style.display = "initial";
    document.getElementById('addMovie').style.display = "initial";
    document.getElementById('movieLibrary').style.display = "initial";
    document.getElementById('browseMovies').style.display = "initial";
    var searchPage = new XMLHttpRequest();
    searchPage.onreadystatechange = function () {
        if (searchPage.readyState === 4 && searchPage.status === 200) {
            document.getElementById('addMovie').style.display = "none";
            document.getElementById('movieLibrary').style.display = "none";
            document.getElementById('browseMovies').style.display = "none";
            document.getElementById('searchResults').innerHTML = searchPage.responseText;
        }
    };
    searchPage.open('GET', '../search/search.php', true);
    searchPage.send();
}
/***********************************************************************************
 * Display Add Movie Form alone
 * Author: Wendi Van Sickle
 * Clears all divs on index page except add movie form 
 *
 **********************************************************************************/
function clearDivsAddMovies() {
    document.getElementById('searchResults').style.display = "initial";
    document.getElementById('addMovie').style.display = "initial";
    document.getElementById('movieLibrary').style.display = "initial";
    document.getElementById('browseMovies').style.display = "initial";
    var addMoviesPage = new XMLHttpRequest();
    addMoviesPage.onreadystatechange = function () {
        if (addMoviesPage.readyState === 4 && addMoviesPage.status === 200) {
            document.getElementById('searchResults').style.display = "none";
            document.getElementById('movieLibrary').style.display = "none";
            document.getElementById('browseMovies').style.display = "none";
            document.getElementById('addMovie').innerHTML = addMoviesPage.responseText;
        }
    };
    addMoviesPage.open('GET', '../forms/add_movies.php', true);
    addMoviesPage.send();
}
/***********************************************************************************
 * Display Movie Library alone
 * Author: Wendi Van Sickle
 * Clears all divs on index page except movie library form 
 *
 **********************************************************************************/
function clearDivsMovieLibrary() {
    document.getElementById('searchResults').style.display = "initial";
    document.getElementById('addMovie').style.display = "initial";
    document.getElementById('movieLibrary').style.display = "initial";
    document.getElementById('browseMovies').style.display = "initial";
    var movieLibraryPage = new XMLHttpRequest();
    movieLibraryPage.onreadystatechange = function () {
        if (movieLibraryPage.readyState === 4 && movieLibraryPage.status === 200) {
            document.getElementById('searchResults').style.display = "none";
            document.getElementById('addMovie').style.display = "none";
            document.getElementById('browseMovies').style.display = "none";
            document.getElementById('movieLibrary').innerHTML = movieLibraryPage.responseText;
        }
    };
    movieLibraryPage.open('GET', '../library/library.php', true);
    movieLibraryPage.send();
}
/***********************************************************************************
 * Display Browse Movies form alone
 * Author: Wendi Van Sickle
 * Clears all divs on index page except browse movies form 
 * 
 **********************************************************************************/
function clearDivsBrowseMovies() {
    document.getElementById('searchResults').style.display = "initial";
    document.getElementById('addMovie').style.display = "initial";
    document.getElementById('movieLibrary').style.display = "initial";
    document.getElementById('browseMovies').style.display = "initial";
    var browsePage = new XMLHttpRequest();
    browsePage.onreadystatechange = function () {
        if (browsePage.readyState === 4 && browsePage.status === 200) {
            document.getElementById('searchResults').style.display = "none";
            document.getElementById('addMovie').style.display = "none";
            document.getElementById('movieLibrary').style.display = "none";
            document.getElementById('browseMovies').innerHTML = browsePage.responseText;
        }
    };
    browsePage.open('GET', '../browse/browse.php', true);
    browsePage.send();
}
/* End clearDivs functions */
