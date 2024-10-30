<?php
function cp_pressit_settings() {
?>

<div class="wrap">
  <?php screen_icon('options-general'); ?>
  <h2><?php _e( 'Cafepress "Press It" Button Settings', 'cp' ); ?></h2>

  <div id="poststuff" class="metabox-holder">
    <div id="post-body">
      <div id="post-body-content">
        <div class="meta-box-sortables ui-sortable">
          <?php settings_errors(); //Display status messages after action ("settings saved", errors) ?>

          <form method="post" action="options.php">
            <div class="postbox">
              <div class="handlediv" title="Click to toggle"><br /></div>
              <h3><?php _e( 'Affiliate Settings', 'cp' ); ?></h3>
              <?php settings_fields( 'cp_options_group' ); ?>

                  <table class="form-table inside" style="display: table;">
                    <tbody>
                      <tr valign="top">
                        <td>
                          As an affiliate in the CafePress Partners Program, you earn commissions
                          right away! And since CafePress offers the world's largest collection of
                          user-designed products, we know we've got a topic just for you. Choose
                          products from humor, politics, baby items, pets, knitting, military,
                          global warming, cancer awareness, education, holidays, music, movies,
                          TV and a WHOLE lot more.
                        </td>
                      </tr>
                      <tr valign="top">
                        <td>
                        Go to the <a href="http://www.cafepress.com/content/cp-partners/main_in.html" target="_blank">
                        Cafepress Affiliate sign-up page</a> to get your own Affiliate ID and to get more information.
                        </td>
                      </tr>
                      <tr valign="top">
                        <td>
                          <label for="cp_affiliate_id">Affiliate ID:</label>
                          <input type="text" id="cp_affiliate_id" value="<?php echo get_option('cp_affiliate_id') ?>" name="cp_affiliate_id">
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>

            <div>
              <input name="submit" type="submit" class="button-primary" value="<?php _e( 'Save Changes', 'cp' ); ?>" />
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php } ?>
