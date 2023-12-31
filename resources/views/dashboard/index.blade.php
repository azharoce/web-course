@extends('layout.app')
@section('content')

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
@endsection