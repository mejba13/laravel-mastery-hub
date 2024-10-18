<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>

                <!-- Livewire Counter Component -->
                <div class="mt-4">
                    <livewire:counter />
                </div>
                <br>
                <div class="mt-4">
                    <!-- Example usage in dashboard.blade.php -->

                    <!-- Success alert -->
                    <livewire:alert message="Operation completed successfully!" type="success" />

                    <!-- Error alert -->
                    <livewire:alert message="Something went wrong!" type="error" />

                    <!-- Warning alert -->
                    <livewire:alert message="This is a warning." type="warning" />

                    <!-- Info alert -->
                    <livewire:alert message="This is an informational message." />

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
