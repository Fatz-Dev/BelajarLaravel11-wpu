<!-- blog.blade.php -->
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        header {
            background: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-align: center;
        }
        .blog-container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .blog-post {
            margin-bottom: 20px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 15px;
        }
        .blog-post h2 {
            color: #4CAF50;
        }
        .blog-post a {
            text-decoration: none;
            color: #333;
        }
        .blog-post a:hover {
            color: #4CAF50;
        }

        .back-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #1F4068;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .back-button:hover {
            background-color: #333;
        }
    </style>
</head>
<body>
    <header>
        <h1>Blog</h1>
    </header>
    <div class="blog-container">
        <div class="blog-post">
            <h2><a href="/artikel">Post Title 1</a></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#">Read more...</a></p>
        </div>
        <div class="blog-post">
            <h2><a href="/artikel">Post Title 2</a></h2>
            <p>Quisque vitae eros eget metus pretium efficitur. <a href="#">Read more...</a></p>
        </div>

        <a href="/" class="back-button">Home</a>
    </div>
</body>
</html> --}}



<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- <h3 class="text-xl">WELCOME MY BLOG</h3> --}}
    <br>


    <!--
Install the "flowbite-typography" NPM package to apply styles and format the article content:

URL: https://flowbite.com/docs/compoclnents/typography/
-->

    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-gray-300 shadow-xl dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article
                class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <a class="font-medium text-sm text-blue-600 hover:underline" href="/posts">&laquo; Back To All Post</a>
                    <address class="flex items-center my-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full"
                                src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="{{ $post->author->name }}">
                            <div>
                                <a href="//posts?author={{ $post->author->username }}" rel="author"
                                    class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->author->name }}</a>
                                {{-- <p class="text-base text-gray-500 dark:text-gray-400">Graphic Designer, educator & CEO
                                    Flowbite</p> --}}
                                <p class="text-base text-gray-500 dark:text-gray-400 mb-1">{{ $post->created_at->diffForHumans() }}</p>
                                <a href="/posts?catagories/{{ $post->category->slug }}">
                                    <span
                                        class="bg-{{ $post->category->colorr }}-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                        {{ $post->category->name }}
                                    </span>
                                </a>
                            </div>
                        </div>
                    </address>
                    <h1
                        class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        {{ $post->title }}</h1>
                </header>
                <p class="text-gray-900">
                    {{ $post->body }}
                </p>
            </article>
        </div>
    </main>

</x-layout>



















{{-- <article class="py-8 max-w-screen-md">


    <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>


    <div class=">
        
        By
        <a class="hover:underline text-base text-gray-500" href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> 
        Ctg
        <a class="hover:underline text-base text-gray-500" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> | {{ $post->created_at->diffForHumans() }}
    
    </div>

    <p class="my-4 font-light">{{ $post['body'] }}</p>
    <a href="/posts" class="font-medium text-blue-500 hover:underline">Back To Post &laquo;</a>

</article> --}}
