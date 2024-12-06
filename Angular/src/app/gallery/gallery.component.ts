// gallery.component.ts
import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ImgHolder } from './img-holder/img-holder.model';
import { ImgHolderComponent } from './img-holder/img-holder.component'; 


@Component({
  selector: 'app-gallery',
  standalone: true,
  imports: [
    CommonModule,
    ImgHolderComponent
  ],
  templateUrl: './gallery.component.html',
  styleUrls: ['./gallery.component.scss'],
})

export class GalleryComponent {
  imgCrownedYzzil = new ImgHolder(
    'public/images/crowned_yzzil.png',
    'Izyl Couronnée',
    'La grande sœur du groupe',
    'Yzzil',
    '21/03/24',
    'Nakornie',
    'Nakornie'
  );

  imgDemonicYzzil = new ImgHolder(
    'public/images/demonic_yzzil.png',
    'Izyl Démoniaque',
    'La seconde. Efrryante mais au grand coeur.',
    'Yzzil',
    '21/03/24',
    'Nakornie',
    'Nakornie'
  );

  imgBlazingYzzil = new ImgHolder(
    'public/images/blazing_yzzil.png',
    'Izyl Ardente',
    'La jumelle de feu',
    'Yzzil',
    '21/03/24',
    'Nakornie',
    'Nakornie'
  );

  imgFreezingYzzil = new ImgHolder(
    'public/images/freezing_yzzil.png',
    'Izyl Glaciale',
    'La jumelle de glace',
    'Yzzil',
    '21/03/24',
    'Nakornie',
    'Nakornie'
  );

  imgCrownedOuros = new ImgHolder(
    'public/images/crowned_ouros.png',
    'Ouros Couronné',
    'Le grand frère, le plus sage de tous',
    'Ouros',
    '21/03/24',
    'Nakornie',
    'Nakornie'
  );

  imgPunkOuros = new ImgHolder(
    'public/images/punk_ouros.png',
    'Ouros Punk',
    'Le petit frère parmis les Ouros. Une vraie tête à claques',
    'Ouros',
    '21/03/24',
    'Nakornie',
    'Nakornie'
  );

  imgAutomnalOuros = new ImgHolder(
    'public/images/automnal_ouros.png',
    'Ouros Automnal',
    'Un chat. Pas d\'autre mots pour ça',
    'Ouros',
    '21/03/24',
    'Nakornie',
    'Nakornie'
  );

  imgAngelWingedYggi = new ImgHolder(
    'public/images/angel_winged_yggi.png',
    'Yggi "aux ailes d\'ange"',
    'Le bébé de la bande',
    'Yggi',
    '21/03/24',
    'Nakornie',
    'Nakornie'
  );

  imgGoldenLeavesYggi = new ImgHolder(
    'public/images/golden_leaves_yggi.png',
    'Yggi "aux feuilles d\'or"',
    'Mignon, timide, empathique et un grand guérisseur',
    'Yggi',
    '21/03/24',
    'Nakornie',
    'Nakornie'
  );

  imgHolders: ImgHolder[] = [
    this.imgCrownedYzzil,
    this.imgDemonicYzzil,
    this.imgBlazingYzzil,
    this.imgFreezingYzzil,
    this.imgCrownedOuros,
    this.imgAutomnalOuros,
    this.imgPunkOuros,
    this.imgGoldenLeavesYggi,
    this.imgAngelWingedYggi,
  ];

  favoriteImgHolder: ImgHolder | null = null;

  // Methodes
  isFavorite(holder: ImgHolder): boolean {
    return this.favoriteImgHolder === holder;
  }

  reorderImgHolders() {
    this.imgHolders.sort((a, b) => {
      if (a === this.favoriteImgHolder) return -1;
      if (b === this.favoriteImgHolder) return 1;
      const scoreA = a.ups - a.downs;
      const scoreB = b.ups - b.downs;
      return scoreB - scoreA;
    });
  }
  

  setFavorite(holder: ImgHolder) {
    if (this.favoriteImgHolder === holder) {
      this.favoriteImgHolder = null;
    } else {
      this.favoriteImgHolder = holder;
    }
  }

}
