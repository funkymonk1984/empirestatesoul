!function(){function e(e){var t,s;if(e)for(t in e)e.hasOwnProperty(t)&&(this.settings[t]=e[t]);s=this.settings.l10n.shortcodes,s&&s.length&&(this.settings.shortcodesRegExp=new RegExp("\\[\\/?(?:"+s.join("|")+")[^\\]]*?\\]","g"))}e.prototype.settings={HTMLRegExp:/<\/?[a-z][^>]*?>/gi,HTMLcommentRegExp:/<!--[\s\S]*?-->/g,spaceRegExp:/&nbsp;|&#160;/gi,HTMLEntityRegExp:/&\S+?;/g,connectorRegExp:/--|\u2014/g,removeRegExp:new RegExp(["[","!-@[-`{-~","-¿×÷"," -⯿","⸀-⹿","]"].join(""),"g"),astralRegExp:/[\uD800-\uDBFF][\uDC00-\uDFFF]/g,wordsRegExp:/\S\s+/g,characters_excluding_spacesRegExp:/\S/g,characters_including_spacesRegExp:/[^\f\n\r\t\v\u00AD\u2028\u2029]/g,l10n:window.wordCountL10n||{}},e.prototype.count=function(e,t){var s=0;return t=t||this.settings.l10n.type,"characters_excluding_spaces"!==t&&"characters_including_spaces"!==t&&(t="words"),e&&(e+="\n",e=e.replace(this.settings.HTMLRegExp,"\n"),e=e.replace(this.settings.HTMLcommentRegExp,""),this.settings.shortcodesRegExp&&(e=e.replace(this.settings.shortcodesRegExp,"\n")),e=e.replace(this.settings.spaceRegExp," "),"words"===t?(e=e.replace(this.settings.HTMLEntityRegExp,""),e=e.replace(this.settings.connectorRegExp," "),e=e.replace(this.settings.removeRegExp,"")):(e=e.replace(this.settings.HTMLEntityRegExp,"a"),e=e.replace(this.settings.astralRegExp,"a")),e=e.match(this.settings[t+"RegExp"]),e&&(s=e.length)),s},window.wp=window.wp||{},window.wp.utils=window.wp.utils||{},window.wp.utils.WordCounter=e}();