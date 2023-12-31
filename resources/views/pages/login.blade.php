@extends('template.authTemplate')

@section('body')
    <div class="flex flex-col justify-center items-start w-full h-full p-4 ">
        
            <div>
                <h1 class="text-3xl text-primary font-bold">Login</h1>
                <h2 class="text-xl text-secondary font-medium">Welcome back Urbanist</h2>
            </div>

        <div class="flex flex-col w-full">
            <form action="/login-user" method="POST" class="flex flex-col justify-center items-center gap-8 py-8">
                @csrf
                <div class="flex justify-start items-center border-b-2 py-2 border-stroke w-full">
                    <i class="bx bxs-envelope bx-sm pl-1 pr-2 text-secondary"></i>
                    <input class="border-l-2 border-stroke bg-transparent w-full text-secondary placeholder-secondary pl-2 focus:outline-none" type="text" name="email" id="emailInput" placeholder="Email">
                </div>
                <div class="flex flex-col justify-center items-end w-full">
                    <div class="flex justify-start items-center border-b-2 py-2 border-stroke w-full">
                        <i class="bx bxs-lock bx-sm pl-1 pr-2 text-secondary"></i>
                        <input class="border-l-2 border-stroke bg-transparent w-full text-secondary placeholder-secondary pl-2 focus:outline-none" type="password" name="password" id="passwordInput" placeholder="Password">
                    </div>
                    <a class="font-semibold" href="#">Forgot password?</a>
                </div>
                
                <button class="text-2xl font-bold text-highlight bg-primary w-full rounded-lg py-2" type="submit">Login</button>
            </form>

            <div class="flex flex-col justify-center items-center">
                <p>Don't have an account ? <span class="text-primary font-semibold"><a href="/register">Register here</a></span></p>
            </div>
        </div>
    </div>
@endsection