<?php
include('dbconnect.php');
?>
<table border="1">
	<thead>
		<tr>
                    <th>Sr no</th>
                    <th>Test Name</th>
                    <th>Date Posted</th>
                    <th>Total Questions</th>
                    <th>Attend</th>			
		</tr>
	</thead>
	<tbody>
		<?php
			$q="SELECT * fROM qnmain";
			$m=mysql_query($q,$conn);
			$i=1;
			while($r=mysql_fetch_assoc($m))
                		{
                	?>
                    <tr>
                  	  <td><?php echo $i?></td> 
                      <td><?php echo $r['testname']?></td>              
                      <td><?php echo $r['dated']?></td>
                      <td><?php echo $r['qnno']?></td>
                     

                                <td><a href="viewtest.php?id=<?php echo $r['testname'];?>"> ATTEND
                                		<!-- <input type='submit' value="ATTEND TEST" style="background: green;color: white"> -->
                                </a>
                                </td>

                          
                 </tr>
                 <?php
                 $i++;
             }
		?>

	</tbody>
</table>