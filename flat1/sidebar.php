<div id="side-bar">
    <div id="title">
        <h1><?php bloginfo('name');?></h1><br>
        <?php bloginfo('description'); ?>
    </div>

    <div id="menu">
        <ul>
            <a href="."><li>home</li></a>
            <a href="#"><li>article</li></a>
            <a href="#" onclick="list_category();"><li id="menu-item-category">category</li></a>
        </ul>
    </div>
</div>

<script>
    function list_category() {
        var side_bar_width = parseInt($('#side-bar').css('width'));
        if ($('#category-container').css('display') == 'none') {
//            $('#menu-item-category').attr('class', 'menu-item-active');
            $('#category-container').css('display', 'block').animate({
                left: side_bar_width + 'px',
                opacity: '1'
            }, 300);
        }
        else hide_list();
    }

    function hide_list() {
        if ($('#category-container').css('display') == 'none') return;
        var side_bar_width = parseInt($('#side-bar').css('width'));
        var category_container_width = parseInt($('#category-container').css('width'));
        $('#category-container').animate({
            left: (side_bar_width - category_container_width) + 'px',
            opacity: '0'
        }, 300, function () {
            $('#category-container').css('display', 'none');
        });
    }
</script>