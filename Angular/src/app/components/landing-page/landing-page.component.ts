import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { ImgHolderService } from '../image-gallery/services/img-holder.service';

@Component({
  selector: 'app-landing-page',
  imports: [
    RouterLink
  ],
  templateUrl: './landing-page.component.html',
  styleUrl: './landing-page.component.scss',
})
export class LandingPageComponent {
  constructor(public imgHolderService: ImgHolderService) {}

  get favoriteImg(): string {
    return this.imgHolderService.favoriteImg ?? 'public/images/galleries/black_logo.png';
  }

}
