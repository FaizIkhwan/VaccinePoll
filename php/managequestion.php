<!DOCTYPE html>
<html>

    <head>
        <link rel="stylesheet" href="/css/style.css">
    </head>

    <body>

        <!-- Navigation -->
        <div class="navigation">
            <div class="innerNavigation">
                <input id="btnDashboard" type="button" value="Dashboard" class="btnMenu">
            </div>
        </div>
        <div class="description">
            <h1 class="page-header" align="center">MANAGE QUESTION</h1>

                The control panel to update the questions.<br><br>
        </div>
        <!-- List of questions -->
        <div class="list-of-question">
            <form method="POST" action="updatequestion.php">
                <?php

                require "conn.php";

                $mysql_query = "select * from questions;";
                $result = mysqli_query($con, $mysql_query);

                $i = 1;

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo $i . ". ";
                        echo "<input type=\"text\" name=\"q" . $i . "\" id=\"q" . $i . "\" value=\"$row[questiondescription]\">";    
                        echo "<input type=\"text\" name=\"q" . $i . "a1\" id=\"q" . $i . "a1\" value=\"$row[answer1]\">";    
                        echo "<input type=\"text\" name=\"q" . $i . "a2\" id=\"q" . $i . "a2\" value=\"$row[answer2]\">";    
                        echo "<input type=\"text\" name=\"q" . $i . "a3\" id=\"q" . $i . "a3\" value=\"$row[answer3]\">";    
                        echo "<br><br>";
                        $i++;
                    }
                }
                else {
                    echo "0 results";
                }
                ?>

                <input type="submit" value="Update" name="update">
            </form>
        </div>
    </body>

    <script type="text/javascript">
        document.getElementById("btnDashboard").onclick = function () {
            location.href = "/dashboard.html";
        };
    </script>

</html>
