@php
    $datas = [
        [
            'title' => 'TITLE HEADING',
            'description' => 'Title description',
            'date' => 'May 2, 2016',
            'url_img' => 'img/girl_hat.jpeg',
            'text' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et commodi unde nulla libero porro temporibus aperiam explicabo quis. Voluptates reprehenderit aperiam delectus nam hic eligendi illo ipsa eaque dolorem eos voluptatem nostrum, magnam ipsam totam repudiandae ullam aliquam dolore recusandae ducimus, qui quidem vitae a, sequi molestiae! Nihil laborum voluptate fugit quos? Ea cum quia reprehenderit ad eligendi itaque harum aperiam beatae aut! Dolorum praesentium repellat quis vero libero ex ullam. Excepturi quam enim placeat ipsa unde esse suscipit earum.',
        ],
        [
            'title' => 'TITLE HEADING',
            'description' => 'Title description',
            'date' => 'April 23, 2016',
            'url_img' => 'img/man_hat.jpeg',
            'text' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et commodi unde nulla libero porro temporibus aperiam explicabo quis. Voluptates reprehenderit aperiam delectus nam hic eligendi illo ipsa eaque dolorem eos voluptatem nostrum, magnam ipsam totam repudiandae ullam aliquam dolore recusandae ducimus, qui quidem vitae a, sequi molestiae! Nihil laborum voluptate fugit quos? Ea cum quia reprehenderit ad eligendi itaque harum aperiam beatae aut! Dolorum praesentium repellat quis vero libero ex ullam. Excepturi quam enim placeat ipsa unde esse suscipit earum.',
        ],
        [
            'title' => 'TITLE HEADING',
            'description' => 'Title description',
            'date' => 'April 7, 2016',
            'url_img' => 'img/runway.jpeg',
            'text' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et commodi unde nulla libero porro temporibus aperiam explicabo quis. Voluptates reprehenderit aperiam delectus nam hic eligendi illo ipsa eaque dolorem eos voluptatem nostrum, magnam ipsam totam repudiandae ullam aliquam dolore recusandae ducimus, qui quidem vitae a, sequi molestiae! Nihil laborum voluptate fugit quos? Ea cum quia reprehenderit ad eligendi itaque harum aperiam beatae aut! Dolorum praesentium repellat quis vero libero ex ullam. Excepturi quam enim placeat ipsa unde esse suscipit earum.',
        ],
    ]
@endphp

<x-layout title="Blog">
    <main>
        <section class="wrapper-blog">
            {{-- <x-blog-card title="{{$datas[0]['title']}}" description = "{{$datas[0]['description']}}" date="{{$datas[0]['date']}}"   url_img="{{$datas[0]['url_img']}}" text="{{$datas[0]['text']}}"   /> --}}
            @foreach ($datas as $data) 
                <x-blog-card :title="$data['title']" :description="$data['description']" :date="$data['date']" :url_img="$data['url_img']" :text="$data['text']"   />
            @endforeach
        </section>
        <div class="">
            <x-who />
            <x-sidebar-block title="Popular Posts">
                @include("partials._popular_posts")
            </x-sidebar-block>
            <x-sidebar-block title="Advertise">
                @include("partials._advertise")
            </x-sidebar-block>
            <x-sidebar-block title="Tags">
                @include("partials._tags")
            </x-sidebar-block>
            <x-sidebar-block title="Inspiration">
                @include("partials._inspiration")
            </x-sidebar-block>
            <x-sidebar-block title="Follow Me">
                @include("partials._follow_me")
            </x-sidebar-block>
            <x-sidebar-block title="Subscribe">
                @include("partials._subscribe")
            </x-sidebar-block>
        </div>
    </main>
</x-layout>