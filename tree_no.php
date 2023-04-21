<?php 
include("dbcon.php");
$tn=$_GET["tn"];
?>

                                         <?php $select = mysqli_query($conn, "SELECT * FROM trees WHERE status='uncut' AND tree_name='$tn' ");
                                                            while($row=mysqli_fetch_assoc($select)){
                                                            ?>
                                                            <option><?php echo $row['tree_no']; ?></option>
                                                            <?php } ?>