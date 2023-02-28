<x-app-layout>
    @section('title')
        Edit Company
    @endsection
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <form method="POST" action="{{ url('update-company/'.$company->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" value="{{ $company->name }}" class="block mt-1 w-full" type="text" name="name" required autofocus/>
                    </div>

                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" value="{{ $company->email }}" class="block mt-1 w-full" type="email" name="email" autofocus/>
                    </div>

                    <div>
                        <x-input-label for="website" :value="__('Website')" />
                        <x-text-input id="website" value="{{ $company->website }}" class="block mt-1 w-full" type="text" name="website" autofocus/>
                    </div>

                    @if($company->logo)
                        <img src="{{ asset('storage/'.$company->logo) }}" width="70px" height="70px" alt="Logo here">
                    @endif

                    <div>
                        <x-input-label for="logo" :value="__('Logo')" />
                        <x-text-input id="logo" class="block mt-1 w-full" type="file" name="logo" autofocus/>
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
