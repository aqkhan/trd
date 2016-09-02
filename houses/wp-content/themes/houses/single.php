<?php
get_header();

?>
    <input type="hidden" class="post-id" value="<?php echo get_the_ID(); ?>"/>
    <body>
    <section class="single-post-detail clearfix">
        <div class="container">
            <div class="single-post-title">
                <h2><?php the_title(); ?></h2>
            </div>
            <div class="single-post-form">
            <form class="form-horizontal">

            <!-- Living room -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">Livin room</label>
                <div class="col-md-5">
                    <select id="living-room" name="living" class="form-control">
                        <option value="2-4">2 to 4</option>
                        <option value="4-6">4 to 6</option>
                        <option value="6-8">6 to 8</option>
                        <option value="8-10">8 to 10</option>
                        <option value="10-12">10 to 12</option>
                    </select>
                </div>
            </div>

            <!-- Living room-->
<!--            <div class="form-group">-->
<!--                <label class="col-md-4 control-label" for="living-room">Living room</label>-->
<!--                <div class="col-md-5">-->
<!--                    <input id="living-room" name="living" type="text" placeholder="" class="form-control input-md">-->
<!--                </div>-->
<!--            </div>-->

            <!-- Kitchen-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="kitchen">Kitchen</label>
                <div class="col-md-5">
                    <input id="kitchen" name="kitchen" type="text" placeholder="" class="form-control input-md">
                </div>
            </div>

            <!-- Hall-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="hall">Hall</label>
                <div class="col-md-5">
                    <input id="hall" name="hall" type="text" placeholder="" class="form-control input-md">
                </div>
            </div>

            <!-- Dining room input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="dinning-room">Dining room</label>
                <div class="col-md-5">
                    <input id="dinning-room" name="dinning" type="text" placeholder="" class="form-control input-md">
                </div>
            </div>

            <!-- Guest room input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="guest-room">Guest room</label>
                <div class="col-md-5">
                    <input id="guest-room" name="guest" type="text" placeholder="" class="form-control input-md">
                </div>
            </div>

            <!-- Wash room input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="wash-room">Wash room</label>
                <div class="col-md-5">
                    <input id="wash-room" name="wash" type="text" placeholder="" class="form-control input-md">
                </div>
            </div>

            <!-- Store input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="store">Store</label>
                <div class="col-md-5">
                    <input id="store" name="store" type="text" placeholder="" class="form-control input-md">

                </div>
            </div>

            <!-- Laundry room input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="laundry-room">Laundry room</label>
                <div class="col-md-5">
                    <input id="laundry-room" name="laundry" type="text" placeholder="" class="form-control input-md">
                </div>
            </div>

            <!-- Price input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="price">Price</label>
                <div class="col-md-5">
                    <input id="price" name="price" type="text" placeholder="" class="form-control input-md">
                </div>
            </div>

            <!-- Servants' room -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="servant">Servants' room</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label for="servant-room-0">
                            <input type="radio" name="servant" id="servant-room-0" value="Yes" checked="checked">
                            Yes
                        </label>
                    </div>
                    <div class="radio">
                        <label for="servant-room-1">
                            <input type="radio" name="servant" id="servant-room-1" value="No">
                            No
                        </label>
                    </div>
                </div>
            </div>

            <!-- Gallery -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="gallery">Gallery</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label for="gallery-0">
                            <input type="radio" name="gallery" id="gallery-0" value="Yes" checked="checked">
                            Yes
                        </label>
                    </div>
                    <div class="radio">
                        <label for="gallery-1">
                            <input type="radio" name="gallery" id="gallery-1" value="No">
                            No
                        </label>
                    </div>
                </div>
            </div>

            <!-- Basement -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="basement">Basement</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label for="basement-0">
                            <input type="radio" name="basement" id="basement-0" value="Yes" checked="checked">
                            Yes
                        </label>
                    </div>
                    <div class="radio">
                        <label for="basement-1">
                            <input type="radio" name="basement" id="basement-1" value="No">
                            No
                        </label>
                    </div>
                </div>
            </div>

            <!-- Study room -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="study">Study room</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label for="study-room-0">
                            <input type="radio" name="study" id="study-room-0" value="Yes" checked="checked">
                            Yes
                        </label>
                    </div>
                    <div class="radio">
                        <label for="study-room-1">
                            <input type="radio" name="study" id="study-room-1" value="No">
                            No
                        </label>
                    </div>
                </div>
            </div>

            <!-- Workshop -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="work">Workshop</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label for="work-shop-0">
                            <input type="radio" name="work" id="work-shop-0" value="Yes" checked="checked">
                            Yes
                        </label>
                    </div>
                    <div class="radio">
                        <label for="work-shop-1">
                            <input type="radio" name="work" id="work-shop-1" value="No">
                            No
                        </label>
                    </div>
                </div>
            </div>

            <!-- Swimming pool -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="swimming">Swimming pool</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label for="swimming-pool-0">
                            <input type="radio" name="swimming" id="swimming-pool-0" value="Yes" checked="checked">
                            Yes
                        </label>
                    </div>
                    <div class="radio">
                        <label for="swimming-pool-1">
                            <input type="radio" name="swimming" id="swimming-pool-1" value="No">
                            No
                        </label>
                    </div>
                </div>
            </div>

            <!-- Sunroom -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="sun">Sunroom</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label for="sun-room-0">
                            <input type="radio" name="sun" id="sun-room-0" value="Yes" checked="checked">
                            Yes
                        </label>
                    </div>
                    <div class="radio">
                        <label for="sun-room-1">
                            <input type="radio" name="sun" id="sun-room-1" value="No">
                            No
                        </label>
                    </div>
                </div>
            </div>

            <!-- Library -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="library">Library</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label for="library-0">
                            <input type="radio" name="library" id="library-0" value="Yes" checked="checked">
                            Yes
                        </label>
                    </div>
                    <div class="radio">
                        <label for="library-1">
                            <input type="radio" name="library" id="library-1" value="No">
                            No
                        </label>
                    </div>
                </div>
            </div>

            <!-- Garden -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="garden">Garden</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label for="garden-0">
                            <input type="radio" name="garden" id="garden-0" value="Yes" checked="checked">
                            Yes
                        </label>
                    </div>
                    <div class="radio">
                        <label for="garden-1">
                            <input type="radio" name="garden" id="garden-1" value="No">
                            No
                        </label>
                    </div>
                </div>
            </div>

            <!-- Garage -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="garage">Garage</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label for="garage-0">
                            <input type="radio" name="garage" id="garage-0" value="Yes" checked="checked">
                            Yes
                        </label>
                    </div>
                    <div class="radio">
                        <label for="garage-1">
                            <input type="radio" name="garage" id="garage-1" value="No">
                            No
                        </label>
                    </div>
                </div>
            </div>

            <!-- Furnished -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="furnished">Furnished</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label for="furnished-0">
                            <input type="radio" name="furnished" id="furnished-0" value="Yes" checked="checked">
                            Yes
                        </label>
                    </div>
                    <div class="radio">
                        <label for="garage-1">
                            <input type="radio" name="furnished" id="furnished-1" value="No">
                            No
                        </label>
                    </div>
                </div>
            </div>

            <!-- Rent -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="rent">Rent</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label for="rent-0">
                            <input type="radio" name="rent" id="rent-0" value="Yes" checked="checked">
                            Yes
                        </label>
                    </div>
                    <div class="radio">
                        <label for="rent-1">
                            <input type="radio" name="rent" id="rent-1" value="No">
                            No
                        </label>
                    </div>
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <div class="col-md-offset-4 col-md-4">
                    <button id="post-submit" name="post-submit" class="btn btn-success">Submit</button>
                </div>
            </div>

            </form>

            </div>
        </div>
    </section>
    </body>
<?php
//-- Uncomment the code below to laod sidebar --//
//get_sidebar();
get_footer();