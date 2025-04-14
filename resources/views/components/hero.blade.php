<section class="relative outline-none">
    <div class="bg-cover bg-center bg-no-repeat w-full h-full md:aspect-[16/9]" style="background-image: url('{{ asset('images/h3mbbg.png') }}');">

        <div
            class="mx-auto px-4 py-10 md:py-60 min-h-[556px] flex flex-col justify-center items-center h-full">
            <div class="flex flex-row">
                <div class="flex flex-col items-center justify-center h-full gap-7">
                    <div class="flex flex-col gap-4 max-w-xl">
                        <h1
                            class="font-quick text-3xl md:text-[54px] font-black leading-tight tracking-tight text-center text-white">
                            {!! $title !!}
                        </h1>
                        <p
                            class="text-sm md:text-lg items-center text-center font-medium leading-tight tracking-tight text-white">
                            {{ $paragraph }}
                        </p>
                    </div>
                    <a href="#"
                        class="text-white bg-[#05BED6] font-medium rounded-full text-xl px-5 py-2.5 me-2 mb-2">Discover
                        Now</a>
                </div>
            </div>
        </div>
    </div>
</section>