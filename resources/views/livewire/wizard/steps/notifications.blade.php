<div class="mx-14">
    <form wire:submit.prevent="submit">
        <div class="max-w-lg mx-auto bg-grey-lighter">
            <div class="flex items-center items-start mb-4">
                <input wire:model="notification.receive_newsletter" {{ $notification->receive_newsletter ? 'checked' : '' }} id="newsletter" aria-describedby="newsletter" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded">
                <label for="newsletter" class="text-sm ml-3 font-medium text-gray-900">Suscribirme a la Newsletter</label>
            </div>

            <div class="flex items-start items-center mb-4">
                <input wire:model="notification.receive_promotions" {{ $notification->receive_promotions ? 'checked' : '' }} id="promotions" aria-describedby="promotions" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded">
                <label for="promotions" class="text-sm ml-3 font-medium text-gray-900">Quiero recibir promociones y ofertas</label>
            </div>
        </div>

        <livewire:wizard.buttons wire:key="notifications-buttons" />
    </form>
</div>
