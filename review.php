<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cinerate";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Function to add a review to the database
function addReview($reviewText, $rating, $email, $conn) {
    $sql = "INSERT INTO review1 (review_text, rating, email) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sss", $reviewText, $rating, $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    } else {
        echo "Error adding review: " . mysqli_error($conn);
    }
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $reviewText = $_POST["review"];
    $rating = $_POST["rating"];
    $email = $_POST["email"]; // Get the email from the form

    addReview($reviewText, $rating, $email, $conn); // Pass email to addReview function
}
$sql = "SELECT * FROM review1";
$result = mysqli_query($conn, $sql);
// Close connection
mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>movierating</title>
</head>
<style>
    .review-form {
    text-align: center;
    margin-bottom: 20px;
    font-family: "Sen", sans-serif;

  }

  .review-form h2 {
    font-size: 24px;
    margin-bottom: 10px;
  }

  .review-form label {
    font-weight: bold;
  }

  .review-form textarea, 
  .review-form input[type="number"] {
    height: 100px;
    width: 50% 50%;
    margin-bottom: 10px;
  }

  .review-form button {
    padding: 10px 20px;
    background-color: #43f724;
    color: #fff;
    border: none;
    cursor: pointer;
  }

  .review-form button:hover {
    background-color: #44eb0d;
  }

  .review-list h2 {
    font-family: "Sen", sans-serif;
    font-size: 24px;
    margin-bottom: 10px;
  }

  .review-list ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
  }

  .review-list li {
    margin-bottom: 10px;
  }

  .rating-icons {
    font-size: 24px;
  }

  .rating-icons i {
    cursor: pointer;
    color: #ccc;
    transition: color 0.3s ease;
    margin-right: 5px; 
  }

  .rating-icons i:hover {
    color: #ffc107; 
  }

  .review-list{
    font-family: "Sen", sans-serif;
    text-align: center;
  }

  .movie-details {
    border: 1px solid #ccc;
    padding: 10px;
    font-family: "Sen", sans-serif;
    margin-bottom: 20px;
}

.movie-details h2 {
    font-size: 18px;
    margin-bottom: 10px;
}

.movie-details p {
    margin: 5px 0;
}

.movie-details strong {
    font-weight: bold;
}

#email {
    margin-bottom: 10px; /* Adjust spacing between the input field and the line break */
}

/* Style the line break */
#email + br {
    display: none; /* Hide the line break */
}
table {
            width: 100%;
            display: flex;
            justify-content: center;
            
        }
        th, td {
            
            padding: 0px;
            justify-content: center;
            margin: 0 auto;
            align-self: start;
            text-align: left;
            border-radius: 2px;
        }
        th {
            background-color: #43f724;
        }

    /* Your CSS styles here */
</style>

<body>
<body>
<div>
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <h1 class="logo">CineRate</h1>
            </div>
            <div class="menu-container">
                <ul class="menu-list">
                    <li class="menu-list-item active">HOME</li>
                    <li class="menu-list-item active">MOVIES</li>
                    <li class="menu-list-item active">SERIES</li>
                    <li class="menu-list-item active">TOP50Flim</li>
                    <li class="menu-list-item active">WATCHLIST</li>
                    <li class="menu-list-item active">ABOUT</li>
                    <li class="search-container">
                        <input type="text" class="search-bar" placeholder="Search">
                        <button class="search-button"><i class="fas fa-search"></i></button>
                    </li>
                </ul>
            </div>
            <div><img class="profile-picture" src="img/profile.png" alt=""></div>
            <div class="profile-container" onclick="window.location.href = 'login.html';">
                <button class="profile-text-container">
                    <span class="profile-text">SIGN IN</span>
                </button>
            </div>
            <div class="toggle">
                <i class="fas fa-moon toggle-icon"></i>
                <i class="fas fa-sun toggle-icon"></i>
                <div class="toggle-ball"></div>
            </div>
        </div>
    </div>
    <div class="sidebar">
        <i class="left-menu-icon fas fa-search"></i>
        <a href="index.html"><i class="left-menu-icon fas fa-home"></i></a>
        <i class="left-menu-icon fa fa-film"></i>
        <i class="left-menu-icon fas fa-tv"></i>
        <i class="left-menu-icon fas fa-bookmark"></i>
        <i class="left-menu-icon fas fa-user"></i>
    </div>
    <h1 class="movie-rate-title">LOVER</h1>
    <h5 class="movie-rate-title">2024 . 2h 25m</h5>
    <div class="side-image-img">
            <img src="img/1.jpg" alt="Left Image">
    </div>
    <div class="container">
        <div class="review-form">
            <button id="watchTrailer">Watch Trailer</button><br><br>
            <p>Arun and Divya's six-year relationship starts unraveling as they drift apart, raising the question of whether love can withstand such differences.</p><br>
            <div class="movie-details">
                <p><strong>Director:</strong> John Doe</p>
                <p><strong>Hero:</strong> Arun</p>
                <p><strong>Heroine:</strong>DIvyar</p>
                <p><strong>Music Director:</strong> Writer </p>
                <p><strong>Cinemotographer:</strong> Writer</p>
                <p><strong>Editor:</strong> Writer</p>
            </div>
    <!-- Your HTML code here -->
    <div class="review-form">
        <h1>Add Review</h1>
        <form id="reviewForm" method="POST">
            <label for="review">Review:</label><br>
            <textarea id="review" name="review" rows="4" cols="50"></textarea><br>
            <label for="rating">Rating:</label><br>
            <div id="rating" class="rating-icons">
                <input type="radio" id="star1" name="rating" value="1">
                <label for="star1">☆</label>
                <input type="radio" id="star2" name="rating" value="2">
                <label for="star2">☆</label>
                <input type="radio" id="star3" name="rating" value="3">
                <label for="star3">☆</label>
                <input type="radio" id="star4" name="rating" value="4">
                <label for="star4">☆</label>
                <input type="radio" id="star5" name="rating" value="5">
                <label for="star5">☆</label>
            </div><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email"><br> <!-- Added email input field -->
            <br>
            <button type="submit">Submit Review</button>
        </form>
    </div>
    <div class="review-list">
            <h2>Reviews</h2>
            <table>
        <tr>
            <th>Review</th>
            <th>Rating</th>
            <th>Email</th>
        </tr>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["review_text"] . "</td>";
                echo "<td>" . $row["rating"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No reviews found</td></tr>";
        }
        ?>
    </table>
            <br><br><br><br>
        </div>
    </div>
    <footer>
        <h1 class="logo">CineRate</h1>
    <div class="footer1 ">
      Connect with us at <br><br>
      <div class="social-media">
        <a href="index.html"><i class="left-menu-icon fab fa-facebook-f"></i></a>
        <a href="index.html"><i class="left-menu-icon fab fa-linkedin"></i></a>
        <a href="index.html"><i class="left-menu-icon fab fa-twitter"></i></a>
        <a href="index.html"><i class="left-menu-icon fab fa-instagram"></i></a>
        <a href="index.html"><i class="left-menu-icon fab fa-youtube"></i></a>
      </div>
    </div>
</footer>
<div style="background-color: #000000; color: #fff; text-align: center; padding: 10px;">© 2023 cinerate.com. All rights reserved.</div>
 
    <!-- Your JavaScript code here -->

    <script>
          document.getElementById("watchTrailer").addEventListener("click", function() {
        var trailerLink = 'https://www.youtube.com/watch?v=UkFD3pKmSks';
        window.open(trailerLink, '_blank');});
    </script>
</body>

</html>
