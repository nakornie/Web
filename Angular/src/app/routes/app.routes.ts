import { Routes } from '@angular/router';
import { ImageGalleryComponent } from '../components/image-gallery/components/image-gallery/image-gallery.component';
import { LandingPageComponent } from '../components/landing-page/landing-page.component';
import { SingleImgHolderComponent } from '../components/image-gallery/components/single-img-holder/single-img-holder.component';
import { GameGalleryComponent } from '../components/games-gallery/components/game-gallery/game-gallery.component';
import { GamePageComponent } from '../components/games-gallery/components/game-page/game-page.component';

export const routes: Routes = [
    { path: '', component: LandingPageComponent},
    { path: 'image-gallery', component: ImageGalleryComponent},
    { path: 'single-img/:id', component: SingleImgHolderComponent },
    { path: 'game-gallery', component: GameGalleryComponent},
    { path: 'game/:gameName', component: GamePageComponent },
];
