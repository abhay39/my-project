<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>

<body>
  <div class="h-[100vh] flex items-center justify-center">
    <div class=" justify-center items-center  bg-slate-500 p-6 space-x-5 space-y-5 rounded">
      <form>
        <h1 class="text-4xl font-bold text-white text-center">
          Login
        </h1>

       <div class="mt-2">
        <label class="text-base text-white">
          Username
        </label>
        <br />
        <input placeholder="Enter your username" class="p-2 rounded border-green-300 outline-none sm:w-[100%] md:w-[250px]"/>
       </div>

       <div class="mt-2">
        <label class="text-base text-white">
          Password
        </label>
        <br />
        <input type="password" placeholder="Enter your username" class="p-2 rounded border-green-300 outline-none sm:w-[100%] md:w-[250px]"/>
       </div>
       <input type="submit" value="Login" class="p-2 bg-cyan-700 items-center justify-center text-center mt-2 sm:w-[100%] md:w-[250px] rounded text-white text-lg cursor-pointer" />
       <div class="flex">
         <p class="text-sm text-center">Don't have an account?  
        <p class="text-sm text-center cursor-pointer underline text-white"> SignUp</p>
       </div>
        
      </p>
      </form>
    </div>
  </div>
</body>
</html>