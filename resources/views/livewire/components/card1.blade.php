
<div class="border-2 border-primary bg-gray space-y-3 px-[20px] py-[14px] rounded-[10px] {{$cardSize}} w-full">
    <div class="w-full flex justify-between items-center">
        <h2 class="text-[15px] font-medium text-primary">{{$cardname}}</h2>
        @if($cardname !== 'Experience' && $cardname !== 'Techstack')
            <a href="/projects" class="text-[#535252] underline text-[14px]">see all</a>
        @endif
    </div>
    <div class="{{ $cardname === 'Techstack' ? 'max-sm:flex max-sm:flex-row space-y-3 max-sm:flex-row max-sm:justify-between max-sm:flex-wrap' : 'space-y-3' }}">
        @foreach($displayData as $data)
        <div class="{{$cardname === 'Techstack' ? 'flex space-x-[8px] items-center' : 'flex space-x-[14px] items-center'}}">
            <img src="{{ Vite::asset($data['2']) }}" alt="" class="h-[36px] w-[36px] rounded-[6px]">
            <div class="w-full">
                <div class="flex justify-between">
                    <h3 class="{{$cardname === 'Techstack' ? 'text-primary font-medium text-[14x]' : 'text-primary font-medium text-[16x]'}}">{{$data['0']}}</h3>
                    @if($cardname !== 'Experience' && $cardname !== 'Techstack')
                        <button class="border border-[#EAEAEA] bg-white rounded-full py-[1px] px-[13px] text-[12px] font-medium">View</button>
                    @elseif($cardname === 'Experience')
                        <span class="text-[13px] sm:hidden italic">{{$data['3']}}</span>
                    @endif
                </div>
                <p class="text-[14px] text-secondary">{{$data['1']}}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>