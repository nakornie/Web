// gallery.component.ts
import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ImgHolder } from './img-holder/img-holder.model';
import { ImgHolderComponent } from './img-holder/img-holder.component'; 
import { ImgHolderService } from '../services/img-holder.service';


@Component({
  selector: 'app-gallery',
  standalone: true,
  imports: [
    CommonModule,
    ImgHolderComponent,
  ],
  templateUrl: './gallery.component.html',
  styleUrls: ['./gallery.component.scss'],
})

export class GalleryComponent {
  constructor(public imgHolderService: ImgHolderService) {}

  // Getters and setters
  get imgHolders(): ImgHolder[] {
    return this.imgHolderService.getImgHolders();
  }

  get favoriteImg(): ImgHolder | null {
    return this.imgHolderService.favoriteImg;
  }

  // Methodes
  onCrowned(holder: ImgHolder): void {
    this.imgHolderService.setFavorite(holder);
  }
}