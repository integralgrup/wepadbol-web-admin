
<?php $nameofProject = 'Wepadbol';?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Açıklama alanı">
    <title><?php if (!empty($pageTitle)) echo $pageTitle . ' - '; ?><?= $nameofProject; ?></title>
    <link rel="shortcut icon" href="../assets/image/trademark/favicon.png" type="image/x-icon">
    <!-- Önbellek tutmasın diye ekledim; '?id<?= rand(); ?>' yazısını silersin -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css?id=' . rand()) }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css?id=' . rand()) }}">
</head>

<body class="antialiased font-sans">

<header class="group/header header-field peer h-[90px] z-100 mt-[55px] border border-solid border-blue border-opacity-0 bg-white/0 fixed w-full left-0 top-0 duration-500 will-change-[height,transform] [&.is-fixed]:!top-0 [&.is-fixed]:mt-0 [&.is-fixed]:shadow-2xl [&.is-fixed]:!translate-y-0 [&.is-fixed]:bg-white [&.is-fixed]:backdrop-blur-[30px] sm:[&.is-fixed]:bg-blue [&.is-fixed]:shadow-header [&.is-hidden.is-fixed]:!-translate-y-full [&.is-hidden.is-fixed]:mt-0 [&.is-hidden.is-fixed]:shadow-none [&.no-scroll]:absolute [&.no-scroll]:!transform-none [&.no-scroll]:!shadow-none md:mt-0 [&.header-hidden]:!-translate-y-full lg:[&.is-fixed]:opacity-0 lg:[&.is-fixed]:invisible lg:[&.is-fixed]:pointer-events-none sm:relative sm:bg-blue lg:h-[80px]">
    <div class="wrapper max-w-[1740px] mx-auto size-full px-[30px] flex items-center justify-between sm:h-auto">
        <a href="{{ route('home') }}" class="logo-wrapper relative block w-full max-w-[320px] lg:max-w-full  lg:w-fit xl:max-w-[260px]">
            <svg class="duration-350 group-[&.is-fixed]/header:mx-auto group-[&.is-fixed]/header:h-[88px] group-[&.is-fixed]/header:w-[250px] sm:w-[250px] sm:mx-auto xl:w-[230px]" width="319" height="70" viewBox="0 0 319 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M309.732 43.2524V52.5456H318.181V43.2524H309.732Z" fill="#75BF00" />
                <path d="M33.5152 15.4754L40.2869 39.1124L42.567 30.7059L47.4852 15.4705H58.9642L45.9161 52.7655H35.7217L29.4453 34.2282L23.2424 52.7655H12.9746L0 15.4754H11.479L16.3972 30.7108L18.6773 39.1173L25.449 15.4803H33.5054L33.5152 15.4754Z" fill="#75BF00" />
                <path d="M66.3818 37.5352C66.6662 39.436 67.6419 40.9987 69.3042 42.2234C70.9665 43.4481 73.178 44.0605 75.9337 44.0605C79.881 44.0605 82.9211 43.0856 85.0591 41.1359L90.8353 47.8914C87.3196 51.546 82.2788 53.3683 75.718 53.3683C69.1571 53.3683 64.5822 51.595 61.1351 48.0384C57.6879 44.4867 55.9668 39.6858 55.9668 33.6308C55.9668 27.9285 57.6536 23.3138 61.0272 19.7866C64.4008 16.2594 68.9414 14.4958 74.6441 14.4958C80.8715 14.4958 85.6377 16.4946 88.9426 20.497C92.2475 24.4993 93.3508 30.1771 92.2573 37.5303H66.372L66.3818 37.5352ZM83.0683 29.6578C82.9751 27.7571 82.117 26.2923 80.4988 25.2685C78.8807 24.2446 76.934 23.7302 74.6539 23.7302C72.6092 23.7302 70.8488 24.2544 69.3778 25.3076C67.9018 26.356 66.9064 27.811 66.3818 29.6578H83.0683Z" fill="#75BF00" />
                <path class="group-[&.is-fixed]/header:fill-blue group-[&.blue]/header:fill-blue" d="M36.7114 2.6307C34.6814 5.46714 32.8082 8.81307 31.5775 11.1547C30.9596 12.3305 29.2728 12.3256 28.6648 11.1449C27.4537 8.79837 25.6051 5.43775 23.5995 2.58171C22.8346 1.48927 23.629 -0.00488685 24.9578 1.20153e-05L30.1653 0.0196075L35.3728 0.0392029C36.7016 0.0441018 37.4813 1.54805 36.7114 2.6258V2.6307Z" fill="white" />
                <path class="group-[&.is-fixed]/header:fill-blue group-[&.blue]/header:fill-blue" d="M94.4512 69.7308V16.3723H103.65L104.292 21.0997C106.955 17.4991 110.853 15.6963 115.987 15.6963C121.121 15.6963 125.363 17.4599 128.574 20.9871C131.781 24.5142 133.39 29.1535 133.39 34.9096C133.39 40.6658 131.771 45.501 128.54 48.9792C125.309 52.4574 121.077 54.1965 115.85 54.1965C111.192 54.1965 107.509 52.4476 104.797 48.9449V69.7308H94.461H94.4512ZM120.69 41.7778C122.259 40.0045 123.043 37.7118 123.043 34.9096C123.043 32.1075 122.269 29.8834 120.724 28.0806C119.179 26.2778 117.076 25.3813 114.413 25.3813C111.751 25.3813 109.564 26.1554 107.71 27.7083C105.857 29.2612 104.93 31.6617 104.93 34.9145C104.93 37.8685 105.881 40.1906 107.784 41.8954C109.686 43.5953 111.898 44.4477 114.413 44.4477C116.929 44.4477 119.121 43.561 120.69 41.7827V41.7778Z" fill="white" />
                <path class="group-[&.is-fixed]/header:fill-blue group-[&.blue]/header:fill-blue" d="M163.757 16.2987H173.382V53.3684H164.115L163.546 48.7145C162.453 50.5173 160.874 51.8645 158.804 52.7658C156.735 53.6672 154.705 54.1424 152.709 54.1914C147.34 54.2404 142.966 52.5258 139.588 49.0525C136.214 45.5743 134.527 40.8371 134.527 34.8311C134.527 28.8251 136.273 24.0732 139.769 20.5754C143.265 17.0776 147.674 15.3728 152.994 15.4708C155.274 15.4708 157.353 15.9215 159.231 16.8229C161.109 17.7243 162.502 18.9735 163.404 20.5754L163.762 16.2987H163.757ZM147.428 27.669C145.668 29.4473 144.79 31.833 144.79 34.836C144.79 37.839 145.668 40.215 147.428 41.9639C149.189 43.7127 151.395 44.5896 154.058 44.5896C156.72 44.5896 159.059 43.6393 160.795 41.7385C162.531 39.8377 163.399 37.6626 163.399 35.2083C163.399 32.3572 162.58 29.942 160.937 27.9678C159.3 25.9936 157.005 25.004 154.058 25.004C151.395 25.004 149.184 25.8907 147.428 27.669Z" fill="white" />
                <path class="group-[&.is-fixed]/header:fill-blue group-[&.blue]/header:fill-blue" d="M214.028 0.916016V53.3682H204.829L204.187 48.6408C201.524 52.2414 197.626 54.0442 192.492 54.0442C187.358 54.0442 183.117 52.2806 179.905 48.7534C176.698 45.2262 175.09 40.587 175.09 34.8309C175.09 29.0747 176.708 24.2395 179.939 20.7613C183.171 17.2831 187.402 15.544 192.63 15.544C197.288 15.544 200.97 17.2929 203.682 20.7956V0.916016H214.018H214.028ZM187.79 27.9675C186.221 29.7458 185.436 32.0336 185.436 34.8358C185.436 37.6379 186.211 39.862 187.755 41.6648C189.3 43.4676 191.404 44.364 194.066 44.364C196.729 44.364 198.916 43.59 200.769 42.0371C202.623 40.4841 203.55 38.0837 203.55 34.8309C203.55 31.8817 202.598 29.5548 200.696 27.85C198.793 26.1452 196.582 25.2977 194.066 25.2977C191.551 25.2977 189.359 26.1844 187.79 27.9626V27.9675Z" fill="white" />
                <path class="group-[&.is-fixed]/header:fill-blue group-[&.blue]/header:fill-blue" d="M228.071 0.916016V20.8005C230.783 17.2978 234.465 15.5489 239.123 15.5489C244.35 15.5489 248.582 17.288 251.813 20.7662C255.045 24.2444 256.663 28.9326 256.663 34.8358C256.663 40.7389 255.06 45.2409 251.848 48.7926C248.641 52.3443 244.444 54.1226 239.261 54.1226C234.078 54.1226 230.277 52.2953 227.566 48.6457L226.924 53.3731H217.725V0.916016H228.061H228.071ZM231.067 27.8549C229.164 29.5548 228.213 31.8817 228.213 34.8358C228.213 38.0886 229.14 40.489 230.993 42.042C232.847 43.5949 235.083 44.3689 237.696 44.3689C240.31 44.3689 242.463 43.4676 244.007 41.6697C245.552 39.8669 246.327 37.5938 246.327 34.8407C246.327 32.0875 245.542 29.7507 243.973 27.9724C242.404 26.1991 240.315 25.3075 237.696 25.3075C235.078 25.3075 232.965 26.1599 231.067 27.8598V27.8549Z" fill="white" />
                <path class="group-[&.is-fixed]/header:fill-blue group-[&.blue]/header:fill-blue" d="M261.548 48.832C258.052 45.2558 256.307 40.6166 256.307 34.9094C256.307 29.2022 258.077 24.6022 261.617 20.9525C265.157 17.3029 269.806 15.4756 275.558 15.4756C281.309 15.4756 286.027 17.3029 289.567 20.9525C293.107 24.6071 294.877 29.2561 294.877 34.9094C294.877 40.5627 293.132 45.2509 289.635 48.832C286.139 52.413 281.447 54.1962 275.553 54.1962C269.659 54.1962 265.035 52.4081 261.544 48.832H261.548ZM282.226 41.7776C283.722 39.9013 284.472 37.6136 284.472 34.9094C284.472 32.2052 283.712 30.0301 282.192 28.0804C280.672 26.1306 278.46 25.1557 275.563 25.1557C272.665 25.1557 270.522 26.1306 269.002 28.0804C267.482 30.0301 266.722 32.3081 266.722 34.9094C266.722 37.5107 267.472 39.774 268.967 41.6992C270.463 43.6245 272.665 44.5895 275.563 44.5895C278.46 44.5895 280.731 43.649 282.231 41.7776H282.226Z" fill="white" />
                <path class="group-[&.is-fixed]/header:fill-blue group-[&.blue]/header:fill-blue" d="M306.86 0.916016V53.3682H296.666V0.916016H306.86Z" fill="white" />
                <path class="group-[&.is-fixed]/header:fill-blue group-[&.blue]/header:fill-blue" d="M166.611 64.2728L167.317 61.6274H168.024L167.553 64.2728H166.611ZM168.259 64.2728L168.965 61.6274H169.671L169.2 64.2728H168.259Z" fill="white" />
                <path class="group-[&.is-fixed]/header:fill-blue group-[&.blue]/header:fill-blue" d="M176.38 67.9864L177.086 67.5749C177.38 68.5987 178.194 69.1964 179.449 69.1964C180.705 69.1964 181.391 68.6085 181.391 67.7169C181.391 67.2809 181.239 66.9625 180.921 66.7421C180.602 66.5167 180.082 66.2963 179.366 66.0611C178.508 65.777 177.944 65.5566 177.67 65.3802C177.047 65.003 176.728 64.4641 176.728 63.744C176.728 63.0238 176.973 62.4997 177.459 62.098C177.939 61.6864 178.542 61.4856 179.258 61.4856C180.543 61.4856 181.519 62.2253 181.975 63.259L181.278 63.646C180.901 62.7397 180.229 62.2841 179.253 62.2841C178.278 62.2841 177.547 62.8132 177.547 63.7048C177.547 64.1163 177.689 64.42 177.969 64.6209C178.248 64.8217 178.724 65.0324 179.371 65.243L180.008 65.4684C180.136 65.5027 180.327 65.5762 180.572 65.679C180.818 65.7721 181.009 65.8554 181.126 65.9387C181.362 66.0807 181.774 66.36 181.916 66.6343C182.068 66.8792 182.21 67.2712 182.21 67.6925C182.21 68.3881 181.95 68.9515 181.445 69.3728C180.94 69.7843 180.268 69.9949 179.435 69.9949C177.929 69.9949 176.797 69.2405 176.375 67.9864H176.38Z" fill="white" />
                <path class="group-[&.is-fixed]/header:fill-blue group-[&.blue]/header:fill-blue" d="M192.254 69.9999C191.396 69.9999 190.656 69.706 190.053 69.1181C189.454 68.5205 189.16 67.7905 189.16 66.9185C189.16 66.0465 189.454 65.3215 190.053 64.7336C190.651 64.136 191.396 63.842 192.254 63.842C193.112 63.842 193.843 64.136 194.441 64.7336C195.039 65.3215 195.348 66.0514 195.348 66.9185C195.348 67.7856 195.044 68.5156 194.441 69.1181C193.843 69.706 193.112 69.9999 192.254 69.9999ZM192.254 69.2455C192.901 69.2455 193.456 69.0201 193.902 68.5743C194.348 68.1138 194.574 67.5652 194.574 66.9185C194.574 66.2719 194.348 65.7183 193.902 65.2725C193.456 64.812 192.901 64.5916 192.254 64.5916C191.607 64.5916 191.053 64.8169 190.607 65.2725C190.16 65.7183 189.935 66.2719 189.935 66.9185C189.935 67.5652 190.16 68.1187 190.607 68.5743C191.053 69.0201 191.607 69.2455 192.254 69.2455Z" fill="white" />
                <path class="group-[&.is-fixed]/header:fill-blue group-[&.blue]/header:fill-blue" d="M216.121 62.4017H212.296V65.4341H215.945V66.2081H212.296V69.8529H211.473V61.6228H216.121V62.3968V62.4017Z" fill="white" />
                <path class="group-[&.is-fixed]/header:fill-blue group-[&.blue]/header:fill-blue" d="M226.041 69.9999C225.183 69.9999 224.443 69.706 223.84 69.1181C223.241 68.5205 222.947 67.7905 222.947 66.9185C222.947 66.0465 223.241 65.3215 223.84 64.7336C224.438 64.136 225.183 63.842 226.041 63.842C226.899 63.842 227.63 64.136 228.228 64.7336C228.827 65.3215 229.135 66.0514 229.135 66.9185C229.135 67.7856 228.831 68.5156 228.228 69.1181C227.63 69.706 226.899 69.9999 226.041 69.9999ZM226.041 69.2455C226.689 69.2455 227.243 69.0201 227.689 68.5743C228.135 68.1138 228.361 67.5652 228.361 66.9185C228.361 66.2719 228.135 65.7183 227.689 65.2725C227.243 64.812 226.689 64.5916 226.041 64.5916C225.394 64.5916 224.84 64.8169 224.394 65.2725C223.948 65.7183 223.722 66.2719 223.722 66.9185C223.722 67.5652 223.948 68.1187 224.394 68.5743C224.84 69.0201 225.394 69.2455 226.041 69.2455Z" fill="white" />
                <path class="group-[&.is-fixed]/header:fill-blue group-[&.blue]/header:fill-blue" d="M239.057 69.9999C238.199 69.9999 237.458 69.706 236.855 69.1181C236.257 68.5205 235.963 67.7905 235.963 66.9185C235.963 66.0465 236.257 65.3215 236.855 64.7336C237.454 64.136 238.199 63.842 239.057 63.842C239.915 63.842 240.646 64.136 241.244 64.7336C241.842 65.3215 242.151 66.0514 242.151 66.9185C242.151 67.7856 241.847 68.5156 241.244 69.1181C240.646 69.706 239.915 69.9999 239.057 69.9999ZM239.057 69.2455C239.704 69.2455 240.258 69.0201 240.705 68.5743C241.151 68.1138 241.376 67.5652 241.376 66.9185C241.376 66.2719 241.151 65.7183 240.705 65.2725C240.258 64.812 239.704 64.5916 239.057 64.5916C238.41 64.5916 237.856 64.8169 237.409 65.2725C236.963 65.7183 236.738 66.2719 236.738 66.9185C236.738 67.5652 236.963 68.1187 237.409 68.5743C237.856 69.0201 238.41 69.2455 239.057 69.2455Z" fill="white" />
                <path class="group-[&.is-fixed]/header:fill-blue group-[&.blue]/header:fill-blue" d="M252.334 64.7332H250.637V68.2947C250.637 69.3039 251.201 69.2255 252.334 69.1765V69.8574C250.686 70.1024 249.863 69.6566 249.863 68.2947V64.7332H248.627V63.9788H249.863V62.5679L250.637 62.3328V63.9788H252.334V64.7332Z" fill="white" />
                <path class="group-[&.is-fixed]/header:fill-blue group-[&.blue]/header:fill-blue" d="M264.807 64.7336C265.406 65.3312 265.7 66.0612 265.7 66.9185C265.7 67.7758 265.406 68.5057 264.807 69.1034C264.219 69.701 263.498 69.995 262.665 69.995C261.615 69.995 260.831 69.559 260.286 68.7017V69.8529H259.512V61.6228H260.286V65.1255C260.826 64.2682 261.615 63.8322 262.665 63.8322C263.498 63.8322 264.219 64.1261 264.807 64.7238V64.7336ZM262.606 69.2503C263.253 69.2503 263.807 69.025 264.253 68.5792C264.7 68.1187 264.925 67.57 264.925 66.9234C264.925 66.2767 264.7 65.7232 264.253 65.2774C263.807 64.8169 263.253 64.5964 262.606 64.5964C261.959 64.5964 261.404 64.8218 260.958 65.2774C260.512 65.7232 260.286 66.2767 260.286 66.9234C260.286 67.57 260.512 68.1236 260.958 68.5792C261.404 69.025 261.959 69.2503 262.606 69.2503Z" fill="white" />
                <path class="group-[&.is-fixed]/header:fill-blue group-[&.blue]/header:fill-blue" d="M277.937 63.9794H278.712V69.8581H277.937V68.7068C277.397 69.5641 276.608 70.0001 275.559 70.0001C274.725 70.0001 274.004 69.7062 273.406 69.1086C272.818 68.5109 272.523 67.781 272.523 66.9237C272.523 66.0664 272.818 65.3364 273.406 64.7388C274.004 64.1411 274.725 63.8472 275.559 63.8472C276.608 63.8472 277.393 64.2832 277.937 65.1405V63.9892V63.9794ZM275.618 69.2457C276.265 69.2457 276.819 69.0204 277.265 68.5746C277.711 68.1141 277.937 67.5654 277.937 66.9188C277.937 66.2721 277.711 65.7185 277.265 65.2727C276.819 64.8122 276.265 64.5918 275.618 64.5918C274.97 64.5918 274.416 64.8171 273.97 65.2727C273.524 65.7185 273.298 66.2721 273.298 66.9188C273.298 67.5654 273.524 68.119 273.97 68.5746C274.416 69.0204 274.97 69.2457 275.618 69.2457Z" fill="white" />
                <path class="group-[&.is-fixed]/header:fill-blue group-[&.blue]/header:fill-blue" d="M286.248 69.8577V61.2749H287.022V69.8577H286.248Z" fill="white" />
                <path class="group-[&.is-fixed]/header:fill-blue group-[&.blue]/header:fill-blue" d="M294.557 69.8577V61.2749H295.331V69.8577H294.557Z" fill="white" />
                <path class="group-[&.is-fixed]/header:fill-blue group-[&.blue]/header:fill-blue" d="M304.156 61.6274L303.45 64.2728H302.744L303.215 61.6274H304.156ZM305.804 61.6274L305.098 64.2728H304.392L304.862 61.6274H305.804Z" fill="white" />
                <path class="group-[&.is-fixed]/header:fill-blue group-[&.blue]/header:fill-blue" d="M318.089 4.93308C318.089 7.21106 316.299 8.99914 313.97 8.99914C311.64 8.99914 309.826 7.21106 309.826 4.93308C309.826 2.65511 311.665 0.916016 313.97 0.916016C316.274 0.916016 318.089 2.7041 318.089 4.93308ZM310.856 4.93308C310.856 6.72117 312.18 8.14184 313.994 8.14184C315.808 8.14184 317.059 6.72117 317.059 4.95758C317.059 3.19399 315.759 1.72433 313.97 1.72433C312.18 1.72433 310.856 3.16949 310.856 4.93308ZM313.332 7.0396H312.4V3.02253C312.768 2.94904 313.283 2.90006 313.945 2.90006C314.705 2.90006 315.048 3.02253 315.343 3.19399C315.563 3.36545 315.735 3.68387 315.735 4.07578C315.735 4.51668 315.392 4.8596 314.901 5.00657V5.05556C315.294 5.20252 315.514 5.49645 315.637 6.03533C315.759 6.64769 315.833 6.89263 315.931 7.0396H314.926C314.803 6.89263 314.73 6.52522 314.607 6.05982C314.533 5.61893 314.288 5.42297 313.773 5.42297H313.332V7.0396ZM313.357 4.76162H313.798C314.313 4.76162 314.73 4.59016 314.73 4.17376C314.73 3.80635 314.46 3.5614 313.872 3.5614C313.626 3.5614 313.455 3.5859 313.357 3.61039V4.76162Z" fill="white" />
            </svg>
        </a>
        <div class="menu-wrapper h-full flex items-center gap-[50px] py-[30px] px-[50px] border border-solid border-white/20 bg-white/4 backdrop-blur-[10px] rounded-[8px] duration-350 group-[&.is-fixed]/header:backdrop-blur-0 group-[&.is-fixed]/header:bg-white/0 group-[&.is-fixed]/header:border-white/0 lg:hidden xl:p-[15px] xl:gap-[15px]">
            <?php 
            $menu = App\Models\Menu::with('children')
            ->where('parent_menu_id', 0) // only root menus
            ->get();
            ?>
            <?php 
            $menuList = [];
            $i = 1;
            foreach ($menu as $item) :
                $menuItem = [
                    'title' => $item->title,
                    'url' => env('HTTP_DOMAIN') .'/'. $item->seo_url,
                ];
                if ($item->children->isNotEmpty()) {
                    $menuItem['submenu'] = 'submenu-' . $i++;
                    $menuItem['mega'] = $item->children->map(function($child) {
                        $subChild = [
                            'title' => $child->title,
                            'url' => env('HTTP_DOMAIN') .'/'. $child->seo_url,
                        ];
                        if( $child->children->isNotEmpty() ) {
                            $subChild['sub-menu'] = $child->children->map(function($subChild) {
                                return [
                                    'title' => $subChild->title,
                                    'url' => env('HTTP_DOMAIN') .'/'. $subChild->seo_url,
                                ];
                            })->toArray();
                        }else{
                            $subChild['sub-menu'] = [];
                        }
                        return $subChild;
                    })->toArray();
                }
                $menuList[] = $menuItem;
            endforeach;

            //dd($menuList);
            ?>
            
            <?php $list = [
                [
                    'title' => 'Wepadbol',
                    'url' => 'about.php',
                ],
                [
                    'title' => 'Padbol Courts',
                    'url' => 'javascript:;',
                    'submenu' => 'submenu-1',
                    'mega' => [
                        [
                            'title' => 'We Origins',
                            'url' => 'javascript:;',
                            'sub-menu' => [
                                [
                                    'title' => 'Origin Padbol',
                                    'url' => 'products.php',
                                ],
                                [
                                    'title' => 'Origin Roofed Padbol',
                                    'url' => 'products.php',
                                ],
                            ],
                        ],
                        [
                            'title' => 'We Panoramic',
                            'url' => 'javascript:;',
                            'sub-menu' => [
                                [
                                    'title' => 'Origin Padbol',
                                    'url' => 'projects.php',
                                ],
                                [
                                    'title' => 'Origin Roofed Padbol',
                                    'url' => 'projects.php',
                                ],
                            ],
                        ],
                        [
                            'title' => 'Accessories',
                            'url' => 'javascript:;',
                            'sub-menu' => [
                                [
                                    'title' => 'Origin Padbol',
                                    'url' => 'products.php',
                                    'left' => 'left-[30px]'
                                ],
                                [
                                    'title' => 'Origin Roofed Padbol',
                                    'url' => 'products.php',
                                    'left' => 'left-[60px]'
                                ],
                            ],
                        ],
                    ]
                ],
                [
                    'title' => 'Padbol Clubs',
                    'url' => 'javascript:;',
                    'submenu' => 'submenu-2',
                    'mega' => [
                        ['title' => 'PADBOL CLUP ESSENTIAL',],
                        ['title' => 'PADBOL CLUP IMPACT',],
                        ['title' => 'PADBOL CLUP EXTREME',],
                        ['title' => 'PADBOL CLUP ESSENTIAL',],
                        ['title' => 'PADBOL CLUP IMPACT',],
                        ['title' => 'PADBOL CLUP EXTREME',],
                    ],
                ],
                [
                    'title' => 'We Projects',
                    'url' => 'projects.php',
                ],
                [
                    'title' => 'News',
                    'url' => 'blogs.php',
                ],
                [
                    'title' => 'Contact',
                    'url' => 'contact.php',
                ],
            ]; ?>
            <ul class="menu h-full flex items-center gap-[50px] 2xl:gap-[30px] xl:gap-[20px]">
                <?php foreach ($menuList as $key => $item) : ?>
                    <li class="page-item group/menu">
                        <a href="<?= $item['url'] ?>" class="group/a peer w-full flex justify-center items-center gap-[10px] bg-transparent rounded-[8px] p-[15px] duration-350 group-hover/menu:bg-[#D9D9D9]/25 group-[&.is-active]/menu:!bg-green">
                            <div class="page text-white opacity-85 text-[20px] leading-[28px] group-[&.is-fixed]/header:text-blue group-[&.blue]/header:text-blue group-[&.blue]/header:group-[&.is-active]/menu:text-white group-[&.blue]/header:opacity-100 group-[&.is-fixed]/header:group-[&.is-active]/menu:text-white group-[&.is-fixed]/header:opacity-100"><?= $item['title'] ?></div>
                            <?php if (isset($item['submenu'])) : ?>
                                <i class="icon icon-chevron-down text-white opacity-25 text-[9px] h-[9px] leading-normal flex duration-350 group-[&.is-fixed]/header:text-blue group-[&.blue]/header:group-[&.is-active]/menu:text-white group-[&.blue]/header:text-blue group-hover/menu:opacity-100 group-[&.is-fixed]/header:group-[&.is-active]/menu:text-white group-[&.is-active]/menu:-rotate-180 group-[&.is-active]/menu:opacity-100"></i>
                            <?php endif; ?>
                        </a>
                        <?php if (!empty($item['submenu']) && $item['submenu'] == 'submenu-1') : ?>
                            <div class="sub-menu absolute top-[120px] left-[120px] translate-x-full [background:_linear-gradient(180deg,_#FFF_0%,_#FFF_100%);] px-[90px] py-[70px] rounded-l-[16px] min-w-[1215px] w-full h-[670px] [filter:_drop-shadow(0px_10px_40px_rgba(3,_36,_107,_0.15));] opacity-0 invisible pointer-events-none ease-in-out duration-350 group-[&.is-active]/menu:opacity-100 group-[&.is-active]/menu:pointer-events-auto group-[&.is-active]/menu:visible group-[&.is-active]/menu:translate-x-0 xl:left-[-150px] xl:h-[630px]">
                                <div class="grid grid-cols-[minmax(0,330px)_minmax(0,710px)] relative xl:grid-cols-[minmax(0,330px)_minmax(0,570px)]">
                                    <div class="pages-field flex flex-col justify-center gap-[50px]">
                                        <?php foreach ($item['mega'] as $key => $item) : ?>
                                            <div class="item group/item <?= $key == 0 ? 'is-active' : '' ?>">
                                                <h2 class="title text-[#98A2B7] text-[48px] font-normal leading-[48px] relative cursor-pointer before:absolute before:left-[-30px] before:top-[50%] before:translate-y-[-50%] before:w-[12px] before:h-[12px] before:bg-[#98A2B7] before:duration-350 duration-350 group-hover/item:text-black group-hover/item:before:bg-black group-[&.is-active]/item:before:bg-green group-[&.is-active]/item:text-green"><?= $item['title'] ?></h2>
                                                <div class="sub-pages flex-col gap-[24px] hidden bg-white  mt-[30px] pb-[10px] duration-350 group-[&.is-active]/item:mt-[30px] group-[&.is-active]/item:flex">
                                                    <?php foreach ($item['sub-menu'] as $key => $page) : ?>
                                                        <a href="<?= $page['url'] ?>" class="text text-[#B7BCC7] text-[24px] font-medium leading-[36px] duration-350 hover:text-black"><?= $page['title'] ?></a>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <!-- IMAGES -->
                                    <?php $list = ['image-1.jpg', 'image-2.jpg', 'image-3.jpg', 'image-5.jpg', 'image-5.jpg',]; ?>
                                    <div class="image-field relative flex flex-col items-end">
                                        <div class="header-image-carousel swiper max-h-[530px] size-full">
                                            <div class="swiper-wrapper">
                                                <!-- EN AZ 6 ADET OLACAK FOREACH YAPILMALI -->
                                                <?php foreach ($list as $key => $item) : ?>
                                                    <div class="swiper-slide group/slide duration-350 [&.swiper-slide-active]:z-10">
                                                        <div class="image w-full ml-auto max-w-[260px] h-[205px] aspect-[13/10] blur-[3.5px] opacity-0 overflow-hidden rounded-[16px] duration-350
                                                     group-[&.swiper-slide-prev]/slide:opacity-100 group-[&.swiper-slide-prev]/slide:mt-[5px]
                                                     group-[&.swiper-slide-next]/slide:opacity-100 group-[&.swiper-slide-next]/slide:mt-[-50px]
                                                     group-[&.swiper-slide-active]/slide:opacity-100 group-[&.swiper-slide-active]/slide:scale-y-[1.75] group-[&.swiper-slide-active]/slide:blur-0 group-[&.swiper-slide-active]/slide:mr-[240px] group-[&.swiper-slide-active]/slide:mt-[-50px] group-[&.swiper-slide-active]/slide:scale-x-[1.75] xl:h-[175px]">
                                                            <img src="../assets/image/jpg/<?= $item ?>" alt="<?= $item ?>" class="size-full object-cover object-center">
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- SHAPES -->
                                    <div class="triangle-shape drag-anim cursor-pointer absolute left-[460px] top-[10px] w-[127px] h-[127px]">
                                        <img src="../assets/svg/triangle.svg" alt="" class="size-full object-cover object-center">
                                    </div>
                                    <div class="rectangle-shape drag-anim cursor-pointer absolute left-[460px] bottom-0 w-[100px] h-[100px]">
                                        <img src="../assets/svg/rectangle.svg" alt="" class="size-full object-cover object-center">
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($item['submenu']) && $item['submenu'] == 'submenu-2') : ?>
                            <div class="sub-menu absolute top-[120px] left-[120px] translate-x-full [background:_linear-gradient(180deg,_#FFF_0%,_#FFF_100%);] px-[90px] py-[70px] rounded-l-[16px] min-w-[1215px] w-full h-[670px] [filter:_drop-shadow(0px_10px_40px_rgba(3,_36,_107,_0.15));] opacity-0 invisible pointer-events-none ease-in-out duration-350 group-[&.is-active]/menu:opacity-100 group-[&.is-active]/menu:pointer-events-auto group-[&.is-active]/menu:visible group-[&.is-active]/menu:translate-x-0 xl:left-[-150px] xl:h-[630px]">
                                <div class="grid grid-cols-[minmax(0,330px)_minmax(0,710px)] relative xl:grid-cols-[minmax(0,330px)_minmax(0,570px)]">
                                    <div class="pages-field flex flex-col gap-[50px] justify-center">
                                        <div class="header-content-carousel-hover swiper max-h-[450px] size-full pl-[30px]">
                                            <div class="swiper-wrapper">
                                                <!-- EN AZ 6 ADET OLACAK FOREACH YAPILMALI -->
                                                <?php foreach ($item['mega'] as $key => $item) : ?>
                                                    <div class="swiper-slide group/slide -z-2 [&.swiper-slide-active]:z-10">
                                                        <a href="<?= $item['url'] ?>" class="title text-[#98A2B7] text-[32px] font-normal leading-[48px] relative cursor-pointer before:absolute before:left-[-30px] before:top-[50%] before:translate-y-[-50%] before:w-[12px] before:h-[12px] before:bg-[#98A2B7] before:duration-350 duration-350  group-hover/slide:before:bg-green group-hover/slide:text-green"><?= $item['title'] ?></a>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- IMAGES -->
                                    <?php $list = ['image-1.jpg', 'image-2.jpg', 'image-3.jpg',]; ?>
                                    <div class="image-field-hover relative flex flex-col items-end">
                                        <div class="header-image-carousel swiper max-h-[530px] size-full">
                                            <div class="swiper-wrapper">
                                                <!-- EN AZ 6 ADET OLACAK FOREACH YAPILMALI -->
                                                <?php foreach ($list as $key => $item) : ?>
                                                    <?php for ($i = 0; $i < 3; $i++) : 2 ?>
                                                        <div class="swiper-slide group/slide duration-350 [&.swiper-slide-active]:z-10">
                                                            <div class="image w-full ml-auto max-w-[260px] h-[205px] aspect-[13/10] blur-[3.5px] opacity-0 overflow-hidden rounded-[16px] duration-350
                                                     group-[&.swiper-slide-prev]/slide:opacity-100 group-[&.swiper-slide-prev]/slide:mt-[5px]
                                                     group-[&.swiper-slide-next]/slide:opacity-100 group-[&.swiper-slide-next]/slide:mt-[-50px]
                                                     group-[&.swiper-slide-active]/slide:opacity-100 group-[&.swiper-slide-active]/slide:scale-y-[1.75] group-[&.swiper-slide-active]/slide:blur-0 group-[&.swiper-slide-active]/slide:mr-[240px] group-[&.swiper-slide-active]/slide:mt-[-50px] group-[&.swiper-slide-active]/slide:scale-x-[1.75] xl:h-[175px]">
                                                                <img src="../assets/image/jpg/<?= $item ?>" alt="<?= $item ?>" class="size-full object-cover object-center">
                                                            </div>
                                                        </div>
                                                    <?php endfor; ?>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- SHAPES -->
                                    <div class="triangle-shape drag-anim cursor-pointer absolute left-[460px] top-[10px] w-[127px] h-[127px]">
                                        <img src="../assets/svg/triangle.svg" alt="" class="size-full object-cover object-center">
                                    </div>
                                    <div class="rectangle-shape drag-anim cursor-pointer absolute left-[460px] bottom-0 w-[100px] h-[100px]">
                                        <img src="../assets/svg/rectangle.svg" alt="" class="size-full object-cover object-center">
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
            <div class="language-field group/lang relative">
                <div class="flex items-center gap-[10px]">
                    <i class="icon icon-earth text-green text-[26px] h-[26px] leading-normal flex duration-350 group-[&.is-fixed]/header:text-blue"></i>
                    <div class="language text-white opacity-85 text-[20px] leading-[28px] group-[&.is-fixed]/header:opacity-100 group-[&.is-fixed]/header:text-blue group-[&.blue]/header:text-blue">Tr</div>
                    <i class="icon icon-chevron-down2 text-white opacity-50 text-[9px] h-[9px] leading-normal flex duration-350 group-[&.is-fixed]/header:text-blue group-[&.blue]/header:text-blue group-[&.blue]/header:group-hover/lang:text-green group-hover/lang:opacity-100 group-hover/lang:rotate-180"></i>
                </div>
                <ul class="options bg-green group-[&.is-fixed]/header:bg-black/75 p-[20px] sm:p-[15px] grid grid-cols-2 gap-[10px] sm:gap-[5px] absolute top-full left-[50%] translate-x-[-50%] mt-[30px] w-max rounded-[20px] backdrop-blur-xl before:absolute before:left-0 before:top-[-50px] before:w-full before:h-[50px] before:bg-transparent after:absolute after:left-0 after:top-0 after:size-full after:pointer-events-none after:border-[1px] after:border-white after:border-solid after:bg-transparent after:rounded-[20px] after:[mask-image:linear-gradient(0deg,transparent,black)] after:opacity-40 duration-350 opacity-0 pointer-events-none invisible translate-y-[15px] group-hover/lang:opacity-100 group-hover/lang:pointer-events-auto group-hover/lang:visible group-hover/lang:translate-y-0 group-hover/lang:delay-250">
                    <?php $list = [
                        [
                            'title' => 'EN',
                            'image' => 'flag-en.png'
                        ],
                        [
                            'title' => 'TR',
                            'image' => 'flag-tr.png'
                        ],
                    ];
                    foreach ($list as $key => $item) : ?>
                        <li class="option group/option">
                            <a href="" class="flex items-center gap-[10px] rounded-[12px] bg-black/10 px-[12.5px] py-[10px] sm:px-[10px] sm:py-[7.5px] relative">
                                <div class="image w-[20px] aspect-square shrink-0"><img class="size-full object-cover
                                 object-center" src="../assets/image/static/<?= $item['image'] ?>" alt="" loading="lazy"></div>
                                <div class="text text-white/70 duration-350 group-hover/option:text-white sm:text-[14px]">TR</div>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
         
        </div>
        <div class="mobile-menu-wrapper relative w-[50px] h-[50px] hidden z-100 duration-350 lg:block">
                <div class="open-mobile-menu-trigger absolute right-0 bottom-0 group/trigger cursor-pointer size-[50px] bg-white shadow-lg opacity-100 pointer-events-auto duration-350 [&.in-active]:pointer-events-none [&.in-active]:opacity-0">
                    <div class="line absolute left-[50%] translate-x-[-50%] top-[40%] translate-y-[-50%] w-[30px] h-[2px] bg-green duration-350 group-[&.is-active]/trigger:bg-white"></div>
                    <div class="line absolute left-[50%] translate-x-[-50%] top-[50%] translate-y-[-50%] w-[30px] h-[2px] bg-green duration-350 group-[&.is-active]/trigger:bg-white"></div>
                    <div class="line absolute left-[50%] translate-x-[-50%] top-[60%] translate-y-[-50%] w-[30px] h-[2px] bg-green duration-350 group-[&.is-active]/trigger:bg-white"></div>
                </div>
                <div class="close-mobile-menu-trigger absolute right-0 bottom-0 group/trigger cursor-pointer size-[50px] rounded-full bg-secondary-700 shadow-lg opacity-0 pointer-events-none duration-350 [&.is-active]:pointer-events-auto [&.is-active]:opacity-100">
                    <div class="line absolute left-[50%] translate-x-[-50%] top-[50%] translate-y-[-50%] w-[30px] rotate-45 h-[1px] bg-green duration-350 group-[&.is-active]/trigger:bg-white"></div>
                    <div class="line absolute left-[50%] translate-x-[-50%] top-[50%] translate-y-[-50%] w-[30px] -rotate-45 h-[1px] bg-green duration-350 group-[&.is-active]/trigger:bg-white"></div>
                </div>
            </div>
    </div>
