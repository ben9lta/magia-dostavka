<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" href="/favicon.ico" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta
        name="description"
        content="Web site created using create-react-app"
    />
    <link rel="apple-touch-icon" href="/spa/logo192.png" />
    <link rel="manifest" href="{{asset('spa/manifest.js')}}on" />
    <link rel="stylesheet" href="{{asset('spa/css/main.css')}}" />
    <link
        href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        rel="stylesheet"
    />
    <link
        href="https://fonts.googleapis.com/icon?family=Material+Icons"
        rel="stylesheet"
    />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
    />
    <title>React App</title>
    <link href="{{asset('spa/static/css/main.4ef9a77b.chunk.css')}}" rel="stylesheet" />
</head>
<body>
<noscript>You need to enable JavaScript to run this app.</noscript>
<div id="root"></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="{{asset('spa/js/lazyload.js')}}"></script>
<script src="{{asset('spa/js/main.js')}}"></script>
<script>
    !(function(e) {
        function r(r) {
            for (
                var n, l, a = r[0], i = r[1], f = r[2], p = 0, s = [];
                p < a.length;
                p++
            )
                (l = a[p]),
                Object.prototype.hasOwnProperty.call(o, l) &&
                o[l] &&
                s.push(o[l][0]),
                    (o[l] = 0);
            for (n in i)
                Object.prototype.hasOwnProperty.call(i, n) &&
                (e[n] = i[n]);
            for (c && c(r); s.length; ) s.shift()();
            return u.push.apply(u, f || []), t();
        }
        function t() {
            for (var e, r = 0; r < u.length; r++) {
                for (var t = u[r], n = !0, a = 1; a < t.length; a++) {
                    var i = t[a];
                    0 !== o[i] && (n = !1);
                }
                n && (u.splice(r--, 1), (e = l((l.s = t[0]))));
            }
            return e;
        }
        var n = {},
            o = { 1: 0 },
            u = [];
        function l(r) {
            if (n[r]) return n[r].exports;
            var t = (n[r] = { i: r, l: !1, exports: {} });
            return (
                e[r].call(t.exports, t, t.exports, l),
                    (t.l = !0),
                    t.exports
            );
        }
        (l.m = e),
            (l.c = n),
            (l.d = function(e, r, t) {
                l.o(e, r) ||
                Object.defineProperty(e, r, {
                    enumerable: !0,
                    get: t
                });
            }),
            (l.r = function(e) {
                "undefined" != typeof Symbol &&
                Symbol.toStringTag &&
                Object.defineProperty(e, Symbol.toStringTag, {
                    value: "Module"
                }),
                    Object.defineProperty(e, "__esModule", {
                        value: !0
                    });
            }),
            (l.t = function(e, r) {
                if ((1 & r && (e = l(e)), 8 & r)) return e;
                if (4 & r && "object" == typeof e && e && e.__esModule)
                    return e;
                var t = Object.create(null);
                if (
                    (l.r(t),
                        Object.defineProperty(t, "default", {
                            enumerable: !0,
                            value: e
                        }),
                    2 & r && "string" != typeof e)
                )
                    for (var n in e)
                        l.d(
                            t,
                            n,
                            function(r) {
                                return e[r];
                            }.bind(null, n)
                        );
                return t;
            }),
            (l.n = function(e) {
                var r =
                    e && e.__esModule
                        ? function() {
                            return e.default;
                        }
                        : function() {
                            return e;
                        };
                return l.d(r, "a", r), r;
            }),
            (l.o = function(e, r) {
                return Object.prototype.hasOwnProperty.call(e, r);
            }),
            (l.p = "/");
        var a = (this.webpackJsonpvanilla_cake =
            this.webpackJsonpvanilla_cake || []),
            i = a.push.bind(a);
        (a.push = r), (a = a.slice());
        for (var f = 0; f < a.length; f++) r(a[f]);
        var c = i;
        t();
    })([]);
</script>
<script src="{{asset('spa/static/js/2.chunk.js')}}"></script>
<script src="{{asset('spa/static/js/main.chunk.js')}}"></script>
</body>
</html>
