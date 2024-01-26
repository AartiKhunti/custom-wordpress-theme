<?php
   /*
   Template Name: Custom page Template
   */
   
   get_header();
   
   $args = array(
       'post_type' => 'casino_hotel', // Your custom post type name
       'posts_per_page' => -1, // -1 for all posts, adjust as needed
       'orderby' => 'meta_value_num', // Order by numeric meta value
       'meta_key' => '_casino_hotel_score', // Replace with the actual meta key for the score
       'order' => 'DESC', // Descending order based on score
   );
   
   $casino_hotels_query = new WP_Query($args);
   
   $image = get_field('background_image');
   $banner_text = get_field('banner_text');
   $banner_description = get_field('banner_description');
   $tag_line = get_field('tag_line');
   $about_text = get_field('about_text');
   $about_description_bold = get_field('about_description_bold');
   $about_description = get_field('about_description');
   $about_image = get_field('about_image');
   $table_title = get_field('table_title');
   $choose_us_title =  get_field('choose_us_title');
   $tag_lines =  get_field('sub_title');
   $today = date("d-m-y");
   $choose_us_image = get_field('choose_us_image');
   $sub_title_1 = get_field('sub_title_1');
   $sub_title_descriotion_1 = get_field('sub_title_descriotion_1');
   $sub_title_2 = get_field('sub_title_2');
   $sub_title_descriotion_2 = get_field('sub_title_descriotion_2');
   $sub_title_3 = get_field('sub_title_3');
   $sub_title_descriotion_3 = get_field('sub_title_descriotion_3');
   ?>
