!function($){var e="undefined"!=typeof current_site_id?"&site_id="+current_site_id:"";$(document).ready(function(){var t={offset:"0, -1"};"undefined"!=typeof isRtl&&isRtl&&(t.my="right top",t.at="right bottom"),$(".wp-suggest-user").each(function(){var o=$(this),a="undefined"!=typeof o.data("autocompleteType")?o.data("autocompleteType"):"add",i="undefined"!=typeof o.data("autocompleteField")?o.data("autocompleteField"):"user_login";o.autocomplete({source:ajaxurl+"?action=autocomplete-user&autocomplete_type="+a+"&autocomplete_field="+i+e,delay:500,minLength:2,position:t,open:function(){$(this).addClass("open")},close:function(){$(this).removeClass("open")}})})})}(jQuery);