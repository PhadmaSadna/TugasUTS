<div class="content mt-3">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="container">
                            <h4>FORM EDIT CUSTOMER</h4><hr>
                            <?php 
                                echo validation_errors();
                                echo form_open_multipart('Page/edit_customer/'.$show_customer['UserID']);
                            ?>  
                            <?php 
                                echo validation_errors();
                                echo form_open_multipart('Page/edit_customer', array('class' => 'needs-validation', 'novalidate' => '') );
                            ?>
                            
                            <input type="text" class="form-control" value="2" name="Level_ID" required hidden>
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control" name="FullName" value="<?php echo $show_customer['FullName'] ?>" required>
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
                                <input type="text" class="form-control" name="Phone" value="<?php echo $show_customer['Phone'] ?>" required>
                                <div class="invalid-feedback">Please, fill the blanks</div>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <textarea name="Address" class="form-control" style="height:150px;" required>
                                    <?php echo $show_customer['Address'] ?>
                                </textarea>
                                <div class="invalid-feedback">Please, fill the blanks</div>
                            </div>
                            <div class="form-group">
                                <label>E-Mail</label>
                                <input type="text" class="form-control" name="Email" value="<?php echo $show_customer['Email'] ?>" required>
                                <div class="invalid-feedback">Please, fill the blanks</div>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" class="form-control" name="Password" value="<?php echo $show_customer['Password'] ?>" required>
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