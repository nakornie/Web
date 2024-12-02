import { Component } from '@angular/core';
import { ImgHolderComponent } from './img-holder/img-holder.component';

@Component({
  selector: 'app-root',
  standalone: true,
  imports: [ImgHolderComponent],
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent {}
