<?php
/*
 * Template Name: Filters
 */
get_header();
?>
    <section class="main-filter clearfix">
        <div class="container">
            <div class="col-sm-3">
                <div class="filter-search clearfix">
                    <div id="custom-search-input">
                        <div class="input-group col-md-12">
                            <input type="text" id="fltr-search" class="form-control" placeholder="Search" />
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" id="search-btn" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                        </div>
                    </div>
                </div>
                <div class="check-box-por rom-check clearfix">
                    <h2>Category</h2>
                    <div class="checkbox">
                        <label for="rent-check">
                            <input type="checkbox" name="house-check" id="rent-check" class="house-check" value="Rent">
                            Rent
                        </label>
                    </div>
                    <div class="checkbox">
                        <label for="sale-check">
                            <input type="checkbox" name="house-check" id="sale-check" class="house-check" value="Sale">
                            Sale
                        </label>
                    </div>
                </div>
                <div class="check-box-por clearfix">
                    <h2>Price</h2>
                    <div class="checkbox">
                        <label for="price-detail-1">
                            <input type="checkbox" class="price-detail" name="price-detail" id="price-detail-1" value="1-50000">
                            1 to 50000
                        </label>
                    </div>
                    <div class="checkbox">
                        <label for="price-detail-2">
                            <input type="checkbox" class="price-detail" name="price-detail" id="price-detail-2" value="50000-5000000">
                            50000 to 5000000
                        </label>
                    </div>
                    <div class="checkbox">
                        <label for="price-detail-3">
                            <input type="checkbox" class="price-detail" name="price-detail" id="price-detail-3" value="5000000-15000000">
                            5000000 to 15000000
                        </label>
                    </div>
                    <div class="checkbox">
                        <label for="price-detail-4">
                            <input type="checkbox" class="price-detail" name="price-detail" id="price-detail-4" value="15000000-30000000">
                            15000000 to 30000000
                        </label>
                    </div>
                    <div class="checkbox">
                        <label for="price-detail-5">
                            <input type="checkbox" class="price-detail" name="price-detail" id="price-detail-5" value="30000000-80000000">
                            30000000 to 80000000
                        </label>
                    </div>
                    <div class="checkbox">
                        <label for="price-detail-6">
                            <input type="checkbox" class="price-detail" name="price-detail" id="price-detail-6" value="80000000-1500000000">
                            80000000 to 1500000000
                        </label>
                    </div>
                    <div class="checkbox">
                        <label for="price-detail-7">
                            <input type="checkbox" class="price-detail" name="price-detail" id="price-detail-7" value="150000000-30000000">
                            150000000 to 30000000
                        </label>
                    </div>
                    <div class="checkbox">
                        <label for="price-detail-8">
                            <input type="checkbox" class="price-detail" name="price-detail" id="price-detail-8" value="30000000-50000000">
                            30000000 to 50000000
                        </label>
                    </div>
<!--                    <div class="salary-range clearfix">-->
<!--                        <h2 class="float-width mar-15" for="amount">Price range</h2>-->
<!--                        <input type="text" class="amount-input float-width" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">-->
<!--                        <div class="float-width" id="slider-range"></div>-->
<!--                    </div>-->
                </div>
                <div class="check-box-por rom-check clearfix">
                    <h2>Rooms</h2>
                    <div class="checkbox">
                        <label for="rom-check-2">
                            <input type="checkbox" class="rom-change" name="rom-check" id="rom-check-2" value="2-4">
                            2 to 4
                        </label>
                    </div>
                    <div class="checkbox">
                        <label for="rom-check-3">
                            <input type="checkbox" class="rom-change" name="rom-check" id="rom-check-3" value="4-6">
                            4 to 6
                        </label>
                    </div>
                    <div class="checkbox">
                        <label for="rom-check-4">
                            <input type="checkbox" class="rom-change" name="rom-check" id="rom-check-4" value="6-8">
                            6 to 8
                        </label>
                    </div>
                    <div class="checkbox">
                        <label for="rom-check-5">
                            <input type="checkbox" class="rom-change" name="rom-check" id="rom-check-5" value="8-10">
                            8 to 10
                        </label>
                        <div class="checkbox">
                            <label for="rom-check-6">
                                <input type="checkbox" class="rom-change" name="rom-check" id="rom-check-6" value="10-12">
                                10 to 12
                            </label>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm-9">
                <div class="filter-posts clearfix">
                    <?php
                    $args=array(
                        'post_type' => 'house',
                        'post_status' => 'publish',
                        'posts_per_page' => -1
                    );
                    $my_query = new WP_Query($args);
                    if( $my_query->have_posts() ) {
                        while ($my_query->have_posts()) : $my_query->the_post(); ?>
                            <div class="col-sm-4">
                                <div class="sngl-house">
                                    <h2><?php the_title(); ?></h2>
                                    <a href="<?php the_permalink(); ?>">Read more <i class="fa fa-hand-o-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        <?php
                        endwhile;
                    }
                    wp_reset_query();
                    ?>
                </div>
            </div>
    </section>
<?php //echo search_posts();  ?>
<?php get_footer(); ?>