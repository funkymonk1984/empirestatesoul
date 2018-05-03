window.wp=window.wp||{},function(e,t,a){t.updates={},t.updates.ajaxNonce=window._wpUpdatesSettings.ajax_nonce,t.updates.l10n=window._wpUpdatesSettings.l10n,t.updates.shouldRequestFilesystemCredentials=null,t.updates.filesystemCredentials={ftp:{host:null,username:null,password:null,connectionType:null},ssh:{publicKey:null,privateKey:null}},t.updates.updateLock=!1,t.updates.updateDoneSuccessfully=!1,t.updates.updateQueue=[],t.updates.$elToReturnFocusToFromCredentialsModal=null,t.updates.decrementCount=function(t){var a,s,u=e("#wp-admin-bar-updates .ab-label"),n=e('a[href="update-core.php"] .update-plugins'),d=e("#menu-plugins");if(a=u.text(),a=parseInt(a,10)-1,!(0>a||isNaN(a))&&(e("#wp-admin-bar-updates .ab-item").removeAttr("title"),u.text(a),n.each(function(e,t){t.className=t.className.replace(/count-\d+/,"count-"+a)}),n.removeAttr("title"),n.find(".update-count").text(a),"plugin"===t)){if(s=d.find(".plugin-count").eq(0).text(),s=parseInt(s,10)-1,0>s||isNaN(s))return;d.find(".plugin-count").text(s),d.find(".update-plugins").each(function(e,t){t.className=t.className.replace(/count-\d+/,"count-"+s)}),s>0?e(".subsubsub .upgrade .count").text("("+s+")"):e(".subsubsub .upgrade").remove()}},t.updates.updatePlugin=function(s,u){var n,d,l=e(".plugin-card-"+u);if("plugins"===a||"plugins-network"===a?n=e('[data-slug="'+u+'"]').next().find(".update-message"):"plugin-install"===a&&(n=l.find(".update-now"),d=n.data("name"),n.attr("aria-label",t.updates.l10n.updatingLabel.replace("%s",d)),l.removeClass("plugin-card-update-failed").find(".notice.notice-error").remove()),n.addClass("updating-message"),n.html()!==t.updates.l10n.updating&&n.data("originaltext",n.html()),n.text(t.updates.l10n.updating),t.a11y.speak(t.updates.l10n.updatingMsg),t.updates.updateLock)return void t.updates.updateQueue.push({type:"update-plugin",data:{plugin:s,slug:u}});t.updates.updateLock=!0;var i={_ajax_nonce:t.updates.ajaxNonce,plugin:s,slug:u,username:t.updates.filesystemCredentials.ftp.username,password:t.updates.filesystemCredentials.ftp.password,hostname:t.updates.filesystemCredentials.ftp.hostname,connection_type:t.updates.filesystemCredentials.ftp.connectionType,public_key:t.updates.filesystemCredentials.ssh.publicKey,private_key:t.updates.filesystemCredentials.ssh.privateKey};t.ajax.post("update-plugin",i).done(t.updates.updateSuccess).fail(t.updates.updateError)},t.updates.updateSuccess=function(s){var u,n,d,l;"plugins"===a||"plugins-network"===a?(d=e('[data-slug="'+s.slug+'"]').first(),u=d.next().find(".update-message"),d.addClass("updated").removeClass("update"),l=d.find(".plugin-version-author-uri").html().replace(s.oldVersion,s.newVersion),d.find(".plugin-version-author-uri").html(l),d.next().addClass("updated")):"plugin-install"===a&&(u=e(".plugin-card-"+s.slug).find(".update-now"),u.addClass("button-disabled"),n=u.data("name"),u.attr("aria-label",t.updates.l10n.updatedLabel.replace("%s",n))),u.removeClass("updating-message").addClass("updated-message"),u.text(t.updates.l10n.updated),t.a11y.speak(t.updates.l10n.updatedMsg),t.updates.decrementCount("plugin"),t.updates.updateDoneSuccessfully=!0,t.updates.updateLock=!1,e(document).trigger("wp-plugin-update-success",s),t.updates.queueChecker()},t.updates.updateError=function(s){var u,n,d,l,i=e(".plugin-card-"+s.slug);return t.updates.updateDoneSuccessfully=!1,s.errorCode&&"unable_to_connect_to_filesystem"==s.errorCode&&t.updates.shouldRequestFilesystemCredentials?void t.updates.credentialError(s,"update-plugin"):(l=t.updates.l10n.updateFailed.replace("%s",s.error),"plugins"===a||"plugins-network"===a?(u=e('[data-slug="'+s.slug+'"]').next().find(".update-message"),u.html(l).removeClass("updating-message")):"plugin-install"===a&&(n=i.find(".update-now"),d=n.data("name"),i.addClass("plugin-card-update-failed").append('<div class="notice notice-error is-dismissible"><p>'+l+"</p></div>"),n.attr("aria-label",t.updates.l10n.updateFailedLabel.replace("%s",d)).html(t.updates.l10n.updateFailedShort).removeClass("updating-message"),i.on("click",".notice.is-dismissible .notice-dismiss",function(){setTimeout(function(){i.removeClass("plugin-card-update-failed").find(".column-name a").focus()},200)})),t.a11y.speak(l,"assertive"),t.updates.updateLock=!1,e(document).trigger("wp-plugin-update-error",s),void t.updates.queueChecker())},t.updates.showErrorInCredentialsForm=function(t){var a=e(".notification-dialog");a.find(".error").remove(),a.find("h3").after('<div class="error">'+t+"</div>")},t.updates.credentialError=function(e,a){t.updates.updateQueue.push({type:a,data:{plugin:e.plugin,slug:e.slug}}),t.updates.showErrorInCredentialsForm(e.error),t.updates.requestFilesystemCredentials()},t.updates.queueChecker=function(){if(!(t.updates.updateLock||t.updates.updateQueue.length<=0)){var e=t.updates.updateQueue.shift();t.updates.updatePlugin(e.data.plugin,e.data.slug)}},t.updates.requestFilesystemCredentials=function(s){t.updates.updateDoneSuccessfully===!1&&("plugin-install"===a&&s&&(t.updates.$elToReturnFocusToFromCredentialsModal=e(s.target)),t.updates.updateLock=!0,t.updates.requestForCredentialsModalOpen())},t.updates.keydown=function(a){27===a.keyCode?t.updates.requestForCredentialsModalCancel():9===a.keyCode&&("upgrade"!==a.target.id||a.shiftKey?"hostname"===a.target.id&&a.shiftKey&&(e("#upgrade").focus(),a.preventDefault()):(e("#hostname").focus(),a.preventDefault()))},t.updates.requestForCredentialsModalOpen=function(){var a=e("#request-filesystem-credentials-dialog");e("body").addClass("modal-open"),a.show(),a.find("input:enabled:first").focus(),a.keydown(t.updates.keydown)},t.updates.requestForCredentialsModalClose=function(){e("#request-filesystem-credentials-dialog").hide(),e("body").removeClass("modal-open"),t.updates.$elToReturnFocusToFromCredentialsModal.focus()},t.updates.requestForCredentialsModalCancel=function(){var s,u;(t.updates.updateLock!==!1||0!==t.updates.updateQueue.length)&&(s=t.updates.updateQueue[0].data.slug,t.updates.updateLock=!1,t.updates.updateQueue=[],t.updates.requestForCredentialsModalClose(),"plugins"===a||"plugins-network"===a?u=e('[data-slug="'+s+'"]').next().find(".update-message"):"plugin-install"===a&&(u=e(".plugin-card-"+s).find(".update-now")),u.removeClass("updating-message"),u.html(u.data("originaltext")),t.a11y.speak(t.updates.l10n.updateCancel))},t.updates.beforeunload=function(){return t.updates.updateLock?t.updates.l10n.beforeunload:void 0},e(document).ready(function(){t.updates.shouldRequestFilesystemCredentials=e("#request-filesystem-credentials-dialog").length<=0?!1:!0,e("#request-filesystem-credentials-dialog form").on("submit",function(){return t.updates.filesystemCredentials.ftp.hostname=e("#hostname").val(),t.updates.filesystemCredentials.ftp.username=e("#username").val(),t.updates.filesystemCredentials.ftp.password=e("#password").val(),t.updates.filesystemCredentials.ftp.connectionType=e('input[name="connection_type"]:checked').val(),t.updates.filesystemCredentials.ssh.publicKey=e("#public_key").val(),t.updates.filesystemCredentials.ssh.privateKey=e("#private_key").val(),t.updates.requestForCredentialsModalClose(),t.updates.updateLock=!1,t.updates.queueChecker(),!1}),e('#request-filesystem-credentials-dialog [data-js-action="close"], .notification-dialog-background').on("click",function(){t.updates.requestForCredentialsModalCancel()}),e('#request-filesystem-credentials-dialog input[name="connection_type"]').on("change",function(){e(this).parents("form").find("#private_key, #public_key").parents("label").toggle("ssh"==e(this).val())}).change(),e(".plugin-update-tr").on("click",".update-link",function(a){a.preventDefault(),t.updates.shouldRequestFilesystemCredentials&&!t.updates.updateLock&&t.updates.requestFilesystemCredentials(a);var s=e(a.target).parents(".plugin-update-tr");t.updates.$elToReturnFocusToFromCredentialsModal=e("#"+s.data("slug")).find(".check-column input"),t.updates.updatePlugin(s.data("plugin"),s.data("slug"))}),e(".plugin-card").on("click",".update-now",function(a){a.preventDefault();var s=e(a.target);t.updates.shouldRequestFilesystemCredentials&&!t.updates.updateLock&&t.updates.requestFilesystemCredentials(a),t.updates.updatePlugin(s.data("plugin"),s.data("slug"))}),e("#plugin_update_from_iframe").on("click",function(t){var a,s;a=window.parent==window?null:window.parent,e.support.postMessage=!!window.postMessage,e.support.postMessage!==!1&&null!==a&&-1===window.parent.location.pathname.indexOf("update-core.php")&&(t.preventDefault(),s={action:"updatePlugin",slug:e(this).data("slug")},a.postMessage(JSON.stringify(s),window.location.origin))})}),e(window).on("message",function(s){var u,n=s.originalEvent,d=document.location,l=d.protocol+"//"+d.hostname;if(n.origin===l&&(u=e.parseJSON(n.data),"undefined"!=typeof u.action))switch(u.action){case"decrementUpdateCount":t.updates.decrementCount(u.upgradeType);break;case"updatePlugin":tb_remove(),"plugins"===a||"plugins-network"===a?(e("#"+u.slug).find(".check-column input").focus(),e('.plugin-update-tr[data-slug="'+u.slug+'"]').find(".update-link").trigger("click")):"plugin-install"===a&&(e(".plugin-card-"+u.slug).find(".column-name a").focus(),e(".plugin-card-"+u.slug).find('[data-slug="'+u.slug+'"]').trigger("click"))}}),e(window).on("beforeunload",t.updates.beforeunload)}(jQuery,window.wp,window.pagenow,window.ajaxurl);