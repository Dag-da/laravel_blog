@props([
    'title',
])

<div class="wrapper wrapper-sidebar_block">
    <div class="sidebar_block_title">
        <h2>{{ $title }}</h2>
    </div>
    <div class="sidebar_block_content">
        {{ $slot }}
    </div>
</div>