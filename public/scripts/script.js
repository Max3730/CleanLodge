
    document.addEventListener('DOMContentLoaded', function () {
        const burger = document.getElementById('burger');
        const menu = document.getElementById('mobileMenu');

        // Toggle menu visibility
        burger.addEventListener('click', function (e) {
            e.stopPropagation();
            menu.classList.toggle('hidden');
        });

        // Fermer si on clique ailleurs
        document.addEventListener('click', function (e) {
            if (!menu.classList.contains('hidden') && !menu.contains(e.target) && e.target !== burger) {
                menu.classList.add('hidden');
            }
        });
    });




//     function showForm(type) {
//     document.getElementById('overlayForm').classList.remove('hidden');
//     document.getElementById('form-proprio').classList.add('hidden');
//     document.getElementById('form-agence').classList.add('hidden');

//     if (type === 'proprio') {
//       document.getElementById('form-proprio').classList.remove('hidden');
//     } else {
//       document.getElementById('form-agence').classList.remove('hidden');
//     }
//   }

//   function closeOverlay() {
//     document.getElementById('overlayForm').classList.add('hidden');
//   }