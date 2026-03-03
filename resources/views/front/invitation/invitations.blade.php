<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande Colocation</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white shadow-xl rounded-2xl p-8 w-full max-w-md">

        <!-- Title -->
        <h2 class="text-2xl font-bold text-gray-800 text-center mb-4">
            Demande de Colocation
        </h2>

        <!-- Description -->
        <p class="text-gray-600 text-center mb-6">
            Ahmed veut rejoindre leur colocation.
            Voulez-vous accepter sa demande ?
        </p>

        <!-- Buttons -->
        <div class="flex justify-between gap-4 w-full">

            <!-- Refuser -->
            <form action="/">
                <button class="w-full p-10 bg-red-500 hover:bg-red-600 text-white font-semibold py-2 rounded-xl transition duration-300">
                    Refuser
                </button>
            </form>

            <!-- Accepter -->
            <form action="{{ route('coloctaire.store') }}" method="POST">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <button
                    type="submit"
                    class="w-full p-10 bg-green-500 hover:bg-green-600 text-white font-semibold py-2 rounded-xl transition duration-300">
                    Accepter
                </button>
            </form>

        </div>

    </div>

</body>

</html>