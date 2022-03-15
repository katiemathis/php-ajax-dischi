<?php

    require __DIR__ . '/database.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="header_container d-flex justify-content-between">
            <div class="row header col-1 ">
                <img src="logo-small.svg" alt="">
            </div>
            <div class="dead_space row header col-11">
            </div>      
        </div>
    </header>

    <main>
        <div v-if="loadingInProgress" class="main_container">

            <div class="container" >
                <PageLoading />
            </div>
        </div>
            
        <div class="container">
            <div class="row row-cols-lg-6 row-cols-md-4 row-cols-3 justify-content-center mx-10">
                <div class="col my_card g-3 p-3 m-3"> 
                    <?php
                        foreach($database as $disc) {
                            echo "<div class='disc'";
                            echo "<img src='" .$disc['poster'] . "'/>";
                            echo "<h3>" .$disc['title'] . "</h3>";
                            echo "<small>" . $disc['author'] . "</small>";
                            echo "<strong>" . $disc['year'] . "</strong>";
                            echo "</div>";
                        }
                    ?>
                        
                    <!-- <div class="row"> 
                       <img class="img-fluid" src="https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg">
                       <h5 class="my_title mt-2 pt-2">Title</h5>
                       <div class="my_text">Author</div>
                       <div class="my_text">Year</div>
                    </div>-->
                 </div>
            </div>
        </div>
    </main>
    
</body>

</html>