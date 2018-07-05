<div class="content mt-3">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="container">
                            <h4>FORM CUSTOMER</h4><hr>
                            <?php
                                $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
                            ?>
                            <?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>
                            <?php 
                                echo validation_errors();
                                echo form_open_multipart('Customer/C_create', array('class' => 'needs-validation', 'novalidate' => '') );
                            ?>

                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="CustName" required>
                                <div class="invalid-feedback">Please, fill the blanks</div>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="CustAddress" class="form-control" style="height:150px;" required></textarea>
                                <div class="invalid-feedback">Please, fill the blanks</div>
                            </div>
                            <div class="form-group">
                                <label>Telepon</label>
                                <input type="text" class="form-control" name="CustPhone" required>
                                <div class="invalid-feedback">Please, fill the blanks</div>
                            </div>
                            <div class="form-group">
                                <label>E-Mail</label>
                                <input type="text" class="form-control" name="CustEmail" required>
                                <div class="invalid-feedback">Please, fill the blanks</div>
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