<?php
    $footerInfo = App\Models\FooterInfo::where('lang', app()->getLocale())->first();
?>
<footer class="footer-field w-full relative max-w-[1740px] mx-auto px-[30px]">
    <div class="content-wrapper grid grid-cols-[minmax(0,78px)_minmax(0,480px)_minmax(0,1100px)] md:grid-cols-1 md:gap-[30px] lg:grid-cols-[minmax(0,120px)_minmax(0,350px)_minmax(0,1000px)] xl:grid-cols-[minmax(0,160px)_minmax(0,480px)_minmax(0,910px)]">
        <a href="index.php" class="logo-wrapper flex items-center justify-center min-sm:mr-[60px] md:w-fit md:mx-auto md:rotate-90 md:h-[80px]">
            <svg class="xs:h-[250px]" width="78" height="354" viewBox="0 0 78 354" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M48.1953 9.39941L58.5505 9.39941L58.5505 -0.000380908L48.1953 -0.000380456L48.1953 9.39941Z" fill="#75BF00" />
                <path d="M17.2437 316.712L43.5821 309.178L34.2149 306.641L17.2383 301.169L17.2383 288.398L58.7956 302.915L58.7956 314.257L38.1398 321.24L58.7956 328.141L58.7956 339.565L17.2437 354L17.2437 341.229L34.2204 335.757L43.5876 333.22L17.2492 325.686L17.2492 316.723L17.2437 316.712Z" fill="#75BF00" />
                <path d="M41.8248 280.144C43.9428 279.828 45.6841 278.742 47.0488 276.893C48.4135 275.043 49.0958 272.583 49.0958 269.517C49.0958 265.125 48.0095 261.743 45.8369 259.364L53.3645 252.938C57.4367 256.849 59.4674 262.457 59.4674 269.757C59.4674 277.056 57.4913 282.146 53.5283 285.981C49.5707 289.817 44.2211 291.731 37.4742 291.731C31.1202 291.731 25.9781 289.855 22.0478 286.101C18.1175 282.348 16.1523 277.296 16.1523 270.952C16.1523 264.023 18.3795 258.72 22.8393 255.043C27.2991 251.366 33.6257 250.139 41.8193 251.356L41.8193 280.155L41.8248 280.144ZM33.0471 261.579C30.9291 261.683 29.297 262.637 28.1561 264.438C27.0152 266.238 26.4421 268.404 26.4421 270.941C26.4421 273.216 27.0261 275.174 28.1998 276.811C29.3679 278.453 30.9892 279.56 33.0471 280.144L33.0471 261.579Z" fill="#75BF00" />
                <path d="M2.93135 313.156C6.09196 315.414 9.82027 317.498 12.4295 318.868C13.7396 319.555 13.7342 321.432 12.4186 322.108C9.8039 323.456 6.05921 325.512 2.87677 327.744C1.65947 328.595 -0.00544536 327.711 1.33079e-05 326.233L0.021848 320.439L0.0436827 314.645C0.0491413 313.167 1.72497 312.299 2.92589 313.156L2.93135 313.156Z" fill="#03246B" />
                <path d="M77.7001 248.916L18.2435 248.916L18.2435 238.682L23.5112 237.967C19.499 235.005 17.4902 230.667 17.4902 224.956C17.4902 219.244 19.4554 214.525 23.3857 210.951C27.316 207.384 32.4854 205.594 38.8994 205.594C45.3134 205.594 50.7012 207.394 54.5769 210.99C58.4526 214.585 60.3904 219.293 60.3904 225.108C60.3904 230.291 58.4416 234.388 54.5387 237.405L77.7001 237.405L77.7001 248.905L77.7001 248.916ZM46.5525 219.724C44.5765 217.978 42.0218 217.105 38.8994 217.105C35.777 217.105 33.2987 217.967 31.2899 219.686C29.2811 221.404 28.2821 223.744 28.2821 226.707C28.2821 229.669 29.1446 232.102 30.875 234.164C32.6055 236.227 35.2802 237.258 38.9048 237.258C42.1965 237.258 44.7839 236.199 46.6835 234.083C48.5777 231.966 49.5275 229.505 49.5275 226.707C49.5275 223.908 48.5395 221.47 46.558 219.724L46.5525 219.724Z" fill="#03246B" />
                <path d="M18.1614 171.808L18.1613 161.099L59.4676 161.099L59.4676 171.41L54.2818 172.043C56.2906 173.259 57.7918 175.016 58.7962 177.318C59.8006 179.62 60.3301 181.879 60.3847 184.099C60.4392 190.073 58.5287 194.939 54.6584 198.698C50.7827 202.451 45.5041 204.328 38.8117 204.328C32.1193 204.328 26.8244 202.386 22.9268 198.496C19.0293 194.606 17.1296 189.702 17.2388 183.783C17.2388 181.246 17.741 178.933 18.7454 176.843C19.7498 174.754 21.1418 173.205 22.9268 172.201L18.1614 171.803L18.1614 171.808ZM30.8311 189.975C32.8126 191.933 35.471 192.91 38.8172 192.91C42.1634 192.91 44.8109 191.933 46.7597 189.975C48.7084 188.016 49.6855 185.561 49.6855 182.599C49.6855 179.637 48.6265 177.034 46.5086 175.103C44.3906 173.172 41.9669 172.206 39.2321 172.206C36.0551 172.206 33.3639 173.117 31.1641 174.945C28.9642 176.767 27.8615 179.32 27.8615 182.599C27.8615 185.561 28.8496 188.022 30.8311 189.975Z" fill="#03246B" />
                <path d="M1.01953 115.879L59.4662 115.879L59.4662 126.114L54.1985 126.828C58.2107 129.791 60.2195 134.128 60.2195 139.84C60.2195 145.552 58.2543 150.271 54.3241 153.844C50.3938 157.412 45.2243 159.201 38.8103 159.201C32.3963 159.201 27.0086 157.401 23.1329 153.806C19.2572 150.211 17.3193 145.502 17.3193 139.687C17.3193 134.504 19.2681 130.407 23.1711 127.39L1.01953 127.39L1.01953 115.89L1.01953 115.879ZM31.1627 145.072C33.1442 146.817 35.6934 147.69 38.8158 147.69C41.9382 147.69 44.4165 146.828 46.4253 145.11C48.4341 143.391 49.433 141.051 49.433 138.089C49.433 135.126 48.5705 132.693 46.8401 130.631C45.1097 128.569 42.4349 127.538 38.8103 127.538C35.5242 127.538 32.9313 128.596 31.0316 130.713C29.132 132.829 28.1876 135.29 28.1876 138.089C28.1876 140.887 29.1757 143.326 31.1572 145.072L31.1627 145.072Z" fill="#03246B" />
                <path d="M1.01953 100.255L23.1765 100.255C19.2735 97.2377 17.3248 93.1406 17.3248 87.958C17.3248 82.1424 19.2626 77.4344 23.1383 73.8392C27.014 70.2441 32.238 68.4437 38.8158 68.4437C45.3936 68.4437 50.4101 70.2277 54.3677 73.801C58.3253 77.3689 60.3068 82.0388 60.3068 87.8052C60.3068 93.5716 58.2707 97.7996 54.204 100.816L59.4716 101.531L59.4716 111.766L1.01953 111.766L1.01953 100.265L1.01953 100.255ZM31.0371 96.9213C32.9313 99.038 35.5242 100.096 38.8158 100.096C42.4404 100.096 45.1152 99.0653 46.8456 97.0031C48.576 94.941 49.4385 92.4533 49.4385 89.5455C49.4385 86.6377 48.4341 84.2428 46.4307 82.5243C44.4219 80.8058 41.8891 79.9439 38.8213 79.9439C35.7534 79.9439 33.1496 80.8167 31.1681 82.5625C29.1921 84.3082 28.1986 86.6323 28.1986 89.5455C28.1986 92.4587 29.1484 94.81 31.0426 96.9213L31.0371 96.9213Z" fill="#03246B" />
                <path d="M54.4127 63.0119C50.4278 66.9016 45.2584 68.8437 38.8989 68.8437C32.5395 68.8437 27.4138 66.8743 23.347 62.9355C19.2802 58.9966 17.2441 53.8248 17.2441 47.4256C17.2441 41.0263 19.2802 35.7781 23.347 31.8393C27.4192 27.9005 32.5996 25.9311 38.8989 25.9311C45.1983 25.931 50.4223 27.8732 54.4126 31.7629C58.403 35.6527 60.39 40.8736 60.39 47.431C60.39 53.9885 58.3975 59.133 54.4127 63.0173L54.4127 63.0119ZM46.5521 40.0062C44.4614 38.3422 41.9122 37.5075 38.8989 37.5075C35.8857 37.5075 33.462 38.3531 31.2895 40.0443C29.1169 41.7355 28.0306 44.196 28.0306 47.4201C28.0306 50.6443 29.1169 53.0283 31.2895 54.7195C33.462 56.4107 36.0003 57.2563 38.8989 57.2563C41.7975 57.2563 44.3195 56.4216 46.4647 54.7577C48.61 53.0938 49.6854 50.6443 49.6854 47.4201C49.6854 44.196 48.6373 41.6701 46.5521 40.0007L46.5521 40.0062Z" fill="#03246B" />
                <path d="M1.01953 12.5956L59.4662 12.5956L59.4662 23.9375L1.01953 23.9375L1.01953 12.5956Z" fill="#03246B" />
                <path d="M71.6196 168.634L68.6719 167.848L68.6719 167.063L71.6196 167.586L71.6196 168.634ZM71.6196 166.801L68.6719 166.015L68.6719 165.23L71.6196 165.753L71.6196 166.801Z" fill="#03246B" />
                <path d="M75.7555 157.766L75.2969 156.98C76.4378 156.653 77.1038 155.748 77.1038 154.351C77.1038 152.954 76.4487 152.191 75.4552 152.191C74.9694 152.191 74.6146 152.36 74.3689 152.714C74.1178 153.069 73.8722 153.647 73.6102 154.444C73.2936 155.398 73.0479 156.026 72.8514 156.331C72.4311 157.024 71.8306 157.379 71.0282 157.379C70.2258 157.379 69.6417 157.106 69.1941 156.566C68.7355 156.031 68.5117 155.36 68.5117 154.564C68.5117 153.134 69.336 152.049 70.4878 151.541L70.919 152.316C69.9092 152.736 69.4015 153.483 69.4015 154.569C69.4015 155.655 69.991 156.468 70.9845 156.468C71.4431 156.468 71.7815 156.309 72.0053 155.998C72.2291 155.687 72.4638 155.158 72.6986 154.438L72.9497 153.729C72.9879 153.587 73.0698 153.374 73.1844 153.102C73.2881 152.829 73.3809 152.616 73.4737 152.485C73.632 152.223 73.9432 151.765 74.2488 151.607C74.5218 151.438 74.9585 151.279 75.4279 151.279C76.2031 151.279 76.8308 151.569 77.3003 152.131C77.7588 152.692 77.9935 153.44 77.9935 154.367C77.9935 156.042 77.1529 157.302 75.7555 157.771L75.7555 157.766Z" fill="#03246B" />
                <path d="M77.9983 140.102C77.9983 141.056 77.6708 141.88 77.0158 142.551C76.3498 143.217 75.5365 143.544 74.5648 143.544C73.5931 143.544 72.7853 143.217 72.1302 142.551C71.4642 141.885 71.1367 141.056 71.1367 140.102C71.1367 139.147 71.4642 138.334 72.1302 137.668C72.7853 137.003 73.5986 136.659 74.5648 136.659C75.531 136.659 76.3443 136.997 77.0158 137.668C77.6708 138.334 77.9983 139.147 77.9983 140.102ZM77.1577 140.102C77.1577 139.381 76.9066 138.765 76.4098 138.268C75.8967 137.772 75.2854 137.521 74.5648 137.521C73.8442 137.521 73.2274 137.772 72.7307 138.269C72.2175 138.765 71.9719 139.381 71.9719 140.102C71.9719 140.822 72.223 141.438 72.7307 141.935C73.2274 142.431 73.8442 142.682 74.5648 142.682C75.2854 142.682 75.9022 142.431 76.4098 141.935C76.9066 141.438 77.1577 140.822 77.1577 140.102Z" fill="#03246B" />
                <path d="M69.534 113.551L69.534 117.806L72.9129 117.806L72.9129 113.747L73.7754 113.747L73.7754 117.806L77.8367 117.806L77.8367 118.723L68.666 118.723L68.666 113.551L69.5285 113.551L69.534 113.551Z" fill="#03246B" />
                <path d="M77.9983 102.513C77.9983 103.467 77.6708 104.291 77.0158 104.962C76.3498 105.628 75.5365 105.955 74.5648 105.955C73.5931 105.955 72.7853 105.628 72.1302 104.962C71.4642 104.297 71.1367 103.467 71.1367 102.513C71.1367 101.558 71.4642 100.745 72.1302 100.08C72.7853 99.414 73.5986 99.0703 74.5648 99.0703C75.531 99.0703 76.3443 99.4085 77.0158 100.08C77.6708 100.745 77.9983 101.558 77.9983 102.513ZM77.1577 102.513C77.1577 101.793 76.9066 101.176 76.4098 100.68C75.8967 100.183 75.2854 99.9323 74.5648 99.9323C73.8442 99.9323 73.2274 100.183 72.7307 100.68C72.2175 101.176 71.9719 101.793 71.9719 102.513C71.9719 103.233 72.223 103.849 72.7307 104.346C73.2274 104.842 73.8442 105.093 74.5648 105.093C75.2854 105.093 75.9022 104.842 76.4098 104.346C76.9066 103.849 77.1577 103.233 77.1577 102.513Z" fill="#03246B" />
                <path d="M77.9983 88.0342C77.9983 88.9889 77.6708 89.8126 77.0158 90.4837C76.3498 91.1492 75.5365 91.4766 74.5648 91.4766C73.5931 91.4766 72.7853 91.1492 72.1302 90.4837C71.4642 89.8181 71.1367 88.9889 71.1367 88.0342C71.1367 87.0795 71.4642 86.2666 72.1302 85.601C72.7853 84.9354 73.5986 84.5918 74.5648 84.5918C75.531 84.5918 76.3443 84.93 77.0158 85.601C77.6708 86.2666 77.9983 87.0795 77.9983 88.0342ZM77.1577 88.0342C77.1577 87.314 76.9066 86.6976 76.4098 86.2011C75.8967 85.7047 75.2854 85.4537 74.5648 85.4537C73.8442 85.4537 73.2274 85.7047 72.7307 86.2011C72.2175 86.6976 71.9719 87.314 71.9719 88.0342C71.9719 88.7543 72.223 89.3707 72.7307 89.8672C73.2274 90.3636 73.8442 90.6146 74.5648 90.6146C75.2854 90.6146 75.9022 90.3636 76.4098 89.8672C76.9066 89.3707 77.1577 88.7543 77.1577 88.0342Z" fill="#03246B" />
                <path d="M72.1318 73.2614L72.1318 75.149L76.1003 75.149C77.2248 75.149 77.1375 74.5216 77.0829 73.2614L77.8416 73.2614C78.1146 75.0945 77.6178 76.011 76.1003 76.011L72.1318 76.011L72.1318 77.3857L71.2912 77.3857L71.2912 76.011L69.7191 76.011L69.457 75.149L71.2912 75.149L71.2912 73.2614L72.1318 73.2614Z" fill="#03246B" />
                <path d="M72.1323 59.3845C72.7983 58.7189 73.6116 58.3916 74.5669 58.3916C75.5222 58.3916 76.3355 58.7189 77.0015 59.3845C77.6675 60.0391 77.995 60.8411 77.995 61.7685C77.995 62.936 77.5092 63.8088 76.5539 64.4144L77.8367 64.4144L77.8367 65.2764L68.666 65.2764L68.666 64.4144L72.569 64.4144C71.6137 63.8143 71.1279 62.936 71.1279 61.7685C71.1279 60.8411 71.4554 60.0391 72.1214 59.3845L72.1323 59.3845ZM77.1653 61.834C77.1653 61.1138 76.9142 60.4974 76.4174 60.0009C75.9043 59.5045 75.2929 59.2535 74.5724 59.2535C73.8518 59.2535 73.235 59.5045 72.7382 60.0009C72.2251 60.4974 71.9795 61.1138 71.9795 61.834C71.9795 62.5541 72.2306 63.1705 72.7382 63.667C73.235 64.1634 73.8518 64.4144 74.5724 64.4144C75.2929 64.4144 75.9098 64.1634 76.4174 63.667C76.9142 63.1705 77.1653 62.5541 77.1653 61.834Z" fill="#03246B" />
                <path d="M71.29 44.7721L71.29 43.9101L77.8404 43.9101L77.8404 44.7721L76.5576 44.7721C77.5129 45.3722 77.9987 46.2505 77.9987 47.418C77.9987 48.3454 77.6712 49.1474 77.0053 49.8129C76.3393 50.4676 75.5259 50.7949 74.5707 50.7949C73.6154 50.7949 72.802 50.4676 72.1361 49.8129C71.4701 49.1474 71.1426 48.3454 71.1426 47.418C71.1426 46.2505 71.6284 45.3777 72.5837 44.7721L71.3009 44.7721L71.29 44.7721ZM77.1581 47.3525C77.1581 46.6324 76.907 46.0159 76.4103 45.5195C75.8971 45.023 75.2858 44.7721 74.5652 44.7721C73.8447 44.7721 73.2278 45.023 72.7311 45.5195C72.218 46.0159 71.9723 46.6324 71.9723 47.3525C71.9723 48.0726 72.2234 48.6891 72.7311 49.1856C73.2278 49.682 73.8447 49.933 74.5652 49.933C75.2858 49.933 75.9026 49.682 76.4103 49.1856C76.907 48.6891 77.1581 48.0726 77.1581 47.3525Z" fill="#03246B" />
                <path d="M77.841 35.5303L68.2773 35.5303L68.2773 34.6678L77.841 34.6678L77.841 35.5303Z" fill="#03246B" />
                <path d="M77.841 26.2842L68.2773 26.2842L68.2773 25.4217L77.841 25.4217L77.841 26.2842Z" fill="#03246B" />
                <path d="M68.6719 15.6027L71.6196 16.3882L71.6196 17.1738L68.6719 16.6501L68.6719 15.6027ZM68.6719 13.7696L71.6196 14.5552L71.6196 15.3408L68.6719 14.8171L68.6719 13.7696Z" fill="#03246B" />
                <path d="M5.49569 0.103414C8.034 0.103414 10.0264 2.09467 10.0264 4.68602C10.0264 7.27737 8.034 9.2959 5.49569 9.2959C2.95738 9.2959 1.01953 7.25009 1.01953 4.68602C1.01953 2.12195 3.01197 0.103414 5.49569 0.103414ZM5.49569 8.15023C7.48813 8.15023 9.07116 6.67727 9.07116 4.65875C9.07116 2.64023 7.48813 1.24908 5.52299 1.24908C3.55784 1.24908 1.92022 2.69478 1.92022 4.68602C1.92022 6.67727 3.53055 8.15023 5.49569 8.15023ZM7.84295 5.39522L7.84295 6.43178L3.36679 6.43178C3.28491 6.02262 3.23032 5.44978 3.23032 4.71329C3.23032 3.86769 3.36679 3.48582 3.55784 3.1585C3.7489 2.913 4.10371 2.72203 4.54041 2.72203C5.0317 2.72203 5.41381 3.10392 5.57757 3.64947L5.63216 3.64947C5.79592 3.21303 6.12345 2.96754 6.72391 2.83115C7.40625 2.69476 7.67918 2.61294 7.84295 2.50383L7.84295 3.6222C7.67918 3.75858 7.26978 3.84043 6.7512 3.97682C6.25991 4.05865 6.04156 4.3314 6.04156 4.90422L6.04156 5.39523L7.84295 5.39522ZM5.30464 5.36795L5.30464 4.87695C5.30464 4.30412 5.11358 3.84043 4.64959 3.84043C4.24018 3.84043 3.96725 4.14048 3.96725 4.79514C3.96725 5.06791 3.99454 5.25885 4.02183 5.36795L5.30464 5.36795Z" fill="#03246B" />
            </svg>

        </a>
        <div class="information-wrapper flex flex-col p-[50px] bg-blue rounded-[14px] md:p-[30px]">
            
            <?php $footerInfo = \App\Models\FooterInfo::where('lang' , app()->getLocale())->first(); ?>
            <?php $offices = \App\Models\Office::where('lang' , app()->getLocale())->get(); ?>
            <?php 
                $footer_menu = App\Models\Menu::where(['lang' => app()->getLocale(), 'menu_type' => 'footer'])->with('children')
                ->where('parent_menu_id', 0) // only root menus
                ->get();
            ?>
            <div class="social-media flex items-center gap-[30px] md:gap-[15px]">

                    <a target="_blank"  href="<?= $footerInfo->facebook_url?>" class="block relative social-item size-full md:size-[50px]">
                        <i class="icon icon-facebook text-[18px] w-[18px] h-[27px] text-white leading-normal flex items-center absolute left-[50%] translate-x-[-50%] top-[50%] translate-y-[-50%]"></i>
                    </a>
                    <a target="_blank"  href="<?= $footerInfo->x_url?>" class="block relative social-item size-full md:size-[50px]">
                        <i class="icon icon-x text-[22px] w-[22px] h-[18px] text-white leading-normal flex items-center absolute left-[50%] translate-x-[-50%] top-[50%] translate-y-[-50%]"></i>
                    </a>
                    <a target="_blank"  href="<?= $footerInfo->linkedin_url?>" class="block relative social-item size-full md:size-[50px]">
                        <i class="icon icon-linkedin text-[18px] w-[18px] h-[18px] text-white leading-normal flex items-center absolute left-[50%] translate-x-[-50%] top-[50%] translate-y-[-50%]"></i>
                    </a>
                    <a target="_blank"  href="<?= $footerInfo->youtube_url?>" class="block relative social-item size-full md:size-[50px]">
                        <i class="icon icon-youtube text-[22px] w-[22px] h-[16px] text-white leading-normal flex items-center absolute left-[50%] translate-x-[-50%] top-[50%] translate-y-[-50%]"></i>
                    </a>
                    <a target="_blank"  href="<?= $footerInfo->instagram_url?>" class="block relative social-item size-full md:size-[50px]">
                        <i class="icon icon-instagram text-[22px] w-[22px] h-[22px] text-white leading-normal flex items-center absolute left-[50%] translate-x-[-50%] top-[50%] translate-y-[-50%]"></i>
                    </a>
            </div>
            <div class="line w-full h-[1px] bg-white opacity-20 mt-[50px] mb-[40px] md:my-[30px]"></div>
            <div class="information-field flex flex-col gap-[20px]">
                <ul>
                    <?php foreach ($offices as $key => $item) : ?>
                        <li class="group/li <?= $key == 0 ? 'is-active' : '' ?> flex flex-col gap-[20px]">
                            <div class="title  text-white text-[24px] font-normal leading-[36px] opacity-50 cursor-pointer duration-350 group-hover/li:opacity-100 group-[&.is-active]/li:font-bold group-[&.is-active]/li:opacity-100"><?= $item->title ?></div>
                            <a target="_blank" href="<?= $item->lat ?>" class="expo-field flex flex-col gap-[20px] w-full max-w-[270px] invisible pointer-events-none opacity-0 h-0 mb-0 duration-350 group-[&.is-active]/li:mb-[30px] group-[&.is-active]/li:visible group-[&.is-active]/li:opacity-100 group-[&.is-active]/li:pointer-events-auto">
                                <p class="address text-[16px] text-white leading-[19px] opacity-75"><?= $item->address ?></p>
                                <div class="flex items-center gap-[15px]">
                                    <span class="text text-[14px] text-white font-medium leading-normal">Get Directions</span>
                                    <i class="icon icon-map text-[18px] h-[18px] text-green leading-normal flex"></i>
                                </div>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="line w-full h-[1px] bg-white opacity-20 mt-[40px] mb-[60px] md:my-[30px]"></div>
            <div class="contact-field flex flex-col gap-[40px]">
                <div class="item group/item">
                    <a href="" class="flex items-center gap-[25px]">
                        <i class="icon icon-phone text-[30px] h-[30px] text-white/35 duration-450 group-hover/item:text-green"></i>
                        <div class="flex flex-col">
                            <h5 class="text text-white text-[20px] font-bold leading-[30px]">Phone</h5>
                            <span class="text text-white text-[18px] font-normal leading-[28px] opacity-75"><?= $footerInfo->phone ?></span>
                        </div>
                    </a>
                </div>
                <div class="item group/item">
                    <a href="" class="flex items-center gap-[25px]">
                        <i class="icon icon-mail text-[30px] h-[30px] text-white/35 duration-450 group-hover/item:text-green"></i>
                        <div class="flex flex-col">
                            <h5 class="text text-white text-[20px] font-bold leading-[30px]">E-MAİL</h5>
                            <span class="text text-white text-[18px] font-normal leading-[28px] opacity-75"><?= $footerInfo->email ?></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="page-wrapper flex items-center justify-center bg-blue relative ml-[20px] rounded-[14px] px-[110px] sm:hidden  md:p-[30px] md:ml-0 xl:px-[60px]">
            <div class="background absolute left-0 top-0 size-full mix-blend-screen overflow-hidden z-2">
                <img src="../assets/image/jpg/image-11.jpg" alt="" class="w-full h-full object-cover object-center">
            </div>
            <div class="grid grid-cols-3 relative z-3 gap-y-[100px] w-full">
                 <?php foreach ($footer_menu as $menu) : ?>
                <div class="page-field flex justify-center flex-col h-fit overflow-hidden px-[15px] py-[50px] md:py-[30px]">
                    <h4 class="text text-white text-[24px] font-bold leading-[36px] mb-[25px]"><?= $menu->title ?></h4>
                    <ul class="flex flex-col gap-[15px]">
                        <?php foreach ($menu->children as $child) : ?>
                            <li class="group/li fx fx-text-hover-with-child overflow-hidden relative">
                                <a href="<?= $child->seo_url ?>" class="text fx-child text-white text-[16px] leading-normal tracking-[0.16px] opacity-75 duration-350 group-hover/li:opacity-100"> <?= $child->title ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="footer-bottom py-[20px]">
        <div class="container max-w-[1440px]">
            <div class="wrapper relative flex items-center sm:flex-col justify-between gap-[15px]">
                <div class="copyright-field md:text-center">
                    <span class="text text-[16px] text-[#52555C]">Wepadbol is a Brand of <a href="#popup-gdpr" class="font-bold duration-450 hover:text-green" data-fancybox>Integral Group</a></span>
                </div>
                <div class="copyright-field md:text-center">
                    <span class="text text-[16px] text-[#52555C]"> © 2023 <a href="#popup-gdpr" class="duration-450 hover:text-green" data-fancybox>wepadbol.com </a> | All rights reserved</span>
                </div>
                <div class="right-field">
                    <a href="https://webintek.com.tr" title="Web Tasarım" target="_blank" class="group flex justify-center max-w-[105px] w-full h-[40px] items-center gap-[9px]">
                        <img src="../assets/image/png/image-9.png" alt="" class="size-full object-contain object-center">
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- popup -->
 <!-- POPUP | GDPR -->
