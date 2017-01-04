<div id="blocks-container" class="full-background-slider to-be-slid" data-slider-num-blocks="1">
  <ul>
    <!-- Featured Unique Companies -->
    <li class="content-block">
      <div class="unique-company">
        <?php 

          $unique_companies = array();
          $large_featured_companies = array();

          $args = array( 
            'post_type' => 'unique-company',
            'order' => 'ASC',
            'meta_key' => 'featured', //Only query for posts with display_option checked
            'meta_value' => True, 
            'posts_per_page' => -1,
            'orderby' => 'rand'
          );
          $loop = new WP_Query( $args );
          
          while ( $loop->have_posts() ) : 
              $loop->the_post(); 
              $name = get_field('company_name');
              $logo = get_field('logo');
              $largest_featured = get_field('largest_featured');

              $unique_companies[] = array('name' => $name, 'logo' => $logo, 'largest_featured' => $largest_featured);
          endwhile; 

          //Filter array into larger images  and smaller ones
          foreach ($unique_companies as $idx => $subarray) {
            foreach ($subarray as $key => $value) {
              if($key == "largest_featured" && $value == True) {
                $large_featured_companies[] = $subarray;
                array_splice($unique_companies, $idx, 1);
              }
            }
          }
          shuffle($unique_companies);
          shuffle($large_featured_companies);

        ?>
        <div class="featured">
          <table>
            <tbody>
              <tr>
                <td rowspan="2" colspan="2" width="240px" height="240px">
                  <img class="large" src="<?= $large_featured_companies[0]['logo'] ?>" alt="<?= $large_featured_companies[0]['name'] ?>" title="<?= $large_featured_companies[0]['name'] ?>">
                </td>
                <td><img src="<?= $unique_companies[0]['logo'] ?>" alt="<?= $unique_companies[0]['name'] ?>" title="<?= $unique_companies[0]['name'] ?>"></td>
                <td><img src="<?= $unique_companies[1]['logo'] ?>" alt="<?= $unique_companies[1]['name'] ?>" title="<?= $unique_companies[1]['name'] ?>"></td>
              </tr>
              <tr>
                <td><img src="<?= $unique_companies[2]['logo'] ?>" alt="<?= $unique_companies[2]['name'] ?>" title="<?= $unique_companies[2]['name'] ?>"></td>
                <td><img src="<?= $unique_companies[3]['logo'] ?>" alt="<?= $unique_companies[3]['name'] ?>" title="<?= $unique_companies[3]['name'] ?>"></td>
              </tr>
              <tr>
                <td><img src="<?= $unique_companies[4]['logo'] ?>" alt="<?= $unique_companies[4]['name'] ?>" title="<?= $unique_companies[4]['name'] ?>"></td>
                <td><img src="<?= $unique_companies[5]['logo'] ?>" alt="<?= $unique_companies[5]['name'] ?>" title="<?= $unique_companies[5]['name'] ?>"></td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- Unique Companies Sub-Text -->
        <article id="text-box">
          <h2>Over 600  Unique Companies</h2>
          <p>
            From San Francisco to Berlin, Uncubed has invited the most exciting 
            young companies to show off their culture and opportunities in a 
            creative and interactive atmosphere.
          </p>
          <p class="quote">
            <em>We hired a Software Engineer for our Web Services
            team...Our tech recruiters were very impressed by 
            the caliber of technical attendees.” <br />
            - AppNexus</em>
          <p>
        </article>
      </div>
    </li>
    <!-- Featured Content -->
    <li class="content-block">
      <div class="content">
        <?php

          $speakers = array();
          $large_featured_speakers = array();

          $args = array( 
            'post_type' => 'world-class-contents',
            'order' => 'ASC',
            'meta_key' => 'featured', //Only query for posts with display_option checked
            'meta_value' => True,
            'posts_per_page' => -1,
            'orderby' => 'rand'
          );

          //Query DB for all posts then filter the returned array
          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : 
              $loop->the_post(); 
              $name = get_field('speaker_name');
              $logo = get_field('photo');
              $largest_featured = get_field('largest_featured');

              $speakers[] = array("name" => $name, "logo" => $logo, "largest_featured" => $largest_featured);
          endwhile; 
          
          //Filter array into larger images and smaller ones
          foreach ($speakers as $idx => $subarray) {
            foreach ($subarray as $key => $value) {
              if($key == "largest_featured" && $value == True) {
                $large_featured_speakers[] = $subarray;
                array_splice($speakers, $idx, 1);
              }
            }
          }

          shuffle($speakers);
          shuffle($large_featured_speakers);

        ?>
        <div class="featured">
          <table>
            <tbody>
              <tr>
                <td height="120px" width="120px"></td>
                <td height="120px" width="120px"></td>
                <td rowspan="2" colspan="2"><img class="large" src="<?= $large_featured_speakers[0]['logo'] ?>" alt="<?= $large_featured_speakers[0]['name'] ?>" title="<?= $large_featured_speakers[0]['name'] ?>"></td>
              </tr>
              <tr>
                <td><img src="<?= $speakers[0]['logo'] ?>" alt="<?= $speakers[0]['name'] ?>" title="<?= $speakers[0]['name'] ?>"></td>
                <td><img src="<?= $speakers[1]['logo'] ?>" alt="<?= $speakers[1]['name'] ?>" title="<?= $speakers[1]['name'] ?>"></td>
              </tr>
              <tr>
                <td><img src="<?= $speakers[2]['logo'] ?>" alt="<?= $speakers[2]['name'] ?>" title="<?= $speakers[2]['name'] ?>"></td>
                <td><img src="<?= $speakers[3]['logo'] ?>" alt="<?= $speakers[3]['name'] ?>" title="<?= $speakers[3]['name'] ?>"></td>
                <td><img src="<?= $speakers[4]['logo'] ?>" alt="<?= $speakers[4]['name'] ?>" title="<?= $speakers[4]['name'] ?>"></td>
                <td><img src="<?= $speakers[5]['logo'] ?>" alt="<?= $speakers[5]['name'] ?>" title="<?= $speakers[5]['name'] ?>"></td>
              </tr>
            </tbody>
          </table>
        </div>
        <article id="text-box">
          <h2>World Class Content</h2>
          <p>
            Tens of thousands of attendees come from all walks 
            of life to hear some of the brightest minds at 
            today’s growing companies. 
            <br />
            Classes, Discussion, Demos and more drive learning, 
            inspiration and discovery amongst the many attendees 
            looking to get Uncubed.
          </p>
        </article>
      </div>
    </li>
  </ul>
</div>

