(function($){
  $(document).ready(function() {
    if ($('.acf-field-related-posts').length) {
      $('.acf-field-related-posts .acf-input').append($('.rp4wp_mb_manage'));
      $('#rp4wp_metabox_related_posts').remove();
    }
  });
})(jQuery);