<div class="container">
   <?php if( !empty($image) ): ?>
   <section class="custom-section-one" style="background-image: url(<?php echo $image; ?> );">
      <div class=custom-section-inner>
         <div class="logo">
            <img src="/metawin-wordpress-website/wp-content/uploads/2024/01/logo.png" alt="logo" width="148" height="148">
         </div>
         <div class="banner-title">
            <?php echo $banner_text; ?>
         </div>
         <div class="banner-description">
            <?php echo $banner_description; ?>
         </div>
         <div class="banner-button">
            <div class="explore-button"> <a href="#hotel-table-data">Explore Today</a>
            </div>
            <div class="svg-icon">
               <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path id="Vector" d="M8.64645 14.6464L8.29289 15L8.64645 15.3536L14.6464 21.3536L15 21.7071L15.3536 21.3536L21.3536 15.3536L21.7071 15L21.3536 14.6464L19.2536 12.5464L18.9 12.1929L18.5464 12.5464L17 14.0929L17 9L17 8.5L16.5 8.5L13.5 8.5L13 8.5L13 9L13 14.0929L11.4536 12.5464L11.1 12.1929L10.7464 12.5464L8.64645 14.6464ZM9.34799 1.64113L9.34821 1.64104C11.1079 0.881243 12.9901 0.499999 15 0.499999C17.0099 0.499999 18.8921 0.881243 20.6518 1.64104L20.652 1.64113C22.4214 2.40413 23.9555 3.43759 25.2589 4.74105C26.5625 6.04456 27.5964 7.57876 28.3605 9.3482C29.1193 11.1079 29.5 12.9901 29.5 15C29.5 17.01 29.1192 18.8923 28.3604 20.652C27.5964 22.4214 26.5624 23.9555 25.2589 25.2589C23.9555 26.5624 22.4214 27.5959 20.652 28.3589L20.6518 28.359C18.8921 29.1188 17.0099 29.5 15 29.5C12.9901 29.5 11.1079 29.1188 9.3482 28.359L9.34799 28.3589C7.57863 27.5959 6.04451 26.5624 4.74105 25.2589C3.43759 23.9555 2.40413 22.4214 1.64113 20.652L1.64104 20.6518C0.881244 18.8921 0.499999 17.0099 0.499999 15C0.499999 12.9901 0.881244 11.1079 1.64104 9.3482L1.64113 9.34799C2.40413 7.57863 3.43759 6.04451 4.74105 4.74105C6.04451 3.43759 7.57863 2.40413 9.34799 1.64113Z" fill="white" stroke="url(#paint0_linear_1_61)"/>
                  <defs>
                     <linearGradient id="paint0_linear_1_61" x1="30" y1="15" x2="-6.55671e-07" y2="15" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#DEDEDE"/>
                        <stop offset="1" stop-color="#F1F1F1" stop-opacity="0"/>
                     </linearGradient>
                  </defs>
               </svg>
            </div>
         </div>
      </div>
   </section>
   <?php endif; ?>
   <section class="custom-section-two">
      <div class="row about-inner-section">
         <div class="about-us left-half-section col-md-7 justify-content-center">
            <div class="tag-line"><?php echo $tag_line; ?></div>
            <div class="about-title"><?php echo $about_text; ?></div>
            <div class="d-sm-none">
               <img src="<?php echo $about_image; ?>" alt="Girl in a jacket" width="374px" height="474px">
            </div>
            <div class="about-description bold"><?php echo $about_description_bold; ?></div>
            <div class="about-description"><?php echo $about_description; ?></div>
            <div class="about-button">
               <div class="explore-button read-more"><a href="/metawin-wordpress-website/about-us/" >Read More</a></div>
               <div class="svg-icon">
                  <svg class="arrow-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="none">
                     <path d="M14.6464 21.3536L15 21.7071L15.3536 21.3536L21.3536 15.3536L21.7071 15L21.3536 14.6464L15.3536 8.64645L15 8.29289L14.6464 8.64645L12.5464 10.7464L12.1929 11.1L12.5464 11.4536L14.0929 13H9H8.5V13.5V16.5L8.5 17H9L14.0929 17L12.5464 18.5464L12.1929 18.9L12.5464 19.2536L14.6464 21.3536ZM1.64113 20.652L1.64104 20.6518C0.881244 18.8921 0.5 17.0099 0.5 15C0.5 12.9901 0.881244 11.1079 1.64104 9.3482L1.64113 9.34799C2.40413 7.57863 3.43759 6.04452 4.74105 4.74105C6.04456 3.43754 7.57876 2.40355 9.3482 1.63954C11.1079 0.880748 12.9901 0.5 15 0.5C17.01 0.5 18.8923 0.880778 20.652 1.63963C22.4214 2.40363 23.9555 3.4376 25.2589 4.74105C26.5624 6.04451 27.5959 7.57863 28.3589 9.34799L28.359 9.3482C29.1188 11.1079 29.5 12.9901 29.5 15C29.5 17.0099 29.1188 18.8921 28.359 20.6518L28.3589 20.652C27.5959 22.4214 26.5624 23.9555 25.2589 25.2589C23.9555 26.5624 22.4214 27.5959 20.652 28.3589L20.6518 28.359C18.8921 29.1188 17.0099 29.5 15 29.5C12.9901 29.5 11.1079 29.1188 9.3482 28.359L9.34799 28.3589C7.57863 27.5959 6.04451 26.5624 4.74105 25.2589C3.43759 23.9555 2.40413 22.4214 1.64113 20.652Z" fill="white" stroke="url(#paint0_linear_1_73)"/>
                     <defs>
                        <linearGradient id="paint0_linear_1_73" x1="15" y1="0" x2="15" y2="30" gradientUnits="userSpaceOnUse">
                           <stop stop-color="#DEDEDE"/>
                           <stop offset="1" stop-color="#F1F1F1" stop-opacity="0"/>
                        </linearGradient>
                     </defs>
                  </svg>
               </div>
            </div>
         </div>
         <div class="about-us right-half-section col-md-5 d-none d-md-block">
            <img src="<?php echo $about_image; ?>" alt="Girl in a jacket" width="470" height="596">
         </div>
      </div>
   </section>
   <section id="hotel-table-data" class="custom-section-three">
      <div class="row table-inner-section text-center">
         <div class="col-12 pb-3">
            <div class="table-title"><?php echo $table_title ?></div>
            <div class="calender-svd d-inline-block">
               <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                  <path d="M13.4587 2.83317H12.042V2.12484C12.042 1.93698 11.9674 1.75681 11.8345 1.62397C11.7017 1.49113 11.5215 1.4165 11.3337 1.4165C11.1458 1.4165 10.9656 1.49113 10.8328 1.62397C10.7 1.75681 10.6253 1.93698 10.6253 2.12484V2.83317H6.37533V2.12484C6.37533 1.93698 6.3007 1.75681 6.16786 1.62397C6.03502 1.49113 5.85485 1.4165 5.66699 1.4165C5.47913 1.4165 5.29896 1.49113 5.16613 1.62397C5.03329 1.75681 4.95866 1.93698 4.95866 2.12484V2.83317H3.54199C2.97841 2.83317 2.43791 3.05705 2.03939 3.45557C1.64088 3.85408 1.41699 4.39459 1.41699 4.95817V13.4582C1.41699 14.0218 1.64088 14.5623 2.03939 14.9608C2.43791 15.3593 2.97841 15.5832 3.54199 15.5832H13.4587C14.0222 15.5832 14.5627 15.3593 14.9613 14.9608C15.3598 14.5623 15.5837 14.0218 15.5837 13.4582V4.95817C15.5837 4.39459 15.3598 3.85408 14.9613 3.45557C14.5627 3.05705 14.0222 2.83317 13.4587 2.83317ZM14.167 13.4582C14.167 13.646 14.0924 13.8262 13.9595 13.959C13.8267 14.0919 13.6465 14.1665 13.4587 14.1665H3.54199C3.35413 14.1665 3.17396 14.0919 3.04113 13.959C2.90829 13.8262 2.83366 13.646 2.83366 13.4582V8.49984H14.167V13.4582ZM14.167 7.08317H2.83366V4.95817C2.83366 4.77031 2.90829 4.59014 3.04113 4.4573C3.17396 4.32447 3.35413 4.24984 3.54199 4.24984H4.95866V4.95817C4.95866 5.14603 5.03329 5.3262 5.16613 5.45904C5.29896 5.59188 5.47913 5.6665 5.66699 5.6665C5.85485 5.6665 6.03502 5.59188 6.16786 5.45904C6.3007 5.3262 6.37533 5.14603 6.37533 4.95817V4.24984H10.6253V4.95817C10.6253 5.14603 10.7 5.3262 10.8328 5.45904C10.9656 5.59188 11.1458 5.6665 11.3337 5.6665C11.5215 5.6665 11.7017 5.59188 11.8345 5.45904C11.9674 5.3262 12.042 5.14603 12.042 4.95817V4.24984H13.4587C13.6465 4.24984 13.8267 4.32447 13.9595 4.4573C14.0924 4.59014 14.167 4.77031 14.167 4.95817V7.08317Z" fill="#FC115C"/>
               </svg>
            </div>
            <div class="today d-inline-block"><?php echo $today ?></div>
         </div>
         <div class="row justify-content-center">
            <div class="col-12 text-center">
               <div class="top-rated-hotels">
                  <h5>Top Rated Hotel </h5>
               </div>
            </div>
         </div>
         <div class="table-main-row d-none d-md-block">
            <?php 
               if ($casino_hotels_query->have_posts()) :
                   $counter = 1;
                   while ($casino_hotels_query->have_posts()) : $casino_hotels_query->the_post();
               ?>
            <div class="hotle-list-table row p-0 align-items-center">
               <div class="col-1 number">
                  <p class="mb-0"><?php echo $counter; ?></p>
               </div>
               <div class="col-2 features">
                  <?php
                     $logo = get_post_meta(get_the_ID(), '_casino_hotel_logo', true);
                     if (!empty($logo)) {
                         echo '<div class="casino-logo"><img src="' . esc_url($logo) . '" alt="Logo" width="auto" height="auto"></div>';
                     }
                     ?>
               </div>
               <div class="col-3">
                  <div class="address-sec">Address</div>
                  <?php 
                     $address = get_post_meta(get_the_ID(), '_casino_hotel_address', true);
                     if (!empty($address)) {
                         echo '<div class="casino-address">' . esc_html($address) . '</div>';
                     }
                     ?>
               </div>
               <div class="col-2 d-inline star">
                  <?php
                     $star_rating = get_post_meta(get_the_ID(), '_casino_hotel_star_rating', true);
                     
                     if (!empty($star_rating)) {
                         $rounded_rating = round($star_rating); // Round the rating to the nearest rating number
                     
                         for ($i = 1; $i <= 5; $i++) {
                             $star_class = ($i <= $rounded_rating) ? 'star active' : 'star';
                             echo '<svg class="' . $star_class . '" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" width="24" height="24">
                             <path d="M12 2l2.4 6.6h6.6l-5.4 4.8 2.4 6.6-6-4.8-6 4.8 2.4-6.6-5.4-4.8h6.6l2.4-6.6z" fill="currentColor"/>
                             </svg>';
                         }
                     }
                     ?>
                  <div class="excellent">Excellent</div>
               </div>
               <?php
                  $score = get_post_meta(get_the_ID(), '_casino_hotel_score', true);
                  if ($score !== false) :
                      ?>
               <style>
                  @keyframes html-progress-<?php the_ID(); ?> {
                  to { --progress-value: <?php echo esc_attr($score) * 10; ?>; }
                  }
                  .progress-bar.html-<?php the_ID(); ?> {
                  --progress-value: 0; 
                  animation: html-progress-<?php the_ID(); ?> 2s forwards; 
                  background: 
                  radial-gradient(closest-side, white 79%, transparent 80% 100%),
                  conic-gradient(#FC115C calc(var(--progress-value) * 1%), #ffffff 0);
                  }
                  .progress-bar.html-<?php the_ID(); ?> progress {
                  width: var(--progress-value%);
                  }
               </style>
               <div class="col-2 justify-content-center score">
                  <div class="progress-bar html-<?php the_ID(); ?>">
                     <progress id="html" min="0" max="100" value="<?php echo $score ?>"></progress>
                     <div class="progress-number"><?php echo $score; ?></div>
                  </div>
               </div>
               <?php
                  endif;
                  ?>  
               <div class="col-2 d-inline external">
                  <div class="visite-hotel-button d-flex justify-content-center align-items-center">
                     <?php 
                        $external_link = get_post_meta(get_the_ID(), '_casino_hotel_external_link', true);
                        if (!empty($external_link)) {
                            echo '<div class="casino-external-link"><a href="' . esc_url($external_link) . '" target="_blank">Visit Hotel</a></div>';
                            echo '<div class="svg-icon">
                                    <svg class="arrow-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="none">
                                        <path d="M14.6464 21.3536L15 21.7071L15.3536 21.3536L21.3536 15.3536L21.7071 15L21.3536 14.6464L15.3536 8.64645L15 8.29289L14.6464 8.64645L12.5464 10.7464L12.1929 11.1L12.5464 11.4536L14.0929 13H9H8.5V13.5V16.5L8.5 17H9L14.0929 17L12.5464 18.5464L12.1929 18.9L12.5464 19.2536L14.6464 21.3536ZM1.64113 20.652L1.64104 20.6518C0.881244 18.8921 0.5 17.0099 0.5 15C0.5 12.9901 0.881244 11.1079 1.64104 9.3482L1.64113 9.34799C2.40413 7.57863 3.43759 6.04452 4.74105 4.74105C6.04456 3.43754 7.57876 2.40355 9.3482 1.63954C11.1079 0.880748 12.9901 0.5 15 0.5C17.01 0.5 18.8923 0.880778 20.652 1.63963C22.4214 2.40363 23.9555 3.4376 25.2589 4.74105C26.5624 6.04451 27.5959 7.57863 28.3589 9.34799L28.359 9.3482C29.1188 11.1079 29.5 12.9901 29.5 15C29.5 17.0099 29.1188 18.8921 28.359 20.6518L28.3589 20.652C27.5959 22.4214 26.5624 23.9555 25.2589 25.2589C23.9555 26.5624 22.4214 27.5959 20.652 28.3589L20.6518 28.359C18.8921 29.1188 17.0099 29.5 15 29.5C12.9901 29.5 11.1079 29.1188 9.3482 28.359L9.34799 28.3589C7.57863 27.5959 6.04451 26.5624 4.74105 25.2589C3.43759 23.9555 2.40413 22.4214 1.64113 20.652Z" fill="white" stroke="url(#paint0_linear_1_73)"></path>
                                        <defs>
                                            <linearGradient id="paint0_linear_1_73" x1="15" y1="0" x2="15" y2="30" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#DEDEDE"></stop>
                                                <stop offset="1" stop-color="#F1F1F1" stop-opacity="0"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>';
                        }
                        ?>
                  </div>
                  <?php 
                     $post_permalink = get_permalink(get_the_ID());
                     if (!empty($post_permalink)) {
                         echo '<div class="post-permalink-hotel"><a href="' . esc_url($post_permalink) . '">Read Review</a></div>';
                     }
                     ?>
               </div>
            </div>
            <?php
               $counter++;
               endwhile;
                   wp_reset_postdata();
               else :
                   echo 'No Casino Hotels found.';
               endif;
               ?>
         </div>
         <div class="table-main-row d-sm-none">
            <?php 
               if ($casino_hotels_query->have_posts()) :
                   while ($casino_hotels_query->have_posts()) : $casino_hotels_query->the_post();
               ?>
            <div class="hotle-list-table row align-items-center">
               <div class="col-12 d-flex align-items-center">
                  <div class="col-8 features d-inline-block">
                     <?php
                        $logo = get_post_meta(get_the_ID(), '_casino_hotel_logo', true);
                        if (!empty($logo)) {
                            echo '<div class="casino-logo"><img src="' . esc_url($logo) . '" alt="Logo" width="auto" height="auto"></div>';
                        }
                        ?>
                  </div>
                  <?php
                     $score = get_post_meta(get_the_ID(), '_casino_hotel_score', true);
                     if ($score !== false) :
                         ?>
                  <style>
                     @keyframes html-progress-<?php the_ID(); ?> {
                     to { --progress-value: <?php echo esc_attr($score) * 10; ?>; }
                     }
                     .progress-bar.html-<?php the_ID(); ?> {
                     --progress-value: 0; 
                     animation: html-progress-<?php the_ID(); ?> 2s forwards; 
                     background: 
                     radial-gradient(closest-side, white 79%, transparent 80% 100%),
                     conic-gradient(#FC115C calc(var(--progress-value) * 1%), #ffffff 0);
                     }
                     .progress-bar.html-<?php the_ID(); ?> progress {
                     width: var(--progress-value%);
                     }
                  </style>
                  <div class="col 4 justify-content-center score d-inline-block">
                     <div class="progress-bar html-<?php the_ID(); ?>">
                        <progress id="html" min="0" max="100" value="<?php echo $score ?>"></progress>
                        <div class="progress-number"><?php echo $score; ?></div>
                     </div>
                     <div class="d-inline star">
                        <?php
                           $star_rating = get_post_meta(get_the_ID(), '_casino_hotel_star_rating', true);
                           
                           if (!empty($star_rating)) {
                               $rounded_rating = round($star_rating); // Round the rating to the nearest rating number
                           
                               for ($i = 1; $i <= 5; $i++) {
                                   $star_class = ($i <= $rounded_rating) ? 'star active' : 'star';
                                   echo '<svg class="' . $star_class . '" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" width="18" height="18">
                                   <path d="M12 2l2.4 6.6h6.6l-5.4 4.8 2.4 6.6-6-4.8-6 4.8 2.4-6.6-5.4-4.8h6.6l2.4-6.6z" fill="currentColor"/>
                                   </svg>';
                               }
                           }
                           ?>
                     </div>
                  </div>
                  <?php
                     endif;
                     ?>  
               </div>
               <hr class="custom-hr-line">
               <div class="col-12">
                  <div class="address-sec">Address</div>
                  <?php 
                     $address = get_post_meta(get_the_ID(), '_casino_hotel_address', true);
                     if (!empty($address)) {
                         echo '<div class="casino-address">' . esc_html($address) . '</div>';
                     }
                     ?>
               </div>
               <hr class="custom-hr-line">
               <div class="col-12 d-inline external">
                  <div class="visite-hotel-button d-flex justify-content-center align-items-center">
                     <?php 
                        $external_link = get_post_meta(get_the_ID(), '_casino_hotel_external_link', true);
                        if (!empty($external_link)) {
                            echo '<div class="casino-external-link"><a href="' . esc_url($external_link) . '" target="_blank">Visit Hotel</a></div>';
                            echo '<div class="svg-icon">
                                    <svg class="arrow-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="none">
                                        <path d="M14.6464 21.3536L15 21.7071L15.3536 21.3536L21.3536 15.3536L21.7071 15L21.3536 14.6464L15.3536 8.64645L15 8.29289L14.6464 8.64645L12.5464 10.7464L12.1929 11.1L12.5464 11.4536L14.0929 13H9H8.5V13.5V16.5L8.5 17H9L14.0929 17L12.5464 18.5464L12.1929 18.9L12.5464 19.2536L14.6464 21.3536ZM1.64113 20.652L1.64104 20.6518C0.881244 18.8921 0.5 17.0099 0.5 15C0.5 12.9901 0.881244 11.1079 1.64104 9.3482L1.64113 9.34799C2.40413 7.57863 3.43759 6.04452 4.74105 4.74105C6.04456 3.43754 7.57876 2.40355 9.3482 1.63954C11.1079 0.880748 12.9901 0.5 15 0.5C17.01 0.5 18.8923 0.880778 20.652 1.63963C22.4214 2.40363 23.9555 3.4376 25.2589 4.74105C26.5624 6.04451 27.5959 7.57863 28.3589 9.34799L28.359 9.3482C29.1188 11.1079 29.5 12.9901 29.5 15C29.5 17.0099 29.1188 18.8921 28.359 20.6518L28.3589 20.652C27.5959 22.4214 26.5624 23.9555 25.2589 25.2589C23.9555 26.5624 22.4214 27.5959 20.652 28.3589L20.6518 28.359C18.8921 29.1188 17.0099 29.5 15 29.5C12.9901 29.5 11.1079 29.1188 9.3482 28.359L9.34799 28.3589C7.57863 27.5959 6.04451 26.5624 4.74105 25.2589C3.43759 23.9555 2.40413 22.4214 1.64113 20.652Z" fill="white" stroke="url(#paint0_linear_1_73)"></path>
                                        <defs>
                                            <linearGradient id="paint0_linear_1_73" x1="15" y1="0" x2="15" y2="30" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#DEDEDE"></stop>
                                                <stop offset="1" stop-color="#F1F1F1" stop-opacity="0"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>';
                        }
                        ?>
                  </div>
                  <?php 
                     $post_permalink = get_permalink(get_the_ID());
                     if (!empty($post_permalink)) {
                         echo '<div class="post-permalink-hotel"><a href="' . esc_url($post_permalink) . '">Read Review</a></div>';
                     }
                     ?>
               </div>
            </div>
            <?php
               $counter++;
               endwhile;
                   wp_reset_postdata();
               else :
                   echo 'No Casino Hotels found.';
               endif;
               ?>
         </div>
      </div>
   </section>
   <section class="custom-section-four my-4">
      <div class="row text-center justify-content-center">
         <div class="col-12 pb-3 mb-4">
            <div class="tag-line choose-us-tag"><?php echo $tag_lines; ?></div>
            <div class="choose-us-title"><?php echo $choose_us_title ?></div>
         </div>
         <div class="why-choose-us left-half-section col-md-5">
            <img src="<?php echo $choose_us_image; ?>" alt="choose us img" class="why-choose-logo" width="463px" height="625px">
         </div>
         <div class="why-choose-us right-half-section col-md-7 d-flex flex-column justify-content-center">
            <div class="choose-description one">
               <div class="dsc-number d-flex justify-content-center align-items-center">
                  <p class="mb-0">1</p>
               </div>
               <div class="dsc-title-one description-title">
                  <h3><?php echo $sub_title_1; ?></h3>
               </div>
               <div class="dsc-detail-one description-detail">
                  <p class="mb-0"><?php echo $sub_title_descriotion_1; ?></p>
               </div>
            </div>
            <div class="choose-description two">
               <div class="dsc-number d-flex justify-content-center align-items-center">
                  <p class="mb-0">1</p>
               </div>
               <div class="dsc-title-two description-title">
                  <h3><?php echo $sub_title_2; ?></h3>
               </div>
               <div class="dsc-detail-two description-detail">
                  <p class="mb-0"><?php echo $sub_title_descriotion_2; ?></p>
               </div>
            </div>
            <div class="choose-description three">
               <div class="dsc-number d-flex justify-content-center align-items-center">
                  <p class="mb-0">1</p>
               </div>
               <div class="dsc-title-three description-title">
                  <h3><?php echo $sub_title_3; ?></h3>
               </div>
               <div class="dsc-detail-three description-detail">
                  <p class="mb-0"><?php echo $sub_title_descriotion_3; ?></p>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
<style>
   @keyframes html-progress-<?php the_ID(); ?> {
   to { --progress-value: <?php echo esc_attr($score) * 10; ?>; }
   }
   .progress-bar.html-<?php the_ID(); ?> {
   --progress-value: 0; /* Set a default value here or remove it if not needed */
   animation: html-progress-<?php the_ID(); ?> 2s forwards; /* 1s duration, forwards to keep the final state */
   }
   .progress-bar.html-<?php the_ID(); ?> progress {
   width: var(--progress-value%);
   }
</style>
<?php 
get_footer();