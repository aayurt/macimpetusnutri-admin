@isset($post)
<div class="card">
    @include('brackets/admin-ui::admin.includes.media-uploader', [
    'mediaCollection' => app(App\Models\Post::class)->getMediaCollection('cover'),
    'media' => $post->getThumbs200ForCollection('cover'),
    'label' => 'Cover'
    ])
</div>
<div class="card">
    @include('brackets/admin-ui::admin.includes.media-uploader', [
    'mediaCollection' => app(App\Models\Post::class)->getMediaCollection('gallery'),
    'media' => $post->getThumbs200ForCollection('gallery'),
    'label' => 'Gallery'
    ])
</div>
@else
<div class="card">
    @include('brackets/admin-ui::admin.includes.media-uploader', [
    'mediaCollection' => app(App\Models\Post::class)->getMediaCollection('cover'),
    'label' => 'Cover'
    ])
</div>
<div class="card">
    @include('brackets/admin-ui::admin.includes.media-uploader', [
    'mediaCollection' => app(App\Models\Post::class)->getMediaCollection('gallery'),
    'label' => 'Gallery'
    ])
</div>
@endisset