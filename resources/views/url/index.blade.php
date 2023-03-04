<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lampurl</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen">
    <div class="md:w-1/2">
        <div class="mb-10">
            <h1 class="text-5xl font-bold mb-5"><span class="text-orange-600">Lamp</span><span>url</span></h1>
            <p class="text-slate-600">Lampurl is used to generate short url from long links or url.</p>
        </div>
        <div>
            <form action="{{ route('url.store') }}" method="post">
                @csrf
                <div>
                    @error('url')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                    <input type="text" name="url" class="w-full p-2 rounded border-2 focus:border-blue-500 
                    focus:border-2  focus:outline-none @error('url') border-red-500 @enderror" placeholder="Enter long url">
                </div>
                @if (session('url'))
                    <div class="my-5 rounded p-2 bg-green-500 text-white">
                        <a href="{{ session('url') }}" class="hover:underline" target="blank">{{ session('url') }}</a>
                    </div>
                @endif
                <input type="submit" value="Generate" class="w-full px-5 py-3 mt-5 text-lg font-bold bg-violet-700 
                text-slate-50 rounded block cursor-pointer transition-all hover:bg-violet-600">
            </form>
        </div>
    </div>
</body>
</html>