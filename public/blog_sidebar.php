<div class="sidebar" data-aos="fade-left">

    <h3 class="sidebar-title">Recherche</h3>
    <div class="sidebar-item search-form">
        <form action="">
            <input type="text">
            <button type="submit"><i class="icofont-search"></i></button>
        </form>

    </div><!-- End sidebar search formn-->

    <h3 class="sidebar-title">Categories</h3>
    <div class="sidebar-item categories">
        <ul>
            <?php
            foreach (App::getDB()->query('SELECT * FROM categories') AS $category):
            ?>
                <li><a href="#"><?=$category->title;?>
                 <?php
                 $result = App::getDB()->rowCount('SELECT * FROM posts 
                                                            INNER JOIN categories
                                                            ON categories.id=posts.category_id');
                 echo '<span>('.$result.')</span></a></li>';
                 ?>
              <?php
            endforeach;
            ?>
        </ul>

    </div><!-- End sidebar categories-->

    <h3 class="sidebar-title">Recent Posts</h3>
    <div class="sidebar-item recent-posts">
        <div class="post-item clearfix">
            <img src="assets/img/blog-recent-posts-1.jpg" alt="">
            <h4><a href="blog-single.php">Nihil blanditiis at in nihil autem</a></h4>
            <time datetime="2020-01-01">Jan 1, 2020</time>
        </div>

        <div class="post-item clearfix">
            <img src="assets/img/blog-recent-posts-2.jpg" alt="">
            <h4><a href="blog-single.php">Quidem autem et impedit</a></h4>
            <time datetime="2020-01-01">Jan 1, 2020</time>
        </div>

        <div class="post-item clearfix">
            <img src="assets/img/blog-recent-posts-3.jpg" alt="">
            <h4><a href="blog-single.php">Id quia et et ut maxime similique occaecati ut</a></h4>
            <time datetime="2020-01-01">Jan 1, 2020</time>
        </div>

        <div class="post-item clearfix">
            <img src="assets/img/blog-recent-posts-4.jpg" alt="">
            <h4><a href="blog-single.php">Laborum corporis quo dara net para</a></h4>
            <time datetime="2020-01-01">Jan 1, 2020</time>
        </div>

        <div class="post-item clearfix">
            <img src="assets/img/blog-recent-posts-5.jpg" alt="">
            <h4><a href="blog-single.php">Et dolores corrupti quae illo quod dolor</a></h4>
            <time datetime="2020-01-01">Jan 1, 2020</time>
        </div>

    </div><!-- End sidebar recent posts-->

    <h3 class="sidebar-title">Tags</h3>
    <div class="sidebar-item tags">
        <ul>
            <li><a href="#">App</a></li>
            <li><a href="#">IT</a></li>
            <li><a href="#">Business</a></li>
            <li><a href="#">Business</a></li>
            <li><a href="#">Mac</a></li>
            <li><a href="#">Design</a></li>
            <li><a href="#">Office</a></li>
            <li><a href="#">Creative</a></li>
            <li><a href="#">Studio</a></li>
            <li><a href="#">Smart</a></li>
            <li><a href="#">Tips</a></li>
            <li><a href="#">Marketing</a></li>
        </ul>

    </div><!-- End sidebar tags-->

</div><!-- End sidebar -->