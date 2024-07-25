@extends ('template.app')
@section ('content')
<div class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Tambah kendaraan</h2>
        <form action="{{ route('kendaraan.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="no_pol" class="block text-sm font-medium text-gray-700">No Polisi</label>
                <input type="text" name="no_pol" id="no_pol" class="py-2 px-3 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="Nomor Polisi" required>
            </div>

            <div class="mb-4">
                <label for="no_mesin" class="block text-sm font-medium text-gray-700">No Mesin</label>
                <input type="text" name="no_mesin" id="no_mesin" class="py-2 px-3 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" placeholder="no_mesin" required>
            </div>
            <div class="mb-4">
                <label for="merek" class="block text-sm font-medium text-gray-700">Merek Kendaraan</label>
                <select name="merek" id="merek" class="py-2 px-3 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" required>
                    <option value="">Pilih Merek Kendaraan :</option>
                    <option value="honda">Honda</option>
                    <option value="yamaha">Yamaha</option>
                    <option value="suzuki">Suzuki</option>
                    <option value="kawasaki">Kawasaki</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="warna" class="block text-sm font-medium text-gray-700">Warna Kendaraan</label>
                <select name="warna" id="warna" class="py-2 px-3 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none" required>
                    <option value="">Pilih warna :</option>
                    <option value="putih">Putih</option>
                    <option value="hitam">Hitam</option>
                    <option value="hijau">Hijau</option>
                    <option value="biru">Biru</option>
                    <option value="merah">Merah</option>
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