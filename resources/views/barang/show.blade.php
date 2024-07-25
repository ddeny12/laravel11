@extends ('template.app')
@section ('content')
<div class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Detail Barang</h2>
        <div class="mb-4">
            <label for="nama_barang" class="block text-sm font-medium text-gray-700">Nama Barang</label>
            <input type="text" id="nama_barang" name="nama_barang" value="{{ $barang->nama_barang }}" readonly class="py-2 px-3 block w-full border-gray-200 shadow-sm rounded-lg text-sm bg-gray-100">
        </div>
        <div class="mb-4">
            <label for="merek" class="block text-sm font-medium text-gray-700">Merek</label>
            <input type="text" id="merek" name="merek" value="{{ $barang->merek }}" readonly class="py-2 px-3 block w-full border-gray-200 shadow-sm rounded-lg text-sm bg-gray-100">
        </div>
        <div class="mb-4">
            <label for="harga" class="block text-sm font-medium text-gray-700">Harga</label>
            <input type="number" id="harga" name="harga" value="{{ $barang->harga }}" readonly class="py-2 px-3 block w-full border-gray-200 shadow-sm rounded-lg text-sm bg-gray-100">
        </div>
        <div class="mb-4">
            <label for="stok" class="block text-sm font-medium text-gray-700">Stok</label>
            <input type="number" id="stok" name="stok" value="{{ $barang->stok }}" readonly class="py-2 px-3 block w-full border-gray-200 shadow-sm rounded-lg text-sm bg-gray-100">
        </div>
        <div class="mb-4">
            <label for="satuan" class="block text-sm font-medium text-gray-700">Satuan</label>
            <input type="text" id="satuan" name="satuan" value="{{ $barang->satuan }}" readonly class="py-2 px-3 block w-full border-gray-200 shadow-sm rounded-lg text-sm bg-gray-100">
        </div>
        <div class="flex justify-end">
            <a href="{{ route('barang.index') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md shadow-sm text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 mr-2">
                Kembali
            </a>
        </div>
    </div>
</div>
@endsection

