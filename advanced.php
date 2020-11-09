<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>My first 5 weeks at CodeFactory</title>
    <style>
        body{
            background-color: grey;
        }
        
    </style>
  </head>
  <body>
    
    <div class="container">
    <!-- php first exercise -->
    <?php
    // Creture in celcius change it to effect the output
    $C = 25;
    // formula cescius to fahrenheit
    $F = ($C * 9/5)+32;
    // echo "$F";

    switch (true){ #switch needs to be true so that we can compare 0 === 0. 0 is by default false and in this special case it will not allow false === true even though the statement is correct and displays the next (first) false statement
        // case ($C == 0):
        //     echo"
        //         <div class='mt-4 d-flex justify-content-center'>
        //             <div class='card center' style='width: 50rem;'>
        //                 <img src='https://cdn.pixabay.com/photo/2016/08/31/15/11/hinduism-1633815_960_720.jpg' class='card-img-top' alt='cold'>
        //                 <div class='card-body text-center'>
        //                     <h5 class='card-title '>00</h5>
        //                     <p class='card-text'>It is very cold outside. The current weather is {$C}°C or {$F}°F outside.</p>
        //                 </div>
        //             </div>
        //         </div>
        //     ";
        //     break;
        case ($C >= -5 && $C <= 5):
            echo"
                <div class='mt-4 d-flex justify-content-center'>
                    <div class='card center' style='width: 50rem;'>
                        <img src='https://images.unsplash.com/photo-1519944159858-806d435dc86b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80' class='card-img-top' alt='cold'>
                        <div class='card-body text-center'>
                            <h5 class='card-title '>The weather today</h5>
                            <p class='card-text text-danger'>It is very cold outside. The current weather is {$C}°C or {$F}°F outside.</p>
                        </div>
                    </div>
                </div>
            ";
            break;
        case ($C >= 6 && $C <= 10):
            echo"
                <div class='mt-4 d-flex justify-content-center'>
                    <div class='card center' style='width: 50rem;'>
                        <img src='https://images.unsplash.com/photo-1456356627738-3a96db6e2e33?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1358&q=80' class='card-img-top' alt='cold'>
                        <div class='card-body text-center'>
                            <h5 class='card-title '>The weather today</h5>
                            <p class='card-text text-danger'>It is cold outside. The current weather is {$C}°C or {$F}°F outside.</p>
                        </div>
                    </div>
                </div>
            ";
            break;
        case ($C >= 11 && $C <= 15):
            echo"
                <div class='mt-4 d-flex justify-content-center'>
                    <div class='card center' style='width: 50rem;'>
                        <img src='https://images.unsplash.com/photo-1462275646964-a0e3386b89fa?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60' class='card-img-top' alt='cold'>
                        <div class='card-body text-center'>
                            <h5 class='card-title '>The weather today</h5>
                            <p class='card-text'>It is pleasent outside. The current weather is {$C}°C or {$F}°F outside.</p>
                        </div>
                    </div>
                </div>
            ";
            break;
        case ($C >= 16 && $C <= 20):
            echo"
                <div class='mt-4 d-flex justify-content-center'>
                    <div class='card center' style='width: 50rem;'>
                        <img src='https://images.unsplash.com/photo-1501426026826-31c667bdf23d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=676&q=80' class='card-img-top' alt='cold'>
                        <div class='card-body text-center'>
                            <h5 class='card-title '>The weather today</h5>
                            <p class='card-text'>It is warm outside. The current weather is {$C}°C or {$F}°F outside.</p>
                        </div>
                    </div>
                </div>
            ";
            break;
        case ($C >= 21):
            echo"
                <div class='mt-4 d-flex justify-content-center'>
                    <div class='card center' style='width: 50rem;'>
                        <img src='https://images.unsplash.com/photo-1489573280374-2e193c63726c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80' class='card-img-top' alt='cold'>
                        <div class='card-body text-center'>
                            <h5 class='card-title '>The weather today</h5>
                            <p class='card-text text-danger'>It is hot outside. The current weather is {$C}°C or {$F}°F outside.</p>
                        </div>
                    </div>
                </div>
            ";
            break;
        default:
        echo"
        <div class='mt-4 d-flex justify-content-center'>
            <div class='card center' style='width: 50rem;'>
                <img src='https://cdn.pixabay.com/photo/2017/03/09/12/31/error-2129569_960_720.jpg' class='card-img-top' alt='cold'>
                <div class='card-body text-center'>
                    <h5 class='card-title '>OOOPPPPSSS!</h5>
                    <p class='card-text'>There seems to be an error</p>
                </div>
            </div>
        </div>
    ";
    }
    ?>
  </div>

    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>