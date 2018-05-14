<div class="container">
<?php
    if(validation_errors()){
        echo "<div class='alert alert-danger'>
    	   	    <strong>Upss!</strong>".validation_errors()."
              </div>"
         ;
    }
?>

<?php 
	echo form_open_multipart('BookingTour/create_booking', array('class' => 'needs-validation', 'novalidate' => '') );
?>
<table class="table table-hover">
	<h2>Create Booking Tour</h2><br>
<tr>

<b>Cust ID
<?php echo form_dropdown('CustID', $customer, set_value('CustID'), 'class="form-control" required' ); ?>
<b>Guide ID
<?php echo form_dropdown('GuideID', $guide, set_value('GuideID'), 'class="form-control" required' ); ?>
<b>Packages
<?php echo form_dropdown('Packages', $packages, set_value('Packages'), 'class="form-control"  id="Packages" onchange="cek_dropdown_packages($(this).val())" required' ); ?>
<b>Start Date :</b> <input type="date" class="form-control" name="StartDate"> <br>
<b>Total Price:</b> <input type="number" class="form-control total_price" name="TotalPrice" id="harga" readonly><br>
<br>
</tr>
<input type="hidden" class="base_url" value="<?php echo base_url(); ?>">
<input type="submit" id="submitBtn" class="btn btn-primary" value="Tambah">
</table>
</div>

<script type="text/javascript">
    $(document).ready(function() {
    	cek_dropdown_packages = function(packages) {
    		var base_url = $('.base_url').val();

    		$.ajax({
    			type: 'POST',
    			url: base_url + 'BookingTour/get_harga',
    			data: 'id=' + packages,
    			dataType: 'html',
    			success: function(response) {
    				$('.total_price').val(response);
    			}
    		})
    	}
    })
</script>
