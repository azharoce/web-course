@extends('layout.app')
{{-- start slider --}}
@include('home.slider')
{{-- end slider --}}
@section('content')
{{-- start section poular --}}

<x-section.title title="Featured Classes" />

<div class="relative -mt-3" uk-slider="finite: true">
    <div class="uk-slider-container px-1 py-3">
        <ul class="uk-slider-items uk-child-width-1-1@m uk-grid">
            <li>

                <div class="bg-white shadow-sm rounded-lg uk-transition-toggle md:flex">
                    <div class="md:w-5/12 md:h-60 h-40 overflow-hidden rounded-l-lg relative">
                        <img src="https://demo.foxthemes.net/courseplus/assets/images/courses/img-6.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                        <img src="https://demo.foxthemes.net/courseplus/assets/images/icon-play.svg" class="w-16 h-16 uk-position-center uk-transition-fade" alt="">
                    </div>
                    <div class="flex-1 md:p-6 p-4">
                        <div class="font-semibold line-clamp-2 md:text-xl md:leading-relaxed">Learn How to Build Responsive Web Design Essentials HTML5 CSS3 and Bootstrap </div>
                        <div class="line-clamp-2 mt-2 md:block hidden">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam</div>
                        <div class="font-semibold mt-3"> John Michael </div>
                        <div class="mt-1 flex items-center justify-between">
                            <div class="flex space-x-2 items-center text-sm pt-2">
                                <div> 13 hours </div>
                                <div>·</div>
                                <div> 32 lectures </div>
                            </div>
                            <div class="text-lg font-semibold"> $14.99 </div>
                        </div>
                    </div>
                </div>

            </li>
            <li>

                <div class="bg-white shadow-sm rounded-lg uk-transition-toggle md:flex">
                    <div class="md:w-5/12 md:h-60 h-40 overflow-hidden rounded-l-lg relative">
                        <img src="https://demo.foxthemes.net/courseplus/assets/images/courses/img-1.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                        <img src="https://demo.foxthemes.net/courseplus/assets/images/icon-play.svg" class="w-16 h-16 uk-position-center uk-transition-fade" alt="">
                    </div>
                    <div class="flex-1 md:p-6 p-4">
                        <div class="font-semibold line-clamp-2 md:text-xl md:leading-relaxed"> Learn JavaScript and Express to become a professional JavaScript developer. </div>
                        <div class="line-clamp-2 mt-2 md:block hidden">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam</div>
                        <div class="font-semibold mt-3"> John Michael </div>
                        <div class="mt-1 flex items-center justify-between">
                            <div class="flex space-x-2 items-center text-sm pt-2">
                                <div> 13 hours </div>
                                <div>·</div>
                                <div> 32 lectures </div>
                            </div>
                            <div class="text-lg font-semibold"> $14.99 </div>
                        </div>
                    </div>
                </div>

            </li>
        </ul>
    </div>

    <a class="absolute bg-white uk-position-center-left -ml-3 flex items-center justify-center p-2 rounded-full shadow-md text-xl w-11 h-11 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i></a>
    <a class="absolute bg-white uk-position-center-right -mr-3 flex items-center justify-center p-2 rounded-full shadow-md text-xl w-11 h-11 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>

</div>

