<?php 

$con = mysqli_connect('sql204.epizy.com','epiz_27425309','m28is4BLzuyZl', 'epiz_27425309_youtubeuserdata', '3306');

if(!$con){
?>
<script type="text/javascript">
	alert('Error: Unable to connent to the database');
</script>
<?php
}

mysqli_select_db($con, 'epiz_27425309_youtubeuserdata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$query = " insert into userinfodata (user, email, mobile, comment) 
values ('$user', '$email', '$mobile', '$comments'); ";

$iquery = mysqli_query($con, $query);

if($iquery){
	?>
	<script>
		alert("Thank You for your response.");
		window.location.replace("index.php");
	</script>
		<?php
		}else{
		?>
		<script>
			alert("Please try again");
		</script>
	<?php
	}
?>

