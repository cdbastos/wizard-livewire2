@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-orange-300 focus:ring focus:ring-orange-200 focus:ring-opacity-90 rounded-md shadow-sm']) !!}>
