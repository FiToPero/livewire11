<x-layouts.app>

    <div class="flex flex-row gap-8 justify-center m-5 p-5">
        <x-primary-button><a href="/">Home</a></x-primary-button>
        <x-primary-button><a href="{{route('dashboard')}}">Dashboard</a></x-primary-button>
        <x-primary-button><a href="{{route('login')}}">Login</a></x-primary-button>
        <x-primary-button><a href="{{route('register')}}">Register</a></x-primary-button>
   </div>
    
    <livewire:welcome />

</x-layouts.app>