<div class="flex p-2 mt-4">
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
            class="text-base hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer hover:bg-red-200  bg-red-100 text-red-700 border duration-200 ease-in-out border-red-600 transition"
        >
            {{ $isLastStep ? "Finalizar" : "Siguiente" }}
        </button>
    </div>
</div>
