import { Routes } from '@angular/router';
import { ImageGalleryComponent } from '../components/image-gallery/components/image-gallery/image-gallery.component';
import { LandingPageComponent } from '../components/landing-page/landing-page.component';
import { SingleImgHolderComponent } from '../components/image-gallery/components/single-img-holder/single-img-holder.component';

export const routes: Routes = [
    { path: '', component: LandingPageComponent},
    { path: 'image-gallery', component: ImageGalleryComponent},
    { path: 'single-img/:id', component: SingleImgHolderComponent }
];
