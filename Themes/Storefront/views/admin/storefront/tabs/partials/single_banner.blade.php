<div class="panel">
    <div class="panel-header">
        <h5>{{ $label }}</h5>
    </div>

{{--    @dd($banner)--}}

    <div class="panel-body">
        @hasAccess('admin.media.index')
        {{--            @include('media::admin.image_picker.single', [--}}
        {{--                'title' => trans('brand::brands.form.banner'),--}}
        {{--                'inputName' => 'translatable['.$name.'_file_id]',--}}
        {{--                'file' => $banner->image,--}}
        {{--            ])--}}
        <div class="panel-image">
            @if (is_null($banner->image->path))
                <i class="fa fa-picture-o" aria-hidden="true"></i>
                <img class="hide">
            @else
                <img src="{{ $banner->image->path }}" alt="Banner">
            @endif

            <input type="hidden" name="translatable[{{ $name }}_file_id]" value="{{ $banner->image->id }}"
                   class="banner-file-id">
        </div>
        @endHasAccess

        <div class="panel-content clearfix">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-6 clearfix">
                    @if(isset($extra_fields) && $extra_fields)
                        <div class="form-group">
                            <label
                                for="{{ $name }}-call-to-action-title">{{ trans("storefront::attributes.call_to_action_title") }}</label>
                            <input type="text" name="translatable[{{ $name }}_call_to_action_title]"
                                   value="{{ $banner->call_to_action_title }}" class="form-control"
                                   id="{{ $name }}-call-to--action-title">
                        </div>
                        <div class="form-group">
                            <label
                                for="{{ $name }}-call-to-action-body">{{ trans("storefront::attributes.call_to_action_body") }}</label>
                            <textarea
                                name="translatable[{{ $name }}_call_to_action_body]"
                                class="form-control"
                                rows="5"
                                id="{{ $name }}-call-to--action-body">{{ $banner->call_to_action_body }}</textarea>
                        </div>
                    @endif
                    <div class="form-group">
                        <label
                            for="{{ $name }}-call-to-action-url">{{ trans("storefront::attributes.call_to_action_url") }}</label>
                        <input type="text" name="translatable[{{ $name }}_call_to_action_url]"
                               value="{{ $banner->call_to_action_url }}" class="form-control"
                               id="{{ $name }}-call-to-action-url">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-6">
                    <div class="checkbox">
                        <input type="hidden" name="{{ $name }}_open_in_new_window" value="0">
                        <input type="checkbox" name="{{ $name }}_open_in_new_window" value="1"
                               id="{{ $name }}-open-in-new-window" {{ $banner->open_in_new_window ? 'checked' : '' }}>
                        <label for="{{ $name }}-open-in-new-window">
                            {{ trans("storefront::attributes.open_in_new_window") }}
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
