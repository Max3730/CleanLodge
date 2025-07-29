@extends('welcome')

@section('content')
<div class="min-h-screen bg-gray-50 py-10 px-6">
    <div class="max-w-7xl mx-auto">
        <!-- En-tête -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Tableau de bord du Propriétaire</h1>
            <p class="text-gray-600">Bienvenue dans votre espace personnel. Gérez vos logements et suivez vos réservations facilement.</p>
        </div>

        <!-- Statistiques -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
            <div class="bg-white shadow rounded-lg p-6">
                <h2 class="text-gray-500 text-sm">Chambres disponibles</h2>
                <p class="text-2xl font-semibold text-green-600">12</p>
            </div>
            <div class="bg-white shadow rounded-lg p-6">
                <h2 class="text-gray-500 text-sm">Maisons louées</h2>
                <p class="text-2xl font-semibold text-blue-600">5</p>
            </div>
            <div class="bg-white shadow rounded-lg p-6">
                <h2 class="text-gray-500 text-sm">Réservations en attente</h2>
                <p class="text-2xl font-semibold text-yellow-500">3</p>
            </div>
            <div class="bg-white shadow rounded-lg p-6">
                <h2 class="text-gray-500 text-sm">Page Pro</h2>
                <p class="text-md font-semibold text-purple-600">En cours de validation</p>
            </div>
        </div>

        <!-- Actions principales -->
        <div class="flex flex-wrap gap-4 mb-10">
            <a href="#" class="bg-green-600 text-white px-5 py-3 rounded hover:bg-green-700 transition">📤 Publier un logement</a>
            <a href="#" class="bg-blue-600 text-white px-5 py-3 rounded hover:bg-blue-700 transition">📋 Voir mes réservations</a>
            <a href="#" class="bg-yellow-500 text-white px-5 py-3 rounded hover:bg-yellow-600 transition">🏠 Gérer mes maisons</a>
        </div>

        <!-- Tableau des réservations -->
        <div class="bg-white rounded shadow p-6">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Dernières réservations</h2>
            <table class="min-w-full table-auto border">
                <thead class="bg-gray-100 text-gray-700">
                    <tr>
                        <th class="px-4 py-2 text-left">Client</th>
                        <th class="px-4 py-2 text-left">Logement</th>
                        <th class="px-4 py-2 text-left">Date</th>
                        <th class="px-4 py-2 text-left">Statut</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    <tr class="border-t">
                        <td class="px-4 py-2">Jean Dupont</td>
                        <td class="px-4 py-2">Maison 3 pièces</td>
                        <td class="px-4 py-2">28/07/2025</td>
                        <td class="px-4 py-2 text-yellow-600">En attente</td>
                    </tr>
                    <tr class="border-t">
                        <td class="px-4 py-2">Aïcha K.</td>
                        <td class="px-4 py-2">Studio Meublé</td>
                        <td class="px-4 py-2">26/07/2025</td>
                        <td class="px-4 py-2 text-green-600">Confirmée</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Section infos page pro -->
        {{-- <div class="mt-10 bg-yellow-50 border-l-4 border-yellow-400 p-4 rounded shadow-sm">
            <p class="text-yellow-800">
                🕒 Votre page professionnelle est actuellement <strong>en cours de traitement</strong>. Vous serez notifié dès qu’elle sera validée par un administrateur.
            </p>
        </div> --}}
    </div>
</div>
@endsection
