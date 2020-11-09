<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>My first 5 weeks at CodeFactory</title>
  </head>
  <body>
    
    <div class="container">
    <!-- php first exercise -->
    <?php
    $name = "James Bond";
    echo "<h1>My name is $name</h1>";

    // second exercise
    $date  = date("D");
    // if ($date == "Mon")
    //     echo "<p class='mt-5'>Today is Monday!</p>";
    //    else
    //     echo "<p class='mt-5'>What day is it?</p>";
    
// third exercise
    switch ($date){

        case "Mon":
            echo "<p class='mt-4 mb-4' >Today is Monday</p>";
        break;
        case "Tue":
            echo "<p class='mt-4 mb-4' >Today is Tuesday</p>";
            break;
        case "Wed":
            echo "<p class='mt-4 mb-4' >Today is Wednesday</p>" ;
            break;
        case "Thu":
            echo "<p class='mt-4 mb-4' >Today is Thursday</p>";
            break;
        case "Fri" :
            echo "<p class='mt-4 mb-4' >Today is Friday</p>";
            break;
        case  "Sat":
            echo "<p class='mt-4 mb-4' >Today is Saturday</p>";
            break ;
        case "Sun":
            echo "<p class='mt-4 mb-4' >Today is Sunday</p>" ;
            break;
        default:
            echo "<p class='mt-4 mb-4' >Hava a wounderfull week!</p>" ;
    }

    // fourth exercise
    // for loop
        $loop = 0;
        for ($i= 0; $i <50; $i++){
            // echo "<p>My name is $name!</p>";
            // echo "$i";
        }
        // echo "<p> What is my name? $i</p>";

// while loop
        // $n = 0;
        // while ($n <50){
        //     echo "<p>My name is $name!</p>";
        //     $n++;
        //     echo "$n";
        // }

// do while loop
    // $t=0;
    //  do {
    //      $t ++;
    //      echo "$t";
    //  } while ($t<50);
    //      echo "<p> My name is $name! </p>";
    //      echo "$t";
     
// exercise 5
        // $array = array(1,2,3,4,5,6,7,8,9,10);
        // echo "<p>Student ID's are as follows:</p>";
        // foreach($array as $value){
        //     echo "<p>Strudent $value</p>";
        // }

// exercise 6
        $cars = array(
            array("Volvo",22,18),
            array("BMW",15,13),
            array("Saab",5,2),
            array("Land Rover",17,15)
        );
        echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
        echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
        echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
    ?>
  </div>


    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>