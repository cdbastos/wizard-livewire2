<div class="w-full py-6">
    <div class="flex">
        @foreach($steps as $key => $data)
            <div class="w-1/4">
                <div class="relative mb-2">
                    <div
                        class="absolute flex align-center items-center align-middle content-center"
                        style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                        @if($data["step"] > 1)
                            <div class="w-full bg-gray-200 rounded items-center align-middle align-center flex-1">
                                <div class="w-0 py-1 rounded{{ $currentStep >= $data["step"] ? ' bg-red-500' : '' }}" style="width: 100%;"></div>
                            </div>
                        @endif
                    </div>

                    <div class="w-12 h-12 mx-auto rounded-full text-lg flex items-center{{ $data["step"] === $currentStep ? ' border border-gray-900' : ' border-2 border-gray-200' }} {{ $data["step"] === 1 || $currentStep >= $data["step"] ? ' bg-red-500' : ' bg-white border border-gray-200' }}">
                      <span
                          class="text-center w-full{{ $data["step"] === 1 || $currentStep >= $data["step"] ? ' text-white' : ' text-red-500' }}">
                        @include("wizard.toolbar.icons.$key")
                      </span>
                    </div>
                </div>
                <div class="text-xs text-center md:text-base">{{ $data["label"] }}</div>
            </div>
        @endforeach
    </div>
</div>
