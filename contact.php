<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta charset="UTF-8"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>SanvardhitBharat</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">SanvardhitBharat</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">HOME<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.php">EVENTS</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="about.php">ABOUT US</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">HELP</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="contact.php">CONTACT</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="register.php">LOGIN</a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">FORM</h2>
        </div>

        <div class="w-50 m-auto">
            <form action="info.php" method="post">
                <div class="form-group">
                    <label>User Name</label>
                    <input type="text" name="user" autocomplete="off" class="form-control">
                </div>

                <div class="form-group">
                    <label>Email ID</label>
                    <input type="text" name="email" autocomplete="off" class="form-control">
                </div>

                <div class="form-group">
                    <label>Contact Number</label>
                    <input type="text" name="mobile" autocomplete="off" class="form-control">
                </div>

                <div class="form-group">
                    <label>Elaborate Your Concern</label>
                    <textarea class="form-control" name="comments" id="" cols="30" rows="10"></textarea>
                </div>


                <button type="submit" class="btn btn-outline-primary">SUBMIT</button>

            </form>
        </div>
    </section>


</body>

</html>