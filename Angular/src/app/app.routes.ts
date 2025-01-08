import { Routes } from '@angular/router';
import { GalleryComponent } from './gallery/gallery.component';
import { LandingPageComponent } from './landing-page/landing-page.component';

export const routes: Routes = [
    { path: '', component: LandingPageComponent},
    { path: 'gallery', component: GalleryComponent}
];
