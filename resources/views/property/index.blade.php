{{-- resources/views/listings/index.blade.php --}}
<x-app-layout>
    <div class="max-w-7xl mx-auto py-8 sm:px-6 lg:px-8">
        <div class="bg-white shadow-sm rounded-lg p-6">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-semibold text-gray-800">Property Listings</h1>
                <a href="{{ route('property.create') }}" 
                   class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                    + New Listing
                </a>
            </div>

            {{-- Flash success message --}}
            @if(session('success'))
                <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Table View (Admin Style) --}}
            <div class="overflow-x-auto mb-10">
                <table class="min-w-full border border-gray-200 divide-y divide-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">#</th>
                            <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Title</th>
                            <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Price</th>
                            <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Location</th>
                            <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Type</th>
                            <th class="px-4 py-2 text-left text-sm font-semibold text-gray-600">Status</th>
                            <th class="px-4 py-2 text-sm font-semibold text-gray-600">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse($properties as $listing)
                            <tr>
                                <td class="px-4 py-2 text-sm text-gray-700">{{ $loop->iteration }}</td>
                                <td class="px-4 py-2 text-sm font-medium text-gray-900">{{ $listing->title }}</td>
                                <td class="px-4 py-2 text-sm text-gray-700">R {{ number_format($listing->price, 2) }}</td>
                                <td class="px-4 py-2 text-sm text-gray-700">{{ $listing->city }}, {{ $listing->province }}</td>
                                <td class="px-4 py-2 text-sm text-gray-700">{{ ucfirst($listing->property_type) }}</td>
                                <td class="px-4 py-2 text-sm">
                                    <span class="px-2 py-1 rounded text-white 
                                        {{ strtolower($listing->status) == 'available' ? 'bg-green-500' : 'bg-red-500' }}">
                                        {{ ucfirst($listing->status) }}
                                    </span>
                                </td>
                                <td class="px-4 py-2 flex space-x-2">
                                    <a href="{{ route('property.show', $listing) }}" 
                                       class="text-blue-600 hover:underline">View</a>
                                    <a href="{{ route('property.edit', $listing) }}" 
                                       class="text-yellow-600 hover:underline">Edit</a>
                                    <form action="{{ route('property.destroy', $listing) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="px-4 py-6 text-center text-gray-500">
                                    No listings available. <a href="{{ route('property.create') }}" class="text-blue-600">Create one</a>.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{-- Card / Advertisement Style View --}}
          {{-- Card / Advertisement Style View --}}
<h2 class="text-xl font-semibold text-gray-800 mb-4">Featured Properties</h2>
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    @forelse($properties as $listing)
        <div class="border rounded-lg overflow-hidden shadow hover:shadow-lg transition">
            
            {{-- Main Image --}}
            @if($listing->images->count())
                <div x-data="{ mainImage: '{{ asset('storage/' . $listing->images->first()->image_path) }}' }">
                    

                    <img :src="mainImage"
                         class="w-full h-40 object-cover rounded-md mb-2"
                         alt="Main Image">

                    {{-- Thumbnails --}}
                    <div class="flex gap-2 px-2 pb-2 overflow-x-auto">
                        @foreach($listing->images->take(4) as $img)
                            <img src="{{ asset('storage/' . $img->image_path) }}"
                                 class="w-14 h-14 object-cover rounded cursor-pointer border hover:ring-2 hover:ring-blue-400"
                                 @click="mainImage = '{{ asset('storage/' . $img->image_path) }}'">
                        @endforeach
                    </div>
                </div>
            @else
                <div class="w-full h-40 bg-gray-200 flex items-center justify-center text-gray-500 rounded-md mb-3">
                    No Image
                </div>
            @endif

            {{-- Property Content --}}
            <div class="p-4">
                <h3 class="text-lg font-semibold text-gray-800">{{ $listing->title }}</h3>
                <p class="text-blue-600 font-bold">R {{ number_format($listing->price, 2) }}</p>
                <p class="text-sm text-gray-600">{{ $listing->city }}, {{ $listing->province }}</p>
                
                <p class="mt-2 text-sm text-gray-700 line-clamp-3">
                    {{ Str::limit($listing->description, 120) }}
                </p>

                {{-- Action --}}
                <div class="mt-3">
                    <a href="{{ route('property.show', $listing) }}" 
                       class="inline-block px-3 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                        View Details
                    </a>
                </div>
            </div>
        </div>
    @empty
        <p class="text-gray-500">No properties to show yet.</p>
    @endforelse
</div>


            {{-- Pagination --}}
            <div class="mt-6">
                {{ $properties->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
