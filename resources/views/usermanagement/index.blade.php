<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('User Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="table table-bordered data-table" style="margin: 0 auto;">
                        <thead>
                          <tr>
                            
                            <th>Name</th>
                           <th>Email</th>
                            <th>Status</th> 
                            <th>Role</th> 
                            <th>Created At</th> 
                    
                            <th width="100px">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                         
                        </tbody>
                      </table>
                 
                </div>
            </div>
        </div>
    </div>
</x-app-layout>