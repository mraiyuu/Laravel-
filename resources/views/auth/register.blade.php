<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>

    <form method="POST" action="/register">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">


                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">


                    <div class="sm:col-span-4">

                        <div class="mt-0">

                            <x-form-field>
                                <x-form-lable for="first_name">First Name</x-form-lable>
                                <div class="mt-2">
                                    <x-form-input name="first_name" id="first_name" required />
                                    <x-form-error name="first_name" />
                                </div>
                            </x-form-field>

                            <x-form-field>
                                <x-form-lable for="last_name">Last Name</x-form-lable>
                                <div class="mt-2">
                                    <x-form-input name="slast_name" id="last_name" required />
                                    <x-form-error name="last_name" />
                                </div>
                            </x-form-field>

                            @error('last_name')
                            <p class="text-xm text-red-500 font-semibold">{{ $message}}</p>
                            @enderror
                        </div>

                        <div class="mt-2">

                            <x-form-field>
                                <x-form-lable for="email">Email</x-form-lable>
                                <div class="mt-2">
                                    <x-form-input name="email" type="email" id="email" required />
                                    <x-form-error name="email" />
                                </div>
                            </x-form-field>

                            @error('email')
                            <p class="text-xm text-red-500 font-semibold">{{ $message}}</p>
                            @enderror
                        </div>

                        <div class="mt-2">

                            <x-form-field>
                                <x-form-lable for="password">Password</x-form-lable>
                                <div class="mt-2">
                                    <x-form-input name="password" type="password" id="password" required />
                                    <x-form-error name="password" />
                                </div>
                            </x-form-field>

                            @error('password')
                            <p class="text-xm text-red-500 font-semibold">{{ $message}}</p>
                            @enderror
                        </div>

                        <div class="mt-2">

                            <x-form-field>
                                <x-form-lable for="password_confirm">Confirm password</x-form-lable>
                                <div class="mt-2">
                                    <x-form-input name="spassword_confirm" id="password_confirm" type="password" />
                                    <x-form-error name="password_confirm" />
                                </div>
                            </x-form-field>

                            @error('password_confirm')
                            <p class="text-xm text-red-500 font-semibold">{{ $message}}</p>
                            @enderror
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <x-form-button type="submit">Register</x-form-button>
        </div>
    </form>
</x-layout>