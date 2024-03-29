{{--    <div class="alert alert-success alert-block alert-hide">--}}
{{--        <button type="button" class="close" data-dismiss="alert">×</button>--}}
{{--        <strong>{{ $message }}</strong>--}}
{{--    </div>--}}

@if ($message = Session::get('success'))
    <div class="bg-green-200 mb-4 border border-green-400 text-green-700 px-4 py-3 rounded relative alert-hide" role="alert">
        <strong class="font-bold">{{ 'Success' }}</strong>
        <span class="block sm:inline">{{ $message }}</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
    <svg class="fill-current h-6 w-6 text-teal-500" role="button" xmlns="http://www.w3.org/2000/svg"
         viewBox="0 0 20 20"><title>Close</title><path
            d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
  </span>
    </div>
@endif

@if ($message = Session::get('danger'))
    <div class="bg-red-200 mb-4 border border-red-400 text-red-700 px-4 py-3 rounded relative alert-hide" role="alert">
        <strong class="font-bold">{{ 'Error' }}</strong>
        <span class="block sm:inline">{{ $message }}</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path
            d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
  </span>
    </div>
@endif

@if ($message = Session::get('warning'))
    <div class="bg-orange-200 mb-4 border border-orange-400 text-orange-700 px-4 py-3 rounded relative alert-hide" role="alert">
        <strong class="font-bold">{{ 'Warning' }}</strong>
        <span class="block sm:inline">{{ $message }}</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
    <svg class="fill-current h-6 w-6 text-orange-500" role="button" xmlns="http://www.w3.org/2000/svg"
         viewBox="0 0 20 20"><title>Close</title><path
            d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
  </span>
    </div>
@endif

@if ($message = Session::get('info'))
    <div class="bg-blue-200 mb-4 border border-blue-400 text-blue-700 px-4 py-3 rounded relative alert-hide" role="alert">
        <strong class="font-bold">{{ 'Info' }}</strong>
        <span class="block sm:inline">{{ $message }}</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
    <svg class="fill-current h-6 w-6 text-blue-500" role="button" xmlns="http://www.w3.org/2000/svg"
         viewBox="0 0 20 20"><title>Close</title><path
            d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
  </span>
    </div>
@endif


