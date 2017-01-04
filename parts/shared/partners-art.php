
<div id="blocks-container" class="full-background-slider to-be-slid" data-slider-num-blocks="1">
  <ul>
    <!-- Featured Company Partners -->
    <li class="content-block">
      <div class="company-partners">
         <?php 
          $partners = array();
          $large_featured_partners = array();

          $args = array( 
            'post_type' => 'amazing-partner',
            'order' => 'ASC',
            'meta_key' => 'featured', //Only query for posts with display_option checked
            'meta_value' => True, 
            'posts_per_page' => -1,
            'orderby' => 'rand'
          );

          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : 
            $loop->the_post();  
            $name = get_field('partner_name');
            $logo = get_field('logo');
            $largest_featured = get_field('largest_featured');

            $partners[] = array('name' => $name, 'logo' => $logo, 'largest_featured' => $largest_featured);
          endwhile; 

          //Filter array into larger images  and smaller ones
          foreach ($partners as $idx => $subarray) {
            foreach ($subarray as $key => $value) {
              if($key == "largest_featured" && $value == True) {
                $large_featured_partners[] = $subarray;
                array_splice($partners, $idx, 1);
              }
            }
          }

          shuffle($partners);
          shuffle($large_featured_partners);

        ?>
        <div class="featured">
          <table>
            <tbody>
              <tr>
                <td rowspan="2" colspan="2"><img class="large" src="<?= $large_featured_partners[0]['logo'] ?>" alt="<?= $large_featured_partners[0]['name'] ?>" title="<?= $large_featured_partners[0]['name'] ?>"></td>
                <td><img src="<?= $partners[0]['logo'] ?>" alt="<?= $partners[0]['name'] ?>" title="<?= $partners[0]['name'] ?>"></td>
                <td><img src="<?= $partners[1]['logo'] ?>" alt="<?= $partners[1]['name'] ?>" title="<?= $partners[1]['name'] ?>"></td>
              </tr>
              <tr>
                <td><img src="<?= $partners[2]['logo'] ?>" alt="<?= $partners[2]['name'] ?>" title="<?= $partners[2]['name'] ?>"></td>
                <td><img src="<?= $partners[3]['logo'] ?>" alt="<?= $partners[3]['name'] ?>" title="<?= $partners[3]['name'] ?>"></td>
              </tr>
              <tr>
                <td><img src="<?= $partners[4]['logo'] ?>" alt="<?= $partners[4]['name'] ?>" title="<?= $partners[4]['name'] ?>"></td>
                <td><img src="<?= $partners[5]['logo'] ?>" alt="<?= $partners[5]['name'] ?>" title="<?= $partners[5]['name'] ?>"></td>
              </tr>
            </tbody>
            
          </table>
        </div>
        <article id="text-box">
          <h2>Amazing Partners</h2>
          <p>
            From Grady’s Cold Brew’s amazing cold coffee and Batch Organics
            to the curated groups from our community partners, Uncubed simply
            wouldn’t be the creative melting pot that it is without their support.
          </p>
        </article>
      </div>
    </li>
    <!-- Featured University Partners -->
    <li class="content-block">
      <div class="university-partners">
        <?php 
          $university_partners = array();
          $large_featured_university_partners = array();

          $args = array( 
            'post_type' => 'u',
            'order' => 'ASC',
            'meta_key' => 'display_option', //Only query for posts with display_option checked
            'meta_value' => True, 
            'posts_per_page' => -1,
            'orderby' => 'rand'
          );

          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : 
            $loop->the_post();  
            $name = get_field('university_name');
            $logo = get_field('mosaic_logo');
            $largest_featured = get_field('largest_featured');

            $university_partners[] = array('name' => $name, 'logo' => $logo, 'largest_featured' => $largest_featured);
          endwhile; 

          //Filter array into larger images  and smaller ones
          foreach ($university_partners as $idx => $subarray) {
            foreach ($subarray as $key => $value) {
              if($key == "largest_featured" && $value == True) {
                $large_featured_university_partners[] = $subarray;
                array_splice($university_partners, $idx, 1);
              }
            }
          }

          //Mix things up a bit
          shuffle($university_partners);
          shuffle($large_featured_university_partners);

        ?>
        <div class="featured">
          <table>
            <tbody>
              <tr>
                <td rowspan="2" colspan="2">
                  <img class="large" src="<?= $large_featured_university_partners[0]['logo'] ?>" alt="<?= $large_featured_university_partners[0]['name'] ?>" title="<?= $large_featured_university_partners[0]['name'] ?>">
                </td>
                <td><img src="<?= $university_partners[0]['logo'] ?>" alt="<?= $university_partners[0]['name'] ?>" title="<?= $university_partners[0]['name'] ?>"></td>  
                <td><img src="<?= $university_partners[1]['logo'] ?>" alt="<?= $university_partners[1]['name'] ?>" title="<?= $university_partners[1]['name'] ?>"></td>
              </tr>
              <tr>
                <td><img src="<?= $university_partners[2]['logo'] ?>" alt="<?= $university_partners[2]['name'] ?>" title="<?= $university_partners[2]['name'] ?>"></td>
                <td><img src="<?= $university_partners[3]['logo'] ?>" alt="<?= $university_partners[3]['name'] ?>" title="<?= $university_partners[3]['name'] ?>"></td>
              </tr>
              <tr>
                <td><img src="<?= $university_partners[4]['logo'] ?>" alt="<?= $university_partners[4]['name'] ?>" title="<?= $university_partners[4]['name'] ?>"></td>
                <td><img src="<?= $university_partners[5]['logo'] ?>" alt="<?= $university_partners[5]['name'] ?>" title="<?= $university_partners[5]['name'] ?>"></td>
              </tr>
            </tbody>
            
          </table>
        </div>
        <!-- University Partners Sub-Text -->
        <article id="text-box">
          <h2>Hundreds of University Partners</h2>
          <p>
            Uncubed works directly with University administrators, students 
            and alumni groups from amazing educational institutions to 
            connect them with innovative companies. <br />
            We unite these groups at our Uncubed conferences, the Education 
            Uncubed Summit, the Student Startup Odyssey Tours and more.
          </p>
        </article>
      </div>
    </li>
    <!-- Featured Art -->
    <li class="content-block">
      <div class="art">
        <?php 

          $arts = array();
          $large_featured_arts = array();

          $args = array( 
            'post_type' => 'arts-and-competition',
            'order' => 'ASC',
            'meta_key' => 'featured', //Only query for posts with display_option checked
            'meta_value' => True, 
            'posts_per_page' => -1,
            'orderby' => 'rand'
          );

          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : 
            $loop->the_post();  
            $name = get_field('name');
            $logo = get_field('image');
            $largest_featured = get_field('largest_featured');

            $arts[] = array('name' => $name, 'logo' => $logo, 'largest_featured' => $largest_featured);
          endwhile; 

          //Filter array into larger images  and smaller ones
          foreach ($arts as $idx => $subarray) {
            foreach ($subarray as $key => $value) {
              if($key == "largest_featured" && $value == True) {
                $large_featured_arts[] = $subarray;
                array_splice($arts, $idx, 1);
              }
            }
          }
          shuffle($arts);
          shuffle($large_featured_arts);
        ?>

        <div class="featured">
          <table>
            <tbody>
              <tr>
                <td height="120px" width="120px"></td>
                <td height="120px" width="120px"></td>
                <td rowspan="2" colspan="2">
                  <img class="large" src="<?= $large_featured_arts[0]['logo'] ?>" alt="<?= $large_featured_arts[0]['name'] ?>" title="<?= $large_featured_arts[0]['name'] ?>"></td>
              </tr>
              <tr>
                <td><img src="<?= $arts[0]['logo'] ?>" alt="<?= $arts[0]['name'] ?>" title="<?= $arts[0]['name'] ?>"></td>
                <td><img src="<?= $arts[1]['logo'] ?>" alt="<?= $arts[1]['name'] ?>" title="<?= $arts[1]['name'] ?>"></td>
              </tr>
              <tr>
                <td><img src="<?= $arts[2]['logo'] ?>" alt="<?= $arts[2]['name'] ?>" title="<?= $arts[2]['name'] ?>"></td>
                <td><img src="<?= $arts[3]['logo'] ?>" alt="<?= $arts[3]['name'] ?>" title="<?= $arts[3]['name'] ?>"></td>
                <td><img src="<?= $arts[4]['logo'] ?>" alt="<?= $arts[4]['name'] ?>" title="<?= $arts[4]['name'] ?>"></td>
                <td><img src="<?= $arts[5]['logo'] ?>" alt="<?= $arts[5]['name'] ?>" title="<?= $arts[5]['name'] ?>"></td>
              </tr>
            </tbody>
          </table>
        </div>
        <article id="text-box">
          <h2>Live Art, Competitions and More</h2>
          <p>
            Each event we invite artists from around the world to
            take an empty canvas and produce a beautiful mixture of 
            color, texture and design while attendees participate in
            the creative process through pitch competitions, social
            contests and more.
          </p>
        </article>
      </div>
    </li>
  </ul>
</div>