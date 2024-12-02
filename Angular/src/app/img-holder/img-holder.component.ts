import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-img-holder',
  standalone: true, // Indique que ce composant est autonome
  imports: [], // Laissez vide si ce composant n'utilise aucun autre composant
  templateUrl: './img-holder.component.html',
  styleUrls: ['./img-holder.component.scss'] // Correction ici
})
export class ImgHolderComponent implements OnInit{
  imgUrl!: string;
  title!: string;
  description!: string;
  createdAt!: Date;
  likes!: number;

  ngOnInit(): void {
    this.imgUrl = 'public/images/crowned_yzzil.png';
    this.title = 'Izyl Couronnée';
    this.description = 'La grande soeur du groupe';
    this.createdAt = new Date();
    this.likes = 1;
  }
}
