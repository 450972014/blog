"use strict";+function(e){e(window).on("scroll",function(){var t=e(this).scrollTop();t>200?e(".back2top").addClass("is-active"):e(".back2top").removeClass("is-active")}),e(document).on("click",".back2top",function(){e("html,body").animate({scrollTop:0},800)});var t=e("body"),a=e("#cancel-comment-reply-link");a.text();e(document).on("submit","#commentform",function(a){a.preventDefault();var o=e(this);return o.hasClass("is-active")?alert("请勿重复提交"):(o.addClass("is-active"),t.addClass("is-loadingApp"),void e.ajax({url:J.ajax_url,data:o.serialize()+"&action=ajax_comment",type:"POST",success:function(a){if(500==a.status)createButterbar(a.data.code),setTimeout(function(){o.removeClass("is-active")},3e3);else{e("textarea").each(function(){this.value=""});var s=addComment,n=s.I("cancel-comment-reply-link"),c=s.I("wp-temp-form-div"),i=s.I(s.respondId),l=(s.I("comment_post_ID").value,s.I("comment_parent").value);"0"!=l?e("#respond").before('<ol class="children">'+a+"</ol>"):e("#respond").before('<ol class="comment-list">'+a+"</ol>"),t.removeClass("is-loadingApp"),setTimeout(function(){o.removeClass("is-active")},9e3),n.style.display="none",n.onclick=null,s.I("comment_parent").value="0",c&&i&&(c.parentNode.insertBefore(i,c),c.parentNode.removeChild(c))}}}))})}(jQuery);