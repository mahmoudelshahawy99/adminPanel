<x-app-layout>
    @section('title')
        Companies
    @endsection
    <x-slot name="header">
        <a class="underline text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('company.create') }}">
            {{ __('Add Company') }}
        </a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden sm:rounded-lg">

                <table class="table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Logo</th>
                            <th>Website</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($companies as $company)
                            <tr>
                                <td>{{ $company->id }}</td>
                                <td>{{ $company->name }}</td>
                                <td>{{ $company->email }}</td>
                                <td>
                                    <img src="{{ asset('storage/'.$company->logo) }}" width="70px" height="70px" alt="Logo here">
                                </td>
                                <td>{{ $company->website }}</td>
                                <td>
                                    <a href="{{ url('edit-company/'.$company->id) }}" class="ml-3">Edit</a>
                                    <a href="{{ url('delete-company/'.$company->id) }}" class="ml-3">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <ul>

                    <li><a class="underline text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ $companies->nextPageUrl() }}">Next</a></li>
            
                    <li><a class="underline text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ $companies->previousPageUrl() }}">Previous</a></li>
            
                </ul>
            </div>
        </div>
    </div>

</x-app-layout>
