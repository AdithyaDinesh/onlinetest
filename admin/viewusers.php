<div class="container">
							<table style="margin-left: -25px;" id="table" class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>User Id</th>
        <th>Username</th>
        <th>Email</th>
        <th># test taken</th>
      </tr>
    </thead>
    <tbody>
        <?php
    	$cc=1;
         $sqlU= "SELECT user.userId AS A,user.username AS B,user.email AS C, COUNT(*) AS l FROM user LEFT JOIN userresponse ON userresponse.uid = user.userId GROUP BY 1";
            $rU=$db->query($sqlU) or die($db->error);
		while ($row = $rU->fetch_assoc()) {
			echo "<tr><td>".$cc."</td>" ;
			echo "<td>".$row['A']."</td>";
            echo "<td>".$row['B']."</td>"." <td>".$row['C']."</td>"." <td>".$row['l']."</td>";
			$cc++;
				}
    	  ?>

      </tr>
    </tbody>
  </table>
						</div>