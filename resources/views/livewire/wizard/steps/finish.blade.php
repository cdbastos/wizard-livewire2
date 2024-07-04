<div>
    <form wire:submit.prevent="submit">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-2 text-gray-800">Tu perfil</h2>
            <img src="{{ $user->profile->profileAvatarUrl() }}" alt="" class="rounded-t-lg" style="height: 50px">
            <p class="text-gray-700">Nombre: {{ $user->profile->first_name }}</p>
            <p class="text-gray-700">Apellidos: {{ $user->profile->last_name }}</p>
            <p class="text-gray-700">Fecha de nacimiento: {{ $user->profile->birthdate->format("d-m-Y") }}</p>
            <p class="text-gray-700">Mostrar perfil: {{ $user->profile->display_profile ? "Sí" : "No" }}</p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-lg mt-2">
            <h2 class="text-2xl font-bold mb-2 text-gray-800">Tus intereses</h2>
            <p class="text-gray-700">{{ $user->interests->pluck("name")->join(", ") }}.</p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-lg mt-2">
            <h2 class="text-2xl font-bold mb-2 text-gray-800">Tus conocimientos</h2>
            <p class="text-gray-700">{{ $user->skills->pluck("name")->join(", ") }}.</p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-lg mt-2">
            <h2 class="text-2xl font-bold mb-2 text-gray-800">Tus preferencias de notificación</h2>
            <p class="text-gray-700">Suscrito a la Newsletter: {{ $user->notification->receive_newsletter ? "Sí" : "No" }}</p>
            <p class="text-gray-700">Recibir promociones: {{ $user->notification->receive_promotions ? "Sí" : "No" }}</p>
        </div>

        <livewire:wizard.buttons :is-last-step="true" />
    </form>
</div>
