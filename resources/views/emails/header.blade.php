<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="{{ env('APP_NAME') }}" />
        <meta name="author" content="Z. Patrick Lewis" />

        <title>{{ env('APP_NAME') }}</title>

        <link rel="dns-prefetch" href="//fonts.googleapis.com" />

        <!-- Favicons -->
        <meta name="theme-color" content="#343a40" />

        <style type="text/css">
            /* https://developer.mozilla.org/en-US/docs/Web/CSS/Using_CSS_custom_properties */
            :root {
                --main-bg-color: #343a40;
                --theme-color-one: #011f4b;
            }

            .argyle {
                background-color: var(--theme-color-one);
                color: #fff;
                /* argyle pattern - https://leaverou.github.io/css3patterns/#argyle */
                /* background-image:
                repeating-linear-gradient(120deg, rgba(255,255,255,.1), rgba(255,255,255,.1) 1px, transparent 1px, transparent 60px),
                repeating-linear-gradient(60deg, rgba(255,255,255,.1), rgba(255,255,255,.1) 1px, transparent 1px, transparent 60px),
                linear-gradient(60deg, rgba(0,0,0,.1) 25%, transparent 25%, transparent 75%, rgba(0,0,0,.1) 75%, rgba(0,0,0,.1)),
                linear-gradient(120deg, rgba(0,0,0,.1) 25%, transparent 25%, transparent 75%, rgba(0,0,0,.1) 75%, rgba(0,0,0,.1));
                background-size: 70px 120px; */
            }

            a {
                color: #3490dc;
                text-decoration: none;
                background-color: transparent;
            }

            a:hover {
                color: #1d68a7;
                text-decoration: underline;
            }

            .header-logo {
                height: 3rem;
            }

            /* file size: 5.9ko | optimized file size: 2ko | base64 size: 2.6ko */
            .logo-original {
                background-image: url(data:image/png;base64,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);
            }

            .lead {
                font-size: 1.125rem;
                font-weight: 300;
            }

            .text-muted {
                color: #6c757d !important;
            }

            .text-right {
                text-align: right!important;
            }

            .text-center {
                text-align: center!important;
            }

            .container {
                width: 100%;
                padding-right: 15px;
                padding-left: 15px;
                margin-right: auto;
                margin-left: auto;
            }

            @media (min-width: 576px) {
                .container {
                    max-width: 540px;
                }
            }

            @media (min-width: 768px) {
                .container {
                    max-width: 720px;
                }
            }

            @media (min-width: 992px) {
                .container {
                    max-width: 960px;
                }
            }

            @media (min-width: 1200px) {
                .container {
                    max-width: 1140px;
                }
            }

            .container-fluid,
            .container-xl,
            .container-lg,
            .container-md,
            .container-sm {
                width: 100%;
                padding-right: 15px;
                padding-left: 15px;
                margin-right: auto;
                margin-left: auto;
            }

            @media (min-width: 576px) {
                .container-sm,
                .container {
                    max-width: 540px;
                }
            }

            @media (min-width: 768px) {
                .container-md,
                .container-sm,
                .container {
                    max-width: 720px;
                }
            }

            @media (min-width: 992px) {
                .container-lg,
                .container-md,
                .container-sm,
                .container {
                    max-width: 960px;
                }
            }

            @media (min-width: 1200px) {
                .container-xl,
                .container-lg,
                .container-md,
                .container-sm,
                .container {
                    max-width: 1140px;
                }
            }

            body {
                margin: 0;
                font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
                font-size: 1rem;
                line-height: 1.5;
            }

            h1 {
                background-color: var(--main-bg-color);
                padding: 5px;
                color: #fff;
            }

            .email-header {
                background-color: #993333;
                background-color: var(--main-bg-color);
                color: #fff;
                padding: 1rem 0;
            }

            .email-header a {
                color: #fff;
                text-decoration: none;
            }

            .email-header .text {
                vertical-align: middle;
                text-align: center;
                padding-right: 1rem;
            }

            .email-header .text a {
                color: #fff;
                text-decoration: none;
            }

            .table {
                width: 100%;
                border-collapse: collapse;
                color: #212529;
            }

            .table th, td {
                padding: 4.8px;
                vertical-align: top;
                border-top: 1px solid #dee2e6;
                text-align: inherit;
            }

            .table thead th {
                vertical-align: bottom;
                border-bottom: 2px solid #dee2e6;
            }

            .table tbody + tbody {
                border-top: 2px solid #dee2e6;
            }

            .table th[scope="row"] {
                text-align: left;
            }

            pre {
                margin-top: 0;
                margin-bottom: 1rem;
                overflow: auto;
            }

            footer {
                background-color: var(--main-bg-color);
                color: #fff;
                margin-top: 2rem;
                display: block;
            }

            footer hr {
                color: #fff;
            }

            .pb-3 {
                padding-bottom: 1rem !important;
            }

            .pt-3 {
                padding-top: 1rem !important;
            }

            .py-3 {
                padding: 1rem 0;
            }

            .list-inline {
                padding-left: 0;
                list-style: none;
            }

            .navbar-brand {
                text-shadow: 1px 1px 1px #000;
                font-size: 1.2rem;
                color: #fff;
            }

            /* file size: 0.3ko | already optimized | base64 size: 0.4ko */
            .facebook-logo {
                background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAOdJREFUaN7tlbsOQUEURW/BVeInhFapVKPR6/X+QFR+QuU7dEqlREQ8Es9CoxDNsSUk1y3MEOKcZK9kdVPslUxmgoAQ8hNEJIQ12INDOIcHuIc7uIUbuL6d1Ta+BMfiT6hpfBme5T1CLeOz92siVgM68hlqAhZmAzAi4zl2BacxkxoCih7j65rf/Ypj/FH7x1V1BCwZwIDnwSmYi9h0BGxi56MmtL46vqQtB5w0v/s+TKwHDKwH9K0HdP8VUICjiDPH0Evs/MMGPzIGMIABDGAAAxjAAAYwgAEMYIDxgDxsv7AVEEK+zhVexz0srf6oQAAAAABJRU5ErkJggg==);
            }

            /* file size: 1.9ko | optimized file size: 1.4ko | base64 size: 1.8ko */
            .insta-logo {
                background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAB41BMVEX///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////9is5RaAAAAoHRSTlMAAQIEBQYHCAkKCw8QEhUZHB4gJScqKywtLi8wMTI1Njc5Ozw/QEFDREVGR0hKS01OT1BRUlNUV1laXF5hY2hqbG5vcHJ1d3h5enuBg5CRk5aXmJmam5ydnp+goaKjpKWmp6ipqqusrq+wsrS1trq7vb/AwcLExsfIycrLzM7P0NHS09TV19nd3t/g4ePl5ufo6evs7e7v8PHy8/T19vj5nJPsEwAAAoRJREFUeAHd02lbG1UYxvHbSrRUa9VqK7ZasVVbwAVBK3XftVpIiiW2paYRBA0LiESWgIoSg4gQiU6GAPr/qD1XyJkZYJIPwO/FvLuvOc/y6IA5+U78+4Xc6rpTdN2NDdctOuuruV8nrr/boDBN41Q18YL2iVFTXHsMYVCaG+nv7emORcti3T03+4czLgZj2uULjKG2owpxf+t3GL0KeBrjTVX1OsZz8s0Bb6iKo5JeAxbkOQ6MK9zhwa3sGWkEaJD1PtCscF1AsV5ngU9l9cLWPQq4+9Fzz5yIyNDPGA/qLgcGZKVhVr7Ga39hrH55VtJbwA+HpCnIyPoNUrLqruP56rD09uhV81UKfpf1B/Sp4oEsAbljqrgNf8pag5vacSiHkfm8o+OzaYwVW1sP5GUV4Jp2JID/LqnsYgm/0ij8I8uBqyprAP4/4c1nGzjjtdeRVYSY12Beled5/xedUJTl2kCdC78oYB5KdTbg7g+ctPO0PgBOhwaiknEeaFdAM/CiZFypGmhTQFN4wHvSY8DHCngPeKJGDZESzCsgA1sRLxDS1ttAqzzngW9D2upAt8pOA9vHVfHwBtDoDy5sNb4BNttV9pIDpMJWYw1u2NNZwZi63PbyJ2mMv+vDlm8JvlbFsSUCVh5SRSK43ovBAzqSwNN/n6xdB5SGGfmeTaxh5JMX5PsR5mTdgs2IAiKPt7SculdB/8LgrhW7oJoagcuyHgFGVVMKOCXPT0CHamgHFuU7h3FJVV3EaFbADYyBliMKUd/UB3ZSnjEwCrPDyXi0q/NKWWdXNJ4cmlnHYFJ7xKnplvZpnaSq9CsK8+SHyanscr7gFN2yolPIL2en+z56SgfLHa6lmQq/SP2yAAAAAElFTkSuQmCC);
            }

            /* file size: 0.6ko | already optimized | base64 size: 0.8ko */
            .twitter-logo {
                background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAiJJREFUGBntwUFo1XUcAPDv3JroBk1MJt28uggsQUGDItgO5kEPiQkRRDwCoUg6TEYIehDKQMk8PPTiwUKYOGLT1EKoQ9GlS3Xo4GmxCNsO1dPHe58GHirKvfff//f+70H/zyeiVCqV/lcwhP04jcv4GKfwAtbGCtAX7cCaSAz9OIK7Hu5nVLAm/gZr8TqORzswi7FIBCO4oX3T2Ig9OIt51PFktIKdHljAWOSEAdyS37FoB6b8ZQFjkQMm5dPE0ViGTdgbK8EF/7SAZ2IV8CgW5XMVJ3ELS9gWK8EV/9bEBxiODHBIOk0cjFZw2sPdwXi0CVVp1HAg2oGK1j7CU9EC5uR3F7uiXdiAP7Tnc7yKjfEfMCu/ucgK52RTxxc4hRfxNDajKr/pyArD+FFv+DCywF6MYCvu6L53IgvM4jfM4RIauqsSWeA9vWU8ssCzekcN6yMrXNcbbsZqYCvquu/tWC28jPu664nIA8/hV91xO1LA43gfPynWROSFV3Ael/A1GorxTaSALagr3r5IBWcV65NICY9gRjHm8VikhkFcRFPnNPB8dBK24xpq0jsRRcEAJvCLNN6NoqAPr2FJGpNRBKxDBT9Io4FKpIIB9MUy9GMU23AY01iUzrfYHSlhCFOYR1NnLOEN9EenYBRnsCid31HF5igK1uElfIqa7O7hMxzGSHQTBrEDb+ICZvAlvsd3+Ao3UMVbGMdQlEqlUqnX/QmVvdV/MYjK6gAAAABJRU5ErkJggg==);
            }

            .list-inline-item {
                display: inline-block;
            }
        </style>
    </head>
    <body>
    <div class="container">
    <table class="table argyle">
    <tbody>
        <tr>
        <td width="100%" class="text-center py-3">
            <a href="http://devotedtransportllc.com" title="http://devotedtransportllc.com">
                <img class="header-logo" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAyoAAAFxCAMAAACrwazoAAAAmVBMVEXKYUv////HfGjGd2PGdGDGd2PIgW3HgGzHf2vHfmrHfWnHfGjGe2fHembGeWXHeGTGd2PGd2PGd2LGdWHGdGDGc1/Gc1/Gcl7GcV3GcFzHcFvHb1rJZE7HbVnHbFjHbFfHa1fHaVTHalXHaFTIaFPIaFPIZlHIZ1LIZVDIZlHJZE7JZE/JYkzJYk3JY03JY07JZE7KYUvKYkwoJOPUAAAALHRSTlMAAAECAwYfOlBneYeXpLC5wsPHz9Xa3+Pn6uzv8PP09vf6+vv7/P39/v7+/ghtNkoAAAaOSURBVHgB7d3bchRVGIbhb9zMBDKAQNgEN4IiRMOErLn/i9OyRqs8YP626F5Md57nCjh56/ubZEEaMEDSSkCSMhYgqVsBEq3AsFDqVkApZSxAUrcCJHUrQFK3AiSDWgGhlLEAKVsBUmjAoZSyFSADNCBagVJqWoEMoRWIVmCcUMQCqWkFMoBWINEKjFOKWCADaAUSrcA4pWgFUhMLZBwNlKIVyDi0glLEAhmJVhCKViAdWwGhaAWpiAUSrUCvTrSCUrQCGYlYUIpWIL00EIpWkErEAulHKyhFKwhFK5COxIJUtIJQtALpRysIRSsoRSyQjrSCVLSCTrQCOSkNhKIVlKIVhKIVSD9iQShaQSlagfSjFYQiFpSiFUg/WkEpWkEoWoF0JBaUohWUohXI7GgFoYgFpWgFqWgFnWgFMj9iQSlaQShaQSlaQSlagXA3tZkTClJJohSUUguMRSoglUBXRgWkAlIJ9GdUwKiAVOis8S/31xBiwaigFal0pBWlSIWGUUErUkEs7i+0IhWlaEUqUtGKUqQiFqkoBa0YFbQiFbTi/kIsfRkVtCIVtCIVtNKPUhCLVOhAKkpBK0YFrUgFrUwl7i/EYlTQilTQSlfuL7RiVOhJKkpBK+6vGlpxf6EVo4JYpIJW+nN/oRWjglakglY6c38hFqOCVqSCVvpSCloxKohFKmilK6WgFamgFT9UQSydGRW04v5CK1JBK139oRTEYlTQymiUglaMClqRClrpSymIxaigFamgla52+S+loBWjglimTUUpaOWNVNCK+wutjCVGBbFIBa24vzpAK0YFrUgFsbi/ukErRgWtGBW0IpX0hViMClqRClLxUd8fUpEKUnF/oRSjglSkIhXcX0rBqEgFqUgFqSgFpUilP6QiFaSiFJQilf6QilRQyjuldIVRkQpSUQpKeWFURoNRkQpSUUpXGBWpIBWpIJUR/qRKwahIBalIBam4v1CKUUEqRkUpSEUquL+kglFRCkqRClJxfyEVo8Kcub+kgvtLKUjlQiooxf2FVJTSD1KRCkqRClJRCjMgFamgFKkgFaOCUqTSH+4vpSAVo4JSpDIlpLJzfyEVo4JSpNIVUlEKUpEKSpEKM2VUlIJUpIJS9n6o0hVGRSpIRSoo5cr9VUMqRgWlSAWpeNSFVIyKVJQiFaXg/pIK7i+poJQbo4JU3F/Mj1KkglFRClKRClLx918oxaggFakglRm/FFYKRkUqSCVSQSlGBalIZaFwf0kFo6IUpCIVpCKV/lCKUpCKVJDKxw5/VKVgVPq5DlLxQxWjglSkgvurp/P0hFSMClKRCkpxf63DifBSeP6jglLcX++DVNxfRgUf9VLB/dXT4/SEVIwKUvHr9yjFv+l9FqQilZFGBakoZRfmRil+qQWptAHcX0ilnayXQSlSMSoYFamwwFFpp+t+OBlSaUYFqYxUilQwKu2L80MVlGJUWEoq7aT9GmZDKUYFqbSCVJBKm4OHQSlfUtLmIUgFqTBWKmyCUjAqjJQKt7kTOGsYFWpPG1KhdtU+E89yB9AwKtQ2DalQe9g+H/fC0r1pGBVqDalQWze8FKZ23jAq1H5s4+DnsGQfGkaFUT5TkAr322jYhsV62TAq1G7aeHga/NyR2m4dvOKi9iAD4BUXF8ErLmr7DIDPFB4Hr7i4o58qPGpj4zIsz9s2Oh4FnynU3p0Fvx5JLSzNtk2B52FZfmoYFWr7NgV+yAD4TCFfr/6So/CKi2S1qlrBKy6+y1dlKnjFxU2yOsj80aZCBqSCV1ysk2+qVPCKiwdJVkUqeMXFi+SfVvKpUvCZwnWSfJuji4JXXOzyN6V4xcWA5/TFdwpecXEIRSs+UyhLyUorfj2SAd8pq6Op4BUX7w6lzD8Vrtt0uDyUciwVHF+cL6UULtqEWKc+v/Ab9+Rg9qXQJsSrAaWgFM6S6vzCBz27LKUUnrTp8CBLSYWPbTLsU5eCzxS2dSkohfepS8ErLtbLKYVnbSpss5xS2LWJ8CqfLuWQCj5T+C1lKfi5I++jFK+4GB7KMkrhdZsCr1OUsgo+U7iIUnymUDqPUvxfXFSuUocys1K4bGPjSVKkohQvg3kbofigp7K7l6IUqfi/uNifJ7EpR9kUPmxThCIVpXC1SRGKUpTCZZWJUJTC200Vh1I8eJTJWRKlHOHBI/vvN0mUcoR/wYhf7uUIpcRnCrfP16kI5U6Xwu/PNhlmSaVw24Zhf/1qm//nZELhT/a76oUIAF5VAAAAAElFTkSuQmCC" alt="Devoted Transportation LLC" />
            </a>
            <div class="navbar-brand">Devoted Transportation</div>
        </td>
        </tr>
    </tbody>
    </table>
    </div> <!-- /.container -->
