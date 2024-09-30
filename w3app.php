<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mars Pilot Application</title>
    <script>
        function validateForm(){
            event.preventDefault();
            
            var fullName = document.getElementById("fullName").valur;
            console.log("fullName= " + fullName);
        }
    </script>
</head>
<body>
   <header>
    <h1>
        Mars Pilot Application
    </h1>
   </header> 
   <main>
    <!-- Full Name, first and last -->
    <form name="appForm" id="appForm" onsubmit="return validateForm();" action="w3app.php" method="post">
        <label for="fullName">Full Name:</label>
        <input type="text" id="fullName" name="fullName">
        <br>

        <!-- Rank and/or Position -->
        <label for="rank">Rank/Position:</label>
        <input type="text" id="rank" name="rank">
        <br>  

        <!-- How many years they have have been in this position -->
        <label for="years">How Many Years Have You Been in This Position/Rank?:</label>
        <input type="text" id="years" name="years">
        <br>

          <!-- The pilots Age -->
          <label for="age">Age:</label>
        <input type="text" id="age" name="age">
        <br>

            <!-- Rank and/or Position -->
        <label for="people">How Many People Have You Worked With? (input 0 if none)</label>
        <input type="text" id="people" name="people">
        <br>
        <input type="submit" value="Submit">
    </form>

   </main>
</body>
</html>