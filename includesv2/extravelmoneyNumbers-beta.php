<style>
    .highlight {
        background: linear-gradient(328.67deg, #0E51A0 -43.1%, #E31D1C 144.49%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .gradient-bg {
        background: linear-gradient(276deg, #0E51A0 -81.1%, #E31D1C 231.3%), #D9D9D9;
        position: relative;
    }

    .stat {
        flex: 1;
        min-width: 120px;
        max-width: 200px;
        text-align: left;
        padding: 0 10px;
    }

    .stat-value {
        font-size: clamp(2rem, 4vw, 3rem);
        font-weight: bold;
        margin-bottom: 5px;
        color: #ffffff;
    }

    .stat-description {
        color: #FFF;
        font-family: "Plus Jakarta Sans";
        font-size: clamp(14px, 2vw, 16px);
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }

    @media (max-width: 1024px) {
        .desktop-view {
            display: none;
        }

        .mobile-view {
            display: block;
        }
    }

    @media (min-width: 1025px) {
        .desktop-view {
            display: block;
        }

        .mobile-view {
            display: none;
        }
    }
</style>

<!-- Desktop View -->
<div class="desktop-view">
    <h2 class="heading-text text-center text-[#18325b] text-[40px] font-extrabold font-['Plus Jakarta Sans'] leading-[60px] mb-8">
        Why People Prefer and Trust <span class="highlight">Extravelmoney</span>
    </h2>

    <div class="relative w-full">
        <svg xmlns="http://www.w3.org/2000/svg" width="1512" height="340" viewBox="0 0 1512 340" fill="none">
            <path d="M-2 0C-2 0 500.962 40.0515 768.229 49.3884C1035.5 58.7253 1512 30.3255 1512 30.3255V340H-2V0Z"
                fill="#D9D9D9" />
            <path d="M-2 0C-2 0 500.962 40.0515 768.229 49.3884C1035.5 58.7253 1512 30.3255 1512 30.3255V340H-2V0Z"
                fill="url(#paint0_linear_3695_45935)" />
            <defs>
                <linearGradient id="paint0_linear_3695_45935" x1="2170.9" y1="1771.37" x2="-2056.83" y2="-310.34"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#0E51A0" />
                    <stop offset="1" stop-color="#E31D1C" />
                </linearGradient>
            </defs>
        </svg>

        <div class="absolute inset-0 flex items-center justify-center p-5 w-full">
            <div class="stats-grid grid grid-cols-4 gap-12 place-items-center z-10">
                <div class="stat border-r-2 border-white/10">
                    <p class="stat-value">34%</p>
                    <p class="stat-description">orders from <br />customer referrals</p>
                </div>
                <div class="stat border-r-2 border-white/10">
                    <p class="stat-value">200cr+</p>
                    <p class="stat-description">saved for our customers</p>
                </div>
                <div class="stat border-r-2 border-white/10">
                    <p class="stat-value">100%</p>
                    <p class="stat-description">On Time <br />Transaction</p>
                </div>
                <div class="stat">
                    <p class="stat-value">9+</p>
                    <p class="stat-description">years of <br />experience</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Mobile View -->
<section class="mobile-view w-full px-5 sm:px-12 md:px-24 justify-between customMd:flex mt-12 customMd:mt-24">
    <div class="flex flex-col justify-center customMd:items-start items-center w-full customMd:w-2/5">
        <div>
            <h2 class="text-center text-black text-3xl font-bold leading-[21.05px]">Why People Prefer and</h2>
            <svg xmlns="http://www.w3.org/2000/svg" width="124" height="14" viewBox="0 0 124 14" fill="none"
                class="-ml-2 mt-1">
                <path d="M2.26465 2.56055C52.5421 14.2533 78.7029 14.778 121.495 3.70243"
                    stroke="url(#paint0_linear_1253_19208)" stroke-width="3.94778" stroke-linecap="round" />
                <defs>
                    <linearGradient id="paint0_linear_1253_19208" x1="-37.6232" y1="-39.9866" x2="157.463" y2="70.8804"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#E31D1C" />
                        <stop offset="1" stop-color="#0E51A0" />
                    </linearGradient>
                </defs>
            </svg>
            <div class="flex items-center gap-1 mt-3">
                <p class="text-center text-black text-3xl font-bold leading-tight">Trust</p>
                <img class="w-60 mt-2" src="<?php echo $fold . 'public/images/extravelLogoPlain.svg'; ?>"
                    alt="extravel-logo">
            </div>
        </div>
    </div>

    <div class="flex flex-col justify-center items-center customMd:gap-2 customMd:w-3/5 mt-8 customMd:mt-0">
        <div class="flex gap-8 customMd:gap-10 min-w-80 justify-between items-center">
            <div class="w-[152px] h-[71.27px] py-[11.74px] flex-col justify-start items-center gap-[8.80px] inline-flex">
                <p class="text-center text-[#0e51a0] text-2xl customMd:text-3xl font-bold leading-normal">34%</p>
                <p class="text-center text-black/40 text-sm font-medium">orders from customer referrals</p>
            </div>
            <div class="w-px h-[60px] bg-black/10"></div>
            <div class="w-[152px] h-[71.27px] py-[11.74px] flex-col justify-start items-center gap-[8.80px] inline-flex">
                <p class="text-center text-[#0e51a0] text-2xl customMd:text-3xl font-bold leading-normal">200cr+</p>
                <p class="text-center text-black/40 text-sm font-medium">saved for customers</p>
            </div>
        </div>
        <div class="min-w-80 h-px bg-black/10 mt-6 mb-6"></div>
        <div class="flex gap-8 customMd:gap-10 min-w-80 justify-between items-center">
            <div class="w-[152px] h-[71.27px] py-[11.74px] flex-col justify-start items-center gap-[8.80px] inline-flex">
                <p class="text-center text-[#0e51a0] text-2xl customMd:text-3xl font-bold leading-normal">100%</p>
                <p class="text-center text-black/40 text-sm font-medium">On Time Transaction</p>
            </div>
            <div class="w-px h-[60px] bg-black/10"></div>
            <div class="w-[152px] h-[71.27px] py-[11.74px] flex-col justify-start items-center gap-[8.80px] inline-flex">
                <p class="text-center text-[#0e51a0] text-2xl customMd:text-3xl font-bold leading-normal">9+</p>
                <p class="text-center text-black/40 text-sm font-medium">years of experience</p>
            </div>
        </div>
    </div>
</section>
