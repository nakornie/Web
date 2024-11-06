document.addEventListener('DOMContentLoaded', function() { 
    const image = document.querySelector('.profil-image'); 
    const container = document.querySelector('.profil-image-container'); 
    if (image && container) { 
        image.onload = function() { 
            const aspectRatio = image.naturalWidth / image.naturalHeight; 
            console.log(aspectRatio);
            
            const vwValue = 15; // Valeur en vw
            const vhValue = 13; // Valeur en vh
            
            // Convertir vh en vw pour la comparaison
            const vhInVw = (vhValue / 100) * window.innerHeight / window.innerWidth * 100; // Convertit vh en vw
            const containerSize = Math.max(vwValue, vhInVw);
            console.log("Container size : ", containerSize);

            container.style.width = `${containerSize * aspectRatio}vw`; 
            container.style.height = `${containerSize}vw`;
        };

        if (image.complete) image.onload();
    } 
});
