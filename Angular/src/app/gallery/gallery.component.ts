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
    '21/03/24',
    'Yzzil'
  );

  imgCrownedOuros = new ImgHolder(
    'public/images/crowned_ouros.png',
    'Ouros Couronné',
    'Le grand frère, le plus sage de tous',
    '21/03/24',
    'Ouros'
  );

  imgAngelWingedYggi = new ImgHolder(
    'public/images/angel_winged_yggi.png',
    'Yggi "aux ailes d\'ange"',
    'Le bébé de la bande',
    '21/03/24',
    'Yggi'
  );

  imgHolders: ImgHolder[] = [
    this.imgCrownedYzzil,
    this.imgCrownedOuros,
    this.imgAngelWingedYggi,
  ];
}
