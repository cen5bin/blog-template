<?php get_header();?>
<?php include('category.php'); ?>
<?php include('sidebar.php');?>

<div id="main-container">
<?php deal_with_request();?>

    <div id="footer">
        <div id="footer-content"></div>
    </div>
</div>

<?php get_footer();?>

<script>
    $(document).ready(function () {
        $('#main-container').click(function () {
             hide_list();
        });
    });
</script>