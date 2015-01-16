<form action="<?php echo home_url( '/' ); ?>" class="search-form clearfix">
    <input type="text" class="search-form-input text span3" name="s" onfocus="if (this.value == '<?php _e('Search','okay'); ?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php _e('Search','okay'); ?>';}" value="<?php _e('Search','okay'); ?>"/>
    <br>
    <input type="submit" value="Go" class="submit btn btn-primary tk-brandon-grotesque" />
</form>