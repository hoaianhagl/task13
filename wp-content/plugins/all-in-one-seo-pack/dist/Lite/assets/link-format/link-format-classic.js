!function(e){var t={};function n(i){if(t[i])return t[i].exports;var l=t[i]={i:i,l:!1,exports:{}};return e[i].call(l.exports,l,l.exports,n),l.l=!0,l.exports}n.m=e,n.c=t,n.d=function(e,t,i){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:i})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var i=Object.create(null);if(n.r(i),Object.defineProperty(i,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var l in e)n.d(i,l,function(t){return e[t]}.bind(null,l));return i},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=38)}({38:function(e,t){!function(e,t,n){var i,l,a,r,o,s=/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,63}$/i,c=/^(https?|ftp):\/\/[A-Z0-9.-]+\.[A-Z]{2,63}[^ "]*$/i,p={},d={},u="ontouchend"in document;function h(){return i?i.$('a[data-wplink-edit="true"]'):null}window.wpLinkL10n=t,window.wpLink={timeToTriggerRiver:150,minRiverAJAXDuration:200,riverBottomThreshold:5,keySensitivity:100,lastSearch:"",textarea:"",modalOpen:!1,init:function(){e("#wp-link .link-target").append('<br><label class="aioseo-link-target" style="padding-left: 4px;"><span>&nbsp;</span><input type="checkbox" id="aioseop-add-nofollow">'+t.noFollow+"</label>"),e("#wp-link .link-target").append('<br><label class="aioseo-link-target" style="padding-left: 4px;"><span>&nbsp;</span><input type="checkbox" id="aioseop-add-sponsored">'+t.sponsored+"</label>"),e("#wp-link .link-target").append('<br><label class="aioseo-link-target" style="padding-left: 4px;"><span>&nbsp;</span><input type="checkbox" id="aioseop-add-ugc">'+t.ugc+"</label><br>"),e(".wp-link-text-field").before('<div class="link-title-field"><label><span style="padding-left: 4px;">'+t.labelTitle+'</span><input id="wp-link-title" type="text" name="linktitle" /></label></div>'),e('<style type="text/css"> .has-text-field #wp-link .query-results { top: 256px !important; } #wp-link-wrap.search-panel-visible {height: 549px !important;} #wp-link .link-target .aioseo-link-target[style*="none"] + br {display: none;}</style>').appendTo("head"),p.wrap=e("#wp-link-wrap"),p.dialog=e("#wp-link"),p.backdrop=e("#wp-link-backdrop"),p.submit=e("#wp-link-submit"),p.close=e("#wp-link-close"),p.tanfl=e("#aioseop-add-nofollow"),p.tanfl_sponsored=e("#aioseop-add-sponsored"),p.tanfl_ugc=e("#aioseop-add-ugc"),p.title=e("#wp-link-title"),p.text=e("#wp-link-text"),p.url=e("#wp-link-url"),p.nonce=e("#_ajax_linking_nonce"),p.openInNewTab=e("#wp-link-target"),p.search=e("#wp-link-search"),d.search=new a(e("#search-results")),d.recent=new a(e("#most-recent-results")),d.elements=p.dialog.find(".query-results"),p.queryNotice=e("#query-notice-message"),p.queryNoticeTextDefault=p.queryNotice.find(".query-notice-default"),p.queryNoticeTextHint=p.queryNotice.find(".query-notice-hint"),p.dialog.on("keydown",wpLink.keydown),p.dialog.on("keyup",wpLink.keyup),p.submit.on("click",(function(e){e.preventDefault(),wpLink.update()})),p.close.add(p.backdrop).add("#wp-link-cancel button").on("click",(function(e){e.preventDefault(),wpLink.close()})),d.elements.on("river-select",wpLink.updateFields),p.search.on("focus.wplink",(function(){p.queryNoticeTextDefault.hide(),p.queryNoticeTextHint.removeClass("screen-reader-text").show()})).on("blur.wplink",(function(){p.queryNoticeTextDefault.show(),p.queryNoticeTextHint.addClass("screen-reader-text").hide()})),p.search.on("keyup input",(function(){window.clearTimeout(l),l=window.setTimeout((function(){wpLink.searchInternalLinks()}),500)})),p.url.on("paste",(function(){setTimeout(wpLink.correctURL,0)})),p.url.on("blur",wpLink.correctURL)},correctURL:function(){var t=e.trim(p.url.val());t&&o!==t&&!/^(?:[a-z]+:|#|\?|\.|\/)/.test(t)&&(p.url.val("http://"+t),o=t)},open:function(t,n,l){"acf-link-textarea"===t?(e(".aioseo-link-target").hide(),e(".link-title-field").hide()):(e(".aioseo-link-target").show(),e(".link-title-field").show());var a,r=e(document.body);r.addClass("modal-open"),wpLink.modalOpen=!0,wpLink.range=null,t&&(window.wpActiveEditor=t),window.wpActiveEditor&&(this.textarea=e("#"+window.wpActiveEditor).get(0),void 0!==window.tinymce&&(r.append(p.backdrop,p.wrap),a=window.tinymce.get(window.wpActiveEditor),i=a&&!a.isHidden()?a:null),!wpLink.isMCE()&&document.selection&&(this.textarea.focus(),this.range=document.selection.createRange()),p.wrap.show(),p.backdrop.show(),wpLink.refresh(n,l),e(document).trigger("wplink-open",p.wrap))},isMCE:function(){return i&&!i.isHidden()},refresh:function(e,t){d.search.refresh(),d.recent.refresh(),wpLink.isMCE()?wpLink.mceRefresh(e,t):(p.wrap.hasClass("has-text-field")||p.wrap.addClass("has-text-field"),document.selection?document.selection.createRange().text||t||"":void 0!==this.textarea.selectionStart&&this.textarea.selectionStart!==this.textarea.selectionEnd&&(t=this.textarea.value.substring(this.textarea.selectionStart,this.textarea.selectionEnd)||t||""),p.text.val(t),wpLink.setDefaultValues()),u?p.url.focus().blur():window.setTimeout((function(){p.url[0].select(),p.url.focus()})),d.recent.ul.children().length||d.recent.ajax(),o=p.url.val().replace(/^http:\/\//,""),jQuery(".has-text-field #wp-link .query-results").css("margin-top",25)},hasSelectedText:function(e){var t,n,l,a=i.selection.getContent();if(/</.test(a)&&(!/^<a [^>]+>[^<]+<\/a>$/.test(a)||-1===a.indexOf("href=")))return!1;if(e.length){if(!(n=e[0].childNodes)||!n.length)return!1;for(l=n.length-1;l>=0;l--)if(3!=(t=n[l]).nodeType&&!window.tinymce.dom.BookmarkManager.isBookmarkNode(t))return!1}return!0},mceRefresh:function(n,l){var a,r,o=h(),d=this.hasSelectedText(o);o.length?(a=o.text(),r=o.attr("href"),e.trim(a)||(a=l||""),n&&(c.test(n)||s.test(n))&&(r=n),"_wp_link_placeholder"!==r?(p.url.val(r),p.openInNewTab.prop("checked","_blank"===o.attr("target")),p.submit.val(t.update)):this.setDefaultValues(a),n&&n!==r?(p.url.val(n),p.search.val(n)):p.search.val(""),i.dom.getAttrib(o,"rel").indexOf("nofollow")>=0?p.tanfl.prop("checked",!0):p.tanfl.prop("checked",!1),i.dom.getAttrib(o,"rel").indexOf("sponsored")>=0?p.tanfl_sponsored.prop("checked",!0):p.tanfl_sponsored.prop("checked",!1),i.dom.getAttrib(o,"rel").indexOf("ugc")>=0?p.tanfl_ugc.prop("checked",!0):p.tanfl_ugc.prop("checked",!1),p.title.val(i.dom.getAttrib(o,"title")),window.setTimeout((function(){wpLink.searchInternalLinks()}))):(a=i.selection.getContent({format:"text"})||l||"",this.setDefaultValues(a),p.url.val(n)),d?(p.text.val(a),p.wrap.addClass("has-text-field")):(p.text.val(""),p.wrap.removeClass("has-text-field"))},close:function(t){e(document.body).removeClass("modal-open"),wpLink.modalOpen=!1,"noReset"!==t&&(wpLink.isMCE()?(i.plugins.wplink&&i.plugins.wplink.close(),i.focus()):(wpLink.textarea.focus(),wpLink.range&&(wpLink.range.moveToBookmark(wpLink.range.getBookmark()),wpLink.range.select()))),p.backdrop.hide(),p.wrap.hide(),o=!1,e(document).trigger("wplink-close",p.wrap)},getAttrs:function(){wpLink.correctURL();var t="";return p.tanfl.prop("checked")&&(t+="nofollow "),p.tanfl_sponsored.prop("checked")&&(t+="sponsored "),p.tanfl_ugc.prop("checked")&&(t+="ugc"),{href:e.trim(p.url.val()),target:p.openInNewTab.prop("checked")?"_blank":null,rel:""!==t?t:null,title:""!==p.title.val()?e.trim(p.title.val()):null}},buildHtml:function(e){var t='<a href="'+e.href+'"';return e.title&&(title=e.title.replace(/</g,"&lt;").replace(/>/g,"&gt;").replace(/"/g,"&quot;"),t+=' title="'+title+'"'),e.target?e.rel?t+=' rel="noopener '+e.rel+'" target="'+e.target+'"':t+=' rel="noopener" target="'+e.target+'"':e.rel&&(t+=' rel="'+e.rel+'"'),t+">"},update:function(){wpLink.isMCE()?wpLink.mceUpdate():wpLink.htmlUpdate()},htmlUpdate:function(){var i,l,a,r,o,s,c,d=wpLink.textarea;if(d){i=wpLink.getAttrs(),l=p.text.val();var u=document.createElement("a");u.href=i.href,"javascript:"!==u.protocol&&"data:"!==u.protocol||(i.href=""),i.href&&(a=wpLink.buildHtml(i),document.selection&&wpLink.range?(d.focus(),wpLink.range.text=a+(l||wpLink.range.text)+"</a>",wpLink.range.moveToBookmark(wpLink.range.getBookmark()),wpLink.range.select(),wpLink.range=null):void 0!==d.selectionStart&&(r=d.selectionStart,o=d.selectionEnd,s=r+(a=a+(c=l||d.value.substring(r,o))+"</a>").length,r!==o||c||(s-=4),d.value=d.value.substring(0,r)+a+d.value.substring(o,d.value.length),d.selectionStart=d.selectionEnd=s),wpLink.close(),d.focus(),e(d).trigger("change"),n.a11y.speak(t.linkInserted))}},mceUpdate:function(){var l,a,r,o=wpLink.getAttrs(),s=document.createElement("a");if(s.href=o.href,"javascript:"!==s.protocol&&"data:"!==s.protocol||(o.href=""),!o.href)return i.execCommand("unlink"),void wpLink.close();l=h(),i.undoManager.transact((function(){l.length||(i.execCommand("mceInsertLink",!1,{href:"_wp_link_placeholder","data-wp-temp-link":1}),l=i.$('a[data-wp-temp-link="1"]').removeAttr("data-wp-temp-link"),r=e.trim(l.text())),l.length?(p.wrap.hasClass("has-text-field")&&((a=p.text.val())?l.text(a):r||l.text(o.href)),o["data-wplink-edit"]=null,o["data-mce-href"]=o.href,l.attr(o)):i.execCommand("unlink")})),l=i.$('a[data-wplink-url-error="1"]').removeAttr("data-wplink-url-error"),wpLink.close("noReset"),i.focus(),l.length&&(i.selection.select(l[0]),i.plugins.wplink&&i.plugins.wplink.checkLink(l[0])),i.nodeChanged(),n.a11y.speak(t.linkInserted)},updateFields:function(e,t){p.url.val(t.children(".item-permalink").val()),p.title.val(t.hasClass("no-title")?"":t.children(".item-title").text()),p.wrap.hasClass("has-text-field")&&!p.text.val()&&p.text.val(t.children(".item-title").text())},getUrlFromSelection:function(t){return t||(this.isMCE()?t=i.selection.getContent({format:"text"}):document.selection&&wpLink.range?t=wpLink.range.text:void 0!==this.textarea.selectionStart&&(t=this.textarea.value.substring(this.textarea.selectionStart,this.textarea.selectionEnd))),(t=e.trim(t))&&s.test(t)?"mailto:"+t:t&&c.test(t)?t.replace(/&amp;|&#0?38;/gi,"&"):""},setDefaultValues:function(e){p.url.val(this.getUrlFromSelection(e)),p.title.val(""),p.openInNewTab.prop("checked",!1),p.tanfl.prop("checked",!1),p.tanfl_sponsored.prop("checked",!1),p.tanfl_ugc.prop("checked",!1),p.search.val(""),wpLink.searchInternalLinks(),p.submit.val(t.save)},searchInternalLinks:function(){var e,n=p.search.val()||"",i=parseInt(t.minInputLength,10)||3;if(n.length>=i){if(d.recent.hide(),d.search.show(),wpLink.lastSearch==n)return;wpLink.lastSearch=n,e=p.search.parent().find(".spinner").addClass("is-active"),d.search.change(n),d.search.ajax((function(){e.removeClass("is-active")}))}else d.search.hide(),d.recent.show()},next:function(){d.search.next(),d.recent.next()},prev:function(){d.search.prev(),d.recent.prev()},keydown:function(e){var t,n;27===e.keyCode?(wpLink.close(),e.stopImmediatePropagation()):9===e.keyCode&&("wp-link-submit"!==(n=e.target.id)||e.shiftKey?"wp-link-close"===n&&e.shiftKey&&(p.submit.focus(),e.preventDefault()):(p.close.focus(),e.preventDefault())),e.shiftKey||38!==e.keyCode&&40!==e.keyCode||(!document.activeElement||"link-title-field"!==document.activeElement.id&&"url-field"!==document.activeElement.id)&&(t=38===e.keyCode?"prev":"next",clearInterval(wpLink.keyInterval),wpLink[t](),wpLink.keyInterval=setInterval(wpLink[t],wpLink.keySensitivity),e.preventDefault())},keyup:function(e){38!==e.keyCode&&40!==e.keyCode||(clearInterval(wpLink.keyInterval),e.preventDefault())},delayedCallback:function(e,t){var n,i,l,a;return t?(setTimeout((function(){if(i)return e.apply(a,l);n=!0}),t),function(){if(n)return e.apply(this,arguments);l=arguments,a=this,i=!0}):e}},a=function(t,n){var i=this;this.element=t,this.ul=t.children("ul"),this.contentHeight=t.children("#link-selector-height"),this.waiting=t.find(".river-waiting"),this.change(n),this.refresh(),e("#wp-link .query-results, #wp-link #link-selector").on("scroll",(function(){i.maybeLoad()})),t.on("click","li",(function(t){i.select(e(this),t)}))},e.extend(a.prototype,{refresh:function(){this.deselect(),this.visible=this.element.is(":visible")},show:function(){this.visible||(this.deselect(),this.element.show(),this.visible=!0)},hide:function(){this.element.hide(),this.visible=!1},select:function(e,t){var n,i,l,a;e.hasClass("unselectable")||e==this.selected||(this.deselect(),this.selected=e.addClass("selected"),n=e.outerHeight(),i=this.element.height(),l=e.position().top,a=this.element.scrollTop(),l<0?this.element.scrollTop(a+l):l+n>i&&this.element.scrollTop(a+l-i+n),this.element.trigger("river-select",[e,t,this]))},deselect:function(){this.selected&&this.selected.removeClass("selected"),this.selected=!1},prev:function(){var e;this.visible&&(this.selected&&(e=this.selected.prev("li")).length&&this.select(e))},next:function(){if(this.visible){var t=this.selected?this.selected.next("li"):e("li:not(.unselectable):first",this.element);t.length&&this.select(t)}},ajax:function(e){var t=this,n=1==this.query.page?0:wpLink.minRiverAJAXDuration,i=wpLink.delayedCallback((function(n,i){t.process(n,i),e&&e(n,i)}),n);this.query.ajax(i)},change:function(e){this.query&&this._search==e||(this._search=e,this.query=new r(e),this.element.scrollTop(0))},process:function(n,i){var l="",a=!0,r="",o=1==i.page;n?e.each(n,(function(){r=a?"alternate":"",r+=this.title?"":" no-title",l+=r?'<li class="'+r+'">':"<li>",l+='<input type="hidden" class="item-permalink" value="'+this.permalink+'" />',l+='<span class="item-title">',l+=this.title?this.title:t.noTitle,l+='</span><span class="item-info">'+this.info+"</span></li>",a=!a})):o&&(l+='<li class="unselectable no-matches-found"><span class="item-title"><em>'+t.noMatchesFound+"</em></span></li>"),this.ul[o?"html":"append"](l)},maybeLoad:function(){var e=this,t=this.element,n=t.scrollTop()+t.height();!this.query.ready()||n<this.contentHeight.height()-wpLink.riverBottomThreshold||setTimeout((function(){var n=t.scrollTop(),i=n+t.height();!e.query.ready()||i<e.contentHeight.height()-wpLink.riverBottomThreshold||(e.waiting.addClass("is-active"),t.scrollTop(n+e.waiting.outerHeight()),e.ajax((function(){e.waiting.removeClass("is-active")})))}),wpLink.timeToTriggerRiver)}}),r=function(e){this.page=1,this.allLoaded=!1,this.querying=!1,this.search=e},e.extend(r.prototype,{ready:function(){return!(this.querying||this.allLoaded)},ajax:function(t){var n=this,i={action:"wp-link-ajax",page:this.page,_ajax_linking_nonce:p.nonce.val()};this.search&&(i.search=this.search),this.querying=!0,e.post(window.ajaxurl,i,(function(e){n.page++,n.querying=!1,n.allLoaded=!e,t(e,i)}),"json")}}),e(document).ready(wpLink.init)}(jQuery,window.aioseoL10n,window.wp)}});