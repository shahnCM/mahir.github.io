<html>
    <head>
        <title>App Name - @yield('title')</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Andika+New+Basic&family=PT+Sans+Narrow&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Custom Css -->
        <style>
            * {
            font-family: 'PT Sans Narrow', sans-serif;
            }

            .army-green, .text-army-green {
                color: #4b5320 !important;
            }  

            #page-container {
                position: relative;
                min-height: 100vh;
            }

            #content-wrap {
                padding-bottom: 2.5rem;
            }

            footer {
                position: absolute;
                bottom: 0;
                width: 100%;
                height: 2.5rem;            /* Footer height */
            }

            .copyright {
                width: 100%;
                color: black;
                line-height: 40px;
                font-size: 0.7em;
                text-align: center;
            }

        </style>

    </head>
    <body id="page-container">
        @include('partials.navbar')

        <div class="container" id="content-wrap">
            @yield('content')
        </div>



        <footer>
            <p class="copyright">&copy; Mahir Shahrier 2020-2025</p>
        </footer>


        <!-- Script -->    
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    </body>


</html>