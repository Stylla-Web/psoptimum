!function(e){var t={};function n(i){if(t[i])return t[i].exports;var r=t[i]={i:i,l:!1,exports:{}};return e[i].call(r.exports,r,r.exports,n),r.l=!0,r.exports}n.m=e,n.c=t,n.d=function(e,t,i){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:i})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var i=Object.create(null);if(n.r(i),Object.defineProperty(i,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)n.d(i,r,function(t){return e[t]}.bind(null,r));return i},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="/",n(n.s=212)}({212:function(e,t,n){e.exports=n(251)},251:function(e,t,n){"use strict";function i(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}n.r(t);var r=function(){function e(t){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.slidePanelHtml=this.getSlidePanelHtml(t)}var t,n,r;return t=e,(n=[{key:"getSlidePanelHtml",value:function(e){e.slide.options=e.slide.options||this.getDefaultOptions();var t=_.template($("#slide-template").html());return $(t(e))}},{key:"getDefaultOptions",value:function(){return{caption_1:{},caption_2:{},direction:"left",call_to_action:{}}}},{key:"render",value:function(){return this.attachEventListeners(),this.showSelectedOptionBlock(),window.admin.dateTimePicker(this.slidePanelHtml.find(".datetime-picker")),this.slidePanelHtml}},{key:"attachEventListeners",value:function(){var e=this;this.slidePanelHtml.find(".delete-slide").on("click",(function(){e.slidePanelHtml.remove()})),this.slidePanelHtml.find(".change-option-block").on("change",(function(t){e.slidePanelHtml.find(".slide-options").hide(),e.slidePanelHtml.find(".".concat(t.currentTarget.value)).show()}))}},{key:"showSelectedOptionBlock",value:function(){var e=this;setTimeout((function(){e.slidePanelHtml.find(".change-option-block").trigger("change")}))}}])&&i(t.prototype,n),r&&i(t,r),e}();function a(e,t){var n="undefined"!=typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(!n){if(Array.isArray(e)||(n=function(e,t){if(!e)return;if("string"==typeof e)return o(e,t);var n=Object.prototype.toString.call(e).slice(8,-1);"Object"===n&&e.constructor&&(n=e.constructor.name);if("Map"===n||"Set"===n)return Array.from(e);if("Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n))return o(e,t)}(e))||t&&e&&"number"==typeof e.length){n&&(e=n);var i=0,r=function(){};return{s:r,n:function(){return i>=e.length?{done:!0}:{done:!1,value:e[i++]}},e:function(e){throw e},f:r}}throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}var a,l=!0,u=!1;return{s:function(){n=n.call(e)},n:function(){var e=n.next();return l=e.done,e},e:function(e){u=!0,a=e},f:function(){try{l||null==n.return||n.return()}finally{if(u)throw a}}}}function o(e,t){(null==t||t>e.length)&&(t=e.length);for(var n=0,i=new Array(t);n<t;n++)i[n]=e[n];return i}function l(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}new(function(){function e(){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.slideCount=0,this.addSlides(FleetCart.data["slider.slides"]),0===this.slideCount&&this.addSlide(),this.attachEventListeners(),this.makeSlidesSortable()}var t,n,i;return t=e,(n=[{key:"addSlides",value:function(e){var t,n=a(e);try{for(n.s();!(t=n.n()).done;){var i=t.value;this.addSlide(i)}}catch(e){n.e(e)}finally{n.f()}}},{key:"addSlide",value:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},t=new r({slideNumber:this.slideCount++,slide:e});$("#slides-wrapper").append(t.render())}},{key:"attachEventListeners",value:function(){var e=this;$(".add-slide").on("click",(function(){e.addSlide()})),this.attachImagePickerEventListener()}},{key:"attachImagePickerEventListener",value:function(){$("#slides-wrapper").on("click",".slide-image",(function(e){new MediaPicker({type:"image"}).on("select",(function(t){var n='\n                    <img src="'.concat(t.path,'">\n                    <input type="hidden" name="slides[').concat(e.currentTarget.dataset.slideNumber,'][file_id]" value="').concat(t.id,'">\n                ');$(e.currentTarget).html(n)}))}))}},{key:"makeSlidesSortable",value:function(){Sortable.create(document.getElementById("slides-wrapper"),{handle:".slide-drag",animation:150})}}])&&l(t.prototype,n),i&&l(t,i),e}()),$("#autoplay").on("change",(function(e){$(".autoplay-speed-field").toggleClass("hide")})),window.admin.removeSubmitButtonOffsetOn("#slides")}});
//# sourceMappingURL=slider.js.map