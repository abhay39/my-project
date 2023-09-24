<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>

<body>
  <div class="h-[100vh] flex ">
    <div class="bg-black w-1/3"></div>

    <div class="flex justify-center w-2/3 items-center  p-6 space-x-5 space-y-5  ">
      <form class="bg-slate-300 p-5 rounded">
        <h1 class="text-4xl font-bold text-black text-center">
          Login
        </h1>

       <div class="mt-2">
        <label class="text-base text-black">
          Username
        </label>
        <br />
        <input placeholder="Enter your username" class="p-2 rounded border-green-300 outline-none sm:w-[100%] md:w-[250px]"/>
       </div>

       <div class="mt-2">
        <label class="text-base text-black">
          Password
        </label>
        <br />
        <input type="password" placeholder="Enter your username" class="p-2 rounded border-green-300 outline-none sm:w-[100%] md:w-[250px]"/>
       </div>
       <div>
        <input type="submit" value="Login" class="p-2 bg-cyan-700 items-center justify-center text-center mt-2 sm:w-[100%] md:w-[250px] rounded text-white text-lg cursor-pointer" />
       </div>
       <div class="flex">
         <p class="text-sm text-center">Don't have an account?  
        <p class="text-sm text-center cursor-pointer underline text-black user-select:none"> SignUp</p>
       </div> 
      </form>
    </div>
  </div>
</body>
</html>