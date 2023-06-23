<?php
    include('a_header.php');
    include('dbconnect.php')
    ?>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e2e2e2;
        }

        
    </style>
<center><br><br><br><br>
     <div class="container" align="center">
        
        <form action="mastercontroller.php" method="POST">
            
            <h2>Exam Registration Portal</h2>
                <table><tr><td>
            <label for="name">Exam Name</label></td><td>
            <input type="text" id="name" name="name" required></td></tr>
<tr><td>
            <label for="date">Date of Exam</label></td><td>
            <input type="date" id="date" name="date" required></td></tr>
<tr><td>
            <label for="qnno">No of Questions</label></td><td>
            <input type="text" id="qnno" name="qnno" required></td></tr>
</tr></table><br><br>
            <input type="submit" name="AdminSubmit" value="Submit" style="background:#4CAF50 ">
            <br><br>
            <!-- <input type="submit" name="nil" value="VIEW TEST"> -->
            
        </form>
    </div>
   
</body>
</html>