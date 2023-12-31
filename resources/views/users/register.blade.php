<x-layout>
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Register</h2>
            <p class="mb-4">Create an account to post gigs</p>
        </header>

        <form method="POST" action="/users/register">
            @csrf
            <div class="mb-6">
                <label for="name" class="inline-block text-lg mb-2"> Name </label>
                <label>
                    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name"
                           value="{{old('name')}}"/>
                </label>

                @error('name')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">Email</label>
                <label>
                    <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email"
                           value="{{old('email')}}"/>
                </label>

                @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password" class="inline-block text-lg mb-2">
                    Password
                </label>
                <label>
                    <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password"
                           value="{{old('password')}}"/>
                </label>

                @error('password')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password2" class="inline-block text-lg mb-2">
                    Confirm Password
                </label>
                <label>
                    <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password_confirmation"
                           value="{{old('password_confirmation')}}"/>
                </label>

                @error('password_confirmation')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit" class="bg-red-500 text-white rounded py-2 px-4 hover:bg-black">
                    Sign Up
                </button>
            </div>

            <div class="mt-8">
                <p>
                    Already have an account?
                    <a href="/login" class="text-red-500">Login</a>
                </p>
            </div>
        </form>

</x-layout>