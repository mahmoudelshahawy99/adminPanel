<x-app-layout>
    @section('title')
        Employees
    @endsection
    <x-slot name="header">
        <a class="underline text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('employee.create') }}">
            {{ __('Add Employee') }}
        </a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden sm:rounded-lg">

                <table class="table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Company</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($employees as $employee)
                            <tr>
                                <td>{{ $employee->id }}</td>
                                <td>{{ $employee->f_name }}</td>
                                <td>{{ $employee->l_name }}</td>
                                <td>{{ $employee->company->name }}</td>
                                <td>{{ $employee->email }}</td>
                                <td>{{ $employee->phone }}</td>           
                                <td>
                                    <a href="{{ url('edit-employee/'.$employee->id) }}" class="ml-3">Edit</a>
                                    <a href="{{ url('delete-employee/'.$employee->id) }}" class="ml-3">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <ul>

                    <li><a class="underline text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ $employees->nextPageUrl() }}">Next</a></li>
            
                    <li><a class="underline text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ $employees->previousPageUrl() }}">Previous</a></li>
            
                </ul>
            </div>
        </div>
    </div>

</x-app-layout>
