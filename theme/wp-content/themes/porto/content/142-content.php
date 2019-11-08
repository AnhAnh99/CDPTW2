<div class="type-142">
    <div class="entry-author">
        <h3><i class="icon-user"></i>Author</h3>
        <figure>
            <a href="#">
                <img src="<?php bloginfo('template_url'); ?>/images/author.jpg" alt="author">
            </a>
        </figure>

        <div class="author-content">
            <h4><a href="#">John Doe</a></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab officia culpa
                corporis, quidem placeat minima unde vel veniam laboriosam et animi, inventore
                delectus, officiis doloribus ex amet illum ea suscipit!</p>
        </div><!-- End .author.content -->
    </div><!-- End .entry-author -->
    <div class="comment-respond">
        <h3>Leave a Reply</h3>
        <p>Your email address will not be published. Required fields are marked *</p>

        <form action="#">
            <div class="form-group required-field">
                <label>Comment</label>
                <textarea cols="30" rows="1" class="form-control" required=""></textarea>
            </div><!-- End .form-group -->

            <div class="form-group required-field">
                <label>Name</label>
                <input type="text" class="form-control" required="">
            </div><!-- End .form-group -->

            <div class="form-group required-field">
                <label>Email</label>
                <input type="email" class="form-control" required="">
            </div><!-- End .form-group -->

            <div class="form-group">
                <label>Website</label>
                <input type="url" class="form-control">
            </div><!-- End .form-group -->

            <div class="form-group-custom-control mb-3">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="save-name">
                    <label class="custom-control-label" for="save-name">Save my name, email, and
                        website in this browser for the next time I comment.</label>
                </div><!-- End .custom-checkbox -->
            </div><!-- End .form-group-custom-control -->

            <div class="form-footer">
                <button type="submit" class="btn btn-primary">Post Comment</button>
            </div><!-- End .form-footer -->
        </form>
    </div>
</div>