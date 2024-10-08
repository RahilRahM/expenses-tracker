<!DOCTYPE html>
<html>
<head>
	<title>Header</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Iconbox -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--style-->
    <style>
        .navbar-scroll .nav-link,
        .navbar-scroll .navbar-toggler-icon,
        .navbar-scroll .navbar-brand {
        color: #262626;
        }

        .navbar-scroll {
        background-color: #FFC017;
        }

        /* Color of the links AFTER scroll */
        .navbar-scrolled .nav-link,
        .navbar-scrolled .navbar-toggler-icon,
        .navbar-scroll .navbar-brand {
        color: #262626;
        }

        /* Color of the navbar AFTER scroll */
        .navbar-scrolled {
        background-color: #fff;
        }

    </style>
	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#">logo</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
					<li
          >
						<a class="nav-link" href="#"><span class="material-icons">
                            home</span>
                        </a>
					</li>
					<li>
						<a class="nav-link" href="#"><span class="material-icons">
                            settings
                        </span></a>
					</li>
					<li>
						<a class="nav-link" href="#"><span class="material-icons">
                            notifications
                        </span></a>
					</li>
					<li class="nav-item dropdown">
                        <a
                          class="nav-link dropdown-toggle d-flex align-items-center"
                          href="#"
                          id="navbarDropdownMenuLink"
                          role="button"
                          data-toggle="dropdown"
                          aria-expanded="false"
                        >
                        <img
                            src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg"
                            class="rounded-circle"
                            height="30"
                            alt=""
                            loading="lazy"
                          />
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="#">My profile</a></li>
                          <li><a class="dropdown-item" href="#">Settings</a></li>
                          <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </li>
				</ul>
			</div>
		</div>
	</nav>
</body>
</html>
