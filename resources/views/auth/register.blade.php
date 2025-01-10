<x-layout>
    <div class="min-h-[85vh] flex">
        <div class="mt-20 mb-8 w-3/5 mx-auto text-center flex flex-col">
            <h1 class="font-extrabold text-5xl mb-2">Register Page</h1>
            <p class="mb-6 text-sm">Enter your details to create an account</p>
            <form class="px-4 py-6 rounded-lg bg-white/10" action="{{ route('register.store') }}" method="POST">
                @csrf

                <fieldset class="mb-4">
                    <x-header class="mb-2">Full Name</x-header>
                    <x-input name="name" id="name" placeholder="Enter your name" :value="old('name')" />
                    @error('email')
                        <p class="text-red-500 text-xs font-light text-start mt-1">{{ $message }}</p>
                    @enderror
                </fieldset>

                <fieldset class="mb-4">
                    <x-header class="mb-2">Email Address</x-header>
                    <x-input name="email" id="email" placeholder="Enter your email" :value="old('email')" />
                    @error('email')
                        <p class="text-red-500 text-xs font-light text-start mt-1">{{ $message }}</p>
                    @enderror
                </fieldset>

                <fieldset class="mb-4">
                    <x-header class="mb-2">Password</x-header>
                    <x-input name="password" id="password" type='password' placeholder='Enter your password' />
                    @error('password')
                        <p class="text-red-500 text-xs font-light text-start mt-1">{{ $message }}</p>
                    @enderror
                </fieldset>

                <fieldset class="mb-8">
                    <x-header class="mb-2">Confirm Password</x-header>
                    <x-input name="password_confirmation" id="password_confirmation" type='password' placeholder='Re-type your password' />
                    @error('password_confirmation')
                        <p class="text-red-500 text-xs font-light text-start mt-1">{{ $message }}</p>
                    @enderror
                </fieldset>

                <span class="w-full flex">
                    <button
                        class="bg-white text-primary px-3 py-2 rounded-lg font-bold text-sm w-full hover:bg-white/80">Register</button>
                </span>
            </form>
            <p class="text-sm mt-4">Already have an account? <a class="hover:text-emphasis"
                    href="{{ route('login') }}">Login</a></p>
        </div>
    </div>
</x-layout>