<section id="popup-gdpr" class="hidden !rounded-[20px] !m-0 !p-[30px] !max-w-[1024px] w-full">
    <div class="inner w-full">
        <div class="text-editor !max-w-full">
            <!-- Stylelar tasarımı yansıtmak adına eklenmiştir. / Backendde silinerek panel editörü üzerinden eklenmeli. -->
            <h4><strong>KİŞİSEL VERİLERİN KORUNMASI</strong></h4>
            <h5><strong>İNTERNET SİTESİ ÇEREZ POLİTİKASI</strong></h5>

            <p>Kişisel verileriniz; veri sorumlusu olarak Firma Adı (“ŞİRKET” veya Firma Adı” olarak adlandırılacaktır.) tarafından işletilen (www.alanadi.com) internet sitesini ziyaret edenlerin gizliliğini korumak Kurumumuzun önde gelen ilkelerindendir. Bu Çerez Kullanımı Politikası (“Politika”), tüm web sitesi ziyaretçilerimize ve kullanıcılarımıza hangi tür çerezlerin hangi koşullarda kullanıldığını açıklamaktadır.</p>
            <p>Çerezler, bilgisayarınız ya da mobil cihazınız üzerinden ziyaret ettiğiniz internet siteleri tarafından cihazınıza veya ağ sunucusuna depolanan küçük metin dosyalarıdır.</p>
            <p>Genellikle ziyaret ettiğiniz internet sitesini kullanmanız sırasında size kişiselleştirilmiş bir deneyim sunmak, sunulan hizmetleri geliştirmek ve deneyiminizi iyileştirmek için kullanılır ve bir internet sitesinde gezinirken kullanım kolaylığına katkıda bulunabilir. Çerez kullanılmasını tercih etmezseniz tarayıcınızın ayarlarından Çerezleri silebilir ya da engelleyebilirsiniz. Ancak bunun internet sitemizi kullanımınızı etkileyebileceğini hatırlatmak isteriz. Tarayıcınızdan Çerez ayarlarınızı değiştirmediğiniz sürece bu sitede çerez kullanımını kabul ettiğinizi varsayacağız.</p>

            <h6><strong>1. ÇEREZLERDE HANGİ TÜR VERİLER İŞLENİR?</strong></h6>
            <p>İnternet sitelerinde yer alan çerezlerde, türüne bağlı olarak, siteyi ziyaret ettiğiniz cihazdaki tarama ve kullanım tercihlerinize ilişkin veriler toplanmaktadır. Bu veriler, eriştiğiniz sayfalar, incelediğiniz hizmet ve ürünler, tercih ettiğiniz dil seçeneği ve diğer tercihlerinize dair bilgileri kapsamaktadır.</p>

            <h6><strong>2. ÇEREZ NEDİR ve KULLANIM AMAÇLARI NELERDİR?</strong></h6>
            <p>Çerezler, ziyaret ettiğiniz internet siteleri tarafından tarayıcılar aracılığıyla cihazınıza veya ağ sunucusuna depolanan küçük metin dosyalarıdır. Sitede tercih ettiğiniz dil ve diğer ayarları içeren bu küçük metin dosyaları, siteye bir sonraki ziyaretinizde tercihlerinizin hatırlanmasına ve sitedeki deneyiminizi iyileştirmek için hizmetlerimizde geliştirmeler yapmamıza yardımcı olur. Böylece bir sonraki ziyaretinizde daha iyi ve kişiselleştirilmiş bir kullanım deneyimi yaşayabilirsiniz.</p>
            <p>İnternet Sitemizde çerez kullanılmasının başlıca amaçları aşağıda sıralanmaktadır:</p>
            <ul>
                <li>İnternet sitesinin işlevselliğini ve performansını arttırmak yoluyla sizlere sunulan hizmetleri geliştirmek,</li>
                <li>İnternet Sitesini iyileştirmek ve İnternet Sitesi üzerinden yeni özellikler sunmak ve sunulan özellikleri sizlerin tercihlerine göre kişiselleştirmek;</li>
                <li>İnternet Sitesinin, sizin ve Kurum’un hukuki ve ticari güvenliğinin teminini sağlamak, Site üzerinden sahte işlemlerin gerçekleştirilmesini önlemek;</li>
                <li>5651 sayılı Internet Ortamında Yapılan Yayınların Düzenlenmesi ve Bu Yayınlar Yoluyla İşlenen Suçlarla Mücadele Edilmesi Hakkında Kanun ve Internet Ortamında Yapılan Yayınların Düzenlenmesine Dair Usul ve Esaslar Hakkında Yönetmelik’ten kaynaklananlar başta olmak üzere, kanuni ve sözleşmesel yükümlülüklerini yerine getirmek.</li>
            </ul>

            <h5><strong>3.İNTERNET SİTEMİZDE KULLANILAN ÇEREZ TÜRLERİ</strong></h5>

            <h6><strong>3.1. Oturum Çerezleri</strong></h6>
            <p>Oturum çerezlerini ziyaretinizi süresince internet sitesinin düzgün bir şekilde çalışmasının teminini sağlamaktadır. Sitelerimizin ve sizin, ziyaretinizde güvenliğini, sürekliliğini sağlamak gibi amaçlarla kullanılırlar. Oturum çerezleri geçici çerezlerdir, siz tarayıcınızı kapatıp sitemize tekrar geldiğinizde silinir, kalıcı değillerdir.</p>

            <h6><strong>3.2. Kalıcı Çerezler</strong></h6>
            <p>Bu tür çerezler tercihlerinizi hatırlamak için kullanılır ve tarayıcılar vasıtasıyla cihazınızda depolanır Kalıcı çerezler, sitemizi ziyaret ettiğiniz tarayıcınızı kapattıktan veya bilgisayarınızı yeniden başlattıktan sonra bile saklı kalır. Tarayıcınızın ayarlarından silinene kadar bu çerezler tarayıcınızın alt klasörlerinde tutulurlar.</p>
            <p>Kalıcı çerezlerin bazı türleri; İnternet Sitesini kullanım amacınız gibi hususlar göz önünde bulundurarak sizlere özel öneriler sunulması için kullanılabilmektedir.</p>
            <p>Kalıcı çerezler sayesinde İnternet Sitemizi aynı cihazla tekrardan ziyaret etmeniz durumunda, cihazınızda İnternet Sitemiz tarafından oluşturulmuş bir çerez olup olmadığı kontrol edilir ve var ise, sizin siteyi daha önce ziyaret ettiğiniz anlaşılır ve size iletilecek içerik bu doğrultuda belirlenir ve böylelikle sizlere daha iyi bir hizmet sunulur.</p>

            <h6><strong>3.3. Zorunlu/Teknik Çerezler</strong></h6>
            <p>Ziyaret ettiğiniz internet sitesinin düzgün şekilde çalışabilmesi için zorunlu çerezlerdir. Bu tür çerezlerin amacı, sitenin çalışmasını sağlamak yoluyla gerekli hizmet sunmaktır. Örneğin, internet sitesinin güvenli bölümlerine erişmeye, özelliklerini kullanabilmeye, üzerinde gezinti yapabilmeye olanak verir.</p>

            <h6><strong>3.4. Analitik Çerezler</strong></h6>
            <p>İnternet sitesinin kullanım şekli, ziyaret sıklığı ve sayısı, hakkında bilgi toplayan ve ziyaretçilerin siteye nasıl geçtiğini gösterirler. Bu tür çerezlerin kullanım amacı, sitenin işleyiş biçimini iyileştirerek performans arttırmak ve genel eğilim yönünü belirlemektir. Ziyaretçi kimliklerinin tespitini sağlayabilecek verileri içermezler. Örneğin, gösterilen hata mesajı sayısı veya en çok ziyaret edilen sayfaları gösterirler.</p>

            <h6><strong>3.5. İşlevsel/Fonksiyonel Çerezler</strong></h6>
            <p>Ziyaretçinin site içerisinde yaptığı seçimleri kaydederek bir sonraki ziyarette hatırlar. Bu tür çerezlerin amacı ziyaretçilere kullanım kolaylığı sağlamaktır. Örneğin, site kullanıcısının ziyaret ettiği her bir sayfada kullanıcı şifresini tekrar girmesini önler.</p>

            <h6><strong>3.6. Hedefleme/Reklam Çerezleri</strong></h6>
            <p>Ziyaretçilere sunulan reklamların etkinliğinin ölçülmesi ve reklamların kaç kere görüntülendiğinin hesaplanmasını sağlarlar. Bu tür çerezlerin amacı, ziyaretçilerin ilgi alanlarına özelleştirilmiş reklamların sunulmasıdır.</p>
            <p>Aynı şekilde, ziyaretçilerin gezinmelerine özel olarak ilgi alanlarının tespit edilmesini ve uygun içeriklerin sunulmasını sağlarlar. Örneğin, ziyaretçiye gösterilen reklamın kısa süre içinde tekrar gösterilmesini engeller.</p>

            <h5><strong>4. ÇEREZ TERCİHLERİ NASIL YÖNETİLİR?</strong></h5>
            <p>Çerezlerin kullanımına ilişkin tercihlerinizi değiştirmek ya da çerezleri engellemek veya silmek için tarayıcınızın ayarlarını değiştirmeniz yeterlidir.</p>
            <p>Birçok tarayıcı çerezleri kontrol edebilmeniz için size çerezleri kabul etme veya reddetme, yalnızca belirli türdeki çerezleri kabul etme ya da bir internet sitesinin cihazınıza çerez depolamayı talep ettiğinde tarayıcı tarafından uyarılma seçeneği sunar.</p>
            <p>Aynı zamanda, daha önce tarayıcınıza kaydedilmiş çerezlerin silinmesi de mümkündür.</p>
            <p>Çerezleri devre dışı bırakır veya reddederseniz, bazı tercihleri manuel olarak ayarlamanız gerekebilir, hesabınızı tanıyamayacağımız ve ilişkilendiremeyeceğimiz için internet sitesindeki bazı özellikler ve hizmetler düzgün çalışmayabilir. Tarayıcınızın ayarlarını aşağıdaki tablodan ilgili link’e tıklayarak değiştirebilirsiniz.</p>

            <h5><strong>5. İNTERNET SİTESİ GİZLİLİK POLİTİKASI’NIN YÜRÜRLÜĞÜ</strong></h5>
            <p>İnternet Sitesi Gizlilik Politikası ..../..../.... .tarihlidir. Politika’nın tümünün veya belirli maddelerinin yenilenmesi durumunda Politika’nın yürürlük tarihi güncellenecektir. Gizlilik Politikası Kurum’un internet sitesinde (www.alanadi.com) yayımlanır ve kişisel veri sahiplerinin talebi üzerine ilgili kişilerin erişimine sunulur.</p>
            <p><strong>Firma Adı</strong><br><strong>Adres:</strong> Mahalle Adı Sokak Adı. No: 1/A, 34444 İlçe Adı/İl Adı<br><strong>Telefon:</strong> +90 216 555 55 55<br><strong>E – Posta:</strong> mail@alanadi.com<br><strong>Web Adresi:</strong> www.alanadi.com</p>
        </div>
    </div>
