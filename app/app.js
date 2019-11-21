"use strict";function animacoes(){document.querySelectorAll("[data-animar]").forEach(function(n){if(n.getBoundingClientRect().top<window.innerHeight)return n.classList.add("animar");window.addEventListener("scroll",function(e){var o=.85*window.innerHeight;n.getBoundingClientRect().top<o&&n.classList.add("animar")})});var n=document.querySelectorAll("[data-anima-tempo]");window.setTimeout(function(){n.forEach(function(n){n.classList.add("animar")})},500)}function _typeof(n){return(_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(n){return typeof n}:function(n){return n&&"function"==typeof Symbol&&n.constructor===Symbol&&n!==Symbol.prototype?"symbol":typeof n})(n)}animacoes(),function(n,e,o){function t(n,e){return _typeof(n)===e}function A(n){var e=u.className,o=l._config.classPrefix||"";if(c&&(e=e.baseVal),l._config.enableJSClass){var t=new RegExp("(^|\\s)"+o+"no-js(\\s|$)");e=e.replace(t,"$1"+o+"js$2")}l._config.enableClasses&&(e+=" "+o+n.join(" "+o),c?u.className.baseVal=e:u.className=e)}function a(n,e){if("object"==_typeof(n))for(var o in n)f(n,o)&&a(o,n[o]);else{var t=(n=n.toLowerCase()).split("."),i=l[t[0]];if(2==t.length&&(i=i[t[1]]),void 0!==i)return l;e="function"==typeof e?e():e,1==t.length?l[t[0]]=e:(!l[t[0]]||l[t[0]]instanceof Boolean||(l[t[0]]=new Boolean(l[t[0]])),l[t[0]][t[1]]=e),A([(e&&0!=e?"":"no-")+t.join("-")]),l._trigger(n,e)}return l}var i=[],s=[],r={_version:"3.6.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(n,e){var o=this;setTimeout(function(){e(o[n])},0)},addTest:function(n,e,o){s.push({name:n,fn:e,options:o})},addAsyncTest:function(n){s.push({name:null,fn:n})}},l=function(){};l.prototype=r,l=new l;var f,u=e.documentElement,c="svg"===u.nodeName.toLowerCase();!function(){var n={}.hasOwnProperty;f=t(n,"undefined")||t(n.call,"undefined")?function(n,e){return e in n&&t(n.constructor.prototype[e],"undefined")}:function(e,o){return n.call(e,o)}}(),r._l={},r.on=function(n,e){this._l[n]||(this._l[n]=[]),this._l[n].push(e),l.hasOwnProperty(n)&&setTimeout(function(){l._trigger(n,l[n])},0)},r._trigger=function(n,e){if(this._l[n]){var o=this._l[n];setTimeout(function(){var n;for(n=0;n<o.length;n++)(0,o[n])(e)},0),delete this._l[n]}},l._q.push(function(){r.addTest=a}),l.addAsyncTest(function(){function n(n,e,o){function t(e){var t=!(!e||"load"!==e.type)&&1==A.width;a(n,"webp"===n&&t?new Boolean(t):t),o&&o(e)}var A=new Image;A.onerror=t,A.onload=t,A.src=e}var e=[{uri:"data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAwA0JaQAA3AA/vuUAAA=",name:"webp"},{uri:"data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==",name:"webp.alpha"},{uri:"data:image/webp;base64,UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA",name:"webp.animation"},{uri:"data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=",name:"webp.lossless"}],o=e.shift();n(o.name,o.uri,function(o){if(o&&"load"===o.type)for(var t=0;t<e.length;t++)n(e[t].name,e[t].uri)})}),function(){var n,e,o,A,a,r;for(var f in s)if(s.hasOwnProperty(f)){if(n=[],(e=s[f]).name&&(n.push(e.name.toLowerCase()),e.options&&e.options.aliases&&e.options.aliases.length))for(o=0;o<e.options.aliases.length;o++)n.push(e.options.aliases[o].toLowerCase());for(A=t(e.fn,"function")?e.fn():e.fn,a=0;a<n.length;a++)1===(r=n[a].split(".")).length?l[r[0]]=A:(!l[r[0]]||l[r[0]]instanceof Boolean||(l[r[0]]=new Boolean(l[r[0]])),l[r[0]][r[1]]=A),i.push((A?"":"no-")+r.join("-"))}}(),A(i),delete r.addTest,delete r.addAsyncTest;for(var d=0;d<l._q.length;d++)l._q[d]();n.Modernizr=l}(window,document);