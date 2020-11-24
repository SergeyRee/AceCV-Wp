<?php get_header(); ?>
<!-- HOME -->
<section class="section-home">
    <div id="a1" class="home">
        <div class="container home__inner">
            <div class="home__info">
                <h2 class="name"><?php the_field('name', 2); ?></h2>
                <p><?php the_field('activity', 2); ?></p>
                <ul>
                    <li class="social__item"><a href="<?php the_field('facebook', 2); ?>"><svg class="social__icon" viewBox="-110 1 511 511.99996"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m180 512h-81.992188c-13.695312 0-24.835937-11.140625-24.835937-24.835938v-184.9375h-47.835937c-13.695313 0-24.835938-11.144531-24.835938-24.835937v-79.246094c0-13.695312 11.140625-24.835937 24.835938-24.835937h47.835937v-39.683594c0-39.347656 12.355469-72.824219 35.726563-96.804688 23.476562-24.089843 56.285156-36.820312 94.878906-36.820312l62.53125.101562c13.671875.023438 24.792968 11.164063 24.792968 24.835938v73.578125c0 13.695313-11.136718 24.835937-24.828124 24.835937l-42.101563.015626c-12.839844 0-16.109375 2.574218-16.808594 3.363281-1.152343 1.308593-2.523437 5.007812-2.523437 15.222656v31.351563h58.269531c4.386719 0 8.636719 1.082031 12.289063 3.121093 7.878906 4.402344 12.777343 12.726563 12.777343 21.722657l-.03125 79.246093c0 13.6875-11.140625 24.828125-24.835937 24.828125h-58.46875v184.941406c0 13.695313-11.144532 24.835938-24.839844 24.835938zm-76.8125-30.015625h71.632812v-193.195313c0-9.144531 7.441407-16.582031 16.582032-16.582031h66.726562l.027344-68.882812h-66.757812c-9.140626 0-16.578126-7.4375-16.578126-16.582031v-44.789063c0-11.726563 1.191407-25.0625 10.042969-35.085937 10.695313-12.117188 27.550781-13.515626 39.300781-13.515626l36.921876-.015624v-63.226563l-57.332032-.09375c-62.023437 0-100.566406 39.703125-100.566406 103.609375v53.117188c0 9.140624-7.4375 16.582031-16.578125 16.582031h-56.09375v68.882812h56.09375c9.140625 0 16.578125 7.4375 16.578125 16.582031zm163.0625-451.867187h.003906zm0 0"
                                    fill="#5f5f5f" /></svg></a></li>
                    <li class="social__item"><a href="<?php the_field('twitter', 2); ?>"><svg class="social__icon" viewBox="0 -47 512.00004 512"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m512 55.964844c-32.207031 1.484375-31.503906 1.363281-35.144531 1.667968l19.074219-54.472656s-59.539063 21.902344-74.632813 25.820313c-39.640625-35.628907-98.5625-37.203125-140.6875-11.3125-34.496094 21.207031-53.011719 57.625-46.835937 100.191406-67.136719-9.316406-123.703126-41.140625-168.363282-94.789063l-14.125-16.964843-10.554687 19.382812c-13.339844 24.492188-17.769531 52.496094-12.476563 78.851563 2.171875 10.8125 5.863282 21.125 10.976563 30.78125l-12.117188-4.695313-1.4375 20.246094c-1.457031 20.566406 5.390625 44.574219 18.320313 64.214844 3.640625 5.53125 8.328125 11.605469 14.269531 17.597656l-6.261719-.960937 7.640625 23.199218c10.042969 30.480469 30.902344 54.0625 57.972657 67.171875-27.035157 11.472657-48.875 18.792969-84.773438 30.601563l-32.84375 10.796875 30.335938 16.585937c11.566406 6.324219 52.4375 27.445313 92.820312 33.78125 89.765625 14.078125 190.832031 2.613282 258.871094-58.664062 57.308594-51.613282 76.113281-125.03125 72.207031-201.433594-.589844-11.566406 2.578125-22.605469 8.921875-31.078125 12.707031-16.964844 48.765625-66.40625 48.84375-66.519531zm-72.832031 48.550781c-10.535157 14.066406-15.8125 32.03125-14.867188 50.578125 3.941407 77.066406-17.027343 136.832031-62.328125 177.628906-52.917968 47.660156-138.273437 66.367188-234.171875 51.324219-17.367187-2.722656-35.316406-8.820313-50.171875-14.910156 30.097656-10.355469 53.339844-19.585938 90.875-37.351563l52.398438-24.800781-57.851563-3.703125c-27.710937-1.773438-50.785156-15.203125-64.96875-37.007812 7.53125-.4375 14.792969-1.65625 22.023438-3.671876l55.175781-15.367187-55.636719-13.625c-27.035156-6.621094-42.445312-22.796875-50.613281-35.203125-5.363281-8.152344-8.867188-16.503906-10.96875-24.203125 5.578125 1.496094 12.082031 2.5625 22.570312 3.601563l51.496094 5.09375-40.800781-31.828126c-29.398437-22.929687-41.179687-57.378906-32.542969-90.496093 91.75 95.164062 199.476563 88.011719 210.320313 90.527343-2.386719-23.183593-2.449219-23.238281-3.074219-25.445312-13.886719-49.089844 16.546875-74.015625 30.273438-82.453125 28.671874-17.621094 74.183593-20.277344 105.707031 8.753906 6.808593 6.265625 16.015625 8.730469 24.632812 6.589844 7.734375-1.921875 14.082031-3.957031 20.296875-6.171875l-12.9375 36.945312 16.515625.011719c-3.117187 4.179688-6.855469 9.183594-11.351562 15.183594zm0 0"
                                    fill="#5f5f5f" /></svg></a></li>
                    <li class="social__item"><a href="<?php the_field('linkedin', 2); ?>"><svg class="social__icon" id="regular"
                                enable-background="new 0 0 24 24" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m18.59 24c.103 0 4.762-.001 4.66-.001.414 0 .75-.336.75-.75-.35-7.857 1.842-16.148-6.338-16.148-1.573 0-2.826.537-3.729 1.247 0-1.461-1.579-.653-5.224-.87-.414 0-.75.336-.75.75.302 14.166-.674 15.771.75 15.771h4.66c1.353 0 .492-1.908.75-8.188 0-2.594.75-3.102 2.046-3.102 1.434 0 1.675.996 1.675 3.228.257 6.167-.598 8.063.75 8.063zm-2.425-12.791c-4.491 0-3.546 4.938-3.546 11.29h-3.16v-13.521h2.974v1.298c0 .72 1.097 1.074 1.479.35.492-.934 1.77-2.025 3.75-2.025 3.527 0 4.838 1.733 4.838 6.396v7.503h-3.16c0-7.144.756-11.291-3.175-11.291z" />
                                <path
                                    d="m1.122 7.479c-1.42 0-.448 1.585-.75 15.771 0 .414.336.75.75.75h4.665c1.42 0 .448-1.585.75-15.771 0-1.295-1.881-.531-5.415-.75zm3.915 15.021h-3.165v-13.521h3.165z" />
                                <path
                                    d="m3.452 0c-4.576 0-4.548 6.929 0 6.929 4.545 0 4.581-6.929 0-6.929zm0 5.429c-2.568 0-2.592-3.929 0-3.929 2.597 0 2.564 3.929 0 3.929z" />
                            </svg>
                        </a></li>
                </ul>
            </div>
            <div class="home__img">
                <img src="<?php the_field('avatar', 2); ?>" alt="avatar">
            </div>
        </div>
    </div>
