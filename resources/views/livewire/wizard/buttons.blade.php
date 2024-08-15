<div class="flex p-2 mt-4 mb-4">
    @if(!$hidePrevButton)
        <button
            wire:click="prevStep"
            type="button"
            class="text-base hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer hover:bg-gray-200 bg-gray-100 text-gray-700 border duration-200 ease-in-out border-gray-600 transition"
        >
            Anterior
        </button>
    @endif
    <div class="flex-auto flex flex-row-reverse">
        <button
                type="submit"
                class="inline-flex items-center justify-center text-base hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer hover:bg-indigo-200  bg-indigo-100
                text-indigo-600 border duration-200 ease-in-out border-indigo-600 transition duration-150 ease-in-out disabled:opacity-50"
        >
            {{--            <button type="submit"--}}
            {{--                    class="inline-flex items-center justify-center py-3 px-6 border border-transparent text-base leading-6 font-medium rounded-md text-white --}}
            {{--                    bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 --}}
            {{--                    transition duration-150 ease-in-out disabled:opacity-50">--}}
            <svg wire:loading class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                 viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor"
                      d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                </path>
            </svg>
            <span>{{ $isLastStep ? "Finalizar" : "Siguiente" }}</span>
        </button>
    </div>
</div>
