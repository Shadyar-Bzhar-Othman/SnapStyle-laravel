@props(['heading', 'model', 'param' => []])

<div class="flex flex-col justify-start items-center">
    <div class="w-full flex justify-between items-center">
        <p class="text-center">{{ ucfirst($heading) }}</p>
        <a href="{{ route('dashboard.' . $model . '.create', $param) }}"
            class="px-3 py-1 bg-primaryColor text-white rounded">Add
            {{ ucfirst($heading) }}</a>
    </div>
    <div class="w-full">
        <div class="overflow-auto rounded-lg shadow mt-4">
            <table class="w-full">
                {{ $slot }}
            </table>
        </div>
    </div>
</div>