@props([
    'title',
    'description',
    'date',
    'url_img',
    'text',
])

<div class="wrapper wrapper-blog-card">
    <div class="card-title">
        <h2>{{ $title }}</h2>
        <p class="wrapper-blog-card_subtitle">{{ $description }}, <span>{{ $date }}</span></p>
    </div>
    <img src={{ $url_img }} alt="Silhouette d'une jeune femme à chapeau devant la mer au coucher de soleil" />
    <p><span>More Hats!</span>{{ $text }}</p>
    <div class="post-buttons">
        <x-like-button />
        <x-replies-button />
    </div>
    <div class="">
        <x-comment-post />
    </div>
</div>