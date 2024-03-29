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
          echo '<div class="container max-w-screen-xl mb-12 lg:mb-24">';
        }

        echo '<div class="flex flex-col lg:flex-row lg:items-center lg:gap-x-10 xl:gap-x-16">';

        if ($headline) :
          echo '<div class="w-full lg:w-1/2"><h2 class="text-brand-blue text-3xl lg:text-[34px] font-bold mb-4 lg:mb-0">' . $headline . '</h2></div>';
        endif;

        if ($description) :
          echo '<div class="w-full lg:w-1/2"><div class="prose max-w-none">' . $description . '</div></div>';
        endif;

        echo '</div>';

        if ($addresses) :
          if (count($addresses) > 1) {
            echo '<div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-8 lg:gap-10 xl:gap-16 mt-8 lg:mt-12">';
          } else {
            echo '<div class="grid grid-cols-1 gap-10 lg:gap-10 xl:gap-16 mt-8 lg:mt-12">';
          }
          foreach ($addresses as $address) :
            //$image = $address['image'];
            $map_iframe = $address['map_iframe'];
            $city = $address['city'];
            $address = $address['address'];
            echo '<div>';
            if ($map_iframe) {
              if (count($addresses) > 1) {
                echo '<div class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden">';
              } else {
                echo '<div class="aspect-w-3 aspect-h-2 lg:aspect-w-16 lg:aspect-h-6 rounded-lg overflow-hidden">';
              }
              echo $map_iframe;
              echo '</div>';
            }
            echo '<div class="mt-4 lg:mt-10">';
            if ($city) {
              echo '<h4 class="pb-4 border-b border-slate-300 mb-4 font-bold text-2xl lg:text-[28px] text-slate-800">' . $city . '</h4>';
            }
            if ($address) {
              echo '<div class="text-base lg:text-lg text-slate-800">' . $address . '</div>';
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