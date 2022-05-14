<?php
get_header();
?>

<div class="container_page">
    <div class="container_intro">
        <p class="intro_text">
        Initial D on jaapani tänavavõidusõidu manga-sari, mille on kirjutanud ja illustreerinud Shuichi Shigeno. See ilmus Kodansha's Weekly Young Magazine'is aastatel 1995-2013. Lugu keskendub Jaapani illegaalsete tänavasõitude maailmale, kus kogu tegevus on koondunud mägedesse ja harva linnadesse või linnapiirkondadesse ning kus esineb peamiselt drifti võidusõidustiil. Professionaalne võidusõitja ja driftimise pioneer Keiichi Tsuchiya aitas toimetamisel kaasa. Lugu keskendub Gunma prefektuurile, täpsemalt mitmetele Kantō piirkonna mägedele ja neid ümbritsevatele linnadele ja asulatele. Kuigi mõned kohad, kus tegelased võistlevad, on väljamõeldud, põhinevad kõik sarjas esinevad kohad tegelikel Jaapani paikadel.
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
                                <img src="<?php the_post_thumbnail();?>">
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