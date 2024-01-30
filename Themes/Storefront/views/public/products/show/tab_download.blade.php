<div class="table-responsive px-1">
    <table class="table table-product-spec table-bordered align-middle">
        <thead>
        <tr>
            <th>{{ trans('storefront::account.downloads.filename') }}</th>
            <th>{{ trans('storefront::account.action') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($downloadFiles as $download)
            <tr>
                <td>
                    {{ $download->filename }}
                </td>

                <td>
                    <a href="{{$download->path}}"
                       class="btn btn-download" target="_blank">
                        <i class="las la-cloud-download-alt"></i>
                        {{ trans('storefront::account.downloads.download') }}
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
