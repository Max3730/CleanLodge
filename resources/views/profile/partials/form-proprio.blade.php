<form class="space-y-4" method="POST" enctype="multipart/form-data">
    @csrf
    <x-input label="Nom complet" name="nom_complet " type="text" />
    <x-input label="Téléphone" name="telephone " type="tel" />
    <x-input label="Email" name="email" type="email" />
    <x-input label="Adresse exacte du bien" name="adresse_bien" type="text" />
    <x-input label="Date de naissance" name="date_naissance" type="date" />
    
    <x-select label="Type de document de propriété" name="type_document" :options="['Titre foncier', 'Certificat administratif']" />
    <x-file label="Document de propriété" name="document_path" />
    <x-input label="Numéro de lot / parcelle / porte" name="numero_lot" type="text" />
    <x-input label="Surface et situation géographique" name="surface_geo" type="text" />
    <x-file label="Photo du bien (optionnel)" name="photo_bien" />
    
    <x-select label="Statut juridique du bien" name="statut_juridique" :options="['Bien personnel', 'Héritage', 'Co-propriété']" />

    <div>
        <label class="block text-sm font-medium">Pièce d'identité</label>
        <select id="identity-type" name="type_piece_identite" class="w-full border rounded p-2">
            <option value="">-- Sélectionnez --</option>
            <option value="carte">Carte d'identité</option>
            <option value="passeport">Passeport</option>
        </select>
    </div>

    <div id="identity-details" class="space-y-2 hidden">
        <x-input label="Numéro du document" name="numero_piece_identite" type="text" />
        <x-input label="Date d’expiration" name="expiration_piece" type="date" />
        <x-input label="Photo d'identité" name="photo_identite_path" type="file" />
    </div>

    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        Soumettre
    </button>
</form>
