@extends ('template.app')
@section ('content')
<div class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Detail Kendaraan</h2>
        <div class="mb-4">
            <label for="no_pol" class="block text-sm font-medium text-gray-700">Nomor Kendaraan</label>
            <input type="text" id="no_pol" name="no_pol" value="{{ $kendaraan->no_pol }}" readonly class="py-2 px-3 block w-full border-gray-200 shadow-sm rounded-lg text-sm bg-gray-100">
        </div>
        <div class="mb-4">
            <label for="no_mesin" class="block text-sm font-medium text-gray-700">Nomor Mesin</label>
            <input type="text" id="no_mesin" name="no_mesin" value="{{ $kendaraan->no_mesin }}" readonly class="py-2 px-3 block w-full border-gray-200 shadow-sm rounded-lg text-sm bg-gray-100">
        </div>
        <div class="mb-4">
            <label for="merek" class="block text-sm font-medium text-gray-700">Merek Kendaraan</label>
            <input type="text" id="merek" name="merek" value="{{ $kendaraan->merek }}" readonly class="py-2 px-3 block w-full border-gray-200 shadow-sm rounded-lg text-sm bg-gray-100">
        </div>
        <div class="mb-4">
            <label for="warna" class="block text-sm font-medium text-gray-700">Warna Kendaraan</label>
            <input type="text" id="warna" name="warna" value="{{ $kendaraan->warna }}" readonly class="py-2 px-3 block w-full border-gray-200 shadow-sm rounded-lg text-sm bg-gray-100">
        </div>
        <div class="flex justify-end">
            <a href="{{ route('kendaraan.index') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md shadow-sm text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 mr-2">
                Kembali
            </a>
        </div>
    </div>
</div>
@endsection
