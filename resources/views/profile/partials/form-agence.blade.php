<form id="form-agence-multistep" class="space-y-4" method="POST" enctype="multipart/form-data">
    <!-- ÉTAPE 1 -->

    @csrf
    <div id="step1" class="space-y-4">
        <x-input label="Nom de l'agence" type="text" required/>
        <x-input label="Responsable principal" type="text" required/>
        <x-input label="Email" type="email" required/>
        <button type="button" onclick="nextStep()" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
            Suivant
        </button>
    </div>

    <!-- ÉTAPE 2 -->
    <div id="step2" class="space-y-4 hidden">
        <x-input label="Téléphone" type="tel" required/>
        <x-input label="Adresse complète" type="text" required/>
        <x-input label="N° RCCM ou Identifiant Fiscal" type="text" required/>
        <x-file label="Pièce justificative (registre, agrément...)" required/>

        <div class="flex justify-between">
            <button type="button" onclick="prevStep()" class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500 transition">
                Précédent
            </button>

            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
                Soumettre
            </button>
        </div>
    </div>
</form>



<script>
    function nextStep() {
        document.getElementById('step1').classList.add('hidden');
        document.getElementById('step2').classList.remove('hidden');
    }

    function prevStep() {
        document.getElementById('step2').classList.add('hidden');
        document.getElementById('step1').classList.remove('hidden');
    }
</script>
