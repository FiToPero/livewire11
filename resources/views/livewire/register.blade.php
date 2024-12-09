<div>
    
<div class="w-[500px] h-[850px] mx-auto my-24 p-6 text-black dark:text-white bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">

    <form wire:submit.prevent="Register">
        <div class="flex flex-col gap-4">
            <div class="m-auto">
                <h3 class="text-2xl font-bold">Login</h3>
            </div>
            <div class="flex flex-col m-auto">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" wire:model="name" class="border border-gray-400 p-2">
                @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="flex flex-col m-auto">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" wire:model="email" class="border border-gray-400 p-2">
                @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="flex flex-col m-auto">
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" wire:model="phone" class="border border-gray-400 p-2">
                @error('phone') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="flex flex-col m-auto">
                <label for="address">Address</label>
                <input type="address" id="address" name="address" wire:model="address" class="border border-gray-400 p-2">
                @error('address') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="flex flex-col m-auto">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" wire:model="password" class="border border-gray-400 p-2">
                @error('password') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <div class="flex flex-col m-5">
                <button type="submit" class="bg-blue-500 text-white p-2">Login</button>
            </div>
        </div>
    </form>
</div>
</div>
