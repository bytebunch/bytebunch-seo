<div class="wrap bytebunch_seo_container"><div id="icon-tools" class="icon32"></div>
   <form method="post" action="options.php">
      <?php
       settings_fields(BYTEBUNCH_SEO);
       
       ?>
      <h2>Titles & Metas - ByteBunch SEO</h2>
      <ul class="tabbed_menu">
         <li><a href="#bytebunch_seo_tab1">Home Page</a></li>
         <li><a href="#bytebunch_seo_tab2">Post Types</a></li>
         <li><a href="#bytebunch_seo_tab3">Taxonomies</a></li>
         <li><a href="#bytebunch_seo_tab4">Archives</a></li>
         <li><a href="#bytebunch_seo_tab5">Special Pages</a></li>
         <li><a href="#bytebunch_seo_tab6">Other</a></li>
      </ul>
      <div class="clearboth" style="border-top:1px solid #ccc;"></div>
      <div class="setting_pages_content_wrapper">
         
         <div id="bytebunch_seo_tab1" class="tab_menu_content">
            <div class="row">
               <div class="field_label">
                  <label for="<?php echo BYTEBUNCH_SEO; ?>[title_home]">Title template:</label>
               </div>
               <div class="field_input">
                  <input type="text" name="<?php echo BYTEBUNCH_SEO; ?>[title_home]" id="<?php echo BYTEBUNCH_SEO; ?>[title_home]" value="<?php if(isset(parent::$data['title_home'])){echo parent::$data['title_home'];}else{echo '{site_name} {sep} {site_description}';} ?>" />
               </div>
               <div class="clearboth"></div>
            </div><!-- row div end here-->
            <div class="row">
               <div class="field_label">
                  <label for="<?php echo BYTEBUNCH_SEO; ?>[desc_home]">Meta description template:</label>
               </div>
               <div class="field_input">
                  <textarea name="<?php echo BYTEBUNCH_SEO; ?>[desc_home]" id="<?php echo BYTEBUNCH_SEO; ?>[desc_home]" cols="45" rows="5"><?php if(isset(parent::$data['desc_home'])){echo parent::$data['desc_home'];} ?></textarea>
               </div>
               <div class="clearboth"></div>
            </div><!-- row div end here-->
         </div>
         
         <div id="bytebunch_seo_tab2" class="tab_menu_content">
            <?php
            $args = array(
               'public'   => true
            );
            $post_types = get_post_types( $args, 'names' ); 

            foreach ( $post_types as $post_type ) {

               echo '<h4>' . ucfirst($post_type) . '</h4>'; ?>
            <div class="row">
               <div class="field_label">
                  <label for="<?php echo BYTEBUNCH_SEO; ?>[title_<?php echo $post_type; ?>]">Title template:</label>
               </div>
               <div class="field_input">
                  <input type="text" name="<?php echo BYTEBUNCH_SEO; ?>[title_<?php echo $post_type; ?>]" id="<?php echo BYTEBUNCH_SEO; ?>[title_<?php echo $post_type; ?>]" value="<?php if(isset(parent::$data['title_'.$post_type])){echo parent::$data['title_'.$post_type];}else{echo '{title} {sep} {site_name}';} ?>" />
               </div>
               <div class="clearboth"></div>
            </div><!-- row div end here-->
            <div class="row">
               <div class="field_label">
                  <label for="<?php echo BYTEBUNCH_SEO; ?>[desc_<?php echo $post_type; ?>]">Meta description template:</label>
               </div>
               <div class="field_input">
                  <textarea name="<?php echo BYTEBUNCH_SEO; ?>[desc_<?php echo $post_type; ?>]" id="<?php echo BYTEBUNCH_SEO; ?>[desc_<?php echo $post_type; ?>]" cols="45" rows="5"><?php if(isset(parent::$data['desc_'.$post_type])){echo parent::$data['desc_'.$post_type];} ?></textarea>
               </div>
               <div class="clearboth"></div>
            </div><!-- row div end here-->
            <?php }
            ?>
            
         </div>
         
         <div id="bytebunch_seo_tab3" class="tab_menu_content">
            <?php
            $args = array(
               'public'   => true
            ); 
            $taxonomies = get_taxonomies($args); 
            foreach ( $taxonomies as $taxonomy ) {
                echo '<h4>' . ucfirst($taxonomy) . '</h4>';?>
            <div class="row">
               <div class="field_label">
                  <label for="<?php echo BYTEBUNCH_SEO; ?>[title_<?php echo $taxonomy; ?>]">Title template:</label>
               </div>
               <div class="field_input">
                  <input type="text" name="<?php echo BYTEBUNCH_SEO; ?>[title_<?php echo $taxonomy; ?>]" id="<?php echo BYTEBUNCH_SEO; ?>[title_<?php echo $taxonomy; ?>]" value="<?php if(isset(parent::$data['title_'.$taxonomy])){echo parent::$data['title_'.$taxonomy];}else{echo '{term_title} {sep} {site_name}';} ?>" />
               </div>
               <div class="clearboth"></div>
            </div><!-- row div end here-->
            <div class="row">
               <div class="field_label">
                  <label for="<?php echo BYTEBUNCH_SEO; ?>[desc_<?php echo $taxonomy; ?>]">Meta description template:</label>
               </div>
               <div class="field_input">
                  <textarea name="<?php echo BYTEBUNCH_SEO; ?>[desc_<?php echo $taxonomy; ?>]" id="<?php echo BYTEBUNCH_SEO; ?>[desc_<?php echo $taxonomy; ?>]" cols="45" rows="5"><?php if(isset(parent::$data['desc_'.$taxonomy])){echo parent::$data['desc_'.$taxonomy];} ?></textarea>
               </div>
               <div class="clearboth"></div>
            </div><!-- row div end here-->
            <?php }
            ?>
         </div>
         
         <div id="bytebunch_seo_tab4" class="tab_menu_content">
            <?php
            $archive_templates = array(
                array('Author Archive','archive_author','Posts by {author} {sep} {site_name}'),
                array('Day Archive','archive_day','Archives for {month} {day}, {year} {sep} {site_name}'),
                array('Month Archive','archive_month', 'Archives for {month} {year} {sep} {site_name}'),
                array('Year Archive', 'archive_year','Archives for {year} {sep} {site_name}')
            );
            foreach ( $archive_templates as $archive_template ) {
                echo '<h4>' . ucfirst($archive_template[0]) . '</h4>';?>
            <div class="row">
               <div class="field_label">
                  <label for="<?php echo BYTEBUNCH_SEO; ?>[title_<?php echo $archive_template[1]; ?>]">Title template:</label>
               </div>
               <div class="field_input">
                  <input type="text" name="<?php echo BYTEBUNCH_SEO; ?>[title_<?php echo $archive_template[1]; ?>]" id="<?php echo BYTEBUNCH_SEO; ?>[title_<?php echo $archive_template[1]; ?>]" value="<?php if(isset(parent::$data['title_'.$archive_template[1]])){echo parent::$data['title_'.$archive_template[1]];}else{echo $archive_template[2];} ?>" />
               </div>
               <div class="clearboth"></div>
            </div><!-- row div end here-->
            <div class="row">
               <div class="field_label">
                  <label for="<?php echo BYTEBUNCH_SEO; ?>[desc_<?php echo $archive_template[1]; ?>]">Meta description template:</label>
               </div>
               <div class="field_input">
                  <textarea name="<?php echo BYTEBUNCH_SEO; ?>[desc_<?php echo $archive_template[1]; ?>]" id="<?php echo BYTEBUNCH_SEO; ?>[desc_<?php echo $archive_template[1]; ?>]" cols="45" rows="5"><?php if(isset(parent::$data['desc_'.$archive_template[1]])){echo parent::$data['desc_'.$archive_template[1]];} ?></textarea>
               </div>
               <div class="clearboth"></div>
            </div><!-- row div end here-->
            <?php }
            ?>
            
         </div>
         
         <div id="bytebunch_seo_tab5" class="tab_menu_content">
            <?php
            $archive_templates = array(
                array('Search Page','search','Search Results for {query} {sep} {site_name}'),
                array('404 Page','404','404 Not Found {sep} {site_name}'),
                array('Pagination Pages','pagination', '{title} - Page {num}')
            );
            foreach ( $archive_templates as $archive_template ) {
                echo '<h4>' . ucfirst($archive_template[0]) . '</h4>';?>
            <div class="row">
               <div class="field_label">
                  <label for="<?php echo BYTEBUNCH_SEO; ?>[title_<?php echo $archive_template[1]; ?>]">Title template:</label>
               </div>
               <div class="field_input">
                  <input type="text" name="<?php echo BYTEBUNCH_SEO; ?>[title_<?php echo $archive_template[1]; ?>]" id="<?php echo BYTEBUNCH_SEO; ?>[title_<?php echo $archive_template[1]; ?>]" value="<?php if(isset(parent::$data['title_'.$archive_template[1]])){echo parent::$data['title_'.$archive_template[1]];}else{echo $archive_template[2];} ?>" />
               </div>
               <div class="clearboth"></div>
            </div><!-- row div end here-->
            <div class="row">
               <div class="field_label">
                  <label for="<?php echo BYTEBUNCH_SEO; ?>[desc_<?php echo $archive_template[1]; ?>]">Meta description template:</label>
               </div>
               <div class="field_input">
                  <textarea name="<?php echo BYTEBUNCH_SEO; ?>[desc_<?php echo $archive_template[1]; ?>]" id="<?php echo BYTEBUNCH_SEO; ?>[desc_<?php echo $archive_template[1]; ?>]" cols="45" rows="5"><?php if(isset(parent::$data['desc_'.$archive_template[1]])){echo parent::$data['desc_'.$archive_template[1]];} ?></textarea>
               </div>
               <div class="clearboth"></div>
            </div><!-- row div end here-->
            <?php }
            ?>
            
         </div>
         
         <div id="bytebunch_seo_tab6" class="tab_menu_content title_separator">
            <div class="row">
               <div class="field_label">Title Separator
               </div>
               <div class="field_input">
                  <?php 
                  $separator_options = array(
                  'sc-dash' => '-',
                  'sc-ndash' => '–',
                  'sc-mdash' => '—',
                  'sc-middot' => '·',
                  'sc-bull' => '•',
                  'sc-star' => '*',
                  'sc-smstar' => '⋆',
                  'sc-pipe' => '|',
                  'sc-tilde' => '~',
                  'sc-laquo' => '«',
                  'sc-raquo' => '»',
                  'sc-lt' => '<',
                  'sc-gt' => '>',
                  );
                  if(isset(parent::$data['title_separator'])){ $checked = parent::$data['title_separator'];}
                  else {$checked = 'sc-pipe';}
                  foreach ($separator_options as $key=>$separator){
                     echo '<input id="'.BYTEBUNCH_SEO.'_'.$key.'" name="'.BYTEBUNCH_SEO.'[title_separator]" type="radio" value="'.$key.'" '.checked( $checked ,$key,false).' class="radio" />';
                     echo '<label for="'.BYTEBUNCH_SEO.'_'.$key.'">'.$separator.'</label>';
                  }
                  ?>
               </div>
               <div class="clearboth"></div>
            </div>
            
         </div>
         
      </div><!-- setting pages content wrapper div end here-->
      
       
       <p class="submit">
           <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
       </p>
   </form>
</div>