</section>


<!-- CONTACT FORM -->
<section id="contact-form" class="hidden !rounded-[20px] !m-0 !p-[40px] !max-w-[825px] w-full">
    <div class="inner w-full">
        <div class="title-field flex flex-col">
            <h3 class="title relative text-[48px] text-blue font-medium leading-[64px] ml-[65px] before:absolute before:left-[-65px] before:bottom-[15px] before:size-[20px] before:bg-green md:before:hidden md:ml-0 md:text-[28px]"><strong>CONTACT</strong> FORM</h3>
            <p class="expo texxt-[18px] text-[#5255C] leading-[28px] opacity-65 mt-[30px]">We will be happy to review our entire product range and provide you with a tailor-made offer to find the best solution for your needs.</p>
        </div>
        <form action="">
            <div class="form-field grid grid-cols-2 gap-[30px] mt-[40px] md:mt-[15px] md:gap-[15px] xsm:grid-cols-1">
                <div class="item group/item xsm:col-span-2">
                    <input type="text" placeholder="İsim Soyisim" class="text text-[16px] text-blue placeholder:text-blue placeholder:font-normal font-bold leading-[19px] p-[20px] h-[60px] border border-solid border-blue/15 rounded-[16px] w-full duration-350 group-hover/item:border-green">
                </div>
                <div class="item group/item xsm:col-span-2">
                    <input type="email" placeholder="E-Postanız" class="text text-[16px] text-blue placeholder:text-blue placeholder:font-normal font-bold leading-[19px] p-[20px] h-[60px] border border-solid border-blue/15 rounded-[16px] w-full duration-350 group-hover/item:border-green">
                </div>
                <div class="item group/item xsm:col-span-2">
                    <input type="tel" placeholder="Telefon Numaranız" class="text text-[16px] text-blue placeholder:text-blue placeholder:font-normal font-bold leading-[19px] p-[20px] h-[60px] border border-solid border-blue/15 rounded-[16px] w-full duration-350 group-hover/item:border-green">
                </div>
                <div class="item group/item xsm:col-span-2">
                    <input type="text" placeholder="Firma Adınız" class="text text-[16px] text-blue placeholder:text-blue placeholder:font-normal font-bold leading-[19px] p-[20px] h-[60px] border border-solid border-blue/15 rounded-[16px] w-full duration-350 group-hover/item:border-green">
                </div>
                <div class="item group/item col-span-2">
                    <textarea type="text" placeholder="Mesajınız.." class="text text-[16px] text-blue placeholder:text-blue placeholder:font-normal font-bold leading-[19px] p-[20px] h-[165px] border border-solid border-blue/15 rounded-[16px] w-full resize-none duration-350 group-hover/item:border-green sm:h-[75px]"></textarea>
                </div>
                <div class="submit-field col-span-2 max-w-[465px] flex justify-between items-center ml-[30px] gap-[60px] lg:gap-[20px] sm:mx-0 sm:justify-between sm:max-w-full xsm:items-start xsm:flex-col">
                    <div class="item group/item  relative">
                        <div class="form-el flex items-center gap-[15px] h-full">
                            <input type="checkbox" class="peer cursor-pointer absolute left-0 top-0 w-[20px] h-full opacity-0 z-10">
                            <div class="box relative shrink-0 h-[21px] w-[21px] rounded-[3px] overflow-hidden before:absolute before:duration-350 peer-checked:before:!opacity-100 peer-checked:before:!scale-100 before:scale-0 before:opacity-0 before:left-[50%] before:top-[50%] before:translate-x-[-50%] before:translate-y-[-50%] before:w-[40%] before:h-[40%] before:bg-blue duration-350 shadow-[0_0_0_1px_rgb(0_0_0/.0)] bg-transparent border border-solid border-blue/16"></div>
                            <label for="acceptance" class="text-[15px] text-[#52555C] leading-normal font-light"><a href="#popup-gdpr" class="inline-block relative text-blue underline font-normal underline-offset-8" data-fancybox="">Aydınlatma Metni</a>’ni Okudum. Kabul ediyorum.</label>
                        </div>
                    </div>
                    <div class="item group/item col-span-1 xsm:w-full lg:col-span-2 relative">
                        <div class="button-field flex justify-end">
                            <button class="button group/button relative fx fx-text-hover-with-child bg-green flex justify-center items-center gap-[15px] px-[34px] py-[20px] w-fit overflow-hidden rounded-[8px] before:absolute before:left-[50%] before:translate-x-[-50%] before:top-[50%] before:translate-y-[-50%] before:size-[30px] before:scale-0 before:bg-blue before:rounded-full before:duration-350 min-sm:hover:before:scale-[5.5] md:h-[60px] sm:h-[50px]">
                                <small class="text fx-child relative z-2 text-white text-[16px] font-medium leading-[19px] duration-350">Send</small>
                                <i class="icon relative z-2 icon-chevron-right text-white text-[10px] h-[10px] flex items-center leading-normal duration-350 min-sm:group-hover/button:translate-x-[5px]"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- popup -->

 <!-- BG OVERLAY -->
    <div class="bg-overlay-general-footer fixed left-0 top-0 z-[80] opacity-0 invisible backdrop-blur-[5px] duration-500 [&.active]:opacity-100 [&.active]:visible [&.black]:bg-black/60 size-full group"></div>
        <!-- COOKIE -->
        <div class="cookie-box fixed top-auto bottom-[20px] right-[20px] left-[20px] mr-0 ml-auto w-fit max-w-[550px] md:max-w-full z-[200] duration-450 xs:w-full xs:left-0 xs:bottom-0 xs:right-0 bg-cookie p-[30px] rounded-[20px] xs:rounded-none translate-y-[150%] [&.accepted]:opacity-0 [&.accepted]:invisible [&.accepted]:translate-y-[250%] sm:sm:max-h-[calc(100dvh-40px)] sm:scrollbar sm:scrollbar-w-[5px] sm:scrollbar-track-rounded-[5px] sm:scrollbar-thumb-rounded-[5px] sm:scrollbar-thumb-green sm:scrollbar-track-green/10 sm:overflow-x-hidden sm:overflow-y-auto">
            <div class="close close-cookie absolute right-[20px] top-[20px] cursor-pointer group/close">
                <div class="icon icon-cross icon-close group-hover/close:text-green group-hover/close:rotate-90 text-white text-[14px] h-[14px] block leading-none duration-350"></div>
            </div>
            <div class="text-field text-white">
                <div class="title font-medium text-[18px] mb-[15px]">Çerez Ayarları</div>
                <div class="expo text-[14px] sm:text-[12px] text-white/50">Bu web sitesinde, cihaz bilgilerini ve kişisel verileri işlemek için çerezleri ve benzer işlevleri kullanıyoruz. İşleme, içeriğin, harici hizmetlerin ve üçüncü şahısların unsurlarının, istatistiksel analiz/ölçümün, kişiselleştirilmiş reklamcılığın ve sosyal medyanın entegrasyonunun entegrasyonuna hizmet eder. İşleve bağlı olarak, veriler üçüncü taraflara aktarılır ve onlar tarafından işlenir. Bu onay isteğe bağlıdır, web sitemizin kullanımı için gerekli değildir ve sol alttaki simge kullanılarak herhangi bir zamanda iptal edilebilir.</div>
            </div>
            <div class="split my-[20px] sm:my-[10px] bg-white/5 w-full h-[1px]"></div>
            <div class="action-field flex items-center justify-between gap-[20px] sm:flex-col">
                <button class="accept-cookie close-cookie button group/button w-full flex justify-center items-center gap-[20px] bg-green px-[20px] hover:bg-primary-600 h-[45px] md:h-[50px] duration-350">
                    <div class="text text-[13px] text-white font-medium relative z-2 whitespace-nowrap duration-350">Çerezleri Kabul Et</div>
                </button>
                <button class="button group/button w-full flex justify-center items-center gap-[20px] bg-transparent px-[20px] h-[45px] md:h-[50px] duration-350 border border-solid border-green">
                    <div class="text text-[13px] text-white/50 duration-350 font-medium relative z-2 whitespace-nowrap group-hover/button:text-white">Reddet</div>
                </button>
            </div>
            <div class="link-field mt-[30px]">
                <a href="page.php" class="text-white/50 duration-350 hover:text-white underline text-[13px] font-medium">Kişisel Verilerin Korunması</a>
                <span class="mx-[10px] text-black/50">|</span>
                <a href="page.php" class="text-white/50 duration-350 hover:text-white underline text-[13px] font-medium">Gizlilik</a>
            </div>
        </div>

        <!-- Önbellek tutmasın diye ekledim '?id<?= rand(); ?>' yazısını silersin -->
        <script src="../assets/js/script.js?id<?= rand(); ?>"></script>

    </body>

</html>