</section>
<!-- ABOUT -->
<section class="section-about">
    <div id="a2" class="about">
        <div class="container about__inner">
            <div class="about__img">
                <img src="<?php the_field('image_about', 2); ?>" alt="img about">
            </div>
            <div class="about__info">
                <h3>About Me</h3>
                <p><?php the_field('about_info', 2); ?></p>
                <a href="<?php the_field('link_to_cv', 2); ?>"><button>Download My CV</button></a>
                <div class="skills">
                    <h3>My Skills</h3>
                    <div class="skill">
                        <h4><?php the_field('first_skill', 2); ?></h4>
                        <div class="percent"><?php the_field('first_skill_inndex', 2); ?></div>
                    </div>
                    <div class="progress-bar">
                        <div class="progress-bar-done" style="width: <?php the_field('first_skill_inndex', 2); ?>;"></div>
                    </div>
                    <div class="skill">
                        <h4><?php the_field('second_skill', 2); ?></h4>
                        <div class="percent"><?php the_field('second_skill_inndex', 2); ?></div>
                    </div>
                    <div class="progress-bar">
                        <div class="progress-bar-done" style="width: <?php the_field('second_skill_inndex', 2); ?>;"></div>
                    </div>
                    <div class="skill">
                        <h4><?php the_field('third_skill', 2); ?></h4>
                        <div class="percent"><?php the_field('third_skill_index', 2); ?></div>
                    </div>
                    <div class="progress-bar">
                        <div class="progress-bar-done" style="width: <?php the_field('third_skill_index', 2); ?>;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- EXPERIENCE -->
