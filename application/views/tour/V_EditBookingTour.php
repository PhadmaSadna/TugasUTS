<div class="content mt-3">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="container">
                            <h4>FORM EDIT CUSTOMER</h4><hr>
                            <?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>
                            <?php 
                                echo validation_errors();
                                echo form_open_multipart('BookingTour/edit_booking/'.$show['TourID']);
                            ?>  
                            <?php 
                                echo validation_errors();
                                echo form_open_multipart('BookingTour/edit_booking', array('class' => 'needs-validation', 'novalidate' => '') );
                            ?>

                            <div class="form-group">
                                <label>Cust ID</label>
                                <?php echo form_dropdown('CustID', $customer, set_value('CustID', $show['CustID'] ), 'class="form-control"' ); ?>
                                <div class="invalid-feedback">Please, fill the blanks</div>
                            </div>
                            <div class="form-group">
                                <label>Guide ID</label>
                                <?php echo form_dropdown('GuideID', $customer, set_value('CustID', $show['CustID'] ), 'class="form-control"' ); ?>
                                <div class="invalid-feedback">Please, fill the blanks</div>
                            </div>
                            <div class="form-group">
                                <label>Packages</label>
                                <?php echo form_dropdown('Packages', $packages, set_value('Packages'), 'class="form-control"  id="Packages" onchange="cek_dropdown_packages($(this).val())" required' ); ?>
                                <div class="invalid-feedback">Please, fill the blanks</div>
                            </div>
                            <div class="form-group">
                                <label>Start Date</label>
                                <input type="date" class="form-control" value="<?php echo $show['StartDate'] ?>" name="StartDate" required>
                                <div class="invalid-feedback">Please, fill the blanks</div>
                            </div>
                            <div class="form-group">
                                <label>Total Price</label>
                                <input type="number" class="form-control total_price" value="<?php echo $show['TotalPrice'] ?>" name="TotalPrice" id="harga" readonly>
                            </div>
                            <div class="form-group">
                                <input type="submit" id="submitBtn" class="btn btn-primary" value="Save">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> 
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