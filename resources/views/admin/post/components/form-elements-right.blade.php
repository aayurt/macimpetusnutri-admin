@isset($post)
<div class="card">
    @include('brackets/admin-ui::admin.includes.media-uploader', [
    'mediaCollection' => app(App\Models\Post::class)->getMediaCollection('cover'),
    'media' => $post->getThumbs200ForCollection('cover'),
    'label' => 'Cover'
    ])
</div>
@else
<div class="card">
    @include('brackets/admin-ui::admin.includes.media-uploader', [
    'mediaCollection' => app(App\Models\Post::class)->getMediaCollection('cover'),
    'label' => 'Cover'
    ])
</div>
@endisset