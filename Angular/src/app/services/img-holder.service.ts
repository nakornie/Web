import { Injectable } from '@angular/core';
import { ImgHolder } from '../gallery/img-holder/img-holder.model';
import { IMG_HOLDERS } from '../gallery/img-holder/img-holder.data';


@Injectable({
  providedIn: 'root',
})

export class ImgHolderService {
  imgHolders: ImgHolder[] = IMG_HOLDERS;
  private favoriteImgHolder: ImgHolder | null = null;


  // Getters and setters
  get favoriteImg() : null | ImgHolder {
    return this.favoriteImgHolder;
  }

  // Retourne la liste des images
  getImgHolders(): ImgHolder[] {
    return [...this.imgHolders];
  }

  // Définir un favori
  setFavorite(holder: ImgHolder): void {
    if (this.favoriteImgHolder) {
      this.favoriteImgHolder.isFavorite = false; // Annule l'ancien favori
    }
    this.favoriteImgHolder = this.favoriteImgHolder === holder ? null : holder;
    if (this.favoriteImgHolder) {
      this.favoriteImgHolder.isFavorite = true;
    }
    this.reorderImgHolders(); // Tri après changement
  }

  // Tri les images
  reorderImgHolders(): void {
    this.imgHolders.sort((a, b) => {
      if (a.isFavorite) return -1;
      if (b.isFavorite) return 1;
      return b.ups - b.downs - (a.ups - a.downs);
    });
  }

  // Vérifie si une image est favori
  isFavorite(holder: ImgHolder): boolean {
    return this.favoriteImgHolder === holder;
  }

  
}
