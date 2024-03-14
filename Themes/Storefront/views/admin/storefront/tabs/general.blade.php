<div class="row">
    <div class="col-md-8">
        {{ Form::text('translatable[storefront_welcome_text]', trans('storefront::attributes.storefront_welcome_text'), $errors, $settings) }}
        {{ Form::select('storefront_theme_color', trans('storefront::attributes.storefront_theme_color'), $errors, trans('storefront::themes'), $settings) }}

        <div
            class="{{ old('storefront_theme_color', array_get($settings, 'storefront_theme_color')) === 'custom_color' ? '' : 'hide' }}"
            id="custom-theme-color">
            {{ Form::color('storefront_custom_theme_color', trans('storefront::attributes.storefront_custom_theme_color'), $errors, $settings) }}
        </div>

        {{ Form::select('storefront_mail_theme_color', trans('storefront::attributes.storefront_mail_theme_color'), $errors, trans('storefront::themes'), $settings) }}

        <div
            class="{{ old('storefront_mail_theme_color', array_get($settings, 'storefront_mail_theme_color')) === 'custom_color' ? '' : 'hide' }}"
            id="custom-mail-theme-color">
            {{ Form::color('storefront_custom_mail_theme_color', trans('storefront::attributes.storefront_custom_mail_theme_color'), $errors, $settings) }}
        </div>

        {{ Form::select('storefront_slider', trans('storefront::attributes.storefront_slider'), $errors, $sliders, $settings) }}
        {{ Form::select('storefront_terms_page', trans('storefront::attributes.storefront_terms_page'), $errors, $pages, $settings) }}
        {{ Form::select('storefront_privacy_page', trans('storefront::attributes.storefront_privacy_page'), $errors, $pages, $settings) }}
        {{ Form::text('translatable[storefront_address]', trans('storefront::attributes.storefront_address'), $errors, $settings) }}
        {{ Form::text('storefront_google_map_url', trans('storefront::attributes.storefront_google_map_url'), $errors, $settings) }}
        {{ Form::textarea('storefront_google_map_iframe_snippet', trans('storefront::attributes.storefront_google_map_iframe_snippet'), $errors, $settings) }}
    </div>
</div>

<h4 class="tab-content-title">SEO</h4>
<div class="row">
    <div class="col-md-8">
        {{ Form::text('translatable[storefront_meta_title]', trans('storefront::attributes.storefront_meta_title'), $errors, $settings) }}
        {{ Form::textarea('translatable[storefront_meta_description]', trans('storefront::attributes.storefront_meta_description'), $errors, $settings) }}
    </div>
</div>
