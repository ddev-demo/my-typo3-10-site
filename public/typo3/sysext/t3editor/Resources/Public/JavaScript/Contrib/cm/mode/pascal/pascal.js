!function(e){"object"==typeof exports&&"object"==typeof module?e(require("../../lib/codemirror")):"function"==typeof define&&define.amd?define(["../../lib/codemirror"],e):e(CodeMirror)}((function(e){"use strict";e.defineMode("pascal",(function(){var e=function(e){for(var r={},t=e.split(" "),n=0;n<t.length;++n)r[t[n]]=!0;return r}("absolute and array asm begin case const constructor destructor div do downto else end file for function goto if implementation in inherited inline interface label mod nil not object of operator or packed procedure program record reintroduce repeat self set shl shr string then to type unit until uses var while with xor as class dispinterface except exports finalization finally initialization inline is library on out packed property raise resourcestring threadvar try absolute abstract alias assembler bitpacked break cdecl continue cppdecl cvar default deprecated dynamic enumerator experimental export external far far16 forward generic helper implements index interrupt iocheck local message name near nodefault noreturn nostackframe oldfpccall otherwise overload override pascal platform private protected public published read register reintroduce result safecall saveregisters softfloat specialize static stdcall stored strict unaligned unimplemented varargs virtual write"),r={null:!0},t=/[+\-*&%=<>!?|\/]/;function n(n,a){var o,l=n.next();if("#"==l&&a.startOfLine)return n.skipToEnd(),"meta";if('"'==l||"'"==l)return a.tokenize=(o=l,function(e,r){for(var t,n=!1,i=!1;null!=(t=e.next());){if(t==o&&!n){i=!0;break}n=!n&&"\\"==t}return!i&&n||(r.tokenize=null),"string"}),a.tokenize(n,a);if("("==l&&n.eat("*"))return a.tokenize=i,i(n,a);if(/[\[\]{}\(\),;\:\.]/.test(l))return null;if(/\d/.test(l))return n.eatWhile(/[\w\.]/),"number";if("/"==l&&n.eat("/"))return n.skipToEnd(),"comment";if(t.test(l))return n.eatWhile(t),"operator";n.eatWhile(/[\w\$_]/);var c=n.current();return e.propertyIsEnumerable(c)?"keyword":r.propertyIsEnumerable(c)?"atom":"variable"}function i(e,r){for(var t,n=!1;t=e.next();){if(")"==t&&n){r.tokenize=null;break}n="*"==t}return"comment"}return{startState:function(){return{tokenize:null}},token:function(e,r){if(e.eatSpace())return null;var t=(r.tokenize||n)(e,r);return t},electricChars:"{}"}})),e.defineMIME("text/x-pascal","pascal")}));