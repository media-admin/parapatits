(self.webpackChunkparapatits=self.webpackChunkparapatits||[]).push([[179],{724:(e,o,i)=>{"use strict";i(349),i(755),i(118),i(90),i(783);var t=i(493),n=i.n(t);function r(e,o){for(var i=0;i<o.length;i++){var t=o[i];t.enumerable=t.enumerable||!1,t.configurable=!0,"value"in t&&(t.writable=!0),Object.defineProperty(e,t.key,t)}}const c=function(){function e(){!function(e,o){if(!(e instanceof o))throw new TypeError("Cannot call a class as a function")}(this,e),this.siteHeader=document.querySelector(".site-header"),this.events()}var o,i;return o=e,(i=[{key:"events",value:function(){var e=this;window.addEventListener("scroll",n()((function(){return e.runOnScroll()}),200))}},{key:"runOnScroll",value:function(){window.scrollY>60?this.siteHeader.classList.add("site-header--dark"):this.siteHeader.classList.remove("site-header--dark")}}])&&r(o.prototype,i),Object.defineProperty(o,"prototype",{writable:!1}),e}();var s,a=i(124),l=i.n(a),d=i(667),u=i.n(d);i(626),new c,new(l()),new(u()),new CockieNotice,document.querySelectorAll(".open-modal").forEach((function(e){e.addEventListener("click",(function(e){e.preventDefault(),void 0===s?i.e(582).then(i.t.bind(i,759,23)).then((function(e){s=new e.default,setTimeout((function(){return s.openTheModal()}),20)})).catch((function(){return console.log("Ein Problem ist aufgetreten.")})):s.openTheModal()}))}))},124:()=>{$(document).ready((function(){var e=['<a href="#top" class="back-to-top"><p><img src="../../assets/images/icons/button_back-to-top.svg"</p></a>'].join("");$("body").append(e),$(".back-to-top").hide(),$((function(){$(window).scroll((function(){jQuery(this).scrollTop()>100?jQuery(".back-to-top").fadeIn():jQuery(".back-to-top").fadeOut()})),$(".back-to-top").click((function(){$("html, body").animate({scrollTop:$(".site-content").offset().top-120},800)}))}))}))},626:()=>{document.addEventListener("DOMContentLoaded",(function(){Dywc.init({cookie_version:1,cookie_name:"parapatits",cookie_expire:31536e3,cookie_path:"/",mode:1,bglayer:!0,position:"mt",id_bglayer:"dywc_bglayer",id_cookielayer:"dywc",id_cookieinfo:"dywc_info",url_legalnotice:"/datenschutzerklaerung.html",url_imprint:"/impressum.html",text_title:"Datenschutzeinstellungen",text_dialog:"Wir nutzen Cookies auf unserer Website. Einige von ihnen sind essenziell, während andere uns helfen, diese Website und Ihre Erfahrung zu verbessern.",cookie_groups:[{label:"Notwendig",fixed:!0,info:"Zum Betrieb der Seite notwendige Cookies:",cookies:[{label:"PHP Session Cookie",publisher:"Eigentümer dieser Website",aim:"Absicherung Kontaktformular / SPAM Schutz",name:"PHPSESSID",duraction:"Session"},{label:"Cookiespeicherung Entscheidungscookie",publisher:"Eigentümer dieser Website",aim:"Speichert die Einstellungen der Besucher bezüglich der Speicherung von Cookies.",name:"parapatits",duration:"1 Jahr"}]},{label:"Statistiken",fixed:!1,info:"Cookies die zur Auswertung des Benutzerverhaltens notwendig sind:",cookies:[{label:"Google Analytics",publisher:"Google LLC",aim:"Cookie von Google für Website-Analysen. Erzeugt statistische Daten darüber, wie der Besucher die Website nutzt.",name:"_ga,_gid",duration:"2 Jahre"}],accept:function(){var e,o,i,t,n;e=window,o=document,i="script",e.GoogleAnalyticsObject="ga",e.ga=e.ga||function(){(e.ga.q=e.ga.q||[]).push(arguments)},e.ga.l=1*new Date,t=o.createElement(i),n=o.getElementsByTagName(i)[0],t.async=1,t.src="https://www.google-analytics.com/analytics.js",n.parentNode.insertBefore(t,n),ga("create","{TrackingID}","auto"),ga("send","pageview")},reject:function(){var e="ga-disable-{TrackingID}";window[e]=!0,document.cookie=e+"=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/",dywc.cookie.removeItem("_ga","/",".parapatits.at"),dywc.cookie.removeItem("_gid","/",".parapatits.at"),dywc.cookie.removeItem("_gat","/",".parapatits.at"),dywc.cookie.removeItem("_gat_gtag_{TrackingID}","/",".parapatits.at")}}]})}))},667:()=>{function _typeof(e){return _typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},_typeof(e)}var dywc={config:null,cookie_value:null,cookie:{reURIAllowed:/[\-\.\+\*]/g,reCNameAllowed:/^(?:expires|max\-age|path|domain|secure|samesite|httponly)$/i,makeSetterString:function(e,o,i,t,n,r,c){var s="";if(i)switch(i.constructor){case Number:s=i===1/0?"; expires=Fri, 31 Dec 9999 23:59:59 GMT":"; max-age="+i;break;case String:s="; expires="+i;break;case Date:s="; expires="+i.toUTCString()}return encodeURIComponent(e)+"="+encodeURIComponent(o)+s+(n?"; domain="+n:"")+(t?"; path="+t:"")+(r?"; secure":"")+(!c||"no_restriction"===c.toString().toLowerCase()||c<0?"":"lax"===c.toString().toLowerCase()||1===Math.ceil(c)||!0===c?"; samesite=lax":"; samesite=strict")},getItem:function(e){return e&&decodeURIComponent(document.cookie.replace(new RegExp("(?:(?:^|.*;)\\s*"+encodeURIComponent(e).replace(this.reURIAllowed,"\\$&")+"\\s*\\=\\s*([^;]*).*$)|^.*$"),"$1"))||null},setItem:function(e,o,i,t,n,r,c){return!(!e||this.reCNameAllowed.test(e)||(document.cookie=this.makeSetterString(e,o,i,t,n,r,c),0))},hasItem:function(e){return!(!e||this.reCNameAllowed.test(e))&&new RegExp("(?:^|;\\s*)"+encodeURIComponent(e).replace(this.reURIAllowed,"\\$&")+"\\s*\\=").test(document.cookie)},removeItem:function(e,o,i,t,n){return!!this.hasItem(e)&&(document.cookie=this.makeSetterString(e,"","Thu, 01 Jan 1970 00:00:00 GMT",o,i,t,n),!0)}},init:function init(config){if(void 0===config&&(config=this.config),"object"!==_typeof(config))return console.error("DoYouWantCookie muss mit einem Konfigurations Array initiiert werden."),!1;if(this.config=config,this.log("Init"),this.cookie_value=this.cookie.getItem(this.config.cookie_name),null===this.cookie_value){var strCoookieHint="";for(var _i in strCoookieHint+='<div id="'+this.config.id_cookielayer+'" class="'+this.config.position+'">',strCoookieHint+='<div class="info">',strCoookieHint+='<div class="inner">',this.config.cookie_groups){var _cookie_group=this.config.cookie_groups[_i];for(var j in strCoookieHint+='<div class="group group_'+_i+'">',strCoookieHint+="<p>"+_cookie_group.info+"</p>",_cookie_group.cookies){var cookie=_cookie_group.cookies[j];strCoookieHint+='<div class="cookie">',strCoookieHint+='<div class="row"><div class="label">Name</div>',strCoookieHint+='<div class="value">'+cookie.label+"</div></div>",strCoookieHint+='<div class="row"><div class="label">Anbieter</div>',strCoookieHint+='<div class="value">'+cookie.publisher+"</div></div>",strCoookieHint+='<div class="row"><div class="label">Zweck</div>',strCoookieHint+='<div class="value">'+cookie.aim+"</div></div>",strCoookieHint+='<div class="row"><div class="label">Cookie Name</div>',strCoookieHint+='<div class="value">'+cookie.name+"</div></div>",strCoookieHint+='<div class="row"><div class="label">Cookie Laufzeit</div>',strCoookieHint+='<div class="value">'+cookie.duration+"</div></div>",strCoookieHint+="</div>"}strCoookieHint+="</div>"}for(var i in strCoookieHint+='<p><a href="#" onclick="return dywc.hideinfo();">Infos schließen</a></p>',strCoookieHint+="</div>",strCoookieHint+="</div>",strCoookieHint+='<div class="content">',strCoookieHint+="<h2>"+this.config.text_title+"</h2>",strCoookieHint+="<p>"+this.config.text_dialog+"</p>",strCoookieHint+="<div>",strCoookieHint+='<div class="cookie_group_wrap">',this.config.cookie_groups){var cookie_group=this.config.cookie_groups[i],group_checkbox_id="dywc_"+i;strCoookieHint+='<div class="cookie_group">',strCoookieHint+='<input type="checkbox" id="'+group_checkbox_id+'" '+(cookie_group.fixed?'disabled="disabled" checked="checked"':"")+">",strCoookieHint+='<label for="'+group_checkbox_id+'">'+cookie_group.label+'</label><a href="#" class="info" onclick="return dywc.info('+i+');">Info</a>',strCoookieHint+="</div>"}strCoookieHint+="</div>",1===this.config.mode?(strCoookieHint+='<div class="accept_wrap">',strCoookieHint+='<a href="#" class="accept" onclick="return dywc.accept(true);">Alle akzeptieren</a>',strCoookieHint+='<a href="#" class="accept2" onclick="return dywc.accept();">speichern</a>',strCoookieHint+="</div>"):(strCoookieHint+='<div class="accept_wrap">',strCoookieHint+='<a href="#" class="accept" onclick="return dywc.accept();">OK</a>',strCoookieHint+="</div>"),strCoookieHint+="</div>",strCoookieHint+='<p class="dsg">Die Auswahl kann in der <a href="'+this.config.url_legalnotice+'">Datenschutzerklärung</a> widerrufen werden.</p>',null!==this.config.url_imprint&&(strCoookieHint+='<p class="imprint"><a href="'+this.config.url_imprint+'">Impressum</a></p>'),strCoookieHint+="</div>",strCoookieHint+="</div>";var elem=document.querySelector("#"+this.config.id_cookielayer);null!==elem&&elem.parentNode.removeChild(elem),!0===this.config.bglayer&&(strCoookieHint+='<div id="'+this.config.id_bglayer+'"></div>'),document.querySelector("body").innerHTML+=strCoookieHint}else{var arSet=this.cookie_value.split("-");for(var _i2 in this.config.cookie_groups){var _cookie_group2=this.config.cookie_groups[_i2];void 0!==arSet[parseInt(_i2)+2]&&"1"===arSet[parseInt(_i2)+2]&&("function"==typeof _cookie_group2.accept?_cookie_group2.accept():"string"==typeof _cookie_group2.accept&&eval(_cookie_group2.accept))}}this.update()},log:function(){for(var e=arguments.length,o=new Array(e),i=0;i<e;i++)o[i]=arguments[i];this.config.debug&&console.log(o)},reset:function reset(){for(var i in this.log("reset"),this.cookie.removeItem(this.config.cookie_name,this.config.cookie_path),this.cookie_value=null,this.config.cookie_groups){var cookie_group=this.config.cookie_groups[i];"function"==typeof cookie_group.reject?cookie_group.reject():"string"==typeof cookie_group.reject&&eval(cookie_group.reject)}return this.init(),!1},info:function(e){this.log("Show Info ",e);var o=document.querySelector("#"+this.config.id_cookielayer),i=this.config.cookie_groups[e];return o.classList.contains("show_info")||o.classList.add("show_info"),"object"===_typeof(i)&&([].forEach.call(document.querySelectorAll("#"+this.config.id_cookielayer+" .info .group"),(function(e){e.style.display="none"})),document.querySelector("#"+this.config.id_cookielayer+" .info .group_"+e).style.display="block"),!1},hideinfo:function(){return this.log("hideInfo"),document.querySelector("#"+this.config.id_cookielayer).classList.remove("show_info"),!1},accept:function accept(check){for(var i in void 0===check&&(check=!1),this.cookie_value=this.config.cookie_version+"-1",this.config.cookie_groups){var cookie_group=this.config.cookie_groups[i],group_checkbox_id="dywc_"+i;document.getElementById(group_checkbox_id).checked||check?(this.cookie_value+="-1","function"==typeof cookie_group.accept?cookie_group.accept():"string"==typeof cookie_group.accept&&eval(cookie_group.accept)):this.cookie_value+="-0"}this.cookie_value+="-"+(new Date).getTime(),this.cookie.setItem(this.config.cookie_name,this.cookie_value,this.config.cookie_expire,this.config.cookie_path),this.update();var elemLayer=document.getElementById(this.config.id_cookielayer),elemBg=document.getElementById(this.config.id_bglayer);return null!==elemLayer&&elemLayer.classList.add("hide"),null!==elemBg&&elemLayer.classList.add("hide"),window.setTimeout((function(){null!==elemLayer&&elemLayer.parentNode.removeChild(elemLayer),null!==elemBg&&elemBg.parentNode.removeChild(elemBg)}),250),!1},update:function(){var e=document.getElementById(this.config.id_cookieinfo),o="";if(null!==e){var i=[];for(var t in null!==this.cookie_value&&(i=this.cookie_value.split("-")),this.config.cookie_groups){var n=this.config.cookie_groups[t];for(var r in o+="<p>"+n.info+"</p>",n.cookies){var c=n.cookies[r];if(n.fixed)var s="Verwendet, da notwendig und nicht von Drittanbieter";else s="Unentschieden, nicht verwendet",void 0!==i[parseInt(t)+2]&&(s="1"===i[parseInt(t)+2]?'<span class="accept">Akzeptiert</span>':'<span class="reject">Abgelehnt</span>');o+='<div class="cookie">',o+='<div class="row"><div class="label">Name</div>',o+='<div class="value">'+c.label+"</div></div>",o+='<div class="row"><div class="label">Anbieter</div>',o+='<div class="value">'+c.publisher+"</div></div>",o+='<div class="row"><div class="label">Zweck</div>',o+='<div class="value">'+c.aim+"</div></div>",o+='<div class="row"><div class="label">Cookie Name</div>',o+='<div class="value">'+c.name+"</div></div>",o+='<div class="row"><div class="label">Cookie Laufzeit</div>',o+='<div class="value">'+c.duration+"</div></div>",o+='<div class="row"><div class="label"<strong>Status</strong></div>',o+='<div class="value">'+s+"</div></div>",o+="</div>"}}if(o+="<p>",parseInt(i[0])===this.config.cookie_version){var a=new Date(parseInt(i[i.length-1])),l=a.getDate();l<10&&(l="0"+l);var d=a.getMonth()+1;d<10&&(d="0"+d);var u=a.getFullYear(),p=a.getHours();p<10&&(p="0"+p);var k=a.getMinutes();k<10&&(k="0"+k),o+="Sie haben sich am "+l+"."+d+"."+u+" um "+p+":"+k+" entschieden. Klicken Sie ",o+='<a href="#" onclick="return dywc.reset();">hier</a>, um die Entscheidung zu widerrufen.'}else o+="Sie haben sich noch nicht entschieden.";o+="</p>",e.innerHTML=o}}}}},e=>{e.O(0,[216],(()=>(724,e(e.s=724)))),e.O()}]);