<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>

    <form method="POST" action="/jobs">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Create a New Job</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">We just need a handful of details from you.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-lable for="title">Title</x-form-lable>
                        <div class="mt-2">
                            <x-form-input name="title" id="title" placeholder="CEO" required />
                            <x-form-error name="title" />
                        </div>
                    </x-form-field>

                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">Salary</label>
                        <div class="mt-2">

                            <x-form-field>
                                <x-form-lable for="title">Title</x-form-lable>
                                <div class="mt-2">
                                    <x-form-input name="salary" id="salary" placeholder="$50,000" required />
                                    <x-form-error name="title" />
                                </div>
                            </x-form-field>

                            @error('salary')
                            <p class="text-xm text-red-500 font-semibold">{{ $message}}</p>
                            @enderror
                        </div>
                    </div>
                </div>
             
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            <x-form-button type="submit">Save</x-form-button>
        </div>
    </form>
</x-layout>