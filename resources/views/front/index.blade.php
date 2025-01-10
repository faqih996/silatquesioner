<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Questioner</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('/resources/css/app.css') }}">

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
            *,
            ::after,
            ::before {
                box-sizing: border-box;
                border-width: 0;
                border-style: solid;
                border-color: #e5e7eb
            }

            ::after,
            ::before {
                --tw-content: ''
            }

            :host,
            html {
                line-height: 1.5;
                -webkit-text-size-adjust: 100%;
                -moz-tab-size: 4;
                tab-size: 4;
                font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
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
            pre,
            samp {
                font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
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
                color: inherit;
                margin: 0;
                padding: 0
            }

            button,
            select {
                text-transform: none
            }

            [type=button],
            [type=reset],
            [type=submit],
            button {
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
            dd,
            dl,
            figure,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            hr,
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

            menu,
            ol,
            ul {
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

            input::placeholder,
            textarea::placeholder {
                opacity: 1;
                color: #9ca3af
            }

            [role=button],
            button {
                cursor: pointer
            }

            :disabled {
                cursor: default
            }

            audio,
            canvas,
            embed,
            iframe,
            img,
            object,
            svg,
            video {
                display: block;
                vertical-align: middle
            }

            img,
            video {
                max-width: 100%;
                height: auto
            }

            [hidden] {
                display: none
            }

            *,
            ::before,
            ::after {
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
                --tw-ring-color: rgb(59 130 246 / 0.5);
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
                --tw-backdrop-sepia:
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
                --tw-ring-color: rgb(59 130 246 / 0.5);
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
                --tw-backdrop-sepia:
            }

            .absolute {
                position: absolute
            }

            .relative {
                position: relative
            }

            .-left-20 {
                left: -5rem
            }

            .top-0 {
                top: 0px
            }

            .-bottom-16 {
                bottom: -4rem
            }

            .-left-16 {
                left: -4rem
            }

            .-mx-3 {
                margin-left: -0.75rem;
                margin-right: -0.75rem
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

            .grid {
                display: grid
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

            .h-full {
                height: 100%
            }

            .min-h-screen {
                min-height: 100vh
            }

            .w-full {
                width: 100%
            }

            .w-\[calc\(100\%\+8rem\)\] {
                width: calc(100% + 8rem)
            }

            .w-auto {
                width: auto
            }

            .max-w-\[877px\] {
                max-width: 877px
            }

            .max-w-2xl {
                max-width: 42rem
            }

            .flex-1 {
                flex: 1 1 0%
            }

            .shrink-0 {
                flex-shrink: 0
            }

            .grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
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

            .gap-2 {
                gap: 0.5rem
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
                border-radius: 0.5rem
            }

            .rounded-md {
                border-radius: 0.375rem
            }

            .rounded-sm {
                border-radius: 0.125rem
            }

            .bg-\[\#FF2D20\]\/10 {
                background-color: rgb(255 45 32 / 0.1)
            }

            .bg-white {
                --tw-bg-opacity: 1;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity))
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

            .stroke-\[\#FF2D20\] {
                stroke: #FF2D20
            }

            .object-cover {
                object-fit: cover
            }

            .object-top {
                object-position: top
            }

            .p-6 {
                padding: 1.5rem
            }

            .px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .py-10 {
                padding-top: 2.5rem;
                padding-bottom: 2.5rem
            }

            .px-3 {
                padding-left: 0.75rem;
                padding-right: 0.75rem
            }

            .py-16 {
                padding-top: 4rem;
                padding-bottom: 4rem
            }

            .py-2 {
                padding-top: 0.5rem;
                padding-bottom: 0.5rem
            }

            .pt-3 {
                padding-top: 0.75rem
            }

            .text-center {
                text-align: center
            }

            .font-sans {
                font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji
            }

            .text-sm {
                font-size: 0.875rem;
                line-height: 1.25rem
            }

            .text-sm\/relaxed {
                font-size: 0.875rem;
                line-height: 1.625
            }

            .text-xl {
                font-size: 1.25rem;
                line-height: 1.75rem
            }

            .font-semibold {
                font-weight: 600
            }

            .text-black {
                --tw-text-opacity: 1;
                color: rgb(0 0 0 / var(--tw-text-opacity))
            }

            .text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .underline {
                -webkit-text-decoration-line: underline;
                text-decoration-line: underline
            }

            .antialiased {
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale
            }

            .shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\] {
                --tw-shadow: 0px 14px 34px 0px rgba(0, 0, 0, 0.08);
                --tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .ring-transparent {
                --tw-ring-color: transparent
            }

            .ring-white\/\[0\.05\] {
                --tw-ring-color: rgb(255 255 255 / 0.05)
            }

            .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\] {
                --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.06));
                filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
            }

            .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\] {
                --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.25));
                filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
            }

            .transition {
                transition-property: color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
                transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
                transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
                transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
                transition-duration: 150ms
            }

            .duration-300 {
                transition-duration: 300ms
            }

            .selection\:bg-\[\#FF2D20\] *::selection {
                --tw-bg-opacity: 1;
                background-color: rgb(255 45 32 / var(--tw-bg-opacity))
            }

            .selection\:text-white *::selection {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .selection\:bg-\[\#FF2D20\]::selection {
                --tw-bg-opacity: 1;
                background-color: rgb(255 45 32 / var(--tw-bg-opacity))
            }

            .selection\:text-white::selection {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .hover\:text-black:hover {
                --tw-text-opacity: 1;
                color: rgb(0 0 0 / var(--tw-text-opacity))
            }

            .hover\:text-black\/70:hover {
                color: rgb(0 0 0 / 0.7)
            }

            .hover\:ring-black\/20:hover {
                --tw-ring-color: rgb(0 0 0 / 0.2)
            }

            .focus\:outline-none:focus {
                outline: 2px solid transparent;
                outline-offset: 2px
            }

            .focus-visible\:ring-1:focus-visible {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .focus-visible\:ring-\[\#FF2D20\]:focus-visible {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
            }

            @media (min-width: 640px) {
                .sm\:size-16 {
                    width: 4rem;
                    height: 4rem
                }

                .sm\:size-6 {
                    width: 1.5rem;
                    height: 1.5rem
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

                .lg\:grid-cols-3 {
                    grid-template-columns: repeat(3, minmax(0, 1fr))
                }

                .lg\:grid-cols-2 {
                    grid-template-columns: repeat(2, minmax(0, 1fr))
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
                    padding-top: 0px
                }

                .lg\:text-\[\#FF2D20\] {
                    --tw-text-opacity: 1;
                    color: rgb(255 45 32 / var(--tw-text-opacity))
                }
            }

            @media (prefers-color-scheme: dark) {
                .dark\:block {
                    display: block
                }

                .dark\:hidden {
                    display: none
                }

                .dark\:bg-black {
                    --tw-bg-opacity: 1;
                    background-color: rgb(0 0 0 / var(--tw-bg-opacity))
                }

                .dark\:bg-zinc-900 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(24 24 27 / var(--tw-bg-opacity))
                }

                .dark\:via-zinc-900 {
                    --tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);
                    --tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)
                }

                .dark\:to-zinc-900 {
                    --tw-gradient-to: #18181b var(--tw-gradient-to-position)
                }

                .dark\:text-white\/50 {
                    color: rgb(255 255 255 / 0.5)
                }

                .dark\:text-white {
                    --tw-text-opacity: 1;
                    color: rgb(255 255 255 / var(--tw-text-opacity))
                }

                .dark\:text-white\/70 {
                    color: rgb(255 255 255 / 0.7)
                }

                .dark\:ring-zinc-800 {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity))
                }

                .dark\:hover\:text-white:hover {
                    --tw-text-opacity: 1;
                    color: rgb(255 255 255 / var(--tw-text-opacity))
                }

                .dark\:hover\:text-white\/70:hover {
                    color: rgb(255 255 255 / 0.7)
                }

                .dark\:hover\:text-white\/80:hover {
                    color: rgb(255 255 255 / 0.8)
                }

                .dark\:hover\:ring-zinc-700:hover {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity))
                }

                .dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
                }

                .dark\:focus-visible\:ring-white:focus-visible {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity))
                }
            }
        </style>
    @endif
