document.querySelectorAll('.accordion-header').forEach(header => {
    header.addEventListener('click', () => {
        const content = header.nextElementSibling;
        content.style.display = content.style.display === 'block' ? 'none' : 'block';
        header.classList.toggle('active');
    });
});

// Prévisualisation de l'image de profil
document.getElementById('profileImage').addEventListener('change', function() {
    const file = this.files[0];
    const reader = new FileReader();

    reader.onload = function(e) {
        const img = document.getElementById('imagePreview');
        img.src = e.target.result;
        img.style.display = 'block'; // Affiche l'image
    }

    if (file) {
        reader.readAsDataURL(file);
    }
});