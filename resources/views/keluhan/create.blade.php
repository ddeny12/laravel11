@extends ('template.app')
@section ('content')
<div class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Tambah Keluhan</h2>
        <form action="{{ route('keluhan.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nama_keluhan" class="block text-sm font-medium text-gray-700">Nama keluhan</label>
                <input type="text" name="nama_keluhan" id="nama_keluhan" class="py-2 px-3 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Nama keluhan" required>
            </div>
            <div class="mb-4">
                <label for="ongkos" class="block text-sm font-medium text-gray-700">Ongkos</label>
                <input type="number" name="ongkos" id="ongkos" class="py-2 px-3 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="ongkos" required>
            </div>
            <div class="mb-4">
                <label for="no_pol" class="block text-sm font-medium text-gray-700">Nomor Polisi</label>
                <select name="no_pol" id="no_pol" class="py-2 px-3 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" required>
                    <option value="">Pilih No Polisi</option>
                    @foreach ($kendaraan as $data_kendaraan)
                    <option value="{{ $data_kendaraan->no_pol }}">{{ $data_kendaraan->no_pol }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="id_customer" class="block text-sm font-medium text-gray-700">Nama Customer</label>
                <select name="id_customer" id="id_customer" class="py-2 px-3 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" required>
                    <option value="">Pilih Nama Customer</option>
                    @foreach ($customer as $data_customer)
                    <option value="{{ $data_customer->id_customer }}">{{ $data_customer->nama_customer }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="id_pegawai" class="block text-sm font-medium text-gray-700">Nama Pegawai</label>
                <select name="id_pegawai" id="id_pegawai" class="py-2 px-3 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" required>
                    <option value="">Pilih Nama Pegawai</option>
                    @foreach ($pegawai as $data_pegawai)
                    <option value="{{ $data_pegawai->id_pegawai }}">{{ $data_pegawai->nama_pegawai }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex justify-end">
                <a href="{{ route('keluhan.index') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md shadow-sm text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 mr-2">
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
