!function(n){var i={common:{init:function(){},finalize:function(){}},home:{init:function(){},finalize:function(){}},about_us:{init:function(){}}},o={fire:function(n,o,e){var t,f=i;o=void 0===o?"init":o,t=""!==n,t=t&&f[n],(t=t&&"function"==typeof f[n][o])&&f[n][o](e)},loadEvents:function(){o.fire("common"),n.each(document.body.className.replace(/-/g,"_").split(/\s+/),function(n,i){o.fire(i),o.fire(i,"finalize")}),o.fire("common","finalize")}};n(document).ready(o.loadEvents)}(jQuery);
//# sourceMappingURL=main.js.map