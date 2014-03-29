<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Monster
 * @since Monster 1.0
 */
get_header();
?>



<div id="content">
    <div class="inner">

        <div class="recent_posts visible-lg">
            <h2>Recent Posts</h2>
            <ul class="row">
                <?php
                $args = array( 'numberposts' => '10' );
                $recent_posts = wp_get_recent_posts($args);
                foreach( $recent_posts as $recent ): ?>
                    <li class="box col-xs-12 col-sm-2 noPadding">
                        <?php if($categories = wp_get_post_categories($recent["ID"])): ?>
                            <ul class="list-post-categories">
                                <?php foreach($categories as $category): $cat = get_category($category); ?>
                                <li><a href="<?php echo get_category_link($category); ?>"><?php echo strtoupper($cat->name); ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                        <?php echo get_the_post_thumbnail($recent["ID"],'thumbnail'); ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="row">
            <div class="content col-xs-12 col-md-9 noPadding">
                <?php $categories = get_categories(array('parent'=>0,'taxonomy' => 'category'));
                if(!empty($categories)): $k=0;
                    foreach($categories as $category): if($k>2) $k=0; ++$k; ?>
                <div class="category-block-<?php echo $k; ?> category-block">
                    <div class="category-title">
                        <h6><?php echo $category->name; ?></h6>
                        <a href="<?php echo get_category_link($category->term_id); ?>">View More</a>
                    </div>


                    <?php
                    $args = array( 'posts_per_page' => 5, 'offset'=> 0, 'category' => $category->term_id);
                    $posts = get_posts( $args ); ?>
                    <?php if(!empty($posts)):
                        foreach($posts as $soPost => $post): ?>
                    <?php if($soPost==0): ?>
                    <div class="news-items row">
                        <div class="col-xs-6 noPadding"><?php echo get_the_post_thumbnail($post->ID,'medium'); ?></div>
                        <div class="col-xs-6">
                            <ul class="post-meta">
                                <li class="hidden-xs"><?php echo date(get_option('date_format'),strtotime($post->post_date)); ?></li>
                                <li class="hidden-xs"><a href="<?php echo get_permalink($post->ID);?>#comments">Comments</a></li>
                                <?php if($categories = wp_get_post_categories($recent["ID"])): ?>
                                <li class="hidden-xs">
                                    <?php foreach($categories as $i=> $category): $cat = get_category($category); ?>
                                        <?php if($i!=0) echo ', '; ?><a href="<?php echo get_category_link($category); ?>"><?php echo strtoupper($cat->name); ?></a>
                                    <?php endforeach; ?>
                                </li>
                                <?php endif; ?>
                            </ul>
                            <div class="post-title">
                                <h2>
                                    <a href="<?php echo get_permalink($post->ID); ?>" title="<?php esc_attr($post->post_title); ?>">
                                        <?php echo $post->post_title; ?>
                                    </a>
                                </h2>
                                <p class="hidden-xs">
                                    <?php echo substr(strip_tags($post->post_content),0,200); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php else: ?>
                        <div class="row">
                            <?php if($soPost==1): ?>
                            <div class="news-items col-xs-12 col-sm-3 noPadding">
                            <?php endif; ?>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-12 noPadding"><?php echo get_the_post_thumbnail($post->ID,'medium'); ?></div>
                                    <div class="col-xs-6 col-sm-12">
                                        <ul class="post-meta">
                                            <li class="hidden-xs"><?php echo date(get_option('date_format'),strtotime($post->post_date)); ?></li>
                                        </ul>
                                        <div class="post-title">
                                            <h2>
                                                <a href="<?php echo get_permalink($post->ID); ?>" title="<?php esc_attr($post->post_title); ?>">
                                                    <?php echo $post->post_title; ?>
                                                </a>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            <?php if($soPost==count($posts)): ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>


                    <?php endforeach;
                        endif; ?>
                </div>
                <?php endforeach;
                endif; ?>
            </div>
            <?php get_template_part('adv'); ?>
        </div>
    </div>
</div>

<?php
get_footer();