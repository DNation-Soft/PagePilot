window.Modernizr=function(e,t,n){function r(e){h.cssText=e}function o(e,t){return typeof e===t}function a(e,t){return!!~(""+e).indexOf(t)}function i(e,t){for(var r in e){var o=e[r];if(!a(o,"-")&&h[o]!==n)return"pfx"!=t||o}return!1}function c(e,t,r){for(var a in e){var i=t[e[a]];if(i!==n)return!1===r?e[a]:o(i,"function")?i.bind(r||t):i}return!1}function l(e,t,n){var r=e.charAt(0).toUpperCase()+e.slice(1),a=(e+" "+E.join(r+" ")+r).split(" ");return o(t,"string")||o(t,"undefined")?i(a,t):c(a=(e+" "+x.join(r+" ")+r).split(" "),t,n)}var u,s,d={},f=t.documentElement,p="modernizr",m=t.createElement(p),h=m.style,v=t.createElement("input"),y=":)",g=" -webkit- -moz- -o- -ms- ".split(" "),b="Webkit Moz O ms",E=b.split(" "),x=b.toLowerCase().split(" "),w={},C={},S={},j=[],k=j.slice,T=function(e,n,r,o){var a,i,c,l,u=t.createElement("div"),s=t.body,d=s||t.createElement("body");if(parseInt(r,10))for(;r--;)(c=t.createElement("div")).id=o?o[r]:p+(r+1),u.appendChild(c);return a=["&#173;",'<style id="s',p,'">',e,"</style>"].join(""),u.id=p,(s?u:d).innerHTML+=a,d.appendChild(u),s||(d.style.background="",d.style.overflow="hidden",l=f.style.overflow,f.style.overflow="hidden",f.appendChild(d)),i=n(u,e),s?u.parentNode.removeChild(u):(d.parentNode.removeChild(d),f.style.overflow=l),!!i},P=function(){var e={select:"input",change:"input",submit:"form",reset:"form",error:"img",load:"img",abort:"img"};return function(r,a){a=a||t.createElement(e[r]||"div");var i=(r="on"+r)in a;return i||(a.setAttribute||(a=t.createElement("div")),a.setAttribute&&a.removeAttribute&&(a.setAttribute(r,""),i=o(a[r],"function"),o(a[r],"undefined")||(a[r]=n),a.removeAttribute(r))),a=null,i}}(),N={}.hasOwnProperty;for(var A in s=o(N,"undefined")||o(N.call,"undefined")?function(e,t){return t in e&&o(e.constructor.prototype[t],"undefined")}:function(e,t){return N.call(e,t)},Function.prototype.bind||(Function.prototype.bind=function(e){var t=this;if("function"!=typeof t)throw new TypeError;var n=k.call(arguments,1),r=function(){if(this instanceof r){var o=function(){};o.prototype=t.prototype;var a=new o,i=t.apply(a,n.concat(k.call(arguments)));return Object(i)===i?i:a}return t.apply(e,n.concat(k.call(arguments)))};return r}),w.flexbox=function(){return l("flexWrap")},w.flexboxlegacy=function(){return l("boxDirection")},w.canvas=function(){var e=t.createElement("canvas");return!!e.getContext&&!!e.getContext("2d")},w.canvastext=function(){return!!d.canvas&&!!o(t.createElement("canvas").getContext("2d").fillText,"function")},w.draganddrop=function(){var e=t.createElement("div");return"draggable"in e||"ondragstart"in e&&"ondrop"in e},w.rgba=function(){return r("background-color:rgba(150,255,150,.5)"),a(h.backgroundColor,"rgba")},w.multiplebgs=function(){return r("background:url(https://),url(https://),red url(https://)"),/(url\s*\(.*?){3}/.test(h.background)},w.backgroundsize=function(){return l("backgroundSize")},w.borderimage=function(){return l("borderImage")},w.borderradius=function(){return l("borderRadius")},w.boxshadow=function(){return l("boxShadow")},w.textshadow=function(){return""===t.createElement("div").style.textShadow},w.opacity=function(){return function(e,t){r(g.join(e+";")+(t||""))}("opacity:.55"),/^0.55$/.test(h.opacity)},w.cssanimations=function(){return l("animationName")},w.csscolumns=function(){return l("columnCount")},w.cssgradients=function(){var e="background-image:";return r((e+"-webkit- ".split(" ").join("gradient(linear,left top,right bottom,from(#9f9),to(white));"+e)+g.join("linear-gradient(left top,#9f9, white);"+e)).slice(0,-17)),a(h.backgroundImage,"gradient")},w.csstransitions=function(){return l("transition")},w.generatedcontent=function(){var e;return T(["#",p,"{font:0/0 a}#",p,':after{content:"',y,'";visibility:hidden;font:3px/1 a}'].join(""),(function(t){e=t.offsetHeight>=3})),e},w.video=function(){var e=t.createElement("video"),n=!1;try{(n=!!e.canPlayType)&&((n=new Boolean(n)).ogg=e.canPlayType('video/ogg; codecs="theora"').replace(/^no$/,""),n.h264=e.canPlayType('video/mp4; codecs="avc1.42E01E"').replace(/^no$/,""),n.webm=e.canPlayType('video/webm; codecs="vp8, vorbis"').replace(/^no$/,""))}catch(e){}return n},w.audio=function(){var e=t.createElement("audio"),n=!1;try{(n=!!e.canPlayType)&&((n=new Boolean(n)).ogg=e.canPlayType('audio/ogg; codecs="vorbis"').replace(/^no$/,""),n.mp3=e.canPlayType("audio/mpeg;").replace(/^no$/,""),n.wav=e.canPlayType('audio/wav; codecs="1"').replace(/^no$/,""),n.m4a=(e.canPlayType("audio/x-m4a;")||e.canPlayType("audio/aac;")).replace(/^no$/,""))}catch(e){}return n},w.localstorage=function(){try{return localStorage.setItem(p,p),localStorage.removeItem(p),!0}catch(e){return!1}},w)s(w,A)&&(u=A.toLowerCase(),d[u]=w[A](),j.push((d[u]?"":"no-")+u));return d.input||(d.input=function(n){for(var r=0,o=n.length;r<o;r++)S[n[r]]=n[r]in v;return S.list&&(S.list=!!t.createElement("datalist")&&!!e.HTMLDataListElement),S}("autocomplete autofocus list placeholder max min multiple pattern required step".split(" ")),d.inputtypes=function(e){for(var r,o,a,i=0,c=e.length;i<c;i++)v.setAttribute("type",o=e[i]),(r="text"!==v.type)&&(v.value=y,v.style.cssText="position:absolute;visibility:hidden;",/^range$/.test(o)&&v.style.WebkitAppearance!==n?(f.appendChild(v),r=(a=t.defaultView).getComputedStyle&&"textfield"!==a.getComputedStyle(v,null).WebkitAppearance&&0!==v.offsetHeight,f.removeChild(v)):/^(search|tel)$/.test(o)||(r=/^(url|email)$/.test(o)?v.checkValidity&&!1===v.checkValidity():v.value!=y)),C[e[i]]=!!r;return C}("search tel url email datetime date month week time datetime-local number range color".split(" "))),d.addTest=function(e,t){if("object"==typeof e)for(var r in e)s(e,r)&&d.addTest(r,e[r]);else{if(e=e.toLowerCase(),d[e]!==n)return d;t="function"==typeof t?t():t,f.className+=" "+(t?"":"no-")+e,d[e]=t}return d},r(""),m=v=null,function(e,t){function n(){var e=m.elements;return"string"==typeof e?e.split(" "):e}function r(e){var t=p[e[d]];return t||(t={},f++,e[d]=f,p[f]=t),t}function o(e,n,o){return n||(n=t),c?n.createElement(e):(o||(o=r(n)),(a=o.cache[e]?o.cache[e].cloneNode():s.test(e)?(o.cache[e]=o.createElem(e)).cloneNode():o.createElem(e)).canHaveChildren&&!u.test(e)?o.frag.appendChild(a):a);var a}function a(e){e||(e=t);var a=r(e);return m.shivCSS&&!i&&!a.hasCSS&&(a.hasCSS=!!function(e,t){var n=e.createElement("p"),r=e.getElementsByTagName("head")[0]||e.documentElement;return n.innerHTML="x<style>"+t+"</style>",r.insertBefore(n.lastChild,r.firstChild)}(e,"article,aside,figcaption,figure,footer,header,hgroup,nav,section{display:block}mark{background:#FF0;color:#000}")),c||function(e,t){t.cache||(t.cache={},t.createElem=e.createElement,t.createFrag=e.createDocumentFragment,t.frag=t.createFrag()),e.createElement=function(n){return m.shivMethods?o(n,e,t):t.createElem(n)},e.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+n().join().replace(/\w+/g,(function(e){return t.createElem(e),t.frag.createElement(e),'c("'+e+'")'}))+");return n}")(m,t.frag)}(e,a),e}var i,c,l=e.html5||{},u=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,s=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,d="_html5shiv",f=0,p={};!function(){try{var e=t.createElement("a");e.innerHTML="<xyz></xyz>",i="hidden"in e,c=1==e.childNodes.length||function(){t.createElement("a");var e=t.createDocumentFragment();return void 0===e.cloneNode||void 0===e.createDocumentFragment||void 0===e.createElement}()}catch(e){i=!0,c=!0}}();var m={elements:l.elements||"abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video",shivCSS:!1!==l.shivCSS,supportsUnknownElements:c,shivMethods:!1!==l.shivMethods,type:"default",shivDocument:a,createElement:o,createDocumentFragment:function(e,o){if(e||(e=t),c)return e.createDocumentFragment();for(var a=(o=o||r(e)).frag.cloneNode(),i=0,l=n(),u=l.length;i<u;i++)a.createElement(l[i]);return a}};e.html5=m,a(t)}(this,t),d._version="2.6.2",d._prefixes=g,d._domPrefixes=x,d._cssomPrefixes=E,d.hasEvent=P,d.testProp=function(e){return i([e])},d.testAllProps=l,d.testStyles=T,f.className=f.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+" js "+j.join(" "),d}(this,this.document),function(e,t,n){function r(e){return"[object Function]"==v.call(e)}function o(e){return"string"==typeof e}function a(){}function i(e){return!e||"loaded"==e||"complete"==e||"uninitialized"==e}function c(){var e=y.shift();g=1,e?e.t?m((function(){("c"==e.t?f.injectCss:f.injectJs)(e.s,0,e.a,e.x,e.e,1)}),0):(e(),c()):g=0}function l(e,n,r,o,a,l,u){function s(t){if(!p&&i(d.readyState)&&(b.r=p=1,!g&&c(),d.onload=d.onreadystatechange=null,t))for(var r in"img"!=e&&m((function(){x.removeChild(d)}),50),k[n])k[n].hasOwnProperty(r)&&k[n][r].onload()}u=u||f.errorTimeout;var d=t.createElement(e),p=0,v=0,b={t:r,s:n,e:a,a:l,x:u};1===k[n]&&(v=1,k[n]=[]),"object"==e?d.data=n:(d.src=n,d.type=e),d.width=d.height="0",d.onerror=d.onload=d.onreadystatechange=function(){s.call(this,v)},y.splice(o,0,b),"img"!=e&&(v||2===k[n]?(x.insertBefore(d,E?null:h),m(s,u)):k[n].push(d))}function u(e,t,n,r,a){return g=0,t=t||"j",o(e)?l("c"==t?C:w,e,t,this.i++,n,r,a):(y.splice(this.i++,0,e),1==y.length&&c()),this}function s(){var e=f;return e.loader={load:u,i:0},e}var d,f,p=t.documentElement,m=e.setTimeout,h=t.getElementsByTagName("script")[0],v={}.toString,y=[],g=0,b="MozAppearance"in p.style,E=b&&!!t.createRange().compareNode,x=E?p:h.parentNode,w=(p=e.opera&&"[object Opera]"==v.call(e.opera),p=!!t.attachEvent&&!p,b?"object":p?"script":"img"),C=p?"script":w,S=Array.isArray||function(e){return"[object Array]"==v.call(e)},j=[],k={},T={timeout:function(e,t){return t.length&&(e.timeout=t[0]),e}};f=function(e){function t(e,t,n,o,a){var i=function(e){e=e.split("!");var t,n,r,o=j.length,a=e.pop(),i=e.length;for(a={url:a,origUrl:a,prefixes:e},n=0;n<i;n++)r=e[n].split("="),(t=T[r.shift()])&&(a=t(a,r));for(n=0;n<o;n++)a=j[n](a);return a}(e),c=i.autoCallback;i.url.split(".").pop().split("?").shift(),i.bypass||(t&&(t=r(t)?t:t[e]||t[o]||t[e.split("/").pop().split("?")[0]]),i.instead?i.instead(e,t,n,o,a):(k[i.url]?i.noexec=!0:k[i.url]=1,n.load(i.url,i.forceCSS||!i.forceJS&&"css"==i.url.split(".").pop().split("?").shift()?"c":undefined,i.noexec,i.attrs,i.timeout),(r(t)||r(c))&&n.load((function(){s(),t&&t(i.origUrl,a,o),c&&c(i.origUrl,a,o),k[i.url]=2}))))}function n(e,n){function i(e,a){if(e){if(o(e))a||(d=function(){var e=[].slice.call(arguments);f.apply(this,e),p()}),t(e,d,n,0,u);else if(Object(e)===e)for(l in c=function(){var t,n=0;for(t in e)e.hasOwnProperty(t)&&n++;return n}(),e)e.hasOwnProperty(l)&&(!a&&! --c&&(r(d)?d=function(){var e=[].slice.call(arguments);f.apply(this,e),p()}:d[l]=function(e){return function(){var t=[].slice.call(arguments);e&&e.apply(this,t),p()}}(f[l])),t(e[l],d,n,l,u))}else!a&&p()}var c,l,u=!!e.test,s=e.load||e.both,d=e.callback||a,f=d,p=e.complete||a;i(u?e.yep:e.nope,!!s),s&&i(s)}var i,c,l=this.yepnope.loader;if(o(e))t(e,0,l,0);else if(S(e))for(i=0;i<e.length;i++)o(c=e[i])?t(c,0,l,0):S(c)?f(c):Object(c)===c&&n(c,l);else Object(e)===e&&n(e,l)},f.addPrefix=function(e,t){T[e]=t},f.addFilter=function(e){j.push(e)},f.errorTimeout=1e4,null==t.readyState&&t.addEventListener&&(t.readyState="loading",t.addEventListener("DOMContentLoaded",d=function(){t.removeEventListener("DOMContentLoaded",d,0),t.readyState="complete"},0)),e.yepnope=s(),e.yepnope.executeStack=c,e.yepnope.injectJs=function(e,n,r,o,l,u){var s,d,p=t.createElement("script");o=o||f.errorTimeout;for(d in p.src=e,r)p.setAttribute(d,r[d]);n=u?c:n||a,p.onreadystatechange=p.onload=function(){!s&&i(p.readyState)&&(s=1,n(),p.onload=p.onreadystatechange=null)},m((function(){s||(s=1,n(1))}),o),l?p.onload():h.parentNode.insertBefore(p,h)},e.yepnope.injectCss=function(e,n,r,o,i,l){var u;o=t.createElement("link"),n=l?c:n||a;for(u in o.href=e,o.rel="stylesheet",o.type="text/css",r)o.setAttribute(u,r[u]);i||(h.parentNode.insertBefore(o,h),m(n,0))}}(this,document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))};