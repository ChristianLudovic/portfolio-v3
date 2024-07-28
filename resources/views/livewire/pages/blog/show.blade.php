<div class="max-w-[966px] w-full mx-auto flex justify-between py-[40px] max-lg:flex-col max-lg:max-w-fit max-lg:space-y-[40px] space-x-[58px] max-lg:space-x-0">
    <div class="max-w-[353px] w-full space-y-[12px]">
        <div class="flex space-x-[11px] items-start">
            <img src="{{ Vite::asset('resources/assets/blog-images/center-div.svg') }}" alt="" class="w-[54px] h-[56px] rounded-[10px]">
            <h1 class="text-[22px] text-black font-medium leading-[130%]">{{$article['title']}}</h1>
        </div>
        <p class="text-primary">{{$article['preview']}}</p>
        <p class="text-secondary text-[14px]">Published on 21.04.2001</p>
    </div>
    <div class="max-w-[555px]">
        {!! $article['content'] !!}
    </div>
</div>


