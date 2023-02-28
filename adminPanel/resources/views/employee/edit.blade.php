<x-app-layout>
    @section('title')
        Edit Employee
    @endsection
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <form method="POST" action="{{ url('update-employee/'.$employee->id) }}">
                    @csrf
                    @method('PUT')
                    <div>
                        <x-input-label for="f_name" :value="__('First Name')" />
                        <x-text-input id="f_name" value="{{ $employee->f_name }}" class="block mt-1 w-full" type="text" name="f_name" required autofocus/>
                    </div>

                    <div>
                        <x-input-label for="l_name" :value="__('Last Name')" />
                        <x-text-input id="l_name" value="{{ $employee->l_name }}" class="block mt-1 w-full" type="text" name="l_name" required autofocus/>
                    </div>

                    <div>
                        <x-input-label for="company" :value="__('Company')" />
                        <select class="block mt-1 w-full" name="company_id">
                            <option value="">{{ $employee->company->name }}</option>
                        </select>
                    </div>

                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" value="{{ $employee->email }}" class="block mt-1 w-full" type="email" name="email" autofocus/>
                    </div>

                    <div>
                        <x-input-label for="phone" :value="__('Phone')" />
                        <x-text-input id="phone" value="{{ $employee->phone }}" class="block mt-1 w-full" type="text" name="phone" autofocus/>
                    </div>

                    <div class="flex items-center justify-end mt-4">

                        <x-primary-button class="ml-3" type="submit">
                            {{ __('Update') }}
                        </x-primary-button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    

</x-app-layout>
