@extends ('template.app')
@section ('content')
<div class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Update Kendaraan</h2>
        <form action="{{ route('kendaraan.update', $kendaraan->no_pol) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="no_pol" class="block text-sm font-medium text-gray-700">Nomor Kendaraan</label>
                <input type="text" name="no_pol" id="no_pol" value="{{ $kendaraan->no_pol }}" class="py-2 px-3 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500" required >
            </div>
            <div class="mb-4">
                <label for="no_mesin" class="block text-sm font-medium text-gray-700">Nomor Mesin</label>
                <input type="text" name="no_mesin" id="no_mesin" value="{{ $kendaraan->no_mesin }}" class="py-2 px-3 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500" required >
            </div>
            <div class="mb-4">
                <label for="merek" class="block text-sm font-medium text-gray-700">Merek Kendaraan</label>
                <select name="merek" id="merek" class="py-2 px-3 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500" required>
                    <option value="honda" {{ $kendaraan->merek == 'honda' ? 'selected' : '' }}>Honda</option>
                    <option value="yamaha" {{ $kendaraan->merek == 'yamaha' ? 'selected' : '' }}>Yamaha</option>
                    <option value="suzuki" {{ $kendaraan->merek == 'suzuki' ? 'selected' : '' }}>Suzuki</option>
                    <option value="kawasaki" {{ $kendaraan->merek == 'kawasaki' ? 'selected' : '' }}>Kawasaki</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="warna" class="block text-sm font-medium text-gray-700">Warna</label>
                <select name="warna" id="warna" class="py-2 px-3 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500" required>
                    <option value="putih" {{ $kendaraan->warna == 'putih' ? 'selected' : '' }}>Putih</option>
                    <option value="hitam" {{ $kendaraan->warna == 'hitam' ? 'selected' : '' }}>Hitam</option>
                    <option value="hijau" {{ $kendaraan->warna == 'hijau' ? 'selected' : '' }}>Hijau</option>
                    <option value="biru" {{ $kendaraan->warna == 'biru' ? 'selected' : '' }}>Biru</option>
                    <option value="merah" {{ $kendaraan->warna == 'merah' ? 'selected' : '' }}>Merah</option>
                </select>
            </div>
            <div class="flex justify-end">
                <a href="{{ route('kendaraan.index') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md shadow-sm text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 mr-2">
                    Batal
                </a>
                <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection