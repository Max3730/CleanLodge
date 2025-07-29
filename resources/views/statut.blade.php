@extends('welcome')

@section('content')

<section class="statut-section mt-10 px-6">

    {{-- RÉSUMÉ RAPIDE --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
        <div class="bg-blue-400 hover:bg-blue-700 transition duration-300  transform hover:scale-105 shadow rounded-lg p-4 text-center">
            <p class="text-white">Statut du compte</p>
            <span class="inline-block mt-1 px-3 py-1 bg-red-100 text-red-600 font-bold rounded-full text-sm">
                En retard
            </span>
        </div>
        <div class="bg-yellow-400 hover:bg-yellow-500 transition duration-300  transform hover:scale-105 shadow rounded-lg p-4 text-center">
            <p class="text-gray-600">Total dû</p>
            <p class="text-2xl text-red-600 font-bold">120 000 FCFA</p>
        </div>
        <div class="bg-gray-300 hover:bg-gray-500 transition duration-300  transform hover:scale-105 shadow rounded-lg p-4 text-center">
            <p class="text-white">Dernier paiement</p>
            <p class="text-green-700 font-semibold">15 Juin 2025</p>
        </div>
    </div>

    <main class="grid grid-cols-1 md:grid-cols-2 gap-6">
        {{-- STATUT LOCATIF --}}
        <div class="bg-green-300 transition duration-300 transform hover:scale-105  shadow-lg rounded-lg p-6 flex flex-col justify-between">
            <h2 class="text-2xl font-bold mb-4 text-gray-800">Statut locatif</h2>

            <div class="mb-6 space-y-2">
                <p class="text-base"><span class="font-semibold">Nom :</span> Jean Dupont</p>
                <p class="text-base"><span class="font-semibold">Logement :</span> Appartement B12, Résidence Soleil</p>
                <p class="text-base"><span class="font-semibold">Nombre de mois impayés :</span> <span class="text-red-600 font-bold">2</span></p>
            </div>

            <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                Payer maintenant
            </button>
        </div>

        {{-- HISTORIQUE DES PAIEMENTS --}}
        <div class="bg-gray-100 transition duration-300 transform hover:scale-105 shadow-lg rounded-lg p-6">
            <h2 class="text-2xl font-bold mb-4 text-gray-800">Historique des paiements</h2>

            <div class="overflow-x-auto">
                <table class="min-w-full border text-sm">
                    <thead>
                        <tr class="bg-gray-100 text-gray-700">
                            <th class="py-2 px-3 text-left">Date</th>
                            <th class="py-2 px-3 text-left">Montant</th>
                            <th class="py-2 px-3 text-left">Statut</th>
                            <th class="py-2 px-3 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr class="hover:bg-gray-50">
                            <td class="py-2 px-3">15 Juin 2025</td>
                            <td class="py-2 px-3">60 000 FCFA</td>
                            <td class="py-2 px-3 text-green-600 font-semibold">Payé</td>
                            <td class="py-2 px-3">
                                <a href="#" class="text-blue-600 hover:underline text-sm">Télécharger</a>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="py-2 px-3">15 Mai 2025</td>
                            <td class="py-2 px-3">60 000 FCFA</td>
                            <td class="py-2 px-3 text-green-600 font-semibold">Payé</td>
                            <td class="py-2 px-3">
                                <a href="#" class="text-blue-600 hover:underline text-sm">Télécharger</a>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="py-2 px-3">15 Avril 2025</td>
                            <td class="py-2 px-3">60 000 FCFA</td>
                            <td class="py-2 px-3 text-red-600 font-semibold">Impayé</td>
                            <td class="py-2 px-3 text-gray-400 text-sm italic">-</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="py-2 px-3">15 Mars 2025</td>
                            <td class="py-2 px-3">60 000 FCFA</td>
                            <td class="py-2 px-3 text-red-600 font-semibold">Impayé</td>
                            <td class="py-2 px-3 text-gray-400 text-sm italic">-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    {{-- INFOS SUPPLÉMENTAIRES --}}
    <div class="bg-gray-300 rounded-lg shadow p-6 mt-10">
        <h3 class="text-xl font-bold mb-2 text-gray-800">Informations complémentaires</h3>
        <ul class="list-disc ml-6 text-gray-700 space-y-1">
            <li>Pour toute question, contactez le gestionnaire au <span class="font-semibold">99 99 99 99</span>.</li>
            <li>Les paiements en retard peuvent entraîner des pénalités.</li>
            <li>Consultez votre espace personnel pour télécharger vos quittances de loyer.</li>
        </ul>
    </div>

</section>

@endsection
