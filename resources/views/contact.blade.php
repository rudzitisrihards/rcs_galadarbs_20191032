<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="/style.css">

    <script src="https://kit.fontawesome.com/d53fe27e47.js" crossorigin="anonymous"></script>

    <title>Picture stories</title>

    <style>
        /* remove html defaults */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box; /* include any border or padding in element */
}

img {
    display: block; /* remove default img padding */
    width: 100%; /* scale img to container */
}

/* Links */
a,
a:focus,
a:hover {
    color: #fff;
}

/* Custom default button */
.btn-secondary,
.btn-secondary:hover,
.btn-secondary:focus {
    color: #333;
    text-shadow: none;
    /* Prevent inheritance from `body` */
    background-color: #fff;
    border: .05rem solid #fff;
}

/* Base structure */
body {
    display: flex;
    flex-direction: column;
    background-image: url("https://picsum.photos/id/1021/1500/1000");
    background-repeat: no-repeat;
    background-size: cover; /* Stretch to fill screen */
    background-position: center;
    min-height: 100vh;
    color: #fff;
    text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
    box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
    background-color: #333;
}

.container {
    padding: 0px;
}

.cover-container {
    max-width: 42em;
    flex-grow: 1;
}

.card-text {
    color: #333;
    text-shadow: none;
}

.card img {
    border-radius: .25rem;
}

.gallery-title {
    padding-top: 50px;
}

.gallery-img {
    padding-bottom: 20px;
}

/* Header */
.masthead {
    margin-bottom: 2rem;
}

.masthead-brand {
    margin-bottom: 0;
}

.nav-masthead .nav-link {
    padding: .25rem 0;
    font-weight: 700;
    color: #fff;
    background-color: transparent;
    border-bottom: .25rem solid transparent;
}

.nav-masthead .nav-link:hover,
.nav-masthead .nav-link:focus {
    border-bottom-color: rgba(255, 255, 255, .25);
}

.nav-masthead .nav-link+.nav-link {
    margin-left: 1rem;
}

.nav-masthead .active {
    color: #fff;
    border-bottom-color: #fff;
}

@media (min-width: 48em) {
    .masthead-brand {
        float: left;
    }

    .nav-masthead {
        float: right;
    }
}


/* Cover */
.cover {
    padding: 0 1.5rem;
}

.cover .btn-lg {
    padding: .75rem 1.25rem;
    font-weight: 700;
}

/* Footer */
.mastfoot {
    color: #fff;
}

/* Style all font awesome icons */
.fab {
    padding: 15px;
    font-size: 25px;
    width: 50px;
    text-align: center;
    text-decoration: none;
  }
  
.fab:hover {
    text-decoration: none;
    opacity: 0.7;
}

/* Back to top - button */
#myBtn {
    display: none; /* Hidden by default */
    position: fixed; /* Fixed/sticky position */
    bottom: 20px; /* Place the button at the bottom of the page */
    right: 30px; /* Place the button 30px from the right */
    z-index: 99; /* Make sure it does not overlap */
    border: none; /* Remove borders */
    outline: none; /* Remove outline */
    background-color: #333; /* Set a background color */
    color: white; /* Text color */
    cursor: pointer; /* Add a mouse pointer on hover */
    padding: 15px; /* Some padding */
    border-radius: 100px; /* Rounded corners */
    font-size: 18px; /* Increase font size */
  }
  
  #myBtn:hover {
    background-color: #fff;
    color: #333;
  }
  </style>

  
</head>


<body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
            <div class="inner">
                <h3 class="masthead-brand">Picture stories</h3>
                <nav class="nav nav-masthead justify-content-center">
                    <a class="nav-link" href="/">Home</a>
                    <a class="nav-link" href="/album">Album</a>
                    <a class="nav-link active" href="#">Contact</a>
                </nav>
            </div>
        </header>

        <main role="main" class="inner">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19531.329878913686!2d-9.716464505894354!3d52.2721449656831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x484535641a5c62e9%3A0x6c71e0639730367f!2sTralee%2C%20Co.%20Kerry%2C%20Ireland!5e0!3m2!1sen!2slv!4v1571690345890!5m2!1sen!2slv" width="640" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        
        </br>
        </br>
        
            <form id="contact-form" method="POST" action="submitContact" role="form">
                @csrf
                <div class="messages"></div>

                <div class="controls">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_name">Name</label>
                                <input id="form_name" type="text" name="name" class="form-control"
                                    placeholder="Please enter your name" required="required"
                                    data-error="Firstname is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_email">Email</label>
                                <input id="form_email" type="email" name="email" class="form-control"
                                    placeholder="Please enter your email" required="required"
                                    data-error="Valid email is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="form_message">Message</label>
                                <textarea id="form_message" name="message" class="form-control"
                                    placeholder="Message for me" rows="4" required="required"
                                    data-error="Please, leave us a message."></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <input type="submit" class="btn btn-secondary" value="Send message">
                        </div>
                    </div>
                </div>

            </form>

        </main>


        <footer class="mastfoot mt-auto">
            <div class="inner">
                <p>This is a footer. Something should be written here, and below are some social links.</p>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </footer>
    </div>





    <!-- Optional JavaScript -->
    <!--\ jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script src="/index.js"></script>

</body>

</html>