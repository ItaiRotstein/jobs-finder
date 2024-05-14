@if (session()->has('message'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show"
        class="fixed top-0 right-0 bg-green-500 text-white px-24 py-3 rounded-bl">
        <p>
            {{ session('message') }}
        </p>
    </div>
@endif