<x-section.title title="Popular Classes" link="/database"/>
<x-section.content-list/>
{{-- end section popular --}}


 <!--  episcodes  -->
        <!-- this is user toggle media to remove unwanted class for small devices more check docs uikit on https://getuikit.com/docs/toggle. -->
        <div class="tube-card p-4 mt-3" uk-toggle="cls: tube-card p-4; mode: media; media: 640">

            <h4 class="py-3 px-5 border-b font-semibold text-grey-700 -mx-4 -mt-3 mb-4"> Latest Episodes </h4>

            <div class="relative -mx-1" uk-slider="finite: true">

                <div class="uk-slider-container md:px-1 px-2 py-3">
                    <ul class="uk-slider-items uk-child-width-1-3@m uk-child-width-1-2 uk-grid-small uk-grid">
                        <li>
                            <a href="episodes-watch.html">
                                <div class="w-full md:h-40 h-28 overflow-hidden rounded-lg relative">
                                    <img src="https://demo.foxthemes.net/courseplus/assets/images/episodes/img-2.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                    <span
                                        class="absolute bottom-2 right-2 px-2 py-1 text-xs font-semibold bg-black bg-opacity-50 text-white rounded">
                                                12:21</span>
                                    <img src="https://demo.foxthemes.net/courseplus/assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                                </div>
                            </a>
                            <div class="pt-3">
                                <a href="episodes-watch.html" class="font-semibold line-clamp-2">  The PHP Singleton class  </a>
                                <p class="text-sm pt-1"> By <a href="#"> Stella Johnson  </a> </p>
                            </div>
                        </li>
                        <li>
                            <a href="episodes-watch.html">
                                <div class="w-full md:h-40 h-28 overflow-hidden rounded-lg relative">
                                    <img src="https://demo.foxthemes.net/courseplus/assets/images/episodes/img-4.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                    <span class="absolute bottom-2 right-2 px-2 py-1 text-xs font-semibold bg-black bg-opacity-50 text-white rounded">
                                                12:21</span>
                                    <img src="https://demo.foxthemes.net/courseplus/assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                                </div>
                            </a>
                            <div class="pt-3">
                                <a href="episodes-watch.html" class="font-semibold line-clamp-2">  Larafel $ fliepond   </a>
                                <p href="episodes-watch.html" class="text-sm pt-1"> By <a href="#"> Jesse Stevens </a> </p>
                            </div>
                        </li>
                        <li>
                            <a href="episodes-watch.html">
                                <div class="w-full md:h-40 h-28 overflow-hidden rounded-lg relative">
                                    <img src="https://demo.foxthemes.net/courseplus/assets/images/episodes/img-1.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                    <span class="absolute bottom-2 right-2 px-2 py-1 text-xs font-semibold bg-black bg-opacity-50 text-white rounded">
                                                12:21</span>
                                    <img src="https://demo.foxthemes.net/courseplus/assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                                </div>
                            </a>
                            <div class="pt-3">
                                <a href="episodes-watch.html" class="font-semibold line-clamp-2">  Creating a Laravel Package   </a>
                                <p class="text-sm pt-1"> By <a href="#"> John Michael </a> </p>
                            </div>
                        </li>
                        <li>
                            <a href="episodes-watch.html">
                                <div class="w-full md:h-40 h-28 overflow-hidden rounded-lg relative">
                                    <img src="https://demo.foxthemes.net/courseplus/assets/images/episodes/img-3.jpg" alt="" class="w-full h-full absolute inset-0 object-cover">
                                    <span class="absolute bottom-2 right-2 px-2 py-1 text-xs font-semibold bg-black bg-opacity-50 text-white rounded">
                                                12:21</span>
                                    <img src="https://demo.foxthemes.net/courseplus/assets/images/icon-play.svg" class="w-12 h-12 uk-position-center" alt="">
                                </div>
                            </a>
                            <div class="pt-3">
                                <a href="episodes-watch.html" class="font-semibold line-clamp-2">  Creating sticky in HTML   </a>
                                <p class="text-sm pt-1"> By <a href="#"> Monroe Parker </a> </p>
                            </div>
                        </li>
                    </ul>

                    <a class="absolute bg-white top-1/4 flex items-center justify-center p-2 -left-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="previous"> <ion-icon  class="icon-feather-chevron-left"></ion-icon ></a>
                    <a class="absolute bg-white top-1/4 flex items-center justify-center p-2 -right-4 rounded-full shadow-md text-xl w-9 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="next"> <ion-icon  class="icon-feather-chevron-right"></ion-icon ></a>
        
                </div>

            </div>

        </div>

@endsection