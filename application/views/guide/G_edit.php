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
                                echo form_open_multipart('Guide/G_edit/'.$show_article['GuideID']);
                            ?>  
                            <?php 
                                echo validation_errors();
                                echo form_open_multipart('Guide/G_edit', array('class' => 'needs-validation', 'novalidate' => '') );
                            ?>

                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="GuideName" value="<?php echo $show_article['GuideName'] ?>" required>
                                <div class="invalid-feedback">Please, fill the blanks</div>
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <input type="radio" class="form-control" name="Gender" value="L">
                                <input type="radio" class="form-control" name="Gender" value="P">
                                <div class="invalid-feedback">Please, fill the blanks</div>
                            </div>
                            <div class="form-group">
                                <label>Telepon</label>
                                <input type="text" class="form-control" name="GuidePhone" value="<?php echo $show_article['GuidePhone'] ?>" required>
                                <div class="invalid-feedback">Please, fill the blanks</div>
                            </div>
                            <div class="form-group">
                                <label>E-Mail</label>
                                <input type="text" class="form-control" name="GuideEmail" value="<?php echo $show_article['GuideEmail'] ?>" required>
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