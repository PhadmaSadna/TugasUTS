<div class="content mt-3">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="container">
                            <h4>FORM EDIT PAKET TOUR</h4><hr>
                            <?php echo (isset( $upload_error)) ? '<div class="alert alert-warning" role="alert">' .$upload_error. '</div>' : ''; ?>
                            <?php 
                                echo validation_errors();
                                echo form_open_multipart('Paket_Tour/C_edit/'.$show_article['id']);
                            ?>  
                            <?php 
                                echo validation_errors();
                                echo form_open_multipart('Paket_Tour/C_edit', array('class' => 'needs-validation', 'novalidate' => '') );
                            ?>

                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" class="form-control" name="judul" value="<?php echo $show_article['judul'] ?>" required>
                                <div class="invalid-feedback">Please, fill the blanks</div>
                            </div>
                            <div class="form-group">
                                <label>Duration</label>
                                <input type="text" name="duration" class="form-control" value="<?php echo $show_article['duration'] ?>" required>
                                <div class="invalid-feedback">Please, fill the blanks</div>
                            </div>
                            <div class="form-group">
                                <label>Location</label>
                                <input type="text" class="form-control" name="loc" value="<?php echo $show_article['loc'] ?>" required>
                                <div class="invalid-feedback">Please, fill the blanks</div>
                            </div>
                            <div class="form-group">
                                <label>Jadwal</label>
                                <textarea class="form-control" name="jadwal" required>
                                    <?php echo $show_article['jadwal'] ?>" 
                                </textarea>
                                <div class="invalid-feedback">Please, fill the blanks</div>
                            </div>
                            <div class="form-group">
                                <label>Harga</label>
                                <input type="number" class="form-control" name="harga" value="<?php echo $show_article['harga'] ?>" required>
                                <div class="invalid-feedback">Please, fill the blanks</div>
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" class="form-control" name="image" required>
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