</head>

<body class="font-sans antialiased">
    <div class="bg-yellow-100 text-black/50">

        <div class="relative flex flex-col items-center justify-center min-h-screen">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <header class="grid items-center grid-cols-2 gap-2 py-10 lg:grid-cols-3">
                    <div class="flex lg:justify-center lg:col-start-2">
                        <h1 class="text-xl font-bold">Quesioner</h1>
                    </div>
                </header>

                <main class="mt-6">
                    <p class="items-center pb-2 text-center text-md">Identitas-mu tidak akan terdeteksi dan dikenali.
                        Jawab sesuai dengan yang anda alami dan rasakan. berikan kritik juga masukan tanpa harus khawatir ketahuan</p>

                        <div
                            class="overflow-hidden bg-white border-2 border-gray-400 border-solid rounded-lg shadow-sm">

                            <p class="p-6 text-sm text-red-600 font-italic">Tips : gunakan ejaan yang baku dan gaya typing yang berbeda dengan di chat</p>

                            @if ($errors->any())
                            @foreach ($errors->all() as $error)
                            <div class="w-full p-6 text-white bg-red-500 rounded-3xl">
                                {{ $error }}
                            </div>
                            @endforeach
                            @endif


                            <form method="POST" action="{{ route('front.store') }}">
                                @csrf
                                <div class="grid gap-6 lg:gap-8">
                                    <div class="p-6 text-gray-900">
                                        <label for="reasonJoin"
                                            class="inline-block mb-2 ml-1 text-lg font-bold text-black/70">Alasan Awal kamu
                                            bergabung
                                            Perisai Diri?</label>
                                        <input type="text" name="reasonJoin" required autofocus
                                            class="text-md leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none" />

                                        <label for="howLong"
                                            class="inline-block mt-4 mb-2 ml-1 text-lg font-bold text-black/70">Berapa lama
                                            kamu bergabung Perisai Diri?</label>
                                        <select type="text" name="howLong" required autofocus
                                            class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none" />
                                        <option value="" disabled selected>Pilih salah satu</option>
                                        <option value="Kurang Dari 1 Tahun">Kurang Dari 1 Tahun</option>
                                        <option value="Sekitar 1 Tahun">Sekitar 1 Tahun</option>
                                        <option value="Lebih Dari 1 Tahun">Lebih Dari 1 Tahun</option>
                                        <option value="Lebih Dari 2 Tahun">Lebih Dari 2 Tahun</option>
                                        <option value="Lebih Dari 3 Tahun">Lebih Dari 3 Tahun</option>
                                        <option value="Lebih Dari 4 Tahun">Lebih Dari 4 Tahun</option>
                                        <option value="Lebih Dari 5 Tahun">Lebih Dari 5 Tahun</option>
                                        <option value="Lebih Dari 6 Tahun">Lebih Dari 6 Tahun</option>
                                        <option value="Lebih Dari 7 Tahun">Lebih Dari 7 Tahun</option>
                                        <option value="Lebih Dari 8 Tahun">Lebih Dari 8 Tahun</option>
                                        <option value="Lebih Dari 9 Tahun">Lebih Dari 9 Tahun</option>
                                        <option value="Lebih Dari 10 Tahun">Lebih Dari 10 Tahun</option>
                                        </select>

                                        <label for="objective"
                                            class="inline-block mt-4 mb-2 ml-1 text-lg font-bold text-black/70">Tujuan kamu
                                            mengikuti latihan?</label>
                                        <select name="objective" required autofocus
                                            class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none"
                                            onchange="handleTujuanChange(this)">
                                            <option value="" disabled selected>Pilih salah satu</option>
                                            <option value="Olahraga">Olahraga</option>
                                            <option value="Menjadi Atlet">Menjadi Atlet</option>
                                            <option value="Bersenang-senang">Bersenang-senang</option>
                                            <option value="Mencari Kesibukan">Mencari Kesibukan</option>
                                            <option value="Mendapat Teman">Mendapat Teman</option>
                                            <option value="Masuk Akmil">Masuk Akmil</option>
                                            <option value="">Lainnya</option>
                                        </select>

                                        <div id="tujuanLainnyaContainer" style="display: none; margin-top: 10px;">
                                            <label for="tujuan_lainnya"
                                                class="block mb-2 font-bold text-gray-700 text-md">Jelaskan</label>
                                            <input type="text" id="tujuan_lainnya" name="tujuan_lainnya"
                                                class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none">
                                        </div>

                                        <label for="goal"
                                            class="inline-block mt-4 mb-2 ml-1 text-lg font-medium text-black/70">Apa Impian
                                            Kamu di Perisai Diri?</label>
                                        <input type="text" name="goal" required autofocus
                                            class="text-md leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none" />

                                        <label for="confident"
                                            class="inline-block mt-4 mb-2 ml-1 text-lg font-medium text-black/70">Seberapa
                                            yakin kamu bisa mencapai Impian mu?</label>
                                        <select name="confident" required autofocus
                                            class="focus:shadow-primary-outline text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none">
                                            <option value="" disabled selected>Pilih salah satu</option>
                                            <option value="Sangat Tidak Yakin">Sangat Tidak Yakin</option>
                                            <option value="Tidak Terlalu Yakin">Tidak Terlalu Yakin</option>
                                            <option value="Yakin">Yakin</option>
                                            <option value="Yakin Sekali">Yakin Sekali</option>
                                            <option value="Sangat Yakin Sekali">Sangat Yakin Sekali</option>
                                        </select>

                                        <label for="spirit"
                                            class="inline-block mt-4 mb-2 ml-1 text-lg font-medium text-black/70">
                                            Faktor apa saja yang membuatmu bersemangat/Nyaman ketika latihan?</label>
                                        <input type="text" name="spirit" required autofocus
                                            class="text-md leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none" />

                                        <label for="notSpirit"
                                            class="inline-block mt-4 mb-2 ml-1 text-lg font-medium text-black/70">
                                            Faktor apa saja yang membuatmu tidak bersemangat/Nyaman ketika latihan?</label>
                                        <input type="text" name="notSpirit" required autofocus
                                            class="text-md leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none" />

                                        <label for="material"
                                            class="inline-block mt-4 mb-2 ml-1 text-lg font-medium text-black/70">Materi apa
                                            yang kamu Sukai di Perisai Diri?</label>
                                        <input type="text" name="material" required autofocus
                                            class="text-md leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none" />

                                        <label for="activity"
                                            class="inline-block mt-4 mb-2 ml-1 text-lg font-medium text-black/70">Aktivitas
                                            apa yang kamu Sukai di Perisai Diri?</label>
                                        <input type="text" name="activity" required autofocus
                                            class="text-md leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none" />

                                        <label for="change"
                                            class="inline-block mt-4 mb-2 ml-1 text-lg font-medium text-black/70">Perubahan
                                            apa yang kamu rasakan setelah bergabung di Perisai Diri?</label>
                                        <textarea name="change" required autofocus
                                            class="mb-2 px-3 py-2 text-md leading-5.6 ease block w-full h-60 appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none">
                                        </textarea>

                                        <label for="benefit"
                                            class="inline-block mt-4 mb-2 ml-1 text-lg font-medium text-black/70">Manfaat
                                            apa yang kamu rasakan setelah bergabung di Perisai Diri?</label>
                                        <textarea name="benefit" required autofocus
                                            class="mb-2 px-3 py-2 text-md leading-5.6 ease block w-full h-60 appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none">
                                        </textarea>

                                        <label for="impressive"
                                            class="inline-block mt-4 mb-2 ml-1 text-lg font-medium text-black/70">
                                            Hal apa yang paling berkesan yang kamu rasakan di Perisai Diri?</label>
                                        <textarea name="impressive" required autofocus
                                            class="mb-2 px-3 py-2 text-md leading-5.6 ease block w-full h-60 appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none">
                                        </textarea>

                                        <label for="proud"
                                            class="inline-block mt-4 mb-2 ml-1 text-lg font-medium text-black/70">
                                            Hal apa yang paling Membanggakan yang alami selama di Perisai Diri?</label>
                                        <textarea name="proud" required autofocus
                                            class="mb-2 px-3 py-2 text-md leading-5.6 ease block w-full h-60 appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none">
                                        </textarea>

                                        <label for="touchingWords"
                                            class="inline-block mt-4 mb-2 ml-1 text-lg font-medium text-black/70">
                                            Perkataan atau Hal Menyenangkan Apa yang pernah kamu terima dari pelatih selama latihan?</label>
                                        <textarea name="touchingWords" required autofocus
                                            class="mb-2 px-3 py-2 text-md leading-5.6 ease block w-full h-60 appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none">
                                        </textarea>

                                        <label for="harmingWords"
                                            class="inline-block mt-4 mb-2 ml-1 text-lg font-medium text-black/70">
                                            Perkataan atau Hal Tidak Menyenangkan Apa yang pernah kamu terima dari pelatih selama latihan?</label>
                                        <textarea name="harmingWords" required autofocus
                                            class="mb-2 px-3 py-2 text-md leading-5.6 ease block w-full h-60 appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none">
                                        </textarea>

                                        <label for="notHappenAgain"
                                            class="inline-block mt-4 mb-2 ml-1 text-lg font-medium text-black/70">
                                            Hal apa yang kamu harap tidak terjadi lagi selama latihan atau mengikuti kegiatan di Perisai Diri?</label>
                                        <textarea name="notHappenAgain" required autofocus
                                            class="mb-2 px-3 py-2 text-md leading-5.6 ease block w-full h-60 appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none">
                                        </textarea>

                                        <label for="obstacle"
                                                class="inline-block mt-4 mb-2 ml-1 text-lg font-medium text-black/70">
                                                Hambatan apa yang kamu hadapi untuk datang latihan, saat latihan dan setelah latihan?</label>
                                        <textarea name="obstacle" required autofocus
                                                class="mb-2 px-3 py-2 text-md leading-5.6 ease block w-full h-60 appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none">
                                        </textarea>

                                        <label for="why"
                                            class="inline-block mt-4 mb-2 ml-1 text-lg font-medium text-black/70">
                                            Kenapa kamu masih mengikuti latihan hingga sekarang?</label>
                                        <textarea name="why" required autofocus
                                            class="mb-2 px-3 py-2 text-md leading-5.6 ease block w-full h-60 appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none">
                                        </textarea>

                                        <label for="criticism"
                                            class="inline-block mt-4 mb-2 ml-1 text-lg font-medium text-black/70">
                                            Apa kritik kamu terkait latihan dan kegiatan yang selama ini?</label>
                                        <textarea name="criticism" required autofocus
                                            class="mb-2 px-3 py-2 text-md leading-5.6 ease block w-full h-60 appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none">
                                        </textarea>

                                        <label for="suggestion"
                                            class="inline-block mt-4 mb-2 ml-1 text-lg font-medium text-black/70">
                                            Apa Masukan kamu terkait latihan dan kegiatan yang kedepannya?</label>
                                        <textarea name="suggestion" required autofocus
                                            class="mb-2 px-3 py-2 text-md leading-5.6 ease block w-full h-60 appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none">
                                        </textarea>

                                        <label for="recommendation"
                                            class="inline-block mt-4 mb-2 ml-1 text-lg font-medium text-black/70">
                                            Apa Kamu memiliki Ide/Rekomendasi latihan dan kegiatan kedepannya?</label>
                                        <textarea name="recommendation" required autofocus
                                            class="mb-2 px-3 py-2 text-md leading-5.6 ease block w-full h-60 appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none">
                                        </textarea>

                                        <label for="messageToPerson1"
                                            class="inline-block mt-4 mb-1 ml-1 text-lg font-medium text-black/70">
                                            Kritik/Pesan/Saran Untuk Faqih?</label>
                                        <p class="mb-2 text-sm text-italic">Sebagai pelatih & personal</p>
                                        <textarea name="messageToPerson1" required autofocus
                                            class="mb-2 px-3 py-2 text-md leading-5.6 ease block w-full h-60 appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none">
                                        </textarea>

                                        <label for="messageToPerson2"
                                            class="inline-block mt-4 mb-1 ml-1 text-lg font-medium text-black/70">
                                            Kritik/Pesan/Saran Untuk Bayu?</label>
                                        <p class="mb-2 text-sm font-italic">Sebagai pelatih & personal</p>
                                        <textarea name="messageToPerson2" required autofocus
                                            class="mb-2 px-3 py-2 text-md leading-5.6 ease block w-full h-60 appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none">
                                        </textarea>

                                        <label for="messageToPerson3"
                                            class="inline-block mt-4 mb-1 ml-1 text-lg font-medium text-black/70">
                                            Kritik/Pesan/Saran Untuk Greg?</label>
                                        <p class="mb-2 text-sm font-italic">Sebagai pelatih & personal</p>
                                        <textarea name="messageToPerson3" required autofocus
                                            class="mb-2 px-3 py-2 text-md leading-5.6 ease block w-full h-60 appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none">
                                        </textarea>

                                        <label for="messageToPerson4"
                                            class="inline-block mt-4 mb-1 ml-1 text-lg font-medium text-black/70">
                                            Kritik/Pesan/Saran Untuk Riqqi?</label>
                                        <p class="mb-2 text-sm font-italic">Sebagai pelatih & personal</p>
                                        <textarea name="messageToPerson4" required autofocus
                                            class="mb-2 px-3 py-2 text-md leading-5.6 ease block w-full h-60 appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-70 focus:outline-none">
                                        </textarea>

                                        <div class="flex items-center justify-end mt-8 z-200">
                                            <button type="submit"
                                                class="px-3 py-3 font-bold text-white bg-green-600 rounded-lg hover:bg-green-300">
                                                Simpan
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>

                </main>

                <footer class="py-16 text-sm text-center">
                    <i class="ri-copyright-fill">Faqih Syakir @ 2024</i>
                </footer>
            </div>
        </div>
    </div>

</body>

    <script src="{{ asset('/resources/js/app.js') }}"></script>
    <script>

        function handleTujuanChange(select) {
            const lainnyaContainer = document.getElementById('tujuanLainnyaContainer');
            const tujuanLainnyaInput = document.getElementById('tujuan_lainnya');

            if (select.value === '') {
                // Jika pilih "Lainnya", tampilkan form input
                lainnyaContainer.style.display = 'block';
                tujuanLainnyaInput.required = true; // Pastikan form input menjadi required
            } else {
                // Sembunyikan form input jika pilihan bukan "Lainnya"
                lainnyaContainer.style.display = 'none';
                tujuanLainnyaInput.required = false;
                tujuanLainnyaInput.value = ''; // Kosongkan input field
            }
        }
    </script>

</html>
