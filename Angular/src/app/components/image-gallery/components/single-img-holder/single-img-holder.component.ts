import { Component, Input } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ActivatedRoute, RouterModule } from '@angular/router';

import { ImgHolder } from '../img-holder/img-holder.model';
import { ImgHolderService } from '../../services/img-holder.service';
import { SingleImgHolder } from './single-img-holder.model';

@Component({
  selector: 'app-single-img-holder',
  imports: [
    CommonModule,
    RouterModule
  ],
  templateUrl: './single-img-holder.component.html',
  styleUrl: './single-img-holder.component.scss'
})

export class SingleImgHolderComponent {
  singleImgHolder!: SingleImgHolder;
  isAccordionOpen: boolean = false;

  constructor(
    private route: ActivatedRoute,
    private imgHolderService: ImgHolderService
  ) {}

  ngOnInit(): void {
    const id = this.route.snapshot.paramMap.get('id');
    const imgHolder: ImgHolder | null = this.imgHolderService.getImgHolderById(id);

    if (imgHolder) {
      // Si imgHolder existe, on crée un nouveau SingleImgHolder en passant les données.
      this.singleImgHolder = new SingleImgHolder(
        imgHolder.imgUrl,
        imgHolder.title,
        imgHolder.race,
        imgHolder.history
      );
    }
  }

  toggleAccordion(): void {
    this.isAccordionOpen = !this.isAccordionOpen;
  }
}