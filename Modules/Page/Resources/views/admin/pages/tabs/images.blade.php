@include('media::admin.image_picker.single', [
    'title' => trans('page::pages.form.banner'),
    'inputName' => 'files[banner]',
    'file' => $page->banner,
])
