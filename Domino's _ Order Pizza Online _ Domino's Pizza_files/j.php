try{;(function(){var aC=window._vwo_code;if(aC){window._vwo_j_e=window._vwo_j_e||0;if(window._vwo_j_e==1){window._vwo_mt="dupCode";clearTimeout(window._vwo_settings_timer);if(window.VWO&&window.VWO._&&window.VWO._.bIE){window._vwo_code.finish()}return}if(window._vwo_j_e==-1){window._vwo_j_e=1}}window._vwo_mt="live";try{window._vwo_tm="";var getMode=function(e){var n;if(window.name.indexOf(e)>-1){n=window.name}else{n=window.location.search.match("_vwo_m=([^&]*)");n=n&&n[1]}return n&&JSON.parse(decodeURIComponent(n))};if(window.name.indexOf("_vis_heatmap")>-1||window.name.indexOf("_vis_editor")>-1||getMode("_vwo_cc")||window.name.indexOf("_vis_preview")>-1){try{if(JSON.parse(window.name)){window._vwo_mt=window.name}}catch(e){if(window._vwo_tm)window._vwo_mt=window._vwo_tm}}else if(window._vwo_tm.length){window._vwo_mt=window._vwo_tm}else if(location.href.indexOf("_vis_opt_preview_combination")!==-1&&location.href.indexOf("_vis_test_id")!==-1){window._vwo_mt="sharedPreview"}if(window._vwo_mt!=="live"){if(!getMode("_vwo_cc")){_vwo_code.load('https://dev.visualwebsiteoptimizer.com/j.php?mode=' + encodeURIComponent(window._vwo_mt) + '&a=544728&f=1&u=' + encodeURIComponent(window._vis_opt_url||document.URL));}else{(function(){window._vwo_code&&window._vwo_code.finish();_vwo_ccc={u:"/j.php?a=544728&u=https%3A%2F%2Fwww.dominos.co.nz%2F&r=0.7531675461757994"};var s=document.createElement("script");s.src="https://app.vwo.com/visitor-behavior-analysis/dist/codechecker/cc.min.js?r="+Math.random();document.head.appendChild(s)})()}}}catch(e){var b=new Image;b.src="https://dev.visualwebsiteoptimizer.com/e.gif?s=mode_det&e="+encodeURIComponent(e&&e.stack&&e.stack.substring(0,1e3));aC&&window._vwo_code.finish()}})();if(window._vwo_mt==='live'){;window.VWO = window.VWO || []; window.VWO.push(['modifyClickPauseTime', { time: 0 }]);_vwo_code.sT=_vwo_code.finished();(function(c,a,e,d,b,z){function f(a,b,d){e.cookie=a+"="+b+"; expires="+new Date(864e5*d+ +new Date).toGMTString()+"; domain="+g+"; path=/"}-1==e.cookie.indexOf("_vis_opt_out")&&-1==d.location.href.indexOf("vwo_opt_out=1")&&(a=e.cookie.replace(/(?:(?:^|.*;\s*)_vwo_uuid_v2\s*=\s*([^;]*).*$)|^.*$/,"$1")||a,a=a.split("|"),b=new Image,c=d.location.hostname.replace(/^www\./,"")||c,g = window._vis_opt_domain || c || d.location.hostname.replace(/^www\./, ""),b.src="https://dev.visualwebsiteoptimizer.com/v.gif?cd="+(window._vis_opt_cookieDays||0)+"&a=544728&d="+encodeURIComponent(c)+"&u="+a[0]+"&h="+a[1]+"&t="+z+"&r="+Math.random(),d.vwo_iehack_queue=[b],f("_vwo_uuid_v2",a.join("|"),366))})("dominos.co.nz","D409D1283D96863568DDBC81C3608A5E7|a4a3c4d682ae7715927cb6ae48014364",document,window,0,_vwo_code.sT);var _vwo_acc_id=544728;
clearTimeout(_vwo_settings_timer);_vwo_exp_ids=[],_vwo_exp={};window.VWO=window.VWO||[];
window.VWO.data={"pvn":0,"gC":[{"c":[102,125,123,115,114,113,111,110,109,108,107,104,105,103],"et":1,"id":1,"t":1},{"c":[121],"et":1,"id":2,"t":1}],"url":{},"ts":1691700417,"rp":90,"noSS":false,"pc":{"a":10.33,"t":10.33}};window.VWO.featureInfo={};_vwo_exp_ids.push('11');_vwo_exp['11']={"manual":false,"comb_n":{"1":"website"},"pc_traffic":100,"aK":1,"wl":"","exclude_url":"","ibe":1,"goals":{"1":{"type":"ENGAGEMENT","excludeUrl":"","urlRegex":"^.*$"}},"combs":{"1":1},"name":"Recording","main":true,"bl":"","ep":1639638948000,"clickmap":0,"sections":{"1":{"path":"","variations":{"1":""}}},"ss":null,"status":"RUNNING","version":2,"segment_code":"true","type":"ANALYZE_RECORDING","multiple_domains":0,"globalCode":[],"urlRegex":"^.*$"};var vwoCode = window._vwo_code; if(vwoCode.filterConfig && vwoCode.filterConfig.filterTime==='balanced'){ vwoCode.removeLoaderAndOverlay && vwoCode.removeLoaderAndOverlay() };var _vwo_style=document.getElementById('_vis_opt_path_hides'),_vwo_css = window._vwo_el_style || ((vwoCode.hide_element_style ? vwoCode.hide_element_style() : '{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}') + ':root {--vwo-el-opacity:0 !important;--vwo-el-filter:alpha(opacity=0) !important;--vwo-el-bg:none !important;}');
if(_vwo_style){_vwo_style.parentNode.removeChild(_vwo_style);window.VWO.dNR = true;}var commonWrapper=function(argument){if(!argument){argument={valuesGetter:function(){return{}},valuesSetter:function(){},verifyData:function(){return{}}}}var pollInterval=100;var timeout=5e3;return function(){var accountIntegrationSettings={};var _interval=null;function waitForAnalyticsVariables(){try{accountIntegrationSettings=argument.valuesGetter()}catch(error){accountIntegrationSettings=undefined}if(accountIntegrationSettings&&argument.verifyData(accountIntegrationSettings)){argument.valuesSetter(accountIntegrationSettings);return 1}return 0}var currentTime=0;_interval=setInterval((function(){currentTime=currentTime||performance.now();var result=waitForAnalyticsVariables();if(result||performance.now()-currentTime>=timeout){clearInterval(_interval)}}),pollInterval)}};
        var pushBasedCommonWrapper=function(argument){if(!argument){arguments={getExperimentList:function(){},pushData:function(){}}}return function(){window.VWO=window.VWO||[];window.VWO.push(["onVariationApplied",function(data){if(!data)return;var expId=data[1],variationId=data[2];var experimentList=argument.getExperimentList();if(expId&&variationId&&["VISUAL_AB","VISUAL","SPLIT_URL"].indexOf(_vwo_exp[expId].type)>-1){if(experimentList.indexOf(+expId)!==-1){var pollInterval=100;var currentTime=0;var timeout=5e3;var interval=setInterval((function(){currentTime=currentTime||performance.now();var toClearInterval=argument.pushData(expId,variationId);if(toClearInterval||performance.now()-currentTime>=timeout){clearInterval(interval)}}),pollInterval||100)}}}])}};
        (function(){var VWOOmniTemp={};window.VWOOmni=window.VWOOmni||{};for(var key in VWOOmniTemp)Object.prototype.hasOwnProperty.call(VWOOmniTemp,key)&&(window.VWOOmni[key]=VWOOmniTemp[key]);;})();(function(){window.VWO=window.VWO||[];var pollInterval=100;var _vis_data={};var intervalObj={};var analyticsTimerObj={};var experimentListObj={};window.VWO.push(["onVariationApplied",function(data){if(!data){return}var expId=data[1],variationId=data[2];if(expId&&variationId&&["VISUAL_AB","VISUAL","SPLIT_URL"].indexOf(window._vwo_exp[expId].type)>-1){}}])})();window.VWO.data.vi = window.VWO.data.vi || {"dt":"desktop","br":"Chrome","de":"Other","os":"Windows"};
window.VWO.push(['enableSPA']);
VWO.load_co=function(a){var b=document.createElement('script');b.src=a;b.crossOrigin='anonymous';b.fetchPriority='high';b.type='text/javascript';b.innerText;b.onerror=function(){_vwo_code.finish();};document.getElementsByTagName('head')[0].appendChild(b);}
var _vwo_cookieDomain = 'dominos.co.nz', _vwo_uuid = 'D409D1283D96863568DDBC81C3608A5E7';_vwo_worker_cb='70faafffa0475802f5ee03ca5ff74179';window._vwo_pa = window._vwo_pa || {};window._vwo_pa.sId = 'DB2E3FCD6FD1A2B2';window.VWO.data.as = "r2.visualwebsiteoptimizer.com";var _vwo_library_timer = setTimeout(function () { var vwoCode = window._vwo_code; vwoCode.removeLoaderAndOverlay && vwoCode.removeLoaderAndOverlay(); vwoCode.finish()},_vwo_code.library_tolerance());var _vis_opt_file = 'web/djIkdGU6Ny4wOmFzeW5jJWdxdWVyeQ==/tag-92e8a779535c9de4bbc7eb349ddbd6fc.js',_vis_opt_lib = (typeof _vis_opt_lib=='undefined')?'https://dev.visualwebsiteoptimizer.com/'+_vis_opt_file:_vis_opt_lib;VWO.load_co(_vis_opt_lib);(function() {
VWO._=VWO._||{};
var ctId=+new Date(),dtc=VWO._.dtc={ctId:ctId,js:{},tag:['https://dev.visualwebsiteoptimizer.com/web/djIkYTo0LjA6bm9qcXVlcnksdHI6Ny4w/tag-48454680416286f4712ab13e0347d906.js']};
dtc.js[ctId]=function(){var cb=function(){setTimeout(function(){for(var i=0; i<VWO._.dtc.tag.length;i++){VWO._.coreLib.lS(VWO._.dtc.tag[i])}}, 1000 )};if(document.readyState=='complete')cb();else window.addEventListener('load', cb)};
dtc.sC=function(){ return _vwo_s().f_e(_vwo_s().dt(),'mobile') };;}
)();VWO._.dtc.tC= function(){ return _vwo_t.cm('eO','js',VWO._.dtc.ctId); };;window.VWO=window.VWO||[];window.VWO._=window.VWO._||{};VWO._.ac=VWO._.ac||{};; 
window.VWO = window.VWO || [];
window.VWO.data = window.VWO.data || {};
VWO.data.content={"fns":{"list":{"args":{"1":{}},"vn":1}}};;window.VWO = window.VWO||[];window.VWO._=window.VWO._||{};VWO._.ac=VWO._.ac||{};VWO._.ac.dNdOfst=1000;}}catch(e){_vwo_code.finish(); _vwo_code.removeLoaderAndOverlay && _vwo_code.removeLoaderAndOverlay(); var vwo_e=new Image;vwo_e.src="https://dev.visualwebsiteoptimizer.com/e.gif?a=544728&s=j.php&e="+encodeURIComponent(e && e.message && e.message.substring(0,1000))+"&url"+encodeURIComponent(window.location.href)}