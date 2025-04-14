<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="https://wesr.unep.org/sites/default/files/MicrosoftTeams-image%20%283%29_0.png"
        type="image/png" />
    <title>UNEP - EWAD - NEWSLETTER APP</title>


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://open-source.jagullo.fr/cookie-wall/jquery.cookiewall.js"></script>

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /* ! tailwindcss v3.4.17 | MIT License | https://tailwindcss.com */
            *,
            :before,
            :after {
                --tw-border-spacing-x: 0;
                --tw-border-spacing-y: 0;
                --tw-translate-x: 0;
                --tw-translate-y: 0;
                --tw-rotate: 0;
                --tw-skew-x: 0;
                --tw-skew-y: 0;
                --tw-scale-x: 1;
                --tw-scale-y: 1;
                --tw-pan-x: ;
                --tw-pan-y: ;
                --tw-pinch-zoom: ;
                --tw-scroll-snap-strictness: proximity;
                --tw-gradient-from-position: ;
                --tw-gradient-via-position: ;
                --tw-gradient-to-position: ;
                --tw-ordinal: ;
                --tw-slashed-zero: ;
                --tw-numeric-figure: ;
                --tw-numeric-spacing: ;
                --tw-numeric-fraction: ;
                --tw-ring-inset: ;
                --tw-ring-offset-width: 0px;
                --tw-ring-offset-color: #fff;
                --tw-ring-color: rgb(59 130 246 / .5);
                --tw-ring-offset-shadow: 0 0 #0000;
                --tw-ring-shadow: 0 0 #0000;
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                --tw-blur: ;
                --tw-brightness: ;
                --tw-contrast: ;
                --tw-grayscale: ;
                --tw-hue-rotate: ;
                --tw-invert: ;
                --tw-saturate: ;
                --tw-sepia: ;
                --tw-drop-shadow: ;
                --tw-backdrop-blur: ;
                --tw-backdrop-brightness: ;
                --tw-backdrop-contrast: ;
                --tw-backdrop-grayscale: ;
                --tw-backdrop-hue-rotate: ;
                --tw-backdrop-invert: ;
                --tw-backdrop-opacity: ;
                --tw-backdrop-saturate: ;
                --tw-backdrop-sepia: ;
                --tw-contain-size: ;
                --tw-contain-layout: ;
                --tw-contain-paint: ;
                --tw-contain-style:
            }

            ::backdrop {
                --tw-border-spacing-x: 0;
                --tw-border-spacing-y: 0;
                --tw-translate-x: 0;
                --tw-translate-y: 0;
                --tw-rotate: 0;
                --tw-skew-x: 0;
                --tw-skew-y: 0;
                --tw-scale-x: 1;
                --tw-scale-y: 1;
                --tw-pan-x: ;
                --tw-pan-y: ;
                --tw-pinch-zoom: ;
                --tw-scroll-snap-strictness: proximity;
                --tw-gradient-from-position: ;
                --tw-gradient-via-position: ;
                --tw-gradient-to-position: ;
                --tw-ordinal: ;
                --tw-slashed-zero: ;
                --tw-numeric-figure: ;
                --tw-numeric-spacing: ;
                --tw-numeric-fraction: ;
                --tw-ring-inset: ;
                --tw-ring-offset-width: 0px;
                --tw-ring-offset-color: #fff;
                --tw-ring-color: rgb(59 130 246 / .5);
                --tw-ring-offset-shadow: 0 0 #0000;
                --tw-ring-shadow: 0 0 #0000;
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                --tw-blur: ;
                --tw-brightness: ;
                --tw-contrast: ;
                --tw-grayscale: ;
                --tw-hue-rotate: ;
                --tw-invert: ;
                --tw-saturate: ;
                --tw-sepia: ;
                --tw-drop-shadow: ;
                --tw-backdrop-blur: ;
                --tw-backdrop-brightness: ;
                --tw-backdrop-contrast: ;
                --tw-backdrop-grayscale: ;
                --tw-backdrop-hue-rotate: ;
                --tw-backdrop-invert: ;
                --tw-backdrop-opacity: ;
                --tw-backdrop-saturate: ;
                --tw-backdrop-sepia: ;
                --tw-contain-size: ;
                --tw-contain-layout: ;
                --tw-contain-paint: ;
                --tw-contain-style:
            }

            *,
            :before,
            :after {
                box-sizing: border-box;
                border-width: 0;
                border-style: solid;
                border-color: #e5e7eb
            }

            :before,
            :after {
                --tw-content: ""
            }

            html,
            :host {
                line-height: 1.5;
                -webkit-text-size-adjust: 100%;
                -moz-tab-size: 4;
                -o-tab-size: 4;
                tab-size: 4;
                font-family: Figtree, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", Segoe UI Symbol, "Noto Color Emoji";
                font-feature-settings: normal;
                font-variation-settings: normal;
                -webkit-tap-highlight-color: transparent
            }

            body {
                margin: 0;
                line-height: inherit
            }

            hr {
                height: 0;
                color: inherit;
                border-top-width: 1px
            }

            abbr:where([title]) {
                -webkit-text-decoration: underline dotted;
                text-decoration: underline dotted
            }

            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                font-size: inherit;
                font-weight: inherit
            }

            a {
                color: inherit;
                text-decoration: inherit
            }

            b,
            strong {
                font-weight: bolder
            }

            code,
            kbd,
            samp,
            pre {
                font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace;
                font-feature-settings: normal;
                font-variation-settings: normal;
                font-size: 1em
            }

            small {
                font-size: 80%
            }

            sub,
            sup {
                font-size: 75%;
                line-height: 0;
                position: relative;
                vertical-align: baseline
            }

            sub {
                bottom: -.25em
            }

            sup {
                top: -.5em
            }

            table {
                text-indent: 0;
                border-color: inherit;
                border-collapse: collapse
            }

            button,
            input,
            optgroup,
            select,
            textarea {
                font-family: inherit;
                font-feature-settings: inherit;
                font-variation-settings: inherit;
                font-size: 100%;
                font-weight: inherit;
                line-height: inherit;
                letter-spacing: inherit;
                color: inherit;
                margin: 0;
                padding: 0
            }

            button,
            select {
                text-transform: none
            }

            button,
            input:where([type=button]),
            input:where([type=reset]),
            input:where([type=submit]) {
                -webkit-appearance: button;
                background-color: transparent;
                background-image: none
            }

            :-moz-focusring {
                outline: auto
            }

            :-moz-ui-invalid {
                box-shadow: none
            }

            progress {
                vertical-align: baseline
            }

            ::-webkit-inner-spin-button,
            ::-webkit-outer-spin-button {
                height: auto
            }

            [type=search] {
                -webkit-appearance: textfield;
                outline-offset: -2px
            }

            ::-webkit-search-decoration {
                -webkit-appearance: none
            }

            ::-webkit-file-upload-button {
                -webkit-appearance: button;
                font: inherit
            }

            summary {
                display: list-item
            }

            blockquote,
            dl,
            dd,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            hr,
            figure,
            p,
            pre {
                margin: 0
            }

            fieldset {
                margin: 0;
                padding: 0
            }

            legend {
                padding: 0
            }

            ol,
            ul,
            menu {
                list-style: none;
                margin: 0;
                padding: 0
            }

            dialog {
                padding: 0
            }

            textarea {
                resize: vertical
            }

            input::-moz-placeholder,
            textarea::-moz-placeholder {
                opacity: 1;
                color: #9ca3af
            }

            input::placeholder,
            textarea::placeholder {
                opacity: 1;
                color: #9ca3af
            }

            button,
            [role=button] {
                cursor: pointer
            }

            :disabled {
                cursor: default
            }

            img,
            svg,
            video,
            canvas,
            audio,
            iframe,
            embed,
            object {
                display: block;
                vertical-align: middle
            }

            img,
            video {
                max-width: 100%;
                height: auto
            }

            [hidden]:where(:not([hidden=until-found])) {
                display: none
            }

            .absolute {
                position: absolute
            }

            .relative {
                position: relative
            }

            .-bottom-16 {
                bottom: -4rem
            }

            .-left-16 {
                left: -4rem
            }

            .-left-20 {
                left: -5rem
            }

            .top-0 {
                top: 0
            }

            .z-0 {
                z-index: 0
            }

            .\!row-span-1 {
                grid-row: span 1 / span 1 !important
            }

            .-mx-3 {
                margin-left: -.75rem;
                margin-right: -.75rem
            }

            .-ml-px {
                margin-left: -1px
            }

            .ml-3 {
                margin-left: .75rem
            }

            .mt-4 {
                margin-top: 1rem
            }

            .mt-6 {
                margin-top: 1.5rem
            }

            .flex {
                display: flex
            }

            .inline-flex {
                display: inline-flex
            }

            .table {
                display: table
            }

            .grid {
                display: grid
            }

            .\!hidden {
                display: none !important
            }

            .hidden {
                display: none
            }

            .aspect-video {
                aspect-ratio: 16 / 9
            }

            .size-12 {
                width: 3rem;
                height: 3rem
            }

            .size-5 {
                width: 1.25rem;
                height: 1.25rem
            }

            .size-6 {
                width: 1.5rem;
                height: 1.5rem
            }

            .h-12 {
                height: 3rem
            }

            .h-40 {
                height: 10rem
            }

            .h-5 {
                height: 1.25rem
            }

            .h-full {
                height: 100%
            }

            .min-h-screen {
                min-height: 100vh
            }

            .w-5 {
                width: 1.25rem
            }

            .w-\[calc\(100\%_\+_8rem\)\] {
                width: calc(100% + 8rem)
            }

            .w-auto {
                width: auto
            }

            .w-full {
                width: 100%
            }

            .max-w-2xl {
                max-width: 42rem
            }

            .max-w-\[877px\] {
                max-width: 877px
            }

            .flex-1 {
                flex: 1 1 0%
            }

            .shrink-0 {
                flex-shrink: 0
            }

            .transform {
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }

            .cursor-default {
                cursor: default
            }

            .resize {
                resize: both
            }

            .grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }

            .\!flex-row {
                flex-direction: row !important
            }

            .flex-col {
                flex-direction: column
            }

            .items-start {
                align-items: flex-start
            }

            .items-center {
                align-items: center
            }

            .items-stretch {
                align-items: stretch
            }

            .justify-end {
                justify-content: flex-end
            }

            .justify-center {
                justify-content: center
            }

            .justify-between {
                justify-content: space-between
            }

            .justify-items-center {
                justify-items: center
            }

            .gap-2 {
                gap: .5rem
            }

            .gap-4 {
                gap: 1rem
            }

            .gap-6 {
                gap: 1.5rem
            }

            .self-center {
                align-self: center
            }

            .overflow-hidden {
                overflow: hidden
            }

            .rounded-\[10px\] {
                border-radius: 10px
            }

            .rounded-full {
                border-radius: 9999px
            }

            .rounded-lg {
                border-radius: .5rem
            }

            .rounded-md {
                border-radius: .375rem
            }

            .rounded-sm {
                border-radius: .125rem
            }

            .rounded-l-md {
                border-top-left-radius: .375rem;
                border-bottom-left-radius: .375rem
            }

            .rounded-r-md {
                border-top-right-radius: .375rem;
                border-bottom-right-radius: .375rem
            }

            .border {
                border-width: 1px
            }

            .border-gray-300 {
                --tw-border-opacity: 1;
                border-color: rgb(209 213 219 / var(--tw-border-opacity, 1))
            }

            .bg-\[\#FF2D20\]\/10 {
                background-color: #ff2d201a
            }

            .bg-gray-50 {
                --tw-bg-opacity: 1;
                background-color: rgb(249 250 251 / var(--tw-bg-opacity, 1))
            }

            .bg-white {
                --tw-bg-opacity: 1;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity, 1))
            }

            .bg-gradient-to-b {
                background-image: linear-gradient(to bottom, var(--tw-gradient-stops))
            }

            .from-transparent {
                --tw-gradient-from: transparent var(--tw-gradient-from-position);
                --tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);
                --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
            }

            .via-white {
                --tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);
                --tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)
            }

            .to-white {
                --tw-gradient-to: #fff var(--tw-gradient-to-position)
            }

            .to-zinc-900 {
                --tw-gradient-to: #18181b var(--tw-gradient-to-position)
            }

            .stroke-\[\#FF2D20\] {
                stroke: #ff2d20
            }

            .object-cover {
                -o-object-fit: cover;
                object-fit: cover
            }

            .object-top {
                -o-object-position: top;
                object-position: top
            }

            .p-6 {
                padding: 1.5rem
            }

            .px-2 {
                padding-left: .5rem;
                padding-right: .5rem
            }

            .px-3 {
                padding-left: .75rem;
                padding-right: .75rem
            }

            .px-4 {
                padding-left: 1rem;
                padding-right: 1rem
            }

            .px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .py-10 {
                padding-top: 2.5rem;
                padding-bottom: 2.5rem
            }

            .py-16 {
                padding-top: 4rem;
                padding-bottom: 4rem
            }

            .py-2 {
                padding-top: .5rem;
                padding-bottom: .5rem
            }

            .pt-3 {
                padding-top: .75rem
            }

            .text-center {
                text-align: center
            }

            .font-sans {
                font-family: Figtree, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", Segoe UI Symbol, "Noto Color Emoji"
            }

            .text-sm {
                font-size: .875rem;
                line-height: 1.25rem
            }

            .text-sm\/relaxed {
                font-size: .875rem;
                line-height: 1.625
            }

            .text-xl {
                font-size: 1.25rem;
                line-height: 1.75rem
            }

            .font-medium {
                font-weight: 500
            }

            .font-semibold {
                font-weight: 600
            }

            .leading-5 {
                line-height: 1.25rem
            }

            .text-black {
                --tw-text-opacity: 1;
                color: rgb(0 0 0 / var(--tw-text-opacity, 1))
            }

            .text-black\/50 {
                color: #00000080
            }

            .text-gray-500 {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity, 1))
            }

            .text-gray-700 {
                --tw-text-opacity: 1;
                color: rgb(55 65 81 / var(--tw-text-opacity, 1))
            }

            .text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity, 1))
            }

            .underline {
                text-decoration-line: underline
            }

            .antialiased {
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale
            }

            .shadow-\[0px_14px_34px_0px_rgba\(0\,0\,0\,0\.08\)\] {
                --tw-shadow: 0px 14px 34px 0px rgba(0, 0, 0, .08);
                --tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .shadow-sm {
                --tw-shadow: 0 1px 2px 0 rgb(0 0 0 / .05);
                --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .ring-black {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(0 0 0 / var(--tw-ring-opacity, 1))
            }

            .ring-gray-300 {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(209 213 219 / var(--tw-ring-opacity, 1))
            }

            .ring-transparent {
                --tw-ring-color: transparent
            }

            .ring-white {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity, 1))
            }

            .ring-white\/\[0\.05\] {
                --tw-ring-color: rgb(255 255 255 / .05)
            }

            .drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.06\)\] {
                --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, .06));
                filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
            }

            .drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.25\)\] {
                --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, .25));
                filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
            }

            .filter {
                filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
            }

            .transition {
                transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
                transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
                transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
                transition-timing-function: cubic-bezier(.4, 0, .2, 1);
                transition-duration: .15s
            }

            .duration-150 {
                transition-duration: .15s
            }

            .duration-300 {
                transition-duration: .3s
            }

            .ease-in-out {
                transition-timing-function: cubic-bezier(.4, 0, .2, 1)
            }

            .selection\:bg-\[\#FF2D20\] *::-moz-selection {
                --tw-bg-opacity: 1;
                background-color: rgb(255 45 32 / var(--tw-bg-opacity, 1))
            }

            .selection\:bg-\[\#FF2D20\] *::selection {
                --tw-bg-opacity: 1;
                background-color: rgb(255 45 32 / var(--tw-bg-opacity, 1))
            }

            .selection\:text-white *::-moz-selection {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity, 1))
            }

            .selection\:text-white *::selection {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity, 1))
            }

            .selection\:bg-\[\#FF2D20\]::-moz-selection {
                --tw-bg-opacity: 1;
                background-color: rgb(255 45 32 / var(--tw-bg-opacity, 1))
            }

            .selection\:bg-\[\#FF2D20\]::selection {
                --tw-bg-opacity: 1;
                background-color: rgb(255 45 32 / var(--tw-bg-opacity, 1))
            }

            .selection\:text-white::-moz-selection {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity, 1))
            }

            .selection\:text-white::selection {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity, 1))
            }

            .hover\:text-black:hover {
                --tw-text-opacity: 1;
                color: rgb(0 0 0 / var(--tw-text-opacity, 1))
            }

            .hover\:text-black\/70:hover {
                color: #000000b3
            }

            .hover\:text-gray-400:hover {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity, 1))
            }

            .hover\:text-gray-500:hover {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity, 1))
            }

            .hover\:ring-black\/20:hover {
                --tw-ring-color: rgb(0 0 0 / .2)
            }

            .focus\:z-10:focus {
                z-index: 10
            }

            .focus\:border-blue-300:focus {
                --tw-border-opacity: 1;
                border-color: rgb(147 197 253 / var(--tw-border-opacity, 1))
            }

            .focus\:outline-none:focus {
                outline: 2px solid transparent;
                outline-offset: 2px
            }

            .focus\:ring:focus {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .focus-visible\:ring-1:focus-visible {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .focus-visible\:ring-\[\#FF2D20\]:focus-visible {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity, 1))
            }

            .active\:bg-gray-100:active {
                --tw-bg-opacity: 1;
                background-color: rgb(243 244 246 / var(--tw-bg-opacity, 1))
            }

            .active\:text-gray-500:active {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity, 1))
            }

            .active\:text-gray-700:active {
                --tw-text-opacity: 1;
                color: rgb(55 65 81 / var(--tw-text-opacity, 1))
            }

            @media (min-width: 640px) {
                .sm\:flex {
                    display: flex
                }

                .sm\:hidden {
                    display: none
                }

                .sm\:size-16 {
                    width: 4rem;
                    height: 4rem
                }

                .sm\:size-6 {
                    width: 1.5rem;
                    height: 1.5rem
                }

                .sm\:flex-1 {
                    flex: 1 1 0%
                }

                .sm\:items-center {
                    align-items: center
                }

                .sm\:justify-between {
                    justify-content: space-between
                }

                .sm\:pt-5 {
                    padding-top: 1.25rem
                }
            }

            @media (min-width: 768px) {
                .md\:row-span-3 {
                    grid-row: span 3 / span 3
                }
            }

            @media (min-width: 1024px) {
                .lg\:col-start-2 {
                    grid-column-start: 2
                }

                .lg\:h-16 {
                    height: 4rem
                }

                .lg\:max-w-7xl {
                    max-width: 80rem
                }

                .lg\:grid-cols-2 {
                    grid-template-columns: repeat(2, minmax(0, 1fr))
                }

                .lg\:grid-cols-3 {
                    grid-template-columns: repeat(3, minmax(0, 1fr))
                }

                .lg\:flex-col {
                    flex-direction: column
                }

                .lg\:items-end {
                    align-items: flex-end
                }

                .lg\:justify-center {
                    justify-content: center
                }

                .lg\:gap-8 {
                    gap: 2rem
                }

                .lg\:p-10 {
                    padding: 2.5rem
                }

                .lg\:pb-10 {
                    padding-bottom: 2.5rem
                }

                .lg\:pt-0 {
                    padding-top: 0
                }

                .lg\:text-\[\#FF2D20\] {
                    --tw-text-opacity: 1;
                    color: rgb(255 45 32 / var(--tw-text-opacity, 1))
                }
            }

            .rtl\:flex-row-reverse:where([dir=rtl], [dir=rtl] *) {
                flex-direction: row-reverse
            }

            @media (prefers-color-scheme: dark) {
                .dark\:block {
                    display: block
                }

                .dark\:hidden {
                    display: none
                }

                .dark\:border-gray-600 {
                    --tw-border-opacity: 1;
                    border-color: rgb(75 85 99 / var(--tw-border-opacity, 1))
                }

                .dark\:bg-black {
                    --tw-bg-opacity: 1;
                    background-color: rgb(0 0 0 / var(--tw-bg-opacity, 1))
                }

                .dark\:bg-gray-800 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(31 41 55 / var(--tw-bg-opacity, 1))
                }

                .dark\:bg-zinc-900 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(24 24 27 / var(--tw-bg-opacity, 1))
                }

                .dark\:via-zinc-900 {
                    --tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);
                    --tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)
                }

                .dark\:to-zinc-900 {
                    --tw-gradient-to: #18181b var(--tw-gradient-to-position)
                }

                .dark\:text-gray-300 {
                    --tw-text-opacity: 1;
                    color: rgb(209 213 219 / var(--tw-text-opacity, 1))
                }

                .dark\:text-gray-400 {
                    --tw-text-opacity: 1;
                    color: rgb(156 163 175 / var(--tw-text-opacity, 1))
                }

                .dark\:text-gray-600 {
                    --tw-text-opacity: 1;
                    color: rgb(75 85 99 / var(--tw-text-opacity, 1))
                }

                .dark\:text-white {
                    --tw-text-opacity: 1;
                    color: rgb(255 255 255 / var(--tw-text-opacity, 1))
                }

                .dark\:text-white\/50 {
                    color: #ffffff80
                }

                .dark\:text-white\/70 {
                    color: #ffffffb3
                }

                .dark\:ring-zinc-800 {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity, 1))
                }

                .dark\:hover\:text-gray-300:hover {
                    --tw-text-opacity: 1;
                    color: rgb(209 213 219 / var(--tw-text-opacity, 1))
                }

                .dark\:hover\:text-white:hover {
                    --tw-text-opacity: 1;
                    color: rgb(255 255 255 / var(--tw-text-opacity, 1))
                }

                .dark\:hover\:text-white\/70:hover {
                    color: #ffffffb3
                }

                .dark\:hover\:text-white\/80:hover {
                    color: #fffc
                }

                .dark\:hover\:ring-zinc-700:hover {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity, 1))
                }

                .dark\:focus\:border-blue-700:focus {
                    --tw-border-opacity: 1;
                    border-color: rgb(29 78 216 / var(--tw-border-opacity, 1))
                }

                .dark\:focus\:border-blue-800:focus {
                    --tw-border-opacity: 1;
                    border-color: rgb(30 64 175 / var(--tw-border-opacity, 1))
                }

                .dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity, 1))
                }

                .dark\:focus-visible\:ring-white:focus-visible {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity, 1))
                }

                .dark\:active\:bg-gray-700:active {
                    --tw-bg-opacity: 1;
                    background-color: rgb(55 65 81 / var(--tw-bg-opacity, 1))
                }

                .dark\:active\:text-gray-300:active {
                    --tw-text-opacity: 1;
                    color: rgb(209 213 219 / var(--tw-text-opacity, 1))
                }
            }
        </style>
    @endif
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        <!-- <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" alt="Laravel background" /> -->
        <div
            class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                    <div class="flex lg:justify-center lg:col-start-2" style="width:40%;margin-left:100px;">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 226.77 164.94"
                            style="enable-background:new 0 0 226.77 164.94;" xml:space="preserve">
                            <style type="text/css">
                                .unep_0 {
                                    fill: #009EE2;
                                }
                            </style>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <path class="unep_0"
                                                        d="M178.88,57.2c-8.97-2.71-15.5-11.04-15.5-20.89c0-1.78,0.21-3.51,0.61-5.16l14.17,1.82
                                                        c0,0,5.44,0.24,5.24,9.87C183.21,52.18,178.88,57.2,178.88,57.2z"></path>
                                                    <path class="unep_0"
                                                        d="M191.55,57.2c8.97-2.71,15.5-11.04,15.5-20.89c0-1.78-0.21-3.51-0.61-5.16l-14.17,1.82
                                                        c0,0-5.44,0.24-5.24,9.87C187.22,52.18,191.55,57.2,191.55,57.2z"></path>
                                                    <path class="unep_0" d="M185.21,20.69c1.82,0,3.3,1.48,3.3,3.3c0,1.42-0.98,2.48-2.16,3.11c-0.14,0.08-0.28,0.14-0.25,0.37
                                                        c0.03,0.23,0.71,0.36,1,0.43l19.05,2.21c-2.67-9.03-11.03-15.62-20.93-15.62h-0.03c-9.9,0-18.25,6.59-20.93,15.62l19.05-2.21
                                                        c0.29-0.07,0.97-0.19,1-0.43c0.03-0.22-0.11-0.29-0.25-0.37c-1.18-0.63-2.16-1.69-2.16-3.11
                                                        C181.91,22.17,183.39,20.69,185.21,20.69L185.21,20.69z"></path>
                                                </g>
                                                <g>
                                                    <path class="unep_0"
                                                        d="M193.92,72.65l1.29-0.81c0,0-6.12-8.3-19.82-8.3c-7.01,0-10.64,2.82-15.55,2.82c0,0-2.01,0.24-3.95-0.97
                                                        c0,0,2.34,3.38,10.8,3.38c6.2,0,10.64-3.63,14.99-3.63C187.63,65.15,192.06,70.47,193.92,72.65z">
                                                    </path>
                                                </g>
                                                <g>
                                                    <path class="unep_0"
                                                        d="M174.9,72.65l-1.29-0.81c0,0,6.12-8.3,19.82-8.3c7.01,0,10.64,2.82,15.55,2.82c0,0,2.01,0.24,3.95-0.97
                                                        c0,0-2.34,3.38-10.8,3.38c-6.2,0-10.64-3.63-14.99-3.63C181.19,65.15,176.75,70.47,174.9,72.65z">
                                                    </path>
                                                </g>
                                                <path class="unep_0"
                                                    d="M168.37,62.82c-0.24,0.64-2.86-0.12-4.63,0.4c-1.98,0.59-12.45,1.85-17.04-9.02c0,0,4.35,4.67,7.74,5
                                                    c3.38,0.32,7.09,1.13,10.23,2.9l0.73,0.16c0,0-0.1-0.32-0.4-0.48c-0.41-0.22-3.67-1.28-5.24-6.45
                                                    c-0.81-2.66-0.64-4.59-0.97-5.96c0,0,3.55,3.95,5,6.45C165.23,58.31,165.39,61.13,168.37,62.82z">
                                                </path>
                                                <path class="unep_0"
                                                    d="M157.7,57.34c-0.26,0.26-0.93-0.16-1.17-0.28c-0.24-0.12-1.98-0.92-4.96-1.97
                                                    c-2.94-1.05-8.42-5.68-7.9-13.62c0,0,0.77,2.98,3.02,4.96c2.26,1.97,3.06,2.22,4.43,3.83c1.37,1.61,4.47,5.28,4.59,5.24
                                                    c0.12-0.04,0.16-0.24-0.08-0.44c-0.24-0.2-1.05-2.22-1.57-2.9c-0.52-0.68-2.09-5.4,0.2-11.2c0,0,2.46,4.23,2.3,8.5
                                                    c-0.16,4.27-0.36,3.26,0.68,6.81C157.25,56.25,157.82,57.22,157.7,57.34z"></path>
                                                <path class="unep_0"
                                                    d="M150.85,46.99c-0.15,0.15-0.77-0.77-1.25-1.61c-0.48-0.85-3.87-4.47-4.31-5.2
                                                    c-0.44-0.73-4.23-5.32-1.37-12.13c0,0,0.28-0.08,0.28,1.53s1.49,5.2,2.7,6.73c1.21,1.53,2.3,3.99,2.54,6.61
                                                    c0,0,0.16,0.48,0.36,0.52s0.2-0.48,0.2-0.48s-0.16-2.42-0.16-4.07c0-1.65,0.73-4.47,2.3-6.08c0,0,0.73-0.81,1.17-1.77
                                                    c0,0,0.28-0.64,0.68-0.97c0,0,0.32,4.63-1.25,8.94c-1.57,4.31-2.09,5.04-1.85,7.37C150.89,46.38,150.93,46.9,150.85,46.99z">
                                                </path>
                                                <path class="unep_0" d="M148.19,34.25c-0.16,0-0.28-0.56-0.36-1.01c-0.08-0.44-0.56-3.02-0.89-3.59
                                                    c-0.32-0.56-1.53-3.14-1.57-6.16c-0.04-3.02,1.33-7.13,4.39-10.39c0,0-0.12,0.97-0.93,3.1c-0.81,2.14-0.32,4.15-0.24,4.51
                                                    c0.08,0.36,0.36,2.86,0.36,4.03c0,0.93-0.24,4.11-0.44,4.75c0,0-0.08,0.44,0.08,0.44c0.16,0,0.32-0.36,0.32-0.36
                                                    s0.16-2.5,2.01-4.75c1.85-2.26,5.2-3.63,5.72-4.63c0,0-0.24,3.55-4.15,7.69c-3.48,3.7-2.46,1.81-3.59,4.83
                                                    c0,0-0.48,1.13-0.48,1.37C148.43,34.34,148.19,34.25,148.19,34.25z">
                                                </path>
                                                <path class="unep_0" d="M150.33,22.33c0,0-0.08-0.48,0.52-1.57c0.6-1.09-0.04-3.02,0.77-5.84s2.3-7.65,7.98-10.55
                                                    c0,0-0.56,0.52-0.85,0.93c-0.28,0.4-1.81,3.3-2.26,5.32c-0.44,2.01-2.38,5.4-3.1,6.16c-0.73,0.77-0.4,0.85-0.4,0.85
                                                    s0.36-0.08,0.73-0.64c0.36-0.56,2.22-2.66,4.27-3.14c2.05-0.48,5.32-1.45,5.52-1.65c0,0-3.55,3.63-6.81,5.48
                                                    s-3.63,1.29-5.56,3.79C151.13,21.44,150.49,22.33,150.33,22.33z">
                                                </path>
                                                <path class="unep_0"
                                                    d="M158.14,11.57c0,0,0-0.32,0.6-0.89c0.6-0.56,1.21-2.26,2.26-3.83c1.05-1.57,3.42-5.68,9.59-6.65
                                                    c0,0-1.85,1.37-2.14,1.81c-0.28,0.44-2.09,2.82-2.9,3.63s-3.1,2.5-3.87,2.86c0,0-0.4,0.32-0.32,0.44
                                                    c0.08,0.12,0.48-0.12,0.48-0.12s2.14-1.65,4.71-1.73c2.58-0.08,5.28,0.04,5.68,0.08c0,0-2.42,1.65-8.18,2.7
                                                    c-5.76,1.05-4.67,1.09-5.56,1.65C158.5,11.53,158.3,11.69,158.14,11.57z"></path>
                                                <path class="unep_0"
                                                    d="M168.41,4.89c0,0,0.12-0.32,1.05-0.6c0.93-0.28,0.85-1.17,3.67-2.66c2.82-1.49,5.76-2.18,8.74-0.93
                                                    c0,0-1.25,0.16-1.45,0.24s-2.34,0.64-2.94,0.97c-0.6,0.32-3.71,1.69-4.96,1.93c-1.25,0.24-0.64,0.32-0.64,0.32
                                                    s0.28,0.12,0.52,0.12c0.24,0,3.02-0.28,4.83,0.36c1.81,0.64,1.77,0.89,2.5,1.13c0.73,0.24,1.57,0.4,1.69,0.68
                                                    c0,0-1.81,0.16-2.9,0.16c-1.09,0-3.95-0.28-5.32-0.93c-1.37-0.64-2.94-0.93-3.46-0.81C169.22,5.01,168.58,5.01,168.41,4.89z">
                                                </path>
                                                <path class="unep_0" d="M179.86,3.48c0,0,0.12-0.16,0.93-0.32c0.81-0.16,1.01-0.64,2.9-1.05s4.83-0.77,7.53,1.09
                                                    c0,0-1.65-0.04-2.01-0.04s-3.5,0.56-4.23,0.56c-0.73,0-2.18-0.32-2.38-0.08c-0.2,0.24,1.33,0.56,1.57,0.64
                                                    c0.24,0.08,1.33,0.16,2.7,1.49c1.37,1.33,2.34,2.05,2.5,2.14c0,0-4.03-0.93-5.04-1.49s-2.74-2.3-3.02-2.42
                                                    C181.02,3.88,179.86,3.48,179.86,3.48z"></path>
                                                <path class="unep_0" d="M189.16,5.13c0,0,2.54-0.08,4.39,1.09s3.34,2.7,3.5,3.63c0,0-1.05-0.89-1.73-1.09
                                                    c-0.69-0.2-2.62-1.29-3.02-1.53S189.56,5.49,189.16,5.13z"></path>
                                                <path class="unep_0"
                                                    d="M201.09,63.26c0,0,0.36-0.36,1.57-1.41c1.21-1.05,1.53-2.58,2.86-4.96c1.33-2.38,2.46-4.03,5.16-6.45
                                                    c0,0-0.48,1.81-0.52,2.38c-0.04,0.56-0.48,3.71-2.01,5.52c-1.53,1.81-1.61,2.22-3.38,3.3c0,0-0.69,0.48-0.64,0.64
                                                    c0.04,0.16,1.21-0.04,1.21-0.04s1.29-0.48,1.69-0.73c0.4-0.24,2.22-1.17,2.94-1.45c0.73-0.28,1.33-0.56,2.94-1.05
                                                    c1.61-0.48,7.45-1.97,9.75-5.68c0,0-0.68,2.18-1.53,3.18c-0.85,1.01-5.64,7.33-12.29,7.21c0,0-2.62-0.2-3.99-0.44
                                                    c-1.37-0.24-1.85-0.24-2.05-0.2C202.58,63.14,201.29,63.38,201.09,63.26z"></path>
                                                <path class="unep_0" d="M215.95,40.66c0,0-2.5,3.91-3.06,9.55c-0.56,5.64,0.4,3.95-0.52,6.45c0,0-0.32,0.64-0.2,0.68
                                                    c0.12,0.04,0.6-0.24,2.38-1.33c1.77-1.09,3.51-0.77,7.29-4.39c3.79-3.63,4.55-10.84,4.63-11.44c0,0-0.56,0.56-0.85,1.53
                                                    c-0.28,0.97-0.89,1.73-1.01,1.85c-0.12,0.12-4.23,4.63-4.71,5.04c-0.48,0.4-2.9,3.34-3.42,4.19c-0.52,0.85-2.05,2.38-2.34,2.26
                                                    c0,0,0.04-0.36,0.16-0.64c0.12-0.28,1.25-1.81,1.73-3.59c0.48-1.77,0.6-2.86,0.64-3.99C216.72,45.7,215.99,41.55,215.95,40.66z
                                                    "></path>
                                                <path class="unep_0"
                                                    d="M219.34,46.1c0,0-0.25-0.59-0.04-1.01c0.12-0.24,0.24-2.18-0.48-3.75c-0.72-1.57-2.3-5.92-2.18-8.82
                                                    c0.12-2.9,0.44-3.3,0.44-3.3s0.81,2.38,1.05,2.78c0.24,0.4,2.66,4.67,2.46,7.01c-0.2,2.34-0.32,3.06-0.2,3.1
                                                    c0.12,0.04,0.4-0.28,0.44-0.56c0.04-0.28,0.44-1.89,1.21-3.79c0.77-1.89,3.87-6.08,4.55-8.86c0,0,1.01,4.83-1.69,9.35
                                                    c-2.7,4.51-2.98,3.5-4.11,5.56C219.66,45.86,219.5,46.1,219.34,46.1z"></path>
                                                <path class="unep_0" d="M221.79,33.33c-0.2-0.04-0.08-1.89-0.56-2.5c-0.48-0.6-4.63-5.52-5.52-10.43c0,0,2.62,2.66,3.06,2.94
                                                    c0.44,0.28,2.22,2.05,2.74,3.59c0.52,1.53,0.4,2.82,0.6,2.86c0.2,0.04,0.2-1.69,0.2-1.69s0.04-3.38,0.32-5
                                                    c0.28-1.61,1.01-4.31,0.69-5.68c0,0,1.57,2.5,1.49,6.04c-0.08,3.55-1.57,6.37-1.77,6.77c-0.2,0.4-0.77,2.14-0.77,2.5
                                                    C222.28,33.09,221.79,33.33,221.79,33.33z"></path>
                                                <path class="unep_0" d="M216.88,8.11c0,0,5.44,3.22,4.59,14.02c0,0,0,0.48-0.32-0.04c-0.32-0.52-1.49-2.01-2.01-2.34
                                                    c-0.52-0.32-5.36-3.26-7.41-7.78c0,0,0.32-0.08,0.81,0.36c0.48,0.44,1.97,1.21,2.22,1.33c0.24,0.12,1.93,0.56,3.18,1.93
                                                    c1.25,1.37,1.69,2.38,2.05,3.18c0,0,0.36,0.28,0.12-0.52c-0.24-0.81-0.28-1.33-0.93-2.34c-0.64-1.01-1.21-2.82-1.29-4.07
                                                    C217.81,10.61,217.44,8.75,216.88,8.11z"></path>
                                                <path class="unep_0"
                                                    d="M215.95,11.9c0,0,0.12-0.73-0.4-1.73c-0.52-1.01-0.11-2.13-1.77-4.79c-0.93-1.49-4.15-2.66-4.15-2.66
                                                    s0.93,1.29,1.53,2.01c0.6,0.73,0.81,1.25,1.01,1.61s1.32,1.44,1.73,2.05c0.08,0.12,0.24,0.44,0.24,0.64s-0.44-0.12-0.56-0.24
                                                    c-0.12-0.12-2.09-1.61-3.34-1.85c-1.25-0.24-3.63-0.48-4.27-0.81c0,0,2.82,2.54,5.88,3.3C214.9,10.2,215.95,11.9,215.95,11.9z">
                                                </path>
                                                <path class="unep_0" d="M209.59,5.25c0,0-2.82-3.83-7.86-3.75c0,0,0.28,0.28,0.85,0.4c0.56,0.12,1.57,1.13,2.09,1.45
                                                    C205.2,3.68,206.28,4.48,209.59,5.25z"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                                <path class="unep_0" d="M54.96,0v47.33c0,4.14-0.69,7.79-2.07,10.96c-1.38,3.17-3.28,5.82-5.71,7.95c-2.43,2.13-5.33,3.74-8.69,4.83
                                    c-3.37,1.08-7.03,1.63-11.01,1.63c-4.01,0-7.69-0.54-11.06-1.63c-3.37-1.08-6.26-2.69-8.69-4.83c-2.43-2.13-4.33-4.79-5.69-7.95
                                    C0.68,55.12,0,51.47,0,47.33V0h14.78v47.33c0,4.7,1.12,8.12,3.37,10.27c2.25,2.15,5.36,3.23,9.33,3.23c4.01,0,7.12-1.07,9.33-3.23
                                    c2.22-2.15,3.32-5.57,3.32-10.27V0H54.96z"></path>
                                <path class="unep_0"
                                    d="M125.39,71.71h-14.77L81.86,24.53v47.18H67.08V0h14.77l28.81,47.28V0h14.73V71.71z">
                                </path>
                                <g>
                                    <path class="unep_0"
                                        d="M10.66,118.03c-3.1,0-5.63-0.97-7.58-2.91s-2.92-4.53-2.92-7.76v-0.56c0-2.17,0.41-4.1,1.23-5.81
                                        c0.82-1.71,1.98-3.03,3.49-3.95c1.5-0.92,3.22-1.39,5.15-1.39c2.89,0,5.17,0.93,6.83,2.79c1.66,1.86,2.49,4.5,2.49,7.92v2.35H5.89
                                        c0.18,1.41,0.73,2.54,1.65,3.39c0.92,0.85,2.08,1.28,3.49,1.28c2.18,0,3.88-0.8,5.1-2.41l2.77,3.17
                                        c-0.85,1.22-1.99,2.18-3.44,2.86C14.02,117.69,12.42,118.03,10.66,118.03z M10.02,100.3c-1.12,0-2.03,0.39-2.73,1.16
                                        c-0.7,0.78-1.14,1.88-1.34,3.33h7.86v-0.46c-0.03-1.28-0.37-2.27-1.02-2.97C12.14,100.65,11.22,100.3,10.02,100.3z">
                                    </path>
                                    <path class="unep_0"
                                        d="M28.01,96.06l0.18,2.49c1.51-1.93,3.54-2.89,6.08-2.89c2.24,0,3.91,0.67,5,2.01s1.66,3.35,1.68,6.02v13.94
                                        H35.3v-13.8c0-1.22-0.26-2.11-0.78-2.66c-0.52-0.55-1.39-0.83-2.6-0.83c-1.59,0-2.78,0.69-3.58,2.07v15.22h-5.65V96.06H28.01z">
                                    </path>
                                    <path class="unep_0"
                                        d="M53.39,110.59l3.93-14.54h5.9l-7.14,21.58h-5.39l-7.14-21.58h5.9L53.39,110.59z">
                                    </path>
                                    <path class="unep_0" d="M65.91,90.47c0-0.86,0.28-1.58,0.85-2.14c0.57-0.56,1.34-0.84,2.32-0.84c0.96,0,1.73,0.28,2.31,0.84
                                        c0.57,0.56,0.86,1.27,0.86,2.14c0,0.88-0.29,1.59-0.87,2.15c-0.58,0.56-1.35,0.84-2.3,0.84c-0.95,0-1.72-0.28-2.3-0.84
                                        C66.2,92.07,65.91,91.35,65.91,90.47z M71.91,117.63h-5.67V96.06h5.67V117.63z">
                                    </path>
                                    <path class="unep_0" d="M88.69,101.46c-0.77-0.11-1.45-0.16-2.03-0.16c-2.14,0-3.54,0.74-4.2,2.21v14.12h-5.65V96.06h5.34l0.16,2.57
                                        c1.13-1.98,2.7-2.97,4.71-2.97c0.63,0,1.21,0.09,1.76,0.26L88.69,101.46z"></path>
                                    <path class="unep_0"
                                        d="M90.07,106.65c0-2.14,0.4-4.05,1.21-5.72c0.81-1.68,1.97-2.97,3.49-3.89c1.52-0.92,3.28-1.38,5.29-1.38
                                        c2.85,0,5.18,0.89,6.99,2.67c1.81,1.78,2.81,4.2,3.02,7.26l0.04,1.48c0,3.31-0.91,5.97-2.72,7.97c-1.81,2-4.24,3-7.29,3
                                        c-3.05,0-5.48-1-7.3-2.99c-1.82-1.99-2.73-4.71-2.73-8.14V106.65z M95.72,107.05c0,2.05,0.38,3.62,1.13,4.7
                                        c0.76,1.09,1.84,1.63,3.25,1.63c1.37,0,2.44-0.54,3.21-1.61c0.77-1.07,1.15-2.79,1.15-5.14c0-2.01-0.38-3.57-1.15-4.67
                                        c-0.77-1.1-1.85-1.66-3.25-1.66c-1.38,0-2.45,0.55-3.21,1.65C96.1,103.05,95.72,104.75,95.72,107.05z">
                                    </path>
                                    <path class="unep_0"
                                        d="M119.03,96.06l0.18,2.49c1.51-1.93,3.54-2.89,6.08-2.89c2.24,0,3.91,0.67,5,2.01s1.66,3.35,1.68,6.02v13.94
                                        h-5.65v-13.8c0-1.22-0.26-2.11-0.78-2.66c-0.52-0.55-1.39-0.83-2.6-0.83c-1.59,0-2.78,0.69-3.58,2.07v15.22h-5.65V96.06H119.03z">
                                    </path>
                                    <path class="unep_0"
                                        d="M141.79,96.06l0.18,2.41c1.5-1.88,3.53-2.81,6.08-2.81c2.72,0,4.59,1.1,5.61,3.29
                                        c1.48-2.19,3.6-3.29,6.35-3.29c2.29,0,4,0.68,5.12,2.04c1.12,1.36,1.68,3.41,1.68,6.15v13.78h-5.67v-13.76
                                        c0-1.22-0.23-2.12-0.7-2.68c-0.47-0.57-1.3-0.85-2.48-0.85c-1.69,0-2.87,0.82-3.52,2.47l0.02,14.82h-5.65v-13.74
                                        c0-1.25-0.24-2.15-0.72-2.71c-0.48-0.56-1.3-0.84-2.46-0.84c-1.6,0-2.76,0.68-3.48,2.03v15.26h-5.65V96.06H141.79z">
                                    </path>
                                    <path class="unep_0"
                                        d="M181.13,118.03c-3.1,0-5.63-0.97-7.58-2.91c-1.95-1.94-2.92-4.53-2.92-7.76v-0.56c0-2.17,0.41-4.1,1.23-5.81
                                        c0.82-1.71,1.98-3.03,3.49-3.95c1.5-0.92,3.22-1.39,5.15-1.39c2.89,0,5.17,0.93,6.83,2.79c1.66,1.86,2.49,4.5,2.49,7.92v2.35
                                        h-13.47c0.18,1.41,0.73,2.54,1.65,3.39c0.92,0.85,2.08,1.28,3.49,1.28c2.18,0,3.88-0.8,5.1-2.41l2.77,3.17
                                        c-0.85,1.22-1.99,2.18-3.44,2.86C184.5,117.69,182.89,118.03,181.13,118.03z M180.49,100.3c-1.12,0-2.03,0.39-2.73,1.16
                                        c-0.7,0.78-1.14,1.88-1.34,3.33h7.86v-0.46c-0.03-1.28-0.37-2.27-1.02-2.97C182.61,100.65,181.69,100.3,180.49,100.3z">
                                    </path>
                                    <path class="unep_0"
                                        d="M198.48,96.06l0.18,2.49c1.51-1.93,3.54-2.89,6.08-2.89c2.24,0,3.91,0.67,5,2.01s1.66,3.35,1.68,6.02v13.94
                                        h-5.65v-13.8c0-1.22-0.26-2.11-0.78-2.66c-0.52-0.55-1.39-0.83-2.6-0.83c-1.59,0-2.78,0.69-3.58,2.07v15.22h-5.65V96.06H198.48z">
                                    </path>
                                    <path class="unep_0" d="M222.71,90.75v5.31h3.62v4.23h-3.62v10.77c0,0.8,0.15,1.37,0.45,1.71c0.3,0.35,0.87,0.52,1.72,0.52
                                        c0.62,0,1.18-0.05,1.66-0.14v4.37c-1.11,0.35-2.25,0.52-3.42,0.52c-3.96,0-5.98-2.04-6.06-6.12v-11.63h-3.09v-4.23h3.09v-5.31
                                        H222.71z"></path>
                                </g>
                                <g>
                                    <path class="unep_0" d="M19.97,145.86c0,3.32-0.74,5.99-2.22,7.99c-1.48,2-3.48,3-5.99,3c-2.14,0-3.87-0.76-5.18-2.27v10.17H0.93
                                        v-29.87h5.24l0.2,2.11c1.37-1.68,3.15-2.51,5.36-2.51c2.61,0,4.63,0.99,6.08,2.95c1.45,1.97,2.17,4.68,2.17,8.14V145.86z
                                         M14.32,145.44c0-2.01-0.35-3.56-1.05-4.65c-0.7-1.09-1.71-1.64-3.04-1.64c-1.77,0-2.99,0.69-3.66,2.07v8.84
                                        c0.69,1.42,1.92,2.13,3.69,2.13C12.97,152.2,14.32,149.94,14.32,145.44z"></path>
                                    <path class="unep_0" d="M35.6,140.27c-0.77-0.11-1.45-0.16-2.03-0.16c-2.14,0-3.54,0.74-4.2,2.21v14.12h-5.65v-21.58h5.34l0.16,2.57
                                        c1.13-1.98,2.7-2.97,4.71-2.97c0.63,0,1.21,0.09,1.76,0.26L35.6,140.27z"></path>
                                    <path class="unep_0"
                                        d="M36.97,145.46c0-2.14,0.4-4.05,1.21-5.72c0.81-1.68,1.97-2.97,3.49-3.89c1.52-0.92,3.28-1.38,5.29-1.38
                                        c2.85,0,5.18,0.89,6.99,2.67c1.81,1.78,2.81,4.2,3.02,7.26l0.04,1.48c0,3.31-0.91,5.97-2.72,7.97c-1.81,2-4.24,3-7.29,3
                                        s-5.48-1-7.3-2.99c-1.82-1.99-2.73-4.71-2.73-8.14V145.46z M42.62,145.87c0,2.05,0.38,3.62,1.13,4.7
                                        c0.76,1.09,1.84,1.63,3.25,1.63c1.37,0,2.44-0.54,3.21-1.61c0.77-1.07,1.15-2.79,1.15-5.14c0-2.01-0.38-3.57-1.15-4.67
                                        c-0.77-1.1-1.85-1.66-3.25-1.66c-1.38,0-2.45,0.55-3.21,1.65C43,141.86,42.62,143.56,42.62,145.87z">
                                    </path>
                                    <path class="unep_0" d="M59.91,145.5c0-3.31,0.77-5.98,2.31-8c1.55-2.02,3.63-3.03,6.25-3.03c2.32,0,4.12,0.81,5.42,2.43l0.23-2.03
                                        h5.12v20.86c0,1.89-0.42,3.53-1.26,4.93c-0.84,1.4-2.02,2.46-3.55,3.19s-3.31,1.1-5.36,1.1c-1.55,0-3.06-0.32-4.54-0.95
                                        c-1.47-0.63-2.59-1.45-3.34-2.44l2.5-3.51c1.41,1.61,3.11,2.41,5.12,2.41c1.5,0,2.67-0.41,3.5-1.23c0.83-0.82,1.25-1.98,1.25-3.48
                                        v-1.16c-1.3,1.5-3.02,2.25-5.14,2.25c-2.54,0-4.6-1.01-6.17-3.04c-1.57-2.03-2.36-4.72-2.36-8.07V145.5z M65.56,145.93
                                        c0,1.96,0.38,3.49,1.15,4.6c0.77,1.11,1.82,1.67,3.17,1.67c1.72,0,2.95-0.66,3.69-1.98v-9.09c-0.76-1.32-1.97-1.98-3.66-1.98
                                        c-1.35,0-2.42,0.57-3.2,1.7C65.95,141.98,65.56,143.68,65.56,145.93z"></path>
                                    <path class="unep_0" d="M95.71,140.27c-0.77-0.11-1.45-0.16-2.03-0.16c-2.14,0-3.54,0.74-4.2,2.21v14.12h-5.65v-21.58h5.34l0.16,2.57
                                        c1.13-1.98,2.7-2.97,4.71-2.97c0.63,0,1.21,0.09,1.76,0.26L95.71,140.27z"></path>
                                    <path class="unep_0"
                                        d="M110.34,156.45c-0.26-0.52-0.45-1.16-0.57-1.93c-1.37,1.56-3.15,2.33-5.34,2.33c-2.07,0-3.79-0.61-5.15-1.83
                                        c-1.36-1.22-2.04-2.77-2.04-4.63c0-2.29,0.83-4.04,2.49-5.26c1.66-1.22,4.06-1.84,7.2-1.86h2.6v-1.24c0-1-0.25-1.8-0.75-2.39
                                        c-0.5-0.6-1.29-0.9-2.38-0.9c-0.95,0-1.7,0.23-2.24,0.7c-0.54,0.46-0.81,1.1-0.81,1.91h-5.65c0-1.25,0.38-2.41,1.13-3.47
                                        c0.76-1.07,1.83-1.9,3.21-2.5c1.38-0.61,2.93-0.91,4.65-0.91c2.61,0,4.68,0.67,6.21,2.01c1.53,1.34,2.3,3.21,2.3,5.63v9.35
                                        c0.01,2.05,0.29,3.6,0.84,4.65v0.34H110.34z M105.67,152.44c0.83,0,1.6-0.19,2.31-0.57c0.7-0.38,1.22-0.89,1.56-1.53v-3.71h-2.11
                                        c-2.83,0-4.33,1-4.52,2.99l-0.02,0.34c0,0.72,0.25,1.31,0.74,1.77C104.13,152.21,104.81,152.44,105.67,152.44z">
                                    </path>
                                    <path class="unep_0"
                                        d="M125.09,134.87l0.18,2.41c1.5-1.88,3.53-2.81,6.08-2.81c2.72,0,4.59,1.1,5.61,3.29
                                        c1.48-2.19,3.6-3.29,6.35-3.29c2.29,0,4,0.68,5.12,2.04c1.12,1.36,1.68,3.41,1.68,6.15v13.78h-5.67v-13.76
                                        c0-1.22-0.23-2.12-0.7-2.68c-0.47-0.57-1.3-0.85-2.48-0.85c-1.69,0-2.87,0.82-3.52,2.47l0.02,14.82h-5.65v-13.74
                                        c0-1.25-0.24-2.15-0.72-2.71c-0.48-0.56-1.3-0.84-2.46-0.84c-1.6,0-2.76,0.68-3.48,2.03v15.26h-5.65v-21.58H125.09z">
                                    </path>
                                    <path class="unep_0"
                                        d="M159.99,134.87l0.18,2.41c1.5-1.88,3.53-2.81,6.08-2.81c2.72,0,4.59,1.1,5.61,3.29
                                        c1.48-2.19,3.6-3.29,6.35-3.29c2.29,0,4,0.68,5.12,2.04c1.12,1.36,1.68,3.41,1.68,6.15v13.78h-5.67v-13.76
                                        c0-1.22-0.23-2.12-0.7-2.68c-0.47-0.57-1.3-0.85-2.48-0.85c-1.69,0-2.87,0.82-3.52,2.47l0.02,14.82h-5.65v-13.74
                                        c0-1.25-0.24-2.15-0.72-2.71c-0.48-0.56-1.3-0.84-2.46-0.84c-1.6,0-2.76,0.68-3.48,2.03v15.26h-5.65v-21.58H159.99z">
                                    </path>
                                    <path class="unep_0"
                                        d="M199.33,156.84c-3.1,0-5.63-0.97-7.58-2.91c-1.95-1.94-2.92-4.53-2.92-7.76v-0.56c0-2.17,0.41-4.1,1.23-5.81
                                        c0.82-1.71,1.98-3.03,3.49-3.95c1.5-0.92,3.22-1.39,5.15-1.39c2.89,0,5.17,0.93,6.83,2.79s2.49,4.5,2.49,7.92v2.35h-13.47
                                        c0.18,1.41,0.73,2.54,1.65,3.39c0.92,0.85,2.08,1.28,3.49,1.28c2.18,0,3.88-0.8,5.1-2.41l2.77,3.17
                                        c-0.85,1.22-1.99,2.18-3.44,2.86C202.7,156.5,201.09,156.84,199.33,156.84z M198.69,139.12c-1.12,0-2.03,0.39-2.73,1.16
                                        c-0.7,0.78-1.14,1.88-1.34,3.33h7.86v-0.46c-0.03-1.28-0.37-2.27-1.02-2.97C200.81,139.47,199.89,139.12,198.69,139.12z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    @if (Route::has('login'))
                        <nav class="-mx-3 flex flex-1 justify-end">
                            @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                    Dashboard
                                </a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                    Log in
                                </a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                        Register
                                    </a>
                                @endif
                            @endauth
                        </nav>
                    @endif
                </header>

                <main class="mt-6">
                    <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                        <a href="https://laravel.com/docs" id="docs-card"
                            class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3 lg:p-10 lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                            <div id="screenshot-container" class="relative flex w-full flex-1 items-stretch">
                                <img src="https://laravel.com/assets/img/welcome/docs-light.svg"
                                    alt="Laravel documentation screenshot"
                                    class="aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.06)] dark:hidden"
                                    onerror="
                                            document.getElementById('screenshot-container').classList.add('!hidden');
                                            document.getElementById('docs-card').classList.add('!row-span-1');
                                            document.getElementById('docs-card-content').classList.add('!flex-row');
                                            document.getElementById('background').classList.add('!hidden');
                                        " />
                                <img src="https://laravel.com/assets/img/welcome/docs-dark.svg"
                                    alt="Laravel documentation screenshot"
                                    class="hidden aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.25)] dark:block" />
                                <div
                                    class="absolute -bottom-16 -left-16 h-40 w-[calc(100%_+_8rem)] bg-gradient-to-b from-transparent via-white to-white dark:via-zinc-900 dark:to-zinc-900">
                                </div>
                            </div>

                            <div class="relative flex items-center gap-6 lg:items-end">
                                <div id="docs-card-content" class="flex items-start gap-6 lg:flex-col">
                                    <div
                                        class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                        <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24">
                                            <path fill="#FF2D20"
                                                d="M23 4a1 1 0 0 0-1.447-.894L12.224 7.77a.5.5 0 0 1-.448 0L2.447 3.106A1 1 0 0 0 1 4v13.382a1.99 1.99 0 0 0 1.105 1.79l9.448 4.728c.14.065.293.1.447.1.154-.005.306-.04.447-.105l9.453-4.724a1.99 1.99 0 0 0 1.1-1.789V4ZM3 6.023a.25.25 0 0 1 .362-.223l7.5 3.75a.251.251 0 0 1 .138.223v11.2a.25.25 0 0 1-.362.224l-7.5-3.75a.25.25 0 0 1-.138-.22V6.023Zm18 11.2a.25.25 0 0 1-.138.224l-7.5 3.75a.249.249 0 0 1-.329-.099.249.249 0 0 1-.033-.12V9.772a.251.251 0 0 1 .138-.224l7.5-3.75a.25.25 0 0 1 .362.224v11.2Z" />
                                            <path fill="#FF2D20"
                                                d="m3.55 1.893 8 4.048a1.008 1.008 0 0 0 .9 0l8-4.048a1 1 0 0 0-.9-1.785l-7.322 3.706a.506.506 0 0 1-.452 0L4.454.108a1 1 0 0 0-.9 1.785H3.55Z" />
                                        </svg>
                                    </div>

                                    <div class="pt-3 sm:pt-5 lg:pt-0">
                                        <h2 class="text-xl font-semibold text-black dark:text-white">Documentation</h2>

                                        <p class="mt-4 text-sm/relaxed">
                                            Laravel has wonderful documentation covering every aspect of the framework.
                                            Whether you are a newcomer or have prior experience with Laravel, we
                                            recommend reading our documentation from beginning to end.
                                        </p>
                                    </div>
                                </div>

                                <svg class="size-6 shrink-0 stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                </svg>
                            </div>
                        </a>

                        <a href="https://laracasts.com"
                            class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                            <div
                                class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24">
                                    <g fill="#FF2D20">
                                        <path
                                            d="M24 8.25a.5.5 0 0 0-.5-.5H.5a.5.5 0 0 0-.5.5v12a2.5 2.5 0 0 0 2.5 2.5h19a2.5 2.5 0 0 0 2.5-2.5v-12Zm-7.765 5.868a1.221 1.221 0 0 1 0 2.264l-6.626 2.776A1.153 1.153 0 0 1 8 18.123v-5.746a1.151 1.151 0 0 1 1.609-1.035l6.626 2.776ZM19.564 1.677a.25.25 0 0 0-.177-.427H15.6a.106.106 0 0 0-.072.03l-4.54 4.543a.25.25 0 0 0 .177.427h3.783c.027 0 .054-.01.073-.03l4.543-4.543ZM22.071 1.318a.047.047 0 0 0-.045.013l-4.492 4.492a.249.249 0 0 0 .038.385.25.25 0 0 0 .14.042h5.784a.5.5 0 0 0 .5-.5v-2a2.5 2.5 0 0 0-1.925-2.432ZM13.014 1.677a.25.25 0 0 0-.178-.427H9.101a.106.106 0 0 0-.073.03l-4.54 4.543a.25.25 0 0 0 .177.427H8.4a.106.106 0 0 0 .073-.03l4.54-4.543ZM6.513 1.677a.25.25 0 0 0-.177-.427H2.5A2.5 2.5 0 0 0 0 3.75v2a.5.5 0 0 0 .5.5h1.4a.106.106 0 0 0 .073-.03l4.54-4.543Z" />
                                    </g>
                                </svg>
                            </div>

                            <div class="pt-3 sm:pt-5">
                                <h2 class="text-xl font-semibold text-black dark:text-white">Laracasts</h2>

                                <p class="mt-4 text-sm/relaxed">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript
                                    development. Check them out, see for yourself, and massively level up your
                                    development skills in the process.
                                </p>
                            </div>

                            <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laravel-news.com"
                            class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                            <div
                                class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24">
                                    <g fill="#FF2D20">
                                        <path
                                            d="M8.75 4.5H5.5c-.69 0-1.25.56-1.25 1.25v4.75c0 .69.56 1.25 1.25 1.25h3.25c.69 0 1.25-.56 1.25-1.25V5.75c0-.69-.56-1.25-1.25-1.25Z" />
                                        <path
                                            d="M24 10a3 3 0 0 0-3-3h-2V2.5a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2V20a3.5 3.5 0 0 0 3.5 3.5h17A3.5 3.5 0 0 0 24 20V10ZM3.5 21.5A1.5 1.5 0 0 1 2 20V3a.5.5 0 0 1 .5-.5h14a.5.5 0 0 1 .5.5v17c0 .295.037.588.11.874a.5.5 0 0 1-.484.625L3.5 21.5ZM22 20a1.5 1.5 0 1 1-3 0V9.5a.5.5 0 0 1 .5-.5H21a1 1 0 0 1 1 1v10Z" />
                                        <path
                                            d="M12.751 6.047h2a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-2A.75.75 0 0 1 12 7.3v-.5a.75.75 0 0 1 .751-.753ZM12.751 10.047h2a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-2A.75.75 0 0 1 12 11.3v-.5a.75.75 0 0 1 .751-.753ZM4.751 14.047h10a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-10A.75.75 0 0 1 4 15.3v-.5a.75.75 0 0 1 .751-.753ZM4.75 18.047h7.5a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-7.5A.75.75 0 0 1 4 19.3v-.5a.75.75 0 0 1 .75-.753Z" />
                                    </g>
                                </svg>
                            </div>

                            <div class="pt-3 sm:pt-5">
                                <h2 class="text-xl font-semibold text-black dark:text-white">Laravel News</h2>

                                <p class="mt-4 text-sm/relaxed">
                                    Laravel News is a community driven portal and newsletter aggregating all of the
                                    latest and most important news in the Laravel ecosystem, including new package
                                    releases and tutorials.
                                </p>
                            </div>

                            <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <div
                            class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                            <div
                                class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24">
                                    <g fill="#FF2D20">
                                        <path
                                            d="M16.597 12.635a.247.247 0 0 0-.08-.237 2.234 2.234 0 0 1-.769-1.68c.001-.195.03-.39.084-.578a.25.25 0 0 0-.09-.267 8.8 8.8 0 0 0-4.826-1.66.25.25 0 0 0-.268.181 2.5 2.5 0 0 1-2.4 1.824.045.045 0 0 0-.045.037 12.255 12.255 0 0 0-.093 3.86.251.251 0 0 0 .208.214c2.22.366 4.367 1.08 6.362 2.118a.252.252 0 0 0 .32-.079 10.09 10.09 0 0 0 1.597-3.733ZM13.616 17.968a.25.25 0 0 0-.063-.407A19.697 19.697 0 0 0 8.91 15.98a.25.25 0 0 0-.287.325c.151.455.334.898.548 1.328.437.827.981 1.594 1.619 2.28a.249.249 0 0 0 .32.044 29.13 29.13 0 0 0 2.506-1.99ZM6.303 14.105a.25.25 0 0 0 .265-.274 13.048 13.048 0 0 1 .205-4.045.062.062 0 0 0-.022-.07 2.5 2.5 0 0 1-.777-.982.25.25 0 0 0-.271-.149 11 11 0 0 0-5.6 2.815.255.255 0 0 0-.075.163c-.008.135-.02.27-.02.406.002.8.084 1.598.246 2.381a.25.25 0 0 0 .303.193 19.924 19.924 0 0 1 5.746-.438ZM9.228 20.914a.25.25 0 0 0 .1-.393 11.53 11.53 0 0 1-1.5-2.22 12.238 12.238 0 0 1-.91-2.465.248.248 0 0 0-.22-.187 18.876 18.876 0 0 0-5.69.33.249.249 0 0 0-.179.336c.838 2.142 2.272 4 4.132 5.353a.254.254 0 0 0 .15.048c1.41-.01 2.807-.282 4.117-.802ZM18.93 12.957l-.005-.008a.25.25 0 0 0-.268-.082 2.21 2.21 0 0 1-.41.081.25.25 0 0 0-.217.2c-.582 2.66-2.127 5.35-5.75 7.843a.248.248 0 0 0-.09.299.25.25 0 0 0 .065.091 28.703 28.703 0 0 0 2.662 2.12.246.246 0 0 0 .209.037c2.579-.701 4.85-2.242 6.456-4.378a.25.25 0 0 0 .048-.189 13.51 13.51 0 0 0-2.7-6.014ZM5.702 7.058a.254.254 0 0 0 .2-.165A2.488 2.488 0 0 1 7.98 5.245a.093.093 0 0 0 .078-.062 19.734 19.734 0 0 1 3.055-4.74.25.25 0 0 0-.21-.41 12.009 12.009 0 0 0-10.4 8.558.25.25 0 0 0 .373.281 12.912 12.912 0 0 1 4.826-1.814ZM10.773 22.052a.25.25 0 0 0-.28-.046c-.758.356-1.55.635-2.365.833a.25.25 0 0 0-.022.48c1.252.43 2.568.65 3.893.65.1 0 .2 0 .3-.008a.25.25 0 0 0 .147-.444c-.526-.424-1.1-.917-1.673-1.465ZM18.744 8.436a.249.249 0 0 0 .15.228 2.246 2.246 0 0 1 1.352 2.054c0 .337-.08.67-.23.972a.25.25 0 0 0 .042.28l.007.009a15.016 15.016 0 0 1 2.52 4.6.25.25 0 0 0 .37.132.25.25 0 0 0 .096-.114c.623-1.464.944-3.039.945-4.63a12.005 12.005 0 0 0-5.78-10.258.25.25 0 0 0-.373.274c.547 2.109.85 4.274.901 6.453ZM9.61 5.38a.25.25 0 0 0 .08.31c.34.24.616.561.8.935a.25.25 0 0 0 .3.127.631.631 0 0 1 .206-.034c2.054.078 4.036.772 5.69 1.991a.251.251 0 0 0 .267.024c.046-.024.093-.047.141-.067a.25.25 0 0 0 .151-.23A29.98 29.98 0 0 0 15.957.764a.25.25 0 0 0-.16-.164 11.924 11.924 0 0 0-2.21-.518.252.252 0 0 0-.215.076A22.456 22.456 0 0 0 9.61 5.38Z" />
                                    </g>
                                </svg>
                            </div>

                            <div class="pt-3 sm:pt-5">
                                <h2 class="text-xl font-semibold text-black dark:text-white">Vibrant Ecosystem</h2>

                                <p class="mt-4 text-sm/relaxed">
                                    Laravel's robust library of first-party tools and libraries, such as <a
                                        href="https://forge.laravel.com"
                                        class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white dark:focus-visible:ring-[#FF2D20]">Forge</a>,
                                    <a href="https://vapor.laravel.com"
                                        class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Vapor</a>,
                                    <a href="https://nova.laravel.com"
                                        class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Nova</a>,
                                    <a href="https://envoyer.io"
                                        class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Envoyer</a>,
                                    and <a href="https://herd.laravel.com"
                                        class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Herd</a>
                                    help you take your projects to the next level. Pair them with powerful open source
                                    libraries like <a href="https://laravel.com/docs/billing"
                                        class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Cashier</a>,
                                    <a href="https://laravel.com/docs/dusk"
                                        class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Dusk</a>,
                                    <a href="https://laravel.com/docs/broadcasting"
                                        class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Echo</a>,
                                    <a href="https://laravel.com/docs/horizon"
                                        class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Horizon</a>,
                                    <a href="https://laravel.com/docs/sanctum"
                                        class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Sanctum</a>,
                                    <a href="https://laravel.com/docs/telescope"
                                        class="rounded-sm underline hover:text-black focus:outline-none focus-visible:ring-1 focus-visible:ring-[#FF2D20] dark:hover:text-white">Telescope</a>,
                                    and more.
                                </p>
                            </div>
                        </div>
                    </div>
                </main>

                <br /><br /><br /><br /><br /><br />
                </main>
                <br />
                <footer class="relative isolate overflow-hidden rounded-lg" style="background: #00abf1;color: #fff;">
                    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
                        <div class="sm:flex sm:items-center sm:justify-between">
                            <img width="15%"
                                src="https://cm-email-assets.s3.amazonaws.com/images/ContactMonkey-User-6UxMsY6djehCD8AEd6y2iJ0Z65tawywoQZ23pdBWLaGPn19uKYjtnKANuRzwvjoiQ6QUpHE6KmmgCcucNJINakLPalDW0OZ1uDieqVjSEAmYwCMQej90M0pq2iapXPqC/UNEP_2019_English%20White.png"
                                class="" alt="UNEP Logo" />
                            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
                            </a>
                            <ul
                                class="flex flex-wrap items-center mb-6 text-sm font-medium text-white-500 sm:mb-0 dark:text-gray-400">
                                <li>
                                    <a href="#" class="hover:underline me-4 md:me-6">About</a>
                                </li>
                                <li>
                                    <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                                </li>
                                <li>
                                    <a href="#" class="hover:underline">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                        <span class="block text-sm text-white-500 sm:text-center dark:text-gray-400">© 2025 <a
                                href="/" class="hover:underline">UN Environment Programme</a>. All Rights
                            Reserved.</span>
                    </div>
                </footer>

            </div>
        </div>
    </div>
</body>

</html>
</div>
</div>
</div>
<script>
    $(function() {
        $('body').cookieWall({
            id: "{{ config('analytics.property_id') }}",
            website: {
                name: 'Briefs',
                url: "{{ config('app.url') }}"
            },
            lang: 'en',
            cookie: {
                name: 'ewadalertapp-cookie',
                days: 15,
                path: "{{ config('app.url') }}"
            },
        });
        $('a.reset').on('click', function(e) {
            e.preventDefault();
            document.cookie =
                'cookie-wall=;expires=Thu, 01 Jan 1970 00:00:00 GMT;path=/;SameSite=None;Secure'
            document.location.reload(true);
        });
    });
</script>
</body>

</html>
