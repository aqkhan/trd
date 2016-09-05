<?php
get_header();
 ?>
<body>
<div class="container">
    <div class="house-detail">
        <form class="form-horizontal">

            <!-- Form Name -->
            <legend>House Detail</legend>

            <!-- Main Categories -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">Main Categories</label>
                <div class="col-md-5">
                     <input type="text" id="main-categories" placeholder="Select"/>
                </div>
            </div>

            <!-- Sub Categories -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="sub-categories">Sub Categories</label>
                <div class="col-md-5">
                    <input type="text" id="sub-categories"  placeholder="Select" autocomplete="off"/>
                </div>
            </div>

        </form>
    </div>
    <div class="singal-house-detail clearfix"></div>
</div>
</body>
<?php
get_footer(); ?>
<script type="text/javascript">
    $( function() {
        $( "#main-categories" ).autocomplete({
            source: <?php echo json_encode(parent_category()); ?>,
            minLength: 2
        });
        $(document).on('focus','#sub-categories', function(){
        var parent_name = $('#main-categories').val();
        var data = {
            'action': 'get_child_parent',
            'parent_name': parent_name
        };
        $.post(ajaxurl, data, function(response) {
            $( "#sub-categories" ).autocomplete({
                source: <?php echo json_encode(child_category()); ?>,
                minLength: 2
            });
        });
    });
    });

</script>