
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<style>
    h1 {
        background-color: antiquewhite;
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
<body>
    <a href="/" class="back-button">HOME</a>
    <a href="/about" class="back-button">ABOUT</a>
    <a href="/blog" class="back-button">BLOG</a>
    <h3>Owner: {{ $nama }}</h3>
    <h1>HELLO BROO PAGE ABOUT</h1>


    <script src="js/script.js"></script>
</body>
</html> --}}


<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h3>About</h3>
</x-layout>