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
                                echo form_open_multipart('Guide/G_create', array('class' => 'needs-validation', 'novalidate' => '') );
                            ?>

                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="GuideName" required>
                                <div class="invalid-feedback">Please, fill the blanks</div>
                            </div>
                            <div class="form-group">
                                <label>Gender</label> <br>
                                <input type="radio" name="Gender" value="L"> Laki-Laki
                                <input type="radio" name="Gender" value="P"> Perempuan
                                <div class="invalid-feedback">Please, fill the blanks</div>
                            </div>
                            <div class="form-group">
                                <label>Telepon</label>
                                <input type="text" class="form-control" name="GuidePhone" required>
                                <div class="invalid-feedback">Please, fill the blanks</div>
                            </div>
                            <div class="form-group">
                                <label>E-Mail</label>
                                <input type="text" class="form-control" name="GuideEmail" required>
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