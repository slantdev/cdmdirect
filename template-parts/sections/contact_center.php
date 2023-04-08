<?php
include get_template_directory() . '/template-parts/layouts/section_settings.php';
/*
 * Available section variables
 * $section_id
 * $section_style
 * $section_padding_top
 * $section_padding_bottom
*/
$contact_center = get_sub_field('contact_center');
?>

<section id="<?php echo $section_id ?>" style="<?php echo $section_style ?>">
  <div class="relative <?php echo $section_padding_top . ' ' . $section_padding_bottom ?>">

    <?php
    if ($contact_center) :
      $lastKey = array_key_last($contact_center);
      foreach ($contact_center as $k => $row) :
        $headline = $row['headline'];
        $description = $row['description'];
        $addresses = $row['addresses'];

        if ($k == $lastKey) {
          echo '<div class="container max-w-screen-xl">';
        } else {
          echo '<div class="container max-w-screen-xl mb-24">';
        }

        echo '<div class="flex items-center gap-x-16">';

        if ($headline) :
          echo '<div class="w-1/2"><h2 class="text-brand-blue text-[34px] font-bold">' . $headline . '</h2></div>';
        endif;

        if ($description) :
          echo '<div class="w-1/2"><div class="prose max-w-none">' . $description . '</div></div>';
        endif;

        echo '</div>';

        if ($addresses) :
          if (count($addresses) > 1) {
            echo '<div class="grid grid-cols-2 gap-16 mt-12">';
          } else {
            echo '<div class="grid grid-cols-1 gap-16 mt-12">';
          }
          foreach ($addresses as $address) :
            $image = $address['image'];
            $city = $address['city'];
            $address = $address['address'];
            echo '<div>';
            if ($image) {
              if (count($addresses) > 1) {
                echo '<div class="aspect-w-3 aspect-h-2">';
              } else {
                echo '<div class="aspect-w-16 aspect-h-6">';
              }
              echo '<img src="' . $image['url'] . '" alt="" class="object-cover h-full w-full rounded-lg" />';
              echo '</div>';
            }
            echo '<div class="mt-10">';
            if ($city) {
              echo '<h4 class="pb-4 border-b border-slate-300 mb-4 font-bold text-[28px] text-slate-800">' . $city . '</h4>';
            }
            if ($address) {
              echo '<div class="text-lg text-slate-800">' . $address . '</div>';
            }
            echo '</div>';
            echo '</div>';
          endforeach;
          echo '</div>';
        endif;

        echo '</div>';
      endforeach;
    endif;
    ?>
  </div>
</section>