<div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="px-4">
    <div class="max-w-[966px] w-full mx-auto flex justify-between py-[40px] max-lg:flex-col max-lg:max-w-fit max-lg:space-y-[40px] space-x-[58px] max-lg:space-x-0 py-[40px]">
        <div class="max-w-[353px] space-y-[22px]">
            <h1 class="text-[22px] text-black font-medium leading-[130%]">My blog</h1>
            <p class="text-primary">Very often I have a lot of ideas coming out of my brain, it's in order to externalize all this that I've decided to add this blog section to my portfolio, I hope that after reading each article you'll learn something new.</p>
        </div>
        <div class="w-full space-y-[20px]">
            <h2 class="text-[18px] font-semibold">All articles</h2>
            <div class="space-y-[12px]">
                @foreach($articles as $article)
                <a href="{{ route('blog.show', ['id' => $article['id']]) }}" class="block">
                    <div class="flex space-x-[14px] w-full">
                        <img src="{{ Vite::asset($article['imagePath']) }}" alt="" class="h-[48px] w-[48px] rounded-[3px]">
                        <div class="w-full space-y-[6px]">
                        <h3 class="text-[16px] font-medium text-primary">{{$article['title']}}</h3>
                        <p class="text-secondary text-[15px]">{{$article['preview']}}</p>
                        <p class=" text-[13px] italic">Published on {{$article['date']}}</p>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
</div>
