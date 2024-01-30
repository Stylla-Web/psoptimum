<div class="accordion-box-content">
    <div class="row">
        <div class="col-md-8">
            {{ Form::checkbox('storefront_four_column_banners_enabled', trans('storefront::attributes.section_status'), trans('storefront::storefront.form.enable_four_column_banners_section'), $errors, $settings) }}
        </div>
    </div>

    <div class="tab-content clearfix">
        <div class="panel-wrap">
            @include('admin.storefront.tabs.partials.single_banner', [
                'extra_fields' => true,
                'label' => trans('storefront::storefront.form.banner_1'),
                'name' => 'storefront_four_column_banners_1',
                'banner' => $banners['banner_1'],
            ])

            @include('admin.storefront.tabs.partials.single_banner', [
                'extra_fields' => true,
                'label' => trans('storefront::storefront.form.banner_2'),
                'name' => 'storefront_four_column_banners_2',
                'banner' => $banners['banner_2'],
            ])

            @include('admin.storefront.tabs.partials.single_banner', [
                'extra_fields' => true,
                'label' => trans('storefront::storefront.form.banner_3'),
                'name' => 'storefront_four_column_banners_3',
                'banner' => $banners['banner_3'],
            ])

            @include('admin.storefront.tabs.partials.single_banner', [
                'extra_fields' => true,
                'label' => trans('storefront::storefront.form.banner_4'),
                'name' => 'storefront_four_column_banners_4',
                'banner' => $banners['banner_4'],
            ])
        </div>
    </div>
</div>
