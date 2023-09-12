<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Twitter | {{ $title }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@400;600;700&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col gap-3 justify-center items-center sm:mt-[15%] mt-[30%] bg-background text-slate-300">
    <div>
        <img src="{{ asset('/storage/icons/twitter.png') }}" class="w-[2rem]">
    </div>

    <div class="flex flex-col items-center gap-2 border-2 border-slate-800 p-4 rounded-lg font-Mont">
        <h3 class="font-bold overline text-xl">Sign Up</h3>
        <form action="/signup" method="post" class="flex flex-col gap-4 justify-center items-center">
            @csrf
            <div class="flex flex-col justify-center items-center">
                <input
                type="text"
                placeholder="Username..."
                name="username"
                autocomplete="off"
                class="py-2 px-4 rounded-lg border-2 border-gray-200 focus:ring-2 focus:ring-blue-500 focus:outline-none transition-all duration-150 ease-in-out text-black  @error('username')
                ring-2 ring-red-600 @enderror"
                >
                @error('username')
                    <div class="text-xs font-Poppins text-red-600 mt-1">{{ $message }}</div>
                @enderror

            </div>
            <x-password-input
            label="Password"
            placeholder="Password"
            name="password"
            />

        <x-password-input
            label="Password Confirmation"
            placeholder="Password Confirmation"
            name="password_confirmation"
        />

            <button type="submit" class="bg-blue-500 py-2 px-4 text-white rounded-md hover:bg-blue-700 transition-all duration-200 font-bold font-Montserrat">Sign Up</button>
        </form>
        <span class="w-[100%] text-xs">Already have an account? <a href="/" class="underline text-blue-400">Login Here</a></span>
    </div>

</body>
</html>
