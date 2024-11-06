document.addEventListener('DOMContentLoaded', function() { 
    const image = document.querySelector('.profil-image'); 
    const container = document.querySelector('.profil-image-container'); 
    if (image && container) { 
        image.onload = function() { 
            const aspectRatio = image.naturalWidth / image.naturalHeight; 
            console.log(aspectRatio);
            
            const containerSize = 15;

            container.style.width = `${containerSize * aspectRatio}vw`; 
            container.style.height = `${containerSize}vw`;

        };

        if (image.complete) image.onload();
    } 
});