</header>

<div class="mobile-menu-field group/menu w-full h-auto invisible pointer-events-none opacity-0 overflow-y-scroll max-h-[630px] fixed left-0 top-[100px] z-90 duration-350 [&.menu-active]:pointer-events-auto [&.menu-active]:visible [&.menu-active]:opacity-100 xs:max-h-[590px] md:max-h-[800px]">
    <div class="wrapper">
        <?php $list = [
            [
                'title' => 'Homepage',
                'url' => 'index.php',
            ],
            [
                'title' => 'About',
                'url' => 'about.php',
            ],
            [
                'title' => 'Products',
                'url' => 'javascript:;',
                'mega' => [
                    [
                        'title' => 'Padbol Courts',
                        'url' => 'javascript:;',
                        'sub-menu' => [
                            [
                                'title' => 'Orıgın Padbol',
                                'url' => 'products.php',
                            ],
                            [
                                'title' => 'Roofed Padbol',
                                'url' => 'product-detail.php',
                            ],
                        ],
                    ],
                    [
                        'title' => 'Padbol Clubs',
                        'url' => 'javascript:;',
                        'sub-menu' => [
                            [
                                'title' => 'Orıgın Padbol',
                                'url' => 'padel-clubs.php',
                            ],
                            [
                                'title' => 'Roofed Padbol',
                                'url' => 'padel-clubs.php',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Projects',
                'url' => 'javascript:;',
                'mega' => [
                    [
                        'title' => 'We Orıgıns',
                        'url' => 'javascript:;',
                        'sub-menu' => [
                            [
                                'title' => 'Orıgın Padbol',
                                'url' => 'projects.php',
                            ],
                            [
                                'title' => 'Orıgın Roofed Padbol',
                                'url' => 'project-detail.php',
                            ],
                        ],
                    ],
                    [
                        'title' => 'We Panoramic',
                        'url' => 'javascript:;',
                        'sub-menu' => [
                            [
                                'title' => 'Orıgın Padbol',
                                'url' => 'products.php',
                            ],
                            [
                                'title' => 'Orıgın Roofed Padbol',
                                'url' => 'padel-clubs.php',
                            ],
                        ],
                    ],
                    [
                        'title' => 'Accessories',
                        'url' => 'javascript:;',
                        'sub-menu' => [
                            [
                                'title' => 'Orıgın Padbol',
                                'url' => 'projects.php',
                                'left' => 'left-[30px]'
                            ],
                            [
                                'title' => 'Orıgın Roofed Padbol',
                                'url' => 'padel-clubs.php',
                                'left' => 'left-[60px]'
                            ],
                        ],
                    ],
                ]
            ],
            [
                'title' => 'Blogs',
                'url' => 'blogs.php',
            ],
            [
                'title' => 'Contact',
                'url' => 'contact.php',
            ],
        ]; ?>

        <ul class="flex flex-col py-[30px] -z-2">
            <?php foreach ($list as $key => $item) : ?>
                <li class="page group/item -translate-x-[15px] opacity-0 duration-350 [&.is-active]:pointer-events-none [&.is-active]:z-10 group-[&.menu-active]/menu:translate-x-0 group-[&.menu-active]/menu:opacity-100" style="transition-delay: calc(<?= $key ?>*0.3s)">
                    <a href="<?= $item['url'] ?>" class="page text-[45px] text-white font-bold leading-normal uppercase px-[30px] 2xs:text-[30px]"><?= $item['title'] ?></a>
                    <?php if (isset($item['mega'])) : ?>
                        <div class="mega-menu z-3 hidden duration-350 w-full h-full py-[10px] bg-green group-[&.is-active]/item:block 2xs:py-[5px]">
                            <ul class="flex flex-col gap-[15px] pointer-events-auto 2xs:gap-[10px]">
                                <?php foreach ($item['mega'] as $key => $mega) : ?>
                                    <li class="sub-menu-item group/sub group-[&.is-active]/item:pointer-events-auto">
                                        <a href="<?= $mega['url'] ?>" class="flex w-full text-[30px] text-white leading-normal ease-manidar uppercase px-[40px] 2xs:text-[20px]"><?= $mega['title'] ?></a>
                                        <?php if (isset($mega['sub-menu'])) : ?>
                                            <div class="sub-menu relative z-3 hidden w-full h-full p-[10px] mt-[15px] bg-secondary-700 group-[&.is-active]/sub:block 2xs:p-[5px] 2xs:mt-[10px]">
                                                <ul class="flex flex-col gap-[15px]">
                                                    <?php foreach ($mega['sub-menu'] as $key => $sub) : ?>
                                                        <li class="group/sub group-[&.is-active]/sub:pointer-events-auto">
                                                            <a href="<?= $sub['url'] ?>" class="flex w-full text-[25px] text-white leading-normal ease-manidar uppercase px-[30px] 2xs:text-[16px]"><?= $sub['title'] ?></a>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                        <?php endif; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
            <?php $list = ['EN', 'AZ', 'AR', 'RU']; ?>
            <li class="language-field flex gap-[15px] mt-[30px] -translate-x-[15px] opacity-0 px-[30px] duration-350 group-[&.menu-active]/menu:translate-x-0 group-[&.menu-active]/menu:opacity-100 2xs:mt-[15px]" style="transition-delay: calc(<?= $key ?>*0.4s)">
                <?php foreach ($list as $key => $item) : ?>
                    <a href="" class="language text-[20px] text-green font-normal leading-normal ease-manidar uppercase -translate-x-[15px] opacity-0 duration-350 group-[&.menu-active]/menu:translate-x-0 group-[&.menu-active]/menu:opacity-100"><?= $item ?></a>
                <?php endforeach; ?>
            </li>
            <?php $list = [
                [
                    'title' => 'Contact Emaıl',
                    'text' => 'info@wepadbol.com.tr'
                ],
                [
                    'title' => 'Contact Phone',
                    'text' => '+90 212 678 13 13'
                ],
            ]; ?>
            <li class="contact-field flex flex-col gap-[15px] mt-[30px] -translate-x-[15px] opacity-0 px-[30px] duration-350 group-[&.menu-active]/menu:translate-x-0 group-[&.menu-active]/menu:opacity-100" style="transition-delay: calc(<?= $key ?>*0.6s)">
                <?php foreach ($list as $key => $item) : ?>
                    <div class="item flex flex-col ease-manidar -translate-x-[15px] opacity-0 duration-350 group-[&.menu-active]/menu:translate-x-0 group-[&.menu-active]/menu:opacity-100">
                        <small class="text text-[24px] text-white font-medium leading-normal uppercase"><?= $item['title'] ?></small>
                        <a href="javascript:;" class="language text-[16px] text-white font-normal leading-normal"><?= $item['text'] ?></a>
                    </div>
                <?php endforeach; ?>
            </li>
        </ul>
    </div>
</div>
<script>

</script>
<penta-yazilim class="block">
    <!-- <div id="smooth-wrapper" class="block">
        <div id="smooth-content"> -->