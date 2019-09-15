@extends('layouts.parent')

@section('title', 'Nursing')

@section('content')
<div class='flex flex-wrap justify-center mt-12 -mx-4'>
  @foreach ($visits as $visit)
    <div class='w-1/3 px-4 pb-8'>
      <div class='relative rounded shadow-lg bg-white h-64 p-4 flex flex-col'>
        <div class='relative h-32 w-32 bg-blue-100 rounded mx-auto text-center shadow-md text-light' style='top:-2.1rem;overflow:hidden;'>
          <img src="{{ $visit->patient['profile_image_path'] }}" class='w-full h-auto' />
        </div>
        <div class='mx-auto text-center -mt-6 flex-grow'>
          <h5 class='text-blue-200'>{{ $visit->patient->name }}</h5>
          <p class='text-sm'>
            {{ $visit->patient->gender }} | <span class='text-grey-400'>{{ $visit->patient['age'] }}</span>
          </p>
          <p class='text-grey-300 text-xs mb-2'>
            Dr. {{ $visit->attending->name }}
          </p>
          <button class='rounded-full px-4 py-1 text-xs text-white bg-accent'>Vitals</button>
        </div>
        <div class='flex justify-between'>
          <p class='text-xs text-grey-300'>
            <i class="far fa-clock mr-1"></i>{{ $visit->created_at->diffForHumans() }}
          </p>
        </div>
      </div>
    </div>
  @endforeach
</div>
@endsection
