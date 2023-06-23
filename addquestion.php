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
      <div class="container">
        <form action="mastercontroller.php" method="POST">
            <h2><center>Add Questions</center></h2>
            <?php 
            session_start();
            $tname = $_SESSION['name'];
            $qnno = $_SESSION['qnno']; 

            // New modification
            $q = "SELECT testid from mainpage where testname = '$tname'";
            $result = mysql_query($q);
            $row = mysql_fetch_assoc($result);

            $_SESSION['testid'] = $row['testid'];

            if ($qnno != 0) {
if(!isset($_SESSION['X']))
{
    $_SESSION['X'] = 1;
}else{
    $_SESSION['X']++;
}

            


                ?>
                <table border="1" align="center">
                    <tr>
                        <th colspan="2"><h3><center>Question No. <?php echo $_SESSION['X'];  ?></center></h3></th>
                        <input type="text" name="Qno" value="<?php echo $_SESSION['X'];  ?>" hidden>
                    </tr>
                    <tr>
                        <td>Question:</td>
                        <td>
                            <input type="text" name="Question">
                        </td>
                    </tr>
                    <tr>
                        <td>Option A:</td>
                        <td>
                            <input type="text" name="A">
                        </td>
                    </tr>
                    <tr>
                        <td>Option B:</td>
                        <td>
                            <input type="text" name="B">
                        </td>
                    </tr>
                    <tr>
                        <td>Option C:</td>
                            <td>
                                <input type="text" name="C">
                            </td>
                    </tr>
                    <tr>
                        <td>Option D:</td>
                        <td>
                            <input type="text" name="D">
                        </td>
                    </tr>
                    <tr>
                        <td>Correct Answer:</td>
                        <td>
                            <select name="CorrectAnswer">
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <?php
                
                

            } else {
                echo "<script>
                            alert('All Questions saved Successfully!');
                            location.href='addexam.php';
                        </script>";
                        unset($_SESSION['X']);
                        session_destroy();
            }
            ?>

            <center>
                <br/>
                <input type="submit" name="Qsub" value="Submit" style="padding: 20px 120px;">
            </center>
        </form>
    </div>
</body>
</html>