<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TTG RH</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Styles -->
        <style >
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
            @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
        </style>
        <style>
            * {
                outline: none;
                box-sizing: border-box;
            }

            :root {
                --body-bg-color: #e5ecef;
                --theme-bg-color: #fafafb;
                --body-font: "Poppins", sans-serif;
                --body-color: #2f2f33;
                --active-color: #0162ff;
                --active-light-color: #e1ebfb;
                --header-bg-color: #fff;
                --search-border-color: #efefef;
                --border-color: #d8d8d8;
                --alert-bg-color: #e8f2ff;
                --subtitle-color: #83838e;
                --inactive-color: #f0f0f0;
                --placeholder-color: #9b9ba5;
                --time-button: #fc5757;
                --level-button: #5052d5;
                --button-color: #fff;
            }

            ::placeholder {
                color: var(--placeholder-color);
            }

            img {
                max-width: 100%;
            }

            html {
                box-sizing: border-box;
                -webkit-font-smoothing: antialiased;
            }

            body {
                background-color: var(--body-bg-color);
                font-family: var(--body-font);
                font-size: 15px;
                color: var(--body-color);
            }

            .dark-light svg {
                margin-right: 8px;
                width: 22px;
                cursor: pointer;
                fill: transparent;
                transition: 0.5s;
            }
                .detail-button {
                    background-color: var(--inactive-color);
                    color: var(--subtitle-color);
                }
            }

            .job {
                display: flex;
                flex-direction: column;
                max-width: 1400px;
                height: 100vh;
                margin: 0 auto;
                overflow: hidden;
                background-color: var(--theme-bg-color);
            }

            .logo {
                display: flex;
                align-items: center;
                font-weight: 600;
                font-size: 18px;
                cursor: pointer;
                svg {
                    width: 24px;
                    margin-right: 12px;
                }
            }

            .header {
                display: flex;
                align-items: center;
                transition: box-shadow 0.3s;
                flex-shrink: 0;
                padding: 0 40px;
                white-space: nowrap;
                background-color: var(--header-bg-color);
                height: 60px;
                width: 100%;
                font-size: 14px;
                justify-content: space-between;
                &-menu a {
                    text-decoration: none;
                    color: var(--body-color);
                    font-weight: 500;
                    &:hover {
                        color: var(--active-color);
                    }
                    &:not(:first-child) {
                        margin-left: 30px;
                    }
                    &.active {
                        color: var(--active-color);
                    }
                }
            }
            .wrapper {
                width: 100%;
                display: flex;
                flex-direction: column;
                flex-grow: 1;
                scroll-behavior: smooth;
                padding: 30px 40px;
                overflow: auto;
            }

            .search-menu {
                height: 56px;
                white-space: nowrap;
                display: flex;
                flex-shrink: 0;
                align-items: center;
                background-color: var(--header-bg-color);
                border-radius: 8px;
                width: 100%;
                padding-left: 20px;
                div:not(:last-of-type) {
                    border-right: 1px solid var(--search-border-color);
                }
            }

            .search-bar {
                height: 55px;
                width: 100%;
                position: relative;
                input {
                    width: 100%;
                    height: 100%;
                    display: block;
                    background-color: transparent;
                    border: none;
                    background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 56.966 56.966' fill='%230162ff'%3e%3cpath d='M55.146 51.887L41.588 37.786A22.926 22.926 0 0046.984 23c0-12.682-10.318-23-23-23s-23 10.318-23 23 10.318 23 23 23c4.761 0 9.298-1.436 13.177-4.162l13.661 14.208c.571.593 1.339.92 2.162.92.779 0 1.518-.297 2.079-.837a3.004 3.004 0 00.083-4.242zM23.984 6c9.374 0 17 7.626 17 17s-7.626 17-17 17-17-7.626-17-17 7.626-17 17-17z'/%3e%3c/svg%3e");
                    background-repeat: no-repeat;
                    background-size: 14px;
                    background-position: 0 50%;
                    padding: 0 25px 0 305px;
                }
            }


            .search-button {
                background-color: var(--active-color);
                height: 55px;
                border: none;
                font-weight: 600;
                font-size: 14px;
                padding: 0 15px;
                border-radius: 0 8px 8px 0;
                color: var(--button-color);
                cursor: pointer;
                margin-left: auto;
            }

            .main-container {
                display: flex;
                flex-grow: 1;
                padding-top: 30px;
            }

            .search-buttons {
                border: none;
                color: var(--button-color);
                background-color: var(--active-color);
                padding: 8px 10px;
                border-radius: 6px;
                font-size: 13px;
                font-weight: 600;
                margin-top: 14px;
            }



            .job-style + label:before {
                content: "";
                margin-right: 10px;
                width: 16px;
                height: 16px;
                border: 1px solid var(--subtitle-color);
                border-radius: 4px;
                cursor: pointer;
            }

            .job-style:checked + label:before {
                background-color: var(--active-color);
                border-color: var(--active-color);
                background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%23fff' stroke-width='3' stroke-linecap='round' stroke-linejoin='round' class='feather feather-check'%3e%3cpath d='M20 6L9 17l-5-5'/%3e%3c/svg%3e");
                background-position: 50%;
                background-size: 14px;
                background-repeat: no-repeat;
            }

            .job-style:checked + label + span {
                background-color: var(--active-light-color);
                color: var(--active-color);
            }

            .searched-jobs {
                display: flex;
                flex-direction: column;
                flex-grow: 1;
                padding-left: 40px;
            }

            @keyframes slideY {
                0% {
                    opacity: 0;
                    transform: translateY(200px);
                }
            }

            .job-cards {
                padding-top: 20px;
                display: grid;
                animation: slideY 0.6s both;
                @media screen and (max-width: 1212px) {
                    grid-template-columns: repeat(2, 1fr);
                }
                @media screen and (max-width: 930px) {
                    grid-template-columns: repeat(1, 1fr);
                }
            }
            .job-card {
                padding: 20px 16px;
                background-color: var(--header-bg-color);
                border-radius: 8px;
                cursor: pointer;
                transition: 0.2s;
                &:hover {
                    transform: scale(1.02);
                }
                svg {
                    width: 46px;
                    padding: 10px;
                    border-radius: 8px;
                }
                &-title {
                    font-weight: 600;
                    margin-top: 16px;
                    font-size: 14px;
                }
                &-subtitle {
                    color: var(--subtitle-color);
                    font-size: 13px;
                    margin-top: 14px;
                    line-height: 1.6em;
                }
                &-header {
                    display: flex;
                    align-items: flex-start;
                }
            }

            .overview-card:hover {
                background: #2b2ecf;
                transition: none;
                transform: scale(1);
                svg {
                    box-shadow: none;
                }
                .job-overview-buttons .search-buttons.time-button,
                .job-overview-buttons .search-buttons.level-button {
                    background-color: #575ad8;
                    color: #fff;
                }
                .job-card-title,
                .job-stat {
                    color: #fff;
                }
                .job-card-subtitle,
                .job-day {
                    color: #dedede;
                }
                .overview-wrapper .heart {
                    color: #fff;
                    border-color: #fff;
                    &:hover {
                        fill: red;
                        stroke: red;
                        transform: scale(1.1);
                    }
                }
            }

            .detail-button {
                background-color: var(--active-light-color);
                color: var(--active-color);
                font-size: 11px;
                font-weight: 500;
                padding: 6px 8px;
                border-radius: 4px;
                & + & {
                    margin-left: 4px;
                }
            }

            .job-card-buttons {
                display: flex;
                align-items: center;
                justify-content: space-between;
                width: 100%;
                margin-top: 4px;
            }

            .card-buttons,
            .card-buttons-msg {
                padding: 10px;
                width: 100%;
                font-size: 12px;
                cursor: pointer;
            }

            .card-buttons {
                margin-right: 12px;
                &-msg {
                    background-color: var(--inactive-color);
                    color: var(--subtitle-color);
                }
            }

            .menu-dot {
                background-color: var(--placeholder-color);
                box-shadow: -6px 0 0 0 var(--placeholder-color),
                6px 0 0 0 var(--placeholder-color);
                width: 4px;
                height: 4px;
                border: 0;
                padding: 0;
                border-radius: 50%;
                margin-left: auto;
                margin-right: 8px;
            }


            @keyframes slide {
                0% {
                    opacity: 0;
                    transform: translateX(300px);
                }
            }

            .job-overview {
                display: flex;
                flex-grow: 1;
                display: none;
                animation: slide 0.6s both;
                &-cards {
                    display: flex;
                    flex-direction: column;
                    width: 330px;
                    height: 100%;
                    flex-shrink: 0;
                }
                &-card + &-card {
                    margin-top: 20px;
                }
                &-buttons {
                    display: flex;
                    align-items: center;
                    margin-top: 12px;
                    .search-buttons {
                        background-color: var(--inactive-color);
                        font-size: 11px;
                        padding: 6px 8px;
                        margin-top: 0;
                        font-weight: 500;
                        &.time-button {
                            color: var(--time-button);
                            margin-right: 8px;
                        }
                        &.level-button {
                            color: var(--level-button);
                        }
                    }
                    .job-stat {
                        color: var(--active-color);
                        font-size: 12px;
                        font-weight: 500;
                        margin-left: auto;
                    }
                    .job-day {
                        color: var(--subtitle-color);
                        font-size: 12px;
                        margin-left: 8px;
                        font-weight: 500;
                    }
                }

                .overview-wrapper {
                    display: flex;
                    align-items: center;
                    svg:first-child {
                        width: 42px;
                        margin-right: 10px;
                    }
                    .heart {
                        background: none;
                        box-shadow: none;
                        width: 24px;
                        padding: 4px;
                        color: var(--subtitle-color);
                        border: 1px solid var(--border-color);
                        margin-left: auto;
                        margin-bottom: auto;
                    }
                }
            }

            .overview-detail {
                .job-card-title,
                .job-card-subtitle {
                    margin-top: 4px;
                }
                .job-card-subtitle {
                    font-size: 12px;
                    font-weight: 500;
                }
            }

            .job-explain {
                background-color: var(--header-bg-color);
                margin-left: 40px;
                border-radius: 0 0 8px 8px;
            }

            .job-bg {
                border-radius: 8px 8px 0 0;
                object-fit: cover;
                width: 100%;
                height: 180px;
                transition: 0.3s;
                position: relative;
            }

            .job-logos {
                margin-top: -30px;
                position: relative;
                margin-bottom: -36px;
                padding: 0 20px;
                svg {
                    width: 66px;
                    padding: 12px;
                    background-color: #fff;
                    border-radius: 10px;
                    border: 4px solid var(--header-bg-color);
                }
            }

            .job-title-wrapper {
                display: flex;
                align-items: center;
                .job-card-title {
                    font-size: 20px;
                    margin-top: 0;
                    font-weight: 600;
                }
            }

            .job-action {
                display: flex;
                align-items: center;
                margin-left: auto;
                svg {
                    width: 32px;
                    border: 1px solid var(--border-color);
                    color: var(--subtitle-color);
                    border-radius: 8px;
                    padding: 6px;
                    & + svg {
                        margin-left: 12px;
                    }
                }
            }

            .job-explain-content {
                padding: 50px 25px 30px;
            }

            .job-subtitle-wrapper {
                display: flex;
                align-items: center;
                margin-top: 20px;
                .posted {
                    margin-left: auto;
                }
                .company-name {
                    color: var(--active-color);
                    font-weight: 600;
                    font-size: 14px;
                }
                .comp-location,
                .posted {
                    color: var(--subtitle-color);
                    font-size: 12px;
                    font-weight: 500;
                }
                .comp-location {
                    position: relative;
                    margin-left: 10px;
                    &:before {
                        content: "";
                        width: 3px;
                        height: 3px;
                        border-radius: 50%;
                        background-color: var(--placeholder-color);
                        top: 49%;
                        left: -8px;
                        position: absolute;
                    }
                }
                .app-number {
                    color: var(--body-color);
                    position: relative;
                    margin-left: 12px;
                    &:before {
                        content: "";
                        width: 3px;
                        height: 3px;
                        border-radius: 50%;
                        background-color: var(--placeholder-color);
                        top: 50%;
                        left: -7px;
                        position: absolute;
                    }
                }
            }

            .overview-text {
                margin-top: 30px;
                &-header {
                    font-weight: 600;
                    margin-bottom: 25px;
                }
                &-subheader {
                    font-size: 13px;
                    line-height: 2em;
                }
                &-item {
                    font-size: 13px;
                    position: relative;
                    display: flex;
                    & + & {
                        margin-top: 20px;
                    }
                    &:before {
                        content: "";
                        border: 2px solid #61bcff;
                        border-radius: 50%;
                        height: 8px;
                        width: 8px;
                        margin-right: 8px;
                        flex-shrink: 0;
                    }
                }
            }



            @media screen and (max-width: 990px) {
                .explain-contents,
                .explain-bar {
                    height: auto;
                }
                .explain-bar {
                    flex-wrap: wrap;
                    padding-bottom: 14px;
                }
                .explain-contents {
                    width: 50%;
                }
                .explain-contents + .explain-contents {
                    padding: 0;
                    border: 0;
                }

                .explain-contents:nth-child(2) ~ .explain-contents {
                    margin-top: 16px;
                    border-top: 1px solid var(--border-color);
                }
                .job-subtitle-wrapper {
                    flex-direction: column;
                    align-items: flex-start;
                }
                .job-subtitle-wrapper .posted {
                    margin-left: 0;
                    margin-top: 6px;
                }
            }

            @media screen and (max-width: 930px) {
                .search-job,
                .search-salary {
                    display: none;
                }
                .search-bar {
                    width: auto;
                }
            }
            @media screen and (max-width: 760px) {
                .job-explain {
                    margin-left: 0;
                }
            }
            @media screen and (max-width: 730px) {

                .searched-jobs {
                    padding-left: 0;
                }
                .search-menu div:not(:last-of-type) {
                    border: 0;
                }
                .job-cards {
                    grid-template-columns: repeat(2, 1fr);
                }
            }

            @media screen and (max-width: 620px) {
                .job-cards {
                    grid-template-columns: repeat(1, 1fr);
                }
                .header-menu a:not(:first-child) {
                    margin-left: 10px;
                }
            }

            @media screen and (max-width: 590px) {
                .header-menu {
                    display: none;
                }
            }

            @media screen and (max-width: 520px) {
                .search.item {
                    display: none;
                }
                .search-bar {
                    flex-grow: 1;
                }
                .search-bar input {
                    padding: 0 0 0 30px;
                }
                .search-button {
                    margin-left: 16px;
                }
                .main-container {
                    padding-top: 20px;
                }
            }

            @media screen and (max-width: 380px) {
                .explain-contents {
                    width: 100%;
                    margin: 0;
                }

                .explain-contents:nth-child(2) ~ .explain-contents {
                    margin: 0;
                    border: 0;
                }
                .wrapper {
                    padding: 20px;
                }
                .header {
                    padding: 0 20px;
                }
            }

        </style>
    </head>
    <body class="antialiased">

        <div class="job">
            <div class="header">
                <div class="logo">
                      TTG - Sistema Básico de HR con Laravel y ReqRes API
                </div>
                <div class="header-menu">
                    @if (Route::has('login'))
                            @auth

                            @else
                                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Ingresar</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Registrar Empleador</a>
                                @endif
                                <a href="{{ route('register_candidate') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Registrar Candidato</a>

                            @endauth
                    @endif
                </div>

            </div>
            <div class="wrapper">
                <div class="search-menu">
                    <div class="search-bar">
                        <input type="text" id="search" class="search-box" autofocus />
                    </div>
                    <button class="search-button">Buscar Trabajo</button>
                </div>
                    <div class="searched-jobs" id = "searched-jobs"  >


                    </div>
                </div>
            </div>


        <script>

            $(document).ready(function() {

                $.ajax({
                    url: '/jobs/list',
                    type: 'GET',
                    success: function(data) {
                        var jobCardsHTML = '';
                        $.each(data, function(index, job) {
                            jobCardsHTML += '<div class="job-cards">';
                            jobCardsHTML += '<div class="job-card">';
                            jobCardsHTML += '<div class="job-card-header">';
                            jobCardsHTML += '<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#fff" style="background-color:#1e1f26">';
                            jobCardsHTML += '<path d="M24 7.6c0-.3 0-.5-.4-.6C12.2.2 12.4-.3 11.6 0 3 5.5 0 6.7.2 7.1c-.3.3-.2.8-.2 8.3 0 .9 7.7 5.5 11.5 8.4.4.3.8.2 1 0 11.2-8 11.5-7.6 11.5-8.4V7.6zm-1.5 6.5l-3.9-2.4L22.5 9zm-5.3-3.2l-4.5-2.7V2L22 7.6zM12 14.5l-3.9-2.7L12 9.5l3.9 2.3zm-.8-12.4v6L6.8 11 2.1 7.6zm-5.8 9.6l-3.9 2.4V9zm1.3 1l4.5 3.1v6l-9-6.3zm6 9.1v-6l4.6-3.1 4.6 2.8z" />';
                            jobCardsHTML += '</svg>';
                            jobCardsHTML += '</div>';
                            jobCardsHTML += '<div class="job-card-content">';
                            jobCardsHTML += '<h3>' + job.title + '</h3>';
                            jobCardsHTML += '<p>' + job.description + '</p>';
                            jobCardsHTML += '<p>' + job.company_name + '</p>';
                            jobCardsHTML += '</div>';
                            jobCardsHTML += '<div class="job-card-buttons">';
                            jobCardsHTML += '<a class="search-buttons card-buttons" href="{{ route('register_candidate') }}" >Aplicar</a>';
                            jobCardsHTML += '</div>';
                            jobCardsHTML += '</div>';
                            jobCardsHTML += '</div>';
                        });
                        $('#searched-jobs').html(jobCardsHTML);

                    },
                    error: function(xhr, status, error) {
                        console.error('Error al obtener los últimos trabajos:', error);
                    }
                });


                $('.search-box').keyup(function() {

                    var searchTerm = $(this).val();
                    $('.searched-jobs').empty();
                    $.ajax({
                        url: '/search-jobs',
                        type: 'GET',
                        data: { term: searchTerm },
                        success: function(data) {
                            var jobCardsHTML = '';
                            $.each(data, function(index, job) {
                                jobCardsHTML += '<div class="job-cards">';
                                jobCardsHTML += '<div class="job-card">';
                                jobCardsHTML += '<div class="job-card-header">';
                                jobCardsHTML += '<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#fff" style="background-color:#1e1f26">';
                                jobCardsHTML += '<path d="M24 7.6c0-.3 0-.5-.4-.6C12.2.2 12.4-.3 11.6 0 3 5.5 0 6.7.2 7.1c-.3.3-.2.8-.2 8.3 0 .9 7.7 5.5 11.5 8.4.4.3.8.2 1 0 11.2-8 11.5-7.6 11.5-8.4V7.6zm-1.5 6.5l-3.9-2.4L22.5 9zm-5.3-3.2l-4.5-2.7V2L22 7.6zM12 14.5l-3.9-2.7L12 9.5l3.9 2.3zm-.8-12.4v6L6.8 11 2.1 7.6zm-5.8 9.6l-3.9 2.4V9zm1.3 1l4.5 3.1v6l-9-6.3zm6 9.1v-6l4.6-3.1 4.6 2.8z" />';
                                jobCardsHTML += '</svg>';
                                jobCardsHTML += '</div>';
                                jobCardsHTML += '<div class="job-card-content">';
                                jobCardsHTML += '<h3>' + job.title + '</h3>';
                                jobCardsHTML += '<p>' + job.description + '</p>';
                                jobCardsHTML += '<p>' + job.company_name + '</p>';
                                jobCardsHTML += '</div>';
                                jobCardsHTML += '<div class="job-card-buttons">';
                                jobCardsHTML +=  '<a class="search-buttons card-buttons" href="{{ route('register_candidate') }}" >Aplicar</a>';
                                jobCardsHTML += '</div>';
                                jobCardsHTML += '</div>';
                                jobCardsHTML += '</div>';
                            });
                            $('#searched-jobs').html(jobCardsHTML);
                        },
                        error: function(xhr, status, error) {
                            console.error('Error al obtener los últimos trabajos:', error);
                        }
                    });
                });
            });

        </script>
        </body>
</html>
