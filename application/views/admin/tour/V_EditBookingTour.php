<div class="container">
<?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>
<?php 
	echo validation_errors();
	echo form_open_multipart('BookingTour/edit_booking/'.$show['TourID']);
?>
<table class="table table-hover">
	<h2>Update Tour</h2><br>
<tr>
<label>Cust ID</label>
<?php echo form_dropdown('CustID', $customer, set_value('CustID', $show['CustID'] ), 'class="form-control"' ); ?>
<label>Guide ID</label>
<?php echo form_dropdown('GuideID', $guide, set_value('GuideID', $show['GuideID'] ), 'class="form-control"' ); ?>
<b>Packages :</b> <input type="text" value="<?php echo $show['Packages'] ?>" class="form-control" name="Packages"><br>
<b>Price :</b> <input type="text" value="<?php echo $show['Price'] ?>" class="form-control" name="Price"><br>
<b>Start Date :</b> <input type="date" value="<?php echo $show['StartDate'] ?>" class="form-control" name="StartDate"><br>
<b>End Date :</b> <input type="date" value="<?php echo $show['EndDate'] ?>" class="form-control" name="EndDate"><br>
<b>Location :</b> <input type="text" value="<?php echo $show['Location'] ?>" class="form-control" name="Location"><br>
<b>Total Price:</b> <input type="text" value="<?php echo $show['TotalPrice'] ?>" class="form-control" name="TotalPrice"><br>
<br>
</tr>
<input type="submit" id="submitBtn" class="btn btn-primary" value="Edit">
</table>
</div>