<section class="section-experience">
    <div id="a3" class="experience">
        <div class="container experience__wrapper">
        <?php 
                    // параметры по умолчанию
                    $posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name'    => 'experience_posts',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                foreach( $posts as $post ){
                    setup_postdata($post);
                ?>
                <div class="experience__item">
                    <img src="<?php 
                        if (has_post_thumbnail()) {
                            the_post_thumbnail_url();
                        } else {
                            echo get_template_directory_uri() . '/assets/img/not-found.jpg';
                        } ?>" alt="1" class="work__img" alt="mustache" class="experience__icon" style="width: 2rem">
                    <h5 class="experience__title"><?php the_title(); ?></h5>
                    <p><?php the_field('experience_text'); ?></p>
                </div>
                    <?php
                    }
                    wp_reset_postdata(); // сброс
                    ?>
        </div>
    </div>
</section>
<!-- WORK -->
<section class="section-work">
    <div id="a4" class="work">
        <div class="container">
            <div class="work__title">
                <h4>Latest Products</h4>
                <div><p><?php the_field('works_post_description', 2); ?></p></div>
            </div>
            <div class="work__wrapper">
            <?php 
                    // параметры по умолчанию
                    $posts = get_posts( array(
                        'numberposts' => -1,
                        'category_name'    => 'work-posts',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                foreach( $posts as $post ){
                    setup_postdata($post);
                ?>
                <div class="work__item">
                    <img src="<?php 
                        if (has_post_thumbnail()) {
                            the_post_thumbnail_url();
                        } else {
                            echo get_template_directory_uri() . '/assets/img/not-found.jpg';
                        } ?>" alt="1" class="work__img">

                    <h5><?php the_title(); ?><span><?php the_field('work_tag'); ?></span></h5>
                    <p><?php the_field('post_text'); ?></p>
                    <a href="<?php echo get_permalink(); ?>" class="work__more">Read More</a>
                </div>
                <?php
                }
                wp_reset_postdata(); // сброс
                ?>
            </div>
        </div>
    </div>
</section>
<!-- Partners -->
<div class="partners">
    <div class="container partners__wrapper">
        <?php 
                $posts = get_posts( array(
                    'numberposts' => -1,
                    'category_name'    => 'partners-post',
                    'orderby'     => 'date',
                    'order'       => 'ASC',
                    'post_type'   => 'post',
                    'suppress_filters' => true,
                ) );

                foreach( $posts as $post ){
                    setup_postdata($post);
                ?>
                <div class="partners__item">
                    <img src="<?php 
                        if (has_post_thumbnail()) {
                            the_post_thumbnail_url();
                        } else {
                            echo get_template_directory_uri() . '/assets/img/not-found.jpg';
                        } ?>" class="partners__icon" style="width: 4rem">
                </div>
            <?php
            }
        wp_reset_postdata();
        ?>
    </div>
</div>
<!-- CONTACTS -->
<section class="section-contacts">
    <div id="a5" class="contacts">
        <div class="container">
            <div class="contacts__title">
                <h4>Contact Me</h4>
                <p><?php the_field('contact_info', 2); ?></p>
            </div>
            <div class="contacts__wrapper">
                <div class="contacts__item">
                    <h5>Location</h5>
                    <?php the_field('address', 2); ?>
                </div>
                <div class="contacts__item">
                    <h5>Phone</h5>
                    <a href="tel:<?php the_field('phone', 2); ?>">
                        <p><?php the_field('phone', 2); ?></p>
                    </a>
                </div>
                <div class="contacts__item">
                    <h5>Email</h5>
                    <a href="mailto: <?php the_field('email', 2); ?>">
                        <p><?php the_field('email', 2); ?></p>
                    </a>
                </div>
                <div class="contacts__item">
                    <h5>Web</h5>
                    <a href="<?php the_field('web-site', 2); ?>">
                        <p><?php the_field('web-site', 2); ?></p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>