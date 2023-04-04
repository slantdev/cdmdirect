<?php
include get_template_directory() . '/template-parts/layouts/section_settings.php';
/*
 * Available section variables
 * $section_id
 * $section_style
 * $section_padding_top
 * $section_padding_bottom
*/

$section_intro = get_sub_field('section_intro');
$headline = $section_intro['headline'];
$description = $section_intro['description'];
?>

<section id="<?php echo $section_id ?>" style="<?php echo $section_style ?>">
  <div class="relative <?php echo $section_padding_top . ' ' . $section_padding_bottom ?>">

    <?php if ($headline || $description) : ?>
      <div class="container max-w-screen-md text-center">
        <?php if ($headline) : ?>
          <div class="max-w-prose mx-auto mt-12">
            <h3 class="text-[34px] leading-tight font-bold text-brand-blue mt-6 mb-6"><?php echo $headline ?></h3>
          </div>
        <?php endif; ?>
        <?php if ($description) : ?>
          <div class="font-nunito text-lg"><?php echo $description ?></div>
        <?php endif; ?>
      </div>
    <?php endif; ?>

    <?php
    $team = get_sub_field('team');
    $team_category = $team['team_category'];
    $posts_per_page = $team['posts_per_page'];
    if (!$posts_per_page) {
      $posts_per_page = 0;
    }
    if ($team_category) {
      $args = array(
        'post_type' => 'team',
        'posts_per_page' => $posts_per_page,
        'tax_query' => array(
          array(
            'taxonomy' => 'team_category',
            'field'    => 'term_id',
            'terms'    => $team_category,
          ),
        ),
      );
    } else {
      $args = array(
        'post_type' => 'team',
        'posts_per_page' => $posts_per_page,
      );
    }
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) {
      echo '<div class="container max-w-screen-xl mt-20">';
      echo '<div class="grid grid-cols-3 border-r border-b border-[#D0D0D0]">';
      while ($the_query->have_posts()) {
        $the_query->the_post();
        $theID = get_the_ID();
        $details = get_field('details', $theID);
        $photo = $details['photo'];
        $full_name = $details['full_name'];
        $position = $details['position'];
        //preint_r($details);

        echo '<label for="team-' . $theID . '" class="block py-12 p-16 bg-white border-l border-t border-[#D0D0D0] cursor-pointer">';
        if ($photo) {
          echo '<div class="mb-5 text-center"><div class="mx-auto max-w-[240px]"><div class="aspect-w-1 aspect-h-1"><img src="' . $photo['url'] . '" alt="' . $full_name . '" class="rounded-full object-cover w-full h-full" /></div></div></div>';
        }
        echo '<div class="relative pr-6">';
        if ($full_name) {
          echo '<h4 class="font-normal text-2xl text-slate-800">' . $full_name . '</h4>';
        }
        if ($position) {
          echo '<h5 class="font-bold text-lg text-slate-800">' . $position . '</h5>';
        }
        echo cdmdirect_icon(array('icon' => 'plus', 'group' => 'utilities', 'size' => '24', 'class' => 'absolute -right-6 top-1 text-brand-blue'));
        echo '</div>';
        echo '</label>';
      }
      echo '</div>';
      echo '</div>';

      while ($the_query->have_posts()) {
        $the_query->the_post();
        $theID = get_the_ID();
        $details = get_field('details', $theID);
        $photo = $details['photo'];
        $full_name = $details['full_name'];
        $position = $details['position'];
        $bio = $details['bio'];
        $email = $details['email'];
        $phone = $details['phone'];
        $linkedin = $details['linkedin'];
        echo '<input type="checkbox" id="team-' . $theID . '" class="modal-toggle" />';
        echo '<label for="team-' . $theID . '" class="modal cursor-pointer">';
        echo '<label class="modal-box max-w-4xl p-0 relative" for="">';
        echo '<label for="team-' . $theID . '" class="absolute right-6 top-4 text-4xl cursor-pointer font-light text-slate-400 hover:text-slate-800 transition duration-300">✕</label>';
        echo '<div class="flex">';
        echo '<div class="w-1/2">';
        if ($photo) {
          echo '<img src="' . $photo['url'] . '" alt="' . $full_name . '" class="h-full w-full object-cover" />';
        }
        echo '</div>';
        echo '<div class="w-1/2 pt-16 py-8 px-8">';
        echo '<div class="flex flex-col h-full">';
        if ($full_name) {
          echo '<h3 class="text-[30px] font-light leading-tight text-slate-800">' . $full_name . '</h3>';
        }
        if ($position) {
          echo '<h4 class="font-bold text-xl leading-tight text-slate-800">' . $position . '</h4>';
        }
        if ($bio) {
          echo '<div class="prose overflow-y-auto max-h-80 mt-6">';
          echo $bio;
          echo '</div>';
        }
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</label>';
        echo '</label> ';
      }
    }
    wp_reset_postdata();
    ?>


  </div>
</section>