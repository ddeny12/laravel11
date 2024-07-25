@extends ('template.app')
@section ('content')
<div class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Tambah Supplier</h2>
        <form action="{{ route('supplier.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nama_supplier" class="block text-sm font-medium text-gray-700">Nama Supplier</label>
                <input type="text" name="nama_supplier" id="nama_supplier" class="py-2 px-3 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Nama Supplier" required>
            </div>
            <div class="mb-4">
                <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="py-2 px-3 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Alamat" required>
            </div>
            <div class="mb-4">
                <label for="no_hp" class="block text-sm font-medium text-gray-700">Nomor Handphone</label>
                <input type="number" name="no_hp" id="no_hp" class="py-2 px-3 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Nomor Handphone" required>
            </div>
            <div class="mb-4">
                <label for="id_barang" class="block text-sm font-medium text-gray-700">Nama Barang</label>
                <select name="id_barang" id="id_barang" class="py-2 px-3 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" required>
                    <option value="">Pilih Nama Barang</option>
                    @foreach ($barang as $data_barang)
                    <option value="{{ $data_barang->id_barang }}">{{ $data_barang->nama_barang }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex justify-end">
                <a href="{{ route('supplier.index') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md shadow-sm text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 mr-2">
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