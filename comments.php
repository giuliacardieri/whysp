<?php
    include "assets/includes/page_start.php";
    $title = "Comments ";
	include "assets/includes/head.php";
    include "assets/includes/menu.php";
?>
    <img src="assets/images/comments.png" alt="Comments image"/>
    <div id="bottom">  
            <section>
              <h3>Comments Form</h3>
            </section>
  <main>
        <h2>Comments</h2>
        <p>Contact me! Let me know what you think of Why São Paulo website!</p>
        <form method="post"
              action="comments.php"
              onsubmit="return validate()">
            <div id="error-msg"></div>
            <span>First Name:</span>
                <input type="text" size="30" name="fname" id="fname" value="<?php echo $_POST['fname']; ?>"/><br/>
            <span>Last Name:</span> 
                <input type="text" size="30" name="lname" value="<?php echo $_POST['lname']; ?>"/><br/>
            <span>Email:</span> 
                <input type="email" size="30" name="email" id="email" value="<?php echo $_POST['email']; ?>"/><br/>
            <span>Comments:</span>
            <textarea  rows="5" cols="50" name="comment" id="comment"></textarea>
            <div id="buttons"><br/>
                <input class="button" type="submit" value="Send">
                <input class="button" type="reset" value="Reset">
            </div>
        </form>
<?php
function sanitize($data) {
		$data = trim($data);
		$data = htmlentities($data);
		//$data = mysqli_real_escape_string($link, $data);
		return $data;
	}

  if (!empty($_POST) ){
  
	  $errors = array();
	  if ( empty($_POST['fname']) ) {
		$errors[] = "Please enter a first name";
	  }
  
	  if ( empty($_POST['lname']) ) {
		$errors[] = "Please enter a last name";
	  }
      
      if ( empty($_POST['email']) ) {
		$errors[] = "Please enter a email";
	  }
      
      if ( empty($_POST['comment']) ) {
		$errors[] = "Please enter a comment";
	  }      
  }

if ( count ( $errors ) > 0) {
  	echo "<div style=' color: red' >";
  	  foreach ( $errors as $error ) {
  	  	echo $error . "<br />";
  	  }	
  	echo "</div>";
    }
    echo "<div>";
    echo $feedBack;
    echo "</div>";

   if ( !empty($_POST) && count($errors) == 0) {
    $fname = sanitize($_POST['fname']);
    $lname = sanitize($_POST['lname']);
    $email = sanitize($_POST['email']);
    $comment = sanitize($_POST['comment']);
        
  	$query = " INSERT into whysp
  		       set fname = '$fname',lname = '$lname', email = '$email', comment = '$comment'";
  
  	$result = mysqli_query( $link, $query);
  	$num_rows = mysqli_affected_rows($link);

  	if ($result && $num_rows > 0)
    {
  		$msg .= "Information successfully added to the database!";
      // echo "<p id='success'>". $msg . "</p>";
    }
       
  	}
?>
      <h2>Previous Comments</h2>
      <?php
      // Get comments from the database
      $query = "SELECT * FROM whysp";

      // Run the query
      $result = mysqli_query($link,$query);

      // Number of rows that returned
      $num_rows = mysqli_affected_rows($link);

      if($result && $num_rows > 0)
      {
        // Iterate thru rows
        echo "<table>";
        while($row = mysqli_fetch_assoc($result))
        {
          echo "<tr><td>".$row['fname']."</td>".
               "<td>".$row['lname']."</td>".
               "<td>".$row['email']."</td>".
               "<td>".$row['comment']."</td></tr>";
        }
        echo "</table>";
  }
?>
    </main>
</div>
<?php
    include "assets/includes/footer.php";
?>
