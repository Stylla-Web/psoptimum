<!--Home Slider-->
<section class="slideshow slideshow-wrapper">
    <div class="home-slideshow"
         data-speed="{{ $slider->speed ?? '1000' }}"
         data-autoplay="{{ $slider->autoplay ?? 'false' }}"
         data-autoplay-speed="{{ $slider->autoplay_speed ?? '5000' }}"
         data-fade="{{ $slider->fade ?? 'false' }}"
         data-dots="{{ $slider->dots ?? 'true' }}"
         data-arrows="{{ $slider->arrows ?? 'true' }}"
    >
        @foreach ($slider->slides as $slide)
            @if($slide->hasDateToShow())
                <div class="slide">
                    <div class="slideshow--large bg-size">

                        @if($slide->url_video)
                            <div data-vbg="{{ $slide->url_video }}"
                                 data-vbg-play-button="{{ $slide->video_btn_play }}"
                                 data-vbg-mute-button="{{ $slide->video_btn_mute }}"
                                 data-vbg-always-play="{{ $slide->video_auto_play }}"
                                 data-vbg-load-background="true">
                            </div>
                        @else
                            <img class="bg-img blur-up lazyload"
                                 data-src="{{ $slide->file->path }}"
                                 src="{{ $slide->file->path }}"
                                 alt="{{ $slide->file->name }}"
                                 title="{{ $slide->caption_1 }}"
                                 data-animation-in="zoomInImage"
                            />
                        @endif
                        <div class="container">
                            <div class="slideshow-content slideshow-overlay {{ $slide->isAlignedLeft() ? 'middle-left' : 'middle-right' }} d-flex justify-content-center align-items-center">
                                <div class="slideshow-content-in">
                                    <div class="wrap-caption animation style2 p-0">
                                        <h2 class="mega-title ss-mega-title text-transform-none mb-3 fw-bold"
                                            style="color: {{ $slide->caption_1_color }}"
                                            data-animation-in="{{ data_get($slide->options, 'caption_1.effect', 'fadeInRight') }}"
                                            data-delay-in="{{ data_get($slide->options, 'caption_1.delay', '0') }}"
                                        >
                                            {!! $slide->caption_1 !!}
                                        </h2>
                                        <span class="mega-subtitle ss-sub-title"
                                              style="color: {{ $slide->caption_2_color }}"
                                              data-animation-in="{{ data_get($slide->options, 'caption_2.effect', 'fadeInRight') }}"
                                              data-delay-in="{{ data_get($slide->options, 'caption_2.delay', '0.3') }}">
                                            {!! $slide->caption_2 !!}
                                        </span>
                                        @if ($slide->call_to_action_text)
                                            <div class="ss-btnWrap">
                                                <a class="btn btn-lg rounded-0"
                                                   href="{{ $slide->call_to_action_url }}"
                                                   data-animation-in="{{ data_get($slide->options, 'call_to_action.effect', 'fadeInRight') }}"
                                                   data-delay-in="{{ data_get($slide->options, 'call_to_action.delay', '0.7') }}"
                                                   target="{{ $slide->open_in_new_window ? '_blank' : '_self' }}"
                                                >
                                                    {!! $slide->call_to_action_text !!}
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</section>
<!--End Home Slider-->
{{--<section class="home-section-wrap">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="home-section-inner">--}}
{{--                <div class="home-slider-wrap">--}}
{{--                    --}}
{{--                </div>--}}

{{--                @include('public.home.sections.slider_banners')--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
