function WPSetAsThumbnail(t,n){var e=jQuery("a#wp-post-thumbnail-"+t);e.text(setPostThumbnailL10n.saving),jQuery.post(ajaxurl,{action:"set-post-thumbnail",post_id:post_id,thumbnail_id:t,_ajax_nonce:n,cookie:encodeURIComponent(document.cookie)},function(n){var o=window.dialogArguments||opener||parent||top;e.text(setPostThumbnailL10n.setThumbnail),"0"==n?alert(setPostThumbnailL10n.error):(jQuery("a.wp-post-thumbnail").show(),e.text(setPostThumbnailL10n.done),e.fadeOut(2e3),o.WPSetThumbnailID(t),o.WPSetThumbnailHTML(n))})}