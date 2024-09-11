<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student Result</title>
        <link rel="stylesheet" href="result.css">
    </head>
    <body>
        <?php
            $name = $eng = $maths = $gen = $average = $grade = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Get form data
                $name = $_POST['name'];
                $eng = $_POST['eng'];
                $maths = $_POST['maths'];
                $gen = $_POST['gen'];

                // Calculate the average
                $average = ($eng + $maths + $gen) / 3 . "%";

                // Determine the grade based on average
                if ($average >= 50) {
                    $grade = "PASS";
                } else {
                    $grade = "FAIL";
                }
            }
        ?>

        <form name="calculator" method="post" action="">
            <h1>STUDENT RESULTS</h1>

            <div>
                <div class="result">
                    <label class="distance">Name:</label>
                    <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>"><br>
                </div>

                <div class="result">
                    <label class="distance">English:</label>
                    <input id="eng" type="number" name="eng" value="<?php echo htmlspecialchars($eng); ?>"><br>
                </div>

                <div class="result">
                    <label class="distance">Mathematics:</label>
                    <input id="maths" type="number" name="maths" value="<?php echo htmlspecialchars($maths); ?>"><br>
                </div>

                <div class="result">
                    <label class="distance">General Paper:</label>
                    <input id="gen" type="number" name="gen" value="<?php echo htmlspecialchars($gen); ?>"><br>
                </div>

                <div class="result">
                    <label class="distance"></label>
                    <input type="submit" value="GET RESULT" class="button"><br>
                </div>

                <div class="result">
                    <label class="distance">Average:</label>
                    <input id="avrg" type="text" name="avrg" value="<?php echo htmlspecialchars($average); ?>" readonly><br>
                </div>

                <div class="result">
                    <label class="distance">Grade:</label>
                    <input id="grde" type="text" name="grde" value="<?php echo htmlspecialchars($grade); ?>" readonly><br>
                </div>
            </div>
        </form>
    </body>
</html>
