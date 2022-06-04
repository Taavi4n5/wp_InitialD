<?php
get_header();
?>

<div class="container_page">
    
    <div class="container_intro">
        <p class="intro_text">
        Aastaajad on iga-aastaselt korduvad, looduslikult erineva ilmega aasta osad.

Aastaajad ilmnevad eriti selgelt parasvöötmes, vähem lähistroopikas ja arktilistel aladel. Lähisekvatoriaalses vöötmes ja mussoonkliimaga aladel võidakse aasta jaotada kaheks aastaajaks: kuivaks ja niiskeks perioodiks. Paljudes troopilistes piirkondades selgelt ilmnevaid aastaaegu ei olegi.
        </p>
    </div>
    <div class="container_content">
        <?php
        if (have_posts()) {
            while (have_posts()) { 
                the_post(); ?>
                <div class="container_1">
                    <section>
                        <a href="<?php the_permalink(); ?>">
                            <figure class="hover_overlay">
                            <?php echo '<img src="' . get_the_post_thumbnail_url(get_the_ID(), "full") . '">'; ?>
                                <figcaption>
                                    <h3><?php the_title(); ?></h3>
                                    <h4>Loe lähemalt...</h4>
                                </figcaption>
                            </figure>
                        </a>
                    </section>
                </div>
        <?php
            }
        }
        ?>
    </div>
</div>


<?php
get_footer();
?>