<h3 class="text-center">Add Question</h3>
<div style="margin: 10px; background-color: rgb(244,244,244); padding: 12px;" class="col-md-10">
	<form class="form-group" action="qAdd.php" method="post">
	<div id="tbDiv" class="col-md-8">
	<textarea style="min-height: 200px;" id="tbQ" class="form-control" placeholder="Question" required="">
	</textarea>
	<input type="text" name="q" id="inputQ" hidden>
	</div>
	<div class="col-md-4">
	<input style="margin: 8px;" placeholder="Option A" class="form-control" type="text" name="A" required="">
	<input style="margin: 8px;" placeholder="Option B" class="form-control" type="text" name="B" required="">
	<input style="margin: 8px;" placeholder="Option C" class="form-control" type="text" name="C" required="">
	<input style="margin: 8px;" placeholder="Option D" class="form-control" type="text" name="D" required="">

	<label style="display: inline;">Answer : </label>
	<select class="form-control" name="ans" style="width: 70%; display: inline;" required="">
		<option disabled>Select an option</option>
		<option value="A">A</option>
		<option value="B">B</option>
		<option value="C">C</option>
		<option value="D">D</option>
	</select>
	<br><br>

	<label style="display: inline;">Category : </label>
	<select class="form-control" name="cat" style="width: 70%; display: inline;" required="">
		<option disabled>Select an option</option>
			<?php 
      	include '../includes/conn.php';
        $sql="SELECT * FROM category";
	$result=$db->query($sql) or die('error: '.$db->error);
	$c =$result->field_count;
	$i = 0;
        while($i < $c){
	$row = $result->fetch_assoc();
		 ?>
		<option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
	<?php $i++; } ?>
		</select>
</div>
<div type="submit" onclick="writeQ()" style="font-size: 2.5em; margin-right: 10px; float: right; "><span style="background-color: #22A7F0; line-height: 0.7em"><input type="submit" name="submit" value="&nbsp;&#43;&nbsp;" style="background: none; border: none; " name=""></span></div>
</div>
</form>
<script type="text/javascript">
	function writeQ(){
		document.getElementById('inputQ').value=document.getElementById('tbQ').value;
	}
</script>