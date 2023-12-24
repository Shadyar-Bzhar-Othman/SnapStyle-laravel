<x-layouts.main>
    <x-form.form heading="Register" action="{{ route('register') }}" method="POST">
        <x-form.input name="name" />
        <x-form.input name="email" type="email" />
        <x-form.input name="password" type="password" />

        <x-form.button class="self-center mt-2">Register</x-form.button>
    </x-form.form>
</x-layouts.main>
