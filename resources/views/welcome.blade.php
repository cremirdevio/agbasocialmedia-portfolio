<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agbasocial Media</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="main">
        <!-- Header -->
        <header class="bg-white border-black border-[3px] p-4 flex justify-center">
            <div class="text-8xl font-bold">agbasocialmedia</div>
        </header>

        <!-- Hero Section -->
        <section class="flex align-center bg-[#FFD1D4] border-black border-t-0 border-[3px] pl-32 h-[800px]">
            <div class="w-2/5 flex flex-col justify-center overflow">
                <h3 class="text-xl -mb-8 ml-4">Esther Alade</h3>
                <h1 class="text-9xl bg-green z-10 flex flex-col">
                    <span class="-mb-4">agba</span>
                    <span>socialmedia</span>
                </h1>
                <p class="text-2xl font-light my-6">Alade Esther is a social media manager who is passionate about helping small business owners user and see social media as a tool to grow their business presence online.</p>

                <p class="text-2xl font-light"> She strongly believes that with a great social media strategy, consistency and patience, a business can grow online.</p>

                <a href="javascript::void()" class="mt-6 h-16 w-64 flex align-center justify-center px-8 bg-black text-white text-xl py-4">Let's Talk</a>
            </div>
            <div class="bg-[#E3B100] border-black border-l-[3px] h-full w-3/5">
            </div>
        </section>

        <!-- What I Do -->
        <section class="flex align-center bg-[#FF5E8A] border-black border-t-0 border-[3px] px-32 py-24 h-[800px]">
            <div class="w-2/5 h-full bg-[#FFD1D4] border-black border-[3px]"></div>
            <div class="w-3/5 pl-12">
                <h1 class="text-8xl">What I Do?</h1>
                <p class="text-2xl mt-4 font-light">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ut magna nulla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin at ipsum rhoncus, cursus justo id, ullamcorper tortor. 
                </p>

                <!-- Services -->
                <div class="my-8">
                    <div class="flex w-full bg-[#FFD1D4] border-black border-[3px] h-32 overflow-hidden">
                    <div class="w-32 h-32 bg-black"></div>
                    <div class="px-4 py-4">
                        <h4 class="text-uppercase font-bold text-lg">Social Media management</h4>
                        <p class="font-light text-xl">
                            Focus on your business and let me handle your social media pages
                        </p>
                    </div>
                </div>
                </div>
            </div>
        </section>

        <!-- Reviews -->
        <section class="bg-[#57E894] border-black border-t-0 border-[3px] h-[800px]">
            <div class="h-24 bg-[#2B5C40] border-b-[3px] border-black flex flex-col justify-center align-center">
                <h1 class="text-6xl px-32 h-fit">Client Talking</h1>
            </div>

            <!-- Reviewlist -->
            <div>
                <div class="flex flex-row justify-around px-32 py-16">
                    <div class="w-80 h-80 bg-[#FFD1D4] border-black border-[3px] rounded-full"></div>
                    <div class="pt-24 w-3/5 self-end">
                        <p class="text-4xl mb-8 leading-normal">“Originally, I took pre-orders for my Trend Reports on Gumroad. But I received... exactly $0. So I changed tactics: I made half of my report free, and the other half paid. Today, 99% of Trends.VC revenue is recurring in the form of annual and quarterly subscriptions.”</p>

                        <span class="mt-12 bg-black text-white px-8 py-4 h-24">
                            Joseph, Founder ReviewGush
                        </span>
                    </div>
                </div> 
            </div>

            <!-- ReviewList Control -->
            <div class="flex justify-end px-32 gap-x-5">

                <svg class="cursor-pointer" width="57" height="24" viewBox="0 0 57 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.93934 10.9393C0.353553 11.5251 0.353553 12.4749 0.93934 13.0607L10.4853 22.6066C11.0711 23.1924 12.0208 23.1924 12.6066 22.6066C13.1924 22.0208 13.1924 21.0711 12.6066 20.4853L4.12132 12L12.6066 3.51472C13.1924 2.92894 13.1924 1.97919 12.6066 1.3934C12.0208 0.807616 11.0711 0.807616 10.4853 1.3934L0.93934 10.9393ZM57 10.5L2 10.5L2 13.5L57 13.5L57 10.5Z" fill="black"/>
                </svg>

                <svg class="cursor-pointer" width="116" height="24" viewBox="0 0 116 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M115.061 13.0607C115.646 12.4749 115.646 11.5251 115.061 10.9393L105.515 1.3934C104.929 0.807612 103.979 0.807612 103.393 1.3934C102.808 1.97918 102.808 2.92893 103.393 3.51472L111.879 12L103.393 20.4853C102.808 21.0711 102.808 22.0208 103.393 22.6066C103.979 23.1924 104.929 23.1924 105.515 22.6066L115.061 13.0607ZM0 13.5L114 13.5V10.5L0 10.5L0 13.5Z" fill="black"/>
                </svg>

            </div>
        </section>

        <!-- Call To Action -->
        <section class="flex bg-[#FFD1D4] px-32 py-32">
            <h1 class="w-2/3 text-9xl font-light">Ready to <br> talk growth?</h1>
            <div class="w-64 h-64 bg-black flex flex-col justify-center align-center rounded-full ">
                <a href="javascript::void()" class="text-white text-center text-6xl">
                    <span class="block">Let's</span>
                    <span class="block">Talk</span>
                </a>
            </div>
        </section>

        <!-- Socials -->
        <footer class="flex pl-32 py-12 bg-white border-black border-t-[3px]">
            <div class="w-1/3">
                <p class="text-xl">agbasocialmedia@gmail.com</p>
            </div>
            <div class="bg-[#E3003F] text-black h-[96px] overflow-hidden w-2/3 border-black border-[3px] border-r-0 flex">
                <!-- IG -->
                <div class="w-[96px] h-[96px] border-black border-r-[3px] flex justify-center align-center py-4">
                    <svg width="57" height="57" viewBox="0 0 57 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_4_97)">
                        <path d="M28.5 5.13223C36.1148 5.13223 37.0166 5.16562 40.0113 5.29922C42.7945 5.42168 44.2975 5.88926 45.2994 6.27891C46.6242 6.79102 47.5816 7.41445 48.5725 8.40527C49.5744 9.40723 50.1867 10.3535 50.6988 11.6783C51.0885 12.6803 51.5561 14.1943 51.6785 16.9664C51.8121 19.9723 51.8455 20.874 51.8455 28.4777C51.8455 36.0926 51.8121 36.9943 51.6785 39.9891C51.5561 42.7723 51.0885 44.2752 50.6988 45.2772C50.1867 46.602 49.5633 47.5594 48.5725 48.5502C47.5705 49.5522 46.6242 50.1645 45.2994 50.6766C44.2975 51.0662 42.7834 51.5338 40.0113 51.6562C37.0055 51.7898 36.1037 51.8232 28.5 51.8232C20.8852 51.8232 19.9834 51.7898 16.9887 51.6562C14.2055 51.5338 12.7025 51.0662 11.7006 50.6766C10.3758 50.1645 9.41836 49.541 8.42754 48.5502C7.42559 47.5482 6.81328 46.602 6.30117 45.2772C5.91152 44.2752 5.44395 42.7611 5.32148 39.9891C5.18789 36.9832 5.15449 36.0814 5.15449 28.4777C5.15449 20.8629 5.18789 19.9611 5.32148 16.9664C5.44395 14.1832 5.91152 12.6803 6.30117 11.6783C6.81328 10.3535 7.43672 9.39609 8.42754 8.40527C9.42949 7.40332 10.3758 6.79102 11.7006 6.27891C12.7025 5.88926 14.2166 5.42168 16.9887 5.29922C19.9834 5.16562 20.8852 5.13223 28.5 5.13223ZM28.5 0C20.7627 0 19.7941 0.0333984 16.7549 0.166992C13.7268 0.300586 11.6449 0.79043 9.84141 1.4918C7.95996 2.22656 6.36797 3.19512 4.78711 4.78711C3.19512 6.36797 2.22656 7.95996 1.4918 9.83027C0.79043 11.6449 0.300586 13.7156 0.166992 16.7437C0.0333984 19.7941 0 20.7627 0 28.5C0 36.2373 0.0333984 37.2059 0.166992 40.2451C0.300586 43.2732 0.79043 45.3551 1.4918 47.1586C2.22656 49.04 3.19512 50.632 4.78711 52.2129C6.36797 53.7937 7.95996 54.7734 9.83027 55.4971C11.6449 56.1984 13.7156 56.6883 16.7438 56.8219C19.783 56.9555 20.7516 56.9889 28.4889 56.9889C36.2262 56.9889 37.1947 56.9555 40.234 56.8219C43.2621 56.6883 45.3439 56.1984 47.1475 55.4971C49.0178 54.7734 50.6098 53.7937 52.1906 52.2129C53.7715 50.632 54.7512 49.04 55.4748 47.1697C56.1762 45.3551 56.666 43.2844 56.7996 40.2563C56.9332 37.217 56.9666 36.2484 56.9666 28.5111C56.9666 20.7738 56.9332 19.8053 56.7996 16.766C56.666 13.7379 56.1762 11.6561 55.4748 9.85254C54.7734 7.95996 53.8049 6.36797 52.2129 4.78711C50.632 3.20625 49.04 2.22656 47.1697 1.50293C45.3551 0.801562 43.2844 0.311719 40.2563 0.178125C37.2059 0.0333984 36.2373 0 28.5 0Z" fill="black"/>
                        <path d="M28.5 13.8604C20.4176 13.8604 13.8604 20.4176 13.8604 28.5C13.8604 36.5824 20.4176 43.1396 28.5 43.1396C36.5824 43.1396 43.1396 36.5824 43.1396 28.5C43.1396 20.4176 36.5824 13.8604 28.5 13.8604ZM28.5 37.9963C23.2564 37.9963 19.0037 33.7436 19.0037 28.5C19.0037 23.2564 23.2564 19.0037 28.5 19.0037C33.7436 19.0037 37.9963 23.2564 37.9963 28.5C37.9963 33.7436 33.7436 37.9963 28.5 37.9963Z" fill="black"/>
                        <path d="M47.1363 13.2813C47.1363 15.1739 45.6 16.6991 43.7186 16.6991C41.826 16.6991 40.3008 15.1628 40.3008 13.2813C40.3008 11.3887 41.8371 9.86353 43.7186 9.86353C45.6 9.86353 47.1363 11.3999 47.1363 13.2813Z" fill="black"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_4_97">
                        <rect width="57" height="57" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>

                </div>

                <!-- TIktok -->
                <div class="w-[96px] h-[96px] border-black border-r-[3px] flex justify-center align-center py-4">
                    <svg width="57" height="57" viewBox="0 0 57 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M40.5472 0H30.941V38.826C30.941 43.4522 27.2465 47.2522 22.6486 47.2522C18.0508 47.2522 14.3561 43.4522 14.3561 38.826C14.3561 34.2827 17.9687 30.5651 22.4024 30.4V20.6522C12.632 20.8174 4.75 28.8304 4.75 38.826C4.75 48.9044 12.7962 57 22.7308 57C32.6652 57 40.7114 48.8218 40.7114 38.826V18.9173C44.324 21.5609 48.7575 23.1304 53.4375 23.2131V13.4652C46.2124 13.2174 40.5472 7.26956 40.5472 0Z" fill="black"/>
                    </svg>

                </div>

                <!-- Linkedin -->
                <div class="w-[96px] h-[96px] border-black border-r-[3px] flex justify-center align-center py-4">
                    
                    <svg width="57" height="57" viewBox="0 0 57 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_4_106)">
                        <path d="M52.7807 0H4.2082C1.88145 0 0 1.83691 0 4.10801V52.8809C0 55.152 1.88145 57 4.2082 57H52.7807C55.1074 57 57 55.152 57 52.892V4.10801C57 1.83691 55.1074 0 52.7807 0ZM16.9107 48.5725H8.44981V21.3639H16.9107V48.5725ZM12.6803 17.6566C9.96387 17.6566 7.7707 15.4635 7.7707 12.7582C7.7707 10.0529 9.96387 7.85977 12.6803 7.85977C15.3855 7.85977 17.5787 10.0529 17.5787 12.7582C17.5787 15.4523 15.3855 17.6566 12.6803 17.6566ZM48.5725 48.5725H40.1227V35.3467C40.1227 32.1961 40.067 28.1326 35.7252 28.1326C31.3277 28.1326 30.6598 31.5727 30.6598 35.124V48.5725H22.2211V21.3639H30.3258V25.0822H30.4371C31.5615 22.9447 34.3225 20.6848 38.4305 20.6848C46.9916 20.6848 48.5725 26.318 48.5725 33.6434V48.5725V48.5725Z" fill="black"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_4_106">
                        <rect width="57" height="57" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>

                </div>
            </div>
        </footer>
    </div>
</body>
</html>