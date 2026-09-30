<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Poliklinik</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="bg-white shadow-xl rounded-2xl p-10 text-center max-w-lg">

        <h1 class="text-4xl font-bold text-blue-600 mb-4">
            Sistem Informasi Poliklinik
        </h1>

        <p class="text-gray-600 mb-6">
            Laravel 13 + Tailwind CSS v4 berhasil berjalan.
        </p>

        <div class="grid grid-cols-3 gap-4">

            <div class="bg-blue-50 p-4 rounded-xl">
                <h2 class="font-bold text-blue-600">
                    Dokter
                </h2>
                <p class="text-sm text-gray-500">
                    Data Dokter
                </p>
            </div>

            <div class="bg-green-50 p-4 rounded-xl">
                <h2 class="font-bold text-green-600">
                    Pasien
                </h2>
                <p class="text-sm text-gray-500">
                    Data Pasien
                </p>
            </div>

            <div class="bg-purple-50 p-4 rounded-xl">
                <h2 class="font-bold text-purple-600">
                    Obat
                </h2>
                <p class="text-sm text-gray-500">
                    Data Obat
                </p>
            </div>

        </div>

    </div>

</body>
</html>