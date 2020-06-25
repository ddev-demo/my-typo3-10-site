/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
define(["require","exports","jquery","../AbstractInteractableModule","TYPO3/CMS/Backend/ModuleMenu","TYPO3/CMS/Backend/Notification","TYPO3/CMS/Core/Ajax/AjaxRequest","../../Router","bootstrap","../../Renderable/Clearable"],(function(t,e,a,s,n,r,o,i){"use strict";class d extends s.AbstractInteractableModule{constructor(){super(...arguments),this.selectorFormListener=".t3js-extensionConfiguration-form",this.selectorSearchInput=".t3js-extensionConfiguration-search"}initialize(t){this.currentModal=t,this.getContent(),t.on("keydown",e=>{const a=t.find(this.selectorSearchInput);e.ctrlKey||e.metaKey?"f"===String.fromCharCode(e.which).toLowerCase()&&(e.preventDefault(),a.focus()):27===e.keyCode&&(e.preventDefault(),a.val("").focus())}),t.on("keyup",this.selectorSearchInput,e=>{const s=a(e.target).val(),n=t.find(this.selectorSearchInput);t.find(".search-item").each((t,e)=>{const n=a(e);a(":contains("+s+")",n).length>0||a('input[value*="'+s+'"]',n).length>0?n.removeClass("hidden").addClass("searchhit"):n.removeClass("searchhit").addClass("hidden")}),t.find(".searchhit").collapse("show");const r=n.get(0);r.clearable(),r.focus()}),t.on("submit",this.selectorFormListener,t=>{t.preventDefault(),this.write(a(t.currentTarget))})}getContent(){const t=this.getModalBody();new o(i.getUrl("extensionConfigurationGetContent")).get({cache:"no-cache"}).then(async e=>{const a=await e.resolve();!0===a.success&&(t.html(a.html),this.initializeWrap())},e=>{i.handleAjaxError(e,t)})}write(t){const e=this.getModalBody(),s=this.getModuleContent().data("extension-configuration-write-token"),d={};a.each(t.serializeArray(),(t,e)=>{d[e.name]=e.value}),new o(i.getUrl()).post({install:{token:s,action:"extensionConfigurationWrite",extensionKey:t.attr("data-extensionKey"),extensionConfiguration:d}}).then(async t=>{const e=await t.resolve();!0===e.success&&Array.isArray(e.status)?(e.status.forEach(t=>{r.showMessage(t.title,t.message,t.severity)}),"backend"===a("body").data("context")&&n.App.refreshMenu()):r.error("Something went wrong","The request was not processed successfully. Please check the browser's console and TYPO3's log.")},t=>{i.handleAjaxError(t,e)})}initializeWrap(){this.findInModal(".t3js-emconf-offset").each((t,e)=>{const s=a(e),n=s.parent(),r=s.attr("id"),o=s.attr("value").split(",");s.attr("data-offsetfield-x","#"+r+"_offset_x").attr("data-offsetfield-y","#"+r+"_offset_y").wrap('<div class="hidden"></div>');const i=a("<div>",{class:"form-multigroup-item"}).append(a("<div>",{class:"input-group"}).append(a("<div>",{class:"input-group-addon"}).text("x"),a("<input>",{id:r+"_offset_x",class:"form-control t3js-emconf-offsetfield","data-target":"#"+r,value:a.trim(o[0])}))),d=a("<div>",{class:"form-multigroup-item"}).append(a("<div>",{class:"input-group"}).append(a("<div>",{class:"input-group-addon"}).text("y"),a("<input>",{id:r+"_offset_y",class:"form-control t3js-emconf-offsetfield","data-target":"#"+r,value:a.trim(o[1])}))),l=a("<div>",{class:"form-multigroup-wrap"}).append(i,d);n.append(l),n.find(".t3js-emconf-offsetfield").keyup(t=>{const e=n.find(a(t.currentTarget).data("target"));e.val(n.find(e.data("offsetfield-x")).val()+","+n.find(e.data("offsetfield-y")).val())})}),this.findInModal(".t3js-emconf-wrap").each((t,e)=>{const s=a(e),n=s.parent(),r=s.attr("id"),o=s.attr("value").split("|");s.attr("data-wrapfield-start","#"+r+"_wrap_start").attr("data-wrapfield-end","#"+r+"_wrap_end").wrap('<div class="hidden"></div>');const i=a("<div>",{class:"form-multigroup-wrap"}).append(a("<div>",{class:"form-multigroup-item"}).append(a("<input>",{id:r+"_wrap_start",class:"form-control t3js-emconf-wrapfield","data-target":"#"+r,value:a.trim(o[0])})),a("<div>",{class:"form-multigroup-item"}).append(a("<input>",{id:r+"_wrap_end",class:"form-control t3js-emconf-wrapfield","data-target":"#"+r,value:a.trim(o[1])})));n.append(i),n.find(".t3js-emconf-wrapfield").keyup(t=>{const e=n.find(a(t.currentTarget).data("target"));e.val(n.find(e.data("wrapfield-start")).val()+"|"+n.find(e.data("wrapfield-end")).val())})})}}return new d}));