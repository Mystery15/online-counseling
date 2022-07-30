<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Abuad ~ Create Account</title>
    <link rel="stylesheet" href="css/style.css">

    <style>
    .tab {
        overflow: hidden;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
    }

    .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
    }

    .tab button:hover {
        background-color: #ddd;
    }

    .tab button.active {
        background-color: #ccc;
    }

    .tabcontent {
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-top: none;
    }
    </style>
</head>

<body>

    <div class="js-animsition animsition" id="site-wrap" data-animsition-in-class="fade-in"
        data-animsition-out-class="fade-out">


        <header class="templateux-navbar dark" role="banner">

            <div class="container" data-aos="fade-down">
                <div class="row">

                    <div class="col-3 templateux-logo">
                        <a href="index.html" class="animsition-link">Counsel</a>
                    </div>
                    <nav class="col-9 site-nav">
                        <button
                            class="d-block d-md-none hamburger hamburger--spin templateux-toggle templateux-toggle-light ml-auto templateux-toggle-menu"
                            data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                        <ul class="sf-menu templateux-menu d-none d-md-block">
                            <li>
                                <a href="index.php" class="animsition-link">Home</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <div class="templateux-section">
            <div class="container">
                <h1 class="heading text-center">Welcome</h1>
                <div class="row mb-5">
                    <div class="col-md-5 pr-md-5 mb-5">
                        <div class="tab">
                            <button class="tablinks" onclick="openCreate(event, 'Student')">Student</button>
                            <button class="tablinks" onclick="openCreate(event, 'Counselor')">Counselor</button>
                        </div>
                        <div id="Student" class="tabcontent">
                            <form action="Student/student_login.php" method="post">
                                <div class="form-group">
                                    <label for="mnum">Matriculation Number</label>
                                    <input type="text" name="mat_number" class="form-control" id="mat_num">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" class="btn btn-primary py-3 px-5" value="Submit">
                                </div>
                            </form>
                        </div>

                        <div id="Counselor" class="tabcontent">
                            <form action="Counselor/counselor_login.php" method="post">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" class="form-control" id="uname">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="upass">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submitCon" class="btn btn-primary py-3 px-5"
                                        value="Submit">
                                </div>
                            </form>
                        </div>
                        <div class="media-body">
                            <p>Don't have an account? <a href="create_account.php">Register Here</a></p>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <h1 class="heading text-center">
                            <img src="images/abuad.jpg" alt="Afe Babalola Logo">
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <footer class="templateux-footer bg-light">
            <div class="container">

                <div class="row pt-5 text-left">
                    <div class="col-md-12 text-left">
                        <p>
                            Copyright &copy;
                            <script>
                            document.write(new Date().getFullYear());
                            </script>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script>
    function openCreate(evt, userRole) {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(userRole).style.display = "block";
        evt.currentTarget.className += " active";
    }
    </script>
    <script src="js/scripts-all.js"></script>
    <script src="js/main.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="js/google-map.js"></script>
</body>

</html>