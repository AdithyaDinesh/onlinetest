<?php
$uid = $row['uid'];
$sql="SELECT shuffle FROM exam WHERE uid = '$uid' AND eid= (SELECT MAX(eid) FROM exam)";
$result=$db->query($sql) or die($db->error);
$row = $result->fetch_assoc();
    echo "<br>".$row['shuffle']."<br>";
$shuffle = explode (",",$row['shuffle']);
$i=$_SESSION['iteration']; 
echo $shuffle[$i];
        if ($shuffle[$i]=='#') {
          $_SESSION['status']='ok';
          }else{
          $_SESSION['status']='notok';
          $sql="SELECT * FROM questions WHERE id='$shuffle[$i]'";
          $result=$db->query($sql) or die($db->error);
          $row = $result->fetch_assoc();
          }
echo $_SESSION['status'];

// $sql="SELECT * FROM questions WHERE category = '$cat_id'";
    // $result=$db->query($sql) or die($db->error);



 ?>
    <section class="feature-area section-padding2 col-md-10">
        <div class="container">
            <div class="row">
<span class="col-md-11" id="Q">
<?= $row['question'] ?>
</span>
    <p class="ansDiv col-md-12">
      <form action="includes/submit.php" id="answerform" method="POST">
      <table>
        <tbody>
          <tr>
            <td style="width: 2em;">
            <input type="radio" name="answer" value="<?= $row['A'] ?>">
            </td>
            <td style="width: 2em;"><label class="ans" id="A"><?= $row['A'] ?></label></td>
          </tr>
            <td style="width: 2em;">
          <input type="radio" name="answer" value="<?= $row['B'] ?>">
            </td>
            <td style="width: 2em;"><label class="ans" id="A"><?= $row['B'] ?></label></td>
          </tr>
            <td style="width: 2em;">
          <input type="radio" name="answer" value="<?= $row['C'] ?>">
            </td>
            <td style="width: 2em;"><label class="ans" id="A"><?= $row['C'] ?></label></td>
          </tr>
            <td style="width: 2em;">
          <input type="radio" name="answer" value="<?= $row['D'] ?>">
            </td style="width: 2em;">
            <td><label class="ans" id="A"><?= $row['D'] ?></label></td>
          </tr>
        </tbody>
      </table>

          <input type="hidden" name="hidd" id="hidd" value="">
      </ul>
    </form>
    </p>
  </div>
</div>
</section>