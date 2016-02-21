<?php
  error_reporting(0);
  header ("content-type: text/javascript; charset: UTF-8");
?>
(function (a, b) {
     function cy(a) {
         return f.isWindow(a) ? a : a.nodeType === 9 ? a.defaultView || a.parentWindow : !1
     }

     function cv(a) {
         if (!ck[a]) {
             var b = c.body,
                 d = f("<" + a + ">").appendTo(b),
                 e = d.css("display");
             d.remove();
             if (e === "none" || e === "") {
                 cl || (cl = c.createElement("iframe"), cl.frameBorder = cl.width = cl.height = 0), b.appendChild(cl);
                 if (!cm || !cl.createElement) cm = (cl.contentWindow || cl.contentDocument).document, cm.write((c.compatMode === "CSS1Compat" ? "<!doctype html>" : "") + "<html><body>"), cm.close();
                 d = cm.createElement(a), cm.body.appendChild(d), e = f.css(d, "display"), b.removeChild(cl)
             }
             ck[a] = e
         }
         return ck[a]
     }

     function cu(a, b) {
         var c = {};
         f.each(cq.concat.apply([], cq.slice(0, b)), function () {
             c[this] = a
         });
         return c
     }

     function ct() {
         cr = b
     }

     function cs() {
         setTimeout(ct, 0);
         return cr = f.now()
     }

     function cj() {
         try {
             return new a.ActiveXObject("Microsoft.XMLHTTP")
         } catch (b) {}
     }

     function ci() {
         try {
             return new a.XMLHttpRequest
         } catch (b) {}
     }

     function cc(a, c) {
         a.dataFilter && (c = a.dataFilter(c, a.dataType));
         var d = a.dataTypes,
             e = {},
             g, h, i = d.length,
             j, k = d[0],
             l, m, n, o, p;
         for (g = 1; g < i; g++) {
             if (g === 1)
                 for (h in a.converters) typeof h == "string" && (e[h.toLowerCase()] = a.converters[h]);
             l = k, k = d[g];
             if (k === "*") k = l;
             else if (l !== "*" && l !== k) {
                 m = l + " " + k, n = e[m] || e["* " + k];
                 if (!n) {
                     p = b;
                     for (o in e) {
                         j = o.split(" ");
                         if (j[0] === l || j[0] === "*") {
                             p = e[j[1] + " " + k];
                             if (p) {
                                 o = e[o], o === !0 ? n = p : p === !0 && (n = o);
                                 break
                             }
                         }
                     }
                 }!n && !p && f.error("No conversion from " + m.replace(" ", " to ")), n !== !0 && (c = n ? n(c) : p(o(c)))
             }
         }
         return c
     }

     function cb(a, c, d) {
         var e = a.contents,
             f = a.dataTypes,
             g = a.responseFields,
             h, i, j, k;
         for (i in g) i in d && (c[g[i]] = d[i]);
         while (f[0] === "*") f.shift(), h === b && (h = a.mimeType || c.getResponseHeader("content-type"));
         if (h)
             for (i in e)
                 if (e[i] && e[i].test(h)) {
                     f.unshift(i);
                     break
                 }
         if (f[0] in d) j = f[0];
         else {
             for (i in d) {
                 if (!f[0] || a.converters[i + " " + f[0]]) {
                     j = i;
                     break
                 }
                 k || (k = i)
             }
             j = j || k
         }
         if (j) {
             j !== f[0] && f.unshift(j);
             return d[j]
         }
     }

     function ca(a, b, c, d) {
         if (f.isArray(b)) f.each(b, function (b, e) {
             c || bE.test(a) ? d(a, e) : ca(a + "[" + (typeof e == "object" || f.isArray(e) ? b : "") + "]", e, c, d)
         });
         else if (!c && b != null && typeof b == "object")
             for (var e in b) ca(a + "[" + e + "]", b[e], c, d);
         else d(a, b)
     }

     function b_(a, c) {
         var d, e, g = f.ajaxSettings.flatOptions || {};
         for (d in c) c[d] !== b && ((g[d] ? a : e || (e = {}))[d] = c[d]);
         e && f.extend(!0, a, e)
     }

     function b$(a, c, d, e, f, g) {
         f = f || c.dataTypes[0], g = g || {}, g[f] = !0;
         var h = a[f],
             i = 0,
             j = h ? h.length : 0,
             k = a === bT,
             l;
         for (; i < j && (k || !l); i++) l = h[i](c, d, e), typeof l == "string" && (!k || g[l] ? l = b : (c.dataTypes.unshift(l), l = b$(a, c, d, e, l, g)));
         (k || !l) && !g["*"] && (l = b$(a, c, d, e, "*", g));
         return l
     }

     function bZ(a) {
         return function (b, c) {
             typeof b != "string" && (c = b, b = "*");
             if (f.isFunction(c)) {
                 var d = b.toLowerCase().split(bP),
                     e = 0,
                     g = d.length,
                     h, i, j;
                 for (; e < g; e++) h = d[e], j = /^\+/.test(h), j && (h = h.substr(1) || "*"), i = a[h] = a[h] || [], i[j ? "unshift" : "push"](c)
             }
         }
     }

     function bC(a, b, c) {
         var d = b === "width" ? a.offsetWidth : a.offsetHeight,
             e = b === "width" ? bx : by,
             g = 0,
             h = e.length;
         if (d > 0) {
             if (c !== "border")
                 for (; g < h; g++) c || (d -= parseFloat(f.css(a, "padding" + e[g])) || 0), c === "margin" ? d += parseFloat(f.css(a, c + e[g])) || 0 : d -= parseFloat(f.css(a, "border" + e[g] + "Width")) || 0;
             return d + "px"
         }
         d = bz(a, b, b);
         if (d < 0 || d == null) d = a.style[b] || 0;
         d = parseFloat(d) || 0;
         if (c)
             for (; g < h; g++) d += parseFloat(f.css(a, "padding" + e[g])) || 0, c !== "padding" && (d += parseFloat(f.css(a, "border" + e[g] + "Width")) || 0), c === "margin" && (d += parseFloat(f.css(a, c + e[g])) || 0);
         return d + "px"
     }

     function bp(a, b) {
         b.src ? f.ajax({
             url: b.src,
             async: !1,
             dataType: "script"
         }) : f.globalEval((b.text || b.textContent || b.innerHTML || "").replace(bf, "/*$0*/")), b.parentNode && b.parentNode.removeChild(b)
     }

     function bo(a) {
         var b = c.createElement("div");
         bh.appendChild(b), b.innerHTML = a.outerHTML;
         return b.firstChild
     }

     function bn(a) {
         var b = (a.nodeName || "").toLowerCase();
         b === "input" ? bm(a) : b !== "script" && typeof a.getElementsByTagName != "undefined" && f.grep(a.getElementsByTagName("input"), bm)
     }

     function bm(a) {
         if (a.type === "checkbox" || a.type === "radio") a.defaultChecked = a.checked
     }

     function bl(a) {
         return typeof a.getElementsByTagName != "undefined" ? a.getElementsByTagName("*") : typeof a.querySelectorAll != "undefined" ? a.querySelectorAll("*") : []
     }

     function bk(a, b) {
         var c;
         if (b.nodeType === 1) {
             b.clearAttributes && b.clearAttributes(), b.mergeAttributes && b.mergeAttributes(a), c = b.nodeName.toLowerCase();
             if (c === "object") b.outerHTML = a.outerHTML;
             else if (c !== "input" || a.type !== "checkbox" && a.type !== "radio") {
                 if (c === "option") b.selected = a.defaultSelected;
                 else if (c === "input" || c === "textarea") b.defaultValue = a.defaultValue
             } else a.checked && (b.defaultChecked = b.checked = a.checked), b.value !== a.value && (b.value = a.value);
             b.removeAttribute(f.expando)
         }
     }

     function bj(a, b) {
         if (b.nodeType === 1 && !!f.hasData(a)) {
             var c, d, e, g = f._data(a),
                 h = f._data(b, g),
                 i = g.events;
             if (i) {
                 delete h.handle, h.events = {};
                 for (c in i)
                     for (d = 0, e = i[c].length; d < e; d++) f.event.add(b, c + (i[c][d].namespace ? "." : "") + i[c][d].namespace, i[c][d], i[c][d].data)
             }
             h.data && (h.data = f.extend({}, h.data))
         }
     }

     function bi(a, b) {
         return f.nodeName(a, "table") ? a.getElementsByTagName("tbody")[0] || a.appendChild(a.ownerDocument.createElement("tbody")) : a
     }

     function U(a) {
         var b = V.split("|"),
             c = a.createDocumentFragment();
         if (c.createElement)
             while (b.length) c.createElement(b.pop());
         return c
     }

     function T(a, b, c) {
         b = b || 0;
         if (f.isFunction(b)) return f.grep(a, function (a, d) {
             var e = !!b.call(a, d, a);
             return e === c
         });
         if (b.nodeType) return f.grep(a, function (a, d) {
             return a === b === c
         });
         if (typeof b == "string") {
             var d = f.grep(a, function (a) {
                 return a.nodeType === 1
             });
             if (O.test(b)) return f.filter(b, d, !c);
             b = f.filter(b, d)
         }
         return f.grep(a, function (a, d) {
             return f.inArray(a, b) >= 0 === c
         })
     }

     function S(a) {
         return !a || !a.parentNode || a.parentNode.nodeType === 11
     }

     function K() {
         return !0
     }

     function J() {
         return !1
     }

     function n(a, b, c) {
         var d = b + "defer",
             e = b + "queue",
             g = b + "mark",
             h = f._data(a, d);
         h && (c === "queue" || !f._data(a, e)) && (c === "mark" || !f._data(a, g)) && setTimeout(function () {
             !f._data(a, e) && !f._data(a, g) && (f.removeData(a, d, !0), h.fire())
         }, 0)
     }

     function m(a) {
         for (var b in a) {
             if (b === "data" && f.isEmptyObject(a[b])) continue;
             if (b !== "toJSON") return !1
         }
         return !0
     }

     function l(a, c, d) {
         if (d === b && a.nodeType === 1) {
             var e = "data-" + c.replace(k, "-$1").toLowerCase();
             d = a.getAttribute(e);
             if (typeof d == "string") {
                 try {
                     d = d === "true" ? !0 : d === "false" ? !1 : d === "null" ? null : f.isNumeric(d) ? parseFloat(d) : j.test(d) ? f.parseJSON(d) : d
                 } catch (g) {}
                 f.data(a, c, d)
             } else d = b
         }
         return d
     }

     function h(a) {
         var b = g[a] = {},
             c, d;
         a = a.split(/\s+/);
         for (c = 0, d = a.length; c < d; c++) b[a[c]] = !0;
         return b
     }
     var c = a.document,
         d = a.navigator,
         e = a.location,
         f = function () {
             function J() {
                 if (!e.isReady) {
                     try {
                         c.documentElement.doScroll("left")
                     } catch (a) {
                         setTimeout(J, 1);
                         return
                     }
                     e.ready()
                 }
             }
             var e = function (a, b) {
                     return new e.fn.init(a, b, h)
                 },
                 f = a.jQuery,
                 g = a.$,
                 h, i = /^(?:[^#<]*(<[\w\W]+>)[^>]*$|#([\w\-]*)$)/,
                 j = /\S/,
                 k = /^\s+/,
                 l = /\s+$/,
                 m = /^<(\w+)\s*\/?>(?:<\/\1>)?$/,
                 n = /^[\],:{}\s]*$/,
                 o = /\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g,
                 p = /"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,
                 q = /(?:^|:|,)(?:\s*\[)+/g,
                 r = /(webkit)[ \/]([\w.]+)/,
                 s = /(opera)(?:.*version)?[ \/]([\w.]+)/,
                 t = /(msie) ([\w.]+)/,
                 u = /(mozilla)(?:.*? rv:([\w.]+))?/,
                 v = /-([a-z]|[0-9])/ig,
                 w = /^-ms-/,
                 x = function (a, b) {
                     return (b + "").toUpperCase()
                 },
                 y = d.userAgent,
                 z, A, B, C = Object.prototype.toString,
                 D = Object.prototype.hasOwnProperty,
                 E = Array.prototype.push,
                 F = Array.prototype.slice,
                 G = String.prototype.trim,
                 H = Array.prototype.indexOf,
                 I = {};
             e.fn = e.prototype = {
                 constructor: e,
                 init: function (a, d, f) {
                     var g, h, j, k;
                     if (!a) return this;
                     if (a.nodeType) {
                         this.context = this[0] = a, this.length = 1;
                         return this
                     }
                     if (a === "body" && !d && c.body) {
                         this.context = c, this[0] = c.body, this.selector = a, this.length = 1;
                         return this
                     }
                     if (typeof a == "string") {
                         a.charAt(0) !== "<" || a.charAt(a.length - 1) !== ">" || a.length < 3 ? g = i.exec(a) : g = [null, a, null];
                         if (g && (g[1] || !d)) {
                             if (g[1]) {
                                 d = d instanceof e ? d[0] : d, k = d ? d.ownerDocument || d : c, j = m.exec(a), j ? e.isPlainObject(d) ? (a = [c.createElement(j[1])], e.fn.attr.call(a, d, !0)) : a = [k.createElement(j[1])] : (j = e.buildFragment([g[1]], [k]), a = (j.cacheable ? e.clone(j.fragment) : j.fragment).childNodes);
                                 return e.merge(this, a)
                             }
                             h = c.getElementById(g[2]);
                             if (h && h.parentNode) {
                                 if (h.id !== g[2]) return f.find(a);
                                 this.length = 1, this[0] = h
                             }
                             this.context = c, this.selector = a;
                             return this
                         }
                         return !d || d.jquery ? (d || f).find(a) : this.constructor(d).find(a)
                     }
                     if (e.isFunction(a)) return f.ready(a);
                     a.selector !== b && (this.selector = a.selector, this.context = a.context);
                     return e.makeArray(a, this)
                 },
                 selector: "",
                 jquery: "1.7.1",
                 length: 0,
                 size: function () {
                     return this.length
                 },
                 toArray: function () {
                     return F.call(this, 0)
                 },
                 get: function (a) {
                     return a == null ? this.toArray() : a < 0 ? this[this.length + a] : this[a]
                 },
                 pushStack: function (a, b, c) {
                     var d = this.constructor();
                     e.isArray(a) ? E.apply(d, a) : e.merge(d, a), d.prevObject = this, d.context = this.context, b === "find" ? d.selector = this.selector + (this.selector ? " " : "") + c : b && (d.selector = this.selector + "." + b + "(" + c + ")");
                     return d
                 },
                 each: function (a, b) {
                     return e.each(this, a, b)
                 },
                 ready: function (a) {
                     e.bindReady(), A.add(a);
                     return this
                 },
                 eq: function (a) {
                     a = +a;
                     return a === -1 ? this.slice(a) : this.slice(a, a + 1)
                 },
                 first: function () {
                     return this.eq(0)
                 },
                 last: function () {
                     return this.eq(-1)
                 },
                 slice: function () {
                     return this.pushStack(F.apply(this, arguments), "slice", F.call(arguments).join(","))
                 },
                 map: function (a) {
                     return this.pushStack(e.map(this, function (b, c) {
                         return a.call(b, c, b)
                     }))
                 },
                 end: function () {
                     return this.prevObject || this.constructor(null)
                 },
                 push: E,
                 sort: [].sort,
                 splice: [].splice
             }, e.fn.init.prototype = e.fn, e.extend = e.fn.extend = function () {
                 var a, c, d, f, g, h, i = arguments[0] || {},
                     j = 1,
                     k = arguments.length,
                     l = !1;
                 typeof i == "boolean" && (l = i, i = arguments[1] || {}, j = 2), typeof i != "object" && !e.isFunction(i) && (i = {}), k === j && (i = this, --j);
                 for (; j < k; j++)
                     if ((a = arguments[j]) != null)
                         for (c in a) {
                             d = i[c], f = a[c];
                             if (i === f) continue;
                             l && f && (e.isPlainObject(f) || (g = e.isArray(f))) ? (g ? (g = !1, h = d && e.isArray(d) ? d : []) : h = d && e.isPlainObject(d) ? d : {}, i[c] = e.extend(l, h, f)) : f !== b && (i[c] = f)
                         }
                     return i
             }, e.extend({
                 noConflict: function (b) {
                     a.$ === e && (a.$ = g), b && a.jQuery === e && (a.jQuery = f);
                     return e
                 },
                 isReady: !1,
                 readyWait: 1,
                 holdReady: function (a) {
                     a ? e.readyWait++ : e.ready(!0)
                 },
                 ready: function (a) {
                     if (a === !0 && !--e.readyWait || a !== !0 && !e.isReady) {
                         if (!c.body) return setTimeout(e.ready, 1);
                         e.isReady = !0;
                         if (a !== !0 && --e.readyWait > 0) return;
                         A.fireWith(c, [e]), e.fn.trigger && e(c).trigger("ready").off("ready")
                     }
                 },
                 bindReady: function () {
                     if (!A) {
                         A = e.Callbacks("once memory");
                         if (c.readyState === "complete") return setTimeout(e.ready, 1);
                         if (c.addEventListener) c.addEventListener("DOMContentLoaded", B, !1), a.addEventListener("load", e.ready, !1);
                         else if (c.attachEvent) {
                             c.attachEvent("onreadystatechange", B), a.attachEvent("onload", e.ready);
                             var b = !1;
                             try {
                                 b = a.frameElement == null
                             } catch (d) {}
                             c.documentElement.doScroll && b && J()
                         }
                     }
                 },
                 isFunction: function (a) {
                     return e.type(a) === "function"
                 },
                 isArray: Array.isArray || function (a) {
                     return e.type(a) === "array"
                 },
                 isWindow: function (a) {
                     return a && typeof a == "object" && "setInterval" in a
                 },
                 isNumeric: function (a) {
                     return !isNaN(parseFloat(a)) && isFinite(a)
                 },
                 type: function (a) {
                     return a == null ? String(a) : I[C.call(a)] || "object"
                 },
                 isPlainObject: function (a) {
                     if (!a || e.type(a) !== "object" || a.nodeType || e.isWindow(a)) return !1;
                     try {
                         if (a.constructor && !D.call(a, "constructor") && !D.call(a.constructor.prototype, "isPrototypeOf")) return !1
                     } catch (c) {
                         return !1
                     }
                     var d;
                     for (d in a);
                     return d === b || D.call(a, d)
                 },
                 isEmptyObject: function (a) {
                     for (var b in a) return !1;
                     return !0
                 },
                 error: function (a) {
                     throw new Error(a)
                 },
                 parseJSON: function (b) {
                     if (typeof b != "string" || !b) return null;
                     b = e.trim(b);
                     if (a.JSON && a.JSON.parse) return a.JSON.parse(b);
                     if (n.test(b.replace(o, "@").replace(p, "]").replace(q, ""))) return (new Function("return " + b))();
                     e.error("Invalid JSON: " + b)
                 },
                 parseXML: function (c) {
                     var d, f;
                     try {
                         a.DOMParser ? (f = new DOMParser, d = f.parseFromString(c, "text/xml")) : (d = new ActiveXObject("Microsoft.XMLDOM"), d.async = "false", d.loadXML(c))
                     } catch (g) {
                         d = b
                     }(!d || !d.documentElement || d.getElementsByTagName("parsererror").length) && e.error("Invalid XML: " + c);
                     return d
                 },
                 noop: function () {},
                 globalEval: function (b) {
                     b && j.test(b) && (a.execScript || function (b) {
                         a.eval.call(a, b)
                     })(b)
                 },
                 camelCase: function (a) {
                     return a.replace(w, "ms-").replace(v, x)
                 },
                 nodeName: function (a, b) {
                     return a.nodeName && a.nodeName.toUpperCase() === b.toUpperCase()
                 },
                 each: function (a, c, d) {
                     var f, g = 0,
                         h = a.length,
                         i = h === b || e.isFunction(a);
                     if (d) {
                         if (i) {
                             for (f in a)
                                 if (c.apply(a[f], d) === !1) break
                         } else
                             for (; g < h;)
                                 if (c.apply(a[g++], d) === !1) break
                     } else if (i) {
                         for (f in a)
                             if (c.call(a[f], f, a[f]) === !1) break
                     } else
                         for (; g < h;)
                             if (c.call(a[g], g, a[g++]) === !1) break; return a
                 },
                 trim: G ? function (a) {
                     return a == null ? "" : G.call(a)
                 } : function (a) {
                     return a == null ? "" : (a + "").replace(k, "").replace(l, "")
                 },
                 makeArray: function (a, b) {
                     var c = b || [];
                     if (a != null) {
                         var d = e.type(a);
                         a.length == null || d === "string" || d === "function" || d === "regexp" || e.isWindow(a) ? E.call(c, a) : e.merge(c, a)
                     }
                     return c
                 },
                 inArray: function (a, b, c) {
                     var d;
                     if (b) {
                         if (H) return H.call(b, a, c);
                         d = b.length, c = c ? c < 0 ? Math.max(0, d + c) : c : 0;
                         for (; c < d; c++)
                             if (c in b && b[c] === a) return c
                     }
                     return -1
                 },
                 merge: function (a, c) {
                     var d = a.length,
                         e = 0;
                     if (typeof c.length == "number")
                         for (var f = c.length; e < f; e++) a[d++] = c[e];
                     else
                         while (c[e] !== b) a[d++] = c[e++];
                     a.length = d;
                     return a
                 },
                 grep: function (a, b, c) {
                     var d = [],
                         e;
                     c = !!c;
                     for (var f = 0, g = a.length; f < g; f++) e = !!b(a[f], f), c !== e && d.push(a[f]);
                     return d
                 },
                 map: function (a, c, d) {
                     var f, g, h = [],
                         i = 0,
                         j = a.length,
                         k = a instanceof e || j !== b && typeof j == "number" && (j > 0 && a[0] && a[j - 1] || j === 0 || e.isArray(a));
                     if (k)
                         for (; i < j; i++) f = c(a[i], i, d), f != null && (h[h.length] = f);
                     else
                         for (g in a) f = c(a[g], g, d), f != null && (h[h.length] = f);
                     return h.concat.apply([], h)
                 },
                 guid: 1,
                 proxy: function (a, c) {
                     if (typeof c == "string") {
                         var d = a[c];
                         c = a, a = d
                     }
                     if (!e.isFunction(a)) return b;
                     var f = F.call(arguments, 2),
                         g = function () {
                             return a.apply(c, f.concat(F.call(arguments)))
                         };
                     g.guid = a.guid = a.guid || g.guid || e.guid++;
                     return g
                 },
                 access: function (a, c, d, f, g, h) {
                     var i = a.length;
                     if (typeof c == "object") {
                         for (var j in c) e.access(a, j, c[j], f, g, d);
                         return a
                     }
                     if (d !== b) {
                         f = !h && f && e.isFunction(d);
                         for (var k = 0; k < i; k++) g(a[k], c, f ? d.call(a[k], k, g(a[k], c)) : d, h);
                         return a
                     }
                     return i ? g(a[0], c) : b
                 },
                 now: function () {
                     return (new Date).getTime()
                 },
                 uaMatch: function (a) {
                     a = a.toLowerCase();
                     var b = r.exec(a) || s.exec(a) || t.exec(a) || a.indexOf("compatible") < 0 && u.exec(a) || [];
                     return {
                         browser: b[1] || "",
                         version: b[2] || "0"
                     }
                 },
                 sub: function () {
                     function a(b, c) {
                         return new a.fn.init(b, c)
                     }
                     e.extend(!0, a, this), a.superclass = this, a.fn = a.prototype = this(), a.fn.constructor = a, a.sub = this.sub, a.fn.init = function (d, f) {
                         f && f instanceof e && !(f instanceof a) && (f = a(f));
                         return e.fn.init.call(this, d, f, b)
                     }, a.fn.init.prototype = a.fn;
                     var b = a(c);
                     return a
                 },
                 browser: {}
             }), e.each("Boolean Number String Function Array Date RegExp Object".split(" "), function (a, b) {
                 I["[object " + b + "]"] = b.toLowerCase()
             }), z = e.uaMatch(y), z.browser && (e.browser[z.browser] = !0, e.browser.version = z.version), e.browser.webkit && (e.browser.safari = !0), j.test(" ") && (k = /^[\s\xA0]+/, l = /[\s\xA0]+$/), h = e(c), c.addEventListener ? B = function () {
                 c.removeEventListener("DOMContentLoaded", B, !1), e.ready()
             } : c.attachEvent && (B = function () {
                 c.readyState === "complete" && (c.detachEvent("onreadystatechange", B), e.ready())
             });
             return e
         }(),
         g = {};
     f.Callbacks = function (a) {
         a = a ? g[a] || h(a) : {};
         var c = [],
             d = [],
             e, i, j, k, l, m = function (b) {
                 var d, e, g, h, i;
                 for (d = 0, e = b.length; d < e; d++) g = b[d], h = f.type(g), h === "array" ? m(g) : h === "function" && (!a.unique || !o.has(g)) && c.push(g)
             },
             n = function (b, f) {
                 f = f || [], e = !a.memory || [b, f], i = !0, l = j || 0, j = 0, k = c.length;
                 for (; c && l < k; l++)
                     if (c[l].apply(b, f) === !1 && a.stopOnFalse) {
                         e = !0;
                         break
                     }
                 i = !1, c && (a.once ? e === !0 ? o.disable() : c = [] : d && d.length && (e = d.shift(), o.fireWith(e[0], e[1])))
             },
             o = {
                 add: function () {
                     if (c) {
                         var a = c.length;
                         m(arguments), i ? k = c.length : e && e !== !0 && (j = a, n(e[0], e[1]))
                     }
                     return this
                 },
                 remove: function () {
                     if (c) {
                         var b = arguments,
                             d = 0,
                             e = b.length;
                         for (; d < e; d++)
                             for (var f = 0; f < c.length; f++)
                                 if (b[d] === c[f]) {
                                     i && f <= k && (k--, f <= l && l--), c.splice(f--, 1);
                                     if (a.unique) break
                                 }
                     }
                     return this
                 },
                 has: function (a) {
                     if (c) {
                         var b = 0,
                             d = c.length;
                         for (; b < d; b++)
                             if (a === c[b]) return !0
                     }
                     return !1
                 },
                 empty: function () {
                     c = [];
                     return this
                 },
                 disable: function () {
                     c = d = e = b;
                     return this
                 },
                 disabled: function () {
                     return !c
                 },
                 lock: function () {
                     d = b, (!e || e === !0) && o.disable();
                     return this
                 },
                 locked: function () {
                     return !d
                 },
                 fireWith: function (b, c) {
                     d && (i ? a.once || d.push([b, c]) : (!a.once || !e) && n(b, c));
                     return this
                 },
                 fire: function () {
                     o.fireWith(this, arguments);
                     return this
                 },
                 fired: function () {
                     return !!e
                 }
             };
         return o
     };
     var i = [].slice;
     f.extend({
         Deferred: function (a) {
             var b = f.Callbacks("once memory"),
                 c = f.Callbacks("once memory"),
                 d = f.Callbacks("memory"),
                 e = "pending",
                 g = {
                     resolve: b,
                     reject: c,
                     notify: d
                 },
                 h = {
                     done: b.add,
                     fail: c.add,
                     progress: d.add,
                     state: function () {
                         return e
                     },
                     isResolved: b.fired,
                     isRejected: c.fired,
                     then: function (a, b, c) {
                         i.done(a).fail(b).progress(c);
                         return this
                     },
                     always: function () {
                         i.done.apply(i, arguments).fail.apply(i, arguments);
                         return this
                     },
                     pipe: function (a, b, c) {
                         return f.Deferred(function (d) {
                             f.each({
                                 done: [a, "resolve"],
                                 fail: [b, "reject"],
                                 progress: [c, "notify"]
                             }, function (a, b) {
                                 var c = b[0],
                                     e = b[1],
                                     g;
                                 f.isFunction(c) ? i[a](function () {
                                     g = c.apply(this, arguments), g && f.isFunction(g.promise) ? g.promise().then(d.resolve, d.reject, d.notify) : d[e + "With"](this === i ? d : this, [g])
                                 }) : i[a](d[e])
                             })
                         }).promise()
                     },
                     promise: function (a) {
                         if (a == null) a = h;
                         else
                             for (var b in h) a[b] = h[b];
                         return a
                     }
                 },
                 i = h.promise({}),
                 j;
             for (j in g) i[j] = g[j].fire, i[j + "With"] = g[j].fireWith;
             i.done(function () {
                 e = "resolved"
             }, c.disable, d.lock).fail(function () {
                 e = "rejected"
             }, b.disable, d.lock), a && a.call(i, i);
             return i
         },
         when: function (a) {
             function m(a) {
                 return function (b) {
                     e[a] = arguments.length > 1 ? i.call(arguments, 0) : b, j.notifyWith(k, e)
                 }
             }

             function l(a) {
                 return function (c) {
                     b[a] = arguments.length > 1 ? i.call(arguments, 0) : c, --g || j.resolveWith(j, b)
                 }
             }
             var b = i.call(arguments, 0),
                 c = 0,
                 d = b.length,
                 e = Array(d),
                 g = d,
                 h = d,
                 j = d <= 1 && a && f.isFunction(a.promise) ? a : f.Deferred(),
                 k = j.promise();
             if (d > 1) {
                 for (; c < d; c++) b[c] && b[c].promise && f.isFunction(b[c].promise) ? b[c].promise().then(l(c), j.reject, m(c)) : --g;
                 g || j.resolveWith(j, b)
             } else j !== a && j.resolveWith(j, d ? [a] : []);
             return k
         }
     }), f.support = function () {
         var b, d, e, g, h, i, j, k, l, m, n, o, p, q = c.createElement("div"),
             r = c.documentElement;
         q.setAttribute("className", "t"), q.innerHTML = "   <link/><table></table><a href='/a' style='top:1px;float:left;opacity:.55;'>a</a><input type='checkbox'/>", d = q.getElementsByTagName("*"), e = q.getElementsByTagName("a")[0];
         if (!d || !d.length || !e) return {};
         g = c.createElement("select"), h = g.appendChild(c.createElement("option")), i = q.getElementsByTagName("input")[0], b = {
             leadingWhitespace: q.firstChild.nodeType === 3,
             tbody: !q.getElementsByTagName("tbody").length,
             htmlSerialize: !!q.getElementsByTagName("link").length,
             style: /top/.test(e.getAttribute("style")),
             hrefNormalized: e.getAttribute("href") === "/a",
             opacity: /^0.55/.test(e.style.opacity),
             cssFloat: !!e.style.cssFloat,
             checkOn: i.value === "on",
             optSelected: h.selected,
             getSetAttribute: q.className !== "t",
             enctype: !!c.createElement("form").enctype,
             html5Clone: c.createElement("nav").cloneNode(!0).outerHTML !== "<:nav></:nav>",
             submitBubbles: !0,
             changeBubbles: !0,
             focusinBubbles: !1,
             deleteExpando: !0,
             noCloneEvent: !0,
             inlineBlockNeedsLayout: !1,
             shrinkWrapBlocks: !1,
             reliableMarginRight: !0
         }, i.checked = !0, b.noCloneChecked = i.cloneNode(!0).checked, g.disabled = !0, b.optDisabled = !h.disabled;
         try {
             delete q.test
         } catch (s) {
             b.deleteExpando = !1
         }!q.addEventListener && q.attachEvent && q.fireEvent && (q.attachEvent("onclick", function () {
             b.noCloneEvent = !1
         }), q.cloneNode(!0).fireEvent("onclick")), i = c.createElement("input"), i.value = "t", i.setAttribute("type", "radio"), b.radioValue = i.value === "t", i.setAttribute("checked", "checked"), q.appendChild(i), k = c.createDocumentFragment(), k.appendChild(q.lastChild), b.checkClone = k.cloneNode(!0).cloneNode(!0).lastChild.checked, b.appendChecked = i.checked, k.removeChild(i), k.appendChild(q), q.innerHTML = "", a.getComputedStyle && (j = c.createElement("div"), j.style.width = "0", j.style.marginRight = "0", q.style.width = "2px", q.appendChild(j), b.reliableMarginRight = (parseInt((a.getComputedStyle(j, null) || {
             marginRight: 0
         }).marginRight, 10) || 0) === 0);
         if (q.attachEvent)
             for (o in {
                     submit: 1,
                     change: 1,
                     focusin: 1
                 }) n = "on" + o, p = n in q, p || (q.setAttribute(n, "return;"), p = typeof q[n] == "function"), b[o + "Bubbles"] = p;
         k.removeChild(q), k = g = h = j = q = i = null, f(function () {
             var a, d, e, g, h, i, j, k, m, n, o, r = c.getElementsByTagName("body")[0];
             !r || (j = 1, k = "position:absolute;top:0;left:0;width:1px;height:1px;margin:0;", m = "visibility:hidden;border:0;", n = "style='" + k + "border:5px solid #000;padding:0;'", o = "<div " + n + "><div></div></div>" + "<table " + n + " cellpadding='0' cellspacing='0'>" + "<tr><td></td></tr></table>", a = c.createElement("div"), a.style.cssText = m + "width:0;height:0;position:static;top:0;margin-top:" + j + "px", r.insertBefore(a, r.firstChild), q = c.createElement("div"), a.appendChild(q), q.innerHTML = "<table><tr><td style='padding:0;border:0;display:none'></td><td>t</td></tr></table>", l = q.getElementsByTagName("td"), p = l[0].offsetHeight === 0, l[0].style.display = "", l[1].style.display = "none", b.reliableHiddenOffsets = p && l[0].offsetHeight === 0, q.innerHTML = "", q.style.width = q.style.paddingLeft = "1px", f.boxModel = b.boxModel = q.offsetWidth === 2, typeof q.style.zoom != "undefined" && (q.style.display = "inline", q.style.zoom = 1, b.inlineBlockNeedsLayout = q.offsetWidth === 2, q.style.display = "", q.innerHTML = "<div style='width:4px;'></div>", b.shrinkWrapBlocks = q.offsetWidth !== 2), q.style.cssText = k + m, q.innerHTML = o, d = q.firstChild, e = d.firstChild, h = d.nextSibling.firstChild.firstChild, i = {
                 doesNotAddBorder: e.offsetTop !== 5,
                 doesAddBorderForTableAndCells: h.offsetTop === 5
             }, e.style.position = "fixed", e.style.top = "20px", i.fixedPosition = e.offsetTop === 20 || e.offsetTop === 15, e.style.position = e.style.top = "", d.style.overflow = "hidden", d.style.position = "relative", i.subtractsBorderForOverflowNotVisible = e.offsetTop === -5, i.doesNotIncludeMarginInBodyOffset = r.offsetTop !== j, r.removeChild(a), q = a = null, f.extend(b, i))
         });
         return b
     }();
     var j = /^(?:\{.*\}|\[.*\])$/,
         k = /([A-Z])/g;
     f.extend({
         cache: {},
         uuid: 0,
         expando: "jQuery" + (f.fn.jquery + Math.random()).replace(/\D/g, ""),
         noData: {
             embed: !0,
             object: "clsid:D27CDB6E-AE6D-11cf-96B8-444553540000",
             applet: !0
         },
         hasData: function (a) {
             a = a.nodeType ? f.cache[a[f.expando]] : a[f.expando];
             return !!a && !m(a)
         },
         data: function (a, c, d, e) {
             if (!!f.acceptData(a)) {
                 var g, h, i, j = f.expando,
                     k = typeof c == "string",
                     l = a.nodeType,
                     m = l ? f.cache : a,
                     n = l ? a[j] : a[j] && j,
                     o = c === "events";
                 if ((!n || !m[n] || !o && !e && !m[n].data) && k && d === b) return;
                 n || (l ? a[j] = n = ++f.uuid : n = j), m[n] || (m[n] = {}, l || (m[n].toJSON = f.noop));
                 if (typeof c == "object" || typeof c == "function") e ? m[n] = f.extend(m[n], c) : m[n].data = f.extend(m[n].data, c);
                 g = h = m[n], e || (h.data || (h.data = {}), h = h.data), d !== b && (h[f.camelCase(c)] = d);
                 if (o && !h[c]) return g.events;
                 k ? (i = h[c], i == null && (i = h[f.camelCase(c)])) : i = h;
                 return i
             }
         },
         removeData: function (a, b, c) {
             if (!!f.acceptData(a)) {
                 var d, e, g, h = f.expando,
                     i = a.nodeType,
                     j = i ? f.cache : a,
                     k = i ? a[h] : h;
                 if (!j[k]) return;
                 if (b) {
                     d = c ? j[k] : j[k].data;
                     if (d) {
                         f.isArray(b) || (b in d ? b = [b] : (b = f.camelCase(b), b in d ? b = [b] : b = b.split(" ")));
                         for (e = 0, g = b.length; e < g; e++) delete d[b[e]];
                         if (!(c ? m : f.isEmptyObject)(d)) return
                     }
                 }
                 if (!c) {
                     delete j[k].data;
                     if (!m(j[k])) return
                 }
                 f.support.deleteExpando || !j.setInterval ? delete j[k] : j[k] = null, i && (f.support.deleteExpando ? delete a[h] : a.removeAttribute ? a.removeAttribute(h) : a[h] = null)
             }
         },
         _data: function (a, b, c) {
             return f.data(a, b, c, !0)
         },
         acceptData: function (a) {
             if (a.nodeName) {
                 var b = f.noData[a.nodeName.toLowerCase()];
                 if (b) return b !== !0 && a.getAttribute("classid") === b
             }
             return !0
         }
     }), f.fn.extend({
         data: function (a, c) {
             var d, e, g, h = null;
             if (typeof a == "undefined") {
                 if (this.length) {
                     h = f.data(this[0]);
                     if (this[0].nodeType === 1 && !f._data(this[0], "parsedAttrs")) {
                         e = this[0].attributes;
                         for (var i = 0, j = e.length; i < j; i++) g = e[i].name, g.indexOf("data-") === 0 && (g = f.camelCase(g.substring(5)), l(this[0], g, h[g]));
                         f._data(this[0], "parsedAttrs", !0)
                     }
                 }
                 return h
             }
             if (typeof a == "object") return this.each(function () {
                 f.data(this, a)
             });
             d = a.split("."), d[1] = d[1] ? "." + d[1] : "";
             if (c === b) {
                 h = this.triggerHandler("getData" + d[1] + "!", [d[0]]), h === b && this.length && (h = f.data(this[0], a), h = l(this[0], a, h));
                 return h === b && d[1] ? this.data(d[0]) : h
             }
             return this.each(function () {
                 var b = f(this),
                     e = [d[0], c];
                 b.triggerHandler("setData" + d[1] + "!", e), f.data(this, a, c), b.triggerHandler("changeData" + d[1] + "!", e)
             })
         },
         removeData: function (a) {
             return this.each(function () {
                 f.removeData(this, a)
             })
         }
     }), f.extend({
         _mark: function (a, b) {
             a && (b = (b || "fx") + "mark", f._data(a, b, (f._data(a, b) || 0) + 1))
         },
         _unmark: function (a, b, c) {
             a !== !0 && (c = b, b = a, a = !1);
             if (b) {
                 c = c || "fx";
                 var d = c + "mark",
                     e = a ? 0 : (f._data(b, d) || 1) - 1;
                 e ? f._data(b, d, e) : (f.removeData(b, d, !0), n(b, c, "mark"))
             }
         },
         queue: function (a, b, c) {
             var d;
             if (a) {
                 b = (b || "fx") + "queue", d = f._data(a, b), c && (!d || f.isArray(c) ? d = f._data(a, b, f.makeArray(c)) : d.push(c));
                 return d || []
             }
         },
         dequeue: function (a, b) {
             b = b || "fx";
             var c = f.queue(a, b),
                 d = c.shift(),
                 e = {};
             d === "inprogress" && (d = c.shift()), d && (b === "fx" && c.unshift("inprogress"), f._data(a, b + ".run", e), d.call(a, function () {
                 f.dequeue(a, b)
             }, e)), c.length || (f.removeData(a, b + "queue " + b + ".run", !0), n(a, b, "queue"))
         }
     }), f.fn.extend({
         queue: function (a, c) {
             typeof a != "string" && (c = a, a = "fx");
             if (c === b) return f.queue(this[0], a);
             return this.each(function () {
                 var b = f.queue(this, a, c);
                 a === "fx" && b[0] !== "inprogress" && f.dequeue(this, a)
             })
         },
         dequeue: function (a) {
             return this.each(function () {
                 f.dequeue(this, a)
             })
         },
         delay: function (a, b) {
             a = f.fx ? f.fx.speeds[a] || a : a, b = b || "fx";
             return this.queue(b, function (b, c) {
                 var d = setTimeout(b, a);
                 c.stop = function () {
                     clearTimeout(d)
                 }
             })
         },
         clearQueue: function (a) {
             return this.queue(a || "fx", [])
         },
         promise: function (a, c) {
             function m() {
                 --h || d.resolveWith(e, [e])
             }
             typeof a != "string" && (c = a, a = b), a = a || "fx";
             var d = f.Deferred(),
                 e = this,
                 g = e.length,
                 h = 1,
                 i = a + "defer",
                 j = a + "queue",
                 k = a + "mark",
                 l;
             while (g--)
                 if (l = f.data(e[g], i, b, !0) || (f.data(e[g], j, b, !0) || f.data(e[g], k, b, !0)) && f.data(e[g], i, f.Callbacks("once memory"), !0)) h++, l.add(m);
             m();
             return d.promise()
         }
     });
     var o = /[\n\t\r]/g,
         p = /\s+/,
         q = /\r/g,
         r = /^(?:button|input)$/i,
         s = /^(?:button|input|object|select|textarea)$/i,
         t = /^a(?:rea)?$/i,
         u = /^(?:autofocus|autoplay|async|checked|controls|defer|disabled|hidden|loop|multiple|open|readonly|required|scoped|selected)$/i,
         v = f.support.getSetAttribute,
         w, x, y;
     f.fn.extend({
         attr: function (a, b) {
             return f.access(this, a, b, !0, f.attr)
         },
         removeAttr: function (a) {
             return this.each(function () {
                 f.removeAttr(this, a)
             })
         },
         prop: function (a, b) {
             return f.access(this, a, b, !0, f.prop)
         },
         removeProp: function (a) {
             a = f.propFix[a] || a;
             return this.each(function () {
                 try {
                     this[a] = b, delete this[a]
                 } catch (c) {}
             })
         },
         addClass: function (a) {
             var b, c, d, e, g, h, i;
             if (f.isFunction(a)) return this.each(function (b) {
                 f(this).addClass(a.call(this, b, this.className))
             });
             if (a && typeof a == "string") {
                 b = a.split(p);
                 for (c = 0, d = this.length; c < d; c++) {
                     e = this[c];
                     if (e.nodeType === 1)
                         if (!e.className && b.length === 1) e.className = a;
                         else {
                             g = " " + e.className + " ";
                             for (h = 0, i = b.length; h < i; h++) ~g.indexOf(" " + b[h] + " ") || (g += b[h] + " ");
                             e.className = f.trim(g)
                         }
                 }
             }
             return this
         },
         removeClass: function (a) {
             var c, d, e, g, h, i, j;
             if (f.isFunction(a)) return this.each(function (b) {
                 f(this).removeClass(a.call(this, b, this.className))
             });
             if (a && typeof a == "string" || a === b) {
                 c = (a || "").split(p);
                 for (d = 0, e = this.length; d < e; d++) {
                     g = this[d];
                     if (g.nodeType === 1 && g.className)
                         if (a) {
                             h = (" " + g.className + " ").replace(o, " ");
                             for (i = 0, j = c.length; i < j; i++) h = h.replace(" " + c[i] + " ", " ");
                             g.className = f.trim(h)
                         } else g.className = ""
                 }
             }
             return this
         },
         toggleClass: function (a, b) {
             var c = typeof a,
                 d = typeof b == "boolean";
             if (f.isFunction(a)) return this.each(function (c) {
                 f(this).toggleClass(a.call(this, c, this.className, b), b)
             });
             return this.each(function () {
                 if (c === "string") {
                     var e, g = 0,
                         h = f(this),
                         i = b,
                         j = a.split(p);
                     while (e = j[g++]) i = d ? i : !h.hasClass(e), h[i ? "addClass" : "removeClass"](e)
                 } else if (c === "undefined" || c === "boolean") this.className && f._data(this, "__className__", this.className), this.className = this.className || a === !1 ? "" : f._data(this, "__className__") || ""
             })
         },
         hasClass: function (a) {
             var b = " " + a + " ",
                 c = 0,
                 d = this.length;
             for (; c < d; c++)
                 if (this[c].nodeType === 1 && (" " + this[c].className + " ").replace(o, " ").indexOf(b) > -1) return !0;
             return !1
         },
         val: function (a) {
             var c, d, e, g = this[0]; {
                 if (!!arguments.length) {
                     e = f.isFunction(a);
                     return this.each(function (d) {
                         var g = f(this),
                             h;
                         if (this.nodeType === 1) {
                             e ? h = a.call(this, d, g.val()) : h = a, h == null ? h = "" : typeof h == "number" ? h += "" : f.isArray(h) && (h = f.map(h, function (a) {
                                 return a == null ? "" : a + ""
                             })), c = f.valHooks[this.nodeName.toLowerCase()] || f.valHooks[this.type];
                             if (!c || !("set" in c) || c.set(this, h, "value") === b) this.value = h
                         }
                     })
                 }
                 if (g) {
                     c = f.valHooks[g.nodeName.toLowerCase()] || f.valHooks[g.type];
                     if (c && "get" in c && (d = c.get(g, "value")) !== b) return d;
                     d = g.value;
                     return typeof d == "string" ? d.replace(q, "") : d == null ? "" : d
                 }
             }
         }
     }), f.extend({
         valHooks: {
             option: {
                 get: function (a) {
                     var b = a.attributes.value;
                     return !b || b.specified ? a.value : a.text
                 }
             },
             select: {
                 get: function (a) {
                     var b, c, d, e, g = a.selectedIndex,
                         h = [],
                         i = a.options,
                         j = a.type === "select-one";
                     if (g < 0) return null;
                     c = j ? g : 0, d = j ? g + 1 : i.length;
                     for (; c < d; c++) {
                         e = i[c];
                         if (e.selected && (f.support.optDisabled ? !e.disabled : e.getAttribute("disabled") === null) && (!e.parentNode.disabled || !f.nodeName(e.parentNode, "optgroup"))) {
                             b = f(e).val();
                             if (j) return b;
                             h.push(b)
                         }
                     }
                     if (j && !h.length && i.length) return f(i[g]).val();
                     return h
                 },
                 set: function (a, b) {
                     var c = f.makeArray(b);
                     f(a).find("option").each(function () {
                         this.selected = f.inArray(f(this).val(), c) >= 0
                     }), c.length || (a.selectedIndex = -1);
                     return c
                 }
             }
         },
         attrFn: {
             val: !0,
             css: !0,
             html: !0,
             text: !0,
             data: !0,
             width: !0,
             height: !0,
             offset: !0
         },
         attr: function (a, c, d, e) {
             var g, h, i, j = a.nodeType;
             if (!!a && j !== 3 && j !== 8 && j !== 2) {
                 if (e && c in f.attrFn) return f(a)[c](d);
                 if (typeof a.getAttribute == "undefined") return f.prop(a, c, d);
                 i = j !== 1 || !f.isXMLDoc(a), i && (c = c.toLowerCase(), h = f.attrHooks[c] || (u.test(c) ? x : w));
                 if (d !== b) {
                     if (d === null) {
                         f.removeAttr(a, c);
                         return
                     }
                     if (h && "set" in h && i && (g = h.set(a, d, c)) !== b) return g;
                     a.setAttribute(c, "" + d);
                     return d
                 }
                 if (h && "get" in h && i && (g = h.get(a, c)) !== null) return g;
                 g = a.getAttribute(c);
                 return g === null ? b : g
             }
         },
         removeAttr: function (a, b) {
             var c, d, e, g, h = 0;
             if (b && a.nodeType === 1) {
                 d = b.toLowerCase().split(p), g = d.length;
                 for (; h < g; h++) e = d[h], e && (c = f.propFix[e] || e, f.attr(a, e, ""), a.removeAttribute(v ? e : c), u.test(e) && c in a && (a[c] = !1))
             }
         },
         attrHooks: {
             type: {
                 set: function (a, b) {
                     if (r.test(a.nodeName) && a.parentNode) f.error("type property can't be changed");
                     else if (!f.support.radioValue && b === "radio" && f.nodeName(a, "input")) {
                         var c = a.value;
                         a.setAttribute("type", b), c && (a.value = c);
                         return b
                     }
                 }
             },
             value: {
                 get: function (a, b) {
                     if (w && f.nodeName(a, "button")) return w.get(a, b);
                     return b in a ? a.value : null
                 },
                 set: function (a, b, c) {
                     if (w && f.nodeName(a, "button")) return w.set(a, b, c);
                     a.value = b
                 }
             }
         },
         propFix: {
             tabindex: "tabIndex",
             readonly: "readOnly",
             "for": "htmlFor",
             "class": "className",
             maxlength: "maxLength",
             cellspacing: "cellSpacing",
             cellpadding: "cellPadding",
             rowspan: "rowSpan",
             colspan: "colSpan",
             usemap: "useMap",
             frameborder: "frameBorder",
             contenteditable: "contentEditable"
         },
         prop: function (a, c, d) {
             var e, g, h, i = a.nodeType;
             if (!!a && i !== 3 && i !== 8 && i !== 2) {
                 h = i !== 1 || !f.isXMLDoc(a), h && (c = f.propFix[c] || c, g = f.propHooks[c]);
                 return d !== b ? g && "set" in g && (e = g.set(a, d, c)) !== b ? e : a[c] = d : g && "get" in g && (e = g.get(a, c)) !== null ? e : a[c]
             }
         },
         propHooks: {
             tabIndex: {
                 get: function (a) {
                     var c = a.getAttributeNode("tabindex");
                     return c && c.specified ? parseInt(c.value, 10) : s.test(a.nodeName) || t.test(a.nodeName) && a.href ? 0 : b
                 }
             }
         }
     }), f.attrHooks.tabindex = f.propHooks.tabIndex, x = {
         get: function (a, c) {
             var d, e = f.prop(a, c);
             return e === !0 || typeof e != "boolean" && (d = a.getAttributeNode(c)) && d.nodeValue !== !1 ? c.toLowerCase() : b
         },
         set: function (a, b, c) {
             var d;
             b === !1 ? f.removeAttr(a, c) : (d = f.propFix[c] || c, d in a && (a[d] = !0), a.setAttribute(c, c.toLowerCase()));
             return c
         }
     }, v || (y = {
         name: !0,
         id: !0
     }, w = f.valHooks.button = {
         get: function (a, c) {
             var d;
             d = a.getAttributeNode(c);
             return d && (y[c] ? d.nodeValue !== "" : d.specified) ? d.nodeValue : b
         },
         set: function (a, b, d) {
             var e = a.getAttributeNode(d);
             e || (e = c.createAttribute(d), a.setAttributeNode(e));
             return e.nodeValue = b + ""
         }
     }, f.attrHooks.tabindex.set = w.set, f.each(["width", "height"], function (a, b) {
         f.attrHooks[b] = f.extend(f.attrHooks[b], {
             set: function (a, c) {
                 if (c === "") {
                     a.setAttribute(b, "auto");
                     return c
                 }
             }
         })
     }), f.attrHooks.contenteditable = {
         get: w.get,
         set: function (a, b, c) {
             b === "" && (b = "false"), w.set(a, b, c)
         }
     }), f.support.hrefNormalized || f.each(["href", "src", "width", "height"], function (a, c) {
         f.attrHooks[c] = f.extend(f.attrHooks[c], {
             get: function (a) {
                 var d = a.getAttribute(c, 2);
                 return d === null ? b : d
             }
         })
     }), f.support.style || (f.attrHooks.style = {
         get: function (a) {
             return a.style.cssText.toLowerCase() || b
         },
         set: function (a, b) {
             return a.style.cssText = "" + b
         }
     }), f.support.optSelected || (f.propHooks.selected = f.extend(f.propHooks.selected, {
         get: function (a) {
             var b = a.parentNode;
             b && (b.selectedIndex, b.parentNode && b.parentNode.selectedIndex);
             return null
         }
     })), f.support.enctype || (f.propFix.enctype = "encoding"), f.support.checkOn || f.each(["radio", "checkbox"], function () {
         f.valHooks[this] = {
             get: function (a) {
                 return a.getAttribute("value") === null ? "on" : a.value
             }
         }
     }), f.each(["radio", "checkbox"], function () {
         f.valHooks[this] = f.extend(f.valHooks[this], {
             set: function (a, b) {
                 if (f.isArray(b)) return a.checked = f.inArray(f(a).val(), b) >= 0
             }
         })
     });
     var z = /^(?:textarea|input|select)$/i,
         A = /^([^\.]*)?(?:\.(.+))?$/,
         B = /\bhover(\.\S+)?\b/,
         C = /^key/,
         D = /^(?:mouse|contextmenu)|click/,
         E = /^(?:focusinfocus|focusoutblur)$/,
         F = /^(\w*)(?:#([\w\-]+))?(?:\.([\w\-]+))?$/,
         G = function (a) {
             var b = F.exec(a);
             b && (b[1] = (b[1] || "").toLowerCase(), b[3] = b[3] && new RegExp("(?:^|\\s)" + b[3] + "(?:\\s|$)"));
             return b
         },
         H = function (a, b) {
             var c = a.attributes || {};
             return (!b[1] || a.nodeName.toLowerCase() === b[1]) && (!b[2] || (c.id || {}).value === b[2]) && (!b[3] || b[3].test((c["class"] || {}).value))
         },
         I = function (a) {
             return f.event.special.hover ? a : a.replace(B, "mouseenter$1 mouseleave$1")
         };
     f.event = {
             add: function (a, c, d, e, g) {
                 var h, i, j, k, l, m, n, o, p, q, r, s;
                 if (!(a.nodeType === 3 || a.nodeType === 8 || !c || !d || !(h = f._data(a)))) {
                     d.handler && (p = d, d = p.handler), d.guid || (d.guid = f.guid++), j = h.events, j || (h.events = j = {}), i = h.handle, i || (h.handle = i = function (a) {
                         return typeof f != "undefined" && (!a || f.event.triggered !== a.type) ? f.event.dispatch.apply(i.elem, arguments) : b
                     }, i.elem = a), c = f.trim(I(c)).split(" ");
                     for (k = 0; k < c.length; k++) {
                         l = A.exec(c[k]) || [], m = l[1], n = (l[2] || "").split(".").sort(), s = f.event.special[m] || {}, m = (g ? s.delegateType : s.bindType) || m, s = f.event.special[m] || {}, o = f.extend({
                             type: m,
                             origType: l[1],
                             data: e,
                             handler: d,
                             guid: d.guid,
                             selector: g,
                             quick: G(g),
                             namespace: n.join(".")
                         }, p), r = j[m];
                         if (!r) {
                             r = j[m] = [], r.delegateCount = 0;
                             if (!s.setup || s.setup.call(a, e, n, i) === !1) a.addEventListener ? a.addEventListener(m, i, !1) : a.attachEvent && a.attachEvent("on" + m, i)
                         }
                         s.add && (s.add.call(a, o), o.handler.guid || (o.handler.guid = d.guid)), g ? r.splice(r.delegateCount++, 0, o) : r.push(o), f.event.global[m] = !0
                     }
                     a = null
                 }
             },
             global: {},
             remove: function (a, b, c, d, e) {
                 var g = f.hasData(a) && f._data(a),
                     h, i, j, k, l, m, n, o, p, q, r, s;
                 if (!!g && !!(o = g.events)) {
                     b = f.trim(I(b || "")).split(" ");
                     for (h = 0; h < b.length; h++) {
                         i = A.exec(b[h]) || [], j = k = i[1], l = i[2];
                         if (!j) {
                             for (j in o) f.event.remove(a, j + b[h], c, d, !0);
                             continue
                         }
                         p = f.event.special[j] || {}, j = (d ? p.delegateType : p.bindType) || j, r = o[j] || [], m = r.length, l = l ? new RegExp("(^|\\.)" + l.split(".").sort().join("\\.(?:.*\\.)?") + "(\\.|$)") : null;
                         for (n = 0; n < r.length; n++) s = r[n], (e || k === s.origType) && (!c || c.guid === s.guid) && (!l || l.test(s.namespace)) && (!d || d === s.selector || d === "**" && s.selector) && (r.splice(n--, 1), s.selector && r.delegateCount--, p.remove && p.remove.call(a, s));
                         r.length === 0 && m !== r.length && ((!p.teardown || p.teardown.call(a, l) === !1) && f.removeEvent(a, j, g.handle), delete o[j])
                     }
                     f.isEmptyObject(o) && (q = g.handle, q && (q.elem = null), f.removeData(a, ["events", "handle"], !0))
                 }
             },
             customEvent: {
                 getData: !0,
                 setData: !0,
                 changeData: !0
             },
             trigger: function (c, d, e, g) {
                 if (!e || e.nodeType !== 3 && e.nodeType !== 8) {
                     var h = c.type || c,
                         i = [],
                         j, k, l, m, n, o, p, q, r, s;
                     if (E.test(h + f.event.triggered)) return;
                     h.indexOf("!") >= 0 && (h = h.slice(0, -1), k = !0), h.indexOf(".") >= 0 && (i = h.split("."), h = i.shift(), i.sort());
                     if ((!e || f.event.customEvent[h]) && !f.event.global[h]) return;
                     c = typeof c == "object" ? c[f.expando] ? c : new f.Event(h, c) : new f.Event(h), c.type = h, c.isTrigger = !0, c.exclusive = k, c.namespace = i.join("."), c.namespace_re = c.namespace ? new RegExp("(^|\\.)" + i.join("\\.(?:.*\\.)?") + "(\\.|$)") : null, o = h.indexOf(":") < 0 ? "on" + h : "";
                     if (!e) {
                         j = f.cache;
                         for (l in j) j[l].events && j[l].events[h] && f.event.trigger(c, d, j[l].handle.elem, !0);
                         return
                     }
                     c.result = b, c.target || (c.target = e), d = d != null ? f.makeArray(d) : [], d.unshift(c), p = f.event.special[h] || {};
                     if (p.trigger && p.trigger.apply(e, d) === !1) return;
                     r = [
                         [e, p.bindType || h]
                     ];
                     if (!g && !p.noBubble && !f.isWindow(e)) {
                         s = p.delegateType || h, m = E.test(s + h) ? e : e.parentNode, n = null;
                         for (; m; m = m.parentNode) r.push([m, s]), n = m;
                         n && n === e.ownerDocument && r.push([n.defaultView || n.parentWindow || a, s])
                     }
                     for (l = 0; l < r.length && !c.isPropagationStopped(); l++) m = r[l][0], c.type = r[l][1], q = (f._data(m, "events") || {})[c.type] && f._data(m, "handle"), q && q.apply(m, d), q = o && m[o], q && f.acceptData(m) && q.apply(m, d) === !1 && c.preventDefault();
                     c.type = h, !g && !c.isDefaultPrevented() && (!p._default || p._default.apply(e.ownerDocument, d) === !1) && (h !== "click" || !f.nodeName(e, "a")) && f.acceptData(e) && o && e[h] && (h !== "focus" && h !== "blur" || c.target.offsetWidth !== 0) && !f.isWindow(e) && (n = e[o], n && (e[o] = null), f.event.triggered = h, e[h](), f.event.triggered = b, n && (e[o] = n));
                     return c.result
                 }
             },
             dispatch: function (c) {
                 c = f.event.fix(c || a.event);
                 var d = (f._data(this, "events") || {})[c.type] || [],
                     e = d.delegateCount,
                     g = [].slice.call(arguments, 0),
                     h = !c.exclusive && !c.namespace,
                     i = [],
                     j, k, l, m, n, o, p, q, r, s, t;
                 g[0] = c, c.delegateTarget = this;
                 if (e && !c.target.disabled && (!c.button || c.type !== "click")) {
                     m = f(this), m.context = this.ownerDocument || this;
                     for (l = c.target; l != this; l = l.parentNode || this) {
                         o = {}, q = [], m[0] = l;
                         for (j = 0; j < e; j++) r = d[j], s = r.selector, o[s] === b && (o[s] = r.quick ? H(l, r.quick) : m.is(s)), o[s] && q.push(r);
                         q.length && i.push({
                             elem: l,
                             matches: q
                         })
                     }
                 }
                 d.length > e && i.push({
                     elem: this,
                     matches: d.slice(e)
                 });
                 for (j = 0; j < i.length && !c.isPropagationStopped(); j++) {
                     p = i[j], c.currentTarget = p.elem;
                     for (k = 0; k < p.matches.length && !c.isImmediatePropagationStopped(); k++) {
                         r = p.matches[k];
                         if (h || !c.namespace && !r.namespace || c.namespace_re && c.namespace_re.test(r.namespace)) c.data = r.data, c.handleObj = r, n = ((f.event.special[r.origType] || {}).handle || r.handler).apply(p.elem, g), n !== b && (c.result = n, n === !1 && (c.preventDefault(), c.stopPropagation()))
                     }
                 }
                 return c.result
             },
             props: "attrChange attrName relatedNode srcElement altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "),
             fixHooks: {},
             keyHooks: {
                 props: "char charCode key keyCode".split(" "),
                 filter: function (a, b) {
                     a.which == null && (a.which = b.charCode != null ? b.charCode : b.keyCode);
                     return a
                 }
             },
             mouseHooks: {
                 props: "button buttons clientX clientY fromElement offsetX offsetY pageX pageY screenX screenY toElement".split(" "),
                 filter: function (a, d) {
                     var e, f, g, h = d.button,
                         i = d.fromElement;
                     a.pageX == null && d.clientX != null && (e = a.target.ownerDocument || c, f = e.documentElement, g = e.body, a.pageX = d.clientX + (f && f.scrollLeft || g && g.scrollLeft || 0) - (f && f.clientLeft || g && g.clientLeft || 0), a.pageY = d.clientY + (f && f.scrollTop || g && g.scrollTop || 0) - (f && f.clientTop || g && g.clientTop || 0)), !a.relatedTarget && i && (a.relatedTarget = i === a.target ? d.toElement : i), !a.which && h !== b && (a.which = h & 1 ? 1 : h & 2 ? 3 : h & 4 ? 2 : 0);
                     return a
                 }
             },
             fix: function (a) {
                 if (a[f.expando]) return a;
                 var d, e, g = a,
                     h = f.event.fixHooks[a.type] || {},
                     i = h.props ? this.props.concat(h.props) : this.props;
                 a = f.Event(g);
                 for (d = i.length; d;) e = i[--d], a[e] = g[e];
                 a.target || (a.target = g.srcElement || c), a.target.nodeType === 3 && (a.target = a.target.parentNode), a.metaKey === b && (a.metaKey = a.ctrlKey);
                 return h.filter ? h.filter(a, g) : a
             },
             special: {
                 ready: {
                     setup: f.bindReady
                 },
                 load: {
                     noBubble: !0
                 },
                 focus: {
                     delegateType: "focusin"
                 },
                 blur: {
                     delegateType: "focusout"
                 },
                 beforeunload: {
                     setup: function (a, b, c) {
                         f.isWindow(this) && (this.onbeforeunload = c)
                     },
                     teardown: function (a, b) {
                         this.onbeforeunload === b && (this.onbeforeunload = null)
                     }
                 }
             },
             simulate: function (a, b, c, d) {
                 var e = f.extend(new f.Event, c, {
                     type: a,
                     isSimulated: !0,
                     originalEvent: {}
                 });
                 d ? f.event.trigger(e, null, b) : f.event.dispatch.call(b, e), e.isDefaultPrevented() && c.preventDefault()
             }
         }, f.event.handle = f.event.dispatch, f.removeEvent = c.removeEventListener ? function (a, b, c) {
             a.removeEventListener && a.removeEventListener(b, c, !1)
         } : function (a, b, c) {
             a.detachEvent && a.detachEvent("on" + b, c)
         }, f.Event = function (a, b) {
             if (!(this instanceof f.Event)) return new f.Event(a, b);
             a && a.type ? (this.originalEvent = a, this.type = a.type, this.isDefaultPrevented = a.defaultPrevented || a.returnValue === !1 || a.getPreventDefault && a.getPreventDefault() ? K : J) : this.type = a, b && f.extend(this, b), this.timeStamp = a && a.timeStamp || f.now(), this[f.expando] = !0
         }, f.Event.prototype = {
             preventDefault: function () {
                 this.isDefaultPrevented = K;
                 var a = this.originalEvent;
                 !a || (a.preventDefault ? a.preventDefault() : a.returnValue = !1)
             },
             stopPropagation: function () {
                 this.isPropagationStopped = K;
                 var a = this.originalEvent;
                 !a || (a.stopPropagation && a.stopPropagation(), a.cancelBubble = !0)
             },
             stopImmediatePropagation: function () {
                 this.isImmediatePropagationStopped = K, this.stopPropagation()
             },
             isDefaultPrevented: J,
             isPropagationStopped: J,
             isImmediatePropagationStopped: J
         }, f.each({
             mouseenter: "mouseover",
             mouseleave: "mouseout"
         }, function (a, b) {
             f.event.special[a] = {
                 delegateType: b,
                 bindType: b,
                 handle: function (a) {
                     var c = this,
                         d = a.relatedTarget,
                         e = a.handleObj,
                         g = e.selector,
                         h;
                     if (!d || d !== c && !f.contains(c, d)) a.type = e.origType, h = e.handler.apply(this, arguments), a.type = b;
                     return h
                 }
             }
         }), f.support.submitBubbles || (f.event.special.submit = {
             setup: function () {
                 if (f.nodeName(this, "form")) return !1;
                 f.event.add(this, "click._submit keypress._submit", function (a) {
                     var c = a.target,
                         d = f.nodeName(c, "input") || f.nodeName(c, "button") ? c.form : b;
                     d && !d._submit_attached && (f.event.add(d, "submit._submit", function (a) {
                         this.parentNode && !a.isTrigger && f.event.simulate("submit", this.parentNode, a, !0)
                     }), d._submit_attached = !0)
                 })
             },
             teardown: function () {
                 if (f.nodeName(this, "form")) return !1;
                 f.event.remove(this, "._submit")
             }
         }), f.support.changeBubbles || (f.event.special.change = {
             setup: function () {
                 if (z.test(this.nodeName)) {
                     if (this.type === "checkbox" || this.type === "radio") f.event.add(this, "propertychange._change", function (a) {
                         a.originalEvent.propertyName === "checked" && (this._just_changed = !0)
                     }), f.event.add(this, "click._change", function (a) {
                         this._just_changed && !a.isTrigger && (this._just_changed = !1, f.event.simulate("change", this, a, !0))
                     });
                     return !1
                 }
                 f.event.add(this, "beforeactivate._change", function (a) {
                     var b = a.target;
                     z.test(b.nodeName) && !b._change_attached && (f.event.add(b, "change._change", function (a) {
                         this.parentNode && !a.isSimulated && !a.isTrigger && f.event.simulate("change", this.parentNode, a, !0)
                     }), b._change_attached = !0)
                 })
             },
             handle: function (a) {
                 var b = a.target;
                 if (this !== b || a.isSimulated || a.isTrigger || b.type !== "radio" && b.type !== "checkbox") return a.handleObj.handler.apply(this, arguments)
             },
             teardown: function () {
                 f.event.remove(this, "._change");
                 return z.test(this.nodeName)
             }
         }), f.support.focusinBubbles || f.each({
             focus: "focusin",
             blur: "focusout"
         }, function (a, b) {
             var d = 0,
                 e = function (a) {
                     f.event.simulate(b, a.target, f.event.fix(a), !0)
                 };
             f.event.special[b] = {
                 setup: function () {
                     d++ === 0 && c.addEventListener(a, e, !0)
                 },
                 teardown: function () {
                     --d === 0 && c.removeEventListener(a, e, !0)
                 }
             }
         }), f.fn.extend({
             on: function (a, c, d, e, g) {
                 var h, i;
                 if (typeof a == "object") {
                     typeof c != "string" && (d = c, c = b);
                     for (i in a) this.on(i, c, d, a[i], g);
                     return this
                 }
                 d == null && e == null ? (e = c, d = c = b) : e == null && (typeof c == "string" ? (e = d, d = b) : (e = d, d = c, c = b));
                 if (e === !1) e = J;
                 else if (!e) return this;
                 g === 1 && (h = e, e = function (a) {
                     f().off(a);
                     return h.apply(this, arguments)
                 }, e.guid = h.guid || (h.guid = f.guid++));
                 return this.each(function () {
                     f.event.add(this, a, e, d, c)
                 })
             },
             one: function (a, b, c, d) {
                 return this.on.call(this, a, b, c, d, 1)
             },
             off: function (a, c, d) {
                 if (a && a.preventDefault && a.handleObj) {
                     var e = a.handleObj;
                     f(a.delegateTarget).off(e.namespace ? e.type + "." + e.namespace : e.type, e.selector, e.handler);
                     return this
                 }
                 if (typeof a == "object") {
                     for (var g in a) this.off(g, c, a[g]);
                     return this
                 }
                 if (c === !1 || typeof c == "function") d = c, c = b;
                 d === !1 && (d = J);
                 return this.each(function () {
                     f.event.remove(this, a, d, c)
                 })
             },
             bind: function (a, b, c) {
                 return this.on(a, null, b, c)
             },
             unbind: function (a, b) {
                 return this.off(a, null, b)
             },
             live: function (a, b, c) {
                 f(this.context).on(a, this.selector, b, c);
                 return this
             },
             die: function (a, b) {
                 f(this.context).off(a, this.selector || "**", b);
                 return this
             },
             delegate: function (a, b, c, d) {
                 return this.on(b, a, c, d)
             },
             undelegate: function (a, b, c) {
                 return arguments.length == 1 ? this.off(a, "**") : this.off(b, a, c)
             },
             trigger: function (a, b) {
                 return this.each(function () {
                     f.event.trigger(a, b, this)
                 })
             },
             triggerHandler: function (a, b) {
                 if (this[0]) return f.event.trigger(a, b, this[0], !0)
             },
             toggle: function (a) {
                 var b = arguments,
                     c = a.guid || f.guid++,
                     d = 0,
                     e = function (c) {
                         var e = (f._data(this, "lastToggle" + a.guid) || 0) % d;
                         f._data(this, "lastToggle" + a.guid, e + 1), c.preventDefault();
                         return b[e].apply(this, arguments) || !1
                     };
                 e.guid = c;
                 while (d < b.length) b[d++].guid = c;
                 return this.click(e)
             },
             hover: function (a, b) {
                 return this.mouseenter(a).mouseleave(b || a)
             }
         }), f.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(" "), function (a, b) {
             f.fn[b] = function (a, c) {
                 c == null && (c = a, a = null);
                 return arguments.length > 0 ? this.on(b, null, a, c) : this.trigger(b)
             }, f.attrFn && (f.attrFn[b] = !0), C.test(b) && (f.event.fixHooks[b] = f.event.keyHooks), D.test(b) && (f.event.fixHooks[b] = f.event.mouseHooks)
         }),
         function () {
             function x(a, b, c, e, f, g) {
                 for (var h = 0, i = e.length; h < i; h++) {
                     var j = e[h];
                     if (j) {
                         var k = !1;
                         j = j[a];
                         while (j) {
                             if (j[d] === c) {
                                 k = e[j.sizset];
                                 break
                             }
                             if (j.nodeType === 1) {
                                 g || (j[d] = c, j.sizset = h);
                                 if (typeof b != "string") {
                                     if (j === b) {
                                         k = !0;
                                         break
                                     }
                                 } else if (m.filter(b, [j]).length > 0) {
                                     k = j;
                                     break
                                 }
                             }
                             j = j[a]
                         }
                         e[h] = k
                     }
                 }
             }

             function w(a, b, c, e, f, g) {
                 for (var h = 0, i = e.length; h < i; h++) {
                     var j = e[h];
                     if (j) {
                         var k = !1;
                         j = j[a];
                         while (j) {
                             if (j[d] === c) {
                                 k = e[j.sizset];
                                 break
                             }
                             j.nodeType === 1 && !g && (j[d] = c, j.sizset = h);
                             if (j.nodeName.toLowerCase() === b) {
                                 k = j;
                                 break
                             }
                             j = j[a]
                         }
                         e[h] = k
                     }
                 }
             }
             var a = /((?:\((?:\([^()]+\)|[^()]+)+\)|\[(?:\[[^\[\]]*\]|['"][^'"]*['"]|[^\[\]'"]+)+\]|\\.|[^ >+~,(\[\\]+)+|[>+~])(\s*,\s*)?((?:.|\r|\n)*)/g,
                 d = "sizcache" + (Math.random() + "").replace(".", ""),
                 e = 0,
                 g = Object.prototype.toString,
                 h = !1,
                 i = !0,
                 j = /\\/g,
                 k = /\r\n/g,
                 l = /\W/;
             [0, 0].sort(function () {
                 i = !1;
                 return 0
             });
             var m = function (b, d, e, f) {
                 e = e || [], d = d || c;
                 var h = d;
                 if (d.nodeType !== 1 && d.nodeType !== 9) return [];
                 if (!b || typeof b != "string") return e;
                 var i, j, k, l, n, q, r, t, u = !0,
                     v = m.isXML(d),
                     w = [],
                     x = b;
                 do {
                     a.exec(""), i = a.exec(x);
                     if (i) {
                         x = i[3], w.push(i[1]);
                         if (i[2]) {
                             l = i[3];
                             break
                         }
                     }
                 } while (i);
                 if (w.length > 1 && p.exec(b))
                     if (w.length === 2 && o.relative[w[0]]) j = y(w[0] + w[1], d, f);
                     else {
                         j = o.relative[w[0]] ? [d] : m(w.shift(), d);
                         while (w.length) b = w.shift(), o.relative[b] && (b += w.shift()), j = y(b, j, f)
                     }
                 else {
                     !f && w.length > 1 && d.nodeType === 9 && !v && o.match.ID.test(w[0]) && !o.match.ID.test(w[w.length - 1]) && (n = m.find(w.shift(), d, v), d = n.expr ? m.filter(n.expr, n.set)[0] : n.set[0]);
                     if (d) {
                         n = f ? {
                             expr: w.pop(),
                             set: s(f)
                         } : m.find(w.pop(), w.length === 1 && (w[0] === "~" || w[0] === "+") && d.parentNode ? d.parentNode : d, v), j = n.expr ? m.filter(n.expr, n.set) : n.set, w.length > 0 ? k = s(j) : u = !1;
                         while (w.length) q = w.pop(), r = q, o.relative[q] ? r = w.pop() : q = "", r == null && (r = d), o.relative[q](k, r, v)
                     } else k = w = []
                 }
                 k || (k = j), k || m.error(q || b);
                 if (g.call(k) === "[object Array]")
                     if (!u) e.push.apply(e, k);
                     else if (d && d.nodeType === 1)
                     for (t = 0; k[t] != null; t++) k[t] && (k[t] === !0 || k[t].nodeType === 1 && m.contains(d, k[t])) && e.push(j[t]);
                 else
                     for (t = 0; k[t] != null; t++) k[t] && k[t].nodeType === 1 && e.push(j[t]);
                 else s(k, e);
                 l && (m(l, h, e, f), m.uniqueSort(e));
                 return e
             };
             m.uniqueSort = function (a) {
                 if (u) {
                     h = i, a.sort(u);
                     if (h)
                         for (var b = 1; b < a.length; b++) a[b] === a[b - 1] && a.splice(b--, 1)
                 }
                 return a
             }, m.matches = function (a, b) {
                 return m(a, null, null, b)
             }, m.matchesSelector = function (a, b) {
                 return m(b, null, null, [a]).length > 0
             }, m.find = function (a, b, c) {
                 var d, e, f, g, h, i;
                 if (!a) return [];
                 for (e = 0, f = o.order.length; e < f; e++) {
                     h = o.order[e];
                     if (g = o.leftMatch[h].exec(a)) {
                         i = g[1], g.splice(1, 1);
                         if (i.substr(i.length - 1) !== "\\") {
                             g[1] = (g[1] || "").replace(j, ""), d = o.find[h](g, b, c);
                             if (d != null) {
                                 a = a.replace(o.match[h], "");
                                 break
                             }
                         }
                     }
                 }
                 d || (d = typeof b.getElementsByTagName != "undefined" ? b.getElementsByTagName("*") : []);
                 return {
                     set: d,
                     expr: a
                 }
             }, m.filter = function (a, c, d, e) {
                 var f, g, h, i, j, k, l, n, p, q = a,
                     r = [],
                     s = c,
                     t = c && c[0] && m.isXML(c[0]);
                 while (a && c.length) {
                     for (h in o.filter)
                         if ((f = o.leftMatch[h].exec(a)) != null && f[2]) {
                             k = o.filter[h], l = f[1], g = !1, f.splice(1, 1);
                             if (l.substr(l.length - 1) === "\\") continue;
                             s === r && (r = []);
                             if (o.preFilter[h]) {
                                 f = o.preFilter[h](f, s, d, r, e, t);
                                 if (!f) g = i = !0;
                                 else if (f === !0) continue
                             }
                             if (f)
                                 for (n = 0;
                                     (j = s[n]) != null; n++) j && (i = k(j, f, n, s), p = e ^ i, d && i != null ? p ? g = !0 : s[n] = !1 : p && (r.push(j), g = !0));
                             if (i !== b) {
                                 d || (s = r), a = a.replace(o.match[h], "");
                                 if (!g) return [];
                                 break
                             }
                         }
                     if (a === q)
                         if (g == null) m.error(a);
                         else break;
                     q = a
                 }
                 return s
             }, m.error = function (a) {
                 throw new Error("Syntax error, unrecognized expression: " + a)
             };
             var n = m.getText = function (a) {
                     var b, c, d = a.nodeType,
                         e = "";
                     if (d) {
                         if (d === 1 || d === 9) {
                             if (typeof a.textContent == "string") return a.textContent;
                             if (typeof a.innerText == "string") return a.innerText.replace(k, "");
                             for (a = a.firstChild; a; a = a.nextSibling) e += n(a)
                         } else if (d === 3 || d === 4) return a.nodeValue
                     } else
                         for (b = 0; c = a[b]; b++) c.nodeType !== 8 && (e += n(c));
                     return e
                 },
                 o = m.selectors = {
                     order: ["ID", "NAME", "TAG"],
                     match: {
                         ID: /#((?:[\w\u00c0-\uFFFF\-]|\\.)+)/,
                         CLASS: /\.((?:[\w\u00c0-\uFFFF\-]|\\.)+)/,
                         NAME: /\[name=['"]*((?:[\w\u00c0-\uFFFF\-]|\\.)+)['"]*\]/,
                         ATTR: /\[\s*((?:[\w\u00c0-\uFFFF\-]|\\.)+)\s*(?:(\S?=)\s*(?:(['"])(.*?)\3|(#?(?:[\w\u00c0-\uFFFF\-]|\\.)*)|)|)\s*\]/,
                         TAG: /^((?:[\w\u00c0-\uFFFF\*\-]|\\.)+)/,
                         CHILD: /:(only|nth|last|first)-child(?:\(\s*(even|odd|(?:[+\-]?\d+|(?:[+\-]?\d*)?n\s*(?:[+\-]\s*\d+)?))\s*\))?/,
                         POS: /:(nth|eq|gt|lt|first|last|even|odd)(?:\((\d*)\))?(?=[^\-]|$)/,
                         PSEUDO: /:((?:[\w\u00c0-\uFFFF\-]|\\.)+)(?:\((['"]?)((?:\([^\)]+\)|[^\(\)]*)+)\2\))?/
                     },
                     leftMatch: {},
                     attrMap: {
                         "class": "className",
                         "for": "htmlFor"
                     },
                     attrHandle: {
                         href: function (a) {
                             return a.getAttribute("href")
                         },
                         type: function (a) {
                             return a.getAttribute("type")
                         }
                     },
                     relative: {
                         "+": function (a, b) {
                             var c = typeof b == "string",
                                 d = c && !l.test(b),
                                 e = c && !d;
                             d && (b = b.toLowerCase());
                             for (var f = 0, g = a.length, h; f < g; f++)
                                 if (h = a[f]) {
                                     while ((h = h.previousSibling) && h.nodeType !== 1);
                                     a[f] = e || h && h.nodeName.toLowerCase() === b ? h || !1 : h === b
                                 }
                             e && m.filter(b, a, !0)
                         },
                         ">": function (a, b) {
                             var c, d = typeof b == "string",
                                 e = 0,
                                 f = a.length;
                             if (d && !l.test(b)) {
                                 b = b.toLowerCase();
                                 for (; e < f; e++) {
                                     c = a[e];
                                     if (c) {
                                         var g = c.parentNode;
                                         a[e] = g.nodeName.toLowerCase() === b ? g : !1
                                     }
                                 }
                             } else {
                                 for (; e < f; e++) c = a[e], c && (a[e] = d ? c.parentNode : c.parentNode === b);
                                 d && m.filter(b, a, !0)
                             }
                         },
                         "": function (a, b, c) {
                             var d, f = e++,
                                 g = x;
                             typeof b == "string" && !l.test(b) && (b = b.toLowerCase(), d = b, g = w), g("parentNode", b, f, a, d, c)
                         },
                         "~": function (a, b, c) {
                             var d, f = e++,
                                 g = x;
                             typeof b == "string" && !l.test(b) && (b = b.toLowerCase(), d = b, g = w), g("previousSibling", b, f, a, d, c)
                         }
                     },
                     find: {
                         ID: function (a, b, c) {
                             if (typeof b.getElementById != "undefined" && !c) {
                                 var d = b.getElementById(a[1]);
                                 return d && d.parentNode ? [d] : []
                             }
                         },
                         NAME: function (a, b) {
                             if (typeof b.getElementsByName != "undefined") {
                                 var c = [],
                                     d = b.getElementsByName(a[1]);
                                 for (var e = 0, f = d.length; e < f; e++) d[e].getAttribute("name") === a[1] && c.push(d[e]);
                                 return c.length === 0 ? null : c
                             }
                         },
                         TAG: function (a, b) {
                             if (typeof b.getElementsByTagName != "undefined") return b.getElementsByTagName(a[1])
                         }
                     },
                     preFilter: {
                         CLASS: function (a, b, c, d, e, f) {
                             a = " " + a[1].replace(j, "") + " ";
                             if (f) return a;
                             for (var g = 0, h;
                                 (h = b[g]) != null; g++) h && (e ^ (h.className && (" " + h.className + " ").replace(/[\t\n\r]/g, " ").indexOf(a) >= 0) ? c || d.push(h) : c && (b[g] = !1));
                             return !1
                         },
                         ID: function (a) {
                             return a[1].replace(j, "")
                         },
                         TAG: function (a, b) {
                             return a[1].replace(j, "").toLowerCase()
                         },
                         CHILD: function (a) {
                             if (a[1] === "nth") {
                                 a[2] || m.error(a[0]), a[2] = a[2].replace(/^\+|\s*/g, "");
                                 var b = /(-?)(\d*)(?:n([+\-]?\d*))?/.exec(a[2] === "even" && "2n" || a[2] === "odd" && "2n+1" || !/\D/.test(a[2]) && "0n+" + a[2] || a[2]);
                                 a[2] = b[1] + (b[2] || 1) - 0, a[3] = b[3] - 0
                             } else a[2] && m.error(a[0]);
                             a[0] = e++;
                             return a
                         },
                         ATTR: function (a, b, c, d, e, f) {
                             var g = a[1] = a[1].replace(j, "");
                             !f && o.attrMap[g] && (a[1] = o.attrMap[g]), a[4] = (a[4] || a[5] || "").replace(j, ""), a[2] === "~=" && (a[4] = " " + a[4] + " ");
                             return a
                         },
                         PSEUDO: function (b, c, d, e, f) {
                             if (b[1] === "not")
                                 if ((a.exec(b[3]) || "").length > 1 || /^\w/.test(b[3])) b[3] = m(b[3], null, null, c);
                                 else {
                                     var g = m.filter(b[3], c, d, !0 ^ f);
                                     d || e.push.apply(e, g);
                                     return !1
                                 }
                             else if (o.match.POS.test(b[0]) || o.match.CHILD.test(b[0])) return !0;
                             return b
                         },
                         POS: function (a) {
                             a.unshift(!0);
                             return a
                         }
                     },
                     filters: {
                         enabled: function (a) {
                             return a.disabled === !1 && a.type !== "hidden"
                         },
                         disabled: function (a) {
                             return a.disabled === !0
                         },
                         checked: function (a) {
                             return a.checked === !0
                         },
                         selected: function (a) {
                             a.parentNode && a.parentNode.selectedIndex;
                             return a.selected === !0
                         },
                         parent: function (a) {
                             return !!a.firstChild
                         },
                         empty: function (a) {
                             return !a.firstChild
                         },
                         has: function (a, b, c) {
                             return !!m(c[3], a).length
                         },
                         header: function (a) {
                             return /h\d/i.test(a.nodeName)
                         },
                         text: function (a) {
                             var b = a.getAttribute("type"),
                                 c = a.type;
                             return a.nodeName.toLowerCase() === "input" && "text" === c && (b === c || b === null)
                         },
                         radio: function (a) {
                             return a.nodeName.toLowerCase() === "input" && "radio" === a.type
                         },
                         checkbox: function (a) {
                             return a.nodeName.toLowerCase() === "input" && "checkbox" === a.type
                         },
                         file: function (a) {
                             return a.nodeName.toLowerCase() === "input" && "file" === a.type
                         },
                         password: function (a) {
                             return a.nodeName.toLowerCase() === "input" && "password" === a.type
                         },
                         submit: function (a) {
                             var b = a.nodeName.toLowerCase();
                             return (b === "input" || b === "button") && "submit" === a.type
                         },
                         image: function (a) {
                             return a.nodeName.toLowerCase() === "input" && "image" === a.type
                         },
                         reset: function (a) {
                             var b = a.nodeName.toLowerCase();
                             return (b === "input" || b === "button") && "reset" === a.type
                         },
                         button: function (a) {
                             var b = a.nodeName.toLowerCase();
                             return b === "input" && "button" === a.type || b === "button"
                         },
                         input: function (a) {
                             return /input|select|textarea|button/i.test(a.nodeName)
                         },
                         focus: function (a) {
                             return a === a.ownerDocument.activeElement
                         }
                     },
                     setFilters: {
                         first: function (a, b) {
                             return b === 0
                         },
                         last: function (a, b, c, d) {
                             return b === d.length - 1
                         },
                         even: function (a, b) {
                             return b % 2 === 0
                         },
                         odd: function (a, b) {
                             return b % 2 === 1
                         },
                         lt: function (a, b, c) {
                             return b < c[3] - 0
                         },
                         gt: function (a, b, c) {
                             return b > c[3] - 0
                         },
                         nth: function (a, b, c) {
                             return c[3] - 0 === b
                         },
                         eq: function (a, b, c) {
                             return c[3] - 0 === b
                         }
                     },
                     filter: {
                         PSEUDO: function (a, b, c, d) {
                             var e = b[1],
                                 f = o.filters[e];
                             if (f) return f(a, c, b, d);
                             if (e === "contains") return (a.textContent || a.innerText || n([a]) || "").indexOf(b[3]) >= 0;
                             if (e === "not") {
                                 var g = b[3];
                                 for (var h = 0, i = g.length; h < i; h++)
                                     if (g[h] === a) return !1;
                                 return !0
                             }
                             m.error(e)
                         },
                         CHILD: function (a, b) {
                             var c, e, f, g, h, i, j, k = b[1],
                                 l = a;
                             switch (k) {
                             case "only":
                             case "first":
                                 while (l = l.previousSibling)
                                     if (l.nodeType === 1) return !1;
                                 if (k === "first") return !0;
                                 l = a;
                             case "last":
                                 while (l = l.nextSibling)
                                     if (l.nodeType === 1) return !1;
                                 return !0;
                             case "nth":
                                 c = b[2], e = b[3];
                                 if (c === 1 && e === 0) return !0;
                                 f = b[0], g = a.parentNode;
                                 if (g && (g[d] !== f || !a.nodeIndex)) {
                                     i = 0;
                                     for (l = g.firstChild; l; l = l.nextSibling) l.nodeType === 1 && (l.nodeIndex = ++i);
                                     g[d] = f
                                 }
                                 j = a.nodeIndex - e;
                                 return c === 0 ? j === 0 : j % c === 0 && j / c >= 0
                             }
                         },
                         ID: function (a, b) {
                             return a.nodeType === 1 && a.getAttribute("id") === b
                         },
                         TAG: function (a, b) {
                             return b === "*" && a.nodeType === 1 || !!a.nodeName && a.nodeName.toLowerCase() === b
                         },
                         CLASS: function (a, b) {
                             return (" " + (a.className || a.getAttribute("class")) + " ").indexOf(b) > -1
                         },
                         ATTR: function (a, b) {
                             var c = b[1],
                                 d = m.attr ? m.attr(a, c) : o.attrHandle[c] ? o.attrHandle[c](a) : a[c] != null ? a[c] : a.getAttribute(c),
                                 e = d + "",
                                 f = b[2],
                                 g = b[4];
                             return d == null ? f === "!=" : !f && m.attr ? d != null : f === "=" ? e === g : f === "*=" ? e.indexOf(g) >= 0 : f === "~=" ? (" " + e + " ").indexOf(g) >= 0 : g ? f === "!=" ? e !== g : f === "^=" ? e.indexOf(g) === 0 : f === "$=" ? e.substr(e.length - g.length) === g : f === "|=" ? e === g || e.substr(0, g.length + 1) === g + "-" : !1 : e && d !== !1
                         },
                         POS: function (a, b, c, d) {
                             var e = b[2],
                                 f = o.setFilters[e];
                             if (f) return f(a, c, b, d)
                         }
                     }
                 },
                 p = o.match.POS,
                 q = function (a, b) {
                     return "\\" + (b - 0 + 1)
                 };
             for (var r in o.match) o.match[r] = new RegExp(o.match[r].source + /(?![^\[]*\])(?![^\(]*\))/.source), o.leftMatch[r] = new RegExp(/(^(?:.|\r|\n)*?)/.source + o.match[r].source.replace(/\\(\d+)/g, q));
             var s = function (a, b) {
                 a = Array.prototype.slice.call(a, 0);
                 if (b) {
                     b.push.apply(b, a);
                     return b
                 }
                 return a
             };
             try {
                 Array.prototype.slice.call(c.documentElement.childNodes, 0)[0].nodeType
             } catch (t) {
                 s = function (a, b) {
                     var c = 0,
                         d = b || [];
                     if (g.call(a) === "[object Array]") Array.prototype.push.apply(d, a);
                     else if (typeof a.length == "number")
                         for (var e = a.length; c < e; c++) d.push(a[c]);
                     else
                         for (; a[c]; c++) d.push(a[c]);
                     return d
                 }
             }
             var u, v;
             c.documentElement.compareDocumentPosition ? u = function (a, b) {
                     if (a === b) {
                         h = !0;
                         return 0
                     }
                     if (!a.compareDocumentPosition || !b.compareDocumentPosition) return a.compareDocumentPosition ? -1 : 1;
                     return a.compareDocumentPosition(b) & 4 ? -1 : 1
                 } : (u = function (a, b) {
                     if (a === b) {
                         h = !0;
                         return 0
                     }
                     if (a.sourceIndex && b.sourceIndex) return a.sourceIndex - b.sourceIndex;
                     var c, d, e = [],
                         f = [],
                         g = a.parentNode,
                         i = b.parentNode,
                         j = g;
                     if (g === i) return v(a, b);
                     if (!g) return -1;
                     if (!i) return 1;
                     while (j) e.unshift(j), j = j.parentNode;
                     j = i;
                     while (j) f.unshift(j), j = j.parentNode;
                     c = e.length, d = f.length;
                     for (var k = 0; k < c && k < d; k++)
                         if (e[k] !== f[k]) return v(e[k], f[k]);
                     return k === c ? v(a, f[k], -1) : v(e[k], b, 1)
                 }, v = function (a, b, c) {
                     if (a === b) return c;
                     var d = a.nextSibling;
                     while (d) {
                         if (d === b) return -1;
                         d = d.nextSibling
                     }
                     return 1
                 }),
                 function () {
                     var a = c.createElement("div"),
                         d = "script" + (new Date).getTime(),
                         e = c.documentElement;
                     a.innerHTML = "<a name='" + d + "'/>", e.insertBefore(a, e.firstChild), c.getElementById(d) && (o.find.ID = function (a, c, d) {
                         if (typeof c.getElementById != "undefined" && !d) {
                             var e = c.getElementById(a[1]);
                             return e ? e.id === a[1] || typeof e.getAttributeNode != "undefined" && e.getAttributeNode("id").nodeValue === a[1] ? [e] : b : []
                         }
                     }, o.filter.ID = function (a, b) {
                         var c = typeof a.getAttributeNode != "undefined" && a.getAttributeNode("id");
                         return a.nodeType === 1 && c && c.nodeValue === b
                     }), e.removeChild(a), e = a = null
                 }(),
                 function () {
                     var a = c.createElement("div");
                     a.appendChild(c.createComment("")), a.getElementsByTagName("*").length > 0 && (o.find.TAG = function (a, b) {
                         var c = b.getElementsByTagName(a[1]);
                         if (a[1] === "*") {
                             var d = [];
                             for (var e = 0; c[e]; e++) c[e].nodeType === 1 && d.push(c[e]);
                             c = d
                         }
                         return c
                     }), a.innerHTML = "<a href='#'></a>", a.firstChild && typeof a.firstChild.getAttribute != "undefined" && a.firstChild.getAttribute("href") !== "#" && (o.attrHandle.href = function (a) {
                         return a.getAttribute("href", 2)
                     }), a = null
                 }(), c.querySelectorAll && function () {
                     var a = m,
                         b = c.createElement("div"),
                         d = "__sizzle__";
                     b.innerHTML = "<p class='TEST'></p>";
                     if (!b.querySelectorAll || b.querySelectorAll(".TEST").length !== 0) {
                         m = function (b, e, f, g) {
                             e = e || c;
                             if (!g && !m.isXML(e)) {
                                 var h = /^(\w+$)|^\.([\w\-]+$)|^#([\w\-]+$)/.exec(b);
                                 if (h && (e.nodeType === 1 || e.nodeType === 9)) {
                                     if (h[1]) return s(e.getElementsByTagName(b), f);
                                     if (h[2] && o.find.CLASS && e.getElementsByClassName) return s(e.getElementsByClassName(h[2]), f)
                                 }
                                 if (e.nodeType === 9) {
                                     if (b === "body" && e.body) return s([e.body], f);
                                     if (h && h[3]) {
                                         var i = e.getElementById(h[3]);
                                         if (!i || !i.parentNode) return s([], f);
                                         if (i.id === h[3]) return s([i], f)
                                     }
                                     try {
                                         return s(e.querySelectorAll(b), f)
                                     } catch (j) {}
                                 } else if (e.nodeType === 1 && e.nodeName.toLowerCase() !== "object") {
                                     var k = e,
                                         l = e.getAttribute("id"),
                                         n = l || d,
                                         p = e.parentNode,
                                         q = /^\s*[+~]/.test(b);
                                     l ? n = n.replace(/'/g, "\\$&") : e.setAttribute("id", n), q && p && (e = e.parentNode);
                                     try {
                                         if (!q || p) return s(e.querySelectorAll("[id='" + n + "'] " + b), f)
                                     } catch (r) {} finally {
                                         l || k.removeAttribute("id")
                                     }
                                 }
                             }
                             return a(b, e, f, g)
                         };
                         for (var e in a) m[e] = a[e];
                         b = null
                     }
                 }(),
                 function () {
                     var a = c.documentElement,
                         b = a.matchesSelector || a.mozMatchesSelector || a.webkitMatchesSelector || a.msMatchesSelector;
                     if (b) {
                         var d = !b.call(c.createElement("div"), "div"),
                             e = !1;
                         try {
                             b.call(c.documentElement, "[test!='']:sizzle")
                         } catch (f) {
                             e = !0
                         }
                         m.matchesSelector = function (a, c) {
                             c = c.replace(/\=\s*([^'"\]]*)\s*\]/g, "='$1']");
                             if (!m.isXML(a)) try {
                                 if (e || !o.match.PSEUDO.test(c) && !/!=/.test(c)) {
                                     var f = b.call(a, c);
                                     if (f || !d || a.document && a.document.nodeType !== 11) return f
                                 }
                             } catch (g) {}
                             return m(c, null, null, [a]).length > 0
                         }
                     }
                 }(),
                 function () {
                     var a = c.createElement("div");
                     a.innerHTML = "<div class='test e'></div><div class='test'></div>";
                     if (!!a.getElementsByClassName && a.getElementsByClassName("e").length !== 0) {
                         a.lastChild.className = "e";
                         if (a.getElementsByClassName("e").length === 1) return;
                         o.order.splice(1, 0, "CLASS"), o.find.CLASS = function (a, b, c) {
                             if (typeof b.getElementsByClassName != "undefined" && !c) return b.getElementsByClassName(a[1])
                         }, a = null
                     }
                 }(), c.documentElement.contains ? m.contains = function (a, b) {
                     return a !== b && (a.contains ? a.contains(b) : !0)
                 } : c.documentElement.compareDocumentPosition ? m.contains = function (a, b) {
                     return !!(a.compareDocumentPosition(b) & 16)
                 } : m.contains = function () {
                     return !1
                 }, m.isXML = function (a) {
                     var b = (a ? a.ownerDocument || a : 0).documentElement;
                     return b ? b.nodeName !== "HTML" : !1
                 };
             var y = function (a, b, c) {
                 var d, e = [],
                     f = "",
                     g = b.nodeType ? [b] : b;
                 while (d = o.match.PSEUDO.exec(a)) f += d[0], a = a.replace(o.match.PSEUDO, "");
                 a = o.relative[a] ? a + "*" : a;
                 for (var h = 0, i = g.length; h < i; h++) m(a, g[h], e, c);
                 return m.filter(f, e)
             };
             m.attr = f.attr, m.selectors.attrMap = {}, f.find = m, f.expr = m.selectors, f.expr[":"] = f.expr.filters, f.unique = m.uniqueSort, f.text = m.getText, f.isXMLDoc = m.isXML, f.contains = m.contains
         }();
     var L = /Until$/,
         M = /^(?:parents|prevUntil|prevAll)/,
         N = /,/,
         O = /^.[^:#\[\.,]*$/,
         P = Array.prototype.slice,
         Q = f.expr.match.POS,
         R = {
             children: !0,
             contents: !0,
             next: !0,
             prev: !0
         };
     f.fn.extend({
         find: function (a) {
             var b = this,
                 c, d;
             if (typeof a != "string") return f(a).filter(function () {
                 for (c = 0, d = b.length; c < d; c++)
                     if (f.contains(b[c], this)) return !0
             });
             var e = this.pushStack("", "find", a),
                 g, h, i;
             for (c = 0, d = this.length; c < d; c++) {
                 g = e.length, f.find(a, this[c], e);
                 if (c > 0)
                     for (h = g; h < e.length; h++)
                         for (i = 0; i < g; i++)
                             if (e[i] === e[h]) {
                                 e.splice(h--, 1);
                                 break
                             }
             }
             return e
         },
         has: function (a) {
             var b = f(a);
             return this.filter(function () {
                 for (var a = 0, c = b.length; a < c; a++)
                     if (f.contains(this, b[a])) return !0
             })
         },
         not: function (a) {
             return this.pushStack(T(this, a, !1), "not", a)
         },
         filter: function (a) {
             return this.pushStack(T(this, a, !0), "filter", a)
         },
         is: function (a) {
             return !!a && (typeof a == "string" ? Q.test(a) ? f(a, this.context).index(this[0]) >= 0 : f.filter(a, this).length > 0 : this.filter(a).length > 0)
         },
         closest: function (a, b) {
             var c = [],
                 d, e, g = this[0];
             if (f.isArray(a)) {
                 var h = 1;
                 while (g && g.ownerDocument && g !== b) {
                     for (d = 0; d < a.length; d++) f(g).is(a[d]) && c.push({
                         selector: a[d],
                         elem: g,
                         level: h
                     });
                     g = g.parentNode, h++
                 }
                 return c
             }
             var i = Q.test(a) || typeof a != "string" ? f(a, b || this.context) : 0;
             for (d = 0, e = this.length; d < e; d++) {
                 g = this[d];
                 while (g) {
                     if (i ? i.index(g) > -1 : f.find.matchesSelector(g, a)) {
                         c.push(g);
                         break
                     }
                     g = g.parentNode;
                     if (!g || !g.ownerDocument || g === b || g.nodeType === 11) break
                 }
             }
             c = c.length > 1 ? f.unique(c) : c;
             return this.pushStack(c, "closest", a)
         },
         index: function (a) {
             if (!a) return this[0] && this[0].parentNode ? this.prevAll().length : -1;
             if (typeof a == "string") return f.inArray(this[0], f(a));
             return f.inArray(a.jquery ? a[0] : a, this)
         },
         add: function (a, b) {
             var c = typeof a == "string" ? f(a, b) : f.makeArray(a && a.nodeType ? [a] : a),
                 d = f.merge(this.get(), c);
             return this.pushStack(S(c[0]) || S(d[0]) ? d : f.unique(d))
         },
         andSelf: function () {
             return this.add(this.prevObject)
         }
     }), f.each({
         parent: function (a) {
             var b = a.parentNode;
             return b && b.nodeType !== 11 ? b : null
         },
         parents: function (a) {
             return f.dir(a, "parentNode")
         },
         parentsUntil: function (a, b, c) {
             return f.dir(a, "parentNode", c)
         },
         next: function (a) {
             return f.nth(a, 2, "nextSibling")
         },
         prev: function (a) {
             return f.nth(a, 2, "previousSibling")
         },
         nextAll: function (a) {
             return f.dir(a, "nextSibling")
         },
         prevAll: function (a) {
             return f.dir(a, "previousSibling")
         },
         nextUntil: function (a, b, c) {
             return f.dir(a, "nextSibling", c)
         },
         prevUntil: function (a, b, c) {
             return f.dir(a, "previousSibling", c)
         },
         siblings: function (a) {
             return f.sibling(a.parentNode.firstChild, a)
         },
         children: function (a) {
             return f.sibling(a.firstChild)
         },
         contents: function (a) {
             return f.nodeName(a, "iframe") ? a.contentDocument || a.contentWindow.document : f.makeArray(a.childNodes)
         }
     }, function (a, b) {
         f.fn[a] = function (c, d) {
             var e = f.map(this, b, c);
             L.test(a) || (d = c), d && typeof d == "string" && (e = f.filter(d, e)), e = this.length > 1 && !R[a] ? f.unique(e) : e, (this.length > 1 || N.test(d)) && M.test(a) && (e = e.reverse());
             return this.pushStack(e, a, P.call(arguments).join(","))
         }
     }), f.extend({
         filter: function (a, b, c) {
             c && (a = ":not(" + a + ")");
             return b.length === 1 ? f.find.matchesSelector(b[0], a) ? [b[0]] : [] : f.find.matches(a, b)
         },
         dir: function (a, c, d) {
             var e = [],
                 g = a[c];
             while (g && g.nodeType !== 9 && (d === b || g.nodeType !== 1 || !f(g).is(d))) g.nodeType === 1 && e.push(g), g = g[c];
             return e
         },
         nth: function (a, b, c, d) {
             b = b || 1;
             var e = 0;
             for (; a; a = a[c])
                 if (a.nodeType === 1 && ++e === b) break;
             return a
         },
         sibling: function (a, b) {
             var c = [];
             for (; a; a = a.nextSibling) a.nodeType === 1 && a !== b && c.push(a);
             return c
         }
     });
     var V = "abbr|article|aside|audio|canvas|datalist|details|figcaption|figure|footer|header|hgroup|mark|meter|nav|output|progress|section|summary|time|video",
         W = / jQuery\d+="(?:\d+|null)"/g,
         X = /^\s+/,
         Y = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/ig,
         Z = /<([\w:]+)/,
         $ = /<tbody/i,
         _ = /<|&#?\w+;/,
         ba = /<(?:script|style)/i,
         bb = /<(?:script|object|embed|option|style)/i,
         bc = new RegExp("<(?:" + V + ")", "i"),
         bd = /checked\s*(?:[^=]|=\s*.checked.)/i,
         be = /\/(java|ecma)script/i,
         bf = /^\s*<!(?:\[CDATA\[|\-\-)/,
         bg = {
             option: [1, "<select multiple='multiple'>", "</select>"],
             legend: [1, "<fieldset>", "</fieldset>"],
             thead: [1, "<table>", "</table>"],
             tr: [2, "<table><tbody>", "</tbody></table>"],
             td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
             col: [2, "<table><tbody></tbody><colgroup>", "</colgroup></table>"],
             area: [1, "<map>", "</map>"],
             _default: [0, "", ""]
         },
         bh = U(c);
     bg.optgroup = bg.option, bg.tbody = bg.tfoot = bg.colgroup = bg.caption = bg.thead, bg.th = bg.td, f.support.htmlSerialize || (bg._default = [1, "div<div>", "</div>"]), f.fn.extend({
         text: function (a) {
             if (f.isFunction(a)) return this.each(function (b) {
                 var c = f(this);
                 c.text(a.call(this, b, c.text()))
             });
             if (typeof a != "object" && a !== b) return this.empty().append((this[0] && this[0].ownerDocument || c).createTextNode(a));
             return f.text(this)
         },
         wrapAll: function (a) {
             if (f.isFunction(a)) return this.each(function (b) {
                 f(this).wrapAll(a.call(this, b))
             });
             if (this[0]) {
                 var b = f(a, this[0].ownerDocument).eq(0).clone(!0);
                 this[0].parentNode && b.insertBefore(this[0]), b.map(function () {
                     var a = this;
                     while (a.firstChild && a.firstChild.nodeType === 1) a = a.firstChild;
                     return a
                 }).append(this)
             }
             return this
         },
         wrapInner: function (a) {
             if (f.isFunction(a)) return this.each(function (b) {
                 f(this).wrapInner(a.call(this, b))
             });
             return this.each(function () {
                 var b = f(this),
                     c = b.contents();
                 c.length ? c.wrapAll(a) : b.append(a)
             })
         },
         wrap: function (a) {
             var b = f.isFunction(a);
             return this.each(function (c) {
                 f(this).wrapAll(b ? a.call(this, c) : a)
             })
         },
         unwrap: function () {
             return this.parent().each(function () {
                 f.nodeName(this, "body") || f(this).replaceWith(this.childNodes)
             }).end()
         },
         append: function () {
             return this.domManip(arguments, !0, function (a) {
                 this.nodeType === 1 && this.appendChild(a)
             })
         },
         prepend: function () {
             return this.domManip(arguments, !0, function (a) {
                 this.nodeType === 1 && this.insertBefore(a, this.firstChild)
             })
         },
         before: function () {
             if (this[0] && this[0].parentNode) return this.domManip(arguments, !1, function (a) {
                 this.parentNode.insertBefore(a, this)
             });
             if (arguments.length) {
                 var a = f.clean(arguments);
                 a.push.apply(a, this.toArray());
                 return this.pushStack(a, "before", arguments)
             }
         },
         after: function () {
             if (this[0] && this[0].parentNode) return this.domManip(arguments, !1, function (a) {
                 this.parentNode.insertBefore(a, this.nextSibling)
             });
             if (arguments.length) {
                 var a = this.pushStack(this, "after", arguments);
                 a.push.apply(a, f.clean(arguments));
                 return a
             }
         },
         remove: function (a, b) {
             for (var c = 0, d;
                 (d = this[c]) != null; c++)
                 if (!a || f.filter(a, [d]).length) !b && d.nodeType === 1 && (f.cleanData(d.getElementsByTagName("*")), f.cleanData([d])), d.parentNode && d.parentNode.removeChild(d);
             return this
         },
         empty: function () {
             for (var a = 0, b;
                 (b = this[a]) != null; a++) {
                 b.nodeType === 1 && f.cleanData(b.getElementsByTagName("*"));
                 while (b.firstChild) b.removeChild(b.firstChild)
             }
             return this
         },
         clone: function (a, b) {
             a = a == null ? !1 : a, b = b == null ? a : b;
             return this.map(function () {
                 return f.clone(this, a, b)
             })
         },
         html: function (a) {
             if (a === b) return this[0] && this[0].nodeType === 1 ? this[0].innerHTML.replace(W, "") : null;
             if (typeof a == "string" && !ba.test(a) && (f.support.leadingWhitespace || !X.test(a)) && !bg[(Z.exec(a) || ["", ""])[1].toLowerCase()]) {
                 a = a.replace(Y, "<$1></$2>");
                 try {
                     for (var c = 0, d = this.length; c < d; c++) this[c].nodeType === 1 && (f.cleanData(this[c].getElementsByTagName("*")), this[c].innerHTML = a)
                 } catch (e) {
                     this.empty().append(a)
                 }
             } else f.isFunction(a) ? this.each(function (b) {
                 var c = f(this);
                 c.html(a.call(this, b, c.html()))
             }) : this.empty().append(a);
             return this
         },
         replaceWith: function (a) {
             if (this[0] && this[0].parentNode) {
                 if (f.isFunction(a)) return this.each(function (b) {
                     var c = f(this),
                         d = c.html();
                     c.replaceWith(a.call(this, b, d))
                 });
                 typeof a != "string" && (a = f(a).detach());
                 return this.each(function () {
                     var b = this.nextSibling,
                         c = this.parentNode;
                     f(this).remove(), b ? f(b).before(a) : f(c).append(a)
                 })
             }
             return this.length ? this.pushStack(f(f.isFunction(a) ? a() : a), "replaceWith", a) : this
         },
         detach: function (a) {
             return this.remove(a, !0)
         },
         domManip: function (a, c, d) {
             var e, g, h, i, j = a[0],
                 k = [];
             if (!f.support.checkClone && arguments.length === 3 && typeof j == "string" && bd.test(j)) return this.each(function () {
                 f(this).domManip(a, c, d, !0)
             });
             if (f.isFunction(j)) return this.each(function (e) {
                 var g = f(this);
                 a[0] = j.call(this, e, c ? g.html() : b), g.domManip(a, c, d)
             });
             if (this[0]) {
                 i = j && j.parentNode, f.support.parentNode && i && i.nodeType === 11 && i.childNodes.length === this.length ? e = {
                     fragment: i
                 } : e = f.buildFragment(a, this, k), h = e.fragment, h.childNodes.length === 1 ? g = h = h.firstChild : g = h.firstChild;
                 if (g) {
                     c = c && f.nodeName(g, "tr");
                     for (var l = 0, m = this.length, n = m - 1; l < m; l++) d.call(c ? bi(this[l], g) : this[l], e.cacheable || m > 1 && l < n ? f.clone(h, !0, !0) : h)
                 }
                 k.length && f.each(k, bp)
             }
             return this
         }
     }), f.buildFragment = function (a, b, d) {
         var e, g, h, i, j = a[0];
         b && b[0] && (i = b[0].ownerDocument || b[0]), i.createDocumentFragment || (i = c), a.length === 1 && typeof j == "string" && j.length < 512 && i === c && j.charAt(0) === "<" && !bb.test(j) && (f.support.checkClone || !bd.test(j)) && (f.support.html5Clone || !bc.test(j)) && (g = !0, h = f.fragments[j], h && h !== 1 && (e = h)), e || (e = i.createDocumentFragment(), f.clean(a, i, e, d)), g && (f.fragments[j] = h ? e : 1);
         return {
             fragment: e,
             cacheable: g
         }
     }, f.fragments = {}, f.each({
         appendTo: "append",
         prependTo: "prepend",
         insertBefore: "before",
         insertAfter: "after",
         replaceAll: "replaceWith"
     }, function (a, b) {
         f.fn[a] = function (c) {
             var d = [],
                 e = f(c),
                 g = this.length === 1 && this[0].parentNode;
             if (g && g.nodeType === 11 && g.childNodes.length === 1 && e.length === 1) {
                 e[b](this[0]);
                 return this
             }
             for (var h = 0, i = e.length; h < i; h++) {
                 var j = (h > 0 ? this.clone(!0) : this).get();
                 f(e[h])[b](j), d = d.concat(j)
             }
             return this.pushStack(d, a, e.selector)
         }
     }), f.extend({
         clone: function (a, b, c) {
             var d, e, g, h = f.support.html5Clone || !bc.test("<" + a.nodeName) ? a.cloneNode(!0) : bo(a);
             if ((!f.support.noCloneEvent || !f.support.noCloneChecked) && (a.nodeType === 1 || a.nodeType === 11) && !f.isXMLDoc(a)) {
                 bk(a, h), d = bl(a), e = bl(h);
                 for (g = 0; d[g]; ++g) e[g] && bk(d[g], e[g])
             }
             if (b) {
                 bj(a, h);
                 if (c) {
                     d = bl(a), e = bl(h);
                     for (g = 0; d[g]; ++g) bj(d[g], e[g])
                 }
             }
             d = e = null;
             return h
         },
         clean: function (a, b, d, e) {
             var g;
             b = b || c, typeof b.createElement == "undefined" && (b = b.ownerDocument || b[0] && b[0].ownerDocument || c);
             var h = [],
                 i;
             for (var j = 0, k;
                 (k = a[j]) != null; j++) {
                 typeof k == "number" && (k += "");
                 if (!k) continue;
                 if (typeof k == "string")
                     if (!_.test(k)) k = b.createTextNode(k);
                     else {
                         k = k.replace(Y, "<$1></$2>");
                         var l = (Z.exec(k) || ["", ""])[1].toLowerCase(),
                             m = bg[l] || bg._default,
                             n = m[0],
                             o = b.createElement("div");
                         b === c ? bh.appendChild(o) : U(b).appendChild(o), o.innerHTML = m[1] + k + m[2];
                         while (n--) o = o.lastChild;
                         if (!f.support.tbody) {
                             var p = $.test(k),
                                 q = l === "table" && !p ? o.firstChild && o.firstChild.childNodes : m[1] === "<table>" && !p ? o.childNodes : [];
                             for (i = q.length - 1; i >= 0; --i) f.nodeName(q[i], "tbody") && !q[i].childNodes.length && q[i].parentNode.removeChild(q[i])
                         }!f.support.leadingWhitespace && X.test(k) && o.insertBefore(b.createTextNode(X.exec(k)[0]), o.firstChild), k = o.childNodes
                     }
                 var r;
                 if (!f.support.appendChecked)
                     if (k[0] && typeof (r = k.length) == "number")
                         for (i = 0; i < r; i++) bn(k[i]);
                     else bn(k);
                 k.nodeType ? h.push(k) : h = f.merge(h, k)
             }
             if (d) {
                 g = function (a) {
                     return !a.type || be.test(a.type)
                 };
                 for (j = 0; h[j]; j++)
                     if (e && f.nodeName(h[j], "script") && (!h[j].type || h[j].type.toLowerCase() === "text/javascript")) e.push(h[j].parentNode ? h[j].parentNode.removeChild(h[j]) : h[j]);
                     else {
                         if (h[j].nodeType === 1) {
                             var s = f.grep(h[j].getElementsByTagName("script"), g);
                             h.splice.apply(h, [j + 1, 0].concat(s))
                         }
                         d.appendChild(h[j])
                     }
             }
             return h
         },
         cleanData: function (a) {
             var b, c, d = f.cache,
                 e = f.event.special,
                 g = f.support.deleteExpando;
             for (var h = 0, i;
                 (i = a[h]) != null; h++) {
                 if (i.nodeName && f.noData[i.nodeName.toLowerCase()]) continue;
                 c = i[f.expando];
                 if (c) {
                     b = d[c];
                     if (b && b.events) {
                         for (var j in b.events) e[j] ? f.event.remove(i, j) : f.removeEvent(i, j, b.handle);
                         b.handle && (b.handle.elem = null)
                     }
                     g ? delete i[f.expando] : i.removeAttribute && i.removeAttribute(f.expando), delete d[c]
                 }
             }
         }
     });
     var bq = /alpha\([^)]*\)/i,
         br = /opacity=([^)]*)/,
         bs = /([A-Z]|^ms)/g,
         bt = /^-?\d+(?:px)?$/i,
         bu = /^-?\d/,
         bv = /^([\-+])=([\-+.\de]+)/,
         bw = {
             position: "absolute",
             visibility: "hidden",
             display: "block"
         },
         bx = ["Left", "Right"],
         by = ["Top", "Bottom"],
         bz, bA, bB;
     f.fn.css = function (a, c) {
         if (arguments.length === 2 && c === b) return this;
         return f.access(this, a, c, !0, function (a, c, d) {
             return d !== b ? f.style(a, c, d) : f.css(a, c)
         })
     }, f.extend({
         cssHooks: {
             opacity: {
                 get: function (a, b) {
                     if (b) {
                         var c = bz(a, "opacity", "opacity");
                         return c === "" ? "1" : c
                     }
                     return a.style.opacity
                 }
             }
         },
         cssNumber: {
             fillOpacity: !0,
             fontWeight: !0,
             lineHeight: !0,
             opacity: !0,
             orphans: !0,
             widows: !0,
             zIndex: !0,
             zoom: !0
         },
         cssProps: {
             "float": f.support.cssFloat ? "cssFloat" : "styleFloat"
         },
         style: function (a, c, d, e) {
             if (!!a && a.nodeType !== 3 && a.nodeType !== 8 && !!a.style) {
                 var g, h, i = f.camelCase(c),
                     j = a.style,
                     k = f.cssHooks[i];
                 c = f.cssProps[i] || i;
                 if (d === b) {
                     if (k && "get" in k && (g = k.get(a, !1, e)) !== b) return g;
                     return j[c]
                 }
                 h = typeof d, h === "string" && (g = bv.exec(d)) && (d = +(g[1] + 1) * +g[2] + parseFloat(f.css(a, c)), h = "number");
                 if (d == null || h === "number" && isNaN(d)) return;
                 h === "number" && !f.cssNumber[i] && (d += "px");
                 if (!k || !("set" in k) || (d = k.set(a, d)) !== b) try {
                     j[c] = d
                 } catch (l) {}
             }
         },
         css: function (a, c, d) {
             var e, g;
             c = f.camelCase(c), g = f.cssHooks[c], c = f.cssProps[c] || c, c === "cssFloat" && (c = "float");
             if (g && "get" in g && (e = g.get(a, !0, d)) !== b) return e;
             if (bz) return bz(a, c)
         },
         swap: function (a, b, c) {
             var d = {};
             for (var e in b) d[e] = a.style[e], a.style[e] = b[e];
             c.call(a);
             for (e in b) a.style[e] = d[e]
         }
     }), f.curCSS = f.css, f.each(["height", "width"], function (a, b) {
         f.cssHooks[b] = {
             get: function (a, c, d) {
                 var e;
                 if (c) {
                     if (a.offsetWidth !== 0) return bC(a, b, d);
                     f.swap(a, bw, function () {
                         e = bC(a, b, d)
                     });
                     return e
                 }
             },
             set: function (a, b) {
                 if (!bt.test(b)) return b;
                 b = parseFloat(b);
                 if (b >= 0) return b + "px"
             }
         }
     }), f.support.opacity || (f.cssHooks.opacity = {
         get: function (a, b) {
             return br.test((b && a.currentStyle ? a.currentStyle.filter : a.style.filter) || "") ? parseFloat(RegExp.$1) / 100 + "" : b ? "1" : ""
         },
         set: function (a, b) {
             var c = a.style,
                 d = a.currentStyle,
                 e = f.isNumeric(b) ? "alpha(opacity=" + b * 100 + ")" : "",
                 g = d && d.filter || c.filter || "";
             c.zoom = 1;
             if (b >= 1 && f.trim(g.replace(bq, "")) === "") {
                 c.removeAttribute("filter");
                 if (d && !d.filter) return
             }
             c.filter = bq.test(g) ? g.replace(bq, e) : g + " " + e
         }
     }), f(function () {
         f.support.reliableMarginRight || (f.cssHooks.marginRight = {
             get: function (a, b) {
                 var c;
                 f.swap(a, {
                     display: "inline-block"
                 }, function () {
                     b ? c = bz(a, "margin-right", "marginRight") : c = a.style.marginRight
                 });
                 return c
             }
         })
     }), c.defaultView && c.defaultView.getComputedStyle && (bA = function (a, b) {
         var c, d, e;
         b = b.replace(bs, "-$1").toLowerCase(), (d = a.ownerDocument.defaultView) && (e = d.getComputedStyle(a, null)) && (c = e.getPropertyValue(b), c === "" && !f.contains(a.ownerDocument.documentElement, a) && (c = f.style(a, b)));
         return c
     }), c.documentElement.currentStyle && (bB = function (a, b) {
         var c, d, e, f = a.currentStyle && a.currentStyle[b],
             g = a.style;
         f === null && g && (e = g[b]) && (f = e), !bt.test(f) && bu.test(f) && (c = g.left, d = a.runtimeStyle && a.runtimeStyle.left, d && (a.runtimeStyle.left = a.currentStyle.left), g.left = b === "fontSize" ? "1em" : f || 0, f = g.pixelLeft + "px", g.left = c, d && (a.runtimeStyle.left = d));
         return f === "" ? "auto" : f
     }), bz = bA || bB, f.expr && f.expr.filters && (f.expr.filters.hidden = function (a) {
         var b = a.offsetWidth,
             c = a.offsetHeight;
         return b === 0 && c === 0 || !f.support.reliableHiddenOffsets && (a.style && a.style.display || f.css(a, "display")) === "none"
     }, f.expr.filters.visible = function (a) {
         return !f.expr.filters.hidden(a)
     });
     var bD = /%20/g,
         bE = /\[\]$/,
         bF = /\r?\n/g,
         bG = /#.*$/,
         bH = /^(.*?):[ \t]*([^\r\n]*)\r?$/mg,
         bI = /^(?:color|date|datetime|datetime-local|email|hidden|month|number|password|range|search|tel|text|time|url|week)$/i,
         bJ = /^(?:about|app|app\-storage|.+\-extension|file|res|widget):$/,
         bK = /^(?:GET|HEAD)$/,
         bL = /^\/\//,
         bM = /\?/,
         bN = /<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/gi,
         bO = /^(?:select|textarea)/i,
         bP = /\s+/,
         bQ = /([?&])_=[^&]*/,
         bR = /^([\w\+\.\-]+:)(?:\/\/([^\/?#:]*)(?::(\d+))?)?/,
         bS = f.fn.load,
         bT = {},
         bU = {},
         bV, bW, bX = ["*/"] + ["*"];
     try {
         bV = e.href
     } catch (bY) {
         bV = c.createElement("a"), bV.href = "", bV = bV.href
     }
     bW = bR.exec(bV.toLowerCase()) || [], f.fn.extend({
         load: function (a, c, d) {
             if (typeof a != "string" && bS) return bS.apply(this, arguments);
             if (!this.length) return this;
             var e = a.indexOf(" ");
             if (e >= 0) {
                 var g = a.slice(e, a.length);
                 a = a.slice(0, e)
             }
             var h = "GET";
             c && (f.isFunction(c) ? (d = c, c = b) : typeof c == "object" && (c = f.param(c, f.ajaxSettings.traditional), h = "POST"));
             var i = this;
             f.ajax({
                 url: a,
                 type: h,
                 dataType: "html",
                 data: c,
                 complete: function (a, b, c) {
                     c = a.responseText, a.isResolved() && (a.done(function (a) {
                         c = a
                     }), i.html(g ? f("<div>").append(c.replace(bN, "")).find(g) : c)), d && i.each(d, [c, b, a])
                 }
             });
             return this
         },
         serialize: function () {
             return f.param(this.serializeArray())
         },
         serializeArray: function () {
             return this.map(function () {
                 return this.elements ? f.makeArray(this.elements) : this
             }).filter(function () {
                 return this.name && !this.disabled && (this.checked || bO.test(this.nodeName) || bI.test(this.type))
             }).map(function (a, b) {
                 var c = f(this).val();
                 return c == null ? null : f.isArray(c) ? f.map(c, function (a, c) {
                     return {
                         name: b.name,
                         value: a.replace(bF, "\r\n")
                     }
                 }) : {
                     name: b.name,
                     value: c.replace(bF, "\r\n")
                 }
             }).get()
         }
     }), f.each("ajaxStart ajaxStop ajaxComplete ajaxError ajaxSuccess ajaxSend".split(" "), function (a, b) {
         f.fn[b] = function (a) {
             return this.on(b, a)
         }
     }), f.each(["get", "post"], function (a, c) {
         f[c] = function (a, d, e, g) {
             f.isFunction(d) && (g = g || e, e = d, d = b);
             return f.ajax({
                 type: c,
                 url: a,
                 data: d,
                 success: e,
                 dataType: g
             })
         }
     }), f.extend({
         getScript: function (a, c) {
             return f.get(a, b, c, "script")
         },
         getJSON: function (a, b, c) {
             return f.get(a, b, c, "json")
         },
         ajaxSetup: function (a, b) {
             b ? b_(a, f.ajaxSettings) : (b = a, a = f.ajaxSettings), b_(a, b);
             return a
         },
         ajaxSettings: {
             url: bV,
             isLocal: bJ.test(bW[1]),
             global: !0,
             type: "GET",
             contentType: "application/x-www-form-urlencoded",
             processData: !0,
             async: !0,
             accepts: {
                 xml: "application/xml, text/xml",
                 html: "text/html",
                 text: "text/plain",
                 json: "application/json, text/javascript",
                 "*": bX
             },
             contents: {
                 xml: /xml/,
                 html: /html/,
                 json: /json/
             },
             responseFields: {
                 xml: "responseXML",
                 text: "responseText"
             },
             converters: {
                 "* text": a.String,
                 "text html": !0,
                 "text json": f.parseJSON,
                 "text xml": f.parseXML
             },
             flatOptions: {
                 context: !0,
                 url: !0
             }
         },
         ajaxPrefilter: bZ(bT),
         ajaxTransport: bZ(bU),
         ajax: function (a, c) {
             function w(a, c, l, m) {
                 if (s !== 2) {
                     s = 2, q && clearTimeout(q), p = b, n = m || "", v.readyState = a > 0 ? 4 : 0;
                     var o, r, u, w = c,
                         x = l ? cb(d, v, l) : b,
                         y, z;
                     if (a >= 200 && a < 300 || a === 304) {
                         if (d.ifModified) {
                             if (y = v.getResponseHeader("Last-Modified")) f.lastModified[k] = y;
                             if (z = v.getResponseHeader("Etag")) f.etag[k] = z
                         }
                         if (a === 304) w = "notmodified", o = !0;
                         else try {
                             r = cc(d, x), w = "success", o = !0
                         } catch (A) {
                             w = "parsererror", u = A
                         }
                     } else {
                         u = w;
                         if (!w || a) w = "error", a < 0 && (a = 0)
                     }
                     v.status = a, v.statusText = "" + (c || w), o ? h.resolveWith(e, [r, w, v]) : h.rejectWith(e, [v, w, u]), v.statusCode(j), j = b, t && g.trigger("ajax" + (o ? "Success" : "Error"), [v, d, o ? r : u]), i.fireWith(e, [v, w]), t && (g.trigger("ajaxComplete", [v, d]), --f.active || f.event.trigger("ajaxStop"))
                 }
             }
             typeof a == "object" && (c = a, a = b), c = c || {};
             var d = f.ajaxSetup({}, c),
                 e = d.context || d,
                 g = e !== d && (e.nodeType || e instanceof f) ? f(e) : f.event,
                 h = f.Deferred(),
                 i = f.Callbacks("once memory"),
                 j = d.statusCode || {},
                 k, l = {},
                 m = {},
                 n, o, p, q, r, s = 0,
                 t, u, v = {
                     readyState: 0,
                     setRequestHeader: function (a, b) {
                         if (!s) {
                             var c = a.toLowerCase();
                             a = m[c] = m[c] || a, l[a] = b
                         }
                         return this
                     },
                     getAllResponseHeaders: function () {
                         return s === 2 ? n : null
                     },
                     getResponseHeader: function (a) {
                         var c;
                         if (s === 2) {
                             if (!o) {
                                 o = {};
                                 while (c = bH.exec(n)) o[c[1].toLowerCase()] = c[2]
                             }
                             c = o[a.toLowerCase()]
                         }
                         return c === b ? null : c
                     },
                     overrideMimeType: function (a) {
                         s || (d.mimeType = a);
                         return this
                     },
                     abort: function (a) {
                         a = a || "abort", p && p.abort(a), w(0, a);
                         return this
                     }
                 };
             h.promise(v), v.success = v.done, v.error = v.fail, v.complete = i.add, v.statusCode = function (a) {
                 if (a) {
                     var b;
                     if (s < 2)
                         for (b in a) j[b] = [j[b], a[b]];
                     else b = a[v.status], v.then(b, b)
                 }
                 return this
             }, d.url = ((a || d.url) + "").replace(bG, "").replace(bL, bW[1] + "//"), d.dataTypes = f.trim(d.dataType || "*").toLowerCase().split(bP), d.crossDomain == null && (r = bR.exec(d.url.toLowerCase()), d.crossDomain = !(!r || r[1] == bW[1] && r[2] == bW[2] && (r[3] || (r[1] === "http:" ? 80 : 443)) == (bW[3] || (bW[1] === "http:" ? 80 : 443)))), d.data && d.processData && typeof d.data != "string" && (d.data = f.param(d.data, d.traditional)), b$(bT, d, c, v);
             if (s === 2) return !1;
             t = d.global, d.type = d.type.toUpperCase(), d.hasContent = !bK.test(d.type), t && f.active++ === 0 && f.event.trigger("ajaxStart");
             if (!d.hasContent) {
                 d.data && (d.url += (bM.test(d.url) ? "&" : "?") + d.data, delete d.data), k = d.url;
                 if (d.cache === !1) {
                     var x = f.now(),
                         y = d.url.replace(bQ, "$1_=" + x);
                     d.url = y + (y === d.url ? (bM.test(d.url) ? "&" : "?") + "_=" + x : "")
                 }
             }(d.data && d.hasContent && d.contentType !== !1 || c.contentType) && v.setRequestHeader("Content-Type", d.contentType), d.ifModified && (k = k || d.url, f.lastModified[k] && v.setRequestHeader("If-Modified-Since", f.lastModified[k]), f.etag[k] && v.setRequestHeader("If-None-Match", f.etag[k])), v.setRequestHeader("Accept", d.dataTypes[0] && d.accepts[d.dataTypes[0]] ? d.accepts[d.dataTypes[0]] + (d.dataTypes[0] !== "*" ? ", " + bX + "; q=0.01" : "") : d.accepts["*"]);
             for (u in d.headers) v.setRequestHeader(u, d.headers[u]);
             if (d.beforeSend && (d.beforeSend.call(e, v, d) === !1 || s === 2)) {
                 v.abort();
                 return !1
             }
             for (u in {
                     success: 1,
                     error: 1,
                     complete: 1
                 }) v[u](d[u]);
             p = b$(bU, d, c, v);
             if (!p) w(-1, "No Transport");
             else {
                 v.readyState = 1, t && g.trigger("ajaxSend", [v, d]), d.async && d.timeout > 0 && (q = setTimeout(function () {
                     v.abort("timeout")
                 }, d.timeout));
                 try {
                     s = 1, p.send(l, w)
                 } catch (z) {
                     if (s < 2) w(-1, z);
                     else throw z
                 }
             }
             return v
         },
         param: function (a, c) {
             var d = [],
                 e = function (a, b) {
                     b = f.isFunction(b) ? b() : b, d[d.length] = encodeURIComponent(a) + "=" + encodeURIComponent(b)
                 };
             c === b && (c = f.ajaxSettings.traditional);
             if (f.isArray(a) || a.jquery && !f.isPlainObject(a)) f.each(a, function () {
                 e(this.name, this.value)
             });
             else
                 for (var g in a) ca(g, a[g], c, e);
             return d.join("&").replace(bD, "+")
         }
     }), f.extend({
         active: 0,
         lastModified: {},
         etag: {}
     });
     var cd = f.now(),
         ce = /(\=)\?(&|$)|\?\?/i;
     f.ajaxSetup({
         jsonp: "callback",
         jsonpCallback: function () {
             return f.expando + "_" + cd++
         }
     }), f.ajaxPrefilter("json jsonp", function (b, c, d) {
         var e = b.contentType === "application/x-www-form-urlencoded" && typeof b.data == "string";
         if (b.dataTypes[0] === "jsonp" || b.jsonp !== !1 && (ce.test(b.url) || e && ce.test(b.data))) {
             var g, h = b.jsonpCallback = f.isFunction(b.jsonpCallback) ? b.jsonpCallback() : b.jsonpCallback,
                 i = a[h],
                 j = b.url,
                 k = b.data,
                 l = "$1" + h + "$2";
             b.jsonp !== !1 && (j = j.replace(ce, l), b.url === j && (e && (k = k.replace(ce, l)), b.data === k && (j += (/\?/.test(j) ? "&" : "?") + b.jsonp + "=" + h))), b.url = j, b.data = k, a[h] = function (a) {
                 g = [a]
             }, d.always(function () {
                 a[h] = i, g && f.isFunction(i) && a[h](g[0])
             }), b.converters["script json"] = function () {
                 g || f.error(h + " was not called");
                 return g[0]
             }, b.dataTypes[0] = "json";
             return "script"
         }
     }), f.ajaxSetup({
         accepts: {
             script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"
         },
         contents: {
             script: /javascript|ecmascript/
         },
         converters: {
             "text script": function (a) {
                 f.globalEval(a);
                 return a
             }
         }
     }), f.ajaxPrefilter("script", function (a) {
         a.cache === b && (a.cache = !1), a.crossDomain && (a.type = "GET", a.global = !1)
     }), f.ajaxTransport("script", function (a) {
         if (a.crossDomain) {
             var d, e = c.head || c.getElementsByTagName("head")[0] || c.documentElement;
             return {
                 send: function (f, g) {
                     d = c.createElement("script"), d.async = "async", a.scriptCharset && (d.charset = a.scriptCharset), d.src = a.url, d.onload = d.onreadystatechange = function (a, c) {
                         if (c || !d.readyState || /loaded|complete/.test(d.readyState)) d.onload = d.onreadystatechange = null, e && d.parentNode && e.removeChild(d), d = b, c || g(200, "success")
                     }, e.insertBefore(d, e.firstChild)
                 },
                 abort: function () {
                     d && d.onload(0, 1)
                 }
             }
         }
     });
     var cf = a.ActiveXObject ? function () {
             for (var a in ch) ch[a](0, 1)
         } : !1,
         cg = 0,
         ch;
     f.ajaxSettings.xhr = a.ActiveXObject ? function () {
             return !this.isLocal && ci() || cj()
         } : ci,
         function (a) {
             f.extend(f.support, {
                 ajax: !!a,
                 cors: !!a && "withCredentials" in a
             })
         }(f.ajaxSettings.xhr()), f.support.ajax && f.ajaxTransport(function (c) {
             if (!c.crossDomain || f.support.cors) {
                 var d;
                 return {
                     send: function (e, g) {
                         var h = c.xhr(),
                             i, j;
                         c.username ? h.open(c.type, c.url, c.async, c.username, c.password) : h.open(c.type, c.url, c.async);
                         if (c.xhrFields)
                             for (j in c.xhrFields) h[j] = c.xhrFields[j];
                         c.mimeType && h.overrideMimeType && h.overrideMimeType(c.mimeType), !c.crossDomain && !e["X-Requested-With"] && (e["X-Requested-With"] = "XMLHttpRequest");
                         try {
                             for (j in e) h.setRequestHeader(j, e[j])
                         } catch (k) {}
                         h.send(c.hasContent && c.data || null), d = function (a, e) {
                             var j, k, l, m, n;
                             try {
                                 if (d && (e || h.readyState === 4)) {
                                     d = b, i && (h.onreadystatechange = f.noop, cf && delete ch[i]);
                                     if (e) h.readyState !== 4 && h.abort();
                                     else {
                                         j = h.status, l = h.getAllResponseHeaders(), m = {}, n = h.responseXML, n && n.documentElement && (m.xml = n), m.text = h.responseText;
                                         try {
                                             k = h.statusText
                                         } catch (o) {
                                             k = ""
                                         }!j && c.isLocal && !c.crossDomain ? j = m.text ? 200 : 404 : j === 1223 && (j = 204)
                                     }
                                 }
                             } catch (p) {
                                 e || g(-1, p)
                             }
                             m && g(j, k, m, l)
                         }, !c.async || h.readyState === 4 ? d() : (i = ++cg, cf && (ch || (ch = {}, f(a).unload(cf)), ch[i] = d), h.onreadystatechange = d)
                     },
                     abort: function () {
                         d && d(0, 1)
                     }
                 }
             }
         });
     var ck = {},
         cl, cm, cn = /^(?:toggle|show|hide)$/,
         co = /^([+\-]=)?([\d+.\-]+)([a-z%]*)$/i,
         cp, cq = [
             ["height", "marginTop", "marginBottom", "paddingTop", "paddingBottom"],
             ["width", "marginLeft", "marginRight", "paddingLeft", "paddingRight"],
             ["opacity"]
         ],
         cr;
     f.fn.extend({
         show: function (a, b, c) {
             var d, e;
             if (a || a === 0) return this.animate(cu("show", 3), a, b, c);
             for (var g = 0, h = this.length; g < h; g++) d = this[g], d.style && (e = d.style.display, !f._data(d, "olddisplay") && e === "none" && (e = d.style.display = ""), e === "" && f.css(d, "display") === "none" && f._data(d, "olddisplay", cv(d.nodeName)));
             for (g = 0; g < h; g++) {
                 d = this[g];
                 if (d.style) {
                     e = d.style.display;
                     if (e === "" || e === "none") d.style.display = f._data(d, "olddisplay") || ""
                 }
             }
             return this
         },
         hide: function (a, b, c) {
             if (a || a === 0) return this.animate(cu("hide", 3), a, b, c);
             var d, e, g = 0,
                 h = this.length;
             for (; g < h; g++) d = this[g], d.style && (e = f.css(d, "display"), e !== "none" && !f._data(d, "olddisplay") && f._data(d, "olddisplay", e));
             for (g = 0; g < h; g++) this[g].style && (this[g].style.display = "none");
             return this
         },
         _toggle: f.fn.toggle,
         toggle: function (a, b, c) {
             var d = typeof a == "boolean";
             f.isFunction(a) && f.isFunction(b) ? this._toggle.apply(this, arguments) : a == null || d ? this.each(function () {
                 var b = d ? a : f(this).is(":hidden");
                 f(this)[b ? "show" : "hide"]()
             }) : this.animate(cu("toggle", 3), a, b, c);
             return this
         },
         fadeTo: function (a, b, c, d) {
             return this.filter(":hidden").css("opacity", 0).show().end().animate({
                 opacity: b
             }, a, c, d)
         },
         animate: function (a, b, c, d) {
             function g() {
                 e.queue === !1 && f._mark(this);
                 var b = f.extend({}, e),
                     c = this.nodeType === 1,
                     d = c && f(this).is(":hidden"),
                     g, h, i, j, k, l, m, n, o;
                 b.animatedProperties = {};
                 for (i in a) {
                     g = f.camelCase(i), i !== g && (a[g] = a[i], delete a[i]), h = a[g], f.isArray(h) ? (b.animatedProperties[g] = h[1], h = a[g] = h[0]) : b.animatedProperties[g] = b.specialEasing && b.specialEasing[g] || b.easing || "swing";
                     if (h === "hide" && d || h === "show" && !d) return b.complete.call(this);
                     c && (g === "height" || g === "width") && (b.overflow = [this.style.overflow, this.style.overflowX, this.style.overflowY], f.css(this, "display") === "inline" && f.css(this, "float") === "none" && (!f.support.inlineBlockNeedsLayout || cv(this.nodeName) === "inline" ? this.style.display = "inline-block" : this.style.zoom = 1))
                 }
                 b.overflow != null && (this.style.overflow = "hidden");
                 for (i in a) j = new f.fx(this, b, i), h = a[i], cn.test(h) ? (o = f._data(this, "toggle" + i) || (h === "toggle" ? d ? "show" : "hide" : 0), o ? (f._data(this, "toggle" + i, o === "show" ? "hide" : "show"), j[o]()) : j[h]()) : (k = co.exec(h), l = j.cur(), k ? (m = parseFloat(k[2]), n = k[3] || (f.cssNumber[i] ? "" : "px"), n !== "px" && (f.style(this, i, (m || 1) + n), l = (m || 1) / j.cur() * l, f.style(this, i, l + n)), k[1] && (m = (k[1] === "-=" ? -1 : 1) * m + l), j.custom(l, m, n)) : j.custom(l, h, ""));
                 return !0
             }
             var e = f.speed(b, c, d);
             if (f.isEmptyObject(a)) return this.each(e.complete, [!1]);
             a = f.extend({}, a);
             return e.queue === !1 ? this.each(g) : this.queue(e.queue, g)
         },
         stop: function (a, c, d) {
             typeof a != "string" && (d = c, c = a, a = b), c && a !== !1 && this.queue(a || "fx", []);
             return this.each(function () {
                 function h(a, b, c) {
                     var e = b[c];
                     f.removeData(a, c, !0), e.stop(d)
                 }
                 var b, c = !1,
                     e = f.timers,
                     g = f._data(this);
                 d || f._unmark(!0, this);
                 if (a == null)
                     for (b in g) g[b] && g[b].stop && b.indexOf(".run") === b.length - 4 && h(this, g, b);
                 else g[b = a + ".run"] && g[b].stop && h(this, g, b);
                 for (b = e.length; b--;) e[b].elem === this && (a == null || e[b].queue === a) && (d ? e[b](!0) : e[b].saveState(), c = !0, e.splice(b, 1));
                 (!d || !c) && f.dequeue(this, a)
             })
         }
     }), f.each({
         slideDown: cu("show", 1),
         slideUp: cu("hide", 1),
         slideToggle: cu("toggle", 1),
         fadeIn: {
             opacity: "show"
         },
         fadeOut: {
             opacity: "hide"
         },
         fadeToggle: {
             opacity: "toggle"
         }
     }, function (a, b) {
         f.fn[a] = function (a, c, d) {
             return this.animate(b, a, c, d)
         }
     }), f.extend({
         speed: function (a, b, c) {
             var d = a && typeof a == "object" ? f.extend({}, a) : {
                 complete: c || !c && b || f.isFunction(a) && a,
                 duration: a,
                 easing: c && b || b && !f.isFunction(b) && b
             };
             d.duration = f.fx.off ? 0 : typeof d.duration == "number" ? d.duration : d.duration in f.fx.speeds ? f.fx.speeds[d.duration] : f.fx.speeds._default;
             if (d.queue == null || d.queue === !0) d.queue = "fx";
             d.old = d.complete, d.complete = function (a) {
                 f.isFunction(d.old) && d.old.call(this), d.queue ? f.dequeue(this, d.queue) : a !== !1 && f._unmark(this)
             };
             return d
         },
         easing: {
             linear: function (a, b, c, d) {
                 return c + d * a
             },
             swing: function (a, b, c, d) {
                 return (-Math.cos(a * Math.PI) / 2 + .5) * d + c
             }
         },
         timers: [],
         fx: function (a, b, c) {
             this.options = b, this.elem = a, this.prop = c, b.orig = b.orig || {}
         }
     }), f.fx.prototype = {
         update: function () {
             this.options.step && this.options.step.call(this.elem, this.now, this), (f.fx.step[this.prop] || f.fx.step._default)(this)
         },
         cur: function () {
             if (this.elem[this.prop] != null && (!this.elem.style || this.elem.style[this.prop] == null)) return this.elem[this.prop];
             var a, b = f.css(this.elem, this.prop);
             return isNaN(a = parseFloat(b)) ? !b || b === "auto" ? 0 : b : a
         },
         custom: function (a, c, d) {
             function h(a) {
                 return e.step(a)
             }
             var e = this,
                 g = f.fx;
             this.startTime = cr || cs(), this.end = c, this.now = this.start = a, this.pos = this.state = 0, this.unit = d || this.unit || (f.cssNumber[this.prop] ? "" : "px"), h.queue = this.options.queue, h.elem = this.elem, h.saveState = function () {
                 e.options.hide && f._data(e.elem, "fxshow" + e.prop) === b && f._data(e.elem, "fxshow" + e.prop, e.start)
             }, h() && f.timers.push(h) && !cp && (cp = setInterval(g.tick, g.interval))
         },
         show: function () {
             var a = f._data(this.elem, "fxshow" + this.prop);
             this.options.orig[this.prop] = a || f.style(this.elem, this.prop), this.options.show = !0, a !== b ? this.custom(this.cur(), a) : this.custom(this.prop === "width" || this.prop === "height" ? 1 : 0, this.cur()), f(this.elem).show()
         },
         hide: function () {
             this.options.orig[this.prop] = f._data(this.elem, "fxshow" + this.prop) || f.style(this.elem, this.prop), this.options.hide = !0, this.custom(this.cur(), 0)
         },
         step: function (a) {
             var b, c, d, e = cr || cs(),
                 g = !0,
                 h = this.elem,
                 i = this.options;
             if (a || e >= i.duration + this.startTime) {
                 this.now = this.end, this.pos = this.state = 1, this.update(), i.animatedProperties[this.prop] = !0;
                 for (b in i.animatedProperties) i.animatedProperties[b] !== !0 && (g = !1);
                 if (g) {
                     i.overflow != null && !f.support.shrinkWrapBlocks && f.each(["", "X", "Y"], function (a, b) {
                         h.style["overflow" + b] = i.overflow[a]
                     }), i.hide && f(h).hide();
                     if (i.hide || i.show)
                         for (b in i.animatedProperties) f.style(h, b, i.orig[b]), f.removeData(h, "fxshow" + b, !0), f.removeData(h, "toggle" + b, !0);
                     d = i.complete, d && (i.complete = !1, d.call(h))
                 }
                 return !1
             }
             i.duration == Infinity ? this.now = e : (c = e - this.startTime, this.state = c / i.duration, this.pos = f.easing[i.animatedProperties[this.prop]](this.state, c, 0, 1, i.duration), this.now = this.start + (this.end - this.start) * this.pos), this.update();
             return !0
         }
     }, f.extend(f.fx, {
         tick: function () {
             var a, b = f.timers,
                 c = 0;
             for (; c < b.length; c++) a = b[c], !a() && b[c] === a && b.splice(c--, 1);
             b.length || f.fx.stop()
         },
         interval: 13,
         stop: function () {
             clearInterval(cp), cp = null
         },
         speeds: {
             slow: 600,
             fast: 200,
             _default: 400
         },
         step: {
             opacity: function (a) {
                 f.style(a.elem, "opacity", a.now)
             },
             _default: function (a) {
                 a.elem.style && a.elem.style[a.prop] != null ? a.elem.style[a.prop] = a.now + a.unit : a.elem[a.prop] = a.now
             }
         }
     }), f.each(["width", "height"], function (a, b) {
         f.fx.step[b] = function (a) {
             f.style(a.elem, b, Math.max(0, a.now) + a.unit)
         }
     }), f.expr && f.expr.filters && (f.expr.filters.animated = function (a) {
         return f.grep(f.timers, function (b) {
             return a === b.elem
         }).length
     });
     var cw = /^t(?:able|d|h)$/i,
         cx = /^(?:body|html)$/i;
     "getBoundingClientRect" in c.documentElement ? f.fn.offset = function (a) {
         var b = this[0],
             c;
         if (a) return this.each(function (b) {
             f.offset.setOffset(this, a, b)
         });
         if (!b || !b.ownerDocument) return null;
         if (b === b.ownerDocument.body) return f.offset.bodyOffset(b);
         try {
             c = b.getBoundingClientRect()
         } catch (d) {}
         var e = b.ownerDocument,
             g = e.documentElement;
         if (!c || !f.contains(g, b)) return c ? {
             top: c.top,
             left: c.left
         } : {
             top: 0,
             left: 0
         };
         var h = e.body,
             i = cy(e),
             j = g.clientTop || h.clientTop || 0,
             k = g.clientLeft || h.clientLeft || 0,
             l = i.pageYOffset || f.support.boxModel && g.scrollTop || h.scrollTop,
             m = i.pageXOffset || f.support.boxModel && g.scrollLeft || h.scrollLeft,
             n = c.top + l - j,
             o = c.left + m - k;
         return {
             top: n,
             left: o
         }
     } : f.fn.offset = function (a) {
         var b = this[0];
         if (a) return this.each(function (b) {
             f.offset.setOffset(this, a, b)
         });
         if (!b || !b.ownerDocument) return null;
         if (b === b.ownerDocument.body) return f.offset.bodyOffset(b);
         var c, d = b.offsetParent,
             e = b,
             g = b.ownerDocument,
             h = g.documentElement,
             i = g.body,
             j = g.defaultView,
             k = j ? j.getComputedStyle(b, null) : b.currentStyle,
             l = b.offsetTop,
             m = b.offsetLeft;
         while ((b = b.parentNode) && b !== i && b !== h) {
             if (f.support.fixedPosition && k.position === "fixed") break;
             c = j ? j.getComputedStyle(b, null) : b.currentStyle, l -= b.scrollTop, m -= b.scrollLeft, b === d && (l += b.offsetTop, m += b.offsetLeft, f.support.doesNotAddBorder && (!f.support.doesAddBorderForTableAndCells || !cw.test(b.nodeName)) && (l += parseFloat(c.borderTopWidth) || 0, m += parseFloat(c.borderLeftWidth) || 0), e = d, d = b.offsetParent), f.support.subtractsBorderForOverflowNotVisible && c.overflow !== "visible" && (l += parseFloat(c.borderTopWidth) || 0, m += parseFloat(c.borderLeftWidth) || 0), k = c
         }
         if (k.position === "relative" || k.position === "static") l += i.offsetTop, m += i.offsetLeft;
         f.support.fixedPosition && k.position === "fixed" && (l += Math.max(h.scrollTop, i.scrollTop), m += Math.max(h.scrollLeft, i.scrollLeft));
         return {
             top: l,
             left: m
         }
     }, f.offset = {
         bodyOffset: function (a) {
             var b = a.offsetTop,
                 c = a.offsetLeft;
             f.support.doesNotIncludeMarginInBodyOffset && (b += parseFloat(f.css(a, "marginTop")) || 0, c += parseFloat(f.css(a, "marginLeft")) || 0);
             return {
                 top: b,
                 left: c
             }
         },
         setOffset: function (a, b, c) {
             var d = f.css(a, "position");
             d === "static" && (a.style.position = "relative");
             var e = f(a),
                 g = e.offset(),
                 h = f.css(a, "top"),
                 i = f.css(a, "left"),
                 j = (d === "absolute" || d === "fixed") && f.inArray("auto", [h, i]) > -1,
                 k = {},
                 l = {},
                 m, n;
             j ? (l = e.position(), m = l.top, n = l.left) : (m = parseFloat(h) || 0, n = parseFloat(i) || 0), f.isFunction(b) && (b = b.call(a, c, g)), b.top != null && (k.top = b.top - g.top + m), b.left != null && (k.left = b.left - g.left + n), "using" in b ? b.using.call(a, k) : e.css(k)
         }
     }, f.fn.extend({
         position: function () {
             if (!this[0]) return null;
             var a = this[0],
                 b = this.offsetParent(),
                 c = this.offset(),
                 d = cx.test(b[0].nodeName) ? {
                     top: 0,
                     left: 0
                 } : b.offset();
             c.top -= parseFloat(f.css(a, "marginTop")) || 0, c.left -= parseFloat(f.css(a, "marginLeft")) || 0, d.top += parseFloat(f.css(b[0], "borderTopWidth")) || 0, d.left += parseFloat(f.css(b[0], "borderLeftWidth")) || 0;
             return {
                 top: c.top - d.top,
                 left: c.left - d.left
             }
         },
         offsetParent: function () {
             return this.map(function () {
                 var a = this.offsetParent || c.body;
                 while (a && !cx.test(a.nodeName) && f.css(a, "position") === "static") a = a.offsetParent;
                 return a
             })
         }
     }), f.each(["Left", "Top"], function (a, c) {
         var d = "scroll" + c;
         f.fn[d] = function (c) {
             var e, g;
             if (c === b) {
                 e = this[0];
                 if (!e) return null;
                 g = cy(e);
                 return g ? "pageXOffset" in g ? g[a ? "pageYOffset" : "pageXOffset"] : f.support.boxModel && g.document.documentElement[d] || g.document.body[d] : e[d]
             }
             return this.each(function () {
                 g = cy(this), g ? g.scrollTo(a ? f(g).scrollLeft() : c, a ? c : f(g).scrollTop()) : this[d] = c
             })
         }
     }), f.each(["Height", "Width"], function (a, c) {
         var d = c.toLowerCase();
         f.fn["inner" + c] = function () {
             var a = this[0];
             return a ? a.style ? parseFloat(f.css(a, d, "padding")) : this[d]() : null
         }, f.fn["outer" + c] = function (a) {
             var b = this[0];
             return b ? b.style ? parseFloat(f.css(b, d, a ? "margin" : "border")) : this[d]() : null
         }, f.fn[d] = function (a) {
             var e = this[0];
             if (!e) return a == null ? null : this;
             if (f.isFunction(a)) return this.each(function (b) {
                 var c = f(this);
                 c[d](a.call(this, b, c[d]()))
             });
             if (f.isWindow(e)) {
                 var g = e.document.documentElement["client" + c],
                     h = e.document.body;
                 return e.document.compatMode === "CSS1Compat" && g || h && h["client" + c] || g
             }
             if (e.nodeType === 9) return Math.max(e.documentElement["client" + c], e.body["scroll" + c], e.documentElement["scroll" + c], e.body["offset" + c], e.documentElement["offset" + c]);
             if (a === b) {
                 var i = f.css(e, d),
                     j = parseFloat(i);
                 return f.isNumeric(j) ? j : i
             }
             return this.css(d, typeof a == "string" ? a : a + "px")
         }
     }), a.jQuery = a.$ = f, typeof define == "function" && define.amd && define.amd.jQuery && define("jquery", [], function () {
         return f
     })
 })(window);
 (window._gsQueue || (window._gsQueue = [])).push(function () {
         "use strict";
         window._gsDefine("TweenMax", ["core.Animation", "core.SimpleTimeline", "TweenLite"], function (t, e, i) {
                 var s = [].slice,
                     r = function (t, e, s) {
                         i.call(this, t, e, s), this._cycle = 0, this._yoyo = this.vars.yoyo === !0, this._repeat = this.vars.repeat || 0, this._repeatDelay = this.vars.repeatDelay || 0, this._dirty = !0
                     },
                     n = function (t) {
                         return t.jquery || t.length && t[0] && t[0].nodeType && t[0].style
                     },
                     a = r.prototype = i.to({}, .1, {}),
                     o = [];
                 r.version = "1.9.7", a.constructor = r, a.kill()._gc = !1, r.killTweensOf = r.killDelayedCallsTo = i.killTweensOf, r.getTweensOf = i.getTweensOf, r.ticker = i.ticker, a.invalidate = function () {
                     return this._yoyo = this.vars.yoyo === !0, this._repeat = this.vars.repeat || 0, this._repeatDelay = this.vars.repeatDelay || 0, this._uncache(!0), i.prototype.invalidate.call(this)
                 }, a.updateTo = function (t, e) {
                     var s, r = this.ratio;
                     e && this.timeline && this._startTime < this._timeline._time && (this._startTime = this._timeline._time, this._uncache(!1), this._gc ? this._enabled(!0, !1) : this._timeline.insert(this, this._startTime - this._delay));
                     for (s in t) this.vars[s] = t[s];
                     if (this._initted)
                         if (e) this._initted = !1;
                         else if (this._notifyPluginsOfEnabled && this._firstPT && i._onPluginEvent("_onDisable", this), this._time / this._duration > .998) {
                         var n = this._time;
                         this.render(0, !0, !1), this._initted = !1, this.render(n, !0, !1)
                     } else if (this._time > 0) {
                         this._initted = !1, this._init();
                         for (var a, o = 1 / (1 - r), h = this._firstPT; h;) a = h.s + h.c, h.c *= o, h.s = a - h.c, h = h._next
                     }
                     return this
                 }, a.render = function (t, e, i) {
                     var s, r, n, a, h, l, _, u = this._dirty ? this.totalDuration() : this._totalDuration,
                         p = this._time,
                         f = this._totalTime,
                         c = this._cycle;
                     if (t >= u ? (this._totalTime = u, this._cycle = this._repeat, this._yoyo && 0 !== (1 & this._cycle) ? (this._time = 0, this.ratio = this._ease._calcEnd ? this._ease.getRatio(0) : 0) : (this._time = this._duration, this.ratio = this._ease._calcEnd ? this._ease.getRatio(1) : 1), this._reversed || (s = !0, r = "onComplete"), 0 === this._duration && ((0 === t || 0 > this._rawPrevTime) && this._rawPrevTime !== t && (i = !0, this._rawPrevTime > 0 && (r = "onReverseComplete", e && (t = -1))), this._rawPrevTime = t)) : 1e-7 > t ? (this._totalTime = this._time = this._cycle = 0, this.ratio = this._ease._calcEnd ? this._ease.getRatio(0) : 0, (0 !== f || 0 === this._duration && this._rawPrevTime > 0) && (r = "onReverseComplete", s = this._reversed), 0 > t ? (this._active = !1, 0 === this._duration && (this._rawPrevTime >= 0 && (i = !0), this._rawPrevTime = t)) : this._initted || (i = !0)) : (this._totalTime = this._time = t, 0 !== this._repeat && (a = this._duration + this._repeatDelay, this._cycle = this._totalTime / a >> 0, 0 !== this._cycle && this._cycle === this._totalTime / a && this._cycle--, this._time = this._totalTime - this._cycle * a, this._yoyo && 0 !== (1 & this._cycle) && (this._time = this._duration - this._time), this._time > this._duration ? this._time = this._duration : 0 > this._time && (this._time = 0)), this._easeType ? (h = this._time / this._duration, l = this._easeType, _ = this._easePower, (1 === l || 3 === l && h >= .5) && (h = 1 - h), 3 === l && (h *= 2), 1 === _ ? h *= h : 2 === _ ? h *= h * h : 3 === _ ? h *= h * h * h : 4 === _ && (h *= h * h * h * h), this.ratio = 1 === l ? 1 - h : 2 === l ? h : .5 > this._time / this._duration ? h / 2 : 1 - h / 2) : this.ratio = this._ease.getRatio(this._time / this._duration)), p === this._time && !i) return f !== this._totalTime && this._onUpdate && (e || this._onUpdate.apply(this.vars.onUpdateScope || this, this.vars.onUpdateParams || o)), void 0;
                     if (!this._initted) {
                         if (this._init(), !this._initted) return;
                         this._time && !s ? this.ratio = this._ease.getRatio(this._time / this._duration) : s && this._ease._calcEnd && (this.ratio = this._ease.getRatio(0 === this._time ? 0 : 1))
                     }
                     for (this._active || this._paused || (this._active = !0), 0 === f && (this._startAt && (t >= 0 ? this._startAt.render(t, e, i) : r || (r = "_dummyGS")), this.vars.onStart && (0 !== this._totalTime || 0 === this._duration) && (e || this.vars.onStart.apply(this.vars.onStartScope || this, this.vars.onStartParams || o))), n = this._firstPT; n;) n.f ? n.t[n.p](n.c * this.ratio + n.s) : n.t[n.p] = n.c * this.ratio + n.s, n = n._next;
                     this._onUpdate && (0 > t && this._startAt && this._startAt.render(t, e, i), e || this._onUpdate.apply(this.vars.onUpdateScope || this, this.vars.onUpdateParams || o)), this._cycle !== c && (e || this._gc || this.vars.onRepeat && this.vars.onRepeat.apply(this.vars.onRepeatScope || this, this.vars.onRepeatParams || o)), r && (this._gc || (0 > t && this._startAt && !this._onUpdate && this._startAt.render(t, e, i), s && (this._timeline.autoRemoveChildren && this._enabled(!1, !1), this._active = !1), !e && this.vars[r] && this.vars[r].apply(this.vars[r + "Scope"] || this, this.vars[r + "Params"] || o)))
                 }, r.to = function (t, e, i) {
                     return new r(t, e, i)
                 }, r.from = function (t, e, i) {
                     return i.runBackwards = !0, i.immediateRender = 0 != i.immediateRender, new r(t, e, i)
                 }, r.fromTo = function (t, e, i, s) {
                     return s.startAt = i, s.immediateRender = 0 != s.immediateRender && 0 != i.immediateRender, new r(t, e, s)
                 }, r.staggerTo = r.allTo = function (t, e, a, h, l, _, u) {
                     h = h || 0;
                     var p, f, c, m, d = a.delay || 0,
                         g = [],
                         v = function () {
                             a.onComplete && a.onComplete.apply(a.onCompleteScope || this, a.onCompleteParams || o), l.apply(u || this, _ || o)
                         };
                     for (t instanceof Array || ("string" == typeof t && (t = i.selector(t) || t), n(t) && (t = s.call(t, 0))), p = t.length, c = 0; p > c; c++) {
                         f = {};
                         for (m in a) f[m] = a[m];
                         f.delay = d, c === p - 1 && l && (f.onComplete = v), g[c] = new r(t[c], e, f), d += h
                     }
                     return g
                 }, r.staggerFrom = r.allFrom = function (t, e, i, s, n, a, o) {
                     return i.runBackwards = !0, i.immediateRender = 0 != i.immediateRender, r.staggerTo(t, e, i, s, n, a, o)
                 }, r.staggerFromTo = r.allFromTo = function (t, e, i, s, n, a, o, h) {
                     return s.startAt = i, s.immediateRender = 0 != s.immediateRender && 0 != i.immediateRender, r.staggerTo(t, e, s, n, a, o, h)
                 }, r.delayedCall = function (t, e, i, s, n) {
                     return new r(e, 0, {
                         delay: t,
                         onComplete: e,
                         onCompleteParams: i,
                         onCompleteScope: s,
                         onReverseComplete: e,
                         onReverseCompleteParams: i,
                         onReverseCompleteScope: s,
                         immediateRender: !1,
                         useFrames: n,
                         overwrite: 0
                     })
                 }, r.set = function (t, e) {
                     return new r(t, 0, e)
                 }, r.isTweening = function (t) {
                     for (var e, s = i.getTweensOf(t), r = s.length; --r > -1;)
                         if (e = s[r], e._active || e._startTime === e._timeline._time && e._timeline._active) return !0;
                     return !1
                 };
                 var h = function (t, e) {
                         for (var s = [], r = 0, n = t._first; n;) n instanceof i ? s[r++] = n : (e && (s[r++] = n), s = s.concat(h(n, e)), r = s.length), n = n._next;
                         return s
                     },
                     l = r.getAllTweens = function (e) {
                         return h(t._rootTimeline, e).concat(h(t._rootFramesTimeline, e))
                     };
                 r.killAll = function (t, i, s, r) {
                     null == i && (i = !0), null == s && (s = !0);
                     var n, a, o, h = l(0 != r),
                         _ = h.length,
                         u = i && s && r;
                     for (o = 0; _ > o; o++) a = h[o], (u || a instanceof e || (n = a.target === a.vars.onComplete) && s || i && !n) && (t ? a.totalTime(a.totalDuration()) : a._enabled(!1, !1))
                 }, r.killChildTweensOf = function (t, e) {
                     if (null != t) {
                         var a, o, h, l, _, u = i._tweenLookup;
                         if ("string" == typeof t && (t = i.selector(t) || t), n(t) && (t = s(t, 0)), t instanceof Array)
                             for (l = t.length; --l > -1;) r.killChildTweensOf(t[l], e);
                         else {
                             a = [];
                             for (h in u)
                                 for (o = u[h].target.parentNode; o;) o === t && (a = a.concat(u[h].tweens)), o = o.parentNode;
                             for (_ = a.length, l = 0; _ > l; l++) e && a[l].totalTime(a[l].totalDuration()), a[l]._enabled(!1, !1)
                         }
                     }
                 };
                 var _ = function (t, i, s, r) {
                     void 0 === i && (i = !0), void 0 === s && (s = !0);
                     for (var n, a, o = l(r), h = i && s && r, _ = o.length; --_ > -1;) a = o[_], (h || a instanceof e || (n = a.target === a.vars.onComplete) && s || i && !n) && a.paused(t)
                 };
                 return r.pauseAll = function (t, e, i) {
                     _(!0, t, e, i)
                 }, r.resumeAll = function (t, e, i) {
                     _(!1, t, e, i)
                 }, a.progress = function (t) {
                     return arguments.length ? this.totalTime(this.duration() * (this._yoyo && 0 !== (1 & this._cycle) ? 1 - t : t) + this._cycle * (this._duration + this._repeatDelay), !1) : this._time / this.duration()
                 }, a.totalProgress = function (t) {
                     return arguments.length ? this.totalTime(this.totalDuration() * t, !1) : this._totalTime / this.totalDuration()
                 }, a.time = function (t, e) {
                     return arguments.length ? (this._dirty && this.totalDuration(), t > this._duration && (t = this._duration), this._yoyo && 0 !== (1 & this._cycle) ? t = this._duration - t + this._cycle * (this._duration + this._repeatDelay) : 0 !== this._repeat && (t += this._cycle * (this._duration + this._repeatDelay)), this.totalTime(t, e)) : this._time
                 }, a.duration = function (e) {
                     return arguments.length ? t.prototype.duration.call(this, e) : this._duration
                 }, a.totalDuration = function (t) {
                     return arguments.length ? -1 === this._repeat ? this : this.duration((t - this._repeat * this._repeatDelay) / (this._repeat + 1)) : (this._dirty && (this._totalDuration = -1 === this._repeat ? 999999999999 : this._duration * (this._repeat + 1) + this._repeatDelay * this._repeat, this._dirty = !1), this._totalDuration)
                 }, a.repeat = function (t) {
                     return arguments.length ? (this._repeat = t, this._uncache(!0)) : this._repeat
                 }, a.repeatDelay = function (t) {
                     return arguments.length ? (this._repeatDelay = t, this._uncache(!0)) : this._repeatDelay
                 }, a.yoyo = function (t) {
                     return arguments.length ? (this._yoyo = t, this) : this._yoyo
                 }, r
             }, !0), window._gsDefine("TimelineLite", ["core.Animation", "core.SimpleTimeline", "TweenLite"], function (t, e, i) {
                 var s = function (t) {
                         e.call(this, t), this._labels = {}, this.autoRemoveChildren = this.vars.autoRemoveChildren === !0, this.smoothChildTiming = this.vars.smoothChildTiming === !0, this._sortChildren = !0, this._onUpdate = this.vars.onUpdate;
                         for (var i, s, n = this.vars, a = r.length; --a > -1;)
                             if (s = n[r[a]])
                                 for (i = s.length; --i > -1;) "{self}" === s[i] && (s = n[r[a]] = s.concat(), s[i] = this);
                         n.tweens instanceof Array && this.add(n.tweens, 0, n.align, n.stagger)
                     },
                     r = ["onStartParams", "onUpdateParams", "onCompleteParams", "onReverseCompleteParams", "onRepeatParams"],
                     n = [],
                     a = function (t) {
                         var e, i = {};
                         for (e in t) i[e] = t[e];
                         return i
                     },
                     o = n.slice,
                     h = s.prototype = new e;
                 return s.version = "1.9.7", h.constructor = s, h.kill()._gc = !1, h.to = function (t, e, s, r) {
                     return e ? this.add(new i(t, e, s), r) : this.set(t, s, r)
                 }, h.from = function (t, e, s, r) {
                     return this.add(i.from(t, e, s), r)
                 }, h.fromTo = function (t, e, s, r, n) {
                     return e ? this.add(i.fromTo(t, e, s, r), n) : this.set(t, r, n)
                 }, h.staggerTo = function (t, e, r, n, h, l, _, u) {
                     var p, f = new s({
                         onComplete: l,
                         onCompleteParams: _,
                         onCompleteScope: u
                     });
                     for ("string" == typeof t && (t = i.selector(t) || t), !(t instanceof Array) && t.length && t[0] && t[0].nodeType && t[0].style && (t = o.call(t, 0)), n = n || 0, p = 0; t.length > p; p++) r.startAt && (r.startAt = a(r.startAt)), f.to(t[p], e, a(r), p * n);
                     return this.add(f, h)
                 }, h.staggerFrom = function (t, e, i, s, r, n, a, o) {
                     return i.immediateRender = 0 != i.immediateRender, i.runBackwards = !0, this.staggerTo(t, e, i, s, r, n, a, o)
                 }, h.staggerFromTo = function (t, e, i, s, r, n, a, o, h) {
                     return s.startAt = i, s.immediateRender = 0 != s.immediateRender && 0 != i.immediateRender, this.staggerTo(t, e, s, r, n, a, o, h)
                 }, h.call = function (t, e, s, r) {
                     return this.add(i.delayedCall(0, t, e, s), r)
                 }, h.set = function (t, e, s) {
                     return s = this._parseTimeOrLabel(s, 0, !0), null == e.immediateRender && (e.immediateRender = s === this._time && !this._paused), this.add(new i(t, 0, e), s)
                 }, s.exportRoot = function (t, e) {
                     t = t || {}, null == t.smoothChildTiming && (t.smoothChildTiming = !0);
                     var r, n, a = new s(t),
                         o = a._timeline;
                     for (null == e && (e = !0), o._remove(a, !0), a._startTime = 0, a._rawPrevTime = a._time = a._totalTime = o._time, r = o._first; r;) n = r._next, e && r instanceof i && r.target === r.vars.onComplete || a.add(r, r._startTime - r._delay), r = n;
                     return o.add(a, 0), a
                 }, h.add = function (r, n, a, o) {
                     var h, l, _, u, p;
                     if ("number" != typeof n && (n = this._parseTimeOrLabel(n, 0, !0, r)), !(r instanceof t)) {
                         if (r instanceof Array) {
                             for (a = a || "normal", o = o || 0, h = n, l = r.length, _ = 0; l > _; _++)(u = r[_]) instanceof Array && (u = new s({
                                 tweens: u
                             })), this.add(u, h), "string" != typeof u && "function" != typeof u && ("sequence" === a ? h = u._startTime + u.totalDuration() / u._timeScale : "start" === a && (u._startTime -= u.delay())), h += o;
                             return this._uncache(!0)
                         }
                         if ("string" == typeof r) return this.addLabel(r, n);
                         if ("function" != typeof r) throw "Cannot add " + r + " into the timeline; it is neither a tween, timeline, function, nor a string.";
                         r = i.delayedCall(0, r)
                     }
                     if (e.prototype.add.call(this, r, n), this._gc && !this._paused && this._time === this._duration && this._time < this.duration())
                         for (p = this; p._gc && p._timeline;) p._timeline.smoothChildTiming ? p.totalTime(p._totalTime, !0) : p._enabled(!0, !1), p = p._timeline;
                     return this
                 }, h.remove = function (e) {
                     if (e instanceof t) return this._remove(e, !1);
                     if (e instanceof Array) {
                         for (var i = e.length; --i > -1;) this.remove(e[i]);
                         return this
                     }
                     return "string" == typeof e ? this.removeLabel(e) : this.kill(null, e)
                 }, h.append = function (t, e) {
                     return this.add(t, this._parseTimeOrLabel(null, e, !0, t))
                 }, h.insert = h.insertMultiple = function (t, e, i, s) {
                     return this.add(t, e || 0, i, s)
                 }, h.appendMultiple = function (t, e, i, s) {
                     return this.add(t, this._parseTimeOrLabel(null, e, !0, t), i, s)
                 }, h.addLabel = function (t, e) {
                     return this._labels[t] = this._parseTimeOrLabel(e), this
                 }, h.removeLabel = function (t) {
                     return delete this._labels[t], this
                 }, h.getLabelTime = function (t) {
                     return null != this._labels[t] ? this._labels[t] : -1
                 }, h._parseTimeOrLabel = function (e, i, s, r) {
                     var n;
                     if (r instanceof t && r.timeline === this) this.remove(r);
                     else if (r instanceof Array)
                         for (n = r.length; --n > -1;) r[n] instanceof t && r[n].timeline === this && this.remove(r[n]);
                     if ("string" == typeof i) return this._parseTimeOrLabel(i, s && "number" == typeof e && null == this._labels[i] ? e - this.duration() : 0, s);
                     if (i = i || 0, "string" != typeof e || !isNaN(e) && null == this._labels[e]) null == e && (e = this.duration());
                     else {
                         if (n = e.indexOf("="), -1 === n) return null == this._labels[e] ? s ? this._labels[e] = this.duration() + i : i : this._labels[e] + i;
                         i = parseInt(e.charAt(n - 1) + "1", 10) * Number(e.substr(n + 1)), e = n > 1 ? this._parseTimeOrLabel(e.substr(0, n - 1), 0, s) : this.duration()
                     }
                     return Number(e) + i
                 }, h.seek = function (t, e) {
                     return this.totalTime("number" == typeof t ? t : this._parseTimeOrLabel(t), e !== !1)
                 }, h.stop = function () {
                     return this.paused(!0)
                 }, h.gotoAndPlay = function (t, e) {
                     return this.play(t, e)
                 }, h.gotoAndStop = function (t, e) {
                     return this.pause(t, e)
                 }, h.render = function (t, e, i) {
                     this._gc && this._enabled(!0, !1), this._active = !this._paused;
                     var s, r, a, o, h, l = this._dirty ? this.totalDuration() : this._totalDuration,
                         _ = this._time,
                         u = this._startTime,
                         p = this._timeScale,
                         f = this._paused;
                     if (t >= l ? (this._totalTime = this._time = l, this._reversed || this._hasPausedChild() || (r = !0, o = "onComplete", 0 === this._duration && (0 === t || 0 > this._rawPrevTime) && this._rawPrevTime !== t && this._first && (h = !0, this._rawPrevTime > 0 && (o = "onReverseComplete"))), this._rawPrevTime = t, t = l + 1e-6) : 1e-7 > t ? (this._totalTime = this._time = 0, (0 !== _ || 0 === this._duration && this._rawPrevTime > 0) && (o = "onReverseComplete", r = this._reversed), 0 > t ? (this._active = !1, 0 === this._duration && this._rawPrevTime >= 0 && this._first && (h = !0)) : this._initted || (h = !0), this._rawPrevTime = t, t = 0) : this._totalTime = this._time = this._rawPrevTime = t, this._time !== _ && this._first || i || h) {
                         if (this._initted || (this._initted = !0), 0 === _ && this.vars.onStart && 0 !== this._time && (e || this.vars.onStart.apply(this.vars.onStartScope || this, this.vars.onStartParams || n)), this._time >= _)
                             for (s = this._first; s && (a = s._next, !this._paused || f);)(s._active || s._startTime <= this._time && !s._paused && !s._gc) && (s._reversed ? s.render((s._dirty ? s.totalDuration() : s._totalDuration) - (t - s._startTime) * s._timeScale, e, i) : s.render((t - s._startTime) * s._timeScale, e, i)), s = a;
                         else
                             for (s = this._last; s && (a = s._prev, !this._paused || f);)(s._active || _ >= s._startTime && !s._paused && !s._gc) && (s._reversed ? s.render((s._dirty ? s.totalDuration() : s._totalDuration) - (t - s._startTime) * s._timeScale, e, i) : s.render((t - s._startTime) * s._timeScale, e, i)), s = a;
                         this._onUpdate && (e || this._onUpdate.apply(this.vars.onUpdateScope || this, this.vars.onUpdateParams || n)), o && (this._gc || (u === this._startTime || p !== this._timeScale) && (0 === this._time || l >= this.totalDuration()) && (r && (this._timeline.autoRemoveChildren && this._enabled(!1, !1), this._active = !1), !e && this.vars[o] && this.vars[o].apply(this.vars[o + "Scope"] || this, this.vars[o + "Params"] || n)))
                     }
                 }, h._hasPausedChild = function () {
                     for (var t = this._first; t;) {
                         if (t._paused || t instanceof s && t._hasPausedChild()) return !0;
                         t = t._next
                     }
                     return !1
                 }, h.getChildren = function (t, e, s, r) {
                     r = r || -9999999999;
                     for (var n = [], a = this._first, o = 0; a;) r > a._startTime || (a instanceof i ? e !== !1 && (n[o++] = a) : (s !== !1 && (n[o++] = a), t !== !1 && (n = n.concat(a.getChildren(!0, e, s)), o = n.length))), a = a._next;
                     return n
                 }, h.getTweensOf = function (t, e) {
                     for (var s = i.getTweensOf(t), r = s.length, n = [], a = 0; --r > -1;)(s[r].timeline === this || e && this._contains(s[r])) && (n[a++] = s[r]);
                     return n
                 }, h._contains = function (t) {
                     for (var e = t.timeline; e;) {
                         if (e === this) return !0;
                         e = e.timeline
                     }
                     return !1
                 }, h.shiftChildren = function (t, e, i) {
                     i = i || 0;
                     for (var s, r = this._first, n = this._labels; r;) r._startTime >= i && (r._startTime += t), r = r._next;
                     if (e)
                         for (s in n) n[s] >= i && (n[s] += t);
                     return this._uncache(!0)
                 }, h._kill = function (t, e) {
                     if (!t && !e) return this._enabled(!1, !1);
                     for (var i = e ? this.getTweensOf(e) : this.getChildren(!0, !0, !1), s = i.length, r = !1; --s > -1;) i[s]._kill(t, e) && (r = !0);
                     return r
                 }, h.clear = function (t) {
                     var e = this.getChildren(!1, !0, !0),
                         i = e.length;
                     for (this._time = this._totalTime = 0; --i > -1;) e[i]._enabled(!1, !1);
                     return t !== !1 && (this._labels = {}), this._uncache(!0)
                 }, h.invalidate = function () {
                     for (var t = this._first; t;) t.invalidate(), t = t._next;
                     return this
                 }, h._enabled = function (t, i) {
                     if (t === this._gc)
                         for (var s = this._first; s;) s._enabled(t, !0), s = s._next;
                     return e.prototype._enabled.call(this, t, i)
                 }, h.progress = function (t) {
                     return arguments.length ? this.totalTime(this.duration() * t, !1) : this._time / this.duration()
                 }, h.duration = function (t) {
                     return arguments.length ? (0 !== this.duration() && 0 !== t && this.timeScale(this._duration / t), this) : (this._dirty && this.totalDuration(), this._duration)
                 }, h.totalDuration = function (t) {
                     if (!arguments.length) {
                         if (this._dirty) {
                             for (var e, i, s = 0, r = this._last, n = 999999999999; r;) e = r._prev, r._dirty && r.totalDuration(), r._startTime > n && this._sortChildren && !r._paused ? this.add(r, r._startTime - r._delay) : n = r._startTime, 0 > r._startTime && !r._paused && (s -= r._startTime, this._timeline.smoothChildTiming && (this._startTime += r._startTime / this._timeScale), this.shiftChildren(-r._startTime, !1, -9999999999), n = 0), i = r._startTime + r._totalDuration / r._timeScale, i > s && (s = i), r = e;
                             this._duration = this._totalDuration = s, this._dirty = !1
                         }
                         return this._totalDuration
                     }
                     return 0 !== this.totalDuration() && 0 !== t && this.timeScale(this._totalDuration / t), this
                 }, h.usesFrames = function () {
                     for (var e = this._timeline; e._timeline;) e = e._timeline;
                     return e === t._rootFramesTimeline
                 }, h.rawTime = function () {
                     return this._paused || 0 !== this._totalTime && this._totalTime !== this._totalDuration ? this._totalTime : (this._timeline.rawTime() - this._startTime) * this._timeScale
                 }, s
             }, !0), window._gsDefine("TimelineMax", ["TimelineLite", "TweenLite", "easing.Ease"], function (t, e, i) {
                 var s = function (e) {
                         t.call(this, e), this._repeat = this.vars.repeat || 0, this._repeatDelay = this.vars.repeatDelay || 0, this._cycle = 0, this._yoyo = this.vars.yoyo === !0, this._dirty = !0
                     },
                     r = [],
                     n = new i(null, null, 1, 0),
                     a = function (t) {
                         for (; t;) {
                             if (t._paused) return !0;
                             t = t._timeline
                         }
                         return !1
                     },
                     o = s.prototype = new t;
                 return o.constructor = s, o.kill()._gc = !1, s.version = "1.9.7", o.invalidate = function () {
                     return this._yoyo = this.vars.yoyo === !0, this._repeat = this.vars.repeat || 0, this._repeatDelay = this.vars.repeatDelay || 0, this._uncache(!0), t.prototype.invalidate.call(this)
                 }, o.addCallback = function (t, i, s, r) {
                     return this.add(e.delayedCall(0, t, s, r), i)
                 }, o.removeCallback = function (t, e) {
                     if (null == e) this._kill(null, t);
                     else
                         for (var i = this.getTweensOf(t, !1), s = i.length, r = this._parseTimeOrLabel(e); --s > -1;) i[s]._startTime === r && i[s]._enabled(!1, !1);
                     return this
                 }, o.tweenTo = function (t, i) {
                     i = i || {};
                     var s, a, o = {
                         ease: n,
                         overwrite: 2,
                         useFrames: this.usesFrames(),
                         immediateRender: !1
                     };
                     for (s in i) o[s] = i[s];
                     return o.time = this._parseTimeOrLabel(t), a = new e(this, Math.abs(Number(o.time) - this._time) / this._timeScale || .001, o), o.onStart = function () {
                         a.target.paused(!0), a.vars.time !== a.target.time() && a.duration(Math.abs(a.vars.time - a.target.time()) / a.target._timeScale), i.onStart && i.onStart.apply(i.onStartScope || a, i.onStartParams || r)
                     }, a
                 }, o.tweenFromTo = function (t, e, i) {
                     i = i || {}, t = this._parseTimeOrLabel(t), i.startAt = {
                         onComplete: this.seek,
                         onCompleteParams: [t],
                         onCompleteScope: this
                     }, i.immediateRender = i.immediateRender !== !1;
                     var s = this.tweenTo(e, i);
                     return s.duration(Math.abs(s.vars.time - t) / this._timeScale || .001)
                 }, o.render = function (t, e, i) {
                     this._gc && this._enabled(!0, !1), this._active = !this._paused;
                     var s, n, a, o, h, l, _ = this._dirty ? this.totalDuration() : this._totalDuration,
                         u = this._duration,
                         p = this._time,
                         f = this._totalTime,
                         c = this._startTime,
                         m = this._timeScale,
                         d = this._rawPrevTime,
                         g = this._paused,
                         v = this._cycle;
                     if (t >= _ ? (this._locked || (this._totalTime = _, this._cycle = this._repeat), this._reversed || this._hasPausedChild() || (n = !0, o = "onComplete", 0 === u && (0 === t || 0 > this._rawPrevTime) && this._rawPrevTime !== t && this._first && (h = !0, this._rawPrevTime > 0 && (o = "onReverseComplete"))), this._rawPrevTime = t, this._yoyo && 0 !== (1 & this._cycle) ? this._time = t = 0 : (this._time = u, t = u + 1e-6)) : 1e-7 > t ? (this._locked || (this._totalTime = this._cycle = 0), this._time = 0, (0 !== p || 0 === u && this._rawPrevTime > 0 && !this._locked) && (o = "onReverseComplete", n = this._reversed), 0 > t ? (this._active = !1, 0 === u && this._rawPrevTime >= 0 && this._first && (h = !0)) : this._initted || (h = !0), this._rawPrevTime = t, t = 0) : (this._time = this._rawPrevTime = t, this._locked || (this._totalTime = t, 0 !== this._repeat && (l = u + this._repeatDelay, this._cycle = this._totalTime / l >> 0, 0 !== this._cycle && this._cycle === this._totalTime / l && this._cycle--, this._time = this._totalTime - this._cycle * l, this._yoyo && 0 !== (1 & this._cycle) && (this._time = u - this._time), this._time > u ? (this._time = u, t = u + 1e-6) : 0 > this._time ? this._time = t = 0 : t = this._time))), this._cycle !== v && !this._locked) {
                         var y = this._yoyo && 0 !== (1 & v),
                             T = y === (this._yoyo && 0 !== (1 & this._cycle)),
                             w = this._totalTime,
                             x = this._cycle,
                             b = this._rawPrevTime,
                             P = this._time;
                         this._totalTime = v * u, v > this._cycle ? y = !y : this._totalTime += u, this._time = p, this._rawPrevTime = 0 === u ? d - 1e-5 : d, this._cycle = v, this._locked = !0, p = y ? 0 : u, this.render(p, e, 0 === u), e || this._gc || this.vars.onRepeat && this.vars.onRepeat.apply(this.vars.onRepeatScope || this, this.vars.onRepeatParams || r), T && (p = y ? u + 1e-6 : -1e-6, this.render(p, !0, !1)), this._time = P, this._totalTime = w, this._cycle = x, this._rawPrevTime = b, this._locked = !1
                     }
                     if (!(this._time !== p && this._first || i || h)) return f !== this._totalTime && this._onUpdate && (e || this._onUpdate.apply(this.vars.onUpdateScope || this, this.vars.onUpdateParams || r)), void 0;
                     if (this._initted || (this._initted = !0), 0 === f && this.vars.onStart && 0 !== this._totalTime && (e || this.vars.onStart.apply(this.vars.onStartScope || this, this.vars.onStartParams || r)), this._time >= p)
                         for (s = this._first; s && (a = s._next, !this._paused || g);)(s._active || s._startTime <= this._time && !s._paused && !s._gc) && (s._reversed ? s.render((s._dirty ? s.totalDuration() : s._totalDuration) - (t - s._startTime) * s._timeScale, e, i) : s.render((t - s._startTime) * s._timeScale, e, i)), s = a;
                     else
                         for (s = this._last; s && (a = s._prev, !this._paused || g);)(s._active || p >= s._startTime && !s._paused && !s._gc) && (s._reversed ? s.render((s._dirty ? s.totalDuration() : s._totalDuration) - (t - s._startTime) * s._timeScale, e, i) : s.render((t - s._startTime) * s._timeScale, e, i)), s = a;
                     this._onUpdate && (e || this._onUpdate.apply(this.vars.onUpdateScope || this, this.vars.onUpdateParams || r)), o && (this._locked || this._gc || (c === this._startTime || m !== this._timeScale) && (0 === this._time || _ >= this.totalDuration()) && (n && (this._timeline.autoRemoveChildren && this._enabled(!1, !1), this._active = !1), !e && this.vars[o] && this.vars[o].apply(this.vars[o + "Scope"] || this, this.vars[o + "Params"] || r)))
                 }, o.getActive = function (t, e, i) {
                     null == t && (t = !0), null == e && (e = !0), null == i && (i = !1);
                     var s, r, n = [],
                         o = this.getChildren(t, e, i),
                         h = 0,
                         l = o.length;
                     for (s = 0; l > s; s++) r = o[s], r._paused || r._timeline._time >= r._startTime && r._timeline._time < r._startTime + r._totalDuration / r._timeScale && (a(r._timeline) || (n[h++] = r));
                     return n
                 }, o.getLabelAfter = function (t) {
                     t || 0 !== t && (t = this._time);
                     var e, i = this.getLabelsArray(),
                         s = i.length;
                     for (e = 0; s > e; e++)
                         if (i[e].time > t) return i[e].name;
                     return null
                 }, o.getLabelBefore = function (t) {
                     null == t && (t = this._time);
                     for (var e = this.getLabelsArray(), i = e.length; --i > -1;)
                         if (t > e[i].time) return e[i].name;
                     return null
                 }, o.getLabelsArray = function () {
                     var t, e = [],
                         i = 0;
                     for (t in this._labels) e[i++] = {
                         time: this._labels[t],
                         name: t
                     };
                     return e.sort(function (t, e) {
                         return t.time - e.time
                     }), e
                 }, o.progress = function (t) {
                     return arguments.length ? this.totalTime(this.duration() * (this._yoyo && 0 !== (1 & this._cycle) ? 1 - t : t) + this._cycle * (this._duration + this._repeatDelay), !1) : this._time / this.duration()
                 }, o.totalProgress = function (t) {
                     return arguments.length ? this.totalTime(this.totalDuration() * t, !1) : this._totalTime / this.totalDuration()
                 }, o.totalDuration = function (e) {
                     return arguments.length ? -1 === this._repeat ? this : this.duration((e - this._repeat * this._repeatDelay) / (this._repeat + 1)) : (this._dirty && (t.prototype.totalDuration.call(this), this._totalDuration = -1 === this._repeat ? 999999999999 : this._duration * (this._repeat + 1) + this._repeatDelay * this._repeat), this._totalDuration)
                 }, o.time = function (t, e) {
                     return arguments.length ? (this._dirty && this.totalDuration(), t > this._duration && (t = this._duration), this._yoyo && 0 !== (1 & this._cycle) ? t = this._duration - t + this._cycle * (this._duration + this._repeatDelay) : 0 !== this._repeat && (t += this._cycle * (this._duration + this._repeatDelay)), this.totalTime(t, e)) : this._time
                 }, o.repeat = function (t) {
                     return arguments.length ? (this._repeat = t, this._uncache(!0)) : this._repeat
                 }, o.repeatDelay = function (t) {
                     return arguments.length ? (this._repeatDelay = t, this._uncache(!0)) : this._repeatDelay
                 }, o.yoyo = function (t) {
                     return arguments.length ? (this._yoyo = t, this) : this._yoyo
                 }, o.currentLabel = function (t) {
                     return arguments.length ? this.seek(t, !0) : this.getLabelBefore(this._time + 1e-8)
                 }, s
             }, !0),
             function () {
                 var t = 180 / Math.PI,
                     e = Math.PI / 180,
                     i = [],
                     s = [],
                     r = [],
                     n = {},
                     a = function (t, e, i, s) {
                         this.a = t, this.b = e, this.c = i, this.d = s, this.da = s - t, this.ca = i - t, this.ba = e - t
                     },
                     o = ",x,y,z,left,top,right,bottom,marginTop,marginLeft,marginRight,marginBottom,paddingLeft,paddingTop,paddingRight,paddingBottom,backgroundPosition,backgroundPosition_y,",
                     h = function (t, e, i, s) {
                         var r = {
                                 a: t
                             },
                             n = {},
                             a = {},
                             o = {
                                 c: s
                             },
                             h = (t + e) / 2,
                             l = (e + i) / 2,
                             _ = (i + s) / 2,
                             u = (h + l) / 2,
                             p = (l + _) / 2,
                             f = (p - u) / 8;
                         return r.b = h + (t - h) / 4, n.b = u + f, r.c = n.a = (r.b + n.b) / 2, n.c = a.a = (u + p) / 2, a.b = p - f, o.b = _ + (s - _) / 4, a.c = o.a = (a.b + o.b) / 2, [r, n, a, o]
                     },
                     l = function (t, e, n, a, o) {
                         var l, _, u, p, f, c, m, d, g, v, y, T, w, x = t.length - 1,
                             b = 0,
                             P = t[0].a;
                         for (l = 0; x > l; l++) f = t[b], _ = f.a, u = f.d, p = t[b + 1].d, o ? (y = i[l], T = s[l], w = .25 * (T + y) * e / (a ? .5 : r[l] || .5), c = u - (u - _) * (a ? .5 * e : 0 !== y ? w / y : 0), m = u + (p - u) * (a ? .5 * e : 0 !== T ? w / T : 0), d = u - (c + ((m - c) * (3 * y / (y + T) + .5) / 4 || 0))) : (c = u - .5 * (u - _) * e, m = u + .5 * (p - u) * e, d = u - (c + m) / 2), c += d, m += d, f.c = g = c, f.b = 0 !== l ? P : P = f.a + .6 * (f.c - f.a), f.da = u - _, f.ca = g - _, f.ba = P - _, n ? (v = h(_, P, g, u), t.splice(b, 1, v[0], v[1], v[2], v[3]), b += 4) : b++, P = m;
                         f = t[b], f.b = P, f.c = P + .4 * (f.d - P), f.da = f.d - f.a, f.ca = f.c - f.a, f.ba = P - f.a, n && (v = h(f.a, P, f.c, f.d), t.splice(b, 1, v[0], v[1], v[2], v[3]))
                     },
                     _ = function (t, e, r, n) {
                         var o, h, l, _, u, p, f = [];
                         if (n)
                             for (t = [n].concat(t), h = t.length; --h > -1;) "string" == typeof (p = t[h][e]) && "=" === p.charAt(1) && (t[h][e] = n[e] + Number(p.charAt(0) + p.substr(2)));
                         if (o = t.length - 2, 0 > o) return f[0] = new a(t[0][e], 0, 0, t[-1 > o ? 0 : 1][e]), f;
                         for (h = 0; o > h; h++) l = t[h][e], _ = t[h + 1][e], f[h] = new a(l, 0, 0, _), r && (u = t[h + 2][e], i[h] = (i[h] || 0) + (_ - l) * (_ - l), s[h] = (s[h] || 0) + (u - _) * (u - _));
                         return f[h] = new a(t[h][e], 0, 0, t[h + 1][e]), f
                     },
                     u = function (t, e, a, h, u, p) {
                         var f, c, m, d, g, v, y, T, w = {},
                             x = [],
                             b = p || t[0];
                         u = "string" == typeof u ? "," + u + "," : o, null == e && (e = 1);
                         for (c in t[0]) x.push(c);
                         if (t.length > 1) {
                             for (T = t[t.length - 1], y = !0, f = x.length; --f > -1;)
                                 if (c = x[f], Math.abs(b[c] - T[c]) > .05) {
                                     y = !1;
                                     break
                                 }
                             y && (t = t.concat(), p && t.unshift(p), t.push(t[1]), p = t[t.length - 3])
                         }
                         for (i.length = s.length = r.length = 0, f = x.length; --f > -1;) c = x[f], n[c] = -1 !== u.indexOf("," + c + ","), w[c] = _(t, c, n[c], p);
                         for (f = i.length; --f > -1;) i[f] = Math.sqrt(i[f]), s[f] = Math.sqrt(s[f]);
                         if (!h) {
                             for (f = x.length; --f > -1;)
                                 if (n[c])
                                     for (m = w[x[f]], v = m.length - 1, d = 0; v > d; d++) g = m[d + 1].da / s[d] + m[d].da / i[d], r[d] = (r[d] || 0) + g * g;
                             for (f = r.length; --f > -1;) r[f] = Math.sqrt(r[f])
                         }
                         for (f = x.length, d = a ? 4 : 1; --f > -1;) c = x[f], m = w[c], l(m, e, a, h, n[c]), y && (m.splice(0, d), m.splice(m.length - d, d));
                         return w
                     },
                     p = function (t, e, i) {
                         e = e || "soft";
                         var s, r, n, o, h, l, _, u, p, f, c, m = {},
                             d = "cubic" === e ? 3 : 2,
                             g = "soft" === e,
                             v = [];
                         if (g && i && (t = [i].concat(t)), null == t || d + 1 > t.length) throw "invalid Bezier data";
                         for (p in t[0]) v.push(p);
                         for (l = v.length; --l > -1;) {
                             for (p = v[l], m[p] = h = [], f = 0, u = t.length, _ = 0; u > _; _++) s = null == i ? t[_][p] : "string" == typeof (c = t[_][p]) && "=" === c.charAt(1) ? i[p] + Number(c.charAt(0) + c.substr(2)) : Number(c), g && _ > 1 && u - 1 > _ && (h[f++] = (s + h[f - 2]) / 2), h[f++] = s;
                             for (u = f - d + 1, f = 0, _ = 0; u > _; _ += d) s = h[_], r = h[_ + 1], n = h[_ + 2], o = 2 === d ? 0 : h[_ + 3], h[f++] = c = 3 === d ? new a(s, r, n, o) : new a(s, (2 * r + s) / 3, (2 * r + n) / 3, n);
                             h.length = f
                         }
                         return m
                     },
                     f = function (t, e, i) {
                         for (var s, r, n, a, o, h, l, _, u, p, f, c = 1 / i, m = t.length; --m > -1;)
                             for (p = t[m], n = p.a, a = p.d - n, o = p.c - n, h = p.b - n, s = r = 0, _ = 1; i >= _; _++) l = c * _, u = 1 - l, s = r - (r = (l * l * a + 3 * u * (l * o + u * h)) * l), f = m * i + _ - 1, e[f] = (e[f] || 0) + s * s
                     },
                     c = function (t, e) {
                         e = e >> 0 || 6;
                         var i, s, r, n, a = [],
                             o = [],
                             h = 0,
                             l = 0,
                             _ = e - 1,
                             u = [],
                             p = [];
                         for (i in t) f(t[i], a, e);
                         for (r = a.length, s = 0; r > s; s++) h += Math.sqrt(a[s]), n = s % e, p[n] = h, n === _ && (l += h, n = s / e >> 0, u[n] = p, o[n] = l, h = 0, p = []);
                         return {
                             length: l,
                             lengths: o,
                             segments: u
                         }
                     },
                     m = window._gsDefine.plugin({
                         propName: "bezier",
                         priority: -1,
                         API: 2,
                         global: !0,
                         init: function (t, e, i) {
                             this._target = t, e instanceof Array && (e = {
                                 values: e
                             }), this._func = {}, this._round = {}, this._props = [], this._timeRes = null == e.timeResolution ? 6 : parseInt(e.timeResolution, 10);
                             var s, r, n, a, o, h = e.values || [],
                                 l = {},
                                 _ = h[0],
                                 f = e.autoRotate || i.vars.orientToBezier;
                             this._autoRotate = f ? f instanceof Array ? f : [
                                 ["x", "y", "rotation", f === !0 ? 0 : Number(f) || 0]
                             ] : null;
                             for (s in _) this._props.push(s);
                             for (n = this._props.length; --n > -1;) s = this._props[n], this._overwriteProps.push(s), r = this._func[s] = "function" == typeof t[s], l[s] = r ? t[s.indexOf("set") || "function" != typeof t["get" + s.substr(3)] ? s : "get" + s.substr(3)]() : parseFloat(t[s]), o || l[s] !== h[0][s] && (o = l);
                             if (this._beziers = "cubic" !== e.type && "quadratic" !== e.type && "soft" !== e.type ? u(h, isNaN(e.curviness) ? 1 : e.curviness, !1, "thruBasic" === e.type, e.correlate, o) : p(h, e.type, l), this._segCount = this._beziers[s].length, this._timeRes) {
                                 var m = c(this._beziers, this._timeRes);
                                 this._length = m.length, this._lengths = m.lengths, this._segments = m.segments, this._l1 = this._li = this._s1 = this._si = 0, this._l2 = this._lengths[0], this._curSeg = this._segments[0], this._s2 = this._curSeg[0], this._prec = 1 / this._curSeg.length
                             }
                             if (f = this._autoRotate)
                                 for (f[0] instanceof Array || (this._autoRotate = f = [f]), n = f.length; --n > -1;)
                                     for (a = 0; 3 > a; a++) s = f[n][a], this._func[s] = "function" == typeof t[s] ? t[s.indexOf("set") || "function" != typeof t["get" + s.substr(3)] ? s : "get" + s.substr(3)] : !1;
                             return !0
                         },
                         set: function (e) {
                             var i, s, r, n, a, o, h, l, _, u, p = this._segCount,
                                 f = this._func,
                                 c = this._target;
                             if (this._timeRes) {
                                 if (_ = this._lengths, u = this._curSeg, e *= this._length, r = this._li, e > this._l2 && p - 1 > r) {
                                     for (l = p - 1; l > r && e >= (this._l2 = _[++r]););
                                     this._l1 = _[r - 1], this._li = r, this._curSeg = u = this._segments[r], this._s2 = u[this._s1 = this._si = 0]
                                 } else if (this._l1 > e && r > 0) {
                                     for (; r > 0 && (this._l1 = _[--r]) >= e;);
                                     0 === r && this._l1 > e ? this._l1 = 0 : r++, this._l2 = _[r], this._li = r, this._curSeg = u = this._segments[r], this._s1 = u[(this._si = u.length - 1) - 1] || 0, this._s2 = u[this._si]
                                 }
                                 if (i = r, e -= this._l1, r = this._si, e > this._s2 && u.length - 1 > r) {
                                     for (l = u.length - 1; l > r && e >= (this._s2 = u[++r]););
                                     this._s1 = u[r - 1], this._si = r
                                 } else if (this._s1 > e && r > 0) {
                                     for (; r > 0 && (this._s1 = u[--r]) >= e;);
                                     0 === r && this._s1 > e ? this._s1 = 0 : r++, this._s2 = u[r], this._si = r
                                 }
                                 o = (r + (e - this._s1) / (this._s2 - this._s1)) * this._prec
                             } else i = 0 > e ? 0 : e >= 1 ? p - 1 : p * e >> 0, o = (e - i * (1 / p)) * p;
                             for (s = 1 - o, r = this._props.length; --r > -1;) n = this._props[r], a = this._beziers[n][i], h = (o * o * a.da + 3 * s * (o * a.ca + s * a.ba)) * o + a.a, this._round[n] && (h = h + (h > 0 ? .5 : -.5) >> 0), f[n] ? c[n](h) : c[n] = h;
                             if (this._autoRotate) {
                                 var m, d, g, v, y, T, w, x = this._autoRotate;
                                 for (r = x.length; --r > -1;) n = x[r][2], T = x[r][3] || 0, w = x[r][4] === !0 ? 1 : t, a = this._beziers[x[r][0]], m = this._beziers[x[r][1]], a && m && (a = a[i], m = m[i], d = a.a + (a.b - a.a) * o, v = a.b + (a.c - a.b) * o, d += (v - d) * o, v += (a.c + (a.d - a.c) * o - v) * o, g = m.a + (m.b - m.a) * o, y = m.b + (m.c - m.b) * o, g += (y - g) * o, y += (m.c + (m.d - m.c) * o - y) * o, h = Math.atan2(y - g, v - d) * w + T, f[n] ? c[n](h) : c[n] = h)
                             }
                         }
                     }),
                     d = m.prototype;
                 m.bezierThrough = u, m.cubicToQuadratic = h, m._autoCSS = !0, m.quadraticToCubic = function (t, e, i) {
                     return new a(t, (2 * e + t) / 3, (2 * e + i) / 3, i)
                 }, m._cssRegister = function () {
                     var t = window._gsDefine.globals.CSSPlugin;
                     if (t) {
                         var i = t._internals,
                             s = i._parseToProxy,
                             r = i._setPluginRatio,
                             n = i.CSSPropTween;
                         i._registerComplexSpecialProp("bezier", {
                             parser: function (t, i, a, o, h, l) {
                                 i instanceof Array && (i = {
                                     values: i
                                 }), l = new m;
                                 var _, u, p, f = i.values,
                                     c = f.length - 1,
                                     d = [],
                                     g = {};
                                 if (0 > c) return h;
                                 for (_ = 0; c >= _; _++) p = s(t, f[_], o, h, l, c !== _), d[_] = p.end;
                                 for (u in i) g[u] = i[u];
                                 return g.values = d, h = new n(t, "bezier", 0, 0, p.pt, 2), h.data = p, h.plugin = l, h.setRatio = r, 0 === g.autoRotate && (g.autoRotate = !0), !g.autoRotate || g.autoRotate instanceof Array || (_ = g.autoRotate === !0 ? 0 : Number(g.autoRotate) * e, g.autoRotate = null != p.end.left ? [
                                     ["left", "top", "rotation", _, !0]
                                 ] : null != p.end.x ? [
                                     ["x", "y", "rotation", _, !0]
                                 ] : !1), g.autoRotate && (o._transform || o._enableTransforms(!1), p.autoRotate = o._target._gsTransform), l._onInitTween(p.proxy, g, o._tween), h
                             }
                         })
                     }
                 }, d._roundProps = function (t, e) {
                     for (var i = this._overwriteProps, s = i.length; --s > -1;)(t[i[s]] || t.bezier || t.bezierThrough) && (this._round[i[s]] = e)
                 }, d._kill = function (t) {
                     var e, i, s = this._props;
                     for (e in this._beziers)
                         if (e in t)
                             for (delete this._beziers[e], delete this._func[e], i = s.length; --i > -1;) s[i] === e && s.splice(i, 1);
                     return this._super._kill.call(this, t)
                 }
             }(), window._gsDefine("plugins.CSSPlugin", ["plugins.TweenPlugin", "TweenLite"], function (t, e) {
                 var i, s, r, n, a = function () {
                         t.call(this, "css"), this._overwriteProps.length = 0
                     },
                     o = {},
                     h = a.prototype = new t("css");
                 h.constructor = a, a.version = "1.9.7", a.API = 2, a.defaultTransformPerspective = 0, h = "px", a.suffixMap = {
                     top: h,
                     right: h,
                     bottom: h,
                     left: h,
                     width: h,
                     height: h,
                     fontSize: h,
                     padding: h,
                     margin: h,
                     perspective: h
                 };
                 var l, _, u, p, f, c, m = /(?:\d|\-\d|\.\d|\-\.\d)+/g,
                     d = /(?:\d|\-\d|\.\d|\-\.\d|\+=\d|\-=\d|\+=.\d|\-=\.\d)+/g,
                     g = /(?:\+=|\-=|\-|\b)[\d\-\.]+[a-zA-Z0-9]*(?:%|\b)/gi,
                     v = /[^\d\-\.]/g,
                     y = /(?:\d|\-|\+|=|#|\.)*/g,
                     T = /opacity *= *([^)]*)/,
                     w = /opacity:([^;]*)/,
                     x = /alpha\(opacity *=.+?\)/i,
                     b = /^(rgb|hsl)/,
                     P = /([A-Z])/g,
                     k = /-([a-z])/gi,
                     R = /(^(?:url\(\"|url\())|(?:(\"\))$|\)$)/gi,
                     S = function (t, e) {
                         return e.toUpperCase()
                     },
                     A = /(?:Left|Right|Width)/i,
                     C = /(M11|M12|M21|M22)=[\d\-\.e]+/gi,
                     O = /progid\:DXImageTransform\.Microsoft\.Matrix\(.+?\)/i,
                     D = /,(?=[^\)]*(?:\(|$))/gi,
                     M = Math.PI / 180,
                     I = 180 / Math.PI,
                     F = {},
                     E = document,
                     N = E.createElement("div"),
                     L = E.createElement("img"),
                     X = a._internals = {
                         _specialProps: o
                     },
                     U = navigator.userAgent,
                     z = function () {
                         var t, e = U.indexOf("Android"),
                             i = E.createElement("div");
                         return u = -1 !== U.indexOf("Safari") && -1 === U.indexOf("Chrome") && (-1 === e || Number(U.substr(e + 8, 1)) > 3), f = u && 6 > Number(U.substr(U.indexOf("Version/") + 8, 1)), p = -1 !== U.indexOf("Firefox"), /MSIE ([0-9]{1,}[\.0-9]{0,})/.exec(U), c = parseFloat(RegExp.$1), i.innerHTML = "<a style='top:1px;opacity:.55;'>a</a>", t = i.getElementsByTagName("a")[0], t ? /^0.55/.test(t.style.opacity) : !1
                     }(),
                     Y = function (t) {
                         return T.test("string" == typeof t ? t : (t.currentStyle ? t.currentStyle.filter : t.style.filter) || "") ? parseFloat(RegExp.$1) / 100 : 1
                     },
                     B = function (t) {
                         window.console && console.log(t)
                     },
                     j = "",
                     q = "",
                     V = function (t, e) {
                         e = e || N;
                         var i, s, r = e.style;
                         if (void 0 !== r[t]) return t;
                         for (t = t.charAt(0).toUpperCase() + t.substr(1), i = ["O", "Moz", "ms", "Ms", "Webkit"], s = 5; --s > -1 && void 0 === r[i[s] + t];);
                         return s >= 0 ? (q = 3 === s ? "ms" : i[s], j = "-" + q.toLowerCase() + "-", q + t) : null
                     },
                     Z = E.defaultView ? E.defaultView.getComputedStyle : function () {},
                     G = a.getStyle = function (t, e, i, s, r) {
                         var n;
                         return z || "opacity" !== e ? (!s && t.style[e] ? n = t.style[e] : (i = i || Z(t, null)) ? (t = i.getPropertyValue(e.replace(P, "-$1").toLowerCase()), n = t || i.length ? t : i[e]) : t.currentStyle && (i = t.currentStyle, n = i[e]), null == r || n && "none" !== n && "auto" !== n && "auto auto" !== n ? n : r) : Y(t)
                     },
                     $ = function (t, e, i, s, r) {
                         if ("px" === s || !s) return i;
                         if ("auto" === s || !i) return 0;
                         var n, a = A.test(e),
                             o = t,
                             h = N.style,
                             l = 0 > i;
                         return l && (i = -i), "%" === s && -1 !== e.indexOf("border") ? n = i / 100 * (a ? t.clientWidth : t.clientHeight) : (h.cssText = "border-style:solid; border-width:0; position:absolute; line-height:0;", "%" !== s && o.appendChild ? h[a ? "borderLeftWidth" : "borderTopWidth"] = i + s : (o = t.parentNode || E.body, h[a ? "width" : "height"] = i + s), o.appendChild(N), n = parseFloat(N[a ? "offsetWidth" : "offsetHeight"]), o.removeChild(N), 0 !== n || r || (n = $(t, e, i, s, !0))), l ? -n : n
                     },
                     Q = function (t, e, i) {
                         if ("absolute" !== G(t, "position", i)) return 0;
                         var s = "left" === e ? "Left" : "Top",
                             r = G(t, "margin" + s, i);
                         return t["offset" + s] - ($(t, e, parseFloat(r), r.replace(y, "")) || 0)
                     },
                     W = function (t, e) {
                         var i, s, r = {};
                         if (e = e || Z(t, null))
                             if (i = e.length)
                                 for (; --i > -1;) r[e[i].replace(k, S)] = e.getPropertyValue(e[i]);
                             else
                                 for (i in e) r[i] = e[i];
                         else if (e = t.currentStyle || t.style)
                             for (i in e) r[i.replace(k, S)] = e[i];
                         return z || (r.opacity = Y(t)), s = be(t, e, !1), r.rotation = s.rotation * I, r.skewX = s.skewX * I, r.scaleX = s.scaleX, r.scaleY = s.scaleY, r.x = s.x, r.y = s.y, xe && (r.z = s.z, r.rotationX = s.rotationX * I, r.rotationY = s.rotationY * I, r.scaleZ = s.scaleZ), r.filters && delete r.filters, r
                     },
                     H = function (t, e, i, s, r) {
                         var n, a, o, h = {},
                             l = t.style;
                         for (a in i) "cssText" !== a && "length" !== a && isNaN(a) && (e[a] !== (n = i[a]) || r && r[a]) && -1 === a.indexOf("Origin") && ("number" == typeof n || "string" == typeof n) && (h[a] = "auto" !== n || "left" !== a && "top" !== a ? "" !== n && "auto" !== n && "none" !== n || "string" != typeof e[a] || "" === e[a].replace(v, "") ? n : 0 : Q(t, a), void 0 !== l[a] && (o = new ue(l, a, l[a], o)));
                         if (s)
                             for (a in s) "className" !== a && (h[a] = s[a]);
                         return {
                             difs: h,
                             firstMPT: o
                         }
                     },
                     K = {
                         width: ["Left", "Right"],
                         height: ["Top", "Bottom"]
                     },
                     J = ["marginLeft", "marginRight", "marginTop", "marginBottom"],
                     te = function (t, e, i) {
                         var s = parseFloat("width" === e ? t.offsetWidth : t.offsetHeight),
                             r = K[e],
                             n = r.length;
                         for (i = i || Z(t, null); --n > -1;) s -= parseFloat(G(t, "padding" + r[n], i, !0)) || 0, s -= parseFloat(G(t, "border" + r[n] + "Width", i, !0)) || 0;
                         return s
                     },
                     ee = function (t, e) {
                         (null == t || "" === t || "auto" === t || "auto auto" === t) && (t = "0 0");
                         var i = t.split(" "),
                             s = -1 !== t.indexOf("left") ? "0%" : -1 !== t.indexOf("right") ? "100%" : i[0],
                             r = -1 !== t.indexOf("top") ? "0%" : -1 !== t.indexOf("bottom") ? "100%" : i[1];
                         return null == r ? r = "0" : "center" === r && (r = "50%"), ("center" === s || isNaN(parseFloat(s))) && (s = "50%"), e && (e.oxp = -1 !== s.indexOf("%"), e.oyp = -1 !== r.indexOf("%"), e.oxr = "=" === s.charAt(1), e.oyr = "=" === r.charAt(1), e.ox = parseFloat(s.replace(v, "")), e.oy = parseFloat(r.replace(v, ""))), s + " " + r + (i.length > 2 ? " " + i[2] : "")
                     },
                     ie = function (t, e) {
                         return "string" == typeof t && "=" === t.charAt(1) ? parseInt(t.charAt(0) + "1", 10) * parseFloat(t.substr(2)) : parseFloat(t) - parseFloat(e)
                     },
                     se = function (t, e) {
                         return null == t ? e : "string" == typeof t && "=" === t.charAt(1) ? parseInt(t.charAt(0) + "1", 10) * Number(t.substr(2)) + e : parseFloat(t)
                     },
                     re = function (t, e, i, s) {
                         var r, n, a, o, h = 1e-6;
                         return null == t ? o = e : "number" == typeof t ? o = t * M : (r = 2 * Math.PI, n = t.split("_"), a = Number(n[0].replace(v, "")) * (-1 === t.indexOf("rad") ? M : 1) - ("=" === t.charAt(1) ? 0 : e), n.length && (s && (s[i] = e + a), -1 !== t.indexOf("short") && (a %= r, a !== a % (r / 2) && (a = 0 > a ? a + r : a - r)), -1 !== t.indexOf("_cw") && 0 > a ? a = (a + 9999999999 * r) % r - (0 | a / r) * r : -1 !== t.indexOf("ccw") && a > 0 && (a = (a - 9999999999 * r) % r - (0 | a / r) * r)), o = e + a), h > o && o > -h && (o = 0), o
                     },
                     ne = {
                         aqua: [0, 255, 255],
                         lime: [0, 255, 0],
                         silver: [192, 192, 192],
                         black: [0, 0, 0],
                         maroon: [128, 0, 0],
                         teal: [0, 128, 128],
                         blue: [0, 0, 255],
                         navy: [0, 0, 128],
                         white: [255, 255, 255],
                         fuchsia: [255, 0, 255],
                         olive: [128, 128, 0],
                         yellow: [255, 255, 0],
                         orange: [255, 165, 0],
                         gray: [128, 128, 128],
                         purple: [128, 0, 128],
                         green: [0, 128, 0],
                         red: [255, 0, 0],
                         pink: [255, 192, 203],
                         cyan: [0, 255, 255],
                         transparent: [255, 255, 255, 0]
                     },
                     ae = function (t, e, i) {
                         return t = 0 > t ? t + 1 : t > 1 ? t - 1 : t, 0 | 255 * (1 > 6 * t ? e + 6 * (i - e) * t : .5 > t ? i : 2 > 3 * t ? e + 6 * (i - e) * (2 / 3 - t) : e) + .5
                     },
                     oe = function (t) {
                         var e, i, s, r, n, a;
                         return t && "" !== t ? "number" == typeof t ? [t >> 16, 255 & t >> 8, 255 & t] : ("," === t.charAt(t.length - 1) && (t = t.substr(0, t.length - 1)), ne[t] ? ne[t] : "#" === t.charAt(0) ? (4 === t.length && (e = t.charAt(1), i = t.charAt(2), s = t.charAt(3), t = "#" + e + e + i + i + s + s), t = parseInt(t.substr(1), 16), [t >> 16, 255 & t >> 8, 255 & t]) : "hsl" === t.substr(0, 3) ? (t = t.match(m), r = Number(t[0]) % 360 / 360, n = Number(t[1]) / 100, a = Number(t[2]) / 100, i = .5 >= a ? a * (n + 1) : a + n - a * n, e = 2 * a - i, t.length > 3 && (t[3] = Number(t[3])), t[0] = ae(r + 1 / 3, e, i), t[1] = ae(r, e, i), t[2] = ae(r - 1 / 3, e, i), t) : (t = t.match(m) || ne.transparent, t[0] = Number(t[0]), t[1] = Number(t[1]), t[2] = Number(t[2]), t.length > 3 && (t[3] = Number(t[3])), t)) : ne.black
                     },
                     he = "(?:\\b(?:(?:rgb|rgba|hsl|hsla)\\(.+?\\))|\\B#.+?\\b";
                 for (h in ne) he += "|" + h + "\\b";
                 he = RegExp(he + ")", "gi");
                 var le = function (t, e, i, s) {
                         if (null == t) return function (t) {
                             return t
                         };
                         var r, n = e ? (t.match(he) || [""])[0] : "",
                             a = t.split(n).join("").match(g) || [],
                             o = t.substr(0, t.indexOf(a[0])),
                             h = ")" === t.charAt(t.length - 1) ? ")" : "",
                             l = -1 !== t.indexOf(" ") ? " " : ",",
                             _ = a.length,
                             u = _ > 0 ? a[0].replace(m, "") : "";
                         return _ ? r = e ? function (t) {
                             var e, p, f, c;
                             if ("number" == typeof t) t += u;
                             else if (s && D.test(t)) {
                                 for (c = t.replace(D, "|").split("|"), f = 0; c.length > f; f++) c[f] = r(c[f]);
                                 return c.join(",")
                             }
                             if (e = (t.match(he) || [n])[0], p = t.split(e).join("").match(g) || [], f = p.length, _ > f--)
                                 for (; _ > ++f;) p[f] = i ? p[0 | (f - 1) / 2] : a[f];
                             return o + p.join(l) + l + e + h + (-1 !== t.indexOf("inset") ? " inset" : "")
                         } : function (t) {
                             var e, n, p;
                             if ("number" == typeof t) t += u;
                             else if (s && D.test(t)) {
                                 for (n = t.replace(D, "|").split("|"), p = 0; n.length > p; p++) n[p] = r(n[p]);
                                 return n.join(",")
                             }
                             if (e = t.match(g) || [], p = e.length, _ > p--)
                                 for (; _ > ++p;) e[p] = i ? e[0 | (p - 1) / 2] : a[p];
                             return o + e.join(l) + h
                         } : function (t) {
                             return t
                         }
                     },
                     _e = function (t) {
                         return t = t.split(","),
                             function (e, i, s, r, n, a, o) {
                                 var h, l = (i + "").split(" ");
                                 for (o = {}, h = 0; 4 > h; h++) o[t[h]] = l[h] = l[h] || l[(h - 1) / 2 >> 0];
                                 return r.parse(e, o, n, a)
                             }
                     },
                     ue = (X._setPluginRatio = function (t) {
                         this.plugin.setRatio(t);
                         for (var e, i, s, r, n = this.data, a = n.proxy, o = n.firstMPT, h = 1e-6; o;) e = a[o.v], o.r ? e = e > 0 ? 0 | e + .5 : 0 | e - .5 : h > e && e > -h && (e = 0), o.t[o.p] = e, o = o._next;
                         if (n.autoRotate && (n.autoRotate.rotation = a.rotation), 1 === t)
                             for (o = n.firstMPT; o;) {
                                 if (i = o.t, i.type) {
                                     if (1 === i.type) {
                                         for (r = i.xs0 + i.s + i.xs1, s = 1; i.l > s; s++) r += i["xn" + s] + i["xs" + (s + 1)];
                                         i.e = r
                                     }
                                 } else i.e = i.s + i.xs0;
                                 o = o._next
                             }
                     }, function (t, e, i, s, r) {
                         this.t = t, this.p = e, this.v = i, this.r = r, s && (s._prev = this, this._next = s)
                     }),
                     pe = (X._parseToProxy = function (t, e, i, s, r, n) {
                         var a, o, h, l, _, u = s,
                             p = {},
                             f = {},
                             c = i._transform,
                             m = F;
                         for (i._transform = null, F = e, s = _ = i.parse(t, e, s, r), F = m, n && (i._transform = c, u && (u._prev = null, u._prev && (u._prev._next = null))); s && s !== u;) {
                             if (1 >= s.type && (o = s.p, f[o] = s.s + s.c, p[o] = s.s, n || (l = new ue(s, "s", o, l, s.r), s.c = 0), 1 === s.type))
                                 for (a = s.l; --a > 0;) h = "xn" + a, o = s.p + "_" + h, f[o] = s.data[h], p[o] = s[h], n || (l = new ue(s, h, o, l, s.rxp[h]));
                             s = s._next
                         }
                         return {
                             proxy: p,
                             end: f,
                             firstMPT: l,
                             pt: _
                         }
                     }, X.CSSPropTween = function (t, e, s, r, a, o, h, l, _, u, p) {
                         this.t = t, this.p = e, this.s = s, this.c = r, this.n = h || "css_" + e, t instanceof pe || n.push(this.n), this.r = l, this.type = o || 0, _ && (this.pr = _, i = !0), this.b = void 0 === u ? s : u, this.e = void 0 === p ? s + r : p, a && (this._next = a, a._prev = this)
                     }),
                     fe = a.parseComplex = function (t, e, i, s, r, n, a, o, h, _) {
                         i = i || n || "", a = new pe(t, e, 0, 0, a, _ ? 2 : 1, null, !1, o, i, s), s += "";
                         var u, p, f, c, g, v, y, T, w, x, P, k, R = i.split(", ").join(",").split(" "),
                             S = s.split(", ").join(",").split(" "),
                             A = R.length,
                             C = l !== !1;
                         for ((-1 !== s.indexOf(",") || -1 !== i.indexOf(",")) && (R = R.join(" ").replace(D, ", ").split(" "), S = S.join(" ").replace(D, ", ").split(" "), A = R.length), A !== S.length && (R = (n || "").split(" "), A = R.length), a.plugin = h, a.setRatio = _, u = 0; A > u; u++)
                             if (c = R[u], g = S[u], T = parseFloat(c), T || 0 === T) a.appendXtra("", T, ie(g, T), g.replace(d, ""), C && -1 !== g.indexOf("px"), !0);
                             else if (r && ("#" === c.charAt(0) || ne[c] || b.test(c))) k = "," === g.charAt(g.length - 1) ? ")," : ")", c = oe(c), g = oe(g), w = c.length + g.length > 6, w && !z && 0 === g[3] ? (a["xs" + a.l] += a.l ? " transparent" : "transparent", a.e = a.e.split(S[u]).join("transparent")) : (z || (w = !1), a.appendXtra(w ? "rgba(" : "rgb(", c[0], g[0] - c[0], ",", !0, !0).appendXtra("", c[1], g[1] - c[1], ",", !0).appendXtra("", c[2], g[2] - c[2], w ? "," : k, !0), w && (c = 4 > c.length ? 1 : c[3], a.appendXtra("", c, (4 > g.length ? 1 : g[3]) - c, k, !1)));
                         else if (v = c.match(m)) {
                             if (y = g.match(d), !y || y.length !== v.length) return a;
                             for (f = 0, p = 0; v.length > p; p++) P = v[p], x = c.indexOf(P, f), a.appendXtra(c.substr(f, x - f), Number(P), ie(y[p], P), "", C && "px" === c.substr(x + P.length, 2), 0 === p), f = x + P.length;
                             a["xs" + a.l] += c.substr(f)
                         } else a["xs" + a.l] += a.l ? " " + c : c;
                         if (-1 !== s.indexOf("=") && a.data) {
                             for (k = a.xs0 + a.data.s, u = 1; a.l > u; u++) k += a["xs" + u] + a.data["xn" + u];
                             a.e = k + a["xs" + u]
                         }
                         return a.l || (a.type = -1, a.xs0 = a.e), a.xfirst || a
                     },
                     ce = 9;
                 for (h = pe.prototype, h.l = h.pr = 0; --ce > 0;) h["xn" + ce] = 0, h["xs" + ce] = "";
                 h.xs0 = "", h._next = h._prev = h.xfirst = h.data = h.plugin = h.setRatio = h.rxp = null, h.appendXtra = function (t, e, i, s, r, n) {
                     var a = this,
                         o = a.l;
                     return a["xs" + o] += n && o ? " " + t : t || "", i || 0 === o || a.plugin ? (a.l++, a.type = a.setRatio ? 2 : 1, a["xs" + a.l] = s || "", o > 0 ? (a.data["xn" + o] = e + i, a.rxp["xn" + o] = r, a["xn" + o] = e, a.plugin || (a.xfirst = new pe(a, "xn" + o, e, i, a.xfirst || a, 0, a.n, r, a.pr), a.xfirst.xs0 = 0), a) : (a.data = {
                         s: e + i
                     }, a.rxp = {}, a.s = e, a.c = i, a.r = r, a)) : (a["xs" + o] += e + (s || ""), a)
                 };
                 var me = function (t, e) {
                         e = e || {}, this.p = e.prefix ? V(t) || t : t, o[t] = o[this.p] = this, this.format = e.formatter || le(e.defaultValue, e.color, e.collapsible, e.multi), e.parser && (this.parse = e.parser), this.clrs = e.color, this.multi = e.multi, this.keyword = e.keyword, this.dflt = e.defaultValue, this.pr = e.priority || 0
                     },
                     de = X._registerComplexSpecialProp = function (t, e, i) {
                         "object" != typeof e && (e = {
                             parser: i
                         });
                         var s, r, n = t.split(","),
                             a = e.defaultValue;
                         for (i = i || [a], s = 0; n.length > s; s++) e.prefix = 0 === s && e.prefix, e.defaultValue = i[s] || a, r = new me(n[s], e)
                     },
                     ge = function (t) {
                         if (!o[t]) {
                             var e = t.charAt(0).toUpperCase() + t.substr(1) + "Plugin";
                             de(t, {
                                 parser: function (t, i, s, r, n, a, h) {
                                     var l = (window.GreenSockGlobals || window).com.greensock.plugins[e];
                                     return l ? (l._cssRegister(), o[s].parse(t, i, s, r, n, a, h)) : (B("Error: " + e + " js file not loaded."), n)
                                 }
                             })
                         }
                     };
                 h = me.prototype, h.parseComplex = function (t, e, i, s, r, n) {
                     var a, o, h, l, _, u, p = this.keyword;
                     if (this.multi && (D.test(i) || D.test(e) ? (o = e.replace(D, "|").split("|"), h = i.replace(D, "|").split("|")) : p && (o = [e], h = [i])), h) {
                         for (l = h.length > o.length ? h.length : o.length, a = 0; l > a; a++) e = o[a] = o[a] || this.dflt, i = h[a] = h[a] || this.dflt, p && (_ = e.indexOf(p), u = i.indexOf(p), _ !== u && (i = -1 === u ? h : o, i[a] += " " + p));
                         e = o.join(", "), i = h.join(", ")
                     }
                     return fe(t, this.p, e, i, this.clrs, this.dflt, s, this.pr, r, n)
                 }, h.parse = function (t, e, i, s, n, a) {
                     return this.parseComplex(t.style, this.format(G(t, this.p, r, !1, this.dflt)), this.format(e), n, a)
                 }, a.registerSpecialProp = function (t, e, i) {
                     de(t, {
                         parser: function (t, s, r, n, a, o) {
                             var h = new pe(t, r, 0, 0, a, 2, r, !1, i);
                             return h.plugin = o, h.setRatio = e(t, s, n._tween, r), h
                         },
                         priority: i
                     })
                 };
                 var ve = "scaleX,scaleY,scaleZ,x,y,z,skewX,rotation,rotationX,rotationY,perspective".split(","),
                     ye = V("transform"),
                     Te = j + "transform",
                     we = V("transformOrigin"),
                     xe = null !== V("perspective"),
                     be = function (t, e, i) {
                         var s, r, n, o, h, l, _, u, p, f, c, m, d, g = i ? t._gsTransform || {
                                 skewY: 0
                             } : {
                                 skewY: 0
                             },
                             v = 0 > g.scaleX,
                             y = 2e-5,
                             T = 1e5,
                             w = -Math.PI + 1e-4,
                             x = Math.PI - 1e-4,
                             b = xe ? parseFloat(G(t, we, e, !1, "0 0 0").split(" ")[2]) || g.zOrigin || 0 : 0;
                         if (ye) s = G(t, Te, e, !0);
                         else if (t.currentStyle)
                             if (s = t.currentStyle.filter.match(C), s && 4 === s.length) s = [s[0].substr(4), Number(s[2].substr(4)), Number(s[1].substr(4)), s[3].substr(4), g.x || 0, g.y || 0].join(",");
                             else {
                                 if (null != g.x) return g;
                                 s = ""
                             }
                         for (r = (s || "").match(/(?:\-|\b)[\d\-\.e]+\b/gi) || [], n = r.length; --n > -1;) o = Number(r[n]), r[n] = (h = o - (o |= 0)) ? (0 | h * T + (0 > h ? -.5 : .5)) / T + o : o;
                         if (16 === r.length) {
                             var P = r[8],
                                 k = r[9],
                                 R = r[10],
                                 S = r[12],
                                 A = r[13],
                                 O = r[14];
                             if (g.zOrigin && (O = -g.zOrigin, S = P * O - r[12], A = k * O - r[13], O = R * O + g.zOrigin - r[14]), !i || null == g.rotationX) {
                                 var D, M, I, F, E, N, L, X = r[0],
                                     U = r[1],
                                     z = r[2],
                                     Y = r[3],
                                     B = r[4],
                                     j = r[5],
                                     q = r[6],
                                     V = r[7],
                                     Z = r[11],
                                     $ = g.rotationX = Math.atan2(q, R),
                                     Q = w > $ || $ > x;
                                 $ && (F = Math.cos(-$), E = Math.sin(-$), D = B * F + P * E, M = j * F + k * E, I = q * F + R * E, P = B * -E + P * F, k = j * -E + k * F, R = q * -E + R * F, Z = V * -E + Z * F, B = D, j = M, q = I), $ = g.rotationY = Math.atan2(P, X), $ && (N = w > $ || $ > x, F = Math.cos(-$), E = Math.sin(-$), D = X * F - P * E, M = U * F - k * E, I = z * F - R * E, k = U * E + k * F, R = z * E + R * F, Z = Y * E + Z * F, X = D, U = M, z = I), $ = g.rotation = Math.atan2(U, j), $ && (L = w > $ || $ > x, F = Math.cos(-$), E = Math.sin(-$), X = X * F + B * E, M = U * F + j * E, j = U * -E + j * F, q = z * -E + q * F, U = M), L && Q ? g.rotation = g.rotationX = 0 : L && N ? g.rotation = g.rotationY = 0 : N && Q && (g.rotationY = g.rotationX = 0), g.scaleX = (0 | Math.sqrt(X * X + U * U) * T + .5) / T, g.scaleY = (0 | Math.sqrt(j * j + k * k) * T + .5) / T, g.scaleZ = (0 | Math.sqrt(q * q + R * R) * T + .5) / T, g.skewX = 0, g.perspective = Z ? 1 / (0 > Z ? -Z : Z) : 0, g.x = S, g.y = A, g.z = O
                             }
                         } else if (!(xe && 0 !== r.length && g.x === r[4] && g.y === r[5] && (g.rotationX || g.rotationY) || void 0 !== g.x && "none" === G(t, "display", e))) {
                             var W = r.length >= 6,
                                 H = W ? r[0] : 1,
                                 K = r[1] || 0,
                                 J = r[2] || 0,
                                 te = W ? r[3] : 1;
                             g.x = r[4] || 0, g.y = r[5] || 0, l = Math.sqrt(H * H + K * K), _ = Math.sqrt(te * te + J * J), u = H || K ? Math.atan2(K, H) : g.rotation || 0, p = J || te ? Math.atan2(J, te) + u : g.skewX || 0, f = l - Math.abs(g.scaleX || 0), c = _ - Math.abs(g.scaleY || 0), Math.abs(p) > Math.PI / 2 && Math.abs(p) < 1.5 * Math.PI && (v ? (l *= -1, p += 0 >= u ? Math.PI : -Math.PI, u += 0 >= u ? Math.PI : -Math.PI) : (_ *= -1, p += 0 >= p ? Math.PI : -Math.PI)), m = (u - g.rotation) % Math.PI, d = (p - g.skewX) % Math.PI, (void 0 === g.skewX || f > y || -y > f || c > y || -y > c || m > w && x > m && false | m * T || d > w && x > d && false | d * T) && (g.scaleX = l, g.scaleY = _, g.rotation = u, g.skewX = p), xe && (g.rotationX = g.rotationY = g.z = 0, g.perspective = parseFloat(a.defaultTransformPerspective) || 0, g.scaleZ = 1)
                         }
                         g.zOrigin = b;
                         for (n in g) y > g[n] && g[n] > -y && (g[n] = 0);
                         return i && (t._gsTransform = g), g
                     },
                     Pe = function (t) {
                         var e, i, s = this.data,
                             r = -s.rotation,
                             n = r + s.skewX,
                             a = 1e5,
                             o = (0 | Math.cos(r) * s.scaleX * a) / a,
                             h = (0 | Math.sin(r) * s.scaleX * a) / a,
                             l = (0 | Math.sin(n) * -s.scaleY * a) / a,
                             _ = (0 | Math.cos(n) * s.scaleY * a) / a,
                             u = this.t.style,
                             p = this.t.currentStyle;
                         if (p) {
                             i = h, h = -l, l = -i, e = p.filter, u.filter = "";
                             var f, m, d = this.t.offsetWidth,
                                 g = this.t.offsetHeight,
                                 v = "absolute" !== p.position,
                                 w = "progid:DXImageTransform.Microsoft.Matrix(M11=" + o + ", M12=" + h + ", M21=" + l + ", M22=" + _,
                                 x = s.x,
                                 b = s.y;
                             if (null != s.ox && (f = (s.oxp ? .01 * d * s.ox : s.ox) - d / 2, m = (s.oyp ? .01 * g * s.oy : s.oy) - g / 2, x += f - (f * o + m * h), b += m - (f * l + m * _)), v) f = d / 2, m = g / 2, w += ", Dx=" + (f - (f * o + m * h) + x) + ", Dy=" + (m - (f * l + m * _) + b) + ")";
                             else {
                                 var P, k, R, S = 8 > c ? 1 : -1;
                                 for (f = s.ieOffsetX || 0, m = s.ieOffsetY || 0, s.ieOffsetX = Math.round((d - ((0 > o ? -o : o) * d + (0 > h ? -h : h) * g)) / 2 + x), s.ieOffsetY = Math.round((g - ((0 > _ ? -_ : _) * g + (0 > l ? -l : l) * d)) / 2 + b), ce = 0; 4 > ce; ce++) k = J[ce], P = p[k], i = -1 !== P.indexOf("px") ? parseFloat(P) : $(this.t, k, parseFloat(P), P.replace(y, "")) || 0, R = i !== s[k] ? 2 > ce ? -s.ieOffsetX : -s.ieOffsetY : 2 > ce ? f - s.ieOffsetX : m - s.ieOffsetY, u[k] = (s[k] = Math.round(i - R * (0 === ce || 2 === ce ? 1 : S))) + "px";
                                 w += ", sizingMethod='auto expand')"
                             }
                             u.filter = -1 !== e.indexOf("DXImageTransform.Microsoft.Matrix(") ? e.replace(O, w) : w + " " + e, (0 === t || 1 === t) && 1 === o && 0 === h && 0 === l && 1 === _ && (v && -1 === w.indexOf("Dx=0, Dy=0") || T.test(e) && 100 !== parseFloat(RegExp.$1) || -1 === e.indexOf("gradient(") && u.removeAttribute("filter"))
                         }
                     },
                     ke = function () {
                         var t, e, i, s, r, n, a, o, h, l = this.data,
                             _ = this.t.style,
                             u = l.perspective,
                             f = l.scaleX,
                             c = 0,
                             m = 0,
                             d = 0,
                             g = 0,
                             v = l.scaleY,
                             y = 0,
                             T = 0,
                             w = 0,
                             x = 0,
                             b = l.scaleZ,
                             P = 0,
                             k = 0,
                             R = 0,
                             S = u ? -1 / u : 0,
                             A = l.rotation,
                             C = l.zOrigin,
                             O = 1e5;
                         p && (a = _.top ? "top" : _.bottom ? "bottom" : parseFloat(G(this.t, "top", null, !1)) ? "bottom" : "top", i = G(this.t, a, null, !1), o = parseFloat(i) || 0, h = i.substr((o + "").length) || "px", l._ffFix = !l._ffFix, _[a] = (l._ffFix ? o + .05 : o - .05) + h), (A || l.skewX) && (i = f * Math.cos(A), s = v * Math.sin(A), A -= l.skewX, c = f * -Math.sin(A), v *= Math.cos(A), f = i, g = s), A = l.rotationY, A && (t = Math.cos(A), e = Math.sin(A), i = f * t, s = g * t, r = b * -e, n = S * -e, m = f * e, y = g * e, b *= t, S *= t, f = i, g = s, w = r, k = n), A = l.rotationX, A && (t = Math.cos(A), e = Math.sin(A), i = c * t + m * e, s = v * t + y * e, r = x * t + b * e, n = R * t + S * e, m = c * -e + m * t, y = v * -e + y * t, b = x * -e + b * t, S = R * -e + S * t, c = i, v = s, x = r, R = n), C && (P -= C, d = m * P, T = y * P, P = b * P + C), d = (i = (d += l.x) - (d |= 0)) ? (0 | i * O + (0 > i ? -.5 : .5)) / O + d : d, T = (i = (T += l.y) - (T |= 0)) ? (0 | i * O + (0 > i ? -.5 : .5)) / O + T : T, P = (i = (P += l.z) - (P |= 0)) ? (0 | i * O + (0 > i ? -.5 : .5)) / O + P : P, _[ye] = "matrix3d(" + [(0 | f * O) / O, (0 | g * O) / O, (0 | w * O) / O, (0 | k * O) / O, (0 | c * O) / O, (0 | v * O) / O, (0 | x * O) / O, (0 | R * O) / O, (0 | m * O) / O, (0 | y * O) / O, (0 | b * O) / O, (0 | S * O) / O, d, T, P, u ? 1 + -P / u : 1].join(",") + ")"
                     },
                     Re = function () {
                         var t, e, i, s, r, n, a, o, h, l = this.data,
                             _ = this.t,
                             u = _.style;
                         p && (t = u.top ? "top" : u.bottom ? "bottom" : parseFloat(G(_, "top", null, !1)) ? "bottom" : "top", e = G(_, t, null, !1), i = parseFloat(e) || 0, s = e.substr((i + "").length) || "px", l._ffFix = !l._ffFix, u[t] = (l._ffFix ? i + .05 : i - .05) + s), l.rotation || l.skewX ? (r = l.rotation, n = r - l.skewX, a = 1e5, o = l.scaleX * a, h = l.scaleY * a, u[ye] = "matrix(" + (0 | Math.cos(r) * o) / a + "," + (0 | Math.sin(r) * o) / a + "," + (0 | Math.sin(n) * -h) / a + "," + (0 | Math.cos(n) * h) / a + "," + l.x + "," + l.y + ")") : u[ye] = "matrix(" + l.scaleX + ",0,0," + l.scaleY + "," + l.x + "," + l.y + ")"
                     };
                 de("transform,scale,scaleX,scaleY,scaleZ,x,y,z,rotation,rotationX,rotationY,rotationZ,skewX,skewY,shortRotation,shortRotationX,shortRotationY,shortRotationZ,transformOrigin,transformPerspective,directionalRotation", {
                     parser: function (t, e, i, s, n, a, o) {
                         if (s._transform) return n;
                         var h, l, _, u, p, f, c, m = s._transform = be(t, r, !0),
                             d = t.style,
                             g = 1e-6,
                             v = ve.length,
                             y = o,
                             T = {};
                         if ("string" == typeof y.transform && ye) _ = d.cssText, d[ye] = y.transform, d.display = "block", h = be(t, null, !1), d.cssText = _;
                         else if ("object" == typeof y) {
                             if (h = {
                                     scaleX: se(null != y.scaleX ? y.scaleX : y.scale, m.scaleX),
                                     scaleY: se(null != y.scaleY ? y.scaleY : y.scale, m.scaleY),
                                     scaleZ: se(null != y.scaleZ ? y.scaleZ : y.scale, m.scaleZ),
                                     x: se(y.x, m.x),
                                     y: se(y.y, m.y),
                                     z: se(y.z, m.z),
                                     perspective: se(y.transformPerspective, m.perspective)
                                 }, c = y.directionalRotation, null != c)
                                 if ("object" == typeof c)
                                     for (_ in c) y[_] = c[_];
                                 else y.rotation = c;
                             h.rotation = re("rotation" in y ? y.rotation : "shortRotation" in y ? y.shortRotation + "_short" : "rotationZ" in y ? y.rotationZ : m.rotation * I, m.rotation, "rotation", T), xe && (h.rotationX = re("rotationX" in y ? y.rotationX : "shortRotationX" in y ? y.shortRotationX + "_short" : m.rotationX * I || 0, m.rotationX, "rotationX", T), h.rotationY = re("rotationY" in y ? y.rotationY : "shortRotationY" in y ? y.shortRotationY + "_short" : m.rotationY * I || 0, m.rotationY, "rotationY", T)), h.skewX = null == y.skewX ? m.skewX : re(y.skewX, m.skewX), h.skewY = null == y.skewY ? m.skewY : re(y.skewY, m.skewY), (l = h.skewY - m.skewY) && (h.skewX += l, h.rotation += l)
                         }
                         for (p = m.z || m.rotationX || m.rotationY || h.z || h.rotationX || h.rotationY || h.perspective, p || null == y.scale || (h.scaleZ = 1); --v > -1;) i = ve[v], u = h[i] - m[i], (u > g || -g > u || null != F[i]) && (f = !0, n = new pe(m, i, m[i], u, n), i in T && (n.e = T[i]), n.xs0 = 0, n.plugin = a, s._overwriteProps.push(n.n));
                         return u = y.transformOrigin, (u || xe && p && m.zOrigin) && (ye ? (f = !0, u = (u || G(t, i, r, !1, "50% 50%")) + "", i = we, n = new pe(d, i, 0, 0, n, -1, "css_transformOrigin"), n.b = d[i], n.plugin = a, xe ? (_ = m.zOrigin, u = u.split(" "), m.zOrigin = (u.length > 2 ? parseFloat(u[2]) : _) || 0, n.xs0 = n.e = d[i] = u[0] + " " + (u[1] || "50%") + " 0px", n = new pe(m, "zOrigin", 0, 0, n, -1, n.n), n.b = _, n.xs0 = n.e = m.zOrigin) : n.xs0 = n.e = d[i] = u) : ee(u + "", m)), f && (s._transformType = p || 3 === this._transformType ? 3 : 2), n
                     },
                     prefix: !0
                 }), de("boxShadow", {
                     defaultValue: "0px 0px 0px 0px #999",
                     prefix: !0,
                     color: !0,
                     multi: !0,
                     keyword: "inset"
                 }), de("borderRadius", {
                     defaultValue: "0px",
                     parser: function (t, e, i, n, a) {
                         e = this.format(e);
                         var o, h, l, _, u, p, f, c, m, d, g, v, y, T, w, x, b = ["borderTopLeftRadius", "borderTopRightRadius", "borderBottomRightRadius", "borderBottomLeftRadius"],
                             P = t.style;
                         for (m = parseFloat(t.offsetWidth), d = parseFloat(t.offsetHeight), o = e.split(" "), h = 0; b.length > h; h++) this.p.indexOf("border") && (b[h] = V(b[h])), u = _ = G(t, b[h], r, !1, "0px"), -1 !== u.indexOf(" ") && (_ = u.split(" "), u = _[0], _ = _[1]), p = l = o[h], f = parseFloat(u), v = u.substr((f + "").length), y = "=" === p.charAt(1), y ? (c = parseInt(p.charAt(0) + "1", 10), p = p.substr(2), c *= parseFloat(p), g = p.substr((c + "").length - (0 > c ? 1 : 0)) || "") : (c = parseFloat(p), g = p.substr((c + "").length)), "" === g && (g = s[i] || v), g !== v && (T = $(t, "borderLeft", f, v), w = $(t, "borderTop", f, v), "%" === g ? (u = 100 * (T / m) + "%", _ = 100 * (w / d) + "%") : "em" === g ? (x = $(t, "borderLeft", 1, "em"), u = T / x + "em", _ = w / x + "em") : (u = T + "px", _ = w + "px"), y && (p = parseFloat(u) + c + g, l = parseFloat(_) + c + g)), a = fe(P, b[h], u + " " + _, p + " " + l, !1, "0px", a);
                         return a
                     },
                     prefix: !0,
                     formatter: le("0px 0px 0px 0px", !1, !0)
                 }), de("backgroundPosition", {
                     defaultValue: "0 0",
                     parser: function (t, e, i, s, n, a) {
                         var o, h, l, _, u, p, f = "background-position",
                             m = r || Z(t, null),
                             d = this.format((m ? c ? m.getPropertyValue(f + "-x") + " " + m.getPropertyValue(f + "-y") : m.getPropertyValue(f) : t.currentStyle.backgroundPositionX + " " + t.currentStyle.backgroundPositionY) || "0 0"),
                             g = this.format(e);
                         if (-1 !== d.indexOf("%") != (-1 !== g.indexOf("%")) && (p = G(t, "backgroundImage").replace(R, ""), p && "none" !== p)) {
                             for (o = d.split(" "), h = g.split(" "), L.setAttribute("src", p), l = 2; --l > -1;) d = o[l], _ = -1 !== d.indexOf("%"), _ !== (-1 !== h[l].indexOf("%")) && (u = 0 === l ? t.offsetWidth - L.width : t.offsetHeight - L.height, o[l] = _ ? parseFloat(d) / 100 * u + "px" : 100 * (parseFloat(d) / u) + "%");
                             d = o.join(" ")
                         }
                         return this.parseComplex(t.style, d, g, n, a)
                     },
                     formatter: ee
                 }), de("backgroundSize", {
                     defaultValue: "0 0",
                     formatter: ee
                 }), de("perspective", {
                     defaultValue: "0px",
                     prefix: !0
                 }), de("perspectiveOrigin", {
                     defaultValue: "50% 50%",
                     prefix: !0
                 }), de("transformStyle", {
                     prefix: !0
                 }), de("backfaceVisibility", {
                     prefix: !0
                 }), de("margin", {
                     parser: _e("marginTop,marginRight,marginBottom,marginLeft")
                 }), de("padding", {
                     parser: _e("paddingTop,paddingRight,paddingBottom,paddingLeft")
                 }), de("clip", {
                     defaultValue: "rect(0px,0px,0px,0px)",
                     parser: function (t, e, i, s, n, a) {
                         var o, h, l;
                         return 9 > c ? (h = t.currentStyle, l = 8 > c ? " " : ",", o = "rect(" + h.clipTop + l + h.clipRight + l + h.clipBottom + l + h.clipLeft + ")", e = this.format(e).split(",").join(l)) : (o = this.format(G(t, this.p, r, !1, this.dflt)), e = this.format(e)), this.parseComplex(t.style, o, e, n, a)
                     }
                 }), de("textShadow", {
                     defaultValue: "0px 0px 0px #999",
                     color: !0,
                     multi: !0
                 }), de("autoRound,strictUnits", {
                     parser: function (t, e, i, s, r) {
                         return r
                     }
                 }), de("border", {
                     defaultValue: "0px solid #000",
                     parser: function (t, e, i, s, n, a) {
                         return this.parseComplex(t.style, this.format(G(t, "borderTopWidth", r, !1, "0px") + " " + G(t, "borderTopStyle", r, !1, "solid") + " " + G(t, "borderTopColor", r, !1, "#000")), this.format(e), n, a)
                     },
                     color: !0,
                     formatter: function (t) {
                         var e = t.split(" ");
                         return e[0] + " " + (e[1] || "solid") + " " + (t.match(he) || ["#000"])[0]
                     }
                 }), de("float,cssFloat,styleFloat", {
                     parser: function (t, e, i, s, r) {
                         var n = t.style,
                             a = "cssFloat" in n ? "cssFloat" : "styleFloat";
                         return new pe(n, a, 0, 0, r, -1, i, !1, 0, n[a], e)
                     }
                 });
                 var Se = function (t) {
                     var e, i = this.t,
                         s = i.filter,
                         r = 0 | this.s + this.c * t;
                     100 === r && (-1 === s.indexOf("atrix(") && -1 === s.indexOf("radient(") ? (i.removeAttribute("filter"), e = !G(this.data, "filter")) : (i.filter = s.replace(x, ""), e = !0)), e || (this.xn1 && (i.filter = s = s || "alpha(opacity=100)"), -1 === s.indexOf("opacity") ? i.filter += " alpha(opacity=" + r + ")" : i.filter = s.replace(T, "opacity=" + r))
                 };
                 de("opacity,alpha,autoAlpha", {
                     defaultValue: "1",
                     parser: function (t, e, i, s, n, a) {
                         var o, h = parseFloat(G(t, "opacity", r, !1, "1")),
                             l = t.style;
                         return e = parseFloat(e), "autoAlpha" === i && (o = G(t, "visibility", r), 1 === h && "hidden" === o && 0 !== e && (h = 0), n = new pe(l, "visibility", 0, 0, n, -1, null, !1, 0, 0 !== h ? "visible" : "hidden", 0 === e ? "hidden" : "visible"), n.xs0 = "visible", s._overwriteProps.push(n.n)), z ? n = new pe(l, "opacity", h, e - h, n) : (n = new pe(l, "opacity", 100 * h, 100 * (e - h), n), n.xn1 = "autoAlpha" === i ? 1 : 0, l.zoom = 1, n.type = 2, n.b = "alpha(opacity=" + n.s + ")", n.e = "alpha(opacity=" + (n.s + n.c) + ")", n.data = t, n.plugin = a, n.setRatio = Se), n
                     }
                 });
                 var Ae = function (t, e) {
                         e && (t.removeProperty ? t.removeProperty(e.replace(P, "-$1").toLowerCase()) : t.removeAttribute(e))
                     },
                     Ce = function (t) {
                         if (this.t._gsClassPT = this, 1 === t || 0 === t) {
                             this.t.className = 0 === t ? this.b : this.e;
                             for (var e = this.data, i = this.t.style; e;) e.v ? i[e.p] = e.v : Ae(i, e.p), e = e._next;
                             1 === t && this.t._gsClassPT === this && (this.t._gsClassPT = null)
                         } else this.t.className !== this.e && (this.t.className = this.e)
                     };
                 de("className", {
                     parser: function (t, e, s, n, a, o, h) {
                         var l, _, u, p, f, c = t.className,
                             m = t.style.cssText;
                         if (a = n._classNamePT = new pe(t, s, 0, 0, a, 2), a.setRatio = Ce, a.pr = -11, i = !0, a.b = c, _ = W(t, r), u = t._gsClassPT) {
                             for (p = {}, f = u.data; f;) p[f.p] = 1, f = f._next;
                             u.setRatio(1)
                         }
                         return t._gsClassPT = a, a.e = "=" !== e.charAt(1) ? e : c.replace(RegExp("\\s*\\b" + e.substr(2) + "\\b"), "") + ("+" === e.charAt(0) ? " " + e.substr(2) : ""), n._tween._duration && (t.className = a.e, l = H(t, _, W(t), h, p), t.className = c, a.data = l.firstMPT, t.style.cssText = m, a = a.xfirst = n.parse(t, l.difs, a, o)), a
                     }
                 });
                 var Oe = function (t) {
                     if ((1 === t || 0 === t) && this.data._totalTime === this.data._totalDuration)
                         for (var e, i = "all" === this.e, s = this.t.style, r = i ? s.cssText.split(";") : this.e.split(","), n = r.length, a = o.transform.parse; --n > -1;) e = r[n], i && (e = e.substr(0, e.indexOf(":")).split(" ").join("")), o[e] && (e = o[e].parse === a ? ye : o[e].p), Ae(s, e)
                 };
                 for (de("clearProps", {
                         parser: function (t, e, s, r, n) {
                             return n = new pe(t, s, 0, 0, n, 2), n.setRatio = Oe, n.e = e, n.pr = -10, n.data = r._tween, i = !0, n
                         }
                     }), h = "bezier,throwProps,physicsProps,physics2D".split(","), ce = h.length; ce--;) ge(h[ce]);
                 h = a.prototype, h._firstPT = null, h._onInitTween = function (t, e, o) {
                     if (!t.nodeType) return !1;
                     this._target = t, this._tween = o, this._vars = e, l = e.autoRound, i = !1, s = e.suffixMap || a.suffixMap, r = Z(t, ""), n = this._overwriteProps;
                     var h, p, c, m, d, g, v, y, T, x = t.style;
                     if (_ && "" === x.zIndex && (h = G(t, "zIndex", r), ("auto" === h || "" === h) && (x.zIndex = 0)), "string" == typeof e && (m = x.cssText, h = W(t, r), x.cssText = m + ";" + e, h = H(t, h, W(t)).difs, !z && w.test(e) && (h.opacity = parseFloat(RegExp.$1)), e = h, x.cssText = m), this._firstPT = p = this.parse(t, e, null), this._transformType) {
                         for (T = 3 === this._transformType, ye ? u && (_ = !0, "" === x.zIndex && (v = G(t, "zIndex", r), ("auto" === v || "" === v) && (x.zIndex = 0)), f && (x.WebkitBackfaceVisibility = this._vars.WebkitBackfaceVisibility || (T ? "visible" : "hidden"))) : x.zoom = 1, c = p; c && c._next;) c = c._next;
                         y = new pe(t, "transform", 0, 0, null, 2), this._linkCSSP(y, null, c), y.setRatio = T && xe ? ke : ye ? Re : Pe, y.data = this._transform || be(t, r, !0), n.pop()
                     }
                     if (i) {
                         for (; p;) {
                             for (g = p._next, c = m; c && c.pr > p.pr;) c = c._next;
                             (p._prev = c ? c._prev : d) ? p._prev._next = p: m = p, (p._next = c) ? c._prev = p : d = p, p = g
                         }
                         this._firstPT = m
                     }
                     return !0
                 }, h.parse = function (t, e, i, n) {
                     var a, h, _, u, p, f, c, m, d, g, v = t.style;
                     for (a in e) f = e[a], h = o[a], h ? i = h.parse(t, f, a, this, i, n, e) : (p = G(t, a, r) + "", d = "string" == typeof f, "color" === a || "fill" === a || "stroke" === a || -1 !== a.indexOf("Color") || d && b.test(f) ? (d || (f = oe(f), f = (f.length > 3 ? "rgba(" : "rgb(") + f.join(",") + ")"), i = fe(v, a, p, f, !0, "transparent", i, 0, n)) : !d || -1 === f.indexOf(" ") && -1 === f.indexOf(",") ? (_ = parseFloat(p), c = _ || 0 === _ ? p.substr((_ + "").length) : "", ("" === p || "auto" === p) && ("width" === a || "height" === a ? (_ = te(t, a, r), c = "px") : "left" === a || "top" === a ? (_ = Q(t, a, r), c = "px") : (_ = "opacity" !== a ? 0 : 1, c = "")), g = d && "=" === f.charAt(1), g ? (u = parseInt(f.charAt(0) + "1", 10), f = f.substr(2), u *= parseFloat(f), m = f.replace(y, "")) : (u = parseFloat(f), m = d ? f.substr((u + "").length) || "" : ""), "" === m && (m = s[a] || c), f = u || 0 === u ? (g ? u + _ : u) + m : e[a], c !== m && "" !== m && (u || 0 === u) && (_ || 0 === _) && (_ = $(t, a, _, c), "%" === m ? (_ /= $(t, a, 100, "%") / 100, _ > 100 && (_ = 100), e.strictUnits !== !0 && (p = _ + "%")) : "em" === m ? _ /= $(t, a, 1, "em") : (u = $(t, a, u, m), m = "px"), g && (u || 0 === u) && (f = u + _ + m)), g && (u += _), !_ && 0 !== _ || !u && 0 !== u ? void 0 !== v[a] && (f || "NaN" != f + "" && null != f) ? (i = new pe(v, a, u || _ || 0, 0, i, -1, "css_" + a, !1, 0, p, f), i.xs0 = "none" !== f || "display" !== a && -1 === a.indexOf("Style") ? f : p) : B("invalid " + a + " tween value: " + e[a]) : (i = new pe(v, a, _, u - _, i, 0, "css_" + a, l !== !1 && ("px" === m || "zIndex" === a), 0, p, f), i.xs0 = m)) : i = fe(v, a, p, f, !0, null, i, 0, n)), n && i && !i.plugin && (i.plugin = n);
                     return i
                 }, h.setRatio = function (t) {
                     var e, i, s, r = this._firstPT,
                         n = 1e-6;
                     if (1 !== t || this._tween._time !== this._tween._duration && 0 !== this._tween._time)
                         if (t || this._tween._time !== this._tween._duration && 0 !== this._tween._time || this._tween._rawPrevTime === -1e-6)
                             for (; r;) {
                                 if (e = r.c * t + r.s, r.r ? e = e > 0 ? 0 | e + .5 : 0 | e - .5 : n > e && e > -n && (e = 0), r.type)
                                     if (1 === r.type)
                                         if (s = r.l, 2 === s) r.t[r.p] = r.xs0 + e + r.xs1 + r.xn1 + r.xs2;
                                         else if (3 === s) r.t[r.p] = r.xs0 + e + r.xs1 + r.xn1 + r.xs2 + r.xn2 + r.xs3;
                                 else if (4 === s) r.t[r.p] = r.xs0 + e + r.xs1 + r.xn1 + r.xs2 + r.xn2 + r.xs3 + r.xn3 + r.xs4;
                                 else if (5 === s) r.t[r.p] = r.xs0 + e + r.xs1 + r.xn1 + r.xs2 + r.xn2 + r.xs3 + r.xn3 + r.xs4 + r.xn4 + r.xs5;
                                 else {
                                     for (i = r.xs0 + e + r.xs1, s = 1; r.l > s; s++) i += r["xn" + s] + r["xs" + (s + 1)];
                                     r.t[r.p] = i
                                 } else -1 === r.type ? r.t[r.p] = r.xs0 : r.setRatio && r.setRatio(t);
                                 else r.t[r.p] = e + r.xs0;
                                 r = r._next
                             } else
                                 for (; r;) 2 !== r.type ? r.t[r.p] = r.b : r.setRatio(t), r = r._next;
                         else
                             for (; r;) 2 !== r.type ? r.t[r.p] = r.e : r.setRatio(t), r = r._next
                 }, h._enableTransforms = function (t) {
                     this._transformType = t || 3 === this._transformType ? 3 : 2
                 }, h._linkCSSP = function (t, e, i, s) {
                     return t && (e && (e._prev = t), t._next && (t._next._prev = t._prev), i ? i._next = t : s || null !== this._firstPT || (this._firstPT = t), t._prev ? t._prev._next = t._next : this._firstPT === t && (this._firstPT = t._next), t._next = e, t._prev = i), t
                 }, h._kill = function (e) {
                     var i, s, r, n = e;
                     if (e.css_autoAlpha || e.css_alpha) {
                         n = {};
                         for (s in e) n[s] = e[s];
                         n.css_opacity = 1, n.css_autoAlpha && (n.css_visibility = 1)
                     }
                     return e.css_className && (i = this._classNamePT) && (r = i.xfirst, r && r._prev ? this._linkCSSP(r._prev, i._next, r._prev._prev) : r === this._firstPT && (this._firstPT = i._next), i._next && this._linkCSSP(i._next, i._next._next, r._prev), this._classNamePT = null), t.prototype._kill.call(this, n)
                 };
                 var De = function (t, e, i) {
                     var s, r, n, a;
                     if (t.slice)
                         for (r = t.length; --r > -1;) De(t[r], e, i);
                     else
                         for (s = t.childNodes, r = s.length; --r > -1;) n = s[r], a = n.type, n.style && (e.push(W(n)), i && i.push(n)), 1 !== a && 9 !== a && 11 !== a || !n.childNodes.length || De(n, e, i)
                 };
                 return a.cascadeTo = function (t, i, s) {
                     var r, n, a, o = e.to(t, i, s),
                         h = [o],
                         l = [],
                         _ = [],
                         u = [],
                         p = e._internals.reservedProps;
                     for (t = o._targets || o.target, De(t, l, u), o.render(i, !0), De(t, _), o.render(0, !0), o._enabled(!0), r = u.length; --r > -1;)
                         if (n = H(u[r], l[r], _[r]), n.firstMPT) {
                             n = n.difs;
                             for (a in s) p[a] && (n[a] = s[a]);
                             h.push(e.to(u[r], i, n))
                         }
                     return h
                 }, t.activate([a]), a
             }, !0),
             function () {
                 var t = window._gsDefine.plugin({
                         propName: "roundProps",
                         priority: -1,
                         API: 2,
                         init: function (t, e, i) {
                             return this._tween = i, !0
                         }
                     }),
                     e = t.prototype;
                 e._onInitAllProps = function () {
                     for (var t, e, i, s = this._tween, r = s.vars.roundProps instanceof Array ? s.vars.roundProps : s.vars.roundProps.split(","), n = r.length, a = {}, o = s._propLookup.roundProps; --n > -1;) a[r[n]] = 1;
                     for (n = r.length; --n > -1;)
                         for (t = r[n], e = s._firstPT; e;) i = e._next, e.pg ? e.t._roundProps(a, !0) : e.n === t && (this._add(e.t, t, e.s, e.c), i && (i._prev = e._prev), e._prev ? e._prev._next = i : s._firstPT === e && (s._firstPT = i), e._next = e._prev = null, s._propLookup[t] = o), e = i;
                     return !1
                 }, e._add = function (t, e, i, s) {
                     this._addTween(t, e, i, i + s, e, !0), this._overwriteProps.push(e)
                 }
             }(), window._gsDefine.plugin({
                 propName: "attr",
                 API: 2,
                 init: function (t, e) {
                     var i;
                     if ("function" != typeof t.setAttribute) return !1;
                     this._target = t, this._proxy = {};
                     for (i in e) this._addTween(this._proxy, i, parseFloat(t.getAttribute(i)), e[i], i), this._overwriteProps.push(i);
                     return !0
                 },
                 set: function (t) {
                     this._super.setRatio.call(this, t);
                     for (var e, i = this._overwriteProps, s = i.length; --s > -1;) e = i[s], this._target.setAttribute(e, this._proxy[e] + "")
                 }
             }), window._gsDefine.plugin({
                 propName: "directionalRotation",
                 API: 2,
                 init: function (t, e) {
                     "object" != typeof e && (e = {
                         rotation: e
                     }), this.finals = {};
                     var i, s, r, n, a, o, h = e.useRadians === !0 ? 2 * Math.PI : 360,
                         l = 1e-6;
                     for (i in e) "useRadians" !== i && (o = (e[i] + "").split("_"), s = o[0], r = parseFloat("function" != typeof t[i] ? t[i] : t[i.indexOf("set") || "function" != typeof t["get" + i.substr(3)] ? i : "get" + i.substr(3)]()), n = this.finals[i] = "string" == typeof s && "=" === s.charAt(1) ? r + parseInt(s.charAt(0) + "1", 10) * Number(s.substr(2)) : Number(s) || 0, a = n - r, o.length && (s = o.join("_"), -1 !== s.indexOf("short") && (a %= h, a !== a % (h / 2) && (a = 0 > a ? a + h : a - h)), -1 !== s.indexOf("_cw") && 0 > a ? a = (a + 9999999999 * h) % h - (0 | a / h) * h : -1 !== s.indexOf("ccw") && a > 0 && (a = (a - 9999999999 * h) % h - (0 | a / h) * h)), (a > l || -l > a) && (this._addTween(t, i, r, r + a, i), this._overwriteProps.push(i)));
                     return !0
                 },
                 set: function (t) {
                     var e;
                     if (1 !== t) this._super.setRatio.call(this, t);
                     else
                         for (e = this._firstPT; e;) e.f ? e.t[e.p](this.finals[e.p]) : e.t[e.p] = this.finals[e.p], e = e._next
                 }
             })._autoCSS = !0, window._gsDefine("easing.Back", ["easing.Ease"], function (t) {
                 var e, i, s, r = window.GreenSockGlobals || window,
                     n = r.com.greensock,
                     a = 2 * Math.PI,
                     o = Math.PI / 2,
                     h = n._class,
                     l = function (e, i) {
                         var s = h("easing." + e, function () {}, !0),
                             r = s.prototype = new t;
                         return r.constructor = s, r.getRatio = i, s
                     },
                     _ = t.register || function () {},
                     u = function (t, e, i, s) {
                         var r = h("easing." + t, {
                             easeOut: new e,
                             easeIn: new i,
                             easeInOut: new s
                         }, !0);
                         return _(r, t), r
                     },
                     p = function (t, e, i) {
                         this.t = t, this.v = e, i && (this.next = i, i.prev = this, this.c = i.v - e, this.gap = i.t - t)
                     },
                     f = function (e, i) {
                         var s = h("easing." + e, function (t) {
                                 this._p1 = t || 0 === t ? t : 1.70158, this._p2 = 1.525 * this._p1
                             }, !0),
                             r = s.prototype = new t;
                         return r.constructor = s, r.getRatio = i, r.config = function (t) {
                             return new s(t)
                         }, s
                     },
                     c = u("Back", f("BackOut", function (t) {
                         return (t -= 1) * t * ((this._p1 + 1) * t + this._p1) + 1
                     }), f("BackIn", function (t) {
                         return t * t * ((this._p1 + 1) * t - this._p1)
                     }), f("BackInOut", function (t) {
                         return 1 > (t *= 2) ? .5 * t * t * ((this._p2 + 1) * t - this._p2) : .5 * ((t -= 2) * t * ((this._p2 + 1) * t + this._p2) + 2)
                     })),
                     m = h("easing.SlowMo", function (t, e, i) {
                         e = e || 0 === e ? e : .7, null == t ? t = .7 : t > 1 && (t = 1), this._p = 1 !== t ? e : 0, this._p1 = (1 - t) / 2, this._p2 = t, this._p3 = this._p1 + this._p2, this._calcEnd = i === !0
                     }, !0),
                     d = m.prototype = new t;
                 return d.constructor = m, d.getRatio = function (t) {
                     var e = t + (.5 - t) * this._p;
                     return this._p1 > t ? this._calcEnd ? 1 - (t = 1 - t / this._p1) * t : e - (t = 1 - t / this._p1) * t * t * t * e : t > this._p3 ? this._calcEnd ? 1 - (t = (t - this._p3) / this._p1) * t : e + (t - e) * (t = (t - this._p3) / this._p1) * t * t * t : this._calcEnd ? 1 : e
                 }, m.ease = new m(.7, .7), d.config = m.config = function (t, e, i) {
                     return new m(t, e, i)
                 }, e = h("easing.SteppedEase", function (t) {
                     t = t || 1, this._p1 = 1 / t, this._p2 = t + 1
                 }, !0), d = e.prototype = new t, d.constructor = e, d.getRatio = function (t) {
                     return 0 > t ? t = 0 : t >= 1 && (t = .999999999), (this._p2 * t >> 0) * this._p1
                 }, d.config = e.config = function (t) {
                     return new e(t)
                 }, i = h("easing.RoughEase", function (e) {
                     e = e || {};
                     for (var i, s, r, n, a, o, h = e.taper || "none", l = [], _ = 0, u = 0 | (e.points || 20), f = u, c = e.randomize !== !1, m = e.clamp === !0, d = e.template instanceof t ? e.template : null, g = "number" == typeof e.strength ? .4 * e.strength : .4; --f > -1;) i = c ? Math.random() : 1 / u * f, s = d ? d.getRatio(i) : i, "none" === h ? r = g : "out" === h ? (n = 1 - i, r = n * n * g) : "in" === h ? r = i * i * g : .5 > i ? (n = 2 * i, r = .5 * n * n * g) : (n = 2 * (1 - i), r = .5 * n * n * g), c ? s += Math.random() * r - .5 * r : f % 2 ? s += .5 * r : s -= .5 * r, m && (s > 1 ? s = 1 : 0 > s && (s = 0)), l[_++] = {
                         x: i,
                         y: s
                     };
                     for (l.sort(function (t, e) {
                             return t.x - e.x
                         }), o = new p(1, 1, null), f = u; --f > -1;) a = l[f], o = new p(a.x, a.y, o);
                     this._prev = new p(0, 0, 0 !== o.t ? o : o.next)
                 }, !0), d = i.prototype = new t, d.constructor = i, d.getRatio = function (t) {
                     var e = this._prev;
                     if (t > e.t) {
                         for (; e.next && t >= e.t;) e = e.next;
                         e = e.prev
                     } else
                         for (; e.prev && e.t >= t;) e = e.prev;
                     return this._prev = e, e.v + (t - e.t) / e.gap * e.c
                 }, d.config = function (t) {
                     return new i(t)
                 }, i.ease = new i, u("Bounce", l("BounceOut", function (t) {
                     return 1 / 2.75 > t ? 7.5625 * t * t : 2 / 2.75 > t ? 7.5625 * (t -= 1.5 / 2.75) * t + .75 : 2.5 / 2.75 > t ? 7.5625 * (t -= 2.25 / 2.75) * t + .9375 : 7.5625 * (t -= 2.625 / 2.75) * t + .984375
                 }), l("BounceIn", function (t) {
                     return 1 / 2.75 > (t = 1 - t) ? 1 - 7.5625 * t * t : 2 / 2.75 > t ? 1 - (7.5625 * (t -= 1.5 / 2.75) * t + .75) : 2.5 / 2.75 > t ? 1 - (7.5625 * (t -= 2.25 / 2.75) * t + .9375) : 1 - (7.5625 * (t -= 2.625 / 2.75) * t + .984375)
                 }), l("BounceInOut", function (t) {
                     var e = .5 > t;
                     return t = e ? 1 - 2 * t : 2 * t - 1, t = 1 / 2.75 > t ? 7.5625 * t * t : 2 / 2.75 > t ? 7.5625 * (t -= 1.5 / 2.75) * t + .75 : 2.5 / 2.75 > t ? 7.5625 * (t -= 2.25 / 2.75) * t + .9375 : 7.5625 * (t -= 2.625 / 2.75) * t + .984375, e ? .5 * (1 - t) : .5 * t + .5
                 })), u("Circ", l("CircOut", function (t) {
                     return Math.sqrt(1 - (t -= 1) * t)
                 }), l("CircIn", function (t) {
                     return -(Math.sqrt(1 - t * t) - 1)
                 }), l("CircInOut", function (t) {
                     return 1 > (t *= 2) ? -.5 * (Math.sqrt(1 - t * t) - 1) : .5 * (Math.sqrt(1 - (t -= 2) * t) + 1)
                 })), s = function (e, i, s) {
                     var r = h("easing." + e, function (t, e) {
                             this._p1 = t || 1, this._p2 = e || s, this._p3 = this._p2 / a * (Math.asin(1 / this._p1) || 0)
                         }, !0),
                         n = r.prototype = new t;
                     return n.constructor = r, n.getRatio = i, n.config = function (t, e) {
                         return new r(t, e)
                     }, r
                 }, u("Elastic", s("ElasticOut", function (t) {
                     return this._p1 * Math.pow(2, -10 * t) * Math.sin((t - this._p3) * a / this._p2) + 1
                 }, .3), s("ElasticIn", function (t) {
                     return -(this._p1 * Math.pow(2, 10 * (t -= 1)) * Math.sin((t - this._p3) * a / this._p2))
                 }, .3), s("ElasticInOut", function (t) {
                     return 1 > (t *= 2) ? -.5 * this._p1 * Math.pow(2, 10 * (t -= 1)) * Math.sin((t - this._p3) * a / this._p2) : .5 * this._p1 * Math.pow(2, -10 * (t -= 1)) * Math.sin((t - this._p3) * a / this._p2) + 1
                 }, .45)), u("Expo", l("ExpoOut", function (t) {
                     return 1 - Math.pow(2, -10 * t)
                 }), l("ExpoIn", function (t) {
                     return Math.pow(2, 10 * (t - 1)) - .001
                 }), l("ExpoInOut", function (t) {
                     return 1 > (t *= 2) ? .5 * Math.pow(2, 10 * (t - 1)) : .5 * (2 - Math.pow(2, -10 * (t - 1)))
                 })), u("Sine", l("SineOut", function (t) {
                     return Math.sin(t * o)
                 }), l("SineIn", function (t) {
                     return -Math.cos(t * o) + 1
                 }), l("SineInOut", function (t) {
                     return -.5 * (Math.cos(Math.PI * t) - 1)
                 })), h("easing.EaseLookup", {
                     find: function (e) {
                         return t.map[e]
                     }
                 }, !0), _(r.SlowMo, "SlowMo", "ease,"), _(i, "RoughEase", "ease,"), _(e, "SteppedEase", "ease,"), c
             }, !0)
     }),
     function (t) {
         "use strict";
         var e, i, s, r, n, a = t.GreenSockGlobals || t,
             o = function (t) {
                 var e, i = t.split("."),
                     s = a;
                 for (e = 0; i.length > e; e++) s[i[e]] = s = s[i[e]] || {};
                 return s
             },
             h = o("com.greensock"),
             l = [].slice,
             _ = function () {},
             u = {},
             p = function (e, i, s, r) {
                 this.sc = u[e] ? u[e].sc : [], u[e] = this, this.gsClass = null, this.func = s;
                 var n = [];
                 this.check = function (h) {
                     for (var l, _, f, c, m = i.length, d = m; --m > -1;)(l = u[i[m]] || new p(i[m], [])).gsClass ? (n[m] = l.gsClass, d--) : h && l.sc.push(this);
                     if (0 === d && s)
                         for (_ = ("com.greensock." + e).split("."), f = _.pop(), c = o(_.join("."))[f] = this.gsClass = s.apply(s, n), r && (a[f] = c, "function" == typeof define && define.amd ? define((t.GreenSockAMDPath ? t.GreenSockAMDPath + "/" : "") + e.split(".").join("/"), [], function () {
                                 return c
                             }) : "undefined" != typeof module && module.exports && (module.exports = c)), m = 0; this.sc.length > m; m++) this.sc[m].check()
                 }, this.check(!0)
             },
             f = t._gsDefine = function (t, e, i, s) {
                 return new p(t, e, i, s)
             },
             c = h._class = function (t, e, i) {
                 return e = e || function () {}, f(t, [], function () {
                     return e
                 }, i), e
             };
         f.globals = a;
         var m = [0, 0, 1, 1],
             d = [],
             g = c("easing.Ease", function (t, e, i, s) {
                 this._func = t, this._type = i || 0, this._power = s || 0, this._params = e ? m.concat(e) : m
             }, !0),
             v = g.map = {},
             y = g.register = function (t, e, i, s) {
                 for (var r, n, a, o, l = e.split(","), _ = l.length, u = (i || "easeIn,easeOut,easeInOut").split(","); --_ > -1;)
                     for (n = l[_], r = s ? c("easing." + n, null, !0) : h.easing[n] || {}, a = u.length; --a > -1;) o = u[a], v[n + "." + o] = v[o + n] = r[o] = t.getRatio ? t : t[o] || new t
             };
         for (s = g.prototype, s._calcEnd = !1, s.getRatio = function (t) {
                 if (this._func) return this._params[0] = t, this._func.apply(null, this._params);
                 var e = this._type,
                     i = this._power,
                     s = 1 === e ? 1 - t : 2 === e ? t : .5 > t ? 2 * t : 2 * (1 - t);
                 return 1 === i ? s *= s : 2 === i ? s *= s * s : 3 === i ? s *= s * s * s : 4 === i && (s *= s * s * s * s), 1 === e ? 1 - s : 2 === e ? s : .5 > t ? s / 2 : 1 - s / 2
             }, e = ["Linear", "Quad", "Cubic", "Quart", "Quint,Strong"], i = e.length; --i > -1;) s = e[i] + ",Power" + i, y(new g(null, null, 1, i), s, "easeOut", !0), y(new g(null, null, 2, i), s, "easeIn" + (0 === i ? ",easeNone" : "")), y(new g(null, null, 3, i), s, "easeInOut");
         v.linear = h.easing.Linear.easeIn, v.swing = h.easing.Quad.easeInOut;
         var T = c("events.EventDispatcher", function (t) {
             this._listeners = {}, this._eventTarget = t || this
         });
         s = T.prototype, s.addEventListener = function (t, e, i, s, a) {
             a = a || 0;
             var o, h, l = this._listeners[t],
                 _ = 0;
             for (null == l && (this._listeners[t] = l = []), h = l.length; --h > -1;) o = l[h], o.c === e && o.s === i ? l.splice(h, 1) : 0 === _ && a > o.pr && (_ = h + 1);
             l.splice(_, 0, {
                 c: e,
                 s: i,
                 up: s,
                 pr: a
             }), this !== r || n || r.wake()
         }, s.removeEventListener = function (t, e) {
             var i, s = this._listeners[t];
             if (s)
                 for (i = s.length; --i > -1;)
                     if (s[i].c === e) return s.splice(i, 1), void 0
         }, s.dispatchEvent = function (t) {
             var e, i, s, r = this._listeners[t];
             if (r)
                 for (e = r.length, i = this._eventTarget; --e > -1;) s = r[e], s.up ? s.c.call(s.s || i, {
                     type: t,
                     target: i
                 }) : s.c.call(s.s || i)
         };
         var w = t.requestAnimationFrame,
             x = t.cancelAnimationFrame,
             b = Date.now || function () {
                 return (new Date).getTime()
             };
         for (e = ["ms", "moz", "webkit", "o"], i = e.length; --i > -1 && !w;) w = t[e[i] + "RequestAnimationFrame"], x = t[e[i] + "CancelAnimationFrame"] || t[e[i] + "CancelRequestAnimationFrame"];
         c("Ticker", function (t, e) {
             var i, s, a, o, h, l = this,
                 u = b(),
                 p = e !== !1 && w,
                 f = function (t) {
                     l.time = (b() - u) / 1e3;
                     var e = a,
                         r = l.time - h;
                     (!i || r > 0 || t === !0) && (l.frame++, h += r + (r >= o ? .004 : o - r), l.dispatchEvent("tick")), t !== !0 && e === a && (a = s(f))
                 };
             T.call(l), this.time = this.frame = 0, this.tick = function () {
                 f(!0)
             }, this.sleep = function () {
                 null != a && (p && x ? x(a) : clearTimeout(a), s = _, a = null, l === r && (n = !1))
             }, this.wake = function () {
                 null !== a && l.sleep(), s = 0 === i ? _ : p && w ? w : function (t) {
                     return setTimeout(t, 0 | 1e3 * (h - l.time) + 1)
                 }, l === r && (n = !0), f(2)
             }, this.fps = function (t) {
                 return arguments.length ? (i = t, o = 1 / (i || 60), h = this.time + o, l.wake(), void 0) : i
             }, this.useRAF = function (t) {
                 return arguments.length ? (l.sleep(), p = t, l.fps(i), void 0) : p
             }, l.fps(t), setTimeout(function () {
                 p && (!a || 5 > l.frame) && l.useRAF(!1)
             }, 1500)
         }), s = h.Ticker.prototype = new h.events.EventDispatcher, s.constructor = h.Ticker;
         var P = c("core.Animation", function (t, e) {
             if (this.vars = e || {}, this._duration = this._totalDuration = t || 0, this._delay = Number(this.vars.delay) || 0, this._timeScale = 1, this._active = this.vars.immediateRender === !0, this.data = this.vars.data, this._reversed = this.vars.reversed === !0, N) {
                 n || r.wake();
                 var i = this.vars.useFrames ? E : N;
                 i.add(this, i._time), this.vars.paused && this.paused(!0)
             }
         });
         r = P.ticker = new h.Ticker, s = P.prototype, s._dirty = s._gc = s._initted = s._paused = !1, s._totalTime = s._time = 0, s._rawPrevTime = -1, s._next = s._last = s._onUpdate = s._timeline = s.timeline = null, s._paused = !1, s.play = function (t, e) {
             return arguments.length && this.seek(t, e), this.reversed(!1).paused(!1)
         }, s.pause = function (t, e) {
             return arguments.length && this.seek(t, e), this.paused(!0)
         }, s.resume = function (t, e) {
             return arguments.length && this.seek(t, e), this.paused(!1)
         }, s.seek = function (t, e) {
             return this.totalTime(Number(t), e !== !1)
         }, s.restart = function (t, e) {
             return this.reversed(!1).paused(!1).totalTime(t ? -this._delay : 0, e !== !1, !0)
         }, s.reverse = function (t, e) {
             return arguments.length && this.seek(t || this.totalDuration(), e), this.reversed(!0).paused(!1)
         }, s.render = function () {}, s.invalidate = function () {
             return this
         }, s._enabled = function (t, e) {
             return n || r.wake(), this._gc = !t, this._active = t && !this._paused && this._totalTime > 0 && this._totalTime < this._totalDuration, e !== !0 && (t && !this.timeline ? this._timeline.add(this, this._startTime - this._delay) : !t && this.timeline && this._timeline._remove(this, !0)), !1
         }, s._kill = function () {
             return this._enabled(!1, !1)
         }, s.kill = function (t, e) {
             return this._kill(t, e), this
         }, s._uncache = function (t) {
             for (var e = t ? this : this.timeline; e;) e._dirty = !0, e = e.timeline;
             return this
         }, s.eventCallback = function (t, e, i, s) {
             if (null == t) return null;
             if ("on" === t.substr(0, 2)) {
                 var r, n = this.vars;
                 if (1 === arguments.length) return n[t];
                 if (null == e) delete n[t];
                 else if (n[t] = e, n[t + "Params"] = i, n[t + "Scope"] = s, i)
                     for (r = i.length; --r > -1;) "{self}" === i[r] && (i = n[t + "Params"] = i.concat(), i[r] = this);
                 "onUpdate" === t && (this._onUpdate = e)
             }
             return this
         }, s.delay = function (t) {
             return arguments.length ? (this._timeline.smoothChildTiming && this.startTime(this._startTime + t - this._delay), this._delay = t, this) : this._delay
         }, s.duration = function (t) {
             return arguments.length ? (this._duration = this._totalDuration = t, this._uncache(!0), this._timeline.smoothChildTiming && this._time > 0 && this._time < this._duration && 0 !== t && this.totalTime(this._totalTime * (t / this._duration), !0), this) : (this._dirty = !1, this._duration)
         }, s.totalDuration = function (t) {
             return this._dirty = !1, arguments.length ? this.duration(t) : this._totalDuration
         }, s.time = function (t, e) {
             return arguments.length ? (this._dirty && this.totalDuration(), this.totalTime(t > this._duration ? this._duration : t, e)) : this._time
         }, s.totalTime = function (t, e, i) {
             if (n || r.wake(), !arguments.length) return this._totalTime;
             if (this._timeline) {
                 if (0 > t && !i && (t += this.totalDuration()), this._timeline.smoothChildTiming) {
                     this._dirty && this.totalDuration();
                     var s = this._totalDuration,
                         a = this._timeline;
                     if (t > s && !i && (t = s), this._startTime = (this._paused ? this._pauseTime : a._time) - (this._reversed ? s - t : t) / this._timeScale, a._dirty || this._uncache(!1), !a._active)
                         for (; a._timeline;) a.totalTime(a._totalTime, !0), a = a._timeline
                 }
                 this._gc && this._enabled(!0, !1), this._totalTime !== t && this.render(t, e, !1)
             }
             return this
         }, s.startTime = function (t) {
             return arguments.length ? (t !== this._startTime && (this._startTime = t, this.timeline && this.timeline._sortChildren && this.timeline.add(this, t - this._delay)), this) : this._startTime
         }, s.timeScale = function (t) {
             if (!arguments.length) return this._timeScale;
             if (t = t || 1e-6, this._timeline && this._timeline.smoothChildTiming) {
                 var e = this._pauseTime,
                     i = e || 0 === e ? e : this._timeline.totalTime();
                 this._startTime = i - (i - this._startTime) * this._timeScale / t
             }
             return this._timeScale = t, this._uncache(!1)
         }, s.reversed = function (t) {
             return arguments.length ? (t != this._reversed && (this._reversed = t, this.totalTime(this._totalTime, !0)), this) : this._reversed
         }, s.paused = function (t) {
             if (!arguments.length) return this._paused;
             if (t != this._paused && this._timeline) {
                 n || t || r.wake();
                 var e = this._timeline.rawTime(),
                     i = e - this._pauseTime;
                 !t && this._timeline.smoothChildTiming && (this._startTime += i, this._uncache(!1)), this._pauseTime = t ? e : null, this._paused = t, this._active = !t && this._totalTime > 0 && this._totalTime < this._totalDuration, t || 0 === i || 0 === this._duration || this.render(this._totalTime, !0, !0)
             }
             return this._gc && !t && this._enabled(!0, !1), this
         };
         var k = c("core.SimpleTimeline", function (t) {
             P.call(this, 0, t), this.autoRemoveChildren = this.smoothChildTiming = !0
         });
         s = k.prototype = new P, s.constructor = k, s.kill()._gc = !1, s._first = s._last = null, s._sortChildren = !1, s.add = s.insert = function (t, e) {
             var i, s;
             if (t._startTime = Number(e || 0) + t._delay, t._paused && this !== t._timeline && (t._pauseTime = t._startTime + (this.rawTime() - t._startTime) / t._timeScale), t.timeline && t.timeline._remove(t, !0), t.timeline = t._timeline = this, t._gc && t._enabled(!0, !0), i = this._last, this._sortChildren)
                 for (s = t._startTime; i && i._startTime > s;) i = i._prev;
             return i ? (t._next = i._next, i._next = t) : (t._next = this._first, this._first = t), t._next ? t._next._prev = t : this._last = t, t._prev = i, this._timeline && this._uncache(!0), this
         }, s._remove = function (t, e) {
             return t.timeline === this && (e || t._enabled(!1, !0), t.timeline = null, t._prev ? t._prev._next = t._next : this._first === t && (this._first = t._next), t._next ? t._next._prev = t._prev : this._last === t && (this._last = t._prev), this._timeline && this._uncache(!0)), this
         }, s.render = function (t, e, i) {
             var s, r = this._first;
             for (this._totalTime = this._time = this._rawPrevTime = t; r;) s = r._next, (r._active || t >= r._startTime && !r._paused) && (r._reversed ? r.render((r._dirty ? r.totalDuration() : r._totalDuration) - (t - r._startTime) * r._timeScale, e, i) : r.render((t - r._startTime) * r._timeScale, e, i)), r = s
         }, s.rawTime = function () {
             return n || r.wake(), this._totalTime
         };
         var R = c("TweenLite", function (t, e, i) {
                 if (P.call(this, e, i), null == t) throw "Cannot tween a null target.";
                 this.target = t = "string" != typeof t ? t : R.selector(t) || t;
                 var s, r, n, a = t.jquery || t.length && t[0] && t[0].nodeType && t[0].style,
                     o = this.vars.overwrite;
                 if (this._overwrite = o = null == o ? F[R.defaultOverwrite] : "number" == typeof o ? o >> 0 : F[o], (a || t instanceof Array) && "number" != typeof t[0])
                     for (this._targets = n = l.call(t, 0), this._propLookup = [], this._siblings = [], s = 0; n.length > s; s++) r = n[s], r ? "string" != typeof r ? r.length && r[0] && r[0].nodeType && r[0].style ? (n.splice(s--, 1), this._targets = n = n.concat(l.call(r, 0))) : (this._siblings[s] = L(r, this, !1), 1 === o && this._siblings[s].length > 1 && X(r, this, null, 1, this._siblings[s])) : (r = n[s--] = R.selector(r), "string" == typeof r && n.splice(s + 1, 1)) : n.splice(s--, 1);
                 else this._propLookup = {}, this._siblings = L(t, this, !1), 1 === o && this._siblings.length > 1 && X(t, this, null, 1, this._siblings);
                 (this.vars.immediateRender || 0 === e && 0 === this._delay && this.vars.immediateRender !== !1) && this.render(-this._delay, !1, !0)
             }, !0),
             S = function (t) {
                 return t.length && t[0] && t[0].nodeType && t[0].style
             },
             A = function (t, e) {
                 var i, s = {};
                 for (i in t) I[i] || i in e && "x" !== i && "y" !== i && "width" !== i && "height" !== i && "className" !== i || !(!O[i] || O[i] && O[i]._autoCSS) || (s[i] = t[i], delete t[i]);
                 t.css = s
             };
         s = R.prototype = new P, s.constructor = R, s.kill()._gc = !1, s.ratio = 0, s._firstPT = s._targets = s._overwrittenProps = s._startAt = null, s._notifyPluginsOfEnabled = !1, R.version = "1.9.7", R.defaultEase = s._ease = new g(null, null, 1, 1), R.defaultOverwrite = "auto", R.ticker = r, R.autoSleep = !0, R.selector = t.$ || t.jQuery || function (e) {
             return t.$ ? (R.selector = t.$, t.$(e)) : t.document ? t.document.getElementById("#" === e.charAt(0) ? e.substr(1) : e) : e
         };
         var C = R._internals = {},
             O = R._plugins = {},
             D = R._tweenLookup = {},
             M = 0,
             I = C.reservedProps = {
                 ease: 1,
                 delay: 1,
                 overwrite: 1,
                 onComplete: 1,
                 onCompleteParams: 1,
                 onCompleteScope: 1,
                 useFrames: 1,
                 runBackwards: 1,
                 startAt: 1,
                 onUpdate: 1,
                 onUpdateParams: 1,
                 onUpdateScope: 1,
                 onStart: 1,
                 onStartParams: 1,
                 onStartScope: 1,
                 onReverseComplete: 1,
                 onReverseCompleteParams: 1,
                 onReverseCompleteScope: 1,
                 onRepeat: 1,
                 onRepeatParams: 1,
                 onRepeatScope: 1,
                 easeParams: 1,
                 yoyo: 1,
                 immediateRender: 1,
                 repeat: 1,
                 repeatDelay: 1,
                 data: 1,
                 paused: 1,
                 reversed: 1,
                 autoCSS: 1
             },
             F = {
                 none: 0,
                 all: 1,
                 auto: 2,
                 concurrent: 3,
                 allOnStart: 4,
                 preexisting: 5,
                 "true": 1,
                 "false": 0
             },
             E = P._rootFramesTimeline = new k,
             N = P._rootTimeline = new k;
         N._startTime = r.time, E._startTime = r.frame, N._active = E._active = !0, P._updateRoot = function () {
             if (N.render((r.time - N._startTime) * N._timeScale, !1, !1), E.render((r.frame - E._startTime) * E._timeScale, !1, !1), !(r.frame % 120)) {
                 var t, e, i;
                 for (i in D) {
                     for (e = D[i].tweens, t = e.length; --t > -1;) e[t]._gc && e.splice(t, 1);
                     0 === e.length && delete D[i]
                 }
                 if (i = N._first, (!i || i._paused) && R.autoSleep && !E._first && 1 === r._listeners.tick.length) {
                     for (; i && i._paused;) i = i._next;
                     i || r.sleep()
                 }
             }
         }, r.addEventListener("tick", P._updateRoot);
         var L = function (t, e, i) {
                 var s, r, n = t._gsTweenID;
                 if (D[n || (t._gsTweenID = n = "t" + M++)] || (D[n] = {
                         target: t,
                         tweens: []
                     }), e && (s = D[n].tweens, s[r = s.length] = e, i))
                     for (; --r > -1;) s[r] === e && s.splice(r, 1);
                 return D[n].tweens
             },
             X = function (t, e, i, s, r) {
                 var n, a, o, h;
                 if (1 === s || s >= 4) {
                     for (h = r.length, n = 0; h > n; n++)
                         if ((o = r[n]) !== e) o._gc || o._enabled(!1, !1) && (a = !0);
                         else if (5 === s) break;
                     return a
                 }
                 var l, _ = e._startTime + 1e-10,
                     u = [],
                     p = 0,
                     f = 0 === e._duration;
                 for (n = r.length; --n > -1;)(o = r[n]) === e || o._gc || o._paused || (o._timeline !== e._timeline ? (l = l || U(e, 0, f), 0 === U(o, l, f) && (u[p++] = o)) : _ >= o._startTime && o._startTime + o.totalDuration() / o._timeScale + 1e-10 > _ && ((f || !o._initted) && 2e-10 >= _ - o._startTime || (u[p++] = o)));
                 for (n = p; --n > -1;) o = u[n], 2 === s && o._kill(i, t) && (a = !0), (2 !== s || !o._firstPT && o._initted) && o._enabled(!1, !1) && (a = !0);
                 return a
             },
             U = function (t, e, i) {
                 for (var s = t._timeline, r = s._timeScale, n = t._startTime, a = 1e-10; s._timeline;) {
                     if (n += s._startTime, r *= s._timeScale, s._paused) return -100;
                     s = s._timeline
                 }
                 return n /= r, n > e ? n - e : i && n === e || !t._initted && 2 * a > n - e ? a : (n += t.totalDuration() / t._timeScale / r) > e + a ? 0 : n - e - a
             };
         s._init = function () {
             var t, e, i, s, r = this.vars,
                 n = this._overwrittenProps,
                 a = this._duration,
                 o = r.ease;
             if (r.startAt) {
                 if (r.startAt.overwrite = 0, r.startAt.immediateRender = !0, this._startAt = R.to(this.target, 0, r.startAt), r.immediateRender && (this._startAt = null, 0 === this._time && 0 !== a)) return
             } else if (r.runBackwards && r.immediateRender && 0 !== a)
                 if (this._startAt) this._startAt.render(-1, !0), this._startAt = null;
                 else if (0 === this._time) {
                 i = {};
                 for (s in r) I[s] && "autoCSS" !== s || (i[s] = r[s]);
                 return i.overwrite = 0, this._startAt = R.to(this.target, 0, i), void 0
             }
             if (this._ease = o ? o instanceof g ? r.easeParams instanceof Array ? o.config.apply(o, r.easeParams) : o : "function" == typeof o ? new g(o, r.easeParams) : v[o] || R.defaultEase : R.defaultEase, this._easeType = this._ease._type, this._easePower = this._ease._power, this._firstPT = null, this._targets)
                 for (t = this._targets.length; --t > -1;) this._initProps(this._targets[t], this._propLookup[t] = {}, this._siblings[t], n ? n[t] : null) && (e = !0);
             else e = this._initProps(this.target, this._propLookup, this._siblings, n);
             if (e && R._onPluginEvent("_onInitAllProps", this), n && (this._firstPT || "function" != typeof this.target && this._enabled(!1, !1)), r.runBackwards)
                 for (i = this._firstPT; i;) i.s += i.c, i.c = -i.c, i = i._next;
             this._onUpdate = r.onUpdate, this._initted = !0
         }, s._initProps = function (t, e, i, s) {
             var r, n, a, o, h, l, _;
             if (null == t) return !1;
             this.vars.css || t.style && t.nodeType && O.css && this.vars.autoCSS !== !1 && A(this.vars, t);
             for (r in this.vars) {
                 if (I[r]) {
                     if (("onStartParams" === r || "onUpdateParams" === r || "onCompleteParams" === r || "onReverseCompleteParams" === r || "onRepeatParams" === r) && (h = this.vars[r]))
                         for (n = h.length; --n > -1;) "{self}" === h[n] && (h = this.vars[r] = h.concat(), h[n] = this)
                 } else if (O[r] && (o = new O[r])._onInitTween(t, this.vars[r], this)) {
                     for (this._firstPT = l = {
                             _next: this._firstPT,
                             t: o,
                             p: "setRatio",
                             s: 0,
                             c: 1,
                             f: !0,
                             n: r,
                             pg: !0,
                             pr: o._priority
                         }, n = o._overwriteProps.length; --n > -1;) e[o._overwriteProps[n]] = this._firstPT;
                     (o._priority || o._onInitAllProps) && (a = !0), (o._onDisable || o._onEnable) && (this._notifyPluginsOfEnabled = !0)
                 } else this._firstPT = e[r] = l = {
                     _next: this._firstPT,
                     t: t,
                     p: r,
                     f: "function" == typeof t[r],
                     n: r,
                     pg: !1,
                     pr: 0
                 }, l.s = l.f ? t[r.indexOf("set") || "function" != typeof t["get" + r.substr(3)] ? r : "get" + r.substr(3)]() : parseFloat(t[r]), _ = this.vars[r], l.c = "string" == typeof _ && "=" === _.charAt(1) ? parseInt(_.charAt(0) + "1", 10) * Number(_.substr(2)) : Number(_) - l.s || 0;
                 l && l._next && (l._next._prev = l)
             }
             return s && this._kill(s, t) ? this._initProps(t, e, i, s) : this._overwrite > 1 && this._firstPT && i.length > 1 && X(t, this, e, this._overwrite, i) ? (this._kill(e, t), this._initProps(t, e, i, s)) : a
         }, s.render = function (t, e, i) {
             var s, r, n, a = this._time;
             if (t >= this._duration) this._totalTime = this._time = this._duration, this.ratio = this._ease._calcEnd ? this._ease.getRatio(1) : 1, this._reversed || (s = !0, r = "onComplete"), 0 === this._duration && ((0 === t || 0 > this._rawPrevTime) && this._rawPrevTime !== t && (i = !0, this._rawPrevTime > 0 && (r = "onReverseComplete", e && (t = -1))), this._rawPrevTime = t);
             else if (1e-7 > t) this._totalTime = this._time = 0, this.ratio = this._ease._calcEnd ? this._ease.getRatio(0) : 0, (0 !== a || 0 === this._duration && this._rawPrevTime > 0) && (r = "onReverseComplete", s = this._reversed), 0 > t ? (this._active = !1, 0 === this._duration && (this._rawPrevTime >= 0 && (i = !0), this._rawPrevTime = t)) : this._initted || (i = !0);
             else if (this._totalTime = this._time = t, this._easeType) {
                 var o = t / this._duration,
                     h = this._easeType,
                     l = this._easePower;
                 (1 === h || 3 === h && o >= .5) && (o = 1 - o), 3 === h && (o *= 2), 1 === l ? o *= o : 2 === l ? o *= o * o : 3 === l ? o *= o * o * o : 4 === l && (o *= o * o * o * o), this.ratio = 1 === h ? 1 - o : 2 === h ? o : .5 > t / this._duration ? o / 2 : 1 - o / 2
             } else this.ratio = this._ease.getRatio(t / this._duration);
             if (this._time !== a || i) {
                 if (!this._initted) {
                     if (this._init(), !this._initted) return;
                     this._time && !s ? this.ratio = this._ease.getRatio(this._time / this._duration) : s && this._ease._calcEnd && (this.ratio = this._ease.getRatio(0 === this._time ? 0 : 1))
                 }
                 for (this._active || this._paused || (this._active = !0), 0 === a && (this._startAt && (t >= 0 ? this._startAt.render(t, e, i) : r || (r = "_dummyGS")), this.vars.onStart && (0 !== this._time || 0 === this._duration) && (e || this.vars.onStart.apply(this.vars.onStartScope || this, this.vars.onStartParams || d))), n = this._firstPT; n;) n.f ? n.t[n.p](n.c * this.ratio + n.s) : n.t[n.p] = n.c * this.ratio + n.s, n = n._next;
                 this._onUpdate && (0 > t && this._startAt && this._startAt.render(t, e, i), e || this._onUpdate.apply(this.vars.onUpdateScope || this, this.vars.onUpdateParams || d)), r && (this._gc || (0 > t && this._startAt && !this._onUpdate && this._startAt.render(t, e, i), s && (this._timeline.autoRemoveChildren && this._enabled(!1, !1), this._active = !1), !e && this.vars[r] && this.vars[r].apply(this.vars[r + "Scope"] || this, this.vars[r + "Params"] || d)))
             }
         }, s._kill = function (t, e) {
             if ("all" === t && (t = null), null == t && (null == e || e === this.target)) return this._enabled(!1, !1);
             e = "string" != typeof e ? e || this._targets || this.target : R.selector(e) || e;
             var i, s, r, n, a, o, h, l;
             if ((e instanceof Array || S(e)) && "number" != typeof e[0])
                 for (i = e.length; --i > -1;) this._kill(t, e[i]) && (o = !0);
             else {
                 if (this._targets) {
                     for (i = this._targets.length; --i > -1;)
                         if (e === this._targets[i]) {
                             a = this._propLookup[i] || {}, this._overwrittenProps = this._overwrittenProps || [], s = this._overwrittenProps[i] = t ? this._overwrittenProps[i] || {} : "all";
                             break
                         }
                 } else {
                     if (e !== this.target) return !1;
                     a = this._propLookup, s = this._overwrittenProps = t ? this._overwrittenProps || {} : "all"
                 }
                 if (a) {
                     h = t || a, l = t !== s && "all" !== s && t !== a && (null == t || t._tempKill !== !0);
                     for (r in h)(n = a[r]) && (n.pg && n.t._kill(h) && (o = !0), n.pg && 0 !== n.t._overwriteProps.length || (n._prev ? n._prev._next = n._next : n === this._firstPT && (this._firstPT = n._next), n._next && (n._next._prev = n._prev), n._next = n._prev = null), delete a[r]), l && (s[r] = 1);
                     !this._firstPT && this._initted && this._enabled(!1, !1)
                 }
             }
             return o
         }, s.invalidate = function () {
             return this._notifyPluginsOfEnabled && R._onPluginEvent("_onDisable", this), this._firstPT = null, this._overwrittenProps = null, this._onUpdate = null, this._startAt = null, this._initted = this._active = this._notifyPluginsOfEnabled = !1, this._propLookup = this._targets ? {} : [], this
         }, s._enabled = function (t, e) {
             if (n || r.wake(), t && this._gc) {
                 var i, s = this._targets;
                 if (s)
                     for (i = s.length; --i > -1;) this._siblings[i] = L(s[i], this, !0);
                 else this._siblings = L(this.target, this, !0)
             }
             return P.prototype._enabled.call(this, t, e), this._notifyPluginsOfEnabled && this._firstPT ? R._onPluginEvent(t ? "_onEnable" : "_onDisable", this) : !1
         }, R.to = function (t, e, i) {
             return new R(t, e, i)
         }, R.from = function (t, e, i) {
             return i.runBackwards = !0, i.immediateRender = 0 != i.immediateRender, new R(t, e, i)
         }, R.fromTo = function (t, e, i, s) {
             return s.startAt = i, s.immediateRender = 0 != s.immediateRender && 0 != i.immediateRender, new R(t, e, s)
         }, R.delayedCall = function (t, e, i, s, r) {
             return new R(e, 0, {
                 delay: t,
                 onComplete: e,
                 onCompleteParams: i,
                 onCompleteScope: s,
                 onReverseComplete: e,
                 onReverseCompleteParams: i,
                 onReverseCompleteScope: s,
                 immediateRender: !1,
                 useFrames: r,
                 overwrite: 0
             })
         }, R.set = function (t, e) {
             return new R(t, 0, e)
         }, R.killTweensOf = R.killDelayedCallsTo = function (t, e) {
             for (var i = R.getTweensOf(t), s = i.length; --s > -1;) i[s]._kill(e, t)
         }, R.getTweensOf = function (t) {
             if (null == t) return [];
             t = "string" != typeof t ? t : R.selector(t) || t;
             var e, i, s, r;
             if ((t instanceof Array || S(t)) && "number" != typeof t[0]) {
                 for (e = t.length, i = []; --e > -1;) i = i.concat(R.getTweensOf(t[e]));
                 for (e = i.length; --e > -1;)
                     for (r = i[e], s = e; --s > -1;) r === i[s] && i.splice(e, 1)
             } else
                 for (i = L(t).concat(), e = i.length; --e > -1;) i[e]._gc && i.splice(e, 1);
             return i
         };
         var z = c("plugins.TweenPlugin", function (t, e) {
             this._overwriteProps = (t || "").split(","), this._propName = this._overwriteProps[0], this._priority = e || 0, this._super = z.prototype
         }, !0);
         if (s = z.prototype, z.version = "1.9.1", z.API = 2, s._firstPT = null, s._addTween = function (t, e, i, s, r, n) {
                 var a, o;
                 null != s && (a = "number" == typeof s || "=" !== s.charAt(1) ? Number(s) - i : parseInt(s.charAt(0) + "1", 10) * Number(s.substr(2))) && (this._firstPT = o = {
                     _next: this._firstPT,
                     t: t,
                     p: e,
                     s: i,
                     c: a,
                     f: "function" == typeof t[e],
                     n: r || e,
                     r: n
                 }, o._next && (o._next._prev = o))
             }, s.setRatio = function (t) {
                 for (var e, i = this._firstPT, s = 1e-6; i;) e = i.c * t + i.s, i.r ? e = e + (e > 0 ? .5 : -.5) >> 0 : s > e && e > -s && (e = 0), i.f ? i.t[i.p](e) : i.t[i.p] = e, i = i._next
             }, s._kill = function (t) {
                 var e, i = this._overwriteProps,
                     s = this._firstPT;
                 if (null != t[this._propName]) this._overwriteProps = [];
                 else
                     for (e = i.length; --e > -1;) null != t[i[e]] && i.splice(e, 1);
                 for (; s;) null != t[s.n] && (s._next && (s._next._prev = s._prev), s._prev ? (s._prev._next = s._next, s._prev = null) : this._firstPT === s && (this._firstPT = s._next)), s = s._next;
                 return !1
             }, s._roundProps = function (t, e) {
                 for (var i = this._firstPT; i;)(t[this._propName] || null != i.n && t[i.n.split(this._propName + "_").join("")]) && (i.r = e), i = i._next
             }, R._onPluginEvent = function (t, e) {
                 var i, s, r, n, a, o = e._firstPT;
                 if ("_onInitAllProps" === t) {
                     for (; o;) {
                         for (a = o._next, s = r; s && s.pr > o.pr;) s = s._next;
                         (o._prev = s ? s._prev : n) ? o._prev._next = o: r = o, (o._next = s) ? s._prev = o : n = o, o = a
                     }
                     o = e._firstPT = r
                 }
                 for (; o;) o.pg && "function" == typeof o.t[t] && o.t[t]() && (i = !0), o = o._next;
                 return i
             }, z.activate = function (t) {
                 for (var e = t.length; --e > -1;) t[e].API === z.API && (O[(new t[e])._propName] = t[e]);
                 return !0
             }, f.plugin = function (t) {
                 if (!(t && t.propName && t.init && t.API)) throw "illegal plugin definition.";
                 var e, i = t.propName,
                     s = t.priority || 0,
                     r = t.overwriteProps,
                     n = {
                         init: "_onInitTween",
                         set: "setRatio",
                         kill: "_kill",
                         round: "_roundProps",
                         initAll: "_onInitAllProps"
                     },
                     a = c("plugins." + i.charAt(0).toUpperCase() + i.substr(1) + "Plugin", function () {
                         z.call(this, i, s), this._overwriteProps = r || []
                     }, t.global === !0),
                     o = a.prototype = new z(i);
                 o.constructor = a, a.API = t.API;
                 for (e in n) "function" == typeof t[e] && (o[n[e]] = t[e]);
                 return a.version = t.version, z.activate([a]), a
             }, e = t._gsQueue) {
             for (i = 0; e.length > i; i++) e[i]();
             for (s in u) u[s].func || t.console.log("GSAP encountered missing dependency: com.greensock." + s)
         }
         n = !1
     }(window);
 (function ($) {
     $.superscrollorama = function (options) {
         var superscrollorama = this;
         var defaults = {
             isVertical: true,
             triggerAtCenter: true,
             playoutAnimations: true,
             reverse: true
         };
         superscrollorama.settings = $.extend({}, defaults, options);
         var $window = $(window);
         var animObjects = [],
             pinnedObjects = [],
             scrollContainerOffset = {
                 x: 0,
                 y: 0
             },
             doUpdateOnNextTick = false,
             targetOffset, i;

         function init() {
             $window.scroll(function () {
                 doUpdateOnNextTick = true
             });
             TweenLite.ticker.addEventListener("tick", tickHandler)
         }

         function cssNumericPosition($elem) {
             var obj = {
                 top: parseFloat($elem.css("top")),
                 left: parseFloat($elem.css("left"))
             };
             if (isNaN(obj.top)) {
                 obj.top = 0
             }
             if (isNaN(obj.left)) {
                 obj.left = 0
             }
             return obj
         }

         function tickHandler() {
             if (doUpdateOnNextTick) {
                 checkScrollAnim();
                 doUpdateOnNextTick = false
             }
         }

         function resetPinObj(pinObj) {
             pinObj.el.css('position', pinObj.origPositioning.pos);
             pinObj.el.css('top', pinObj.origPositioning.top);
             pinObj.el.css('left', pinObj.origPositioning.left)
         }

         function setTweenProgress(tween, progress) {
             if (tween) {
                 if (tween.totalProgress) {
                     tween.totalProgress(progress).pause()
                 } else {
                     tween.progress(progress).pause()
                 }
             }
         }

         function checkScrollAnim() {
             var currScrollPoint = superscrollorama.settings.isVertical ? $window.scrollTop() + scrollContainerOffset.y : $window.scrollLeft() + scrollContainerOffset.x;
             var offsetAdjust = superscrollorama.settings.triggerAtCenter ? (superscrollorama.settings.isVertical ? -$window.height() / 2 : -$window.width() / 2) : 0;
             var i, startPoint, endPoint;
             var numAnim = animObjects.length;
             for (i = 0; i < numAnim; i++) {
                 var animObj = animObjects[i],
                     target = animObj.target,
                     offset = animObj.offset;
                 if (typeof (target) === 'string') {
                     targetOffset = $(target).offset() || {};
                     startPoint = superscrollorama.settings.isVertical ? targetOffset.top + scrollContainerOffset.y : targetOffset.left + scrollContainerOffset.x;
                     offset += offsetAdjust
                 } else if (typeof (target) === 'number') {
                     startPoint = target
                 } else if ($.isFunction(target)) {
                     startPoint = target.call(this)
                 } else {
                     targetOffset = target.offset();
                     startPoint = superscrollorama.settings.isVertical ? targetOffset.top + scrollContainerOffset.y : targetOffset.left + scrollContainerOffset.x;
                     offset += offsetAdjust
                 }
                 startPoint += offset;
                 endPoint = startPoint + animObj.dur;
                 if ((currScrollPoint > startPoint && currScrollPoint < endPoint) && animObj.state !== 'TWEENING') {
                     animObj.state = 'TWEENING';
                     animObj.start = startPoint;
                     animObj.end = endPoint
                 }
                 if (currScrollPoint < startPoint && animObj.state !== 'BEFORE' && animObj.reverse) {
                     if (superscrollorama.settings.playoutAnimations || animObj.dur === 0) {
                         animObj.tween.reverse()
                     } else {
                         setTweenProgress(animObj.tween, 0)
                     }
                     animObj.state = 'BEFORE'
                 } else if (currScrollPoint > endPoint && animObj.state !== 'AFTER') {
                     if (superscrollorama.settings.playoutAnimations || animObj.dur === 0) {
                         animObj.tween.play()
                     } else {
                         setTweenProgress(animObj.tween, 1)
                     }
                     animObj.state = 'AFTER'
                 } else if (animObj.state === 'TWEENING') {
                     var repeatIndefinitely = false;
                     if (animObj.tween.repeat) {
                         repeatIndefinitely = (animObj.tween.repeat() === -1)
                     }
                     if (repeatIndefinitely) {
                         var playheadPosition = animObj.tween.totalProgress();
                         if (animObj.playeadLastPosition === null || playheadPosition === animObj.playeadLastPosition) {
                             if (playheadPosition === 1) {
                                 if (animObj.tween.yoyo()) {
                                     animObj.tween.reverse()
                                 } else {
                                     animObj.tween.totalProgress(0).play()
                                 }
                             } else {
                                 animObj.tween.play()
                             }
                         }
                         animObj.playeadLastPosition = playheadPosition
                     } else {
                         setTweenProgress(animObj.tween, (currScrollPoint - animObj.start) / (animObj.end - animObj.start))
                     }
                 }
             }
             var numPinned = pinnedObjects.length;
             for (i = 0; i < numPinned; i++) {
                 var pinObj = pinnedObjects[i];
                 var el = pinObj.el;
                 if (pinObj.state !== 'PINNED') {
                     var pinObjSpacerOffset = pinObj.spacer.offset();
                     if (pinObj.state === 'UPDATE') {
                         resetPinObj(pinObj)
                     }
                     startPoint = superscrollorama.settings.isVertical ? pinObjSpacerOffset.top + scrollContainerOffset.y : pinObjSpacerOffset.left + scrollContainerOffset.x;
                     startPoint += pinObj.offset;
                     endPoint = startPoint + pinObj.dur;
                     var jumpedPast = ((currScrollPoint > endPoint && pinObj.state === 'BEFORE') || (currScrollPoint < startPoint && pinObj.state === 'AFTER'));
                     var inPinAra = (currScrollPoint > startPoint && currScrollPoint < endPoint);
                     if (inPinAra || jumpedPast) {
                         if (pinObj.pushFollowers && el.css('position') === "static") {
                             el.css('position', "relative")
                         }
                         pinObj.origPositioning = {
                             pos: el.css('position'),
                             top: pinObj.spacer.css('top'),
                             left: pinObj.spacer.css('left')
                         };
                         pinObj.fixedPositioning = {
                             top: superscrollorama.settings.isVertical ? -pinObj.offset : pinObjSpacerOffset.top,
                             left: superscrollorama.settings.isVertical ? pinObjSpacerOffset.left : -pinObj.offset
                         };
                         el.css('position', 'fixed');
                         el.css('top', pinObj.fixedPositioning.top);
                         el.css('left', pinObj.fixedPositioning.left);
                         pinObj.pinStart = startPoint;
                         pinObj.pinEnd = endPoint;
                         if (pinObj.pushFollowers) {
                             if (superscrollorama.settings.isVertical) {
                                 pinObj.spacer.height(pinObj.dur + el.outerHeight())
                             } else {
                                 pinObj.spacer.width(pinObj.dur + el.outerWidth())
                             }
                         } else {
                             if (pinObj.origPositioning.pos === "absolute") {
                                 pinObj.spacer.width(0);
                                 pinObj.spacer.height(0)
                             } else {
                                 if (superscrollorama.settings.isVertical) {
                                     pinObj.spacer.height(el.outerHeight())
                                 } else {
                                     pinObj.spacer.width(el.outerWidth())
                                 }
                             }
                         }
                         if (pinObj.state === "UPDATE") {
                             if (pinObj.anim) {
                                 setTweenProgress(pinObj.anim, 0)
                             }
                         } else if (pinObj.onPin) {
                             pinObj.onPin(pinObj.state === "AFTER")
                         }
                         pinObj.state = 'PINNED'
                     }
                 }
                 if (pinObj.state === 'PINNED') {
                     if (currScrollPoint < pinObj.pinStart || currScrollPoint > pinObj.pinEnd) {
                         var before = currScrollPoint < pinObj.pinStart;
                         pinObj.state = before ? 'BEFORE' : 'AFTER';
                         setTweenProgress(pinObj.anim, before ? 0 : 1);
                         var spacerSize = before ? 0 : pinObj.dur;
                         if (superscrollorama.settings.isVertical) {
                             pinObj.spacer.height(pinObj.pushFollowers ? spacerSize : 0)
                         } else {
                             pinObj.spacer.width(pinObj.pushFollowers ? spacerSize : 0)
                         }
                         var deltay = pinObj.fixedPositioning.top - cssNumericPosition(pinObj.el).top;
                         var deltax = pinObj.fixedPositioning.left - cssNumericPosition(pinObj.el).left;
                         resetPinObj(pinObj);
                         if (!pinObj.pushFollowers || pinObj.origPositioning.pos === "absolute") {
                             var pinOffset;
                             if (pinObj.origPositioning.pos === "relative") {
                                 pinOffset = superscrollorama.settings.isVertical ? parseFloat(pinObj.origPositioning.top) : parseFloat(pinObj.origPositioning.left);
                                 if (isNaN(pinOffset)) {
                                     pinOffset = 0
                                 }
                             } else {
                                 pinOffset = superscrollorama.settings.isVertical ? pinObj.spacer.position().top : pinObj.spacer.position().left
                             }
                             var direction = superscrollorama.settings.isVertical ? "top" : "left";
                             pinObj.el.css(direction, pinOffset + spacerSize)
                         }
                         if (deltay !== 0) {
                             pinObj.el.css("top", cssNumericPosition(pinObj.el).top - deltay)
                         }
                         if (deltax !== 0) {
                             pinObj.el.css("left", cssNumericPosition(pinObj.el).left - deltax)
                         }
                         if (pinObj.onUnpin) {
                             pinObj.onUnpin(!before)
                         }
                     } else if (pinObj.anim) {
                         setTweenProgress(pinObj.anim, (currScrollPoint - pinObj.pinStart) / (pinObj.pinEnd - pinObj.pinStart))
                     }
                 }
             }
         }
         superscrollorama.addTween = function (target, tween, dur, offset, reverse) {
             tween.pause();
             animObjects.push({
                 target: target,
                 tween: tween,
                 offset: offset || 0,
                 dur: dur || 0,
                 reverse: (typeof reverse !== "undefined") ? reverse : superscrollorama.settings.reverse,
                 state: 'BEFORE'
             });
             return superscrollorama
         };
         superscrollorama.pin = function (el, dur, vars) {
             if (typeof (el) === 'string') {
                 el = $(el)
             }
             var defaults = {
                 offset: 0,
                 pushFollowers: true
             };
             vars = $.extend({}, defaults, vars);
             if (vars.anim) {
                 vars.anim.pause()
             }
             var spacer = $('<div class="superscrollorama-pin-spacer"></div>');
             spacer.css("position", "relative");
             spacer.css("top", el.css("top"));
             spacer.css("left", el.css("left"));
             el.before(spacer);
             pinnedObjects.push({
                 el: el,
                 state: 'BEFORE',
                 dur: dur,
                 offset: vars.offset,
                 anim: vars.anim,
                 pushFollowers: vars.pushFollowers,
                 spacer: spacer,
                 onPin: vars.onPin,
                 onUnpin: vars.onUnpin
             });
             return superscrollorama
         };
         superscrollorama.updatePin = function (el, dur, vars) {
             if (typeof (el) === 'string') {
                 el = $(el)
             }
             if (vars.anim) {
                 vars.anim.pause()
             }
             var numPinned = pinnedObjects.length;
             for (i = 0; i < numPinned; i++) {
                 var pinObj = pinnedObjects[i];
                 if (el.get(0) === pinObj.el.get(0)) {
                     if (dur) {
                         pinObj.dur = dur
                     }
                     if (vars.anim) {
                         pinObj.anim = vars.anim
                     }
                     if (vars.offset) {
                         pinObj.offset = vars.offset
                     }
                     if (typeof vars.pushFollowers !== "undefined") {
                         pinObj.pushFollowers = vars.pushFollowers
                     }
                     if (vars.onPin) {
                         pinObj.onPin = vars.onPin
                     }
                     if (vars.onUnpin) {
                         pinObj.onUnpin = vars.onUnpin
                     }
                     if ((dur || vars.anim || vars.offset) && pinObj.state === 'PINNED') {
                         pinObj.state = 'UPDATE';
                         checkScrollAnim()
                     }
                 }
             }
             return superscrollorama
         };
         superscrollorama.removeTween = function (target, tween, reset) {
             var count = animObjects.length;
             if (typeof reset === "undefined") {
                 reset = true
             }
             for (var index = 0; index < count; index++) {
                 var value = animObjects[index];
                 if (value.target === target && (!tween || value.tween === tween)) {
                     animObjects.splice(index, 1);
                     if (reset) {
                         setTweenProgress(value.tween, 0)
                     }
                     count--;
                     index--
                 }
             }
             return superscrollorama
         };
         superscrollorama.removePin = function (el, reset) {
             if (typeof (el) === 'string') {
                 el = $(el)
             }
             if (typeof reset === "undefined") {
                 reset = true
             }
             var count = pinnedObjects.length;
             for (var index = 0; index < count; index++) {
                 var value = pinnedObjects[index];
                 if (value.el.is(el)) {
                     pinnedObjects.splice(index, 1);
                     if (reset) {
                         value.spacer.remove();
                         resetPinObj(value);
                         if (value.anim) {
                             setTweenProgress(value.anim, 0)
                         }
                     }
                     count--;
                     index--
                 }
             }
             return superscrollorama
         };
         superscrollorama.setScrollContainerOffset = function (x, y) {
             scrollContainerOffset.x = x;
             scrollContainerOffset.y = y;
             return superscrollorama
         };
         superscrollorama.triggerCheckAnim = function (immediately) {
             if (immediately) {
                 checkScrollAnim()
             } else {
                 doUpdateOnNextTick = true
             }
             return superscrollorama
         };
         init();
         return superscrollorama
     }
 })(jQuery);
 $(document).ready(function () {
     $("html,body").animate({
         scrollTop: 0
     }, 0.1);
     var p = $(window),
         i = $(document),
         n = $("section"),
         u = n.offset(),
         C = $("#aero"),
         h = $(".scrollHldr"),
         B = $("#balan"),
         v = $("#walle"),
         t = $("#cock"),
         b = $("#tada"),
         y = $("#thanks"),
         m = $("#visiting"),
         r = $("#line"),
         q = $("#like"),
         e = $(".flash"),
         o = true,
         a = $("#home"),
         g = 0;
     a.css("backgroundPosition", a.offset().left - 5 + "px bottom");
     B.css({
         "z-index": "1000",
         left: u.left
     });
     C.css({
         opacity: 1
     });
     C.css({
         top: B.offset().top + B.height() / 2 - 100,
         left: B.offset().left
     });
     v.css({
         left: u.left + 360,
         top: r.offset().top - v.height() - 200
     });
     $("#tada,#thanks,#visiting").css({
         opacity: 0,
         left: u.left,
         top: r.offset().top - v.height() - 268
     });
     e.css({
         opacity: 0
     });
     q.addClass("highlight");
     var j = ["web designing", "jquery", "fire fox", "A.R.R's music", "banglore"],
         l = 0;
     setInterval(function () {
         if (l == j.length - 1) {
             l = 0
         } else {
             l++
         }
         q.text(j[l] + "...")
     }, 1750);
     TweenMax.to($("#scroll"), 0.6, {
         css: {
             y: "+=6"
         },
         roundProps: "y",
         repeat: -1,
         yoyo: true
     });
     var k = $.superscrollorama();
     var f = {
         curviness: 1.25,
         autoRotate: true,
         values: [{
             x: 100,
             y: -20
         }, {
             x: 200,
             y: 10
         }, {
             x: 410,
             y: 60
         }, {
             x: 520,
             y: -60
         }, {
             x: 400,
             y: -100
         }, {
             x: 280,
             y: 20
         }, {
             x: 400,
             y: 60
         }, {
             x: 480,
             y: 20
         }, {
             x: 520,
             y: 15
         }, {
             x: 560,
             y: 20
         }, {
             x: 700,
             y: 130
         }, {
             x: 0,
             y: -200
         }]
     };
     k.addTween(1, TweenMax.to($("#aero"), 0.1, {
         css: {
             bezier: f
         },
         ease: Power1.easeInOut
     }), 500);
     k.addTween(30, TweenMax.to(B, 1, {
         css: {
             opacity: 0,
             left: B.offset().left + 5
         }
     }), 200);
     k.addTween(100, TweenMax.to(v, 1, {
         css: {
             width: 254,
             height: 200,
             left: u.left,
             top: r.offset().top - v.height() - 200
         }
     }), 500);
     k.addTween(500, TweenMax.to(b, 1, {
         css: {
             opacity: 1
         }
     }), 200);
     k.addTween(700, TweenMax.to(b, 1, {
         css: {
             opacity: 0
         }
     }), 200);
     k.addTween(701, TweenMax.to(y, 1, {
         css: {
             opacity: 1
         }
     }), 200);
     k.addTween(900, TweenMax.to(y, 1, {
         css: {
             opacity: 0
         }
     }), 200);
     k.addTween(901, TweenMax.to(m, 1, {
         css: {
             opacity: 1
         }
     }), 200);
     k.addTween(t, TweenMax.to(t, 1, {
         css: {
             left: +300
         }
     }), 400);
     k.addTween(1100, TweenMax.to(v, 0.4, {
         css: {
             top: -300
         }
     }), 900);
     k.addTween(1100, TweenMax.to(m, 0.4, {
         css: {
             top: -368
         }
     }), 900);
     k.addTween(1100, TweenMax.to(B, 1, {
         css: {
             opacity: 0,
             left: -B.width()
         }
     }), 300);
     k.addTween(1500, TweenMax.to(e, 0.1, {
         css: {
             opacity: 1
         },
         repeat: 5,
         yoyo: true
     }));
     TweenMax.to($("#contactAero"), 0.6, {
         css: {
             x: "+=6"
         },
         roundProps: "x",
         repeat: -1,
         yoyo: true
     });
     var z = 0,
         w = [],
         s = [],
         d = $(".slider");
     $.get("portfolio.php", function (D) {
         $("#portSlider").append(D);
         $.get("photos.php", function (E) {
             $("#photoSlider").append(E);
             d.each(function (F) {
                 var G = $(this).find(".slide");
                 s[$(this).attr("id")] = G.length;
                 w[[$(this).attr("id")]] = 0;
                 G.each(function (H) {
                     $(this).attr("id", "slide" + H)
                 });
                 G.not(":first").hide()
             })
         })
     });

     function A(E) {
         var D = E.find("img");
         if (D.size() > 0) {
             if (D.attr("src") != D.attr("rel")) {
                 D.attr("src", D.attr("rel"))
             }
         }
     }
     $(".next").click(function (G) {
         var E = $(G.target),
             D = E.attr("rel"),
             H = $("#" + D),
             F = s[E.attr("rel")];
         if (w[D] != F - 1 && z == 0) {
             w[D]++;
             z = 1;
             A(H.find("#slide" + w[D]));
             H.find("#slide" + (w[D] - 1)).animate({
                 left: -H.width()
             }, 600, function () {});
             H.find("#slide" + w[D]).css({
                 left: H.width() + "px"
             }).show();
             H.find("#slide" + w[D]).animate({
                 left: 0
             }, 600, function () {
                 H.find("#slide" + (w[D] - 1)).hide();
                 z = 0
             })
         }
     });
     $(".prev").click(function (G) {
         var E = $(G.target),
             D = E.attr("rel"),
             H = $("#" + D),
             F = s[E.attr("rel")];
         if (w[D] != 0 && z == 0) {
             w[D]--;
             z = 1;
             A(H.find("#slide" + w[D]));
             H.find("#slide" + (w[D] + 1)).animate({
                 left: H.width() + "px"
             }, 600, function () {});
             H.find("#slide" + w[D]).css({
                 left: +"0px"
             }).show();
             H.find("#slide" + w[D]).animate({
                 left: 0
             }, 600, function () {
                 H.find("#slide" + (w[D] + 1)).hide();
                 z = 0
             })
         }
     });
     p.scroll(function () {
         if (o) {
             TweenMax.to($(".scrollHldr"), 0.75, {
                 css: {
                     opacity: 0
                 }
             });
             TweenMax.killTweensOf($("#scroll"));
             o = false
         }
         if (p.scrollTop() < 100 || p.scrollTop() > 1700) {
             $("#tada,#thanks,#visiting").hide()
         } else {
             $("#tada,#thanks,#visiting").show()
         }
     });
     $("a[href*=#]:not([href=#])").click(function () {
         if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") || location.hostname == this.hostname) {
             var D = $(this.hash);
             D = D.length ? D : $("[name=" + this.hash.slice(1) + "]");
             if (D.length) {
                 $("html,body").animate({
                     scrollTop: D.offset().top
                 }, 3000);
                 return false
             }
         }
     });
     $(".scrollHldr").click(function (D) {
         $("html,body").animate({
             scrollTop: $("#contact").offset().top
         }, 15000)
     });
     $(".aero").css("opacity", "1");
     var c = f;
     c.values.push({
         x: -10,
         y: -10
     });
     c.values.push({
         x: 0,
         y: 0
     });

     function x() {
         TweenMax.to($("#contactAero"), 0.6, {
             css: {
                 x: "+=6"
             },
             roundProps: "x",
             repeat: -1,
             yoyo: true
         })
     }
     $(".formHldr").submit(function (F) {
         $(".formHldr h4").html("Thanks for visiting my website.").removeClass("error");
         var E = {
             txtName: $("#txtName").val(),
             txtEmail: $("#txtEmail").val(),
             txtPhno: $("#txtPhno").val(),
             txtMsg: $("#txtMsg").val()
         };
         if (E.txtName == "") {
             $(".formHldr h4").html("Please enter your name.").addClass("error");
             return false
         } else {
             if (E.txtEmail == "") {
                 $(".formHldr h4").html("Please enter your email id.").addClass("error");
                 return false
             } else {
                 if (E.txtMsg == "") {
                     $(".formHldr h4").html("Please enter your message.").addClass("error");
                     return false
                 }
             }
         }
         var D = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
         if (D.test(E.txtEmail) == false) {
             $(".formHldr h4").html("Please enter valid email id.").addClass("error");
             return false
         }
         if (E.txtPhno != "" && $.isNumeric(E.txtPhno) == false || E.txtPhno != "" && E.txtPhno.length != 10) {
             $(".formHldr h4").html("Please enter valid mobile number.").addClass("error");
             return false
         }
         if (g <= 2) {
             TweenMax.to($("#contactAero"), 2, {
                 css: {
                     bezier: c
                 },
                 ease: Power1.easeInOut,
                 onComplete: x
             });
             $.post("contact.php", E, function (G) {
                 if (G == "1") {
                     $(".formHldr h4").html("Thank you for sending your message.");
                     $("#txtName,#txtEmail,#txtPhno,#txtMsg").val("");
                 } else {
                     $(".formHldr h4").html("Sorry unable to send the message now.").addClass("error");
                     console.log(E);
                 }
             });
             g++;
         } else {
             $(".formHldr h4").html("Sorry unable to send the message now.").addClass("error");
         }
         return false
     })
 });
