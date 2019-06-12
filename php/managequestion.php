<!DOCTYPE html>
<html>

    <head>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>

        <!-- Navigation -->
        <div class="navigation">
            <div class="innerNavigation">        
                <input id="btnBack" type="button" value="Back" class="btnMenu">    
            </div>  
        </div>

        <!-- List of questions -->
        <div class="list-of-question">
            <form>

                <?php

                require "conn.php";

                $mysql_query = "select * from questions;";
                $result = mysqli_query($con, $mysql_query);

                $i = 1;

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {

                        echo $i;        
                        echo "<input type=\"text\" id=\"q" . $i . "\" value=\"$row[questiondescription]\">";    
                        echo "<input type=\"text\" id=\"q" . $i . "\" value=\"$row[answer1]\">";    
                        echo "<input type=\"text\" id=\"q" . $i . "\" value=\"$row[answer2]\">";    
                        echo "<input type=\"text\" id=\"q" . $i . "\" value=\"$row[answer3]\">";    
                        echo "<br>";

                        $i++;

                    }
                    
                } 
                else {
                    echo "0 results";
                }

                ?>

                <input type="submit" value="Done">
            </form>
        </div>   

    </body>

    <script type="text/javascript">
        document.getElementById("btnBack").onclick = function () {
            location.href = "index.html";
        };
    </script>

</html>