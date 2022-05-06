<div class="row testimoniales">
        <?php foreach ($testimoniales as $testimonial) { ?>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <blockquote class="blockquote">
                            <p class="mb-0">
                                <?php echo $testimonial->mensaje ?>
                            </p>
                            <footer class="blockquote-footer">
                            <?php echo $testimonial->nombre; ?>
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>        
        <?php }?>
    </div>