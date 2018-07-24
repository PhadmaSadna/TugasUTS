<div class="content mt-3">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="container">
                            <h4>FORM GUIDE</h4><hr>
                            <?php
                                $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
                            ?>
                            <?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>
                            <?php 
                                echo validation_errors();
                                echo form_open_multipart('Page/create_guide', array('class' => 'needs-validation', 'novalidate' => '') );
                            ?>

                            <input type="text" class="form-control" value="3" name="Level_ID" required hidden>
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control" name="FullName" required>
                                <div class="invalid-feedback">Please, fill the blanks</div>
                            </div>
                            <div class="form-group">
                                <label>Gender</label> <br>
                                <input type="radio" name="Gender" value="M" required> Male 
                                <input type="radio" name="Gender" value="F" required> Female
                                <div class="invalid-feedback">Please, fill the blanks</div>
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" name="Phone" required>
                                <div class="invalid-feedback">Please, fill the blanks</div>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <textarea name="Address" class="form-control" style="height:150px;" required></textarea>
                                <div class="invalid-feedback">Please, fill the blanks</div>
                            </div>
                            <div class="form-group">
                                <label>E-Mail</label>
                                <input type="text" class="form-control" name="Email" required>
                                <div class="invalid-feedback">Please, fill the blanks</div>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" class="form-control" name="Password" required>
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