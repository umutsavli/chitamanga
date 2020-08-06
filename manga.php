<htmL>
</html>
<?php
include("footer.php");
include('navbar.php');
include('app/database/connect.php');
?>
<style>
.manga {

}

</style>
<div class="manga">
<?php
$sql_query = "SELECT * FROM mangalar";
$select_all_mangalar = mysqli_query($conn, $sql_query);
while ($row = mysqli_fetch_assoc($select_all_mangalar)) {
}
?>
<h3><?php echo $row["manga_ismi"];?></h3>
</div>




