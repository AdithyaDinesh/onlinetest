<form action="index.php" class="form-group" method="post">
						<div class="col-md-8">
							<span  class="col-md-2"">
						<select name="showtable" style="display: inline;"  class="form-control"><option value="25">25</option>
								<option value="50">50</option>
								<option value="100">100</option>
								<option value="500">500</option>
							</select></span>
							<span class="col-md-2"><input type="submit" style="display: inline;" name="submit" value="show" class="btn btn-primary" /></span>
							</div>
							</form>
						<div class="container">
							<table style="margin-left: -25px;" id="table" class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Questain</th>
        <th>A</th>
        <th>B</th>
        <th>C</th>
        <th>D</th>
        <th>Answer</th>
      </tr>
    </thead>
    <tbody>
    	<?php
    	if(isset($_POST['submit'])){
    		$c=$_POST['showtable'];
    	}else    	$c=25;
    	$cc=1;

			$sqlC="SELECT count(*) AS tot FROM questions";
			$rC=$db->query($sqlC) or die($db->error);
			$rowC = $rC->fetch_assoc();
			$c=($c>$rowC['tot'])?$rowC['tot']:$c;
		while ($cc<=$c) {
			$row = $result->fetch_assoc();
			echo "<tr><td>".$cc."</td>" ;
			echo "<td style='max-width: 200px;'>".$row['question']."</td>";
			$cc++;
			echo "<td>".$row['A']."</td>"." <td>".$row['B']."</td>"."<td>".$row['C']."</td>"."<td>".$row['D']."</td>"."<td>".$row['ans']."</td>"."<td style='font-size:2em; cursor: pointer;'><a href='deleteQ.php?Qid=".$row['id']."'>&#128465;</a></td>";
				}
    	  ?>

      </tr>
    </tbody>
  </table>
						</div>