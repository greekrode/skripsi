! function(e, t) {
    "use strict";
    "object" == typeof module && "object" == typeof module.exports ? module.exports = e.document ? t(e, !0) : function(e) {
        if (!e.document) throw new Error("jQuery requires a window with a document");
        return t(e)
    } : t(e)
}("undefined" != typeof window ? window : this, function(e, t) {
    "use strict";

    function n(e, t) {
        var n = (t = t || te).createElement("script");
        n.text = e, t.head.appendChild(n).parentNode.removeChild(n)
    }

    function r(e) {
        var t = !!e && "length" in e && e.length,
            n = de.type(e);
        return "function" !== n && !de.isWindow(e) && ("array" === n || 0 === t || "number" == typeof t && t > 0 && t - 1 in e)
    }

    function i(e, t) {
        return e.nodeName && e.nodeName.toLowerCase() === t.toLowerCase()
    }

    function o(e, t, n) {
        return de.isFunction(t) ? de.grep(e, function(e, r) {
            return !!t.call(e, r, e) !== n
        }) : t.nodeType ? de.grep(e, function(e) {
            return e === t !== n
        }) : "string" != typeof t ? de.grep(e, function(e) {
            return ae.call(t, e) > -1 !== n
        }) : Ce.test(t) ? de.filter(t, e, n) : (t = de.filter(t, e), de.grep(e, function(e) {
            return ae.call(t, e) > -1 !== n && 1 === e.nodeType
        }))
    }

    function a(e, t) {
        for (;
            (e = e[t]) && 1 !== e.nodeType;);
        return e
    }

    function s(e) {
        var t = {};
        return de.each(e.match(De) || [], function(e, n) {
            t[n] = !0
        }), t
    }

    function u(e) {
        return e
    }

    function l(e) {
        throw e
    }

    function c(e, t, n, r) {
        var i;
        try {
            e && de.isFunction(i = e.promise) ? i.call(e).done(t).fail(n) : e && de.isFunction(i = e.then) ? i.call(e, t, n) : t.apply(void 0, [e].slice(r))
        } catch (e) {
            n.apply(void 0, [e])
        }
    }

    function f() {
        te.removeEventListener("DOMContentLoaded", f), e.removeEventListener("load", f), de.ready()
    }

    function p() {
        this.expando = de.expando + p.uid++
    }

    function d(e) {
        return "true" === e || "false" !== e && ("null" === e ? null : e === +e + "" ? +e : Oe.test(e) ? JSON.parse(e) : e)
    }

    function h(e, t, n) {
        var r;
        if (void 0 === n && 1 === e.nodeType)
            if (r = "data-" + t.replace(Pe, "-$&").toLowerCase(), "string" == typeof(n = e.getAttribute(r))) {
                try {
                    n = d(n)
                } catch (e) {}
                Fe.set(e, t, n)
            } else n = void 0;
        return n
    }

    function g(e, t, n, r) {
        var i, o = 1,
            a = 20,
            s = r ? function() {
                return r.cur()
            } : function() {
                return de.css(e, t, "")
            },
            u = s(),
            l = n && n[3] || (de.cssNumber[t] ? "" : "px"),
            c = (de.cssNumber[t] || "px" !== l && +u) && Me.exec(de.css(e, t));
        if (c && c[3] !== l) {
            l = l || c[3], n = n || [], c = +u || 1;
            do {
                c /= o = o || ".5", de.style(e, t, c + l)
            } while (o !== (o = s() / u) && 1 !== o && --a)
        }
        return n && (c = +c || +u || 0, i = n[1] ? c + (n[1] + 1) * n[2] : +n[2], r && (r.unit = l, r.start = c, r.end = i)), i
    }

    function v(e) {
        var t, n = e.ownerDocument,
            r = e.nodeName,
            i = Be[r];
        return i || (t = n.body.appendChild(n.createElement(r)), i = de.css(t, "display"), t.parentNode.removeChild(t), "none" === i && (i = "block"), Be[r] = i, i)
    }

    function m(e, t) {
        for (var n, r, i = [], o = 0, a = e.length; o < a; o++)(r = e[o]).style && (n = r.style.display, t ? ("none" === n && (i[o] = He.get(r, "display") || null, i[o] || (r.style.display = "")), "" === r.style.display && We(r) && (i[o] = v(r))) : "none" !== n && (i[o] = "none", He.set(r, "display", n)));
        for (o = 0; o < a; o++) null != i[o] && (e[o].style.display = i[o]);
        return e
    }

    function y(e, t) {
        var n;
        return n = void 0 !== e.getElementsByTagName ? e.getElementsByTagName(t || "*") : void 0 !== e.querySelectorAll ? e.querySelectorAll(t || "*") : [], void 0 === t || t && i(e, t) ? de.merge([e], n) : n
    }

    function x(e, t) {
        for (var n = 0, r = e.length; n < r; n++) He.set(e[n], "globalEval", !t || He.get(t[n], "globalEval"))
    }

    function b(e, t, n, r, i) {
        for (var o, a, s, u, l, c, f = t.createDocumentFragment(), p = [], d = 0, h = e.length; d < h; d++)
            if ((o = e[d]) || 0 === o)
                if ("object" === de.type(o)) de.merge(p, o.nodeType ? [o] : o);
                else if (Ve.test(o)) {
                    for (a = a || f.appendChild(t.createElement("div")), s = (ze.exec(o) || ["", ""])[1].toLowerCase(), u = Ue[s] || Ue._default, a.innerHTML = u[1] + de.htmlPrefilter(o) + u[2], c = u[0]; c--;) a = a.lastChild;
                    de.merge(p, a.childNodes), (a = f.firstChild).textContent = ""
                } else p.push(t.createTextNode(o));
        for (f.textContent = "", d = 0; o = p[d++];)
            if (r && de.inArray(o, r) > -1) i && i.push(o);
            else if (l = de.contains(o.ownerDocument, o), a = y(f.appendChild(o), "script"), l && x(a), n)
                for (c = 0; o = a[c++];) Xe.test(o.type || "") && n.push(o);
        return f
    }

    function w() {
        return !0
    }

    function T() {
        return !1
    }

    function C() {
        try {
            return te.activeElement
        } catch (e) {}
    }

    function E(e, t, n, r, i, o) {
        var a, s;
        if ("object" == typeof t) {
            "string" != typeof n && (r = r || n, n = void 0);
            for (s in t) E(e, s, n, r, t[s], o);
            return e
        }
        if (null == r && null == i ? (i = n, r = n = void 0) : null == i && ("string" == typeof n ? (i = r, r = void 0) : (i = r, r = n, n = void 0)), !1 === i) i = T;
        else if (!i) return e;
        return 1 === o && (a = i, (i = function(e) {
            return de().off(e), a.apply(this, arguments)
        }).guid = a.guid || (a.guid = de.guid++)), e.each(function() {
            de.event.add(this, t, i, r, n)
        })
    }

    function k(e, t) {
        return i(e, "table") && i(11 !== t.nodeType ? t : t.firstChild, "tr") ? de(">tbody", e)[0] || e : e
    }

    function S(e) {
        return e.type = (null !== e.getAttribute("type")) + "/" + e.type, e
    }

    function N(e) {
        var t = tt.exec(e.type);
        return t ? e.type = t[1] : e.removeAttribute("type"), e
    }

    function D(e, t) {
        var n, r, i, o, a, s, u, l;
        if (1 === t.nodeType) {
            if (He.hasData(e) && (o = He.access(e), a = He.set(t, o), l = o.events)) {
                delete a.handle, a.events = {};
                for (i in l)
                    for (n = 0, r = l[i].length; n < r; n++) de.event.add(t, i, l[i][n])
            }
            Fe.hasData(e) && (s = Fe.access(e), u = de.extend({}, s), Fe.set(t, u))
        }
    }

    function j(e, t) {
        var n = t.nodeName.toLowerCase();
        "input" === n && _e.test(e.type) ? t.checked = e.checked : "input" !== n && "textarea" !== n || (t.defaultValue = e.defaultValue)
    }

    function A(e, t, r, i) {
        t = ie.apply([], t);
        var o, a, s, u, l, c, f = 0,
            p = e.length,
            d = p - 1,
            h = t[0],
            g = de.isFunction(h);
        if (g || p > 1 && "string" == typeof h && !pe.checkClone && et.test(h)) return e.each(function(n) {
            var o = e.eq(n);
            g && (t[0] = h.call(this, n, o.html())), A(o, t, r, i)
        });
        if (p && (o = b(t, e[0].ownerDocument, !1, e, i), a = o.firstChild, 1 === o.childNodes.length && (o = a), a || i)) {
            for (u = (s = de.map(y(o, "script"), S)).length; f < p; f++) l = o, f !== d && (l = de.clone(l, !0, !0), u && de.merge(s, y(l, "script"))), r.call(e[f], l, f);
            if (u)
                for (c = s[s.length - 1].ownerDocument, de.map(s, N), f = 0; f < u; f++) l = s[f], Xe.test(l.type || "") && !He.access(l, "globalEval") && de.contains(c, l) && (l.src ? de._evalUrl && de._evalUrl(l.src) : n(l.textContent.replace(nt, ""), c))
        }
        return e
    }

    function q(e, t, n) {
        for (var r, i = t ? de.filter(t, e) : e, o = 0; null != (r = i[o]); o++) n || 1 !== r.nodeType || de.cleanData(y(r)), r.parentNode && (n && de.contains(r.ownerDocument, r) && x(y(r, "script")), r.parentNode.removeChild(r));
        return e
    }

    function L(e, t, n) {
        var r, i, o, a, s = e.style;
        return (n = n || ot(e)) && ("" !== (a = n.getPropertyValue(t) || n[t]) || de.contains(e.ownerDocument, e) || (a = de.style(e, t)), !pe.pixelMarginRight() && it.test(a) && rt.test(t) && (r = s.width, i = s.minWidth, o = s.maxWidth, s.minWidth = s.maxWidth = s.width = a, a = n.width, s.width = r, s.minWidth = i, s.maxWidth = o)), void 0 !== a ? a + "" : a
    }

    function H(e, t) {
        return {
            get: function() {
                if (!e()) return (this.get = t).apply(this, arguments);
                delete this.get
            }
        }
    }

    function F(e) {
        if (e in ft) return e;
        for (var t = e[0].toUpperCase() + e.slice(1), n = ct.length; n--;)
            if ((e = ct[n] + t) in ft) return e
    }

    function O(e) {
        var t = de.cssProps[e];
        return t || (t = de.cssProps[e] = F(e) || e), t
    }

    function P(e, t, n) {
        var r = Me.exec(t);
        return r ? Math.max(0, r[2] - (n || 0)) + (r[3] || "px") : t
    }

    function R(e, t, n, r, i) {
        var o, a = 0;
        for (o = n === (r ? "border" : "content") ? 4 : "width" === t ? 1 : 0; o < 4; o += 2) "margin" === n && (a += de.css(e, n + Ie[o], !0, i)), r ? ("content" === n && (a -= de.css(e, "padding" + Ie[o], !0, i)), "margin" !== n && (a -= de.css(e, "border" + Ie[o] + "Width", !0, i))) : (a += de.css(e, "padding" + Ie[o], !0, i), "padding" !== n && (a += de.css(e, "border" + Ie[o] + "Width", !0, i)));
        return a
    }

    function M(e, t, n) {
        var r, i = ot(e),
            o = L(e, t, i),
            a = "border-box" === de.css(e, "boxSizing", !1, i);
        return it.test(o) ? o : (r = a && (pe.boxSizingReliable() || o === e.style[t]), "auto" === o && (o = e["offset" + t[0].toUpperCase() + t.slice(1)]), (o = parseFloat(o) || 0) + R(e, t, n || (a ? "border" : "content"), r, i) + "px")
    }

    function I(e, t, n, r, i) {
        return new I.prototype.init(e, t, n, r, i)
    }

    function W() {
        dt && (!1 === te.hidden && e.requestAnimationFrame ? e.requestAnimationFrame(W) : e.setTimeout(W, de.fx.interval), de.fx.tick())
    }

    function $() {
        return e.setTimeout(function() {
            pt = void 0
        }), pt = de.now()
    }

    function B(e, t) {
        var n, r = 0,
            i = {
                height: e
            };
        for (t = t ? 1 : 0; r < 4; r += 2 - t) i["margin" + (n = Ie[r])] = i["padding" + n] = e;
        return t && (i.opacity = i.width = e), i
    }

    function _(e, t, n) {
        for (var r, i = (X.tweeners[t] || []).concat(X.tweeners["*"]), o = 0, a = i.length; o < a; o++)
            if (r = i[o].call(n, t, e)) return r
    }

    function z(e, t) {
        var n, r, i, o, a;
        for (n in e)
            if (r = de.camelCase(n), i = t[r], o = e[n], Array.isArray(o) && (i = o[1], o = e[n] = o[0]), n !== r && (e[r] = o, delete e[n]), (a = de.cssHooks[r]) && "expand" in a) {
                o = a.expand(o), delete e[r];
                for (n in o) n in e || (e[n] = o[n], t[n] = i)
            } else t[r] = i
    }

    function X(e, t, n) {
        var r, i, o = 0,
            a = X.prefilters.length,
            s = de.Deferred().always(function() {
                delete u.elem
            }),
            u = function() {
                if (i) return !1;
                for (var t = pt || $(), n = Math.max(0, l.startTime + l.duration - t), r = 1 - (n / l.duration || 0), o = 0, a = l.tweens.length; o < a; o++) l.tweens[o].run(r);
                return s.notifyWith(e, [l, r, n]), r < 1 && a ? n : (a || s.notifyWith(e, [l, 1, 0]), s.resolveWith(e, [l]), !1)
            },
            l = s.promise({
                elem: e,
                props: de.extend({}, t),
                opts: de.extend(!0, {
                    specialEasing: {},
                    easing: de.easing._default
                }, n),
                originalProperties: t,
                originalOptions: n,
                startTime: pt || $(),
                duration: n.duration,
                tweens: [],
                createTween: function(t, n) {
                    var r = de.Tween(e, l.opts, t, n, l.opts.specialEasing[t] || l.opts.easing);
                    return l.tweens.push(r), r
                },
                stop: function(t) {
                    var n = 0,
                        r = t ? l.tweens.length : 0;
                    if (i) return this;
                    for (i = !0; n < r; n++) l.tweens[n].run(1);
                    return t ? (s.notifyWith(e, [l, 1, 0]), s.resolveWith(e, [l, t])) : s.rejectWith(e, [l, t]), this
                }
            }),
            c = l.props;
        for (z(c, l.opts.specialEasing); o < a; o++)
            if (r = X.prefilters[o].call(l, e, c, l.opts)) return de.isFunction(r.stop) && (de._queueHooks(l.elem, l.opts.queue).stop = de.proxy(r.stop, r)), r;
        return de.map(c, _, l), de.isFunction(l.opts.start) && l.opts.start.call(e, l), l.progress(l.opts.progress).done(l.opts.done, l.opts.complete).fail(l.opts.fail).always(l.opts.always), de.fx.timer(de.extend(u, {
            elem: e,
            anim: l,
            queue: l.opts.queue
        })), l
    }

    function U(e) {
        return (e.match(De) || []).join(" ")
    }

    function V(e) {
        return e.getAttribute && e.getAttribute("class") || ""
    }

    function G(e, t, n, r) {
        var i;
        if (Array.isArray(t)) de.each(t, function(t, i) {
            n || kt.test(e) ? r(e, i) : G(e + "[" + ("object" == typeof i && null != i ? t : "") + "]", i, n, r)
        });
        else if (n || "object" !== de.type(t)) r(e, t);
        else
            for (i in t) G(e + "[" + i + "]", t[i], n, r)
    }

    function Y(e) {
        return function(t, n) {
            "string" != typeof t && (n = t, t = "*");
            var r, i = 0,
                o = t.toLowerCase().match(De) || [];
            if (de.isFunction(n))
                for (; r = o[i++];) "+" === r[0] ? (r = r.slice(1) || "*", (e[r] = e[r] || []).unshift(n)) : (e[r] = e[r] || []).push(n)
        }
    }

    function Q(e, t, n, r) {
        function i(s) {
            var u;
            return o[s] = !0, de.each(e[s] || [], function(e, s) {
                var l = s(t, n, r);
                return "string" != typeof l || a || o[l] ? a ? !(u = l) : void 0 : (t.dataTypes.unshift(l), i(l), !1)
            }), u
        }
        var o = {},
            a = e === Rt;
        return i(t.dataTypes[0]) || !o["*"] && i("*")
    }

    function J(e, t) {
        var n, r, i = de.ajaxSettings.flatOptions || {};
        for (n in t) void 0 !== t[n] && ((i[n] ? e : r || (r = {}))[n] = t[n]);
        return r && de.extend(!0, e, r), e
    }

    function K(e, t, n) {
        for (var r, i, o, a, s = e.contents, u = e.dataTypes;
             "*" === u[0];) u.shift(), void 0 === r && (r = e.mimeType || t.getResponseHeader("Content-Type"));
        if (r)
            for (i in s)
                if (s[i] && s[i].test(r)) {
                    u.unshift(i);
                    break
                }
        if (u[0] in n) o = u[0];
        else {
            for (i in n) {
                if (!u[0] || e.converters[i + " " + u[0]]) {
                    o = i;
                    break
                }
                a || (a = i)
            }
            o = o || a
        }
        if (o) return o !== u[0] && u.unshift(o), n[o]
    }

    function Z(e, t, n, r) {
        var i, o, a, s, u, l = {},
            c = e.dataTypes.slice();
        if (c[1])
            for (a in e.converters) l[a.toLowerCase()] = e.converters[a];
        for (o = c.shift(); o;)
            if (e.responseFields[o] && (n[e.responseFields[o]] = t), !u && r && e.dataFilter && (t = e.dataFilter(t, e.dataType)), u = o, o = c.shift())
                if ("*" === o) o = u;
                else if ("*" !== u && u !== o) {
                    if (!(a = l[u + " " + o] || l["* " + o]))
                        for (i in l)
                            if ((s = i.split(" "))[1] === o && (a = l[u + " " + s[0]] || l["* " + s[0]])) {
                                !0 === a ? a = l[i] : !0 !== l[i] && (o = s[0], c.unshift(s[1]));
                                break
                            }
                    if (!0 !== a)
                        if (a && e.throws) t = a(t);
                        else try {
                            t = a(t)
                        } catch (e) {
                            return {
                                state: "parsererror",
                                error: a ? e : "No conversion from " + u + " to " + o
                            }
                        }
                }
        return {
            state: "success",
            data: t
        }
    }
    var ee = [],
        te = e.document,
        ne = Object.getPrototypeOf,
        re = ee.slice,
        ie = ee.concat,
        oe = ee.push,
        ae = ee.indexOf,
        se = {},
        ue = se.toString,
        le = se.hasOwnProperty,
        ce = le.toString,
        fe = ce.call(Object),
        pe = {},
        de = function(e, t) {
            return new de.fn.init(e, t)
        },
        he = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,
        ge = /^-ms-/,
        ve = /-([a-z])/g,
        me = function(e, t) {
            return t.toUpperCase()
        };
    de.fn = de.prototype = {
        jquery: "3.2.1",
        constructor: de,
        length: 0,
        toArray: function() {
            return re.call(this)
        },
        get: function(e) {
            return null == e ? re.call(this) : e < 0 ? this[e + this.length] : this[e]
        },
        pushStack: function(e) {
            var t = de.merge(this.constructor(), e);
            return t.prevObject = this, t
        },
        each: function(e) {
            return de.each(this, e)
        },
        map: function(e) {
            return this.pushStack(de.map(this, function(t, n) {
                return e.call(t, n, t)
            }))
        },
        slice: function() {
            return this.pushStack(re.apply(this, arguments))
        },
        first: function() {
            return this.eq(0)
        },
        last: function() {
            return this.eq(-1)
        },
        eq: function(e) {
            var t = this.length,
                n = +e + (e < 0 ? t : 0);
            return this.pushStack(n >= 0 && n < t ? [this[n]] : [])
        },
        end: function() {
            return this.prevObject || this.constructor()
        },
        push: oe,
        sort: ee.sort,
        splice: ee.splice
    }, de.extend = de.fn.extend = function() {
        var e, t, n, r, i, o, a = arguments[0] || {},
            s = 1,
            u = arguments.length,
            l = !1;
        for ("boolean" == typeof a && (l = a, a = arguments[s] || {}, s++), "object" == typeof a || de.isFunction(a) || (a = {}), s === u && (a = this, s--); s < u; s++)
            if (null != (e = arguments[s]))
                for (t in e) n = a[t], a !== (r = e[t]) && (l && r && (de.isPlainObject(r) || (i = Array.isArray(r))) ? (i ? (i = !1, o = n && Array.isArray(n) ? n : []) : o = n && de.isPlainObject(n) ? n : {}, a[t] = de.extend(l, o, r)) : void 0 !== r && (a[t] = r));
        return a
    }, de.extend({
        expando: "jQuery" + ("3.2.1" + Math.random()).replace(/\D/g, ""),
        isReady: !0,
        error: function(e) {
            throw new Error(e)
        },
        noop: function() {},
        isFunction: function(e) {
            return "function" === de.type(e)
        },
        isWindow: function(e) {
            return null != e && e === e.window
        },
        isNumeric: function(e) {
            var t = de.type(e);
            return ("number" === t || "string" === t) && !isNaN(e - parseFloat(e))
        },
        isPlainObject: function(e) {
            var t, n;
            return !(!e || "[object Object]" !== ue.call(e)) && (!(t = ne(e)) || "function" == typeof(n = le.call(t, "constructor") && t.constructor) && ce.call(n) === fe)
        },
        isEmptyObject: function(e) {
            var t;
            for (t in e) return !1;
            return !0
        },
        type: function(e) {
            return null == e ? e + "" : "object" == typeof e || "function" == typeof e ? se[ue.call(e)] || "object" : typeof e
        },
        globalEval: function(e) {
            n(e)
        },
        camelCase: function(e) {
            return e.replace(ge, "ms-").replace(ve, me)
        },
        each: function(e, t) {
            var n, i = 0;
            if (r(e))
                for (n = e.length; i < n && !1 !== t.call(e[i], i, e[i]); i++);
            else
                for (i in e)
                    if (!1 === t.call(e[i], i, e[i])) break; return e
        },
        trim: function(e) {
            return null == e ? "" : (e + "").replace(he, "")
        },
        makeArray: function(e, t) {
            var n = t || [];
            return null != e && (r(Object(e)) ? de.merge(n, "string" == typeof e ? [e] : e) : oe.call(n, e)), n
        },
        inArray: function(e, t, n) {
            return null == t ? -1 : ae.call(t, e, n)
        },
        merge: function(e, t) {
            for (var n = +t.length, r = 0, i = e.length; r < n; r++) e[i++] = t[r];
            return e.length = i, e
        },
        grep: function(e, t, n) {
            for (var r = [], i = 0, o = e.length, a = !n; i < o; i++) !t(e[i], i) !== a && r.push(e[i]);
            return r
        },
        map: function(e, t, n) {
            var i, o, a = 0,
                s = [];
            if (r(e))
                for (i = e.length; a < i; a++) null != (o = t(e[a], a, n)) && s.push(o);
            else
                for (a in e) null != (o = t(e[a], a, n)) && s.push(o);
            return ie.apply([], s)
        },
        guid: 1,
        proxy: function(e, t) {
            var n, r, i;
            if ("string" == typeof t && (n = e[t], t = e, e = n), de.isFunction(e)) return r = re.call(arguments, 2), i = function() {
                return e.apply(t || this, r.concat(re.call(arguments)))
            }, i.guid = e.guid = e.guid || de.guid++, i
        },
        now: Date.now,
        support: pe
    }), "function" == typeof Symbol && (de.fn[Symbol.iterator] = ee[Symbol.iterator]), de.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "), function(e, t) {
        se["[object " + t + "]"] = t.toLowerCase()
    });
    var ye = function(e) {
        function t(e, t, n, r) {
            var i, o, a, s, u, c, p, d = t && t.ownerDocument,
                h = t ? t.nodeType : 9;
            if (n = n || [], "string" != typeof e || !e || 1 !== h && 9 !== h && 11 !== h) return n;
            if (!r && ((t ? t.ownerDocument || t : I) !== q && A(t), t = t || q, H)) {
                if (11 !== h && (u = ge.exec(e)))
                    if (i = u[1]) {
                        if (9 === h) {
                            if (!(a = t.getElementById(i))) return n;
                            if (a.id === i) return n.push(a), n
                        } else if (d && (a = d.getElementById(i)) && R(t, a) && a.id === i) return n.push(a), n
                    } else {
                        if (u[2]) return Q.apply(n, t.getElementsByTagName(e)), n;
                        if ((i = u[3]) && b.getElementsByClassName && t.getElementsByClassName) return Q.apply(n, t.getElementsByClassName(i)), n
                    }
                if (b.qsa && !z[e + " "] && (!F || !F.test(e))) {
                    if (1 !== h) d = t, p = e;
                    else if ("object" !== t.nodeName.toLowerCase()) {
                        for ((s = t.getAttribute("id")) ? s = s.replace(xe, be) : t.setAttribute("id", s = M), o = (c = E(e)).length; o--;) c[o] = "#" + s + " " + f(c[o]);
                        p = c.join(","), d = ve.test(e) && l(t.parentNode) || t
                    }
                    if (p) try {
                        return Q.apply(n, d.querySelectorAll(p)), n
                    } catch (e) {} finally {
                        s === M && t.removeAttribute("id")
                    }
                }
            }
            return S(e.replace(oe, "$1"), t, n, r)
        }

        function n() {
            function e(n, r) {
                return t.push(n + " ") > w.cacheLength && delete e[t.shift()], e[n + " "] = r
            }
            var t = [];
            return e
        }

        function r(e) {
            return e[M] = !0, e
        }

        function i(e) {
            var t = q.createElement("fieldset");
            try {
                return !!e(t)
            } catch (e) {
                return !1
            } finally {
                t.parentNode && t.parentNode.removeChild(t), t = null
            }
        }

        function o(e, t) {
            for (var n = e.split("|"), r = n.length; r--;) w.attrHandle[n[r]] = t
        }

        function a(e, t) {
            var n = t && e,
                r = n && 1 === e.nodeType && 1 === t.nodeType && e.sourceIndex - t.sourceIndex;
            if (r) return r;
            if (n)
                for (; n = n.nextSibling;)
                    if (n === t) return -1;
            return e ? 1 : -1
        }

        function s(e) {
            return function(t) {
                return "form" in t ? t.parentNode && !1 === t.disabled ? "label" in t ? "label" in t.parentNode ? t.parentNode.disabled === e : t.disabled === e : t.isDisabled === e || t.isDisabled !== !e && Te(t) === e : t.disabled === e : "label" in t && t.disabled === e
            }
        }

        function u(e) {
            return r(function(t) {
                return t = +t, r(function(n, r) {
                    for (var i, o = e([], n.length, t), a = o.length; a--;) n[i = o[a]] && (n[i] = !(r[i] = n[i]))
                })
            })
        }

        function l(e) {
            return e && void 0 !== e.getElementsByTagName && e
        }

        function c() {}

        function f(e) {
            for (var t = 0, n = e.length, r = ""; t < n; t++) r += e[t].value;
            return r
        }

        function p(e, t, n) {
            var r = t.dir,
                i = t.next,
                o = i || r,
                a = n && "parentNode" === o,
                s = $++;
            return t.first ? function(t, n, i) {
                for (; t = t[r];)
                    if (1 === t.nodeType || a) return e(t, n, i);
                return !1
            } : function(t, n, u) {
                var l, c, f, p = [W, s];
                if (u) {
                    for (; t = t[r];)
                        if ((1 === t.nodeType || a) && e(t, n, u)) return !0
                } else
                    for (; t = t[r];)
                        if (1 === t.nodeType || a)
                            if (f = t[M] || (t[M] = {}), c = f[t.uniqueID] || (f[t.uniqueID] = {}), i && i === t.nodeName.toLowerCase()) t = t[r] || t;
                            else {
                                if ((l = c[o]) && l[0] === W && l[1] === s) return p[2] = l[2];
                                if (c[o] = p, p[2] = e(t, n, u)) return !0
                            } return !1
            }
        }

        function d(e) {
            return e.length > 1 ? function(t, n, r) {
                for (var i = e.length; i--;)
                    if (!e[i](t, n, r)) return !1;
                return !0
            } : e[0]
        }

        function h(e, n, r) {
            for (var i = 0, o = n.length; i < o; i++) t(e, n[i], r);
            return r
        }

        function g(e, t, n, r, i) {
            for (var o, a = [], s = 0, u = e.length, l = null != t; s < u; s++)(o = e[s]) && (n && !n(o, r, i) || (a.push(o), l && t.push(s)));
            return a
        }

        function v(e, t, n, i, o, a) {
            return i && !i[M] && (i = v(i)), o && !o[M] && (o = v(o, a)), r(function(r, a, s, u) {
                var l, c, f, p = [],
                    d = [],
                    v = a.length,
                    m = r || h(t || "*", s.nodeType ? [s] : s, []),
                    y = !e || !r && t ? m : g(m, p, e, s, u),
                    x = n ? o || (r ? e : v || i) ? [] : a : y;
                if (n && n(y, x, s, u), i)
                    for (l = g(x, d), i(l, [], s, u), c = l.length; c--;)(f = l[c]) && (x[d[c]] = !(y[d[c]] = f));
                if (r) {
                    if (o || e) {
                        if (o) {
                            for (l = [], c = x.length; c--;)(f = x[c]) && l.push(y[c] = f);
                            o(null, x = [], l, u)
                        }
                        for (c = x.length; c--;)(f = x[c]) && (l = o ? K(r, f) : p[c]) > -1 && (r[l] = !(a[l] = f))
                    }
                } else x = g(x === a ? x.splice(v, x.length) : x), o ? o(null, a, x, u) : Q.apply(a, x)
            })
        }

        function m(e) {
            for (var t, n, r, i = e.length, o = w.relative[e[0].type], a = o || w.relative[" "], s = o ? 1 : 0, u = p(function(e) {
                return e === t
            }, a, !0), l = p(function(e) {
                return K(t, e) > -1
            }, a, !0), c = [function(e, n, r) {
                var i = !o && (r || n !== N) || ((t = n).nodeType ? u(e, n, r) : l(e, n, r));
                return t = null, i
            }]; s < i; s++)
                if (n = w.relative[e[s].type]) c = [p(d(c), n)];
                else {
                    if ((n = w.filter[e[s].type].apply(null, e[s].matches))[M]) {
                        for (r = ++s; r < i && !w.relative[e[r].type]; r++);
                        return v(s > 1 && d(c), s > 1 && f(e.slice(0, s - 1).concat({
                            value: " " === e[s - 2].type ? "*" : ""
                        })).replace(oe, "$1"), n, s < r && m(e.slice(s, r)), r < i && m(e = e.slice(r)), r < i && f(e))
                    }
                    c.push(n)
                }
            return d(c)
        }

        function y(e, n) {
            var i = n.length > 0,
                o = e.length > 0,
                a = function(r, a, s, u, l) {
                    var c, f, p, d = 0,
                        h = "0",
                        v = r && [],
                        m = [],
                        y = N,
                        x = r || o && w.find.TAG("*", l),
                        b = W += null == y ? 1 : Math.random() || .1,
                        T = x.length;
                    for (l && (N = a === q || a || l); h !== T && null != (c = x[h]); h++) {
                        if (o && c) {
                            for (f = 0, a || c.ownerDocument === q || (A(c), s = !H); p = e[f++];)
                                if (p(c, a || q, s)) {
                                    u.push(c);
                                    break
                                }
                            l && (W = b)
                        }
                        i && ((c = !p && c) && d--, r && v.push(c))
                    }
                    if (d += h, i && h !== d) {
                        for (f = 0; p = n[f++];) p(v, m, a, s);
                        if (r) {
                            if (d > 0)
                                for (; h--;) v[h] || m[h] || (m[h] = G.call(u));
                            m = g(m)
                        }
                        Q.apply(u, m), l && !r && m.length > 0 && d + n.length > 1 && t.uniqueSort(u)
                    }
                    return l && (W = b, N = y), v
                };
            return i ? r(a) : a
        }
        var x, b, w, T, C, E, k, S, N, D, j, A, q, L, H, F, O, P, R, M = "sizzle" + 1 * new Date,
            I = e.document,
            W = 0,
            $ = 0,
            B = n(),
            _ = n(),
            z = n(),
            X = function(e, t) {
                return e === t && (j = !0), 0
            },
            U = {}.hasOwnProperty,
            V = [],
            G = V.pop,
            Y = V.push,
            Q = V.push,
            J = V.slice,
            K = function(e, t) {
                for (var n = 0, r = e.length; n < r; n++)
                    if (e[n] === t) return n;
                return -1
            },
            Z = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
            ee = "[\\x20\\t\\r\\n\\f]",
            te = "(?:\\\\.|[\\w-]|[^\0-\\xa0])+",
            ne = "\\[" + ee + "*(" + te + ")(?:" + ee + "*([*^$|!~]?=)" + ee + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + te + "))|)" + ee + "*\\]",
            re = ":(" + te + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + ne + ")*)|.*)\\)|)",
            ie = new RegExp(ee + "+", "g"),
            oe = new RegExp("^" + ee + "+|((?:^|[^\\\\])(?:\\\\.)*)" + ee + "+$", "g"),
            ae = new RegExp("^" + ee + "*," + ee + "*"),
            se = new RegExp("^" + ee + "*([>+~]|" + ee + ")" + ee + "*"),
            ue = new RegExp("=" + ee + "*([^\\]'\"]*?)" + ee + "*\\]", "g"),
            le = new RegExp(re),
            ce = new RegExp("^" + te + "$"),
            fe = {
                ID: new RegExp("^#(" + te + ")"),
                CLASS: new RegExp("^\\.(" + te + ")"),
                TAG: new RegExp("^(" + te + "|[*])"),
                ATTR: new RegExp("^" + ne),
                PSEUDO: new RegExp("^" + re),
                CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + ee + "*(even|odd|(([+-]|)(\\d*)n|)" + ee + "*(?:([+-]|)" + ee + "*(\\d+)|))" + ee + "*\\)|)", "i"),
                bool: new RegExp("^(?:" + Z + ")$", "i"),
                needsContext: new RegExp("^" + ee + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + ee + "*((?:-\\d)?\\d*)" + ee + "*\\)|)(?=[^-]|$)", "i")
            },
            pe = /^(?:input|select|textarea|button)$/i,
            de = /^h\d$/i,
            he = /^[^{]+\{\s*\[native \w/,
            ge = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,
            ve = /[+~]/,
            me = new RegExp("\\\\([\\da-f]{1,6}" + ee + "?|(" + ee + ")|.)", "ig"),
            ye = function(e, t, n) {
                var r = "0x" + t - 65536;
                return r !== r || n ? t : r < 0 ? String.fromCharCode(r + 65536) : String.fromCharCode(r >> 10 | 55296, 1023 & r | 56320)
            },
            xe = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,
            be = function(e, t) {
                return t ? "\0" === e ? "�" : e.slice(0, -1) + "\\" + e.charCodeAt(e.length - 1).toString(16) + " " : "\\" + e
            },
            we = function() {
                A()
            },
            Te = p(function(e) {
                return !0 === e.disabled && ("form" in e || "label" in e)
            }, {
                dir: "parentNode",
                next: "legend"
            });
        try {
            Q.apply(V = J.call(I.childNodes), I.childNodes), V[I.childNodes.length].nodeType
        } catch (e) {
            Q = {
                apply: V.length ? function(e, t) {
                    Y.apply(e, J.call(t))
                } : function(e, t) {
                    for (var n = e.length, r = 0; e[n++] = t[r++];);
                    e.length = n - 1
                }
            }
        }
        b = t.support = {}, C = t.isXML = function(e) {
            var t = e && (e.ownerDocument || e).documentElement;
            return !!t && "HTML" !== t.nodeName
        }, A = t.setDocument = function(e) {
            var t, n, r = e ? e.ownerDocument || e : I;
            return r !== q && 9 === r.nodeType && r.documentElement ? (q = r, L = q.documentElement, H = !C(q), I !== q && (n = q.defaultView) && n.top !== n && (n.addEventListener ? n.addEventListener("unload", we, !1) : n.attachEvent && n.attachEvent("onunload", we)), b.attributes = i(function(e) {
                return e.className = "i", !e.getAttribute("className")
            }), b.getElementsByTagName = i(function(e) {
                return e.appendChild(q.createComment("")), !e.getElementsByTagName("*").length
            }), b.getElementsByClassName = he.test(q.getElementsByClassName), b.getById = i(function(e) {
                return L.appendChild(e).id = M, !q.getElementsByName || !q.getElementsByName(M).length
            }), b.getById ? (w.filter.ID = function(e) {
                var t = e.replace(me, ye);
                return function(e) {
                    return e.getAttribute("id") === t
                }
            }, w.find.ID = function(e, t) {
                if (void 0 !== t.getElementById && H) {
                    var n = t.getElementById(e);
                    return n ? [n] : []
                }
            }) : (w.filter.ID = function(e) {
                var t = e.replace(me, ye);
                return function(e) {
                    var n = void 0 !== e.getAttributeNode && e.getAttributeNode("id");
                    return n && n.value === t
                }
            }, w.find.ID = function(e, t) {
                if (void 0 !== t.getElementById && H) {
                    var n, r, i, o = t.getElementById(e);
                    if (o) {
                        if ((n = o.getAttributeNode("id")) && n.value === e) return [o];
                        for (i = t.getElementsByName(e), r = 0; o = i[r++];)
                            if ((n = o.getAttributeNode("id")) && n.value === e) return [o]
                    }
                    return []
                }
            }), w.find.TAG = b.getElementsByTagName ? function(e, t) {
                return void 0 !== t.getElementsByTagName ? t.getElementsByTagName(e) : b.qsa ? t.querySelectorAll(e) : void 0
            } : function(e, t) {
                var n, r = [],
                    i = 0,
                    o = t.getElementsByTagName(e);
                if ("*" === e) {
                    for (; n = o[i++];) 1 === n.nodeType && r.push(n);
                    return r
                }
                return o
            }, w.find.CLASS = b.getElementsByClassName && function(e, t) {
                if (void 0 !== t.getElementsByClassName && H) return t.getElementsByClassName(e)
            }, O = [], F = [], (b.qsa = he.test(q.querySelectorAll)) && (i(function(e) {
                L.appendChild(e).innerHTML = "<a id='" + M + "'></a><select id='" + M + "-\r\\' msallowcapture=''><option selected=''></option></select>", e.querySelectorAll("[msallowcapture^='']").length && F.push("[*^$]=" + ee + "*(?:''|\"\")"), e.querySelectorAll("[selected]").length || F.push("\\[" + ee + "*(?:value|" + Z + ")"), e.querySelectorAll("[id~=" + M + "-]").length || F.push("~="), e.querySelectorAll(":checked").length || F.push(":checked"), e.querySelectorAll("a#" + M + "+*").length || F.push(".#.+[+~]")
            }), i(function(e) {
                e.innerHTML = "<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";
                var t = q.createElement("input");
                t.setAttribute("type", "hidden"), e.appendChild(t).setAttribute("name", "D"), e.querySelectorAll("[name=d]").length && F.push("name" + ee + "*[*^$|!~]?="), 2 !== e.querySelectorAll(":enabled").length && F.push(":enabled", ":disabled"), L.appendChild(e).disabled = !0, 2 !== e.querySelectorAll(":disabled").length && F.push(":enabled", ":disabled"), e.querySelectorAll("*,:x"), F.push(",.*:")
            })), (b.matchesSelector = he.test(P = L.matches || L.webkitMatchesSelector || L.mozMatchesSelector || L.oMatchesSelector || L.msMatchesSelector)) && i(function(e) {
                b.disconnectedMatch = P.call(e, "*"), P.call(e, "[s!='']:x"), O.push("!=", re)
            }), F = F.length && new RegExp(F.join("|")), O = O.length && new RegExp(O.join("|")), t = he.test(L.compareDocumentPosition), R = t || he.test(L.contains) ? function(e, t) {
                var n = 9 === e.nodeType ? e.documentElement : e,
                    r = t && t.parentNode;
                return e === r || !(!r || 1 !== r.nodeType || !(n.contains ? n.contains(r) : e.compareDocumentPosition && 16 & e.compareDocumentPosition(r)))
            } : function(e, t) {
                if (t)
                    for (; t = t.parentNode;)
                        if (t === e) return !0;
                return !1
            }, X = t ? function(e, t) {
                if (e === t) return j = !0, 0;
                var n = !e.compareDocumentPosition - !t.compareDocumentPosition;
                return n || (1 & (n = (e.ownerDocument || e) === (t.ownerDocument || t) ? e.compareDocumentPosition(t) : 1) || !b.sortDetached && t.compareDocumentPosition(e) === n ? e === q || e.ownerDocument === I && R(I, e) ? -1 : t === q || t.ownerDocument === I && R(I, t) ? 1 : D ? K(D, e) - K(D, t) : 0 : 4 & n ? -1 : 1)
            } : function(e, t) {
                if (e === t) return j = !0, 0;
                var n, r = 0,
                    i = e.parentNode,
                    o = t.parentNode,
                    s = [e],
                    u = [t];
                if (!i || !o) return e === q ? -1 : t === q ? 1 : i ? -1 : o ? 1 : D ? K(D, e) - K(D, t) : 0;
                if (i === o) return a(e, t);
                for (n = e; n = n.parentNode;) s.unshift(n);
                for (n = t; n = n.parentNode;) u.unshift(n);
                for (; s[r] === u[r];) r++;
                return r ? a(s[r], u[r]) : s[r] === I ? -1 : u[r] === I ? 1 : 0
            }, q) : q
        }, t.matches = function(e, n) {
            return t(e, null, null, n)
        }, t.matchesSelector = function(e, n) {
            if ((e.ownerDocument || e) !== q && A(e), n = n.replace(ue, "='$1']"), b.matchesSelector && H && !z[n + " "] && (!O || !O.test(n)) && (!F || !F.test(n))) try {
                var r = P.call(e, n);
                if (r || b.disconnectedMatch || e.document && 11 !== e.document.nodeType) return r
            } catch (e) {}
            return t(n, q, null, [e]).length > 0
        }, t.contains = function(e, t) {
            return (e.ownerDocument || e) !== q && A(e), R(e, t)
        }, t.attr = function(e, t) {
            (e.ownerDocument || e) !== q && A(e);
            var n = w.attrHandle[t.toLowerCase()],
                r = n && U.call(w.attrHandle, t.toLowerCase()) ? n(e, t, !H) : void 0;
            return void 0 !== r ? r : b.attributes || !H ? e.getAttribute(t) : (r = e.getAttributeNode(t)) && r.specified ? r.value : null
        }, t.escape = function(e) {
            return (e + "").replace(xe, be)
        }, t.error = function(e) {
            throw new Error("Syntax error, unrecognized expression: " + e)
        }, t.uniqueSort = function(e) {
            var t, n = [],
                r = 0,
                i = 0;
            if (j = !b.detectDuplicates, D = !b.sortStable && e.slice(0), e.sort(X), j) {
                for (; t = e[i++];) t === e[i] && (r = n.push(i));
                for (; r--;) e.splice(n[r], 1)
            }
            return D = null, e
        }, T = t.getText = function(e) {
            var t, n = "",
                r = 0,
                i = e.nodeType;
            if (i) {
                if (1 === i || 9 === i || 11 === i) {
                    if ("string" == typeof e.textContent) return e.textContent;
                    for (e = e.firstChild; e; e = e.nextSibling) n += T(e)
                } else if (3 === i || 4 === i) return e.nodeValue
            } else
                for (; t = e[r++];) n += T(t);
            return n
        }, (w = t.selectors = {
            cacheLength: 50,
            createPseudo: r,
            match: fe,
            attrHandle: {},
            find: {},
            relative: {
                ">": {
                    dir: "parentNode",
                    first: !0
                },
                " ": {
                    dir: "parentNode"
                },
                "+": {
                    dir: "previousSibling",
                    first: !0
                },
                "~": {
                    dir: "previousSibling"
                }
            },
            preFilter: {
                ATTR: function(e) {
                    return e[1] = e[1].replace(me, ye), e[3] = (e[3] || e[4] || e[5] || "").replace(me, ye), "~=" === e[2] && (e[3] = " " + e[3] + " "), e.slice(0, 4)
                },
                CHILD: function(e) {
                    return e[1] = e[1].toLowerCase(), "nth" === e[1].slice(0, 3) ? (e[3] || t.error(e[0]), e[4] = +(e[4] ? e[5] + (e[6] || 1) : 2 * ("even" === e[3] || "odd" === e[3])), e[5] = +(e[7] + e[8] || "odd" === e[3])) : e[3] && t.error(e[0]), e
                },
                PSEUDO: function(e) {
                    var t, n = !e[6] && e[2];
                    return fe.CHILD.test(e[0]) ? null : (e[3] ? e[2] = e[4] || e[5] || "" : n && le.test(n) && (t = E(n, !0)) && (t = n.indexOf(")", n.length - t) - n.length) && (e[0] = e[0].slice(0, t), e[2] = n.slice(0, t)), e.slice(0, 3))
                }
            },
            filter: {
                TAG: function(e) {
                    var t = e.replace(me, ye).toLowerCase();
                    return "*" === e ? function() {
                        return !0
                    } : function(e) {
                        return e.nodeName && e.nodeName.toLowerCase() === t
                    }
                },
                CLASS: function(e) {
                    var t = B[e + " "];
                    return t || (t = new RegExp("(^|" + ee + ")" + e + "(" + ee + "|$)")) && B(e, function(e) {
                        return t.test("string" == typeof e.className && e.className || void 0 !== e.getAttribute && e.getAttribute("class") || "")
                    })
                },
                ATTR: function(e, n, r) {
                    return function(i) {
                        var o = t.attr(i, e);
                        return null == o ? "!=" === n : !n || (o += "", "=" === n ? o === r : "!=" === n ? o !== r : "^=" === n ? r && 0 === o.indexOf(r) : "*=" === n ? r && o.indexOf(r) > -1 : "$=" === n ? r && o.slice(-r.length) === r : "~=" === n ? (" " + o.replace(ie, " ") + " ").indexOf(r) > -1 : "|=" === n && (o === r || o.slice(0, r.length + 1) === r + "-"))
                    }
                },
                CHILD: function(e, t, n, r, i) {
                    var o = "nth" !== e.slice(0, 3),
                        a = "last" !== e.slice(-4),
                        s = "of-type" === t;
                    return 1 === r && 0 === i ? function(e) {
                        return !!e.parentNode
                    } : function(t, n, u) {
                        var l, c, f, p, d, h, g = o !== a ? "nextSibling" : "previousSibling",
                            v = t.parentNode,
                            m = s && t.nodeName.toLowerCase(),
                            y = !u && !s,
                            x = !1;
                        if (v) {
                            if (o) {
                                for (; g;) {
                                    for (p = t; p = p[g];)
                                        if (s ? p.nodeName.toLowerCase() === m : 1 === p.nodeType) return !1;
                                    h = g = "only" === e && !h && "nextSibling"
                                }
                                return !0
                            }
                            if (h = [a ? v.firstChild : v.lastChild], a && y) {
                                for (x = (d = (l = (c = (f = (p = v)[M] || (p[M] = {}))[p.uniqueID] || (f[p.uniqueID] = {}))[e] || [])[0] === W && l[1]) && l[2], p = d && v.childNodes[d]; p = ++d && p && p[g] || (x = d = 0) || h.pop();)
                                    if (1 === p.nodeType && ++x && p === t) {
                                        c[e] = [W, d, x];
                                        break
                                    }
                            } else if (y && (x = d = (l = (c = (f = (p = t)[M] || (p[M] = {}))[p.uniqueID] || (f[p.uniqueID] = {}))[e] || [])[0] === W && l[1]), !1 === x)
                                for (;
                                    (p = ++d && p && p[g] || (x = d = 0) || h.pop()) && ((s ? p.nodeName.toLowerCase() !== m : 1 !== p.nodeType) || !++x || (y && ((c = (f = p[M] || (p[M] = {}))[p.uniqueID] || (f[p.uniqueID] = {}))[e] = [W, x]), p !== t)););
                            return (x -= i) === r || x % r == 0 && x / r >= 0
                        }
                    }
                },
                PSEUDO: function(e, n) {
                    var i, o = w.pseudos[e] || w.setFilters[e.toLowerCase()] || t.error("unsupported pseudo: " + e);
                    return o[M] ? o(n) : o.length > 1 ? (i = [e, e, "", n], w.setFilters.hasOwnProperty(e.toLowerCase()) ? r(function(e, t) {
                        for (var r, i = o(e, n), a = i.length; a--;) e[r = K(e, i[a])] = !(t[r] = i[a])
                    }) : function(e) {
                        return o(e, 0, i)
                    }) : o
                }
            },
            pseudos: {
                not: r(function(e) {
                    var t = [],
                        n = [],
                        i = k(e.replace(oe, "$1"));
                    return i[M] ? r(function(e, t, n, r) {
                        for (var o, a = i(e, null, r, []), s = e.length; s--;)(o = a[s]) && (e[s] = !(t[s] = o))
                    }) : function(e, r, o) {
                        return t[0] = e, i(t, null, o, n), t[0] = null, !n.pop()
                    }
                }),
                has: r(function(e) {
                    return function(n) {
                        return t(e, n).length > 0
                    }
                }),
                contains: r(function(e) {
                    return e = e.replace(me, ye),
                        function(t) {
                            return (t.textContent || t.innerText || T(t)).indexOf(e) > -1
                        }
                }),
                lang: r(function(e) {
                    return ce.test(e || "") || t.error("unsupported lang: " + e), e = e.replace(me, ye).toLowerCase(),
                        function(t) {
                            var n;
                            do {
                                if (n = H ? t.lang : t.getAttribute("xml:lang") || t.getAttribute("lang")) return (n = n.toLowerCase()) === e || 0 === n.indexOf(e + "-")
                            } while ((t = t.parentNode) && 1 === t.nodeType);
                            return !1
                        }
                }),
                target: function(t) {
                    var n = e.location && e.location.hash;
                    return n && n.slice(1) === t.id
                },
                root: function(e) {
                    return e === L
                },
                focus: function(e) {
                    return e === q.activeElement && (!q.hasFocus || q.hasFocus()) && !!(e.type || e.href || ~e.tabIndex)
                },
                enabled: s(!1),
                disabled: s(!0),
                checked: function(e) {
                    var t = e.nodeName.toLowerCase();
                    return "input" === t && !!e.checked || "option" === t && !!e.selected
                },
                selected: function(e) {
                    return e.parentNode && e.parentNode.selectedIndex, !0 === e.selected
                },
                empty: function(e) {
                    for (e = e.firstChild; e; e = e.nextSibling)
                        if (e.nodeType < 6) return !1;
                    return !0
                },
                parent: function(e) {
                    return !w.pseudos.empty(e)
                },
                header: function(e) {
                    return de.test(e.nodeName)
                },
                input: function(e) {
                    return pe.test(e.nodeName)
                },
                button: function(e) {
                    var t = e.nodeName.toLowerCase();
                    return "input" === t && "button" === e.type || "button" === t
                },
                text: function(e) {
                    var t;
                    return "input" === e.nodeName.toLowerCase() && "text" === e.type && (null == (t = e.getAttribute("type")) || "text" === t.toLowerCase())
                },
                first: u(function() {
                    return [0]
                }),
                last: u(function(e, t) {
                    return [t - 1]
                }),
                eq: u(function(e, t, n) {
                    return [n < 0 ? n + t : n]
                }),
                even: u(function(e, t) {
                    for (var n = 0; n < t; n += 2) e.push(n);
                    return e
                }),
                odd: u(function(e, t) {
                    for (var n = 1; n < t; n += 2) e.push(n);
                    return e
                }),
                lt: u(function(e, t, n) {
                    for (var r = n < 0 ? n + t : n; --r >= 0;) e.push(r);
                    return e
                }),
                gt: u(function(e, t, n) {
                    for (var r = n < 0 ? n + t : n; ++r < t;) e.push(r);
                    return e
                })
            }
        }).pseudos.nth = w.pseudos.eq;
        for (x in {
            radio: !0,
            checkbox: !0,
            file: !0,
            password: !0,
            image: !0
        }) w.pseudos[x] = function(e) {
            return function(t) {
                return "input" === t.nodeName.toLowerCase() && t.type === e
            }
        }(x);
        for (x in {
            submit: !0,
            reset: !0
        }) w.pseudos[x] = function(e) {
            return function(t) {
                var n = t.nodeName.toLowerCase();
                return ("input" === n || "button" === n) && t.type === e
            }
        }(x);
        return c.prototype = w.filters = w.pseudos, w.setFilters = new c, E = t.tokenize = function(e, n) {
            var r, i, o, a, s, u, l, c = _[e + " "];
            if (c) return n ? 0 : c.slice(0);
            for (s = e, u = [], l = w.preFilter; s;) {
                r && !(i = ae.exec(s)) || (i && (s = s.slice(i[0].length) || s), u.push(o = [])), r = !1, (i = se.exec(s)) && (r = i.shift(), o.push({
                    value: r,
                    type: i[0].replace(oe, " ")
                }), s = s.slice(r.length));
                for (a in w.filter) !(i = fe[a].exec(s)) || l[a] && !(i = l[a](i)) || (r = i.shift(), o.push({
                    value: r,
                    type: a,
                    matches: i
                }), s = s.slice(r.length));
                if (!r) break
            }
            return n ? s.length : s ? t.error(e) : _(e, u).slice(0)
        }, k = t.compile = function(e, t) {
            var n, r = [],
                i = [],
                o = z[e + " "];
            if (!o) {
                for (t || (t = E(e)), n = t.length; n--;)(o = m(t[n]))[M] ? r.push(o) : i.push(o);
                (o = z(e, y(i, r))).selector = e
            }
            return o
        }, S = t.select = function(e, t, n, r) {
            var i, o, a, s, u, c = "function" == typeof e && e,
                p = !r && E(e = c.selector || e);
            if (n = n || [], 1 === p.length) {
                if ((o = p[0] = p[0].slice(0)).length > 2 && "ID" === (a = o[0]).type && 9 === t.nodeType && H && w.relative[o[1].type]) {
                    if (!(t = (w.find.ID(a.matches[0].replace(me, ye), t) || [])[0])) return n;
                    c && (t = t.parentNode), e = e.slice(o.shift().value.length)
                }
                for (i = fe.needsContext.test(e) ? 0 : o.length; i-- && (a = o[i], !w.relative[s = a.type]);)
                    if ((u = w.find[s]) && (r = u(a.matches[0].replace(me, ye), ve.test(o[0].type) && l(t.parentNode) || t))) {
                        if (o.splice(i, 1), !(e = r.length && f(o))) return Q.apply(n, r), n;
                        break
                    }
            }
            return (c || k(e, p))(r, t, !H, n, !t || ve.test(e) && l(t.parentNode) || t), n
        }, b.sortStable = M.split("").sort(X).join("") === M, b.detectDuplicates = !!j, A(), b.sortDetached = i(function(e) {
            return 1 & e.compareDocumentPosition(q.createElement("fieldset"))
        }), i(function(e) {
            return e.innerHTML = "<a href='#'></a>", "#" === e.firstChild.getAttribute("href")
        }) || o("type|href|height|width", function(e, t, n) {
            if (!n) return e.getAttribute(t, "type" === t.toLowerCase() ? 1 : 2)
        }), b.attributes && i(function(e) {
            return e.innerHTML = "<input/>", e.firstChild.setAttribute("value", ""), "" === e.firstChild.getAttribute("value")
        }) || o("value", function(e, t, n) {
            if (!n && "input" === e.nodeName.toLowerCase()) return e.defaultValue
        }), i(function(e) {
            return null == e.getAttribute("disabled")
        }) || o(Z, function(e, t, n) {
            var r;
            if (!n) return !0 === e[t] ? t.toLowerCase() : (r = e.getAttributeNode(t)) && r.specified ? r.value : null
        }), t
    }(e);
    de.find = ye, de.expr = ye.selectors, de.expr[":"] = de.expr.pseudos, de.uniqueSort = de.unique = ye.uniqueSort, de.text = ye.getText, de.isXMLDoc = ye.isXML, de.contains = ye.contains, de.escapeSelector = ye.escape;
    var xe = function(e, t, n) {
            for (var r = [], i = void 0 !== n;
                 (e = e[t]) && 9 !== e.nodeType;)
                if (1 === e.nodeType) {
                    if (i && de(e).is(n)) break;
                    r.push(e)
                }
            return r
        },
        be = function(e, t) {
            for (var n = []; e; e = e.nextSibling) 1 === e.nodeType && e !== t && n.push(e);
            return n
        },
        we = de.expr.match.needsContext,
        Te = /^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i,
        Ce = /^.[^:#\[\.,]*$/;
    de.filter = function(e, t, n) {
        var r = t[0];
        return n && (e = ":not(" + e + ")"), 1 === t.length && 1 === r.nodeType ? de.find.matchesSelector(r, e) ? [r] : [] : de.find.matches(e, de.grep(t, function(e) {
            return 1 === e.nodeType
        }))
    }, de.fn.extend({
        find: function(e) {
            var t, n, r = this.length,
                i = this;
            if ("string" != typeof e) return this.pushStack(de(e).filter(function() {
                for (t = 0; t < r; t++)
                    if (de.contains(i[t], this)) return !0
            }));
            for (n = this.pushStack([]), t = 0; t < r; t++) de.find(e, i[t], n);
            return r > 1 ? de.uniqueSort(n) : n
        },
        filter: function(e) {
            return this.pushStack(o(this, e || [], !1))
        },
        not: function(e) {
            return this.pushStack(o(this, e || [], !0))
        },
        is: function(e) {
            return !!o(this, "string" == typeof e && we.test(e) ? de(e) : e || [], !1).length
        }
    });
    var Ee, ke = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/;
    (de.fn.init = function(e, t, n) {
        var r, i;
        if (!e) return this;
        if (n = n || Ee, "string" == typeof e) {
            if (!(r = "<" === e[0] && ">" === e[e.length - 1] && e.length >= 3 ? [null, e, null] : ke.exec(e)) || !r[1] && t) return !t || t.jquery ? (t || n).find(e) : this.constructor(t).find(e);
            if (r[1]) {
                if (t = t instanceof de ? t[0] : t, de.merge(this, de.parseHTML(r[1], t && t.nodeType ? t.ownerDocument || t : te, !0)), Te.test(r[1]) && de.isPlainObject(t))
                    for (r in t) de.isFunction(this[r]) ? this[r](t[r]) : this.attr(r, t[r]);
                return this
            }
            return (i = te.getElementById(r[2])) && (this[0] = i, this.length = 1), this
        }
        return e.nodeType ? (this[0] = e, this.length = 1, this) : de.isFunction(e) ? void 0 !== n.ready ? n.ready(e) : e(de) : de.makeArray(e, this)
    }).prototype = de.fn, Ee = de(te);
    var Se = /^(?:parents|prev(?:Until|All))/,
        Ne = {
            children: !0,
            contents: !0,
            next: !0,
            prev: !0
        };
    de.fn.extend({
        has: function(e) {
            var t = de(e, this),
                n = t.length;
            return this.filter(function() {
                for (var e = 0; e < n; e++)
                    if (de.contains(this, t[e])) return !0
            })
        },
        closest: function(e, t) {
            var n, r = 0,
                i = this.length,
                o = [],
                a = "string" != typeof e && de(e);
            if (!we.test(e))
                for (; r < i; r++)
                    for (n = this[r]; n && n !== t; n = n.parentNode)
                        if (n.nodeType < 11 && (a ? a.index(n) > -1 : 1 === n.nodeType && de.find.matchesSelector(n, e))) {
                            o.push(n);
                            break
                        }
            return this.pushStack(o.length > 1 ? de.uniqueSort(o) : o)
        },
        index: function(e) {
            return e ? "string" == typeof e ? ae.call(de(e), this[0]) : ae.call(this, e.jquery ? e[0] : e) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1
        },
        add: function(e, t) {
            return this.pushStack(de.uniqueSort(de.merge(this.get(), de(e, t))))
        },
        addBack: function(e) {
            return this.add(null == e ? this.prevObject : this.prevObject.filter(e))
        }
    }), de.each({
        parent: function(e) {
            var t = e.parentNode;
            return t && 11 !== t.nodeType ? t : null
        },
        parents: function(e) {
            return xe(e, "parentNode")
        },
        parentsUntil: function(e, t, n) {
            return xe(e, "parentNode", n)
        },
        next: function(e) {
            return a(e, "nextSibling")
        },
        prev: function(e) {
            return a(e, "previousSibling")
        },
        nextAll: function(e) {
            return xe(e, "nextSibling")
        },
        prevAll: function(e) {
            return xe(e, "previousSibling")
        },
        nextUntil: function(e, t, n) {
            return xe(e, "nextSibling", n)
        },
        prevUntil: function(e, t, n) {
            return xe(e, "previousSibling", n)
        },
        siblings: function(e) {
            return be((e.parentNode || {}).firstChild, e)
        },
        children: function(e) {
            return be(e.firstChild)
        },
        contents: function(e) {
            return i(e, "iframe") ? e.contentDocument : (i(e, "template") && (e = e.content || e), de.merge([], e.childNodes))
        }
    }, function(e, t) {
        de.fn[e] = function(n, r) {
            var i = de.map(this, t, n);
            return "Until" !== e.slice(-5) && (r = n), r && "string" == typeof r && (i = de.filter(r, i)), this.length > 1 && (Ne[e] || de.uniqueSort(i), Se.test(e) && i.reverse()), this.pushStack(i)
        }
    });
    var De = /[^\x20\t\r\n\f]+/g;
    de.Callbacks = function(e) {
        e = "string" == typeof e ? s(e) : de.extend({}, e);
        var t, n, r, i, o = [],
            a = [],
            u = -1,
            l = function() {
                for (i = i || e.once, r = t = !0; a.length; u = -1)
                    for (n = a.shift(); ++u < o.length;) !1 === o[u].apply(n[0], n[1]) && e.stopOnFalse && (u = o.length, n = !1);
                e.memory || (n = !1), t = !1, i && (o = n ? [] : "")
            },
            c = {
                add: function() {
                    return o && (n && !t && (u = o.length - 1, a.push(n)), function t(n) {
                        de.each(n, function(n, r) {
                            de.isFunction(r) ? e.unique && c.has(r) || o.push(r) : r && r.length && "string" !== de.type(r) && t(r)
                        })
                    }(arguments), n && !t && l()), this
                },
                remove: function() {
                    return de.each(arguments, function(e, t) {
                        for (var n;
                             (n = de.inArray(t, o, n)) > -1;) o.splice(n, 1), n <= u && u--
                    }), this
                },
                has: function(e) {
                    return e ? de.inArray(e, o) > -1 : o.length > 0
                },
                empty: function() {
                    return o && (o = []), this
                },
                disable: function() {
                    return i = a = [], o = n = "", this
                },
                disabled: function() {
                    return !o
                },
                lock: function() {
                    return i = a = [], n || t || (o = n = ""), this
                },
                locked: function() {
                    return !!i
                },
                fireWith: function(e, n) {
                    return i || (n = [e, (n = n || []).slice ? n.slice() : n], a.push(n), t || l()), this
                },
                fire: function() {
                    return c.fireWith(this, arguments), this
                },
                fired: function() {
                    return !!r
                }
            };
        return c
    }, de.extend({
        Deferred: function(t) {
            var n = [
                    ["notify", "progress", de.Callbacks("memory"), de.Callbacks("memory"), 2],
                    ["resolve", "done", de.Callbacks("once memory"), de.Callbacks("once memory"), 0, "resolved"],
                    ["reject", "fail", de.Callbacks("once memory"), de.Callbacks("once memory"), 1, "rejected"]
                ],
                r = "pending",
                i = {
                    state: function() {
                        return r
                    },
                    always: function() {
                        return o.done(arguments).fail(arguments), this
                    },
                    catch: function(e) {
                        return i.then(null, e)
                    },
                    pipe: function() {
                        var e = arguments;
                        return de.Deferred(function(t) {
                            de.each(n, function(n, r) {
                                var i = de.isFunction(e[r[4]]) && e[r[4]];
                                o[r[1]](function() {
                                    var e = i && i.apply(this, arguments);
                                    e && de.isFunction(e.promise) ? e.promise().progress(t.notify).done(t.resolve).fail(t.reject) : t[r[0] + "With"](this, i ? [e] : arguments)
                                })
                            }), e = null
                        }).promise()
                    },
                    then: function(t, r, i) {
                        function o(t, n, r, i) {
                            return function() {
                                var s = this,
                                    c = arguments,
                                    f = function() {
                                        var e, f;
                                        if (!(t < a)) {
                                            if ((e = r.apply(s, c)) === n.promise()) throw new TypeError("Thenable self-resolution");
                                            f = e && ("object" == typeof e || "function" == typeof e) && e.then, de.isFunction(f) ? i ? f.call(e, o(a, n, u, i), o(a, n, l, i)) : (a++, f.call(e, o(a, n, u, i), o(a, n, l, i), o(a, n, u, n.notifyWith))) : (r !== u && (s = void 0, c = [e]), (i || n.resolveWith)(s, c))
                                        }
                                    },
                                    p = i ? f : function() {
                                        try {
                                            f()
                                        } catch (e) {
                                            de.Deferred.exceptionHook && de.Deferred.exceptionHook(e, p.stackTrace), t + 1 >= a && (r !== l && (s = void 0, c = [e]), n.rejectWith(s, c))
                                        }
                                    };
                                t ? p() : (de.Deferred.getStackHook && (p.stackTrace = de.Deferred.getStackHook()), e.setTimeout(p))
                            }
                        }
                        var a = 0;
                        return de.Deferred(function(e) {
                            n[0][3].add(o(0, e, de.isFunction(i) ? i : u, e.notifyWith)), n[1][3].add(o(0, e, de.isFunction(t) ? t : u)), n[2][3].add(o(0, e, de.isFunction(r) ? r : l))
                        }).promise()
                    },
                    promise: function(e) {
                        return null != e ? de.extend(e, i) : i
                    }
                },
                o = {};
            return de.each(n, function(e, t) {
                var a = t[2],
                    s = t[5];
                i[t[1]] = a.add, s && a.add(function() {
                    r = s
                }, n[3 - e][2].disable, n[0][2].lock), a.add(t[3].fire), o[t[0]] = function() {
                    return o[t[0] + "With"](this === o ? void 0 : this, arguments), this
                }, o[t[0] + "With"] = a.fireWith
            }), i.promise(o), t && t.call(o, o), o
        },
        when: function(e) {
            var t = arguments.length,
                n = t,
                r = Array(n),
                i = re.call(arguments),
                o = de.Deferred(),
                a = function(e) {
                    return function(n) {
                        r[e] = this, i[e] = arguments.length > 1 ? re.call(arguments) : n, --t || o.resolveWith(r, i)
                    }
                };
            if (t <= 1 && (c(e, o.done(a(n)).resolve, o.reject, !t), "pending" === o.state() || de.isFunction(i[n] && i[n].then))) return o.then();
            for (; n--;) c(i[n], a(n), o.reject);
            return o.promise()
        }
    });
    var je = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;
    de.Deferred.exceptionHook = function(t, n) {
        e.console && e.console.warn && t && je.test(t.name) && e.console.warn("jQuery.Deferred exception: " + t.message, t.stack, n)
    }, de.readyException = function(t) {
        e.setTimeout(function() {
            throw t
        })
    };
    var Ae = de.Deferred();
    de.fn.ready = function(e) {
        return Ae.then(e).catch(function(e) {
            de.readyException(e)
        }), this
    }, de.extend({
        isReady: !1,
        readyWait: 1,
        ready: function(e) {
            (!0 === e ? --de.readyWait : de.isReady) || (de.isReady = !0, !0 !== e && --de.readyWait > 0 || Ae.resolveWith(te, [de]))
        }
    }), de.ready.then = Ae.then, "complete" === te.readyState || "loading" !== te.readyState && !te.documentElement.doScroll ? e.setTimeout(de.ready) : (te.addEventListener("DOMContentLoaded", f), e.addEventListener("load", f));
    var qe = function(e, t, n, r, i, o, a) {
            var s = 0,
                u = e.length,
                l = null == n;
            if ("object" === de.type(n)) {
                i = !0;
                for (s in n) qe(e, t, s, n[s], !0, o, a)
            } else if (void 0 !== r && (i = !0, de.isFunction(r) || (a = !0), l && (a ? (t.call(e, r), t = null) : (l = t, t = function(e, t, n) {
                return l.call(de(e), n)
            })), t))
                for (; s < u; s++) t(e[s], n, a ? r : r.call(e[s], s, t(e[s], n)));
            return i ? e : l ? t.call(e) : u ? t(e[0], n) : o
        },
        Le = function(e) {
            return 1 === e.nodeType || 9 === e.nodeType || !+e.nodeType
        };
    p.uid = 1, p.prototype = {
        cache: function(e) {
            var t = e[this.expando];
            return t || (t = {}, Le(e) && (e.nodeType ? e[this.expando] = t : Object.defineProperty(e, this.expando, {
                value: t,
                configurable: !0
            }))), t
        },
        set: function(e, t, n) {
            var r, i = this.cache(e);
            if ("string" == typeof t) i[de.camelCase(t)] = n;
            else
                for (r in t) i[de.camelCase(r)] = t[r];
            return i
        },
        get: function(e, t) {
            return void 0 === t ? this.cache(e) : e[this.expando] && e[this.expando][de.camelCase(t)]
        },
        access: function(e, t, n) {
            return void 0 === t || t && "string" == typeof t && void 0 === n ? this.get(e, t) : (this.set(e, t, n), void 0 !== n ? n : t)
        },
        remove: function(e, t) {
            var n, r = e[this.expando];
            if (void 0 !== r) {
                if (void 0 !== t) {
                    n = (t = Array.isArray(t) ? t.map(de.camelCase) : (t = de.camelCase(t)) in r ? [t] : t.match(De) || []).length;
                    for (; n--;) delete r[t[n]]
                }(void 0 === t || de.isEmptyObject(r)) && (e.nodeType ? e[this.expando] = void 0 : delete e[this.expando])
            }
        },
        hasData: function(e) {
            var t = e[this.expando];
            return void 0 !== t && !de.isEmptyObject(t)
        }
    };
    var He = new p,
        Fe = new p,
        Oe = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
        Pe = /[A-Z]/g;
    de.extend({
        hasData: function(e) {
            return Fe.hasData(e) || He.hasData(e)
        },
        data: function(e, t, n) {
            return Fe.access(e, t, n)
        },
        removeData: function(e, t) {
            Fe.remove(e, t)
        },
        _data: function(e, t, n) {
            return He.access(e, t, n)
        },
        _removeData: function(e, t) {
            He.remove(e, t)
        }
    }), de.fn.extend({
        data: function(e, t) {
            var n, r, i, o = this[0],
                a = o && o.attributes;
            if (void 0 === e) {
                if (this.length && (i = Fe.get(o), 1 === o.nodeType && !He.get(o, "hasDataAttrs"))) {
                    for (n = a.length; n--;) a[n] && 0 === (r = a[n].name).indexOf("data-") && (r = de.camelCase(r.slice(5)), h(o, r, i[r]));
                    He.set(o, "hasDataAttrs", !0)
                }
                return i
            }
            return "object" == typeof e ? this.each(function() {
                Fe.set(this, e)
            }) : qe(this, function(t) {
                var n;
                if (o && void 0 === t) {
                    if (void 0 !== (n = Fe.get(o, e))) return n;
                    if (void 0 !== (n = h(o, e))) return n
                } else this.each(function() {
                    Fe.set(this, e, t)
                })
            }, null, t, arguments.length > 1, null, !0)
        },
        removeData: function(e) {
            return this.each(function() {
                Fe.remove(this, e)
            })
        }
    }), de.extend({
        queue: function(e, t, n) {
            var r;
            if (e) return t = (t || "fx") + "queue", r = He.get(e, t), n && (!r || Array.isArray(n) ? r = He.access(e, t, de.makeArray(n)) : r.push(n)), r || []
        },
        dequeue: function(e, t) {
            t = t || "fx";
            var n = de.queue(e, t),
                r = n.length,
                i = n.shift(),
                o = de._queueHooks(e, t);
            "inprogress" === i && (i = n.shift(), r--), i && ("fx" === t && n.unshift("inprogress"), delete o.stop, i.call(e, function() {
                de.dequeue(e, t)
            }, o)), !r && o && o.empty.fire()
        },
        _queueHooks: function(e, t) {
            var n = t + "queueHooks";
            return He.get(e, n) || He.access(e, n, {
                empty: de.Callbacks("once memory").add(function() {
                    He.remove(e, [t + "queue", n])
                })
            })
        }
    }), de.fn.extend({
        queue: function(e, t) {
            var n = 2;
            return "string" != typeof e && (t = e, e = "fx", n--), arguments.length < n ? de.queue(this[0], e) : void 0 === t ? this : this.each(function() {
                var n = de.queue(this, e, t);
                de._queueHooks(this, e), "fx" === e && "inprogress" !== n[0] && de.dequeue(this, e)
            })
        },
        dequeue: function(e) {
            return this.each(function() {
                de.dequeue(this, e)
            })
        },
        clearQueue: function(e) {
            return this.queue(e || "fx", [])
        },
        promise: function(e, t) {
            var n, r = 1,
                i = de.Deferred(),
                o = this,
                a = this.length,
                s = function() {
                    --r || i.resolveWith(o, [o])
                };
            for ("string" != typeof e && (t = e, e = void 0), e = e || "fx"; a--;)(n = He.get(o[a], e + "queueHooks")) && n.empty && (r++, n.empty.add(s));
            return s(), i.promise(t)
        }
    });
    var Re = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
        Me = new RegExp("^(?:([+-])=|)(" + Re + ")([a-z%]*)$", "i"),
        Ie = ["Top", "Right", "Bottom", "Left"],
        We = function(e, t) {
            return "none" === (e = t || e).style.display || "" === e.style.display && de.contains(e.ownerDocument, e) && "none" === de.css(e, "display")
        },
        $e = function(e, t, n, r) {
            var i, o, a = {};
            for (o in t) a[o] = e.style[o], e.style[o] = t[o];
            i = n.apply(e, r || []);
            for (o in t) e.style[o] = a[o];
            return i
        },
        Be = {};
    de.fn.extend({
        show: function() {
            return m(this, !0)
        },
        hide: function() {
            return m(this)
        },
        toggle: function(e) {
            return "boolean" == typeof e ? e ? this.show() : this.hide() : this.each(function() {
                We(this) ? de(this).show() : de(this).hide()
            })
        }
    });
    var _e = /^(?:checkbox|radio)$/i,
        ze = /<([a-z][^\/\0>\x20\t\r\n\f]+)/i,
        Xe = /^$|\/(?:java|ecma)script/i,
        Ue = {
            option: [1, "<select multiple='multiple'>", "</select>"],
            thead: [1, "<table>", "</table>"],
            col: [2, "<table><colgroup>", "</colgroup></table>"],
            tr: [2, "<table><tbody>", "</tbody></table>"],
            td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
            _default: [0, "", ""]
        };
    Ue.optgroup = Ue.option, Ue.tbody = Ue.tfoot = Ue.colgroup = Ue.caption = Ue.thead, Ue.th = Ue.td;
    var Ve = /<|&#?\w+;/;
    ! function() {
        var e = te.createDocumentFragment().appendChild(te.createElement("div")),
            t = te.createElement("input");
        t.setAttribute("type", "radio"), t.setAttribute("checked", "checked"), t.setAttribute("name", "t"), e.appendChild(t), pe.checkClone = e.cloneNode(!0).cloneNode(!0).lastChild.checked, e.innerHTML = "<textarea>x</textarea>", pe.noCloneChecked = !!e.cloneNode(!0).lastChild.defaultValue
    }();
    var Ge = te.documentElement,
        Ye = /^key/,
        Qe = /^(?:mouse|pointer|contextmenu|drag|drop)|click/,
        Je = /^([^.]*)(?:\.(.+)|)/;
    de.event = {
        global: {},
        add: function(e, t, n, r, i) {
            var o, a, s, u, l, c, f, p, d, h, g, v = He.get(e);
            if (v)
                for (n.handler && (n = (o = n).handler, i = o.selector), i && de.find.matchesSelector(Ge, i), n.guid || (n.guid = de.guid++), (u = v.events) || (u = v.events = {}), (a = v.handle) || (a = v.handle = function(t) {
                    return void 0 !== de && de.event.triggered !== t.type ? de.event.dispatch.apply(e, arguments) : void 0
                }), l = (t = (t || "").match(De) || [""]).length; l--;) d = g = (s = Je.exec(t[l]) || [])[1], h = (s[2] || "").split(".").sort(), d && (f = de.event.special[d] || {}, d = (i ? f.delegateType : f.bindType) || d, f = de.event.special[d] || {}, c = de.extend({
                    type: d,
                    origType: g,
                    data: r,
                    handler: n,
                    guid: n.guid,
                    selector: i,
                    needsContext: i && de.expr.match.needsContext.test(i),
                    namespace: h.join(".")
                }, o), (p = u[d]) || ((p = u[d] = []).delegateCount = 0, f.setup && !1 !== f.setup.call(e, r, h, a) || e.addEventListener && e.addEventListener(d, a)), f.add && (f.add.call(e, c), c.handler.guid || (c.handler.guid = n.guid)), i ? p.splice(p.delegateCount++, 0, c) : p.push(c), de.event.global[d] = !0)
        },
        remove: function(e, t, n, r, i) {
            var o, a, s, u, l, c, f, p, d, h, g, v = He.hasData(e) && He.get(e);
            if (v && (u = v.events)) {
                for (l = (t = (t || "").match(De) || [""]).length; l--;)
                    if (s = Je.exec(t[l]) || [], d = g = s[1], h = (s[2] || "").split(".").sort(), d) {
                        for (f = de.event.special[d] || {}, p = u[d = (r ? f.delegateType : f.bindType) || d] || [], s = s[2] && new RegExp("(^|\\.)" + h.join("\\.(?:.*\\.|)") + "(\\.|$)"), a = o = p.length; o--;) c = p[o], !i && g !== c.origType || n && n.guid !== c.guid || s && !s.test(c.namespace) || r && r !== c.selector && ("**" !== r || !c.selector) || (p.splice(o, 1), c.selector && p.delegateCount--, f.remove && f.remove.call(e, c));
                        a && !p.length && (f.teardown && !1 !== f.teardown.call(e, h, v.handle) || de.removeEvent(e, d, v.handle), delete u[d])
                    } else
                        for (d in u) de.event.remove(e, d + t[l], n, r, !0);
                de.isEmptyObject(u) && He.remove(e, "handle events")
            }
        },
        dispatch: function(e) {
            var t, n, r, i, o, a, s = de.event.fix(e),
                u = new Array(arguments.length),
                l = (He.get(this, "events") || {})[s.type] || [],
                c = de.event.special[s.type] || {};
            for (u[0] = s, t = 1; t < arguments.length; t++) u[t] = arguments[t];
            if (s.delegateTarget = this, !c.preDispatch || !1 !== c.preDispatch.call(this, s)) {
                for (a = de.event.handlers.call(this, s, l), t = 0;
                     (i = a[t++]) && !s.isPropagationStopped();)
                    for (s.currentTarget = i.elem, n = 0;
                         (o = i.handlers[n++]) && !s.isImmediatePropagationStopped();) s.rnamespace && !s.rnamespace.test(o.namespace) || (s.handleObj = o, s.data = o.data, void 0 !== (r = ((de.event.special[o.origType] || {}).handle || o.handler).apply(i.elem, u)) && !1 === (s.result = r) && (s.preventDefault(), s.stopPropagation()));
                return c.postDispatch && c.postDispatch.call(this, s), s.result
            }
        },
        handlers: function(e, t) {
            var n, r, i, o, a, s = [],
                u = t.delegateCount,
                l = e.target;
            if (u && l.nodeType && !("click" === e.type && e.button >= 1))
                for (; l !== this; l = l.parentNode || this)
                    if (1 === l.nodeType && ("click" !== e.type || !0 !== l.disabled)) {
                        for (o = [], a = {}, n = 0; n < u; n++) void 0 === a[i = (r = t[n]).selector + " "] && (a[i] = r.needsContext ? de(i, this).index(l) > -1 : de.find(i, this, null, [l]).length), a[i] && o.push(r);
                        o.length && s.push({
                            elem: l,
                            handlers: o
                        })
                    }
            return l = this, u < t.length && s.push({
                elem: l,
                handlers: t.slice(u)
            }), s
        },
        addProp: function(e, t) {
            Object.defineProperty(de.Event.prototype, e, {
                enumerable: !0,
                configurable: !0,
                get: de.isFunction(t) ? function() {
                    if (this.originalEvent) return t(this.originalEvent)
                } : function() {
                    if (this.originalEvent) return this.originalEvent[e]
                },
                set: function(t) {
                    Object.defineProperty(this, e, {
                        enumerable: !0,
                        configurable: !0,
                        writable: !0,
                        value: t
                    })
                }
            })
        },
        fix: function(e) {
            return e[de.expando] ? e : new de.Event(e)
        },
        special: {
            load: {
                noBubble: !0
            },
            focus: {
                trigger: function() {
                    if (this !== C() && this.focus) return this.focus(), !1
                },
                delegateType: "focusin"
            },
            blur: {
                trigger: function() {
                    if (this === C() && this.blur) return this.blur(), !1
                },
                delegateType: "focusout"
            },
            click: {
                trigger: function() {
                    if ("checkbox" === this.type && this.click && i(this, "input")) return this.click(), !1
                },
                _default: function(e) {
                    return i(e.target, "a")
                }
            },
            beforeunload: {
                postDispatch: function(e) {
                    void 0 !== e.result && e.originalEvent && (e.originalEvent.returnValue = e.result)
                }
            }
        }
    }, de.removeEvent = function(e, t, n) {
        e.removeEventListener && e.removeEventListener(t, n)
    }, de.Event = function(e, t) {
        if (!(this instanceof de.Event)) return new de.Event(e, t);
        e && e.type ? (this.originalEvent = e, this.type = e.type, this.isDefaultPrevented = e.defaultPrevented || void 0 === e.defaultPrevented && !1 === e.returnValue ? w : T, this.target = e.target && 3 === e.target.nodeType ? e.target.parentNode : e.target, this.currentTarget = e.currentTarget, this.relatedTarget = e.relatedTarget) : this.type = e, t && de.extend(this, t), this.timeStamp = e && e.timeStamp || de.now(), this[de.expando] = !0
    }, de.Event.prototype = {
        constructor: de.Event,
        isDefaultPrevented: T,
        isPropagationStopped: T,
        isImmediatePropagationStopped: T,
        isSimulated: !1,
        preventDefault: function() {
            var e = this.originalEvent;
            this.isDefaultPrevented = w, e && !this.isSimulated && e.preventDefault()
        },
        stopPropagation: function() {
            var e = this.originalEvent;
            this.isPropagationStopped = w, e && !this.isSimulated && e.stopPropagation()
        },
        stopImmediatePropagation: function() {
            var e = this.originalEvent;
            this.isImmediatePropagationStopped = w, e && !this.isSimulated && e.stopImmediatePropagation(), this.stopPropagation()
        }
    }, de.each({
        altKey: !0,
        bubbles: !0,
        cancelable: !0,
        changedTouches: !0,
        ctrlKey: !0,
        detail: !0,
        eventPhase: !0,
        metaKey: !0,
        pageX: !0,
        pageY: !0,
        shiftKey: !0,
        view: !0,
        char: !0,
        charCode: !0,
        key: !0,
        keyCode: !0,
        button: !0,
        buttons: !0,
        clientX: !0,
        clientY: !0,
        offsetX: !0,
        offsetY: !0,
        pointerId: !0,
        pointerType: !0,
        screenX: !0,
        screenY: !0,
        targetTouches: !0,
        toElement: !0,
        touches: !0,
        which: function(e) {
            var t = e.button;
            return null == e.which && Ye.test(e.type) ? null != e.charCode ? e.charCode : e.keyCode : !e.which && void 0 !== t && Qe.test(e.type) ? 1 & t ? 1 : 2 & t ? 3 : 4 & t ? 2 : 0 : e.which
        }
    }, de.event.addProp), de.each({
        mouseenter: "mouseover",
        mouseleave: "mouseout",
        pointerenter: "pointerover",
        pointerleave: "pointerout"
    }, function(e, t) {
        de.event.special[e] = {
            delegateType: t,
            bindType: t,
            handle: function(e) {
                var n, r = this,
                    i = e.relatedTarget,
                    o = e.handleObj;
                return i && (i === r || de.contains(r, i)) || (e.type = o.origType, n = o.handler.apply(this, arguments), e.type = t), n
            }
        }
    }), de.fn.extend({
        on: function(e, t, n, r) {
            return E(this, e, t, n, r)
        },
        one: function(e, t, n, r) {
            return E(this, e, t, n, r, 1)
        },
        off: function(e, t, n) {
            var r, i;
            if (e && e.preventDefault && e.handleObj) return r = e.handleObj, de(e.delegateTarget).off(r.namespace ? r.origType + "." + r.namespace : r.origType, r.selector, r.handler), this;
            if ("object" == typeof e) {
                for (i in e) this.off(i, t, e[i]);
                return this
            }
            return !1 !== t && "function" != typeof t || (n = t, t = void 0), !1 === n && (n = T), this.each(function() {
                de.event.remove(this, e, n, t)
            })
        }
    });
    var Ke = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([a-z][^\/\0>\x20\t\r\n\f]*)[^>]*)\/>/gi,
        Ze = /<script|<style|<link/i,
        et = /checked\s*(?:[^=]|=\s*.checked.)/i,
        tt = /^true\/(.*)/,
        nt = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;
    de.extend({
        htmlPrefilter: function(e) {
            return e.replace(Ke, "<$1></$2>")
        },
        clone: function(e, t, n) {
            var r, i, o, a, s = e.cloneNode(!0),
                u = de.contains(e.ownerDocument, e);
            if (!(pe.noCloneChecked || 1 !== e.nodeType && 11 !== e.nodeType || de.isXMLDoc(e)))
                for (a = y(s), r = 0, i = (o = y(e)).length; r < i; r++) j(o[r], a[r]);
            if (t)
                if (n)
                    for (o = o || y(e), a = a || y(s), r = 0, i = o.length; r < i; r++) D(o[r], a[r]);
                else D(e, s);
            return (a = y(s, "script")).length > 0 && x(a, !u && y(e, "script")), s
        },
        cleanData: function(e) {
            for (var t, n, r, i = de.event.special, o = 0; void 0 !== (n = e[o]); o++)
                if (Le(n)) {
                    if (t = n[He.expando]) {
                        if (t.events)
                            for (r in t.events) i[r] ? de.event.remove(n, r) : de.removeEvent(n, r, t.handle);
                        n[He.expando] = void 0
                    }
                    n[Fe.expando] && (n[Fe.expando] = void 0)
                }
        }
    }), de.fn.extend({
        detach: function(e) {
            return q(this, e, !0)
        },
        remove: function(e) {
            return q(this, e)
        },
        text: function(e) {
            return qe(this, function(e) {
                return void 0 === e ? de.text(this) : this.empty().each(function() {
                    1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || (this.textContent = e)
                })
            }, null, e, arguments.length)
        },
        append: function() {
            return A(this, arguments, function(e) {
                1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || k(this, e).appendChild(e)
            })
        },
        prepend: function() {
            return A(this, arguments, function(e) {
                if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
                    var t = k(this, e);
                    t.insertBefore(e, t.firstChild)
                }
            })
        },
        before: function() {
            return A(this, arguments, function(e) {
                this.parentNode && this.parentNode.insertBefore(e, this)
            })
        },
        after: function() {
            return A(this, arguments, function(e) {
                this.parentNode && this.parentNode.insertBefore(e, this.nextSibling)
            })
        },
        empty: function() {
            for (var e, t = 0; null != (e = this[t]); t++) 1 === e.nodeType && (de.cleanData(y(e, !1)), e.textContent = "");
            return this
        },
        clone: function(e, t) {
            return e = null != e && e, t = null == t ? e : t, this.map(function() {
                return de.clone(this, e, t)
            })
        },
        html: function(e) {
            return qe(this, function(e) {
                var t = this[0] || {},
                    n = 0,
                    r = this.length;
                if (void 0 === e && 1 === t.nodeType) return t.innerHTML;
                if ("string" == typeof e && !Ze.test(e) && !Ue[(ze.exec(e) || ["", ""])[1].toLowerCase()]) {
                    e = de.htmlPrefilter(e);
                    try {
                        for (; n < r; n++) 1 === (t = this[n] || {}).nodeType && (de.cleanData(y(t, !1)), t.innerHTML = e);
                        t = 0
                    } catch (e) {}
                }
                t && this.empty().append(e)
            }, null, e, arguments.length)
        },
        replaceWith: function() {
            var e = [];
            return A(this, arguments, function(t) {
                var n = this.parentNode;
                de.inArray(this, e) < 0 && (de.cleanData(y(this)), n && n.replaceChild(t, this))
            }, e)
        }
    }), de.each({
        appendTo: "append",
        prependTo: "prepend",
        insertBefore: "before",
        insertAfter: "after",
        replaceAll: "replaceWith"
    }, function(e, t) {
        de.fn[e] = function(e) {
            for (var n, r = [], i = de(e), o = i.length - 1, a = 0; a <= o; a++) n = a === o ? this : this.clone(!0), de(i[a])[t](n), oe.apply(r, n.get());
            return this.pushStack(r)
        }
    });
    var rt = /^margin/,
        it = new RegExp("^(" + Re + ")(?!px)[a-z%]+$", "i"),
        ot = function(t) {
            var n = t.ownerDocument.defaultView;
            return n && n.opener || (n = e), n.getComputedStyle(t)
        };
    ! function() {
        function t() {
            if (s) {
                s.style.cssText = "box-sizing:border-box;position:relative;display:block;margin:auto;border:1px;padding:1px;top:1%;width:50%", s.innerHTML = "", Ge.appendChild(a);
                var t = e.getComputedStyle(s);
                n = "1%" !== t.top, o = "2px" === t.marginLeft, r = "4px" === t.width, s.style.marginRight = "50%", i = "4px" === t.marginRight, Ge.removeChild(a), s = null
            }
        }
        var n, r, i, o, a = te.createElement("div"),
            s = te.createElement("div");
        s.style && (s.style.backgroundClip = "content-box", s.cloneNode(!0).style.backgroundClip = "", pe.clearCloneStyle = "content-box" === s.style.backgroundClip, a.style.cssText = "border:0;width:8px;height:0;top:0;left:-9999px;padding:0;margin-top:1px;position:absolute", a.appendChild(s), de.extend(pe, {
            pixelPosition: function() {
                return t(), n
            },
            boxSizingReliable: function() {
                return t(), r
            },
            pixelMarginRight: function() {
                return t(), i
            },
            reliableMarginLeft: function() {
                return t(), o
            }
        }))
    }();
    var at = /^(none|table(?!-c[ea]).+)/,
        st = /^--/,
        ut = {
            position: "absolute",
            visibility: "hidden",
            display: "block"
        },
        lt = {
            letterSpacing: "0",
            fontWeight: "400"
        },
        ct = ["Webkit", "Moz", "ms"],
        ft = te.createElement("div").style;
    de.extend({
        cssHooks: {
            opacity: {
                get: function(e, t) {
                    if (t) {
                        var n = L(e, "opacity");
                        return "" === n ? "1" : n
                    }
                }
            }
        },
        cssNumber: {
            animationIterationCount: !0,
            columnCount: !0,
            fillOpacity: !0,
            flexGrow: !0,
            flexShrink: !0,
            fontWeight: !0,
            lineHeight: !0,
            opacity: !0,
            order: !0,
            orphans: !0,
            widows: !0,
            zIndex: !0,
            zoom: !0
        },
        cssProps: {
            float: "cssFloat"
        },
        style: function(e, t, n, r) {
            if (e && 3 !== e.nodeType && 8 !== e.nodeType && e.style) {
                var i, o, a, s = de.camelCase(t),
                    u = st.test(t),
                    l = e.style;
                if (u || (t = O(s)), a = de.cssHooks[t] || de.cssHooks[s], void 0 === n) return a && "get" in a && void 0 !== (i = a.get(e, !1, r)) ? i : l[t];
                "string" == (o = typeof n) && (i = Me.exec(n)) && i[1] && (n = g(e, t, i), o = "number"), null != n && n === n && ("number" === o && (n += i && i[3] || (de.cssNumber[s] ? "" : "px")), pe.clearCloneStyle || "" !== n || 0 !== t.indexOf("background") || (l[t] = "inherit"), a && "set" in a && void 0 === (n = a.set(e, n, r)) || (u ? l.setProperty(t, n) : l[t] = n))
            }
        },
        css: function(e, t, n, r) {
            var i, o, a, s = de.camelCase(t);
            return st.test(t) || (t = O(s)), (a = de.cssHooks[t] || de.cssHooks[s]) && "get" in a && (i = a.get(e, !0, n)), void 0 === i && (i = L(e, t, r)), "normal" === i && t in lt && (i = lt[t]), "" === n || n ? (o = parseFloat(i), !0 === n || isFinite(o) ? o || 0 : i) : i
        }
    }), de.each(["height", "width"], function(e, t) {
        de.cssHooks[t] = {
            get: function(e, n, r) {
                if (n) return !at.test(de.css(e, "display")) || e.getClientRects().length && e.getBoundingClientRect().width ? M(e, t, r) : $e(e, ut, function() {
                    return M(e, t, r)
                })
            },
            set: function(e, n, r) {
                var i, o = r && ot(e),
                    a = r && R(e, t, r, "border-box" === de.css(e, "boxSizing", !1, o), o);
                return a && (i = Me.exec(n)) && "px" !== (i[3] || "px") && (e.style[t] = n, n = de.css(e, t)), P(0, n, a)
            }
        }
    }), de.cssHooks.marginLeft = H(pe.reliableMarginLeft, function(e, t) {
        if (t) return (parseFloat(L(e, "marginLeft")) || e.getBoundingClientRect().left - $e(e, {
            marginLeft: 0
        }, function() {
            return e.getBoundingClientRect().left
        })) + "px"
    }), de.each({
        margin: "",
        padding: "",
        border: "Width"
    }, function(e, t) {
        de.cssHooks[e + t] = {
            expand: function(n) {
                for (var r = 0, i = {}, o = "string" == typeof n ? n.split(" ") : [n]; r < 4; r++) i[e + Ie[r] + t] = o[r] || o[r - 2] || o[0];
                return i
            }
        }, rt.test(e) || (de.cssHooks[e + t].set = P)
    }), de.fn.extend({
        css: function(e, t) {
            return qe(this, function(e, t, n) {
                var r, i, o = {},
                    a = 0;
                if (Array.isArray(t)) {
                    for (r = ot(e), i = t.length; a < i; a++) o[t[a]] = de.css(e, t[a], !1, r);
                    return o
                }
                return void 0 !== n ? de.style(e, t, n) : de.css(e, t)
            }, e, t, arguments.length > 1)
        }
    }), de.Tween = I, I.prototype = {
        constructor: I,
        init: function(e, t, n, r, i, o) {
            this.elem = e, this.prop = n, this.easing = i || de.easing._default, this.options = t, this.start = this.now = this.cur(), this.end = r, this.unit = o || (de.cssNumber[n] ? "" : "px")
        },
        cur: function() {
            var e = I.propHooks[this.prop];
            return e && e.get ? e.get(this) : I.propHooks._default.get(this)
        },
        run: function(e) {
            var t, n = I.propHooks[this.prop];
            return this.options.duration ? this.pos = t = de.easing[this.easing](e, this.options.duration * e, 0, 1, this.options.duration) : this.pos = t = e, this.now = (this.end - this.start) * t + this.start, this.options.step && this.options.step.call(this.elem, this.now, this), n && n.set ? n.set(this) : I.propHooks._default.set(this), this
        }
    }, I.prototype.init.prototype = I.prototype, I.propHooks = {
        _default: {
            get: function(e) {
                var t;
                return 1 !== e.elem.nodeType || null != e.elem[e.prop] && null == e.elem.style[e.prop] ? e.elem[e.prop] : (t = de.css(e.elem, e.prop, "")) && "auto" !== t ? t : 0
            },
            set: function(e) {
                de.fx.step[e.prop] ? de.fx.step[e.prop](e) : 1 !== e.elem.nodeType || null == e.elem.style[de.cssProps[e.prop]] && !de.cssHooks[e.prop] ? e.elem[e.prop] = e.now : de.style(e.elem, e.prop, e.now + e.unit)
            }
        }
    }, I.propHooks.scrollTop = I.propHooks.scrollLeft = {
        set: function(e) {
            e.elem.nodeType && e.elem.parentNode && (e.elem[e.prop] = e.now)
        }
    }, de.easing = {
        linear: function(e) {
            return e
        },
        swing: function(e) {
            return .5 - Math.cos(e * Math.PI) / 2
        },
        _default: "swing"
    }, de.fx = I.prototype.init, de.fx.step = {};
    var pt, dt, ht = /^(?:toggle|show|hide)$/,
        gt = /queueHooks$/;
    de.Animation = de.extend(X, {
        tweeners: {
            "*": [function(e, t) {
                var n = this.createTween(e, t);
                return g(n.elem, e, Me.exec(t), n), n
            }]
        },
        tweener: function(e, t) {
            de.isFunction(e) ? (t = e, e = ["*"]) : e = e.match(De);
            for (var n, r = 0, i = e.length; r < i; r++) n = e[r], X.tweeners[n] = X.tweeners[n] || [], X.tweeners[n].unshift(t)
        },
        prefilters: [function(e, t, n) {
            var r, i, o, a, s, u, l, c, f = "width" in t || "height" in t,
                p = this,
                d = {},
                h = e.style,
                g = e.nodeType && We(e),
                v = He.get(e, "fxshow");
            n.queue || (null == (a = de._queueHooks(e, "fx")).unqueued && (a.unqueued = 0, s = a.empty.fire, a.empty.fire = function() {
                a.unqueued || s()
            }), a.unqueued++, p.always(function() {
                p.always(function() {
                    a.unqueued--, de.queue(e, "fx").length || a.empty.fire()
                })
            }));
            for (r in t)
                if (i = t[r], ht.test(i)) {
                    if (delete t[r], o = o || "toggle" === i, i === (g ? "hide" : "show")) {
                        if ("show" !== i || !v || void 0 === v[r]) continue;
                        g = !0
                    }
                    d[r] = v && v[r] || de.style(e, r)
                }
            if ((u = !de.isEmptyObject(t)) || !de.isEmptyObject(d)) {
                f && 1 === e.nodeType && (n.overflow = [h.overflow, h.overflowX, h.overflowY], null == (l = v && v.display) && (l = He.get(e, "display")), "none" === (c = de.css(e, "display")) && (l ? c = l : (m([e], !0), l = e.style.display || l, c = de.css(e, "display"), m([e]))), ("inline" === c || "inline-block" === c && null != l) && "none" === de.css(e, "float") && (u || (p.done(function() {
                    h.display = l
                }), null == l && (c = h.display, l = "none" === c ? "" : c)), h.display = "inline-block")), n.overflow && (h.overflow = "hidden", p.always(function() {
                    h.overflow = n.overflow[0], h.overflowX = n.overflow[1], h.overflowY = n.overflow[2]
                })), u = !1;
                for (r in d) u || (v ? "hidden" in v && (g = v.hidden) : v = He.access(e, "fxshow", {
                    display: l
                }), o && (v.hidden = !g), g && m([e], !0), p.done(function() {
                    g || m([e]), He.remove(e, "fxshow");
                    for (r in d) de.style(e, r, d[r])
                })), u = _(g ? v[r] : 0, r, p), r in v || (v[r] = u.start, g && (u.end = u.start, u.start = 0))
            }
        }],
        prefilter: function(e, t) {
            t ? X.prefilters.unshift(e) : X.prefilters.push(e)
        }
    }), de.speed = function(e, t, n) {
        var r = e && "object" == typeof e ? de.extend({}, e) : {
            complete: n || !n && t || de.isFunction(e) && e,
            duration: e,
            easing: n && t || t && !de.isFunction(t) && t
        };
        return de.fx.off ? r.duration = 0 : "number" != typeof r.duration && (r.duration in de.fx.speeds ? r.duration = de.fx.speeds[r.duration] : r.duration = de.fx.speeds._default), null != r.queue && !0 !== r.queue || (r.queue = "fx"), r.old = r.complete, r.complete = function() {
            de.isFunction(r.old) && r.old.call(this), r.queue && de.dequeue(this, r.queue)
        }, r
    }, de.fn.extend({
        fadeTo: function(e, t, n, r) {
            return this.filter(We).css("opacity", 0).show().end().animate({
                opacity: t
            }, e, n, r)
        },
        animate: function(e, t, n, r) {
            var i = de.isEmptyObject(e),
                o = de.speed(t, n, r),
                a = function() {
                    var t = X(this, de.extend({}, e), o);
                    (i || He.get(this, "finish")) && t.stop(!0)
                };
            return a.finish = a, i || !1 === o.queue ? this.each(a) : this.queue(o.queue, a)
        },
        stop: function(e, t, n) {
            var r = function(e) {
                var t = e.stop;
                delete e.stop, t(n)
            };
            return "string" != typeof e && (n = t, t = e, e = void 0), t && !1 !== e && this.queue(e || "fx", []), this.each(function() {
                var t = !0,
                    i = null != e && e + "queueHooks",
                    o = de.timers,
                    a = He.get(this);
                if (i) a[i] && a[i].stop && r(a[i]);
                else
                    for (i in a) a[i] && a[i].stop && gt.test(i) && r(a[i]);
                for (i = o.length; i--;) o[i].elem !== this || null != e && o[i].queue !== e || (o[i].anim.stop(n), t = !1, o.splice(i, 1));
                !t && n || de.dequeue(this, e)
            })
        },
        finish: function(e) {
            return !1 !== e && (e = e || "fx"), this.each(function() {
                var t, n = He.get(this),
                    r = n[e + "queue"],
                    i = n[e + "queueHooks"],
                    o = de.timers,
                    a = r ? r.length : 0;
                for (n.finish = !0, de.queue(this, e, []), i && i.stop && i.stop.call(this, !0), t = o.length; t--;) o[t].elem === this && o[t].queue === e && (o[t].anim.stop(!0), o.splice(t, 1));
                for (t = 0; t < a; t++) r[t] && r[t].finish && r[t].finish.call(this);
                delete n.finish
            })
        }
    }), de.each(["toggle", "show", "hide"], function(e, t) {
        var n = de.fn[t];
        de.fn[t] = function(e, r, i) {
            return null == e || "boolean" == typeof e ? n.apply(this, arguments) : this.animate(B(t, !0), e, r, i)
        }
    }), de.each({
        slideDown: B("show"),
        slideUp: B("hide"),
        slideToggle: B("toggle"),
        fadeIn: {
            opacity: "show"
        },
        fadeOut: {
            opacity: "hide"
        },
        fadeToggle: {
            opacity: "toggle"
        }
    }, function(e, t) {
        de.fn[e] = function(e, n, r) {
            return this.animate(t, e, n, r)
        }
    }), de.timers = [], de.fx.tick = function() {
        var e, t = 0,
            n = de.timers;
        for (pt = de.now(); t < n.length; t++)(e = n[t])() || n[t] !== e || n.splice(t--, 1);
        n.length || de.fx.stop(), pt = void 0
    }, de.fx.timer = function(e) {
        de.timers.push(e), de.fx.start()
    }, de.fx.interval = 13, de.fx.start = function() {
        dt || (dt = !0, W())
    }, de.fx.stop = function() {
        dt = null
    }, de.fx.speeds = {
        slow: 600,
        fast: 200,
        _default: 400
    }, de.fn.delay = function(t, n) {
        return t = de.fx ? de.fx.speeds[t] || t : t, n = n || "fx", this.queue(n, function(n, r) {
            var i = e.setTimeout(n, t);
            r.stop = function() {
                e.clearTimeout(i)
            }
        })
    },
        function() {
            var e = te.createElement("input"),
                t = te.createElement("select").appendChild(te.createElement("option"));
            e.type = "checkbox", pe.checkOn = "" !== e.value, pe.optSelected = t.selected, (e = te.createElement("input")).value = "t", e.type = "radio", pe.radioValue = "t" === e.value
        }();
    var vt, mt = de.expr.attrHandle;
    de.fn.extend({
        attr: function(e, t) {
            return qe(this, de.attr, e, t, arguments.length > 1)
        },
        removeAttr: function(e) {
            return this.each(function() {
                de.removeAttr(this, e)
            })
        }
    }), de.extend({
        attr: function(e, t, n) {
            var r, i, o = e.nodeType;
            if (3 !== o && 8 !== o && 2 !== o) return void 0 === e.getAttribute ? de.prop(e, t, n) : (1 === o && de.isXMLDoc(e) || (i = de.attrHooks[t.toLowerCase()] || (de.expr.match.bool.test(t) ? vt : void 0)), void 0 !== n ? null === n ? void de.removeAttr(e, t) : i && "set" in i && void 0 !== (r = i.set(e, n, t)) ? r : (e.setAttribute(t, n + ""), n) : i && "get" in i && null !== (r = i.get(e, t)) ? r : null == (r = de.find.attr(e, t)) ? void 0 : r)
        },
        attrHooks: {
            type: {
                set: function(e, t) {
                    if (!pe.radioValue && "radio" === t && i(e, "input")) {
                        var n = e.value;
                        return e.setAttribute("type", t), n && (e.value = n), t
                    }
                }
            }
        },
        removeAttr: function(e, t) {
            var n, r = 0,
                i = t && t.match(De);
            if (i && 1 === e.nodeType)
                for (; n = i[r++];) e.removeAttribute(n)
        }
    }), vt = {
        set: function(e, t, n) {
            return !1 === t ? de.removeAttr(e, n) : e.setAttribute(n, n), n
        }
    }, de.each(de.expr.match.bool.source.match(/\w+/g), function(e, t) {
        var n = mt[t] || de.find.attr;
        mt[t] = function(e, t, r) {
            var i, o, a = t.toLowerCase();
            return r || (o = mt[a], mt[a] = i, i = null != n(e, t, r) ? a : null, mt[a] = o), i
        }
    });
    var yt = /^(?:input|select|textarea|button)$/i,
        xt = /^(?:a|area)$/i;
    de.fn.extend({
        prop: function(e, t) {
            return qe(this, de.prop, e, t, arguments.length > 1)
        },
        removeProp: function(e) {
            return this.each(function() {
                delete this[de.propFix[e] || e]
            })
        }
    }), de.extend({
        prop: function(e, t, n) {
            var r, i, o = e.nodeType;
            if (3 !== o && 8 !== o && 2 !== o) return 1 === o && de.isXMLDoc(e) || (t = de.propFix[t] || t, i = de.propHooks[t]), void 0 !== n ? i && "set" in i && void 0 !== (r = i.set(e, n, t)) ? r : e[t] = n : i && "get" in i && null !== (r = i.get(e, t)) ? r : e[t]
        },
        propHooks: {
            tabIndex: {
                get: function(e) {
                    var t = de.find.attr(e, "tabindex");
                    return t ? parseInt(t, 10) : yt.test(e.nodeName) || xt.test(e.nodeName) && e.href ? 0 : -1
                }
            }
        },
        propFix: {
            for: "htmlFor",
            class: "className"
        }
    }), pe.optSelected || (de.propHooks.selected = {
        get: function(e) {
            var t = e.parentNode;
            return t && t.parentNode && t.parentNode.selectedIndex, null
        },
        set: function(e) {
            var t = e.parentNode;
            t && (t.selectedIndex, t.parentNode && t.parentNode.selectedIndex)
        }
    }), de.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], function() {
        de.propFix[this.toLowerCase()] = this
    }), de.fn.extend({
        addClass: function(e) {
            var t, n, r, i, o, a, s, u = 0;
            if (de.isFunction(e)) return this.each(function(t) {
                de(this).addClass(e.call(this, t, V(this)))
            });
            if ("string" == typeof e && e)
                for (t = e.match(De) || []; n = this[u++];)
                    if (i = V(n), r = 1 === n.nodeType && " " + U(i) + " ") {
                        for (a = 0; o = t[a++];) r.indexOf(" " + o + " ") < 0 && (r += o + " ");
                        i !== (s = U(r)) && n.setAttribute("class", s)
                    }
            return this
        },
        removeClass: function(e) {
            var t, n, r, i, o, a, s, u = 0;
            if (de.isFunction(e)) return this.each(function(t) {
                de(this).removeClass(e.call(this, t, V(this)))
            });
            if (!arguments.length) return this.attr("class", "");
            if ("string" == typeof e && e)
                for (t = e.match(De) || []; n = this[u++];)
                    if (i = V(n), r = 1 === n.nodeType && " " + U(i) + " ") {
                        for (a = 0; o = t[a++];)
                            for (; r.indexOf(" " + o + " ") > -1;) r = r.replace(" " + o + " ", " ");
                        i !== (s = U(r)) && n.setAttribute("class", s)
                    }
            return this
        },
        toggleClass: function(e, t) {
            var n = typeof e;
            return "boolean" == typeof t && "string" === n ? t ? this.addClass(e) : this.removeClass(e) : de.isFunction(e) ? this.each(function(n) {
                de(this).toggleClass(e.call(this, n, V(this), t), t)
            }) : this.each(function() {
                var t, r, i, o;
                if ("string" === n)
                    for (r = 0, i = de(this), o = e.match(De) || []; t = o[r++];) i.hasClass(t) ? i.removeClass(t) : i.addClass(t);
                else void 0 !== e && "boolean" !== n || ((t = V(this)) && He.set(this, "__className__", t), this.setAttribute && this.setAttribute("class", t || !1 === e ? "" : He.get(this, "__className__") || ""))
            })
        },
        hasClass: function(e) {
            var t, n, r = 0;
            for (t = " " + e + " "; n = this[r++];)
                if (1 === n.nodeType && (" " + U(V(n)) + " ").indexOf(t) > -1) return !0;
            return !1
        }
    });
    var bt = /\r/g;
    de.fn.extend({
        val: function(e) {
            var t, n, r, i = this[0]; {
                if (arguments.length) return r = de.isFunction(e), this.each(function(n) {
                    var i;
                    1 === this.nodeType && (null == (i = r ? e.call(this, n, de(this).val()) : e) ? i = "" : "number" == typeof i ? i += "" : Array.isArray(i) && (i = de.map(i, function(e) {
                        return null == e ? "" : e + ""
                    })), (t = de.valHooks[this.type] || de.valHooks[this.nodeName.toLowerCase()]) && "set" in t && void 0 !== t.set(this, i, "value") || (this.value = i))
                });
                if (i) return (t = de.valHooks[i.type] || de.valHooks[i.nodeName.toLowerCase()]) && "get" in t && void 0 !== (n = t.get(i, "value")) ? n : "string" == typeof(n = i.value) ? n.replace(bt, "") : null == n ? "" : n
            }
        }
    }), de.extend({
        valHooks: {
            option: {
                get: function(e) {
                    var t = de.find.attr(e, "value");
                    return null != t ? t : U(de.text(e))
                }
            },
            select: {
                get: function(e) {
                    var t, n, r, o = e.options,
                        a = e.selectedIndex,
                        s = "select-one" === e.type,
                        u = s ? null : [],
                        l = s ? a + 1 : o.length;
                    for (r = a < 0 ? l : s ? a : 0; r < l; r++)
                        if (((n = o[r]).selected || r === a) && !n.disabled && (!n.parentNode.disabled || !i(n.parentNode, "optgroup"))) {
                            if (t = de(n).val(), s) return t;
                            u.push(t)
                        }
                    return u
                },
                set: function(e, t) {
                    for (var n, r, i = e.options, o = de.makeArray(t), a = i.length; a--;)((r = i[a]).selected = de.inArray(de.valHooks.option.get(r), o) > -1) && (n = !0);
                    return n || (e.selectedIndex = -1), o
                }
            }
        }
    }), de.each(["radio", "checkbox"], function() {
        de.valHooks[this] = {
            set: function(e, t) {
                if (Array.isArray(t)) return e.checked = de.inArray(de(e).val(), t) > -1
            }
        }, pe.checkOn || (de.valHooks[this].get = function(e) {
            return null === e.getAttribute("value") ? "on" : e.value
        })
    });
    var wt = /^(?:focusinfocus|focusoutblur)$/;
    de.extend(de.event, {
        trigger: function(t, n, r, i) {
            var o, a, s, u, l, c, f, p = [r || te],
                d = le.call(t, "type") ? t.type : t,
                h = le.call(t, "namespace") ? t.namespace.split(".") : [];
            if (a = s = r = r || te, 3 !== r.nodeType && 8 !== r.nodeType && !wt.test(d + de.event.triggered) && (d.indexOf(".") > -1 && (d = (h = d.split(".")).shift(), h.sort()), l = d.indexOf(":") < 0 && "on" + d, t = t[de.expando] ? t : new de.Event(d, "object" == typeof t && t), t.isTrigger = i ? 2 : 3, t.namespace = h.join("."), t.rnamespace = t.namespace ? new RegExp("(^|\\.)" + h.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, t.result = void 0, t.target || (t.target = r), n = null == n ? [t] : de.makeArray(n, [t]), f = de.event.special[d] || {}, i || !f.trigger || !1 !== f.trigger.apply(r, n))) {
                if (!i && !f.noBubble && !de.isWindow(r)) {
                    for (u = f.delegateType || d, wt.test(u + d) || (a = a.parentNode); a; a = a.parentNode) p.push(a), s = a;
                    s === (r.ownerDocument || te) && p.push(s.defaultView || s.parentWindow || e)
                }
                for (o = 0;
                     (a = p[o++]) && !t.isPropagationStopped();) t.type = o > 1 ? u : f.bindType || d, (c = (He.get(a, "events") || {})[t.type] && He.get(a, "handle")) && c.apply(a, n), (c = l && a[l]) && c.apply && Le(a) && (t.result = c.apply(a, n), !1 === t.result && t.preventDefault());
                return t.type = d, i || t.isDefaultPrevented() || f._default && !1 !== f._default.apply(p.pop(), n) || !Le(r) || l && de.isFunction(r[d]) && !de.isWindow(r) && ((s = r[l]) && (r[l] = null), de.event.triggered = d, r[d](), de.event.triggered = void 0, s && (r[l] = s)), t.result
            }
        },
        simulate: function(e, t, n) {
            var r = de.extend(new de.Event, n, {
                type: e,
                isSimulated: !0
            });
            de.event.trigger(r, null, t)
        }
    }), de.fn.extend({
        trigger: function(e, t) {
            return this.each(function() {
                de.event.trigger(e, t, this)
            })
        },
        triggerHandler: function(e, t) {
            var n = this[0];
            if (n) return de.event.trigger(e, t, n, !0)
        }
    }), de.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "), function(e, t) {
        de.fn[t] = function(e, n) {
            return arguments.length > 0 ? this.on(t, null, e, n) : this.trigger(t)
        }
    }), de.fn.extend({
        hover: function(e, t) {
            return this.mouseenter(e).mouseleave(t || e)
        }
    }), pe.focusin = "onfocusin" in e, pe.focusin || de.each({
        focus: "focusin",
        blur: "focusout"
    }, function(e, t) {
        var n = function(e) {
            de.event.simulate(t, e.target, de.event.fix(e))
        };
        de.event.special[t] = {
            setup: function() {
                var r = this.ownerDocument || this,
                    i = He.access(r, t);
                i || r.addEventListener(e, n, !0), He.access(r, t, (i || 0) + 1)
            },
            teardown: function() {
                var r = this.ownerDocument || this,
                    i = He.access(r, t) - 1;
                i ? He.access(r, t, i) : (r.removeEventListener(e, n, !0), He.remove(r, t))
            }
        }
    });
    var Tt = e.location,
        Ct = de.now(),
        Et = /\?/;
    de.parseXML = function(t) {
        var n;
        if (!t || "string" != typeof t) return null;
        try {
            n = (new e.DOMParser).parseFromString(t, "text/xml")
        } catch (e) {
            n = void 0
        }
        return n && !n.getElementsByTagName("parsererror").length || de.error("Invalid XML: " + t), n
    };
    var kt = /\[\]$/,
        St = /\r?\n/g,
        Nt = /^(?:submit|button|image|reset|file)$/i,
        Dt = /^(?:input|select|textarea|keygen)/i;
    de.param = function(e, t) {
        var n, r = [],
            i = function(e, t) {
                var n = de.isFunction(t) ? t() : t;
                r[r.length] = encodeURIComponent(e) + "=" + encodeURIComponent(null == n ? "" : n)
            };
        if (Array.isArray(e) || e.jquery && !de.isPlainObject(e)) de.each(e, function() {
            i(this.name, this.value)
        });
        else
            for (n in e) G(n, e[n], t, i);
        return r.join("&")
    }, de.fn.extend({
        serialize: function() {
            return de.param(this.serializeArray())
        },
        serializeArray: function() {
            return this.map(function() {
                var e = de.prop(this, "elements");
                return e ? de.makeArray(e) : this
            }).filter(function() {
                var e = this.type;
                return this.name && !de(this).is(":disabled") && Dt.test(this.nodeName) && !Nt.test(e) && (this.checked || !_e.test(e))
            }).map(function(e, t) {
                var n = de(this).val();
                return null == n ? null : Array.isArray(n) ? de.map(n, function(e) {
                    return {
                        name: t.name,
                        value: e.replace(St, "\r\n")
                    }
                }) : {
                    name: t.name,
                    value: n.replace(St, "\r\n")
                }
            }).get()
        }
    });
    var jt = /%20/g,
        At = /#.*$/,
        qt = /([?&])_=[^&]*/,
        Lt = /^(.*?):[ \t]*([^\r\n]*)$/gm,
        Ht = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/,
        Ft = /^(?:GET|HEAD)$/,
        Ot = /^\/\//,
        Pt = {},
        Rt = {},
        Mt = "*/".concat("*"),
        It = te.createElement("a");
    It.href = Tt.href, de.extend({
        active: 0,
        lastModified: {},
        etag: {},
        ajaxSettings: {
            url: Tt.href,
            type: "GET",
            isLocal: Ht.test(Tt.protocol),
            global: !0,
            processData: !0,
            async: !0,
            contentType: "application/x-www-form-urlencoded; charset=UTF-8",
            accepts: {
                "*": Mt,
                text: "text/plain",
                html: "text/html",
                xml: "application/xml, text/xml",
                json: "application/json, text/javascript"
            },
            contents: {
                xml: /\bxml\b/,
                html: /\bhtml/,
                json: /\bjson\b/
            },
            responseFields: {
                xml: "responseXML",
                text: "responseText",
                json: "responseJSON"
            },
            converters: {
                "* text": String,
                "text html": !0,
                "text json": JSON.parse,
                "text xml": de.parseXML
            },
            flatOptions: {
                url: !0,
                context: !0
            }
        },
        ajaxSetup: function(e, t) {
            return t ? J(J(e, de.ajaxSettings), t) : J(de.ajaxSettings, e)
        },
        ajaxPrefilter: Y(Pt),
        ajaxTransport: Y(Rt),
        ajax: function(t, n) {
            function r(t, n, r, s) {
                var l, p, d, b, w, T = n;
                c || (c = !0, u && e.clearTimeout(u), i = void 0, a = s || "", C.readyState = t > 0 ? 4 : 0, l = t >= 200 && t < 300 || 304 === t, r && (b = K(h, C, r)), b = Z(h, b, C, l), l ? (h.ifModified && ((w = C.getResponseHeader("Last-Modified")) && (de.lastModified[o] = w), (w = C.getResponseHeader("etag")) && (de.etag[o] = w)), 204 === t || "HEAD" === h.type ? T = "nocontent" : 304 === t ? T = "notmodified" : (T = b.state, p = b.data, l = !(d = b.error))) : (d = T, !t && T || (T = "error", t < 0 && (t = 0))), C.status = t, C.statusText = (n || T) + "", l ? m.resolveWith(g, [p, T, C]) : m.rejectWith(g, [C, T, d]), C.statusCode(x), x = void 0, f && v.trigger(l ? "ajaxSuccess" : "ajaxError", [C, h, l ? p : d]), y.fireWith(g, [C, T]), f && (v.trigger("ajaxComplete", [C, h]), --de.active || de.event.trigger("ajaxStop")))
            }
            "object" == typeof t && (n = t, t = void 0), n = n || {};
            var i, o, a, s, u, l, c, f, p, d, h = de.ajaxSetup({}, n),
                g = h.context || h,
                v = h.context && (g.nodeType || g.jquery) ? de(g) : de.event,
                m = de.Deferred(),
                y = de.Callbacks("once memory"),
                x = h.statusCode || {},
                b = {},
                w = {},
                T = "canceled",
                C = {
                    readyState: 0,
                    getResponseHeader: function(e) {
                        var t;
                        if (c) {
                            if (!s)
                                for (s = {}; t = Lt.exec(a);) s[t[1].toLowerCase()] = t[2];
                            t = s[e.toLowerCase()]
                        }
                        return null == t ? null : t
                    },
                    getAllResponseHeaders: function() {
                        return c ? a : null
                    },
                    setRequestHeader: function(e, t) {
                        return null == c && (e = w[e.toLowerCase()] = w[e.toLowerCase()] || e, b[e] = t), this
                    },
                    overrideMimeType: function(e) {
                        return null == c && (h.mimeType = e), this
                    },
                    statusCode: function(e) {
                        var t;
                        if (e)
                            if (c) C.always(e[C.status]);
                            else
                                for (t in e) x[t] = [x[t], e[t]];
                        return this
                    },
                    abort: function(e) {
                        var t = e || T;
                        return i && i.abort(t), r(0, t), this
                    }
                };
            if (m.promise(C), h.url = ((t || h.url || Tt.href) + "").replace(Ot, Tt.protocol + "//"), h.type = n.method || n.type || h.method || h.type, h.dataTypes = (h.dataType || "*").toLowerCase().match(De) || [""], null == h.crossDomain) {
                l = te.createElement("a");
                try {
                    l.href = h.url, l.href = l.href, h.crossDomain = It.protocol + "//" + It.host != l.protocol + "//" + l.host
                } catch (e) {
                    h.crossDomain = !0
                }
            }
            if (h.data && h.processData && "string" != typeof h.data && (h.data = de.param(h.data, h.traditional)), Q(Pt, h, n, C), c) return C;
            (f = de.event && h.global) && 0 == de.active++ && de.event.trigger("ajaxStart"), h.type = h.type.toUpperCase(), h.hasContent = !Ft.test(h.type), o = h.url.replace(At, ""), h.hasContent ? h.data && h.processData && 0 === (h.contentType || "").indexOf("application/x-www-form-urlencoded") && (h.data = h.data.replace(jt, "+")) : (d = h.url.slice(o.length), h.data && (o += (Et.test(o) ? "&" : "?") + h.data, delete h.data), !1 === h.cache && (o = o.replace(qt, "$1"), d = (Et.test(o) ? "&" : "?") + "_=" + Ct++ + d), h.url = o + d), h.ifModified && (de.lastModified[o] && C.setRequestHeader("If-Modified-Since", de.lastModified[o]), de.etag[o] && C.setRequestHeader("If-None-Match", de.etag[o])), (h.data && h.hasContent && !1 !== h.contentType || n.contentType) && C.setRequestHeader("Content-Type", h.contentType), C.setRequestHeader("Accept", h.dataTypes[0] && h.accepts[h.dataTypes[0]] ? h.accepts[h.dataTypes[0]] + ("*" !== h.dataTypes[0] ? ", " + Mt + "; q=0.01" : "") : h.accepts["*"]);
            for (p in h.headers) C.setRequestHeader(p, h.headers[p]);
            if (h.beforeSend && (!1 === h.beforeSend.call(g, C, h) || c)) return C.abort();
            if (T = "abort", y.add(h.complete), C.done(h.success), C.fail(h.error), i = Q(Rt, h, n, C)) {
                if (C.readyState = 1, f && v.trigger("ajaxSend", [C, h]), c) return C;
                h.async && h.timeout > 0 && (u = e.setTimeout(function() {
                    C.abort("timeout")
                }, h.timeout));
                try {
                    c = !1, i.send(b, r)
                } catch (e) {
                    if (c) throw e;
                    r(-1, e)
                }
            } else r(-1, "No Transport");
            return C
        },
        getJSON: function(e, t, n) {
            return de.get(e, t, n, "json")
        },
        getScript: function(e, t) {
            return de.get(e, void 0, t, "script")
        }
    }), de.each(["get", "post"], function(e, t) {
        de[t] = function(e, n, r, i) {
            return de.isFunction(n) && (i = i || r, r = n, n = void 0), de.ajax(de.extend({
                url: e,
                type: t,
                dataType: i,
                data: n,
                success: r
            }, de.isPlainObject(e) && e))
        }
    }), de._evalUrl = function(e) {
        return de.ajax({
            url: e,
            type: "GET",
            dataType: "script",
            cache: !0,
            async: !1,
            global: !1,
            throws: !0
        })
    }, de.fn.extend({
        wrapAll: function(e) {
            var t;
            return this[0] && (de.isFunction(e) && (e = e.call(this[0])), t = de(e, this[0].ownerDocument).eq(0).clone(!0), this[0].parentNode && t.insertBefore(this[0]), t.map(function() {
                for (var e = this; e.firstElementChild;) e = e.firstElementChild;
                return e
            }).append(this)), this
        },
        wrapInner: function(e) {
            return de.isFunction(e) ? this.each(function(t) {
                de(this).wrapInner(e.call(this, t))
            }) : this.each(function() {
                var t = de(this),
                    n = t.contents();
                n.length ? n.wrapAll(e) : t.append(e)
            })
        },
        wrap: function(e) {
            var t = de.isFunction(e);
            return this.each(function(n) {
                de(this).wrapAll(t ? e.call(this, n) : e)
            })
        },
        unwrap: function(e) {
            return this.parent(e).not("body").each(function() {
                de(this).replaceWith(this.childNodes)
            }), this
        }
    }), de.expr.pseudos.hidden = function(e) {
        return !de.expr.pseudos.visible(e)
    }, de.expr.pseudos.visible = function(e) {
        return !!(e.offsetWidth || e.offsetHeight || e.getClientRects().length)
    }, de.ajaxSettings.xhr = function() {
        try {
            return new e.XMLHttpRequest
        } catch (e) {}
    };
    var Wt = {
            0: 200,
            1223: 204
        },
        $t = de.ajaxSettings.xhr();
    pe.cors = !!$t && "withCredentials" in $t, pe.ajax = $t = !!$t, de.ajaxTransport(function(t) {
        var n, r;
        if (pe.cors || $t && !t.crossDomain) return {
            send: function(i, o) {
                var a, s = t.xhr();
                if (s.open(t.type, t.url, t.async, t.username, t.password), t.xhrFields)
                    for (a in t.xhrFields) s[a] = t.xhrFields[a];
                t.mimeType && s.overrideMimeType && s.overrideMimeType(t.mimeType), t.crossDomain || i["X-Requested-With"] || (i["X-Requested-With"] = "XMLHttpRequest");
                for (a in i) s.setRequestHeader(a, i[a]);
                n = function(e) {
                    return function() {
                        n && (n = r = s.onload = s.onerror = s.onabort = s.onreadystatechange = null, "abort" === e ? s.abort() : "error" === e ? "number" != typeof s.status ? o(0, "error") : o(s.status, s.statusText) : o(Wt[s.status] || s.status, s.statusText, "text" !== (s.responseType || "text") || "string" != typeof s.responseText ? {
                            binary: s.response
                        } : {
                            text: s.responseText
                        }, s.getAllResponseHeaders()))
                    }
                }, s.onload = n(), r = s.onerror = n("error"), void 0 !== s.onabort ? s.onabort = r : s.onreadystatechange = function() {
                    4 === s.readyState && e.setTimeout(function() {
                        n && r()
                    })
                }, n = n("abort");
                try {
                    s.send(t.hasContent && t.data || null)
                } catch (e) {
                    if (n) throw e
                }
            },
            abort: function() {
                n && n()
            }
        }
    }), de.ajaxPrefilter(function(e) {
        e.crossDomain && (e.contents.script = !1)
    }), de.ajaxSetup({
        accepts: {
            script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"
        },
        contents: {
            script: /\b(?:java|ecma)script\b/
        },
        converters: {
            "text script": function(e) {
                return de.globalEval(e), e
            }
        }
    }), de.ajaxPrefilter("script", function(e) {
        void 0 === e.cache && (e.cache = !1), e.crossDomain && (e.type = "GET")
    }), de.ajaxTransport("script", function(e) {
        if (e.crossDomain) {
            var t, n;
            return {
                send: function(r, i) {
                    t = de("<script>").prop({
                        charset: e.scriptCharset,
                        src: e.url
                    }).on("load error", n = function(e) {
                        t.remove(), n = null, e && i("error" === e.type ? 404 : 200, e.type)
                    }), te.head.appendChild(t[0])
                },
                abort: function() {
                    n && n()
                }
            }
        }
    });
    var Bt = [],
        _t = /(=)\?(?=&|$)|\?\?/;
    de.ajaxSetup({
        jsonp: "callback",
        jsonpCallback: function() {
            var e = Bt.pop() || de.expando + "_" + Ct++;
            return this[e] = !0, e
        }
    }), de.ajaxPrefilter("json jsonp", function(t, n, r) {
        var i, o, a, s = !1 !== t.jsonp && (_t.test(t.url) ? "url" : "string" == typeof t.data && 0 === (t.contentType || "").indexOf("application/x-www-form-urlencoded") && _t.test(t.data) && "data");
        if (s || "jsonp" === t.dataTypes[0]) return i = t.jsonpCallback = de.isFunction(t.jsonpCallback) ? t.jsonpCallback() : t.jsonpCallback, s ? t[s] = t[s].replace(_t, "$1" + i) : !1 !== t.jsonp && (t.url += (Et.test(t.url) ? "&" : "?") + t.jsonp + "=" + i), t.converters["script json"] = function() {
            return a || de.error(i + " was not called"), a[0]
        }, t.dataTypes[0] = "json", o = e[i], e[i] = function() {
            a = arguments
        }, r.always(function() {
            void 0 === o ? de(e).removeProp(i) : e[i] = o, t[i] && (t.jsonpCallback = n.jsonpCallback, Bt.push(i)), a && de.isFunction(o) && o(a[0]), a = o = void 0
        }), "script"
    }), pe.createHTMLDocument = function() {
        var e = te.implementation.createHTMLDocument("").body;
        return e.innerHTML = "<form></form><form></form>", 2 === e.childNodes.length
    }(), de.parseHTML = function(e, t, n) {
        if ("string" != typeof e) return [];
        "boolean" == typeof t && (n = t, t = !1);
        var r, i, o;
        return t || (pe.createHTMLDocument ? ((r = (t = te.implementation.createHTMLDocument("")).createElement("base")).href = te.location.href, t.head.appendChild(r)) : t = te), i = Te.exec(e), o = !n && [], i ? [t.createElement(i[1])] : (i = b([e], t, o), o && o.length && de(o).remove(), de.merge([], i.childNodes))
    }, de.fn.load = function(e, t, n) {
        var r, i, o, a = this,
            s = e.indexOf(" ");
        return s > -1 && (r = U(e.slice(s)), e = e.slice(0, s)), de.isFunction(t) ? (n = t, t = void 0) : t && "object" == typeof t && (i = "POST"), a.length > 0 && de.ajax({
            url: e,
            type: i || "GET",
            dataType: "html",
            data: t
        }).done(function(e) {
            o = arguments, a.html(r ? de("<div>").append(de.parseHTML(e)).find(r) : e)
        }).always(n && function(e, t) {
            a.each(function() {
                n.apply(this, o || [e.responseText, t, e])
            })
        }), this
    }, de.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function(e, t) {
        de.fn[t] = function(e) {
            return this.on(t, e)
        }
    }), de.expr.pseudos.animated = function(e) {
        return de.grep(de.timers, function(t) {
            return e === t.elem
        }).length
    }, de.offset = {
        setOffset: function(e, t, n) {
            var r, i, o, a, s, u, l = de.css(e, "position"),
                c = de(e),
                f = {};
            "static" === l && (e.style.position = "relative"), s = c.offset(), o = de.css(e, "top"), u = de.css(e, "left"), ("absolute" === l || "fixed" === l) && (o + u).indexOf("auto") > -1 ? (a = (r = c.position()).top, i = r.left) : (a = parseFloat(o) || 0, i = parseFloat(u) || 0), de.isFunction(t) && (t = t.call(e, n, de.extend({}, s))), null != t.top && (f.top = t.top - s.top + a), null != t.left && (f.left = t.left - s.left + i), "using" in t ? t.using.call(e, f) : c.css(f)
        }
    }, de.fn.extend({
        offset: function(e) {
            if (arguments.length) return void 0 === e ? this : this.each(function(t) {
                de.offset.setOffset(this, e, t)
            });
            var t, n, r, i, o = this[0];
            if (o) return o.getClientRects().length ? (r = o.getBoundingClientRect(), t = o.ownerDocument, n = t.documentElement, i = t.defaultView, {
                top: r.top + i.pageYOffset - n.clientTop,
                left: r.left + i.pageXOffset - n.clientLeft
            }) : {
                top: 0,
                left: 0
            }
        },
        position: function() {
            if (this[0]) {
                var e, t, n = this[0],
                    r = {
                        top: 0,
                        left: 0
                    };
                return "fixed" === de.css(n, "position") ? t = n.getBoundingClientRect() : (e = this.offsetParent(), t = this.offset(), i(e[0], "html") || (r = e.offset()), r = {
                    top: r.top + de.css(e[0], "borderTopWidth", !0),
                    left: r.left + de.css(e[0], "borderLeftWidth", !0)
                }), {
                    top: t.top - r.top - de.css(n, "marginTop", !0),
                    left: t.left - r.left - de.css(n, "marginLeft", !0)
                }
            }
        },
        offsetParent: function() {
            return this.map(function() {
                for (var e = this.offsetParent; e && "static" === de.css(e, "position");) e = e.offsetParent;
                return e || Ge
            })
        }
    }), de.each({
        scrollLeft: "pageXOffset",
        scrollTop: "pageYOffset"
    }, function(e, t) {
        var n = "pageYOffset" === t;
        de.fn[e] = function(r) {
            return qe(this, function(e, r, i) {
                var o;
                if (de.isWindow(e) ? o = e : 9 === e.nodeType && (o = e.defaultView), void 0 === i) return o ? o[t] : e[r];
                o ? o.scrollTo(n ? o.pageXOffset : i, n ? i : o.pageYOffset) : e[r] = i
            }, e, r, arguments.length)
        }
    }), de.each(["top", "left"], function(e, t) {
        de.cssHooks[t] = H(pe.pixelPosition, function(e, n) {
            if (n) return n = L(e, t), it.test(n) ? de(e).position()[t] + "px" : n
        })
    }), de.each({
        Height: "height",
        Width: "width"
    }, function(e, t) {
        de.each({
            padding: "inner" + e,
            content: t,
            "": "outer" + e
        }, function(n, r) {
            de.fn[r] = function(i, o) {
                var a = arguments.length && (n || "boolean" != typeof i),
                    s = n || (!0 === i || !0 === o ? "margin" : "border");
                return qe(this, function(t, n, i) {
                    var o;
                    return de.isWindow(t) ? 0 === r.indexOf("outer") ? t["inner" + e] : t.document.documentElement["client" + e] : 9 === t.nodeType ? (o = t.documentElement, Math.max(t.body["scroll" + e], o["scroll" + e], t.body["offset" + e], o["offset" + e], o["client" + e])) : void 0 === i ? de.css(t, n, s) : de.style(t, n, i, s)
                }, t, a ? i : void 0, a)
            }
        })
    }), de.fn.extend({
        bind: function(e, t, n) {
            return this.on(e, null, t, n)
        },
        unbind: function(e, t) {
            return this.off(e, null, t)
        },
        delegate: function(e, t, n, r) {
            return this.on(t, e, n, r)
        },
        undelegate: function(e, t, n) {
            return 1 === arguments.length ? this.off(e, "**") : this.off(t, e || "**", n)
        }
    }), de.holdReady = function(e) {
        e ? de.readyWait++ : de.ready(!0)
    }, de.isArray = Array.isArray, de.parseJSON = JSON.parse, de.nodeName = i, "function" == typeof define && define.amd && define("jquery", [], function() {
        return de
    });
    var zt = e.jQuery,
        Xt = e.$;
    return de.noConflict = function(t) {
        return e.$ === de && (e.$ = Xt), t && e.jQuery === de && (e.jQuery = zt), de
    }, t || (e.jQuery = e.$ = de), de
});
