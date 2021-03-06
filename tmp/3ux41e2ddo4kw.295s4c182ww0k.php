<!--
Author: Austin Parker
Date: 6-20-2020
home.html
Home page of dating website defined by F3 view.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Dating Site</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <h4>Dating Site</h4>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Personal Information</h1>
            <form action="#" method="post">
                <fieldset class="form-group">
                    <div class="form-group">
                        <label for="Fname"><b>First Name</b></label>
                        <input type="text" class="form-control" id="Fname" name="Fname">
                    </div>
                    <div class="form-group">
                        <label for="Lname"><b>Last Name</b></label>
                        <input type="text" class="form-control" id="Lname" name="Lname">
                    </div>
                    <div class="form-group">
                        <label for="age"><b>Age</b></label>
                        <input type="text" class="form-control" id="age" name="age">
                    </div>

                        <b>Male</b>
                        <input type="radio" class="form-control" id="male" name="gender" value="male">
                        <b>Female</b>
                        <input type="radio" class="form-control" id="female" name="gender" value="female">


                    <div class="form-group">
                        <label for="phone"><b>Phone Number</b></label>
                        <input type="text" class="form-control" id="phone" name="phone">

                    </div>
                </fieldset>
        </div>
        <div class="col">
            <p id="privacy"><b>Note:</b> All information entered is protected by our <a href="#">privacy policy</a>. Profile information can
                only be viewed by others with your permission</p>
        </div>
    </div>
    <div class="row justify-content-end">
        <div class="col-2">
            <button type="submit" class="btn btn-primary">Next></button>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>