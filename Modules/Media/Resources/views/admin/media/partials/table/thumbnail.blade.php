<div class="thumbnail-holder">
    @if ($file->isImage())
        <img src="{{ $file->path }}" alt="thumbnail" class="pop">
    @else
        <i class="file-icon fa {{ $file->icon() }}"></i>
    @endif
</div>
