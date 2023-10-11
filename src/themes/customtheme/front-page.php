
    <?php
        get_header();

    ?>
    	<main>
    <section class="site-padding">
        <div class="partner-story">
            <div class="article-info">
                    <p class="article-title font-title">Read how Arxus streamline their
                    data with ease, save time and spot trends <i class="font-underline">80% faster.</i></p>
                <a href="#" class="article-link font-link text-underline">Read full story ></a>
            </div>
            <div>
                <div class="artcle-image-container">
                    <div class="article-image-absolute">
                        <img class="article-image" src="http://localhost/wp-content/uploads/2023/10/Davy_Vandevinne.svg" alt="davy vandevinne">
                    </div>
                    <div class="article-seperate-image-logo">
                        <img class="article-company-logo" src="http://localhost/wp-content/uploads/2023/10/arxus.svg" alt="">
                        <img class="article-company-databox" src="http://localhost/wp-content/uploads/2023/10/databox_logo.svg" alt="">
                    </div>
                </div>
                <div class="story-article">
                    <p class="font-story-primary">“We narrowed down what to measure on each channel by 
                        having six to eight metrics on each. Whether you're 
                        looking at visibility and branding to increase audience 
                        engagement or closing deals, Databox has metrics for everything.”
                    </p>
                    <p class="font-story-primary story-who-is"><i class="font-story-primary-bold">Davy Vandevinne</i>, Marketing Manager at Arxus</p>
                
                </div>
            </div>
        </div>
    </section>
    <section class="companies-like-you">
        <section class="site-padding">
                <p class="font-title-secondary center">Read more about companies like yours</p>
                <div class="companies-represented font-companies-like-you ">
                    <div class="company-option">B2B</div>
                    <div class="company-option">E-commerce</div>
                    <div class="company-option">SaaS</div>
                    <div class="company-option">B2C</div>
                    <div class="company-option">Marketing Agency</div>
                    <div class="company-option">Consulting</div>
                    <div class="company-option">Information technology</div>
                </div>
        </section>
    </section>
  
    <!-- End of posts -->
    <section class="post-section">
    <section class="site-padding">
        <div class="head-article">
            <article class="article-main">
                <?php
                $query = custom_last_4_posts_query();
                if ($query->have_posts()) :
                    $query->the_post();
                ?>
                <!-- The last post will go here -->
                <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="main-article">
                <div class="article-information">
                    <div class="article-title">
                        <a href="#" class="font-title"><?php the_title(); ?></a>
                    </div>
                    <div class="article-author">
                         <img src="<?php echo get_avatar_url(get_the_author_meta('user_email')); ?>" alt="<?php the_author(); ?>" height="21" width="21" style="border-radius:50%;">
                            <a href="# "
                           class="font-author color-marketing font-uppercase"><?php the_author(); ?></a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="2" height="13" viewBox="0 0 2 13" fill="none">
                            <path d="M0.970703 0.677887V12.8466" stroke="#8E929B" stroke-width="1.35208"/>
                        </svg>
                        <p class="font-date"><?php the_time('M d'); ?></p>
                    </div>
                </div>
        </div>
        <div class="sub-article">
                <?php
                while ($query->have_posts()) : $query->the_post();
                ?>
                   <article class="article">
                        <div class="sub-article-image-container">
                            <?php if (has_post_thumbnail()): ?>
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="sub-article-image">
                            <?php endif; ?>
                        </div>
                        <div class="sub-article-text">
                            <a href="#" class="font-sub-title"><?php the_title(); ?></a>
                            <div class="article-author">
                                <img src="<?php echo get_avatar_url(get_the_author_meta('user_email')); ?>" alt="<?php the_author(); ?>" height="21" width="21" style="border-radius:50%;">
                                <a href="# "
                                   class="font-author color-sales font-uppercase"><?php the_author(); ?></a>
                                <svg xmlns="http://www.w3.org/2000/svg" width="2" height="13" viewBox="0 0 2 13" fill="none">
                                    <path d="M0.970703 0.677887V12.8466" stroke="#8E929B" stroke-width="1.35208"/>
                                </svg>
                                <p class="font-date"><?php the_time('M d'); ?></p>
                            </div>
                        </div>
                    </article>
                    <?php endwhile;
                wp_reset_postdata();
            endif;
            ?>
            </article>
        </div>
        </div>
    </section>
</section>
 <!-- Browse by Category -->
    <section class="categories">
            <div class="center">
                <p class="font-title-secondary">Browse by category</p>
            </div>
            <div class="category-options">
                    <div class="category-option"><img src="http://localhost/wp-content/uploads/2023/10/marketing-1.svg" alt="marketing" class="category-option-image"></div>
                    <div class="category-option"><img src="http://localhost/wp-content/uploads/2023/10/sales.svg" alt="" class="category-option-image"></div>
                    <div class="category-option"><img src="http://localhost/wp-content/uploads/2023/10/accounting.svg" alt="" class="category-option-image"></div>
                    <div class="category-option"><img src="http://localhost/wp-content/uploads/2023/10/advertising.svg" alt="" class="category-option-image"></div>
            </div>
    </section>
    <!-- End of browse by category -->
 <?php
    get_footer();
 ?>